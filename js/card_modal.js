
    $('.line_customer').on('click', function (event) {
        console.log("J'ai appuyé sur une ligne");
        var customer_id = event.target.id;
        console.log(customer_id);
        //Ajax Calling
        var call_ajax = $.ajax(
            {
                url: './lib/methode_ajax.php',
                method: 'GET',
                data: {customer_id : customer_id},
                reponse : customer_id,
                dateType: 'html',
                success : function (response) {
                    $("#card_number").html(response);
                    console.log(response);
                }
            }
        );
        call_ajax.done(function(data){
            $("#card_number").html(data);
            console.log("Est-ce que tu m'entends HEY HO ?")
        });
        call_ajax.fail(function (jqXHR, textstatus) {
            console.log("Request failed : " + textstatus);
        })

    });
/* DES TRUCS QUI FONT DES TESTS A VIRER PLUS TARD. ON SAIT JAMAIS
                    success : function (data) {
                    $("#card_number").html(data);
                    console.log(data);
                },
    error : function (resultat,statut, erreur) {

    },
    complete : function (resultat, statut) {

    }*/