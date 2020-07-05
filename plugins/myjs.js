function showMain(e) {

    $.get(`./client/${e}.html`, {}, (text) => {
        $('#main').html(text);
    });
}
function showBMain(e) {
    $.get(`./backend/${e}.html`, {}, (text) => {
        $('#main').html(text);
    });
}
function closeMain() {    
    $('.main').animate({
    width:"200px",height:"100px"
    },1000)
}
function changeSession() {
    $.get("./api/changeSession.php",{},function(e){
        if(e==1)window.location.replace('./backcontrol.html');
        else{
            closeMain();
        }
    })
}
function openMain() {
    $('.main').animate({
        width:"100%",height:"70vh"
        },1000)
}
function sendFrom() {
    let acc = $('#acc').val();
    let pw = $('#pw').val();     
    if(acc!="" && pw!="") {
        $.post("./api/controlCenter.php",{acc,pw},function(e){
            (e==1)?window.location.replace('./backcontrol.html'):alert("帳號與密碼錯誤");
          });
    }else{
        alert("請填寫完整的帳號與密碼")
    }
}
function ToIndex() {
    window.location.replace('./index.html');
}
function logOut() {
    window.location.replace('./index.html');
    $.get("./api/logOut.php",{},function () {})
}
function chkAvatar() {
    document.querySelector('#File-input').click();
  }
function readURL(input) {
    if (input.files && input.files[0]) {
      let reader = new FileReader();
      reader.onload = (e) => {
        let img = document.querySelector('#Avatar');
        img.src = e.target.result;
      }
      reader.readAsDataURL(input.files[0]);
    }
    
}
function updateMain() {
    let photo = document.querySelector("#File-input");
    if (photo.files && photo.files[0]) {
        console.log(photo.files[0].name);
    }
}
function loadingMain() {
    $.get("./api/loadingMain.php",{},function (e) {
        let str=new Array(e);
        $("#text1").val(str[0]['text1']);
        $("#text2").val(str[0]['text2']);
        $("#text3").val(str[0]['text3']);
    }, 'json')
    $.get("./api/loadingMainImg.php",{},function (e) {
        document.querySelector("#Avatar").src=`./img/${e}`;
    })
}
function SaveMain() {
    let text1=$("#text1").val();
    let text2=$("#text2").val();
    let text3=$("#text3").val();

    console.log(text1)
    console.log(text2)
    console.log(text3)

    let photo = document.querySelector("#File-input");
    if (photo.files && photo.files[0]) {
        if(photo.files[0].size > 100000)alert("檔案太大重新上傳");
        let imgImg=photo.files[0].name;
        let imgLink=$('#File-input').val();
    }
    // $.post("./api/SaveMain.php",{},function(){

    // })
}