
// クリアボタン押下
function clearChar() {
    let element = document.getElementById('text');
    if (!element.value) {
        return false;
    }
    element.value = '';
}