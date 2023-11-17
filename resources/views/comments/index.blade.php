<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('浦和ファン秘密情報交換広場') }}
        </h2>
    </x-slot>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>掲示板</h1>
        <a href='/comments/create'>create</a>
        <div class='comments'>
            @foreach ($comments as $comment)
                <div class='comment'>
                    <a href="/comments/{{ $comment->id }}"><h2 class='title'>{{ $comment->title }}</a></h2>
                    <p class='content'>{{ $comment->content }}</p>
                    <form action="/comments/{{ $comment->id }}" id="form_{{ $comment->id }}" method="post">
                       @csrf
                       @method('DELETE')
                    <button type="button" onclick="deleteComment({{ $comment->id }})">delete</button> 
                  </form>
                </div>
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