<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RoleController; 
use App\Http\Controllers\UserController; 
use App\Http\Controllers\AssigntouserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BedController;
use App\Http\Controllers\BedcategoryController;
use App\Http\Controllers\AllotmentbedController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\HpatientController;
use App\Http\Controllers\IndexController;






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
Route::get('/dash/{id}', [DashController::class, 'welcome'])->name('welcome');






// Route::get('/',[TicketController::class,'list'])->name('tickets');
Route::get('/add',[TicketController::class,'index'])->name('add.tkt');
Route::post('/addtkt',[TicketController::class,'addtkt'])->name('store.tkt');

Route::get('/edit',[TicketController::class,'edit'])->name('edit.tkt');
Route::post('/update',[TicketController::class,'update'])->name('update.tkt');

Route::get('/deletetkt/{id}',[TicketController::class,'delete'])->name('delete.category');

//AuthController
Route::get('/login',[AuthController::class,'index'])->name('admin.login');
Route::post('admin/log',[AuthController::class,'login'])->name('admin.post');
Route::get('admin/logout',[AuthController::class,'logout'])->name('admin.logout');
Route::get('admin/registration',[AuthController::class,'adminregistration'])->name('admin.regis');
Route::post('admin/createRegs',[AuthController::class,'createregs'])->name('create.regs');


Route::get('/catlist',[DashController::class,'catelist'])->name('cate.list');
Route::get('/addcate',[DashController::class,'addcate'])->name('add.cate');
Route::get('/productlist',[DashController::class,'productlist'])->name('list.product');
Route::get('/addprod',[DashController::class,'addproduct'])->name('add.product');
Route::post('/storecate',[DashController::class,'storecate'])->name('store.cate');
Route::post('/update',[DashController::class,'update'])->name('update.cate');
Route::get('/editcate/{id}',[DashController::class,'edit'])->name('edit.cate');
Route::get('/deletecate/{id}',[DashController::class,'delete'])->name('delete.cate');
Route::post('/storepro',[DashController::class,'storepro'])->name('store.pro');
Route::post('/updatepro',[DashController::class,'updatepro'])->name('update.pro');
Route::get('/editpro/{id}',[DashController::class,'editpro'])->name('edit.pro');
Route::get('/deletepro/{id}',[DashController::class,'deletepro'])->name('delete.pro');


Route::post('/dashboard',[DashController::class,'dashboard'])->name('dashboard.page');
Route::get('/bills',[DashController::class,'bills'])->name('bills.page');



Route::get('/per',[PermissionsController::class,'perindex'])->name('per.index');
Route::get('/peradd',[PermissionsController::class,'peradd'])->name('add.per');
Route::post('/storeper',[PermissionsController::class,'storeper'])->name('store.per');
Route::post('/updateper',[PermissionsController::class,'updateper'])->name('update.per');
Route::get('/editper/{id}',[PermissionsController::class,'editper'])->name('edit.per');
Route::get('/deleteper/{id}',[PermissionsController::class,'deleteper'])->name('delete.per');

Route::get('/role',[RoleController::class,'roleindex'])->name('role.index');
Route::get('/addrole',[RoleController::class,'roleadd'])->name('add.role');
Route::post('/storerole',[RoleController::class,'storerole'])->name('store.role');
Route::post('/updaterole',[RoleController::class,'updaterole'])->name('update.role');
Route::get('/editrole/{id}',[RoleController::class,'editrole'])->name('edit.role');
Route::get('/deleterole/{id}',[RoleController::class,'deleterole'])->name('delete.role');
Route::post('/permissionform',[RoleController::class,'rolepermform'])->name('roleperform.role');


Route::post('/assign',[Assigntouser1Controller::class,'assignindex'])->name('assign.index');
Route::get('/assign',[Assigntouser1Controller::class,'assignindex'])->name('assign.index');
Route::get('/assignadd',[Assigntouser1Controller::class,'assignadd'])->name('add.assign');
Route::post('/storeassign',[Assigntouser1Controller::class,'storeassign'])->name('store.assign');
Route::post('/updateassign',[Assigntouser1Controller::class,'updateassign'])->name('update.assign');
Route::get('/editassign/{id}',[Assigntouser1Controller::class,'editassign'])->name('edit.assign');
Route::get('/deleteassign/{id}',[Assigntouse1rController::class,'deleteassign'])->name('delete.assign');


