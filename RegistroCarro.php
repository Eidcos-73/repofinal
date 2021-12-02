<HTML>

    <HEAD>
        <title>Parqueadero</title>
        <link REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
    </HEAD>
    
    <BODY bgcolor="slategray">
        <h1><a>
            Sistema de parquedero Autos Colombia</a></h1> 
        
        <form action="regis_carro.php" method="post" class="form">
        <p>Placa:
            <input class="btn" type="text" name="Placa" size="40" placeholder="Escriba su placa">
          </p>
          <p>Marca:
            <input class="btn" type="text" name="Marca" size="40" placeholder="Escriba su marca de carro">
          </p>
          <p>id:
            <input class="btn" name="id" type=»text» readonly=»readonly»/>
        </p>
        </div>

       <div class="padre">
        <button class="btn1" style="margin: 10px" type="submit" value="Registrar">Registrar</button>
      
        <a href="Bahia.php">
        <input class="btn1" type="submit" value="Siguiente">
         </a>
      
      </form>
      <?php
      include("conexion.php");
     ?>
    </BODY>
    
    </HTML>