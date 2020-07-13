Teste Técnico PHP Netshow
==========

Página de cadastro com validaçãode no email e telefone, envio das informações para o banco de dados tratadas, envio de email de confirmação contendo os dados inseridos no formulário, feito em Laravel com MySQL

Instalação
============
Fazer o clone no diretório do servidor web

```
https://github.com/unixlira/netshow
```

Tabelas do banco de Dados, rodar o comando:

```
php artisan migrate
```

Abra um terminal de seu sistema e no doretorio raiz do  projeto rode o comando

```
php artisan serve
```


Como Usar
=====

Primeiro edite o arquivo '.env.example' com os dados do banco de dados e do servidor de email e depois renomeie para '.env'<br/>
Atenção o endereço de email fornecido no campo 'MAIL_FROM_ADDRESS' do arquivo .env, será o endereço onde os dados informados no formulário serão enviados<br/>
O email fornecido no campo  'Email' do formulário irá chegar um email resposta de agradecimento<br/>

Abra um navegador no endereço http://localhost:8000 e cadastre seus dados e evie o formulário<br/>

Qualquer dúvida entrar em contato.


TODO
====

* Work in Netshow
