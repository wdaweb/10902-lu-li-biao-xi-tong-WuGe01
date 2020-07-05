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