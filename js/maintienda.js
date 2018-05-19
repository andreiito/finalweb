//Agregar articulo al carrito
$(document).ready(function(){
  $(".addCart").click(function(){
      var id_articulo = $(this).parent().attr("id");
      var nombre_articulo = $(this).parent().children().html();
      $.ajax({
	      url:"agregar_articulo.php",
      	      method: 'post',		
	      data: {"id_articulo": id_articulo}
      }).done(function(data){
      console.log(data);
      
      }).fail(function(data){
	console.log("error");      
      });
      alert(nombre_articulo+" ha sido agregado a tu carrito");

  });
});
//Quitar articulo del carrito
$(document).ready(function(){
  $(".elimCart").click(function(){
      var id_articulo = $(this).parent().attr("id");
      var nombre_articulo = $(this).parent().children().html();
      $.ajax({
        url:"quitar_articulo.php",
              method: 'post',   
        data: {"id_articulo": id_articulo}
      }).done(function(data){
      console.log(data);
      
      }).fail(function(data){
  console.log("error");      
      });
      alert(nombre_articulo+" ha sido eliminado de tu carrito");
      location.reload();

  });
});




/*::::::::::::::::::::INICIO CODIGO FORMS::::::::::::::::*/
$( ".checkboxjs" ).focusin(function() {
              $(this).parent().addClass('focus');
            });

            $( ".checkboxjs" ).focusout(function() {
              $(this).parent().removeClass('focus');
            });
            
            

$( ".radiojs" ).focusin(function() {
              $(this).parent().addClass('focus');
            });

            $( ".radiojs" ).focusout(function() {
              $(this).parent().removeClass('focus');
            });


$( ".checkboxl" ).focusin(function() {
              $(this).addClass('focus');
            });

            $( ".checkboxl" ).focusout(function() {
              $(this).removeClass('focus');
            });

$( ".radiol" ).focusin(function() {
              $(this).addClass('focus');
            });

            $( ".radiol" ).focusout(function() {
              $(this).removeClass('focus');
            });

$( ".cbexito" ).focusin(function() {
              $(this).parent().addClass('focus_exito');
            });

            $( ".cbexito" ).focusout(function() {
              $(this).parent().removeClass('focus_exito');
            });

$( ".cbalerta" ).focusin(function() {
              $(this).parent().addClass('focus_alerta');
            });

            $( ".cbalerta" ).focusout(function() {
              $(this).parent().removeClass('focus_alerta');
            });

$( ".cberror" ).focusin(function() {
              $(this).parent().addClass('focus_error');
            });

            $( ".cberror" ).focusout(function() {
              $(this).parent().removeClass('focus_error');
            });
          

/*::::::::::::::::::::FIN CODIGO FORMS:::::::::::::::::.*/

/*-----------INICIA SECCIÓN PARA NAVTAB---------*/
var menu_disp=1; /*Esta variable es para conocer el estado de despliegue del menu
1=cerrado
0=abierto*/
/*----------NAVEGACION CON MOUSE---------*/
    $(".boton_hamburguesa, .icono_boton").click(function(){ /*Esta función despliega el menú*/
        if(menu_disp==1){
            $(".link").css("display", "block");
            $(".boton_hamburguesa").attr("aria-expanded", "true");
            menu_disp=0;
            if($(".nav_disp_block").hasClass(".nav")){ /*si el navtab va con el flujo normal de la pagina recorre el texto*/
              var tamMenu= $("ul.lista_menu").height();
              $("main").css("margin-top", tamMenu);
            }
        }
        else{
            $(".link").css("display", "none");
            $(".boton_hamburguesa").attr("aria-expanded", "false");
            menu_disp=1;
            if($(".nav_disp_block").hasClass(".nav")){ 
              var tamMenu= $("ul.lista_menu").height();
              $("main").css("margin-top", -tamMenu);
            }
        }
    });


    
