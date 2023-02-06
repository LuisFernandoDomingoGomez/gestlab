<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"
  xmlns:w="urn:schemas-microsoft-com:office:word" xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
  xmlns="http://www.w3.org/TR/REC-html40">


<head>


  <style>
    .sinborde {
      border: 0;
    }
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" type="image/png" href="{{ asset('argon') }}/img/brand/favicon.png" />
  <style type="text/css" media="print">
    .nover {
      display: none
    }
  </style>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- Bootstrap Core CSS -->
  <link href="{{asset('ReporteMR/jquery/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom CSS -->
  <script type="text/javascript" src="{{asset('ReporteMR/jquery/jquery-3.2.1.js')}}"></script>

  <link rel=File-List href="{{asset('ReporteTRA/filelist.xml')}}">
  <link rel=Edit-Time-Data href="{{asset('ReporteTRA/editdata.mso')}}">
  <link rel=OLE-Object-Data href="{{asset('ReporteTRA/oledata.mso')}}">
  <!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
  <title>Reporte de Muestreo</title>
  <link rel=themeData href="{{asset('ReporteTRA/themedata.thmx')}}">
  <link rel=colorSchemeMapping href="{{asset('ReporteTRA/colorschememapping.xml')}}">
  <style>
    .stp {
      width: 60 px;
      border: 1px solid black;
      border-collapse: collapse;
    }

    .ad {

      width: 90 px;
      align-content: left;
      border: 1px solid black;
      border-collapse: collapse;
    }

    < !--

    /* Font Definitions */
    @font-face {
      font-family: "Cambria Math";
      panose-1: 2 4 5 3 5 4 6 3 2 4;
      mso-font-charset: 1;
      mso-generic-font-family: roman;
      mso-font-pitch: variable;
      mso-font-signature: 0 0 0 0 0 0;
    }

    @font-face {
      font-family: "Wingdings 2";
      panose-1: 5 2 1 2 1 5 7 7 7 7;
      mso-font-charset: 2;
      mso-generic-font-family: roman;
      mso-font-pitch: variable;
      mso-font-signature: 0 268435456 0 0 -2147483648 0;
    }

    /* Style Definitions */
    p.MsoNormal,
    li.MsoNormal,
    div.MsoNormal {
      mso-style-unhide: no;
      mso-style-qformat: yes;
      mso-style-parent: "";
      margin: 0cm;
      margin-bottom: .0001pt;
      mso-pagination: widow-orphan;
      font-size: 12.0pt;
      font-family: "Times New Roman", serif;
      mso-fareast-font-family: "Times New Roman";
      mso-ansi-language: ES;
      mso-fareast-language: ES;
    }

    h1 {
      mso-style-unhide: no;
      mso-style-qformat: yes;
      mso-style-next: Normal;
      margin: 0cm;
      margin-bottom: .0001pt;
      mso-pagination: widow-orphan;
      page-break-after: avoid;
      mso-outline-level: 1;
      font-size: 14.0pt;
      mso-bidi-font-size: 12.0pt;
      font-family: "Arial", sans-serif;
      mso-font-kerning: 0pt;
      mso-ansi-language: ES;
      mso-fareast-language: ES;
    }

    h2 {
      mso-style-unhide: no;
      mso-style-qformat: yes;
      mso-style-next: Normal;
      margin-top: 2.0pt;
      margin-right: 0cm;
      margin-bottom: 2.0pt;
      margin-left: 0cm;
      mso-pagination: widow-orphan;
      page-break-after: avoid;
      mso-outline-level: 2;
      font-size: 6.0pt;
      mso-bidi-font-size: 12.0pt;
      font-family: "Arial", sans-serif;
      mso-ansi-language: ES;
      mso-fareast-language: ES;
    }

    h3 {
      mso-style-unhide: no;
      mso-style-qformat: yes;
      mso-style-next: Normal;
      margin-top: 2.0pt;
      margin-right: 0cm;
      margin-bottom: 2.0pt;
      margin-left: 0cm;
      mso-pagination: widow-orphan;
      page-break-after: avoid;
      mso-outline-level: 3;
      font-size: 9.0pt;
      mso-bidi-font-size: 12.0pt;
      font-family: "Arial", sans-serif;
      mso-ansi-language: ES;
      mso-fareast-language: ES;
    }

    h4 {
      mso-style-unhide: no;
      mso-style-qformat: yes;
      mso-style-next: Normal;
      margin-top: 2.0pt;
      margin-right: 0cm;
      margin-bottom: 2.0pt;
      margin-left: 0cm;
      mso-pagination: widow-orphan;
      page-break-after: avoid;
      mso-outline-level: 4;
      font-size: 8.0pt;
      mso-bidi-font-size: 12.0pt;
      font-family: "Arial", sans-serif;
      mso-ansi-language: ES;
      mso-fareast-language: ES;
    }

    h5 {
      mso-style-unhide: no;
      mso-style-qformat: yes;
      mso-style-next: Normal;
      margin: 0cm;
      margin-bottom: .0001pt;
      text-align: center;
      mso-pagination: widow-orphan;
      page-break-after: avoid;
      mso-outline-level: 5;
      font-size: 8.0pt;
      mso-bidi-font-size: 12.0pt;
      font-family: "Arial", sans-serif;
      mso-ansi-language: ES;
      mso-fareast-language: ES;
    }

    p.MsoHeader,
    li.MsoHeader,
    div.MsoHeader {
      mso-style-noshow: yes;
      mso-style-unhide: no;
      margin: 0cm;
      margin-bottom: .0001pt;
      mso-pagination: widow-orphan;
      tab-stops: center 220.95pt right 441.9pt;
      font-size: 12.0pt;
      font-family: "Times New Roman", serif;
      mso-fareast-font-family: "Times New Roman";
      mso-ansi-language: ES;
      mso-fareast-language: ES;
    }

    p.MsoFooter,
    li.MsoFooter,
    div.MsoFooter {
      mso-style-noshow: yes;
      mso-style-unhide: no;
      margin: 0cm;
      margin-bottom: .0001pt;
      mso-pagination: widow-orphan;
      tab-stops: center 220.95pt right 441.9pt;
      font-size: 12.0pt;
      font-family: "Times New Roman", serif;
      mso-fareast-font-family: "Times New Roman";
      mso-ansi-language: ES;
      mso-fareast-language: ES;
    }

    /* Page Definitions */
    @page {
      mso-footnote-separator: url("027%20Reporte%20de%20Transporte_archivos/header.htm") fs;
      mso-footnote-continuation-separator: url("027%20Reporte%20de%20Transporte_archivos/header.htm") fcs;
      mso-endnote-separator: url("027%20Reporte%20de%20Transporte_archivos/header.htm") es;
      mso-endnote-continuation-separator: url("027%20Reporte%20de%20Transporte_archivos/header.htm") ecs;
    }

    @page WordSection1 {
      size: 612.0pt 792.0pt;
      margin: 14.2pt 1.0cm 1.0cm 2.0cm;
      mso-header-margin: 35.45pt;
      mso-footer-margin: 35.45pt;
      mso-header: url("027%20Reporte%20de%20Transporte_archivos/header.htm") h1;
      mso-paper-source: 0;
    }

    div.WordSection1 {
      page: WordSection1;
    }

    -->
  </style>
