<?php

sessão_inicio();
unset( $ _SESSION [ 'id' ], $ _SESSION [ 'nome' ], $ _SESSION [ 'email' ]);

$ _SESSION [ 'msg' ] = " Deslogado com sucesso ";
header(" Localização: login.php ");

?>
