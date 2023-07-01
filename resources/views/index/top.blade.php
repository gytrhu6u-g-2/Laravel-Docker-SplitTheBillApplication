<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" container="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('./css/style.css') }}">
    <script type="text/javascript" src="{{ asset('./js/main.js') }}"></script>
    <title>@yield('title', 'Top画面')</title>
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
            @if (session('success_msg'))
                <div class="alert alert-success">
                    <ul>
                        <li>{{ session('success_msg') }}</li>
                    </ul>
                </div>
            @endif
            @if (session('err_msg'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{{ session('err_msg') }}</li>
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
                        @if (!empty($persons))
                            @foreach ($persons as $person)
                                <div class="selected-person-container">
                                    <p><a href="{{ route('amount', ['id'=>$person->id]) }}">{{ $person->name }}</a></p>
                                    <form method="POST" action="{{ route('delete', $person->id) }}">
                                        @csrf
                                        <button type="submit" class="delete-btn btn" onclick="return confirmDelete()">削除</button>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    </form>
                                </div>
                            @endforeach
                        @else
                            <div class="selected-person-container">
                                <p><a href="#"></a></p>
                                <button class="delete-btn btn">削除</button>
                            </div>
                        @endif
                    </div>
                    <div class="total-btn-container">
                        <button class="total-btn btn" onclick="location.href='{{ route('showTotaling') }}'">集計</button>
                    </div>
                </div>
                <div class="persson-detail-container">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>