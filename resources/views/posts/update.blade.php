<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO - 編集</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1 class="fs-1" style="margin: 50px 0 0 40px;">TODO編集画面</h1>
    <div style="text-align: center;" >
        <h2 class="fs-1" style="text-align: left; margin: 50px 0 10px 10%;">TODOアプリ</h2>
        <form method="POST" action="{{ route('update', ['id' => $post->id ]) }}">
            @csrf
            <input type="hidden" name="id" value="">
            <textarea name="content" cols="100" rows="4"  style="width:80%; padding: 5px 10px;">{{ $post->content }}</textarea>
            <div class="button" style="margin-top: 5px;">
                <a href="/" class="btn btn-secondary">戻る</a>
                <button type="submit" class="btn btn-primary">更新</button>
            </div>
        </form>
    </div>
</body>
</html>