Route::get('/document',[DocumentController::class,'indexdocument'])->name('index.document');
Route::get('/adddocument',[DocumentController::class,'adddocument'])->name('add.document');
Route::post('/storedocument',[DocumentController::class,'storedocument'])->name('store.document');
Route::post('/updatedocument',[DocumentController::class,'updatedocument'])->name('update.document');
Route::get('/editdocument/{id}',[DocumentController::class,'editdocument'])->name('edit.document');
Route::get('/deletedocument/{id}',[DocumentController::class,'deletedocument'])->name('delete.document'); 


Route::get('/bed',[BedController::class,'indexbed'])->name('index.bed');
Route::get('/bedadd',[BedController::class,'addbed'])->name('add.bed');
Route::post('/storebed',[BedController::class,'storebed'])->name('store.bed');
Route::post('/updatebed',[BedController::class,'updatebed'])->name('update.bed');
Route::get('/editbed/{id}',[BedController::class,'editbed'])->name('edit.bed');
Route::get('/deletebed/{id}',[BedController::class,'deletebed'])->name('delete.bed');

Route::get('/bedcategory',[BedcategoryController::class,'indexbedcategory'])->name('index.bedcategory');
Route::get('/bedcategoryadd',[BedcategoryController::class,'addbedcategory'])->name('add.bedcategory');
Route::post('/storebedcategory',[BedcategoryController::class,'storebedcategory'])->name('store.bedcategory');
Route::post('/updatebedcategory',[BedcategoryController::class,'updatebedcategory'])->name('update.bedcategory');
Route::get('/editbedcategory/{id}',[BedcategoryController::class,'editbedcategory'])->name('edit.bedcategory');
Route::get('/deletebedcategory/{id}',[BedcategoryController::class,'deletebedcategory'])->name('delete.bedcategory');


Route::get('/appointment',[AppointmentController::class,'indexappointment'])->name('index.appointment');
Route::get('/addappointment',[AppointmentController::class,'addappointment'])->name('add.appointment');
Route::post('/storeappointment',[AppointmentController::class,'storeappointment'])->name('store.appointment');
Route::post('/updateappointment',[AppointmentController::class,'updateappointment'])->name('update.appointment');
Route::get('/editappointment/{id}',[AppointmentController::class,'editappointment'])->name('edit.appointment');
Route::get('/deleteappointment/{id}',[AppointmentController::class,'deleteappointment'])->name('delete.appointment');

Route::get('/schedule',[ScheduleController::class,'indexschedule'])->name('index.schedule');
Route::get('/scheduleadd',[ScheduleController::class,'addschedule'])->name('add.schedule');
Route::post('/storeschedule',[ScheduleController::class,'storeschedule'])->name('store.schedule');
Route::post('/updateschedule',[ScheduleController::class,'updateschedule'])->name('update.schedule');
Route::get('/editschedule/{id}',[ScheduleController::class,'editschedule'])->name('edit.schedule');
Route::get('/deleteschedule/{id}',[ScheduleController::class,'deleteschedule'])->name('delete.schedule');


Route::get('/prescription',[PrescriptionController::class,'indexprescription'])->name('index.prescription');
Route::get('/prescriptionadd',[PrescriptionController::class,'addprescription'])->name('add.prescription');
Route::post('/storeprescription',[PrescriptionController::class,'storeprescription'])->name('store.prescription');
Route::post('/updateprescription',[PrescriptionController::class,'updateprescription'])->name('update.prescription');
Route::get('/editprescription/{id}',[PrescriptionController::class,'editprescription'])->name('edit.prescription');
Route::get('/deleteprescription/{id}',[PrescriptionController::class,'deleteprescription'])->name('delete.prescription');

