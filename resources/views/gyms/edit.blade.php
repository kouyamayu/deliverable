<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Sugugym</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/gyms/{{ $gym->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__name'>
                    <h2>Name</h2>
                    <input type='text' name='gym[name]' value="{{ $gym->name }}">
                </div>
                <div class='content_city_id'>
                    <h2>City</h2>
                    <select name="gym[city_id]">
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
                </div>
                <div class="content_is_24_hours">
                    <h2>Is_24_hours</h2>
                    <textarea name="gym[is_24_hours]" placeholder="1 or 営業時間を入力">{{ $gym->is_24_hours }}</textarea>
                </div>
                <div class="content_contents">
                    <h2>Contents</h2>
                    <textarea name="gym[contents]" placeholder="内容を入力">{{ $gym->contents }}</textarea>
                </div>
                <div class="content_url">
                    <h2>URL</h2>
                    <textarea name="gym[url]" placeholder="URLを入力">{{ $gym->url }}</textarea>
                </div>
                <div class="content_address">
                    <h2>Address</h2>
                    <textarea name="gym[address]" placeholder="住所を入力">{{ $gym->address }}</textarea>
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
        </body>
</html>