<?php

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
    return view('welcome');
});

//Login
Route::get('signin', 'LoginController@login');
Route::post('signin','LoginController@doLogin');

//Admin Logout
Route::get('signout', 'LoginController@signout');

//Admin Forgot password
Route::get('forget', 'LoginController@changePassword');
Route::post('forgetPassword', 'LoginController@forgetPassword');

//Admin Dashboard
Route::get('admin/dashboard', 'Admin\AdminDashboardController@dashboard');

//Admin Manage Employee
Route::get('admin/employeeList', 'Admin\AdminDashboardController@manageEmployee');
Route::get('admin/addEmployee', 'Admin\AdminDashboardController@addEmployee');
Route::post('admin/storeUser', 'Admin\AdminDashboardController@storeUser');
Route::get('admin/deleteUser/{id}', 'Admin\AdminDashboardController@deleteUser');
Route::any('admin/editUser/{id}', 'Admin\AdminDashboardController@editUser');
Route::post('admin/editUser/{id}', 'Admin\AdminDashboardController@updateUser');
Route::any('admin/viewUser/{id}', 'Admin\AdminDashboardController@viewUser');
Route::get('admin/viewList', 'Hod\TripRequestController@adminTriprequest');
Route::post('admin/getDriver', 'Admin\AdminDashboardController@getDriver');
Route::get('notifications', 'Admin\AdminDashboardController@all_notifications');
Route::get('deletenotification/{id}','Admin\AdminDashboardController@deleteNotification');
Route::post('modifynotification', 'Admin\AdminDashboardController@modifynotification');

//Admin Manage Vehicle
Route::get('admin/vehicleList', 'Admin\VehicleController@manageVehicle');
Route::get('admin/addVehicle', 'Admin\VehicleController@addVehicle');
Route::post('admin/storeVehicle', 'Admin\VehicleController@storeVehicle');
Route::get('admin/deleteVehicle/{id}', 'Admin\VehicleController@deleteVehicle');
Route::any('admin/viewVehicle/{id}', 'Admin\VehicleController@viewVehicle');
Route::any('admin/editVehicle/{id}', 'Admin\VehicleController@editVehicle');
Route::post('admin/editVehicle/{id}', 'Admin\VehicleController@updateVehicle');

//Admin Manage Driver
Route::get('admin/driverList', 'Admin\DriverController@manageDriver');
Route::get('admin/addDriver', 'Admin\DriverController@addDriver');
Route::post('admin/storeDriver', 'Admin\DriverController@storeDriver');
Route::any('admin/editDriver/{id}', 'Admin\DriverController@editDriver');
Route::post('admin/editDriver/{id}', 'Admin\DriverController@updateDriver');
Route::any('admin/viewDriver/{id}', 'Admin\DriverController@viewDriver');
Route::get('admin/deleteDriver/{id}', 'Admin\DriverController@deleteDriver');

//Admin Manage Location
Route::get('admin/locationList', 'Admin\LocationController@manageLocation');
Route::get('admin/addLocation', 'Admin\LocationController@addLocation');
Route::post('admin/addLocation', 'Admin\LocationController@storeLocation');
Route::any('admin/editLocation/{id}', 'Admin\LocationController@editLocation');
Route::post('admin/editLocation/{id}', 'Admin\LocationController@updateLocation');
Route::get('admin/deleteLocation/{id}', 'Admin\LocationController@deleteLocation');

//Admin Manage Category
Route::get('admin/categoryList', 'Admin\CategoryController@manageCategory');
Route::get('admin/addCategory', 'Admin\CategoryController@addCategory');
Route::post('admin/addCategory', 'Admin\CategoryController@storeCategory');
Route::any('admin/editCategory/{id}', 'Admin\CategoryController@editCategory');
Route::post('admin/editCategory/{id}', 'Admin\CategoryController@updateCategory');
Route::get('admin/deleteCategory/{id}', 'Admin\CategoryController@deleteCategory');

