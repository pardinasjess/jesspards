<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';

    public function employee() {
        return $this->belongsTo('App\Employee', 'EmpId');
    }
}
