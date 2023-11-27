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
        {{ $event->title}}
        </h1>
        <h2 Class= 'content'>
            <div class='content_event'>
                <p class='content'>{{ $event->content }}</p>
            </div>
        </h2>
        <div class="edit"><a href="/events/{{ $event->id }}/edit">edit</a></div>
        <div class="create"><a href="/events/{{ $event->id }}/participants">create</a></div>
        <div class='footer'>
            <a href="/event">戻る</a>
        </div>
    </body>    
</html>