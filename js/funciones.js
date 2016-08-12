function generarCuadradoMagico(){
	var n = parseInt(document.getElementById("campo").value);
	var cont = 1;
	var fin  = n*n;
	var tabla = new Array(n);
	var a = 0;
	var b = parseInt(n/2);

	for(k1=0; k1<n; k1++) tabla[k1] = new Array(n);

	for(k1=0; k1<n; k1++)
		for(k2=0; k2<n; k2++)
			tabla[k1][k2] = 0;

	while(cont <= fin){
		if(tabla[a][b]==0){
			tabla[a][b] = cont++;
		}
		else{
			a++;
			b--;
			if(a>=n)a=0;
			if(b<0)b=n-1;
			a++;
			continue;
		}

		a--;
		b++;
		if(a<0)a=n-1
		if(b>=n)b=0
	}

	var tablahtml = document.createElement('table');
	for(i=0; i<n; i++){
		var tr = document.createElement('tr');
		for(j=0; j<n; j++){
			var td = document.createElement('td');
			var texto = document.createTextNode(tabla[i][j]);
			td.appendChild(texto);
			tr.appendChild(td);
		}
		tablahtml.appendChild(tr);
	}
	tablahtml.border = '1'
	tablahtml.cellPadding = '10'
	document.getElementById("ans").appendChild(tablahtml);
}

function preparar(){
	document.getElementById("campo").value = '';
	document.getElementById("ans").innerHTML = "Preparando ..."
}

function missfocus(){
	alert("Chau");
}
