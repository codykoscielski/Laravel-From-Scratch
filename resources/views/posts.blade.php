<x-layout>
    @foreach($posts as $post)
        <article class="{{ $loop->even ? 'mb-6' : '' }}">
            <h1>
                <a href="/post/{{$post->slug}}">
                    {{$post->title}}
                </a>
            </h1>
            <div>
                <p>
                    By <a href="/authors/{{$post->author->username}}">{{$post->author->username}}</a> in <a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a>
                </p>
            </div>
            <div>
                {!!$post->excerpt!!}
            </div>
        </article>
    @endforeach
</x-layout>


