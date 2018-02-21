
window.addEventListener("load", loadTable(), true);

function loadTable(){

	var xhr = new XMLHttpRequest();
		xhr.open('GET', 'week.php', true);

		xhr.onload = function(){
				if(this.status == 200){
					var users = JSON.parse(this.responseText);
					var output = '';
//					output += '<table class="table table-striped table-bordered table-hover table-condensed">'
					output += '<table class="table table-bordered table-striped table-hover" id="table-week">'
						for(var i in users){
							if (users[i].day == 'W/C'){
							output +=
							'<tr><td><strong>'+users[i].day+'</strong></td><td><strong>'+ users[i].activity + '</strong></td></tr>';	
						} else {
						output +=
						'<tr><td>'+users[i].day+'</td><td>'+ users[i].activity + '</td></tr>';
							}	
						}
					output +='</table>'					
					document.getElementById('week').innerHTML = output;
				}

}
xhr.send();
 }	

 
