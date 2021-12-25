<h1>CRUD laravel</h1>
@foreach ($users as $user)
    <tr>
        <td> {{ $user->name }}</td>
        <td> {{ $user->email }}</td>
        <td> {{ $user->phone }}</td>
    </tr>

@endforeach
