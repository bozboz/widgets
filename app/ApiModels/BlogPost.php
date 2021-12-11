<?php

namespace App\ApiModels;

class BlogPost extends BaseModel
{
    protected $attributes = [];
    protected $fillable = ['title', 'excerpt', 'image', 'published_at', 'url'];

    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);
    }

    /**
     * @param string[] $fillable
     */
    public function fill(array $fillable): void
    {
        $this->fillable = $fillable;
    }
}
