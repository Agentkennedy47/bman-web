<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeSlideController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BitcoinController;
use App\Http\Controllers\USDTController;
use App\Http\Controllers\PerfectmoneyController;
use App\Http\Controllers\EthereumController;
use App\Http\Controllers\BitcoincashController;
use App\Http\Controllers\BNBController;
use App\Http\Controllers\MTNController;
use App\Http\Controllers\AirtelController;
use App\Http\Controllers\GloController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\FirstnumberController;
use App\Http\Controllers\SecondnumberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home route frontend
Route::get('/', function () {
    return view('frontend.index');
});

// Ecurrency route frontend
Route::get('/ecurrency', function () {
    return view('frontend.ecurrency');
});

// Ecurrency route frontend
Route::get('/data_plans', function () {
    return view('frontend.data_plans');
});

// Route to admin dashboard
Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// All admin profile route
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');
    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
});

// Slide route admin
Route::controller(HomeSlideController::class)->group(function () {
    Route::get('/all/slides', 'AllSlides')->name('all.slides');
    Route::get('/add/slides', 'AddSlides')->name('add.slides');
    Route::post('/store/slides', 'StoreSlides')->name('store.slides');
    Route::get('/edit/slide/{id}', 'EditSlides')->name('edit.slide');
    Route::post('/update/slide', 'UpdateSlides')->name('update.slides');
    Route::get('/delete/slide/{id}', 'DeleteSlides')->name('delete.slide');
});

// About route admin
Route::controller(AboutController::class)->group(function () {
    Route::get('/about/page', 'AboutPage')->name('about.page');
    Route::post('/update/about', 'UpdateAbout')->name('update.about');
});

// Testimonial route admin
Route::controller(TestimonialController::class)->group(function () {
    Route::get('/all/testimonials', 'AllTestimonial')->name('all.testimonials');
    Route::get('/add/testimonials', 'AddTestimonial')->name('add.testimonials');
    Route::post('/store/testimonials', 'StoreTestimonial')->name('store.testimonials');
    Route::get('/edit/testimonial/{id}', 'EditTestimonial')->name('edit.testimonial');
    Route::post('/update/testimonial', 'UpdateTestimonial')->name('update.testimonial');
    Route::get('/delete/testimonial/{id}', 'DeleteTestimonial')->name('delete.testimonial');
});

// Bitcoin route admin
Route::controller(BitcoinController::class)->group(function () {
    Route::get('/add/bitcoin', 'BitcoinPage')->name('add.bitcoin');
    Route::post('/update/bitcoin', 'UpdateBitcoin')->name('update.bitcoin');
});

// USDT route admin
Route::controller(USDTController::class)->group(function () {
    Route::get('/add/usdt', 'USDTPage')->name('add.usdt');
    Route::post('/update/usdt', 'UpdateUSDT')->name('update.usdt');
});

// Perfectmoney route admin
Route::controller(PerfectmoneyController::class)->group(function () {
    Route::get('/add/perfectmoney', 'PerfectmoneyPage')->name('add.perfectmoney');
    Route::post('/update/perfectmoney', 'UpdatePerfectmoney')->name('update.perfectmoney');
});

// Ethereum route admin
Route::controller(EthereumController::class)->group(function () {
    Route::get('/add/ethereum', 'EthereumPage')->name('add.ethereum');
    Route::post('/update/ethereum', 'UpdateEthereum')->name('update.ethereum');
});

// Bitcoin cash route admin
Route::controller(BitcoincashController::class)->group(function () {
    Route::get('/add/bitcoincash', 'BitcoincashPage')->name('add.bitcoincash');
    Route::post('/update/bitcoincash', 'UpdateBitcoincash')->name('update.bitcoincash');
});

// BNB route admin
Route::controller(BNBController::class)->group(function () {
    Route::get('/add/bnb', 'BNBPage')->name('add.bnb');
    Route::post('/update/bnb', 'UpdateBNB')->name('update.bnb');
});

