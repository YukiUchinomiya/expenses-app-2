<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/reset.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <title>家計簿</title>
</head>
<body>
    <!--タイトル-->
    <header>
        <div class="page-header">
            <h1 class="title-text">家計簿</h1>
        </div>
    </header>
    <main>
        <!-- 入力フォーム -->
        <section class="wrapper form">
            <div class="content-form">
                <h2 class="form-title">項目/金額入力</h2>
                <form action={{ route('contents.create') }} method="post">
                    @csrf
                    <div class="form-list">
                        <label for="category">項目</label>
                        <input type="text" class="item" name="category" placeholder="食費" value="{{ old('category') }}">
                        @error('category')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-list">
                        <label for="price">金額</label>
                        <input type="text" class="price" name="price" placeholder="1000" value="{{ old('price') }}">
                        @error('price')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-list">
                        <label for="note">メモ</label>
                        <input type="text" class="text" name="note" placeholder="コンビニで購入" value="{{ old('note') }}">
                    </div>
                    <div class="form-list-btn">
                        <button id="submit-event" onclick="submitAlert()" class="submit-button" type="submit" name="submit-button">送信</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- 最新10件表示 -->
        <section class="wrapper table">
            <div class="content-table">
                <h2 class="table-title">最新10件</h2>
                <table class="table-container">
                    <!-- 表示項目タイトル -->
                    <tr class="table-row-header">
                        <th class="table-header">id</th>
                        <th class="table-header">項目</th>
                        <th class="table-header">金額</th>
                        <th class="table-header">削除</th>
                    </tr>
                    <!-- 最新表示データ10件 -->
                    @foreach ($users as $user)
                    <tr class="table-row-data">
                        <td id="id" class="table-data">{{ e($user->id) }}</td>
                        <td id="category" class="table-data"><a href="{{ route('contents.detail', $user) }}">{{ e($user->category)}}</a></td>
                        <td id="price" class="table-data"><a href="{{ route('contents.detail', $user) }}">{{ e($user->price) }}</a></td>
                        <td class="table-data"><a href="{{ route('contents.delete', $user) }}"><button class="delete-button" type="get" name="delete-button">削除</button></a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </section>
    </main>
    <script src="{{ asset('script.js') }}"></script>
</body>
</html>
