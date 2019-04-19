 function terimaKasih(){
          $('#centralModalInfo').modal({
              fadeDuration: 1000,
                fadeDelay: 0.50
          });
      }
  $(document).ready(function(){
      var delay = 2000;
    $('#pesanBtn').click(function(){
        var idKonsumen = '<?php echo $idKonsumen; ?>';
      var idWarung = '<?php echo $idWarung; ?>';
        var noHP = $('#noHP').val();
        var alamatTujuan = $('#alamatTujuan').val();
        
   
				var link = 'idWarung='+idWarung+'&idKonsumen='+idKonsumen+'&noHP=' + noHP +'&alamatTujuan='+alamatTujuan;
				$.ajax({
					data: link,
					type: 'POST',
					url:"../../assets/php/pesan2.php",
					success: function(hasil){
						$.ajax({
                            url:"../../assets/php/unset.php",
                            success:function(){
                                terimaKasih();
                                setTimeout(function() {
                                    window.location = "../../index.php";
                                }, delay);
                                
                            }
                        })
					}
				});

			
		});
  });