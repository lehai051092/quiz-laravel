<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    protected $table = 'ql_users';
    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'image_path', 'status', 'group'];
    protected $guarded = 'admin';
    protected $hidden = ['password'];

}
