<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'enrollments';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'client_id',
        'program_id',
        'doctor_id',
        'enrollment_start_date',
        'enrollment_end_date',
        'reason_for_enrollment',
        'age',
        'county',
        'illness_history',
        'id_number',
    ];

    // Define relationships
  // Enrollment.php model
public function client()
{
    return $this->belongsTo(Client::class);
}

public function program()
{
    return $this->belongsTo(Program::class);
}

public function doctor()
{
    return $this->belongsTo(Doctor::class);
}

}

