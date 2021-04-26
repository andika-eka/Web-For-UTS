<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\sewaController;
use App\Http\Controllers\BayarController;

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

Route::get('/', [PagesController::class, 'home']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboardx', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard',[PagesController::class, 'dashboard']);
Route::resource('sewa', SewaController::class);
Route::resource('pembayaran', BayarController::class);


/*
PS D:\PHP\webUTS> php artisan route:list
+--------+-----------+----------------------------------+---------------------------------+---------------------------------------------------------------------------------+-----------------------------------------------------------+
| Domain | Method    | URI                              | Name                            | Action                                                                          | Middleware                                                |
+--------+-----------+----------------------------------+---------------------------------+---------------------------------------------------------------------------------+-----------------------------------------------------------+
|        | GET|HEAD  | /                                |                                 | App\Http\Controllers\PagesController@home                                       | web                                                       |
|        | GET|HEAD  | api/user                         |                                 | Closure                                                                         | api                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\Authenticate:sanctum                  |
|        | GET|HEAD  | dashboard                        |                                 | App\Http\Controllers\PagesController@dashboard                                  | web                                                       |
|        | GET|HEAD  | dashboardx                       | dashboard                       | Closure                                                                         | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\Authenticate:sanctum                  |
|        |           |                                  |                                 |                                                                                 | Illuminate\Auth\Middleware\EnsureEmailIsVerified          |
|        | GET|HEAD  | forgot-password                  | password.request                | Laravel\Fortify\Http\Controllers\PasswordResetLinkController@create             | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\RedirectIfAuthenticated               |
|        | POST      | forgot-password                  | password.email                  | Laravel\Fortify\Http\Controllers\PasswordResetLinkController@store              | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\RedirectIfAuthenticated               |
|        | GET|HEAD  | livewire/livewire.js             |                                 | Livewire\Controllers\LivewireJavaScriptAssets@source                            |                                                           |
|        | GET|HEAD  | livewire/livewire.js.map         |                                 | Livewire\Controllers\LivewireJavaScriptAssets@maps                              |                                                           |
|        | POST      | livewire/message/{name}          | livewire.message                | Livewire\Controllers\HttpConnectionHandler                                      | web                                                       |
|        | GET|HEAD  | livewire/preview-file/{filename} | livewire.preview-file           | Livewire\Controllers\FilePreviewHandler@handle                                  | web                                                       |
|        | POST      | livewire/upload-file             | livewire.upload-file            | Livewire\Controllers\FileUploadHandler@handle                                   | web                                                       |
|        |           |                                  |                                 |                                                                                 | Illuminate\Routing\Middleware\ThrottleRequests:60,1       |
|        | GET|HEAD  | login                            | login                           | Laravel\Fortify\Http\Controllers\AuthenticatedSessionController@create          | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\RedirectIfAuthenticated               |
|        | POST      | login                            |                                 | Laravel\Fortify\Http\Controllers\AuthenticatedSessionController@store           | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\RedirectIfAuthenticated               |
|        |           |                                  |                                 |                                                                                 | Illuminate\Routing\Middleware\ThrottleRequests:login      |
|        | POST      | logout                           | logout                          | Laravel\Fortify\Http\Controllers\AuthenticatedSessionController@destroy         | web                                                       |
|        | GET|HEAD  | pembayaran                       | pembayaran.index                | App\Http\Controllers\BayarController@index                                      | web                                                       |
|        | POST      | pembayaran                       | pembayaran.store                | App\Http\Controllers\BayarController@store                                      | web                                                       |
|        | GET|HEAD  | pembayaran/create                | pembayaran.create               | App\Http\Controllers\BayarController@create                                     | web                                                       |
|        | GET|HEAD  | pembayaran/{pembayaran}          | pembayaran.show                 | App\Http\Controllers\BayarController@show                                       | web                                                       |
|        | PUT|PATCH | pembayaran/{pembayaran}          | pembayaran.update               | App\Http\Controllers\BayarController@update                                     | web                                                       |
|        | DELETE    | pembayaran/{pembayaran}          | pembayaran.destroy              | App\Http\Controllers\BayarController@destroy                                    | web                                                       |
|        | GET|HEAD  | pembayaran/{pembayaran}/edit     | pembayaran.edit                 | App\Http\Controllers\BayarController@edit                                       | web                                                       |
|        | GET|HEAD  | register                         | register                        | Laravel\Fortify\Http\Controllers\RegisteredUserController@create                | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\RedirectIfAuthenticated               |
|        | POST      | register                         |                                 | Laravel\Fortify\Http\Controllers\RegisteredUserController@store                 | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\RedirectIfAuthenticated               |
|        | POST      | reset-password                   | password.update                 | Laravel\Fortify\Http\Controllers\NewPasswordController@store                    | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\RedirectIfAuthenticated               |
|        | GET|HEAD  | reset-password/{token}           | password.reset                  | Laravel\Fortify\Http\Controllers\NewPasswordController@create                   | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\RedirectIfAuthenticated               |
|        | GET|HEAD  | sanctum/csrf-cookie              |                                 | Laravel\Sanctum\Http\Controllers\CsrfCookieController@show                      | web                                                       |
|        | GET|HEAD  | sewa                             | sewa.index                      | App\Http\Controllers\sewaController@index                                       | web                                                       |
|        | POST      | sewa                             | sewa.store                      | App\Http\Controllers\sewaController@store                                       | web                                                       |
|        | GET|HEAD  | sewa/create                      | sewa.create                     | App\Http\Controllers\sewaController@create                                      | web                                                       |
|        | GET|HEAD  | sewa/{sewa}                      | sewa.show                       | App\Http\Controllers\sewaController@show                                        | web                                                       |
|        | PUT|PATCH | sewa/{sewa}                      | sewa.update                     | App\Http\Controllers\sewaController@update                                      | web                                                       |
|        | DELETE    | sewa/{sewa}                      | sewa.destroy                    | App\Http\Controllers\sewaController@destroy                                     | web                                                       |
|        | GET|HEAD  | sewa/{sewa}/edit                 | sewa.edit                       | App\Http\Controllers\sewaController@edit                                        | web                                                       |
|        | GET|HEAD  | two-factor-challenge             | two-factor.login                | Laravel\Fortify\Http\Controllers\TwoFactorAuthenticatedSessionController@create | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\RedirectIfAuthenticated               |
|        | POST      | two-factor-challenge             |                                 | Laravel\Fortify\Http\Controllers\TwoFactorAuthenticatedSessionController@store  | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\RedirectIfAuthenticated               |
|        |           |                                  |                                 |                                                                                 | Illuminate\Routing\Middleware\ThrottleRequests:two-factor |
|        | GET|HEAD  | user/confirm-password            | password.confirm                | Laravel\Fortify\Http\Controllers\ConfirmablePasswordController@show             | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\Authenticate                          |
|        | POST      | user/confirm-password            |                                 | Laravel\Fortify\Http\Controllers\ConfirmablePasswordController@store            | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\Authenticate                          |
|        | GET|HEAD  | user/confirmed-password-status   | password.confirmation           | Laravel\Fortify\Http\Controllers\ConfirmedPasswordStatusController@show         | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\Authenticate                          |
|        | PUT       | user/password                    | user-password.update            | Laravel\Fortify\Http\Controllers\PasswordController@update                      | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\Authenticate                          |
|        | GET|HEAD  | user/profile                     | profile.show                    | Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController@show          | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\Authenticate                          |
|        |           |                                  |                                 |                                                                                 | Illuminate\Auth\Middleware\EnsureEmailIsVerified          |
|        | PUT       | user/profile-information         | user-profile-information.update | Laravel\Fortify\Http\Controllers\ProfileInformationController@update            | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\Authenticate                          |
|        | POST      | user/two-factor-authentication   |                                 | Laravel\Fortify\Http\Controllers\TwoFactorAuthenticationController@store        | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\Authenticate                          |
|        |           |                                  |                                 |                                                                                 | Illuminate\Auth\Middleware\RequirePassword                |
|        | DELETE    | user/two-factor-authentication   |                                 | Laravel\Fortify\Http\Controllers\TwoFactorAuthenticationController@destroy      | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\Authenticate                          |
|        |           |                                  |                                 |                                                                                 | Illuminate\Auth\Middleware\RequirePassword                |
|        | GET|HEAD  | user/two-factor-qr-code          |                                 | Laravel\Fortify\Http\Controllers\TwoFactorQrCodeController@show                 | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\Authenticate                          |
|        |           |                                  |                                 |                                                                                 | Illuminate\Auth\Middleware\RequirePassword                |
|        | GET|HEAD  | user/two-factor-recovery-codes   |                                 | Laravel\Fortify\Http\Controllers\RecoveryCodeController@index                   | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\Authenticate                          |
|        |           |                                  |                                 |                                                                                 | Illuminate\Auth\Middleware\RequirePassword                |
|        | POST      | user/two-factor-recovery-codes   |                                 | Laravel\Fortify\Http\Controllers\RecoveryCodeController@store                   | web                                                       |
|        |           |                                  |                                 |                                                                                 | App\Http\Middleware\Authenticate                          |
|        |           |                                  |                                 |                                                                                 | Illuminate\Auth\Middleware\RequirePassword                |
+--------+-----------+----------------------------------+---------------------------------+---------------------------------------------------------------------------------+-----------------------------------------------------------+
*/