<?
  $q = mssql_query("SELECT TOP 5 * FROM Clan WHERE Name != '' Order by Point DESC");
  if (mssql_num_rows($q)) {
    $i = 1;
?>
<div class="well sidebar-nav">
  <ul class="nav nav-list">
    <li class="nav-header">Ranking Player</li>
    <table class="table table-condensed table-striped">
      <thead>
        <tr>
          <td><strong>#</strong></td>
          <td><strong>Clan</strong></td>
          <td><strong>Puntos</strong></td>
        </tr>
      </thead>
      <tbody>
        <?
          while ($r = mssql_fetch_object($q)) {
        ?>
        <tr>
          <td><?=$i?></td>
          <td><?=utf8_encode($r->Name)?></td>
          <td><?=$r->Point?></td>
        </tr>
        <?
          $i++;
          }
        ?>
      </tbody>
    </table>  
  </ul>
</div><!--/.well -->
<?
  }else{
?>

<div class="well sidebar-nav">
  <ul class="nav nav-list">
    <li class="nav-header">Ranking Player</li>
    <p>No hay personajes</p>
  </ul>
</div>

<?
}
?>