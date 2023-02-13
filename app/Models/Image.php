<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'images';
    // protected $primaryKey = 'id_image';
    protected $fillable = ['name','fk_article'];

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id', 'id');
    }
}