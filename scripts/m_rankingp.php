<!-- Hola Puto -->
<?
  $q = mssql_query("SELECT TOP 50 Name, Level FROM Character Where Name != '' Order by XP DESC");
  if (mssql_num_rows($q)) {
    $i = 1;
?>
<div class="span8 well" >
	<h2>Ranking Individual</h2>
	<table class="table table-condensed table-striped">
		<tr>
			<td><strong>#</strong></td>
			<td><strong>Personaje</strong></td>
			<td><strong>Experiencia</strong></td>
			<td><strong>Nivel</strong></td>
		</tr>
		<?
          while ($r = mssql_fetch_object($q)) {
        ?>
        <tr>
          <td><?=$i?></td>
          <td><?=utf8_encode($r->Name)?></td>
          <td><?=$r->XP?></td>
          <td><?=$r->Level?></td>
        </tr>
        <?
          $i++;
          }
        ?>
	</table>
</div>