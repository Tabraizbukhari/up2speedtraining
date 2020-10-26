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


Route::get('examsother', function () {
    return view('patient.examsother');
});

Route::get('exercises', function () {
    return view('patient.exercises');
});

Route::get('exerciseeditor', function () {
    return view('patient.exerciseeditor');
});

Route::get('datatable', 'HomeController@datatable')->name('datatable');

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

//patient index
Route::get('/patient', 'HomeController@index')->name('patient');

//Portal Home
Route::get('/patient/portalhome', 'HomeController@portalHome')
->name('portalhome');

Route::get('scheduler', 'HomeController@scheduler1')->name('scheduler');


Route::get('newpatient', 'PatientController@newPatient')->name('newpatient');

Route::post('insertnewpatient', 'PatientController@insertNewpatient')->name('insertnewpatient');

Route::get('admin', 'HomeController@admin')->name('admin');

Route::get('addclient','HomeController@addClient')->name('addclient');

Route::post('insertclient','HomeController@insertCleint')->name('insertclient');

Route::get('delete/{id}','PatientController@delete')->name('delete'); 

Route::get('edit/{id}','PatientController@edit')->name('edit');

Route::put('patientinfo/{id}','PatientController@patientInfo')->name('patientinfo');

Route::get('manage/{id}', 'PatientController@manage')->name('manage');

Route::get('deleteimage/{id}','PatientController@deletePhoto')->name('deleteimage'); 

//Family History

Route::get('familyhistory/{id}', 'PatientController@familyHistory')->name('familyhistory');

Route::put('updatefamilyhistory/{id}','PatientController@updateFamily')->name('updatefamilyhistory');

//Social History
Route::get('socialhistory/{id}', 'PatientController@socialHistory')->name('familyhistory');

Route::put('updatesocialhistory/{id}','PatientController@UdateSocialhistory')->name('updatesocialhistory');

//Preexisting Conditions
Route::get('preexistingconditions/{id}', 'PatientController@preexistingConditions')->name('preexistingconditions');

Route::put('updatepreexistingconditions/{id}','PatientController@updatePreexistingconditions')->name('updatepreexistingconditions');

// Insurance Info
Route::get('insuranceinfo/{id}', 'PatientController@insuranceInfo')->name('insuranceinfo');

Route::put('udateinsuranceinfo/{id}','PatientController@udateInsuranceinfo')->name('udateinsuranceinfo');

// New Counter

//Exam rom
Route::get('examsrom/{id}', 'ExamController@examRoms')->name('examsrom');

Route::post('insertexamsrom','ExamController@insertExamroms')->name('insertexamsrom');

Route::get('examsposture/{id}', 'ExamController@examsPosture')->name('examsposture');

Route::post('insertexamposture','ExamController@insertExamposture')->name('insertexamposture');

Route::get('examsall/{id}', 'ExamController@examsAll')->name('examsall');

Route::get('document/{id}', 'ExamController@document')->name('document');

Route::get('autoaccidentform/{id}', 'ExamController@autoAccidentform')->name('autoaccidentform');

Route::get('scheduler1/{id}','HomeController@scheduler1')->name('scheduler1');

Route::get('progress/{id}','HomeController@progress')->name('progress');

Route::get('algorithm/{id}','HomeController@algorithm')->name('algorithm');

Route::get('newencounter/{id}','VisitController@newEncounter')->name('newencounter');

Route::post('insertnewencounter','VisitController@insertCounter')->name('insertnewencounter');

Route::post('insertnewencounteredit','VisitController@insertCounteredit')->name('insertnewencounteredit');

Route::get('subjective/{id}','SOAPController@subjective')->name('subjective');

Route::get('objective/{id}','SOAPController@objective')->name('objective');

Route::get('soap/{id}','SOAPController@soap')->name('soap');



Route::get('assessmenticd/{id}','SOAPController@dailyCoding')->name('assessmenticd');

Route::get('exercises/{id}','SOAPController@exercises')->name('exercises');

Route::get('exerciseeditor/{id}','SOAPController@exerciseEditor')->name('exerciseeditor');

Route::get('examsother/{id}','ExamController@examsOther')->name('examsother');

Route::get('plan/{id}','SOAPController@plan')->name('plan');

Route::post('insertSoap','SOAPController@insertSoap')->name('insertSoap');


//Route::put('encounterdate/{id}','VisitController@encounterDate')->name('encounterdate');


