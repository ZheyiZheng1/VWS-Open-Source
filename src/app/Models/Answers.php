<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   /* protected $fillable = [
        'updated_at',
        'answerValue',
        'question_id',
        'participant_user_id'
    ];*/

    protected $guarded= [];

    public function question()
    {
        return $this->belongsTo(Questions::class);
    }

    protected $table = "alt_answers";
}
