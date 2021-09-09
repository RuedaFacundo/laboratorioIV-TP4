# Laboratorio de Programación IV - TP 4

1. Generar una mini arquitectura de carpetas donde agrupar cada uno de los archivos, sean de procesamiento, de vista o de modelo a medida que se van generando.  

2. Utilizando las siguientes clases:
  - Person (id, firstName, lastName, dni, email) (abstract)
  - Client (userName, password)
  - Bill (date, type y number)
  - Item (name, description, price y quantity)
  - IActions (add(), remove(), getAll()) (interface)

Info: Cada una de las clases debe tener sus propiedades y métodos necesarios.

3. Implementar correctamente el index.php dado para loguearse con el nombre de usuario y la contraseña correctos. [Post]
[UserName: Cosme Fulanito - Password: strongPassword! ]
 - Validar que dichas credenciales sean válidas para poder continuar, de lo contrario dar un mensaje de error y permanecer en el Formulario de inicio. (investigar redirección)

4. Luego de haber ingresado en el sitio con las credenciales correctas, se deberá implementar el formulario add-bill.php que permitirá ingresar los datos de la cabecera de la Factura con las validaciones correctas. [Get]
  - Validar que la fecha sea correcta y no futura.
  - El tipo y el Número de factura deben ser requeridos.

5. Una vez validados los campos, se deberá procesar e imprimir todos los datos junto con la lista de items ya otorgadas por el sistema. A fin de imprimir correctamente la tabla como se indica en bill-content-php con los campos adecuados y en el formato correcto.
  - Se deberán mostrar los sub-totales y total se calculará desde el botón al final de la tabla utilizando los métodos desarrollados.
  - Los items de la factura fueron proporcionados para procesar, generar los objetos necesarios y ;listar correctamente. La información se nos proporciono de la siguiente manera:
<pre><code>$array = “pincel fino de 2/3, pincel de cerdas finas para acuarela, 120.00, 6,
pintura fluor 1L, pintura warner fluo, 400.00, 3,
plato de mezcla, plato plástico de mezcla con refuerzo anti caída, 200.00, 1,
pincel común 1,2, pincel fabber cerda común para tempera, 120.00, 5,
rodillo grueso 3/4, rodillo rugoso de expesor para exterior, 95.00, 2,
kit de acuarelas, combo de acuarelas color pastel, 770.00, 2 “ </pre></code>

IMPORTANTE: Se les adjuntan los archivos necesarios con los que deberán trabajar y validar que las rutas y encarpetados sean los correctos para que todo se vea correctamente.
  - No es necesario generar más vistas de las proporcionadas, solo archivos de procesamiento, en caso de ser necesarios.
  - Utilice todo lo aprendido hasta el momento para completar de forma correcta con lo pedido en los incisos.
