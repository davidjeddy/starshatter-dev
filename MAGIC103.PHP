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
<LINK REL="SHORTCUT ICON" HREF="ssd.ico" />
<SCRIPT LANGUAGE="javascript" src="scripts/lines.js"></SCRIPT>
</HEAD>
<body onResize="resizeBars();" onLoad="resizeBars(); setEvents(); checkOpera();"  bottommargin="0" marginheight="0" marginwidth="0" rightmargin="0" scroll="yes" topmargin="0" leftmargin="0">
<!--used to show the menu-->
<SCRIPT language=JavaScript src="scripts/menu_array.js"type="text/javascript"></SCRIPT>

<script LANGUAGE="javascript" src="scripts/titlelines.js"></script>
<script LANGUAGE="javascript" src="scripts/menu.js"></script>
<div class="bodytable">




<table width="775" align="center" cellpadding="7" cellspacing="7" border="0" bordercolor="#0000ff" >

<tr>
<td class="fourfour" rowspan="500" width="15%" align="center" valign="top">
<font class="newtitle">Magic 103</font>
</td>

<td class="sixsix" valign="top"><font class="newtitle">Magic 102- tutorial.</font></td>

<td rowspan="99" width="100" class="fourfour" height="100%" valign="top">
<script src="scripts/rightsidemenu.js"></script>
</td>
</tr>

<tr>
<td class="fourfour" ><font class="words1">
<font class="newtitle">&nbsp;&nbsp;&nbsp;Alright,</font> We got a hull, now onto the wings.  We'll be doing a little more 'poly pushing' in this one but its not much harder.<br></font></td>
</tr>

