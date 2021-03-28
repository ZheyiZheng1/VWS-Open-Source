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
    /*protected $fillable = [
        'updated_at',
        'Description',
        'isAnsweredRepeatedly',
        'survey_lists_id',
    ];*/

   /* protected $fillable = [
        'updated_at',
        'Description',
        'isAnsweredRepeatedly',
        'survey_lists_id',
    ];*/

    protected $guarded=[];

    public function surveys()
    {
        return $this->belongsTo(Survey::class);
    }

    public function answers()
    {
        return $this->hasMany(Answers::class);
    }
    protected $table = "alt_questions";
}
