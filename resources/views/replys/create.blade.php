    <head>
        <meta charset="utf-8">
        <title>浦和ファンの集い</title>
    </head>
    <body>
        <form action="/comments/replies" method="POST">
            @csrf
            <div class="content">
                <h2>返信内容</h2>
                <textarea name="comment[content]" placeholder="投稿に対してのコメント">{{ old('comment.content') }}</textarea>
                <p class="content__error" style="color:red">{{ $errors->first('comment.content') }}</p>
            </div>
            <input type="hidden" value="{{$comment->id}}" name="comment[comment_id]">
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/comment">back</a>]</div>
    </body>
</html>