<html>
 <body>
  <?php  define("IVA", 0.16)?>

      <table border="1">

      <tr>
        <td><strong></strong></td>
        <td><strong>Producto</strong></td>
        <td><strong>Precio</strong></td>
      </tr>
       
      <tr>
        <td>1</td>
        <td> <?php $producto1= $_POST["producto1"];
             echo $producto1;?> </td>
        <td><?php $precio1= $_POST["precio1"];
             echo $precio1;?> </td>
      </tr>
       
        
      <tr>
        <td>2</td>
        <td> <?php $producto2= $_POST["producto2"];
             echo $producto2;?> </td>
        <td><?php $precio2= $_POST["precio2"];
             echo $precio2;?> </td>
      </tr>

        
      <tr>
        <td>3</td>
        <td> <?php $producto3= $_POST["producto3"];
             echo $producto3;?> </td>
        <td><?php $precio3= $_POST["precio3"];
             echo $precio3;?> </td>
      </tr>


      <tr>
        <td></td>
        <td>Subtotal</td>
        <td><?php $Subtotal = $precio1+$precio2+$precio3;
             echo $Subtotal; ?></td>
      </tr>


      <tr>
        <td></td>
        <td>IVA</td>
        <td><?php $iva=$Subtotal*IVA;
              echo $iva; ?> </td>
      </tr>

      <tr>
        <td></td>
        <td>Total</td>
        <td><?php $Total= $Subtotal+$iva;
              echo $Total; ?> </td>
      </tr>

      </table>

  </form>
 </body>
</html>