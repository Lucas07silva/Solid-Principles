# SOLID em PHP

Projeto desenvolvido para estudo e prática dos **cinco princípios SOLID** utilizando **PHP Orientado a Objetos**.

O objetivo deste repositório é demonstrar, por meio de exemplos práticos, como aplicar os princípios SOLID para produzir códigos mais organizados, reutilizáveis, desacoplados e de fácil manutenção.

## 📚 Conteúdo

Ao longo do projeto foram desenvolvidas aplicações simples para demonstrar cada princípio:

- **SRP (Single Responsibility Principle)** – Princípio da Responsabilidade Única
- **OCP (Open/Closed Principle)** – Princípio Aberto/Fechado
- **LSP (Liskov Substitution Principle)** – Princípio da Substituição de Liskov
- **ISP (Interface Segregation Principle)** – Princípio da Segregação de Interfaces
- **DIP (Dependency Inversion Principle)** – Princípio da Inversão de Dependência

---

## 📂 Estrutura dos Projetos

### 📦 Projeto Carrinho de Compras
Aplicação utilizada para demonstrar os princípios:

- SRP
- OCP

---

### 📐 Projeto Polígonos
Aplicação criada para demonstrar o **Princípio da Substituição de Liskov (LSP)**.

Foram implementadas as classes:

- Retângulo
- Quadrado
- Polígono

Durante o desenvolvimento foi demonstrado por que a herança entre `Quadrado` e `Retângulo` pode violar o LSP e como refatorar a solução utilizando composição.

---

### 📋 Projeto CRM
Aplicação utilizada para demonstrar o **Princípio da Segregação de Interfaces (ISP)**.

Foram implementadas:

- Interfaces específicas
- Models
- Componentes do sistema

O projeto evidencia a importância de criar interfaces pequenas e específicas, evitando obrigar classes a implementarem métodos que não utilizam.

---

### ✉️ Projeto Mensageiro
Aplicação criada para demonstrar o **Princípio da Inversão de Dependência (DIP)**.

Foram implementados diferentes canais de envio de mensagens:

- E-mail
- SMS

Além da interface:

- `MensagemToken`

Foi utilizada **Injeção de Dependência (Dependency Injection)** para eliminar o forte acoplamento entre as classes, fazendo com que o `Mensageiro` dependa de abstrações e não de implementações concretas.

---

## 🛠️ Tecnologias Utilizadas

- PHP 8+
- Composer
- Programação Orientada a Objetos (POO)

---

## ▶️ Como executar

### Clone o repositório

```bash
git clone https://github.com/seu-usuario/nome-do-repositorio.git
```

### Entre na pasta

```bash
cd nome-do-repositorio
```

### Instale as dependências

```bash
composer install
```

Caso seja necessário atualizar o autoload:

```bash
composer dump-autoload
```

### Execute o servidor embutido do PHP

```bash
php -S localhost:8000
```

Depois acesse no navegador:

```
http://localhost:8000
```

---

## 🎯 Objetivos de Aprendizagem

- Aplicar os princípios SOLID na prática.
- Desenvolver código orientado a objetos utilizando boas práticas.
- Reduzir acoplamento entre classes.
- Melhorar a reutilização e manutenção do código.
- Entender o uso de interfaces, herança, composição e injeção de dependência.

---

## 📖 Conceitos abordados

- Classes e Objetos
- Encapsulamento
- Herança
- Polimorfismo
- Interfaces
- Composição
- Injeção de Dependência
- Autoload com Composer
- SOLID

---

## 👨‍💻 Autor

**Lucas Silva**

Estudante de Sistemas de Informação, desenvolvendo projetos voltados para Programação Orientada a Objetos, Engenharia de Software e boas práticas de desenvolvimento.
