<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <meta charset="utf-8">
    
    
    <script>
    
            $(function(){
                    
                $("#aceptar")
                
                    .one("click",function(){
                            alert("ACEPTASTE");
                    });
            });

    </script>
    
</head>
<body>

    <div data-role="page" id="index" data-theme="b">
        <div data-role="header" data-position="fixed">
            <h1>Sistemas Díaz</h1>
        </div>
        <div data-role="main" class="ui-content">
                <p style="color:#ffcc00">Servicios</p><br/>
                <ul data-role="listview">
                        <li>diseño web</li>
                        <li>configuración de plataformas</li>
                        <li>mantenimiento</li>
                        <li>fotografía</li>
                </ul><p/><br/>
                <div data-role="controlgroup" data-type="horizontal">
                    <a href="#mas" data-transition="slide" class="ui-btn ui-btn-inline ui-corner-all">ver más</a>
                </div>
        </div>
        <div data-role="footer" data-position="fixed">
            <h1>daniel diaz | www.daniel-diaz.com.ar</h1>
        </div>
    </div>

    
    
    <div data-role="page" id="mas">
        <div data-role="header">
            <h1>contacto</h1>
        </div>
        <div data-role="main" class="ui-content">
           
               <?php echo "Hola Mundo";?><br/>
             <div data-role="controlgroup" data-type="vertical">
                        <a href="#" class="ui-btn">Usuarios</a>
                        <a href="#" class="ui-btn">Procesos</a>
                        <a href="#" class="ui-btn">Recursos</a>
            </div>
            
            <a href="#index" data-transition="slidedown" style="text-decoration:none">
            <button class="ui-btn ui-btn-inline ui-btn-b ui-icon-search ui-btn-icon-left">UNSE</button></a>
            <a href="#index" data-transition="slide" data-direction="reverse">ver más</a>
        </div>
        <div data-role="footer">
            <h1>daniel diaz | www.daniel-diaz.com.ar</h1>
        </div>
    </div>
    
    
    
    
    

</body>
</html>