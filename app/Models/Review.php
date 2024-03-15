<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillabl = ['review','ratng'];

    public function book()
    {
        return $this->belongsTo(book::class);
    }
}