// MTN route admin
Route::controller(MTNController::class)->group(function () {
    Route::get('/all/mtn/data', 'allMTN')->name('all.mtn.data');
    Route::get('/add/mtn/data', 'addMTN')->name('add.mtn.data');
    Route::post('/store/mtn/data', 'storeMTN')->name('store.mtn.data');
    Route::get('/edit/mtn/data/{id}', 'editMTN')->name('edit.mtn.data');
    Route::post('/update/mtn/data', 'updateMTN')->name('update.mtn.data');
    Route::get('/delete/mtn/data/{id}', 'deleteMTN')->name('delete.mtn.data');
});

// Airtel route admin
Route::controller(AirtelController::class)->group(function () {
    Route::get('/all/airtel/data', 'AllAirtel')->name('all.airtel.data');
    Route::get('/add/airtel/data', 'AddAirtel')->name('add.airtel.data');
    Route::post('/store/airtel/data', 'StoreAirtel')->name('store.airtel.data');
    Route::get('/edit/airtel/data/{id}', 'EditAirtel')->name('edit.airtel.data');
    Route::post('/update/airtel/data', 'UpdateAirtel')->name('update.airtel.data');
    Route::get('/delete/airtel/data/{id}', 'DeleteAirtel')->name('delete.airtel.data');
});

// Airtel route admin
Route::controller(GloController::class)->group(function () {
    Route::get('/all/glo/data', 'AllGlo')->name('all.glo.data');
    Route::get('/add/glo/data', 'AddGlo')->name('add.glo.data');
    Route::post('/store/glo/data', 'StoreGlo')->name('store.glo.data');
    Route::get('/edit/glo/data/{id}', 'EditGlo')->name('edit.glo.data');
    Route::post('/update/glo/data', 'UpdateGlo')->name('update.glo.data');
    Route::get('/delete/glo/data/{id}', 'DeleteGlo')->name('delete.glo.data');
});

// 9mobile route admin
Route::controller(MobileController::class)->group(function () {
    Route::get('/all/mobile/data', 'allMobile')->name('all.mobile.data');
    Route::get('/add/mobile/data', 'AddMobile')->name('add.mobile.data');
    Route::post('/store/mobile/data', 'StoreMobile')->name('store.mobile.data');
    Route::get('/edit/mobile/data/{id}', 'EditMobile')->name('edit.mobile.data');
    Route::post('/update/mobile/data', 'UpdateMobile')->name('update.mobile.data');
    Route::get('/delete/mobile/data/{id}', 'DeleteMobile')->name('delete.mobile.data');
});

// Social media route admin
Route::controller(FacebookController::class)->group(function () {
    Route::get('/facebook/link', 'Facebook')->name('facebook.link');
    Route::post('/update/facebook/link', 'UpdateFacebook')->name('update.facebook.link');
});

Route::controller(InstagramController::class)->group(function () {
    Route::get('/instagram/link', 'Instagram')->name('instagram.link');
    Route::post('/update/instagram/link', 'UpdateInstagram')->name('update.instagram.link');
});

Route::controller(TwitterController::class)->group(function () {
    Route::get('/twitter/link', 'Twitter')->name('twitter.link');
    Route::post('/update/twitter/link', 'UpdateTwitter')->name('update.twitter.link');
});

// Contact route admin
Route::controller(FirstnumberController::class)->group(function () {
    Route::get('/first/contact/number', 'FirstContact')->name('first.contact.number');
    Route::post('/update/first/contact/number', 'UpdateFirstContact')->name('update.first.contact.number');
});

Route::controller(SecondnumberController::class)->group(function () {
    Route::get('/second/contact/number', 'SecondContact')->name('second.contact.number');
    Route::post('/update/second/contact/number', 'UpdateSecondContact')->name('update.second.contact.number');
});


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });



require __DIR__.'/auth.php';
