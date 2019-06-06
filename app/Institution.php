<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $table = 'institution';
    protected $primaryKey = 'ints_id';
    protected $guarded = ['ints_id', 'timestamps'];
}
