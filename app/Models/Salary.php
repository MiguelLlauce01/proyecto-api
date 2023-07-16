<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    //Se agregó este código
    protected $fillable = ["monto", "state","employee_id"];
}
