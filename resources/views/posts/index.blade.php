@extends('dashboard.layout.new-master')
@section('title','پست ها')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>ردیف</th>
            <th>نام </th>
            <th>محتوای کوتاه </th>
            <th>محتوا </th>
            <th>دسته بندی</th>
            <th>وضعیت</th>
            <th>عملیات</th>
        </tr>
        </thead>
        @foreach($posts as $post)

            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->short_content}}</td>
                <td>{{$post->content}}</td>

                <td>{{$post->category->title}}</td>
              h
                <td>{{$post->status}}</td>
                <td><a href="{{route('posts.edit',['post'=> $post->id])}}" class="btn btn-sm btn-primary">ویرایش</a>

                    <a href="{{route('posts.destroy',['post'=> $post->id])}}" onclick="return confirm('آیا مطمئن هستید؟')" class="btn btn-sm btn-danger">حذف</a></td>
            </tr>
        @endforeach
    </table>
@endsection

