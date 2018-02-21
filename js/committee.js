
window.addEventListener("load", loadTable(), true);

function loadTable(){

	var xhr = new XMLHttpRequest();
		xhr.open('GET', 'committee.php', true);

		xhr.onload = function(){
				if(this.status == 200){
					var users = JSON.parse(this.responseText);
					var output = '';
					output += '<table class="table table-bordered table-striped table-hover" id="table-committee">'
						for(var i in users){
						output +=
						'<tr><td>'+users[i].Position1+'</td><td>'+ users[i].Name1 +'</td><td>'
						+users[i].Position2+'</td><td>'+users[i].Name2 +
						'</td></tr>';	
						}
					output +='</table>'					
					document.getElementById('committee').innerHTML = output;
				}

}
xhr.send();
 }	

 
