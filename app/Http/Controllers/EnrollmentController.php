<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Program;
use App\Models\Enrollment;
use App\Models\Doctor;
use Carbon\Carbon;

class EnrollmentController extends Controller
{
    // Show the enrollment form
   public function index()
{
    $clients = Client::with(['enrollments.program'])->get();
    return view('enrollments.index', compact('clients'));
}

    
     public function create() {
       $clients = Client::all(); // Fetch all clients for enrollment
        $doctors = Doctor::all(); // Fetch all doctors
        $programs = Program::all();

        return view('enrollments.create', compact( 'programs', 'clients', 'doctors'));
       
    }

    // Store the enrollment data
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'program_id' => 'required|exists:programs,id',
            'doctor_id' => 'required|exists:doctors,id',
            'enrollment_start_date' => 'required|date',
            'enrollment_end_date' => 'required|date|after_or_equal:enrollment_start_date',
            'reason_for_enrollment' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'county' => 'nullable|string|max:255',
            'illness_history' => 'nullable|string|max:255',
            'id_number' => 'nullable|string|max:255',
        ]);

        // Create a new enrollment record
        Enrollment::create([
            'client_id' => $request->client_id,
            'program_id' => $request->program_id,
            'doctor_id' => $request->doctor_id,
            'enrollment_start_date' => $request->enrollment_start_date,
            'enrollment_end_date' => $request->enrollment_end_date,
            'reason_for_enrollment' => $request->reason_for_enrollment,
            'age' => $request->age,
            'county' => $request->county,
            'illness_history' => $request->illness_history,
            'id_number' => $request->id_number,
            'created_at' => Carbon::now(), // The current timestamp for enrollment
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('programs.show', $request->program_id)
            ->with('success', 'Client enrolled successfully!');
    }

    // Show the enrollment details (Optional, if you want a view)
    public function show($id)
    {
        $enrollment = Enrollment::with(['client', 'program', 'doctor'])->findOrFail($id);
        return view('enrollments.show', compact('enrollment'));
    }
}
