<?php
sessão_inicio();
include_once (" conexao.php ");
$ btnLogin = filter_input( INPUT_POST , 'btnLogin' , FILTER_SANITIZE_STRING );

if ( $ btnLogin ){
    $ usuario = filter_input( INPUT_POST , 'usuario' , FILTER_SANITIZE_STRING );
    $ senha = filter_input( INPUT_POST , 'senha' , FILTER_SANITIZE_STRING );


    //echo "$usuário - $senha";

    if ((!empty( $ usuario )) e (!empty( $ senha ))){
        //gerar uma senha criptografada
        //echo password_hash($senha, PASSWORD_DEFAULT);
        //pesquisar o usuario no BD

        $ result_usuario = " SELECT id, nome, email, senha FROM usuarios WHERE usuario=' $ usuario ' LIMIT 1 ";
        $ result_usuario = mysqli_query( $ conn , $ result_usuario );
        if ( $ resultado_usuário ){
            $ row_usuario = mysqli_fetch_assoc( $ result_usuario );
            if (password_verify( $ senha , $ row_usuario [ 'senha' ])){
                $ _SESSION [ 'id' ] = $ row_usuario [ 'id' ];
                $ _SESSION [ 'nome' ] = $ linha_usuario [ 'nome' ];
                $ _SESSION [ 'email' ] = $ row_usuario [ 'email' ];


                header(" Localização: administrativo.php ");
            } senão {
                $ _SESSION [ 'msg' ] = " Login ou senha INCORRETO ";
                header(" Localização: login.php ");
            }
        }

    } senão {
        $ _SESSION [ 'msg' ] = " Login ou senha INCORRETO ";
        header(" Localização: login.php ");
    }

} senão {
    $ _SESSION [ 'msg' ] = " Página não encontrada ";
    header(" Localização: login.php ");
}


?>
