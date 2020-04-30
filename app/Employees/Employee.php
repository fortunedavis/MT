<?php

namespace App\Employees;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Departements\Departement;
class Employee extends Model
{
protected $table = 'employees';

protected $fillable  = ['first_name','last_name','gender','departement_id','profession','status','birth_date','start_date','end_date','address_mail','address_hard','phone'];


protected $dates = ['birth_date','start_date','end_date'];



public function departement(){
    return $this->belongsTo(Departement::class);
}

public function getFullNameAttribute()
{
    return "{$this->last_name} {$this->first_name}";
}

/*public function getRouteKeyName()
{
    return 'slug';
}*/


}
