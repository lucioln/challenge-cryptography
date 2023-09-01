# API de Criptografia (Crypto API)

This is a simple API demonstrating the encryption of sensitive fields using Laravel. The API allows for the creation, reading, updating, and deletion of user records, with sensitive fields such as `userDocument` and `creditCardToken` encrypted using the SHA-512 algorithm.

## Configuração do Ambiente (Environment Setup)

Para configurar o ambiente de desenvolvimento, siga estas etapas (To set up the development environment, follow these steps):

1. Clone o repositório para sua máquina local (Clone the repository to your local machine):

   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd seu-repositorio

2. Instale as dependências do Composer (Install Composer dependencies):

bash
Copy code
composer install

3. Crie um arquivo .env na raiz do projeto com suas configurações locais (Create a .env file at the project root with your local settings):

bash
Copy code
CPY .env.example .env

4. Edite o arquivo .env para definir as variáveis de ambiente, como a configuração do banco de dados e outras configurações específicas do ambiente (Edit the .env file to set environment variables, such as database configuration and other environment-specific settings).

5. Gere uma chave de aplicativo Laravel (Generate a Laravel application key):

bash
Copy code
php artisan key:generate

6. Execute as migrações do banco de dados para criar as tabelas necessárias (Run database migrations to create necessary tables):

bash
Copy code
php artisan migrate

7. Inicie o servidor de desenvolvimento (Start the development server):

bash
Copy code
php artisan serve

8. Agora, sua API estará disponível em http://localhost:8000.

# Uso da API (API Usage)
A API oferece os seguintes endpoints (The API offers the following endpoints):

GET /api/users: Lista todos os usuários (List all users).

POST /api/users: Cria um novo usuário com campos criptografados (Create a new user with encrypted fields).

GET /api/users/{id}: Obtém os detalhes de um usuário específico (Get details of a specific user).

PUT /api/users/{id}: Atualiza um usuário existente (Update an existing user).

DELETE /api/users/{id}: Exclui um usuário existente (Delete an existing user).

Certifique-se de formatar suas solicitações corretamente e tratar as respostas de acordo com os códigos de status HTTP retornados pela API (Make sure to format your requests correctly and handle responses according to the HTTP status codes returned by the API).

# Requisitos de Segurança (Security Requirements)

Certifique-se de proteger suas chaves de API e informações sensíveis. Use HTTPS em ambientes de produção e aplique autenticação adequada, se necessário (Ensure to protect your API keys and sensitive information. Use HTTPS in production environments and apply proper authentication if needed).

# Contribuição (Contribution)

Sinta-se à vontade para contribuir para este projeto, abrindo problemas, enviando solicitações pull ou melhorando a documentação (Feel free to contribute to this project by opening issues, submitting pull requests, or improving the documentation).

