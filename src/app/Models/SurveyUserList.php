<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyUserList extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'updated_at',
        'isCompleted',
        'user_id',
        'survey_id'
    ];

    public function SurveyUserList_GetList(){
        return $this->belongsToMany('User');
    }

    public function Questions(){
        return $this->hasMany(Qustions::class);
    }
}