/*----------NAVEGACION CON TECLADO---------*/
    $(".boton_hamburguesa").keyup(function(e){ /*Esta función despliega el menú si se presiona ENTER*/
        if(e.keyCode == 13 && menu_disp == 0){ 
            $(".link").css("display", "block");
            $(".boton_hamburguesa").attr("aria-expanded", "true");
            menu_disp=0;
            if($(".nav_disp_block").hasClass(".nav")){ /*si el navtab va con el flujo normal de la pagina recorre el texto*/
              var tamMenu= $("ul.lista_menu").height();
              $("main").css("margin-top", tamMenu);
            }
        }
        else{
           if(e.keyCode == 13){
            $(".link").css("display", "none");
            $(".boton_hamburguesa").attr("aria-expanded", "false");
            menu_disp=1;
            if($(".nav_disp_block").hasClass(".nav")){ 
              var tamMenu= $("ul.lista_menu").height();
              $("main").css("margin-top", -tamMenu);
            }
          }
        }
    });

    $("li.link a:not(.in-a)").focusin(function(){/*Esta función despliega el menú si se navega en algun enlace*/
            /*in-a es una clase de los enlaces, con el se pasa el foco a los enlaces dentro de un elemento de lista */
        $("li.sublink").parent().css("display", "none");
        $(this).next("ul.submenu").css("display", "block");
    });
    

$(window).resize(function(){ /*Esta función despliega o esconde el menú al cambiar el tamaño de la pantalla*/
  var size=$(window).width();
  if (size > 768) {
    $(".link").css("display", "inline-block");
    $(".boton_hamburguesa").attr("aria-expanded", "true");
    menu_disp=0;
  }
  else {
    $(".link").css("display", "none");
    $(".boton_hamburguesa").attr("aria-expanded", "false");
    menu_disp=1;
  }
});

$( ".boton_hamburguesa" ).click(function() {
  $("ul.lista_menu > li > a").first().focus(); 
});

/*-----------FIN SECCIÓN PARA NAVTAB---------*/

