<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
    protected $fillable=['name','gender','date_of_birth','date_of_joining','mobile','marital_status','photopath','current_address','permanent_address','qualification','work_experience','schoolclass_id','email','password'];

    public function schoolclass(){
        return $this->belongsTo(schoolclass::class );
}
}


