<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();



Route::post('push', 'AttendanceDeviceApi\LogController@push');



Route::group(['prefix' => 'password-reset', 'namespace' => 'Auth', 'as' => 'password-reset.'], function () {
    Route::post('send-email', 'LoginController@sendPasswordResetEmail')->name('send-email');
    Route::get('verify-token', 'LoginController@verifyResetPasswordToken')->name('verify-token');
    Route::post('reset-password', 'LoginController@updateUserPassword')->name('update-password');
});


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');


    Route::get('user/password/edit', 'UserController@changePassword')->name('user.password.edit');
    Route::post('user/password/edit', 'UserController@updatePassword')->name('user.password.update');
    // only access for super admin which id is 1
    Route::get('user/change/password/{id}', 'UserController@AdminChangePassword')->name('admin.edit.password');
    Route::post('user/change/password', 'UserController@AdminUpdatePassword')->name('admin.update.password');

    Route::get('db-backup', 'DatabaseBackupController@db_backup')->name('db-backup');
    Route::resource('group', 'GroupController');
    Route::get('/print-groups', 'GroupController@printGroups')->name('print.groups');
    Route::resource('company', 'CompanyController');


    Route::resource('id-card-settings', 'IdCardSettingController');

    Route::resource('currency-conversions', 'CurrencyConversionController');



    Route::resource('system-setting', 'SystemSettingController');


    Route::group(['prefix' => 'global-setting'], function () {
        Route::resource('suppliers', 'SupplierController');
        Route::resource('supplier-types', 'SupplierTypeController');
    });






    // user permission routes [akash]
    // Route::group(['prefix' => 'setting'], function () {
    //     Route::resource('parent-permissions', 'ParentPermissionController');
    //     Route::resource('modules', 'ModuleController');
    //     Route::get('active-deactive-module/{module}', 'ModuleController@activeDeactive')->name('active.deactive.module');
    //     Route::resource('submodules', 'SubmoduleController');
    //     Route::resource('permissions', 'PermissionController');
    //     Route::resource('permission-access', 'UserPermissionController');
    //     Route::get('permission-access/create/{id}', 'UserPermissionController@index')->name('load.existing.users.permission');
    //     Route::get('select/employee/list', 'UserPermissionController@employee_list')->name('employee_list');
    //     Route::get('permitted/employee/list', 'UserPermissionController@permittedEmployeeList')->name('permitted.employee.list');

    //     Route::get('permission-access-employee', 'UserPermissionController@employeePermission')->name('permission-access.employee');
    //     Route::post('permission-access-employee', 'UserPermissionController@employeePermissionStore')->name('permission-access.employee.store');
    // });





    // end inventory module

    // smart soft payment
    Route::group(['middleware' => 'super-admin'], function () {
        Route::get('smart-soft-payments/alert','SmartSoftPaymentScheduleController@ajaxAlert')->name('smart-soft-payments.alert');
        Route::resource('smart-soft-payments','SmartSoftPaymentScheduleController');
    });

    Route::post('payment/feedback', 'SmartSoftPaymentScheduleController@feedback')->name('smart-soft-payments.feedback');


    Route::get('add-user', 'UserController@addUserFromEmployee');



    /// dashboard data load related routes
    Route::get('get-commercial-dashboard-data', 'HomeController@getCommercialDashboardData')->name('get-commercial-dashboard-data');
    Route::get('get-inventory-dashboard-data',  'HomeController@getInventoryDashboardData')->name('get-inventory-dashboard-data');
    Route::get('get-payment-dashboard-data',    'HomeController@getPaymentDashboardData')->name('get-payment-dashboard-data');


    Route::resource('category', 'CategoryController');
    Route::resource('food', 'FoodController');
    Route::get('/design', 'CategoryController@design');

    Route::get('/fetch_item/{code}', 'FoodController@fetch_item')->name('fetch_item');

    Route::post('/submit_item', 'FoodController@submit_item')->name('submit_item');

});
