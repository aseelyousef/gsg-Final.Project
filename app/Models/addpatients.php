<?php

namespace App\Models;
use Illuminate\Database\epss;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addpatients extends Model
{
    use HasFactory;

    protected $fillable =[
       'id', 'fName', 'lName', 'idnumber','phone','phone2', 'address',
        'gender', 'birthday','Marital',
    ];

}