<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" container="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="./js/main.js"></script>
    <title>入力画面</title>
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
                    <div class="person-title">
                        <p>マイケル</p>
                    </div>
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
                </div>
            </div>
        </div>
    </div>
</body>
</html>