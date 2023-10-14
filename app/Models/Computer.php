<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Computer extends Model
{
    use HasFactory;

    public function users(): BelongsTo{
        return $this->belongsTo(User::class, 'owner');
    }

    protected $fillable = [
        'name',
        'brand',
        'ram',
        'cpu'
    ];
}
