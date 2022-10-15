<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memo show</title>
</head>
<body>
    <a href="/memos">戻る</a>
    <h1>{{ $memo->title }}</h1>
    <p>{!! nl2br(e($memo->body)) !!}</p>

    <div class="button-group">
        <!-- $memoのidを元に編集ページへ遷移する -->
        <button onclick="location.href='/memos/{{ $memo->id }}/edit'">編集する</button>
        <form action="/memos/{{ $memo->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
    </div>
</body>
</html>
