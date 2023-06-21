<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" container="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('./css/style.css') }}">
    <script type="text/javascript" src="{{ asset('./js/main.js') }}"></script>
    <title>トータル金額画面</title>
</head>
<body>
    <div class="container">
        <div class="screen-container">
            <div class="input-clear-add-container">
                <form action="">
                    <input type="text" name="text" placeholder="名前">
                    <div class="btn-container">
                        <button class="clear-btn btn">クリア</button>
                        <button class="add-btn btn">追加</button>
                    </div>
                </form>
            </div>
            <div class="two-containers">
                <div class="persson-information-container">
                    <div class="person-information">
                        <div class="selected-person-container">
                            <p><a href="#">マイケル</a></p>
                            <button class="delete-btn btn">削除</button>
                        </div>
                        <div class="selected-person-container">
                            <p><a href="#">ジョニー</a></p>
                            <button class="delete-btn btn">削除</button>
                        </div>
                        <div class="selected-person-container">
                            <p><a href="#">ジェシカ</a></p>
                            <button class="delete-btn btn">削除</button>
                        </div>
                    </div>
                    <div class="total-btn-container">
                        <button class="total-btn btn">集計</button>
                    </div>
                </div>
                <div class="persson-detail-container">
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
                </div>
            </div>
        </div>
    </div>
</body>
</html>