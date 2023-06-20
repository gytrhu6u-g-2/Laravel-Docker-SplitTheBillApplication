
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
    let confirm = window.confirm('本当に削除しますか？');
    if (confirm) {
        return true;
    } else {
        return false;
    }
}