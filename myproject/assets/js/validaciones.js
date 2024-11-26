$(document).ready(function() {
    $('#formulario-categorias').on('submit', function(event) {
        event.preventDefault();
        // Aquí puedes agregar la lógica para verificar el formulario
        let isValid = true;
        $('#formulario-categorias input, #formulario-categorias textarea').each(function() {
            if ($(this).val().trim() === '') {
                isValid = false;
                $(this).focus();
                return false;

                 // break the loop
            }
        });

        if (isValid) {
            this.submit();
            
        } else {
            alert('Todos los campos deben estar llenos. Por favor, verifica el formulario. Marcos Godoy');
        }
         
    });
});
$('#formulario-productos').on('submit', function(event) {
    event.preventDefault();
    let isValid = true;

    $('#formulario-productos input, #formulario-productos textarea').each(function() {
        if ($(this).val().trim() === '') {
            isValid = false;
            $(this).focus();
            return false;
        }
    });

    if (isValid) {
        this.submit();
        $(this).focus();
    } else {
        alert('Todos los campos deben estar llenos. Por favor, verifica el formulario.  Marcos Godoy');
    }
});