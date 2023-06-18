<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Principality extends Model
{
    use HasFactory;
    protected $table = 'principalities';

    protected function lords() {
        return $this->belongsToMany(Lord::class, 'principalities_lords', 'principality_id', 'lord_id');
    }

}
