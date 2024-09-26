<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function schoolclass(){
        return $this->belongsTo(schoolclass::class );
    }

    public function subject(){
        return $this->belongsTo(subject::class );
    }

    public function student(){
        return $this->belongsTo(student::class );
    }

    public function exam(){
        return $this->belongsTo(exam::class );
    }


}
