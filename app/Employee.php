<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

}
