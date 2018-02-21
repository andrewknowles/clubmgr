
window.addEventListener("load", loadTable(), true);

function loadTable(){

	var xhr = new XMLHttpRequest();
		xhr.open('GET', 'result.php', true);

		xhr.onload = function(){
				if(this.status == 200){
					var users = JSON.parse(this.responseText);
					var output = '';
//					output += '<table class="table table-striped table-bordered table-hover table-condensed">'
					output += '<table class="table table-bordered table-striped table-hover" id="table-committee">'
						for(var i in users){
						output +=
						'<tr><td>'+users[i].Competition+'</td><td>'+ users[i].Name +'</td></tr>';	
						}
					output +='</table>'					
					document.getElementById('result').innerHTML = output;
				}

}
xhr.send();
 }	

 
