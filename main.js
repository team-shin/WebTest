console.log("start");
function selcheck() {
  elementReference = document.f.type.selectedIndex;
  sIndex = document.f.type.options[elementReference].value;
  
  //選択してください」の選択している場合はエラー。
  if (sIndex == "select") {
  alert("このページを評価してください!");
  return false;
  }
  
  //メール送信をする。
  return true;
}
