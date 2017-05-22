<?php include('cabeza.php');?>
<section>
<h2>Profesores</h2>
<?php
$academicos = array_map('str_getcsv', file('libs/academicos.csv'));
array_walk($academicos, function(&$a) use ($academicos) {$a = array_combine($academicos[0], $a);});
array_shift($academicos);
$all = count($academicos);
?>
<h4>1. Total de profesores que aportan a la carrera de diseño, y sus categorías académicas</h4>

<table class="table table-condensed">
  <tr>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Rango</th>

  </tr>
<?php for($a=0; $a < $all; $a++){?>
  <tr>
    <td><?php echo$academicos[$a]["Nombres"]?></td>
    <td><?php echo$academicos[$a]["Apellidos"]?></td>
    <td><?php echo$academicos[$a]["Rango"]?></td>

  </tr>
<?php };?>
</table>

<img src="images/totalacademicos.png" class="img-responsive">

<p>Grafico generado en <a href="http://app.rawgraphs.io/">http://app.rawgraphs.io/</a> (1pto.)</p>


<h4>2. Académicos en carrera ordinaria, rangos y horas de trabajo</h4>

<table class="table table-condensed">
  <tr>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Rango</th>
    <th>Horas</th>

  </tr>
<?php for($a=0; $a < $all; $a++){?>
  <tr>
    <td><?php echo$academicos[$a]["Nombres"]?></td>
    <td><?php echo$academicos[$a]["Apellidos"]?></td>
    <td><?php echo$academicos[$a]["Rango"]?></td>
    <td><?php echo$academicos[$a]["Horas"]?></td>

  </tr>
<?php };?>
</table>


<p>Reemplace este párrafo con un gráfico que mejor represente los datos de la tabla, y permita una comprensión inmediata de la cantidad de académicos en categoría ordinaria, sus rangos y horas contratadas (1 pto.)</p>
<p>Debe usar un gráfico generado con <a href="http://app.rawgraphs.io/">http://app.rawgraphs.io/</a> (1pto.)</p>
<h4>3. Académicos en carrera docente, rangos y horas de trabajo</h4>
<p>Reemplace este párrafo con una tabla que presente los datos correspondientes. La tabla debe ser generada mediante consulta a documento CSV o JSON, con PHP (1 pto.)</p>
<p>Reemplace este párrafo con un gráfico que mejor represente los datos de la tabla, y permita una comprensión inmediata de la cantidad de académicos en categoría docente, sus rangos y horas contratadas (1 pto.)</p>
<p>Debe usar un gráfico generado con <a href="http://app.rawgraphs.io/">http://app.rawgraphs.io/</a> (1pto.)</p>
<h4>4. Grados académicos</h4>
<p>Reemplace este párrafo con una tabla que presente a todos los académicos con rango de profesor (carrera ordinaria, docente o adjunta). La tabla debe ser generada mediante consulta a documento CSV o JSON, con PHP (1 pto.)</p>
<p>Reemplace este párrafo con un gráfico que presente a los profesores (excluya intructores, ayudantes y docentes invitados). Conecte a los profesores con sus grados académicos (licenciado, magíster, doctor, post-doctorado), y luego conecte el grado con su rango (1 pto.)</p>
<p>Puede usar un gráfico generado con <a href="http://app.rawgraphs.io/">http://app.rawgraphs.io/</a>, p5.js u otra herramientas digital (1pto.)</p>
</section>
<?php include('pie.php');?>
