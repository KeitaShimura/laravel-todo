<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 class="fs-1" style="margin: 50px 0 0 40px;">TODO一覧、登録画面</h1>
    @error('content')
                <div class="alert alert-danger" style="text-align: center;">{{ $message }}</div>
            @enderror
    <div style="text-align: center;" class="position-relative">
        <form method="POST" action="{{ route('create') }}">
            @csrf
            <h2 class="fs-2" style="text-align: left; margin: 50px 0 0 10%;">TODOアプリ</h2>
            <div class="form" style="text-align: center;">
                <textarea name="content" cols="100" rows="4" placeholder="ここにTOTOを入力" style="width:80%; padding: 5px 10px;">{{ old('content') }}</textarea>
                <div class="button" style="margin-top: 5px;">
                    <button type="submit" class="btn btn-primary">作成</button>
                </div>
            </div>
        </form>
        <article>
                <h3 class="fs-3" style="text-align: center; margin: 50px 0 0 0;">TODOはありません</h3>
                <div class="table-responsive">
                <table class="table" style="margin:30px auto; text-align: center; border-top: 1px solid lightgray; width:80%;" >
                    <thead style="height: 50px;">
                        <tr>
                            <th class="col-3" style="font-weight: bold;">メモの内容</th>
                            <th class="col-3" style="font-weight: bold;">編集</th>
                            <th class="col-3" style="font-weight: bold;">削除</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                                <td class="col-3" style="text-align: left; vertical-align: middle;"></td>
                                <td class="col-3" style="vertical-align: middle;"><a href="update_do.php?id=" class="btn btn-primary">編集</a></td>
                                <form method="post" action="delete.php?id=">
                                    <td class="col-3" style="vertical-align: middle;"><button class="btn btn-danger">削除</button></td>
                                </form>
                            </tr>
                        </tbody>
                </table>
                </div>
        </article>
    </div>
</body>
</html>
