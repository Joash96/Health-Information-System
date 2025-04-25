<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'name',
        'description',
        'doctor_id', // Add this field
    ];

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

    public function clients() {
        return $this->belongsToMany(Client::class);
    }
    // Program.php model
public function enrollments()
{
    return $this->hasMany(Enrollment::class);
}

}

