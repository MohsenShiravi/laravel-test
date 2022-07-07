@extends('dashboard.layout.new-master')
@section('title','نمایش تگ ها')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>ردیف</th>
            <th>نام تگ</th>
            <th>تاریخ ایجاد</th>
            <th>پست</th>
        </tr>
        </thead>
        @foreach($tags as $tag)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{$tag->title}}</td>
                @foreach($tag->posts as $post)
                    <td>{{$post->pivot->created_at}}</td>
                <td>{{$post->title}}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
@endsection
