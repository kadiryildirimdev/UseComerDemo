<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionModel extends Model
{
    public $timestamps = false;

    protected $table = "questions";

    protected $fillable = [];
}
