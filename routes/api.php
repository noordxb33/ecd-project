<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\StudentActivitiesController;
use App\Http\Controllers\TraineeAttendenceController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EducationsController;
use App\Http\Controllers\IDCardSchedularController;
use App\Http\Controllers\AddClassStudentSchedularController;
use App\Http\Controllers\UpdateClassStudentSchedularController;
use App\Http\Controllers\SpecificStudentUpdateController;
use App\Http\Controllers\SpecificStudentUserAccountUpdateController;
use App\Http\Controllers\SpecificStudentIDcardController;
use App\Http\Controllers\ScopeBPLController;

use Illuminate\Support\Facades\Route;

 
 
 
 Route::prefix('RF_MIS')->group(function () {
        Route::resources(
            [
            'Lab' => LabController::class,
            'Section' => SectionController::class,
            ]
    
    );

  
    //     Route::post('all_data', [AuthController::class, 'all_data']);
    
    //     // Route::get('/Accounts_and_Companies', [CashAccountsController::class, 'get_company_and_cash_accounts']);
    //     Route::delete('DeActivateUser/{id}', [AuthController::class, 'DeActivate']);
    //     Route::get('get_sessions_instructors_sections', [LabController::class, 'get_sections_instructors_sessions']);
    //     Route::patch('update_user/{id}', [AuthController::class, 'put']);
    //     Route::post('/att_report', [TraineeAttendenceController::class,'presentAbsentReport']);
    //     Route::get('Generate_Report/{id}', [StudentController::class,'GenerateReport']);
    // Route::get('/Logout', [AuthController::class, 'logout']);


});