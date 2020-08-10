//Button Point :
$('#add_one_point').on('click', function (event){
    console.log("Click on Add_One_Point");
    var test = event.target.id;
    var call_ajax_for_Add = $.ajax(
        {
            url : './lib/fucking_ajax_methode.php',
            methode : 'POST',
            data : 1,
            dataType: 'html',
            success : function (data) {
                console.log('POST + ' + data + ' est envoyé. ' + test);
            },
            error : function (data) {
                console.log('POST + ' + data + ' est fail !'+ test);

            }
        }
    );
    call_ajax_for_Add.done(function (response) {
        $("#card_points").html('COUCOU');
    })

});
