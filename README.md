Maria Maria Festeira — Sistema de Gestão de Eventos & Buffets

O **Maria Maria Festeira** é um sistema web responsivo desenvolvido para facilitar o gerenciamento de eventos, cadastramentos de clientes, elaboração de cardápios personalizados e geração de fichas de impressão para eventos em domicílio.

---

Demonstração da Aplicação
* **Domínio de Produção:** [noodlecraftsa.rf.gd/vagas.html](https://noodlecraftsa.rf.gd/vagas.html)

---

Funcionalidades Principais

- **Calendário & Agendamento de Eventos:** Organização visual de datas, tipos de eventos e convidados.
- **Ficha Completa do Evento:**
  - **Identificação:** Dados do cliente, endereço, tipo de evento e número de convidados.
  - **Proposta & Estilo:** Detalhamento da proposta do buffet e infraestrutura necessária.
  - **Doces & Personalizados:** Lista detalhada de itens artesanais e lembrancinhas.
  - **Cardápio Completo:** Descrição de entradas, finger foods, pratos principais e sobremesas.
- **Impressão / Exportação Otimizada (PDF):**
  - Layout limpo e profissional sem botões, barras de navegação ou caixas de seleção.
  - Expansão automática de campos de texto (`textarea`) para evitar rolagem ou cortes de informações na folha A4.
  - Adição automática do cabeçalho institucional com a marca **Maria Maria Festeira**.

---

## Tecnologias Utilizadas

- **HTML5:** Estrutura semântica das páginas.
- **CSS3:** 
  - Layout moderno utilizando Flexbox e CSS Grid.
  - Suporte a CSS Paged Media (`@media print`) otimizado para geração de relatórios impressos.
  - Fontes tipográficas estilizadas via *Google Fonts* (`Playfair Display`, `Inter`).
- **JavaScript (Vanilla JS):**
  - Lógica dinamizada para manipulação e ajuste de altura dos campos antes da impressão.
  - Limpeza automática de espaçamentos em branco excessivos.

---

## Estrutura do Repositório

```text
├── css/
│   └── calendario.css   # Estilos principais e regras de impressão (@media print)
├── js/
│   └── calendario.js    # Lógica da aplicação, formulários e evento de impressão
├── vagas.html           # Interface principal do formulário/sistema
└── README.md            # Documentação do projeto
