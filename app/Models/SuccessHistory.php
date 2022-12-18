<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SuccessAttr;

class SuccessHistory extends Model
{
    use HasFactory;
    public $table ='tbl_ss_story';

    public function successattr(){
        return $this->hasMany(SuccessAttr::class, 'ss_story_id');
    }
}
