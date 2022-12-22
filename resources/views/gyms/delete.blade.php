<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Sugugym</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class ="gyms">
            @foreach($gyms as $gym)
                <div class ="gym">
                    <p class="border" style=border : solid medium rgb(0,0,0)>
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
                        <button class ='show'>
                            <a href ="/gyms/{{ $gym->id }}">詳細ページへ</a>
                        </button>
                        <form action="/gyms/{{ $gym->id }}" id="form_{{ $gym->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{ $gym->id }})">delete</button> 
                        </form>
                    </p>
                </div>
            @endforeach
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <script>
            function deletePost(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>