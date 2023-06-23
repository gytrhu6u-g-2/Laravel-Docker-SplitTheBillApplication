@extends('index.top')

@section('content')
    @foreach ($person as $person)
        <div class="person-title">
            <p>{{ $person->name }}</p>
        </div>
    @endforeach
    <div class="content-cost-container">
            @foreach ($datas as $data)
                <div class="content-cost">
                    <div class="input-content-cost">
                        <input type="text" class="content" placeholder="内容" value="{{ $data->content }}">
                        <input type="text" class="cost" placeholder="金額" value="{{ $data->cost }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    </div>
                    <div>
                        <button class="delete-btn btn delete-btn2">削除</button>
                    </div>
                </div>
            @endforeach
    </div>
    <div class="add-store-btn-container">
        <div class="add-store">
            <form action="{{ route('add', ['name'=>$person->name]) }}" method="GET">
                <button type="submit" class="btn add-btn add-btn2">追加</button>
            </form>
            <button class="btn store-btn">保存</button>
        </div>
    </div>
@endsection
