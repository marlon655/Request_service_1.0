# Request_service_1.0
## Sobre
- Este projeto foi desenvolvido na plataforma Windows, utilizando Servidor Xampp, PHP 8.0+ e Sql.
## Funcionamento
- Este projeto faz uma requisição para um servidor que retorna dados em json, para que funcione baixe o Web_Service_1.0:

  ```url
    https://github.com/marlon655/Web_service_1.0
  ```
  Para ver a resposta Json que retorna do servidor, basta abrir a pasta Classes, abrir o Request.php e descomentar:
 
 ```PHP
    echo $server_output;
  ```
  E então você podera ver a resposta do servidor...
  Este faz a requisição utilizando Curl(), mas tambem é possivel fazer a requisiçao via JS.
  
- Caso deseje criar novas funcionalidades no lado do servidor, é bom conhecer um pouco sobre a função Curl() do PHP...
- Vou dar um breve introdução do funcionamento do envio dos posts:

```PHP
   $post = array('key'=>'MY_KEY','name'=>$nome,'marca'=>$marca,'image'=>$imagem['name'],
		'upload'=>$cf);
   Request::curl($post, $url);
```

Onde $post deve ser um array indicando a 'key' para poder realizar a requisição ou enviar post, e seus
respectivos nome caso tenha posts para inserir...
- Para saber qual o nome do POST para mandar as requisições, acesse o arquivo do sevidor em classes/service.php
ou mande um post para info: Para isto acesse o arquivo classes/Request.php e descomente:

```PHP
  echo $server_output;
```
e então acessar item info. Caso deseje realizar manualmente:

```PHP
    $post = array('key'=>'MY_KEY');
		Request::curl($post, LOCAL_DO_SERVIDOR/info');
```

OBS: Nunca esqueça da key, o valor dela sempre sera MY_KEY, a menos que você mude ela no lado do servidor ou 
tenha o DB com varias chaves...

## Configuracão
- Altere as Configurações no arquivo Config.php, neste arquivo contem as informações sobre oque mudar.

## Front-End
- HTML
- CSS
- JavaScript

## Back-End
- PHP

## FrameWorks
- Nenhum
