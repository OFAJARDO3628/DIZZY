<footer>
                    <h2 class="text-center"></h2>
                    <p class="text-center" style="font-size: 10px">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada velit nisl, id consequat ex pulvinar et.
                        Aenean vitae massa erat. 
                        Quisque sodales varius varius. Fusce non ex suscipit, scelerisque libero et, congue felis. 
                    </p>
                    <br>
                    <p class="text-center" style="font-size: 14px">
                        <?php
                        if(isset($num_sesiones)){
                            echo "Número de visitas: <br><span style='font-size:16px'><b>".str_pad($num_sesiones, 5, "0", STR_PAD_LEFT)."</b></span>";
                        }
                        ?>
                        
                    </p>
                </footer>
            </div> <!-- cierre <div id="container">-->
        </div> <!-- cierre <div id="contenido">-->
    </body>
</html>
