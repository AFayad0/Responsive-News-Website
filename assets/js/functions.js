$('select[name="genre"]').change(function(){
    $("#subgenreNews").hide();
    $("#newsSelc").removeAttr('required');
    $("#subgenreSports").hide();
    $("#sportsSelc").removeAttr('required');
    if ($(this).val() == "WorldNews")
        {
            $("#subgenreNews").show();
            $("#newsSelc").attr('required','required');
        }
    if ($(this).val() == "Sports")
        {
            $("#subgenreSports").show();
            $("#sportsSelc").attr('required','required');
        }
});
    
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});