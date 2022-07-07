<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo(Category::class);
}
    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withPivot('created_at');
    }

    public function hasTag(Tag $tag)
    {
        return $this->tags()->where('tag_id',$tag->id)->exists();
    }
}
