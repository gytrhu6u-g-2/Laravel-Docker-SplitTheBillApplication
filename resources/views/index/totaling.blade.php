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
                        <tr>
                            <th scope="row">合計</th>
                            @for ($arrNum;$arrNum<$count;$arrNum++)
                                <td>￥ {{ $arrays[$arrNum][0]['SUM(cost)'] }}</td>
                                <?php
                                    $arrNum += 1; 
                                ?>
                                @break
                            @endfor
                        </tr>
                        {{-- @endforeach --}}
                        <tr>
                            <th scope="row">支払い</th>
                            <td>￥2,670</td>
                        </tr>
                    </tbody>
                </table>
        @endforeach
    </div>
    <div class="showing-total-amount-container">
        <div class="showing-total-amount">
            <span class="total-title">総支出</span>
            <span class="total-amount">￥ {{ $sum }}</span>
        </div>
    </div>
@endsection
