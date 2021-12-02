<HTML>

    <HEAD>
        <title>Parqueadero</title>
        <link REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
    </HEAD>
    
    <BODY bgcolor="slategray">
        <h1><a>
            Sistema de parquedero Autos Colombia</a></h1> 
        <div class="form">
            <form action="Regis_Bahia.php" method="post"> 
        Hora ingreso: <input type="time" name="hora" class="btn">
         
          <p>id Bahia:
            <input class="btn" type=»text» readonly=»readonly» placeholder="22" />
            <p>id Vehiculo:
                <input class="btn" type=»text» readonly=»readonly» placeholder="22" />
            </p>
        </div>
        <div class="padre">
            <button class="btn1" style="margin: 10px" type="submit" value="Registrar" onClick="alert(' ingreso registrado')">Registrar</button>
          
        <a href="Factura.php">
        <input class="btn1" type="submit" value="Siguiente">
         </a>

         </form>
         
    </BODY>
    
    </HTML>