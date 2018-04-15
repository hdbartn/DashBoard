<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function GetActive() {
        return Task::where('deleted', false)->get();
    }

    public static function GetDone() {
        return Task::where('deleted', true)->get();
    } 
}
