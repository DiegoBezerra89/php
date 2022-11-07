<?php

//SUPER GLOBAIS

//$_COOKIE
/* 
Possui uma data de validade, qualquer prazo, enquanto este prazo estiver ativo, as variáveis estão disponíveis, podendo ser excluído manualmente.
  - Para criar um $_COOKIE é necessário utilizar a função setCookie();
  setCookie($nome, $valor, $dataExpiracao)
*/

echo $_COOKIE['name'];
echo $_COOKIE['curso'];


//$_SESSION
// Pode ser criado um valor que é acessado via um ID, no navegador, se quiser acessar , é só chamar o ID referente a sessão.

//$_ENV
//Por enquanto, não entraremos nesse quesito.

//$_FILES
//É possível acessar o arquivo enviado via formulário

//$_GET
//É utilizado para pegar as variáveis de uma URL -> www.nestleatevoce.com.br?id=34&name=diego (query string)

//$_POST
//Por enquanto não entraremos nesse assunto

//$_REQUEST
//É possível obter as variáveis de GET e POST da url

//$_SERVER
//Por enquanto não entraremos nesse assunto