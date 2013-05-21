<?
  if (isset($_POST['register'])) {
      $usuario = $_POST['username'];
      $contrasena = $_POST['password'];
      $contrasena2 = $_POST['password2'];
      $nombre = $_POST['register'];
      $email = $_POST['name'];
      $edad = $_POST['edad'];
      $email = $_POST['email'];
      $pais = $_POST['country'];

    $q = mssql_query("SELECT * FROM Account WHERE UserID='$usuario'");
    if(mssql_num_rows($q))
    {
        
    }

    $q = mssql_query("SELECT * FROM Account WHERE Email='$email'");
    if (mssql_num_rows($q)) 
    {
        alertbox("El correo: $email esta en uso","index.php?do=registro");
    }

    if ($contrasena != $contrasena2) {
        alertbox("Las contraseñas no coinciden", "index.php?=registro");
    }

     mssql_query("INSERT INTO Account (Name, UserID, UGradeID, PGradeID, Email, RegDate) values ('$nombre','$usuario','0','0','$email',getdate())");

    $q = mssql_query("SELECT * FROM Account WHERE UserID='$usuario'");
    $r = mssql_fetch_object($q);
    $aid = $r->AID;

    mssql_query("INSERT INTO Login (AID, UserID, Password) values ('$aid','$usuario','$contrasena2')");
    alertbox("Bienvenido, $usuario","index.php");
  }
?>
<div class="span8 well" >
  <h1>Registrarse en <?=$nombregunz?></h1>
  <br><br>
  <div class="alert alert-error" id="mensaje">
    <strong>Al registrarse aceptas nuestros terminos y condiciones</strong>
  </div>

  <form class="form-horizontal" action="" method="post" id="form" autocomplete="off">
      <fieldset>
          <div class="control-group">
              <label class="control-label" for="inputError">Usuario: </label>
              <div class="controls">
                  <input type="text" name="username" maxlength="12" id="username" required>
                  <span class="help-inline">*</span>
              </div>
          </div>
          <div class="control-group">
                <label class="control-label" for="inputError">Clave: </label>
                <div class="controls">
                    <input type="password" name="password" maxlength="12" id="password" required>
                    <span class="help-inline">*</span>
                </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="inputError">Repetir Clave: </label>
                <div class="controls">
                    <input type="password" name="password2" maxlength="12" id="password2" required>
                    <span class="help-inline">*</span>
                </div>
          </div>
           <div class="control-group">
              <label class="control-label" for="inputError">Nombre: </label>
              <div class="controls">
                  <input type="text" id="name" name="name" maxlength="20"  required>
                  <span class="help-inline">*</span>
              </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputError">Edad: </label>
                <div class="controls">
                    <input type="text" onkeypress="return isNumberKey(event)" name="edad" maxlength="2" id="edad">
                    <span class="help-inline"></span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputError">Email: </label>
                <div class="controls">
                    <input type="email" id="email" name="email" maxlength="35" required>
                    <span class="help-inline">*</span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputError">Pais: </label>
                <div class="controls">
                    <input type="text" id="country" name="country" maxlength="10">
                    <span class="help-inline">Ejemplo: Venezuela, Argentina, Perú (*)</span>
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success" name="register">Registro</button>
                <button class="btn btn-warning" name="clear" type="reset">Limpiar Campos</button>
            </div>
        </fieldset>
  </form>
  <div class="alert alert-warning">
    <strong>(*) Campos Obligatorios</strong>
  </div>         
</div>
</div>
    