<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>
            <a href="">Add new</a>
        </th>
    </thead>
    <tbody>
        @foreach ($products as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->cate_id}}</td>
                <td>
                    <a href="">Edit</a>
                    <a href="{{route('product.remove', ['id' => $item->id])}}">Remove</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>