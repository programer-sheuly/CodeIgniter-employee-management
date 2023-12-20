<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'u_id';
    protected $allowedFields    = ['u_id','u_name','u_email','password','created_at'];

 
}
