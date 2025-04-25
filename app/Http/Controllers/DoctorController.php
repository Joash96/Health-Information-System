<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    public function index() {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    public function create() {
        return view('doctors.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:doctors',
            'password' => 'required|string|min:8',
        ]);

        Doctor::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('doctors.index')->with('success', 'Doctor added successfully!');
    }

    public function edit(Doctor $doctor) {
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, Doctor $doctor) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:doctors,email,' . $doctor->id,
        ]);

        $doctor->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('doctors.index')->with('success', 'Doctor updated!');
    }

    public function destroy(Doctor $doctor) {
        $doctor->delete();
        return redirect()->route('doctors.index')->with('success', 'Doctor deleted!');
    }
}
