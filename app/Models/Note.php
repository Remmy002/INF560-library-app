<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'is_pinned', 'category_id']; 

    protected $casts = [
        'is_pinned' => 'boolean', 
    ];

    public function category(): BelongsTo 
    {
        return $this->belongsTo(Category::class);
    }
}