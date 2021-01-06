<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'laravelwalk';
    protected $primaryley="CusomerID";
    protected $fillable=['CusomerName','address','City','PostalCode','Country','Material','first_width','first_height','first_rule','Numbe','Total'];
}
