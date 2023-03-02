<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\HotelController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\AboutUsController;
use App\Http\Controllers\Api\DivisionController;
use App\Http\Controllers\Api\EmergencyController;
use App\Http\Controllers\Api\RestaurantController;
use App\Http\Controllers\Api\HelpSupportController;
use App\Http\Controllers\Api\TermsServiceController;
use App\Http\Controllers\Api\PrivacyPolicyController;
use App\Http\Controllers\Api\ClaimedDiscountController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/user',[AuthController::class,'user'])->middleware('auth:api');
//Login Routes
Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);

//Division Routes
Route::get('/all-division',[DivisionController::class,'index']);

//All hotel Display
Route::get('/all-hotel',[HotelController::class,'hotel_list']);
Route::get('/hotel-Room-list',[HotelController::class,'hotel_Room_list']);
//Restaurant Review API Routes
Route::post('/hotel-review/userid={userid}/username={username}/hotelid={hotelid}/hotelname={hotelname}',[ReviewController::class,'hotelStore']);

//All restaurent routes
Route::get('/all-restaurant',[RestaurantController::class,'index']);
Route::get('/all-restaurant-menus',[RestaurantController::class,'menuIndex']);
Route::get('/view-restaurant/{id}',[RestaurantController::class,'viewRestaurant']);
//Restaurant Review API Routes
Route::post('/restaurant-review/userid={userid}/username={username}/restid={restid}/restname={restname}',[ReviewController::class,'store']);

// Emergency Contact
Route::get('/emergency-contact',[EmergencyController::class,'index']);
// About US
Route::get('/about-us',[EmergencyController::class,'aboutUS']);

//Claimd Discount API Routes
Route::post('/claimed-discount/userid={userid}/username={username}/restid={restid}/restname={restname}',[ClaimedDiscountController::class,'store']);

//PrivacyPolicy  
Route::get('/privacy-policy',[PrivacyPolicyController::class,'index']);
//HelpSupport
Route::get('/help-support',[HelpSupportController::class,'index']);
//terms-service
Route::get('/terms-service',[TermsServiceController::class,'index']);