<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // Campos que permitimos llenar de golpe (Mass Assignment) 
    protected $fillable = [
        'first_name',
        'last_name',
        'nationality',
        'birth_date',
        'biography',
    ];

    // Convertimos la fecha de string a un objeto de fecha automáticamente 
    protected $casts = [
        'birth_date' => 'date',
    ];

    // Esto hace que "full_name" aparezca siempre que consultes al autor 
    protected $appends = ['full_name'];

    /**
     * Accessor: Crea el atributo virtual 'full_name' 
     */
    public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    /** 
     * Relación: un autor tiene muchos libros. 
    */ 
    public function books(): \Illuminate\Database\Eloquent\Relations\BelongsToMany 
    { 
        return $this->belongsToMany(Book::class) 
            ->withPivot('role') 
            ->withTimestamps(); 
    }

}