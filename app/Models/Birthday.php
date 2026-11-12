<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Birthday extends Model
{
    /** @use HasFactory<\Database\Factories\BirthdayFactory> */
    use HasFactory;
    
    protected $fillable = ['user_id', 'name', 'author', 'context', 'invited'];

    protected function casts(): array
    {
        return [
            'invited' => 'array',
        ];
    }
    
    // public function user(): BelongsTo 
    // {
    //     return $this->belongsTo(User::class);
    // }
}
