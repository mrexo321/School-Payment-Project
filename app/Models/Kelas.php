<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_name',
        'major'
    ];



    public function students()
    {
        return $this->hasMany(Student::class);
    }


}
