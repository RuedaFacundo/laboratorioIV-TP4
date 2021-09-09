<?php
     $array = array
     (
     array("pincel fino de 2/3", "pincel de cerdas finas para acuarela", 120.00, 6),
     array("pintura fluor 1L", "pintura warner fluo", 400.00, 3),
     array("plato de mezcla", "plato plástico de mezcla con refuerzo anti caída", 200.00, 1),
     array("pincel común 1,2", "pincel fabber cerda común para tempera", 120.00, 5),
     array("rodillo grueso 3/4", "rodillo rugoso de expesor para exterior", 95.00, 2),
     array("kit de acuarelas", "combo de acuarelas color pastel", 770.00, 2)
     );
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Detalles de Factura</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Nombre</th>
                         <th>Descripcion</th>
                         <th>Precio</th>
                         <th>Cantidad</th>
                         <th>Sub-total</th>
                    </thead>
                    <tbody>
                         <tr>
                              <td><?php echo $array[0][0] ?></td>
                              <td><?php echo $array[0][1] ?></td>
                              <td><?php echo $array[0][2] ?></td>
                              <td><?php echo $array[0][3] ?></td>
                              <td><?php echo ($array[0][2] * $array[0][3]) ?></td>
                         </tr>
                         <tr>
                              <td><?php echo $array[1][0] ?></td>
                              <td><?php echo $array[1][1] ?></td>
                              <td><?php echo $array[1][2] ?></td>
                              <td><?php echo $array[1][3] ?></td>
                              <td><?php echo ($array[1][2] * $array[1][3]) ?></td>
                         </tr>
                         <tr>
                              <td><?php echo $array[2][0] ?></td>
                              <td><?php echo $array[2][1] ?></td>
                              <td><?php echo $array[2][2] ?></td>
                              <td><?php echo $array[2][3] ?></td>
                              <td><?php echo ($array[2][2] * $array[2][3]) ?></td>
                         </tr>
                         <tr>
                              <td><?php echo $array[3][0] ?></td>
                              <td><?php echo $array[3][1] ?></td>
                              <td><?php echo $array[3][2] ?></td>
                              <td><?php echo $array[3][3] ?></td>
                              <td><?php echo ($array[3][2] * $array[3][3]) ?></td>
                         </tr>
                         <tr>
                              <td><?php echo $array[4][0] ?></td>
                              <td><?php echo $array[4][1] ?></td>
                              <td><?php echo $array[4][2] ?></td>
                              <td><?php echo $array[4][3] ?></td>
                              <td><?php echo ($array[4][2] * $array[4][3]) ?></td>
                         </tr>
                         <tr>
                              <td><?php echo $array[5][0] ?></td>
                              <td><?php echo $array[5][1] ?></td>
                              <td><?php echo $array[5][2] ?></td>
                              <td><?php echo $array[5][3] ?></td>
                              <td><?php echo ($array[5][2] * $array[5][3]) ?></td>
                         </tr>
                    </tbody>
               </table>
          </div>
     </section>

     <section id="eliminar">
          <div class="container">
               
               <form action="" method="" class="form-inline bg-light-alpha p-3">
                    <div class="form-group text-white">
                         <label for="">TOTAL</label>
                         <input type="text" value="" class="form-control ml-3" disabled>
                    </div>
                    <button type="submit" name="button" class="btn btn-danger ml-3">Calcular Total</button>
               </form>
          </div>
     </section>

</main>