/*carrusel*/
var timer = 7000;
var contador_carrusel = 0;
  
  $(".carrusel").each(function(){
    contador_carrusel ++
    $(this).addClass('carrusel'+contador_carrusel)
  });
  
  var total_carrusel= contador_carrusel;
  i=0
  do{
    i++
    contador_carrusel = i;
  var actual = '.carrusel'+contador_carrusel;
  carrusel= $(actual)
  
  var contador_contenido = 0;
  
  var texto = {};
  var titulo = {};
  var imagen = {};
    
  var elemento_actual = 1;
  var elementos = 0;
  
  elementos = carrusel.children().children().length;
  
  carrusel.children().children().each(function(){
    contador_contenido ++;
    $(this).addClass(""+ contador_contenido);
    if(contador_contenido != 1){
      $(this).addClass('oculto');
    }
    titulo[contador_contenido] = $(this).children('.titulo_carrusel').html()
    texto[contador_contenido] = $(this).children('.texto_carrusel').html()
    imagen[contador_contenido] = $(this).children('.imagen_carrusel').attr('src')
  });
  
  carrusel.each(function(){
    texto;
    titulo;
    imagen;
    elemento_actual;
    elementos;
    pinta_carrusel();
    play();
  });

  function contenido_actual(elemento_actual) {
    carrusel.children('.contenedor_carrusel').children().children('.titulo_carrusel').html(titulo[elemento_actual]);
    carrusel.children('.contenedor_carrusel').children().children('.imagen_carrusel').attr('src',imagen[elemento_actual]);
    carrusel.children('.contenedor_carrusel').children().children('.texto_carrusel').html(texto[elemento_actual]);
    
    numero(elemento_actual);
  }
  
  function anterior() {
    stop();
    if (elemento_actual == 1) {
      elemento_actual = elementos;
    }
    else{
      elemento_actual-=1;
    }     
    contenido_actual(elemento_actual);
  }
  
  function reproducir() {
    
    contenido_actual(elemento_actual);
    
    if (elemento_actual == elementos) {
      elemento_actual = 1;
    }
    else{
      elemento_actual+=1;
    }
  }
  
  function siguiente() {      
    stop();
    if (elemento_actual == elementos) {
      elemento_actual = 1;
    }
    else{
      elemento_actual+=1;
    }
      contenido_actual(elemento_actual);      
  }

  function pinta_carrusel() { 

    var navega = '<nav aria-label="Navegador del carrusel"><ul class="paginacion_carrusel"><li><a aria-label="Imagen anterior" tabindex="0" href="javascript:anterior();">Anterior</a></li>';
    navega += '<li class="li_cambio_carrusel"> <a class="elemento_cambio_carrusel" aria-label="" tabindex="0" href=""></a></li>';
    for(var numeros = 1 ; numeros <= elementos ; numeros++ ){
      if(numeros == 1){
        navega += '<li class="'+numeros+' activo"><a class="numero_carrusel" aria-label="'+texto[numeros]+'" tabindex="0" href="javascript:contenido_actual('+numeros+');">'+numeros+'</a><li>';
      }else{  
        navega += '<li class="'+numeros+'"><a class="numero_carrusel" aria-label="'+texto[numeros]+'" tabindex="0" href="javascript:contenido_actual('+numeros+');">'+numeros+'</a><li>';
      }
    }
    navega += '<li><a aria-label="Imagen siguiente" tabindex="0" href="javascript:siguiente();">Siguiente</a></li>';
    navega += '</ul></nav>';

    carrusel.children('.contenedor_navegador_carrusel').html(navega);
  }
    
  function numero(numero){
    carrusel.children('.contenedor_navegador_carrusel').children().children().children().removeClass('activo');
    carrusel.children('.contenedor_navegador_carrusel').children().children().children('.'+numero).addClass('activo');
  }
    
  function play() {
    intervalo =     setInterval(function() {
            reproducir();
          }, timer);
    carrusel.children('.contenedor_navegador_carrusel').children('nav').children('ul').children().children('.elemento_cambio_carrusel').html('Pausar');
    carrusel.children('.contenedor_navegador_carrusel').children('nav').children('ul').children().children('.elemento_cambio_carrusel').attr('href','javascript:stop();');
    carrusel.children('.contenedor_navegador_carrusel').children('nav').children('ul').children('.li_cambio_carrusel').removeClass('activo');
  }
    
  function stop() {
    clearInterval(intervalo);
    carrusel.children('.contenedor_navegador_carrusel').children('nav').children('ul').children().children('.elemento_cambio_carrusel').html('Reproducir');
    carrusel.children('.contenedor_navegador_carrusel').children('nav').children('ul').children().children('.elemento_cambio_carrusel').attr('href','javascript:play();');
    carrusel.children('.contenedor_navegador_carrusel').children().children().children().removeClass('activo');
    carrusel.children('.contenedor_navegador_carrusel').children('nav').children('ul').children('.li_cambio_carrusel').addClass('activo');
  }
  }while(i < total_carrusel);
/*fin carrusel*/

