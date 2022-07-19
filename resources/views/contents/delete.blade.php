<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/reset.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <title>削除確認</title>
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
                <h2 class="form-title">以下のデータを削除しますか？</h2>
                <form method="delete" action="{{ route('contents.destory', $user) }}">
                    @method('DELETE')
                    @csrf
                    <div class="form-list">
                        <label for="category">項目</label>
                        <input type="text" class="item" name="category" placeholder="食費" value="{{ old('category', $user->category) }}">
                    </div>
                    <div class="form-list">
                        <label for="price">金額</label>
                        <input type="text" class="price" name="price" placeholder="1000" value="{{ old('price', $user->price) }}">
                    </div>
                    <div class="form-list">
                        <label for="note">メモ</label>
                        <input type="text" class="text" name="note" placeholder="コンビニで購入" value="{{ old('note', $user->note) }}">
                    </div>
                    <div class="form-list-btn">
                        <button class="delete-button" type="submit" name="delete-button">削除</button>
                    </div>
                    <a class = "back-button" href="{{ route('contents.index') }}">戻る</a>
                </form>
            </div>
        </section>
    </main>
<script src="js/main.js"></script>
</body>
</html>
