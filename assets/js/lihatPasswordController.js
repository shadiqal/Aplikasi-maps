

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
    