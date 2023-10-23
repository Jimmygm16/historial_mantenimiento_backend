<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'user',
        'category'
    ];

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class, 'category');
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'user');
    }

    public function computer(): BelongsTo{
        return $this->belongsTo(Computer::class, 'computer');


    }
}
