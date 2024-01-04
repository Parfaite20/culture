<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'content',  'audio'];

    // , 'video', 'image', 'date_publi', 'slug', 'tag', 'categorie_id','user_id'
    

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
