<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transfer extends Model
{
    protected $fillable = [
        'member_id',
        'transfree_id',
        'plot_category',
        'plot_no',
        'msid',
        'dei',
        'survey',
        'phase',
        'block' ,
        'tran_no' 
    ];
}
