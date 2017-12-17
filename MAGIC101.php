<html>
<HEAD>
<?PHP
include('SCRIPTS/executetime.php');
?>
<title>Starshatter Dev. - the place to find stuff you won't find anywhere else.</title>
<meta http-equiv="Content-Type" content="text/HTML; charset=iso-8859-1">
<meta name="author" content="Pheagey Grean">
<meta name="keywords" content="Starshatter, MODs, MOD, def files, meshs, 3D meshs, SS">
<meta name="description" content="A leading sourch for Stashatter MOD info.">
<meta name="reply-to" content="p_grean@hotmail.com">
<meta http-equiv="expires" content="30">

<STYLE>
IMG {behavior:url("SCRIPTS/pngbehavior.htc");}
</STYLE>
<LINK title="main" href="css/main.css" type="text/css" rel="stylesheet">
<LINK title="windef" href="css/windef.css" type="text/css" rel="alternate stylesheet">
<LINK title="aqublu" href="css/aqublu.css" type="text/css" rel="alternate stylesheet">
<!--used to change css's-->
<SCRIPT src="SCRIPTS/styleswitcher.js" type="text/javascript"></SCRIPT>
<SCRIPT language="JavaScript">
icon_image = new Image();
icon_image.src="ssd.ico";
</SCRIPT>
<LINK REL="SHORTCUT ICON" HREF="ssd.ico" >
<SCRIPT LANGUAGE=javascript src="SCRIPTS/lines.js"></SCRIPT>
</HEAD>
<body onResize="resizeBars();" onLoad="resizeBars(); setEvents(); checkOpera();"  bottommargin="0" marginheight="0" marginwidth="0" rightmargin="0" scroll="yes" topmargin="0" leftmargin="0">
<!--used to show the menu-->
<SCRIPT language=JavaScript src="SCRIPTS/menu_array.js"type="text/javascript"></SCRIPT>

<script src="SCRIPTS/titlelines.js"></script>
<script src="SCRIPTS/menu.js"></script>
<div class="bodytable">




<table width="775" align="center" cellpadding="7" cellspacing="7" border="0" bordercolor="#0000ff" >

<tr>
<td class="fourfour" rowspan="500" width="15%" align="center" valign="top">
<font class="newtitle">Magic 101</font>
</td>

<td class="sixsix" valign="top"><font class="newtitle">Magic 101, tutorial.</font></td>

<td rowspan="99" width="100" class="fourfour" height="100%" valign="top">
<script src="SCRIPTS/rightsidemenu.js"></script>
</td>
</tr>

<tr>
<td class="fourfour"><font class="words1">
<font class="newtitle">&nbsp;&nbsp;&nbsp;Welcome</font> to the Magic 101 tutorial. In this tutorial we will get a handle on the ever popular (ok not so popular) 3d program used to create objects for Starshatter. We shall embark upon this by a hands on method. I'll show you and explain as much as I know and show you how to do it one step at a time. Also I am assuming you have a basic working knowledge of windows, in not then you should be <a href="Http://www.Microsoft.com" class="shipdesigners" target="_new">HERE</a>.<br>
&nbsp;&nbsp;&nbsp;Ok, before we begin down load Magic over off the <a href="files.php" target="_self" class="shipdesigners">FILES</a>page. Got it? Ok let go!<br></font></td>
</tr>

