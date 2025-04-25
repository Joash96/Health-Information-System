<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User; // instead of Doctor

use Illuminate\Support\Facades\Hash;

class DoctorAuthController extends Controller
{

    public function showLogin() {
        return view('auth.doctor-login');
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if the doctor exists
        $doctor = User::where('email', $request->email)->first();


        if ($doctor) {
            // Attempt to verify password
            if (Hash::check($request->password, $doctor->password)) {
                Auth::login($doctor);
                return redirect()->route('dashboard');
            } else {
                Log::error('Incorrect password entered for doctor: ' . $request->email);
                return back()->withErrors(['error' => 'Invalid password.']);
            }
        } else {
            Log::error('No doctor found with email: ' . $request->email);
            return back()->withErrors(['error' => 'No account found with this email address.']);
        }
    }

    
    public function logout() {
        Auth::guard('web')->logout();
        return redirect()->route('doctor.login');
    }
}

