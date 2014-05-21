Primeiro projeto das aulas de Zend Framework 2 com Nataniel Paiva
=======================

Introdução
------------
O primeiro projeto tem como objetivo deixar claro aos alunos os seguintes tópicos:
* Baixar o esqueleto pronto para usar o framework
* Utilizar o composer para instalar as bibliotecas
* Criar um vhost para configurar o seu projeto
* Criar novas controllers e actions
* Criando módulos e rotas 


Início
-------

Primeiro baixe o esqueleto pelo link https://github.com/zendframework/ZendSkeletonApplication clicando no botão Zip.

No github você pode baixar direto pelo zip, ou simplesmente dar um git clone utilizando o seguinte comando em seu diretório:
-- git clone git://github.com/zendframework/ZendSkeletonApplication.git

Após baixar o esqueleto extraia do zip o projeto e coloque no seu diretório do apache que você coloca os seus projetos.
Dentro dele será necessário você instalar as bibliotecas, você pode fazê-lo utilizando os seguintes comandos dentro da pasta raiz do seu projeto:

	$ php composer.phar self-update

Resultado : 
Updating to version 0c85ca426d6e8235366340f29ad0e6aab1747b83.
    Downloading: 100%         
Use composer self-update --rollback to return to version 7adc41d02c3536b3e19a6b906cf0c4cf6d3beb70

Logo após execute o seguinte comando:

	$ php composer.phar install

Resultado:
	Loading composer repositories with package information
	Installing dependencies (including require-dev)
	  - Installing zendframework/zendxml (1.0.0)
	    Loading from cache

	  - Installing zendframework/zendframework (2.3.1)
	    Loading from cache
 




