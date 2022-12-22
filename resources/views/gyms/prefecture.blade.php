<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Sugugym</title>
        
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>県名を入力</h1>
        <form action="/gyms/city" method="POST">
            @csrf
            <div class="name">
                <h2>Name</h2>
                <select>
                    @foreach($prefectures as $prefecture)
                        <option>{{ $prefecture->name }}</option>
                    @endforeach
                </select>
                <input type="text" name="prefecture[name]" placeholder="県名を入力" value="{{ old('prefecture.name') }}"/>
                <p class="name__error" style="color:red">{{ $errors->first('prefecture.name') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>