</head>

<body lang=ES-MX style='tab-interval:35.4pt'>

  <div class=WordSection1>
    <div align='center'>
      <div align='center'>
        <div align='center'>
          <div align='center'>
            <div align='center'>

              <form class="form-horizontal" action="{{ 'guardacu' }}" method='POST'>
                {{csrf_field()}}
                <p class=MsoNormal><b><span lang=ES style='font-size:4.0pt;mso-bidi-font-size:
12.0pt;font-family:"Arial",sans-serif'>
                      <o:p>&nbsp;</o:p>
                    </span></b></p>

                <table class=MsoNormalTable border=2 cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext .5pt;
mso-border-bottom-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
                  <tr style='page-break-inside:avoid'>
                    <div>
                      <!--Encabezado de Archivo-->
                      <div>
                        <![if !vml]><img width=800 height=53 src="{{ asset('argon') }}/img/generate/titulo_0.png"
                          v:shapes="_x0000_s1089 _x0000_s1090 _x0000_s1091">
                        <![endif]>
                        <![if !vml]><span style='left:0px;position:relative;
		left:5px;top:-0px;width:65px;height:20px'><img width=80 height=80 src="{{ asset('argon') }}/img/generate/logo.png">
                          <![endif]>
                        </span></p>
                      </div>

                    </div>


                    <td width=712 colspan=11 valign=top style='width:620.95pt;'>
                      <![if !vml]>
                        <img width=555 height=30 src="{{ asset('argon') }}/img/generate/titulo_1.png" v:shapes="_x0000_s1089 _x0000_s1090 _x0000_s1091">
                        <![endif]>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <![if !vml]><span style='left:0px;position:relative; left:5px;top:-0px;width:60px;height:20px'>
                        <img width=320 height=28 src="{{ asset('argon') }}/img/generate/titulo_2.png">
                        <![endif]>
                    </td>

                  </tr>
                  <tr style='page-break-inside:avoid'>

                    <!--Tamano de margen 1-->

                    <td width=697 colspan=3 valign=top style='width:697.5pt;border:solid windowtext 0.0pt'>
                      <h2 style='margin-bottom:0cm;margin-bottom:.0001pt'><span lang=ES>Programacion de Servicio</span>
                      </h2>
                <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
                  style='border-collapse:collapse;mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:433.95pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h3><span lang=ES>I. FICHA DE IDENTIFICACI&Oacute;N</span></h3>
                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid'>

                    <!--Tamano de margen 2-->

                    <td width=657 colspan=8 valign=top style='width:532.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:6.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial",sans-serif'>NOMBRE DEL PACIENTE (APELLIDO PATERNO,
                            APELLIDO MATERNO Y NOMBRE(S))<o:p></o:p></span></b></p>
                      <p class=MsoNormal>

                    </td>
                    <td width=120 colspan=2 valign=top style='width:90.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:6.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial",sans-serif'>ESTADO CIVIL</span></b></p>
                      <p class=MsoNormal> <input type="text" style="WIDTH: 80px; HEIGHT:20px " class="sinborde"
                          name='Edo_civil' id="Edo_civil" value='' placeholder="Edo_civil:" required />

                    </td>
                    <td width=95 valign=top style='width:71.45pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
                      <h2><span lang=ES>G&Eacute;NERO<br></span></h2>

                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <td width=245 colspan=3 valign=top style='width:183.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h2><span lang=ES>FECHA DE NACIMIENTO</span></h2>
                      <p class=MsoNormal><input type="date" size="25" maxlength="20" name="fechan" id="fechan"
                          class="sinborde" value=''>
                        </span> </p>

                    </td>
                    <td width=234 colspan=4 valign=top style='width:175.2pt;border:none;
  border-bottom:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h2><span lang=ES>OCUPACI&Oacute;N DEL PACIENTE</span></h2>
                      <p class=MsoNormal> <input type="text" style="WIDTH: 216px; HEIGHT:20px " class="sinborde"
                          name="Ocupacion" id="Ocupacion" placeholder="Escriba ocupaci&oacute;n:" value=''>

                    </td>
                    <td width=234 colspan=4 valign=top style='width:175.25pt;border-top:none;
  border-left:solid windowtext .5pt;border-bottom:solid windowtext .5pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
                      <h2 style='margin-bottom:0cm;margin-bottom:.0001pt'><span lang=ES
                          style='mso-bidi-font-family:"Times New Roman";text-transform:uppercase'>EN SU
                          CASO, LUGAR DE TRABAJO</span></h2>
                      <p class=MsoNormal> <input type="text" style="WIDTH: 216px; HEIGHT:20px " class="sinborde"
                          name="Lugar_trabajo" id="Lugar_trabajo" placeholder="Escriba lugar de trabajo:" value=''>

                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <td width=356 colspan=4 valign=top style='width:266.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h2><span lang=ES>PROCEDENCIA</span></h2>
                      <p class=MsoNormal><span lang=ES style='font-size:10.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial",sans-serif'>
                        </span></p>
                      <p class=MsoNormal> <input type="text" style="WIDTH: 216px; HEIGHT:20px " class="sinborde"
                          name="Procedencia" id="Procedencia" placeholder="Escriba su procedencia:" value=''>
                    </td>
                    <td width=356 colspan=7 valign=top style='width:267.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h2><span lang=ES>EN SU CASO, LUGAR DONDE OCURRIO EL ACCIDENTE</span></h2>
                      <p class=MsoNormal>
                        <input type="text" style="WIDTH: 216px; HEIGHT:20px " class="sinborde" name="Lugar_accidente"
                          id="Lugar_accidente" placeholder="Escriba el lugar del accidente:" value=''>

                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <td width=478 colspan=7 valign=top style='width:358.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h2><span lang=ES>NOMBRE DEL RESPONSABLE DEL PACIENTE</span></h2>
                      <p class=MsoNormal> <input type="text" style="WIDTH: 450px; HEIGHT:20px " class="sinborde"
                          name="Nombre_Tutor" id="Nombre_Tutor" placeholder="Escriba nombre completo:" value=''>

                    </td>
                    <td width=234 colspan=4 valign=top style='width:175.25pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h2><span lang=ES>PARENTESCO CON EL PACIENTE</span></h2>
                      <p class=MsoNormal> <input type="text" style="WIDTH: 150px; HEIGHT:20px " class="sinborde"
                          name="Parentesco_Tutor" id="Parentesco_Tutor" placeholder="Escriba parentesco:" value=''>

                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <td width=478 colspan=7 valign=top style='width:358.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h2><span lang=ES>DOMICILIO</span></h2>
                      <p class=MsoNormal>
                        <input type="text" style="WIDTH: 60px; HEIGHT:20px " id="tvia" name="tvia" class='sinborde'
                          placeholder="Tipo Via" value=''>:
                        <input type="text" style="WIDTH: 140px; HEIGHT:20px " id="via" name="via" class='sinborde'
                          placeholder="Nombre Via" value=''>,
                        <input type="text" style="WIDTH: 56px; HEIGHT:20px " id="ta" name="ta" class='sinborde'
                          placeholder="Tipo A." value=''> :
                        <input type="text" style="WIDTH: 170px; HEIGHT:20px " id="na" name="na" class='sinborde'
                          placeholder="Nombre Asentamiento" value=''>,
                        No.Int.:<input type="number" style="WIDTH: 50px; HEIGHT:20px " id="nint" name="nint"
                          class='sinborde' value=''>,
                        No.Ext.:<input type="number" style="WIDTH: 50px; HEIGHT:20px " id="n_ext" name="n_ext"
                          class='sinborde' value=''>,
                        C.P.:<input type="number" style="WIDTH: 60px; HEIGHT:20px " id="cp" name="cp" class='sinborde'
                          value=''>,
                        <input type="text" style="WIDTH: 140px; HEIGHT:20px " id="loc" name="loc" class='sinborde'
                          placeholder="Localidad:" value=''>,
                        <input type="text" style="WIDTH: 140px; HEIGHT:20px " id="mun" name="mun" class='sinborde'
                          placeholder="Municipio:" value=''>,
                        <input type="text" style="WIDTH: 140px; HEIGHT:20px " id="edo" name="edo" class='sinborde'
                          placeholder="Estado:" value=''>
                    </td>
                    <td width=234 colspan=4 valign=top style='width:175.25pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h2><span lang=ES>TEL&Eacute;FONO</span></h2>
                      <p class=MsoNormal>
                        <input type="text" style="WIDTH: 200px; HEIGHT:20px " class="sinborde" name="tel" id="tel"
                          placeholder="Escriba tel&eacute;fono:" value=''>

                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h3><span lang=ES>II. ANTECEDENTES RELACIONADOS CON LA URGENCIA</span></h3>
                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 style='width:620.95pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:14.2pt'>
                      <p class=MsoNormal> <textarea rows="2" cols="86" class="sinborde" name="Antecedentes_RU"
                          id="Antecedentes_RU" placeholder="Escriba antecedentes relacionados con la urgencia:">
