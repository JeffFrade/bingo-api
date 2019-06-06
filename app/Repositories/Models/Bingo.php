<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;

class Bingo extends Model
{
    protected $table = 'bingo';
    protected $fillable = ['numero'];
    public $timestamps = false;
}