<div>
    <x-filament::card>
        @foreach(data_get($posts, 'data', []) as $post)
            <x-filament::card.heading>{{ $post['name'] }}</x-filament::card.heading>
            @dump($post)
        @endforeach
    </x-filament::card>
</div>
