<?php
$cmbFood="";
$cmbDrink="";


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Menu</title>
  </head>
  <body>
    <h1>MENU</h1>
    <form name="form1" method="post" action="Menulibreria.php">

    <table width="99" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td>
    <select name="food">
    <option value="Hamburguesa Normal"<?php echo $cmbFood==12 ; ?>>Hamburguesa Normal L.40.00</option>
    <option value="Hamburguesa mediana"<?php echo $cmbFood==11 ; ?>>Hamburguesa mediana L.50.00</option>
    <option value="Hamburguesa Supreme(carne de 1ra)"<?php echo $cmbFood==20 ; ?> >Hamburguesa Supreme(carne de 1ra) L.60.00</option>
    </select>
    <select name="drink">
    <option value="soda"<?php echo $cmbDrink==2 ; ?> >Coca-cola L.25.00</option>
    <option value="soda"<?php echo $cmbDrink==3 ; ?>>Pepsi L.25.00</option>
    <option value="Refresco natural"<?php echo $cmbDrink==2 ; ?>>Naranja L.20.00</option>
    </select>
    </td>
    </tr>
    <tr>
    <td>
    <input type="submit" name="Ordenar" value="Ordenar">

    </td>
    </tr>
    </table>
    <br/>


    </form>

  </body>
</html>