</textarea>
                    </td>
                  </tr>

                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h3><span lang=ES>III. PADECIMIENTO ACTUAL</span></h3>
                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <p class=MsoNormal> <textarea rows="2" cols="86" class="sinborde" name="Padecimiento_A"
                          id="Padecimiento_A" placeholder="Escriba padecimiento actual:">
</textarea>
                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620
  .95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h3><span lang=ES>IV. SIGNOS VITALES</span></h3>
                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <td width=119 valign=top style='width:88.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h4><span lang=ES>T/A</span></h4>
                      <p class=MsoNormal>
                        <input type="text" style="WIDTH:120px; HEIGHT:22px " id="T_A" name="T_A" class='sinborde'
                          placeholder="T/A" value=''>

                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h3><span lang=ES>V. EXPLORACI&Oacute;N F&Iacute;SICA</span></h3>
                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <p class=MsoNormal>
                        <textarea rows="2" cols="86" class="sinborde" name="Exploracion_fisica" id="Exploracion_fisica"
                          placeholder="Exploración fisica:">
</textarea>

                    </td>
                  </tr>

                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h3><span lang=ES>VI. RESULTADOS DE LABORATORIO, GABINETE Y OTROS</span></h3>
                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <p class=MsoNormal>
                        <textarea rows="2" cols="86" class="sinborde" name="Resultados_lab" id="Resultados_lab"
                          placeholder="Escriba los resultados de laboratorio, gabinete y otros:">
