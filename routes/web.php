<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\LearningMaterialController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/programs', [PageController::class, 'programs'])->name('programs');
Route::get('/impact', [PageController::class, 'impact'])->name('impact');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/news', [PageController::class, 'news'])->name('news.index');
Route::get('/news/details/{id}', [PageController::class, 'newsDetail'])->name('news.detail');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/values', [PageController::class, 'values'])->name('values');
Route::get('/history', [PageController::class, 'history'])->name('history');
Route::get('/partners', [PageController::class, 'partners'])->name('partners');
Route::get('/success_stories', [PageController::class, 'successStories'])->name('success.stories');
Route::get('/stories', [PageController::class, 'story'])->name('stories.index');
Route::get('/stories/{slug}', [PageController::class, 'showStory'])->name('stories.show');
Route::get('/partner_with_us', [PageController::class, 'PartnerWithUs'])->name('partner_with_us');
Route::get('/our-team', [PageController::class, 'TeamMember'])->name('our-team');
Route::get('/team/{slug}', [PageController::class, 'showTeam'])->name('team.show');
Route::post('/partner-request', [PageController::class, 'storeRequest'])
    ->name('partners.store.request');
Route::post('/donate/pay', [DonationController::class, 'pay'])->name('donate.pay');
Route::get('/donate/flutterwave/callback', [DonationController::class, 'flutterwaveCallback'])->name('donate.flutterwave.callback');
Route::get('/donate/thank-you', function() {
    return view('donate.thank-you');
})->name('donate.thankyou');

Route::get('/learning-materials', [LearningMaterialController::class, 'index'])->name('learning.index');
Route::get('/learning-materials/{slug}', [LearningMaterialController::class, 'show'])->name('learning.show');

Route::get('/materials/category/{slug}', [LearningMaterialController::class, 'category'])->name('materials.category');
Route::get('/materials/{slug}', [LearningMaterialController::class, 'show'])->name('materials.show');

// Programs listing by category (optional slug)
Route::get('/programs', [PageController::class, 'programs'])->name('programs.index');
Route::get('/programs/category/{slug}', [PageController::class, 'categoryPrograms'])->name('programs.category');

// Single program detail
Route::get('/programs/{slug}', [PageController::class, 'showPrograms'])->name('programs.show');
Route::get('/articles', [PageController::class, 'articles'])->name('articles.index');
Route::get('/articles/details/{id}', [PageController::class, 'articlesDetail'])->name('articles.detail');

Route::get('/media', [PageController::class, 'media'])->name('media.index');
Route::get('/stories', [PageController::class, 'stories'])->name('stories.index');

// ----------------------
// RESEARCH PAGES
// ----------------------
Route::prefix('research')->name('research.')->group(function () {
    Route::get('/', [PageController::class, 'research'])->name('index');
    Route::get('/category/{slug}', [PageController::class, 'categoryResearch'])->name('category');
    Route::get('/{slug}', [PageController::class, 'showResearch'])->name('show');
});

// ----------------------
// DOWNLOAD PAGES
// ----------------------
Route::prefix('downloads')->name('downloads.')->group(function () {
    Route::get('/', [PageController::class, 'indexResearch'])->name('index');
    Route::get('/category/{slug}', [PageController::class, 'categoryResearch'])->name('category');
    Route::get('/{slug}', [PageController::class, 'showResearch'])->name('show');
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/posts', [PostController::class, 'adminIndex'])->name('admin.posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('admin.posts.destroy');

    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

    Route::get('/programs', [ProgramController::class, 'index'])->name('admin.programs.index');
    Route::get('/programs/create', [ProgramController::class, 'create'])->name('admin.programs.create');
    Route::post('/programs', [ProgramController::class, 'store'])->name('admin.programs.store');
    Route::get('/programs/{program}/edit', [ProgramController::class, 'edit'])->name('admin.programs.edit');
    Route::put('/programs/{program}', [ProgramController::class, 'update'])->name('admin.programs.update');
    Route::delete('/programs/{program}', [ProgramController::class, 'destroy'])->name('admin.programs.destroy');

    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('admin.testimonials.index');
    Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('admin.testimonials.create');
    Route::post('/testimonials', [TestimonialController::class, 'store'])->name('admin.testimonials.store');
    Route::get('/testimonials/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('admin.testimonials.edit');
    Route::put('/testimonials/{testimonial}', [TestimonialController::class, 'update'])->name('admin.testimonials.update');
    Route::delete('/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('admin.testimonials.destroy');

    Route::get('/articles', [ArticleController::class, 'index'])->name('admin.articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('admin.articles.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('admin.articles.store');
    Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('admin.articles.edit');
    Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('admin.articles.update');
    Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('admin.articles.destroy');

    Route::get('/stories', [StoryController::class, 'index'])->name('admin.stories.index');
    Route::get('/stories/create', [StoryController::class, 'create'])->name('admin.stories.create');
    Route::post('/stories', [StoryController::class, 'store'])->name('admin.stories.store');
    Route::get('/stories/{story}/edit', [StoryController::class, 'edit'])->name('admin.stories.edit');
    Route::put('/stories/{story}', [StoryController::class, 'update'])->name('admin.stories.update');
    Route::delete('/stories/{story}', [StoryController::class, 'destroy'])->name('admin.stories.destroy');

    Route::resource('team', TeamController::class)
            ->names('admin.team');
    
});


require __DIR__ . '/auth.php';
