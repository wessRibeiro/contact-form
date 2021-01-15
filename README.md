### Serviço de SMTP Mailtrap:
- Por ser uma ferramenta para testes, o e-mail não será efetivamente enviado para o destinatário, a ferramenta dá uma visão geral de como será feita a entrega.

acesse: [mailtrap.io](https://mailtrap.io/)
```sh
usuario: wess.ribeiro01@gmail.com
senha: netshowme
```
#### Ferramentas utilizadas
| ferramenta | Versão |
| ------ | ------ | 
| PHP | 7.4.9 ou maior|
| MYSQL | 8.0.21 ou maior |  |
| Laravel | 8.0 |

### Instalação
```sh
dentro da pasta, nivel raiz:
$ sudo chmod 777 -R storage
$ sudo chmod 777 -R bootstrap/cache
$ sudo chmod 777 -R storage/logs
$ sudo cp .env.local .env
$ sudo composer selfupdate
$ sudo composer install
$ sudo php artisan key:generate (se não rodar no install)
$ sudo php artisan storage:link
```
- crie um banco com nome `netshowme`

## migration
```sh 
$ php artisan migrate
```

## Queues
- No arquivo `.env` está como `QUEUE_CONNECTION=sync` para não precisar rodar worker. Caso queira mudar para `QUEUE_CONNECTION=database`, terá que rodar o seguinte comando `php artisan queue:work --queue=emails` pra rodar a fila "email" e executar os jobs que entrar nela.


## Testes unitários
```sh 
$ php artisan test
```

##rodando o projeto
```sh 
$ php artisan serve
esperado o seguinte localhost: http://127.0.0.1:8000    
```
