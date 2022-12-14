<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname', 'birthdate', 'course_id', 'gender'];

    public function course() {
        return $this->belongsTo(Course::class);
    }
}
