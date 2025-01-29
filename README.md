# Projeto CRUD Agenda de Contatos

Este projeto é um sistema simples de gerenciamento de contatos, onde é possível adicionar, editar, excluir e buscar contatos. Os contatos são armazenados em um banco de dados MySQL. O projeto foi desenvolvido com PHP e MySQL, e conta com um código para criação do banco de dados.

## Índice

1. [Funcionalidades](#funcionalidades)
2. [Tecnologias Utilizadas](#tecnologias-utilizadas)
3. [Estrutura do Projeto](#estrutura-do-projeto)
4. [Banco de Dados](#banco-de-dados)
5. [Como Rodar o Projeto](#como-rodar-o-projeto)
6. [Como Usar](#como-usar)
7. [Contato](#contato)

## Funcionalidades

- **Cadastro de contatos**: Adicione novos contatos com nome, telefone e e-mail.
- **Edição de contatos**: Edite os dados dos contatos já cadastrados.
- **Exclusão de contatos**: Remova contatos da lista.
- **Busca de contatos**: Procure contatos pelo nome.
- **Banco de dados**: Todos os contatos são armazenados em um banco de dados MySQL.

## Tecnologias Utilizadas

- PHP
- MySQL
- HTML
- CSS
- JavaScript

## Estrutura do Projeto

Agenda
├── 📂 classes
│   ├── 📄 Contact.php → Classe que representa o modelo de dados para contatos.
│
├── 📂 connection
│   ├── 📄 connection.php → Arquivo de configuração e conexão com o banco de dados.
│   ├── 📄 contacts.sql → Script SQL para criação e da tabela de contatos.
│
├── 📂 public
│   ├── 📂 scripts
│   │   ├── 📄 validation.js → Script validação de um telefone.
│   │   ├── 📄 script.js → Script geral para interações na aplicação.
│   │
│   ├── 📂 style
│   │   ├── 📄 style.css → Estilos principais do site.
│   │   ├── 📄 style-registration.css → Estilos específicos para o formulário de registro e alteração.
│   │
│   ├── 📂 actions
│   │   ├── 📄 registration.php → Lógica para registrar novos contatos.
│   │   ├── 📄 removal.php → Lógica para remover contatos.
│   │   ├── 📄 alteration.php → Lógica para alterar dados de contatos.
│   │
│   ├── 📄 form-alteration.php → Formulário para alterar informações de contatos.
│   ├── 📄 form-registration.php → Formulário para registro de novos contatos.
│   ├── 📄 index.php → Página inicial do projeto.
│
├── 📂 repository
│   ├── 📄 ContactRepository.php → Interface para manipulação de contatos no repositório.
│   ├── 📄 ContactRepositoryRelationalDatabase.php → Implementação da interface para banco de dados relacional.

## Banco de Dados

O projeto utiliza um banco de dados MySQL para armazenar os contatos. O código para criar o banco de dados e a tabela necessária está disponível no arquivo `contacts.sql` na pasta connection. Para utilizá-lo, execute o comando. Nos comentários tem alguns contatos aleatorios para testes. No arquivo `connection.php` você é possível alterar a o usurario e senha do banco que por padrão são `root` e `` respectivamente.

## Como Rodar o Projeto

Para rodar este projeto localmente, siga estas etapas:

1. Clone o repositório: git clone https://github.com/juliocesarnf/crud-agenda .

2. Navegue até o diretório do projeto.

3. Garanta que o mysql esteja ativo no local do host do arquivo `connection.php`.

4. Execulte o seguinte comando: php -S localhost:8080 ( Porta de sua preferenica ) e navegue ate o local.

# Como Usar

- São listados os Contatos e se você digitar um nome email ou telefone na barra de pesquisa, serão listados os contatos correspondentes.
- O botão mas leva a um formulario para cadastro de um contato. Este cadastro pode ter algumas restrições como nome ter entre 2 e 100 caracteres formato do telefone, etc.
- Clicando no lápis de um contato leva ao mesmo formulario mas para a alteração de um contato, seguindo as mesmas regras.
- Clicando no x e confirmando o contato é excluido.

## Contato

Julio Cesar Martins de Souza - julio2001nf@gmail.com

Link do Projeto: https://github.com/juliocesarnf/crud-agenda


