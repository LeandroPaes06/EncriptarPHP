<?php
    sessão_inicio();

?>

<!DOCTYPEhtml >
< html  lang =" pt-br " >
< cabeça >
    < meta  charset =" UTF-8 " >
    < meta  http-equiv =" X-UA-Compatible " content =" IE=edge " >
    < meta  name =" janela de visualização " conteúdo =" largura=largura do dispositivo, escala inicial=1,0 " >
    < título > Documento </ título >
</ cabeça >
< corpo >

< h2 > Área restrita </ ​​h2 >
<?php
    if (isset( $ _SESSION [ 'mensagem' ])){
        echo  $ _SESSION [ 'mensagem' ];
        unset( $ _SESSION [ 'mensagem' ]);
    }

?>
< form  action =" validar.php " method =" post " >
    < label > Usuário </ label >
    < input  type =" text " name =" usuario " placeholder =" email " > < br >

    < label > Senha </ label >
    < input  type =" password " name =" senha " placeholder =" senha " > < br >

    < input  type =" submit " value =" Acessar " name =" btnLogin " >

</forma> _ _

</ corpo >
</html> _ _
