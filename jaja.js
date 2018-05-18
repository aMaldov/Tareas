function sub(){
	var nombre = document.getElementsByName("prod")[0].value;
	var nombre1 = document.getElementsByName("prod2")[0].value;
	var regexstring = nombre;
	var regexp = new RegExp(regexstring);
	var z=0;
	alert(regexp);
	for(var i in nombre1){
		var str2 = nombre1.replace(regexp, "Replace");	
		nombre1=str2;
	}
	
	document.write(str2);
	
	for(var y in nombre1){
		var	nice=(str2.includes("Replace"));
		z+=1;
	}		
	alert(Math.round(z/7));
};
