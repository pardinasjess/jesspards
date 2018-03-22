<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Admin;

class Employee extends Authenticatable
{
    use Notifiable;

    protected $table = 'employees';

    protected $fillable = [
        'EmpId', 'LastName', 'FirstName', 'MiddleName', 'Address', 'Birthdate', 'ContactNum', 'MothersName', 'FathersName', 'DateHired', 'SSSNum', 'Tin', 'PhilNum', 'PagibigNum', 'EmpPos', 'EmpStatus', 'EmpPass',
    ];

    protected $hidden = [
        'EmpPass', 'remember_token', 
    ];

    public function getAuthPassword() {
		return $this->EmpPass;
    }
    
    protected $appends = ['is_admin'];
    
    public function admin() {
        return $this->hasOne('App\Admin');
    }

    public function getIsAdminAttribute() {
        $isAdmin = false;

        if(Admin::where('EmpId', $this->id)->exists()) {
            $isAdmin = true;
        }

        return $this->attributes['is_admin'] = $isAdmin;
    }
}
