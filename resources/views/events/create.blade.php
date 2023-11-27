<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>浦和ファンの集い</title>
    </head>
    <body>
        <form action="/events" method="POST">
            @csrf
            <div class="title">
                <h2>[投稿タイトル]</h2>
                <input type="text" name="event[title]" placeholder="投稿タイトル" value="{{ old('event.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('event.title') }}</p>
            </div>
            <div class="content">
                <h2>[投稿内容]</h2>
                <textarea name="event[content]" placeholder="投稿内容">{{ old('event.content') }}</textarea>
                <p class="content__error" style="color:red">{{ $errors->first('event.content') }}</p>
            </div>
            <input type="submit" value="[保存]">
        </form>
        <div class="back">[<a href="/event">back</a>]</div>
    </body>
</html>
</x-app-layout>