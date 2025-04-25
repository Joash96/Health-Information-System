<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Program;
use App\Models\Doctor;


class ProgramController extends Controller
{
    public function index() {
        $programs = Program::all();
        return view('programs.index', compact('programs'));
    }
    
    

    public function create()
    {
        $doctors = Doctor::all(); // Fetch all doctors
        return view('programs.create', compact('doctors')); // Pass them to the view
    }
    
    
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'doctor_id' => 'required|exists:doctors,id',
        ]);
    
        Program::create([
            'name' => $request->name,
            'description' => $request->description,
            'doctor_id' => $request->doctor_id,
        ]);
    
        return redirect()->route('programs.index')->with('success', 'Program created successfully!');
    }

    
    

public function show($id) {
    $program = Program::with(['enrollments.client', 'doctor'])
                      ->findOrFail($id);

    return view('programs.show', compact('program'));
}




    
}
