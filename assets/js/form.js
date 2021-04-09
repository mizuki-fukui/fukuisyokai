// 0 = 入力
// 1 = 確認
// 2 = 完了
let pageFlag = 0;



if (checkFlag02()) {
  pageFlag = 2
} else {
  pageFlag = 1
}

function checkFlag01 () {

  function checkVal () {
    let result = false;
    let checkCount = 0;
    
    let vals = {
      name: $("[name='name']").val(),
      mail: $("[name='mail']").val(),
      main: $("[name='main']").val(),

    }
  
    // 値が正しいかチェック
    Object.keys(vals).forEach(e => {
      if (vals[e]) {
        checkCount += 1;
      }
    });
    
    if (Object.keys(vals).length === checkCount) {
      result = true;
    }
    return result
  }

  if (checkVal()) {
    pageFlag = 1
  } else {
    pageFlag = 0
  }
  
}



function checkFlag02 () {
  let result = false;
  // あれこれ
  if (false) {
    result = true;
  }
  return result
}


$('.js-input').on('blur', checkFlag01);

$('.js-submit').on('click', function (e) {

  e.preventDefault();
  if ($(this).data('submit') === 1) {
    // ajax通信 check.phpに
    
  } else {
    $('.js-flag').removeClass('is-current');
    $('.js-flag').each(function (i, e) {
      if ($(e).data('flag') === pageFlag) {
        $(e).addClass('is-current');
      }
    });
  }

})

