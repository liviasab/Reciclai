<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# ***Reciclai***

## ***Projeto desenvolvido para disciplina de Projeto 1 no IFPE Campus Igarassu***

São os membro do projeto:



- [Caio de Sousa](https://www.github.com/CaioSousa32)
- [Layrton Wassermann](http://www.github.com/Layrton07)
- [Lívia Sabino](https://github.com/liviasab)
- [Jonatas Cândido](https://github.com/jonatas2021)

O projeto foi desenvolvido através da disciplina de Projeto 1 no curso de TSI (Tecnólogo em Sistemas para Internet) no IFPE Campus Igarassu. A demanda para tal projeto partiu do [Professor Alexandre Magno Alves de Oliveira](mailto:alexandre.oliveira@igarassu.ifpe.edu.br) que atua na área de logística no campus.
</div>
<center>

## ***A solução***

</center>

<div align="center" text-align="left">

O professor nos propôs uma ideia de uma solução para o descarte de pilhas e baterias que também incluiu uma forte conscientização para os usuários da aplicação.

A aplicação consiste no cadastro de empresas que se registram na plataforma e, após uma análise da administração, podem criar pontos de coleta. Nesses pontos, será disponibilizado um local adequado para realizar o armazenamento temporário e, após acumular uma certa quantidade e/ou tempo, fazendo o descarte de maneira específica. Além disso, a aplicação permite que os cidadãos encontrem os pontos de coleta mais próximos por meio de localização e, assim, façam o descarte de forma adequada.
</div>

----------

<center>

## ***Como executar?***

</center>

Para que o aplicativo funcione em sua máquina, é necessário que algumas coisas estejam instaladas:

</center>

- [NodeJS](https://nodejs.org/pt-br)
- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL Workbench](https://dev.mysql.com/downloads/workbench/)
- [Laravel](https://www.laravel.com)

Após se certificar de que todos os pré-requisitos estão instalados adequadamente, siga os seguintes passos no seu terminal:

1. Clonar este repositório clicando usando o comando: `git clone https://github.com/liviasab/Reciclai.git`;
2. Instalar as dependencias do composer com o comando: `composer install`;
3. Instalar as dependencias do npm com o comando: `npm install`;
4. Rodar o servidor npm com o comando : `npm run dev`;
5. Fazer uma copia e renomear o arquivo ".env.example" com o comando: `cp .env.example .env`;
6. Editar o .env "Para acessar o banco de acordo com suas configurações";
7. Criar as tabelas no seu database com o comando : `php artisan migrate`;
8. Iniciar o servidor do php com o comando: `php artisan serve`;
9. Acessar no navegador o ip e a porta que for exibido no terminal clicando no link exibido.

