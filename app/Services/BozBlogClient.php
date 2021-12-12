<?php

namespace App\Services;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;

class BozBlogClient
{
    public function getLatestPosts()
    {
        return Http::get('https://bozboz.co.uk/api/v1/blog-posts?limit=1')->json();
    }
}
