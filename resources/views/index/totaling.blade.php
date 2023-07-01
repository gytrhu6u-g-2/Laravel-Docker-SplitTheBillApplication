@extends('index.top')

@section('title', '集計画面')

@section('content')
    <div class="total-amount-information">
        <table class="table-container">
            <tbody>
                <tr>
                    <th scope="row">名前</th>
                    <td>マイケル</td>
                </tr>
                <tr>
                    <th scope="row">合計</th>
                    <td>￥7,000</td>
                </tr>
                <tr>
                    <th scope="row">支払い</th>
                    <td>￥2,670</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="showing-total-amount-container">
        <div class="showing-total-amount">
            <span class="total-title">総支出</span>
            <span class="total-amount">￥29,000</span>
        </div>
    </div>
@endsection
