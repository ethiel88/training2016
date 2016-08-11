function f1(){
	console.log("evento onclick");
	n = document.getElementById("campot").value;
	n = parseInt(n);
	a = -1
	b = 1
	t = 1 //usado para el fondo
	
	output = "<tr>"
	for(i=1; i<=n; i++){
		c = a + b;
		a = b
		b = c
		output += "<td class='fondo"+t+"'>" + c + "</td>";
		if(i%5==0){
			output += "</tr><tr>" //nueva fila
			t = 1 - t //conmuta el fondo a usar
		}
	}
	output += "</tr>"

	resultado = "<table border='1'>"+output+"</table>";
	mydiv = document.getElementById("mydiv")
	mydiv.innerHTML = resultado
}
