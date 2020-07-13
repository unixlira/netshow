Teste Técnico PHP Netshow
==========

Página de cadastro com validaçãode no email e telefone, envio das informações para o banco de dados tratadas, envio de email de confirmação contendo os dados inseridos no formulário, feito em Laravel com MySQL


Instalação
============

Abra um terminal de seu sistema e rode os comandos abaixo.

Fazer o clone no diretório do servidor web

```
git clone https://github.com/unixlira/netshow
```

"Atenção: Rodar todos comandos no diretorio raiz do projeto"

Instalar bibliotecas do sistema, rode o comando

```
composer install
```

Aós instalado edite o arquivo '.env.example' com os dados do banco de dados e do servidor de email e depois renomeie para '.env'

Atenção o endereço de email fornecido no campo 'MAIL_FROM_ADDRESS' do arquivo .env, será o endereço onde os dados informados no 
formulário serão enviados no corpo do email como confirmação.


Inserir tabelas no banco de Dados, rode o comando

```
php artisan migrate
```

Abrir o projeto no navegador, rode o comando

```
php artisan serve
```


Como Usar
=====

Abra um navegador no endereço http://localhost:8000 e cadastre os dados requeridos e evie o formulário

Qualquer dúvida entrar em contato.


TODO
====

* Work in Netshow
