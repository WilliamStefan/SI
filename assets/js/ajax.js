$(document).ready(function() {
	$( "#content" ).on( "click", "#submit-data-pengeluaran", function() {
		
		$.post( "pengeluaran_baru.php", $( "#form-pengeluaran-baru" ).serialize()).done( function()
		{
			$( "#sukses-tambah-data-pengeluaran" ).hide();
			$( "#sukses-tambah-data-pengeluaran" ).empty().append( "<div class='alert alert-success alert-dismissible' role='alert' style='margin-bottom:2em;'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Sukses</strong> Data pengeluaran berhasil ditambahkan</div> </div><br />" );
			$( "#sukses-tambah-data-pengeluaran" ).fadeIn( 100 );
			$( "#sukses-tambah-data-pengeluaran" ).delay( 5000 ).fadeOut( 800 );
			$( "#inputtanggal2" ).val( "" );
			$( "#inputjumlahpengeluaran" ).val( "" );
			$( "#inputketeranganpengeluaran" ).val( "N/A" );
		});
		
  		return false;
	});

	$( "#content" ).on( "click", "#data-penjualan-submit", function() {
		
		$.post( "penjualan_baru.php", $( "#form-pengeluaran-baru" ).serialize()).done( function()
		{
			$( "#sukses-tambah-data-penjualan" ).hide();
			$( "#sukses-tambah-data-penjualan" ).empty().append( "<div class='alert alert-success alert-dismissible' role='alert' style='margin-bottom:2em;'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Sukses</strong> Data penjualan berhasil ditambahkan</div> </div><br />" );
			$( "#sukses-tambah-data-penjualan" ).fadeIn( 100 );
			$( "#sukses-tambah-data-penjualan" ).delay( 5000 ).fadeOut( 800 );
			$( "#inputtanggal" ).val( "" );
			$( "#inputjumlahpenjualan" ).val( "" );
			$( "#inputketeranganpenjualan" ).val( "N/A" );
		});

  		return false;
	});
});
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

function lihatdetail(tanggal,pen) {
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
	xmlHttpObj.open("GET", "lihatdetail.php?tanggal="+tanggal+"&pendapatan="+pen, true);
	xmlHttpObj.send();
	xmlHttpObj.onreadystatechange = function() {
		if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
			document.getElementById("content").innerHTML=xmlHttpObj.responseText;
		}
	}
}

function laptang() {
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
	var tang1 = document.getElementById("inputtanggal3").value;
	var tang2 = document.getElementById("inputtanggal4").value;
	xmlHttpObj.open("GET", "loadlaporankeuangantang.php?tanggal1="+tang1+"&tanggal2="+tang2, true);
	xmlHttpObj.send();
	xmlHttpObj.onreadystatechange = function() {
		if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
			document.getElementById("content").innerHTML=xmlHttpObj.responseText;
		}
	}
}
