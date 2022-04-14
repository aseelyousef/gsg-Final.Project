<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\drugcontroller;
use App\Http\Controllers\presccontroller;
use App\Http\Controllers\rxcontroller;
use App\Http\Controllers\addpatientcontoller;
use App\Http\Controllers\labcontroller;
use App\Http\Controllers\viewlabcontroller;
use App\Http\Controllers\searchpharcontroller;
use App\Http\Controllers\rayexxx;
use App\Http\Controllers\radcontroller;
use App\Http\Controllers\doctorcontroller;
use App\Http\Controllers\viewpharcontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FirasController;

/*\
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Home page
Route::get('/', function () {
    return view('welcome');
})->name('login');

//users login/check Role
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});
// add u
Route::get('/rige', function () {
    return view('adduser');
})->name("rige");

Route::post('user/rig',[AdminController::class, 'store'])->name('user/rig');


//view users
Route::get('admin',[AdminController::class, 'UserList'])->name('admin');



//////////////   start doctor ///////////////////////

//Home page doctor

Route::get('/index', function () {
    return view('doctor.index');
})->name("index");

//Doctor information

Route::get('doc', [doctorcontroller::class,'doc']);
Route::post('doctor',[doctorcontroller::class,'docresult'])->name('docresult');
Route::post('doc',[doctorcontroller::class,'docresult'])->name('doctor');
////////
////// add patient
Route::get('add',addpatientcontoller::class.'@addpatient');
Route::post('addpatient',addpatientcontoller::class.'@store')->name('store');
Route::post('add',addpatientcontoller::class.'@addpatient')->name('addpatient');

///// search patient
Route::get('/search',[addpatientcontoller::class, 'search']);
Route::post('/search',[addpatientcontoller::class, 'search'])->name('search');

// view patient info
Route::get('search',[PatientsController::class, 'search']);
Route::get('patientt',[PatientsController::class, 'patientt']);

//Add prescription
Route::get('drug', [drugcontroller::class,'drug']);
Route::post('zxc',[drugcontroller::class,'ss'])->name('ss');
Route::get('patientinfo', [drugcontroller::class,'patientinfo']);

//delete pres data
Route::get('delete-records',[drugcontroller::class,'@drug']);
Route::get('delete/{id}',[drugcontroller::class,'destroy']);

//add diagnosis
Route::get('rx', [rxcontroller::class,'rx']);
Route::post('a',[rxcontroller::class,'qq'])->name('qq');

//all #d

Route::get('dr',[PatientsController::class, 'pdr']);

/////////////////////    end doctor//////////////////////////////


////////////////////  rediology route ///////////////////////////

//view x-Ray information
Route::get('/ray', function () {
    return view('radiology.radinfo');
})->name("ray");

// Dashboard X-Ray
Route::get('/indexrad', function () {
    return view('radiology.indexrad');
})->name("indexrad");

//add ray result
Route::get('rad', [radcontroller::class,'rad']);
Route::post('radiology',[radcontroller::class,'radresult'])->name('radresult');
Route::post('rad',[radcontroller::class,'radresult'])->name('radiology');

//search and view rad

Route::get('patientrad', [rayexxx::class,'patientrad']);
Route::get('searchrad', [rayexxx::class, 'searchrad'])->name('searchrad');
Route::post('searchrad',[rayexxx::class, 'searchrad'])->name('searchrad');
/////////////////  end X-ray////////////////////////////////

///////////////////   lab route ////////////////////////

// add lab result
Route::get('lab', [labcontroller::class,'lab']);
Route::post('laboratorys',[labcontroller::class,'labresult'])->name('labresult');
Route::post('lab',[labcontroller::class,'labresult'])->name('laboratorys');

Route::get('patientinfo', [labcontroller::class,'patientinfo']);

//view lab info
Route::get('/laboratory', function () {
    return view('lab.doclab');
})->name("laboratory");

//Search and view patient in lab

Route::get('patientlab', [labcontroller::class,'patientlab']);
Route::get('searchlab', [labcontroller::class, 'searchlab'])->name('searchlab');
Route::post('searchlab',[labcontroller::class, 'searchlab'])->name('searchlab');
/////////////////////// end lab ///////////////////////////////

//////////////////////////  pharmacy route ////////////////////////

Route::get('pharsearch', [searchpharcontroller::class, 'search'])->name('pharsearch');
Route::POST('pharsearch', [searchpharcontroller::class, 'search'])->name('pharsearch');


//view patient and pres in pharmacy

Route::get('pharpatient', [viewpharcontroller::class, 'pharpatient'])->name('pharpatient');

// Dashboard pharmacy
Route::get('/Dashboardpharmacy', function () {
    return view('pharmacy.indexphar');
})->name("Dashboardpharmacy");

// Pharmacist information
Route::get('/pharmacist', function () {
    return view('pharmacy.pharinfo');
})->name("pharmacist");
/////////////end phar//////////////////////

require __DIR__.'/auth.php';



////////////////////////////////////////////////////////////////////////////////



//Route::get('/patient', function () {
    //return view('front.patient');
 //})->name("patient");

////////////////////////////
/*Route::get('fofo',FirasController::class.'firas');
Route::post('firas',FirasController::class.'firas')->name('firas');
Route::post('fofo',FirasController::class.'firas')->name('firas');*/


Route::get('firas', [FirasController::class,'firas']);
Route::post('f',[FirasController::class,'fofo'])->name('fofo');
