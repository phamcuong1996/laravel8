<h1>Day la tinh nang them moi</h1>

<form method="post" action="{{ route('users.store') }}">
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    <label for="title">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="title">email:</label><br>
    <input type="text" id="email" name="email"><br>
    <label for="title">phone:</label><br>
    <input type="text" id="phone" name="phone"><br>
    <input type="submit" value="Submit">
</form>
