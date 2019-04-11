
var alert = document.createElement("div");

var aBodyModalColaborador = {
    "form": {
        class: "row",
        method: "post",
        id: "formColaboradores",
        class: "form",
        container: "<div class='row'>",
        elements: {
            1:{
                element: "div",
                class: "col-12 col-sm-6 col-xl-4",
                html: `
                    <div class="form-group">
                        <label for="iptNombre">Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="iptNombre" name="iptNombre"  placeholder="Nombre" required>
                    </div>`
            },
            2:{
                element: "div",
                class: "col-12 col-sm-6 col-xl-4",
                html: `
                    <div class="form-group">
                        <label for="iptSueldoBase">Sueldo Base</label>
                        <input type="number" class="form-control form-control-sm" id="iptSueldoBase" name="iptSueldoBase"  placeholder="Sueldo Base" required>
                    </div>`
            },
            3:{
                element: "div",
                class: "col-12 col-sm-6 col-xl-4",
                html: `
                    <div class="form-group">
                        <label for="iptArea">Área</label>
                        <input type="text" class="form-control form-control-sm" id="iptArea" name="iptArea"  placeholder="Área" required>
                    </div> `
            },
            4:{
                element: "div",
                class: "col-12 text-center",
                html: `
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pr-2">Guardar</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                    </div> `
            }
        }
    }
};

$(document).ready(function() {

    $("#btnBuevo-registro").on("click", function(){
        // Size Modal
        $('.modal-dialog').addClass('modal-lg');
        // Titulo Modal
        $('#tituloModalGlobal').html("Nuevo Colaborador");
        // Contenido Modal

        $sContenidModal = "";

        $.each(aBodyModalColaborador, function(index, item){
            if(index == "form"){
                $sContenidModal += `<${index} class="${item.class} id="${item.id} method="${item.method}">`;
                $sContenidModal += item.container;
                $.each(item.elements, function(indexElement, element){
                    $sContenidModal += `<${element.element} class="${element.class}">`;
                    $sContenidModal += `${element.html}`;
                    $sContenidModal += `</${element.element}>`;
                });
                $sContenidModal += "</div>";
                $sContenidModal += `</${index}>`;
            }
        });


        $('#contenidoModalGlobal').empty().append($sContenidModal);
            
        $('#modalGlobal').modal({backdrop: true,keyboard: false});
        // Mostrar Modal
        $('#modalGlobal').modal('show');
    });

    $("#btnEditar-registro").on("click", function(){
        // Size Modal
        $('.modal-dialog').addClass('modal-lg');
        // Titulo Modal
        $('#tituloModalGlobal').html("Editar Colaborador");
        // Contenido Modal
        $sContenidModal = "";



        $('#contenidoModalGlobal').empty().append($sContenidModal);
            
        $('#modalGlobal').modal({backdrop: true,keyboard: false});
        // Mostrar Modal
        $('#modalGlobal').modal('show');
    });

    $("#contenidoModalGlobal").on("submit", "formColaboradores", function(){
        $.ajax({ 
            type: 'post',
            url: "./src/Controller/PruebaController.php",
            beforeSend: function(){
                tempAlert("Cargando", 5000000);
            },
            success: function(data){
                alert.parentNode.removeChild(alert);
                                
            },
            error: function(data){
                $('#loading').hide();

                alertaSimple({
                    mensaje: data, 
                    tipo: "error", 
                    toast: true, 
                    position: "top-end", 
                    mostrarBoton:false
                });
            }
        });
        return false;
    });
    
    $("#btnRemover-registro").on("click", function(){
        
    });
    
    $("#btnSearch-registros").on("click", function(){
        $.ajax({ 
            type: 'post',
            url: "./../../src/Controller/PruebaController.php",
            data:{
                accion: "json"
            },
            dataType:'json',
            beforeSend: function(){
                tempAlert("Cargando", 5000000);
            },
            success: function(data){
                alert.parentNode.removeChild(alert);
                tempAlert(data.msg, 5000);
                var sBodyTable = "";
                $.each(data.aColaboradores, function(index, item){

                });
            },
            error: function(data){
                console.log(data);
            }
        });
    });

});

function tempAlert(msg,duration){
 alert.setAttribute("style","position:absolute;top:40%;left:20%;background-color:white;");
 alert.innerHTML = msg;
 setTimeout(function(){
  alert.parentNode.removeChild(alert);
 }, duration);

 document.body.appendChild(alert);
}