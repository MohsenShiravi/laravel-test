@extends('dashboard.layout.new-master')
@section('title','ویرایش دسته بندی')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form  action="{{route('categories.update',['category'=>$category->id])}}" method="post" >
        @csrf
        <div class="col-md-6">
            <label  class="form-label">ویرایش دسته بندی</label>
            <input type="text" class="form-control" name="title" value="{{$category->title}}" >
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">ثبت</button>
        </div>
    </form>
@endsection
