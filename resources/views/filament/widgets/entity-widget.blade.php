<div class="space-y-4">
    @foreach(data_get($posts, 'data', []) as $post)
        <article>
            <a href="{{ $post['url'] }}" target="_blank" class="block overflow-hidden bg-white shadow rounded-xl hover:bg-zinc-900 hover:text-white transition-colors">
                <img src="{{ $post['image'] }}" alt="" class="w-full" />
                <header class="p-4">
                    <p class="font-bold mb-2">{{ $post['title'] }}</p>
                    {!! strip_tags($post['description']) !!}
                </header>
            </a>
        </article>
    @endforeach
</div>
