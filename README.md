# Plataforma-Web-
flowchart TD
    A[Início] --> B[Login do Usuário]
    B --> C{Tipo de Usuário}
    
    C --> D[Super Admin]
    D --> D1[Gerenciar Usuários e Permissões]
    
    C --> E[Financeiro]
    E --> E1[Acessa módulo "Bazar"]
    E1 --> E2[Gera QR Code (PIX)]
    E2 --> E3[Valida Pagamento]
    E3 --> E4[Registra e Soma Valor do Evento]
    
    C --> F[Gestor de Site]
    F --> F1[Gerencia Conteúdo]
    F1 --> F2[Publica no Site]
    
    C --> G[Aluno (futuro)]
    G --> G1[Visualiza Conteúdo]
    
    A & B & D1 & E4 & F2 & G1 --> H[Execução de Testes Automatizados]
    H --> I[Fim]
