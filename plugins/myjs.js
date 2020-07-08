function getExp() {
    $('#flag').html("");
      $.get("./api/getExp.php",{},function (e) {
          $('#flag').prepend(e);
      })
      
}
function addExp() {
      let photo = document.querySelector("#File-input");
      if(photo.files && photo.files[0] && $('#title').val() && $('#text').val() && $('#time').val()){
       let file_data = $('#File-input').prop('files')[0];
       let form_data = new FormData();
          form_data.append('file', file_data);   
          form_data.append('title', $('#title').val());   
          form_data.append('text', $('#text').val());   
          form_data.append('time', $('#time').val());   
          form_data.append('showExp', $('#showExp').val());   
          $.ajax({
                  url: './api/SaveExp.php',
                  cache: false,
                  contentType: false,
                  processData: false,
                  data: form_data,                
                  type: 'post',
                  success: function (e) {
                      alert("新增成功");
                      console.log(e)
                  },
                  error: function () {
                     alert("錯誤：請確認黨格式與確實填寫");
                  },
           });
      }        
}
function getSkill() {
    $('#flag').html("");
    $.get("./api/getSkill.php",{},function (e) {
        $('#flag').prepend(e);
    })
    $.get("./api/countSkill.php",{},function (k) {
        for (let i = 7; i < k+1; i++) {
          $(`#skillcard${i}`).hide()        
        }
    })
}
function hideExp() {
    $.get("./api/countExp.php",{},function (k) {
      kk=k
        for (let i = 2; i <= kk; i++) {
          $(`#showExp${i}`).hide()
        }
      })    
   
}
function showExp(ee) {      
          vv=$('#startpage').val()
          console.log(vv)
          $.get("./api/countExp.php",{},function (k) {
          if(ee==1){
            vv++
            if(vv>k)vv=k
            $(`#showExp${vv-1}`).hide()
            $(`#showExp${vv}`).show()
            $('#startpage').val(vv)
            console.log(vv)
          }else if(ee==0){
            vv--
            if(vv<1)vv=1
            $(`#showExp${vv+1}`).hide()
            $(`#showExp${vv}`).show()
            $('#startpage').val(vv)  
            console.log(vv)
          }
        }) 
 }
