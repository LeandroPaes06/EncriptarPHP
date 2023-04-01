<?php

sessão_inicio();
if (!empty( $ _SESSION [ 'id' ])){
    echo " Olá ". $ _SESSION [ 'nome' ]." , seja bem-vindo <br> ";
    echo " <a href='sair.php'>Sair<a/> ";
} senão {
    $ _SESSION [ 'msg' ] = " Área restrita ";
    header(" Localização: login.php ");
}

?>
