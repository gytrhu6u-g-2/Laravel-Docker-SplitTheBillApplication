@extends('index.top')

@section('title', '集計画面')

@section('content')
    <div class="total-amount-information">
        @foreach ($persons as $peson)
                <table class="table-container">
                    <tbody>
                        <tr>
                            <th scope="row">名前</th>
                            <td>{{ $peson->name }}</td>
                        </tr>
                        {{-- @foreach ($arrays as $array) --}}
                        @for ($arrNum;$arrNum<$count;$arrNum++)
                            <tr>
                                @if ($arrays[$arrNum][0]['SUM(cost)'] > 0)
                                    <th scope="row">合計</th>
                                    <td>￥{{ $arrays[$arrNum][0]['SUM(cost)'] }}</td>
                                @else
                                    <th scope="row">合計</th>
                                    <td>￥0</td>
                                @endif
                            </tr>
                            <tr>
                                @if ($division - $arrays[$arrNum][0]['SUM(cost)'] >= 0)
                                    <th scope="row">支払い</th>
                                    <td class="money">￥{{ $division - $arrays[$arrNum][0]['SUM(cost)'] }}</td>
                                @else
                                    <th scope="row">受け取り</th>
                                    <td class="money">￥{{ ($division - $arrays[$arrNum][0]['SUM(cost)']) * -1 }}</td>
                                @endif
                            </tr>
                            <?php
                                $arrNum += 1; 
                            ?>
                            @break
                        @endfor
                    </tbody>
                </table>
        @endforeach
    </div>
    <div class="showing-total-amount-container">
        <div class="showing-total-amount">
            <span class="total-title">総支出</span>
            <span class="total-amount">￥{{ $sum }}</span>
        </div>
    </div>
@endsection
