# Site Evento

## Sobre

A aplicação Site Evento é um sistema desenvolvido para produtores poderem cadastrar eventos e partcipantes poderem se inscreverem neles.


## Projeto

O projeto utiliza dos seguintes recursos:

    
*  **PHP** : utilizado o PHP 8.0.25
     
    * Download [última versão](https://www.php.net/downloads.php)


*  **Laravel Framework** : utilizado Laravel Framework 9.46.0
     
    * Download [última versão](https://laravel.com/docs/9.x/installation)
    
*  **Laravel Jetstream Livewire** : utilizado Laravel Jetstream Livewire 2.11
     
    * Download [última versão](https://jetstream.laravel.com/2.x/installation.html#installing-jetstream)
    
    
*  **MysSQL** : utilizado Utilizando Distribuição 10.4.27-MariaDB
     
    * Download [última versão](https://dev.mysql.com/downloads/installer/)
    
    

## Clone e execução

Para utilizar o sistema é necessário seguir algumas etapas:

    1 - Clonar o repositório na sua máquina local  e instalar as dependências.


```
git clone https://github.com/RToramaru/site-evento.git

cd site-evento

composer install

npm install

```
  
    2 - Criar uma copia do arquivo .env.
    

```
copy .env.example .env

```

    3 - Gere uma chave de criptografia de aplicativo.
    

```
php artisan key:generate

```

    4 - Crie o banco de dados.
    
```
php artisan migrate

```

    5 - Inicie o npm.
    
```
npm run dev

```  

    6 - Inicie o servidor.
    
```
php artisan serve 

```  


  
## Utilização

Para utilizar o sistema é necessário acessar o servidor disponibilizado.


## Demonstração


``@author Rafael Almeida``
