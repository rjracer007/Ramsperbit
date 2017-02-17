<?php


class Empleado extends Controller
{

	function __construct()
	{
		// $this->mdlInsumo = $this->loadModel("mdlInsumo");
	}

	function index()
	{
		// $insumo = $this->mdlInsumo->listar();
		require APP. 'view/_templates/header.php';
		require APP. 'view/empleado/listarEmpleado.php';
		require APP. 'view/_templates/footer.php';
	}
}
 ?>
