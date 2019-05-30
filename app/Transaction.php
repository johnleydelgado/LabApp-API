<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction_information';
    protected $primaryKey = 'id';
    
    protected $guarded = ['id', 'timestamps'];
 
}
