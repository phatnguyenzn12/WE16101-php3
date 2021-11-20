@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                  <label for="">Tên sản phẩm</label>
                                  <input type="text" name="name" value="{{$model->name}}" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">Ảnh</label>
                                    <input type="file" name="image" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">Số lượng:</label>
                                    <input type="text" name="quantity" value="{{$model->quantity}}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Danh mục</label>
                                    <select name="cate_id" class="form-control">
                                        @foreach ($categories as $item)
                                            <option @if($item->id == $model->cate_id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Gía</label>
                                    <input type="text" name="price" value="{{$model->price}}" class="form-control" placeholder="">
                                </div>
                                
                            </div>
                            <div class="col-12 mb-4">                
                                <div class="form-group">
                                    <label for="">Chi tiết:</label>
                                    <textarea name="detail" rows="10" class="form-control">{{$model->detail}}</textarea>
                                  </div>
                            </div>
                            
                            <div class="col-12 d-flex justify-content-end">
                                <br>
                                <a href="{{route('product.index')}}" class="btn btn-danger">Hủy</a>
                                &nbsp;
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
    