  $(document).ready(function(){
    $('#loginBtn').click(function(){
      var email = $('#email').val();
      var pass = $('#pass').val();
      var pesan = $('#pesan').val();
      console.log(email);
      console.log(pass);
      
      if (email != '' && pass != ''){
        var link = '&email='+ email +'&pass='+pass;
        $.ajax({
          type: 'POST',
          data: link,
          url: "../../assets/php/login.php",
          beforeSend: function(){
            $('#pesan').text("Loading . . .");
            $('#loginBtn').hide();
          },
          success: function(hasil){
            if(hasil == 0){
              $('#pesan').text("Maaf password dan username anda salah");
              $('#loginBtn').show();
            }
            else if (hasil == 2){
              window.location = "verifikasi.php";
            }
            else if (hasil == 1){
              window.location = "../../index.php";
            }
            
          }

        });
      }

    });
  });