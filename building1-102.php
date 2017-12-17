<html>
<HEAD>
<?PHP
include('scripts/executetime.php');
?>
<title>Starshatter Dev. - the place to find stuff you won't find anywhere else.</title>
<meta http-equiv="Content-Type" content="text/HTML; charset=iso-8859-1">
<meta name="author" content="Pheagey Grean">
<meta name="keywords" content="Starshatter, MODs, MOD, def files, meshs, 3D meshs, SS">
<meta name="description" content="A leading sourch for Stashatter MOD info.">
<meta name="reply-to" content="p_grean@hotmail.com">
<meta http-equiv="expires" content="30">

<STYLE>
IMG {behavior:url("scripts/pngbehavior.htc");}
</STYLE>
<LINK title="main" href="css/main.css" type="text/css" rel="stylesheet">
<LINK title="windef" href="css/windef.css" type="text/css" rel="alternate stylesheet">
<LINK title="aqublu" href="css/aqublu.css" type="text/css" rel="alternate stylesheet">
<!--used to change css's-->
<SCRIPT src="scripts/styleswitcher.js" type="text/javascript"></SCRIPT>
<SCRIPT language="JavaScript">
icon_image = new Image();
icon_image.src="ssd.ico";
</SCRIPT>
<LINK REL="SHORTCUT ICON" HREF="ssd.ico" >
<SCRIPT LANGUAGE=javascript src="scripts/lines.js"></SCRIPT>
</HEAD>
<body onResize="resizeBars();" onLoad="resizeBars(); setEvents(); checkOpera();"  bottommargin="0" marginheight="0" marginwidth="0" rightmargin="0" scroll="yes" topmargin="0" leftmargin="0">
<!--used to show the menu-->
<SCRIPT language=JavaScript src="scripts/menu_array.js"type="text/javascript"></SCRIPT>

<script src="scripts/titlelines.js"></script>
<script src="scripts/menu.js"></script>
<div class="bodytable">



<table width="775" align="center" cellpadding="7" cellspacing="7" border="0" bordercolor="#0000ff" >

<tr>
<td class="fourfour" rowspan="500" width="15%" align="center" valign="top">
<font class="newtitle">Building 102</font>
</td>

<td class="sixsix" valign="top"><font class="newtitle">Building 102- tutorial.</font></td>

<td rowspan="99" width="100" class="fourfour" height="100%" valign="top">
<script src="scripts/rightsidemenu.js"></script>
</td>
</tr>

