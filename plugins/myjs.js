function showMain(e) {
    $.get(`./api/${e}.html`, {}, (text) => {
        $('#main').html(text);
    });
}