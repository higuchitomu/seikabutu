<body>
    <h1 class="title">投稿編集画面</h1>
    <div class="content">
        @if (Auth::user()->id == $event->user_id)
        <form action="/events/{{ $event->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='event__title'>
                <h2>投稿タイトル</h2>
                <input type='text' name='event[title]' value="{{ $event->title }}">
            </div>
            <div class='event__content'>
                <h2>投稿内容</h2>
                <input type='text' name='event[content]' value="{{ $event->content }}">
            </div>
            <input type="submit" value="保存">
        </form>
        @endif
        <div class="back">[<a href="/events/{{ $event->id }}">back</a>]</div>
    </div>
</body>