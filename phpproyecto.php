<html>
    <title>actividad lunes en php alvaro zarate  </title>
<head>
    <br>
    <h1 align="center ">Registro de incidencias pagina transmilenio </h1>
</head>
<body>
<body background="https://www.wallpapertip.com/wmimgs/7-79724_road-landscape-4k-hd-desktop-wallpaper-for.jpg" >
    <!--  a continuacion crearemos un formulario para el ingreso de datos ¡-->
</body>
    <br>
    <form action="guardar.php" method="post" >
    <p>primer nombre <input type="text" name = "nombre"></p>
    <!--Aqui se empiezan a crear los capos que se buscan colocar en el documento -->
    <p>segundo  nombre <input type="text" name = "nombre2"></p>
    <!--la estructura esta definida por el nombre de la casilla, el tipo de input  y el nombre de la casilla -->
    <p>primer apellido <input type="text" name ="apellido"></p>
    <p>segundo apellido <input type="text" name ="apellido2"></p>
    <p>Sede de operacion segun numero <input type="text" name ="sede"></p>
    <i>si el portal de operacion es portal  suba entonces escriba 1 <br></i>
    <i> si el portal de operacion es portal norte entonces escriba 2<br></i>
    <i> si el portal de operacion es portal 80 entonces escriba 3 <br></i>
    <i> si el portal de operacion es portal Las americas entonces escriba 4<br></i>
    <i> si el portal de operacion es portal sur  entonces escriba 5<br></i>
    <i> si el portal de operacion es portal tunal entonces escriba 6<br></i>
    <i> si el portal de operacion es portal usme entonces escriba 7<br></i>
    <i>si el portal de operacion es portal 20 de julio entonces escriba 8 <br></i>
    <i>si el portal de operacion es portal dorado entonces escriba 9 <br></i>
    <p>fecha de nacimiento <input type ="date" name ="fechan"></p>
    <!--este formato de aqui se manejan a partir de el empleo de date, que corresponde al de fecha -->
    <p>Cargo que ocupa <input type ="text" name="Cargo"></p>
    <p>Telefono empresarial o personal <input type ="int" name="tel"></p>
    <p>correo empresarial <input type="text" name="correo"></p>
    <p>Fecha de la incidencia <input type ="date" name="fecha"></p>
    <p>Describa la incidencia o fallo correspondiente <input type ="text" name ="descripcion"></p>
    <h2>correspondiendo a  el precio del pasaje en transmilenio a dio de hoy, se utilizara el valor de  $2.500 pesos </h2>
    <p>Digite la cantidad de pasajes diarios que debe pagar en trasnmilenio <input type="text" name ="n1"></p>    
    <p>Digite la cantidad de dias a la semana que utiliza el servicio<input type="text" name ="n2"></p>
        <p><input type="submit"  value="Calcular"></p>  
</form>     
</html>

