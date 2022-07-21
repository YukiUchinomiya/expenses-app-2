<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/reset.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <title>削除完了</title>
</head>
<body>
    <!--タイトル-->
    <header>
        <div class="page-header">
            <h1 class="title-text">accountbook</h1>
        </div>
    </header>
    <main>
        <section class="wrapper form">
            <div class="content-form">
                <h2 class="form-title">削除が完了しました</h2>
                    <a class = "back-button" href="{{ route('contents.index') }}">戻る</a>
            </div>
        </section>
    </main>
<script src="js/main.js"></script>
</body>
</html>
