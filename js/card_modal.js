
    $('.line_customer').on('click', function (event) {
        console.log("J'ai appuyé sur une ligne");
        var customer_id = event.target.id;
        console.log(customer_id);
        //Ajax Calling
        var call_ajax = $.ajax(
            {
                url: './lib/methode_ajax.php',
                method: 'POST',
                data: {id_customer: customer_id},
                dateType: 'html'
            }
        );

    });
