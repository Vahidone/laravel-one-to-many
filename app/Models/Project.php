<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    // relazione con la tabella types
    // la funzione deve essere al singolare
    public function type() {
        return $this->belongsTo(Type::class);
    }

    protected $fillable = [
        'title',
        'type_id',
        'slug',
        'release_date',
        'description',
        'image',
        'image_original_name'
    ];


}
