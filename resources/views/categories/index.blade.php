@extends('dashboard.layout.new-master')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>ردیف</th>
            <th>نام دسته بندی</th>
            <th>عملیات</th>
        </tr>
        </thead>
        @foreach($categories as $category)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{$category->title}}</td>
            <td><a href="{{route('categories.edit',['category'=> $category->id])}}" class="btn btn-sm btn-primary">ویرایش</a>

                <a href="{{route('categories.destroy',['category'=> $category->id])}}" onclick="return confirm('آیا مطمئن هستید؟')" class="btn btn-sm btn-danger">حذف</a></td>
        </tr>
            @endforeach
    </table>
@endsection
