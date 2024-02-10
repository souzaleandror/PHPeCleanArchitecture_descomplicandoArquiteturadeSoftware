###### 06/02/2024

Curso de PHP e Clean Architecture: descomplicando arquitetura de software

@01-Conhecendo o sistema 

@@01
Introdução

[00:00] Sejam muito bem-vindos. Meu nome é Vinicius Dias, embora vocês não estejam me vendo vou ser o instrutor para guiar vocês nesse nosso estudo sobre arquitetura utilizando php.
[00:11] Neste treinamento, que vai ser uma introdução ao conceito de arquitetura e como arquitetura pode modelar nossa aplicação, vamos começar falando sobre o que é o domínio da nossa aplicação. Vamos trabalhar com uma aplicação de alunos, onde podemos matricular alunos, um aluno pode indicar o outro, etc. E nessa aplicação vamos começar criando o que faz sentido. O aluno.

[00:33] Vamos trabalhar com nosso domínio primeiro e com isso vamos entender o conceito de entidade, vamos avançar aprendendo o conceito de value object, ou objeto de valor. Vamos criar alguns desses value objects.

[00:46] Falando sobre nosso domínio, não podia faltar o assunto sobre testes. Implementamos alguns poucos testes e vários outros vão ficar de desafio para você implementar durante o treinamento. Vamos ver como podemos dividir nossa aplicação em módulos, em camadas, e vamos praticar bastante isso, vamos colocar isso tudo na prática.

[01:10] Vamos falar sobre serviços de domínio, serviços de infraestrutura, serviços de aplicação, use cases, como separar os pontos de acesso da nossa aplicação a partir de diferentes mecanismos de entrega. Como por exemplo linha de comando, web, API, mensageria, de onde quer que venha a informação vamos estar preparados para lidar com ela.

[01:32] Quero deixar bem claro que tudo que eu falar durante este treinamento você não deve levar como regra, mas sim como sugestão. Não existe melhor ou pior forma quando estamos falando sobre arquitetura. Existe solução que é mais recomendada para determinados casos. Existem soluções mais recomendadas para outros casos. De novo, não tome nada do que eu falar como verdade absoluta e sim como uma sugestão, uma possível solução.

[02:00] Durante este treinamento vou fazer vários desafios, várias propostas de questionamento, então este treinamento vai ser para você se perguntar em como você pode implementar determinadas coisas durante sua carreira no desenvolvimento, como você pode desenvolver melhor, como você pode modelar e arquitetar melhor sua aplicação.

[02:20] Pela última vez vou falar aqui, nada do que eu falar é regra, são todas sugestões. Obviamente baseadas em estudos, obviamente baseadas em conceitos que já existem há algum tempo, mas conceitos podem ser revistos, revalidados, coisas mudam, principalmente em tecnologia.

[02:40] Espero que você aproveite bastante esse treinamento, pratique e faça os exercícios que vou propor durante este treinamento. Caso qualquer dúvida fique nesse processo não hesite, você pode abrir uma dúvida no nosso fórum. Eu tento responder e interagir sempre que possível, pessoalmente. Quando não consigo nossa comunidade de alunos e moderadores é bem solicita, sempre tem alguém disposto a ajudar.

[03:02] Mais uma vez, seja muito bem-vindo, espero que você aproveite bastante, e te vejo no próximo vídeo para começarmos a bater um papo sobre esse nosso curso.

@@02
O que é arquitetura?

[00:00] Bem-vindos de volta. Antes de começarmos a colocar a mão na massa, criar algum projeto propriamente dito, vamos falar um pouco sobre a necessidade de estudar o que vamos estudar.
[00:12] Se você fez e espero que tenha feito, porque é um pré-requisito deste treinamento, o treinamento de MVC, você provavelmente ficou se perguntando várias coisas. Você provavelmente ficou com várias perguntas. Como por exemplo, se tenho uma regra de negócios complexa, essa regra de negócios fica no meu controller? Vai ficar dentro da minha camada model? A minha camada model é só de acesso a dados? É de regra de negócios? É só minha entidade? São meus repositórios? O que faz parte da camada model? O que é um serviço?

[00:44] Você provavelmente tem muitas perguntas e neste treinamento você não vai ter todas as suas perguntas respondidas, mas você pelo menos vai entender um pouco melhor e saber fazer perguntas um pouco mais complexas. Durante este treinamento, vamos primeiramente entender como modelar uma aplicação, como fazer com que uma aplicação esteja um pouco mais organizada do ponto de vista do código, como fazemos para separar as partes do nosso código de forma que seja fácil manter, ler, estender.

[01:20] Vamos começar a entender sobre alguns padrões arquiteturais, e não se atente a essa imagem agora, mas vamos ver um pouco mais sobre ela mais para a frente.

[01:22] Vou pedir para vocês só focarem no ponto em que temos o domínio do negócio separado em um canto. Se pegarmos alguma outra imagem de algum outro modelo que vamos falar também temos de novo o nosso domínio sendo separado.

[01:24] Aqui temos com outro nome, que foi dado nessa imagem de entidades, mas temos também nosso domínio separado.

[01:52] Vamos começar a conversar sobre o que é domínio, o que é o domínio do nosso negócio, e além de falar sobre o que é vamos começar a separar o domínio de qualquer outra coisa, e vamos entender a motivação para fazer isso. Por que pode ser interessante separar o domínio da nossa aplicação de qualquer outra coisa, de detalhes da web, de detalhes de persistência, como banco de dados, arquivos e essas coisas, e conforme vamos avançando no treinamento vamos conhecendo padrões que nos ajudam a fazer isso, blocos de construção que vão ajudar a atingir nossos objetivos.

[02:30] Basicamente o que vamos ver neste treinamento é uma forma de organizar nosso código melhor na prática, e sem utilizar definições pesquisadas na internet, sem utilizar definições complexas. Arquitetura de software é mais ou menos isso. É você modelar, organizar, criar um modelo, uma forma de organizar sua aplicação, seu código, suas classes, suas pastas, o que for, para que essa aplicação, que esse software, seja fácil de dar manutenção, seja fácil de estender, adicionar novas funcionalidades sem quebrar funcionalidades antigas.

[03:13] Neste treinamento vamos ver bastante coisa, é um conteúdo bastante denso. Como já falei no vídeo anterior, espero que você já tenha os conhecimentos de solid bem fixados, conheça pelo menos alguns padrões de projeto, já tenha estudado sobre MVC, e a partir deste treinamento vamos treinar bastante coisa legal, vamos ver bastante coisa legal.

[03:33] No próximo vídeo já começamos colocando a mão na massa criando um projeto.

https://caelum-online-public.s3.amazonaws.com/1774-php-arquitetura-introducao/transcrição+/Aula+1/%5BAula1_Video2_Imagem1%5D.png

https://caelum-online-public.s3.amazonaws.com/1774-php-arquitetura-introducao/transcrição+/Aula+1/%5BAula1_Video2_Imagem2%5D.png

https://caelum-online-public.s3.amazonaws.com/1774-php-arquitetura-introducao/transcrição+/Aula+1/%5BAula1_Video2_Imagem3%5D.png

@@03
Para saber mais: Arquitetura

O conceito de arquitetura de software por si só é bastante abstrato, mas ao colocar a mão na massa, as coisas ficam mais simples de entender.
Aqui tem um artigo que explica um pouco sobre o que é arquitetura, design de código, cita alguns padrões, etc: https://dias.dev/2020-04-10-o-que-e-arquitetura/.

https://dias.dev/2020-04-10-o-que-e-arquitetura/

@@04
Preparando o ambiente

[00:00] Bem-vindos de volta. Vamos criar nosso projeto para começarmos a colocar a mão na massa finalmente. Antes de qualquer coisa precisamos obviamente ter o php instalado, pelo menos na versão 7.4. Não estou com a última versão do PHP 7.4 aqui, mas pelo menos a 7.4.0 você precisa ter.
[00:20] Se quando você estiver assistindo este treinamento já tiver sido lançada a versão 8 do php pode utilizar sem problema que tudo que vamos fazer aqui funciona no PHP 8 também.

[00:35] Com o PHP instalado, também vamos precisar do composer. A versão do Composer não vai importar muito, mas sempre tenha ela atualizada também. E isso tudo já tratamos em treinamentos anteriores, então não vou mostrar como instalar nem nada do tipo.

[00:50] A primeira coisa que vamos fazer é criar nosso famoso composer.json, aquele arquivo que indica como nosso projeto vai estar, quais dependências nosso projeto vai utilizar e como vamos definir o autoloader dele, tudo isso já tratamos em cursos anteriores. Para fazer isso, vamos em "arquitertura" > "New" > "File" e nomeamos de "composer.jason".

[01:06] Criando nosso arquivo "composer.json" vou definir a chave autoload e dentro de autoload vou dizer que vou utilizar a psr-4 para isso. Vou definir meu name space raiz, você pode utilizar algum outro, vou utilizar "Alura\\Arquitetura\\". Esse name space raiz vai estar armazenado na pasta "src/".

{
    "autload": {
        "psr-4": {
            "Alura\\Arquitetura\\": "src/"
        }
    }
} COPIAR CÓDIGO
[01:30] Isso é tudo que precisamos por enquanto para começar nosso projeto. Com esse arquivo já definido, obviamente vou precisar da minha pasta "src", porque aqui dentro dessa pasta vão estar todo os arquivos do projeto. Então abrimos um novo diretório em "arquitetura" > "New" > "File" com o nome "src".

[01:40] Com isso definido posso rodar o composer dumpautoload. Isso vai criar uma pasta "vendor" e aqui dentro tenho meu arquivo de "autoload.php". Esse arquivo é o ponto de entrada de qualquer aplicação php para você conseguir utilizar qualquer outra classe sem precisar ficar dando required. Nada novo até aqui, só criamos o projeto.

[02:10] Recapitulando. Precisamos do PHP 7.4 no mínimo, precisamos do composer instalado, configuramos o autoloader e vamos agora finalmente colocar a mão na massa, começar a implementar algum código no nosso projeto. No próximo vídeo começamos a escrever código.

@@05
Entidades

[00:00] Bem-vindos de volta. Vamos criar nossa primeira classe. O projeto que vamos criar é uma escola, uma empresa de treinamentos, bem parecida com a Alura. O que precisamos começar a pensar? Qual o foco da Alura? São seus alunos. A primeira coisa que vamos criar, a primeira coisa que vamos modelar é nossa classe que representa um aluno.
{
    "autoload": { 
        "psr-4":{
            "Alura\\Arquitetura\\": "src/"
        }
    }
}COPIAR CÓDIGO
[00:25] Por que não começamos pelo controller, pelo banco de dados, ou alguma coisa assim? Porque o que é mais importante para um sistema? Um banco de dados? O que é mais importante é a internet? Ou o que é mais importante é o domínio, o negócio da aplicação?

[00:45] Se você chega para o seu gerente ou para sua chefe, para quem for, para quem você responde, se você vira para essa pessoa e diz que você vai utilizar o mongodb com elastic search e o caramba, para essa pessoa não importa tanto quanto se uma pessoa está conseguindo se matricular na sua escola, se essa pessoa está conseguindo receber os e-mails corretamente. O que importa é se o negócio está funcionando, e não como. Para o negócio, como ele vai funcionar não é tão importante quanto o fato dele funcionar.

[01:21] Vamos começar pelo negócio da aplicação, pelo mais importante, pelo núcleo do nosso sistema, e aqui vai ser aluno. Vou criar uma nova classe, se atente ao Namespace que definimos no autoloader e vamos criar uma classe chamada "Aluno".

[01:40] Se você quiser utilizar em inglês neste treinamento, ao invés de aluno chamar de "student", sem problema, funciona da mesma forma. Eu vou utilizar português aqui só para mantermos nossa língua mãe.

[01:50] Vamos começar com o primeiro atributo, que obviamente todo aluno tem. Todo aluno tem um nome, seja o nome completo, só alguma parte do nome, isso não importa por enquanto, mas o aluno tem um nome. Isso já é sabido, já é conhecido.

namespace Alura\Arquitetura;

class Aluno
{
    private string $nome;
}COPIAR CÓDIGO
[02:06] Agora vou te fazer uma pergunta que para você muito provavelmente a resposta é óbvia, mas tendemos a não nos perguntarmos tanto. Se tenho dois alunos com o mesmo nome, esses dois alunos são a mesma pessoa? Por exemplo, meu nome é Vinicius. Se existir um outro Vinicius como aluno na Alura, somos a mesma pessoa? Obviamente não. Somos duas pessoas diferentes apesar de nossos atributos, de nossas informanações, serem iguais.

[02:38] Nesse caso, precisamos de uma identidade, de algo para diferenciar um Vinicius de outro Vinicius, porque só o nome não cumpre essa tarefa. O que pode ser único no sistema para referenciar o aluno? Temos algumas opções. Podemos no nosso banco de dados ter um id, que é um número inteiro que a cada novo aluno que eu criar o banco de dados gera um id para mim.

class Aluno
{
    private int $id;
    private string $nome;
}COPIAR CÓDIGO
[03:06] Isso está ok, vai funcionar. Caso utilizemos banco de dados, caso utilizemos especificamente um banco de dados relacional, que tenha essa funcionalidade chamada de autoincrement. Mas e se futuramente eu não salvar mais meu aluno em um banco de dados que tenha uma chave primária como é conhecido auto incrementar, que não crie, que não gere um id para mim?

[03:30] Se eu estiver usando um banco de dados que não tenha essa funcionalidade, se eu não utilizar um banco de dados, se eu passar a salvar isso em outra API, se eu passar a salvar isso em arquivos, em um banco de dados chave-valor. Como esse valor vai ser gerado?

[03:44] Começamos a nos perguntar algumas coisas, como será que meu domínio precisa mesmo de um detalhe de infraestrutura para conseguir funcionar? Será que não consigo identificar um aluno só na minha aplicação, sem depender de banco de dados, sem depender de ferramentas externas? E aí começamos a nos perguntar o que mais pode ser utilizado para termos como identificador de cada aluno. E você provavelmente tem algumas sugestões, como por exemplo ao invés de utilizar um id utilizar CPF, RG, gerar um uuid, talvez você não conheça esse termo, mas é um identificador que dá para ser gerado.

class Aluno
{
    private int $uuid'
    private string $nome;
}COPIAR CÓDIGO
[04:22] Isso tudo é armazenado como string, ou como algum outro tipo de dado mais específico, mas não é um inteiro que o banco de dados vai criar. Então, neste treinamento, vou optar por identificar cada aluno através do seu CPF. Na verdade, eu não. Minha chefe falou para mim, minha gerente virou para mim e disse “olha só, precisamos do CPF do aluno para saber quem é quem e também precisamos do nome dele”.

class Aluno
{
    private string $cpf;
    private string $nome;
}COPIAR CÓDIGO
[04:50] O que estou querendo dizer aqui? Quando formos criar um sistema, o primeiro ponto, a primeira coisa que temos que entender é o que o negócio precisa. Já foi definido anteriormente pela minha gerente que meu negócio, meu aluno, precisa ter um CPF para que identifiquemos cada um dos alunos, e também precisa ter um nome para podermos nos referir ao aluno de alguma forma.

[05:12] Falamos com o campo de negócios, com as pessoas de negócios para definir o que cada classe vai ter, o que cada parte do nosso sistema precisa ter. E uma classe que representa um conceito do domínio, um conceito do negócio, e que possui uma forma de se identificar, possui uma identidade que diferencia uma instância de qualquer outra instância, é chamada de entidade.

[05:40] Já vimos isso nos treinamentos sobre persistência, seja com PDO, seja com doctrine, mas aqui esse conceito fica um pouco mais claro. Uma entidade precisa ter uma identidade. Ou seja, se um aluno com mesmo nome de outro pode ser um aluno diferente e ele precisa de uma identidade, isso vai ser modelado no nosso sistema utilizando uma entidade.

[06:02] Isso é um bloco de construção, uma espécie de padrão chamado entidade que utilizamos na maioria das vezes quando temos algum modelo do nosso negócio, alguma classe que vamos criar do nosso negócio.

[06:16] Só que nem sempre nossas classes vão ser entidades. E aqui vou deixar para você um desafio. Na verdade, dois desafios, e na próxima aula vou resolver um com você e você vai resolver o outro. Também preciso, além do CPF e do nome, do e-mail desse aluno. Só que um e-mail tem muitas regras de validação.

class Aluno

{

    private string $cpf;
    private string $nome;
    private string $email;

} COPIAR CÓDIGO
[06:45] Um e-mail precisa ter arroba, o domínio, ponto alguma coisa. Então, ao invés de salvar isso como string, quero ter uma classe chamada e-mail. No próximo vídeo vamos comentar um pouco sobre as particularidades que esse tipo de classe pode ter.

@@06
ValueObjects

[00:00] Bem-vindos de volta. No último vídeo já deixei uma deixa para vocês falando que precisávamos de uma classe chamada e-mail. Vamos criar essa classe. Com php storm posso dar "Alt + Enter" e enter que ele já vai criar a classe para mim no mesmo name space, na mesma pasta.
class Aluno

{

    private string $cpf;
    private string $nome;
    private string $email;

}
COPIAR CÓDIGO
[00:20] Um e-mail tem que ter um endereço, certo? Então ‘private string $endereco’. Vamos receber, vamos criar esse e-mail recebendo o endereço por parâmetro no construtor. Nada novo até aqui, tudo coisas que já aprendemos. "Alt + Enter" no php storm, inicialize properties, e ele inicializa esse e-mail com o endereço correto.

[00:44] Só que eu quero validar. Eu não posso criar um e-mail com endereço inválido, nunca, isso não pode existir. Então, direto no construtor já vou adicionar essa validação, se for inválido esse e-mail posso lançar uma exceção do tipo InvalidArgumentException e a mensagem "Endereço de e-mail inválido" ou algo do tipo.

class Email
{
    private string $endereço;
    
    public function __construct(string $endereco)
    {
        if() { 
            throw new \InvalidArgumentException(message 'Endereço de e-mail inválido')
        } 
        $this->endereco = $endereco;
    }
}
COPIAR CÓDIGO
[01:12] Mas eu não poderia criar uma exceção do tipo e-mail inválido? Obviamente você poderia, não tem problema nenhum, e caso você queira seguir essa abordagem vá em frente, faz todo sentido. Eu vou manter dessa forma só para manter mais breve, para ser um pouco mais rápido.

