<?php
// app/Http/Controllers/StudentController.php
namespace App\Http\Controllers;

use App\Models\Student;
use App\Services\PromotionService;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $promotionService;

    public function __construct(PromotionService $promotionService)
    {
        $this->promotionService = $promotionService;
    }

    public function index()
    {
        return Student::all();
    }

    public function store(Request $request)
    {

        
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'gender_id' => 'required|string',
            'mother_occupation_id' => 'required|string',
            'grade_id' => 'required|string',
            'class_id' => 'required|string',
            'father_occupation_id' => 'required|string',
            'mother_qualification_id' => 'required|string',
            'father_qualification_id' => 'required|string',
            'monthly_income' => 'required|string',
            'discount' => 'required|string',
            'age_when_enrolled' => 'required|string',
            'child_number_in_family' => 'required|string',
            'any_other_income' => 'required|string',
            'admission_fee' => 'required|string',
            'Student_Status' => 'required|string',
     
    
        ]);
        
        $student = Student::create($request->all());
        return response()->json($student, 201);
    }

    public function show(Student $student)
    {
        return $student;
    }

    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return response()->json($student, 200);
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json(null, 204);
    }

    public function promote(Student $student)
    {
        $this->promotionService->promoteStudent($student);
        return response()->json($student, 200);
    }
}