//Route::get('assessmenticd/{id}','VisitController@dailyCoding')->name('assessmenticd');
















/*Route::get('delete/{id}','HomeController@delete')->name('delete'); 
Route::get('admin', 'HomeController@admin')->name('admin');
Route::get('forms', 'HomeController@forms')->name('forms');
Route::get('registernewuser', 'HomeController@newUser')->name('registernewuser');
Route::get('patientportal', 'HomeController@patientPortal')->name('patientportal');
Route::get('portalcalendar', 'HomeController@portalCalendar')->name('portalcalendar');
Route::get('portaldashboard', 'HomeController@portalDashboard')->name('portaldashboard');
Route::get('portalforms', 'HomeController@portalForms')->name('portalforms');
Route::get('portalreports', 'HomeController@portalReports')->name('portalreports');
Route::get('portalcheckout', 'HomeController@portalCheckout')->name('portalcheckout');
Route::get('portalcustomer', 'HomeController@portalCustomers')->name('portalcustomers');

// Insurance Info
Route::get('insuranceinfo/{id}', 'HomeController@insuranceInfo')->name('insuranceinfo');

Route::put('updateinsurance/{id}','HomeController@updateInsurance')->name('updateinsurance');

//Family History

Route::get('familyhistory/{id}', 'HomeController@familyHistory')->name('familyhistory');

Route::put('updatefamilyhistory/{id}','HomeController@updateFamily')->name('updatefamilyhistory');

//Social History
Route::get('socialhistory/{id}', 'HomeController@socialHistory')->name('familyhistory');

Route::put('updatesocialhistory/{id}','HomeController@UdateSocialhistory')->name('updatesocialhistory');

//Preexisting Conditions
Route::get('preexistingconditions/{id}', 'HomeController@preexistingConditions')->name('preexistingconditions');

Route::put('updatepreexistingconditions/{id}','HomeController@updatePreexistingconditions')->name('updatepreexistingconditions');

//New Counter
Route::get('newcounter/{id}', 'VisitInformationController@newCounter')->name('newcounter');

Route::put('updatenewcounter/{id}','VisitInformationController@updateNewcounter')->name('updatenewcounter');

Route::post('insertcounter', 'VisitInformationController@insertCounter')->name('insertcounter');
//exam
Route::get('examsrom/{id}', 'ExamController@examRoms')->name('examsrom');

Route::post('insertexamsrom','ExamController@insertExamroms')->name('insertexamsrom');

Route::get('search', 'HomeController@search')->name('search');

Route::resource('patient','PatientController',[
    'except' => ['destroy']
]);

Route::resource('client','ClientController');

Route::resource('newuser','NewuserController',[
    'except' => ['create']
]);

Route::get('patientinfo', 'HomeController@patientinfo')->name('patientinfo');






Route::get('subjective', 'HomeController@subjective')->name('subjective');
Route::get('objective', 'HomeController@objective')->name('objective');
Route::get('assessment', 'HomeController@assessment')->name('assessment');
Route::get('plan','HomeController@plan')->name('plan');
Route::get('progressnotes', 'HomeController@progressnotes')->name('progressnotes');
Route::get('assessmenticd','HomeController@assessmenticd')->name('assessmenticd');
Route::get('algorithm','HomeController@algorithm')->name('algorithm');
Route::get('progress', 'HomeController@progress')->name('progress');
Route::get('examsrom','HomeController@examsrom')->name('examsrom');
Route::get('exercises', 'HomeController@exercises')->name('exercises');
Route::get('scheduler', 'HomeController@scheduler')->name('scheduler');

Route::get('abbrivation', function () {
    return view('demo.forms.abbrivation');
});

Route::get('assignment', function () {
    return view('demo.forms.assignment');
});

Route::get('cancellation', function () {
    return view('demo.forms.cancellation');
});

Route::get('hippa', function () {
    return view('demo.forms.hippa');
});

Route::get('media', function () {
    return view('demo.forms.media');
});

Route::get('accident', function () {
    return view('demo.forms.accident');
});

Route::get('backindex', function () {
    return view('demo.forms.backindex');
});

Route::get('neckindex', function () {
    return view('demo.forms.neckindex');
});

Route::get('autoaccident', function () {
    return view('demo.forms.autoaccident');
});

Route::get('subjective', function () {
    return view('demo.subjective');
});

Route::get('objective', function () {
    return view('demo.subjective');
});*/










