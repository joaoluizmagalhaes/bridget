(function($) {

  $(document).ready(function() {

    //Demonstração de Resultado - Funçoes e verificação de entradas

    $('input[name^=receita-bruta-operacional]').keyup(function(){
      var year = $(this).data('year');
      receitaOperacionalLiquida(year);
      lucroBruto(year);
      lucroOperacional(year);
      resultadosAntesDoIrEbt(year);
      lucroLiquido(year);
    });

    $('input[name^=deducoes-da-receita]').keyup(function(){
      var year = $(this).data('year');
      receitaOperacionalLiquida(year);
      lucroBruto(year);
      lucroOperacional(year);
      resultadosAntesDoIrEbt(year);
      lucroLiquido(year);
    });

    $('input[name^=custo-dos-produtos-vendidos]').keyup(function(){
      var year = $(this).data('year');
      receitaOperacionalLiquida(year)
      lucroBruto(year);
      lucroOperacional(year);
      resultadosAntesDoIrEbt(year);
      lucroLiquido(year);
    });

    $('input[name^=custo-dos-servicos-prestados]').keyup(function(){
      var year = $(this).data('year');
      receitaOperacionalLiquida(year)
      lucroBruto(year);
      lucroOperacional(year);
      resultadosAntesDoIrEbt(year);
      lucroLiquido(year);
    });

    $('input[name^=despesas-gerais-e-administrativas]').keyup(function(){
      var year = $(this).data('year');
      despesasOperacionais(year);
      lucroOperacional(year);
      resultadosAntesDoIrEbt(year);
      lucroLiquido(year);
    });

    $('input[name^=despesas-comerciais]').keyup(function(){
      var year = $(this).data('year');
      despesasOperacionais(year);
      lucroOperacional(year);
      resultadosAntesDoIrEbt(year);
      lucroLiquido(year);
    });

    $('input[name^=despesas-com-pessoal]').keyup(function(){
      var year = $(this).data('year');
      despesasOperacionais(year);
      lucroOperacional(year);
      resultadosAntesDoIrEbt(year);
      lucroLiquido(year);
    });

    $('input[name^=depreciacao-e-amortizacao]').keyup(function(){
      var year = $(this).data('year');
      despesasOperacionais(year);
      lucroOperacional(year);
      resultadosAntesDoIrEbt(year);
      lucroLiquido(year);
    });

    $('input[name^=receitas-financeiras]').keyup(function(){
      var year = $(this).data('year');
      resultadoFinanceiro(year);
      resultadosAntesDoIrEbt(year);
      lucroLiquido(year);
    });

    $('input[name^=despesas-financeiras]').keyup(function(){
      var year = $(this).data('year');
      resultadoFinanceiro(year);
      resultadosAntesDoIrEbt(year);
      lucroLiquido(year);
    });

    $('input[name^=receitas-nao-operacionais]').keyup(function(){
      var year = $(this).data('year');
      resultadosNaoOperacionais(year);
      resultadosAntesDoIrEbt(year);
      lucroLiquido(year);
    });

    $('input[name^=despesas-nao-operacionais]').keyup(function(){
      var year = $(this).data('year');
      resultadosNaoOperacionais(year);
      resultadosAntesDoIrEbt(year);
      lucroLiquido(year);
    });

    $('input[name^=imposto-de-renda]').keyup(function(){
      var year = $(this).data('year');
      resultadosNaoOperacionais(year);
      resultadosAntesDoIrEbt(year);
      lucroLiquido(year);
    });

    $('input[name^=csll]').keyup(function(){
      var year = $(this).data('year');
      resultadosNaoOperacionais(year);
      resultadosAntesDoIrEbt(year);
      lucroLiquido(year);
    });


    function receitaOperacionalLiquida(year) {
      var val1 = document.getElementById('receita-bruta-operacional-'+ year).valueAsNumber;
      var val2 = document.getElementById('deducoes-da-receita-'+ year).valueAsNumber;
      var result = parseFloat(val1).toFixed(2) - parseFloat(val2).toFixed(2) ;
      $('input[name=receita-operacional-liquida-' + year + ']').val(result.toFixed(2)).mask("#.#00,00");
    }

    function lucroBruto(year) {
      var val1 = document.getElementById('custo-dos-produtos-vendidos-'+ year).valueAsNumber,
          val2 = document.getElementById('custo-dos-servicos-prestados-'+ year).valueAsNumber,
          val3 = document.getElementById('receita-operacional-liquida-' + year).valueAsNumber,
          result1 = parseFloat(val1) + parseFloat(val2),
          result2 = parseFloat(val3) - result1;
      
      $('input[name=lucro-bruto-' + year + ']').val(result2.toFixed(2));
    }

    function despesasOperacionais(year) {
      var val1 = document.getElementById('despesas-gerais-e-administrativas-'+ year).valueAsNumber,
          val2 = document.getElementById('despesas-comerciais-'+ year).valueAsNumber,
          val3 = document.getElementById('despesas-com-pessoal-'+ year).valueAsNumber,
          val4 = document.getElementById('depreciacao-e-amortizacao-'+ year).valueAsNumber,
          result = parseFloat(val1) + parseFloat(val2) + parseFloat(val3) + parseFloat(val4);

      $('input[name=despesas-operacionais-' + year + ']').val(result.toFixed(2));
    }
    
    function lucroOperacional(year) {
      var val1 = document.getElementById('lucro-bruto-'+ year).valueAsNumber,
          val2 = document.getElementById('despesas-operacionais-'+ year).valueAsNumber,
          result = parseFloat(val1) - parseFloat(val2);

      $('input[name=lucro-operacional-' + year + ']').val(result.toFixed(2));
    }

    function resultadoFinanceiro(year) {
      var val1 = document.getElementById('despesas-financeiras-'+ year).valueAsNumber,
          val2 = document.getElementById('receitas-financeiras-'+ year).valueAsNumber,
          result = parseFloat(val1) + parseFloat(val2);
      
      $('input[name=resultado-financeiro-' + year + ']').val(result.toFixed(2));
    }

    function resultadosNaoOperacionais(year) {
      var val1 = document.getElementById('despesas-nao-operacionais-'+ year).valueAsNumber,
          val2 = document.getElementById('receitas-nao-operacionais-'+ year).valueAsNumber,
          result = parseFloat(val1) + parseFloat(val2);
      
      $('input[name=resultados-nao-operacionais-' + year + ']').val(result.toFixed(2));
    }

    function resultadosAntesDoIrEbt(year) {
      var val1 = document.getElementById('lucro-operacional-'+ year).valueAsNumber,
          val2 = document.getElementById('resultado-financeiro-'+ year).valueAsNumber,
          val3 = document.getElementById('resultados-nao-operacionais-'+ year).valueAsNumber,
          result = parseFloat(val1) - parseFloat(val2) - parseFloat(val3);
      
      $('input[name=resultado-antes-do-ir-ebt-' + year + ']').val(result.toFixed(2));
    }
    
    function lucroLiquido(year) {
      var val1 = document.getElementById('imposto-de-renda-'+ year).valueAsNumber,
          val2 = document.getElementById('csll-'+ year).valueAsNumber,
          val3 = document.getElementById('resultado-antes-do-ir-ebt-'+ year).valueAsNumber,
          result = parseFloat(val3) - (parseFloat(val2) + parseFloat(val1));
  
      $('input[name=lucro-liquido-' + year + ']').val(result.toFixed(2));
    }


    //Balanço - Funçoes e verificação de entradas

    caixa-e-aplicacoes

    $('input[name^=caixa-e-aplicacoes]').keyup(function(){
      var year = $(this).data('year');
      resultadosNaoOperacionais(year);
      resultadosAntesDoIrEbt(year);
      lucroLiquido(year);
    });

    function ativo(year) {
      var val1 = 
    }


  });

})( jQuery );