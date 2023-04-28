
$( document ).ready(function() {

  $("#final").addClass("final-partida-i").removeClass("final-partida")


    let contar_aciertos = 0
    let vidas = $("#vidas").text().substring(7,8)
    let puntuacion = Number($("#puntuacion").text().substring(12))
    let bg_position = 0;
    let resultado = "";
    

    $(".btn-letra").click(function (e) { 

        console.log("Letra pulsada: "+ e.target.id)

        let letra_acertada = 0;
        
        $(".letras-ocultas").each(function() {
            console.log("Letra palabra: "+$(this).text())

            if(e.target.id.toUpperCase() == $(this).text()){
                $(this).parent().css({'transform': 'perspective(600px) rotateY(360deg)'})
                $(this).closest(".card").children(".front").css({'transform': 'perspective(600px) rotateY(180deg)'})
                letra_acertada++;
                contar_aciertos++;
            }
            
          });

          if(letra_acertada==0){
            $("#"+e.target.id).prop("disabled",true)
            $("#"+e.target.id).removeClass("btn-letra")
            $("#"+e.target.id).addClass("fallo")
            bg_position -= 370;
            $(".imagen").css("background-position",bg_position+"px")
            vidas--;
            puntuacion -= 50
            $("#vidas").text("Vidas: "+vidas);
            $("#puntuacion").text("Puntuación: "+puntuacion)
          }else{
            $("#"+e.target.id).prop("disabled",true)
            $("#"+e.target.id).removeClass("btn-letra")
            $("#"+e.target.id).addClass("acierto")
            puntuacion += 100*letra_acertada
            $("#puntuacion").text("Puntuación: "+puntuacion)

            

          }

          if(contar_aciertos == $(".letras-ocultas").length){
              puntuacion += 500
              $("#puntuacion").text("Puntuación: "+puntuacion)
              $("#final").removeClass("final-partida-i").delay(2000).addClass("final-partida")
              $("#puntuacion-final").append(puntuacion)
              $("#punt-final").val(puntuacion)
              $("#resultado").val("ganada")
          }

          if(vidas==0){
              puntuacion -= 250
              $("#puntuacion").text("Puntuación: "+puntuacion)
              $("#final").removeClass("final-partida-i").delay(2000).addClass("final-partida")
              $("#puntuacion-final").append(puntuacion)
              $("#punt-final").val(puntuacion)
              $("#resultado").val("perdida");
          }

        
        
    });



});