@extends('dashboard.layout.new-master')
@section('title','ایجاد دسته بندی')
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
    <form  action="{{route('categories.store')}}" method="post" class="row g-3 mt-8">
        @csrf
        <div class="col-md-6">
            <label  class="form-label">نام دسته بندی</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}" >
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">ثبت</button>
        </div>
    </form>
@endsection
