@extends('layouts.main')
{{-- @section('title', 'Trang chủ') --}}
@section('content')
    <h2>hello, {{ ucwords($name) }}</h2>
    <p>Tuổi: {{$age}}</p>
    <p>Giới tính: {{$gender == 1? "Nam" : "Nữ"}}</p>
    <p>Tiểu sử: {!! $bio !!}</p>

    @php
        $name .= " dep trai";
        $num = 100;
    @endphp

    <h2>{{$name}}</h2>
    
    
@endsection
@section('page-script')
<script>
    $('h2').click(function(){
        $(this).toggleClass('txt-red');
    })
</script>
@endsection
