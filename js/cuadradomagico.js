function generarCuadradoMagico(n){
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
	
	output = "";
	for(k1=0; k1<n; k1++){
		row = "";
		for(k2=0; k2<n; k2++){
			row += tabla[k1][k2]+" ";
		}
		output += row+"\n";
	}
	console.log(output);
}