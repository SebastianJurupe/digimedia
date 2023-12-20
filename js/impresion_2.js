function imprimirParteDePagina() {
    // Obtener el elemento que deseas imprimir
    var elementoAImprimir = document.getElementById("sx");

    // Crear un objeto de ventana de impresión
    var ventanaDeImpresion = window.open();

    // Agregar el elemento a la ventana de impresión
    ventanaDeImpresion.document.write(elementoAImprimir.innerHTML);

    // Imprimir la ventana de impresión
    ventanaDeImpresion.print();

    // Cerrar la ventana de impresión
    ventanaDeImpresion.close();
}