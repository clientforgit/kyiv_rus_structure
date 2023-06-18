<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boyar extends Model
{
    use HasFactory;
    protected $table = 'boyars';

    protected function lords() {
        return $this->belongsToMany(Boyar::class, 'lords_boyars', 'lord_id', 'boyar_id');
    }
}
