<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
## مودل إخصائي المدرسة
class Specialist extends Model 
{
    protected $table = "specialists";
    protected $fillable=[
        'id','no','uuid','status',
        ## 
        'name','f_name','p_name','l_name',
        ## 
        'email','mobile',
        ## 
        'gender','nationality','birthdate',
        ##
        'email_verified_at','remember_token','password',
        ##foreign Key
        'image_id',
        'address_id',
        'school_id',
        // 'socialdetail_id',
        // 'healthdetail_id',
        ## detetime columns
        'created_at',
        'updated_at',
    ];
    protected $hidden =[
            // 'email_verified_at',
            'password','created_at','updated_at'
        ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public $timestamps = true;
    
    ##############   Start Relationes     ##############
     ############ specialist address
        public function address()
        {
            return $this->belongsTo('App\Models\Address','address_id');
        }
     ###########   specialist school
        public function school()
        {
            return $this->belongsTo('App\Models\School','school_id','id','id');
        }
     ###########   ...
    
    
    ##############   end Relationes     ##############
}
