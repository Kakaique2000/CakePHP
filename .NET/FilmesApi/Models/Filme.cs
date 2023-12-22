using System.ComponentModel.DataAnnotations;

namespace FilmesApi.Models;

public class Filme
{
    internal int id;

    /*Quais são os atributos, ou as propriedades, informações que
* um filme possui, coisas como:
* 1 - Titulo.
* 2 - Tempo de Duração
* 3 - Genero;
* 4 - ID;
*/
    public int Id { get; set; } // gerada a propriedade ID;
    [Required(ErrorMessage = " O titulo do filme e Obrigatorio! ")]
    public string Titulo { get; set; }
    [Required(ErrorMessage = " O Genero do Filme e Obrigatorio ")]
    [MaxLength(100, ErrorMessage = " O tamanho do genero não pode exceder 50 caracteres! ")]
    public string Genero { get; set; }
    [Required]
    [Range(70,600, ErrorMessage = "A Duração deve ser entre 70 e 600 minutos ! ")]
    public int Duracao { get; set; }


    /* Além de dizer que eles são obrigatorios, podemos customizar esta mensagem de erro!
     */

     

}