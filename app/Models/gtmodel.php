<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gtmodel extends Model
{
    use HasFactory;
    protected $table="gttable";
    protected $primaryKey = "id";
}