function showSkill() {
    let start=$('#startpage').val();
    $.get("./api/countSkill.php",{},function (k) {
        let end=k*1-3;
        if(start>end){
          start=end;
        }
        if(start<1)start=1;
        for (let i = start*1+1; i <= k; i++) {
            $(`#showSkill${i}`).hide()
  
        }
    })
    
}
function showSkillVal(e) {
    let aa=$('#startpage').val();
    if(e==1)aa++;
    if(e==0)aa--;
    $.get("./api/countSkill.php",{},function (k) {
    if(aa<3)aa=3;
    if(aa>k)aa=k;
    $('#startpage').val(`${aa}`);
    if(e==0){
      $(`#showSkill${aa-2}`).show()
      $(`#showSkill${aa+1}`).hide()
    }else{
      $(`#showSkill${aa-3}`).hide()
      $(`#showSkill${aa}`).show()
    }
    })
}
function fixnows() {    
      let photo = document.querySelector("#Fix-input");
      let form_data = new FormData();
      if(photo.files && photo.files[0]){
          let file_data = $('#Fix-input').prop('files')[0];
          form_data.append('file', file_data);   
      }
          form_data.append('title', $('#fixtitle').val());   
          form_data.append('text', $('#fixtext').val());   
          form_data.append('power', $('#fixpower').val());   
          form_data.append('id', $('#fixhidden').val());   
          $.ajax({
                  url: './api/fixSkill.php',
                  cache: false,
                  contentType: false,
                  processData: false,
                  data: form_data,                
                  type: 'post',
                  success: function () {
                      alert("修正成功");
                      getBSkill()
                  },
                  error: function () {
                     alert("錯誤：請確認黨格式與確實填寫");
                  },
           });
}
function addSkill() {
    let photo = document.querySelector("#File-input");
    if(photo.files && photo.files[0] && $('#title').val() && $('#text').val() && $('#power').val()){
     let file_data = $('#File-input').prop('files')[0];
     let form_data = new FormData();
        form_data.append('file', file_data);   
        form_data.append('title', $('#title').val());   
        form_data.append('text', $('#text').val());   
        form_data.append('power', $('#power').val());   
        $.ajax({
                url: './api/SaveSkill.php',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                
                type: 'post',
                success: function () {
                    alert("新增成功");
                    getBSkill()
                },
                error: function () {
                   alert("錯誤：請確認黨格式與確實填寫");
                },
         });
    }        
}
function fixnowsExp() {    
    let photo = document.querySelector("#Fix-input");
    let form_data = new FormData();
    if(photo.files && photo.files[0]){
        let file_data = $('#Fix-input').prop('files')[0];
        form_data.append('file', file_data);   
    }
        form_data.append('title', $('#fixtitle').val());   
        form_data.append('text', $('#fixtext').val());   
        form_data.append('time', $('#fixtime').val());   
        form_data.append('sh', $('#fixsh').val());   
        form_data.append('id', $('#fixhidden').val());   
        $.ajax({
                url: './api/fixExp.php',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                
                type: 'post',
                success: function () {
                    alert("修正成功");
                    getExp()
                },
                error: function () {
                   alert("錯誤：請確認黨格式與確實填寫");
                },
         });
}
function fixExp(e) {

  let src=document.querySelector(`#inExpimg${e}`).src;

  let title=document.querySelector(`#Exptitle${e}`).innerText;
  console.log(title)
  let text=document.querySelector(`#Exptext${e}`).innerText;
  console.log(text)
  let Xtime=document.querySelector(`#Exptime${e}`).innerHTML;
  console.log(Xtime)
  let sh=(document.querySelector(`#sh${e}`).value)?'checked':'';
  console.log(sh)
  $(`#Expg${e}`).html(`<img onclick='chkfix()' src='${src}' style='width: 100px;height: 100px;' class='b-touch' id='fiximg'><div style='display: none;'><input type='file' class='AvatarInput Expimg' id='Fix-input' name='img' onchange='readFixURL(this)'></div>`)
  
  $(`#Exptitle${e}`).html(`<input type="text" class="b-touch" id="fixtitle" value="${title}">`);
  $(`#Extext${e}`).html(`<textarea id="fixtext" class="b-touch" cols="30" rows="6">${text}</div>`);
  $(`#Exptime${e}`).html(`<input type="text" class="b-touch" id="fixtime" value="${Xtime}">`);
  $(`#Expsh${e}`).html(`<input type="radio"  class="b-touch" id="fixsh" value="1" ${sh}>`) ;
  $(`#Expbthc${e}`).html(`<input class='b-touch btn btn-outline-secondary' type='button' onclick='getExp()' value='取消'><input type="hidden" id="fixhidden" value='${e}'>`);  
  $(`#Expbtn${e}`).html(`<input class='b-touch btn btn-outline-secondary' type='button' onclick='fixnowsExp()' id='fixupload' value='確認'>`);
}
function fixSkill(e) {
    let src=document.querySelector(`#inSkillimg${e}`).src;
    let title=document.querySelector(`#Skilltitle${e}`).innerText;
    let text=document.querySelector(`#Skilltext${e}`).innerText;
    let power=document.querySelector(`#Skillpower${e}`).innerText;
    $(`#Skillimg${e}`).html(`<img onclick='chkfix()' src='${src}' style='width: 100px;height: 100px;' class='b-touch' id='fiximg'><div style='display: none;'><input type='file' class='AvatarInput skillimg' id='Fix-input' name='img' onchange='readFixURL(this)'></div>`);
    $(`#Skilltitle${e}`).html(`<input type="text" class="b-touch" id="fixtitle" value="${title}">`);
    $(`#Skilltext${e}`).html(`<input type="text" class="b-touch" id="fixtext" value="${text}">`);
    $(`#Skillpower${e}`).html(`<input type="number" min="0" max="100" class="b-touch" id="fixpower" value="${power}">`);
    $(`#Skillbthc${e}`).html(`<input class='b-touch btn btn-outline-secondary' type='button' onclick='getBSkill()' value='取消'><input type="hidden" id="fixhidden" value='${e}'>`);  
    $(`#Skillbtn${e}`).html(`<input class='b-touch btn btn-outline-secondary' type='button' onclick='fixnows()' id='fixupload' value='確認'>`);
}
function readFixURL(input) {
    if (input.files && input.files[0]) {
      let reader = new FileReader();
      reader.onload = (e) => {
        let img = document.querySelector('#fiximg');
        img.src = e.target.result;
      }
      reader.readAsDataURL(input.files[0]);
    }
    
}
function chkfix() {
    document.querySelector('#Fix-input').click();
}
function delSkill(id) {
$.get("./api/delSkill.php",{id},function (e) {
  getBSkill()
})
}
function delExp(id) {
$.get("./api/delExp.php",{id},function (e) {
  getExp()
})
}
function getBSkill() {
    $('#flag').html("");
$.get("./api/getBSkill.php",{},function (e) {
    $('#flag').prepend(e);
})
} 
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
function loadingRes() {
    $.get("./api/loadingRes.php",{},function (e) {
        let str=new Array(e);
        $("#text").val(str[0]['text']);
        $("#title").val(str[0]['title']);
    }, 'json')
    $.get("./api/loadingResImg.php",{},function (e) {
        document.querySelector("#Avatar").src=`./img2/${e}`;
    })
}
function SaveMain() {
    let text1=$("#text1").val();
    let text2=$("#text2").val();
    let text3=$("#text3").val();
    $.get("./api/SaveMain.php",{text1,text2,text3},function () {
        
    })
}
function SaveRes() {
    let title=$("#title").val();
    let text=$("#text").val();
    $.get("./api/SaveRes.php",{title,text},function () {
        
    })
}
function getMain() {
    $.get("./api/getMainImg.php",{},function (e) {
        let str=new Array(e);
        document.querySelector('#myhead').src=`./img/${str[0]['name']}`
        $('#Btext1').html(str[0]['text1'])
        $('#Btext2').html(str[0]['text2'])
        $('#Btext3').html(str[0]['text3'])
    },'json')

}   
function getRes() {
    $.get("./api/getResImg.php",{},function (e) {
        let str=new Array(e);
        document.querySelector('#mylife').src=`./img2/${str[0]['name']}`
        $('#text').html(str[0]['text'])
        $('#title').html(str[0]['title'])
    },'json')
}
function GetSkillVal(e) {
    let val=$('#startpage').val();
    if(e==0){
      val--;
      if(val<6)val=6;
      $(`#skillcard${val-5}`).show() 
      $(`#skillcard${val+1}`).hide() 
      $('#startpage').val(val)
    }else{
      val++;
      $.get("./api/countSkill.php",{},function (k) {
      if(val>k)val=k;
      $(`#skillcard${val}`).show() 
      $(`#skillcard${val-6}`).hide()  
      $('#startpage').val(val)
      }) 
    }
}
   
