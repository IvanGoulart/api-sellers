## Descrição
Apis construidas para atender um sistema de comissão de vendedores, projeto register-sellers.

## Envio de e-mail

Foi desenvolvido o envio de e-mail para cada vendedor, informando o total de comissões do dia.<br>

Para o funcionamento desta funcionalidade é necessario configurar no arquivo .env as informações do email que vai fazer o envio das mensagens.

## Instalação

<ul>
    <li>Criar o arquivo .env e configurar a conexão com o banco de dados</li>
    <li>Executar o comando composer install</li>
    <li>Executar o comando php artisan migrate</li>
    <li>Executar o comando php artisan serve</li>
</ul>

## Especificações

O programa register-seller esta preparado para o endpoint base 'localhost:8000/api/'.<br>
Portanto se for alterado é necessario ajuste na aplicação register-seller.


