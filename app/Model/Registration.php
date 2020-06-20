<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillapp = ['f_name','l_name','user_name','email_address','phone_number','password','nid'];
}
