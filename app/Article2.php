<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article2 extends Model
{
    protected $table = 'laravelwalk';
    protected $primaryley="ID";
    protected $fillable=['CusomerName','address','City','PostalCode','Country','Material','first_width','first_height','first_rule','Numbe','Total'];
}
