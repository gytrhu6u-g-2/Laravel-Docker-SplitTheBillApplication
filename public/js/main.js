
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

// 内容追加ボタン
var counter = 0;
function addInput() {
    var contentCost = document.getElementById('content-cost-container');
   
    var html = `
    <div class="content-cost">
        <div class="input-content-cost">
            <input id="content" type="text" class="content" placeholder="内容" name="contents[${counter}][content]" required>
            <input id="cost" type="number" class="cost" placeholder="金額" name="contents[${counter}][cost]" required>
        </div>
        <div>
            <button type="button" class="delete-btn btn delete-btn2 delbtn" onclick="deleteContent()">削除</button>
        </div>
    </div>
    `;
  
    contentCost.insertAdjacentHTML('afterbegin', html);

    counter++;
  }

// 削除ボタン
function deleteContent() {
    const element = document.getElementsByClassName('delbtn');
    const element2 = document.getElementsByClassName('content-cost');
    for (i = 0; i < element2.length; i++) {//step2
        const targetElement = element2[i]; // 削除対象の要素を別の変数に代入
        element[i].addEventListener("click", function() {
            targetElement.remove();
        });
      }
    
}