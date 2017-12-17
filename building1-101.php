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
<font class="newtitle">Building 101</font>
</td>

<td class="sixsix" valign="top"><font class="newtitle">Building 101- tutorial.</font></td>

<td rowspan="99" width="100" class="fourfour" height="100%" valign="top">
<script src="SCRIPTS/rightsidemenu.js"></script>
</td>
</tr>

<tr>
<td class="fourfour" >
<font class="words1">
<font class="newtitle">&nbsp;&nbsp;&nbsp;Cities</font> are one of the most overlooked but most needed addition to the Starshatter universe. I mean really where DO all the people live? Well in this tutorial we will build a few different building, from a <a href="#house" class="shipdesigners">basic house</a> to a <a href="building102.html" class="shipdesigners">strip mall</a> to a <a href="building103.html" class="shipdesigners">business building</a>.<br></font></td>
</tr>

<tr>
<td class="fourfour" >
<a name="house"></a>
<font class="words1">&nbsp;&nbsp;&nbsp;Modeling the house:<br><br>
1) Make a square that is centered with measurements as follows: Position: X0/Y0/Z0, Size: X32/Y16/Z16.<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building1/building1-1.jpg" target="_new"><img src="tutorials/imgs/building101/building1-1_mini.jpg" ismap controls disabled border="0" width="247" height="135" alt="Building101-1"></a></td></tr></table><br><br>
2) Make another square as follows: Position: X16/Y32/Z0, Size: X16/Y16/Z16.<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building1/building1-2.jpg" target="_new"><img src="tutorials/imgs/building101/building1-2_mini.jpg" border="0" width="241" height="119" alt="building101-2"></a></td></tr></table><br><br>
&nbsp;&nbsp;&nbsp;So far you should have this:<br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building1/building1-3.jpg" target="_new"><img src="tutorials/imgs/building101/building1-3_mini.jpg" border="0" width="321" height="240" alt="building101-3"></a></td></tr></table><br><br>
3) Make yet another square: Position: X0/Y0/Z64, Size: X16/Y16/Z16. On this square highlight the top 4 vertices ( on the Z/Y panel) and align them alone the Y axis. Thirdly, center these now 2 vertices evenly so that is it about a 30-35� angele (this will be the 'roof' section).<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building1/building1-4.jpg" target="_new"><img src="tutorials/imgs/building101/building1-4_mini.jpg" border="0" width="237" height="119" alt="building101-4"></a></td>
<td><a href="tutorials/imgs/building1/building1-5.jpg" target="_new"><img src="tutorials/imgs/building101/building1-5_mini.jpg" border="0" width="108" height="178" alt="Building101-5"></a></td></tr>
<tr><td colspan="2" align="center"><a href="tutorials/imgs/building1/building1-6.jpg" target="_new"><img src="tutorials/imgs/building101/building1-6_mini.jpg" border="0" width="321" height="240" alt="building101-6"></a></td></tr></table><br><br>
4) Select the entire 'roof' area and stretch / mold it till it hangs over the rectanglular are slightly. Then move the roof down on top of the 'house' section.<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building1/building1-7.jpg" target="_new"><img src="tutorials/imgs/building101/building1-7_mini.jpg" border="0" width="321" height="239" alt="building101-7"></a></td></tr></table><br><br>
5) With the roof still selected clone it (Edit -&gt; Clone).<br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building1/building1-8.jpg" target="_new"><img src="tutorials/imgs/building101/building1-8_mini.jpg" border="0" width="209" height="351" alt="building101-8"></a></td></tr></table><br><br>
6) Rotate and position the new roof section over the 2nd square we made earlier.<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building1/building1-9.jpg" target="_new"><img src="tutorials/imgs/building101/building1-9_mini.jpg" border="0" width="321" height="239" alt="building101-9"></a></td></tr></table><br><br>
7) Create a cylinder as follows: Position: X-16/Y-16/Z0, Size: X16/Y8/Z8, Sectors: 8, Rings: 1. You should have something like this now:<br><br>
<table align="center" border="2" class="sotw"><tr><td align="center"><a href="tutorials/imgs/building1/building1-10.jpg" target="_new"><img src="tutorials/imgs/building101/building1-10_mini.jpg" border="0" width="241" height="146" alt="building101-10"></a></td></tr>
<tr><td><a href="tutorials/imgs/building1/building1-11.jpg" target="_new"><img src="tutorials/imgs/building101/building1-11_mini.jpg" border="0" width="320" height="240" alt="building101-11"></a></td></tr></table><br><br>
&nbsp;&nbsp;&nbsp;If so then we can new save it. File - > Save as -> '9fond your Starshatter directory) modsuildings&house1.MAG<br><br>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/building1/building1-12.jpg" target="_new"><img src="tutorials/imgs/building101/building1-12_mini.jpg" border="0" width="220" height="142" alt="building101-12"></a></td></tr></table><br><br>
&nbsp;&nbsp;&nbsp;Now lets move onto texturing our lil' house...<br><br>
<p align="center"><a href="building1-102.html" target="_self" class="bigyellow"> =&gt; Building 102- tutorial =&gt;</a></p><br><br><br>


<p align="right" valign="bottom"><font class="sigfont">Created: 3/4/2K2 -By: Pheagey</font></p>


</font>
</td>
</tr>
<tr><td class="sixsix" align="center" valign="bottom" colspan="5">
<font>
<?PHP include('../../SCRIPTS/executetime2.php');?>
</font>
</td></tr>
</table>
<script src="../../scripts/contact-copyright-forum.js"></script>
</div>
</body>
</html>
