<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class firas extends Model
{
    use HasFactory;

    protected $fillable =[
       'id', 'fName', 'idnumber','phone','money', 'address',
        'amount', 'birthday',
    ];

}
