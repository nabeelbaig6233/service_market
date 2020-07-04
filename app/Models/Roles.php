<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function getRole() {
        return self::select('id','name')->where('status',TRUE)->latest()->get();
    }
}
