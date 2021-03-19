<?php
use App\slide;
use App\catagory;

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

Route::get('/', function () {
	$slides = slide::where('status' , 'active')->get();
	$catagory = catagory::orderBy('id','asc')->get();
	 //return response()->json($slides);
    return view('welcome',compact('slides','catagory'));
});
// Route::get('/', 'slidersController@index');
Auth::routes();
Route::get('/home', function () {
	$slides = slide ::where('status' , 'active')->get();
	$catagory = catagory::orderBy('id','asc')->get();
	 //return response()->json($slides);
    return view('welcome',compact('slides','catagory'));
});
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/changepassword', 'HomeController@changepassword')->name('changepassword');
Route::post('/passwordchange', 'HomeController@passwordreset')->name('password.change');
Route::get('/admin', 'AdminController@addproduct');
Route::post('/adminadd', 'AdminController@addall');
Route::get('/adminManageProduct', 'AdminController@adminManageProduct');
Route::get('/adminAddProduct', 'AdminController@adminAddProduct');
Route::post('/adminProductUpdate/{id}', 'AdminController@adminProductUpdate');
Route::get('/adminProductView/{id}', 'AdminController@adminProductView');
Route::post('/productdelete/{id}', 'AdminController@adminProductDelete');
Route::get('/adminProductShow', 'AdminController@adminProductShow');



//admin product update








/*
|--------------------------------------------------------------------------
| Catagory routes
|--------------------------------------------------------------------------
|All Catagory route define here
|
*/

Route::get('/Catagory', 'CatagoryController@index');
Route::get('/Catagoryadd', 'CatagoryController@Catagoryadd');
Route::post('/CatagoryAddDatabase', 'CatagoryController@CatagoryAddDatabase');
Route::get('/catagoryview/{id}', 'CatagoryController@catagoryview');
Route::post('/catagoryUpdate/{id}', 'CatagoryController@catagoryUpdate');
Route::get('/catagoryDelete/{id}','CatagoryController@catagoryDelete');





/*
|--------------------------------------------------------------------------
| product show routes
|--------------------------------------------------------------------------
|All Catagory route define here
|
*/

Route::get('/product', 'ProductController@index');
Route::post('/productSingle/{id}','ProductController@showSingleProduct');



/*
|--------------------------------------------------------------------------
| Division routes
|--------------------------------------------------------------------------
|All Catagory route define here
|
*/
Route::get('/adminManageDivision', 'divisionController@index');
Route::get('/adminAddDivision', 'divisionController@addDivision');
Route::post('/divisionAdd', 'divisionController@addall');
Route::get('/adminShowDivision', 'divisionController@divisionShow');
Route::get('/adminUpdateDivision/{id}', 'divisionController@divisionUpdate');
Route::post('/adminEditedDivision/{id}', 'divisionController@divisionEdited');
Route::get('/adminDeleteDivision/{id}','divisionController@divisionDelete');





/*
|--------------------------------------------------------------------------
| District(admin) routes
|--------------------------------------------------------------------------
|All District(admin) route define here
|
*/


//district all 
Route::get('/adminManageDistrict', 'districtController@index');
Route::get('/adminAddDistrict', 'districtController@addDistrict');
Route::post('/districtAdd', 'districtController@addall');
Route::get('/adminShowDistrict', 'districtController@districtShow');
Route::get('/adminUpdateDistrict/{id}', 'districtController@districtUpdate');
Route::post('/adminEditedDistrict/{id}', 'districtController@districtEdited');
Route::get('/adminDeleteDistrict/{id}','districtController@districtDelete');





/*
|--------------------------------------------------------------------------
| login(admin) routes
|--------------------------------------------------------------------------
|All login(admin) route define here
|
*/

Route::get('/adminLog', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/adminLogPost', 'Auth\Admin\LoginController@login');







Route::get('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.request');
Route::post(' admin/password/resetpost', 'Auth\ForgotPasswordController@SendsPasswordResetEmails')->name('admin.email');





Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('my.request');
/*
/*
|--------------------------------------------------------------------------
| admin(slider) routes
|--------------------------------------------------------------------------
|All admin(slider) route define here
|
*/
Route::get('/adminManageSlider', 'slidersController@indexs');
Route::post('/adminManageSlider', 'slidersController@indexs');
Route::get('/adminAddSlider', 'slidersController@adminAddSlider');
Route::post('/adminAddSlider', 'slidersController@adminAddSlider');
Route::get('/adminShowSlider', 'slidersController@adminShowSlider');
Route::get('/adminEditedSlider/{id}', 'slidersController@slidesView');
Route::post('/slidesEdit/{id}', 'slidersController@slidesEdit');
Route::get('/adminDeleteSlider/{id}','slidersController@sliderDelete');
Route::post('/slidesAddToDatabase', 'slidersController@slidesAddToDatabase');








Route::post('cart', 'cartController@store');
Route::get('cartAdd', 'cartController@showCart');
Route::post('cartUpdate/{id}', 'cartController@update');
Route::post('cartDelete/{id}', 'cartController@delete');




Route::get('/dash', 'dashController@dashboar')->name('dash');
Route::get('/profileShow', 'profileController@profile');
Route::post('/profileEdited/{id}', 'profileController@profileEdited');


Route::get('/adminManageOrder', 'ordersController@index');
Route::get('/adminShowOrder', 'ordersController@showOrder');
Route::get('/adminViewOrder/{id}', 'ordersController@orderView');
Route::post('/ordershow/{id}', 'ordersController@orderShow');
Route::get('/ordershow/{id}', 'ordersController@orderShow');
Route::get('/orderDelete/{id}','ordersController@orderDelete');







Route::post('/slidesAdd', 'slidersController@slidesAdd');

Route::get('/s', 'slidersController@index');






/*
|--------------------------------------------------------------------------
| catagory routes
|--------------------------------------------------------------------------
|All catagory route define here
|
*/

Route::get('/allCatagory', 'CatagoryController@allCatagory');
Route::post('/allProduct/{id}', 'CatagoryController@showAllProductByCatagory');




Route::post('review/{id}', 'ReviewController@review');
Route::post('addReview/{id}' ,'ReviewController@addReview' );







/*
|--------------------------------------------------------------------------
| Pdf routes
|--------------------------------------------------------------------------
|All catagory route define here
|
*/
Route::get('PDF/{id}', 'ordersController@pdf');



/*
|--------------------------------------------------------------------------
| Pdf routes
|--------------------------------------------------------------------------
|All catagory route define here
|
*/


Route::get( 'token/{token}' , 'VarificationController@verify')->name('user.verification');
