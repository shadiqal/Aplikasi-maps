 $(document).ready(function(){
    
    $('#email').change(function(){
      var email = $('#email').val();
      var link = 'email='+ email;
      $.ajax({
        type:"POST",
        data: link,
        url:"../../assets/php/cekUsername.php",
        success:function(data){
          if (data == 0){
             
            $('#pesan').text("Email bisa digunakan");
          }
          else{
              
            $('#pesan').text("Email sudah terdaftar");
          }
        }
      });
    });
    
     $('#daftarBtn').click(function(){
      var email = $('#email').val();
      var nama = $('#nama').val();
      var ttl = $('#ttl').val();
      var noHp = $('#noHp').val();
      var pass = $('#pass').val();

      var link = 'email='+ email + '&nama='+ nama + '&ttl='+ ttl +'&noHp='+ noHp +'&pass='+ pass;
      $.ajax({
        type:"POST",
        data:link,
        url:"../../assets/php/daftar.php",
        success: function(data){
         
          if (data == 0){
              
          }
          else{
            window.location = "verifikasi.php";
          }
        }
      });
    });

    
  });


