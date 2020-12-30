<?php
use App\Models\Post;
use App\Models\Home;
use App\Models\Donor;
use App\Models\Event;
use App\Models\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\SeekerController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Frontend\NoticeController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EventController  as Backendevent;
use App\Http\Controllers\Backend\NoticeController  as Backendnotice;
use App\Http\Controllers\Backend\CategoryController as Backendcategory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//welcome home
Route::get('/', [HomeController::class,'welcomeHome'])->name('welcome.home');
Route::get('/aboutus',     [HomeController::class,'aboutus'])->name('about.us');
Route::get('/our/gallery', [HomeController::class,'showgallery'])->name('gallery');
Route::get('/our/contact', [HomeController::class,'showcontact'])->name('contact.info');

//Registration form

Route::get('/registration', [UserController::class,'Showregform'])->name('register.user');
Route::post('/store/reg', [UserController::class,'storefrom'])->name('registration.store');

//user login

Route::get('/user/login/form',[UserController::class,'loginform'])->name('login.user.form');
Route::post('/user/login',[UserController::class,'login'])->name('login.user');

//user profile
Route::get('/user/profile/', [UserController::class,'viewprofile'])->name('profile.view');

//user logout    
    
Route::get('logout',[UserController::class,'logout'])->name('user.logout');

//admin login
Route::get('/login',[HomeController::class,'adminLogin'])->name('login');
Route::post('/login/process',[HomeController::class,'loginProcess'])->name('login.process');

//dashboard 
Route::group(['middleware' => 'auth'],function(){
Route::get('/admin/dashboard', [DashboardController::class,'showdashboard'])->name('home.dashboard');

//backend seeker
Route::get('/seekers/list', [SeekerController::class,'showlist'])->name('seekers.list');
Route::get('/seeker/delete/{id}', [SeekerController::class,'deleteseeker'])->name('seeker.delete');
Route::get('/seeker/view/{id}', [SeekerController::class,'viewseeker'])->name('seeker.view');

// backend donor info 

Route::get('/add/donor', [DonorController::class,'showform'])->name('add.from');
Route::post('/store', [DonorController::class,'storefrom'])->name('donor.store');
Route::get('/donor/list', [DonorController::class,'showlist'])->name('donor.list');
Route::get('/donor/delete/{id}', [DonorController::class,'deletedonor'])->name('donor.delete');
Route::get('/donor/view/{id}', [DonorController::class,'viewdonor'])->name('donor.view');
Route::get('/donor/edit/{id}', [DonorController::class,'editdonor'])->name('donor.edit');
Route::put('/donor/update/{id}', [DonorController::class,'updatedonor'])->name('donor.update');

});

//frontend donor view

Route::group(['namespace'=>'Frontend'],function(){
    Route::get('/category-donors/{id}',[CategoryController::class,'getDonors'])->name('category.donors');
});


// frontend donor profile

Route::get('/donor/profile/{id}', function ($pid) {

    $donor=Donor::find($pid);
    return view('frontend.donor.profile',compact('donor'));
})->name('donor.profile');

//categorybackend

Route::group(['namespace'=>'Backend'],function(){   
Route::get('/add/category', [Backendcategory::class,'showform'])->name('add.category');
Route::post('/store/category', [Backendcategory::class,'storefrom'])->name('category.store');
Route::get('/category/list', [Backendcategory::class,'showlist'])->name('category.list');
Route::get('/category/alldonors/{id}',[Backendcategory::class,'getAllDonors'])->name('category.all.donors');
   
});

// Frontend create post

Route::group(['namespace'=>'Frontend','middleware'=>'auth.user'],function(){
Route::get('/create/post', [PostController::class,'showform'])->name('create.post.from');
Route::post('/store/post', [PostController::class,'storefrom'])->name('post.store');
Route::get('/allposts',    [PostController::class,'getposts'])->name('all.post');

Route::get('/post/detail/{id}', [PostController::class,'viewpostDetails'])->name('post.view.detail');
 });

//Backend post

Route::get('/admin/postlist', [DashboardController::class,'showPost'])->name('dashboard.post');

Route::get('/view/post', function () {
    return view('frontend.viewpost');
})->name('view.post');

//frontend event

Route::group(['namespace'=>'Frontend'],function(){
Route::get('/allevent',[EventController::class,'getEvents'])->name('all.event');
        });

//backend event

Route::group(['namespace'=>'Backend'],function(){
Route::get('/add/event', [Backendevent::class,'showform'])->name('add.event.from');
Route::post('/store/event', [Backendevent::class,'storeform'])->name('store.event');
Route::get('/event/list', [Backendevent::class,'showlist'])->name('event.list');
Route::get('/event/delete/{id}', [Backendevent::class,'deleteEvent'])->name('event.delete');
Route::get('/event/view/{id}', [Backendevent::class,'viewevent'])->name('event.view');
Route::get('/event/edit/{id}', [Backendevent::class,'editevent'])->name('event.edit');
Route::post('/event/update/{id}', [Backendevent::class,'updatevent'])->name('event.update');
    
    });
//frontend notice
Route::group(['namespace'=>'Frontend'],function(){
Route::get('/allnotice',[NoticeController::class,'getNotices'])->name('all.notice');
        });

//backend notice
Route::group(['namespace'=>'Backend'],function(){
Route::get('/add/notice', [Backendnotice::class,'showform'])->name('add.notice.form');
Route::post('/store/notice', [Backendnotice::class,'storeform'])->name('store.notice');
Route::get('/notice/list', [Backendnotice::class,'showlist'])->name('notice.list');
    });






