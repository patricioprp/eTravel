<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = ['id','name'];

    public function locations(){
        //relacion uno a muchos
        return $this->hasMany('\App\Location'); 
      }
}
