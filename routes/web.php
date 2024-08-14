<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AddticketsController;
use App\Http\Controllers\NewticketController;
use App\Http\Controllers\TicketlistController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AllagentticketsController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\CustomerCareController;
use App\Http\Controllers\ForgotPasswordController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/query', [QueryController::class, 'index']);
Route::post('/query/response', [QueryController::class, 'getResponse'])->name('query.getResponse');

Route::get('/', [CustomAuthController::class, 'dashboard']); 
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// reset password
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::resource('newticket', NewticketController::class,);
Route::resource('addticket', AddticketsController::class);
Route::resource('ticketlist', TicketlistController::class);
Route::resource('notification', NotificationController::class,);
Route::resource('query', QueryController::class,);
Route::resource('customercare', CustomerCareController::class,);

//agents routes
Route::resource('agent', AgentController::class);
Route::resource('alltickets', AllagentticketsController::class);

use Illuminate\Support\Facades\Http;


// Define the route to check the API key
Route::get('/check-api-key', function () {
    $response = Http::withToken(env('OPENAI_API_KEY'))
                    ->post('https://api.openai.com/v1/engines/gpt-4/completions', [
                        'prompt' => 'Testing API key.',
                        'max_tokens' => 5,
                    ]);

    return view('api_check', ['response' => $response->json()]);
});