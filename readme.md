# API DE BINGO

A API sorteia números aleatórios para um jogo de bingo.

Cada requisição gera um novo número para a lista de números sorteados.

Uma vez um número incluso a lista, ele jamais poderá ser incluído novamente (A menos que a lista seja limpa).

## URL DA API

- https://bingo-laravel-api.herokuapp.com

## Rotas

Todas as rotas tem o retorno em formato JSON.

- [GET] `/api/sort` Sorteia um número e adiciona a lista de números sorteados, seu retorno é a lista de números + último número sorteado.

- [GET] `/api/sorted` Retorna a lista de números sorteados.

- [DELETE] `/api/delete` Limpa a lista de números sorteados.