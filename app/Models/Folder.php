<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;
    public function rack()
    {
        return $this->belongstoMany('App\Models\Rack');
    }
    public function shelf()
    {
        return $this->belongstoMany('App\Models\Shelf');
    }
}
