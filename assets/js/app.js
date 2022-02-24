
function pdf(){
    console.log("pdf");
    var doc = new jsPDF();
    var elementHTML = $('#content').html();
    var specialElementHandlers = {
        '#elementH': function (element, renderer) {
        return true;
    }
};
doc.fromHTML(elementHTML, 15, 15, {
    'width': 170,
    'elementHandlers': specialElementHandlers
});

// Save the PDF
doc.save('sample-document.pdf');
}
/** 
 * Código para Generación código QR 
 * **/

var qrcode = new QRCode(document.getElementById("qrcode"), {
    width : 150,
    height : 150
});

// Funcion para crear el codigo
function makeCode () {
    var elText = document.getElementById("numSocio");
    qrcode.makeCode(elText.value);
}

// Al cargar crear el qr inicial
makeCode();

/* Jquery */

$(document).ready(function(){
    //Generación QR al pasar texto, escondemos el input
    $("#numSocio").
        on("blur", function () {
            makeCode();
        });
    $("#numSocio").hide();

    $(".descarga").click(function(){
        //pdf();
        alert("Carnet descargado");
     });
     $(".descarga").hide();
     $(".globo").hide();
     //$(".descarga").fadeIn(1000, function(){
       // $(".globo").fadeIn(1000);
        //$(".globo").fadeOut(2000);
     //});

     //Ventana Modal al iniciar web con temporizado
    $("#intro").modal("show");
        setTimeout(function(){
        $('#intro').modal("hide")
    },5000);
          
});