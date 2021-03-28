<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'updated_at',
        'Description',
        'isAnsweredRepeatedly',
        'survey_lists_id',
        'question_id'
    ];

    public function Answers(){
        return $this->hasMany(Answers::class);
    }
}
