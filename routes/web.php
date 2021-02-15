<?php
use App\Models\User;
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
use App\Http\Controllers\NotificationController;
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

//admin logout 
Route::get('admin/logout',[UserController::class,'adminLogout'])->name('admin.logout');

//dashboard 
Route::group(['middleware' => ['auth','admin']],function(){
Route::get('/admin/dashboard', [DashboardController::class,'showdashboard'])->name('home.dashboard');

});
// Frontend create post

Route::group(['namespace'=>'Frontend','middleware'=>'auth.user'],function(){
    Route::get('/create/post', [PostController::class,'showform'])->name('create.post.from');
    Route::post('/store/post', [PostController::class,'storefrom'])->name('post.store');
    Route::get('/allposts',    [PostController::class,'getposts'])->name('all.post');
    Route::get('/my/posts',    [PostController::class,'getMypost'])->name('my.post');
    Route::get('/post/detail/{id}', [PostController::class,'viewpostDetails'])->name('post.view.detail');
    Route::get('/interseted/{post_id}',[PostController::class,'interseted'])->name('interseted');
    
    //post Notification
    Route::get('/post/notification', [NotificationController::class,'postNotify'])->name('post.notify');
    Route::get('/notification/details/{id}', [NotificationController::class,'notifyDetails'])->name('notification.details');
     });
    
    //Backend post
    Route::group(['middleware' => ['auth','admin']],function(){
        Route::get('/admin/postlist', [DashboardController::class,'showPost'])->name('dashboard.post');
    
        Route::get('/view/post', function () {
            return view('frontend.viewpost');
        })->name('view.post'); 
        //notification backend
        Route::get('/notification/list', [NotificationController::class,'showlist'])->name('notification.list');
        Route::get('/notification/detail/{id}', [NotificationController::class,'notifyDetail'])->name('notification.detail');

    });

//backend seeker
Route::group(['middleware' => ['auth','admin']],function(){
Route::get('/seekers/list', [SeekerController::class,'showlist'])->name('seekers.list');
Route::get('/seeker/delete/{id}', [SeekerController::class,'deleteseeker'])->name('seeker.delete');
Route::get('/seeker/view/{id}', [SeekerController::class,'viewseeker'])->name('seeker.view');


});

// backend donor info 
Route::group(['middleware' => ['auth','admin']],function(){
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
    Route::get('/all/donor/list', [DonorController::class,'showAlldonor'])->name('all.donor.list');
    Route::get('/category-donors/{id}',[CategoryController::class,'getDonors'])->name('category.donors');
});


// frontend donor profile

Route::get('/donor/profile/{id}', function ($pid) {

    $donor=User::find($pid);
    return view('frontend.donor.profile',compact('donor'));
})->name('donor.profile')->middleware("auth.user");

//categorybackend

Route::group(['namespace'=>'Backend','middleware'=>['auth','admin']],function(){   
Route::get('/add/category', [Backendcategory::class,'showform'])->name('add.category');
Route::post('/store/category', [Backendcategory::class,'storefrom'])->name('category.store');
Route::get('/category/list', [Backendcategory::class,'showlist'])->name('category.list');
Route::get('/category/alldonors/{id}',[Backendcategory::class,'getAllDonors'])->name('category.all.donors');
   
});



//frontend event

Route::group(['namespace'=>'Frontend'],function(){
Route::get('/allevent',[EventController::class,'getEvents'])->name('all.event');
Route::get('/viewevent/{id}',[EventController::class,'viewEvent'])->name('view.event');


        });

//backend event

Route::group(['namespace'=>'Backend','middleware'=>['auth','admin']],function(){
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
Route::group(['namespace'=>'Backend','middleware'=>['auth','admin']],function(){
Route::get('/add/notice', [Backendnotice::class,'showform'])->name('add.notice.form');
Route::post('/store/notice', [Backendnotice::class,'storeform'])->name('store.notice');
Route::get('/notice/list', [Backendnotice::class,'showlist'])->name('notice.list');
Route::get('/notice/view/{id}', [Backendnotice::class,'viewNotice'])->name('notice.view');
Route::get('/notice/delete/{id}', [Backendnotice::class,'deleteNotice'])->name('notice.delete');
Route::get('/notice/edit/{id}', [Backendnotice::class,'editNotice'])->name('notice.edit');
Route::post('/notice/update/{id}', [Backendnotice::class,'updateNotice'])->name('notice.update');
    });






