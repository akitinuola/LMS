<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Grades extends Model
{
    use HasFactory;
    protected $fillable = [
        'userId',
        'courseId',
        'grades',
        'date',
    ];

    public function courseDetails(): HasOne {
        return $this->hasOne(Courses::class, 'id', 'courseId');
    }
}
