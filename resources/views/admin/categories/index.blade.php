@extends('admin.layouts.app')
@section('title','Roles')
@section('content')
    <div><a href="{{route('add-category')}}">Thêm danh mục</a></div>
    <form action="{{route('search-category')}}" method="POST">
        @csrf
        <input type="text" name="searchCategory">
        <input type="submit" value="Search" name="btnSend">
    </form>

    <table class="table table-striped table-hover">
        <th>ID</th>
        <th>Name</th>
        <th>Thao tác</th>
        @foreach($listCategory as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td><a href="{{route('edit-category',['id'=>$category->id])}}">Sửa</a></td>
                {{--                <td><a href="{{route('delete-category',['id'=>$category->id])}}">Xóa</a></td>--}}
            </tr>
        @endforeach

    </table>

@endsection
