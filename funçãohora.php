<?php
        //determinar timezone

        date_default_timezone_set('Brazil/East');
        $_agora = getdate();
            
        // criar  elementos
        
        $_segundo       = $_agora["seconds"];
        $_minuto        = $_agora["minutes"];
        $_hora          = $_agora["hours"];

        $_dia           = $_agora["mday"];
        $_mes           = $_agora["mon"];
        $_ano           = $_agora["year"];

        //mostrar na tela
        $hora=$_hora . ":" . $_minuto . ":" . $_segundo;

        $dia=$_dia . "/" . $_mes . "/" . $_ano;

        print_r($dia.' - '.$hora);
          
?>