<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Sugugym</title>
        
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>ジム情報を入力</h1>
        <form action="/gyms" method="POST">
            @csrf
            <div class="name">
                <h2>Name</h2>
                <input type="text" name="gym[name]" placeholder="ジム名を入力" value="{{ old('gym.name') }}"/>
                <p class="name__error" style="color:red">{{ $errors->first('gym.name') }}</p>
            </div>
            <div class="city_id">
                <h2>City</h2>
                <select name="gym[city_id]">
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="price">
                <h2>Price</h2>
                <textarea name="gym[price]" placeholder="月額を入力">{{ old('gym.price') }}</textarea>
                <p class="price__error" style="color:red">{{ $errors->first('gym.price') }}</p>
            </div>
            <div class="is_24_hours">
                <h2>Is_24_hours</h2>
                <textarea name="gym[is_24_hours]" placeholder="1 or 営業時間を入力">{{ old('gym.is_24_hours') }}</textarea>
                <p class="is_24_hours__error" style="color:red">{{ $errors->first('gym.is_24_hours') }}</p>
            </div>
            <div class="contents">
                <h2>Contents</h2>
                <textarea name="gym[contents]" placeholder="内容を入力">{{ old('gym.contents') }}</textarea>
                <p class="contents__error" style="color:red">{{ $errors->first('gym.contents') }}</p>
            </div>
            <div class="url">
                <h2>URL</h2>
                <textarea name="gym[url]" placeholder="URLを入力">{{ old('gym.url') }}</textarea>
                <p class="url__error" style="color:red">{{ $errors->first('gym.url') }}</p>
            </div>
            <div class="address">
                <h2>Address</h2>
                <textarea name="gym[address]" placeholder="住所を入力">{{ old('gym.address') }}</textarea>
                <p class="address__error" style="color:red">{{ $errors->first('gym.address') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>