$('.line_customer').on('click', function (event) {
    console.log("Click is OK");
    var customer_id = event.target.id;
    var call_ajax = $.ajax(
        {
            url : './lib/fucking_ajax_methode.php',
            method : 'GET',
            data : '&id=' + customer_id,
            dataType : "html",
            success : function (data) {
                console.log(data);
            },
            error : function (message) {
                console.log('Oups...')
            }
        });
    call_ajax.done(function(response){
        $("#card_number").html('coucou Benoit');
    });
    call_ajax.fail(function (jqXHR, textStatus) {
        console.log("Failed Request : " + textStatus);
    })
});