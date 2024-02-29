# Guia de Configuração e Instalação

Este é um guia rápido para configurar e executar este projeto localmente.

## Configuração inicial

1. **Criar arquivo `.env`:** 
   - Copie o arquivo `.env.example` e crie um novo arquivo chamado `.env`.
   - Preencha as variáveis de ambiente no arquivo `.env` com as informações necessárias.

## Instalação

2. **Instalar dependências via Composer:**
composer install

3. **Atualizar dependências via Composer:**
composer update

4. **Executar o Docker:**
docker-compose up -d

## Configuração do banco de dados

5. **Criar migrações:**
php artisan make:migration create_artistas_table
php artisan make:migration create_contratados_table

6. **Executar migrações:**

php artisan migrate
- Responda `yes` quando solicitado.

7. **Preencher o banco de dados com dados de exemplo:**
php artisan db:seed --class=ArtistasSeeder

## Finalização

8. **Gerar chave de aplicativo:**
php artisan key:generate

9. **Iniciar o servidor local:**
php artisan serve


Agora você pode acessar o seu aplicativo em [http://localhost:8000](http://localhost:8000) no seu navegador.