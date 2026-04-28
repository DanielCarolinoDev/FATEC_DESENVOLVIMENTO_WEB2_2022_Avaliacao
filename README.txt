# FATEC_DESENVOLVIMENTO_WEB2_2022_Avaliacao

## Descrição
Este projeto foi desenvolvido como parte da disciplina de Desenvolvimento Web 2 da FATEC.
O sistema consiste em um mecanismo de login e logoff em PHP, com foco na validação segura de senhas e controle de sessão do usuário.

## Objetivo
Implementar um sistema de autenticação simples e funcional, aplicando conceitos fundamentais de:
- Backend com PHP
- Segurança básica de autenticação
- Gerenciamento de sessões

## Funcionalidades
- Cadastro de usuário (opcional)
- Login com validação de senha
- Logoff (encerramento de sessão)
- Proteção de páginas restritas
- Validação de credenciais

## Tecnologias Utilizadas
- PHP
- HTML
- CSS 

## Segurança
O sistema implementa práticas básicas de segurança, como:
- Validação de entrada de dados
- Uso de sessões ($_SESSION) para controle de login
- Uso de hash de senha (password_hash e password_verify)

## Estrutura do Projeto
/projeto
│── index.php
│── login.php
│── autentica.php
│── dashboard.php
│── logout.php
│── config.php

## Como Executar
1. Instale um servidor local (ex: XAMPP, WAMP ou Laragon)
2. Coloque o projeto na pasta htdocs
3. Inicie o servidor Apache e MySQL
4. Acesse no navegador: http://localhost/nome-do-projeto

## Conceitos Aplicados
- Autenticação de usuários
- Controle de sessão
- Segurança em aplicações web
- Organização de código PHP

## Autor
Daniel Carolino
Estudante de Desenvolvimento de Software Multiplataforma – FATEC
