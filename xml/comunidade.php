<?php
    
    require_once '../includes/configxml.php';
    
    $idPesquisador = $_REQUEST['idPesquisador'];
    $idComunidade = $_REQUEST['idComunidade'];
    
    if($idPesquisador != "") {
                $sql = 'select * from pesquisador where idPesquisador = ' . $idPesquisador;
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
    }
    

    
     if($idComunidade != "") {
                $sqlComunidade = 'select nmComunidade, nmMunicipio, UF, cdIBGE from comunidade c, municipio m
                                  where c.idMunicipio = m.idMunicipio and c.idComunidade = ' . $idComunidade;
                $resultComunidade = $db->query($sqlComunidade);
                $rowC = $resultComunidade->fetch_assoc();
    }
     
 ?>
<h:html xmlns="http://www.w3.org/2002/xforms" xmlns:h="http://www.w3.org/1999/xhtml" xmlns:ev="http://www.w3.org/2001/xml-events" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:jr="http://openrosa.org/javarosa">
  <h:head>
    <h:title>Cadastro Comunidade - <?=$rowC['nmComunidade']?></h:title>
     <model>
      <instance>
        <data id="build_Cadastro-Comunidade_1357351163">
          <meta>
            <instanceID/>
          </meta>
          <responsavel>
             <datapesquisa>
             </datapesquisa>
             <tipopesquisa>
              comunidade
             </tipopesquisa>
             <idresponsavel>
               <?=$row['idPesquisador']?>
             </idresponsavel>
            <nomeresponsavel>
              <?=$row['nmPesquisador']?>
            </nomeresponsavel>
            <cpf>
              <?=$row['CPF']?>
            </cpf>
          </responsavel>
          <perfilcomunidade>
            <estado><?=$rowC['UF']?></estado>
            <municipio><?=$rowC['nmMunicipio']?></municipio>
            <codigoibge><?=$rowC['cdIBGE']?></codigoibge>
            <comunidade><?=$rowC['nmComunidade']?></comunidade>
            <distanciasede/>
          </perfilcomunidade>
          <coordenada>
            <coordenadageografica/>
          </coordenada>
          <informacoesgerais>
            <classificacao/>
            <topografia/>
            <familias/>
          </informacoesgerais>
          <dadoscasas>
            <dispersao/>
            <tipoconstrucao/>
          </dadoscasas>
          <especificaroutros/>
          <acesso>
            <viaacesso/>
            <condicaouso/>
            <transitavel/>
          </acesso>
          <infraestrutura>
            <energia/>
            <aguaencanada/>
            <esgotamentosanitario/>
          </infraestrutura>
          <tipoenergia/>
          <outrotipoenergia/>
          <acessoagua>
            <casascomacesso/>
            <casassemacesso/>
          </acessoagua>
          <tipoesgotamento/>
          <outroesgotamento/>
          <educacao>
            <numeroescolas/>
          </educacao>
          <educacaoalunos>
            <numeroalunos/>
          </educacaoalunos>
          <dimensaoeconomica>
            <fonterenda/>
          </dimensaoeconomica>
          <outrarenda/>
          <atividadeagricola>
            <produto/>
            <finalidade/>
            <irrigacao/>
          </atividadeagricola>
          <saude/>
          <postonao>
            <popsedirige/>
            <distancia/>
            <frequenciavisita/>
          </postonao>
          <postosim>
            <distanciaposto/>
            <frequenciavisita/>
          </postosim>
          <saudefamilia/>
          <numeroagentes/>
          <doencas/>
          <doencasfrequentes/>
          <outrasdoencas/>
          <servicos/>
          <outroservico/>
          <associacao/>
          <organizacao/>
          <associacaocomunitaria/>
          <cooperativa/>
          <movimentodemulheres/>
          <pastoral/>
          <jovens/>
          <apl/>
          <grupodemulheres/>
          <conselhos/>
          <outros/>
          <assinatura/>
          <pesquisa>
            comunidade
          </pesquisa>
        </data>
      </instance>
      <itext>
        <translation lang="eng">
          <text id="/data/responsavel:label">
            <value>
              Responsável
            </value>
          </text>
          <text id="/data/responsavel/nomeresponsavel:label">
            <value>
              Nome do Entrevistador
            </value>
          </text>
          <text id="/data/responsavel/cpf:label">
            <value>
              CPF
            </value>
          </text>
          <text id="/data/responsavel/cpf:hint">
            <value>
            </value>
          </text>
          <text id="/data/perfilcomunidade:label">
            <value>
              Dados da Comunidade
            </value>
          </text>
          <text id="/data/perfilcomunidade/estado:label">
            <value>
              UF
            </value>
          </text>
          <text id="/data/perfilcomunidade/estado:hint">
            <value>
              Digitar sigla do Estado.
            </value>
          </text>
          <text id="/data/perfilcomunidade/municipio:label">
            <value>
              Nome do Município
            </value>
          </text>
          <text id="/data/perfilcomunidade/codigoibge:label">
            <value>
              Código do Município no IBGE
            </value>
          </text>
          <text id="/data/perfilcomunidade/comunidade:label">
            <value>
              Nome da Comunidade
            </value>
          </text>
          <text id="/data/perfilcomunidade/distanciasede:label">
            <value>
              Distância entre a Comunidade e a Sede do Município (em Km)
            </value>
          </text>
          <text id="/data/coordenada:label">
            <value>
              Coordenada Geográfica da Comunidade
            </value>
          </text>
          <text id="/data/coordenada/coordenadageografica:label">
            <value>
              Capturar Localização
            </value>
          </text>
          <text id="/data/coordenada/coordenadageografica:hint">
            <value>
              Ativar GPS do Tablet.
            </value>
          </text>
          <text id="/data/informacoesgerais:label">
            <value>
              Informações Gerais sobre a Comunidade
            </value>
          </text>
          <text id="/data/informacoesgerais/classificacao:label">
            <value>
              Selecione a classificação da comunidade:
            </value>
          </text>
          <text id="/data/informacoesgerais/classificacao:option0">
            <value>
              Aldeia indígena
            </value>
          </text>
          <text id="/data/informacoesgerais/classificacao:option1">
            <value>
              Quilombolas
            </value>
          </text>
          <text id="/data/informacoesgerais/classificacao:option2">
            <value>
              Assentamento
            </value>
          </text>
          <text id="/data/informacoesgerais/classificacao:option3">
            <value>
              Comunidade rural
            </value>
          </text>
          <text id="/data/informacoesgerais/classificacao:option4">
            <value>
              Fundo de pasto
            </value>
          </text>
          <text id="/data/informacoesgerais/topografia:label">
            <value>
              Selecione a topografia geral da comunidade:
            </value>
          </text>
          <text id="/data/informacoesgerais/topografia:option0">
            <value>
              Plana
            </value>
          </text>
          <text id="/data/informacoesgerais/topografia:option1">
            <value>
              Acidentada
            </value>
          </text>
          <text id="/data/informacoesgerais/familias:label">
            <value>
              Indique o número de famílias residentes na comunidade.
            </value>
          </text>
          <text id="/data/dadoscasas:label">
            <value>
              Informações Casas
            </value>
          </text>
          <text id="/data/dadoscasas/dispersao:label">
            <value>
              Indique o grau de dispersão das casas:
            </value>
          </text>
          <text id="/data/dadoscasas/dispersao:option0">
            <value>
              Aglomeradas
            </value>
          </text>
          <text id="/data/dadoscasas/dispersao:option1">
            <value>
              Dispersas
            </value>
          </text>
          <text id="/data/dadoscasas/tipoconstrucao:label">
            <value>
              Qual é o tipo de construção predominante?
            </value>
          </text>
          <text id="/data/dadoscasas/tipoconstrucao:option0">
            <value>
              Alvenaria (tijolo)
            </value>
          </text>
          <text id="/data/dadoscasas/tipoconstrucao:option1">
            <value>
              Taipa
            </value>
          </text>
          <text id="/data/dadoscasas/tipoconstrucao:option2">
            <value>
              Adobe
            </value>
          </text>
          <text id="/data/dadoscasas/tipoconstrucao:option3">
            <value>
              Outros
            </value>
          </text>
          <text id="/data/especificaroutros:label">
            <value>
              Se voce selecioou a opção &quot;outros&quot; na questão anterior, especifique.
            </value>
          </text>
          <text id="/data/acesso:label">
            <value>
              Vias de Acesso
            </value>
          </text>
          <text id="/data/acesso/viaacesso:label">
            <value>
              Selecione o tipo de estrada da principal via de acesso à comunidade:
            </value>
          </text>
          <text id="/data/acesso/viaacesso:option0">
            <value>
              Asfalto
            </value>
          </text>
          <text id="/data/acesso/viaacesso:option1">
            <value>
              Barro
            </value>
          </text>
          <text id="/data/acesso/viaacesso:option2">
            <value>
              Cascalho
            </value>
          </text>
          <text id="/data/acesso/viaacesso:option3">
            <value>
              Outro
            </value>
          </text>
          <text id="/data/acesso/condicaouso:label">
            <value>
              Selecione a condição de uso da estrada:
            </value>
          </text>
          <text id="/data/acesso/condicaouso:option0">
            <value>
              Bom
            </value>
          </text>
          <text id="/data/acesso/condicaouso:option1">
            <value>
              Regular
            </value>
          </text>
          <text id="/data/acesso/condicaouso:option2">
            <value>
              Ruim
            </value>
          </text>
          <text id="/data/acesso/transitavel:label">
            <value>
              A estrada é transitavel durante o ano todo?
            </value>
          </text>
          <text id="/data/acesso/transitavel:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/acesso/transitavel:option1">
            <value>
              Não
            </value>
          </text>
          <text id="/data/infraestrutura:label">
            <value>
              Infraestrutura
            </value>
          </text>
          <text id="/data/infraestrutura/energia:label">
            <value>
              Existe energia na comunidade?
            </value>
          </text>
          <text id="/data/infraestrutura/energia:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/infraestrutura/energia:option1">
            <value>
              Não
            </value>
          </text>
          <text id="/data/infraestrutura/energia:option2">
            <value>
              Parcialmente
            </value>
          </text>
          <text id="/data/infraestrutura/aguaencanada:label">
            <value>
              A comunidade tem água encanada?
            </value>
          </text>
          <text id="/data/infraestrutura/aguaencanada:option0">
            <value>
              Sim, todas as casas possuem acesso à água.
            </value>
          </text>
          <text id="/data/infraestrutura/aguaencanada:option1">
            <value>
              Não, nenhuma casa tem acesso à água.
            </value>
          </text>
          <text id="/data/infraestrutura/aguaencanada:option2">
            <value>
              Parcialmente. Há casas sem acesso à agua e casas com acesso.
            </value>
          </text>
          <text id="/data/infraestrutura/esgotamentosanitario:label">
            <value>
              Há esgotamento sanitário na comunidade?
            </value>
          </text>
          <text id="/data/infraestrutura/esgotamentosanitario:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/infraestrutura/esgotamentosanitario:option1">
            <value>
              Não
            </value>
          </text>
          <text id="/data/tipoenergia:label">
            <value>
              Qual é o tipo de energia utilizada na comunidade?
            </value>
          </text>
          <text id="/data/tipoenergia:hint">
            <value>
              É possível selecionar mais de um tipo.
            </value>
          </text>
          <text id="/data/tipoenergia:option0">
            <value>
              Solar
            </value>
          </text>
          <text id="/data/tipoenergia:option1">
            <value>
              Eólica
            </value>
          </text>
          <text id="/data/tipoenergia:option2">
            <value>
              Elétrica
            </value>
          </text>
          <text id="/data/tipoenergia:option3">
            <value>
              Diesel
            </value>
          </text>
          <text id="/data/tipoenergia:option4">
            <value>
              Outro tipo de energia.
            </value>
          </text>
          <text id="/data/outrotipoenergia:label">
            <value>
              Se a resposta anterior foi outro tipo de energia, especifique qual.
            </value>
          </text>
          <text id="/data/acessoagua:label">
            <value>
              Acesso à água.
            </value>
          </text>
          <text id="/data/acessoagua/casascomacesso:label">
            <value>
              Indique o número de casas com acesso à água.
            </value>
          </text>
          <text id="/data/acessoagua/casassemacesso:label">
            <value>
              Indique o numero de casas sem acesso à água.
            </value>
          </text>
          <text id="/data/tipoesgotamento:label">
            <value>
              Especifique o tipo de esgotamento sanitário utilizado na comunidade.
            </value>
          </text>
          <text id="/data/tipoesgotamento:option0">
            <value>
              Esgoto tratado
            </value>
          </text>
          <text id="/data/tipoesgotamento:option1">
            <value>
              Fossa comum
            </value>
          </text>
          <text id="/data/tipoesgotamento:option2">
            <value>
              Fosse Séptica
            </value>
          </text>
          <text id="/data/tipoesgotamento:option3">
            <value>
              Outro
            </value>
          </text>
          <text id="/data/outroesgotamento:label">
            <value>
              Se a resposta anterior foi &quot;outro&quot;, especifique.
            </value>
          </text>
          <text id="/data/educacao:label">
            <value>
              Educação
            </value>
          </text>
          
          <text id="/data/educacaoalunos:label">
            <value>
              Alunos por Escola (Digite o número de alunos por escola)
            </value>
          </text>
           <text id="/data/educacao/numeroescolas:label">
            <value>
              Indique o número de escolas da comunidade.
            </value>
          </text>
          <text id="/data/educacaoalunos/numeroalunos:label">
            <value>
              Indique o número de alunos (aparecerá <output value="/data/educacao/numeroescolas"/> para preencher)
            </value>
          </text>
          
          <text id="/data/dimensaoeconomica:label">
            <value>
              Dimensão Econômica
            </value>
          </text>
          <text id="/data/dimensaoeconomica/fonterenda:label">
            <value>
              Indique a principal fonte de renda da comunidade.
            </value>
          </text>
          <text id="/data/dimensaoeconomica/fonterenda:option0">
            <value>
              Agricultura
            </value>
          </text>
          <text id="/data/dimensaoeconomica/fonterenda:option1">
            <value>
              Criação de animais
            </value>
          </text>
          <text id="/data/dimensaoeconomica/fonterenda:option2">
            <value>
              Trabalho doméstico
            </value>
          </text>
          <text id="/data/dimensaoeconomica/fonterenda:option3">
            <value>
              Assalariados
            </value>
          </text>
          <text id="/data/dimensaoeconomica/fonterenda:option4">
            <value>
              Aposentados
            </value>
          </text>
          <text id="/data/dimensaoeconomica/fonterenda:option5">
            <value>
              Renda proveniente de programas sociais do Governo Federal.
            </value>
          </text>
          <text id="/data/dimensaoeconomica/fonterenda:option6">
            <value>
              Outra
            </value>
          </text>
          <text id="/data/outrarenda:label">
            <value>
              Se a resposta anterior foi &quot;outra&quot;, especifique qual.
            </value>
          </text>
          <text id="/data/atividadeagricola:label">
            <value>
              Atividade Agrícola
            </value>
          </text>
          <text id="/data/atividadeagricola/produto:label">
            <value>
              Se há predominância de atividade agrícola, especifique o produto:
            </value>
          </text>
          <text id="/data/atividadeagricola/finalidade:label">
            <value>
              Especifique a finalidade.
            </value>
          </text>
          <text id="/data/atividadeagricola/finalidade:hint">
            <value>
              É possível marcar mais de uma opção.
            </value>
          </text>
          <text id="/data/atividadeagricola/finalidade:option0">
            <value>
              Consumo
            </value>
          </text>
          <text id="/data/atividadeagricola/finalidade:option1">
            <value>
              Venda
            </value>
          </text>
          <text id="/data/atividadeagricola/irrigacao:label">
            <value>
              Especifique o(s) tipo(s) de irrigação.
            </value>
          </text>
          <text id="/data/atividadeagricola/irrigacao:hint">
            <value>
              É possível marcar mais de um tipo.
            </value>
          </text>
          <text id="/data/atividadeagricola/irrigacao:option0">
            <value>
              Aspersão
            </value>
          </text>
          <text id="/data/atividadeagricola/irrigacao:option1">
            <value>
              Sulco
            </value>
          </text>
          <text id="/data/atividadeagricola/irrigacao:option2">
            <value>
              Gotejamento
            </value>
          </text>
          <text id="/data/atividadeagricola/irrigacao:option3">
            <value>
              Kits de irrigação
            </value>
          </text>
          <text id="/data/atividadeagricola/irrigacao:option4">
            <value>
              Não há irrigação
            </value>
          </text>
          <text id="/data/saude:label">
            <value>
              Ha posto de saúde na comunidade?
            </value>
          </text>
          <text id="/data/saude:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/saude:option1">
            <value>
              Não
            </value>
          </text>
          <text id="/data/postonao:label">
            <value>
              Em caso de não haver posto de saúde.
            </value>
          </text>
          <text id="/data/postonao/popsedirige:label">
            <value>
              Para onde a população se dirige?
            </value>
          </text>
          <text id="/data/postonao/distancia:label">
            <value>
              Distância aproximada da comunidade (em km).
            </value>
          </text>
          <text id="/data/postonao/frequenciavisita:label">
            <value>
              Informe a frequência da visita do médico à comunidade:
            </value>
          </text>
          <text id="/data/postonao/frequenciavisita:option0">
            <value>
              Diária
            </value>
          </text>
          <text id="/data/postonao/frequenciavisita:option1">
            <value>
              Semanal
            </value>
          </text>
          <text id="/data/postonao/frequenciavisita:option2">
            <value>
              Quinzenal
            </value>
          </text>
          <text id="/data/postonao/frequenciavisita:option3">
            <value>
              Mensal
            </value>
          </text>
          <text id="/data/postonao/frequenciavisita:option4">
            <value>
              Nao há.
            </value>
          </text>
          <text id="/data/postosim:label">
            <value>
              Em caso de haver posto de saúde
            </value>
          </text>
          <text id="/data/postosim/distanciaposto:label">
            <value>
              Distância aproximada do posto de saúde da comunidade (em km).
            </value>
          </text>
          <text id="/data/postosim/frequenciavisita:label">
            <value>
              Informe a frequência da visita do médico à comunidade.
            </value>
          </text>
          <text id="/data/postosim/frequenciavisita:option0">
            <value>
              Diária
            </value>
          </text>
          <text id="/data/postosim/frequenciavisita:option1">
            <value>
              Semanal
            </value>
          </text>
          <text id="/data/postosim/frequenciavisita:option2">
            <value>
              Quinzenal
            </value>
          </text>
          <text id="/data/postosim/frequenciavisita:option3">
            <value>
              Mensal
            </value>
          </text>
          <text id="/data/postosim/frequenciavisita:option4">
            <value>
              Nao há.
            </value>
          </text>
          <text id="/data/saudefamilia:label">
            <value>
              Existe Programa de Saúde da Família?
            </value>
          </text>
          <text id="/data/saudefamilia:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/saudefamilia:option1">
            <value>
              Não
            </value>
          </text>
          <text id="/data/numeroagentes:label">
            <value>
              Indique o número de agentes comunitários que atendem a comunidade.
            </value>
          </text>
          <text id="/data/numeroagentes:hint">
            <value>
              Consultar agentes de saúde locais.
            </value>
          </text>
          <text id="/data/doencas:label">
            <value>
              Há ocorrências de doenças na comunidade?
            </value>
          </text>
          <text id="/data/doencas:hint">
            <value>
              Consultar agentes de saúde locais.
            </value>
          </text>
          <text id="/data/doencas:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/doencas:option1">
            <value>
              Não
            </value>
          </text>
          <text id="/data/doencasfrequentes:label">
            <value>
              Quais as mais frequentes?
            </value>
          </text>
          <text id="/data/doencasfrequentes:option0">
            <value>
              Diarréia
            </value>
          </text>
          <text id="/data/doencasfrequentes:option1">
            <value>
              Leptospirose
            </value>
          </text>
          <text id="/data/doencasfrequentes:option2">
            <value>
              Hepatite
            </value>
          </text>
          <text id="/data/doencasfrequentes:option3">
            <value>
              Esquistossomose
            </value>
          </text>
          <text id="/data/doencasfrequentes:option4">
            <value>
              Outras
            </value>
          </text>
          <text id="/data/outrasdoencas:label">
            <value>
              Se a resposta anterior foi &quot;outras&quot;, especifique abaixo quais são:
            </value>
          </text>
          <text id="/data/servicos:label">
            <value>
              Selecione os tipos de serviço disponíveis na comunidade.
            </value>
          </text>
          <text id="/data/servicos:hint">
            <value>
              É possível selecionar mais de uma opção.
            </value>
          </text>
          <text id="/data/servicos:option0">
            <value>
              Correio
            </value>
          </text>
          <text id="/data/servicos:option1">
            <value>
              Farmácia
            </value>
          </text>
          <text id="/data/servicos:option2">
            <value>
              Feira livre
            </value>
          </text>
          <text id="/data/servicos:option3">
            <value>
              Olaria
            </value>
          </text>
          <text id="/data/servicos:option4">
            <value>
              Artesanato
            </value>
          </text>
          <text id="/data/servicos:option5">
            <value>
              Outros
            </value>
          </text>
          <text id="/data/outroservico:label">
            <value>
              Se você selecionou a opção &quot;outros&quot;, por favor, especifique qual ou quais outros serviços estão disponíveis na comunidade.
            </value>
          </text>
          <text id="/data/associacao:label">
            <value>
              A comunidade possui alguma associação comunitária local?
            </value>
          </text>
          <text id="/data/associacao:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/associacao:option1">
            <value>
              Não
            </value>
          </text>
          <text id="/data/organizacao:label">
            <value>
              Selecione qual organização a comunidade possui.
            </value>
          </text>
          <text id="/data/organizacao:hint">
            <value>
              É possível selecionar mais de uma opção.
            </value>
          </text>
          <text id="/data/organizacao:option0">
            <value>
              Associação comunitária
            </value>
          </text>
          <text id="/data/organizacao:option1">
            <value>
              Cooperativa
            </value>
          </text>
          <text id="/data/organizacao:option2">
            <value>
              Movimento de mulheres
            </value>
          </text>
          <text id="/data/organizacao:option3">
            <value>
              Grupo ou Pastoral de Igreja
            </value>
          </text>
          <text id="/data/organizacao:option4">
            <value>
              Grupo de Jovens
            </value>
          </text>
          <text id="/data/organizacao:option5">
            <value>
              Arranjo Produtivo Local - APL
            </value>
          </text>
          <text id="/data/organizacao:option6">
            <value>
              Grupo de Mulheres
            </value>
          </text>
          <text id="/data/organizacao:option7">
            <value>
              Conselhos
            </value>
          </text>
          <text id="/data/organizacao:option8">
            <value>
              Outros
            </value>
          </text>
          <text id="/data/associacaocomunitaria:label">
            <value>
              Qual é o nome da Associação Comunitária?
            </value>
          </text>
          <text id="/data/cooperativa:label">
            <value>
              Qual é o nome da Cooperativa?
            </value>
          </text>
          <text id="/data/movimentodemulheres:label">
            <value>
              Qual é o nome do Movimento?
            </value>
          </text>
          <text id="/data/pastoral:label">
            <value>
              Qual é o nome do grupo ou da pastoral da Igreja?
            </value>
          </text>
          <text id="/data/jovens:label">
            <value>
              Qual é o nome do Grupo de Jovens?
            </value>
          </text>
          <text id="/data/apl:label">
            <value>
              Qual é o nome do APL?
            </value>
          </text>
          <text id="/data/grupodemulheres:label">
            <value>
              Qual é o nome do grupo de mulheres?
            </value>
          </text>
          <text id="/data/conselhos:label">
            <value>
              Qual é o nome do Conselho?
            </value>
          </text>
          <text id="/data/outros:label">
            <value>
              Se você selecionou a opção &quot;outros&quot;, especifique abaixo qual.
            </value>
          </text>
          <text id="/data/outros:hint">
            <value>
              Pode ser mais de um, se houver.
            </value>
          </text>
          <text id="/data/assinatura:label">
            <value>
              Tire uma foto da assinatura.
            </value>
          </text>
        </translation>
      </itext>
      <bind nodeset="/data/meta/instanceID" type="string" readonly="true()" calculate="concat('uuid:', uuid())"/>
      <bind nodeset="/data/responsavel/nomeresponsavel" type="string" readonly="true()"/>
      <bind nodeset="/data/responsavel/cpf" type="string" readonly="true()"/>
      <bind nodeset="/data/responsavel/datapesquisa" type="date" jr:preload="date" jr:preloadParams="today"/>
      <bind nodeset="/data/perfilcomunidade/estado" type="string" readonly="true()"/>
      <bind nodeset="/data/perfilcomunidade/municipio" type="string" readonly="true()"/>
      <bind nodeset="/data/perfilcomunidade/codigoibge" type="int" readonly="true()"/>
      <bind nodeset="/data/perfilcomunidade/comunidade" type="string" readonly="true()"/>
      <bind nodeset="/data/perfilcomunidade/distanciasede" required="true()" type="int"/>
      <bind nodeset="/data/coordenada/coordenadageografica" required="true()" type="geopoint"/>
      <bind nodeset="/data/informacoesgerais/classificacao" required="true()" type="select1"/>
      <bind nodeset="/data/informacoesgerais/topografia" required="true()" type="select1"/>
      <bind nodeset="/data/informacoesgerais/familias" required="true()" type="int"/>
      <bind nodeset="/data/dadoscasas/dispersao" required="true()" type="select1"/>
      <bind nodeset="/data/dadoscasas/tipoconstrucao" required="true()" type="select1"/>
      <bind nodeset="/data/especificaroutros" required="true()" type="string" relevant="(selected(/data/dadoscasas/tipoconstrucao,&quot;outros&quot;))"/>
      <bind nodeset="/data/acesso/viaacesso" type="select1"/>
      <bind nodeset="/data/acesso/condicaouso" required="true()" type="select1"/>
      <bind nodeset="/data/acesso/transitavel" required="true()" type="select1"/>
      <bind nodeset="/data/infraestrutura/energia" required="true()" type="select1"/>
      <bind nodeset="/data/infraestrutura/aguaencanada" required="true()" type="select1"/>
      <bind nodeset="/data/infraestrutura/esgotamentosanitario" required="true()" type="select1"/>
      <bind nodeset="/data/tipoenergia" type="select" required="true()" relevant="(selected(/data/infraestrutura/energia,&quot;sim&quot;) or selected(/data/infraestrutura/energia,&quot;parcialmente&quot;))"/>
      <bind nodeset="/data/outrotipoenergia" type="string" required="true()" relevant="(selected(/data/tipoenergia,&quot;outro&quot;))"/>
      <bind nodeset="/data/acessoagua" required="true()" relevant="(selected(/data/infraestrutura/aguaencanada,&quot;parcialmente&quot;))"/>
      <bind nodeset="/data/acessoagua/casascomacesso" required="true()" type="int" relevant="(selected(/data/infraestrutura/aguaencanada,&quot;parcialmente&quot;))"/>
      <bind nodeset="/data/acessoagua/casassemacesso" required="true()" type="int" relevant="(selected(/data/infraestrutura/aguaencanada,&quot;parcialmente&quot;))"/>
      <bind nodeset="/data/tipoesgotamento" type="select1" required="true()" relevant="(selected(/data/infraestrutura/esgotamentosanitario,&quot;sim&quot;))"/>
      <bind nodeset="/data/outroesgotamento" type="string" required="true()" relevant="(selected(/data/tipoesgotamento,&quot;outro&quot;))"/>
      <bind nodeset="/data/educacao/numeroescolas" required="true()" type="int"/>
      <bind nodeset="/data/educacaoalunos/numeroalunos" required="true()" type="int"/>
      <bind nodeset="/data/dimensaoeconomica/fonterenda" required="true()" type="select1"/>
      <bind nodeset="/data/outrarenda" type="string" required="true()" relevant="(selected(/data/dimensaoeconomica/fonterenda,&quot;outra&quot;))"/>
      <bind nodeset="/data/atividadeagricola" required="true()" relevant="(selected(/data/dimensaoeconomica/fonterenda,&quot;agricultura&quot;))"/>
      <bind nodeset="/data/atividadeagricola/produto" required="true()" type="string" relevant="(selected(/data/dimensaoeconomica/fonterenda,&quot;agricultura&quot;))"/>
      <bind nodeset="/data/atividadeagricola/finalidade" required="true()" type="select" relevant="(selected(/data/dimensaoeconomica/fonterenda,&quot;agricultura&quot;))"/>
      <bind nodeset="/data/atividadeagricola/irrigacao" required="true()" type="select" relevant="(selected(/data/dimensaoeconomica/fonterenda,&quot;agricultura&quot;))"/>
      <bind nodeset="/data/saude" required="true()" type="select1"/>
      <bind nodeset="/data/postonao" required="true()" relevant="(selected(/data/saude,&quot;nao&quot;))"/>
      <bind nodeset="/data/postonao/popsedirige" required="true()" type="string" relevant="(selected(/data/saude,&quot;nao&quot;))"/>
      <bind nodeset="/data/postonao/distancia" required="true()" type="int" relevant="(selected(/data/saude,&quot;nao&quot;))"/>
      <bind nodeset="/data/postonao/frequenciavisita" required="true()" type="select1" relevant="(selected(/data/saude,&quot;nao&quot;))"/>
      <bind nodeset="/data/postosim" required="true()" relevant="(selected(/data/saude,&quot;sim&quot;))"/>
      <bind nodeset="/data/postosim/distanciaposto" required="true()" type="int" relevant="(selected(/data/saude,&quot;sim&quot;))"/>
      <bind nodeset="/data/postosim/frequenciavisita" required="true()" type="select1" relevant="(selected(/data/saude,&quot;sim&quot;))"/>
      <bind nodeset="/data/saudefamilia" required="true()" type="select1"/>
      <bind nodeset="/data/numeroagentes" required="true()" type="int" relevant="(selected(/data/saudefamilia,&quot;sim&quot;))"/>
      <bind nodeset="/data/doencas" required="true()" type="select1"/>
      <bind nodeset="/data/doencasfrequentes" type="select" relevant="(selected(/data/doencas,&quot;sim&quot;))"/>
      <bind nodeset="/data/outrasdoencas" required="true()" type="string" relevant="(selected(/data/doencasfrequentes,&quot;outras&quot;))"/>
      <bind nodeset="/data/servicos" type="select"/>
      <bind nodeset="/data/outroservico" required="true()" type="string" relevant="(selected(/data/servicos,&quot;outros&quot;))"/>
      <bind nodeset="/data/associacao" type="select1"/>
      <bind nodeset="/data/organizacao" required="true()" type="select" relevant="(selected(/data/associacao,&quot;sim&quot;))"/>
      <bind nodeset="/data/associacaocomunitaria" required="true()" type="string" relevant="(selected(/data/organizacao,&quot;associacao&quot;))"/>
      <bind nodeset="/data/cooperativa" required="true()" type="string" relevant="(selected(/data/organizacao,&quot;cooperativa&quot;))"/>
      <bind nodeset="/data/movimentodemulheres" required="true()" type="string" relevant="(selected(/data/organizacao,&quot;mulheres&quot;))"/>
      <bind nodeset="/data/pastoral" type="string"  required="true()"relevant="(selected(/data/organizacao,&quot;pastoral&quot;))"/>
      <bind nodeset="/data/jovens" type="string" required="true()" relevant="(selected(/data/organizacao,&quot;jovens&quot;))"/>
      <bind nodeset="/data/apl" type="string" required="true()" relevant="(selected(/data/organizacao,&quot;apl&quot;))"/>
      <bind nodeset="/data/grupodemulheres" required="true()" type="string" relevant="(selected(/data/organizacao,&quot;grupo&quot;))"/>
      <bind nodeset="/data/conselhos" required="true()" type="string" relevant="(selected(/data/organizacao,&quot;conselhos&quot;))"/>
      <bind nodeset="/data/outros" required="true()" type="string" relevant="(selected(/data/organizacao,&quot;outros&quot;))"/>
      <bind nodeset="/data/assinatura" type="binary"/>
    </model>
  </h:head>
  <h:body>
    <group appearance="field-list">
      <label ref="jr:itext('/data/responsavel:label')"/>
      <input ref="/data/responsavel/nomeresponsavel">
        <label ref="jr:itext('/data/responsavel/nomeresponsavel:label')"/>
      </input>
      <input ref="/data/responsavel/cpf">
        <label ref="jr:itext('/data/responsavel/cpf:label')"/>
        <hint ref="jr:itext('/data/responsavel/cpf:hint')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/perfilcomunidade:label')"/>
      <input ref="/data/perfilcomunidade/estado">
        <label ref="jr:itext('/data/perfilcomunidade/estado:label')"/>
        <hint ref="jr:itext('/data/perfilcomunidade/estado:hint')"/>
      </input>
      <input ref="/data/perfilcomunidade/municipio">
        <label ref="jr:itext('/data/perfilcomunidade/municipio:label')"/>
      </input>
      <input ref="/data/perfilcomunidade/codigoibge">
        <label ref="jr:itext('/data/perfilcomunidade/codigoibge:label')"/>
      </input>
      <input ref="/data/perfilcomunidade/comunidade">
        <label ref="jr:itext('/data/perfilcomunidade/comunidade:label')"/>
      </input>
      <input ref="/data/perfilcomunidade/distanciasede">
        <label ref="jr:itext('/data/perfilcomunidade/distanciasede:label')"/>
      </input>
    </group>
    <group>
      <label ref="jr:itext('/data/coordenada:label')"/>
      <input ref="/data/coordenada/coordenadageografica">
        <label ref="jr:itext('/data/coordenada/coordenadageografica:label')"/>
        <hint ref="jr:itext('/data/coordenada/coordenadageografica:hint')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/informacoesgerais:label')"/>
      <select1 ref="/data/informacoesgerais/classificacao">
        <label ref="jr:itext('/data/informacoesgerais/classificacao:label')"/>
        <item>
          <label ref="jr:itext('/data/informacoesgerais/classificacao:option0')"/>
          <value>aldeia</value>
        </item>
        <item>
          <label ref="jr:itext('/data/informacoesgerais/classificacao:option1')"/>
          <value>quilombolas</value>
        </item>
        <item>
          <label ref="jr:itext('/data/informacoesgerais/classificacao:option2')"/>
          <value>assentamento</value>
        </item>
        <item>
          <label ref="jr:itext('/data/informacoesgerais/classificacao:option3')"/>
          <value>comunidaderural</value>
        </item>
        <item>
          <label ref="jr:itext('/data/informacoesgerais/classificacao:option4')"/>
          <value>pasto</value>
        </item>
      </select1>
      <select1 ref="/data/informacoesgerais/topografia">
        <label ref="jr:itext('/data/informacoesgerais/topografia:label')"/>
        <item>
          <label ref="jr:itext('/data/informacoesgerais/topografia:option0')"/>
          <value>plana</value>
        </item>
        <item>
          <label ref="jr:itext('/data/informacoesgerais/topografia:option1')"/>
          <value>acidentada</value>
        </item>
      </select1>
      <input ref="/data/informacoesgerais/familias">
        <label ref="jr:itext('/data/informacoesgerais/familias:label')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/dadoscasas:label')"/>
      <select1 ref="/data/dadoscasas/dispersao">
        <label ref="jr:itext('/data/dadoscasas/dispersao:label')"/>
        <item>
          <label ref="jr:itext('/data/dadoscasas/dispersao:option0')"/>
          <value>aglomeradas</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadoscasas/dispersao:option1')"/>
          <value>dispersas</value>
        </item>
      </select1>
      <select1 ref="/data/dadoscasas/tipoconstrucao">
        <label ref="jr:itext('/data/dadoscasas/tipoconstrucao:label')"/>
        <item>
          <label ref="jr:itext('/data/dadoscasas/tipoconstrucao:option0')"/>
          <value>alvenaria</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadoscasas/tipoconstrucao:option1')"/>
          <value>taipa</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadoscasas/tipoconstrucao:option2')"/>
          <value>adobe</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadoscasas/tipoconstrucao:option3')"/>
          <value>outros</value>
        </item>
      </select1>
    </group>
    <input ref="/data/especificaroutros">
      <label ref="jr:itext('/data/especificaroutros:label')"/>
    </input>
    <group appearance="field-list">
      <label ref="jr:itext('/data/acesso:label')"/>
      <select1 ref="/data/acesso/viaacesso">
        <label ref="jr:itext('/data/acesso/viaacesso:label')"/>
        <item>
          <label ref="jr:itext('/data/acesso/viaacesso:option0')"/>
          <value>asfalto</value>
        </item>
        <item>
          <label ref="jr:itext('/data/acesso/viaacesso:option1')"/>
          <value>barro</value>
        </item>
        <item>
          <label ref="jr:itext('/data/acesso/viaacesso:option2')"/>
          <value>cascalho</value>
        </item>
        <item>
          <label ref="jr:itext('/data/acesso/viaacesso:option3')"/>
          <value>outro</value>
        </item>
      </select1>
      <select1 ref="/data/acesso/condicaouso">
        <label ref="jr:itext('/data/acesso/condicaouso:label')"/>
        <item>
          <label ref="jr:itext('/data/acesso/condicaouso:option0')"/>
          <value>bom</value>
        </item>
        <item>
          <label ref="jr:itext('/data/acesso/condicaouso:option1')"/>
          <value>regular</value>
        </item>
        <item>
          <label ref="jr:itext('/data/acesso/condicaouso:option2')"/>
          <value>ruim</value>
        </item>
      </select1>
      <select1 ref="/data/acesso/transitavel">
        <label ref="jr:itext('/data/acesso/transitavel:label')"/>
        <item>
          <label ref="jr:itext('/data/acesso/transitavel:option0')"/>
          <value>sim</value>
        </item>
        <item>
          <label ref="jr:itext('/data/acesso/transitavel:option1')"/>
          <value>nao</value>
        </item>
      </select1>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/infraestrutura:label')"/>
      <select1 ref="/data/infraestrutura/energia">
        <label ref="jr:itext('/data/infraestrutura/energia:label')"/>
        <item>
          <label ref="jr:itext('/data/infraestrutura/energia:option0')"/>
          <value>sim</value>
        </item>
        <item>
          <label ref="jr:itext('/data/infraestrutura/energia:option1')"/>
          <value>nao</value>
        </item>
        <item>
          <label ref="jr:itext('/data/infraestrutura/energia:option2')"/>
          <value>parcialmente</value>
        </item>
      </select1>
      <select1 ref="/data/infraestrutura/aguaencanada">
        <label ref="jr:itext('/data/infraestrutura/aguaencanada:label')"/>
        <item>
          <label ref="jr:itext('/data/infraestrutura/aguaencanada:option0')"/>
          <value>sim</value>
        </item>
        <item>
          <label ref="jr:itext('/data/infraestrutura/aguaencanada:option1')"/>
          <value>nao</value>
        </item>
        <item>
          <label ref="jr:itext('/data/infraestrutura/aguaencanada:option2')"/>
          <value>parcialmente</value>
        </item>
      </select1>
      <select1 ref="/data/infraestrutura/esgotamentosanitario">
        <label ref="jr:itext('/data/infraestrutura/esgotamentosanitario:label')"/>
        <item>
          <label ref="jr:itext('/data/infraestrutura/esgotamentosanitario:option0')"/>
          <value>sim</value>
        </item>
        <item>
          <label ref="jr:itext('/data/infraestrutura/esgotamentosanitario:option1')"/>
          <value>nao</value>
        </item>
      </select1>
    </group>
    <select ref="/data/tipoenergia">
      <label ref="jr:itext('/data/tipoenergia:label')"/>
      <hint ref="jr:itext('/data/tipoenergia:hint')"/>
      <item>
        <label ref="jr:itext('/data/tipoenergia:option0')"/>
        <value>solar</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tipoenergia:option1')"/>
        <value>eolica</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tipoenergia:option2')"/>
        <value>eletrica</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tipoenergia:option3')"/>
        <value>diesel</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tipoenergia:option4')"/>
        <value>outro</value>
      </item>
    </select>
    <input ref="/data/outrotipoenergia">
      <label ref="jr:itext('/data/outrotipoenergia:label')"/>
    </input>
    <group appearance="field-list">
      <label ref="jr:itext('/data/acessoagua:label')"/>
      <input ref="/data/acessoagua/casascomacesso">
        <label ref="jr:itext('/data/acessoagua/casascomacesso:label')"/>
      </input>
      <input ref="/data/acessoagua/casassemacesso">
        <label ref="jr:itext('/data/acessoagua/casassemacesso:label')"/>
      </input>
    </group>
    <select1 ref="/data/tipoesgotamento">
      <label ref="jr:itext('/data/tipoesgotamento:label')"/>
      <item>
        <label ref="jr:itext('/data/tipoesgotamento:option0')"/>
        <value>esgototratado</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tipoesgotamento:option1')"/>
        <value>fossacomum</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tipoesgotamento:option2')"/>
        <value>fossaseptica</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tipoesgotamento:option3')"/>
        <value>outro</value>
      </item>
    </select1>
    <input ref="/data/outroesgotamento">
      <label ref="jr:itext('/data/outroesgotamento:label')"/>
    </input>
    <group appearance="field-list">
      <label ref="jr:itext('/data/educacao:label')"/>
      <input ref="/data/educacao/numeroescolas">
        <label ref="jr:itext('/data/educacao/numeroescolas:label')"/>
      </input>
    </group>
    
    <group appearance="field-list">
      <label ref="jr:itext('/data/educacaoalunos:label')"/>
      <repeat nodeset="/data/educacaoalunos" jr:count="/data/educacao/numeroescolas">
      <input ref="/data/educacaoalunos/numeroalunos">
        <label ref="jr:itext('/data/educacaoalunos/numeroalunos:label')"/>
      </input>
      </repeat>
    </group>
    
    
    
    <group appearance="field-list">
      <label ref="jr:itext('/data/dimensaoeconomica:label')"/>
      <select1 ref="/data/dimensaoeconomica/fonterenda">
        <label ref="jr:itext('/data/dimensaoeconomica/fonterenda:label')"/>
        <item>
          <label ref="jr:itext('/data/dimensaoeconomica/fonterenda:option0')"/>
          <value>agricultura</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dimensaoeconomica/fonterenda:option1')"/>
          <value>criacaodeanimais</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dimensaoeconomica/fonterenda:option2')"/>
          <value>trabalhodomestico</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dimensaoeconomica/fonterenda:option3')"/>
          <value>assalariados</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dimensaoeconomica/fonterenda:option4')"/>
          <value>aposentados</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dimensaoeconomica/fonterenda:option5')"/>
          <value>programassociais</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dimensaoeconomica/fonterenda:option6')"/>
          <value>outra</value>
        </item>
      </select1>
    </group>
    <input ref="/data/outrarenda">
      <label ref="jr:itext('/data/outrarenda:label')"/>
    </input>
    <group appearance="field-list">
      <label ref="jr:itext('/data/atividadeagricola:label')"/>
      <input ref="/data/atividadeagricola/produto">
        <label ref="jr:itext('/data/atividadeagricola/produto:label')"/>
      </input>
      <select ref="/data/atividadeagricola/finalidade">
        <label ref="jr:itext('/data/atividadeagricola/finalidade:label')"/>
        <hint ref="jr:itext('/data/atividadeagricola/finalidade:hint')"/>
        <item>
          <label ref="jr:itext('/data/atividadeagricola/finalidade:option0')"/>
          <value>consumo</value>
        </item>
        <item>
          <label ref="jr:itext('/data/atividadeagricola/finalidade:option1')"/>
          <value>venda</value>
        </item>
      </select>
      <select ref="/data/atividadeagricola/irrigacao">
        <label ref="jr:itext('/data/atividadeagricola/irrigacao:label')"/>
        <hint ref="jr:itext('/data/atividadeagricola/irrigacao:hint')"/>
        <item>
          <label ref="jr:itext('/data/atividadeagricola/irrigacao:option0')"/>
          <value>aspersao</value>
        </item>
        <item>
          <label ref="jr:itext('/data/atividadeagricola/irrigacao:option1')"/>
          <value>sulco</value>
        </item>
        <item>
          <label ref="jr:itext('/data/atividadeagricola/irrigacao:option2')"/>
          <value>gotejamento</value>
        </item>
        <item>
          <label ref="jr:itext('/data/atividadeagricola/irrigacao:option3')"/>
          <value>kitsirrigacao</value>
        </item>
        <item>
          <label ref="jr:itext('/data/atividadeagricola/irrigacao:option4')"/>
          <value>naoha</value>
        </item>
      </select>
    </group>
    <select1 ref="/data/saude">
      <label ref="jr:itext('/data/saude:label')"/>
      <item>
        <label ref="jr:itext('/data/saude:option0')"/>
        <value>sim</value>
      </item>
      <item>
        <label ref="jr:itext('/data/saude:option1')"/>
        <value>nao</value>
      </item>
    </select1>
    <group appearance="field-list">
      <label ref="jr:itext('/data/postonao:label')"/>
      <input ref="/data/postonao/popsedirige">
        <label ref="jr:itext('/data/postonao/popsedirige:label')"/>
      </input>
      <input ref="/data/postonao/distancia">
        <label ref="jr:itext('/data/postonao/distancia:label')"/>
      </input>
      <select1 ref="/data/postonao/frequenciavisita">
        <label ref="jr:itext('/data/postonao/frequenciavisita:label')"/>
        <item>
          <label ref="jr:itext('/data/postonao/frequenciavisita:option0')"/>
          <value>diaria</value>
        </item>
        <item>
          <label ref="jr:itext('/data/postonao/frequenciavisita:option1')"/>
          <value>semanal</value>
        </item>
        <item>
          <label ref="jr:itext('/data/postonao/frequenciavisita:option2')"/>
          <value>quinzenal</value>
        </item>
        <item>
          <label ref="jr:itext('/data/postonao/frequenciavisita:option3')"/>
          <value>mensal</value>
        </item>
        <item>
          <label ref="jr:itext('/data/postonao/frequenciavisita:option4')"/>
          <value>naoha</value>
        </item>
      </select1>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/postosim:label')"/>
      <input ref="/data/postosim/distanciaposto">
        <label ref="jr:itext('/data/postosim/distanciaposto:label')"/>
      </input>
      <select1 ref="/data/postosim/frequenciavisita">
        <label ref="jr:itext('/data/postosim/frequenciavisita:label')"/>
        <item>
          <label ref="jr:itext('/data/postosim/frequenciavisita:option0')"/>
          <value>diaria</value>
        </item>
        <item>
          <label ref="jr:itext('/data/postosim/frequenciavisita:option1')"/>
          <value>semanal</value>
        </item>
        <item>
          <label ref="jr:itext('/data/postosim/frequenciavisita:option2')"/>
          <value>quinzenal</value>
        </item>
        <item>
          <label ref="jr:itext('/data/postosim/frequenciavisita:option3')"/>
          <value>mensal</value>
        </item>
        <item>
          <label ref="jr:itext('/data/postosim/frequenciavisita:option4')"/>
          <value>naoha</value>
        </item>
      </select1>
    </group>
    <select1 ref="/data/saudefamilia">
      <label ref="jr:itext('/data/saudefamilia:label')"/>
      <item>
        <label ref="jr:itext('/data/saudefamilia:option0')"/>
        <value>sim</value>
      </item>
      <item>
        <label ref="jr:itext('/data/saudefamilia:option1')"/>
        <value>nao</value>
      </item>
    </select1>
    <input ref="/data/numeroagentes">
      <label ref="jr:itext('/data/numeroagentes:label')"/>
      <hint ref="jr:itext('/data/numeroagentes:hint')"/>
    </input>
    <select1 ref="/data/doencas">
      <label ref="jr:itext('/data/doencas:label')"/>
      <hint ref="jr:itext('/data/doencas:hint')"/>
      <item>
        <label ref="jr:itext('/data/doencas:option0')"/>
        <value>sim</value>
      </item>
      <item>
        <label ref="jr:itext('/data/doencas:option1')"/>
        <value>nao</value>
      </item>
    </select1>
    <select ref="/data/doencasfrequentes">
      <label ref="jr:itext('/data/doencasfrequentes:label')"/>
      <item>
        <label ref="jr:itext('/data/doencasfrequentes:option0')"/>
        <value>diarreia</value>
      </item>
      <item>
        <label ref="jr:itext('/data/doencasfrequentes:option1')"/>
        <value>leptospirose</value>
      </item>
      <item>
        <label ref="jr:itext('/data/doencasfrequentes:option2')"/>
        <value>hepatite</value>
      </item>
      <item>
        <label ref="jr:itext('/data/doencasfrequentes:option3')"/>
        <value>esquistossomose</value>
      </item>
      <item>
        <label ref="jr:itext('/data/doencasfrequentes:option4')"/>
        <value>outras</value>
      </item>
    </select>
    <input ref="/data/outrasdoencas">
      <label ref="jr:itext('/data/outrasdoencas:label')"/>
    </input>
    <select ref="/data/servicos">
      <label ref="jr:itext('/data/servicos:label')"/>
      <hint ref="jr:itext('/data/servicos:hint')"/>
      <item>
        <label ref="jr:itext('/data/servicos:option0')"/>
        <value>correio</value>
      </item>
      <item>
        <label ref="jr:itext('/data/servicos:option1')"/>
        <value>farmacia</value>
      </item>
      <item>
        <label ref="jr:itext('/data/servicos:option2')"/>
        <value>feiralivre</value>
      </item>
      <item>
        <label ref="jr:itext('/data/servicos:option3')"/>
        <value>olaria</value>
      </item>
      <item>
        <label ref="jr:itext('/data/servicos:option4')"/>
        <value>artesanato</value>
      </item>
      <item>
        <label ref="jr:itext('/data/servicos:option5')"/>
        <value>outros</value>
      </item>
    </select>
    <input ref="/data/outroservico">
      <label ref="jr:itext('/data/outroservico:label')"/>
    </input>
    <select1 ref="/data/associacao">
      <label ref="jr:itext('/data/associacao:label')"/>
      <item>
        <label ref="jr:itext('/data/associacao:option0')"/>
        <value>sim</value>
      </item>
      <item>
        <label ref="jr:itext('/data/associacao:option1')"/>
        <value>nao</value>
      </item>
    </select1>
    <select ref="/data/organizacao">
      <label ref="jr:itext('/data/organizacao:label')"/>
      <hint ref="jr:itext('/data/organizacao:hint')"/>
      <item>
        <label ref="jr:itext('/data/organizacao:option0')"/>
        <value>associacao</value>
      </item>
      <item>
        <label ref="jr:itext('/data/organizacao:option1')"/>
        <value>cooperativa</value>
      </item>
      <item>
        <label ref="jr:itext('/data/organizacao:option2')"/>
        <value>mulheres</value>
      </item>
      <item>
        <label ref="jr:itext('/data/organizacao:option3')"/>
        <value>pastoral</value>
      </item>
      <item>
        <label ref="jr:itext('/data/organizacao:option4')"/>
        <value>jovens</value>
      </item>
      <item>
        <label ref="jr:itext('/data/organizacao:option5')"/>
        <value>apl</value>
      </item>
      <item>
        <label ref="jr:itext('/data/organizacao:option6')"/>
        <value>grupo</value>
      </item>
      <item>
        <label ref="jr:itext('/data/organizacao:option7')"/>
        <value>conselhos</value>
      </item>
      <item>
        <label ref="jr:itext('/data/organizacao:option8')"/>
        <value>outros</value>
      </item>
    </select>
    <input ref="/data/associacaocomunitaria">
      <label ref="jr:itext('/data/associacaocomunitaria:label')"/>
    </input>
    <input ref="/data/cooperativa">
      <label ref="jr:itext('/data/cooperativa:label')"/>
    </input>
    <input ref="/data/movimentodemulheres">
      <label ref="jr:itext('/data/movimentodemulheres:label')"/>
    </input>
    <input ref="/data/pastoral">
      <label ref="jr:itext('/data/pastoral:label')"/>
    </input>
    <input ref="/data/jovens">
      <label ref="jr:itext('/data/jovens:label')"/>
    </input>
    <input ref="/data/apl">
      <label ref="jr:itext('/data/apl:label')"/>
    </input>
    <input ref="/data/grupodemulheres">
      <label ref="jr:itext('/data/grupodemulheres:label')"/>
    </input>
    <input ref="/data/conselhos">
      <label ref="jr:itext('/data/conselhos:label')"/>
    </input>
    <input ref="/data/outros">
      <label ref="jr:itext('/data/outros:label')"/>
      <hint ref="jr:itext('/data/outros:hint')"/>
    </input>
    <upload ref="/data/assinatura" mediatype="image/*">
      <label ref="jr:itext('/data/assinatura:label')"/>
    </upload>
  </h:body>
</h:html>
