<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        //'slug',
        'description',
        //'color',
    ]; 

    /**
     * Boot: genera el slug automáticamente al crear la categoría.
     */
    
    /*comentado temporalmente
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (Category $category) {
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->name);
            }
        });
    } 
    */



    /** 
     * Relación: una categoría tiene muchos libros. 
    */ 
    public function books(): \Illuminate\Database\Eloquent\Relations\HasMany 
    { 
        return $this->hasMany(Book::class); 
    }

    
    /** Relación para el Repaso 1 */
    public function notes(): HasMany 
    {
        return $this->hasMany(Note::class);
    }

}