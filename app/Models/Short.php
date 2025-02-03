<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Short extends Model
{
    /** @use HasFactory<\Database\Factories\ShortFactory> */
    use HasFactory;
    use SoftDeletes;
    // use HasUuids; <= mengganti kolom id menjadi uuid, tidak bisa dipaksa masuk ke kolom uuid jkika ingin dua pk

    protected $fillable = [
        'title',
        'url',
        'uuid',
        'short_url',
    ];

}


