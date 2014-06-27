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
~~~shell
	$ php composer.phar install

	Resultado:
	Loading composer repositories with package information
	Installing dependencies (including require-dev)
	  - Installing zendframework/zendxml (1.0.0)
	    Loading from cache

	  - Installing zendframework/zendframework (2.3.1)
	    Loading from cache
~~~
### Configurações do Apache

Configure o seu virtual host com o seguinte código:

    <VirtualHost *:80>
        ServerName projeto.local
        DocumentRoot /path/to/projeto1/public
        SetEnv APPLICATION_ENV "development"
        <Directory /path/to/projeto1/public>
            DirectoryIndex index.php
            AllowOverride All
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>

Controllers e Actions
-----------------------

Vamos lá, temos que criar nossa primeira controller, mas como eu faço isso?
Muito simples, vamos criar uma nova controller dentro do diretório 
projeto1/module/Application/src/Application/Controller/OutraController.php com o seguinte código:
~~~php
	<?php

	namespace Application\Controller;

	use Zend\Mvc\Controller\AbstractActionController;
	use Zend\View\Model\ViewModel;

	class OutraController extends AbstractActionController
	{
		
	    public function indexAction()
	    {
		return new ViewModel();
	    }
	    //Nossa segunda action, vamos brincar um pouco com ela quando utilizar-mos algumas configurações de rotas 	    
	    public function outraAction()
	    {
	    	
	    }
	}
~~~
Como agora existe uma outra Action, precisamos criar o seu arquivo também, então vamos lá no diretório 
projeto1/module/Application/view/application/outra/outra.phtml com o seguinte código:

	Essa é a outra action onde ficará o nosso html

Para que a nossa controller funcione normalmente é necessário configurar ela no arquivo 
projeto1/module/Application/config/module.config.php

~~~php
	'controllers' => array(
		'invokables' => array(
		    'Application\Controller\Index' => 'Application\Controller\IndexController',
		    //Adicione essa linha abaixo no array de invokables	
		    'Application\Controller\Outra' => 'Application\Controller\OutraController',		
		),
	    ),
~~~
Pronto! Assim já conseguiremos utilizar nossa nova controller com a seguinte url http://projeto.local/application/outra
Para acessarmos a Action outra.phtml, basta colocarmos o link http://projeto.local/application/outra/outra.

Criando outro Módulo e configurando Rotas
-----------------------------------------





