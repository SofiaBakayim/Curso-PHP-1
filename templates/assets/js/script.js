$( document ).ready(function() {
    $('#btnSubscrever').click(function(){
        //alert('O botão foi carregado'); //Ver se está a funcionar
        let email = $('#newsletter').val();
        alert('email: ' + email);
        if (email != ''){
            $.ajax({ //Está à espera que esta lista a baixo funcione
                url: '/registarNewsletter',
                method:'get',
                data:'newsletter=' + email,
                success: function(html){
                    $('#newsletterResultado').html(html)
                }
            });
            //mostrar a div de resultado
            $('#newsletterResultado').show();

        }else{
            alert('Por favor, preencha o campo de email.')
            $('#newsletterResultado').hide();
        }
    });  //Se quisermos ( '. ) procurar uma classe, ( '# ) procurar o id






});
