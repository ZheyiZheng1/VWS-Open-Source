<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function questions()
    {
        return $this->hasMany(Questions::class);
    }

    protected $table = "survey_lists";
}
