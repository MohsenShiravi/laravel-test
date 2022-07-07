@extends('dashboard.layout.new-master')
@section('title','ایجاد نقش')
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
    <form  action="{{route('roles.update',['role'=>$role->id])}}" method="post" class="row g-3 mt-8">
        @csrf
        <div class="col-md-6">
            <label  class="form-label">نام نقش</label>
            <input type="text" class="form-control" name="title" value="{{old('title',$role->title)}}" >
        </div>
        <div class="form-row">
            @foreach($permissions as $permission)
                <label for="" class="pr-4">
                    <input type="checkbox" name="permissions[]"
                           @if($role->hasPermission($permission)) checked @endif
                           id="" value="{{$permission->id}}">{{$permission->title}}
                </label>
            @endforeach
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">ثبت</button>
        </div>
    </form>
@endsection
