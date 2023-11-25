<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('浦和ファン掲示板') }}
        </h2>
    </x-slot>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>浦和ファンの集い</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class="text-6xl">浦和ファンの集い</div>
        <a href='/comments/create'> <div class="text-red-500">[投稿作成画面に移動]</div></a>
        <div class='comments'>
            @foreach ($comments as $comment)
                <div class='comment'>
                    <a href="/comments/{{ $comment->id }}"><h2 class='title'>{{ $comment->title }}</h2></a>
                    <p class='content'>{{ $comment->content }}</p>
                    <form action="/comments/{{ $comment->id }}" id="form_{{ $comment->id }}" method="post">
                       @csrf
                       @method('DELETE')
                    <button type="button" onclick="deleteComment({{ $comment->id }})">delete</button> 
                  </form>
                </div>
                <a href="/categories/{{ $comment->category->id }}">{{ $comment->category->name }}</a>
                <small>{{ $comment->user->name }}</small>
            @endforeach
            </div>
            <div class='paginate'>{{ $comments->links()}}</div>
            <script>
    function deleteComment(id) {
        'use strict'
        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
            }
         }
         </script>
    </body>
</html>
</x-app-layout>