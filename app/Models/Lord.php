<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lord extends Model
{
    use HasFactory;
    protected $table = 'lords';

    protected function boyars() {
        return $this->belongsToMany(Boyar::class, 'lords_boyars', 'lord_id', 'boyar_id');
    }

    protected function principalities() {
        return $this->belongsToMany(Principality::class, 'principalities_lords', 'lord_id', 'principality_id');
    }

}
