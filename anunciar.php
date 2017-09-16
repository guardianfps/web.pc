<?php require 'pages/header.php';
if(isset($_SESSION['clogin']) && !empty($_SESSION['clogin'])) {
    
}else {
     header("Location: login.php");
        exit;   
}
?>

<div class="container">
<section class="content-section animated flipInX">
<h2 class="h2-section" style="color: #563d7c;">OLÁ SEJA BEM VINDO(A) A <span class="h2-section-bold">AGENDA CAMBUÍ !</span></h2>
<div class="h2-section-descript"><p>Comece seu período de teste de 30 dias <span class="txt-gratis">grátis*</span><br />Oferta de teste gratuito uma única vez. Conforme os Termos e condições .</p></div>
</section>
<div class="box-terms animated shake" rows="100">
        <textarea readonly="">Como fazer um contrato de prestação de serviços?

Assim como todo documento, o contrato de prestação de serviços também segue um modelo com itens pré-definidos. São eles:

Identificação

Os contratos de prestação de serviços devem ser iniciados com a qualificação das partes envolvidas na negociação. Ou seja, quem é a empresa contratante (se pessoa física ou jurídica) e a contratada (empresa que presta o serviço). As informações que devem constar neste tópico são:

Razão Social;
Número do CNPJ (Cadastro Nacional de Pessoa Jurídica);
Endereço da sede (logradouro, bairro, cidade, UF e CEP);
Dados do representante da empresa.
Objeto

O objeto é uma espécie de resumo do serviço genérico que está sendo prestado pela contratada (prestadora do serviço) e aderido pela contratante (empresa/pessoa física).

Esse é um ponto padrão, pois o cliente que chega até a assinatura do contrato já conhece o produto, mas isso deve constar no documento.

Como fazer um contrato de prestação de serviços?

Assim como todo documento, o contrato de prestação de serviços também segue um modelo com itens pré-definidos. São eles:

Identificação

Os contratos de prestação de serviços devem ser iniciados com a qualificação das partes envolvidas na negociação. Ou seja, quem é a empresa contratante (se pessoa física ou jurídica) e a contratada (empresa que presta o serviço). As informações que devem constar neste tópico são:

Razão Social;
Número do CNPJ (Cadastro Nacional de Pessoa Jurídica);
Endereço da sede (logradouro, bairro, cidade, UF e CEP);
Dados do representante da empresa.
Objeto

O objeto é uma espécie de resumo do serviço genérico que está sendo prestado pela contratada (prestadora do serviço) e aderido pela contratante (empresa/pessoa física).

Esse é um ponto padrão, pois o cliente que chega até a assinatura do contrato já conhece o produto, mas isso deve constar no documento.
        </textarea>
        </div>
<div class="accept-anunciar">
<form class="btn-assinar" action="https://pagseguro.uol.com.br/pre-approvals/request.html" method="post">
<input type="checkbox" value="terms" required=""><span class="text-terms"> Concordo com os termos e condições.</span><br><br>
<input type="hidden" name="code" value="2EF8536E9999E5EEE4E3FFB404387503">
<input type="hidden" name="iot" value="button">
<input class="btn-anunciar"type="submit" value="Obter Agenda Cambuí">
</form>
</div>
</div>
<?php require 'pages/footer.php'; ?>