<tr>
<td class="fourfour" ><font class="words1">
&nbsp;&nbsp;&nbsp;First up, a break down of the interface. Don't worry if you don't understand everything or if there seems to be alot here, right now just try to familiarize your self with the interface a little, by the end of this tutorial you'lll know Magic like a master (or something like that).<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic101/magic101-1.jpg" target="_new"><img src="tutorials/imgs/magic101/magic101-1_mini.jpg" border="0" width="422" height="317" alt="Magic 101-1a"></a></td></tr></table><br><br>
And a menu breakdown:<br>
<p align="left" valign="top">
<font class="words1">
<font class="newtitle">FILE</font><br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">NEW</font>&nbsp;&nbsp;&nbsp;- create a new file. Magic uses a proprietary .MAG file format.<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">OPEN</font>&nbsp;&nbsp;&nbsp;- open a .MAG file<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">SAVE</font>&nbsp;&nbsp;&nbsp;- Saves the project.<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">SAVE AS</font>&nbsp;&nbsp;&nbsp;- Save as a new name or in a new place.<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">IMPORT</font>&nbsp;&nbsp;&nbsp;- Used to add two mesh's into on file.<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">EXPORT</font>&nbsp;&nbsp;&nbsp;-<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">RECENT FILES</font>&nbsp;&nbsp;&nbsp;Will list recently opened files in Magic<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">EXIT</font>&nbsp;&nbsp;&nbsp;- leave Magic.( A bad thing to do if you have not saved recently.)<br><br><br>
<font class="newtitle">EDIT</font><br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">UNDO</font>&nbsp;&nbsp;&nbsp; Undo changes<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">REDO</font>&nbsp;&nbsp;&nbsp;Redo whatever it is you just undid<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">CLONE</font>&nbsp;&nbsp;&nbsp;Clone makes an exact copy of what you have selected<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">PASTE</font>&nbsp;&nbsp;&nbsp;paste info from the clipboard<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">DELETE</font>&nbsp;&nbsp;&nbsp;well dua..<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">SELECT ALL</font>&nbsp;&nbsp;&nbsp;Select everything available<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">SELECT NONE</font>&nbsp;&nbsp;&nbsp;unselect everything<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">FLIP NORMALS</font>&nbsp;&nbsp;&nbsp;Flip the face of the polygon inside out, useful when making concave objects such as hanger bays<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">REMOVE PLOY</font>&nbsp;&nbsp;&nbsp;delete the selected polygons<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">MIRROR SELECTION</font>&nbsp;&nbsp;&nbsp;Copy the selecting to the opposite X, Y or Z axis.<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">SEAL SELECTION</font>&nbsp;&nbsp;&nbsp;-this don't work yet<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">REDUCE VERTS</font>&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">FLATTEN X</font>&nbsp;&nbsp;&nbsp;Align vertices on the X axis<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">FLATTEN Y</font>&nbsp;&nbsp;&nbsp;Align vertices on the Y axis<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">FLATTEN Z</font>&nbsp;&nbsp;&nbsp;Align vertices on the Z axis<br><br><br>
<font class="newtitle">VIEW</font><br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">ZOOM-></font><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font class="screeniewords">ZOOM IN</font>&nbsp;&nbsp;&nbsp;(Zoom in on the selected windows (either the grids windows or the 3D window)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font class="screeniewords">ZOOM OUT</font>&nbsp;&nbsp;&nbsp;Zoom out on he selected window (ditto)<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">SHOW VERTICES NORMALS</font>&nbsp;&nbsp;&nbsp;Show what direction the vertices are facing (good when texturing)<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">FINAL RENDER</font>&nbsp;&nbsp;&nbsp;this don't work<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">SHOW TOOLBAR</font>&nbsp;&nbsp;&nbsp;Show / hide the toolbar<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">SHOW STATUS BAR</font>&nbsp;&nbsp;&nbsp;Show / hide the status bar<br><br><br>
<font class="newtitle">Create</font><br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">PLOY...</font>&nbsp;&nbsp;&nbsp;You will be asked for X,Y,Z position and number if sides (3 or 4)<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">CUBE...</font>&nbsp;&nbsp;&nbsp;You will be asked for X,Y,Z position and size of each side (in X,Y,Z lengths)<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">CONE...</font>&nbsp;&nbsp;&nbsp;You will be asked for X,Y,Z position, size of each side (in X,Y,Z lengths), and number of faces (default is 4)<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">CYLINDER...</font>&nbsp;&nbsp;&nbsp;You will be asked for X,Y,Z position, size of each side (in X,Y,Z lengths), sectors, and the number of rings.<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">SPHERE...</font>&nbsp;&nbsp;&nbsp;You will be asked for X,Y,Z position, size of each side (in X,Y,Z lengths), sectors, and the number of rings.<br><br><br>
<font class="newtitle">MODIFY</font>&nbsp;&nbsp;&nbsp;Modify is one of the most important menu area's in Magic, as so well will learn this when we get to it.<br><br><br>
<font class="newtitle">PROPERTIES</font><br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">MODEL</font>&nbsp;&nbsp;&nbsp;Give info about the model; Surface, Verts, Polys, and Sketch color<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">CAMERA</font>&nbsp;&nbsp;&nbsp;We'll get into this a little later on.<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">GRID</font>&nbsp;&nbsp;&nbsp;General grid properties, pretty self explanatory.<br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">SNAP GRID</font> Snap&nbsp;&nbsp;&nbsp;Snap verts to grid. On / Off.<br><br><br>
<font class="newtitle">HELP</font><br>
&nbsp;&nbsp;&nbsp;<font class="screeniewords">ABOUT</font>&nbsp;&nbsp;&nbsp;Magic Version and creator.<br><br><br>

