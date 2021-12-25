<h1>hello</h1>

<form method="post" action="{{ route('posts.store') }}">
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="title">name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="title">email:</label><br>
    <input type="text" id="email" name="email"><br>
    <input type="submit" value="Submit">
    <input type="submit" value="Submit">
</form>
