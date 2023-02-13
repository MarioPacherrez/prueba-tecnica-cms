<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
/*use Illuminate\Database\Eloquent\Model;*/
use Jenssegers\Mongodb\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'categories';
    // protected $primaryKey = 'id';
    protected $fillable = ['name'];

    public function articles()
    {
        return $this->belongsToMany(Article::class, null, 'category_ids', 'article_ids');
    }
}
