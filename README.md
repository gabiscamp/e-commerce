# 🍬 E-Commerce de Doces

Este projeto é um sistema completo de e-commerce desenvolvido em PHP, JavaScript e MySQL, com foco na venda de potes de doces artesanais. O sistema conta com funcionalidades de catálogo, login de usuário e administrador, carrinho de compras, feedback de clientes e finalização de pedidos via API do WhatsApp.

## 🚀 Funcionalidades

### 🛒 Cliente
- Visualização de produtos (catálogo de doces).
- Sistema de login e registro de clientes.
- Adição de produtos ao carrinho (após login).
- Finalização de pedido com preenchimento de formulário.
- Envio automático do pedido via WhatsApp com todos os detalhes formatados.
- Avaliação de produtos via sistema de feedbacks.

### 🛠️ Administrador
- Login exclusivo para administrador.
- Cadastro e remoção de produtos do catálogo.
- Visualização e controle de pedidos realizados.

## 🧰 Tecnologias Utilizadas

- **Linguagem principal:** PHP
- **Banco de dados:** MySQL
- **Front-end:** HTML5, CSS3, JavaScript
- **Back-end:** PHP (com múltiplos arquivos especializados)
- **Integrações:** API do WhatsApp (envio automático de pedidos)
  
## 📦 Banco de Dados

O banco de dados armazena:
- Informações dos clientes (login/registro)
- Feedbacks dos usuários
- Produtos do catálogo
- Pedidos realizados (com histórico)

## 📲 Integração com WhatsApp

Após o cliente preencher o formulário de finalização do pedido, os dados do pedido (incluindo produtos, quantidades, e informações de contato) são enviados via API do WhatsApp diretamente para o número da loja, otimizando a comunicação com o cliente.

