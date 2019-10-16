console.log("START HTML")
//db39c0baabe9c2af0b8e44982743d4e8d4fd9d94753ffae893720c45bf511afd
$(function () {
    //クリックイベント
    //   $(".HED").click(function(){
    $(document).ready(function () {
        $(".bun").show(2000);
    });
});

$(function () {
    //クリックイベント
    $("#BT1").click(function(){
        console.log("CLICKED OH NO ");

        $('#BT1').click(function () {
            var befire = $('#TX').val();
            console.log("befire = "+befire) ;

            $.ajax({
                type : 'POST',
                url : 'https://labs.goo.ne.jp/api/hiragana' ,
                crossDomain : true,
                dataType : 'json',
                data :{
                    "app_id":"db39c0baabe9c2af0b8e44982743d4e8d4fd9d94753ffae893720c45bf511afd",
                    "request_id":"requestTest1",
                    "sentence": befire ,
                    "output_type":"hiragana"
                },
                success : function(resp){
                    console.log(resp);
                    console.log(resp.converted);
                    $("#TX").val(resp.converted) ;
                    if(resp.status == "OK"){
                        console.log(resp[0]);
                        $("#TX").val(resp[0]) ;

                    }else{
                        return false;
                    }
                }
            });

        });
    });
});


$.ajax({
    url: 'https://randomuser.me/api/',
    dataType: 'json',
    success: function (data) {
        console.log(data);
    }
});


$(function () {
    $('#search').click(function () {
        console.log("Clocked");
        $.getJSON('http://zipcloud.ibsnet.co.jp/api/search?callback=?',
            {
                zipcode: $('#zip').val()
            }
        ).done(function (data) {
            console.log(data);
                // 中身が空でなければ、その値を［住所］欄に反映
                if (data.results) {
                    var result = data.results[0];
                    $("#address").val(result.address1 + result.address2 + result.address3);
                    // 中身が空の場合は、エラーメッセージを反映
                } else {
                    $('#address').val('該当する住所が存在しません。');
                }
            });
    });
});

// $(function () {
//     $('#search').click(function () {
//         var zip = $('#zip').val();
//         console.log("ZIP = "+zip) ;
//
//         // ここでzipのバリデーションを行ってください
//
//         $.ajax({
//             type : 'get',
//             url : 'https://madefor.github.io/postal-code-api/api/v1/457/0862.json' ,
//             crossDomain : true,
//             dataType : 'json',
//             data : {
//                 // address : zip,
//                 // language : 'ja',
//                 // sensor : false
//             },
//             success : function(resp){
//                 console.log(data);
//                 if(resp.status == "OK"){
//                     // APIのレスポンスから住所情報を取得
//                     var obj = resp.results[0].address_components;
//                     if (obj.length < 5) {
//                         alert('正しい郵便番号を入力してください');
//                         return false;
//                     }
//                     //$('#country').val(obj[4]['long_name']); // 国
//                     $('#state').val(obj[3]['long_name']); // 都道府県
//                     $('#city').val(obj[2]['long_name']);  // 市区町村
//                     $('#address1').val(obj[1]['long_name']); // 番地
//                 }else{
//                     alert('住所情報が取得できませんでした');
//                     return false;
//                 }
//             }
//         });
//
//     });
// });


