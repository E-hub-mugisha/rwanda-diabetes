<form action="{{ isset($testimonial) ? route('admin.testimonials.update',$testimonial->id) : route('admin.testimonials.store') }}"
      method="POST" enctype="multipart/form-data">

    @csrf
    @if(isset($testimonial)) @method('PUT') @endif

    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control"
               value="{{ old('name', $testimonial->name ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label>Title / Role</label>
        <input type="text" name="title" class="form-control"
               value="{{ old('title', $testimonial->title ?? '') }}">
    </div>

    <div class="mb-3">
        <label>Photo</label>
        <input type="file" name="photo" class="form-control">
        @if(isset($testimonial) && $testimonial->photo)
            <img src="{{ asset('storage/'.$testimonial->photo) }}" width="80" class="mt-2 rounded">
        @endif
    </div>

    <div class="mb-3">
        <label>Story / Testimonial</label>
        <textarea name="story" class="form-control" rows="6" required>{{ old('story', $testimonial->story ?? '') }}</textarea>
    </div>

    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" name="is_active"
               {{ old('is_active', $testimonial->is_active ?? true) ? 'checked' : '' }}>
        <label class="form-check-label">Active</label>
    </div>

    <button class="btn btn-success">Save</button>
</form>
