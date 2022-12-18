<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SuccessHistoryController;
use App\Http\Controllers\Theme\DashboardController;

Route::get('/clear',function(){
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    return 'Cache is cleared';
});

Route::get('/pass',[LoginController::class,'pass'])->name('pass');

Route::group(['prefix' => 'admin'],function(){

    Route::get('/home',[HomeController::class,'index']);
      //----- Admin Auth -----
      Route::get('/login',[LoginController::class,'adminLoginIndex'])->name('admin.login.form');
      Route::post('/login',[LoginController::class,'adminLogin'])->name('adminLogin');

   Route::group([
      'middleware' => ['admin_auth']
  ],function(){
   Route::get('dashboard',[DashboardController::class,'dashboard']);
   Route::get('/logout',[LoginController::class,'adminLogout']);

   Route::get('/success',[SuccessHistoryController::class,'indexSuccess'])->name('indexSuccess');
   Route::get('/add/success',[SuccessHistoryController::class,'indexAddSuccess'])->name('indexAddSuccess');
   Route::post('success/store', [SuccessHistoryController::class,'storeSuccess'])->name('storeSuccess');
   Route::get('success/edit/{id}',[SuccessHistoryController::class,'indexEditSuccess']);
   Route::post('success/update', [SuccessHistoryController::class,'updateSuccess'])->name('updateSuccess');
   Route::get('success/delete/{id}', [SuccessHistoryController::class,'successDelete'])->name('deleteSuccess');


   Route::get('/success-attribute',[SuccessHistoryController::class,'indexSuccessAttr'])->name('indexSuccessAttr');
   Route::get('/add/success-attribute',[SuccessHistoryController::class,'indexAddSuccessAttribute'])->name('indexAddSuccessAttribute');
   Route::post('success-attribute/store', [SuccessHistoryController::class,'storeSuccessAttr'])->name('storeSuccessAttr');
   Route::get('success-attribute/delete/{id}', [SuccessHistoryController::class,'successAttrDelete'])->name('successAttrDelete');

    //Brand
    Route::get('/brand', [BrandController::class, 'index'])->name('indexBrand');
    Route::get('/brand/add', [BrandController::class, 'indexAddBrand'])->name('indexAddBrand');
    Route::post('/brand/store', [BrandController::class, 'storeBrand'])->name('storeBrand');
    Route::get('/brand/edit/{id}', [BrandController::class, 'indexEditBrand']);
    Route::post('/brand/update', [BrandController::class, 'updateBrand'])->name('updateBrand');
    Route::get('/brand/delete/{id}', [BrandController::class, 'brandDelete'])->name('deleteBrand');

});
});


Route::prefix('theme')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('theme.dashboard');
});

// home------------------------
Route::get('/', [PagesController::class, 'home'])->name('frontend.home');
Route::get('/pokkt', [PagesController::class, 'pokkt'])->name('frontend.pokkt');
Route::get('/imo', [PagesController::class, 'imo'])->name('frontend.imo');
Route::get('/likee', [PagesController::class, 'likee'])->name('frontend.likee');
Route::get('/mcanvas', [PagesController::class, 'mcanvas'])->name('frontend.mcanvas');
Route::get('/appnext', [PagesController::class, 'appnext'])->name('frontend.appnext');
Route::get('/gupshup', [PagesController::class, 'gupshup'])->name('frontend.gupshup');
Route::get('/sizmek', [PagesController::class, 'sizmek'])->name('frontend.sizmek');
Route::get('/espncricinfo', [PagesController::class, 'espncricinfo'])->name('frontend.espncricinfo');
Route::get('/influencermarketing', [PagesController::class, 'influencermarketing'])->name('frontend.influencermarketing');
Route::get('/yahoo', [PagesController::class, 'yahoo'])->name('frontend.yahoo');
Route::get('/miq', [PagesController::class, 'miq'])->name('frontend.miq');


Route::get('/ss_pokkt/{empid}', [PagesController::class, 'ss_pokkt'])->name('ss_pokkt');



Route::get('/test',[SuccessHistoryController::class,'test']);
