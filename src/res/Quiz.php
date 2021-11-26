<?php
namespace Petrik\Proba;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model{
    protected $table = "quiz";
    public $timestampst = false;

    protected $guarded = ["id"];
}