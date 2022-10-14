# SOBRE
Este projeto foi desenvolvido como forma barata e fácil de se registrar cliques ou acessos a determinada página, criando uma espécie de contador de visitas.

Para isso, foi utilizado tecnologias baratas como PHP, Javascript e Sqlite3.

Através desse projeto você conseguirá mapear acessos a qualquer ação ou chamada de ação sem precisar se quer de um banco de dados dedicado para isso.


# Instalação
É necessário que você tenha uma versão do PHP 7.4 ou superior instalada em sua máquina e que esteja habilitada a extensão de PDO em seu PHP.

Como testar se tenha a extensão de PDO ativa? Simples, execute este projeto normalmente e caso tenha problema de PDO suspeite da extensão.

Para executar o servidor PHP você tem duas opções:
1 - Executar o script SH `server.sh`:
> sh server.sh

2 - Executar no terminal o comando:
> php -S localhost:8000 -t public/

Feito isso, basta então acessar o enderco http://localhost:8000 em seu navegador.