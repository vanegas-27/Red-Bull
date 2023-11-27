//metodos del dashboard ....

$(document).ready(function ($) {

  $('div.categoria').addClass('inactive');
  $('figure').slideUp();


  let value = null;
  let metodo = null;
  let id = null;



  $('input[list=lista]').change(() => {
      metodo = $("input[list=lista]").val();
  })



  setInterval(function(){

    $('tbody tr').click(function(){


        id = $(this).find('td').eq(0).html();


        let encabezado  = $(this).find('td').eq(2).html();
        let descripcion  = $(this).find('td').eq(4).html();


        $('#encabezado').val(encabezado);
        $('#descripcion').html(descripcion);


    });

  },1000)




  $('button.btn').click(function(){

      if(metodo == null || value == null){
          alert('faltan datos por selecionar')
          return;
      }

      if(metodo == "actualizar" || metodo == "eliminar"){

        if(id == null){
          alert('debes selecionar primero una fila')
          return;
        }

        $('form').attr('action',`../procesos/${value}.php?tabla=${value}&metodo=${metodo}&id=${id}`);
        return;

      }

      $('form').attr('action',`../procesos/${value}.php?tabla=${value}&metodo=${metodo}`);






  });


$('ul li').click(function () {


    $('.ocul').slideDown();

    let select = $(this).data('op');

    value = $(this).html();

    if(value == "articulos"){
      $('div.categoria').removeClass('inactive');
    }else{
      $('div.categoria').addClass('inactive');
    }

    $.ajax({
        url : "../renders/renderTable.php",
        type: "POST",
        data : {
            'tabla' : value
        },

        beforeSend : function(){
            console.log('cargando...');
        },

        success : function(data){
          $('tbody').html(data);
        }
    });

    $('figure').not('.' + select).slideUp();

    $('.' + select).slideDown();

  });


});

// ---------- // --------------
