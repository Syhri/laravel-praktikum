<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Majors extends Model
{
    protected $table = 'majors';
    
    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'major_id');
    }

    protected $fillable = [
        'name',
        'code',
        'description',
    ];
}