<!doctype html>
 <html>
  <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=320,initial-scale=1">
   <title>LFI-Scan</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <style>
    @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Graduate&display=swap');

:root{
	/* ---- */
	--noir-lourd:#0A0114;
	--noir-leger:#150B21;
	--rouge:#900E3D;
	--vert:#0B934A;
	--jaune:#8C900E;
	--mauve:#6E0E90;
	--gris:#8E8991;
	--noir:#0000;
	--blanc:#ffff;
	--text-color:#D4D4D5;
	/* ----- */
}
*{
	font-family: "Barlow Condensed", sans-serif;
    font-weight: 100;
    font-style: normal;
	text-decoration:none;
	list-style:none;
}
body{
	background:var(--noir-lourd);
	color:var(--text-color);
}

.green{
	color:var(--vert);
}
.gris{
	color:var(--gris);
}
.red{
	color:var(--rouge);
}
.yellow{
	color:var(--jaune);
}
.blue{
	color:var(--bleu);
}
.purple{
	color:var(--mauve);
}
input{
	background:transparent;
	font-size:13px;
	border:1px solid var(--vert);
	padding:6px;
	border-radius:5px;
	width:50%;
	color:var(--vert);
}
button{
	padding:7px;
	background:transparent;
	width:52%;
	font-weight:200;
	color:#fff;
	margin-right:2%;
	border:none;
	border-radius:2px;
	background:var(--vert);
}
   </style>
  </head>
  <body>
  <center>
     <img src="i.png" width="80" height="80">
     <h2>Hp-Metainsan</h2>
	 <p>Cette outil vous aide a automatiser la tache , en scannant une url pour detecter
	 si le site web est vulnerable ou pas au LFI ou RFI.</p>
	 <?php if(isset($_oo)){}else{?>
		 <form method="get">
		   <input type="text" name="url" required>
		   <button type="submit">Scanne</button>
		 </form>
	 <?php } ?>
  </center>
  </body>
</html>