/*carrusel_imagen*/
var timer_imagen = 6000;
var contador_carrusel_imagen = 0;
  
  $(".carrusel_imagen").each(function(){
    contador_carrusel_imagen ++
    $(this).addClass('carrusel_imagen'+contador_carrusel_imagen)
  });
  
  var total_carrusel_imagen= contador_carrusel_imagen;
  i=0
  do{
    i++
    contador_carrusel_imagen = i;
  var actual = '.carrusel_imagen'+contador_carrusel_imagen;
  carrusel_imagen= $(actual)
  
  var contador_contenido = 0;
  
  var texto_imagen = {};
  var imagen_imagen = {};
  var elemento_actual_imagen = 1;
  var elementos_imagen = 0;
  
  elementos_imagen = carrusel_imagen.children().children().length;
  
  carrusel_imagen.children().children().each(function(){
    contador_contenido ++;
    $(this).addClass(""+ contador_contenido);
    if(contador_contenido != 1){
      $(this).addClass('oculto');
    }
    texto_imagen[contador_contenido] = $(this).children('.imagen_carrusel').attr('alt')
    imagen_imagen[contador_contenido] = $(this).children('.imagen_carrusel').attr('src')
  });
  
  carrusel_imagen.each(function(){
    texto_imagen;
    imagen_imagen;
    elemento_actual_imagen;
    elementos_imagen;
    pinta_carrusel_imagen();
    play_imagen();
  });

  function contenido_actual_imagen(elemento_actual_imagen) {
    carrusel_imagen.children('.contenedor_carrusel_imagen').children().children('.imagen_carrusel').attr('src',imagen_imagen[elemento_actual_imagen]);
    
    numero_imagen(elemento_actual_imagen);
  }
  
  function anterior_imagen() {  
    stop_imagen();
    if (elemento_actual_imagen == 1) {
      elemento_actual_imagen = elementos_imagen;
    }
    else{
      elemento_actual_imagen-=1;
    }     
    contenido_actual_imagen(elemento_actual_imagen);
  }
  
  function reproducir_imagen() {
    
    contenido_actual_imagen(elemento_actual_imagen);
    
    if (elemento_actual_imagen == elementos_imagen) {
      elemento_actual_imagen = 1;
    }
    else{
      elemento_actual_imagen+=1;
    }
  }
  
  function siguiente_imagen() {     
    stop_imagen();
    if (elemento_actual_imagen == elementos_imagen) {
      elemento_actual_imagen = 1;
    }
    else{
      elemento_actual_imagen+=1;
    }
      contenido_actual_imagen(elemento_actual_imagen);      
  }

  function pinta_carrusel_imagen() {  

    var navega = '<nav aria-label="Navegador del carrusel"><ul class="paginacion_carrusel"><li><a aria-label="Imagen anterior" tabindex="0" href="javascript:anterior_imagen();">Anterior</a></li>';
    navega += '<li class="li_cambio_carrusel"> <a class="elemento_cambio_carrusel" aria-label="" tabindex="0" href=""></a></li>';
    for(var numeros = 1 ; numeros <= elementos_imagen ; numeros++ ){
      if(numeros == 1){
        navega += '<li class="'+numeros+' activo"><a class="numero_carrusel" aria-label="'+texto_imagen[numeros]+'" tabindex="0" href="javascript:contenido_actual_imagen('+numeros+');">'+numeros+'</a><li>';
      }else{  
        navega += '<li class="'+numeros+'"><a class="numero_carrusel" aria-label="'+texto_imagen[numeros]+'" tabindex="0" href="javascript:contenido_actual_imagen('+numeros+');">'+numeros+'</a><li>';
      }
    }
    navega += '<li><a aria-label="Imagen siguiente" tabindex="0" href="javascript:siguiente_imagen();">Siguiente</a></li>';
    navega += '</ul></nav>';

    carrusel_imagen.children('.contenedor_navegador_carrusel_imagen').html(navega);
  }
    
  function numero_imagen(numero){
    carrusel_imagen.children('.contenedor_navegador_carrusel_imagen').children().children().children().removeClass('activo');
    carrusel_imagen.children('.contenedor_navegador_carrusel_imagen').children().children().children('.'+numero).addClass('activo');
  }
    
  function play_imagen() {
    intervalo =     setInterval(function() {
            reproducir_imagen();
          }, timer_imagen);
    carrusel_imagen.children('.contenedor_navegador_carrusel_imagen').children('nav').children('ul').children().children('.elemento_cambio_carrusel').html('Pausar');
    carrusel_imagen.children('.contenedor_navegador_carrusel_imagen').children('nav').children('ul').children().children('.elemento_cambio_carrusel').attr('href','javascript:stop_imagen();');
    carrusel_imagen.children('.contenedor_navegador_carrusel_imagen').children('nav').children('ul').children('.li_cambio_carrusel').removeClass('activo');
  }
    
  function stop_imagen() {
    clearInterval(intervalo);
    carrusel_imagen.children('.contenedor_navegador_carrusel_imagen').children('nav').children('ul').children().children('.elemento_cambio_carrusel').html('Reproducir');
    carrusel_imagen.children('.contenedor_navegador_carrusel_imagen').children('nav').children('ul').children().children('.elemento_cambio_carrusel').attr('href','javascript:play_imagen();');
    carrusel_imagen.children('.contenedor_navegador_carrusel_imagen').children().children().children().removeClass('activo');
    carrusel_imagen.children('.contenedor_navegador_carrusel_imagen').children('nav').children('ul').children('.li_cambio_carrusel').addClass('activo');
  }
  }while(i < total_carrusel_imagen);
/*fin carrusel_imagen*/
