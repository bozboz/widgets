<div>
    <x-filament::card>
        @foreach(data_get($posts, 'data', []) as $post)
            @dump($post)
        @endforeach
    </x-filament::card>
</div>
