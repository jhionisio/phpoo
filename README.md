# phpoo
basico de php oo

PHP orientado a objeto

O que é um objeto? Qualquer coisa que tenha características e comportamentos é considerado um objeto em programação. Um “objeto” aluno, ele tem- Características:  (atributos ou propriedades) Número de contato, Nome,
E-mail,
Formação.
Comportamento: (métodos) Estuda,
Trabalha,
Faz prova.

O uso do “molde”
Nós criamos um molde, uma engrenagem que com qual fazemos diversos objetos adicionado ou mudando detalhes de seus atributos e de seus métodos. Um molde é o que da “forma” ao seu objeto.  *Por boa prática ao começar um projeto novo de php OO vc faz a pasta classes antes de tudo. *Outra boa prática é criar um arquivo para cada classe que vc fizer. A extensão é .class.php; exemplo: Aluno.class.php
*lembrando que a primeira letra da classe e a primeira do arquivo sempre devem ser maiúscula, e o nome do arquivo o mesmo que da classe.

Uma classe funciona como um esqueleto, que da sustentação para o objeto, com ela vc pode mudar métodos ou atributos e dar “sustentação” pro “corpo” do objeto com os métodos e atributos.

Métodos setters e getters- 
Métodos Setters são aqueles que enviam informações para os atributos enquanto os getters são os que recebem essa informação, que puxam essa informação (para cada atributo dentro da classe você coloca um getter e um setter)

Visibilidade- 
A visibilidade de uma propriedade ou método pode ser definida prefixando a declaração com as palavras-chave: public, protected or private. Itens declarados como públicos podem ser acessados de qualquer lugar. Membros declarados como protegidos só podem ser acessados na classe declarante e suas classes herdeiras. Membros declarados como privados só podem ser acessados na classe que define o membro privado.

Método construtor-
O método construtor envia automaticamente informações para os atributos assim que a classe é instanciada 
