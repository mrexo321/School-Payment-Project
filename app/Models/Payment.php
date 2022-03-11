<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;


    public function officer()
    {
        return $this->belongsTo(Officer::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function spp()
    {
        return $this->belongsTo(Spp::class);
    }





}
