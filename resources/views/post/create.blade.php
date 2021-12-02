<h1>hello</h1>

<form method="post" action="{{ route('posts.store') }}">
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br>
    <input type="submit" value="Submit">
</form>
