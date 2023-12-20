var maintable = document.getElementById('miTabla'),
pdfout = document.getElementById('pdfout');
//sd=document.getElementById('sx');




pdfout.onclick = function(){
    
    var doc = new jsPDF('p', 'pt', 'letter'); 
    var margin = 20; 
    var scale = (doc.internal.pageSize.width - margin * 2) / document.body.clientWidth; 
    var scale_mobile = (doc.internal.pageSize.width - margin * 2) / document.body.getBoundingClientRect(); 

    
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        
        doc.html(maintable, { 
            x: margin,
            y: margin,
            html2canvas:{
                scale: scale_mobile,
            },
            callback: function(doc){
                doc.output('dataurlnewwindow', {filename: 'pdf.pdf'}); 
            }
        });
    } else{
         
        doc.html(maintable, {
            x: margin,
            y: margin,
            html2canvas:{
                scale: scale,
            },
            callback: function(doc){
                doc.output('dataurlnewwindow', {filename: 'pdf.pdf'}); 
            }
        });
    }
};