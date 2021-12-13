<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">
    body{
      margin: 0;
      padding: 25px;
      font-family: "Verdana", serif;
      line-height: 1.5;
    }    
    h3{
      text-align: right;
      position: relative;
      top: -70px;
    }
    .imagenes{
      position: relative;
      top: -90px;
    }
    .imagen{
      padding: 0px 60px 0px 40px;
    }
    .dependencia{
      font-weight: bold;
    }
    .centrado{
      padding: 30px 0px 10px 0px;
      text-align: center;
      font-weight: bold;
    }
    .texto{
      padding: 40px 0px 30px 0px;
      text-indent: 40px;
      text-align: justify;
    }
  </style>
  <title>Constancia</title>
</head>
<body>
    
  <table class="imagenes">
    <tbody>
    <tr>
      <td class="imagen">
      <img src="{{ base_path() }}/public/img/sep.png" alt="" width="30%" > 
      </td>
      
      <td class="imagen">
      <img src="{{ base_path() }}/public/img/tienditas.png" alt="" width="35%" > 
      </td>
    </tr>
    </tbody>
  </table>

  
  <h3>ASUNTO: Constancia de Ingresos</h3>
  <p class="dependencia">
    DIRECCIÓN FINANCIERA <br>    
    TIENDITAS <br>
    A QUIEN CORRESPONDA:
  </p>
  <p class="centrado">HACE CONSTAR:</p>
  <p class="texto">
  Por este medio que el (la) señor (ra) {{Auth::user()->empleado->nombre}}, quien se identifica con el RFC {{Auth::user()->empleado->rfc}},
  trabaja en esta Institución desde {{Auth::user()->empleado->fecha_de_entrada}} a la fecha, ocupando actualmente el puesto de Empleado,
  devengando un sueldo mensual de $ {{Auth::user()->empleado->salariomn}} pesos mexicanos.<br><br>
  De la verificación efectuada, se deja constancia de los ingresos arriba indicados y que representa lo percibido en promedio mensual. 
  Se extiende la presente solicitud en Morelia, Michoacán, a @php date_default_timezone_get() @endphp {{date('d')}} de {{date('M')}} del {{date('Y')}}.
  </p>
  <p class="centrado">ATENTAMENTE <br><br><br>
    Juan Fernando García Martínez <br>
    Jefe de Dirección Financiera
  </p>

  
</body>
</html>