&nbsp;&nbsp;&nbsp;Ok, so thats the file menu area, next up the toobar:<br><br>



<font class="newtitle">TOOLBAR</font>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic101/tootlbar1-1.jpg" target="_new"><img src="tutorials/imgs/magic101/tootlbar1-1_mini.jpg" border="0" width="251" height="109" alt="Toolbar 1-1"></a></td></tr></table><br><br>

<font class="screeniewords">1)</font> New MAG file.<br>
<font class="screeniewords">2)</font> Open MAG file.<br>
<font class="screeniewords">3)</font> Save MAG file.<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic101/tootlbar1-2.jpg" target="_new"><img src="tutorials/imgs/magic101/tootlbar1-2_mini.jpg" border="0" width="219" height="94" alt="Toolbar 1-2"></a></td></tr></table><br><br>
<font class="screeniewords">4)</font> Cut<br>
<font class="screeniewords">5)</font> Copy<br>
<font class="screeniewords">6)</font> Paste<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic101/tootlbar1-3.jpg" target="_new"><img src="tutorials/imgs/magic101/tootlbar1-3_mini.jpg" border="0" width="174" height="100" alt="Toolbar 1-3"></a></td></tr></table><br><br>
<font class="screeniewords">7)</font> Undo<br>
<font class="screeniewords">8)</font> Redo<br>
<font class="screeniewords">9)</font> Zoom In<br>
<font class="screeniewords">10)</font> Zoom Out<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic101/tootlbar1-4.jpg" target="_new"><img src="tutorials/imgs/magic101/tootlbar1-4_mini.jpg" border="0" width="181" height="92" alt="Toolbar 1-4"></a></td></tr></table><br><br>
<font class="screeniewords">11)</font> Create-a-cube button<br>
<font class="screeniewords">12)</font> Create-a-Cone button<br>
<font class="screeniewords">13)</font> Create-a-cylinder button<br>
<font class="screeniewords">14)</font> Create-a-Sphere button<br><br>
&nbsp;&nbsp;&nbsp;the following are avaliable only when verts / polys are selected.<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic101/tootlbar1-5.jpg" target="_new"><img src="tutorials/imgs/magic101/tootlbar1-5_mini.jpg" border="0" width="181" height="92" alt="Toolbar 1-5"></a></td></tr></table><br><br>
<font class="screeniewords">15)</font> Move Selection<br>
<font class="screeniewords">16)</font> Scale Selection ( X, Y, & Z)<br>
<font class="screeniewords">17)</font> Rotate Selection<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic101/tootlbar1-6.jpg" target="_new"><img src="tutorials/imgs/magic101/tootlbar1-6_mini.jpg" border="0" width="163" height="86" alt="Toolbar 1-6"></a></td></tr></table><br><br>
<font class="screeniewords">18)</font> Scale X<br>
<font class="screeniewords">19)</font> Scale Y<br>
<font class="screeniewords">20)</font> Scale Z<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic101/tootlbar1-7.jpg" target="_new"><img src="tutorials/imgs/magic101/tootlbar1-7_mini.jpg" border="0" width="117" height="59" alt="Toolbar 1-7"></a></td></tr></table><br><br>
<font class="screeniewords">21)</font> Flip Normals (face)<br>
<font class="screeniewords">22)</font> Delete<br><br><br>

<font class="newtitle">Status Bar:</font><br>
&nbsp;&nbsp;&nbsp;The bottom left of the status bar will give you general information, usuall Ready or Working.
&nbsp;&nbsp;&nbsp;the center area will read the X & Y, Y & Z, or X & Z co ordanate. Also, if tyou have a selection it will show how many verts and poly's are selected.<br><br>

&nbsp;&nbsp;&nbsp;Ok, so enof of that, time ot get down to the nitty gritty of makin something. In Magic 102 we shall begin makeing our object. Grab some chips & salsa, a soda or 3 and get then gray metter between your ears ready for a shock.<br></p>
<p align="center"><a href="magic102.php" target="_self" class="bigyellow"> =&gt; Magic 102- tutorial =&gt;</a></p><br><br><br>


<p align="right" valign="bottom"><font class="sigfont">Created: 3/4/2K2 -By: Pheagey</p>

</font></font></font>
</td>
</tr>
<tr><td class="sixsix" align="center" valign="bottom">
<font>
<?PHP include('SCRIPTS/executetime2.php');?>
</font>
</td></tr>
</table>
<script src="SCRIPTS/contact-copyright.js"></script>
</div>
</body>
</html>

