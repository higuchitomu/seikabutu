<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('浦和ファン秘密情報交換広場') }}
        </h2>
    </x-slot>
     <head>
        <meta charset="utf-8">
    　　 <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
   <h1>Blog Name</h1>
        <a href='/comments/create'>create</a>
        <div class='comments'>
            @foreach ($comments as $comment)
                <div class='comment'>
                    <a href="/comments/{{ $comment->id }}"><h2 class='title'>{{ $comment->title }}</a></h2>
                    <p class='body'>{{ $comment->body }}</p>
                    <form action="/comments/{{ $comment->id }}" id="form_{{ $comment->id }}" method="comment">
                       @csrf
                       @method('DELETE')
                    <button type="button" onclick="deletePost({{ $comment->id }})">delete</button> 
                  </form>
                </div>
            @endforeach
        </div>
         
            <script>
    function deletePost(id) {
        'use strict'
        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
            }
         }
         </script>
</x-app-layout>
