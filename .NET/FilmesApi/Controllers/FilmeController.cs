using FilmesApi.Models;
using Microsoft.AspNetCore.Mvc;
using System.Security.Cryptography.X509Certificates;

namespace FilmesApi.Controllers;

[ApiController]
[Route("[controller]")]
public class FilmeController : ControllerBase
{
    private static List<Filme> filmes = new List<Filme>();
    /*Não estamos fazendo um [Http Get] temos um Http [POST]
     * Toda vez que fizermos operação do tipo Post para o
     * prefixo Filme, vamos adicionar ele via parametro; */

    // Podemos criar um campo abaixo chamado ID. do nosso controlador;
    // No momento que vamos inserir algum filme neste sistema será ID ++ incrementando

    private static int id = 0;



    [HttpPost]   // Este metódo e responsavel por fazer inserções no Sistema;
    public void AdicionaFilme([FromBody] Filme filme)
    /*Este filme que vou receber tem a informação de Titulo, genero e duração
     * E esta informação vem do corpo da minha requisição */
    {
        /*Podemos Utilizar as Data Annotations do DOTNET, validação por tempo de execução; */

        {
            filme.Id = id++;
            filmes.Add(filme);
            /* Vamos fazer uma validação com console.writeline() vamos exibir */
            Console.WriteLine(filme.Titulo);
            Console.WriteLine(filme.Duracao);
        }


    }

    /* Vamos criar um metodo aqui abaixo de Leitura */
    [HttpGet] // 
    public IEnumerable<Filme> RecuperaFilmes(int skip, int take)
    /* Fazendo desta forma com IEnumerable<Filmes> garantimos que se a lista de filmes
     * venha a mudar a sua implementação, a gente não vai precisar trocar o cabeçalho do metodo.
     * */
    {
        return filmes.Skip(skip).take(take);
        

    }

    /* Vamos Recuperar o Get, para fazer a busca através do ID do Filme;
     * Note: que nosso get vai rebeber um parametro que saiba diferenciar */
    [HttpGet("{id}")]
        public Filme? RecuperarFilmePorId(int id)
          
        {
        /*Eu quero que da minha lista de filmes eu quero recuperar, o meu primeiro elemento:
         * Onde: este filme que estou buscando tem o Id = Id que eu recebi.
         * 
         * Se eu interar por toda a minha lista e não tiver nenhum elemento que preencha este requisito,
         * eu vou retornar o valor default: filmes.FirstOrDefault(filme => filme.Id == id); neste caso e NULL (Nulo);
         * A interogação (significa que pode ser Nulo ou Não, 
         */
        return filmes.FirstOrDefault(filme => filme.Id == id);

        }

    /*Paginando os Resultados, digamos que inserimos via Postman 100 registros de filmes:
     *    {
     *     "Id":       99
     *     "Titulo": "Planeta dos Macacos"
     *     "Genero": "Ação/Aventura"
     *     "Duracao": 290;
     *   }
     *   
     *   {
     *     "Id":       100
     *     "Titulo": "Barbie o Filme"
     *     "Genero": "Aventura/Fantasia"
     *     "Duracao": 200;
                        
     *   }
     *   
     // Nota Importante aqui:
      Carrego a Lista inteira de Filmes, podemos não ter memoria sufuciente.
      Tenho que Aumentar meus custos de memoria na Maquina da AWS.
      Podemos trabalhar com o conceito de Paginação, que significa que podemos pegar
      pedaços ou trechos da minha lista de filmes.

     -> Podemos utilizar 02 Metodos interresantes chamados Skip (Quantos elementos da sua lista quer pular);
     e o take (Quanto queremos pegar);

     ->     


     *  */

    }
