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