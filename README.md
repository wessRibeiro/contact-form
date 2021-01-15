### Serviço de SMTP Mailtrap:
- Por ser uma ferramenta para testes, o e-mail não será efetivamente enviado para o destinatário, a ferramenta dá uma visão geral de como será feita a entrega.
acesse: [mailtrap.io](https://mailtrap.io/)
usu: wess.ribeiro01@gmail.com
pass: netshowme
#### Ferramentas utilizadas
| ferramenta | Versão |
| ------ | ------ | 
| PHP | 7.4.9 ou maior|
| MYSQL | 8.0.21 ou maior |  |
| Laravel | 8.0 |

para deixar a fila de email esperando worker no .env
QUEUE_CONNECTION=database
abra uma aba do terminal e rode o comando abaixo para acionar o worker:
php artisan queue:work --queue=emails