Route::get('/indexassignbed',[AllotmentbedController::class,'indexassignbed'])->name('index.assignbed');
Route::get('/addalotbed',[AllotmentbedController::class,'addalotbed'])->name('add.alotbed');
Route::get('/getfloor/{id}', [AllotmentbedController::class, 'getfloors'])->name('add.floor');
Route::get('/getbeds/{id}', [AllotmentbedController::class, 'getbeds'])->name('get.beds');
Route::post('/storeassignbed', [AllotmentbedController::class, 'storeassignbed'])->name('store.assignbed');



Route::get('/indexcountry',[CountryController::class,'indexcountry'])->name('index.country');
Route::get('/getcountry/{id}',[CountryController::class,'getcountries'])->name('add.country');
Route::get('/getcity/{id}', [ConutryController::class, 'getcity'])->name('add.city');

Route::get('/doctorlist', [IndexController::class, 'doctorlist'])->name('doctor.list');
Route::get('/patientlist', [IndexController::class, 'patientlist'])->name('patient.list');


Route::get('/userlogin', [UserController::class, 'userlogin'])->name('user.login');
Route::get('/userlogout', [UserController::class, 'userlogout'])->name('user.logout');
Route::post('/storeuserlogin', [UserController::class, 'storeuserlogin'])->name('store.userlogin');
Route::get('/user/{id}/dashboard', [UserController::class, 'userDashboard'])->name('user.dashboard');
Route::get('/useraddnew', [UserController::class, 'useraddnew'])->name('user.addnew');
Route::post('/storeuser', [UserController::class, 'storeuser'])->name('store.user');
Route::get('/role', [UserController::class, 'roleadd'])->name('role.add');
Route::post('/selectrole', [UserController::class, 'selectrole'])->name('select.role');
Route::get('/selectrole', [UserController::class, 'selectrole']);
Route::get('/addregister', [UserController::class, 'addregister'])->name('add.register');



Route::get('/allpatientindex', [HpatientController::class, 'allindexpatient'])->name('allpatient.index');
Route::get('/patientlogin', [HpatientController::class, 'patientlogin'])->name('patient.login');
Route::post('/patientloginstore',[HpatientController::class,'patientloginstore'])->name('patientlogin.store');
Route::get('/patient/{id}/dashboard', [HpatientController::class, 'patientDashboard'])->name('patient.dashboard');
Route::get('/addnewpatient/{id}', [HpatientController::class, 'addnewPatient'])->name('add.Patient');
Route::post('/StorePatientData',[HpatientController::class,'StorePatientData'])->name('Store.PatientData');
Route::get('/patient/{id}/index', [HpatientController::class, 'indexpatient'])->name('patientall.index');
Route::get('/editPatient/{id}',[HpatientController::class,'editPatient'])->name('edit.Patient');
Route::post('/updatePatient',[HpatientController::class,'updatePatient'])->name('update.Patient');
Route::get('/deletePatient/{id}',[HpatientController::class,'deletePatient'])->name('delete.Patient');
Route::group(['middleware' => 'auth'], function () {
    Route::get('hsappointments/{id}',[HpatientController::class,'appointments'])->name('hspatient.appointments');
    });
    // Route::get('/patient/{user_id}/{patient_id}', [HpatienttController::class, 'patientview'])
    // ->name('patient.viewid');
    Route::get('/patient/invoice/{id}', [HpatienttController::class, 'invoice'])->name('patient.invoice');
    Route::get('/view/{id}', [HpatientController::class, 'view'])->name('patient.view'); 



    Route::get('/addnewdoctor/{id}', [DoctorController::class, 'addnewdoctor'])->name('add.doctor');
    Route::post('/storedoctor',[DoctorController::class,'storedoctor'])->name('store.doctor');
    Route::post('/updatedoctor',[DoctorController::class,'updatedoctor'])->name('update.doctor');
    Route::get('/editdoctor/{id}',[DoctorController::class,'editdoctor'])->name('edit.doctor');
    Route::get('/deletedoctor/{id}',[IndexController::class,'deletedoctor'])->name('delete.doctor');
    Route::get('/viewdoctor/{id}', [IndexController::class, 'viewdoctor'])->name('doctor.view'); 



