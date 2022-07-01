@extends('dashboard.layout.new-master')
@section('title','ویرایش نقش')
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
    <form  action="{{route('roles.update',['role'=>$role->id])}}" method="post" >
        @csrf
        <div class="col-md-6">
            <label  class="form-label">ویرایش نقش</label>
            <input type="text" class="form-control" name="title" value="{{$role->title}}" >
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">ثبت</button>
        </div>
    </form>
@endsection
