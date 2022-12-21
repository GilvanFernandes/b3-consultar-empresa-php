
# Obter fatos relevantes consultando atráves do código da empresa na B3 com script em php

Para obter informações sobre uma empresa listada na B3 (Bolsa de Valores de São Paulo), você pode utilizar o site da B3 ou utilizar a API (Application Programming Interface) disponibilizada pela B3. A API é uma forma de obter os dados da B3 de forma automatizada, por meio de chamadas a uma URL específica utilizando um script ou programa.

Para utilizar a API da B3, é necessário se cadastrar no site da B3 e obter uma chave de acesso (API key). Depois disso, você pode utilizar o código PHP para fazer uma chamada HTTP para a API da B3 e obter os dados desejados. Por exemplo, para obter informações sobre uma empresa utilizando o código da empresa na B3, você pode utilizar a seguinte URL:

## Funcionalidades

- Dados disponível pela b3 sobre a empresa



## Entendendo o Script

Clone o projeto
```bash

<?php

// Utilizando file_get_contents
$url = 'https://api.b3.com.br/b3api/v1/stock/PETR4';
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'GET',
        'timeout' => 60
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

// Utilizando cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);

```

Depois de fazer a chamada, o resultado será retornado em formato JSON, que pode ser convertido para um array em PHP usando a função "json_decode". Por exemplo:

```bash
$result = json_decode($result, true);
```

Com isso, você terá um array com as informações da empresa, que podem ser acessadas como um array normal em PHP.

Essa é uma maneira geral de obter dados sobre uma empresa na b3
## Feedback

Se você tiver algum feedback, por favor nos deixe saber por meio do instagram https://www.instagram.com/ogilvanfernandes/


## Autor

- [@GilvanFernandes](https://www.github.com/GilvanFernandes)


## Referência

 - [B3: A Bolsa do Brasil](https://www.b3.com.br/pt_br/)

## Contribuindo

Contribuições são sempre bem-vindas!

- Faça um fork do projeto
- Após a modificação faça um pull request ao projeto