@extends('layouts.app')

@section('content')
    <header>
      <h1 class='page-header'>Laravelを使った投稿機能の実装</h1>
    </header>
    <div class='container'>
      <h2 class='page-header'>新しく投稿をする</h2>
      {!! Form::open(['url' => 'create']) !!}
        <div class="form-group">
          {!! Form::input('text', 'newPost', null, ['required', 'class' => 'form-control', 'placeholder' => '投稿内容内容']) !!}
          {{-- Form::input('type属性の指定', 'name属性の指定', 'フォーム内に初めから入れる初期値の設定', 'その他の属性をまとめて指定' ) --}}
        </div>
        <button type="submit" class="btn btn-success pull-right">追加</button>
      {!! Form::close() !!}
    </div>
  @endsection