<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" container="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('./css/style.css') }}">
    <script type="text/javascript" src="{{ asset('./js/main.js') }}"></script>
    <title>Top画面</title>
</head>
<body>
    <div class="container">
        <div class="screen-container">
            @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            <div class="input-clear-add-container">
                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <input id="text" type="text" name="name" placeholder="名前">
                    <div class="btn-container">
                        <button class="clear-btn btn" type="button" onclick="clearChar()">クリア</button>
                        <button class="add-btn btn" type="submit">追加</button>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </form>
            </div>
            <div class="two-containers">
                <div class="persson-information-container">
                    <div class="person-information">
                            @if ($persons->isNotEmpty())
                                @foreach ($persons as $person)
                                    <div class="selected-person-container">
                                        <p><a href="#">{{ $person->name }}</a></p>
                                        <button class="delete-btn btn">削除</button>
                                    </div>
                                @endforeach
                            @else
                                <div class="selected-person-container">
                                    {{-- <p><a href="#"></a></p>
                                    <button class="delete-btn btn">削除</button> --}}
                                </div>
                            @endif
                    </div>
                    <div class="total-btn-container">
                        <button class="total-btn btn">集計</button>
                    </div>
                </div>
                <div class="persson-detail-container">
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>