<tr>
<td class="fourfour">
<font class="words1">
<font class="newtitle">&nbsp;&nbsp;&nbsp;Texturing</font> our building will not be to hard since it's a relatively simple model, but it'll give you an idea of what has to be done. First off in order to see how where doing texture wise we need to change the camera to view the textures: Properties -&gt; Camera... In the drop down box switch it to Textured and hit OK. Got it? Perfect, lets begin.<br>
&nbsp;&nbsp;&nbsp;Ok, first you'll need these textures: <a href="tutorials/files/building102/house.zip" class="shipdesigners">House textures</a>. Unzip them into the same folder as the building (i.e.: starshatter&modsuildings&house1 .  NOTE: This file also contains the 'house.MAG' file. ).<br><br>
1) Ok, now using the ZX window select the roof faces that are facing us (hold Shift then click on the polygons).<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building102/building1-1.jpg" target="_new"><img src="tutorials/imgs/building102/building1-1_mini.jpg" border="0" width="172" height="111" alt="Building Tutorial 102-1"></a></td></tr></table><br><br>
2) Then go to Modify -&gt; Texture...<br>
<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building102/building1-2.jpg" target="_new"><img src="tutorials/imgs/building102/building1-2_mini.jpg" border="0" width="81" height="130" alt="Building Tutorial 102-2"></a></td></tr></table><br><br>
3) Once the window opens go to 'Add Textures'. A new window will open. find the 'roof2.pcx' file  click on it then hit Ok. Since the texture is only 32*32 we need to have Magic repeat the textures for us. Set the U to 3 and V to 1. This tells Magic to repeat the texture 3 Times verticaly alone the face of the polygon. Your screen should not look like this:<br>
<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building102/building1-3.jpg" target="_new"><img src="tutorials/imgs/building102/building1-3_mini.jpg" border="0" width="320" height="240" alt="Building Tutorial 102-3"></a></td></tr></table><br><br>
4) If so good, if not you missed something.<br>
5) Now in the YZ panel double click on some open space (an area not taken up by the house). There nothing should be selected. Next select the roof polygons facing you (as you did in the XZ window earlier). Good, now go to Modify -&gt; Textures. The pull down menu on the upper left should still have the roof2.pcx texture loaded, click it. Now set the U to 3 and V to 1 and hit apply. If all went well you should have this:<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building102/building1-4.jpg" target="_new"><<img src="tutorials/imgs/building102/building1-4_mini.jpg" border="0" width="320" height="240" alt="Building Tutorial 102-4"></a></td></tr></table><br><br>
6) Everything ok so far? Goood....<br>
7) Alright now the walls, back to the XZ window. Deselect everything then select all the wall areas; and only the wall areas (like I have here):<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building102/building1-5.jpg" target="_new"><img src="tutorials/imgs/building102/building1-5_mini.jpg" border="0" width="319" height="240" alt="Building Tutorial 102-5"></a></td></tr></table><br><br>
8) Now back to Modify -&gt; Texture... -&gt; Add Textures ->add the 'siding2.pcx' texture. Hit 'ok' and voile! Most of the walls are textured!<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building102/building1-6.jpg" target="_new"><img src="tutorials/imgs/building102/building1-6_mini.jpg" border="0" width="320" height="240" alt="Building Tutorial 102-6"></a></td></tr></table><br><br>
9) Next go to the YZ windows deselect everything (no yellow lines). Now select the walls facing us and texture them like we did the other walls. Once you got that texture them the same way as we did on the XZ window. Should end up with this:<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building102/building1-7.jpg" target="_new"><img src="tutorials/imgs/building102/building1-7_mini.jpg" border="0" width="320" height="240" alt="Building Tutorial 102-7"></a></td></tr></table><br><br>
10) Now the front window. Using only the XZ select only the window area:<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building102/building1-8.jpg" target="_new"><img src="tutorials/imgs/building102/building1-8_mini.jpg" border="0" width="162" height="109" alt="Building Tutorial 102-8"></a></td></tr></table><br><br>
11) Modify -&gt;Textures... -&gt; Add Texture -&gt; 'windows1.pcx' (NOT window1.pcx). hit Ok. You should get this:<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building102/building1-9.jpg" target="_new"><img src="tutorials/imgs/building102/building1-9_mini.jpg" border="0" width="163" height="130" alt="Building Tutorial 102-9"></a></td></tr></table><br><br>
If you have what's above then good we're right on track. If not d**n man start over! ;)<br>
12) Next we'll add a door and a window. Select one of the end of the house. On the XY window hold Ctrl + Left Mouse Button circle the two longest lines. you should now have only a short line selected:<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building102/building1-10.jpg" target="_new"><img src="tutorials/imgs/building102/building1-10_mini.jpg" border="0" width="182" height="128" alt="Building Tutorial 102-10"></a></td></tr></table><br><br>
Modify -&gt; Texture... -&gt;Add Textures -&gt; 'door1.pcx' -&gt; Ok (make sure align is on the Y axis.).<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building102/building1-11.jpg" target="_new"><img src="tutorials/imgs/building102/building1-11_mini.jpg" border="0" width="132" height="107" alt="Building Tutorial 102-11"></a></td></tr></table><br><br>
13) Now do the same thing for the one of the other two short wall but the align should be on the X axis and you will need to Add texture -&gt; window1.pcs instead of door1.pcx .<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building102/building1-12.jpg" target="_new"><img src="tutorials/imgs/building102/building1-12_mini.jpg" border="0" width="317" height="131" alt="Building Tutorial 102-12"></a></td></tr></table><br><br>
OPTIONAL: The roof over hangs the building a little but. Now normally since this will not be on screen you don't need to texture it but on some machines IF it does show it will slow the game down; so we're ganna texture is real quick. I you don't care about it skip to the end.<br>
O 1) Select the bottom the roof using the YZ panel;<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building102/building1-13.jpg" target="_new"><img src="tutorials/imgs/building102/building1-13_mini.jpg" border="0" width="179" height="109" alt="Building Tutorial 102-13"></a></td></tr></table><br><br>
o 2) Modify -&gt;Texture... -&gt; siding1.pcx -&gt; align on the Z axis -&gt; Ok.<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building102/building1-14.jpg" target="_new"><img src="tutorials/imgs/building102/building1-14_mini.jpg" border="0" width="155" height="110" alt="Building Tutorial 102-14"></a></td></tr></table><br><br>
&nbsp;&nbsp;&nbsp;There we go a simple little house. Yea sure everyone probably lives in tall buildings in Starshatter how who knows. Maybe it would make good target practice for a few fighter. :)<br><br>
&nbsp;&nbsp;&nbsp;This now takes up to our next step. building a *.DEF file for the house so we can get it planet side.

<p align="center"><a href="building1-103.html" target="_self" class="bigyellow"> =&gt; Building 103- tutorial =&gt;</a></p><br><br><br>


<p align="right" valign="bottom"><font class="sigfont">Created: 3/4/2K2 -By: Pheagey</font></p>
</font>
</td>
</tr>
<tr><td class="sixsix" align="center" valign="bottom">
<font>
<?PHP include('scripts/executetime2.php');?>
</font>
</td></tr>
</table>
<script src="scripts/contact-copyright.js"></script>
</div>
</body>
</html>
