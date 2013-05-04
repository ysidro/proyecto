        <script type="text/javascript">

            function eliminar(id) {
        if(confirm("Desea eliminar este elemento")) {
            document.location = "engine/proces/eliminar_producto.php?id="+id;
        }
    }
    
    function limpiar_carrito() {
        document.location = "engine/proces/eliminar_pedido.php";
    }
    
    function terminar() {
        document.location = "engine/proces/terminar.php";
    }


        </script>
            <?php  

                session_start();
        
        
        //Condicion de una sola linea
        $carrito = isset($_SESSION['carrito'])? $_SESSION['carrito'] : array();
        session_write_close();

         if (eresMortal()){        
            ?>
            <div id="carrito">
             

              
                <table border="1" color="#ccc">
                    <?php 

                        $subtotal = 0;
                        $itebs = 0;
                        $total = 0;
                        
                        foreach($carrito as $i => $p):
                            $precio_total = $p['cantidad'] * $p['precio'];
                            $subtotal += $precio_total;
                    ?>
                    <form action="engine/proces/modificar.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $i; ?>">
                    <tr>
                        <td><?php echo $p['serie']; ?></td>
                        <td>RD$ <?php echo $p['precio']; ?></td>
                        <td>
                            <input type="number" value="<?php echo $p['cantidad']; ?>" class="span1" name="cantidad">    
                        </td>
                        <td>RD$ <?php echo $precio_total; ?></td>
                        <td>
                            <input class="btn btn-small" type="submit" value="Modificar">
                            <input class="btn btn-small" type="button" onClick="eliminar(<?php echo $i; ?>);" value="Eliminar">
                        </td>
                    </tr>
                    </form>
                    <?php 
                        endforeach;
                        
                        $itebs = $subtotal * .18;
                        $total = $subtotal + $itebs;
                    ?>
                    <tr>
                        <td>Sub-Total</td>
                        <td colspan="4">RD$ <?php echo number_format($subtotal,2); ?></td>
                    </tr>
                    <tr>
                        <td>ITEBS 18%</td>
                        <td colspan="4">RD$ <?php echo number_format($itebs,2); ?></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td colspan="4">RD$ <?php echo number_format($total,2); ?></td>
                    </tr>
                </table>
                <br>
                <input type="button" class ="btn" onClick="limpiar_carrito();" value="Limpiar Carrito">
               <input type="button" class ="btn" onClick="terminar();" value="Terminar Pedido">         

            </div>
            <?php }

             ?>