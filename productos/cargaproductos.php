<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form action="recibirproductos.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="200" border="1">
    <tr>
      <td colspan="2" align="center">Ingresar productos a Stock</td>
    </tr>
    <tr>
      <td>Imagen:</td>
      <td><label for="imagen"></label>
      <input type="file" name="imagen" id="imagen"></td>
    </tr>
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre"></label>
      <input type="text" name="nombre" id="nombre"></td>
    </tr>
    <tr>
      <td>Descripción:</td>
      <td><label for="descripcion"></label>
      <input type="text" name="descripcion" id="descripcion"></td>
    </tr>
    <tr>
      <td>Precio:</td>
      <td><label for="precio"></label>
      <input type="text" name="precio" id="precio"></td>
    </tr>
    <tr>
      <td>EnStock:</td>
      <td><label for="EnStock"></label>
      <input type="text" name="EnStock" id="EnStock"></td>
    </tr>
    <tr>
      <td>Fecha</td>
      <td><label for="fecha"></label>
      <input type="text" name="fecha" id="fecha" value="<?php echo date("d-m-Y");?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" name="button" id="button" value="Submit"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
