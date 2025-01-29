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

A estrutura do projeto é a seguinte:

Agenda /classes # Contém a classe Contact.php Contact.php /connection # Arquivos relacionados à conexão com o banco de dados connection.php # Conexão com o banco de dados contacts.sql # Script SQL para criar o banco de dados e as tabelas /public # Arquivos acessíveis publicamente /scripts # Scripts JavaScript registration.js # Script de registro de contatos script.js # Script principal para funcionalidades gerais /style # Arquivos de estilo CSS style.css # Estilos principais style-registration.css # Estilos para a página de registro /actions # Arquivos PHP responsáveis pelas ações registration.php # Ação de registro de contato removal.php # Ação de remoção de contato alteration.php # Ação de alteração de contato form-alteration.php # Formulário para alteração de contato form-registration.php # Formulário para registro de novo contato index.php # Página principal do sistema /repository # Contém arquivos responsáveis pela manipulação de dados ContactRepository.php # Repositório para manipulação dos contatos ContactRepositoryRelationalDatabase.php # Repositório para manipulação com banco de dados relacional

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


