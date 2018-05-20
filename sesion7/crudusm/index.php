<?php 
	require_once("clases/alumnos.php");
	$usuario=new usuarios();
	$u=$usuario->getDatos();
	//print_r($u);
	//exit;
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>..:: Listado de Alumnos ::..</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<?php
                if(isset($_GET["m"])){
                    switch($_GET["m"])
                    {
                        case '1':
                            ?>
                            <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                                El registro se ha ingresado exitosamente
                            </div>
                    <?php
                    	break;
                    	case '2'
                     ?>
                     	<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                                El registro se ha actualizado exitosamente
                            </div>
                    <?php
                        break;
                        case '3'
                    ?>
                    	<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                                El registro ha sido eliminado exitosamente
                            </div>
                    <?php
                      }
                	}
                    ?>
				<h3>Listado de Alumnos del V Semestre</h3>
			</div>
			<div class="panel-body">
				<p>
					<a href="agregar.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a>
				</p>
				<table class="table table-bordered">	
						<thead>	
							<tr class="info">
								<th>ID</th>
								<th>Nombres</th>
								<th>Email</th>
								<th>Telefono</th>
								<th>Fecha</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								foreach($u as $dato) {
							 ?>
							 <tr>
							 	<td><?php echo $dato->id ?></td>
							 	<td><?php echo $dato->nombre ?></td>
							 	<td><?php echo $dato->correo ?></td>
							 	<td><?php echo $dato->telefono ?></td>
							 	<td><?php echo Helpers::fecha($dato->fecha) ?></td>
							 	<td>
							 		<a href="editar.php?id=<?php echo $dato->id ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

							 		<a href="javascript:void(0);"onclick="eliminar('eliminar.php?id=<?php echo $dato->id?>');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							 		
							 	</td>
							 </tr>
							 <?php 
							 	} 
							 ?>
						</tbody>
				</table>
			</div>
		</div>
	</div>
	 <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/funciones.js"></script>
</body>
</html>