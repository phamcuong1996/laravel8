<h1>CRUD laravel</h1>
@foreach ($posts as $post)
<tr>
    <td> {{ $post->title }}</td>
    <td> {{ $post->name }}</td>
    <td> {{ $post->email }}</td>
</tr>

@endforeach
