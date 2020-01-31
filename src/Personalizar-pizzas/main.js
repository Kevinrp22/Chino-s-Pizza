$(document).ready(function () {
    /* MENU SIDEBAR */
    $("#boton-menu").click(function () {
        $("#sidebar").toggleClass("active");
    });

    /* INGREDIENTES */
    $("#btn-añadir-carrito").click(function (e) {
        e.preventDefault()
        if (!$("input[name='tamaño[]'").is(":checked")) {
            /* SI NO HA ELEGIDO UN TAMAÑO ENTONCES */
            alert("Seleciona un tamaño de pizza!");
            return false;
        }
        if (!$("input[name='masa[]'").is(":checked")) {
            /* SI NO HA ELEGIDO UN TIPO DE MASA ENTONCES */
            alert("Seleciona un tipo de masa!");
            return false;
        }
        if (!$("input[name='ingredientes[]'").is(":checked")) {
            /* SI NO HA ELEGIDO UN INGREDIENTE ENTONCES */
            alert("Seleciona al menos 1 ingrediente!");
            return false;
        }
        function RecorrerInputs() {
            valor = 0;
            totalIngredientes = 0
            tamaño = 0
            masa = ""
            $("input[name='tamaño[]'").each(function () {
                if (this.checked) {
                    tamaño = $(this).val();
                    totalTamaño = parseFloat(tamaño);

                }
            })
            $("input[name='masa[]'").each(function () {
                if (this.checked) {
                    masa = $(this).val();

                }
            })

            $("input[name='ingredientes[]'").each(function () {
                if (this.checked) {
                    var cantidad = ($(this).val());
                    totalIngredientes += parseFloat(cantidad);
                }
            })

            var totalTodo = parseFloat(totalTamaño + totalIngredientes).toFixed(2);
            console.log("el total es " + totalTodo)
            
            $("#salida-precio").text(totalTodo + "€")
        }

        RecorrerInputs()


        





    })
})