<?php
session_start();

if (isset($_SESSION["logueado"]) && $_SESSION["logueado"] == TRUE) {
  # code...
} else {
  echo "Esta pagina es solo para usuarios registrados.<br>";
  header("Location: ../../admin/");
}

include '../../modulos/conexion/conexion.php';     
$res = 'SELECT * FROM admin';
$result = $mysqli->query($res);
/*$row=mysqli_fetch_array($result,MYSQLI_ASSOC);*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> </meta>
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
    </meta>
    <title>Enova tecnologia</title>

    <!-- Llamando a la libreria de Bootstrap 4 -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Llamando a los Estilos generales -->
    <link href="../../assets/css/indexStyle.css" rel="stylesheet" type="text/css">
    <!-- llamando a los iconos -->
    <link href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" rel="stylesheet"> 
    <!-- llamando a los funentes -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
    <!-- llamando a los iconos -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/fontello.css">
    <!--Estilo formulario cargue de informacion-->
    <link rel="stylesheet" href="../../assets/css/info_grupo.css">
    <!--Fuente google-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet"> 

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-faded fixed-top">
        <a class="navbar-brand" href="../uploadInfo/">
            <h4>Enova Tecnologia</h4>

        </a>
          <button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNavDropdown" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
        </button>
        <style>
          .navbar-toggler-icon{font-size: 15px;}
          button{background-color:  #fff!important;}
        </style>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto nav-pills">
                <li class="nav-item" id="navbar-nav">
                  <span class="nav-link" style="font-size: 14px; color: #fff; -webkit-user-select: none;">Bienvenido: <?php echo $row['usuario']; ?></span>
                </li>
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="../../admin/logout.php">Salir</a>
                </li>
            </ul>
        </div>
    </nav>

   
   <div class="container-fluid">
        <form action="" class="formulario">
            <fieldset class="scheduler-border" style="overflow: auto;">
             <legend class="scheduler-border"></legend>
            <div class="row">

              <div class="col-md-12 text-center">
                  <h4 class="titulo">Informacion de Los Creditos Solicitados</h4>              
              </div>

             <div class="col-md-12 text-right">
                    <div class="form-group">

                        <a href="crear_credito.php" class="btn btn-primary" style="font-weight: bold; font-size: 13px">Agregar<span class="icon-plus" style="font-size: 12px;"></span></a>

                        <a href="../../modulos/plantillas/reporte_credito.php" class="btn btn-success" style="font-weight: bold; font-size: 13px">Reporte<span class="icon-print" style="font-size: 12px;"></span></a>
                    </div>
                </div>       
              
      <table id="example" class="table table-striped table-bordered" style="width:100%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>VALOR</th>
                <th>ARTICULO</th>
                <th>FECHA</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>CEDULA</th>
                <th>ESTADO</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            $tab = 'SELECT id,valor,articulo,fecha,nombre,apellido,cedula,permisoCont FROM creditos';
            $resultt = $mysqli->query($tab);

            while($tab2 = $resultt->fetch_assoc()){
              echo "<tr>";
              echo "<td>".$tab2['id']."</td>";
              echo "<td>".$tab2['valor']."</td>";
              echo "<td>".$tab2['articulo']."</td>";
              echo "<td>".$tab2['fecha']."</td>";
              echo "<td>".$tab2['nombre']."</td>";
              echo "<td>".$tab2['apellido']."</td>";
              echo "<td>".$tab2['cedula']."</td>";
              echo "<td>".$tab2['permisoCont']."</td>";
              echo '<th><a style="margin-right: 3px;" href="../../uploadInfo/creditos/actualizar_credito2.php?id='.$tab2['id'].'" class="btn btn-success fa fa-edit"></a>';  
              echo '<a href="#" class="btn btn-danger fa fa-trash" onclick="preguntar('.$tab2['id'].');"></a></th>';
              echo '<th><a style="margin-right: 3px;" href="../../modulos/plantillas/reporte_credito.php?id='.$tab2['id'].'" class="btn btn-success fa fa-edit"></a>'; 
              echo "</tr>";
            }
          ?>
            
        </tbody>
        
       
    </table>

    

            </div>
            
        </fieldset>
        
        </form>

   </div>

    <!-- Codigo JS -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <!--=======================  FUNCION ELIMINAR  ===========================a-->
    <script>
      function preguntar(id){
        if (confirm('¿Estas seguro que desea eliminar el registro con id=' + id + '?')) {
          window.location.href = "eliminar_credito.php?id=" + id;
        }
      }
    </script>
    <!--=====================================================================================-->


     <script>
      $(document).ready(function() {
        var español = {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
};
      $('#example').DataTable({
        "autoWidth": false,      
        "language": español
      });
      } );
    </script>    
  
    <script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/js/slider_home/slider_home.js" type="text/javascript"></script>
</body>

</html>