<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'lab_patients';
    protected $guarded = ['timestamps'];

    public function institution(){
        return $this->belongsTo(institution::class, 'inst_id');
    }
}


