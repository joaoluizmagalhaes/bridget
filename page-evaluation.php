<?php /* Template Name: Avaliação*/ 

  if(!is_user_logged_in()) {
    wp_redirect(home_url());
    exit();
  }

  get_header();

?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <section class="evaluation">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="container">
          <h2 class="title">Demonstração de Resultado do Exercício</h2>
          <table>
            <thead>
              <tr>
                <th>Valores em R$</th>
                <th><?= date('Y',strtotime("-5 year")) ?></th>
                <th><?= date('Y',strtotime("-4 year")) ?></th>
                <th><?= date('Y',strtotime("-3 year")) ?></th>
                <th><?= date('Y',strtotime("-2 year")) ?></th>
                <th><?= date('Y',strtotime("-1 year")) ?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Receita Operacional Bruta</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="receita-bruta-operacional-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="receita-bruta-operacional-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>(-) Deduções da Receita</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="deducoes-da-receita-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="deducoes-da-receita-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>= Receita Operacional Líquida</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="receita-operacional-liquida-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="receita-operacional-liquida-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>(-) Custos dos Produtos Vendidos</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="custo-dos-produtos-vendidos-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="custo-dos-produtos-vendidos-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>(-) Custos dos Serviços Prestados</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="custo-dos-servicos-prestados-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="custo-dos-servicos-prestados-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>= Lucro Bruto</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number"
                      step="0.01" 
                      value="0" 
                      id="lucro-bruto-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="lucro-bruto-<?= date('Y',strtotime("-". $i . " year")) ?>"
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>(-) Despesas Operacionais</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number"
                      step="0.01" 
                      value="0" 
                      id="despesas-operacionais-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="despesas-operacionais-<?= date('Y',strtotime("-". $i . " year")) ?>"
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Despesas Gerais e Administrativas</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="despesas-gerais-e-administrativas-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="despesas-gerais-e-administrativas-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Despesas Comerciais</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="despesas-comerciais-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="despesas-comerciais-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Despesas com Pessoal</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="despesas-com-pessoal-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="despesas-com-pessoal-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Depreciação e Amortização</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="depreciacao-e-amortizacao-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="depreciacao-e-amortizacao-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>= Lucro Operacional - EBIT</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number"
                      step="0.01" 
                      value="0" 
                      id="lucro-operacional-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="lucro-operacional-<?= date('Y',strtotime("-". $i . " year")) ?>"
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>(+/-) Resultado Financeiro</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="resultado-financeiro-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="resultado-financeiro-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>(+) Receitas Financeiras</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="receitas-financeiras-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="receitas-financeiras-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>(-) Despesas Financeiras</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="despesas-financeiras-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="despesas-financeiras-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>(+/-) Resultados Não Operacionais</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="resultados-nao-operacionais-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="resultados-nao-operacionais-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>(+) Receitas Não Operacionais</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="receitas-nao-operacionais-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="receitas-nao-operacionais-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>(-) Despesas Não Operacionais</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="despesas-nao-operacionais-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="despesas-nao-operacionais-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>= Resultado antes do Imposto de Renda - EBT</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="resultado-antes-do-ir-ebt-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="resultado-antes-do-ir-ebt-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Imposto de Renda - IR</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="imposto-de-renda-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="imposto-de-renda-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Contribuição Social sobre Lucro Líquido - CSLL</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="csll-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="csll-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Lucro Líquido</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="lucro-liquido-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="lucro-liquido-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
            </tbody>
          </table>
          <h2 class="title">Balanço Patrimonial</h2>
          <table>
            <thead>
              <tr>
                <th></th>
                <th><?= date('d/m/Y',strtotime("12/31 -5 year")) ?></th>
                <th><?= date('d/m/Y',strtotime("12/31 -4 year")) ?></th>
                <th><?= date('d/m/Y',strtotime("12/31 -3 year")) ?></th>
                <th><?= date('d/m/Y',strtotime("12/31 -2 year")) ?></th>
                <th><?= date('d/m/Y',strtotime("12/31 -1 year")) ?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>ATIVO</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="ativo-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="ativo-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>ATIVO CIRCULANTE</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="ativo-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="ativo-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Caixa e aplicações</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="caixa-e-aplicacoes-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="caixa-e-aplicacoes-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Contas a receber</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="contas-a-receber-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="contas-a-receber-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Estoque</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="estoque-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="estoque-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Outros</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="outros-ativo-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="outros-ativo-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>
                  <br>
                </td>
              </tr>
              <tr>
                <td>ATIVO NÃO CIRCULANTE</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="ativo-nao-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="ativo-nao-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Realizável a Longo Prazo</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="realizavel-a-longo-prazo-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="realizavel-a-longo-prazo-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Contas a receber</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="contas-a-receber-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="contas-a-receber-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Outros</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="outros-realizavel-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="outros-realizavel-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Permanente</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="permanente-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="permanente-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Imobilizado</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="imobilizado-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="imobilizado-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Intangível</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="intangivel-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="intangivel-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Outros</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="outros-permanente-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="outros-permanente-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>
                  <br>
                </td>
              </tr>
              <tr>
                <td>PASSIVO</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="passivo-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="passivo-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>PASSIVO CIRCULANTE</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="passivo-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="passivo-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Contas a pagar</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="contas-a-pagar-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="contas-a-pagar-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Salários e Contribuíções a Pagar</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="salarios-e-contribuicoes-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="salarios-e-contribuicoes-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Impostos a Pagar</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="impostos-a-pagar-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="impostos-a-pagar-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Empréstimos e financiamentos</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="emprestimos-e-financiamentos-passivo-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="emprestimos-e-financiamentos-passivo-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Outros</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="outros-passivo-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="outros-passivo-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>
                  <br>
                </td>
              </tr>
              <tr>
                <td>PASSIVO NÃO CIRCULANTE</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="passivo-nao-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="passivo-nao-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Empréstimos e financiamentos</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="emprestimos-e-financiamentos-passivo-nao-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="emprestimos-e-financiamentos-passivo-nao-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Outros</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="outros-passivo-nao-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="outros-passivo-nao-circulante-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>
                  <br>
                </td>
              </tr>
              <tr>
                <td>PATRIMÔNIO LÍQUIDO</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="patrimonio-liquido-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="patrimonio-liquido-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Capital social</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="capital-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="capital-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                      readonly
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Lucros/Prejuizos acumulados</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="lucros-prejuizos-acumulados-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="lucros-prejuizos-acumulados-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>Outros</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="outros-patrimonio-liquido-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="outros-patrimonio-liquido-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
              <tr>
                <td>
                  <br>
                </td>
              </tr>
              <tr>
                <td>Balanço</td>
                <?php for($i = 5; $i > 0; $i-- ) { ?>
                  <td>
                    <input 
                      type="number" 
                      step="0.01" 
                      value="0" 
                      id="balanco-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      name="balanco-<?= date('Y',strtotime("-". $i . " year")) ?>" 
                      data-year="<?= date('Y',strtotime("-". $i . " year")) ?>"
                    >
                  </td>
                <?php } ?>
              </tr>
            </tbody>
          </table>
        </div>
      </article>
    </section>
  </main>
</div>



<?php

    get_footer();