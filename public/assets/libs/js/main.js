$('.btn-edit').click(function () { 
    var $row = $(this).closest('tr');
    var $data_id = $row.find("td:nth-child(2)");
    var $data_kelas = $row.find("td:nth-child(3)");
    var $data_tanggal = $row.find("td:nth-child(4)");
    
     
    //console.log($data_id.text(), " ", $data_kelas.text(), " ", $data_tanggal.text());

     $('#kelas-edit').attr('value', $data_kelas.text());
     $('#tanggal-edit').attr('value', $data_tanggal.text());
     $('#form-edit').attr('action' ,'/jadwal/'+$data_id.text()+'/update');
     

 });

 $('.btn-input').click(function () { 
    var $row = $(this).closest('tr');
    var $data_id = $row.find("td:nth-child(2)");
    var $data_name = $row.find("td:nth-child(3)");
    var $data_nim = $row.find("td:nth-child(4)");
    var $data_nilai = $row.find("td:nth-child(5)");

    
     
    console.log($data_nilai.text());

     $('.nama-input').attr('value', $data_name.text());
     $('.nim-input').attr('value', $data_nim.text());
     $('.nilai-input').attr('value', $data_nilai.text());

     $('#form-input').attr('action' ,'/mhs/'+$data_id.text()+'/update');
     

 });

 $('.btn-delete').click(function(){

     var $row = $(this).closest('tr');
     var $data_id = $row.find("td:nth-child(2)");
     $('#form-delete').attr('action' ,'/jadwal/'+$data_id.text()+'/delete');
 });


 $(document).ready(function () {


    $('.status-kehadiran').each(function (index, element) {
       
        if($(this).data('status') == 'Hadir'){

            $(this).css('color', 'green');
    
        }else{
            $(this).css('color', 'red');
        }
        
    });

    $('.btn-submit').each(function (index, element) {
       
        if($(this).data('status') == 'Hadir'){

           $(this).attr('disabled', 'true');
           $(this).text('Submitted');
           $(this).addClass('btn-dark');

    
        }
    });

    
 });