# Projeto_IHC. Aluno: Breno Cardoso
- Para rodar, o programa precisa de um servidor que suporte PHP 7.2 (recomendo o XAMPP), precisa instalar também o MySQL (utilizei o 5.6).
- Alterar as configurações de acesso do MySQL no arquivo .env deste projeto para setar o username e a senha
- Caso não rode o MySQL na máquina, o arquivo .env poderá também ser alterado para a conexão com PostgreSQL
- Quando instalar o servidor, criar um banco de dados chamado "bd_ihc"
- rodar o comando "php artisan migrate" para a criação automática das tabelas no banco de dados
- rodar o comando "php artisan db:seed" para a inserção de alguns dados de alimentos e de exercicios fisicos automaticamente no banco de dados
- http://localhost/projeto_ihc/public para acessar o aplicativo
