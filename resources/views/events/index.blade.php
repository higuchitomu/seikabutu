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
        <a href='/events/create'> <div class="text-red-500">[投稿作成画面に移動]</div></a>
        <div class='events'>
            @foreach ($events as $event)
                <div class='event'>
                    <a href="/events/{{ $event->id }}"><h2 class='title'>{{ $event->title }}</h2></a>
                    <p class='content'>{{ $event->content }}</p>
                    <form action="/events/{{ $event->id }}" id="form_{{ $event->id }}" method="post">
                        @if (Auth::user()->id == $event->user_id)
                       @csrf
                       @method('DELETE')
                    <button type="button" onclick="deleteEvent({{ $event->id }})">delete</button>
                    @endif
                  </form>
                </div>
            @endforeach
            </div>
            <div class='paginate'>{{ $events->links()}}</div>
            <script>
    function deleteEvent(id) {
        'use strict'
        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
            }
         }
         </script>
    </body>
</html>
</x-app-layout>