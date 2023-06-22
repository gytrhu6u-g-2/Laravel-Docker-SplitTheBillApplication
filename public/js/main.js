
// クリアボタン押下
function clearChar() {
    let element = document.getElementById('text');
    if (!element.value) {
        return false;
    }
    element.value = '';
}

// 削除確認ボタン
function confirmDelete() {
    let confirm = window.confirm('削除します。よろしいですか？');
    if (confirm) {
        return true;
    } else {
        return false;
    }
}

// 追加ボタンで内容追加
function addContent() {
    // // alert('aaa');
    // // let element = document.document.querySelectorAll(".content-cost");
    // // console.log(element);
    // let element = document.getElementById('box');
    // // element.insertAdjacentHTML('afterend', '<p>Paragraph</p>');
    // element.insertAdjacentHTML('afterend','<div class="content-cost"><div class="input-content-cost"><input type="text" class="content" placeholder="内容"><input type="text" class="cost" placeholder="金額"><input type="hidden" name="_token" value="{{ csrf_token() }}" /></div><div><button class="delete-btn btn delete-btn2">削除</button></div></div>');
}