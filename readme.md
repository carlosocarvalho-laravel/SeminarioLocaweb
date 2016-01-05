# Tema Base para Slides do Semniario Locaweb PHPSP

Bem vindo palestrnte, esse repositório contem o tema base para os slides do Seminario Locaweb PHPSP. Aqui você
encontrará toda a estrutura necessária para desenvolver seus slides de forma simples e permitindo total interatividade
aos participantes do evento.

## Instalando as Dependencias

Para instalar as dependencias dos projeto simplesmente execute:

```bash
composer install
```

## Rodando a Aplicação

Certifique-se de ter instalado Vagrant, Virtualbox e o plugin `vagrant-hostmanager`. Os plugins `vagrant-cachier` e 
`vagrant-bindfs` são opcionais.

Esse repositório possui receitas de provisionamento com Vagrant criadas usando PuPHPet, portanto para rodar a aplicação
basta executar o comando `vagrant up` na raiz do projeto, isso irá baixar uma imagem ubuntu 14.04, instalar e configurar
tudo que é necessário para rodar a aplicação. Porem esse processo pode levar um tempo.

Após concluído o processo de provisionamento acesse a maquina virtual via ssh uutilizando o comando `vagrant ssh` e
inicie o servidor de slides com o seguinte comando no diretório `/vagrant`:

```bash
sudo php artisan slides:server
```

### Rodando Localmente sem Vagrant

Caso você deseje executar a aplicação diretamente no seu sistema vocÊ pode usar Apache ou NGINX configurando o virtual
host para apontar para o diretório `public` desse repositório, ou executar o comando a seguir que irá levantar um 
servidor de desenvolvimento local.

```bash
sudo php artisan serve
```

Algumas extensões do PHP e outras dependencias devem estar habilitadas ou instaladas no seu sistema para que a aplicação
rode normalmente utilizando esse comando, você pode consultar a insfraestrutura recomendado no arquivo de descrição do
PuPHPet localizado em `puphpet/config.yaml`

## Acessando os Slides

Existem duas forma de acessar os slides, como expectador ou como apresentador, somente como apresentador você terá
acesso aos controles dos slides, os expectadores apenas poderão vizualizar os slides que estiverem sendo contralados
pelo apresentador.

Se não tiver executado com Vagrant substitua o endereço pelo endereço configurado no seu ambiente ou por 
http://localhost:8000 caso esteja executando com o servidor de desenvolvimento tanto ao acessar como apresentador
quanto como expectador

### Acesso aos Slides

http://seminario.dev

Para acessar como expectador digite qualquer e-mail válido na caixa de e-mail e deixe a senha em branco.
Para acessar como apresentador use as seguintes credenciais:

```
Email: admin@admin.com.br
Senha: phprules
```

## Slides de Exemplos

O Projeto possui alguns slides de exemplo para você utilizar como base na sua apresentação, sinta-se a vontade para
fazer os seus slides da forma que achar melhor, os slides de exemplo contem mais informações sobre como montar sua 
apresentação.

## Aviso

Esse é um trabalho em andamento, envie Pull Requests com seus Slides para esse repositório mas esteja ciente de que
outros palestrantes e organizadores do evento tambem estarão realizando mudanças no projeto ao mesmo tempo, por isso
procure não interferir nas demais alterações.

Caso tenha algum problema com a aplicação abra uma issue nesse mesmo respositório

## Know Issues

### Conexão SSH

Se durante o provisionamento da maquina virtual você receber uma sequencia de erros com a seguinte mensagem:

```
Warning: Authentication failure. Retrying...
```

Acesso o diretório `puphpet/files/dot/ssh` e remova todos os arquivos de dentro desse diretório exceto o arquivo 
`insecure_private_key`. Em seguida remova a maquina virtual e inicie o procedimento novamente com os seguintes comandos:

```
vagrant destroy
vagrant up
```

### Problema de Memcached

Identificamos um possível problema na instalação do memcached na maquina virtual, porem o problema parece não acontecer
em 100% das vezes, caso receba um erro informando que a classe `memcached` não foi encontrada ao acessar os slides
execute os seguintes passos para corrigir os problemas

1. Acesse a maquina virtual via ssh com `vagrant ssh`
2. Certifique-se que memcached e php5-memcached estão instalados com `sudo apt-get install memcached php5-memcached`
3. Crie um arquivo de configuração do memcached com `sudo touch /etc/php5/mods-available/memcached.ini`
4. Acesse esse arquivo com o seu editor de texto favorito. ex: `sudo vim /etc/php5/mods-available/memcached.ini`
5. Insira o seguinte conteúdo nesse arquivo `extension=memcached.so`. Salve e feche `:wq` se estiver no vim
6. Execute o seguinte comando: `php5enmod memcached` para habilitar a extensão
7. Reestart os serviços com `sudo service php5-fpm restart && sudo service memcached restart && sudo service nginx restart`

Caso o problema persista abra uma issue nesse repositório para que possamos ajuda-lo.

### License

Livre para o universo! :-D
