
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