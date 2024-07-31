<div>
    <h1>Posts Recentes</h1>
    @foreach ($posts as $post)
        <div>
            <h2><a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a></h2>
            <p>{{ $post->content_overview }}</p>
            <small>Publicado em: {{ $post->published_at->format('d/m/Y') }}</small>
        </div>
    @endforeach

    {{ $posts->links() }}
</div>



