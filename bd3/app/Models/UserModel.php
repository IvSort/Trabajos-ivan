<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'photo_name',
        'full_name',
        'username',
        'email',
        'password'
    ];
}
