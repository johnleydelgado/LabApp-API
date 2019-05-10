<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'lab_users';
    protected $primaryKey = 'user_id';
    
    protected $guarded = ['user_id', 'timestamps'];
    
    public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }
}
