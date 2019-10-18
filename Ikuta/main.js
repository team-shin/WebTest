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

