{{-- ビューのテンプレート化に伴い、
<head>タグやヘッダー,フッターにあたる箇所を全て削除 --}}

{{-- 以下の記述で継承を行うことができる --}}
@extends('layouts.app')

@section('content')
    <div class='container'>
        <p class="pull-right"><a class="btn btn-success" href="post/create-form">投稿する</a></p>
        <h2 class='page-header'>投稿一覧</h2>
        <table class='table table-hover'>
            <tr>
                <th>投稿No</th>
                <th>投稿内容</th>
                <th>投稿日時</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($list as $list)
            <tr>
                <td>{{ $list->id }}</td>
                <td>{{ $list->post }}</td>
                <td>{{ $list->created_at }}</td>
                <td><a class="btn btn-primary" href="/post/{{$list->id}}/update-form">更新</a></td>
                <td><a class="btn btn-danger" href="/post/{{$list->id}}/delete" onclick="return confirm('この投稿を削除してもよろしいですか？')">削除</a></td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection