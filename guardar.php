<title>guardar</title>
<header>
    <h1>Aqui se almacenan los datos de las inserciones del documento php proyecto</h1>
    <!--La intencion con este otro docuemnto es almacenar los datos que se registra en el documento en lazado, para ello se emplea este documento enlazado 
en el apartado de "form action"  -->
    <br>
</header>
<body>
<body background="https://www.wallpapertip.com/wmimgs/7-79724_road-landscape-4k-hd-desktop-wallpaper-for.jpg" >
    <?php
  //se utilizan las variables con la intencion de determinar las variables y  luego mostrarlas. 
  $nombre = $_POST['nombre'] ; 
  $nombre2 = $_POST['nombre2'] ;
    $apellido = $_POST['apellido'] ; 
    $apellido2 = $_POST['apellido2'] ;
    $fechan = $_POST['fechan'] ; 
    $Cargo = $_POST['Cargo'] ;
    $tel = $_POST['tel'] ;
    $correo = $_POST['correo'] ;
    $fecha = $_POST['fecha'] ;
    $descripcion  =$_POST['descripcion'];  
    echo "Primer Nombre: " . $nombre . "<br/>";
    echo " Segundo Nombre: " . $nombre2 . "<br/>";
    echo "Primer Apellido: " . $apellido . "<br/>";
    echo "Segundo Apellido: " . $apellido2 . "<br/>";
    echo "fecha de nacimiento: " . $fechan . "<br/>";
    echo "Cargo en la empresa: " . $Cargo . "<br/>";
    echo "telefono empresarial o personal : " . $tel . "<br/>";
    echo "correo empresarial: " . $correo . "<br/>";
    echo "fecha: " . $fecha . "<br/>";
    echo "descripcion de la incidencia: " . $descripcion . "<br/>";
// utilizar el si 
$sede = $_POST['sede'] ; 
// utilizar el si, con el fin de que dependiendo del numero que se registre, se asigne un portal como estacion de trabajo.
if ($sede=="1") 
    {echo "portal suba </br>" ;}  
    elseif ($sede=="2")
        {echo "portal norte  </br>" ;} 
    elseif ($sede=="3") 
        {echo "portal Portal 80 </br>" ;} 
    elseif ($sede=="4") 
        {echo "portal Las americas </br>" ;} 
    elseif ($sede=="5") 
        {echo "portal sur </br>";} 
    elseif ($sede=="6") 
        {echo "portal tunal </br>";} 
    elseif ($sede=="7") 
        {echo "portal usme </br>";} 
    elseif ($sede=="8") 
        {echo "portal 20 de julio </br>";} 
    elseif ($sede=="9")
        {echo "portal dorado </br>";} 

    //matematica
    // definir las variables, almacenandolas, puesto que estas se llaman del documento phpproyecto
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $pasaje = 2500;
    /*AQUI SE OPERAN LOS VALORES DEL PASAJE MULTIPLICADO POR EL NUEMRO DE PASAJES DIARIOS,
    Y A ESTE RESULTADO SE MULTIPLICA EL NUMERO DE VECES QUE SE HACE SEMENALMENTE */
        $semana=$pasaje*$n1*$n2 ; 
        $mes= $semana*4  ;
            "<br>";
                echo "el valor de los pasajes semanalmente corresponde a " . $semana . " Pesos semanales <br>";
            "<br>";
                echo "el valor de los pasajesmensualmente  corresponde a " . $mes . " Pesos al mes <br>";
    ?>
</body>
