<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sistema de inventario -  HulkStore</title>
	<link rel="stylesheet" href="/HulkStore/styles/style.css">
	<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</head>
<body class="dashboard-page">

	<div class="menu">
			
			<div>
				<figure>
					<img src="https://www.todo1services.com/hs-fs/hubfs/Logo-TODO-1_-2021-1.png?width=600&name=Logo-TODO-1_-2021-1.png" class="login__img" alt="logo" width="80%" style="margin:25px;">
				</figure>
			</div>
      	<div class="main-menu">
	        <nav>
	          <a href="/HulkStore/init/list.php">Productos</a>
	    	</nav>	
    	</div>

	</div> <!--- End menu--->

	<div class="dataform">
		<header class="top-header">
			<a href="https://todo1services.com" target="_blank">HULK STORE site</a>
			<div></div>
			<div></div>
			<div>
	      	<a href="outsession.php"><div class="btn btn-danger">Salir</div></a>
			</div>
		</header>
		<div class="product-list">
			<h1>Productos</h1>
			<a href="#Modal">Añadir nuevo producto</a>
			<div id="Modal" class="modal">
			  <div class="modal__contenido">
			    <a href="#">X</a>
			    <h2>Mi primer Modal</h2>
			    <p>Este es mi primera ventana modal sin utilizar Js</p>
			  </div>  
			</div>
			<table class="product-list__table">
		        <thead class="product-list__table-header">
		            <tr>
		                <th>Producto</th>
		                <th>En stock</th>
		                <th>Kardex</th>
		            </tr>    
		        </thead>
		        <tbody class="product-list__table-body">
			        <tr>
			            <td>Vaso iron man</td>
			            <td>20</td>
			            <td>
			            	<a href="kardex.php" title="Ver Kardex" style="background: blue; font-size: 12px; padding: 7.5px; color: #fff;"><!-- href=kardex.php?id=<?php //echo $rs['id']; ?>-->
							<!--<ion-icon name="create-outline"></ion-icon>--> Ver kardex </a>
						</td>
			    	</tr>
			    	<tr>
			            <td>Camiseta superman</td>
			            <td>50</td>
			            <td>
			            	<a href="kardex.php" title="Ver Kardex" style="background: blue; font-size: 12px; padding: 7.5px; color: #fff;"><!-- href=kardex.php?id=<?php //echo $rs['id']; ?>-->
							<!--<ion-icon name="create-outline"></ion-icon>--> Ver kardex </a>
						</td>
			    	</tr>
		    	</tbody>
		    </table>
		</div>
	</div>
</body></html>