<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function schoolclass(){
        return $this->belongsTo(schoolclass::class );
}


}