</textarea>
                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h3><span lang=ES>VII. DIAGN&Oacute;STICO(S) PRESUNCIONAL(ES) (PRINCIPAL Y OTROS)</span></h3>
                    </td>
                  </tr>

                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <p class=MsoNormal>
                        <textarea rows="2" cols="86" class="sinborde" name="Diagnostico_pre" id="Diagnostico_pre"
                          placeholder="Escriba diagnostico(s) presuncional(es):">
</textarea>

                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h3><span lang=ES>VIII. TRATAMIENTO REALIZADO</span></h3>
                    </td>
                  </tr>

                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <p class=MsoNormal>
                        <textarea rows="2" cols="86" class="sinborde" name="Tratamiento_realizado"
                          id="Tratamiento_realizado" placeholder="Escriba tratamiento realizado:">
</textarea>
                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid;height:30.45pt'>
                    <td width=237 colspan=2 valign=top style='width:177.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:30.45pt'>
                      <h3><span lang=ES>IX. URGENCIA CALIFICADA</span></h3>
                      <p class=MsoNormal>
                        <center>
                          <input type="radio" name="Urgencia_calificada" id="Urgencia_calificada" value="Si" /> Si
                          <input type="radio" name="Urgencia_calificada" id="Urgencia_calificada" value="No" />No


                    </td>
                    <td width=211 colspan=3 valign=top style='width:158.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:30.45pt'>
                      <h3><span lang=ES>X. CASO M&Eacute;DICO LEGAL</span></h3>
                      <p class=MsoNormal>
                        <center><input type="radio" name="Caso_Medico" id="Caso_Medico" value="Si" /> Si
                          <input type="radio" name="Caso_Medico" id="Caso_Medico" value="No" />No

                    </td>
                    <td width=263 colspan=6 valign=top style='width:197.45pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:30.45pt'>
                      <h3><span lang=ES>XI. SE NOTIFIC&Oacute; AL MINISTERIO P&Uacute;BLICO</span></h3>
                      <p class=MsoNormal>
                        <center><input type="radio" name="Notificacion_ministerio" id="Notificacion_ministerio"
                            value="Si" /> Si
                          <input type="radio" name="Notificacion_ministerio" id="Notificacion_ministerio"
                            value="No" />No

                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid;height:28.8pt'>
                    <td width=237 colspan=2 valign=top style='width:177.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:28.8pt'>
                      <h3 align=center style='text-align:center'><span lang=ES style='font-size:
  7.0pt;mso-bidi-font-size:12.0pt;text-transform:uppercase'>NOMBRE Y FIRMA DEL
                          PACIENTE O FAMILIAR AL QUE SE LE NOTIFICA QUE ES UN CASO M&Eacute;DICO-LEGAL<o:p></o:p></span>
                      </h3>
                      <p class=MsoNormal><span lang=ES>
                          <o:p>&nbsp;</o:p>
                        </span></p>
                      <p class=MsoNormal>
                        <input type="text" style="WIDTH: 230px; HEIGHT:20px " class="sinborde" name="Fila1" id="Fila1"
                          placeholder="Escriba nombre completo:" value=''>

                    </td>
                    <td width=237 colspan=4 valign=top style='width:177.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:28.8pt'>

                      <h3 align=center style='text-align:center'><span lang=ES style='font-size:
  7.0pt;mso-bidi-font-size:12.0pt;text-transform:uppercase'>NOMBRE Y FIRMA DEL
                          RESPONSABLE EN CASO DE TRATARSE DE UN PACIENTE MENOR DE EDAD O CON
                          CAPACIDADES DIFERENTES<o:p></o:p></span></h3>

                      <p class=MsoNormal>
                        <input type="text" style="WIDTH: 230px; HEIGHT:20px " class="sinborde" name="Fila2" id="Fila2"
                          placeholder="Escriba nombre completo:" value=''>

                    </td>
                    <td width=237 colspan=5 valign=top style='width:177.0pt;border:none;
  border-bottom:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:28.8pt'>
                      <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><!--[if gte vml 1]><v:shapetype
   id="_x0000_t202" coordsize="21600,21600" o:spt="202" path="m,l,21600r21600,l21600,xe">
   <v:stroke joinstyle="miter"/>
   <v:path gradientshapeok="t" o:connecttype="rect"/>
  </v:shapetype><v:shape id="_x0000_s1027" type="#_x0000_t202" style='position:absolute;
   left:0;text-align:left;margin-left:166.05pt;margin-top:11.6pt;width:22pt;
   height:90.35pt;z-index:251658240;mso-position-horizontal-relative:text;
   mso-position-vertical-relative:text' filled="f" stroked="f">
   <v:textbox style='layout-flow:vertical;mso-layout-flow-alt:bottom-to-top'>
    <![if RotText]><![if !mso]>
    <table cellpadding=0 cellspacing=0 width="100%">
     <tr>
      <td><![endif]>
      <div>
      <p class=MsoNormal><b><span lang=ES style='font-size:8.0pt;mso-bidi-font-size:
      12.0pt;font-family:"Arial",sans-serif'>217B20000-027-06<o:p></o:p></span></b></p>
      </div>
      <![if !mso]></td>
     </tr>
    </table>
    <![endif]><![endif]></v:textbox>
  </v:shape><![endif]-->
                        <![if !vml]>
                        <![endif]>

                        <b style='mso-bidi-font-weight:
  normal'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:12.0pt;
  font-family:"Arial",sans-serif;text-transform:uppercase'>NOMBRE Y FIRMA DEL
                            RESPONSABLE EN CASO DE ALTA VOLUNTARIA<o:p></o:p></span></b>
                      </p><br>
                      <p class=MsoNormal>
                        <input type="text" style="WIDTH: 210px; HEIGHT:20px " class="sinborde" name="Fila3" id="Fila3"
                          placeholder="Escriba nombre completo:" value=''>

                    </td>
                  </tr>
                  <tr style='mso-yfti-lastrow:yes;page-break-inside:avoid'>
                    <td width=475 colspan=6 valign=top style='width:355.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h5 align=left style='text-align:left'><span lang=ES>DESTINO:</span></h5>
                      <p class=MsoNormal>
                      <table style="width:100%" border=0>
                        <tr>
                          <td style="width:60px">
                            <h5><input type="radio" name="Destino" id="Destino" value="1" />OBSERVACIÓN</h5>
                          </td>
                          <td style="width:70px">
                            <h5><input type="radio" name="Destino" id="Destino" value="2" />HOSPITALIZACIÓN
                          </td>
                          <td style="width:50px">
                            <h5><input type="radio" name="Destino" id="Destino" value="3" />CONSULTA EXTERNA
                          </td>
                          <td style="width:50px">
                            <h5><input type="radio" name="Destino" id="Destino" value="4" />ALTA
                          </td>
                        </tr>
                        <tr>
                          <td style="width:50px">
                            <h5><input type="radio" name="Destino" id="Destino" value="5" />REFERENCIA
                          </td>
                          <td style="width:50px">
                            <h5><input type="radio" name="Destino" id="Destino" value="6" />TRANSFERENCIA
                          </td>
                          <td style="width:50px">
                            <h5><input type="radio" name="Destino" id="Destino" value="7" />TRASLADO
                          </td>
                          <td style="width:50px">
                            <h5><input type="radio" name="Destino" id="Destino" value="8" />DEFUNCIÓN
                          </td>
                        </tr>
                      </table>

                    </td>
                    <td width=237 colspan=5 valign=top style='width:178.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <h5 style='margin-top:2.0pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt'>NOMBRE Y FIRMA <BR><span style='mso-spacerun:yes'></span>M&Eacute;DICO TRATANTE<o:p></o:p></span></h5>
                      <p class=MsoNormal>
                        <input type="text" style="WIDTH: 80px; HEIGHT:20px " id="Apellido_PU" name="Apellido_PU"
                          class="sinborde" value="" readonly>
                        <input type="text" style="WIDTH: 80px; HEIGHT:20px " id="Apellido_MU" name="Apellido_MU"
                          value="" class="sinborde" readonly><br>
                        <input type="text" style="WIDTH: 100px; HEIGHT:20px " id="NombreU" name="NombreU"
                          class="sinborde" value="" readonly>

                    </td>
                  </tr>
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
                <table>
                  <tr>
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
                    <br>
                    <TD>


                    </TD>
                  </tr>
                </table>
                <div>
                  <p class=MsoNormal><span lang=ES style='font-size:6.0pt;mso-bidi-font-size:
    12.0pt;font-family:"Arial",sans-serif'>
                      NOTA: EL LABORATORIO DE ESTA EMPRESA CUENTA CON UN SISTEMA DE CALIDAD BASADO EN LA NORMA
                      ISO-IEC-17025-2017 ; SI TIENE ALGUNA SUGERENCIA O QUEJA, POR FAVOR HAGALO A LOS TEL(S):
                      <o:p></o:p>
                    </span></p>
                </div>
                <br>
                <div>
                  <p class=MsoNormal><span lang=ES style='font-size:11.0pt;mso-bidi-font-size:
    12.0pt;font-family:"Arial",sans-serif'>Tiziano No. 149 Col. Alfonso XIII, CDMX, Alcaldia: Alvaro obregon C.P. 01460
                      <o:p></o:p>
                    </span></p>
                </div>
                <style type="text/css" media="print">
                  .nover {
                    display: none
                  }
                </style>
                <p class=MsoNormal><!--[if gte vml 1]><v:shape id="_x0000_s1026" type="#_x0000_t202"
 style='position:absolute;margin-left:450pt;margin-top:106.1pt;width:81pt;
 height:18pt;z-index:251657216;mso-position-horizontal-relative:text;
 mso-position-vertical-relative:text' filled="f" stroked="f"/><![endif]-->
                  <![if !vml]><span style='mso-ignore:vglayout'>
                    <p class=MsoNormal style='tab-stops:160.7pt'><span lang=ES>
                        <o:p>&nbsp;</o:p>
                      </span></p>
                    <div align="center">
                      <input type='button' onclick='window.print();' value='Imprimir'
                        class="btn btn-success btn-lg nover" id="imprimir" name="imprimir" />
                      <a href="{{ route('reporte-muestreos.index')}}"><input name="button" type="button"
                          class="btn btn-danger btn-lg nover" value="Volver" /> </a>
                    </div>
              </form>
              <table cellpadding=0 cellspacing=0 align=left>
                <tr>
                  <td width=600 height=142></td>
                </tr>
                <tr>
                  <td></td>
                  <td width=112 height=28 style='vertical-align:top'>
                    <![endif]>
                    <![if !mso]><span style='position:absolute;mso-ignore:vglayout;z-index:251657216'>
                    </span>
                    <![endif]>
                    <![if !mso & !vml]>&nbsp;
                    <![endif]>
                    <![if !vml]>
                  </td>
                </tr>
              </table>

              </span>
              <![endif]><span lang=ES>
                <o:p>&nbsp;</o:p>
              </span></p>

            </div>
</body>

</html>