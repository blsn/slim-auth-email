<?php

namespace App\Models;

/*
class User
{
}
*/

/*
use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    protected $table = 'users'; // if the table name is different use this
}
*/

use Illuminate\Database\Eloquent\Model;

/*
class User extends Model
{
    protected $fillable = [ // define written columns
        'email',
        'name',
        'password',
    ];
}
*/

/*
class User extends Model
{
    protected $fillable = [ // define written columns
        'email',
        'name',
        'password',
    ];

    public function setPassword($password) {
        $this->update([
            'password' => password_hash($password, PASSWORD_DEFAULT) // hash
        ]);
    }
}
*/

class User extends Model
{
    protected $fillable = [ // define written columns
        'email',
        'name',
        'password',
        'activ_code' // <-- email confirmation
    ];

    public function setPassword($password) {
        $this->update([
            'password' => password_hash($password, PASSWORD_DEFAULT) // hash
        ]);
    }
}
