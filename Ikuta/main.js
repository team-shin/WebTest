console.log("start");
function selcheck() {
  //formのアドレスを参照
  elementReference = document.f.type.selectedIndex;
  sIndex = document.f.type.options[elementReference].value;
  
  //選択してください」の選択している場合はエラー。
  if (sIndex == "select") {
  alert("このページを評価してください!");
  return false;
  }
  alert("送信しました!");
  return true;
}

function readCsv(data) {
  console.log("csvReadStart");
  var target = '#csv-body';
  var csv = $.csv.toArrays(data);
  var insert = '';
  $(csv).each(function() {
      if (this.length > 0) {
          insert += '<tr>';
          $(this).each(function() {
              insert += '<td>' + this + '</td>';
          });
          insert += '</tr>';
      }
  });
  $(target).append(insert);
}
var csvfile = 'test1.csv';

$(function(){
  $.get(csvfile, readCsv, 'text');
});
