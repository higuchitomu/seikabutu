<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      
    </head>
    <body class="antialiased">
        <h1 class='title'>
        {{ $comment->title}}
        </h1>
        <div Class= 'content'>
            <div class='content_comment'>
                <h3>本文</h3>
                <p class='content'>{{ $comment->content }}</p>
            </div>
        </div>
        <div class="edit"><a href="/comments/{{ $comment->id }}/edit">edit</a></div>
        <div class='footer'>
            <a href="/comment">戻る</a>
        </div>
        <a href="">{{ $comment->category->name }}</a>
        <small>{{ $comment->user->name }}</small>
        <a href="/categories/{{ $comment->category->id }}">{{ $comment->category->name }}</a>
        <small>{{ $comment->user->name }}</small>
    </body>    
</html>