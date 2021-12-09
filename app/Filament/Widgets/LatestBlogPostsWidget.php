<?php

namespace App\Filament\Widgets;

use App\Services\BozBlogClient;
use Filament\Widgets\Widget;

class LatestBlogPostsWidget extends Widget
{
    protected static string $view = 'filament.widgets.latest-blog-posts-widget';

    public array $posts;

    public function mount(BozBlogClient $client)
    {
        $this->posts = $client->getLatestPosts();
    }
}
