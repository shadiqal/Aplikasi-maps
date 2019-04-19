

var keyword = document.getElementById('keyword');
var content = document.getElementById('caris');
if (keyword == ''){

    produk();
}else{
console.log(keyword);
keyword.addEventListener('keyup', function(){
	console.log(keyword.value);
	var xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function(){
		if ( xhr.readyState == 4 && xhr.status == 200){
		content.innerHTML = xhr.responseText;
		console.log('ok');
		}
	}
	

	xhr.open('GET', '../../assets/js/produk.php?keyword='+ keyword.value, true);
	xhr.send();
});
    
}