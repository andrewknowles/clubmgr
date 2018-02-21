
window.addEventListener("load", loadTable(), true);

function loadTable(){

	var xhr = new XMLHttpRequest();
		xhr.open('GET', 'fixture.php', true);

		xhr.onload = function(){
				if(this.status == 200){
					var users = JSON.parse(this.responseText);
					var output = '';
//					output += '<table class="table table-striped table-bordered table-hover table-condensed">'
					output += '<table class="table table-bordered table-striped table-hover" id="table-committee">'
						for(var i in users){
							var mydate = new Date(users[i].Date);
							var dd = mydate.getDate();
								if(dd<10){
									dd='0'+dd;
								}
							var dd = dd+'/';
							var mm = mydate.getMonth()+1;
								if(mm<10){
									mm='0'+mm;
								}
							var mm = mm+'/';
							var yy = mydate.getFullYear();
						output +=
						'<tr><td>'+ dd+mm+yy +'</td><td>'+ users[i].Event + '</td><td>'
						 + users[i].Homeaway + '</td><td>' + users[i].Time + '</td><td>' + users[i].Rinkstrips +'</td></tr>';	
						}
					output +='</table>'					
					document.getElementById('fixture').innerHTML = output;
				}

}
xhr.send();
 }	

 
