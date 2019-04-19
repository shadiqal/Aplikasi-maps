$(document).ready(function(){
    $('#cek').click(function(){
        var kode = $('#kode').val();
        $.ajax({
            url: '../../assets/php/verifikasi.php',
            type: 'POST',
            data: {kode: kode},
            success: function(data){
                if (data == 0){
                    $('#pesan').text("Kode yang anda masukkan salah");
                }
                else{
                    window.location = '../../index.php';
                }
            }
        })
    })
    
    $('#kodeBaru').click(function(){
        $.ajax({
            url: '../../assets/php/kodeBaru.php',
            type: 'POST',
            success: function(data){
                if (data == 0){
                    $('#pesan').text("Kode baru telah di kirim");
                }
                
            }
        })
    })
})