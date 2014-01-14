function uploadData(){
	var name = ["user1.json","user2.json","user3.json","user4.json","user5.json"];
	var i;
	for(i = 0; i < 5; i++) {
		var data = {
			value0 : obj[i][0].join(","),
	 		value1 : obj[i][1].join(","),
	 		value2 : obj[i][2].join(","),
			value3 : obj[i][3].join(","),
			value4 : obj[i][4].join(","),
			value5 : obj[i][5].join(","),
	 		value6 : obj[i][6].join(","),
	 		namevalue : name[i]
		};
		$.ajax({
        	type: "GET",
        	url: "save.php",
        	data: data,
		})
	}
}

function max(a,b) {
	if(a>b) {
		return a;
	}else{
		return b;
	}
}

function loadData() {
	var c = new Array(0,0,0,0,0); 
	var i,j,k;

	for(i = 0; i < 5; i++) {
		if( document.q1.elements[i].checked ) {
			c[i] = 1;
		}
	}

	for (i = 0; i < obj0.length; i++){
		for (j = 0; j < obj0[i].length; j++){
			obj0[i][j] = 0;
			for(k = 0; k < 5; k++) {
				if(c[k]==1) {
					obj0[i][j] = max(obj0[i][j],obj[k][i][j]);
				} 
			}
		}
	}
	edit = 0;
	document.q4.elements[0].disabled = true;
	print();
	return;
}

function changeData() {
	var i,j;

	for(i = 0; i < 5; i++) {
		if( document.q3.elements[i].checked ) {
			user = i;
		}
	}
	for (i = 0; i < obj0.length; i++){
		for (j = 0; j < obj0[i].length; j++){
			obj0[i][j] = obj[user][i][j];
		}
	}
	print();
	edit = 1;
	document.q4.elements[0].disabled = false;
	return;
}

function afterchangeData() {
	var i,j;

	for (i = 0; i < obj0.length; i++){
		for (j = 0; j < obj0[i].length; j++){
			obj[user][i][j] = obj0[i][j];
		}
	}
	uploadData();
	edit = 0;
	document.q4.elements[0].disabled = true;
	return;
}

function mClickTR(obj,tableindex) {
	var i;
	var colorno
	var table = new Array(0,0,0,0,0,0,0);

	for(i = 0; i < 4; i++) {
		if( document.q2.elements[i].checked ) {
			colorno = document.q2.elements[i].value;
		}
	}

	if(edit == 1) {
		obj.cells[0].style.backgroundColor = mycoler[colorno];
		obj0[tableindex][obj.rowIndex] = colorno;
	}
}

function print() {
	var i,j;
	var table = new Array(0,0,0,0,0,0,0);
	var temp;

	table[0] = document.getElementById("d1");
	table[1] = document.getElementById("d2");
	table[2] = document.getElementById("d3");
	table[3] = document.getElementById("d4");
	table[4] = document.getElementById("d5");
	table[5] = document.getElementById("d6");
	table[6] = document.getElementById("d7");

	for (i = 0; i < obj0.length; i++){
		for (j = 0; j < obj0[i].length; j++){
			temp = table[i].rows[j].cells[0];
			temp.style.backgroundColor = mycoler[obj0[i][j]];
		}
	}
	return;
}