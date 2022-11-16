function enviar_correo() {
    var correo = new FormData();

    correo.append("nombre", document.getElementById("name").value);
    correo.append("correo", document.getElementById("email").value);
    correo.append("telefono", document.getElementById("phone").value);
    correo.append("empresa", document.getElementById("subject").value);
    correo.append("mensaje", document.getElementById("message").value);

    $.ajax({
        url: "../../sent-ajax/contact-us.php",
        type: "POST",
        data: correo,
        cache: false,
        contentType: false,
        processData: false,
        success: function (resp) {
            console.log(resp);
            msj = JSON.parse(resp);
            alert(msj.mensaje);
        }
    });
}

function enviar_newsletter() {
    var newsletter = new FormData();

    newsletter.append("newsletter", document.getElementById("newsletter").value);

    $.ajax({
        url: "../../sent-ajax/newsletter.php",
        type: "POST",
        data: newsletter,
        cache: false,
        contentType: false,
        processData: false,
        success: function (resp) {
            console.log(resp);
            msj = JSON.parse(resp);
            alert(msj.mensaje);
        }
    });
}