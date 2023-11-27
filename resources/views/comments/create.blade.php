<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>浦和ファンの集い</title>
    </head>
    <body>
        <form action="/comments" method="POST">
            @csrf
            <div class="title">
                <h2>[投稿タイトル]</h2>
                <input type="text" name="comment[title]" placeholder="投稿タイトル" value="{{ old('comment.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('comment.title') }}</p>
            </div>
            <div class="content">
                <h2>[投稿内容]</h2>
                <textarea name="comment[content]" placeholder="投稿内容">{{ old('comment.content') }}</textarea>
                <p class="content__error" style="color:red">{{ $errors->first('comment.content') }}</p>
            </div>
            <div class="category">
            <h2>[投稿内容のジャンル]</h2>
            <select name="comment[category_id]">
            @foreach($categories as $category)
               <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
            </select>
            </div>
            <input type="submit" value="[保存]">
        </form>
        <div class="back">[<a href="/comment">back</a>]</div>
    </body>
</html>
</x-app-layout>