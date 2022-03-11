<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nisn',
        'nis',
        'name',
        'class_id',
        'address',
    ];




    public function class()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

}
