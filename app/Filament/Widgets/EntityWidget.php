<?php

namespace App\Filament\Widgets;

use App\Services\BozBlogClient;
use Filament\Widgets\Widget;

class EntityWidget extends Widget
{
    protected static string $view = 'filament.widgets.entity-widget';

    public array $posts;

    public function mount(BozBlogClient $client)
    {
        $this->posts = $client->getLatestPosts();
    }
}
