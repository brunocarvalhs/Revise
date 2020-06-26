<!--
*** Obrigado por estar vendo o meu README. Agora vamos rodar esse projeto incrível :D
-->

<p align="center"><img src="https://github.com/Bruno-Carv/Revise/blob/vers%C3%A3o(2.1)/Website/public/img/logo.png?raw=true" width="200"></p>

<!-- TABLE OF CONTENTS -->

## Tabela de Conteúdo

- [Tabela de Conteúdo](#tabela-de-conteúdo)
- [Sobre o Projeto](#sobre-o-Projeto)
  - [Tecnologias aplicadas](#tecnologias-aplicadas)
    - [WebSite](#WebSite)
    - [Mobile](#Mobile)
- [Interface da aplicação](#interface-da-aplicação)
- [Começando](#Começando)
  - [Pré-requisitos](#pré-requisitos)
  - [Estrutura de Arquivos](#estrutura-de-arquivos)
- [Licença](#licença)
- [Contato](#contato)

## Sobre o Projeto



### Tecnologias aplicadas

#### WebSite

- [](https:///) - 

- [](https:///) - 

#### Mobile

- [](https:///) - 

- [](https:///) - 

## Interface da aplicação

### Aplicação Web

<p align="center"><img src="" width="400"></p>

### Aplicação Mobile

<p align="center"><img src="" width="400"></p>

## Começando

### Pré-requisitos

- [NodeJS](https://nodejs.org/pt-br/) - versão 12.18 LTS;
- [Yarn](https://yarnpkg.com/) - versão 1.22.0;
- [MySQL](https://www.mysql.com/) - versão 4.2.8;

### Estrutura de Arquivos

<!-- ```bash
MaratoraESAMC2020
├── server/
│   ├── src/
│   │   ├── app/
│   │   │   ├── controllers/
│   │   │   │   ├── ArtistController.js
│   │   │   │   ├── CommunityController.js
│   │   │   │   ├── EventController.js
│   │   │   │   └── FeedControllers.js
│   │   │   ├── models/
│   │   │   │   ├── Artist.js
│   │   │   │   ├── Community.js
│   │   │   │   ├── Event.js
│   │   │   │   └── Feed.js
│   │   │   └── secure/
│   │   │       └── token.js
│   │   ├── database/
│   │   │   └── index.js
│   │   ├── routes/
│   │   │   ├── artistRouter.js
│   │   │   ├── communityRouter.js
│   │   │   ├── eventsRouter.js
│   │   │   ├── feedRouter.js
│   │   │   └── router.js
│   │   ├── services/
│   │   │   ├── aws/
│   │   │   │   ├── index.js
│   │   │   │   └── s3.js
│   │   │   ├── cloud/
│   │   │   │   ├── index.js
│   │   │   │   ├── key.json
│   │   │   │   └── storage.js
│   │   ├── validator/
│   │   │   └── artistValidation.js
│   │   ├── app.js
│   │   └── server.js
│   ├── .env.example
│   ├── .gitignore
│   ├── yarn.lock
│   ├── package.json
│   └── README.md
├── Mobile/
│   ├── .expo-shared/
│   │   └── assets.json
│   ├── assets/
│   │   ├── icon.png
│   │   └── splash.png
│   ├── src/
│   │   ├── assets/
│   │   │   ├── Pintor.jpg
│   │   │   ├── logo-agitasantos-hori.png
│   │   │   ├── logo-agitasantos.png
│   │   │   └── logoPrefeitura.png
│   │   ├── components/
│   │   │   ├── AlbumCamera.js
│   │   │   ├── CameraButton.js
│   │   │   ├── button.js
│   │   │   ├── facebookSignIn.js
│   │   │   ├── feed.js
│   │   │   ├── filter.js
│   │   │   ├── googleSignIn.js
│   │   │   ├── input.js
│   │   │   ├── linha.js
│   │   │   └── loading.js
│   │   ├── pages/
│   │   │   ├── Cam
│   │   │   │   ├── index.js
│   │   │   │   └── styles.js
│   │   │   ├── Freelancer
│   │   │   │   ├── index.js
│   │   │   │   └── styles.js
│   │   │   ├── Photo
│   │   │   │   ├── index.js
│   │   │   │   └── styles.js
│   │   │   ├── home
│   │   │   │   ├── index.js
│   │   │   │   └── styles.js
│   │   │   ├── loading
│   │   │   │   ├── index.js
│   │   │   │   └── styles.js
│   │   │   ├── maps
│   │   │   │   ├── index.js
│   │   │   │   └── styles.js
│   │   │   ├── profile
│   │   │   │   ├── index.js
│   │   │   │   └── styles.js
│   │   │   ├── signin
│   │   │   │   ├── index.js
│   │   │   │   └── styles.js
│   │   │   └── signup
│   │   │       ├── index.js
│   │   │       └── styles.js
│   │   ├── services/
│   │   │   ├── api.js
│   │   │   └── auth.js
│   │   └── routes.js
│   ├── .gitignore
│   ├── App.js
│   ├── README.md
│   ├── app.json
│   ├── babel.config.js
│   ├── package-lock.json
│   ├── package.json
│   ├── yarn-error.log
│   └── yarn.lock
├── Doc/
│   ├── .env.example
│   ├── .gitignore
│   ├── yarn.lock
│   ├── package.json
│   └── README.md
└── web/
    ├── public/
    │   ├── favicon.png
    │   └── index.html
    ├── src/
    │   ├── assets/
    │   ├── components/
    │   ├── layout/
    │   ├── pages/
    │   ├── services/
    │   ├── styles/
    │   │   ├── css/
    │   │   │   ├── global.min.css
    │   │   │   └── global.min.css.map
    │   │   └── scss/
    │   │       └── global.scss
    │   ├── App.js
    │   ├── index.js
    │   └── routes.js
    ├── .env.example
    ├── .gitignore
    ├── package.json
    ├── server.js
    ├── yarn.lock
    └── README.md
``` -->

<!-- ## Licença

Distribuído sob a licença MIT. Veja `LICENSE` para mais informações. -->

<!-- CONTACT -->

## Contato

Bruno Silva Carvalho - [Github](https://github.com/bruno-carv)
Bruno Silva Carvalho - [Github](https://github.com/bruno-carv)
Bruno Silva Carvalho - [Github](https://github.com/bruno-carv)
Bruno Silva Carvalho - [Github](https://github.com/bruno-carv)
Bruno Silva Carvalho - [Github](https://github.com/bruno-carv)