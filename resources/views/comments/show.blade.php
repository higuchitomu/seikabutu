<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>浦和ファンの集い</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      
    </head>
    <body class="antialiased">
        <h1 class='title'>
        {{ $comment->title}}
        </h1>
        <h2 Class= 'content'>
            <div class='content_comment'>
                <p class='content'>{{ $comment->content }}</p>
            </div>
        </h2>
        <div class="edit"><a href="/comments/{{ $comment->id }}/edit">edit</a></div>
        <div class='footer'>
            <a href="/comment">戻る</a>
            <a href="/comments/{{ $comment->id }}/replies">返信</a>
        </div>
        @foreach($comment->replies as $reply)
        <div>{{$reply->content}}</div>
        @endforeach
        <a href="">{{ $comment->category->name }}</a>
        <small>{{ $comment->user->name }}</small>
    </body>    
</html>

     