[01:30] Agora vou fazer um filtro -FILTER_VALIDATE_EMAIL- nessa variável endereço, para garantir que é um e-mail válido. Se isso me retornar falso - false - se por algum motivo essa função de validação disser que deu falso, se o retorno dessa função de validação for falso, vou lançar uma exceção. Ou seja, se o endereço não for e-mail válido, lança essa exceção. Agora, se não for vai sair do if e inicializar o endereço.

if(filter_var($endereco, filter: FILTER_VALIDATE_EMAIL) === false) { 
    throw new \InvalidArgumentException(
        message 'Endereço de e-mail inválido'
    );
}
COPIAR CÓDIGO
[02:00] E todo e-mail faz sentido que consiga exibir um e-mail, receber esse e-mail como string, esse tipo de coisa. Também já vimos em treinamentos anteriores como representar um objeto como se ele fosse uma string, que é através do método toString. Nesse método simplesmente vou retornar o endereço.

public function __toString(): string
    {
        return $this->endereco;
    }
COPIAR CÓDIGO
[02:22] Com isso já tenho uma classe de e-mail completa, posso inclusive explicitar que isso retorna uma string. Caso você quando estiver assistindo esse treinamento já esteja utilizando o php 8, a versão já tenha saído, existe uma interface chamada Stringable, e essa interface te obriga a criar esse método toString. Não é necessário, mas pode ser interessante, você pode utilizar essa interface, que é uma coisa nova.

[02:50] Tenho minha classe de e-mail criada. Pensa comigo. Se tenho dois e-mails com endereço igual, isso significa que esses dois são o mesmo e-mail? Se você voltar essa pergunta e se fizer essa pergunta pensando no aluno, não. Dois alunos com o mesmo nome não são o mesmo aluno. Agora, dois e-mails com o mesmo endereço são sim o mesmo e-mail. Ou seja, não preciso criar nenhum identificador único para o e-mail. Não preciso criar algo desse tipo int $id. Não preciso criar isso, porque se tenho dois e-mails com o endereço contato@exemplo.com, esses dois são iguais, são o mesmo e-mail, em qualquer sentido da palavra de igualdade.

[03:44] Ou seja, não precisamos de nenhuma identificação. E se temos uma classe de domínio que representa algo do nosso domínio, do nosso negócio, e no caso um aluno tem um e-mail, logo e-mail faz parte do nosso domínio, do nosso negócio. Se temos uma classe do nosso negócio que não precisa de nenhum atributo único, de nenhuma identificação a mais, ou seja, se tenho uma classe que caso todos os seus atributos sejam iguais, esses dois objetos vão ser iguais, isso é, esse padrão, ao invés de ser entidade, como vimos com aluno, é um value object, ou objeto de valor.

[04:24] A principal diferença entre entidades e objetos de valor são a forma como comparamos eles dois, como fazemos a igualdade entre entidades e objetos de valor. Por exemplo, se tenho, e nem vou abrir um terminal do php, vou fazer aqui, um novo e-mail com contato@alura.com.br e comparar com um novo e-mail que também é contato@alura.com.br, essa comparação teoricamente, óbvio que o php pode funcionar de formas diferentes dependendo do caso, no sentido de que se formos pensar na lógica, isso é igual.

[05:05] Agora, se tenho um novo aluno que se chama Vinicius, ele é igual ao novo aluno que se chama Vinicius também? Não necessariamente. Então precisamos validar algo mais, não só o atributo do aluno. Logo, o aluno é uma entidade, ele precisa de uma identificação, e usamos CPF para isso.

[05:30] Já e-mail não. Se tenho um e-mail com o mesmo endereço de outro, esses dois são iguais e isso é a definição de um objeto de valor. Talvez a explicação tenha ficado um pouco confusa, mas é um conceito bem simples e vou deixar um artigo bem descritivo sobre isso, sobre esse assunto de value object ou objeto de valor.

[05:50] E já que falamos bastante sobre esse conceito que é até relativamente simples, eu vou deixar um desafio para você criar um value object do CPF também. Ao invés de utilizarmos uma string, vamos utilizar um objeto, uma classe chamada CPF. Sempre que for inicializar um aluno preciso inicializar com um objeto do tipo CPF, e não com uma string. Deixo esse desafio e no próximo vídeo mostro rapidinho como implementei.

@@07
Entidades vs VO

Até aqui, nós apenas revisitamos com mais detalhes alguns conceitos que já foram vistos em cursos anteriores, como o de PDO, por exemplo.
Qual a diferença entre uma Entidade e um Objeto de Valor (Value Object)?

Entidades possuem uma identidade única, enquanto Objetos de Valor são considerados iguais, se todos os seus atributos tiverem valor igual
 
Alternativa correta! Se dois e-mails possuem o mesmo endereço, podemos considerá-los como o mesmo e-mail. Já duas pessoas com o nome, altura e idade não necessariamente são a mesma pessoa.
Alternativa correta
Objetos de Valor possuem uma identidade única, enquanto Entidades são consideradas iguais, se todos os seus atributos tiverem valor igual
 
Alternativa errada! É justamente o contrário.
Alternativa correta
Não há diferença prática entre Entidades e Objetos de Valor. São dois nomes para a mesma coisa

@@08
Para saber mais: VO

Às vezes o conceito do que pode ser um Value Object acaba ficando meio nublado em nossos pensamentos e isso é perfeitamente normal.
O artigo a seguir deixa uma descrição interessante sobre o que é um Value Object e pode ser usado como referência sempre que você quiser rever esse assunto: https://martinfowler.com/bliki/ValueObject.html.

@@09
Faça como eu fiz

Chegou a hora de você seguir todos os passos realizados por mim durante esta aula. Caso já tenha feito, excelente. Se ainda não, é importante que você execute o que foi visto nos vídeos para poder continuar com a próxima aula.

Continue com os seus estudos, e se houver dúvidas, não hesite em recorrer ao nosso fórum!

@@10
O que aprendemos?

Nesta aula, aprendemos:
O que é arquitetura de software
O que são entidades e que elas possuem uma identidade única
Sobre Value Objects e que a sua igualdade se dá pela comparação dos seus valores

#### 07/02/2024

@02-Enriquecendo o domínio

@@01
Projeto da aula anterior

Caso queira, você pode baixar aqui o projeto do curso no ponto em que paramos na aula anterior.

https://caelum-online-public.s3.amazonaws.com/1774-php-arquitetura-introducao/01/php-arquitetura-projeto-aula-1-completo.zip

@@02
Adicionando telefones

[00:00] Bem-vindos de volta a mais um capítulo deste treinamento de arquitetura utilizando php. Deixei um desafio para vocês no último vídeo onde queria que vocês criassem uma classe que representasse um CPF, que também é um value object, a gente não precisa de nenhum outro identificador para o CPF porque se temos dois objetos CPF com o mesmo número, significa que é o mesmo CPF.
[00:25] Criei minha classe e coloquei algumas coisas novas para vocês conhecerem.

class Cpf
{
    private string $numero;

    public function __construct(string $numero)
    {
        $this->setNumero($numero);
    }

    private function setNumero(string $numero): void
    {
        $opcoes = [
            'options' => [
                'regexp' => '/\d{3}\.\d{3}\.\d{3}\-\d{2}/'
            ]
        ];
        if(filter_var($numero, filter: FILTER_VALIDATE_REGEXP, $opcoes) == false) {
        throw new \InvalidArgumentException(message 'CPF no formato inválido');
        }

        $this->numero = $numero;
    }COPIAR CÓDIGO
[00:31] Primeiro, aqui no meu construtor não estou fazendo filtro diretamente. Estou chamando um método privado chamado setNumero. E por que primeiro o nome está assim, misturando inglês com português, segundo, por que esse método está privado?

[00:50] $this->setNumero(#numero); é chamado de self encapsulation, ou auto encapsulamento. Aqui, estou criando um método privado simplesmente para diminuir o tamanho do meu construtor. Ou seja, estou separando meu código em partes menores.

[01:08] Dentro do meu método que está encapsulando meu próprio código, que estou tendo um método privado dentro da minha classe só para separar melhor o código, estou fazendo também o que é chamado de guard clause, ou cláusula de guarda. Estou fazendo um filtro antes de tentar fazer uma atribuição, antes de tentar realizar a ação desejada.

[01:30] Aqui não é muito conceito novo, mas vale a pena citar o motivo de ter feito dessa forma para você conhecer esses termos, e até para poder dar uma pesquisada mais a fundo.

[01:42] Além de conseguir criar um CPF com número definido chamando esse método, temos mais uma vez o filter_var, só que dessa vez passando um array de opções, e dentro dessas opções do filter_var posso ter esse parâmetro options, e dentro como estou fazendo um filtro de regexp, ou seja, expressão regular, posso definir a expressão regular. E minha expressão regular é uma sequência de três números, ponto, outra sequência de três números, ponto, mais uma sequência de três números, traço, e uma sequência de dois números.

'regexp' => '/\d{3}\.\d{3}\.\d{3}\-\d{2}/'COPIAR CÓDIGO
[02:22] Se o número que eu passar não estiver nesse formato, eu recebo uma exceção. Caso contrário inicializo. E tenho da mesma forma que fizemos com e-mail um método toString.

public function __toString(): string
{
    return $this->numero;
    }
} COPIAR CÓDIGO
[02:35] Se isso estiver muito complexo para entender, como deixei no exercício pedindo como desafio, criei um teste para isso.

class CpfTest extends TestCase
{
    public function testCpfNumeroNoFormatoInvalidoNaoDevePoderExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Cpf(numero: '12345678910');
    }

public function testCpfDevePoderSerRepresentadoComoString()
{
    $cpf = new Cpf(numero '123.456.789-10');
    $this->assertSame(expected: '123.456.789-10', (string) $cpf);
    }
}COPIAR CÓDIGO
[02:46] Estou verificando que se eu passar um CPF, criar um CPF com número inválido, espero que minha exceção seja lançada, uma exceção do tipo InvalidArgumentException.

[02:53] Agora, se eu criar um CPF válido, quero poder representar ele como string. Estou garantindo que é a mesma coisa essa string e o CPF, que é um objeto do tipo CPF representado como string. E como já estou criando testes, como já configurei o ambiente com php unit e tudo, criei também o mesmo teste, só que para um e-mail. Estou tentando criar um e-mail inválido e depois crio um e-mail válido e garanto que ele pode ser representado como string também.

class EmailTest extends TestCase
{
    public function testEmailNoFormatoInvalidoNaoDevePoderExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Email(endereco: 'email inválido');
    }

public function testEmailDevePoderSerRepresentadoComoString()
    {
        $email = new Email(endereco: 'endereco@example.com');
        $this->assertSame(expected: 'endereco@example.com', (string) $email);
    }
} COPIAR CÓDIGO
[03:22] Para rodar esses testes, como você já fez o curso de PHP Unit aqui na Alura, é só rodar vendor/bin/phpunit e estão lá nossos testes sendo executados. Como eu estou utilizando php storm, tenho uma facilidade que já configurei para conseguir rodar todos os testes direto da minha IDE, e tenho meu resultado. Como minha resolução está um pouco maior para vocês verem o resultado não fica tão fácil de ver, mas tenho o resultado com todos os testes e cada um dos métodos, tudo passando.

[03:52] Mais uma vez, esse não é o foco do treinamento, temos treinamentos de testes aqui, mas só para dar uma passada, para deixar esse desafio também, vamos dar uma olhada no nosso arquivo de configuração, e tudo que estou dizendo é que tenho uma switch de testes só que está dentro da minha pasta testes. E também, só para caso eu queira por algum motivo utilizar meus arquivos de teste e minhas classes de teste em algum outro lugar, com algum outro framework ou alguma coisa assim, criei o autoload-dev.

"autoload-dev":{
    "psr-4": {
        "Alura\\Arquitetura\\Testes\\" "testes/"
    }
}COPIAR CÓDIGO
[04:21] Ele não é necessário, só criei também para você conhecer e pesquisar mais sobre o assunto. Agora que já passamos por essa recapitulação, vamos enriquecer nosso domínio. Um aluno tem e-mail, um aluno tem CPF, só que também quero poder ter uma lista de telefones desses alunos. Vamos criar um telefone, uma classe telefone, e pensa comigo. Se um telefone tem o mesmo DDD e o mesmo número de outro telefone, significa que são o mesmo telefone, certo? Ou seja, isso também vai ser um value object.

[05:00] Vamos criar como string um ddd e vamos criar também como string o número desse telefone.

class Telefone
{

    private string $ddd;
    private string $numero;
}COPIAR CÓDIGO
[05:08] O que vou fazer? No nosso Aluno, vou dizer que posso, primeiro tenho um array, uma lista, o que for, de telefones, e quero poder adicionar telefone.

private string $ddd;
private_string $numero;
private Email $email;
private array $telefones;

