<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model {
    use HasFactory;

    protected $guarder = [];

    const IS_ADMIN = 1;
    const IS_DOCTOR = 2;
    const IS_PATIENT = 3;
}
