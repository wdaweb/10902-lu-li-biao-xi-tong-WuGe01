function showMain(e) {
    console.log(e)
    $.get("./api/".e.".html",{},(text)=>{
        console.log(text)
    });
}