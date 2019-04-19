function loadDataDiri(){
    $(document).ready(function(){
        $.ajax({
            url: '../../assets/php/loadDataDiri.php',
            type: 'POST',
            success: function(data){
                $('#data').html(data);
            }
        })
    })
}

function lihatPassword(){
    var pass = document.getElementById('pass');
    var x = document.getElementById('lihat');
        if (x.checked){
            pass.setAttribute('type', 'text');
        }
    else{
        pass.setAttribute('type', 'password');
    }
}

function loadGantiNoHp(){
    $(document).ready(function(){
        $.ajax({
        url: '../../assets/php/loadGantiNoHp.php',
        type: 'POST',
        success: function(data){
            $('#loadGantiNoHp').html(data);
        }
    })
        })
}

function loadGantiPassword(){
     $(document).ready(function(){
    $.ajax({
        url: '../../assets/php/loadGantiPassword.php',
        type: 'POST',
        success: function(data){
            $('#loadGantiPassword').html(data);
        }
    }) })
}

function gantiNoHp(){
    var noHpBaru = $('#noHpBaru').val();
    var delay = 2000;
    $.ajax({
        url: '../../assets/php/updateNoHp.php',
        type: 'POST',
        data: {noHpBaru: noHpBaru},
        success: function(data){
            if (data == 1){
                $('#infoNoHp').text("No Telepon anda telah di perbaharui");
                setTimeout(function() {
                                    loadGantiNoHp();
                loadDataDiri();
                                }, delay);
            }
        }
    })
}

function gantiPassword(){
    var passwordBaru = $('#passwordBaru').val();
    var delay = 2000;
    $.ajax({
        url: '../../assets/php/updatePassword.php',
        type: 'POST',
        data: {passwordBaru: passwordBaru},
        success: function(data){
            if (data == 1){
                
                $('#infoPassword').text("Password anda telah di perbaharui");
                setTimeout(function() {
                                    loadGantiPassword();
                loadDataDiri();
                                }, delay);
                
            }
        }
    })
}



