<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $fillable=['gallery_id','file_name','file_size','file_mime','file_path','created_by','timecreated'];
    
    public function gallery(){
        
        //return $this->belonsTo
    }
}
