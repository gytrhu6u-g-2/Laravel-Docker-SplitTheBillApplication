@extends('index.top')

@section('title', '追加画面')

@section('content')
@foreach ($person as $person)
<div class="person-title">
    <p>{{ $person->name }}</p>
</div>
@endforeach
{{-- <form action="{{ route('update') }}" id="update" method="POST">
    @csrf
    <input type="hidden" name="name[][name]" value="{{ $person->name }}">
    <div class="content-cost-container">
        <p></p>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
</form> --}}

    <div class="content-cost-container">
        <form action="{{ route('contentStore') }}" id="update" method="POST">
            @csrf
            <input type="hidden" name="name[][name]" value="{{ $person->name }}">
            <div id="content-cost-container">
                {{-- 【内容・金額】javascriptで動的に追加 --}}
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </form>
    </div>

<div class="add-store-btn-container">
    <div class="add-store">
        {{-- <form action="{{ route('add', ['name'=>$person->name]) }}" method="GET">
            <button type="submit" class="btn add-btn add-btn2">追加</button>
        </form> --}}
        <button type="submit" class="btn add-btn add-btn2" onclick="addInput()">追加</button>

        <button class="btn store-btn" form="update" type="submit">保存</button>
    </div>
</div>
@endsection