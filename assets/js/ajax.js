function loadlaporankeuangan() {
	// Create an XMLHttpRequest Object	
	var xmlHttpObj;	
	if (window.XMLHttpRequest) {				
		xmlHttpObj = new XMLHttpRequest( );
	} else {			
		try {
			xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				xmlHttpObj = false;
			}
		}
	}		
	// Create a function that will receive data sent from the server
	xmlHttpObj.open("GET", "loadlaporankeuangan.php?", true);
	xmlHttpObj.send();
	xmlHttpObj.onreadystatechange = function() {
		if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
			document.getElementById("content").innerHTML=xmlHttpObj.responseText;
			var s = document.createElement("script");
			s.type = "text/javascript"; 
			s.src = "../assets/js/loadpicker3.js";
			$("head").append(s);
			
			var t = document.createElement("script");
			t.type = "text/javascript"; 
			t.src = "../assets/js/loadpicker4.js";
			$("head").append(t);
		}
	}
}

function loadlaporanmenu() {
	// Create an XMLHttpRequest Object	
	var xmlHttpObj;	
	if (window.XMLHttpRequest) {				
		xmlHttpObj = new XMLHttpRequest( );
	} else {			
		try {
			xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				xmlHttpObj = false;
			}
		}
	}		
	// Create a function that will receive data sent from the server
	xmlHttpObj.open("GET", "loadlaporanmenu.php?", true);
	xmlHttpObj.send();
	xmlHttpObj.onreadystatechange = function() {
		if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
			document.getElementById("content").innerHTML=xmlHttpObj.responseText;
		}
	}
}

function masukkanmenu() {
	// Create an XMLHttpRequest Object	
	var xmlHttpObj;	
	if (window.XMLHttpRequest) {				
		xmlHttpObj = new XMLHttpRequest( );
	} else {			
		try {
			xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				xmlHttpObj = false;
			}
		}
	}		
	// Create a function that will receive data sent from the server
	xmlHttpObj.open("GET", "masukkanmenu.php?", true);
	xmlHttpObj.send();
	xmlHttpObj.onreadystatechange = function() {
		if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
			document.getElementById("content").innerHTML=xmlHttpObj.responseText;
		}
	}
}

function masukkanpenjualan() {
	// Create an XMLHttpRequest Object	
	var xmlHttpObj;	
	if (window.XMLHttpRequest) {				
		xmlHttpObj = new XMLHttpRequest( );
	} else {			
		try {
			xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				xmlHttpObj = false;
			}
		}
	}		
	// Create a function that will receive data sent from the server
	xmlHttpObj.open("GET", "masukkanpenjualan.php?", true);
	xmlHttpObj.send();
	xmlHttpObj.onreadystatechange = function() {
		if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
			document.getElementById("content").innerHTML=xmlHttpObj.responseText;
			var s = document.createElement("script");
			s.type = "text/javascript"; 
			s.src = "../assets/js/loadpicker.js";
			$("head").append(s);
		}
	}
}

function masukkanpengeluaran() {
	// Create an XMLHttpRequest Object	
	var xmlHttpObj;	
	if (window.XMLHttpRequest) {				
		xmlHttpObj = new XMLHttpRequest( );
	} else {			
		try {
			xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				xmlHttpObj = false;
			}
		}
	}		
	// Create a function that will receive data sent from the server
	xmlHttpObj.open("GET", "masukkanpengeluaran.php?", true);
	xmlHttpObj.send();
	xmlHttpObj.onreadystatechange = function() {
		if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
			document.getElementById("content").innerHTML=xmlHttpObj.responseText;
			var s = document.createElement("script");
			s.type = "text/javascript"; 
			s.src = "../assets/js/loadpicker2.js";
			$("head").append(s);
		}
	}
}

function lihatdetail(tanggal) {
	// Create an XMLHttpRequest Object	
	var xmlHttpObj;	
	if (window.XMLHttpRequest) {				
		xmlHttpObj = new XMLHttpRequest( );
	} else {			
		try {
			xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				xmlHttpObj = false;
			}
		}
	}		
	// Create a function that will receive data sent from the server
	xmlHttpObj.open("GET", "lihatdetail.php?tanggal="+tanggal, true);
	xmlHttpObj.send();
	xmlHttpObj.onreadystatechange = function() {
		if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
			document.getElementById("content").innerHTML=xmlHttpObj.responseText;
		}
	}

}