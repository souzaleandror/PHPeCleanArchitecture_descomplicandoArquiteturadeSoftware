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