<form action="" method="get">
    <div>
        <label for="">Từ khóa</label>
        <input type="text" name="keyword" value="{{$searchData['keyword']}}" placeholder="Tìm theo tên sản phẩm">
    </div>
    <div>
        <label for="">Danh mục</label>
        <select name="cate_id" >
            <option value="">Tất cả</option>
            @foreach ($categories as $item)
                <option @if($item->id == $searchData['cate_id']) selected @endif value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="">Tên cột</label>
        <select name="column_names" >
            @foreach ($column_names as $key => $item)
                <option  @if($key == $searchData['column_names']) selected @endif value="{{$key}}">{{$item}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="">Sắp xếp theo</label>
        <select name="order_by" >
            @foreach ($order_by as $key => $item)
                <option @if($key == $searchData['order_by']) selected @endif value="{{$key}}">{{$item}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">Tìm kiếm</button>
    </div>
</form>
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