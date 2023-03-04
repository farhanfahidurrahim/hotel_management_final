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
use App\Http\Controllers\Api\ProfileController;

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
Route::get('/all-division',[DivisionController::class,'index'])->middleware('auth:api');

//All hotel Display
Route::get('/all-hotel',[HotelController::class,'hotel_list'])->middleware('auth:api');;
Route::get('/hotel-Room-list',[HotelController::class,'hotel_Room_list'])->middleware('auth:api');
Route::get('/view-hotel/{id}',[RestaurantController::class,'viewHotel'])->middleware('auth:api');
//Restaurant Review API Routes
Route::post('/hotel-review/userid={userid}/username={username}/hotelid={hotelid}/hotelname={hotelname}',[ReviewController::class,'hotelStore'])->middleware('auth:api');

//All restaurent routes
Route::get('/all-restaurant',[RestaurantController::class,'index'])->middleware('auth:api');
Route::get('/all-restaurant-menus',[RestaurantController::class,'menuIndex'])->middleware('auth:api');
Route::get('/view-restaurant/{id}',[RestaurantController::class,'viewRestaurant'])->middleware('auth:api');
//Restaurant Review API Routes
Route::post('/restaurant-review/userid={userid}/username={username}/restid={restid}/restname={restname}',[ReviewController::class,'store'])->middleware('auth:api');

// Emergency Contact
Route::get('/emergency-contact',[EmergencyController::class,'index'])->middleware('auth:api');
// About US
Route::get('/about-us',[EmergencyController::class,'aboutUS'])->middleware('auth:api');

//Claimd Discount API Routes
Route::post('/claimed-discount/userid={userid}/username={username}/restid={restid}/restname={restname}',[ClaimedDiscountController::class,'store'])->middleware('auth:api');

//PrivacyPolicy  
Route::get('/privacy-policy',[PrivacyPolicyController::class,'index'])->middleware('auth:api');
//HelpSupport
Route::get('/help-support',[HelpSupportController::class,'index'])->middleware('auth:api');
//terms-service
Route::get('/terms-service',[TermsServiceController::class,'index'])->middleware('auth:api');

//Profile Api
Route::get('/my-profile/{id}',[ProfileController::class,'myProfile'])->middleware('auth:api');
Route::post('/update-profile/{id}',[ProfileController::class,'updateProfile'])->middleware('auth:api');