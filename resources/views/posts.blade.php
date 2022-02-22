<x-layout>
@foreach ($posts as $post)

<article>
    {{-- <?php echo($post) ?> --}}
    <h1>
        <a href="/posts/{{$post -> id}}">
        {{$post -> title }}
        </a>
    </h1>
    <p>
        <a href="/categories/{{ $post->category->id }}">{{$post->category->name }}</a>
    </p>



    <div>
        <p>{{$post -> excerpt}} <p>
    </div>
</article>
@endforeach
</x-layout>
