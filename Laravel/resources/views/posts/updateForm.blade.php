<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <head>
    <h1 class='page-header'>Laravelを使った更新機能の実装</h1>
  </head>
  <div class='container'>
    <h2 class='page-header'>投稿内容を変更する</h2>
    {!! Form::open(['url' => '/post/update']) !!}
      <div class="form-group">
        {!! Form::hidden('id', $post->id) !!}
        {!! Form::input('text', 'upPost', $post->post, ['required', 'class' => 'form-control']) !!}
      </div>
      <button type="submit" class="btn btn-primary pull-right">更新</button>
    {!! Form::close() !!}
  </div>
  <footer>
    <small>Laravel@dawn.curriculum</small>
  </footer>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>