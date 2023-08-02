@extends('admin.layouts.app')
@section('title','Create Category')
@section('content')
    <div class="card">
        <h1>Create category</h1>
        <div>
            <form action="{{route('add-category')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group input-group-static mb-4">
                    <label>Name</label>
                    <input type="text"  name="name" class="form-control">
{{--                    @error('name')--}}
{{--                    <span class="text-danger">{{ $message }}</span>--}}
{{--                    @enderror--}}
                </div>

                <button type="submit" class="btn btn-submit btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
