var a;
var b;
var c;
var opr;
var opr_seleksi=false;

function btn(angka) {
	var tampil = document.getElementById("output").value;
	if (tampil=="0") {
		tampil=angka;
	}else{
		tampil+=angka;
	}
	document.getElementById("output").value = tampil;
}

function clr(){
	var tampil = document.getElementById("output").value = "0";
	a=0;
	b=0;
	opr_seleksi=false;
}

function koma(){
	var tampil=document.getElementById("output").value;
	if (tampil.includes(".") == false) {
		tampil += ".";
	}
	document.getElementById("output").value=tampil;
}

function btn_opr(o){
	opr_seleksi = true;
	a= parseFloat(document.getElementById("output").value);
	opr=o;
	document.getElementById("output").value="0";
}

function hitung(){
	if (opr_seleksi==true) {
		b= parseFloat(document.getElementById("output").value);
		switch(opr){
			case 1:
				c = a * b;
				document.getElementById("output").value = c;
				break;
			case 2:
				c = a / b;
				document.getElementById("output").value = c;
				break;
			case 3:
				c = a + b;
				document.getElementById("output").value = c;
				break;
			case 4:
				c = a - b;
				document.getElementById("output").value = c;
				break;
		}
		opr_seleksi=false;
		c = 0;
		a = 0;
		b = 0;
	}
}