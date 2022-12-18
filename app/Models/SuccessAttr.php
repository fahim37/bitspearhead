<?php

namespace App\Models;

use App\Models\SuccessHistory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuccessAttr extends Model
{
    use HasFactory;
    public $table ='tbl_ss_story_attr';
    protected $fillable = [
        'title',
        'dynamic_field',
        'ss_story_id'
    ];
    public function success()
    {
        return $this->belongsTo(SuccessHistory::class,'ss_story_id','id');
    }


}
