<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </thead>
    <tbody>
        @foreach ($users as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                <td>
                    <a href="{{route('users.show', ['user' => $u->id])}}">Chi tiết</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>