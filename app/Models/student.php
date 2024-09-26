<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable=['admission_no','photopath','name','gender','admission_date','date_of_birth','mobile','schoolclass_id','current_address','permanent_address','cast','religious','email','password'];

    public function schoolclass(){
        return $this->belongsTo(schoolclass::class );
}

}
