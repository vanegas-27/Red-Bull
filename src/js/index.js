$(() => {


  $('.listCategory li').click(function(){

    let valor = $(this).html();
    $(this).addClass('activP');
    $('.listCategory li').not(this).removeClass('activP');

    $.ajax({
      url : "./src/php/renders/productos.php",
      type : "POST",
      async : true,
      data : {
        "categoria": valor
      },

      beforeSend : function(){
        console.log('se envio la info');
      },

      success : function(data){
        $('div.articulos').html(data);
      }

    });
  })


})
