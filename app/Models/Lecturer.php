<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'study_program_id',
        'nip',
        'address',
        'phone',
        'gender',
        'is_active',
    ];

    /**
     * Scope a query to only include validated lecturers.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeValidated($query)
    {
        $query->whereRelation('user', 'is_validated', 1);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function teaches()
    {
        return $this->hasMany(TeachHistory::class);
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function researches()
    {
        return $this->belongsToMany(Research::class)->using(LecturerResearch::class);
    }

    public function finalProjects() {
        return $this->belongsToMany(FinalProject::class)->using(StudentProject::class);
    }

}
