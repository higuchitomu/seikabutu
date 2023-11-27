    <head>
        <meta charset="utf-8">
        <title>浦和ファンの集い</title>
    </head>
    <body>
        <form action="/comments/replies" method="POST">
            @csrf
            <div class="content">
                <h2>返信内容</h2>
                <textarea name="event[content]" placeholder="投稿に対してのコメント">{{ old('event.content') }}</textarea>
                <p class="content__error" style="color:red">{{ $errors->first('event.content') }}</p>
            </div>
            <input type="hidden" value="{{$event->id}}" name="event[event_id]">
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/event">back</a>]</div>
    </body>
</html>