<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">


<head>


<style>
.sinborde {
  border: 0;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="icon" type="image/png" href="{{ asset('argon') }}/img/brand/favicon.png"/>
<style type="text/css" media="print">
.nover {display:none}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!-- Bootstrap Core CSS -->
<link href="{{asset('ReporteMR/jquery/bootstrap.min.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<script type="text/javascript" src="{{asset('ReporteMR/jquery/jquery-3.2.1.js')}}"></script> 

<link rel=File-List href="{{asset('ReporteTRA/filelist.xml')}}">
<link rel=Edit-Time-Data
href="{{asset('ReporteTRA/editdata.mso')}}">
<link rel=OLE-Object-Data
href="{{asset('ReporteTRA/oledata.mso')}}">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<title>Reporte de Muestreo</title>
<link rel=themeData
href="{{asset('ReporteTRA/themedata.thmx')}}">
<link rel=colorSchemeMapping
href="{{asset('ReporteTRA/colorschememapping.xml')}}">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:1;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:"Wingdings 2";
	panose-1:5 2 1 2 1 5 7 7 7 7;
	mso-font-charset:2;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
h1
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:1;
	font-size:14.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial",sans-serif;
	mso-font-kerning:0pt;
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
h2
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin-top:2.0pt;
	margin-right:0cm;
	margin-bottom:2.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:2;
	font-size:6.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial",sans-serif;
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
h3
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin-top:2.0pt;
	margin-right:0cm;
	margin-bottom:2.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:3;
	font-size:9.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial",sans-serif;
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
h4
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin-top:2.0pt;
	margin-right:0cm;
	margin-bottom:2.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:4;
	font-size:8.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial",sans-serif;
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
h5
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:5;
	font-size:8.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial",sans-serif;
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-noshow:yes;
	mso-style-unhide:no;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 220.95pt right 441.9pt;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-noshow:yes;
	mso-style-unhide:no;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 220.95pt right 441.9pt;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url("027%20Reporte%20de%20Transporte_archivos/header.htm") fs;
	mso-footnote-continuation-separator:url("027%20Reporte%20de%20Transporte_archivos/header.htm") fcs;
	mso-endnote-separator:url("027%20Reporte%20de%20Transporte_archivos/header.htm") es;
	mso-endnote-continuation-separator:url("027%20Reporte%20de%20Transporte_archivos/header.htm") ecs;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:14.2pt 1.0cm 1.0cm 2.0cm;
	mso-header-margin:35.45pt;
	mso-footer-margin:35.45pt;
	mso-header:url("027%20Reporte%20de%20Transporte_archivos/header.htm") h1;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
div.rofl
{background-color: 	#F4A020;}
-->
</style>
</head>

<body lang=ES-MX style='tab-interval:35.4pt'>

	<div class=WordSection1>
		<div align='center'>	

			<form class="form-horizontal" action="{{ 'guardacu' }}" method='POST'>
			{{csrf_field()}}
			<p class=MsoNormal><b><span lang=ES style='font-size:4.0pt;mso-bidi-font-size:
			12.0pt;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></b></p>

			<table class=MsoNormalTable border=2 cellspacing=0 cellpadding=0
			style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext .5pt;
			mso-border-bottom-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
			mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
			<tr style='page-break-inside:avoid'>
			<!--Encabezado de Archivo-->
				<div >
				<![if !vml]><img width=875 height=60 src="{{ asset('argon') }}/img/generate/titulo_0.png" v:shapes="_x0000_s1089 _x0000_s1090 _x0000_s1091"><![endif]>
				<![if !vml]><span style='left:0px;position:relative;
					left:5px;top:-0px;width:69px;height:23px'><img width=90 height=90
					src="{{ asset('argon') }}/img/generate/logo.png"><![endif]></span></p>
				</div>

			<td width=712 colspan=11 valign=top style='width:620.95pt;border-top:solid windowtext 3.0pt;
			border-left:none;border-bottom:solid windowtext 3.0pt;border-right:none;
			mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
			padding:0cm 3.5pt 0cm 3.5pt'>
			<h1><span lang=ES>Reporte de muestreo y revenimiento</span></h1>
			</td>
			
			</tr>
			<tr style='page-break-inside:avoid'>
			<td width=557 colspan=3 valign=top style='width:417.5pt;border:solid windowtext 1.0pt;
			border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
			solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
			0cm 3.5pt 0cm 3.5pt'>
			
					<div class="rofl">
						<strong>Cliente:</strong>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
						{{ $reporteMuestreo->cliente }}
						<br>
						<strong>Atencion A:</strong>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						{{ $reporteMuestreo->atencion_a }}
						<br>
						<strong>Obra:</strong>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						{{ $reporteMuestreo->obra }}
						<br>
						<strong>Ubicación:</strong>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						{{ $reporteMuestreo->ubicación }}
						<br>
						<strong>Clave Obra:</strong>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						{{ $reporteMuestreo->clave_obra }}
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<strong>Fecha Muestreo:</strong>
						{{ $reporteMuestreo->fecha_muestreo }}
						<br>
						<strong>Orden Servicio:</strong>
						&nbsp;&nbsp;&nbsp;
						{{ $reporteMuestreo->orden_servicio }}
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<strong>Muestreador Asignado:</strong>
						{{ $reporteMuestreo->muestreador_asignado }}
					</div>






			
			<![if !supportMisalignedColumns]>
			<tr height=0>
			<td width=118 style='border:none'></td>
			<td width=118 style='border:none'></td>
			<td width=7 style='border:none'></td>
			<td width=111 style='border:none'></td>
			<td width=92 style='border:none'></td>
			<td width=26 style='border:none'></td>
			<td width=4 style='border:none'></td>
			<td width=18 style='border:none'></td>
			<td width=96 style='border:none'></td>
			<td width=23 style='border:none'></td>
			<td width=95 style='border:none'></td>
			</tr>
			<![endif]>
			</table>

			
			<style type="text/css" media="print">
			.nover {display:none}
			</style>
			<p class=MsoNormal><!--[if gte vml 1]><v:shape id="_x0000_s1026" type="#_x0000_t202"
			style='position:absolute;margin-left:450pt;margin-top:106.1pt;width:81pt;
			height:18pt;z-index:251657216;mso-position-horizontal-relative:text;
			mso-position-vertical-relative:text' filled="f" stroked="f"/><![endif]--><![if !vml]><span
			style='mso-ignore:vglayout'>
			<p class=MsoNormal style='tab-stops:160.7pt'><span lang=ES><o:p>&nbsp;</o:p></span></p>
			<div align="center">
			<input type='button' onclick='window.print();' value='Imprimir' class="btn btn-success btn-lg nover" id="imprimir" name="imprimir" />
			<a href="{{ route('reporte-muestreos.index') }}"><input name="button" type="button" class="btn btn-danger btn-lg nover" value="Volver" /> </a>
			</div></form>
			<table cellpadding=0 cellspacing=0 align=left>
			<tr>
			<td width=600 height=142></td>
			</tr>
			<tr>
			<td></td>
			<td width=112 height=28 style='vertical-align:top'><![endif]><![if !mso]><span
			style='position:absolute;mso-ignore:vglayout;z-index:251657216'>
			</span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
			</tr>
			</table>

	</span><![endif]><span lang=ES><o:p>&nbsp;</o:p></span></p>

	</div>
</body>

</html>
