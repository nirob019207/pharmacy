<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenericController;
use App\Http\Controllers\MadicineController;
use App\Http\Controllers\StockController;

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ReciptController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::controller(UserController::class)->group(function(){
    Route::get('all-user','Index')->name('alluser');
    Route::get('add-user','AddUser')->name('adduser');
    Route::post('store-user','StoreUser')->name('store.user');
    Route::get('edituser/{id}','EditUser')->name('edituser');
    Route::get('deleteuser/{id}','DeleteUser')->name('deleteuser');
    Route::post('update-user','UpdateUser')->name('update.user');


});


Route::controller(CompanyController::class)->group(function(){
    Route::get('all-company','Index')->name('allcompany');
    Route::get('add-company','AddCompany')->name('addcompany');
    Route::post('store-company','StoreCompany')->name('store.company');
    Route::get('editcompany/{id}','EditCompany')->name('editcompany');
    Route::get('deletcompany/{id}','DeleteCompany')->name('deletecompany');
    Route::post('update-company','UpdateCompany')->name('update.company');


});
Route::controller(GenericController::class)->group(function(){
    Route::get('all-generic','Index')->name('allgeneric');
    Route::get('add-generic','AddGeneric')->name('addgeneric');
    Route::post('store-generic','StoreGeneric')->name('store.generic');
    Route::get('editgeneric/{id}','EditGeneric')->name('editgeneric');
    Route::get('deletegeneric/{id}','DeleteGeneric')->name('deletegeneric');
    Route::post('update-generic','UpdateGeneric')->name('update.generic');


});
Route::controller(MadicineController::class)->group(function(){
    Route::get('all-medicine','Index')->name('allmedicine');
    Route::get('add-medicine','AddMedicine')->name('addmedicine');
    Route::post('store-medicine','StoreMedicine')->name('store.medicine');
    Route::get('editmedicine/{id}','EditMedicine')->name('editmedicine');
    Route::get('deletemedicine/{id}','DeleteMedicine')->name('deletemedicine');
    Route::post('update-medicine','UpdateMedicine')->name('update.medicine');


    Route::get('/search','Search');


});
Route::controller(StockController::class)->group(function(){
    Route::get('all-stockmedicine','Index')->name('allstockmedicine');
    Route::get('add-stockmedicine','AddStockMedicine')->name('addstockmedicine');
    Route::post('store-stockmedicine','StoreStockMedicine')->name('store.stockmedicine');
    Route::get('editstockmedicine/{id}','EditStockMedicine')->name('editstockmedicine');
    Route::get('deletestockmedicine/{id}','DeleteStockMedicine')->name('deletestockmedicine');
    Route::post('update-stockmedicine','UpdateStockMedicine')->name('update.stockmedicine');


});




Route::controller(InvoiceController::class)->group(function(){
    Route::get('all-invoice', 'Index')->name('allinvoice');
    Route::get('addinvoice/{medicine_id}/{quantity}','addInvoice')->name('addinvoice'); // If the "Index" method exists in the InvoiceController
    // Other invoice-related routes
});



Route::get('/get-price/{id}', [MedicineController::class, 'getPrice']);

Route::get('/redirect', [HomeController::class, 'redirect']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::controller(ReciptController::class)->group(function(){
    Route::get('/billReciept','index');
Route::get('/getPrice/{id}', 'getPrice');

});





require __DIR__.'/auth.php';
