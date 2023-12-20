function exportToExcel() {

    // Obtener la tabla HTML
    var table = document.getElementById("miTabla");
    var but=document.getElementById("ocul")
    
    // Crear un objeto de libro de Excel
    var workbook = XLSX.utils.book_new();
  
    // Crear una hoja de trabajo con los datos de la tabla
    var sheet = XLSX.utils.table_to_sheet(table);
  
    // Agregar la hoja de trabajo al libro
    XLSX.utils.book_append_sheet(workbook, sheet, "Mi hoja de trabajo");
  
    // Descargar el archivo Excel
    XLSX.writeFile(workbook, "mi_archivo.xlsx");
  }
  


