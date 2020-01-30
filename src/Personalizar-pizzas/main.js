$(document).ready(function(){
    /* MENU SIDEBAR */
    $("#boton-menu").click(function(){
        $("#sidebar").toggleClass("active");
    });

    /* INGREDIENTES */
    $("#btn-añadir-carrito").click(function(){
        if(!$("input[name='tamaño[]'").is(":checked")){
            /* SI NO HA ELEGIDO UN TAMAÑO ENTONCES */
            alert("Seleciona un tamaño de pizza!");
            return false;
        }
        if(!$("input[name='masa[]'").is(":checked")){
            /* SI NO HA ELEGIDO UN TIPO DE MASA ENTONCES */
            alert("Seleciona un tipo de masa!");
            return false;
        }
        if(!$("input[name='ingredientes[]'").is(":checked")){
            /* SI NO HA ELEGIDO UN INGREDIENTE ENTONCES */
            alert("Seleciona al menos 1 ingrediente!");
            return false;
        }

        function RecorrerRadios(){
            $("input[name='tamaño[]'").each(function(index){
                if(this.checked){
                    tamaño=$(this).val();
                    console.log(tamaño)
                }
            }) 
            $("input[name='masa[]'").each(function(index){
                if(this.checked){
                    masa=$(this).val();
                    console.log(masa)
                }
            }) 
            valor=0;
            total=0
            $("input[name='ingredientes[]'").each(function(index){
                if(this.checked){
                    if(isNaN(parseFloat($(this).val())))
                    total+=0;
                }
                else{
                    total+=parseFloat($(this.val()))
                    console.log(total)
                }
            }) 
        }
        RecorrerRadios()






    })
})