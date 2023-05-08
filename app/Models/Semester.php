<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\softDeletes;

class Semester extends Model
{
     // use softDeletes;
     protected $guarded = [];
     protected $connection = 'mongodb';
     protected $collection = 'semesters';
 
}
