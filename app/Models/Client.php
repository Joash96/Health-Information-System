<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'phone', 'gender', 'email', 'address'];
    
    // Client.php model
public function programs()
{
    return $this->belongsToMany(Program::class, 'enrollments')
                ->withPivot('enrollment_start_date', 'enrollment_end_date', 'reason_for_enrollment', 'age', 'county', 'illness_history', 'id_number');
}
public function enrollments()
{
    return $this->hasMany(Enrollment::class);
}


}

