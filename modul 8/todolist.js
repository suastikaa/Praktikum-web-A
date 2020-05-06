function Tambah(idform, tabelID) {
	var tabel = document.getElementById(tabelID);
	var form = document.forms[idform];
	var hitung_baris = tabel.rows.length;
	var insert_baris = tabel.insertRow(hitung_baris);
	var insert_kolom = insert_baris.insertCell(0);
	var element1 = document.createElement("input");
	element1.type = "checkbox";
	element1.name = "boxcheck";
	insert_kolom.appendChild(element1);
	var insert_kolom2 = insert_baris.insertCell(1);
	insert_kolom2.innerHTML = form.elements['toInput'].value;
	Clear();
}

function hapus(tabelID){
	var sebelum = confirm("Anda Yakin Ingin Menghapus Data Ini?");
	try{
		var tabel = document.getElementById(tabelID);
		var hitung_baris = tabel.rows.length;
		var i;
		for (i = 0; i < hitung_baris; i++) {
			var baris = tabel.rows[i];
			var boxcheck = baris.cells[0].childNodes[0];
			var j = 0;
			if (null != boxcheck && true == boxcheck.checked) {
				j++;
				if (sebelum == true) {
					tabel.deleteRow(i);
					hitung_baris--;
					i--;
				}
				else if (j == hitung_baris) {
					tabel.deleteRow(i);
					hitung_baris--;
					i--;
				}
			}
		}
	}catch(e){
		alert(e);
	}
}

function check(){
	var list = document.getElementsByName('boxcheck');
	var i;
	for (i = 0; i < list.length; i++) {
		if (list[i].type=='checkbox') {
			list[i].checked=true;
		}
	}
}