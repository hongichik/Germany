$(document).ready(function () {
    let box = document.getElementsByClassName('dropdowns');
    let max = 0;
    for (let i = 0; i < box.length; i++) {
        if (max < box[i].offsetHeight) {
            max = box[i].offsetHeight;
        }
    }
    console.log(max);
    $('.dropdowns').css('height', max)
    $('.dropdowns').click(function () {
        if ($(this).parent().children('.dropdowns_content').css('display') == 'none') {
            $(this).parent().children('.dropdowns_content').slideDown();
        }
        else {
            $(this).parent().children('.dropdowns_content').slideToggle("slow");
        }

    })
});