<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainModel extends Model
{
    use HasFactory;

    protected $table = "userdata";
    public $timestamps = false;
    protected $fillable = [
        "username",
        "email",
        "password",
        "money",
        "work",
        "workvalue",
        "token",
    ];
}
