<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Sugugym</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Sugugym</h1>
        <form method="GET" action="{{ route('search') }}">
            <input type="search" placeholder="店舗名を入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
            <div>
                <button type="submit">検索</button>
                <button>
                    <a href="{{ route('gyms.index') }}" class="text-white">
                        クリア
                    </a>
                </button>
            </div>
        </form>
        <div>
        　// 下記のようにページネーターを記述するとページネートで次ページに遷移しても、検索結果を保持する
            {{ $institutions->appends(request()->input())->links() }}
        </div>
    </body>
</html>