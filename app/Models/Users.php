<?php

namespace App\Models;

use App\Models\Destinations;
use App\Models\Flights;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Model
{
    use HasFactory;
    protected $fillable = ['name','username','email','password'];
}
