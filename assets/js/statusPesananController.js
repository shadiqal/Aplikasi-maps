function loadStatusPesanan(idKonsumen){
    $(document).ready(function(){
        console.log(idKonsumen);
    $.ajax({
        url: '../../assets/php/loadStatusPesanan.php',
        type: 'POST',
        data: {idKonsumen:idKonsumen },
        success: function(data){
            console.log(data);
            $('#content').html(data);
        }
    })        
    })
}