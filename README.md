[![Build Status](https://travis-ci.org/Braiani/enem.svg?branch=master)](https://travis-ci.org/Braiani/enem)

![](https://raw.githubusercontent.com/ifms-na/siai-ifms-na/master/app/assets/images/logo_ifms.png?token=ABT0W4aSOnogYpUeUhFZlcp1WgNYR34Gks5Yv3kuwA%3D%3D)


# SIVEN - Sistema de Verificação das notas de ENEMs

![Em Desenvolvimento](http://messages.hellobits.com/success.svg?message=Em%20Desenvolvimento)

Este sistema tem como base: Laravel 5.6 e Voyager 1.1.

O SIVEN (Sistema de Verificação das notas de ENEMs) é um sistema desenvolvido com o objetivo de auxiliar a verificação de notas de anos anteriores do ENEM quando da emissão de certificados de conclusão do ensino médio pelas CEREL/COGEA do IFMS (Institulo Federal de Mato Grosso do Sul).

## Módulos

 - Gerenciamento de usuários
 - Gerenciamento de senhas
 - Gerenciamento de edições de ENEM
 - Gerenciamento de candidatos (notas obtidas pela base de dados do INEP)

## Como usar

**Primeiro passo:** Clone o projeto

    git clone git@github.com:Braiani/enem.git

**Segundo passo:** Instalar as dependências do Laravel (Necessário ter Composer instalado)

    composer install --no-dev

**Terceiro passo:** Instalar o Voyager

    php artisan voyager:install

**Quarto passo:** Rodar as migrations e seeds necessárias

    php artisan migrate --seed

## Usuário padrão

Por padrão o SIVEN cria um usuário administrador, o qual poderá criar mais quantos usuários forem necessários. As credenciais são:

    usuário = admin@admin.com
    senha = admin

## License

SIVEN usa a Licença MIT. Para mais detalhes [License](https://github.com/Braiani/enem/blob/master/LICENSE)
