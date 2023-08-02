@extends('admin.layouts.app')
@section('title','Edit Roles');
@section('content')
    <div class="card">
        <h1>Eidt role</h1>
        <div>
            <form action="{{route('edit-category',['id'=>request()->route('id')])}}" method="POST" enctype="multipart/form-data">
            @csrf
                <input type="text" placeholder="Name" name="name" value="{{$category->name}}" ><br>
                <button type="submit" class="btn btn-submit btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
