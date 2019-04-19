
    
    

    function produk(idWarung,idKonsumen){
        var mulai = 1;

        $(document).ready(function(){
            $.ajax({
                url: '../../assets/php/loadProduk.php',
                type:'POST',
                data:{idWarung:idWarung,mulai:mulai},
                success:function(data){
                    
                    $('#caris').html(data);
                    counter();
                }
            })
        })
    }
    function pages(mulai){
        
   
        $(document).ready(function(){
            $.ajax({
                url: '../../assets/php/loadProduk.php',
                type:'POST',
                data:{idWarung:idWarung,mulai:mulai},
                success:function(data){
                    
                    $('#caris').html(data);
                    counter();
                }
            })
        })
    }
    

   
   function counter(){
       
       $(document).ready(function(){
           $.ajax({
               url:'../../assets/php/counter.php',
               data: {idWarung:idWarung},
                type:'POST',
               success:function(counter){
                   $('#counter').text(counter);
                   
               }
           })
       })
   }
   
    function listKeranjang(){
     
            $.ajax({
                url: '../../assets/php/dataKeranjang.php',
                data: {idWarung:idWarung},
                type:'POST',
                success:function(data){
                    console.log(idWarung);
                    $('#keranjang').html(data);
                    counter();
                }
            })
  
        
    }
    
    function notif(){
        counter();
          $('#info').modal({
              fadeDuration: 2000,
                fadeDelay: 0.50
          });
             
        
      }
    
    function hapus(idProduk){
         $(document).ready(function(){
            
            $.ajax({
                url: '../../assets/php/hapusDataKeranjang.php',
                data: {idWarung:idWarung, idProduk:idProduk},
                type:'POST',
                success:function(data){
                    listKeranjang();
                    counter();
                }
            })
        })
    }
    
    function send(idProduk){
            $(document).ready(function(){
                
                var data = "idProduk="+idProduk+"&idWarung="+idWarung;
                console.log(data);
               $.ajax({
                   url: "../../assets/php/sessionProduk.php",
                   data: data,
                   type: 'POST',
                   success: function(data){
                      notif();
                       console.log(data);
                       counter();
                   }
               }); 
            });
        }
    
    function pesan(){
       
        
        if ( idKonsumen == '' ){
            	$('#pesan').text("Maaf anda harus Login terlebih dahulu");
        }
        else if ( idKonsumen !== '' && status == 'belum'){
            $('#pesan').text("Maaf anda harus verifikasi terlebih dahulu");
            $('#verif').text("Verifikasi disini");
        }
    
        else {
          window.location = 'verifikasiPesanan.php?idKonsumen='+idKonsumen+'&idWarung='+idWarung;
        }
    }
    
    
