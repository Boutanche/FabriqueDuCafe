
    $('.line_customer').on('click', function (event) {
        console.log("J'ai appuyé sur une ligne");
        var customer_id = event.target.id;
        var name = $('#card_name').html()

        console.log(customer_id);
        //Ajax Calling
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                var MyObject = JSON.parse(this.responseText);
                $("#card_name").html(MyObject.name);
                console.log("Et là ?");
            }
        };
        xmlhttp.open("GET",'./lib/methode_ajax.php', true);
        xmlhttp.send();
        //
        var call_ajax = $.ajax(
            {
                url: './lib/methode_ajax.php',
                method: 'getJSON',
                data: {'id' : customer_id},
                dateType: 'json',

            }
        );
        console.log("Ho ? Debout là dedans x2!");

        call_ajax.done(function(response){
            let data = JSON.stringify(response);
            $("#card_number").html('oupla');
            //$("#card_name").html(data.name);
            console.log(data);
            console.log(data.id);

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