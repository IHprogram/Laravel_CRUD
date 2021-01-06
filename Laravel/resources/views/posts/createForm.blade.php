<!DOCTYPE html>
<html>

  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='/css/app.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>

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
    <footer>
      <small>Laravel@dawn.curriculum</small>
    </footer>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>

</html>