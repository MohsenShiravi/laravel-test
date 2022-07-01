@extends('dashboard.layout.new-master')
@section('title','نمایش نقش ها')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>ردیف</th>
            <th>نام نقش</th>
            <th>عملیات</th>
        </tr>
        </thead>
        @foreach($roles as $role)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{$role->title}}</td>
            <td><a href="{{route('roles.edit',['role'=> $role->id])}}" class="btn btn-sm btn-primary">ویرایش</a>

                <a href="{{route('roles.destroy',['role'=> $role->id])}}" onclick="return confirm('آیا مطمئن هستید؟')" class="btn btn-sm btn-danger">حذف</a></td>
        </tr>
            @endforeach
    </table>
@endsection
