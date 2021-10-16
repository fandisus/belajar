<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    //hash vs encrypt
    public static function hashPassword($pass) {
        return hash('sha256', $pass);
    }
}
