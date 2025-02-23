<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    
    // creating a reverse relation
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
