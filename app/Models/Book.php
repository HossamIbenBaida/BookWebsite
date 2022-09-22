<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function scopeFilter($query , array $filters){
       if($filters['category'] ?? false) {
        $query->where('categorie' ,'like' , '%'.request('category').'%');
       }
       if($filters['search'] ?? false) {
        $query->where('titre' ,'like' , '%'.request('search').'%' );
       }
       if($filters['tags'] ?? false) {
        $query->where('tags' ,'like' , '%'.request('tags').'%' );
       }

    }
}