public function adicionarTelefone()
{COPIAR CÓDIGO
[05:24] Tenho duas opções. Posso receber direto um $telefone ou posso fazer com que ninguém crie telefone fora de um aluno, não crie um telefone avulso. Ou seja, vou receber direto $ddd e um $número, e dentro do meu próprio método vou criar um novo telefone.

public function adicionarTelefone(Telefone $telefone)COPIAR CÓDIGO
public function adicionarTelefone(string $ddd, string $numero)
{
    $this->telefones[] = new Telefone($ddd, $numero);
}COPIAR CÓDIGO
[05:58] Essas são duas abordagens, não vou entrar no detalhe de qual é mais vantajosa e por que, mas vou seguir essa abordagem. Se tenho agora um telefone que precisa de $ddd e precisa de $numero, preciso adicionar esse construtor na minha classe de telefone, certo? Vamos criar um construtor.

public function __construct()
{
}COPIAR CÓDIGO
[06:10] Ou utilizando PHP Storm posso fazer "Alt + Insert" e construtor. Seleciono todos e pronto, já tenho meu construtor criado.

public function __construct(string $ddd, string $numero)
{
    $this->ddd = $ddd;
    $this->numero = $numero;
}COPIAR CÓDIGO
[06:22] Vou também deixar como desafio para vocês criarem o set ddd e o set número da mesma forma como fizemos no CPF, adicionando filtro de validação, garantindo que um $ddd tenha somente dois números e que o $numero você pode definir um formato se quiser. Eu vou garantir que em $numero só tenham números e que tenha oito ou nove caracteres. Ou seja, um número de telefone precisa ter oito ou nove números.

[06:50] Com isso, vou deixar esse desafio para vocês e no próximo vídeo voltamos para enriquecer ainda mais nosso domínio.

@@03
VO ou Entidade

Já entendemos bem a diferença entre Value Objects e Entidades na aula anterior.
A classe Telefone é um Value Object ou uma Entidade?

Entidade, já que não podem existir dois telefones com o mesmo DDD e número
 
Alternativa correta
Value Object, já que dois telefones com DDD e número iguais são considerados o mesmo telefone
 
Alternativa correta! Se a igualdade entre dois objetos de uma classe é verificada através da comparação de todos os seus valores, se trata de um Value Object.
Alternativa correta
Value Object, já que não podemos criar dois objetos do tipo Telefone com mesmo DDD e número

@@04
Classe de indicação

[00:00] Bem-vindos de volta. Só para mostrar para vocês, no telefone eu fiz aquela validação de novo. Utilizei uma forma diferente para fazer aquela validação com expressão regular. Agora estou utilizando a função preg_match, ou seja, verificar se uma expressão regular bate com o que estou esperando ou não. Dá uma pesquisada melhor sobre essa função.
[00:25] Obviamente, como tenho um value object que faz sentido ser representado como string, criei o método __toString.

class Telefone
{
    private string $ddd;
    private string $numero;

    public function __construct(string $dd, string $numero)
    {
        $this->setDdd($ddd);
        $this->setNumero($numero);
    }
    private function serDdd(string $ddd): void
    {
        if(preg_match(pattern'/\d{2}/', $ddd) !== 1) {
            throw new \InvalidArgumentExcption(message: 'DDD inválido');
        }
        $this->ddd = $ddd
    }
    private function setNumero(string $numero): void
    {
        if(preg_match(pattern: '/\d{8,9}/', $numero) !== 1) {
            throw new \InvalidArgumentException(message: 'Número de telefone inválido');
        }
    }

    public function __toString(): string
    {
        return "({$this->ddd}) {$this->numero}";
    }
}COPIAR CÓDIGO
[00:35] E, claro, também criei testes para isso. Estou garantindo que consigo representar meu telefone como uma string. Inclusive já coloquei o $ddd entre parênteses para ficar mais interessante, e também estou verificando os casos de erro. Se um ddd inválido lança uma exceção e se um número inválido lança uma exceção.

public function testTelefoneDevePoderSerRepresentadoComoString()
{
    $telefone = new Telefone(ddd: '24', numero: '22222222');
    $this->assertSame(expected: '(24)22222222', (string) $telefone);
}

public function testTelefoneComDddInvalidoNaoDeveExistir()
{
    $this->expectException(\InvalidArgumentException::class);
    $this->expectDeprecationMessage('DDD inválido');
    new Telefone(ddd: 'ddd', numero: '22222222');
}

public function testTelefoneComNumeroInvalidoNaoDeveExistir()
{
    $this->expectException(\InvalidArgumentsException::class);
    $this->expectDeprecationMessage('Número de telefone inválido');
    new Telefone(ddd: '24', numero: 'numero');
}COPIAR CÓDIGO
[01:00] Os testes já estão passando, tudo certo, vamos fechar isso e enriquecer ainda mais nosso domínio. Já tenho aqui bastante bem definido nosso aluno, o que um aluno pode ter. Ainda não consigo utilizar esse aluno, certo? Porque não consigo criar um aluno com CPF, nome, e-mail, etc, mas ele já está relativamente bem definido.

class Aluno
{

    private Cpf $cpf;
    private string $nome;
    private Email $email;
    private array $telefones;

    public function adicionarTelefone(string $ddd, string $numero)
    {
        $this->telefone[]= new Telefone($ddd, $numero)
    }
}COPIAR CÓDIGO
[01:15] Agora vamos começar a definir um domínio de outra parte da nossa aplicação onde um aluno pode indicar outro aluno. Se um aluno pode indicar outro temos o conceito de uma indicação que quero poder ter, armazenar, poder puxar relatórios no futuro, então vamos começar a modelar essa indicação.

[01:36] Uma indicação, vamos criar essa classe Indicacao, e já quero deixar uma pulga atrás da orelha de você que está assistindo, que tenho muitas classes, tudo direto na pasta raiz, quando nosso projeto crescer isso vai ficar difícil de manter. Conforme vamos evoluindo, já começa a pensar em como poderíamos separar isso. Vamos fazer juntos, mas já quero provocar esse pensamento em você.

class Indicacao
{

} COPIAR CÓDIGO
[02:04] O que uma indicação precisa ter? Uma indicação tem basicamente um aluno indicante, ou indicador, a palavra que você preferir, são sinônimos, e um aluno indicado. Então vou armazenar essas duas informações. Vou ter um aluno indicante, e o aluno que foi indicado.

private Aluno $indicante;
private Aluno $indicado;COPIAR CÓDIGO
[02:28] Vou criar com "Alt + Insert" um construtor que inicialize essas duas propriedades. Com isso, consigo criar uma indicação de um aluno para outro aluno, e perfeito. Com isso posso criar os métodos de acesso para buscar o aluno indicante, o aluno indicado, se você quiser, mas por enquanto já começamos a modelar nossa aplicação.

public function __constuct(Aluno $indicante, Aluno $indicado)
{
    $this->indicante = $indicante;
    $this->indicado = $indicado;
}COPIAR CÓDIGO
[02:52] Qual era o ponto deste vídeo? Vamos começar a enriquecer nosso domínio, e se estamos enriquecendo nosso domínio, ''vários problemas vão começar a surgir. O primeiro problema que já deixei de cara para você é que começamos a ter muitos arquivos e muitas classes direto na mesma pasta. Isso com o tempo fica impossível de manter. Começa a pensar nisso.

[03:17] Só que outro ponto é que ainda não conseguimos criar um aluno. Vamos pensar numa forma de conseguir criar um aluno. Vou ter um constuct(), que recebe obviamente um CPF, todo aluno tem que ter CPF. Todo aluno tem que ter também um nome, e todo aluno tem que ter um e-mail. Vou inicializar essas propriedades.

class Aluno
{

    private Cpf $cpf;
    private string $nome;
    private Email $email;
    private array $telefones;

    public function __construct(Cpf $cpf, string $nome, Email $email)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
    }COPIAR CÓDIGO
[03:42] Pensa caso você vá criar um teste, por exemplo um teste de unidade agora, ou você vai utilizar esse aluno em algum lugar. Quando você for criar um aluno, você precisa fazer um novo CPF, e passa os dados de CPF, depois passo nome, depois passo novo e-mail e passo os dados do e-mail, e depois de criar esse aluno ainda preciso adicionar telefone.

new Aluno (new Cpf(numero: '123'), 'Vinícius', new Email(endereco: 'email))->adicionarTelefone();COPIAR CÓDIGO
[04:14] A criação de um objeto do tipo aluno está complexa. Olha como esse construtor pode ficar ilegível rapidinho. O que quero propor? Quero propor que criemos uma classe específica para gerar novos alunos. Específica para criar instâncias de aluno. Então vamos conversar, bater um papo rápido sobre isso no próximo vídeo.

@@05
Fábricas

[00:00] Bem-vindos de volta. Quero voltar bem rápido na nossa classe indicação para mostrar algo que é muito comum no dia a dia. Eu recebi uma solicitação para criar a indicação, então pensei logo comigo mesmo, tenho o aluno que é o indicante e tenho o aluno que é o indicado, perfeito. Só que não fui confirmar com a minha gerente o que preciso ter sobre uma indicação. E agora que essa feature já está em produção, rodando, gerando relatórios, estamos tendo vários problemas, porque como não fui perguntar, como não conversei com minha equipe de negócios, supus que era só isso que era necessário.
class Indicacao
{
    private Aluno $indicante;
    private Aluno $indicado;
    private \DateTimeImmutable $data;

    public function __construct(Aluno $indicante, Aluno $indicado)
    {
        $this->indicante = $indicante;
        $this->indicado = $indicdo;
    }
}
COPIAR CÓDIGO
[00:42] Só que acontece que também era necessário armazenar a data. A data em que aconteceu essa indicação. Precisamos sempre tomar cuidado e conversar sempre com a equipe de negócios sobre o que é necessário ter no nosso domínio, o que é necessário ter nas nossas abstrações.

[01:03] Então, se toda indicação precisa de uma data, sempre que eu criar uma indicação vou dizer que a data é igual à data atual. E perfeito. Corrigido esse bug. Por que deixei isso para outro vídeo? Para mostrar que problemas acontecem, acabamos nos esquecendo de determinadas coisas. E repare que para a indicação não criei nenhum teste. Talvez se eu tivesse testes, como deveria ter, eu já teria pego esse problema antes. Fica um detalhe muito importante, que é converse com a equipe de negócios e a partir do feedback dela crie seus testes, e a partir dos testes você vai saber como criar suas classes.

[01:45] Agora, voltando naquele assunto sobre a complexidade de criar um aluno, vamos criar uma classe específica para criar alunos. E se você já fez os treinamentos de padrões de projeto criacionais aqui da Alura, se você não fez ainda recomendo fortemente que faça, mas caso não tenha feito ainda vou passar bem rapidamente o conceito.

[02:08] Existem padrões específicos para criar objetos, seja criar objetos complexos, famílias de objetos, enfim. Um desses padrões permite que criemos objetos bastante complexos, e vamos seguir mais ou menos a estrutura dele.

[02:25] Só que antes de falar qual é esse padrão ou qualquer coisa, vou criar uma classe. Como essa classe cria, gera, fabrica alunos, vou chamar ela de FabricaAlunos, mas não se atente ao nome porque tem uma pegadinha bem grande neste nome.

[02:40] Quero criar aluno, então sempre que eu criar uma FabricaAluno, inclusive vou colocar no singular, porque cada fábrica vai criar um aluno só. Essa FabricaAluno vai fazer o quê? Quando eu criar esse objeto, quando criar essa fábrica, vou criar um public static function, um método estático, chamado comCpfEmailENome.

[03:16] Por que estou passando isso? Todo aluno precisa ter esses parâmetros, então não faz sentido para mim, Vinicius, criar métodos separados. Existe a possibilidade de criar um método com CPF, outro com nome, outro com e-mail. Existe essa possibilidade. Mas eu não quero, não vou fazer dessa forma.

[03:40] Eu vou receber uma string do numeroCpf, uma string do e-mail do aluno e uma string do nome do aluno. Só. Vou receber strings. E vou criar esse aluno, que vai ser uma instância da classe Aluno, com aquela estrutura complexa, novo CPF, que vai receber esse número, nome do aluno, novo e-mail com o e-mail do aluno, com o endereço de e-mail.

[04:15] Repare que o meu aluno tem uma ordem nos seus parâmetros. Primeiro passo CPF, depois nome, depois e-mail. Só que essa ordem não importa tanto. Agora, em comCpfEmailENome tenho outra ordem. Primeiro CPF, depois e-mail, depois nome. E você provavelmente está pensando em colocar na mesma ordem, vai ficar mais fácil, mais legível.

[04:38] Realmente o ideal é que esteja na mesma ordem, mas estou deixando numa ordem diferente de propósito para vocês entenderem que o que importa é ser legível. Quando eu chamar esse método comCpfEmailENome, eu sei só de ler o nome do método qual a ordem dos parâmetros. Agora, só pelo construtor da classe aluno não sei qual a ordem dos parâmetros.

[05:02] Então, quando for chamar uma FabricaAluno, que vou fazer dessa forma, comCpfEmailENome, eu sei que o primeiro parâmetro é o CPF, o segundo é o e-mail, o terceiro é o nome. Só pelo nome do método consigo saber a ordem dos parâmetros.

[05:20] Com essa complexidade a mais que adicionei na explicação, vamos continuar nossa criação da classe. Vou ter um aluno. Quando chamar esse método comCpfEmailENome, esse é um método estático. Não faz sentido ter um atributo da classe em um método estático. Quando chamar esse método, vou criar um novo aluno e esse novo aluno já vai ter as propriedades CPF, nome e e-mail. E também vou ter agora um método adicionaTelefone, que vai receber um ddd e um número.

[06:08] Nesse aluno vou chamar o adicionaTelefone, que passa um ddd e passa um número. Só que agora entra uma coisa bastante interessante aqui, que eu particularmente gosto bastante. Vou retornar a cada chamada desses métodos uma instância da própria classe, da própria fábrica, porque o que isso vai causar? Inclusive deixa eu adicionar o tipo de retorno para informar que esses métodos sempre vão retornar uma instância da própria classe.

[06:37] Com isso, o que posso fazer? Vou criar uma fábrica new FabricaAluno. Com essa fábrica, posso chamar o método comCpfEmailENome, e aí passo os parâmetros e já chamo direto adicionaTelefone. Se eu quiser adicionar mais de um posso chamar direto de novo esse método.

[07:02] Eu estou fabricando um aluno passo a passo, e no final posso chamar o método aluno, e esse método aluno vai ser o que me devolve essa instância já construída. O public function aluno vai me devolver um aluno, que simplesmente retorna essa instância de aluno.

[07:25] Com isso tenho uma classe responsável por criar um aluno de forma um pouco mais legível e simplificada. Essa é a melhor forma de criar uma classe que vai criar alunos? Longe disso. Tem como melhorar bastante e por isso sugiro que você faça o treinamento de padrões criacionais, porque essa classe bem de longe, bem mais ou menos está implementando um padrão chamado builder. E por que bem mais ou menos?

[07:55] Primeiro porque o padrão builder tem uma estrutura um pouco mais complexa, pode criar mais de um tipo de classe. Segundo essa nossa classe está modelada de uma forma não tão robusta, posso acabar chamando esse método adicionaTelefone antes do comCpfEmailENome, e nosso código vai dar erro. Tem problemas nessa nossa fábrica, mas o ponto é que ela atinge seu objetivo, mal ou bem.

[08:22] E se você já fez o treinamento de padrões criacionais você provavelmente está se perguntando, mas você utilizou o nome fábrica, ou seja, em inglês seria factory, e existe um padrão de projeto chamado factory method. Tem alguma relação? Não, na verdade não existe uma relação direta entre o padrão factory method e essa fábrica que estou criando aqui.

[08:42] Só que em outros estudos, outras literaturas, em outros livros, fábrica, ou factory, é um nome utilizado para qualquer classe que crie algum objeto. Ou que crie qualquer outra coisa, certo? Então estou utilizando esse nome confuso de propósito para que você entenda com bastante clareza que nem sempre que temos o nome factory ou o nome fábrica é uma aplicação do padrão de projetos factory method. Inclusive, vou deixar um link para você ler sobre uma comparação de vários padrões de criação que em vários lugares são chamados de factory, ou fábrica em português. Só que eles são padrões específicos para outras coisas, com outros propósitos.

[09:25] Um deles é o builder, como estamos criando aqui, e existe o factory method, como já citei, e vários outros padrões. Então, sem me alongar muito, o que é uma fábrica no contexto que estou criando aqui? É um objeto, uma classe que vai gerar objetos, que cria objetos, e só isso. Como vou fazer não importa. Como isso vai ser implementado não importa. Eu implementei essa fábrica de um jeito. Deixo um desafio para você, depois que você terminar o treinamento de padrões criacionais, de implementar essa fábrica de forma um pouco mais robusta, de uma forma com menos sucessão a erro.

[10:03] Agora que já entendemos melhor esse conceito de fábrica e complicamos bastante nosso domínio, podemos avançar na criação do nosso projeto e na modelagem da arquitetura.

@@06
Para saber mais: Fábricas

É importante frisar que o que aqui é chamado de fábrica não é uma aplicação do Factory Method.
As diferenças entre os padrões criacionais foram explicadas no curso Design Patterns em PHP: Padrões criacionais.

O que implementamos neste caso é semelhante ao padrão Builder.

https://cursos.alura.com.br/course/php-design-pattern-criacional

@@07
Named constructors

[00:00] Bem-vindos de volta. Vamos recapitular bem rápido o que falamos no último vídeo, porque foi um conteúdo um pouco mais longo. Eu criei uma classe específica para gerar novos alunos. E por que fiz isso? Porque o construtor de aluno está complexo. Preciso criar um objeto CPF, um objeto e-mail, depois passar um CPF, um nome e um e-mail para o nosso construtor de aluno. A criação dele fica longa, fica complicada.
[00:30] Então, criei uma classe que recebe só strings e a partir delas instância os objetos necessários. Essa classe nada mais é do que um facilitador para o que o aluno já faz. É bastante comum encontrar códigos assim. Só que vou te passar outra possibilidade, vou te passar uma alternativa para implementar isso.

[00:50] Primeiro, esse método adiciona telefone não está fazendo nada, só está chamando o adicionar telefone do nosso aluno e retornando uma instância dessa classe para poder chamar de forma encadeada esse método. Então podemos muito bem fazer a mesma coisa aqui.

[01:06] Se eu retornar this, posso a partir de um aluno chamar o adicionarTelefone, e depois adicionar outro telefone, e depois adicionar outro telefone, porque estou sempre retornando a própria instância, então posso ir adicionando novos telefones.

[01:28] O primeiro ponto já foi, entre aspas corrigido. Agora, esse outro ponto de ter um nome mais claro para construir, para criar um aluno. Posso fazer isso diretamente na classe aluno através do que é chamado de named constructors ou construtores nomeados.

[01:46] Como isso é feito? De forma muito simples. Vou criar um método estático chamado comCpfNomeEEmail. Vinicius, a ordem está diferente da FabricaAlunos, realmente está. Mas pelo nome você consegue saber a ordem dos parâmetros, não consegue? Então aqui vou passar uma string, que é o CPF, uma string que é o nome, e uma string que é o e-mail.

[02:12] O que esse método vai retornar? Uma instância da própria classe, uma instância de aluno. Tudo que ele vai fazer é criar um novo aluno passando um objeto CPF que foi criado a partir do número de CPF que passei, passando o nome e passando uma nova instância de e-mail.

[02:35] Olha só como simplificamos. Todo aquele trabalho da fábrica que criei foi simplificado em um método. Agora posso ao invés de fazer aluno que recebe um novo CPF e passo o CPF, que recebe um novo nome, que recebe um novo e-mail, está vendo como sempre me confundo, não lembro a ordem, instancio a classe errada? Ao invés de fazer isso posso fazer aluno comCpfNomeEEmail. CPF o que for, nome o que for e e-mail o que for.

[03:10] Isso já vai criar as classes necessárias lá dentro e me devolver uma instância de aluno. Eu facilitei a construção. Tenho um nome bem mais legível para criação do meu aluno, e não preciso de uma classe a mais só para isso. Essa fábrica de aluno se torna desnecessária.

[03:32] E aí você pode se perguntar se o conceito de fábrica nesse sentido, para criar objetos complexos, é inútil? Nunca vou usar? Sempre vou utilizar named constructors? Nem sempre. Nem sempre o named constructor vai resolver, porque posso ter realmente uma classe bem complexa, com várias opções para serem passadas, e aí posso quebrar em etapas utilizando o padrão builder, por exemplo, como já citei na última aula e como foi ensinado no treinamento de padrões criacionais, ou posso utilizar algum outro padrão, e mais uma vez lá no treinamento de padrões criacionais vemos quando cada um faz sentido.

[04:10] Mas nesse nosso caso aprendemos um novo padrão chamado named constructor que facilita bastante nosso trabalho. Então, mais uma vez, só para ficar bem claro, eu consigo criar um aluno direto desse método estático e sair adicionando telefone. Olha como fica mais fácil. Para criar um aluno com dois telefones essa linha vai ficar gigante, óbvio, o ideal é quebrar, mas consigo fazer com uma instrução só.

[04:41] Dessa forma já simplificamos nossa estrutura, simplificamos a criação de alunos, posso inclusive remover essa classe FabricaAluno, ela não se faz necessária mais, e agora estamos de verdade prontos para começar a organizar nosso código, que ainda está muito bagunçado, está tudo numa pasta só, e acho que vale a pena começar a conversar sobre isso.

@@08
Vantagem dos named constructors

Vimos neste curso a possibilidade de criar métodos estáticos que tornam mais amigáveis a criação de um objeto.
Qual a vantagem de se utilizar named constructors?

Aumentar a performance, já que o método é estático
 
Alternativa correta
Poder definir exceções específicas de problemas na criação do objeto
 
Alternativa correta
Tornar a criação dos objetos mais legível
 
Alternativa correta! Com named constructors, nós podemos saber a ordem dos parâmetros necessários diretamente no nome do método. Além disso, o nome deixa mais explícito quais dados estamos passando.
Desafio: Crie um named constructor para alguma outra classe já implementada até aqui.

@@09
Faça como eu fiz

Chegou a hora de você seguir todos os passos realizados por mim durante esta aula. Caso já tenha feito, excelente. Se ainda não, é importante que você execute o que foi visto nos vídeos para poder continuar com a próxima aula.

Continue com os seus estudos, e se houver dúvidas, não hesite em recorrer ao nosso fórum!

@@10
O que aprendemos?

Nesta aula, aprendemos:
Sobre o relacionamento entre entidades e Value Objects
O conceito de fábrica no mundo do estudo de design de código
Sobre named constructors e suas vantagens na legibilidade

#### 08/02/2024

@03-Camadas

@@01
Projeto da aula anterior

Caso queira, você pode baixar aqui o projeto do curso no ponto em que paramos na aula anterior.

https://caelum-online-public.s3.amazonaws.com/1774-php-arquitetura-introducao/02/php-arquitetura-projeto-aula-2-completo.zip

@@02
Módulos

[00:00] Bem-vindos de volta a mais um capítulo desse treinamento de arquitetura utilizando php. Está na hora de começarmos a conversar um pouco mais sobre arquitetura em si, porque até agora vimos coisas muito importantes, vimos sobre entidades, onde precisamos de algum identificador para separar os valores, para separar cada um dos objetos não se baseando só nos valores, isso é o conceito de entidade.
[00:30] Vimos o conceito de objetos de valor, ou value objects, onde o fato de ter os atributos iguais implica que esses são objetos realmente iguais. Vimos sobre fábricas, que auxiliam na criação de novos objetos. Vimos sobre named constructors, que às vezes podem facilitar o trabalho que uma fábrica faria. Já vimos bastante coisa, vimos o que pode ser chamado de blocos de construção, e se você reparar, tudo que fizemos até aqui está relacionado ao domínio da aplicação. Ou seja, está relacionado a um negócio.

[01:10] Ainda não tenho nenhum SQL escrito, nenhum controller, nada relacionado a infraestrutura, a web, nada disso. Estamos começando do núcleo da aplicação. O núcleo da nossa aplicação precisa estar organizado. Então outro bloco de construção muito conhecido, outra ferramenta muito conhecida é chamada de módulo.

[01:30] O que isso quer dizer? Quando tenho módulos, seja lá como eles sejam implementados por cada linguagem, vou conseguir separar partes da nossa aplicação. E quando digo módulo é tão simples quanto tudo isso aqui, um aluno está relacionado ao telefone, então eles vão estar no mesmo módulo. Uma indicação vai estar relacionada com alguma outra coisa, pontos dessa indicação. Então isso vai estar em outro módulo separado.

[02:03] Assim começamos a dividir os módulos da nossa aplicação. Vamos pensar em dois módulos que temos até agora. Temos o módulo de tudo que é relacionado ao aluno, então vou criar uma pasta. E temos o módulo de tudo que é relacionado a indicação. Por enquanto não temos nada, só a própria classe indicação, mas tudo bem.

[02:23] Pensa comigo. No nosso sistema alguém, alguma outra classe além de aluno tem e-mail? Não tem. Alguma outra classe além de aluno tem CPF? Não. Alguma outra classe além de aluno tem telefone? Também não. Então tudo isso está relacionado ao aluno.

[02:45] Agora pensa. Isso é só no nosso sistema. Pode ter outro sistema onde além de aluno temos instrutor, e o instrutor também tem CPF e e-mail, então isso não iria para a pasta de aluno. Vamos pensar das duas formas. Primeiro, supondo que temos também uma classe de instrutor. Então o aluno e telefone viriam para dentro dessa pasta aluno. Mandei para lá.

[03:14] A classe indicação vem para o módulo de indicação. E suponhamos que tenhamos a classe instrutor, ela iria para o módulo instrutor. Agora, CPF e e-mail são classes utilizadas por mais de um módulo, certo? O módulo aluno e o módulo instrutor utilizariam, então elas ficariam direto, não precisaria colocar em nenhuma pasta específica.

[03:41] Ou seja, posso ter separação de módulos e posso ter classes que são utilizadas por mais de um módulo, é comum, e inclusive também é comum ter classes que utilizam classes de outros módulos. A classe indicação, que está no módulo de indicação, utiliza classe aluno, que está no módulo de aluno. Isso acontece, é comum, e da forma como estamos fazendo aqui não tem problema nenhum, porque aluno e indicação são módulos diferentes, mas da mesma aplicação. Não são aplicações diferentes, logo podem se acessar tranquilamente.

[04:20] E para separar esses módulos, e quando digo módulos, de novo, é um conceito muito mais simples do que caso você tenha vindo de Java, por exemplo. É um conceito muito mais simples do que o Java implementa de módulos. É semelhante ao que o Csharp chama de name space, que o Java chama de packages, ou pacotes.

[04:40] Aqui no mundo php implementamos através de name space também. Tenho meu módulo de indicação. No nosso módulo de aluno vou utilizar um name space de aluno. Em telefone o name space vai ser aluno. Com isso começamos a separar nossa aplicação pelos módulos.

[05:10] E se agora o CPF e o e-mail estão em outro módulo, lá na raiz, e estou utilizando eles aqui, preciso obviamente importar. Nesse caso, você poderia ter passado CPF e e-mail para a pasta aluno. Poderia, só estou deixando na raiz para provocar essa linha de pensamento em você. Para você começar a se questionar. Lembre que este é um curso um pouco mais avançado, então várias das coisas que vou fazer são para te provocar, te fazer pensar, raciocinar, e não simplesmente copiar o que estou fazendo.

[05:45] Com isso começamos a separar nossa aplicação em pequenas partes. Uma parte que é comum para todo mundo, uma parte que está relacionada à indicação, uma parte relacionada especificamente ao que um aluno tem. Começamos a separar melhor. E falando sobre separação, podemos começar a entrar no conceito de padrões de arquitetura. Vamos falar sobre isso no próximo vídeo.

@@03
Módulos e namespaces

Desde os cursos de orientação a objetos, nós já vimos como utilizar namespaces, mas agora eles estão sendo ainda mais úteis.
Que vantagem ganhamos ao organizar nossa aplicação em módulos?

Utilizando namespaces, conseguimos criar mais classes, devido ao limite de classes por namespace
 
Alternativa correta
A performance do projeto melhora, por termos menos classes em cada módulo
 
Alternativa correta
Nossa arquitetura fica mais clara e, em um projeto grande, encontramos as classes mais facilmente
 
Alternativa correta! Módulos são uma ferramenta essencial para toda arquitetura. No final do treinamento, teremos uma estrutura mais robusta de módulos.

@@04
Para saber mais: Screaming Arch

Existe um conceito chamado Screaming Architecture. Em uma tradução livre, Arquitetura Gritante.
Seguindo este princípio, fica fácil bater o olho na arquitetura de um projeto e saber do que se trata, facilitando até a entrada de novas pessoas no projeto: https://blog.cleancoder.com/uncle-bob/2011/09/30/Screaming-Architecture.html.

https://blog.cleancoder.com/uncle-bob/2011/09/30/Screaming-Architecture.html

@@05
Padrões de arquitetura

[00:00] Bem-vindos de volta. Vamos falar sobre alguns padrões de arquitetura bastante famosos e baseado em ideias de vários deles, vamos chegar em um padrão que iremos adotar.
[00:16] O primeiro é de um padrão arquitetural chamado arquitetura hexagonal. E pelo desenho você já deve saber o motivo desse padrão.

[00:28] A ideia desse padrão é que na parte de fora desse hexágono nós temos a Web, Banco de dados, testes, ou seja, uma camada de infraestrutura.

[00:40] E a partir dessa camada de fora da infraestrutura, nós recebemos informações como requisições web, tentativas de teste, requisições na linha de comando.

[00:56] E essas requisições são feitas por meio de Adapters, ou seja, adaptadores. Algo que entende o que o mundo de fora está falando com a gente e passa através de portas, ou seja, de classes um pouco mais perto do nosso domínio.

[01:12] Pegando essas informações de fora e passar um pouco mais para dentro, para poder organizar. Quando eu receber uma requisição da URL eu vou chamar o método Adapters que vai executar a ação Ports.

[01:26] Essa ação conhece o domínio, as entidades e vai fazer o que precisa fazer. Além disso, quando chegar no ponto Business Domain do domínio, é muito comum precisarmos acessar o banco de dados.

[01:39] Só que existe uma regra de dependência em algumas arquiteturas e padrões que diz que quando temos esse tipo de arquitetura em camadas, como essa que temos a camada de fora, a camada começando o hexágono e a camada mais interna, que é o domínio, a gente só pode ter dependência de fora para dentro.

[02:02] Ou seja, nossa camada de infraestrutura pode até conhecer nossa aplicação, mas nossa aplicação não pode conhecer a infraestrutura.

[02:12] A nossa camada de portas, essa lógica que vai acontecer na nossa aplicação, pode depender do nosso domínio. Só que nosso domínio não pode conhecer o que essa porta da web está falando.

[02:25] Não pode conhecer a infraestrutura da web. E por quê? Imagina se meu aluno conhecesse SQL, soubesse como se representa na web, se ele soubesse como receber uma requisição.

[02:39] Além de ter várias responsabilidades, eu só conseguiria utilizar esse aluno na web, não conseguiria fazer testes com ele, seria muito mais difícil.

[02:47] Não conseguiria utilizar ele na linha de comando, utilizar com formulário ou API, utilizaria somente de uma forma. Então eu me restrinjo muito.

[02:58] Por isso, a gente separa o domínio da aplicação. Um outro modelo, um pouco mais simples, é o modelo de Clean Architecture, ou Arquitetura limpa.

[03:09] Nele nós temos entidades, que criamos até agora, mas não só entidades, também value objects, factorys, o que for dados que representam nosso domínio.

[03:23] E nessa parte central, do domínio que criamos até agora, temos as regras de negócio do nosso modelo. Um pouco para fora do padrão de arquitetura temos os casos de uso, ou seja, o que nossa aplicação faz e pode realizar de tarefas.

[03:46] Por exemplo, matricular um aluno, indicar aluno, ou seja, regras que a nossa aplicação executa. Isso quer dizer que nossos casos de uso precisam conhecer as entidades.

[03:58] Porque, um case de uso matricular aluno precisa, obviamente, saber conhecer a classe aluno para poder criá-la e chamar os métodos corretos.

[04:08] Esses use cases podem ser chamados através de linha de comando, da web, então, na camada mais de fora do padrão temos controlles, alguma forma de apresentar esses casos de uso.

[04:22] Nós temos camadas de tradução. Então basicamente com isso já começaríamos falar um pouco com a web, o controller do nosso framework fica na terceira camada de dentro para fora.

[04:33] E na camada mais externa, é como se fosse a parte de fora do hexágono, ou seja, é o banco de dados, a web, a interface com o usuário, um dispositivo que vai conversar com a aplicação, tudo que foge do nosso controle.

[04:48] E uma outra forma de representarmos isso, repare que existem muitas semelhanças entre o modelo Arquitetura Hexagonal e o Arquitetura limpa, mas com nomes diferentes.

[04:59] Na Arquitetura Limpa temos Use Cases, já na Arquitetura Hexagonal temos Ports. No primeiro temos Controllers, no segundo Adapters. Então, são conceitos muito semelhantes com nomes diferentes.

[05:15] Um outro modelo, que foi apresentado no livro Domain-Driven Design, é um pouco diferente e foi modificado por esses modelos por alguns motivos.

[05:29] Ele divide as camadas entre a interface com o usuário e essa interface, seja na web, API ou linha de comando, vai conversar com a aplicação.

[05:39] A aplicação conversa com o domínio e o domínio pode acabar conhecendo alguns resultados de infraestrutura, ou seja, eu posso ter algumas classes que conhecem SQL, outras que saibam acessar o sistema de arquivos.

[05:56] Então, existem vantagens e desvantagens em cada caso. Eu, Vinícius, sigo mais os modelos de modelo Arquitetura Hexagonal e o Arquitetura Limpa porque acredito que o meu domínio não deva conhecer a infraestrutura.

[06:09] O meu domínio não deva saber SQL, acessar arquivo, esse tipo de coisa. Agora, também existem vantagens nessa arquitetura. Com essa forma do livro eu posso simplificar algumas coisas, por exemplo, um aluno, eu posso ter um repositório de aluno e o aluno, tudo direto no meu domínio.

[06:65] Então existem facilidades com essa abordagem, mas eu, Vinícius, prefiro seguir a abordagem sugerida nos modelos Arquitetura Hexagonal e o Arquitetura Limpa.

[06:48] Detalhe bastante importante, a Arquitetura Hexagonal também pode ser conhecida como Ports & Adapters, ou Portas e Adaptadores, justamente pelos conceitos que ela utiliza.

[07:00] Agora, pegando um pouco desses conceitos, os detalhes de Ports e Adapters, Use Cases e Controllers, pegando a separação de domínio e aplicação de infraestrutura do Domain-Driven Design, o que eu tendo a fazer?.

[07:15] Aproveitar o melhor de todos e chegar em uma arquitetura nossa, específica para nossa aplicação. E para a nossa vou seguir um modelo parecido com os avaliados anteriormente.

[07:29] Eu estou criando, por enquanto, o nosso domínio, as nossas entidades, value objects, factorys, vamos falar mais para frente, mas eu posso ter serviços também.

[07h40] E para acessar o meu domínio eu obviamente preciso de uma aplicação, que vai conter o fluxo das regras de negócio.

[07:48] Qual classe chamar primeiro, o que fazer, qual método chamar, mas ela não vai ter regras de negócio em si, como, por exemplo, temos que um CPF precisa estar válido, que um aluno pode ter telefone, eu consigo adicionar telefones a ele, isso é uma regra de negócios.

[08:06] Agora, na minha aplicação eu só vou chamar esses métodos, ou seja, vou ter a organização do fluxo da minha aplicação. E na infraestrutura eu tenho tudo o que apoia a minha aplicação, que é conversar com o banco de dados, realizar logs, acessar arquivos.

[08:31] Então, fora do meu padrão de arquitetura, vou definir tudo o que for necessário de conversa com o mundo exterior. Inclusive, na minha arquitetura um controller está na parte de fora, porque um controller conversa com a web, então ele está na camada de infraestrutura.

[08:47] Caso esteja utilizando um padrão, um framework, por exemplo, e eu esteja conversando com a web. E quando voltamos a falar sobre a dependência, que é identificada por uma seta na Arquitetura Limpa e na Arquitetura Hexagonal, nesse nosso modelo o que vamos seguir, a infraestrutura, embora não seja comum, pode conhecer alguns detalhes da aplicação.

[09:11] O domínio não pode conhecer nada de fora. A aplicação conhece o domínio, a infraestrutura conhece a aplicação e a web vai conversar com a infraestrutura, ou seja,a linha de dependência vai vir de fora para dentro.

[09:39] Então a web fala com a minha infraestrutura, a infraestrutura pode conhecer ou não alguns detalhes da aplicação e a aplicação conversa com o domínio.

[09:48] Mas, quando vi esse desenho pela primeira vez me perguntei, se eu estou na aplicação, acesso o domínio, por exemplo, aluno, criei um aluno, como vou matricular um aluno, como vou salvá-lo no banco de dados se meu domínio não conhece a infraestrutura?

[10:06] Então, como consigo aplicar na vida real esses detalhes, como se aproxime desse modelo. Então no próximo vídeo vamos começar, bem devagar, a implementar esse modelo.

[10:20] Fazer com que nosso domínio não precise saber de detalhes de infraestrutura para que ela funcione. No próximo vídeo nós começamos colocar a mão na massa.

@@06
Regra de dependência

Vimos que em vários padrões arquiteturais existem divisões em camadas. Esses modelos foram evoluindo, até que essas camadas foram divididas em mais interiores e mais exteriores, o que geraram os desenhos vistos no último vídeo.
Qual a ordem em que as dependências podem acontecer nas camadas de um projeto?

Tanto para dentro quanto para fora
 
Alternativa correta
Sempre para dentro (camadas de fora podem depender das de dentro)
 
Alternativa correta! Assim, o nosso domínio (camada mais interna) é independente de qualquer detalhe exterior. Nossa aplicação depende apenas do nosso domínio, e não conhece detalhes de infraestrutura. A camada de infraestrutura apoia as camadas mais interiores.
Alternativa correta
Sempre para fora (camadas de dentro podem depender das de fora)

@@07
Para saber mais: Domínio

Ao desenvolver um sistema complexo, o domínio deve ser o foco. Por isso, ele é a camada central dos padrões de arquitetura.
Web, frameworks e mecanismos de persistência (como bancos de dados) são meros detalhes. São ferramentas para executar suas regras de negócio.

Executar a sua aplicação pela CLI deve ser tão fácil quanto através de uma API. O mesmo vale para uma interface Web.

O conceito de modelarmos a nossa aplicação pensando primeiramente no domínio é chamado de Domain Driven Design, ou design orientado a domínio.

Munidos desta mentalidade, podemos garantir a robustez e extensibilidade de nosso projeto.

@@08
Botando ordem na casa

[00:00] Bem-vindos de volta. Vamos começar bem devagar a aplicar no nosso código um pouco sobre o que falamos sobre arquitetura.
[00:12] Antes de qualquer coisa, eu preciso falar que o que a gente vê em um treinamento, jamais vai ser tudo o que existe para aprender sobre arquitetura.

[00:20] Então, todos aqueles conceitos que citei de Arquitetura Hexagonal, Arquitetura Limpa, Domain-Driven Design, você pode e deve pesquisar mais a fundo, ler livros, ver vídeos avulsos, inclusive, aqui na Alura+.

[00:35] Enfim, existem muitos conceitos para aprendermos e o treinamento serve justamente para consolidarmos esses conhecimentos.

[00:44] Então, continuando, de acordo com o que já falei até essa parte do treinamento, tudo o que criamos faz parte do nosso domínico, por quê?

[00:54] Eu consigo acessar pela linha de comando alguma funcionalidade? Ainda não, então não tenho aplicação. Eu consigo acessar banco de dados, arquivos? Por enquanto não, então ainda não tenho infraestrutura.

[01:07] Tudo o que eu tenho é o domínio da minha aplicação, então vamos deixar isso bem claro e criar uma pasta dominio, sem acentuação.

[01:18] Então tudo o que temos está relacionado ao domínio da aplicação. Eu refatorei a pasta e obviamente, da mesma forma como quando começamos a falar de módulos, temos o problema do namespace.

[01:32] Precisamos corrigir os namespaces para igualar com a estrutura de pastas. Então, eu estou no namespace, no módulo, na camada, no pacote de Domínio.

[01:44] Então eu vou definir em todas as minhas classes essa informação. Indicação está dentro de Domínio. Então, repare que meu pacote agora é, dentro daquele pacote raiz da aplicação, eu estou no pacote Domínio, que está no módulo Indicação.

[02:03] De novo, precisamos apertar "Alt+Enter+Enter" para importar do pacote correto. Mas, repare que vai mudar para use Alura\Arquitetura\Dominio\Aluno\Aluno;, pois o aluno também vai estar no pacote domínio.

[02:18] Também vamos corrigir para namespace Alura\Arquitetura\Dominio\Aluno; assim como o e-mail e o CPF que também vão esta no pacote Domínio.

use Alura\Arquitetura\Dominio\Cpf;
use Alura\Arquitetura\Dominio\Email;
COPIAR CÓDIGO
[02:35] Então, eu não fiz muita coisa, eu só trouxe todas as minhas pastas e arquivos para uma pasta Domínio e com isso eu obviamente precisei alterar o pacote da minha aplicação, o namespace, para refletir isso.

[02:52] Então, agora tudo esta dentro do namespace Domínio. Por enquanto é só esse que eu tenho, mas eu obviamente vou criar novas camada em breve, que vão virar novos namespaces.

[03:05] Um ponto que não citei no vídeo sobre módulos é que se eu altero o pacote da minha aplicação eu preciso também corrigir meus testes.

[03:13] Porque se eu rodá-los agora, eles vão falhar, pois não vão encontrar as classes corretas. Então, vamos lá.

[03:25] Em EmailTest.php corrigimos para use Alura\Arquitetura\Dominio\Email;, em CpfTest.php corrigimos para use Alura\Arquitetura\Dominio\Cpf;e em aluno para use Alura\Arquitetura\Dominio\Aluno\Telefone;.

[03:44] Vinícius, mas toda vez que eu mudar uma pasta vou precisar fazer isso? O PhpStorm da a opção de renomear um namespace com o "Shift+F6" e quando você modificar já vai ser corrigido nos outros locais.

[03:58] Só que nem todo editor de texto, e é muito comum as pessoas utilizarem VS Code, Sublime Text, nem todos eles fornecem essa funcionalidade, então fiz dessa forma para todos verem que às vezes pode ser um pouco trabalhoso.

[04:10] Por isso, o mais comum é que agente pense na arquitetura antes de começar a criar as classes. Então, esse detalhe de como vamos separa a aplicação, já seria a primeira coisa que faríamos.

[04:23] Então, além de Domínio, eu sei que vou ter agora uma outra camada de aplicação e de infraestrutura. E vou criando isso conforme vamos evoluindo no nosso projeto.

[04:35] Mas, agora, já começamos a entender que, primeiro existem padrões de arquitetura, segundo posso aproveitar partes de cada um para chegar em um padrão que eu vou aplicar, não preciso seguir nada cegamente.

[04:51] Eu posso modificar de acordo com as minhas necessidades e a da minha equipe. Lembre-se, você está desenvolvendo código para resolver um problema que precisa ser resolvido da melhor forma possível e quando você tem uma equipe, a melhor forma possível precisa ser discutida com a equipe.

[05:10] Você não vai tomar todas as decisões sozinho. Com isso definido, chegamos no terceiro ponto que é aplicar na prática, começar a dividir nosso Domínio de todo o resto.

[05:23] Nada mais justo do que separar isso em um namespace, em uma pasta específica para ele. Agora que já definimos nosso Domínio, vamos começar a conversar sobre aquele problema que citei, em que temos o Domínio, que precisa saber da infraestrutura.

[05:40] Só que, como comentei, quero que a dependência seja sempre para dentro do padrão de arquitetura. A infraestrutura pode conhecer a aplicação, o Domínio, mas o Domínio não pode conhecer nada para fora.

[05:50] Então vamos conversar bastante sobre isso no próximo capítulo.

@@09
Faça como eu fiz

Chegou a hora de você seguir todos os passos realizados por mim durante esta aula. Caso já tenha feito, excelente. Se ainda não, é importante que você execute o que foi visto nos vídeos para poder continuar com a próxima aula.

Continue com os seus estudos, e se houver dúvidas, não hesite em recorrer ao nosso fórum!

@@10
O que aprendemos?

O que aprendemos nessa aula:
Que podemos utilizar namespaces do PHP para separar a nossa aplicação em módulos que façam sentido
Alguns padrões arquiteturais
A aplicar conceitos de padrões arquiteturais ao separar nossa aplicação em camadas. Começamos pelo domínio

#### 09/02/2024

@04-Repositórios

@@01
Projeto da aula anterior

Caso queira, você pode baixar aqui o projeto do curso no ponto em que paramos na aula anterior.

https://caelum-online-public.s3.amazonaws.com/1774-php-arquitetura-introducao/03/php-arquitetura-projeto-aula-3-completo.zip

@@02
Criando as interfaces

[00:00] Sejam muito bem-vindos de volta a mais um capítulo deste treinamento de arquitetura com php. Terminamos o capítulo anterior com esse questionamento. Como posso trabalhar com persistência, por exemplo, se meu domínio não pode conhecer da infraestrutura? Como vou, por exemplo, ao matricular um aluno, salvar esse aluno em um banco de dados se meu domínio não pode conhecer nada de SQL, de infraestrutura?
[00:26] E se você fez o treinamento, e espero que você tenha feito, de PDO, você já sabe responder essa pergunta. O nosso domínio sabe que existe um repositório de alunos, se esse repositório de alunos vai ser em arquivo, se vai ser em um banco de dados, se vai ser um banco relacional, não relacional, se vou salvar em outra API, isso pouco importa para o nosso domínio. Isso é detalhe de infraestrutura. Só que nosso domínio sabe que existe algum repositório.

[00:55] Logo, se sei que existe algo, mas não sei como esse algo é implementado, o que tenho na prática é uma interface. Então, no meu domínio do aluno posso simplesmente criar uma interface chamada RepositorioDeAluno, ou RepositorioAluno, ou AlunoRepository, o que você preferir.

[01:20] No meu repositório de aluno, todo repositório de aluno que for implementar essa interface, seja um repositório de aluno com PDO, um repositório de aluno com doctrine, um repositório de aluno através de API, um repositório de aluno de arquivo. Tanto faz. Todos os repositórios vão precisar adicionar um aluno, e isso não precisa devolver nada. Talvez pudesse devolver se teve sucesso ou não, mas prefiro não devolver nada, em caso de erro lança uma exceção.

[01:55] Precisamos também poder buscar por CPF um aluno, e talvez precisemos buscar todos. Podemos acabar precisando buscar todos os alunos. Isso vai devolver um array, que na prática é um array de alunos. Definimos no nosso domínio quais funcionalidades um repositório precisa fornecer para nós.

[02:32] Eu sei que através de um repositório eu preciso adicionar um aluno. Preciso ser capaz de buscar um aluno por CPF, buscar todos os alunos. Esse método não vou deixar por agora só para simplificarmos, mas você poderia, por exemplo, implementar um removerPorCpf, que passo só o CPF. Poderia ter atualizar um aluno, poderia ter buscar alunos matriculados, buscar aniversariantes.

[03:03] No seu repositório você define o que você precisa que um repositório tenha. Agora, como isso vai ser implementado, meu domínio conhece SQL? Não. Então esses detalhes de infraestrutura, e foca nisso, é só um detalhe. Lembra, se você conversar com uma pessoa que gerencia seu time, que é um especialista de negócios, essa pessoa que trabalha só com o negócio, que não conhece de tecnologia, não se importa se vai ser com SQL, se vai ser através de um banco não relacional, se vai ser sem arquivo, com API, em memória, essa pessoa não se importa como o repositório de alunos é implementado. Ele só se importa que você consiga em algum lugar adicionar um aluno. E que depois você consiga buscar esse aluno por CPF.

[03:53] Nos próximos vídeos vamos ver estratégias de como implementar essa interface na prática. Só que agora já vimos que conseguimos atingir esse modelo facilmente, porque minha infraestrutura está na parte de fora do domínio, então minha infraestrutura pode conhecer uma interface do domínio para implementar ela.

[04:15] O que vamos fazer nos próximos vídeos e daqui para a frente? A nossa infraestrutura vai poder implementar interfaces que são definidas no domínio. Ou seja, vamos criar implementações desse nosso repositório definido no domínio.

@@03
Implementando com PDO

[00:00] Bem-vindos de volta. Nesse vídeo vamos começar a implementar nossa camada de infraestrutura. Como estamos falando de infraestrutura, preciso ter alguma infraestrutura para implementar.
[00:14] Eu preparei um SQL bem simples para criar um banco em sqlight, mas caso você queira, caso você prefira, você pode utilizar qualquer outro banco, se você quiser inclusive utilizar algum banco não relacional não tem problema.

[00:26] Vou te pedir por enquanto para começar com um banco relacional para você utilizar também o SQL, implementarmos com PDO, mas depois pode se sentir à vontade para utilizar qualquer outro banco não relacional, o que for.

[00:42] Aqui estou utilizando sqlight, se quiser usar MYSQL, post, Oracle, SQL server, o que você tiver mais familiaridade, sem problema. Para quem quiser também já vou fornecer o arquivo do banco.sqlight, já com essa estrutura de tabelas criada para conseguirmos partir do mesmo ponto.

[01:00] Vou criar obviamente minha pasta de infraestrutura, para simplificar vou chamar de infra, ficar um pouco mais simples e não perde a legibilidade. Estou falando sobre um detalhe do aluno, correto? Então seguindo a mesma lógica que tenho em domínio vou seguir em infra, onde tenho o aluno, e aqui tenho o repositório de aluno. Vou criar um repositório de aluno com PDO.

[01:30] Você pode, obviamente, selecionar um nome diferente caso faça mais sentido para você, mas para mim esse nome está bem legível. Eu vou implementar aquela interface RepositorioDeAluno. Com isso, o php storm já me obriga a implementar todos esses métodos. Então vamos nessa.

[01:52] Primeiro tenho que conseguir adicionar um aluno, depois tenho que conseguir buscar alunos por CPF e buscar todos. Eu vou implementar junto com vocês o método adicionar e vou deixar como desafio esses dois métodos buscarPorCpf e buscarTodos, porque eles são mais complicados, mas vimos como fazer no treinamento de PDO. Eu vou implementar agora o adicionar e no próximo vídeo vou voltar com esses dois implementados para você ver como eu fiz e comparar com a sua solução.

[02:22] Continuando, quero adicionar um aluno. A primeira coisa que preciso é de uma conexão com o PDO. Vamos no nosso construtor receber uma conexão com PDO. Adicionei essa propriedade à classe, podemos começar daí. Preciso de um SQL para inserir um aluno. Se dermos uma olhada na nossa tabela, a tabela alunos, no plural, tem CPF, nome e e-mail. Tudo como string.

[02:55] Meu SQL vai ser ‘INSERT INTO alunos_’, vou inserir todos os campos, CPF, nome e e-mail, então não preciso especificar aqui. Vou direto para values, onde vou informar CPF, nome e o e-mail.

[03:12] Repare que o php storm inclusive se integra com meu banco de dados e consegue me dizer se estou na posição correta. Isso é bem útil para quem utiliza uma IDE isso faz bastante diferença.

[03:25] Esse é meu SQL. Vou preparar um statement, com minha conexão vou preparar esse SQL. Preparei, posso adicionar os valores, posso fazer o bind de cada um dos valores.

[03:41] No meu CPF, e posso utilizar dessa forma, vou passar o aluno, e como busco CPF? Preciso ter um método CPF. Implemento o método CPF, que retorna uma string por enquanto. É só o que preciso, que vai ser o this->CPF.

[04:00] Mas CPF não é uma string, é um objeto. Mas lembra que ele tem o método __toString? Então se tento retornar ele como string, o php já faz essa conversão para nós.

[04:11] Adicionei o CPF, vou adicionar agora o nome. Como vou conseguir buscar o nome do aluno? Vamos criar esse método. Vamos retornar o nome desse aluno, que é uma string. E repare que só estou criando os métodos de acesso, ou seja, só estou criando os meus getters quando realmente preciso para alguma coisa, certo? Até esse momento não tinha precisado. Mas agora preciso, então vamos lá.

[04:42] Vou adicionar também o e-mail. Preciso pegar o e-mail do aluno. Esse e-mail mais uma vez posso retornar direto o e-mail, e posso retornar diretamente como string. Não preciso expor o acesso ao objeto e-mail.

[05:00] A princípio aqui já está tudo preparado. Posso executar esse statement. Inseri meu aluno. Só que meu aluno tem vários telefones, correto? Então também precisamos inserir os telefones do aluno. Para cada um dos telefones do aluno, também não temos o método telefones, então vamos criar. O php storm não me ajudou, me deixou na mão, vamos criar direto o ‘public function telefones’.

[05:40] Podemos fazer de duas formas. Devolvendo o objeto do tipo telefone, ou devolvendo direto uma string. Por enquanto, vou devolver um array dos objetos, e não da string. O que quero dizer? Vou devolver direto os telefones e não a representação como string de cada um dos telefones. Se isso ficou confuso, você vai entender o motivo agora.

[06:03] Cada um desses telefones é um objeto do tipo telefone. Inclusive, vou informar isso para o php storm para ele saber do que estou falando. Então, cada um desses telefones tem por enquanto nada, porque um telefone ainda não tem o método para recuperar o ddd e nem um método para recuperar um número, e eu preciso disso.

[06:28] Vamos informar que isso é um telefone e vamos criar um novo statement, vamos fazendo parte a parte. Vou preparar um novo insert porque vou fazer o insert agora into telefones, onde os values vão ser ddd e número. Preciso também informar qual o CPF do aluno.

[06:55] Esse nosso SQL começou a ficar grande, vamos extrair para uma variável chamada SQL. Preciso informar o CPF do aluno a quem pertence o telefone que estou inserindo. Vamos adicionar com bindValue no campo ddd, vou pegar o telefone ddd, que ainda não existe. A mesma coisa vou fazer para o campo número. E agora para o campo CPF do aluno vou pegar de aluno CPF. Esse método já existe.

[07:30] Preciso criar o método ddd, que vai retornar uma string, que é nosso ddd, e também preciso do método número, que vai me retornar uma string, que é o número desse aluno. Dessa forma, além de conseguir pegar separadamente o ddd e o número de um telefone, consigo ainda representá-lo como string. O que funcionava antes continua funcionando e adicionei funcionalidades novas.

[08:02] Depois disso posso executar. E agora o que vamos fazer? Quando for chamar todas essas queryes, vou acabar executando um monte de query dentro de um método só, então faria sentido começar uma transação no início e finalizar uma transação no final. Correto? Mas se você fez o treinamento e mais uma vez espero que você tenha feito, de PDO, você sabe que isso não faz sentido, não funciona. Não é responsabilidade de um repositório gerenciar a conexão, porque além de adicionar um aluno, posso no mesmo use case, na mesma regra da aplicação adicionar um aluno e já realizar uma indicação para ele, ou ele já indicar outro aluno, posso já vincular algum curso a ele.

[08:55] Ou seja, gerenciar a transação deve ser uma responsabilidade de quem está chamando esse repositório, então aqui não vou me importar com a transação. Agora que começamos a implementar esse repositório, vou dar um tempo para você primeiro analisar, ver se está tudo certo, se não comi moscas, e também criar os próximos métodos. Eu quero que você implemente. Caso você queira, e eu recomendo bastante, crie testes de integração, onde você cria um banco de dados sqlight em memória, e veja se realmente está inserindo, se está conseguindo buscar, etc.

[09:35] Mais uma vez, isso tudo foi ensinado em treinamentos anteriores, por isso estou passando com pressa. Tudo isso já foi ensinado em treinamentos aqui na Alura, como por exemplo o treinamento específico de PDO, os treinamentos de testes de integração, isso tudo já vimos e estamos recapitulando no contexto de arquitetura, onde estamos separando nosso domínio da infraestrutura.

[09:57] No próximo vídeo volto com a implementação completa desse repositório e também vamos implementar juntos um novo repositório utilizando nenhuma infraestrutura, salvando tudo em memória, sem persistir.

@@04
Repositórios em duas camadas

Este ponto já foi aprendido durante o curso de PDO, mas recordar é viver. Separamos o nosso repositório em duas camadas: interface no domínio e implementação na infraestrutura.
Que vantagem temos ao separar os repositórios nessas duas camadas?

O uso de interfaces deixa as consultas SQL mais rápidas
 
Alternativa correta
Isolamos o nosso domínio de detalhes de persistência
 
Alternativa correta! Ao deixarmos apenas a interface na camada de domínio, a camada de aplicação poderá depender dos nossos repositórios, mas deixando a implementação na camada de infraestrutura, o nosso domínio não precisa conhecer detalhes de infraestrutura.
Alternativa correta
Os gráficos gerados por ferramentas de métricas ficam mais bonitos, por utilizarmos interfaces

@@05
Implementando em memória

[00:00] Bem-vindos de volta. Vim mostrar minha implementação para vocês, daqueles dois outros métodos. Fiz duas implementações diferentes, uma para cada utilizando abordagens diferentes para darmos uma olhada e ver qual é mais interessante. Mas antes, fiz uma modificação que provavelmente você já tinha pensado.
[00:18] Quando faço o SQL para inserir cada um dos telefones, não preciso ficar preparando ele dentro do loop. Posso preparar ele uma vez só, inclusive já definir o CPF, e dentro do loop, para cada um dos telefones, só defino os valores que mudam de telefone para telefone, e posso executar o mesmo prepared statement várias vezes. Com isso ganho bastante em performance.

[00:42] Então, depois de mostrar essa modificação no método adicionar, vamos no método buscarPorCpf. Nesse método eu segui uma abordagem de separar a busca pelo aluno e o mapeamento desse aluno para um objeto do tipo aluno em métodos diferentes.

[01:00] Fiz um SQL, quebrei a linha para enxergarmos melhor, onde busco os dados necessários. Poderia muito bem trocar todos esses campos por um asterisco, só que se futuramente um campo documento fosse adicionado na tabela de alunos e esse campo documento tivesse o arquivo do RG do aluno, esses dados desnecessários com um dado pesado, um dado grande, viria na minha query, eu perderia performance de forma desnecessária, então optei por adicionar manualmente cada um dos campos que quero buscar nesse SQL.

[01:40] Trouxe esses dados com meu SQL, preparei esse SQL, e adicionei a busca pelo CPF. Nessa busca por CPF estou deixando um pouco mais explícito que quero pegar a string desse CPF, e estou executando a busca. Depois pego todos os dados, e você pode se perguntar caso você não se lembre do treinamento de PDO, “mas Vinicius, você está buscando um aluno só, que é com o CPF específico. Por que você está buscando todos os alunos, uma lista de alunos?”.

[02:18] Porque quando executamos o left join, para cada um dos telefones que esse aluno tiver vai vir uma linha, então estou pegando todos e na primeira linha tenho os dados do aluno e o primeiro telefone e nas linhas seguintes só vou adicionando telefones, só que antes disso verifico se encontrei algum resultado, porque se não vier nenhum resultado, significa que não encontrei esse aluno.

[02:42] Criei uma exception própria que estende de DomainException, e define já a mensagem baseada no CPF. Só estou mostrando que uma classe de infraestrutura pode sem problema nenhum lançar uma exceção de domínio.

[02:56] Com essa exceção sendo lançada caso eu não encontre um aluno pelo CPF, vou realizar o mapeamento desse aluno. Ao mapear esse aluno, pego a primeira linha desse resultado e crio o aluno. Depois, em todas as linhas verifico se existe ddd e telefone, porque se não existir não faz sentido adicionar. E depois de garantir que existe ddd e número de telefone, adiciono cada um dos telefones no aluno. Depois de realizar esse mapeamento devolvo aluno.

[03:30] Temos nosso método buscarPorCpf implementado. Agora, no nosso buscar todos, segui uma abordagem um pouco diferente, inclusive deixei um bug para você resolver, esse bug não existe no mapearAluno, mas existe no buscarTodos.

[03:50] Eu realizei essa busca sem o filtro, sem where, estou buscando todos os alunos e vinculando todos os telefones. Como não tem filtro não preciso usar um prepared statement e estou buscando a lista de dados de todos os alunos. Ótimo. Crio um array de alunos, ou seja, estou usando uma abordagem diferente, não tem um método específico para mapear os alunos. Estou criando um array que vai ter os alunos. E para cada resultado nessa lista de dados estou vendo se já existe esse aluno, se ele já está no nosso array de alunos.

[04:25] Se ainda não existe é porque estamos naquela primeira linha de cada um dos alunos. Então criamos o aluno com CPF, nome e e-mail, e depois para esse aluno adicionamos o telefone. A dica que vou dar para vocês é que o bug está nessa linha 94. Depois vocês comparam os dois métodos e resolvem esse bug. Vou deixar isso como desafio. Caso você não consiga resolver, achar esse problema, pode abrir uma dúvida no fórum que vou tentar responder pessoalmente. Quando não consigo sempre tem um moderador ou algum aluno bastante solícito para ajudar. Mas já estou dando a dica de que o bug está aqui.

[05:02] Adicionei o telefone a cada um dos alunos, depois devolvo essa lista de alunos. Estou chamando o método array.values simplesmente para tirar a chave, que é o CPF, aqui.

[05:15] Nada disso que eu mostrei agora é novo, já trabalhamos isso em cursos anteriores, por isso estou passando bem rápido, deixando desafios no meio do caminho para você poder exercitar tudo que já trabalhamos.

[05:26] Com o nosso repositório de aluno com PDO criado, utilizamos uma exceção nova, vamos criar um novo repositório. Imagine que quero criar um teste de unidade de algum local que precisa de um repositório, de algum serviço de aplicação que vamos ver mais para frente. Queremos criar um teste para alguma classe que precise de um repositório. Imagine o trabalho que íamos ter para criar um repositório de aluno com os alunos que quisermos, porque íamos ter que criar uma conexão com PDO, criar um banco de dados, executar SQL para criar as tabelas. Daria muito trabalho.

[06:08] O que vou fazer? Vou criar um repositório de alunos em memória, para facilitar esses cenários onde quero simplesmente testar. Então, RepositorioDeAlunoEmMemoria. Vou implementar RepositorioDeAluno. Inclusive, vou renomear, porque estou usando no singular. E vou implementar todos aqueles métodos.

[06:40] O que meu repositório de alunos em memória vai precisar ter? Ele vai precisar ter um array de alunos, vai começar vazio. Quando eu tentar adicionar um aluno simplesmente adiciono meu array. Moleza. Depois volto no buscar por CPF. O buscar todos simplesmente retorna todos os alunos, e o buscar por CPF posso retornar o resultado de um array filter. Desses meus alunos posso pegar e filtrar um aluno, verificando que o CPF dele é igual ao CPF que passei por parâmetro.

[07:25] Aqui nesse método, o que estou fazendo? Já vou te explicar o que o php storm me falou. Estou filtrando os meus alunos para pegar todos os alunos que tenham CPF igual ao CPF que passei por parâmetro. Quantos alunos tem que retornar esse filtro? Um só. Se ele não me retornar nenhum aluno, ou seja, se o número de alunos em alunosFiltrados for igual a 0, significa que não tenho esse aluno, aluno não encontrado.

[08:17] Agora, se meu número for maior do que 1, aí tenho outro problema. Fica mais um desafio. Se o número de alunos filtrados for maior do que 1, que tipo de exceção você vai lançar aqui? Fica o desafio, porque essa é uma exceção complicada. Se tenho mais de um aluno com o mesmo CPF, o problema é bem mais complexo, bem maior do que simplesmente uma query errada ou algo do tipo, certo? Vou deixar isso como desafio.

[08:47] Caso contrário, se não é 0 e também não é maior do que 1, sei que só tenho um resultado, então posso retornar alunos filtrados na primeira posição, que é um aluno. Com isso, implementei a busca por CPF, implementei a adição de um aluno, implementei a busca de todos os alunos em memória. De forma muito simples, e qualquer método que precisar de um repositório de aluno posso passar tanto um repositório de aluno em memória, quanto um repositório de aluno que utilize PDO.

[09:20] Repara que essa separação entre domínio e infraestrutura já começa a valer a pena. Já começo a ter formas de acessar um repositório completamente diferentes, inclusive, como já tenho feito e como fiz vários, deixo mais um desafio aqui. Além de você decidir que tipo de exceção lançar, já que é um caso que teoricamente nunca deveria acontecer, vou deixar um desafio de você criar um novo repositório.

[09:47] Esse repositório vai ser como você quiser. Pode ser um repositório em arquivo. Caso você tenha familiaridade com outros tipos de bancos de dados, como por exemplo um mongo para um banco não relacional, um rediz para um banco chave valor em memória. O que você preferir, a tecnologia que você preferir, deixo o desafio para você criar um repositório utilizando essa tecnologia.

[10:11] Com isso já separamos bastante nossa infraestrutura do nosso domínio. Já temos espaço para continuar evoluindo nossa aplicação, lembrando sempre de focar nos detalhes da arquitetura.

@@06
Desafio: Doctrine

Caso você já tenha feito os cursos de Doctrine aqui na Alura, implemente um novo repositório utilizando o Doctrine.
Dicas:

Utilize XML para que as nossas entidades não dependam de anotações e conheçam detalhes da infraestrutura
Crie uma pasta como Persistencia ou Mapeamento dentro da infraestrutura, para adicionar os arquivos de mapeamento

@@06
Desafio: Doctrine

Caso você já tenha feito os cursos de Doctrine aqui na Alura, implemente um novo repositório utilizando o Doctrine.
Dicas:

Utilize XML para que as nossas entidades não dependam de anotações e conheçam detalhes da infraestrutura
Crie uma pasta como Persistencia ou Mapeamento dentro da infraestrutura, para adicionar os arquivos de mapeamento

@@07
Faça como eu fiz

Chegou a hora de você seguir todos os passos realizados por mim durante esta aula. Caso já tenha feito, excelente. Se ainda não, é importante que você execute o que foi visto nos vídeos para poder continuar com a próxi

Continue com os seus estudos, e se houver dúvidas, não hesite em recorrer ao nosso fórum!

@@08
O que aprendemos?

Nesta aula, aprendemos:
O conceito de repositórios, já visto no treinamento de PDO
A motivação para separar os repositórios em mais de uma camada
Que é possível criar implementações que sejam mais fáceis de utilizar em nossos testes

#### 10/02/2024

@05-Services

@@01
Projeto da aula anterior

Caso queira, você pode baixar aqui o projeto do curso no ponto em que paramos na aula anterior.

https://caelum-online-public.s3.amazonaws.com/1774-php-arquitetura-introducao/04/php-arquitetura-projeto-aula-4-completo.zip

@@02
Sistema de login

[00:00] Sejam muito bem-vindos de volta a mais um capítulo deste treinamento, onde estamos discutindo um pouco sobre arquitetura utilizando php. Vamos imaginar o seguinte cenário. Precisamos agora, além de matricular um aluno, salvar, fazer o que já fazemos com ele, conseguir armazenar a senha desse aluno para futuramente realizar login com ele, implementar um sistema de login para cada aluno.
[00:26] Então, a primeira coisa que pensamos em fazer, a coisa mais simples, é criar, deixar uma senha para o aluno. Só que pensa comigo. Aqui, o aluno, na entidade de aluno, sabemos que em algum lugar vai ser persistida, até porque temos no nosso domínio um repositório de aluno. Se sabemos que essa entidade vai ser persistida em algum lugar, seja em arquivo, banco de dados, onde for, sabemos que não é uma boa prática armazenar a senha como texto puro.

[01:00] Por exemplo, se eu fosse criar um aluno cuja senha é 1234, eu não salvaria assim. Eu precisaria de alguma forma criptografar ou fazer um hash dessa senha para que eu armazene um dado um pouco mais seguro, para que eu armazene a senha de forma que uma pessoa que consiga acesso à minha camada de persistência não consiga saber a senha.

[01:24] Existem algumas estratégias para conseguir armazenar senha, para conseguir criptografar a senha, fazer hash de senha. Existem várias estratégias. Só que aqui eu deixo um questionamento. A responsabilidade de criptografar senha é de um aluno? Será que isso deveria estar dentro da classe aluno? Nessa entidade? Acredito que não.

[01:50] E quando temos alguma regra, seja de negócio, seja uma regra mais da aplicação, ou até um detalhe de infraestrutura, que não faz parte de nenhuma entidade, nenhum value object, é muito comum que criemos uma classe específica para realizar essa ação. E uma classe específica para realizar uma ação, como já conversamos um pouco nos treinamentos de orientação a objetos, é uma classe de serviço.

[02:20] O que queremos neste momento é criar um serviço que faça criptografia de senha. Por exemplo, um cifrador de senha, um critptografador de senha. Eu sei que não vou adicionar diretamente no aluno essa responsabilidade de cifrar senha. Então o que vou fazer? Exatamente o que falei. Vou criar uma classe específica para cifrar senhas.

[02:44] Só que tem outro detalhe, outro porém. Criptografar senhas faz parte do negócio da aplicação? A empresa para qual estamos desenvolvendo o sistema é uma empresa de criptografia? Não é. Criptografia não faz parte do negócio da aplicação. O que faz parte do negócio é ter uma senha criptografada, mas como ela vai ser criptografada não faz parte do nosso domínio.

[03:11] Ou seja, podemos utilizar md5, amanhã podemos mudar para sha, depois podemos mudar para uma biblioteca mais robusta, como lib sodium, utilizar um algoritmo argom, existem vários detalhes nesse tocante de segurança que poderíamos discutir, mas nada disso diz respeito ao domínio.

[03:30] No domínio, o que vou fazer? Vou definir a interface do que preciso que esse serviço faça. Vou definir, e você pode pensar em algum nome melhor do que estou pensando, mas vou chamar de CifradorDeSenha. Essa interface vai simplesmente fazer isso, cifrar senhas.

[03:53] Vamos definir quais métodos essa classe precisa ter. Primeiro vou ter o método public function cifrar, que recebe uma string senha e devolve a string cifrada, já criptografada, seja com hash, algoritmo de criptografia, como for.

[04:12] E também vou ter um método verificar, que vai receber uma senha em texto e uma senha cifrada. E vai me dizer se essa senha cifrada corresponde a essa senha em texto.

[04:32] Ficou confuso, não estou entendendo o que você quer fazer. Pensa comigo. Imagina que estou utilizando o algoritmo de hash md5. No método cifrar vou simplesmente chamar md5 em cima dessa senha e devolver o hash. Já em verificar vou receber a senha em texto e o hash em md5, e vou verificar se fazendo o hash de novo dessa senha em md5 vai ser igual a essa senha cifrada.

[05:00] Dessa forma já pensamos bem rápido em um possível algoritmo para implementar esse cifrador de senha. Essa classe de serviço que vai nos fornecer a funcionalidade de realizar cifras de senhas tem uma possível implementação, que como acabei de falar, isso é um detalhe de infraestrutura. Não está no nosso domínio. No próximo vídeo vamos fazer exatamente isso. Vamos criar esse serviço lá na nossa camada de infraestrutura.

@@03
Serviço de infraestrutura

[00:00] Bem-vindos de volta. Vamos implementar algum algoritmo para poder criar a cifra da senha, a criptografia da senha.
interface CifradorDeSenha
{
    public function cifrar(string $senha); string;
    pubic function verificar(string $senhaEmTexto, string $senhaCifrada) boot;
}COPIAR CÓDIGO
[00:10] Vamos na nossa infraestrutura criar uma nova classe. Primeiro vou implementar a "CifradorDeSenhaMd5". Com essa classe vou implementar o algoritmo md5. Implemento um CifradorDeSenhaMd5. E de novo você pode pensar em algum nome melhor do que estou pensando aqui.

[00:36] Vou retornar a senha cifrada em md5(). Para verificar se a senha em texto bate com a senha cifrada vou verificar se o md5 da senha em texto é igual a senha cifrada. Simples assim e já temos um algoritmo de cifra de senha implementado, muito fácil, muito simples.

classic CifradorDeSenhaMd5 implements CifradorDeSenha
{

    public function cifrar(string $senha): string
    {
        return md5($senha);
    }

    public function verificar(string $senhaEmTexto string $senhaCifrada): boot
    {
        return md5($senhaEmTexto) === $senhaCifrada;
    }
}COPIAR CÓDIGO
[01:00] Como foi muito simples, podemos criar um outro. "CifradorDeSenhaPhp", porque usa a biblioteca padrão do php de senhas. E como funciona a biblioteca padrão de senhas do php? Já trabalhamos com ela lá no nosso curso de MVC. Vamos relembrar como funciona.

[01:22] como faço para cifrar uma senha? Com password_hashe passo a senha. Posso informar também qual o algoritmo. Vou utilizar o argon2id, que hoje, no momento que estou gravando, é o algoritmo mais forte que o php tem implementado. Esse algoritmo é ganhador de prêmios sobre segurança. Eu que não sou expert em segurança vou escolher esse. Caso você conheça algoritmos de segurança, caso você entenda do assunto, você pode pesquisar quais algoritmos o php implementa por padrão e escolher um pouco melhor.

[02:14] Já implementei o método de cifrar. Para verificar continua sendo muito simples. Vou fazer um password_verify e vou verificar se a senha em texto é igual a senha cifrada. Simples assim. Já tenho duas implementações de cifrador de senha muito simples, e quando for implementar minha aplicação posso escolher se vou querer utilizar md5 ou a biblioteca padrão do php e senha.

classic CifradorDeSenhaMd5 implements CifradorDeSenha
{

    public function cifrar(string $senha): string
    {
        return password_hasg($senha, algo: PASSWORD_ARGON2ID);
    }

    public function verificar(string $senhaEmTexto string $senhaCifrada): boot
    {
        return password_verify($senhaEmTexto, $senhaCifrada);
    }
}COPIAR CÓDIGO
[02:45] Com isso ganhamos muita facilidade para implementar diversos serviços, diversas implementações diferentes de serviços que nosso domínio possa precisar. No nosso caso, eu sei que meu domínio precisa saber cifrar senhas, mas como ele vai cifrar não importa para nós. Aqui temos uma diferença entre o que seria um serviço de domínio, se tivesse implementação e regras de negócio, e essa é a definição de um serviço de infraestrutura. Ou seja, é uma classe que vai realizar tarefas que não fazem parte de nenhuma entidade, de nenhum value object, mas que precisam de detalhes de infraestrutura, logo ficam na camada de infraestrutura.

[03:33] Com isso já começamos a entender um pouco melhor a separação entre serviços de domínio e serviços de infraestrutura. Mas vamos continuar falando de serviços durante esse capítulo.

@@04
Services

Mais uma vez estamos revendo conceitos com mais detalhes. Services é um conceito que já foi explicado nos cursos de orientação a objetos.
O que é uma classe de serviço, ou Service?

Uma classe que executa alguma ação que não pertence a nenhuma entidade ou VO
 
Alternativa correta! As nossas regras de negócio devem ficar nas entidades e VOs, mas nem sempre isso faz sentido. Quando precisarmos executar alguma ação que não faça parte de nenhuma entidade nem de um VO, podemos utilizar um Service.
Alternativa correta
Uma classe que estende a funcionalidade de uma entidade existente
 
Alternativa correta
Uma classe do nosso framework que está configurada para ser carregada automaticamente

@@05
E-mail por indicação

[00:00] Bem-vindos de volta. Vamos recapitular bem rápido o que foi falado no último vídeo, e vamos aumentar um pouco a complexidade das coisas que temos para entender. Primeiro, falamos sobre o que é uma classe de serviço.
[00:15] Uma classe de serviço é uma classe que realiza alguma ação que não cabe nem em uma entidade, nem em um value object, ou no repositório. É uma classe que realiza alguma ação que não teve outro lugar, que não pertence a nenhum outro lugar no nosso domínio, no nosso sistema.

[00:33] E vimos também que a diferença entre serviços de domínio e serviços de infraestrutura está na sua natureza, e não na forma como implementamos. Um serviço de infraestrutura é um serviço que precisa de detalhes externos ao nosso domínio. Por exemplo, realizar criptografia de senha não faz parte do nosso domínio, como vamos realizar não importa. Então, um serviço de domínio não vai tratar desses detalhes de como criptografar, qual biblioteca utilizar, etc.

[01:05] Aqui nós implementamos dois serviços de infraestrutura, e para isso utilizamos uma interface no nosso domínio. Qual seria um serviço de domínio então? Se a partir de um produto eu precisasse gerar um pedido, e tem uma regra no meu negócio, no meu modelo de negócios, existe uma regra para realizar essa ação, aí talvez teríamos um serviço de domínio. Mas no geral, na maioria das vezes vamos acabar utilizando serviços de infraestrutura, que foi o que vimos até agora, e vamos começar a falar um pouco sobre o que pode ser visto como um serviço, só que em outra camada, em uma camada que ainda não conversamos.

[01:50] Vou contar um caso para vocês que vamos precisar implementar. Já vimos no nosso domínio que existe a possibilidade de criarmos indicações, certo? Inclusive, não me lembro de ter deixado esse desafio, mas caso eu não tenha deixado fica aqui agora, para você implementar um repositório de indicação, seja com doctrine, PDO, com a tecnologia que você escolher.

[02:15] Além disso, sabemos que depois que um aluno indicar outro, o aluno indicado precisa receber um e-mail, mas isso é uma regra da nossa aplicação. A aplicação precisa fazer isso. A pessoa de negócios, a pessoa que busca relatórios de indicação para fazer as análises, essa pessoa não precisa saber que o aluno recebeu o e-mail, se esse e-mail foi entregue ou não. Isso não faz parte do nosso negócio, faz parte da nossa aplicação. É uma regra da aplicação.

[02:46] Deixa eu relembrar o que já vimos antes. Por exemplo, no clean architecture, temos application business rules, ou seja, regras de negócio da aplicação, regras de negócio que não fazem parte da empresa, e sim do sistema que estamos criando.

[03:03] Como definimos? Pegamos conceitos dessa arquitetura, dessa arquitetura, e dessa arquitetura, e bolamos a nossa arquitetura? Pelo que estou falando aqui faz sentido criar essa lógica de enviar e-mails nessa camada de aplicação, então vamos criar essa pasta chamada aplicação.

[03:25] Como eu abreviei infra, vou abreviar aplicação também para app. Caso você prefira, pode usar aplicação. Vou usar aplicação mesmo para não causar confusões. Temos a camada de domínio, de infraestrutura, vou criar uma camada de aplicação, que o que for relacionado a indicação vou colocar dentro de um módulo de indicação, na camada de aplicação. Nada diferente do que já fizemos. E aqui minha aplicação vai precisar enviar um e-mail, EnviaEmailDeIndicacao.

[04:06] Isso é um serviço da minha aplicação, uma regra que precisa ser executada na minha aplicação, faz todo sentido. Então, o que vou precisar fazer? No método que vou chamar de envia, poderia ser qualquer nome, vou receber um aluno. Eu poderia, obviamente, receber direto o e-mail, não tem problema nenhum, mas vou receber o aluno só para ficar mais legível, para saber que é o aluno indicado. Então vamos lá.

[04:37] Como vou enviar esse e-mail? Vou enviar utilizando a função mail php? Vou utilizar enviando phpmailer, o swift mailer? Existem várias bibliotecas do php que podem enviar e-mails. Então o que vou fazer nesse caso? Mais uma vez entramos no problema do serviço de domínio, onde sabemos o que queremos executar. Sabíamos na parte de cifrar senhas o que queríamos executar, mas não como.

[05:10] Então, o envio de um e-mail de indicação também sabemos que precisa ser executado, mas como? Vamos definir que isso é uma interface. Se é uma interface não temos implementação.

[05:25] Vamos deixar um pouco mais claro, enviaPara o alunoIndicado. Agora temos na nossa camada de aplicação, que por enquanto não tem praticamente nada e vamos falar bem mais sobre ela ainda, definimos um serviço, só que ainda não temos implementação dele.

[05:44] Como já tenho feito até aqui, vou deixar desafios para você. Quero que você faça duas implementações dessa interface. Uma utilizando a função mail do php. Caso você não conheça é só acessar php.net/mail. Nessa url você tem a documentação da função mail, como ela funciona, como faz para enviar e-mails.

[06:14] E também vou deixar um desafio para você utilizar alguma biblioteca para enviar esse e-mail. Pode ser php mailer, swift mailer, sinfony mailer, zend mailer, a biblioteca que você quiser, que caso você já conheça alguma pode utilizar essa, se eu não citei ainda. Quero que você dê uma olhada em algumas, escolha uma dessas bibliotecas e implemente essa interface lá na camada de infraestrutura, utilizando essa biblioteca.

[06:42] Com isso já entendemos um pouco o que é um serviço. Vimos a diferença entre serviços de domínio que fazem parte do que nosso domínio quer, do que a lógica da empresa quer, porque nossa empresa, a pessoa que está gerenciando nosso time disse “eu preciso que a senha do aluno esteja cifrada. Como isso vai ser feito não sei, mas isso tem que ser feito”.

[07:08] Já o envio de um e-mail não faz parte da empresa. Faz parte somente da nossa aplicação e faz parte de uma parte de notificação de ações que estão acontecendo. Isso pode ficar na nossa aplicação.

[07:23] Se eu colocasse essa interface lá no meu domínio, estaria errado, não faria sentido? Poderia fazer sentido sim, desde que isso fizesse parte da empresa, algo que a equipe de negócios pediu, algo que a equipe de negócios disse que seja necessário. Se for o caso, isso fica na camada de domínio.

[07:42] Como no nosso caso hipotético isso não é um requisito de negócios, isso é algo que só nossa aplicação está decidindo fazer para notificar, então estamos colocando na camada de aplicação.

[07:54] O que quero dizer é que cada caso é um caso. Em cada sistema, cada empresa, um serviço pode fazer sentido estar na camada de domínio, outro faz sentido estar na camada de aplicação, depende muito. No nosso caso, no nosso exemplo implementamos dessa forma. Poderia ser implementado de forma diferente sem violar nenhuma regra, sem problema nenhum.

[08:20] Só que agora, deixados os desafios para vocês, sabemos que por enquanto não tem nada para ser acessado na nossa aplicação. Ainda não temos o que foi visto naqueles padrões o que é chamado de use case. Não temos nenhum use case ainda, não temos nenhuma porta, nada que recebe alguma requisição, que recebe alguma informação para executar nossa lógica. Está faltando esse detalhe, está faltando um ponto de acesso à nossa aplicação. E como estou falando bastante, falta um ponto de acesso à nossa aplicação. É justamente sobre essa camada que vamos conversar um pouco mais no próximo capítulo.

@@06
Para saber mais: Aplicação

O que entra na camada de aplicação pode ser um assunto polêmico. A interface de envio de e-mail que acabamos de criar poderia muito bem estar em nosso domínio, sem ferir nenhuma regra.
Como desafio, transfira essa interface para a camada de domínio.

Vamos falar mais sobre a camada de aplicação na próxima aula.

@@07
Faça como eu fiz

Chegou a hora de você seguir todos os passos realizados por mim durante esta aula. Caso já tenha feito, excelente. Se ainda não, é importante que você execute o que foi visto nos vídeos para poder continuar com a próxima aula.

Continue com os seus estudos, e se houver dúvidas, não hesite em recorrer ao nosso fórum!

@@08
O que aprendemos?

Nesta aula, aprendemos:
O conceito de Services
Que há Domain, Application e Infrastructure Services
Domain Services são classes que representam uma ação entre mais de uma entidade
Application Services controlam o fluxo de alguma regra em nossa aplicação
Infrastructure Services são implementações de interfaces presentes nas camadas de domínio ou de aplicação

#### 10/02/2024

@06-Interface com usuário

@@01
Projeto da aula anterior

Caso queira, você pode baixar aqui o projeto do curso no ponto em que paramos na aula anterior.

https://caelum-online-public.s3.amazonaws.com/1774-php-arquitetura-introducao/05/php-arquitetura-projeto-aula-5-completo.zip

@@02
Como usar a aplicação

[00:00] Sejam bem-vindos a esse que é o último capítulo desse nosso treinamento de arquitetura utilizando php, e o último vídeo foi o que considero mais polêmico. No último capítulo terminamos falando um pouco da separação dos serviços que podem fazer parte da camada de aplicação. Isso, como você pode ter percebido no vídeo anterior, é um assunto bastante polêmico, várias literaturas entram em contradição quando o assunto é serviço na camada de aplicação, então existem muitas definições do pode ser feito, o que não pode ser feito.
[00:33] Uma regra que é bastante conhecida é que se em algum lugar do seu domínio existe a dependência da classe que vai ser implementada, então a interface vai ficar na camada de domínio. Caso contrário vai ser na camada de aplicação.

[00:52] Só que por que eu não sigo essa regra? Porque baseado nesse princípio nosso repositório nunca vai ficar na camada de domínio, sendo que o repositório é claramente uma responsabilidade de domínio.

[01:02] Então a lógica que eu sigo e que muitas pessoas próximas de mim já me disseram que seguem também, pessoas que consumiram a mesma literatura que eu consumi, lendo sobre DDD, sobre arquivo hexagonal, sobre clima architecture, o que é feito na prática?

[01:20] Regras que fazem parte da empresa ficam na camada de domínio, regras que só existem na aplicação, que se não fossem a aplicação não aconteceriam, ficam na camada de aplicação. É algo bastante confuso, que demanda muita leitura e contato com pessoas mais experientes do que nós.

[01:40] O contato com pessoas que já implementaram de alguma forma vai fazer com que enxerguemos em que momento colocamos na camada de aplicação, em que momento colocamos na camada de domínio. Isso é muito mais questão de experiência do que regrinha que eu possa vir aqui e falar para você que é dessa forma, faça assim.

[01:55] Com isso relativamente esclarecido, vamos a um ponto que acredito que você esteja se perguntando bastante. Como utilizo essa aplicação? Já temos bastante coisa definida no nosso domínio, nossa infraestrutura já tem alguns serviços criados. Já definimos alguns repositórios. Mas como acesso a aplicação?

[02:17] Vamos criar um ponto de acesso, por exemplo, um comando para essa aplicação. Vou chamar de matricular-aluno. Esse ponto de entrada poderia muito bem ser outra aplicação em php que vai utilizar nosso projeto, poderia ser outra camada chamada de apresentação, que teria os comandos, teria a interface com a web.

[02:41] Existem milhões de formas de fazer isso, mas vou criar fora da pasta src esse ponto de entrada da aplicação. Sabemos que precisamos do vendor/autoload, e com isso quero matricular aluno, então preciso receber um e-mail, preciso receber antes CPF e preciso receber o nome, e como você já fez os treinamentos de php aqui você sabe que conseguimos pegar esses dados da linha de comando através da variável $argv. Vou receber CPF, nome, telefone e e-mail.

[03:23] Tenho esses dados. Eu poderia receber mais telefones, mas para ficar simples vou receber um só. Eu vou criar um novo aluno, com CPF, nome, e-mail, vou importar, e tenho o CPF, nome e e-mail. Vou adicionar esse telefone a um ddd e número. Já tenho um aluno com seus telefones, tudo definido. Vou criar um repositório e por enquanto vou utilizar o repositório em memória, para ficar mais simples, para não precisar acessar aquele banco de dados e etc.

[04:20] Nesse repositório vou adicionar esse aluno e pronto, tenho uma regra de negócios da minha aplicação, um fluxo de uma regra na minha aplicação criada. Recebe os dados, seja de onde for, cria um aluno com esses dados, e em um repositório adiciona esse aluno. Tenho a organização de um fluxo. Vamos executar esse código. Vou abrir o terminal, php matricular-aluno e vamos passando os parâmetros. Primeiro CPF, depois nome, um e-mail, um ddd, e um telefone.

[05:12] Se eu executo essa aplicação tudo funciona, não recebi nenhum erro. Se passar um CPF com valor inválido, recebo um erro. Se passar CPF válido, só que e-mail for inválido, recebo um erro também. Repare que embora meu aplicativo, minha aplicação em si, minha interface com usuário, esteja completamente pobre, o fato do meu domínio ser rico, já conter todas as regras necessárias, faz com que minha aplicação seja robusta. Então, não preciso ficar refazendo validações.

[05:52] O que eu poderia fazer era se tiver algum problema na hora de criar um aluno exibe uma mensagem mais bonita. Se tiver um problema na hora de salvar um aluno, exibe uma mensagem mais bonita. Mas não preciso me preocupar em como realizar essas validações. Com um domínio rico, como fizemos, temos muito mais vantagem.

[06:14] Você provavelmente está se perguntando que tipo de aplicação é essa que vai receber tudo dessa forma em um arquivo só, e se eu quisesse matricular um aluno além de pela linha de comando, que um atendente pode precisar fazer pelo computador na hora que um aluno chegar presencialmente, como posso fazer isso através da web, para receber uma requisição através de um formulário ou de uma API.

[06:38] Se eu deixar esse arquivo com todo nosso fluxo, precisamos copiar esse código e colar em um controller da web, um controller de uma API que tenhamos. Vamos acabar tendo muita duplicação de código. Se eu quiser mudar o repositório de aluno em memória para o repositório utilizando PDO vou ter que mudar em vários lugares. Se o fluxo da minha aplicação mudar um pouco e depois de adicionar preciso mandar um e-mail também vou precisar alterar em vários lugares.

[07:05] Então, o ideal é separar isso em um caso de uso, um use case, e no ddd, no livro do Domain-Driven Design, os casos de uso são chamados de application services, ou serviços de aplicação. Segundo a literatura do ddd, um serviço de aplicação é isso, algo que recebe dados da interface de usuário e passa esses dados organizando o fluxo para a camada de domínio.

[07:40] Repare que dependendo da literatura os conceitos podem acabar mudando. É isso que vamos implementar no próximo vídeo, um application services ou use case, você pode chamar como preferir.

@@03
Command-line interface

Como recordar é viver, vamos falar sobre as variáveis que temos acesso ao utilizar a CLI (Command-line interface).
Quais são os valores das variáveis $argc e $argv, respectivamente?

$argc possui o apenas número de parâmetros passados para o arquivo PHP, e $argv é um array com o valor desses parâmetros
 
Alternativa correta
$argv possui o número de parâmetros passados e $argc é um array com o valor desses parâmetros
 
Alternativa correta
$argc possui o número de parâmetros passados mais 1, e $argv é um array com o valor desses parâmetros
 
Alternativa correta! O nome do arquivo executado conta como um parâmetro, por isso o "mais 1".

@@04
Use cases

[00:00] Bem-vindos de volta. Se você se lembra bem, caso você tenha feito os cursos de padrão de projetos, falando sobre um padrão command e eu mostrei uma implementação que tinha alguma relação com o que vamos fazer agora, com algumas diferenças, mas já aprendemos esse padrão que vou aplicar. Caso você não tenha feito esse treinamento, vem comigo que vou te mostrar o que quero fazer.
[00:25] O que recebemos na requisição matricular-aluno.php é o CPF, o nome, o e-mail, um DDD e um número, só isso. Posso inclusive, o que vejo como mais comum, ter dois casos de uso. Ter um caso de uso para criar o e-mail e um outro para adicionar telefone. Isso já vi até sendo feito em telas diferentes de acordo com a aplicação. Nós podemos seguir as duas abordagens.

[00:58] Como nesse código fizemos de uma, recebendo somente um telefone, vou fazer agora diferente. Um serviço para você criar o aluno e outro para você adicionar telefones. Vamos fazer dessa forma.

[01:14] Isso é algo que minha aplicação precisa realizar, é um fluxo que minha aplicação precisa realizar, então vai estar na minha camada de aplicação. Isso está relacionado ao aluno, então vou criar no módulo de aluno. E o que quero fazer é matricular um aluno, então vou criar um novo diretório chamado MatricularAluno.

[01:35] Por que estou criando um novo diretório? Porque podemos ter vários casos de uso e cada caso de uso pode acabar tendo mais de um arquivo, de uma classe, como veremos aqui.

[01:48] Antes de criar a execução desse serviço, quero poder informar quais são os dados que vou receber, porque pense comigo. Você não recebe da web um aluno. Você não recebe da linha de comando um aluno já criado. O que você recebe são dados primitivos, normalmente strings e inteiros, e a partir disso você vai criar um objeto do seu domínio.

[02:13] Então, o que você recebe também pode ser especificado através de uma classe, e normalmente nesse ponto chamamos esse tipo de classe que vou criar agora de DTO, que é data transfer object, ou objeto de transferência de dados.

[02:28] O que isso quer dizer? Quero pegar os dados da linha de comando e mandar para o meu domínio. Quero pegar os dados que venham da web, de um formulário, por exemplo, e mandar para o meu domínio. Quero pegar os dados que vieram em JSON e mandar para o meu domínio.

[02:45] Então, esse DTO que vamos criar contém os dados necessários para executar esse caso de uso. Vou chamar de MatricularAlunoDto. Aqui só vou ter dados, não vou ter nenhum comportamento, isso é uma classe completamente anêmica, e é de propósito.

[03:10] Vou ter o CPF do aluno, o nome do aluno, o e-mail do aluno, e a princípio é isso. Para eu matricular um aluno preciso disso. Peço o telefone em outra tela, por exemplo. Vou receber esses dados todos no construtor, inclusive vou utilizar o "Alt + Insert" que é mais rápido, e recebendo todos esses dados tenho meu objeto de transferência de dados pronto. Recebo o número do CPF, o nome e o e-mail dele e a partir disso, meu serviço de aplicação vai poder fazer o que ele precisa fazer. Então vamos criar esse serviço de aplicação.

[03:57] Criar uma classe chamada MatricularAluno, porque é exatamente essa ação que ele executa. Inclusive, como é um comando, um serviço que executa a matrícula do aluno, vou chamar de executa o método dele. E ele vai executar justamente o MatricularAlunoDto. Ele recebe esses dados, que vou chamar de $dados, para não ficar muito descritivo e te forçar a pensar em um nome melhor.

[04:27] Ao matricular o aluno não vou retornar nada. E para matricular um aluno preciso de quê? Preciso de um repositório de alunos. Qual, em memória ou em PDO? Tanto faz. Preciso da interface. Como isso vai ser implementado tanto faz.

[04:42] Vou inicializar. Repare que tenho minha classe, meu serviço de aplicação que vai realizar a matrícula de aluno com tudo que preciso. Então agora é só executar essa lógica. Vou copiar e trazer para cá, na linha 18, que vão ser só duas linhas. Em $this->repositorio.

[05:08] Aqui eu poderia, por exemplo, no meu DTO, um método chamado novoAluno, que a partir desse DTO, com os dados que já estão nele, crio um aluno. Posso fazer dessa forma ou dessa outra, criando diretamente.

[05:32] Não vamos ter telefone nesse, e dos dados vou pegar cpfAluno, nomeAluno, e emailAluno. Tenho o aluno, vou importar a classe, e com o aluno posso adicionar no repositório. Perfeito. Inclusive, caso eu esteja utilizando PDO, antes de chamar esse método executa eu poderia abrir uma transação e depois fechar essa transação. Isso é completamente possível.

[06:05] Agora, se eu for utilizar a partir da web essa aplicação posso no meu controller chamar essa classe MatricularAluno, e a partir de um comando da linha de comando posso chamar essa classe. A partir de um controller da API também posso chamar essa classe. A partir de um comando que vai ser executado através de uma fila, através de mensageria, por exemplo, eu posso utilizar essa classe também.

[06:30] Essa é a utilidade de use cases, ou application services. Essa é a ideia atrás desse padrão. A ideia é que consigamos isolar a lógica da aplicação, consigamos isolar a ideia de realizar um fluxo da nossa aplicação em uma classe específica.

[06:52] Agora vou deixar como desafio, e acredito que esse seja o desafio mais complexo até agora, de você implementar a adição de um telefone. Isso vai ser um novo application service, e já te dou uma dica. Você vai precisar alterar nosso repositório porque ele não tem método de atualizar. Você vai ter um trabalhinho, tenta fazer, se esforça um pouco. Caso você tenha alguma dúvida, caso você não consiga, nosso fórum está aí para isso. Mas tenho certeza que com os conhecimentos que adquirimos até aqui você consegue realizar essa tarefa.

[07:25] No próximo vídeo, vamos fazer juntos alguns testes nesse application service, só para entendermos que não só nosso domínio precisa ser testado. Também precisamos testar nossa aplicação. E exatamente isso que vamos fazer no próximo vídeo.

@@05
Para saber mais: Use cases

Implementamos neste vídeo o que é conhecido no mundo da Arquitetura Limpa (Clean Architecture) como Use Cases.
Os termos Use Case, Application Service e Command Handler são basicamente sinônimos e servem para fornecer pontos de entrada na sua aplicação, de forma independente dos mecanismos de entrega (Web, CLI, etc).

@@06
Testando a aplicação

[00:00] Bem-vindos de volta. Se você se lembra bem, caso você tenha feito os cursos de padrão de projetos, falando sobre um padrão command e eu mostrei uma implementação que tinha alguma relação com o que vamos fazer agora, com algumas diferenças, mas já aprendemos esse padrão que vou aplicar. Caso você não tenha feito esse treinamento, vem comigo que vou te mostrar o que quero fazer.
[00:25] O que recebemos na requisição matricular-aluno.php é o CPF, o nome, o e-mail, um DDD e um número, só isso. Posso inclusive, o que vejo como mais comum, ter dois casos de uso. Ter um caso de uso para criar o e-mail e um outro para adicionar telefone. Isso já vi até sendo feito em telas diferentes de acordo com a aplicação. Nós podemos seguir as duas abordagens.

[00:58] Como nesse código fizemos de uma, recebendo somente um telefone, vou fazer agora diferente. Um serviço para você criar o aluno e outro para você adicionar telefones. Vamos fazer dessa forma.

[01:14] Isso é algo que minha aplicação precisa realizar, é um fluxo que minha aplicação precisa realizar, então vai estar na minha camada de aplicação. Isso está relacionado ao aluno, então vou criar no módulo de aluno. E o que quero fazer é matricular um aluno, então vou criar um novo diretório chamado MatricularAluno.

[01:35] Por que estou criando um novo diretório? Porque podemos ter vários casos de uso e cada caso de uso pode acabar tendo mais de um arquivo, de uma classe, como veremos aqui.

[01:48] Antes de criar a execução desse serviço, quero poder informar quais são os dados que vou receber, porque pense comigo. Você não recebe da web um aluno. Você não recebe da linha de comando um aluno já criado. O que você recebe são dados primitivos, normalmente strings e inteiros, e a partir disso você vai criar um objeto do seu domínio.

[02:13] Então, o que você recebe também pode ser especificado através de uma classe, e normalmente nesse ponto chamamos esse tipo de classe que vou criar agora de DTO, que é data transfer object, ou objeto de transferência de dados.

[02:28] O que isso quer dizer? Quero pegar os dados da linha de comando e mandar para o meu domínio. Quero pegar os dados que venham da web, de um formulário, por exemplo, e mandar para o meu domínio. Quero pegar os dados que vieram em JSON e mandar para o meu domínio.

[02:45] Então, esse DTO que vamos criar contém os dados necessários para executar esse caso de uso. Vou chamar de MatricularAlunoDto. Aqui só vou ter dados, não vou ter nenhum comportamento, isso é uma classe completamente anêmica, e é de propósito.

[03:10] Vou ter o CPF do aluno, o nome do aluno, o e-mail do aluno, e a princípio é isso. Para eu matricular um aluno preciso disso. Peço o telefone em outra tela, por exemplo. Vou receber esses dados todos no construtor, inclusive vou utilizar o "Alt + Insert" que é mais rápido, e recebendo todos esses dados tenho meu objeto de transferência de dados pronto. Recebo o número do CPF, o nome e o e-mail dele e a partir disso, meu serviço de aplicação vai poder fazer o que ele precisa fazer. Então vamos criar esse serviço de aplicação.

[03:57] Criar uma classe chamada MatricularAluno, porque é exatamente essa ação que ele executa. Inclusive, como é um comando, um serviço que executa a matrícula do aluno, vou chamar de executa o método dele. E ele vai executar justamente o MatricularAlunoDto. Ele recebe esses dados, que vou chamar de $dados, para não ficar muito descritivo e te forçar a pensar em um nome melhor.

[04:27] Ao matricular o aluno não vou retornar nada. E para matricular um aluno preciso de quê? Preciso de um repositório de alunos. Qual, em memória ou em PDO? Tanto faz. Preciso da interface. Como isso vai ser implementado tanto faz.

[04:42] Vou inicializar. Repare que tenho minha classe, meu serviço de aplicação que vai realizar a matrícula de aluno com tudo que preciso. Então agora é só executar essa lógica. Vou copiar e trazer para cá, na linha 18, que vão ser só duas linhas. Em $this->repositorio.

[05:08] Aqui eu poderia, por exemplo, no meu DTO, um método chamado novoAluno, que a partir desse DTO, com os dados que já estão nele, crio um aluno. Posso fazer dessa forma ou dessa outra, criando diretamente.

[05:32] Não vamos ter telefone nesse, e dos dados vou pegar cpfAluno, nomeAluno, e emailAluno. Tenho o aluno, vou importar a classe, e com o aluno posso adicionar no repositório. Perfeito. Inclusive, caso eu esteja utilizando PDO, antes de chamar esse método executa eu poderia abrir uma transação e depois fechar essa transação. Isso é completamente possível.

[06:05] Agora, se eu for utilizar a partir da web essa aplicação posso no meu controller chamar essa classe MatricularAluno, e a partir de um comando da linha de comando posso chamar essa classe. A partir de um controller da API também posso chamar essa classe. A partir de um comando que vai ser executado através de uma fila, através de mensageria, por exemplo, eu posso utilizar essa classe também.

[06:30] Essa é a utilidade de use cases, ou application services. Essa é a ideia atrás desse padrão. A ideia é que consigamos isolar a lógica da aplicação, consigamos isolar a ideia de realizar um fluxo da nossa aplicação em uma classe específica.

[06:52] Agora vou deixar como desafio, e acredito que esse seja o desafio mais complexo até agora, de você implementar a adição de um telefone. Isso vai ser um novo application service, e já te dou uma dica. Você vai precisar alterar nosso repositório porque ele não tem método de atualizar. Você vai ter um trabalhinho, tenta fazer, se esforça um pouco. Caso você tenha alguma dúvida, caso você não consiga, nosso fórum está aí para isso. Mas tenho certeza que com os conhecimentos que adquirimos até aqui você consegue realizar essa tarefa.

[07:25] No próximo vídeo, vamos fazer juntos alguns testes nesse application service, só para entendermos que não só nosso domínio precisa ser testado. Também precisamos testar nossa aplicação. E exatamente isso que vamos fazer no próximo vídeo.

@@07
Acaba aqui?

[00:00] Bem-vindos de volta. Esse último vídeo vai ser só um bate-papo para conversarmos sobre o que mais estudar, se já está suficiente o conhecimento que temos até agora e etc.
[00:11] Durante todo o treinamento deixei três imagens abertas, e não foi por acaso. Essas três imagens representam conteúdos que utilizamos bastante, embora nem sempre tenha ficado claro.

[00:25] Utilizamos bastante o conceito da arquitetura hexagonal para separar nosso domínio, sejam as entidades, os value objects, os serviços. Separamos nosso domínio do mundo exterior, e isso já vimos que traz algumas vantagens. Quando criamos nosso comando da linha de comando não precisamos adicionar validação, não precisamos nos preocupar com a regra de negócios, porque já estava implementada.

[00:50] Vimos como criar portas para essas regras, através de use cases, que são definimos nesse outro padrão arquitetural, através de service applications, através de algumas outras possibilidades.

[01:05] Ainda não vimos durante esse treinamento como criar adapters, ou seja, como criar os comunicadores com o mundo exterior, mas isso é tão simples quanto criar esse arquivo. Esse pode ser um adapter na nossa arquivo hexagonal. E aqui eu poderia, por exemplo, criar aquele MatricularAlunoDto utilizando esses dados e chamar nosso use case embaixo.

[01:32] A parte de adapter, a parte de conversa com o mundo externo, depende muito de cada aplicação, por isso não implementamos neste treinamento. Esses mesmos conceitos podem ser explicados dessa forma.

[01:45] Vimos sobre a parte de entidades, e a parte do domínio em si, falamos bastante e implementamos um use case, só que não chegamos a implementar nenhum controller. Não implementamos porque não necessariamente nossa aplicação vai estar na web, não sei se ela vai utilizar formulários, se vai ser uma aplicação full stack, se vai ser só uma API recebendo dados em JSON. Isso fica, como comentei até aqui, como desafio para você.

[02:10] Vou te dar algumas opções para você implementar. Para a parte de comando de interface pela linha de comando, você viu que isso seria suficiente. Para web, você normalmente utiliza outra aplicação. Por exemplo, você utiliza um framework, ou um micro framework. Fica aqui como desafio, como sugestão, você criar uma nova pasta na raiz do lado de src chamada web, e nessa pasta web você utiliza seu framework, como por exemplo slim, o mesos, que é um micro framework bem interessante para você adicionar a um projeto existente.

[02:46] Ou então, dentro de src você pode criar uma outra pasta, que vai ser outra camada, de apresentação ou interface de usuário, ui. Com isso, dentro dessa pasta, dessa camada de apresentação você pode criar as telas, as APIs, os endpoints, os comandos, o que for.

[03:08] Uma outra forma de implementar, que acredito que seja bem interessante e possa trazer aprendizados bem legais, é você disponibilizar todo esse projeto como um componente do composer, e já vimos como fazer isso no treinamento de composer, então você pode disponibilizar todo esse projeto através do composer e na sua aplicação web, utilizando Larável, Symfony, você faz um requirer dessa aplicação, no seu controller você vai utilizar a camada de aplicação. Perfeito, tudo funciona.

[03:40] Ou você pode também utilizando um projeto Symfony console, utilizar essa camada de aplicação. Com isso você ganha diversas possibilidades, inclusive ter aplicações diferentes que utilizam essa mesma base de código. Isso te abre diversas possibilidades.

[03:56] Só que, como o grande tio Ben falava, com grandes poderes vem grandes responsabilidades. Quando você utiliza uma arquitetura complexa como essa, você tende a ter a complexidade de manutenção maior e só vale a pena realizar esse tipo de tarefa se seu sistema realmente for complexo.

[04:17] Vou abrir todas as nossas pastas para vocês verem uma coisa. Nossa aplicação hoje não faz absolutamente nada, não tenho nenhuma interface com usuário, e olha quantos arquivos já tenho criados.

[04:35] Uma arquivo mais complexa tende a criar esse tipo de situação, muitos arquivos, muitas classes. Para isso valer a pena nosso sistema precisa ter regras complexas. Preciso que essa separação faça sentido. Em um CRUD, um sistema que só tem um cadastro de alunos, isso tudo se torna desnecessário. Eu poderia ter um sistema em MVC onde meu controller faz o insert, update, delete, e show de bola, tudo funciona, não tenho nenhum problema.

[05:05] Agora, em aplicações que preciso escalar, talvez no futuro possa acabar sendo evoluída para várias aplicações, distribuídas, então uma arquitetura mais robusta faz toda a diferença.

[05:15] Voltando para as nossas imagens, vimos bastante sobre esses dois conceitos, a parte externa de adapters na arquitetura hexagonal ou de controllers na clean architecture é mais simples de implementar e você já tem os conhecimentos necessários de cursos anteriores.

[05:32] Essa imagem [Aula6_Video7_Imagem1] é de um estudo enorme e já ouvi algumas pessoas dizendo, e eu concordo, vem de um livro que é um dos livros mais importantes para arquivo de software para engenharia de software no mundo moderno, no mundo em que vivemos, em que desenvolvemos.

[05:50] O livro de ddd, Domain-Driven Design, escrito pelo Eric Evans, é um livro que traz muitos conceitos, muitas vezes conceitos muito complexos que nem sempre vamos aplicar tudo, mas muita coisa já aplicamos nessa aplicação. Como por exemplo entidades, value objects, repositórios, são todos conceitos que vieram desse livro, dessa literatura, inclusive a separação por camadas também é uma sugestão que esse livro faz.

[06:18] E no final de tudo chegamos na nossa própria arquitetura, que não precisa ter um nome, não precisa seguir à risca todas as recomendações dos outros, mas no geral ela segue bastante bem as recomendações feitas por várias literaturas, então é fácil estender nosso sistema. Se preciso de uma nova regra na minha aplicação, já sei onde adicionar. Se existe um bug acontecendo com alguma parte do meu domínio referente a aluno tenho um lugar bem definido onde buscar. Se preciso implementar um novo algoritmo de cifra de senha, pouco código vai precisar ser alterado. Só preciso implementar uma nova classe.

[06:56] Nosso código está bem extensível, como vimos está bem testável, conseguimos criar alguns testes sem maiores problemas, está legível, faz sentido quando batemos o olho. Existem muitas coisas para melhorar ainda, mas esse foi um bom começo. Algumas sugestões de leitura ficam aqui. Sobre arquivo hexagonal, clean architecture, ou arquitetura limpa, sobre ddd, testes, boas práticas e princípio de orientação a objetos em geral. Todos esses estudos são muito importantes e casam muito bem com arquitetura de software.

[07:35] Arquivo de software é um conceito que exige muito estudo, eu por exemplo aprendo bastante até hoje, estou em constante aprendizado, e espero ter conseguido passar um bom conhecimento para vocês. No próximo vídeo é aquele famoso até logo, então te espero lá para aquela revisão e um tchau.

@@08
Faça como eu fiz

Chegou a hora de você seguir todos os passos realizados por mim durante esta aula. Caso já tenha feito, excelente. Se ainda não, é importante que você execute o que foi visto nos vídeos para poder continuar com os próximos cursos que tenham este como pré-re

@@09
Projeto do curso

Caso queira, você pode baixar aqui o projeto completo implementado neste curso.

@@10
O que aprendemos?

Nesta aula, aprendemos:
Como fornecer acesso à nossa aplicação, através de Use Cases
Na prática, que web, persistência e frameworks podem ser meras ferramentas
Na prática, as vantagens de modelar uma aplicação, partindo do seu domínio

@@11
Conclusão

[00:00] Meus parabéns por terem chegado até o final desse treinamento, sei que foi um treinamento relativamente denso, complexo, mas é um estudo muito importante e espero que vocês tenham tido o interessante, pego o gosto de estudar arquitetura. Como falei, inclusive no vídeo anterior, isso aqui é só a ponta do iceberg, existe muito estudo sobre arquitetura, eu estou em constante aprendizado, estou estudando bastante sobre a área ainda, então vale a pena ler livros, ler artigos, assistir palestras. Ler bastante sobre o assunto.
[00:30] Nesse projeto que utilizamos como exemplo começamos criando algumas das classes do nosso domínio sem nem entender muito bem o que era domínio, e conforme fomos evoluindo entendemos o que era uma entidade, um value object, vimos como persistir entidades e value objects, vimos que existem particularidades entre cada um. Entendemos o conceito de módulos e começamos a separar nossa aplicação entre módulo de aluno e módulo de indicação.

[01:00] Vimos também sobre arquitetura em si e arquitetura em camadas. Como dividimos nossa aplicação, foi nas camadas de domínio, aplicação e infraestrutura, vimos que existem ordens de dependências, em que a infraestrutura pode depender da aplicação, a aplicação pode depender do domínio, mas o contrário não é verdade. O domínio tem que ser muito bem isolado, não pode depender da aplicação, da infraestrutura.

[01:24] Praticamos bastante isso. Inclusive, criamos até alguns testes. Poucos testes, mas criamos alguns testes. Deixei vários desafios, mas espero que vocês tenham conseguido fazer, ou estejam fazendo ainda. E no mais, espero que vocês tenham tirado proveito.

[01:41] Mais uma vez vou falar isso bastante, sempre que vocês me perguntarem. É impossível uma pessoa ensinar tudo que tem para saber sobre arquitetura. É impossível em um, dois, três, quatro cursos aprender tudo que tem para saber, pessoas passaram anos, passaram sua vida inteira estudando sobre esse assunto, e é um assunto muito importante. Vale a pena o estudo, leve tudo que eu mostrei aqui como uma das possíveis alternativas. Leve tudo que mostrei como uma sugestão, não tome nada do que falei como verdade absoluta, porque primeiro o que pode ser verdade hoje pode não ser mais verdade amanhã, podem surgir tecnologias novas, e podem existir princípios, conceitos, padrões que nem eu conheço, por isso não apliquei, que poderiam resolver problemas que podemos acabar esbarrando nesse projeto.

[02:30] Mais uma vez, tome tudo que falo como sugestão, e não como regra. Espero que você tenha gostado bastante. Caso você tenha alguma sugestão sobre como você aplicaria alguma parte diferente, pode abrir uma dúvida no fórum, adoro interagir por lá. No mais, espero que tenha gostado, que você faça ou já tenha feito os desafios que deixei. Não deixe de conferir os treinamentos sobre essa parte de boas práticas caso ainda não tenha feito, e te espero em futuros treinamentos aqui na Alura. Forte abraço e tchau.

