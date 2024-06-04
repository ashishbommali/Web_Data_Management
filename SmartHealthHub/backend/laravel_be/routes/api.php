<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserTwoController;
use App\Http\Controllers\HealthCareProviderController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientHealthRecordController;
use App\Http\Controllers\MedicationDispensationController;
use App\Http\Controllers\MedicationHistoryController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ComplianceController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\Community;
use App\Http\Controllers\ReportController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/user-two', [UserTwoController::class, 'index']);
Route::post('/user-two/login', [UserTwoController::class, 'login']);
Route::post('/user-two/register', [UserTwoController::class, 'register']);
Route::post('/user-two/request-otp', [UserTwoController::class, 'requestOtp']);
Route::put('/user-two/update/{id}', [UserTwoController::class, 'update']);
Route::delete('/user-two/delete/{id}', [UserTwoController::class, 'delete']);
Route::get('/health-care-providers', [HealthCareProviderController::class, 'index']);
Route::post('/health-care-providers', [HealthCareProviderController::class, 'create']);
Route::put('/health-care-providers/{id}', [HealthCareProviderController::class, 'update']);
Route::delete('/health-care-providers/{id}', [HealthCareProviderController::class, 'delete']);
Route::get('/facilities', [FacilityController::class, 'index']);
Route::post('/facilities', [FacilityController::class, 'create']);
Route::put('/facilities/{id}', [FacilityController::class, 'update']);
Route::post('/admin/system-configure', [FacilityController::class, 'setConfig']);
Route::delete('/facilities/{id}', [FacilityController::class, 'delete']);
Route::get('/prescriptions', [PrescriptionController::class, 'index']);
Route::post('/prescriptions', [PrescriptionController::class, 'create']);
Route::put('/prescriptions/{id}', [PrescriptionController::class, 'update']);
Route::delete('/prescriptions/{id}', [PrescriptionController::class, 'delete']);
Route::get('/prescriptions/patient/{id}', [PrescriptionController::class, 'getByPatient']);
Route::get('/appointments', [AppointmentController::class, 'index']);
Route::post('/appointments', [AppointmentController::class, 'create']);
Route::put('/appointments/{id}', [AppointmentController::class, 'update']);
Route::delete('/appointments/{id}', [AppointmentController::class, 'delete']);
Route::get('/appointments/patient/{id}', [AppointmentController::class, 'getByPatient']);
Route::get('/patients-health-record', [PatientHealthRecordController::class, 'index']);
Route::post('/patients-health-record', [PatientHealthRecordController::class, 'create']);
Route::put('/patients-health-record/{id}', [PatientHealthRecordController::class, 'update']);
Route::delete('/patients-health-record/{id}', [PatientHealthRecordController::class, 'delete']);
Route::get('/medication-dispensations', [MedicationDispensationController::class, 'index']);
Route::post('/medication-dispensations', [MedicationDispensationController::class, 'create']);
Route::get('/medication-history', [MedicationHistoryController::class, 'index']);
Route::post('/medication-history', [MedicationHistoryController::class, 'create']);
Route::get('/patients/heath-record/{id}', [PatientController::class, 'getPatientMedicalHistory']);
Route::post('/patients/heath-record/illness', [PatientController::class, 'addIllness']);
Route::post('/patients/heath-record/allergy', [PatientController::class, 'addAllergy']);
Route::post('/patients/heath-record/surgery', [PatientController::class, 'addSurgery']);
Route::post('/patients/heath-record/family-history', [PatientController::class, 'addFamilyHistory']);
Route::post('/patients/heath-record/vital-sign', [PatientController::class, 'addVitalSign']);
Route::post('/patients/heath-record/excercise-data', [PatientController::class, 'addExcerciseData']);
Route::get('/patients/heath-record/vital-sign/{id}', [PatientController::class, 'getVitalSigns']);
Route::get('/patients/heath-record/excercise-data/{id}', [PatientController::class, 'getExcerciseData']);
Route::delete('/patients/heath-record/excercise-data/{id}', [PatientController::class, 'deleteExcerciseData']);
Route::post('/patients/medication-reminder', [PatientController::class, 'addMedicationReminder']);
Route::get('/patients/medication-reminder/{id}', [PatientController::class, 'getMedicationReminders']);
Route::delete('/patients/medication-reminder/{id}', [PatientController::class, 'deleteMedicationReminder']);
Route::put('/patients/medication-reminder/{id}', [PatientController::class, 'updateMedicationReminder']);
Route::get('/staff', [StaffController::class, 'index']);
Route::post('/staff', [StaffController::class, 'create']);
Route::put('/staff/{id}', [StaffController::class, 'update']);
Route::delete('/staff/{id}', [StaffController::class, 'delete']);
Route::get('/compliance', [ComplianceController::class, 'index']);
Route::post('/compliance', [ComplianceController::class, 'create']);
Route::put('/compliance/{id}', [ComplianceController::class, 'update']);
Route::delete('/compliance/{id}', [ComplianceController::class, 'delete']);
Route::get('/incidents', [IncidentController::class, 'index']);
Route::post('/incidents', [IncidentController::class, 'create']);
Route::put('/incidents/{id}', [IncidentController::class, 'update']);
Route::delete('/incidents/{id}', [IncidentController::class, 'delete']);
Route::get('/community/patient', [Community::class, 'patientIndex']);
Route::post('/community/patient', [Community::class, 'patientCreate']);
Route::post('/community/patient/comment', [Community::class, 'patientCreateComment']);
Route::post('/community/health-provider', [Community::class, 'healthProvider']);
Route::post('/messages/create', [UserTwoController::class, 'createMessage']);
Route::post('/messages', [UserTwoController::class, 'getMessages']);
Route::get('/reports/{id}', [ReportController::class, 'reportByUser']);
Route::post('/reports', [ReportController::class, 'create']);






