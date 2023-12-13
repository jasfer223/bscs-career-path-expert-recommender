<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = ['skill_name'];

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(
            Student::class,
            'skill_student',
            'skill_id',
            'student_id'
        );
    }
}