<tr>
<td class="fourfour" align="left" valign="top">
<font class="words1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open up Magic if its not already. Load up our fighter that should be saved in -=YourStarshatterDir=-/Mods/ships/f236. So you shouls be looking at something to the affect of this:<BR>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic102/m102-21.jpg" target="_new" BORDER="0"><IMG SRC="tutorials/imgs/magic102/tmb-m102-21.jpg" BORDER="0" align="center"></A></TD></TR></TABLE><BR><BR>
&nbsp;&nbsp;&nbsp;Now we are going to make some wingsfor our fighter. The basic shape will start out as a cube. We're agnna offset it to the right (+X) 128 units so that we don't get mixed up with the hull.<BR>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic103/m103-1.jpg" target="_new" BORDER="0"><IMG SRC="tutorials/imgs/magic103/tmb-m103-1.jpg" BORDER="0" align="center"></A></td><td><a href="tutorials/imgs/magic103/m103-2.jpg" target="_new" BORDER="0"><IMG SRC="tutorials/imgs/magic103/tmb-m103-2.jpg" BORDER="0" align="center"></A></TD></TR></TABLE><BR><BR>
&nbsp;&nbsp;&nbsp;You should now be looking at this:<BR>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic103/m103-3.jpg" target="_new" BORDER="0"><IMG SRC="tutorials/imgs/magic103/tmb-m103-3.jpg" BORDER="0" align="center"></A></TD></TR></TABLE><BR><BR>
&nbsp;&nbsp;&nbsp;Now switch over to the ZY window. Hit the '<font class="screeniewords">Scale Z</font>' button and shrink the height of the wing till we get this:<BR>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic103/m103-4.jpg" target="_new" BORDER="0"><IMG SRC="tutorials/imgs/magic103/tmb-m103-4.jpg" BORDER="0" align="center"></A></TD></TR></TABLE><BR><BR>
&nbsp;&nbsp;&nbsp;Now with everything still selected move the cube forward using the YX window.<BR>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic103/m103-5.jpg" target="_new" BORDER="0"><IMG SRC="tutorials/imgs/magic103/tmb-m103-5.jpg" BORDER="0" align="center"></A></TD></TR></TABLE><BR><BR>
&nbsp;&nbsp;&nbsp;Ok, now deselect everything. And reslect only the trailing edge of the wing as so:<BR>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic103/m103-6.jpg" target="_new" BORDER="0"><IMG SRC="tutorials/imgs/magic103/tmb-m103-6.jpg" BORDER="0" align="center"></A></TD></TR></TABLE><BR><BR>
&nbsp;&nbsp;&nbsp;And drag it aft almost to the very end.<BR>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic103/m103-7.jpg" target="_new" BORDER="0"><IMG SRC="tutorials/imgs/magic103/tmb-m103-7.jpg" BORDER="0" align="center"></A></TD></TR></TABLE><BR><BR>
Now delselect everything and reselect only the bottom right vertex (the little white square only).<BR>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic103/m103-8.jpg" target="_new" BORDER="0"><IMG SRC="tutorials/imgs/magic103/tmb-m103-8.jpg" BORDER="0" align="center"></A></TD></TR></TABLE><BR><BR>
&nbsp;&nbsp;&nbsp;Now drag that vertex out using the <font class="screeniewords">Drag Verts</font> button. Next using the same techqunec and drag the upper right vertex in and aft until you gfet something about like this:<BR>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic103/m103-9.jpg" target="_new" BORDER="0"><IMG SRC="tutorials/imgs/magic103/tmb-m103-9.jpg" BORDER="0" align="center"></A></TD></TR></TABLE><BR><BR>
&nbsp;&nbsp;&nbsp;Next we're ganna flatten the wing's leading edge a little. Since the outter right vertex is still select click on the ZX window and select the outter and aft most vertex.<BR>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic103/m103-10.jpg" target="_new" BORDER="0"><IMG SRC="tutorials/imgs/magic103/tmb-m103-10.jpg" BORDER="0" align="center"></A></TD></TR></TABLE><BR><BR>
&nbsp;&nbsp;&nbsp;Goto '<font class="screeniewords">Edit -&gt; then Flatten Z</font>'. you'll end up with this:<BR>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic103/m103-11.jpg" target="_new" BORDER="0"><IMG SRC="tutorials/imgs/magic103/tmb-m103-11.jpg" BORDER="0" align="center"></A></TD></TR></TABLE><BR><BR>
&nbsp;&nbsp;&nbsp;Now use the '<font class="screeniewords">Drag Verts</font>' button and bring the wing tip down so its level with the X axis.<BR>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic103/m103-12.jpg" target="_new" BORDER="0"><IMG SRC="tutorials/imgs/magic103/tmb-m103-12.jpg" BORDER="0" align="center"></A></TD></TR></TABLE><BR><BR>
&nbsp;&nbsp;&nbsp;Now we're ganna copy the entire wing and make a second one on the other side. Select the Vertex's that are part of only the wing it's self.<BR>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic103/m103-13.jpg" target="_new" BORDER="0"><IMG SRC="tutorials/imgs/magic103/tmb-m103-13.jpg" BORDER="0" align="center"></A></TD></TR></TABLE><BR><BR>
&nbsp;&nbsp;&nbsp;Once you have that do a '<font class="screeniewords">Edit -&gt; Clone</font>' then '<font class="screeneiwords">Edit -&gt;Mirror Selection</font>'.<BR>
&nbsp;&nbsp;&nbsp;Now I notice that the leading inner corners of the wings are not enterly withing the hull. Deselet everything than select only the inner most vertex's at the top.<BR>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic103/m103-14.jpg" target="_new" BORDER="0"><IMG SRC="tutorials/imgs/magic103/tmb-m103-14.jpg" BORDER="0" align="center"></A></TD></TR></TABLE><BR><BR>
&nbsp;&nbsp;&nbsp;Use the <font class="screeniewords">Scale X</font> button and move the vertex's in till you get this:<BR>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic103/m103-15.jpg" target="_new" BORDER="0"><IMG SRC="tutorials/imgs/magic103/tmb-m103-15.jpg" BORDER="0" align="center"></A></TD></TR></TABLE><BR><BR>
&nbsp;&nbsp;&nbsp;Well now we have a fighter hull with wings:<BR>
<table align="center" border="2" class="sotw"><tr><td><a href="tutorials/imgs/magic103/m103-16.jpg" target="_new" BORDER="0"><IMG SRC="tutorials/imgs/magic103/tmb-m103-16.jpg" BORDER="0" align="center"></A></TD></TR></TABLE><BR><BR>
&nbsp;&nbsp;&nbsp;In the next tutorial we will add vertical wings and a cockpit. Ifyou'd like a copy of this so far you can download it <a href="tutorials/files/magic103/f236.mag" target="_new" class="links">HERE</a>.
<p align="right" valign="bottom"><font class="sigfont">Created: 11/4/2K2 -By: Pheagey</font></p>
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

