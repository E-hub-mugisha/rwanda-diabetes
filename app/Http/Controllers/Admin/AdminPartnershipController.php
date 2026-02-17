<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\PartnershipRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminPartnershipController extends Controller
{
    /**
     * Show all partnership requests.
     */
    public function index()
    {
        $requests = PartnershipRequest::orderBy('created_at', 'desc')->get();
        return view('admin.partnership.index', compact('requests'));
    }

    /**
     * Approve a partnership request & create partner.
     */
    public function approve($id)
    {
        $request = PartnershipRequest::findOrFail($id);

        $request->update(['status' => 'approved']);

        // Create or update partner
        Partner::updateOrCreate(
            ['email' => $request->email], // unique key
            [
                'name'        => $request->organization,
                'slug'        => Str::slug($request->organization),
                'logo'        => 'default/logo.png',
                'website'     => null,
                'email'       => $request->email,
                'phone'       => $request->phone,
                'type'        => $request->type,
                'description' => $request->message,
                'status'      => 'active',
            ]
        );

        return redirect()->back()->with('success', 'Partnership approved and partner added.');
    }

    /**
     * Reject partnership request.
     */
    public function reject($id)
    {
        $request = PartnershipRequest::findOrFail($id);
        $request->update(['status' => 'rejected']);

        return redirect()->back()->with('success', 'Partnership request rejected.');
    }

    public function indexPartner()
    {
        $partners = Partner::latest()->get();
        return view('admin.partnership.partners', compact('partners'));
    }

    public function storePartner(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required',
            'logo'        => 'nullable|image',
            'website'     => 'nullable|url',
            'email'       => 'nullable|email',
            'phone'       => 'nullable',
            'description' => 'nullable',
            'type' => 'required|in:hospital,university,ngo,corporate,government,media,other',
            'status'      => 'nullable',
        ]);

        // Upload logo
        if ($image = $request->file('logo')) {
            $destinationPath = 'image/partners/';
            $fileName  = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            // Create folder if it doesn't exist
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Move image to public folder
            $image->move($destinationPath, $fileName);

            // Save relative path in DB
            $validated['logo'] = "$fileName";
        }

        $validated['slug'] = Str::slug($request->name);

        Partner::create($validated);

        return back()->with('success', 'Partner added successfully');
    }

    public function updatePartner(Request $request, Partner $partner)
    {
        $validated = $request->validate([
            'name'        => 'required',
            'logo'        => 'nullable|image',
            'website'     => 'nullable|url',
            'email'       => 'nullable|email',
            'phone'       => 'nullable',
            'description' => 'nullable',
            'type' => 'required|in:hospital,university,ngo,corporate,government,media,other',
            'status'      => 'nullable',
        ]);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('partners', 'public');
        }

        $validated['slug'] = Str::slug($request->name);

        $partner->update($validated);

        return back()->with('success', 'Partner updated successfully');
    }

    public function destroyPartner(Partner $partner)
    {
        $partner->delete();
        return back()->with('success', 'Partner deleted successfully');
    }
}
