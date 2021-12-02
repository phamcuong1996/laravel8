<h1>hello</h1>

@foreach ($posts as $post)
    <p>This is user {{ $post->title }}</p>
@endforeach
