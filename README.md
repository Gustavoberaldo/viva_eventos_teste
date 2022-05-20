# Viva_Eventos_teste
Repositório com os arquivos do teste para Analista de desenvolvimento Web Jr. na empresa Viva Eventos

________________________________________________________________________

# Instruções para executar o projeto

*No projeto foi utilizado o SO Linux Mint*

## Downloads e instalações

→ Baixe e extraia o projeto em um local comum <br><br>
→ Baixe e Instale o xampp <br>
 [https://www.apachefriends.org/pt_br/download.html](https://www.apachefriends.org/pt_br/download.html) <br><br>
→ Baixe e instale o composer globalmente <br>
 Guia de instalação que eu utilizei: <br>
 [https://magecomp.com/blog/install-and-use-composer-on-ubuntu/](https://magecomp.com/blog/install-and-use-composer-on-ubuntu/) 
______________________________________________________________________

## Configurando os arquivos e instalando dependências

→ Execute o xampp e inicie os servidores Apache e MySql <br><br>
→ Abra o terminal na pasta do projeto <br><br>
→ Digite no terminal: `composer install` <br><br>
OBS.: mesmo após a instalação o composer pede algumas bibliotecas para ser executado
corretamente. Ao executar o `composer install`, se aparecerem alguns erros sobre falta de
pacotes, pesquise e instale os pacotes que ele solicitar. <br><br>
→ Abra o arquivo *.env* e edite conforme abaixo: <br>
                              <p margin="0 auto">
                              DB_CONNECTION=mysql <br>
                              DB_HOST=127.0.0.1 <br>
                              DB_PORT=3306 <br>
                              DB_DATABASE=viva_teste <br>
                              DB_USERNAME=root <br>
                              DB_PASSWORD= <br>
                              </p>
OBS.: apenas altere o username e o password de acordo com as suas configurações de banco
de dados. <br><br>
→ Acesse no browser *localhost/phpmyadmin* para abrir o **_phpMyAdmin_** <br><br>
→ Crie uma nova base de dados com o nome **_viva_teste_** e com o agrupamento
**_utf8_unicode_ci_**. <br><br>
→ Crie as tabelas no banco de dados executando o seguinte comando: `php artisan migrate`
______________________________________________________________________
## Executando o projeto
→ Execute o projeto digitando o seguinte comando no terminal: `php artisan serve`
