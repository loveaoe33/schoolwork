<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample_data extends Model
{
    protected $table = 'laravelwalk';
    protected $primaryley="ID";
    protected $fillable=['first_name','last_address','last_City','first_Code','first_Country','exampleFormControlSelect1','first_width','first_height','first_rule','Numbe','first_Total'];
}
