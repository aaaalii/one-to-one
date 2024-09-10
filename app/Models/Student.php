<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    // this function creates and returns a one-to-one relation of students with contacts table
    public function getContact(){
        return $this->hasOne(Contact::class);
    }
}
