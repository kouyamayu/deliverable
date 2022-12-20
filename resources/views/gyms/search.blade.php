<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Sugugym</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <h1>Sugugym</h1>
        <form method="POST" action="/gyms/search">
            @csrf
            <input type="search" placeholder="店舗名を入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
            <div>
                <button type="submit">検索</button>
                <button>
                    <a href="/gyms/search" class="text-white">
                        クリア
                    </a>
                </button>
            </div>
        </form>
        <div class="container-fluid bg-light ">
        	<div class="row align-items-center justify-content-center">
                <div class="col-md-2 pt-3">
                   <div class="form-group ">
                      <select id="inputState " class="form-control">
                        <option selected>地域名</option>
                        <option>あ</option>
                      </select>
                   </div>
                </div>
        		<div class="col-md-2 pt-3">
                   <div class="form-group">
                      <select id="inputState" class="form-control">
                        <option selected>Model</option>
                        <option>BMW</option>
                        <option>Audi</option>
                        <option>Maruti</option>
                        <option>Tesla</option>
                      </select>
                   </div>
                </div>
                <div class="col-md-2 pt-3">
                    <div class="form-group">
                      <select id="inputState" class="form-control">
                        <option selected>Budget</option>
                        <option>BMW</option>
                        <option>Audi</option>
                        <option>Maruti</option>
                        <option>Tesla</option>
                      </select>
                    </div>
                </div>
                <div class="col-md-2 pt-3">
                    <div class="form-group">
                      <select id="inputState" class="form-control">
                        <option selected>Type</option>
                        <option>BMW</option>
                        <option>Audi</option>
                        <option>Maruti</option>
                        <option>Tesla</option>
                      </select>
                    </div>
                </div>
                <div class="col-md-2">
                   <button type="button" class="btn btn-primary btn-block">Search</button>
                </div>
        	</div>
        </div>
        <button>
            <a href="/gyms/sort" class="sort">
            月額が安い順に並び替え
            </a>
        </button>
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
                    </p>
                </div>
            @endforeach
        </div>
    </body>
</html>