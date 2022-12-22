<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Sugugym</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>市区町村を登録</h1>
        <form action="/gyms/create" method="POST">
            @csrf
            <div class="name">
                <h2>Name</h2>
                <input type="text" name="city[name]" placeholder="市区町村名を入力" value="{{ old('city.name') }}"/>
                <p class="name__error" style="color:red">{{ $errors->first('city.name') }}</p>
            </div>
            <div class="prefecture_id">
                <h2>Prefecture</h2>
                <select name="city[prefecture_id]">
                    @foreach($prefectures as $prefecture)
                        <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>