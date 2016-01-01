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

### Acesso com Apresentador

http://seminario.dev/presenter

Usuário: admin
Senha: phprules

### Acesso como Expectador

http://seminario.dev

## Slides de Exemplos

O Projeto possui alguns slides de exemplo para você utilizar como base na sua apresentação, sinta-se a vontade para
fazer os seus slides da forma que achar melhor, os slides de exemplo contem mais informações sobre como montar sua 
apresentação.

## Aviso

Esse é um trabalho em andamento, envie Pull Requests com seus Slides para esse repositório mas esteja ciente de que
outros palestrantes e organizadores do evento tambem estarão realizando mudanças no projeto ao mesmo tempo, por isso
procure não interferir nas demais alterações.

Caso tenha algum problema com a aplicação abra uma issue nesse mesmo respositório

### License

Livre para o universo! :-D
