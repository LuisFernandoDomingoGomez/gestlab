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
                        <![if !vml]><img width=935 height=30 src="{{ asset('argon') }}/img/generate/titulo_3.png"
                          v:shapes="_x0000_s1089 _x0000_s1090 _x0000_s1091">
                        <![endif]>
                        </span></p>
                      </div>
                    </div>
                    <td width=712 colspan=11 valign=top style='width:580.95pt;'>
                    <h1><span lang=ES>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      Informe de Ensayo a Compresion Simple
                    </span></h1>
                    </td>
                  
                  </tr>
                  <tr style='page-break-inside:avoid'>

                    <!--Tamano de margen 1-->

                    <td width=697 colspan=3 valign=top style='width:697.5pt;border:solid windowtext 0.0pt'>
                      <h2 style='margin-bottom:0cm;margin-bottom:.0001pt'><span lang=ES></span></h2>
                    </td>
                
                <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 style='border-collapse:collapse;mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
                  
                <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'><br>
                      <b style='mso-bidi-font-weight:
  normal'><h3><span lang=ES>Revisión: 01 
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha de entrada en vigor: </span></h3></b>
                    </td>
                  </tr>

                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;'>
                      <p class=MsoNormal>
                      <table class="table table-bordered border-primary">
                        <tr>
                          <td><h3>Obra: {{ $registroVista->obra }}</h3></td>
                          <td><h3>Fecha de Muestreo: {{ $registroVista->fecha_muestreo }}</h3></td>
                          <td><h3>Edad de diseño (Dias)</h3></td>
                        </tr>
                        <tr>
                          <td><h3>Ubicacion: {{ $registroVista->ubicacion }}</h3></td>
                          <td><h3>Fecha de Recepcion: {{ $registroVista->fecha_muestreo }}</h3></td>
                          <td><h3>{{ $registroVista->edad_diseno }}</h3></td>
                        </tr>
                      </table>
                      <table class="table table-bordered border-primary">
                        <tr>
                          <td><h3>Correo: {{ $registroVista->correo }}</h3></td>
                          <td><h3>Telefono: {{ $registroVista->telefono }}</h3></td>
                          <td><h3>Fecha Informe: {{ $registroVista->fecha_informe }}</h3></td>
                          <td><h3>No de Informe: {{ $registroVista->id_cono }}</h3></td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <!--Tamano de margen 2-->
                    <td width=657 colspan=8 valign=top style='width:532.5pt;border-top:none;'></td>
                  </tr>
                  <tr style='page-break-inside:avoid'></tr>
                  <tr style='page-break-inside:avoid'>
                    <td width=478 colspan=7 valign=top style='width:358.7pt;border-top:none;'>
                    </td>
                    <td width=234 colspan=4 valign=top style='width:175.25pt;border:none;'>
                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <td width=234 colspan=4 valign=top style='width:175.25pt;border:none;'>
                    </td>
                  </tr>

                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;'>
                    <br>

                    <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
                                        <th><h5>No de Olla</h5></th>
                                        <th><h5>Remision</h5></th>
                                        <th><h5>Hora de salida</h5></th>
                                        <th><h5>Hora de llegada</h5></th>
                                        <th><h5>Hora de descarga</h5></th>
                                        <th><h5>Proyecto</h5></th>
                                        <th><h5>Medido</h5></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($muestras as $muestra)
                                        <tr>

                                            <td><h5>{{ $muestra->numero_olla }}</h5></td>
                                            <td><h5>{{ $muestra->numero_remision }}</h5></td>
                                            <td><h5>{{ $muestra->hora_salida_planta }}</h5></td>
                                            <td><h5>{{ $muestra->hora_entrega_obra }}</h5></td>
                                            <td><h5>{{ $muestra->hora_toma_muestra }}</h5></td>
                                            <td><h5>{{ $registroVista->rev_obt }}</h5></td>
                                            <td><h5>{{ $muestra->uno_cm }}</h5></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </td>
                  </tr>


                  
                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;'>
                    <br>
                    
                    <!--Apartado de Notas de Laboratorio-->

                    <h2><span lang=ES>
                      LOS RESULTADOS SE OBTUVIERON CON LA UTILIZACION DE UNA MAQUINA DE ENSAYE CON UNA FACTOR DE COBERTURA K=2 QUE REPRESENTA UN NIVEL DE CONFIANZA DE 95.45%
                    </span></h2>
                    <h2><span lang=ES>
                      LOS EQUIPOS DE MEDICIÓN UTILIZADOS EN LAS PRUEBAS Y PARA VERIFICACIÓN INTERNA, FUERON CALIBRADOS EN LABORATORIOS ACREDITADOS POR LA ema, Y CUENTAN CON TRAZABILIDAD AL CENTRO NACIONAL DE METROLOGÍA.
                    </span></h2>
                    <h2><span lang=ES>
                      LOS MÉTODOS DE PRUEBA UTILIZADOS POR EL LABORATORIO ESTÁN BASADOS EN LAS NORMAS MEXICANAS  NMX-C-161 -ONNCCE-2013 "MUESTREO DE CONCRETO FRESCO",   NMX-C-156-ONNCCE-2010 "DETERMINACIÓN DE REVENIMIENTO EN EL CONCRETO FRESCO ",    NMX-C-159-ONNCCE-2016,   "ELABORACIÓN Y CURADO EN EL LABORATORIO DE ESPECÍMENES DE CONCRETO  ,   NMX-C-109-ONNCCE-2013    " CABECEO DE ESPECÍMENES  CILÍNDRICOS DE CONCRETO (Unicamente con compuesto de mortero)"  Y   NMX-C-083-ONNCCE-2014  " DETERMINACIÓN DE LA RESISTENCIA A LA COMPRESIÓN DE CILINDROS DE CONCRETO "  
                    </span></h2>
                    <h2><span lang=ES>
                      El método de prueba  NMX-C-435-ONNCCE-2010 "Determinación de la temperatura del concreto fresco" no está dentro del alcance del Sistema de Gestión de calidad.
                    </span></h2>
                    <h2><span lang=ES>
                      PT-ISC-01 PROCEDIMIENTO DE MUESTREO DE CONCRETO (Plan de muestreo y frecuencia de muestreo indicado en el presente procedimiento)
                    </span></h2>
                    <h2><span lang=ES>
                      EL LABORATORIO DE ESTA EMPRESA CUENTA CON UN SISTEMA DE CALIDAD BASADO EN LA  ISO-IEC-17025-2017. SI TIENEN ALGUNA QUEJA O RECOMENDACIÓN DE MEJORA POR EL SERVICIO, FAVOR DE ENVIARLA POR ESCRITO.
                    </span></h2><br>
                      <div><center>
                          <b><p class=MsoNormal><span lang=ES style='font-size:6.0pt;mso-bidi-font-size:
                            12.0pt;font-family:"Arial",sans-serif'>
                              Los resultados obtenidos cuentan con una estimación de la incertidumbre expandida con factor de cobertura K=2 si desea conocer la incertidumbre  obtenida favor de solicitarla por escrito a al e-mail:  XXXXXXXX, los resultados obtenidos no indican conformidad con ningun requisito, las especificaciones expresadas en el informe unicamente son de caracter informativo, los valores obtenidos por el laboratorio
                            <o:p></o:p></b>
                          </span></p></center>
                      </div><br>
                    <h2><span lang=ES>
                      AVISO IMPORTANTE. XXXXXX. ( en lo sucesivo el Prestador) a través de este medio hace entrega de los resultados de los ensayos practicados. El Prestador NO se hace responsable por cualquier modificación o alteración que los resultados aquí ofrecidos pudieran sufrir por actos del Usuario o de terceros, por lo que, en caso de duda, es responsabilidad del Usuario y del usuario final en compañia del titular del informe confrontar la información, solicitando la impresión de sus resultados en en las instalaciones del laboratorio en un período no mayor a los 30 días de practicado los ensayos o solicitada la orden.Este informe se refiere exclusivamente a las muestras especificadas y no puede ser reproducido ni total ni parcialmente
                    </span></h2>
                    <h2><span lang=ES>
                      El Prestador por cuestión de confidencialidad, NO revelará, dará, venderá, donará o transmitirá ningún tipo de información personal del Usuario relacionada con los resultados de la prueba practicada, excepto cuando esta información sea solicitada por autoridad competente. Lo anterior en términos de nuestro aviso de privacidad.
                    </span></h2>

                    </td>
                  </tr>

                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;'><br>

                    <!--Apartado de Firmas-->

                    <p class=MsoNormal><span lang=ES style='font-size:11.0pt;mso-bidi-font-size: 12.0pt;font-family:"Arial",sans-serif'>
                                          
                                              
                    <p class=MsoNormal><span lang=ES style='font-family:"Gill Sans MT",sans-serif'><o:p>&nbsp;</o:p></span></p>

                    <p class=MsoNormal><span lang=ES style='font-family:"Gill Sans MT",sans-serif'><o:p>&nbsp;</o:p></span></p>

                    <p class=MsoNormal><span lang=ES style='font-family:"Gill Sans MT",sans-serif'><o:p>&nbsp;</o:p></span></p>

                    <p class=MsoNormal align=center style='text-align:center;mso-outline-level:
                    1'><b style='mso-bidi-font-weight:normal'><span lang=ES style='font-size:8.0pt;
                    font-family:"Gill Sans MT",sans-serif'>REALIZ&Oacute;<o:p></o:p></span></b></p>

                    <p class=MsoNormal align=center style='text-align:center'><span lang=ES
                    style='font-size:8.0pt;font-family:"Gill Sans MT",sans-serif'><o:p>&nbsp;</o:p></span></p>

                    <p class=MsoNormal align=center style='text-align:center'><span lang=ES
                    style='font-size:8.0pt;font-family:"Gill Sans MT",sans-serif'><o:p>&nbsp;</o:p></span></p>

                    <p class=MsoNormal align=center style='text-align:center'><span lang=ES
                    style='font-size:8.0pt;font-family:"Gill Sans MT",sans-serif'><o:p>&nbsp;</o:p></span></p>

                    <p class=MsoNormal align=center style='text-align:center'> <div align='center'><span lang=ES
                    style='font-size:8.0pt;font-family:"Gill Sans MT",sans-serif'><o:p>&nbsp;</o:p>
                    <input type="text" style="WIDTH: 60px; HEIGHT:20px " id="Apellido_PU" name="Apellido_PU" class="sinborde"  value=""  > 
                      <input type="text" style="WIDTH: 60px; HEIGHT:20px " id="Apellido_MU" name="Apellido_MU" value="" class="sinborde">
                    <input type="text" style="WIDTH: 100px; HEIGHT:20px " id="NombreU" name="NombreU"class="sinborde" value=""  ></span></p>
                      </span></p></div>

                    <p class=MsoNormal align=center style='text-align:center'><span lang=ES
                    style='font-size:8.0pt;font-family:"Gill Sans MT",sans-serif'>____________________________________________________<o:p></o:p></span></p>
                    <style type="text/css" media="print">
                    .nover {display:none}
                    </style>
                    <p class=MsoNormal align=right style='margin-right:9.6pt;text-align:right'><span
                    class=GramE><DIV ALIGN='CENTER'><span lang=ES style='font-size:8.0pt;font-family:"Gill Sans MT",sans-serif'>NOMBRE
                    <span style='mso-spacerun:yes'></span> COMPLETO</span></span><span lang=ES
                    style='font-size:8.0pt;font-family:"Gill Sans MT",sans-serif'> Y FIRMA <br><span
                    style='mso-spacerun:yes'></span><span
                    style='mso-spacerun:yes'></span></span></DIV>

                      <o:p></o:p><br><br><br>

                    </td>
                  </tr>
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
                  <p class=MsoNormal><span lang=ES style='font-size:8.0pt;mso-bidi-font-size:
    8.0pt;font-family:"Arial",sans-serif'>FIN DEL DOCUMENTO
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