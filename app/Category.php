<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Category extends Model
{
    public function Articles() {
        return $this->hasMany(Article::class);
    }
}
