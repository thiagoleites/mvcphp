# Mini Framework PHP com MVC - README

Este projeto consiste na criação de um mini framework PHP com o padrão MVC (Model-View-Controller), com o objetivo de servir como material de estudo para quem está iniciando na área de desenvolvimento web com PHP.

## Como funciona o padrão MVC?

O padrão MVC é um padrão de arquitetura de software que divide uma aplicação em três partes principais: o Model (modelo), o View (visualização) e o Controller (controlador). Cada parte tem uma função específica:

- **Model**: é responsável pela manipulação dos dados e regras de negócio da aplicação.
- **View**: é responsável pela apresentação dos dados ao usuário final, em formato de HTML, CSS e JavaScript.
- **Controller**: é responsável por receber as requisições do usuário, manipular os dados do Model e enviar as informações para a View.

## Como utilizar o mini framework?

O mini framework foi construído de forma simplificada, para que seja fácil de entender e utilizar. Para utilizá-lo, siga os passos abaixo:

1. Clone o repositório em seu ambiente de desenvolvimento PHP.
2. Configure as informações de conexão com o banco de dados no arquivo `/config/config.php`.
3. Crie suas classes Model, View e Controller, seguindo o padrão estabelecido no diretório `/app`.
4. Utilize o arquivo `/public/index.php` para definir as rotas da sua aplicação, instanciando os controllers e chamando as funções correspondentes.

## Observações importantes

- Este projeto foi desenvolvido com fins educacionais, para ser utilizado como material de estudo. Não é recomendado para uso em produção.
- O mini framework foi criado sem o uso de bibliotecas externas ou frameworks, para que o entendimento do funcionamento do padrão MVC seja mais claro. Porém, é importante lembrar que em projetos reais, é comum a utilização de bibliotecas e frameworks para otimizar o desenvolvimento.
- Este projeto não segue necessariamente as melhores práticas de desenvolvimento PHP, mas sim uma implementação simplificada do padrão MVC. É importante que o desenvolvedor busque conhecimento adicional para seguir as melhores práticas em seus projetos.