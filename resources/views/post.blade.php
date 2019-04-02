<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/navbar/">

    <title>文章內頁</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="container">
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://laravelhomework/">Blog</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">           
              <li><a href="http://laravelhomework/">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="../login/">登入</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <h2>{{$post->title}}</h2>
        <p>{{$post->content}}</p>
        <p align="right">文章建立時間:{{$post->created_at}}</p>
        <h3>我要留言</h3>
      <form action="/post" method="post" class="form-horizontal">
        {!! csrf_field() !!}
        <textarea type="text" name="content" rows="10" class="form-control" required="required"></textarea>
        <br>
        <button type="submit" class="btn btn-light">送出留言</button>
      </form>
        <h3>留言列表</h3>
      <form action="{{ route('post.store') }}" method="post">
        {!! csrf_field() !!}
        
      </form>
        <p>{{$post->comment}}</p>
        <p align="right">留言時間:{{$post->created_at}}</p>
      </div>
      
    </div>
  </body>
</html>