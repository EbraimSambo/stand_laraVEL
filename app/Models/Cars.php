<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%' );
        }
        if ($filters['category'] ?? false) {
            $query->where('category', 'like', '%' . request('category') . '%' );
        }
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%' );
        }
    }
}
