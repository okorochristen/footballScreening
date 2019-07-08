<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
     protected $guarded=['id'];
    // this the name of the TABLE
    protected $table='profiles';
    // for  fillables
    protected $fillable = [
        'name', 'dob', 'profile_image', 'area', 'gender', 'overall', 'age', 'bio', 'country'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}

