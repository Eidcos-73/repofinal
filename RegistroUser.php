<HTML>

<HEAD>
  <title>Parqueadero</title>
  <link REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
</HEAD>

<BODY bgcolor="slategray">
  <div class="color">
    <h1><a>
        Sistema de parquedero Autos Colombia</a></h1>
    
      <form action="regis_user.php" method="post" class="form">
        <p>Nombre:
          <input class="btn" type="text" name="Nombre" size="40" placeholder="Escriba su nombre">
        </p>
        <p>Apellido:
          <input class="btn" type="text" name="Apellido" size="40" placeholder="Escriba sus dos apellidos">
        </p>
        <p>Documento:
          <input class="btn" type="text" name="Documento" size="40" placeholder="Escriba su numero documento">
        </p>
        
    </div>
    <div class="padre">
    <a href="RegistroCarro.php">
      <button class="btn1" name="Registrar" style="margin: 10px" type="submit" value="Registrar"
      >Registrar</button>
      </a>
      <a href="RegistroCarro.php">
        <input class="btn1" type="submit" value="Siguiente">
      </a>
      </form>
    </div>
  </div>
  <?php
  include("conexion.php");
  ?>
</BODY>

</HTML>