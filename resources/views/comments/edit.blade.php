<body>
    <h1 class="title">投稿編集画面</h1>
    <div class="content">
        <form action="/comments/{{ $comment->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>投稿タイトル</h2>
                <input type='text' name='comment[title]' value="{{ $comment->title }}">
            </div>
            <div class='content__content'>
                <h2>投稿内容</h2>
                <input type='text' name='comment[content]' value="{{ $comment->content }}">
            </div>
            <input type="submit" value="保存">
        </form>
        <div class="back">[<a href="/comments/{{ $comment->id }}">back</a>]</div>
    </div>
</body>