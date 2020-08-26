//TODO : Rename
var customer_id = "nothing";
$('.line_customer').on('click', (event) => {
    console.log("Click is OK");
    customer_id = event.target.id;
    $.ajax(
        {
            url : './lib/fucking_ajax_methode.php',
            method : 'GET',
            data : {id : customer_id},
            dataType : "html",
            success : function (data) {
                console.log('GET + "'+ customer_id + '" OK!');
            },
            error : function (message) {
                console.log('Oups...')
            }
        }).then( (response) => {
            var responseJson = JSON.parse(response)
            $("#card_number").html(responseJson.id_customer);
            $("#card_name").html(responseJson.lastname);
            $("#card_firstname").html(responseJson.firstname);
            $("#card_points").html(responseJson.fidel_point);
            $("#card_comment").html(responseJson.comment);
            $("#modify").html(
                `
                <input type='hidden' name='id_userCard' value="${responseJson.id_customer}"'>
                <button class="btn btn-success" type="submit" href="./index.php?page=modify_card">
                    Modifer
                </button>;
            `);
            //"<input type='hidden' name='id_userCard' value='"+responseJson.id_customer+"'><button class=\"btn btn-success\" type=\"submit\" href=\"./index.php?page=modify_card\">Modifer</button>");
        }).catch( (e) => console.log(`Failed Request : ${e}`));
});
//Button Point :
$('#add_one_point').on('click', function (event){
    console.log("Click on Add_One_Point");
    var point = event.target.id;
    var call_ajax_for_Add = $.ajax(
        {
            url : './lib/btn_ajax_methode.php',
            methode : 'POST',
            data : {point : point,
                    id : customer_id},
            dataType: 'html',
            success : function (data) {
                console.log('POST + ' + data + ' est envoyé. ' + point);
            },
            error : function (data) {
                console.log('POST + ' + data + ' est fail !'+ point);
            }
        }
    );
    call_ajax_for_Add.done(function (response) {
        $("#card_points").html('On vous a pas dit que ça ne fonctionnait pas encore ?');
    })
});
//Urgence livrer un Truc fonctionnel !