//Admin Manage Trip
Route::get('admin/TripList', 'Admin\TripController@manageTrip');
Route::get('admin/addtrip', 'Admin\TripController@addTrip');
Route::post('admin/addtrip', 'Admin\TripController@storeTrip');
Route::any('admin/editrip/{id}', 'Admin\TripController@editTrip');
Route::post('admin/editrip/{id}', 'Admin\TripController@updateTrip');
Route::get('admin/deletetrip/{id}', 'Admin\TripController@deleteTrip');
Route::get('admin/triprequest', 'Hod\TripRequestController@requestTrip');
Route::post('admin/triprequest', 'Hod\TripRequestController@storeTriprequest');


//HOD Dashboard
Route::get('hod/dashboard', 'Hod\DashboardController@dashboard');
Route::get('hod/requestList', 'Hod\TripRequestController@manageTriprequest');
Route::get('hod/requestList/triprequest', 'Hod\TripRequestController@requestTrip');
Route::post('hod/requestList/triprequest', 'Hod\TripRequestController@storeTriprequest');
Route::post('hod/requestList/getUser', 'Hod\TripRequestController@fetchUser');
Route::get('hod/deleterequest/{id}', 'Hod\TripRequestController@deleteTriprequest');
Route::any('hod/requestList/editriprequest/{id}', 'Hod\TripRequestController@editTriprequest');
Route::post('hod/requestList/editriprequest/{id}', 'Hod\TripRequestController@updateTriprequest');
Route::get('hod/calender', 'Hod\TripRequestController@viewCalender');
Route::post('hod/driver_staff_details', 'Hod\TripRequestController@driver_staff_details');
Route::get('hod/feedback', 'Hod\FeedbackController@manageFeedback');
Route::get('hod/addComplaint', 'Hod\FeedbackController@addFeedback');
Route::post('hod/addComplaint', 'Hod\FeedbackController@storeFeedback');
Route::get('hod/viewComplaint/{id}', 'Hod\FeedbackController@viewComplaint');
Route::post('hod/addmessage/{id}', 'Hod\FeedbackController@addMessage');
Route::post('hod/namebycat', 'Hod\FeedbackController@nameByCat');
Route::post('hod/updatestatus', 'Hod\FeedbackController@updateStatus');
Route::any('hod/editFeedback/{id}', 'Hod\FeedbackController@editFeedback');
Route::post('hod/editFeedback/{id}', 'Hod\FeedbackController@updateFeedback');


//Transport Dashboard
Route::get('transport/dashboard', 'Transport\DashboardController@dashboard');
Route::get('transport/profile', 'Transport\DashboardController@profile');
Route::get('transport/schedulerequest', 'Hod\TripRequestController@scheduleTriprequest');
Route::get('transport/unschedulerequest', 'Hod\TripRequestController@unscheduleTriprequest');
Route::get('transport/viewrequest/{id}', 'Hod\TripRequestController@viewTriprequest');
Route::post('transport/status', 'Hod\TripRequestController@statusChange');
Route::any('transport/modifyrequest/{id}', 'Hod\TripRequestController@modifyTriprequest');
Route::post('transport/modifyrequest/{id}', 'Hod\TripRequestController@changeTriprequest');
Route::post('transport/viewUser', 'Hod\TripRequestController@viewUser');
Route::post('transport/viewDriver', 'Hod\TripRequestController@viewDriver');
Route::get('transport/calender', 'Hod\TripRequestController@viewCalender');
Route::post('transport/driver_staff_details', 'Hod\TripRequestController@driver_staff_details');
Route::get('transport/calender', 'Hod\TripRequestController@viewCalender');
Route::get('transport/feedback', 'Hod\FeedbackController@manageFeedback');
Route::get('transport/viewComplaint/{id}', 'Hod\FeedbackController@viewComplaint');
Route::get('transport/addComplaint', 'Hod\FeedbackController@addFeedback');
Route::post('transport/addComplaint', 'Hod\FeedbackController@storeFeedback');
Route::post('transport/namebycat', 'Hod\FeedbackController@nameByCat');
Route::any('transport/editFeedback/{id}', 'Hod\FeedbackController@editFeedback');
Route::post('transport/editFeedback/{id}', 'Hod\FeedbackController@updateFeedback');

Route::get('updatestatus', 'Hod\TripRequestController@approveAll');


