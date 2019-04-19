function loadRiwayatPesanan(idKonsumen){
    $(document).ready(function(){
        $.ajax({
            url: "../../assets/php/riwayatPesanan.php",
            type: "POST",
            
            success: function(data){
                console.log(data);
                $('#content').html(data);
            }
        })
    })
}

function detail(idPesanan){
    $(document).ready(function(){
        $.ajax({
            url: "../../assets/php/detailPesanan.php",
            type: "POST",
            data: {idPesanan:idPesanan},
            success: function(data){
                console.log(data);
                $('#detailPesanan').html(data);
            }
        })
    })
}