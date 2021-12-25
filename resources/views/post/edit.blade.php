<form method="post" action="{{ route('posts.update', $post->id) }}">
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" value="{{ $post->title }}"><br>
    <label for="title">name:</label><br>
    <input type="text" id="name" name="name" value="{{ $post->name }}"><br>
    <label for="title">email:</label><br>
    <input type="text" id="email" name="email" value="{{ $post->email }}"><br>
    <input type="submit" value="Submit">
</form>


