@extends('index.top')

@section('content')
    @foreach ($person as $person)
        <div class="person-title">
            <p>{{ $person->name }}</p>
        </div>
    @endforeach
    <div class="content-cost-container">
        <div class="content-cost">
            <div class="input-content-cost">
                <input type="text" class="content" placeholder="内容">
                <input type="text" class="cost" placeholder="金額">
            </div>
            <div>
                <button class="delete-btn btn delete-btn2">削除</button>
            </div>
        </div>
        <div class="content-cost">
            <div class="input-content-cost">
                <input type="text" class="content" placeholder="内容">
                <input type="text" class="cost" placeholder="金額">
            </div>
            <div>
                <button class="delete-btn btn delete-btn2">削除</button>
            </div>
        </div>
    </div>
    <div class="add-store-btn-container">
        <div class="add-store">
            <button class="btn add-btn add-btn2">追加</button>
            <button class="btn store-btn">保存</button>
        </div>
    </div>
@endsection
