<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Relations\BelongsToMany;
use Jenssegers\Mongodb\Relations\HasMany;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Article extends Model
{
    use HasFactory;
    use Sluggable;
    use SluggableScopeHelpers;

    protected $connection = 'mongodb';
    protected $collection = 'articles';
    // protected $primaryKey = 'id_article';
    protected $fillable = ['title','content','status'];

    public function users()
    {
        return $this->belongsToMany(User::class, null, 'article_ids', 'user_ids');
    }

    public function categories()
    {
        // return $this->belongsToMany(Category::class, null, 'fk_article', 'fk_category');
        return $this->belongsToMany(Category::class, null, 'article_ids', 'category_ids');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'fk_article', 'id_article');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}