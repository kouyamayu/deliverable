<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $gym->name }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <p class ='name'>{{ $gym->name }}</p>
        <p class ='price'>月額{{ $gym->price }}円</p>
        <div class ='is_24_hours'>
            @if(($gym -> is_24_hours) === 1)
                営業時間：24時間
            @else
                営業時間：{{ $gym->is_24_hours }}時
            @endif
        </div>
        <p class ='contents'>{{ $gym->contents }}</p>
         <p class ='address'>{{ $gym->address }}</p>
        <button class ='url'>
            <a href ="{{ $gym->url }}">公式サイトへ</a>
        </button>
        <div class="edit">
            <a href="/gyms/{{ $gym->id }}/edit">edit</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>