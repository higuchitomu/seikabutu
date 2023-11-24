<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/comments" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="comment[title]" placeholder="タイトル" value="{{ old('comment.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('comment.title') }}</p>
            </div>
            <div class="content">
                <h2>Body</h2>
                <textarea name="comment[content]" placeholder="今日も1日お疲れさまでした。">{{ old('comment.content') }}</textarea>
                <p class="content__error" style="color:red">{{ $errors->first('comment.content') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/comment">back</a>]</div>
    </body>
</html>