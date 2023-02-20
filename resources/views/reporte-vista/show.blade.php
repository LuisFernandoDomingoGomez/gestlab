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
                        <img width=520 height=29 src="{{ asset('argon') }}/img/generate/titulo_1.png" v:shapes="_x0000_s1089 _x0000_s1090 _x0000_s1091">
                        <![endif]>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <![if !vml]><span style='left:0px;position:relative; left:5px;top:-0px;width:60px;height:20px'>
                        <img width=369 height=27 src="{{ asset('argon') }}/img/generate/titulo_2.png">
                        <![endif]>
                    </td>

                  </tr>
                  <tr style='page-break-inside:avoid'>

                    <!--Tamano de margen 1-->

                    <td width=697 colspan=3 valign=top style='width:697.5pt;border:solid windowtext 0.0pt'>
                      <h2 style='margin-bottom:0cm;margin-bottom:.0001pt'><span lang=ES></span></h2>
                    </td>
                
                <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 style='border-collapse:collapse;mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
                  
                <tr style='mso-yfti-lastrow:yes;page-break-inside:avoid'>
                    <td width=475 colspan=4 valign=top style='width:290.95pt;border-top:none'>
                      <p class=MsoNormal>
                      <table class="table table-bordered border-primary">
                        <tr>
                          <td style="width:50px">
                              <h3 class="card-text">Cliente: {{ $reporteVista->cliente }}</h3>
                              <h3 class="card-text">Atencion a: {{ $reporteVista->atencion_a }}</h3>
                              <h3>Obra: {{ $reporteVista->obra }}</h3>
                              <h3>Ubicacion: {{ $reporteVista->ubicacion }}</h3>
                              <h3>Clave de Obra: {{ $reporteVista->clave_obra }}      Fecha de Muestreo: {{ $reporteVista->fecha_muestreo }}</h3>
                              <h3>Fecha de Muestreo: {{ $reporteVista->fecha_muestreo }}</h3>
                              <h3>Muestreador Asignado: {{ $reporteVista->muestreador_asignado }}</h3>
                          </td>
                        </tr>
                      </table>

                    </td>
                    <td width=237 colspan=8 valign=top style='width:308.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 25.5pt'>
  <p class=MsoNormal>
                      <table class="table table-bordered border-primary">
                        <tr>
                          <td style="width:50px">
                              <h3 class="card-text">Resistencia: {{ $reporteVista->resistencia }}</h3>
                              <h3 class="card-text">Tipo de Aditivo: {{ $reporteVista->tipo_aditivo }}</h3>
                              <h3>Tipo de Concreto: {{ $reporteVista->tipo_concreto }}</h3>
                              <h3>Tipo de Agregado: {{ $reporteVista->tipo_agregado }}</h3>
                              <h3>Premezcadora: {{ $reporteVista->premezcadora }}</h3>
                              <h3>Edad de Ensayo: {{ $reporteVista->edad_ensayo }}</h3>
                          </td>
                          <td style="width:50px">
                              <h3 class="card-text">Revenimiento: {{ $reporteVista->revenimiento }}</h3>
                              <h3 class="card-text">Tipo de Cemento: {{ $reporteVista->tipo_cemento }}</h3>
                              <h3>T.A.M (mm): {{ $reporteVista->tamano_agregado_maximo }}</h3>
                              <h3>Dosificacion: {{ $reporteVista->dosificacion }}</h3>
                              <h3>Marca de Cemento: {{ $reporteVista->marca_cemento }}</h3>
                              <h3>Volumen Colado (m³): {{ $reporteVista->marca_cemento }}</h3>
                          </td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <!--Tamano de margen 2-->
                    <td width=657 colspan=8 valign=top style='width:532.5pt;'></td>
                  </tr>
                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11;'>

                          <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card text-center">
                                        <div class="card-header">
                                            <h3> Hora de LLegada del Muestreador</h3>
                                        </div>
                                        <div class="card-header">
                                            {{ $reporteVista->hora_llegada_muestreador }}
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Entrega a Transportista</h4>
                                            <p class="card-text">{{ $reporteVista->entrega_transportista }}</p>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="thead">
                                                    <tr></tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('argon') }}/img/generate/firma.jpg" class="card-img-top" alt="..." width=100 height=35></td>
                                                            <td><img src="{{ asset('argon') }}/img/generate/firma2.png" class="card-img-top" alt="..." width=100 height=35></td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{ $reporteVista->muestreador }}</td>
                                                            <td>{{ $reporteVista->transportista_1 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Muestreador</td>
                                                            <td>Transportista</td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <div class="card-footer text-muted">
                                            Nombre y/o Firma
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="card">
                                    <div class="card text-center">
                                        <div class="card-header">
                                        <h3> Hora de Salida del Muestreador</h3>
                                        </div>
                                        <div class="card-header">
                                            {{ $reporteVista->hora_salida_muestreador }}
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Entrega a Laboratorista</h4>
                                            <p class="card-text">{{ $reporteVista->entrega_laboratorista }}</p>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="thead">
                                                    <tr></tr>
                                                </thead>
                                                <tbody> 
                                                        <tr>
                                                            <td><img src="{{ asset('argon') }}/img/generate/firma2.png" class="card-img-top" alt="..." width=100 height=35></td>
                                                            <td><img src="{{ asset('argon') }}/img/generate/firma3.png" class="card-img-top" alt="..." width=100 height=35></td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{ $reporteVista->transportista_2 }}</td>
                                                            <td>{{ $reporteVista->laboratorista }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transportista</td>
                                                            <td>Laboratorista</td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="card-footer text-muted">
                                            Nombre y/o Firma
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
  
                    </td>
                  </tr>

                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'><br>
                      <b style='mso-bidi-font-weight:
  normal'><h3><span lang=ES>OBSERVACIONES DEL LABORATORIO: </span></h3></b>
                    </td>
                  </tr>

                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
                      <p class=MsoNormal>
                      <table class="table table-bordered border-primary">
                        <tr>
                          <td>Temp Ambiental (°C) y Humedad Relativa (%): {{ $reporteVista->temperatura_humedad }}</td>
                          <td>ID. Termometro: {{ $reporteVista->id_termometro }}</td>
                          <td>ID. Varilla: {{ $reporteVista->id_varilla }}</td>
                          <td>ID. Cono: {{ $reporteVista->id_cono }}</td>
                        </tr>
                      </table>

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
  <b style='mso-bidi-font-weight:<h3 align=center style='text-align:center'><span lang=ES style='font-size:
  7.0pt;mso-bidi-font-size:12.0pt;text-transform:uppercase'>Desviaciones y exclusiones que se presentaron<o:p></o:p></span>
                      </h3></b>
                      <p class=MsoNormal><span lang=ES>
                          <o:p>&nbsp;</o:p>
                        </span></p>
                        <p class=MsoNormal><span lang=ES style='font-size:11.0pt;mso-bidi-font-size:
                          12.0pt;font-family:"Arial",sans-serif'>{{ $reporteVista->desviaciones_exclusiones }}
                      <o:p></o:p>
                    </span></p>
                    </td>
                    <td width=237 colspan=4 valign=top style='width:177.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:28.8pt'>

  <b style='mso-bidi-font-weight:<h3 align=center style='text-align:center'><span lang=ES style='font-size:
  7.0pt;mso-bidi-font-size:12.0pt;text-transform:uppercase'>NOMBRE Y/O FIRMA DE
                          REVISION<o:p></o:p></span></h3></b>

                          </span></p>
                        <p class=MsoNormal><span lang=ES style='font-size:11.0pt;mso-bidi-font-size:
                          12.0pt;font-family:"Arial",sans-serif'>{{ $reporteVista->nombre_firma_revision }}
                      <o:p></o:p>
                    </span></p>

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
                            ENCARGADO DE LA OBRA<o:p></o:p></span></b>
                      </p><br>
                      <p class=MsoNormal><span lang=ES style='font-size:11.0pt;mso-bidi-font-size:
                          12.0pt;font-family:"Arial",sans-serif'>{{ $reporteVista->nombre_firma_encargado }}
                      <o:p></o:p>
                    </span></p>
                    <hr>

                    </td>
                    <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <br>
                    <h5><span lang=ES>
                      NORMAS DE REFERENCIA NMX-C-161-ONNCE-2013 "MUESTREO DE CONCRETO FRESCO", NMX-C-156-ONNCE-2010 "DETERMINACION DE REVENIMIENTO EN EL CONCRETO FRESCO", NMX-C-156-ONNCE-2016, "ELABORACION Y CURADO EN EL LABORATORIO DE ESPECIMENES DE CONCRETO, PLAN DE MUESTREO DE ACUERDO AL PROCEDIMIENTO INTERNO DE "MUESTREO DE CONCRETO FRESCO"
                    </span></h5>
                    <br>
                    </td>
                  </tr>

                  <tr style='page-break-inside:avoid'>
                    <td width=712 colspan=11 valign=top style='width:620.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'><br>
  <p class=MsoNormal><span lang=ES style='font-size:11.0pt;mso-bidi-font-size:
                          12.0pt;font-family:"Arial",sans-serif'>Observaciones a considerar: {{ $reporteVista->observaciones_considerar }}
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