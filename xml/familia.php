<?php
    
    require_once '../includes/configxml.php';
    
    $idPesquisador = $_REQUEST['idPesquisador'];
    $idLote = $_REQUEST['idLote'];
    $idSubLote = $_REQUEST['idSubLote'];
    $idComunidade = $_REQUEST['idComunidade'];
    
    if($idPesquisador != "") {
                $sql = 'select * from pesquisador where idPesquisador = ' . $idPesquisador;
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
    }
    
     if($idLote != "") {
                $sqlLote = 'select * from lote where idLote = ' . $idLote;
                $resultLote = $db->query($sqlLote);
                $rowL = $resultLote->fetch_assoc();
    }
    
     if($idSubLote != "") {
                $sqlSubLote = 'select * from subLote where idSubLote = ' . $idSubLote;
                $resultSubLote = $db->query($sqlSubLote);
                $rowS = $resultSubLote->fetch_assoc();
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
    <h:title>Cadastro Familia - <?=$rowC['nmComunidade']?> <?=$rowC['nmLote']?> <?=$rowC['nmSubLote']?></h:title>
    <model>
      <instance>
        <data id="build_Cadastro-Familia_1357260891">
          <meta>
            <instanceID/>
          </meta>
          <responsavel>
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
          <principal>
            <uf>
              <?=$rowC['UF']?>
            </uf>
            <nomemunicipio>
              <?=$rowC['nmMunicipio']?>
            </nomemunicipio>
            <codigoibge>
              <?=$rowC['cdIBGE']?>
            </codigoibge>
            <comunidade>
              <?=$rowC['nmComunidade']?>
            </comunidade>
            <lote>
              <?=$rowL['nmLote']?>
            </lote>
            <sublote>
              <?=$rowS['nmSubLote']?>
            </sublote>
          </principal>
          <dadosendereco>
            <endereco/>
            <bairro/>
            <complemento/>
            <cep/>
            <referencia/>
            <telefone/>
          </dadosendereco>
          <complementoprincipal>
            <distanciasede/>
            <viasdeacesso/>
            <transitavelanotodo/>
          </complementoprincipal>
          <coordenadageografica/>
          <quemeoentrevistado>
            <entrevistadoeresponsavel/>
          </quemeoentrevistado>
          <responsavelunidadefamiliar>
            <nomedoresponsavel/>
            <sexoresponsavel/>
            <datanascimento/>
            <cpfresponsavel/>
            <rgresponsavel/>
            <Orgao/>
            <nis/>
          </responsavelunidadefamiliar>
          <dadosconjuge>
            <nomeconjuge/>
            <cpfconjuge/>
            <rgconjuge/>
          </dadosconjuge>
          <dadosdoentrevistado>
            <dadosentrevistado/>
            <grauparentesco/>
            <nomeentrevistado/>
            <cpfentrevistado/>
            <rgentrevistado/>
          </dadosdoentrevistado>
          <composicaogrupofamiliar>
            <totalfilhos/>
            <criancasate06anos/>
            <criancasnaescola/>
            <idosos/>
            <deficiencia/>
          </composicaogrupofamiliar>
          <dadosresidencia>
            <cobertura/>
            <situacaocobertura/>
            <cisterna/>
          </dadosresidencia>
          <energia/>
          <dadosenergia>
            <tiposenergia/>
            <tipoenergia/>
          </dadosenergia>
          <esgoto>
            <banheiro/>
            <esgotamentosanitario/>
          </esgoto>
          <tipoesgotamento/>
          <outroesgotamento/>
          <destinolixo/>
          <dadossocioeconomicos>
            <beneficiossociais/>
          </dadossocioeconomicos>
          <tipobeneficio/>
          <outrobeneficio/>
          <outrosdadossocioeconomicos>
            <ocupacao/>
            <periodorenda/>
            <valorrenda/>
            <totalpessoas/>
          </outrosdadossocioeconomicos>
          <acessoeusodaagua>
            <acessoagua/>
          </acessoeusodaagua>
          <tiposdefonte/>
          <poco>
            <distanciapoco/>
            <medida/>
            <utilizacaopoco/>
          </poco>
          <pocosubsuperficial>
            <distanciapocosuperficial/>
            <medida/>
            <utilizacaopocusuperficial/>
          </pocosubsuperficial>
          <corrego>
            <distanciacorrego/>
            <medida/>
            <utilizacaocorrego/>
          </corrego>
          <rioriacho>
            <distanciario/>
            <medida/>
            <utilizacaorio/>
          </rioriacho>
          <tanques>
            <distanciatanques/>
            <medida/>
            <utilizacaotanques/>
          </tanques>
          <lagoa>
            <distancialagoa/>
            <medida/>
            <utilizacaolagoa/>
          </lagoa>
          <sistemaaducao>
            <distanciasistemaaducao/>
            <medida/>
            <utilizacaosistemadeaducao/>
          </sistemaaducao>
          <cisternaconsumohumano>
            <distanciacicternaconsumo/>
            <medida/>
            <utilizacaocisternaconsumo/>
          </cisternaconsumohumano>
          <cisternadeterceiros>
            <distanciacisternadeterceiros/>
            <medida/>
            <utilizacaocisternadeterceiros/>
          </cisternadeterceiros>
          <sistemacomunidade>
            <distanciasistemacomunidade/>
            <medida/>
            <utilizacaosistemacomunidade/>
          </sistemacomunidade>
          <sistemaoutracomunidade>
            <distanciasistemaoutracomunidade/>
            <medida/>
            <utilizacaosistemaoutracomunidade/>
          </sistemaoutracomunidade>
          <cisternaproducao>
            <distanciacisternaproducao/>
            <medida/>
            <utilizacaocisternaproducao/>
          </cisternaproducao>
          <cisternaoutracomunidade>
            <distanciacisternaoutracomunidade/>
            <medida/>
            <utilizacaocisternaoutracomunidade/>
          </cisternaoutracomunidade>
          <sistemacoletivo>
            <distanciasistemacoletivo/>
            <medida/>
            <utilizacaosistemacoletivo/>
          </sistemacoletivo>
          <barreiro>
            <distanciabarreiro/>
            <medida/>
            <utilizacaobarreiro/>
          </barreiro>
          <nascentes>
            <distancianascentes/>
            <medida/>
            <utilizacaonascentes/>
          </nascentes>
          <acudes>
            <distanciaacudes/>
            <medida/>
            <utilizacaoacudes/>
          </acudes>
          <kitsirrigacao>
            <distanciakits/>
            <medida/>
            <utilizacaokits/>
          </kitsirrigacao>
          <carropipa>
            <distanciacarropipa/>
            <medida/>
            <utilizacaocarropipa/>
          </carropipa>
          <tratamentoagua>
            <aguatratada/>
          </tratamentoagua>
          <formatratamento/>
          <dadosprodutivos>
            <dadospropriedade/>
          </dadosprodutivos>
          <descrevaoutros/>
          <maodeobra>
            <tipomaodeobra/>
            <pessoasfamilia/>
            <pessoascontratadas/>
          </maodeobra>
          <area>
            <areatotal/>
            <areaproducao/>
          </area>
          <tipoatividade>
            <assinaletipoatividade/>
          </tipoatividade>
          <frutas>
            <tiposdefruta/>
          </frutas>
          <agricultura>
            <tipoagricultura/>
          </agricultura>
          <agroindustria>
            <tipoagroindustria/>
          </agroindustria>
          <artesanato>
            <tipoartesanato/>
          </artesanato>
          <outraatividade>
            <outrotipo/>
          </outraatividade>
          <agriculturafinalidade>
            <finalidadeagricultura/>
            <areavenda/>
            <areaconsumo/>
          </agriculturafinalidade>
          <tiposirrigacao>
            <tiposdeirrigacao/>
          </tiposirrigacao>
          <criacaoanimais>
            <criacaodeanimais/>
            <quaisanimais/>
            <finalidadeanimais/>
            <areavenda/>
            <areaconsumo/>
          </criacaoanimais>
          <daassistencia>
            <assistencia/>
          </daassistencia>
          <origemassistencia/>
          <fotoassinatura/>
          <pesquisa>
            familia
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
              Nome Entrevistador
            </value>
          </text>
          <text id="/data/responsavel/cpf:label">
            <value>
              CPF
            </value>
          </text>
          <text id="/data/principal:label">
            <value>
              Principal
            </value>
          </text>
          <text id="/data/principal/uf:label">
            <value>
              UF
            </value>
          </text>
          <text id="/data/principal/uf:hint">
            <value>
              Digite a sigla do Estado
            </value>
          </text>
          <text id="/data/principal/nomemunicipio:label">
            <value>
              Nome do Município
            </value>
          </text>
          <text id="/data/principal/nomemunicipio:hint">
            <value>
              Digite o nome do município
            </value>
          </text>
          <text id="/data/principal/codigoibge:label">
            <value>
              Código do Município no IBGE
            </value>
          </text>
          <text id="/data/principal/comunidade:label">
            <value>
              Comunidade
            </value>
          </text>
          <text id="/data/principal/comunidade:hint">
            <value>
              Digite o nome da comunidade
            </value>
          </text>
          <text id="/data/principal/lote:label">
            <value>
              Lote
            </value>
          </text>
          <text id="/data/principal/sublote:label">
            <value>
              Sublote
            </value>
          </text>
          <text id="/data/dadosendereco:label">
            <value>
              Endereço
            </value>
          </text>
          <text id="/data/dadosendereco/endereco:label">
            <value>
              Endereço
            </value>
          </text>
          <text id="/data/dadosendereco/endereco:hint">
            <value>
              Digite o endereço completo (Rua/Avenida/Estrada)
            </value>
          </text>
          <text id="/data/dadosendereco/bairro:label">
            <value>
              Bairro
            </value>
          </text>
          <text id="/data/dadosendereco/complemento:label">
            <value>
              Complemento
            </value>
          </text>
          <text id="/data/dadosendereco/complemento:hint">
            <value>
              Digite o complemento, se houver (quadra, lote, apto, vila, etc.)
            </value>
          </text>
          <text id="/data/dadosendereco/cep:label">
            <value>
              CEP
            </value>
          </text>
          <text id="/data/dadosendereco/cep:hint">
            <value>
              Digite o CEP ou Código Postal
            </value>
          </text>
          <text id="/data/dadosendereco/referencia:label">
            <value>
              Local de Referência
            </value>
          </text>
          <text id="/data/dadosendereco/referencia:hint">
            <value>
              Digite um local ou ponto de referêncIa (Exemplo: travessa da Avenida X ou próximo a escola ABC)
            </value>
          </text>
          <text id="/data/dadosendereco/telefone:label">
            <value>
              Telefone Principal da Família
            </value>
          </text>
          <text id="/data/dadosendereco/telefone:hint">
            <value>
              Digite o número do telefone com o DDD
            </value>
          </text>
          <text id="/data/complementoprincipal:label">
            <value>
              Complemento
            </value>
          </text>
          <text id="/data/complementoprincipal/distanciasede:label">
            <value>
              Distância da Sede do Município em km
            </value>
          </text>
          <text id="/data/complementoprincipal/viasdeacesso:label">
            <value>
              Vias de Acesso à Casa
            </value>
          </text>
          <text id="/data/complementoprincipal/viasdeacesso:hint">
            <value>
              Assinale todas as características das vias de acesso à casa.
            </value>
          </text>
          <text id="/data/complementoprincipal/viasdeacesso:option0">
            <value>
              Asfalto
            </value>
          </text>
          <text id="/data/complementoprincipal/viasdeacesso:option1">
            <value>
              Barro
            </value>
          </text>
          <text id="/data/complementoprincipal/viasdeacesso:option2">
            <value>
              Cascalho
            </value>
          </text>
          <text id="/data/complementoprincipal/viasdeacesso:option3">
            <value>
              Plana
            </value>
          </text>
          <text id="/data/complementoprincipal/viasdeacesso:option4">
            <value>
              Enladeirada
            </value>
          </text>
          <text id="/data/complementoprincipal/viasdeacesso:option5">
            <value>
              Estreita (&lt; 4,5m)
            </value>
          </text>
          <text id="/data/complementoprincipal/viasdeacesso:option6">
            <value>
              Larga (&gt; ou = 4,5m)
            </value>
          </text>
          <text id="/data/complementoprincipal/transitavelanotodo:label">
            <value>
              É transitável durante o ano todo?
            </value>
          </text>
          <text id="/data/complementoprincipal/transitavelanotodo:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/complementoprincipal/transitavelanotodo:option1">
            <value>
              Não
            </value>
          </text>
          <text id="/data/coordenadageografica:label">
            <value>
              Capturar Localização
            </value>
          </text>
          <text id="/data/coordenadageografica:hint">
            <value>
              Ativar GPS do Tablet
            </value>
          </text>
          <text id="/data/quemeoentrevistado:label">
            <value>
              Entrevistado X Responsável
            </value>
          </text>
          <text id="/data/quemeoentrevistado/entrevistadoeresponsavel:label">
            <value>
              O entrevistado é o responsável pela unidade familiar (titular do NIS)?
            </value>
          </text>
          <text id="/data/quemeoentrevistado/entrevistadoeresponsavel:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/quemeoentrevistado/entrevistadoeresponsavel:option1">
            <value>
              Não
            </value>
          </text>
          <text id="/data/responsavelunidadefamiliar:label">
            <value>
              Responsável pela Unidade Familiar - Titular do NIS (Maior de 16 anos, preferencialmente mulher. Obrigatório preencher todos os dados, mesmo se o titular estiver ausente - neste caso, os dados do entrevistado também devem ser preenchidos.)
            </value>
          </text>
          <text id="/data/responsavelunidadefamiliar/nomedoresponsavel:label">
            <value>
              Nome Completo do Responsável pela Unidade Familiar (Beneficiário Titular do NIS)
            </value>
          </text>
          <text id="/data/responsavelunidadefamiliar/sexoresponsavel:label">
            <value>
              Sexo do Responsável pela Unidade Familiar
            </value>
          </text>
          <text id="/data/responsavelunidadefamiliar/sexoresponsavel:option0">
            <value>
              Feminino
            </value>
          </text>
          <text id="/data/responsavelunidadefamiliar/sexoresponsavel:option1">
            <value>
              Masculino
            </value>
          </text>
          <text id="/data/responsavelunidadefamiliar/datanascimento:label">
            <value>
              Data de Nascimento do Responsável
            </value>
          </text>
          <text id="/data/responsavelunidadefamiliar/cpfresponsavel:label">
            <value>
              CPF do Responsável
            </value>
          </text>
          <text id="/data/responsavelunidadefamiliar/rgresponsavel:label">
            <value>
              RG do Responsável
            </value>
          </text>
          <text id="/data/responsavelunidadefamiliar/Orgao:label">
            <value>
              Orgão de Expedição
            </value>
          </text>
          <text id="/data/responsavelunidadefamiliar/Orgao:hint">
            <value>
              (sigla)
            </value>
          </text>
          <text id="/data/responsavelunidadefamiliar/nis:label">
            <value>
              NIS
            </value>
          </text>
          <text id="/data/dadosconjuge:label">
            <value>
              Dados do Cônjuge do Responsável
            </value>
          </text>
          <text id="/data/dadosconjuge/nomeconjuge:label">
            <value>
              Nome do Cônjuge
            </value>
          </text>
          <text id="/data/dadosconjuge/nomeconjuge:hint">
            <value>
              Digite o nome do cônjuge, no caso do responsável ser casado ou possuir união estável.
            </value>
          </text>
          <text id="/data/dadosconjuge/cpfconjuge:label">
            <value>
              CPF do Cônjuge
            </value>
          </text>
          <text id="/data/dadosconjuge/rgconjuge:label">
            <value>
              RG do Cônjuge
            </value>
          </text>
          <text id="/data/dadosdoentrevistado:label">
            <value>
              Dados do Entrevistado (se não for o titular do NIS)
            </value>
          </text>
          <text id="/data/dadosdoentrevistado/dadosentrevistado:label">
            <value>
              Caracterizar o Entrevistado (apenas no caso de não ser o titular do NIS)
            </value>
          </text>
          <text id="/data/dadosdoentrevistado/dadosentrevistado:option0">
            <value>
              Responsável pela família
            </value>
          </text>
          <text id="/data/dadosdoentrevistado/dadosentrevistado:option1">
            <value>
              Cônjuge do responsável pela família
            </value>
          </text>
          <text id="/data/dadosdoentrevistado/dadosentrevistado:option2">
            <value>
              Outro membro da família
            </value>
          </text>
          <text id="/data/dadosdoentrevistado/grauparentesco:label">
            <value>
              Grau de Parentesco em Relação ao Responsável
            </value>
          </text>
          <text id="/data/dadosdoentrevistado/grauparentesco:hint">
            <value>
              Exemplo: Pai do Responsável, Mãe, Tio, Tia, etc
            </value>
          </text>
          <text id="/data/dadosdoentrevistado/nomeentrevistado:label">
            <value>
              Nome Completo do Entrevistado
            </value>
          </text>
          <text id="/data/dadosdoentrevistado/nomeentrevistado:hint">
            <value>
            </value>
          </text>
          <text id="/data/dadosdoentrevistado/cpfentrevistado:label">
            <value>
              CPF do Entrevistado
            </value>
          </text>
          <text id="/data/dadosdoentrevistado/rgentrevistado:label">
            <value>
              RG do Entrevistado
            </value>
          </text>
          <text id="/data/composicaogrupofamiliar:label">
            <value>
              Composição do Grupo Familiar (preencher de 01 a 20 filhos)
            </value>
          </text>
          <text id="/data/composicaogrupofamiliar/totalfilhos:label">
            <value>
              Total de filhos que moram na mesma residência (independente da idade):
            </value>
          </text>
          <text id="/data/composicaogrupofamiliar/criancasate06anos:label">
            <value>
              Número de crianças com idade ate 06 anos:
            </value>
          </text>
          <text id="/data/composicaogrupofamiliar/criancasnaescola:label">
            <value>
              Número de crianças ou jovens na escola:
            </value>
          </text>
          <text id="/data/composicaogrupofamiliar/idosos:label">
            <value>
              Número de idosos (com idade acima de 65 anos):
            </value>
          </text>
          <text id="/data/composicaogrupofamiliar/deficiencia:label">
            <value>
              Número de pessoas com deficiência:
            </value>
          </text>
          <text id="/data/dadosresidencia:label">
            <value>
              Dados da Residência
            </value>
          </text>
          <text id="/data/dadosresidencia/cobertura:label">
            <value>
              Marque o tipo de cobertura da residência:
            </value>
          </text>
          <text id="/data/dadosresidencia/cobertura:option0">
            <value>
              Telha (cerâmica, amianto, PVC, cimento, etc)
            </value>
          </text>
          <text id="/data/dadosresidencia/cobertura:option1">
            <value>
              Palha
            </value>
          </text>
          <text id="/data/dadosresidencia/cobertura:option2">
            <value>
              Outros
            </value>
          </text>
          <text id="/data/dadosresidencia/situacaocobertura:label">
            <value>
              Caso a residência seja atendida por uma cisterna, qual a situação da cobertura?
            </value>
          </text>
          <text id="/data/dadosresidencia/situacaocobertura:option0">
            <value>
              Adequada
            </value>
          </text>
          <text id="/data/dadosresidencia/situacaocobertura:option1">
            <value>
              Necessita reparos
            </value>
          </text>
          <text id="/data/dadosresidencia/situacaocobertura:option2">
            <value>
              Necessita substituição de telhas
            </value>
          </text>
          <text id="/data/dadosresidencia/situacaocobertura:option3">
            <value>
              Totalmente Inadequada
            </value>
          </text>
          <text id="/data/dadosresidencia/situacaocobertura:option4">
            <value>
              Ainda não é atendida por cisterna
            </value>
          </text>
          <text id="/data/dadosresidencia/cisterna:label">
            <value>
              Caso a residência ainda não seja atendida por uma cisterna, descreva a seguir de onde a água vem:
            </value>
          </text>
          <text id="/data/dadosresidencia/cisterna:hint">
            <value>
            </value>
          </text>
          <text id="/data/energia:label">
            <value>
              Possui energia?
            </value>
          </text>
          <text id="/data/energia:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/energia:option1">
            <value>
              Não
            </value>
          </text>
          <text id="/data/dadosenergia:label">
            <value>
              Dados Energia
            </value>
          </text>
          <text id="/data/dadosenergia/tiposenergia:label">
            <value>
              Assinale qual é o tipo de energia utilizada.
            </value>
          </text>
          <text id="/data/dadosenergia/tiposenergia:option0">
            <value>
              Solar
            </value>
          </text>
          <text id="/data/dadosenergia/tiposenergia:option1">
            <value>
              Eólica
            </value>
          </text>
          <text id="/data/dadosenergia/tiposenergia:option2">
            <value>
              Diesel
            </value>
          </text>
          <text id="/data/dadosenergia/tiposenergia:option3">
            <value>
              Elétrica
            </value>
          </text>
          <text id="/data/dadosenergia/tiposenergia:option4">
            <value>
              Outros
            </value>
          </text>
          <text id="/data/dadosenergia/tipoenergia:label">
            <value>
              Se a resposta anterior foi &quot;outros&quot;, descreva a seguir qual é o tipo de energia utilizada na residência.
            </value>
          </text>
          <text id="/data/esgoto:label">
            <value>
              Banheiro e Esgotamento Sanitário
            </value>
          </text>
          <text id="/data/esgoto/banheiro:label">
            <value>
              Possui banheiro?
            </value>
          </text>
          <text id="/data/esgoto/banheiro:hint">
            <value>
            </value>
          </text>
          <text id="/data/esgoto/banheiro:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/esgoto/banheiro:option1">
            <value>
              Não
            </value>
          </text>
          <text id="/data/esgoto/esgotamentosanitario:label">
            <value>
              Possui esgotamento sanitário?
            </value>
          </text>
          <text id="/data/esgoto/esgotamentosanitario:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/esgoto/esgotamentosanitario:option1">
            <value>
              Não
            </value>
          </text>
          <text id="/data/tipoesgotamento:label">
            <value>
              Assinale o tipo de esgotamento sanitário:
            </value>
          </text>
          <text id="/data/tipoesgotamento:option0">
            <value>
              Fossa comum
            </value>
          </text>
          <text id="/data/tipoesgotamento:option1">
            <value>
              Fossa séptica
            </value>
          </text>
          <text id="/data/tipoesgotamento:option2">
            <value>
              Esgoto tratado
            </value>
          </text>
          <text id="/data/tipoesgotamento:option3">
            <value>
              Outros
            </value>
          </text>
          <text id="/data/outroesgotamento:label">
            <value>
              Caso tenha assinalado a opção &quot;outros&quot; na questão anterior, descreva a seguir qual é o tipo de esgotamento sanitário da residência.
            </value>
          </text>
          <text id="/data/destinolixo:label">
            <value>
              Qual é o destino do lixo da residência?
            </value>
          </text>
          <text id="/data/destinolixo:option0">
            <value>
              Queimado
            </value>
          </text>
          <text id="/data/destinolixo:option1">
            <value>
              Enterrado
            </value>
          </text>
          <text id="/data/destinolixo:option2">
            <value>
              Coletado
            </value>
          </text>
          <text id="/data/destinolixo:option3">
            <value>
              Jogado no rio lago, etc.
            </value>
          </text>
          <text id="/data/destinolixo:option4">
            <value>
              Jogado em terreno baldio
            </value>
          </text>
          <text id="/data/dadossocioeconomicos:label">
            <value>
              Dados Socioeconômicos
            </value>
          </text>
          <text id="/data/dadossocioeconomicos/beneficiossociais:label">
            <value>
              O responsável pela unidade familiar recebe algum tipo de benefício financeiro de programas sociais?
            </value>
          </text>
          <text id="/data/dadossocioeconomicos/beneficiossociais:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/dadossocioeconomicos/beneficiossociais:option1">
            <value>
              Não
            </value>
          </text>
          <text id="/data/tipobeneficio:label">
            <value>
              Assinale qual (ou quais).
            </value>
          </text>
          <text id="/data/tipobeneficio:option0">
            <value>
              BPC (Beneficio de Prestação Continuada - Idosos e Pessoas com Deficiência)
            </value>
          </text>
          <text id="/data/tipobeneficio:option1">
            <value>
              Bolsa Família
            </value>
          </text>
          <text id="/data/tipobeneficio:option2">
            <value>
              PRONAF
            </value>
          </text>
          <text id="/data/tipobeneficio:option3">
            <value>
              Fomento à terra
            </value>
          </text>
          <text id="/data/tipobeneficio:option4">
            <value>
              Seguro Defeso
            </value>
          </text>
          <text id="/data/tipobeneficio:option5">
            <value>
              Outros
            </value>
          </text>
          <text id="/data/outrobeneficio:label">
            <value>
              Caso tenha marcado &quot;outros&quot; na questão anterior, descreva qual.
            </value>
          </text>
          <text id="/data/outrobeneficio:constraintMsg">
            <value>
              Caso tenha marcado &quot;outros&quot; na questão anterior, descreva qual.
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos:label">
            <value>
              Outros Dados Socioeconômicos
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/ocupacao:label">
            <value>
              Ocupação do responsável pela unidade familiar:
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/ocupacao:hint">
            <value>
              É possível selecionar mais de uma opção.
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/ocupacao:option0">
            <value>
              Agricultor
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/ocupacao:option1">
            <value>
              Autonômo
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/ocupacao:option2">
            <value>
              CLT
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/ocupacao:option3">
            <value>
              Aposentado
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/ocupacao:option4">
            <value>
              Pensionista
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/ocupacao:option5">
            <value>
              Servidor Público
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/ocupacao:option6">
            <value>
              Empregado Público
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/ocupacao:option7">
            <value>
              Nao possui
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/periodorenda:label">
            <value>
              Período de renda:
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/periodorenda:option0">
            <value>
              Mensal
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/periodorenda:option1">
            <value>
              Safra
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/periodorenda:option2">
            <value>
              Anual
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/periodorenda:option3">
            <value>
              Semestral
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/periodorenda:option4">
            <value>
              Diária
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/valorrenda:label">
            <value>
              Qual é o valor mensal da renda familiar em R$?
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/totalpessoas:label">
            <value>
              Total de pessoas que moram na residência (titular do NIS + cônjuge + filhos + parentes + outros):
            </value>
          </text>
          <text id="/data/acessoeusodaagua:label">
            <value>
              Dados de Acesso e Uso da Água
            </value>
          </text>
          <text id="/data/acessoeusodaagua/acessoagua:label">
            <value>
              A residência possui acesso à água?
            </value>
          </text>
          <text id="/data/acessoeusodaagua/acessoagua:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/acessoeusodaagua/acessoagua:option1">
            <value>
              Não
            </value>
          </text>
          <text id="/data/tiposdefonte:label">
            <value>
              Especifique o(s) tipo(s) de fonte.
            </value>
          </text>
          <text id="/data/tiposdefonte:hint">
            <value>
              Selecionar todos os tipos de fonte de água que a família utiliza.
            </value>
          </text>
          <text id="/data/tiposdefonte:option0">
            <value>
              Poço
            </value>
          </text>
          <text id="/data/tiposdefonte:option1">
            <value>
              Poço Subsuperficial
            </value>
          </text>
          <text id="/data/tiposdefonte:option2">
            <value>
              Córrego
            </value>
          </text>
          <text id="/data/tiposdefonte:option3">
            <value>
              Rio/riacho
            </value>
          </text>
          <text id="/data/tiposdefonte:option4">
            <value>
              Tanques
            </value>
          </text>
          <text id="/data/tiposdefonte:option5">
            <value>
              Lagoa
            </value>
          </text>
          <text id="/data/tiposdefonte:option6">
            <value>
              Sistema de adução
            </value>
          </text>
          <text id="/data/tiposdefonte:option7">
            <value>
              Cisterna para consumo humano (placa, polietileno, etc)
            </value>
          </text>
          <text id="/data/tiposdefonte:option8">
            <value>
              Cisterna para consumo humano de terceiros
            </value>
          </text>
          <text id="/data/tiposdefonte:option9">
            <value>
              Sistema de abastecimento na própria comunidade
            </value>
          </text>
          <text id="/data/tiposdefonte:option10">
            <value>
              Sistema de abastecimento em outra comunidade
            </value>
          </text>
          <text id="/data/tiposdefonte:option11">
            <value>
              Cisterna de produção na própria comunidade
            </value>
          </text>
          <text id="/data/tiposdefonte:option12">
            <value>
              Cisterna de produção em outra comunidade
            </value>
          </text>
          <text id="/data/tiposdefonte:option13">
            <value>
              Sistema coletivo de abastecimento
            </value>
          </text>
          <text id="/data/tiposdefonte:option14">
            <value>
              Barreiro
            </value>
          </text>
          <text id="/data/tiposdefonte:option15">
            <value>
              Nascentes
            </value>
          </text>
          <text id="/data/tiposdefonte:option16">
            <value>
              Açudes
            </value>
          </text>
          <text id="/data/tiposdefonte:option17">
            <value>
              Kits de Irrigação
            </value>
          </text>
          <text id="/data/tiposdefonte:option18">
            <value>
              Carro-pipa
            </value>
          </text>
          <text id="/data/poco:label">
            <value>
              Poço
            </value>
          </text>
          <text id="/data/poco/distanciapoco:label">
            <value>
              Qual é a distância percorrida até o poço para colher água ?
            </value>
          </text>
          <text id="/data/poco/medida:label">
            <value>
              Escolha a unidade de medida de distância:
            </value>
          </text>
          <text id="/data/poco/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/poco/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/poco/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/poco/utilizacaopoco:label">
            <value>
              A água do poço é utilizada para:
            </value>
          </text>
          <text id="/data/poco/utilizacaopoco:hint">
            <value>
              É possível assinalar mais de uma alternativa.
            </value>
          </text>
          <text id="/data/poco/utilizacaopoco:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/poco/utilizacaopoco:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/pocosubsuperficial:label">
            <value>
              Poço Subsuperficial
            </value>
          </text>
          <text id="/data/pocosubsuperficial/distanciapocosuperficial:label">
            <value>
              Qual é a distância percorrida até o poço sub-superficial para colher água?
            </value>
          </text>
          <text id="/data/pocosubsuperficial/medida:label">
            <value>
              Escolha a unidade de medida de distância.
            </value>
          </text>
          <text id="/data/pocosubsuperficial/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/pocosubsuperficial/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/pocosubsuperficial/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/pocosubsuperficial/utilizacaopocusuperficial:label">
            <value>
              A água do poço subsuperficial é utilizada para:
            </value>
          </text>
          <text id="/data/pocosubsuperficial/utilizacaopocusuperficial:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/pocosubsuperficial/utilizacaopocusuperficial:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/corrego:label">
            <value>
              Córrego
            </value>
          </text>
          <text id="/data/corrego/distanciacorrego:label">
            <value>
              Qual é a distância percorrida até o córrego para colher água?
            </value>
          </text>
          <text id="/data/corrego/medida:label">
            <value>
              Escolha a unidade de medida de distância.
            </value>
          </text>
          <text id="/data/corrego/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/corrego/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/corrego/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/corrego/utilizacaocorrego:label">
            <value>
              A água do córrego é utilizada para:
            </value>
          </text>
          <text id="/data/corrego/utilizacaocorrego:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/corrego/utilizacaocorrego:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/rioriacho:label">
            <value>
              Rio/Riacho
            </value>
          </text>
          <text id="/data/rioriacho/distanciario:label">
            <value>
              Qual é a distância percorrida até o rio ou riacho para colher água?
            </value>
          </text>
          <text id="/data/rioriacho/medida:label">
            <value>
              Escolha a unidade de medida de distância.
            </value>
          </text>
          <text id="/data/rioriacho/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/rioriacho/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/rioriacho/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/rioriacho/utilizacaorio:label">
            <value>
              A aáua do rio ou do riacho é utilizada para:
            </value>
          </text>
          <text id="/data/rioriacho/utilizacaorio:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/rioriacho/utilizacaorio:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/tanques:label">
            <value>
              Tanques
            </value>
          </text>
          <text id="/data/tanques/distanciatanques:label">
            <value>
              Qual é a distância percorrida até o(s) tanque(s) para colher água?
            </value>
          </text>
          <text id="/data/tanques/medida:label">
            <value>
              Escolha a unidade de medida de distância.
            </value>
          </text>
          <text id="/data/tanques/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/tanques/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/tanques/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/tanques/utilizacaotanques:label">
            <value>
              A água do(s) tanque(s) é utilizada para:
            </value>
          </text>
          <text id="/data/tanques/utilizacaotanques:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/tanques/utilizacaotanques:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/lagoa:label">
            <value>
              Lagoa
            </value>
          </text>
          <text id="/data/lagoa/distancialagoa:label">
            <value>
              Qual é a distância percorrida até a lagoa para colher água?
            </value>
          </text>
          <text id="/data/lagoa/medida:label">
            <value>
              Escolha a unidade e medida de distância.
            </value>
          </text>
          <text id="/data/lagoa/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/lagoa/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/lagoa/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/lagoa/utilizacaolagoa:label">
            <value>
              A água da lagoa é utilizada para:
            </value>
          </text>
          <text id="/data/lagoa/utilizacaolagoa:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/lagoa/utilizacaolagoa:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/sistemaaducao:label">
            <value>
              Sistema de Adução
            </value>
          </text>
          <text id="/data/sistemaaducao/distanciasistemaaducao:label">
            <value>
              Qual é a distância percorrida até o sistema de adução para colher água?
            </value>
          </text>
          <text id="/data/sistemaaducao/medida:label">
            <value>
              Escolha a unidade de medida de distância.
            </value>
          </text>
          <text id="/data/sistemaaducao/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/sistemaaducao/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/sistemaaducao/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/sistemaaducao/utilizacaosistemadeaducao:label">
            <value>
              A água do sistema de aducao é utilizada para:
            </value>
          </text>
          <text id="/data/sistemaaducao/utilizacaosistemadeaducao:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/sistemaaducao/utilizacaosistemadeaducao:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/cisternaconsumohumano:label">
            <value>
              Cisterna para consumo humano
            </value>
          </text>
          <text id="/data/cisternaconsumohumano/distanciacicternaconsumo:label">
            <value>
              Qual é a distância percorrida até a cisterna para colher água?
            </value>
          </text>
          <text id="/data/cisternaconsumohumano/medida:label">
            <value>
              Escolha a unidade de medida de distância.
            </value>
          </text>
          <text id="/data/cisternaconsumohumano/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/cisternaconsumohumano/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/cisternaconsumohumano/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/cisternaconsumohumano/utilizacaocisternaconsumo:label">
            <value>
              A água da cisterna é utilizada para:
            </value>
          </text>
          <text id="/data/cisternaconsumohumano/utilizacaocisternaconsumo:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/cisternaconsumohumano/utilizacaocisternaconsumo:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/cisternadeterceiros:label">
            <value>
              Cisterna para consumo humano de terceiros
            </value>
          </text>
          <text id="/data/cisternadeterceiros/distanciacisternadeterceiros:label">
            <value>
              Qual a distância percorrida até a cisterna para colher água ?
            </value>
          </text>
          <text id="/data/cisternadeterceiros/medida:label">
            <value>
              Escolha a unidade de medida de distância.
            </value>
          </text>
          <text id="/data/cisternadeterceiros/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/cisternadeterceiros/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/cisternadeterceiros/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/cisternadeterceiros/utilizacaocisternadeterceiros:label">
            <value>
              A água da cisterna é utilizada para:
            </value>
          </text>
          <text id="/data/cisternadeterceiros/utilizacaocisternadeterceiros:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/cisternadeterceiros/utilizacaocisternadeterceiros:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/sistemacomunidade:label">
            <value>
              Sistema de abastecimento na própria comunidade
            </value>
          </text>
          <text id="/data/sistemacomunidade/distanciasistemacomunidade:label">
            <value>
              Qual é a distância percorrida até o sistema de abastecimento para colher água?
            </value>
          </text>
          <text id="/data/sistemacomunidade/medida:label">
            <value>
              Escolha a unidade de medida de distância.
            </value>
          </text>
          <text id="/data/sistemacomunidade/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/sistemacomunidade/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/sistemacomunidade/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/sistemacomunidade/utilizacaosistemacomunidade:label">
            <value>
              A água do sistema de abastecimento é utilizada para:
            </value>
          </text>
          <text id="/data/sistemacomunidade/utilizacaosistemacomunidade:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/sistemacomunidade/utilizacaosistemacomunidade:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/sistemaoutracomunidade:label">
            <value>
              Sistema de abastecimento em outra comunidade
            </value>
          </text>
          <text id="/data/sistemaoutracomunidade/distanciasistemaoutracomunidade:label">
            <value>
              Qual é a distância percorrida até o sistema de abastecimento para colher água?
            </value>
          </text>
          <text id="/data/sistemaoutracomunidade/medida:label">
            <value>
              Escolha a unidade de medida de distância.
            </value>
          </text>
          <text id="/data/sistemaoutracomunidade/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/sistemaoutracomunidade/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/sistemaoutracomunidade/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/sistemaoutracomunidade/utilizacaosistemaoutracomunidade:label">
            <value>
              A água do sistema de abastecimento é utilizada para:
            </value>
          </text>
          <text id="/data/sistemaoutracomunidade/utilizacaosistemaoutracomunidade:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/sistemaoutracomunidade/utilizacaosistemaoutracomunidade:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/cisternaproducao:label">
            <value>
              Cisterna de produção na própria comunidade
            </value>
          </text>
          <text id="/data/cisternaproducao/distanciacisternaproducao:label">
            <value>
              Qual a distância percorrida até a cisterna de produção para colher água?
            </value>
          </text>
          <text id="/data/cisternaproducao/medida:label">
            <value>
              Escolha a unidade de medida de distância.
            </value>
          </text>
          <text id="/data/cisternaproducao/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/cisternaproducao/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/cisternaproducao/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/cisternaproducao/utilizacaocisternaproducao:label">
            <value>
              A água da cisterna é utilizada para:
            </value>
          </text>
          <text id="/data/cisternaproducao/utilizacaocisternaproducao:option0">
            <value>
              Beber  ou cozinhar
            </value>
          </text>
          <text id="/data/cisternaproducao/utilizacaocisternaproducao:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/cisternaoutracomunidade:label">
            <value>
              Cisterna de produção em outra comunidade
            </value>
          </text>
          <text id="/data/cisternaoutracomunidade/distanciacisternaoutracomunidade:label">
            <value>
              Qual é a distância percorrida até a cisterna de produção da outra comunidade para colher água?
            </value>
          </text>
          <text id="/data/cisternaoutracomunidade/medida:label">
            <value>
              Escolha a unidade de medida de distância.
            </value>
          </text>
          <text id="/data/cisternaoutracomunidade/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/cisternaoutracomunidade/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/cisternaoutracomunidade/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/cisternaoutracomunidade/utilizacaocisternaoutracomunidade:label">
            <value>
              A água da cisterna em outra comunidade é utilizada para:
            </value>
          </text>
          <text id="/data/cisternaoutracomunidade/utilizacaocisternaoutracomunidade:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/cisternaoutracomunidade/utilizacaocisternaoutracomunidade:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/sistemacoletivo:label">
            <value>
              Sistema Coletivo de Abastecimento
            </value>
          </text>
          <text id="/data/sistemacoletivo/distanciasistemacoletivo:label">
            <value>
              Qual é a distância percorrida até o sistema coletivo de abastecimento para colher água?
            </value>
          </text>
          <text id="/data/sistemacoletivo/medida:label">
            <value>
              Escolha a unidade de medida de distância.
            </value>
          </text>
          <text id="/data/sistemacoletivo/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/sistemacoletivo/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/sistemacoletivo/medida:option1">
            <value>
              km
            </value>
          </text>
          <text id="/data/sistemacoletivo/utilizacaosistemacoletivo:label">
            <value>
              A água do sistema coletivo de abastecimento é utilizada para:
            </value>
          </text>
          <text id="/data/sistemacoletivo/utilizacaosistemacoletivo:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/sistemacoletivo/utilizacaosistemacoletivo:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/barreiro:label">
            <value>
              Barreiro
            </value>
          </text>
          <text id="/data/barreiro/distanciabarreiro:label">
            <value>
              Qual é a distância percorrida até o barreiro para colher água?
            </value>
          </text>
          <text id="/data/barreiro/medida:label">
            <value>
              Escolha a unidade de medida de distância.
            </value>
          </text>
          <text id="/data/barreiro/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/barreiro/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/barreiro/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/barreiro/utilizacaobarreiro:label">
            <value>
              A água do barreiro é utilizada para:
            </value>
          </text>
          <text id="/data/barreiro/utilizacaobarreiro:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/barreiro/utilizacaobarreiro:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/nascentes:label">
            <value>
              Nascentes
            </value>
          </text>
          <text id="/data/nascentes/distancianascentes:label">
            <value>
              Qual é a distancia percorrida até a(s) nascente(s) para colher água?
            </value>
          </text>
          <text id="/data/nascentes/medida:label">
            <value>
              Escolha a unidade de medida de distância.
            </value>
          </text>
          <text id="/data/nascentes/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/nascentes/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/nascentes/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/nascentes/utilizacaonascentes:label">
            <value>
              A água da(s) nascente(s) é utilizada para:
            </value>
          </text>
          <text id="/data/nascentes/utilizacaonascentes:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/nascentes/utilizacaonascentes:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/acudes:label">
            <value>
              Açudes
            </value>
          </text>
          <text id="/data/acudes/distanciaacudes:label">
            <value>
              Qual é a distância percorrida até o(s) açude(s) para colher água ?
            </value>
          </text>
          <text id="/data/acudes/medida:label">
            <value>
              Escolha a unidade de medida de distância.
            </value>
          </text>
          <text id="/data/acudes/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/acudes/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/acudes/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/acudes/utilizacaoacudes:label">
            <value>
              A água do(s) açude(s) é utilizada para:
            </value>
          </text>
          <text id="/data/acudes/utilizacaoacudes:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/acudes/utilizacaoacudes:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/kitsirrigacao:label">
            <value>
              Kits de Irrigação
            </value>
          </text>
          <text id="/data/kitsirrigacao/distanciakits:label">
            <value>
              Qual é a distância percorrida até os kits de irrigação para colher água?
            </value>
          </text>
          <text id="/data/kitsirrigacao/medida:label">
            <value>
              Escolha a unidade de medida de distância.
            </value>
          </text>
          <text id="/data/kitsirrigacao/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/kitsirrigacao/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/kitsirrigacao/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/kitsirrigacao/utilizacaokits:label">
            <value>
              A água do(s) kit(s) de irrigação é utilizada para:
            </value>
          </text>
          <text id="/data/kitsirrigacao/utilizacaokits:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/kitsirrigacao/utilizacaokits:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/carropipa:label">
            <value>
              Carro-pipa
            </value>
          </text>
          <text id="/data/carropipa/distanciacarropipa:label">
            <value>
              Qual é a distância percorrida até o carro-pipa para colher água?
            </value>
          </text>
          <text id="/data/carropipa/medida:label">
            <value>
              Escolha a unidade de medida de distância.
            </value>
          </text>
          <text id="/data/carropipa/medida:hint">
            <value>
              Pode ser em quilômetros (km) ou metros (m).
            </value>
          </text>
          <text id="/data/carropipa/medida:option0">
            <value>
              km
            </value>
          </text>
          <text id="/data/carropipa/medida:option1">
            <value>
              m
            </value>
          </text>
          <text id="/data/carropipa/utilizacaocarropipa:label">
            <value>
              A água do carro pipa é utilizada para:
            </value>
          </text>
          <text id="/data/carropipa/utilizacaocarropipa:option0">
            <value>
              Beber ou cozinhar
            </value>
          </text>
          <text id="/data/carropipa/utilizacaocarropipa:option1">
            <value>
              Agricultura ou animais
            </value>
          </text>
          <text id="/data/tratamentoagua:label">
            <value>
              Do Tratamento de Água
            </value>
          </text>
          <text id="/data/tratamentoagua/aguatratada:label">
            <value>
              A água consumida é tratada?
            </value>
          </text>
          <text id="/data/tratamentoagua/aguatratada:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/tratamentoagua/aguatratada:option1">
            <value>
              Não
            </value>
          </text>
          <text id="/data/formatratamento:label">
            <value>
              Indique a forma de tratamento.
            </value>
          </text>
          <text id="/data/formatratamento:hint">
            <value>
              É possível selecionar mais de uma opção.
            </value>
          </text>
          <text id="/data/formatratamento:option0">
            <value>
              Fervida
            </value>
          </text>
          <text id="/data/formatratamento:option1">
            <value>
              Clorada
            </value>
          </text>
          <text id="/data/formatratamento:option2">
            <value>
              Filtrada
            </value>
          </text>
          <text id="/data/formatratamento:option3">
            <value>
              Coada
            </value>
          </text>
          <text id="/data/dadosprodutivos:label">
            <value>
              Dados Produtivos Básicos
            </value>
          </text>
          <text id="/data/dadosprodutivos/dadospropriedade:label">
            <value>
              Dados da Propriedade:
            </value>
          </text>
          <text id="/data/dadosprodutivos/dadospropriedade:option0">
            <value>
              Proprietário (com escritura)
            </value>
          </text>
          <text id="/data/dadosprodutivos/dadospropriedade:option1">
            <value>
              Proprietário (sem escritura)
            </value>
          </text>
          <text id="/data/dadosprodutivos/dadospropriedade:option2">
            <value>
              Comodato
            </value>
          </text>
          <text id="/data/dadosprodutivos/dadospropriedade:option3">
            <value>
              Meeiro/Parceiro
            </value>
          </text>
          <text id="/data/dadosprodutivos/dadospropriedade:option4">
            <value>
              Cedido
            </value>
          </text>
          <text id="/data/dadosprodutivos/dadospropriedade:option5">
            <value>
              Arrendado
            </value>
          </text>
          <text id="/data/dadosprodutivos/dadospropriedade:option6">
            <value>
              Outros
            </value>
          </text>
          <text id="/data/descrevaoutros:label">
            <value>
              Se a resposta anterior foi &quot;outros&quot;, descreva abaixo:
            </value>
          </text>
          <text id="/data/maodeobra:label">
            <value>
              Mão-de-obra
            </value>
          </text>
          <text id="/data/maodeobra/tipomaodeobra:label">
            <value>
              Assinale o tipo de mão-de-obra utilizada:
            </value>
          </text>
          <text id="/data/maodeobra/tipomaodeobra:hint">
            <value>
              É possível assinalar mais de uma opção.
            </value>
          </text>
          <text id="/data/maodeobra/tipomaodeobra:option0">
            <value>
              Familiar
            </value>
          </text>
          <text id="/data/maodeobra/tipomaodeobra:option1">
            <value>
              Contratada
            </value>
          </text>
          <text id="/data/maodeobra/pessoasfamilia:label">
            <value>
              Indique quantas pessoas da família trabalham na propriedade:
            </value>
          </text>
          <text id="/data/maodeobra/pessoascontratadas:label">
            <value>
              Indique quantas pessoas contratadas trabalham na propriedade:
            </value>
          </text>
          <text id="/data/area:label">
            <value>
              Sobre a Área
            </value>
          </text>
          <text id="/data/area/areatotal:label">
            <value>
              Indique a área total da propriedade (em ha):
            </value>
          </text>
          <text id="/data/area/areaproducao:label">
            <value>
              Indique a área disponível para produção (em ha):
            </value>
          </text>
          <text id="/data/area/areaproducao:hint">
            <value>
            </value>
          </text>
          <text id="/data/tipoatividade:label">
            <value>
              Tipos de Atividade
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:label">
            <value>
              Assinale o(s) tipo(s) de atividade agrícola e/ou pecuária na propriedade:
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:hint">
            <value>
              É possível assinalar mais de uma opção.
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:option0">
            <value>
              Não produz nada.
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:option1">
            <value>
              Hortaliças
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:option2">
            <value>
              Mel e derivados da apicultura
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:option3">
            <value>
              Frutas
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:option4">
            <value>
              Agricultura
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:option5">
            <value>
              Agroindústria
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:option6">
            <value>
              Artesanato
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:option7">
            <value>
              Aves
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:option8">
            <value>
              Suínos
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:option9">
            <value>
              Bovinos
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:option10">
            <value>
              Aquicultura e pesca
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:option11">
            <value>
              Ovinos
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:option12">
            <value>
              Caprinos
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:option13">
            <value>
              Outra atividade
            </value>
          </text>
          <text id="/data/frutas:label">
            <value>
              Frutas
            </value>
          </text>
          <text id="/data/frutas/tiposdefruta:label">
            <value>
              Descreva qual tipo de fruta é produzido na propriedade:
            </value>
          </text>
          <text id="/data/frutas/tiposdefruta:hint">
            <value>
              Se for produzido mais de um tipo, informe todos.
            </value>
          </text>
          <text id="/data/agricultura:label">
            <value>
              Agricultura
            </value>
          </text>
          <text id="/data/agricultura/tipoagricultura:label">
            <value>
              Descreva qual é atividade de agricultura da propriedade:
            </value>
          </text>
          <text id="/data/agroindustria:label">
            <value>
              Agroindústria
            </value>
          </text>
          <text id="/data/agroindustria/tipoagroindustria:label">
            <value>
              Descreva qual é atividade de agroindústria desenvolvida na propriedade:
            </value>
          </text>
          <text id="/data/artesanato:label">
            <value>
              Artesanato
            </value>
          </text>
          <text id="/data/artesanato/tipoartesanato:label">
            <value>
              Descreva qual é a atividade de artesanato desenvolvida na propriedade:
            </value>
          </text>
          <text id="/data/artesanato/tipoartesanato:hint">
            <value>
              Se houver mais de uma, informe todas.
            </value>
          </text>
          <text id="/data/outraatividade:label">
            <value>
              Outra atividade
            </value>
          </text>
          <text id="/data/outraatividade/outrotipo:label">
            <value>
              Descreva qual outro tipo de atividade é desenvolvida na propriedade:
            </value>
          </text>
          <text id="/data/agriculturafinalidade:label">
            <value>
              Finalidade da Agricultura
            </value>
          </text>
          <text id="/data/agriculturafinalidade/finalidadeagricultura:label">
            <value>
              Selecione a finalidade da atividade de agricultura da propriedade:
            </value>
          </text>
          <text id="/data/agriculturafinalidade/finalidadeagricultura:option0">
            <value>
              Venda
            </value>
          </text>
          <text id="/data/agriculturafinalidade/finalidadeagricultura:option1">
            <value>
              Consumo próprio
            </value>
          </text>
          <text id="/data/agriculturafinalidade/areavenda:label">
            <value>
              Indique a área (em ha) utilizada para a agricultura destinada para venda:
            </value>
          </text>
          <text id="/data/agriculturafinalidade/areaconsumo:label">
            <value>
              Indique a área (em ha) utilizada para a agricultura destinada para consumo próprio:
            </value>
          </text>
          <text id="/data/tiposirrigacao:label">
            <value>
              Tipos de Irrigação
            </value>
          </text>
          <text id="/data/tiposirrigacao/tiposdeirrigacao:label">
            <value>
              Indique abaixo o(s) tipo(s) de irrigação utilizado(s) na propriedade:
            </value>
          </text>
          <text id="/data/tiposirrigacao/tiposdeirrigacao:option0">
            <value>
              Não há irrigação
            </value>
          </text>
          <text id="/data/tiposirrigacao/tiposdeirrigacao:option1">
            <value>
              Kits de Irrigação
            </value>
          </text>
          <text id="/data/tiposirrigacao/tiposdeirrigacao:option2">
            <value>
              Aspersão
            </value>
          </text>
          <text id="/data/tiposirrigacao/tiposdeirrigacao:option3">
            <value>
              Sulco
            </value>
          </text>
          <text id="/data/tiposirrigacao/tiposdeirrigacao:option4">
            <value>
              Gotejamento
            </value>
          </text>
          <text id="/data/criacaoanimais:label">
            <value>
              Da Criação de Animais
            </value>
          </text>
          <text id="/data/criacaoanimais/criacaodeanimais:label">
            <value>
              Há criação de animais na propriedade?
            </value>
          </text>
          <text id="/data/criacaoanimais/criacaodeanimais:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/criacaoanimais/criacaodeanimais:option1">
            <value>
              Não
            </value>
          </text>
          <text id="/data/criacaoanimais/quaisanimais:label">
            <value>
              Especifique quais animais são criados na propriedade.
            </value>
          </text>
          <text id="/data/criacaoanimais/finalidadeanimais:label">
            <value>
              Especifique a finalidade da criação de animais na propriedade.
            </value>
          </text>
          <text id="/data/criacaoanimais/finalidadeanimais:option0">
            <value>
              Venda
            </value>
          </text>
          <text id="/data/criacaoanimais/finalidadeanimais:option1">
            <value>
              Consumo próprio
            </value>
          </text>
          <text id="/data/criacaoanimais/areavenda:label">
            <value>
              Indique a área (em ha) utilizada para a criação de animais destinada para venda:
            </value>
          </text>
          <text id="/data/criacaoanimais/areaconsumo:label">
            <value>
              Indique a área (em ha) utilizada para a criação de animais destinada para o consumo próprio:
            </value>
          </text>
          <text id="/data/daassistencia:label">
            <value>
              Da Assistência
            </value>
          </text>
          <text id="/data/daassistencia/assistencia:label">
            <value>
              Recebe Assistência Técnica e Extensão Rural (ATER)?
            </value>
          </text>
          <text id="/data/daassistencia/assistencia:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/daassistencia/assistencia:option1">
            <value>
              Não
            </value>
          </text>
          <text id="/data/origemassistencia:label">
            <value>
              Qual é a origem?
            </value>
          </text>
          <text id="/data/origemassistencia:option0">
            <value>
              Governo Municipal
            </value>
          </text>
          <text id="/data/origemassistencia:option1">
            <value>
              Governo Estadual
            </value>
          </text>
          <text id="/data/origemassistencia:option2">
            <value>
              Governo Federal
            </value>
          </text>
          <text id="/data/origemassistencia:option3">
            <value>
              Sociedade Civil Organizada
            </value>
          </text>
          <text id="/data/fotoassinatura:label">
            <value>
              Tire uma foto da assinatura do entrevistado.
            </value>
          </text>
          <text id="/data/pesquisa:label">
            <value>
              Fim da Pesquisa - Salve na próxima tela
            </value>
          </text>
        </translation>
      </itext>
      <bind nodeset="/data/meta/instanceID" type="string" readonly="true()" calculate="concat('uuid:', uuid())"/>
      <bind nodeset="/data/responsavel/nomeresponsavel" type="string" readonly="true()"/>
      <bind nodeset="/data/responsavel/cpf" type="string" readonly="true()"/>
      <bind nodeset="/data/principal/uf" type="string" readonly="true()" constraint="(regex(., &quot;^.{2,2}$&quot;))" jr:constraintMsg="Response length must be between 2 and 2"/>
      <bind nodeset="/data/principal/nomemunicipio" type="string" readonly="true()"/>
      <bind nodeset="/data/principal/codigoibge" type="int" readonly="true()"/>
      <bind nodeset="/data/principal/comunidade" type="string" readonly="true()"/>
      <bind nodeset="/data/principal/lote" type="string" readonly="true()"/>
      <bind nodeset="/data/principal/sublote" type="string" readonly="true()"/>
      <bind nodeset="/data/dadosendereco/endereco" type="string"/>
      <bind nodeset="/data/dadosendereco/bairro" type="string"/>
      <bind nodeset="/data/dadosendereco/complemento" type="string"/>
      <bind nodeset="/data/dadosendereco/cep" type="int"/>
      <bind nodeset="/data/dadosendereco/referencia" type="string"/>
      <bind nodeset="/data/dadosendereco/telefone" type="string"/>
      <bind nodeset="/data/complementoprincipal/distanciasede" type="int"/>
      <bind nodeset="/data/complementoprincipal/viasdeacesso" type="select"/>
      <bind nodeset="/data/complementoprincipal/transitavelanotodo" type="select1"/>
      <bind nodeset="/data/coordenadageografica" type="geopoint"/>
      <bind nodeset="/data/quemeoentrevistado/entrevistadoeresponsavel" type="select1"/>
      <bind nodeset="/data/responsavelunidadefamiliar/nomedoresponsavel" type="string"/>
      <bind nodeset="/data/responsavelunidadefamiliar/sexoresponsavel" type="select1"/>
      <bind nodeset="/data/responsavelunidadefamiliar/datanascimento" type="date"/>
      <bind nodeset="/data/responsavelunidadefamiliar/cpfresponsavel" type="string"/>
      <bind nodeset="/data/responsavelunidadefamiliar/rgresponsavel" type="string"/>
      <bind nodeset="/data/responsavelunidadefamiliar/Orgao" type="string"/>
      <bind nodeset="/data/responsavelunidadefamiliar/nis" type="string"/>
      <bind nodeset="/data/dadosconjuge/nomeconjuge" type="string"/>
      <bind nodeset="/data/dadosconjuge/cpfconjuge" type="string"/>
      <bind nodeset="/data/dadosconjuge/rgconjuge" type="string"/>
      <bind nodeset="/data/dadosdoentrevistado" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'nao'))"/>
      <bind nodeset="/data/dadosdoentrevistado/dadosentrevistado" type="select1" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'nao'))"/>
      <bind nodeset="/data/dadosdoentrevistado/grauparentesco" type="string" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'nao'))"/>
      <bind nodeset="/data/dadosdoentrevistado/nomeentrevistado" type="string" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'nao'))"/>
      <bind nodeset="/data/dadosdoentrevistado/cpfentrevistado" type="string" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'nao'))"/>
      <bind nodeset="/data/dadosdoentrevistado/rgentrevistado" type="string" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'nao'))"/>
      <bind nodeset="/data/composicaogrupofamiliar/totalfilhos" type="int" constraint="(. &gt;= '0' and . &lt;= '20')" jr:constraintMsg="Value must be between 0 and 20"/>
      <bind nodeset="/data/composicaogrupofamiliar/criancasate06anos" type="int" constraint="(. &gt;= '0' and . &lt;= '20')" jr:constraintMsg="Value must be between 0 and 20"/>
      <bind nodeset="/data/composicaogrupofamiliar/criancasnaescola" type="int" constraint="(. &gt;= '0' and . &lt;= '20')" jr:constraintMsg="Value must be between 0 and 20"/>
      <bind nodeset="/data/composicaogrupofamiliar/idosos" type="int" constraint="(. &gt;= '0' and . &lt;= '20')" jr:constraintMsg="Value must be between 0 and 20"/>
      <bind nodeset="/data/composicaogrupofamiliar/deficiencia" type="int" constraint="(. &gt;= '0' and . &lt;= '20')" jr:constraintMsg="Value must be between 0 and 20"/>
      <bind nodeset="/data/dadosresidencia/cobertura" type="select1"/>
      <bind nodeset="/data/dadosresidencia/situacaocobertura" type="select1"/>
      <bind nodeset="/data/dadosresidencia/cisterna" type="string"/>
      <bind nodeset="/data/energia" type="select1"/>
      <bind nodeset="/data/dadosenergia/tiposenergia" type="select" relevant="(selected(/data/energia,'sim'))"/>
      <bind nodeset="/data/dadosenergia/tipoenergia" type="string" relevant="(selected(/data/dadosenergia/tiposenergia,'outros'))"/>
      <bind nodeset="/data/esgoto/banheiro" type="select1"/>
      <bind nodeset="/data/esgoto/esgotamentosanitario" type="select1"/>
      <bind nodeset="/data/tipoesgotamento" type="select" relevant="(selected(/data/esgoto/esgotamentosanitario,'sim'))"/>
      <bind nodeset="/data/outroesgotamento" type="string" relevant="(selected(/data/esgoto/tiposesgotamento,'outros'))"/>
      <bind nodeset="/data/destinolixo" type="select"/>
      <bind nodeset="/data/dadossocioeconomicos/beneficiossociais" type="select1"/>
      <bind nodeset="/data/tipobeneficio" type="select" relevant="(selected(/data/dadossocioeconomicos/beneficiossociais,'sim'))"/>
      <bind nodeset="/data/outrobeneficio" type="string" relevant="(selected(/data/dadossocioeconomicos/tipobeneficio,'outros'))" jr:constraintMsg="jr:itext('/data/outrobeneficio:constraintMsg')"/>
      <bind nodeset="/data/outrosdadossocioeconomicos/ocupacao" type="select"/>
      <bind nodeset="/data/outrosdadossocioeconomicos/periodorenda" type="select1"/>
      <bind nodeset="/data/outrosdadossocioeconomicos/valorrenda" type="int"/>
      <bind nodeset="/data/outrosdadossocioeconomicos/totalpessoas" type="int" constraint="(. &gt;= '0' and . &lt;= '99')" jr:constraintMsg="Value must be between 0 and 99"/>
      <bind nodeset="/data/acessoeusodaagua/acessoagua" type="select1"/>
      <bind nodeset="/data/tiposdefonte" type="select" relevant="(selected(/data/acessoeusodaagua/acessoagua,'sim'))"/>
      <bind nodeset="/data/poco" relevant="(selected(/data/tiposdefonte,'poco'))"/>
      <bind nodeset="/data/poco/distanciapoco" type="int" relevant="(selected(/data/tiposdefonte,'poco'))"/>
      <bind nodeset="/data/poco/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'poco'))"/>
      <bind nodeset="/data/poco/utilizacaopoco" type="select" relevant="(selected(/data/tiposdefonte,'poco'))"/>
      <bind nodeset="/data/pocosubsuperficial" relevant="(selected(/data/tiposdefonte,'pocosubsuperficial'))"/>
      <bind nodeset="/data/pocosubsuperficial/distanciapocosuperficial" type="int" relevant="(selected(/data/tiposdefonte,'pocosubsuperficial'))"/>
      <bind nodeset="/data/pocosubsuperficial/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'pocosubsuperficial'))"/>
      <bind nodeset="/data/pocosubsuperficial/utilizacaopocusuperficial" type="select" relevant="(selected(/data/tiposdefonte,'pocosubsuperficial'))"/>
      <bind nodeset="/data/corrego" relevant="(selected(/data/tiposdefonte,'corrego'))"/>
      <bind nodeset="/data/corrego/distanciacorrego" type="int" relevant="(selected(/data/tiposdefonte,'corrego'))"/>
      <bind nodeset="/data/corrego/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'corrego'))"/>
      <bind nodeset="/data/corrego/utilizacaocorrego" type="select" relevant="(selected(/data/tiposdefonte,'corrego'))"/>
      <bind nodeset="/data/rioriacho" relevant="(selected(/data/tiposdefonte,'rioriacho'))"/>
      <bind nodeset="/data/rioriacho/distanciario" type="int" relevant="(selected(/data/tiposdefonte,'rioriacho'))"/>
      <bind nodeset="/data/rioriacho/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'rioriacho'))"/>
      <bind nodeset="/data/rioriacho/utilizacaorio" type="select" relevant="(selected(/data/tiposdefonte,'rioriacho'))"/>
      <bind nodeset="/data/tanques" relevant="(selected(/data/tiposdefonte,'tanques'))"/>
      <bind nodeset="/data/tanques/distanciatanques" type="int" relevant="(selected(/data/tiposdefonte,'tanques'))"/>
      <bind nodeset="/data/tanques/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'tanques'))"/>
      <bind nodeset="/data/tanques/utilizacaotanques" type="select" relevant="(selected(/data/tiposdefonte,'tanques'))"/>
      <bind nodeset="/data/lagoa" relevant="(selected(/data/tiposdefonte,'lagoa'))"/>
      <bind nodeset="/data/lagoa/distancialagoa" type="int" relevant="(selected(/data/tiposdefonte,'lagoa'))"/>
      <bind nodeset="/data/lagoa/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'lagoa'))"/>
      <bind nodeset="/data/lagoa/utilizacaolagoa" type="select" relevant="(selected(/data/tiposdefonte,'lagoa'))"/>
      <bind nodeset="/data/sistemaaducao" relevant="(selected(/data/tiposdefonte,'sistemaaducao'))"/>
      <bind nodeset="/data/sistemaaducao/distanciasistemaaducao" type="int" relevant="(selected(/data/tiposdefonte,'sistemaaducao'))"/>
      <bind nodeset="/data/sistemaaducao/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'sistemaaducao'))"/>
      <bind nodeset="/data/sistemaaducao/utilizacaosistemadeaducao" type="select" relevant="(selected(/data/tiposdefonte,'sistemaaducao'))"/>
      <bind nodeset="/data/cisternaconsumohumano" relevant="(selected(/data/tiposdefonte,'cisternaconsumohumano'))"/>
      <bind nodeset="/data/cisternaconsumohumano/distanciacicternaconsumo" type="int" relevant="(selected(/data/tiposdefonte,'cisternaconsumohumano'))"/>
      <bind nodeset="/data/cisternaconsumohumano/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'cisternaconsumohumano'))"/>
      <bind nodeset="/data/cisternaconsumohumano/utilizacaocisternaconsumo" type="select" relevant="(selected(/data/tiposdefonte,'cisternaconsumohumano'))"/>
      <bind nodeset="/data/cisternadeterceiros" relevant="(selected(/data/tiposdefonte,'cisternadeterceiros'))"/>
      <bind nodeset="/data/cisternadeterceiros/distanciacisternadeterceiros" type="int" relevant="(selected(/data/tiposdefonte,'cisternadeterceiros'))"/>
      <bind nodeset="/data/cisternadeterceiros/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'cisternadeterceiros'))"/>
      <bind nodeset="/data/cisternadeterceiros/utilizacaocisternadeterceiros" type="select" relevant="(selected(/data/tiposdefonte,'cisternadeterceiros'))"/>
      <bind nodeset="/data/sistemacomunidade" relevant="(selected(/data/tiposdefonte,'sistemacomunidade'))"/>
      <bind nodeset="/data/sistemacomunidade/distanciasistemacomunidade" type="int" relevant="(selected(/data/tiposdefonte,'sistemacomunidade'))"/>
      <bind nodeset="/data/sistemacomunidade/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'sistemacomunidade'))"/>
      <bind nodeset="/data/sistemacomunidade/utilizacaosistemacomunidade" type="select" relevant="(selected(/data/tiposdefonte,'sistemacomunidade'))"/>
      <bind nodeset="/data/sistemaoutracomunidade" relevant="(selected(/data/tiposdefonte,'sistemaoutracomunidade'))"/>
      <bind nodeset="/data/sistemaoutracomunidade/distanciasistemaoutracomunidade" type="int" relevant="(selected(/data/tiposdefonte,'sistemaoutracomunidade'))"/>
      <bind nodeset="/data/sistemaoutracomunidade/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'sistemaoutracomunidade'))"/>
      <bind nodeset="/data/sistemaoutracomunidade/utilizacaosistemaoutracomunidade" type="select" relevant="(selected(/data/tiposdefonte,'sistemaoutracomunidade'))"/>
      <bind nodeset="/data/cisternaproducao" relevant="(selected(/data/tiposdefonte,'cisternaproducao'))"/>
      <bind nodeset="/data/cisternaproducao/distanciacisternaproducao" type="int" relevant="(selected(/data/tiposdefonte,'cisternaproducao'))"/>
      <bind nodeset="/data/cisternaproducao/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'cisternaproducao'))"/>
      <bind nodeset="/data/cisternaproducao/utilizacaocisternaproducao" type="select" relevant="(selected(/data/tiposdefonte,'cisternaproducao'))"/>
      <bind nodeset="/data/cisternaoutracomunidade" relevant="(selected(/data/tiposdefonte,'cisternaoutracomunidade'))"/>
      <bind nodeset="/data/cisternaoutracomunidade/distanciacisternaoutracomunidade" type="int" relevant="(selected(/data/tiposdefonte,'cisternaoutracomunidade'))"/>
      <bind nodeset="/data/cisternaoutracomunidade/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'cisternaoutracomunidade'))"/>
      <bind nodeset="/data/cisternaoutracomunidade/utilizacaocisternaoutracomunidade" type="select" relevant="(selected(/data/tiposdefonte,'cisternaoutracomunidade'))"/>
      <bind nodeset="/data/sistemacoletivo" relevant="(selected(/data/tiposdefonte,'sistemacoletivo'))"/>
      <bind nodeset="/data/sistemacoletivo/distanciasistemacoletivo" type="int" relevant="(selected(/data/tiposdefonte,'sistemacoletivo'))"/>
      <bind nodeset="/data/sistemacoletivo/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'sistemacoletivo'))"/>
      <bind nodeset="/data/sistemacoletivo/utilizacaosistemacoletivo" type="select" relevant="(selected(/data/tiposdefonte,'sistemacoletivo'))"/>
      <bind nodeset="/data/barreiro" relevant="(selected(/data/tiposdefonte,'barreiro'))"/>
      <bind nodeset="/data/barreiro/distanciabarreiro" type="int" relevant="(selected(/data/tiposdefonte,'barreiro'))"/>
      <bind nodeset="/data/barreiro/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'barreiro'))"/>
      <bind nodeset="/data/barreiro/utilizacaobarreiro" type="select" relevant="(selected(/data/tiposdefonte,'barreiro'))"/>
      <bind nodeset="/data/nascentes" relevant="(selected(/data/tiposdefonte,'nascentes'))"/>
      <bind nodeset="/data/nascentes/distancianascentes" type="int" relevant="(selected(/data/tiposdefonte,'nascentes'))"/>
      <bind nodeset="/data/nascentes/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'nascentes'))"/>
      <bind nodeset="/data/nascentes/utilizacaonascentes" type="select" relevant="(selected(/data/tiposdefonte,'nascentes'))"/>
      <bind nodeset="/data/acudes" relevant="(selected(/data/tiposdefonte,'acudes'))"/>
      <bind nodeset="/data/acudes/distanciaacudes" type="int" relevant="(selected(/data/tiposdefonte,'acudes'))"/>
      <bind nodeset="/data/acudes/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'acudes'))"/>
      <bind nodeset="/data/acudes/utilizacaoacudes" type="select" relevant="(selected(/data/tiposdefonte,'acudes'))"/>
      <bind nodeset="/data/kitsirrigacao" relevant="(selected(/data/tiposdefonte,'kitsirrigacao'))"/>
      <bind nodeset="/data/kitsirrigacao/distanciakits" type="int" relevant="(selected(/data/tiposdefonte,'kitsirrigacao'))"/>
      <bind nodeset="/data/kitsirrigacao/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'kitsirrigacao'))"/>
      <bind nodeset="/data/kitsirrigacao/utilizacaokits" type="select" relevant="(selected(/data/tiposdefonte,'kitsirrigacao'))"/>
      <bind nodeset="/data/carropipa" relevant="(selected(/data/tiposdefonte,'carropipa'))"/>
      <bind nodeset="/data/carropipa/distanciacarropipa" type="int" relevant="(selected(/data/tiposdefonte,'carropipa'))"/>
      <bind nodeset="/data/carropipa/medida" type="select1" required="true()" relevant="(selected(/data/tiposdefonte,'carropipa'))"/>
      <bind nodeset="/data/carropipa/utilizacaocarropipa" type="select" relevant="(selected(/data/tiposdefonte,'carropipa'))"/>
      <bind nodeset="/data/tratamentoagua/aguatratada" type="select1"/>
      <bind nodeset="/data/formatratamento" type="select" relevant="(selected(/data/tratamentoagua/aguatratada,'sim'))"/>
      <bind nodeset="/data/dadosprodutivos/dadospropriedade" type="select1"/>
      <bind nodeset="/data/descrevaoutros" type="string" relevant="(selected(/data/dadosprodutivos/dadospropriedade,'outros'))"/>
      <bind nodeset="/data/maodeobra/tipomaodeobra" type="select"/>
      <bind nodeset="/data/maodeobra/pessoasfamilia" type="int" constraint="(. &gt;= '0' and . &lt;= '999')" jr:constraintMsg="Value must be between 0 and 999"/>
      <bind nodeset="/data/maodeobra/pessoascontratadas" type="int" constraint="(. &gt;= '0' and . &lt;= '9999')" jr:constraintMsg="Value must be between 0 and 9999"/>
      <bind nodeset="/data/area/areatotal" type="int"/>
      <bind nodeset="/data/area/areaproducao" type="int"/>
      <bind nodeset="/data/tipoatividade/assinaletipoatividade" type="select"/>
      <bind nodeset="/data/frutas" relevant="(selected(/data/tipoatividade/assinaletipoatividade,'frutas'))"/>
      <bind nodeset="/data/frutas/tiposdefruta" type="string" relevant="(selected(/data/tipoatividade/assinaletipoatividade,'frutas'))"/>
      <bind nodeset="/data/agricultura" relevant="(selected(/data/tipoatividade/assinaletipoatividade,'agricultura'))"/>
      <bind nodeset="/data/agricultura/tipoagricultura" type="string" relevant="(selected(/data/tipoatividade/assinaletipoatividade,'agricultura'))"/>
      <bind nodeset="/data/agroindustria" relevant="(selected(/data/tipoatividade/assinaletipoatividade,'agroindustria'))"/>
      <bind nodeset="/data/agroindustria/tipoagroindustria" type="string" relevant="(selected(/data/tipoatividade/assinaletipoatividade,'agroindustria'))"/>
      <bind nodeset="/data/artesanato" relevant="(selected(/data/tipoatividade/assinaletipoatividade,'artesanato'))"/>
      <bind nodeset="/data/artesanato/tipoartesanato" type="string" relevant="(selected(/data/tipoatividade/assinaletipoatividade,'artesanato'))"/>
      <bind nodeset="/data/outraatividade" relevant="(selected(/data/tipoatividade/assinaletipoatividade,'outraatividade'))"/>
      <bind nodeset="/data/outraatividade/outrotipo" type="string" relevant="(selected(/data/tipoatividade/assinaletipoatividade,'outraatividade'))"/>
      <bind nodeset="/data/agriculturafinalidade/finalidadeagricultura" type="select"/>
      <bind nodeset="/data/agriculturafinalidade/areavenda" type="int"/>
      <bind nodeset="/data/agriculturafinalidade/areaconsumo" type="int"/>
      <bind nodeset="/data/tiposirrigacao/tiposdeirrigacao" type="select"/>
      <bind nodeset="/data/criacaoanimais" relevant="(selected(/data/criacaodeanimais,'sim'))"/>
      <bind nodeset="/data/criacaoanimais/criacaodeanimais" type="select1" relevant="(selected(/data/criacaodeanimais,'sim'))"/>
      <bind nodeset="/data/criacaoanimais/quaisanimais" type="string" relevant="(selected(/data/criacaodeanimais,'sim'))"/>
      <bind nodeset="/data/criacaoanimais/finalidadeanimais" type="select" relevant="(selected(/data/criacaodeanimais,'sim')) and (selected(/data/criacaoanimais/criacaodeanimais,'sim'))"/>
      <bind nodeset="/data/criacaoanimais/areavenda" type="int" relevant="(selected(/data/criacaodeanimais,'sim')) and (selected(/data/criacaoanimais/finalidadeanimais,'venda'))"/>
      <bind nodeset="/data/criacaoanimais/areaconsumo" type="int" relevant="(selected(/data/criacaodeanimais,'sim')) and (selected(/data/criacaoanimais/finalidadeanimais,'consumo'))"/>
      <bind nodeset="/data/daassistencia/assistencia" type="select1"/>
      <bind nodeset="/data/origemassistencia" type="select" relevant="(selected(/data/daassistencia/assistencia,'sim'))"/>
      <bind nodeset="/data/fotoassinatura" type="binary"/>
      <bind nodeset="/data/pesquisa" type="string" readonly="true()"/>
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
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/principal:label')"/>
      <input ref="/data/principal/uf">
        <label ref="jr:itext('/data/principal/uf:label')"/>
        <hint ref="jr:itext('/data/principal/uf:hint')"/>
      </input>
      <input ref="/data/principal/nomemunicipio">
        <label ref="jr:itext('/data/principal/nomemunicipio:label')"/>
        <hint ref="jr:itext('/data/principal/nomemunicipio:hint')"/>
      </input>
      <input ref="/data/principal/codigoibge">
        <label ref="jr:itext('/data/principal/codigoibge:label')"/>
      </input>
      <input ref="/data/principal/comunidade">
        <label ref="jr:itext('/data/principal/comunidade:label')"/>
        <hint ref="jr:itext('/data/principal/comunidade:hint')"/>
      </input>
      <input ref="/data/principal/lote">
        <label ref="jr:itext('/data/principal/lote:label')"/>
      </input>
      <input ref="/data/principal/sublote">
        <label ref="jr:itext('/data/principal/sublote:label')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/dadosendereco:label')"/>
      <input ref="/data/dadosendereco/endereco">
        <label ref="jr:itext('/data/dadosendereco/endereco:label')"/>
        <hint ref="jr:itext('/data/dadosendereco/endereco:hint')"/>
      </input>
      <input ref="/data/dadosendereco/bairro">
        <label ref="jr:itext('/data/dadosendereco/bairro:label')"/>
      </input>
      <input ref="/data/dadosendereco/complemento">
        <label ref="jr:itext('/data/dadosendereco/complemento:label')"/>
        <hint ref="jr:itext('/data/dadosendereco/complemento:hint')"/>
      </input>
      <input ref="/data/dadosendereco/cep">
        <label ref="jr:itext('/data/dadosendereco/cep:label')"/>
        <hint ref="jr:itext('/data/dadosendereco/cep:hint')"/>
      </input>
      <input ref="/data/dadosendereco/referencia">
        <label ref="jr:itext('/data/dadosendereco/referencia:label')"/>
        <hint ref="jr:itext('/data/dadosendereco/referencia:hint')"/>
      </input>
      <input ref="/data/dadosendereco/telefone">
        <label ref="jr:itext('/data/dadosendereco/telefone:label')"/>
        <hint ref="jr:itext('/data/dadosendereco/telefone:hint')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/complementoprincipal:label')"/>
      <input ref="/data/complementoprincipal/distanciasede">
        <label ref="jr:itext('/data/complementoprincipal/distanciasede:label')"/>
      </input>
      <select ref="/data/complementoprincipal/viasdeacesso">
        <label ref="jr:itext('/data/complementoprincipal/viasdeacesso:label')"/>
        <hint ref="jr:itext('/data/complementoprincipal/viasdeacesso:hint')"/>
        <item>
          <label ref="jr:itext('/data/complementoprincipal/viasdeacesso:option0')"/>
          <value>asfalto</value>
        </item>
        <item>
          <label ref="jr:itext('/data/complementoprincipal/viasdeacesso:option1')"/>
          <value>barro</value>
        </item>
        <item>
          <label ref="jr:itext('/data/complementoprincipal/viasdeacesso:option2')"/>
          <value>cascalho</value>
        </item>
        <item>
          <label ref="jr:itext('/data/complementoprincipal/viasdeacesso:option3')"/>
          <value>plana</value>
        </item>
        <item>
          <label ref="jr:itext('/data/complementoprincipal/viasdeacesso:option4')"/>
          <value>enladeirada</value>
        </item>
        <item>
          <label ref="jr:itext('/data/complementoprincipal/viasdeacesso:option5')"/>
          <value>estreita</value>
        </item>
        <item>
          <label ref="jr:itext('/data/complementoprincipal/viasdeacesso:option6')"/>
          <value>larga</value>
        </item>
      </select>
      <select1 ref="/data/complementoprincipal/transitavelanotodo">
        <label ref="jr:itext('/data/complementoprincipal/transitavelanotodo:label')"/>
        <item>
          <label ref="jr:itext('/data/complementoprincipal/transitavelanotodo:option0')"/>
          <value>sim</value>
        </item>
        <item>
          <label ref="jr:itext('/data/complementoprincipal/transitavelanotodo:option1')"/>
          <value>nao</value>
        </item>
      </select1>
    </group>
    <input ref="/data/coordenadageografica">
      <label ref="jr:itext('/data/coordenadageografica:label')"/>
      <hint ref="jr:itext('/data/coordenadageografica:hint')"/>
    </input>
    <group>
      <label ref="jr:itext('/data/quemeoentrevistado:label')"/>
      <select1 ref="/data/quemeoentrevistado/entrevistadoeresponsavel">
        <label ref="jr:itext('/data/quemeoentrevistado/entrevistadoeresponsavel:label')"/>
        <item>
          <label ref="jr:itext('/data/quemeoentrevistado/entrevistadoeresponsavel:option0')"/>
          <value>sim</value>
        </item>
        <item>
          <label ref="jr:itext('/data/quemeoentrevistado/entrevistadoeresponsavel:option1')"/>
          <value>nao</value>
        </item>
      </select1>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/responsavelunidadefamiliar:label')"/>
      <input ref="/data/responsavelunidadefamiliar/nomedoresponsavel">
        <label ref="jr:itext('/data/responsavelunidadefamiliar/nomedoresponsavel:label')"/>
      </input>
      <select1 ref="/data/responsavelunidadefamiliar/sexoresponsavel">
        <label ref="jr:itext('/data/responsavelunidadefamiliar/sexoresponsavel:label')"/>
        <item>
          <label ref="jr:itext('/data/responsavelunidadefamiliar/sexoresponsavel:option0')"/>
          <value>feminino</value>
        </item>
        <item>
          <label ref="jr:itext('/data/responsavelunidadefamiliar/sexoresponsavel:option1')"/>
          <value>masculino</value>
        </item>
      </select1>
      <input ref="/data/responsavelunidadefamiliar/datanascimento">
        <label ref="jr:itext('/data/responsavelunidadefamiliar/datanascimento:label')"/>
      </input>
      <input ref="/data/responsavelunidadefamiliar/cpfresponsavel">
        <label ref="jr:itext('/data/responsavelunidadefamiliar/cpfresponsavel:label')"/>
      </input>
      <input ref="/data/responsavelunidadefamiliar/rgresponsavel">
        <label ref="jr:itext('/data/responsavelunidadefamiliar/rgresponsavel:label')"/>
      </input>
      <input ref="/data/responsavelunidadefamiliar/Orgao">
        <label ref="jr:itext('/data/responsavelunidadefamiliar/Orgao:label')"/>
        <hint ref="jr:itext('/data/responsavelunidadefamiliar/Orgao:hint')"/>
      </input>
      <input ref="/data/responsavelunidadefamiliar/nis">
        <label ref="jr:itext('/data/responsavelunidadefamiliar/nis:label')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/dadosconjuge:label')"/>
      <input ref="/data/dadosconjuge/nomeconjuge">
        <label ref="jr:itext('/data/dadosconjuge/nomeconjuge:label')"/>
        <hint ref="jr:itext('/data/dadosconjuge/nomeconjuge:hint')"/>
      </input>
      <input ref="/data/dadosconjuge/cpfconjuge">
        <label ref="jr:itext('/data/dadosconjuge/cpfconjuge:label')"/>
      </input>
      <input ref="/data/dadosconjuge/rgconjuge">
        <label ref="jr:itext('/data/dadosconjuge/rgconjuge:label')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/dadosdoentrevistado:label')"/>
      <select1 ref="/data/dadosdoentrevistado/dadosentrevistado">
        <label ref="jr:itext('/data/dadosdoentrevistado/dadosentrevistado:label')"/>
        <item>
          <label ref="jr:itext('/data/dadosdoentrevistado/dadosentrevistado:option0')"/>
          <value>responsavelpelafamilia</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosdoentrevistado/dadosentrevistado:option1')"/>
          <value>conjugeresponsavelpelafamilia</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosdoentrevistado/dadosentrevistado:option2')"/>
          <value>outromembrofamilia</value>
        </item>
      </select1>
      <input ref="/data/dadosdoentrevistado/grauparentesco">
        <label ref="jr:itext('/data/dadosdoentrevistado/grauparentesco:label')"/>
        <hint ref="jr:itext('/data/dadosdoentrevistado/grauparentesco:hint')"/>
      </input>
      <input ref="/data/dadosdoentrevistado/nomeentrevistado">
        <label ref="jr:itext('/data/dadosdoentrevistado/nomeentrevistado:label')"/>
        <hint ref="jr:itext('/data/dadosdoentrevistado/nomeentrevistado:hint')"/>
      </input>
      <input ref="/data/dadosdoentrevistado/cpfentrevistado">
        <label ref="jr:itext('/data/dadosdoentrevistado/cpfentrevistado:label')"/>
      </input>
      <input ref="/data/dadosdoentrevistado/rgentrevistado">
        <label ref="jr:itext('/data/dadosdoentrevistado/rgentrevistado:label')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/composicaogrupofamiliar:label')"/>
      <input ref="/data/composicaogrupofamiliar/totalfilhos">
        <label ref="jr:itext('/data/composicaogrupofamiliar/totalfilhos:label')"/>
      </input>
      <input ref="/data/composicaogrupofamiliar/criancasate06anos">
        <label ref="jr:itext('/data/composicaogrupofamiliar/criancasate06anos:label')"/>
      </input>
      <input ref="/data/composicaogrupofamiliar/criancasnaescola">
        <label ref="jr:itext('/data/composicaogrupofamiliar/criancasnaescola:label')"/>
      </input>
      <input ref="/data/composicaogrupofamiliar/idosos">
        <label ref="jr:itext('/data/composicaogrupofamiliar/idosos:label')"/>
      </input>
      <input ref="/data/composicaogrupofamiliar/deficiencia">
        <label ref="jr:itext('/data/composicaogrupofamiliar/deficiencia:label')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/dadosresidencia:label')"/>
      <select1 ref="/data/dadosresidencia/cobertura">
        <label ref="jr:itext('/data/dadosresidencia/cobertura:label')"/>
        <item>
          <label ref="jr:itext('/data/dadosresidencia/cobertura:option0')"/>
          <value>telha</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosresidencia/cobertura:option1')"/>
          <value>palha</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosresidencia/cobertura:option2')"/>
          <value>outros</value>
        </item>
      </select1>
      <select1 ref="/data/dadosresidencia/situacaocobertura">
        <label ref="jr:itext('/data/dadosresidencia/situacaocobertura:label')"/>
        <item>
          <label ref="jr:itext('/data/dadosresidencia/situacaocobertura:option0')"/>
          <value>adequada</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosresidencia/situacaocobertura:option1')"/>
          <value>necessitareparos</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosresidencia/situacaocobertura:option2')"/>
          <value>substituicaotelhas</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosresidencia/situacaocobertura:option3')"/>
          <value>inadequada</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosresidencia/situacaocobertura:option4')"/>
          <value>naotemcisterna</value>
        </item>
      </select1>
      <input ref="/data/dadosresidencia/cisterna">
        <label ref="jr:itext('/data/dadosresidencia/cisterna:label')"/>
        <hint ref="jr:itext('/data/dadosresidencia/cisterna:hint')"/>
      </input>
    </group>
    <select1 ref="/data/energia">
      <label ref="jr:itext('/data/energia:label')"/>
      <item>
        <label ref="jr:itext('/data/energia:option0')"/>
        <value>sim</value>
      </item>
      <item>
        <label ref="jr:itext('/data/energia:option1')"/>
        <value>nao</value>
      </item>
    </select1>
    <group appearance="field-list">
      <label ref="jr:itext('/data/dadosenergia:label')"/>
      <select ref="/data/dadosenergia/tiposenergia">
        <label ref="jr:itext('/data/dadosenergia/tiposenergia:label')"/>
        <item>
          <label ref="jr:itext('/data/dadosenergia/tiposenergia:option0')"/>
          <value>solar</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosenergia/tiposenergia:option1')"/>
          <value>eolica</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosenergia/tiposenergia:option2')"/>
          <value>diesel</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosenergia/tiposenergia:option3')"/>
          <value>eletrica</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosenergia/tiposenergia:option4')"/>
          <value>outros</value>
        </item>
      </select>
      <input ref="/data/dadosenergia/tipoenergia">
        <label ref="jr:itext('/data/dadosenergia/tipoenergia:label')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/esgoto:label')"/>
      <select1 ref="/data/esgoto/banheiro">
        <label ref="jr:itext('/data/esgoto/banheiro:label')"/>
        <hint ref="jr:itext('/data/esgoto/banheiro:hint')"/>
        <item>
          <label ref="jr:itext('/data/esgoto/banheiro:option0')"/>
          <value>sim</value>
        </item>
        <item>
          <label ref="jr:itext('/data/esgoto/banheiro:option1')"/>
          <value>nao</value>
        </item>
      </select1>
      <select1 ref="/data/esgoto/esgotamentosanitario">
        <label ref="jr:itext('/data/esgoto/esgotamentosanitario:label')"/>
        <item>
          <label ref="jr:itext('/data/esgoto/esgotamentosanitario:option0')"/>
          <value>sim</value>
        </item>
        <item>
          <label ref="jr:itext('/data/esgoto/esgotamentosanitario:option1')"/>
          <value>nao</value>
        </item>
      </select1>
    </group>
    <select ref="/data/tipoesgotamento">
      <label ref="jr:itext('/data/tipoesgotamento:label')"/>
      <item>
        <label ref="jr:itext('/data/tipoesgotamento:option0')"/>
        <value>fossacomum</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tipoesgotamento:option1')"/>
        <value>fossaseptica</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tipoesgotamento:option2')"/>
        <value>esgototratado</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tipoesgotamento:option3')"/>
        <value>outros</value>
      </item>
    </select>
    <input ref="/data/outroesgotamento">
      <label ref="jr:itext('/data/outroesgotamento:label')"/>
    </input>
    <select ref="/data/destinolixo">
      <label ref="jr:itext('/data/destinolixo:label')"/>
      <item>
        <label ref="jr:itext('/data/destinolixo:option0')"/>
        <value>queimado</value>
      </item>
      <item>
        <label ref="jr:itext('/data/destinolixo:option1')"/>
        <value>enterrado</value>
      </item>
      <item>
        <label ref="jr:itext('/data/destinolixo:option2')"/>
        <value>coletado</value>
      </item>
      <item>
        <label ref="jr:itext('/data/destinolixo:option3')"/>
        <value>jogadorio</value>
      </item>
      <item>
        <label ref="jr:itext('/data/destinolixo:option4')"/>
        <value>terrenobaldio</value>
      </item>
    </select>
    <group appearance="field-list">
      <label ref="jr:itext('/data/dadossocioeconomicos:label')"/>
      <select1 ref="/data/dadossocioeconomicos/beneficiossociais">
        <label ref="jr:itext('/data/dadossocioeconomicos/beneficiossociais:label')"/>
        <item>
          <label ref="jr:itext('/data/dadossocioeconomicos/beneficiossociais:option0')"/>
          <value>sim</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadossocioeconomicos/beneficiossociais:option1')"/>
          <value>nao</value>
        </item>
      </select1>
    </group>
    <select ref="/data/tipobeneficio">
      <label ref="jr:itext('/data/tipobeneficio:label')"/>
      <item>
        <label ref="jr:itext('/data/tipobeneficio:option0')"/>
        <value>bpc</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tipobeneficio:option1')"/>
        <value>bolsafamilia</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tipobeneficio:option2')"/>
        <value>pronaf</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tipobeneficio:option3')"/>
        <value>fomentoterra</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tipobeneficio:option4')"/>
        <value>segurodefeso</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tipobeneficio:option5')"/>
        <value>Outros</value>
      </item>
    </select>
    <input ref="/data/outrobeneficio">
      <label ref="jr:itext('/data/outrobeneficio:label')"/>
    </input>
    <group appearance="field-list">
      <label ref="jr:itext('/data/outrosdadossocioeconomicos:label')"/>
      <select ref="/data/outrosdadossocioeconomicos/ocupacao">
        <label ref="jr:itext('/data/outrosdadossocioeconomicos/ocupacao:label')"/>
        <hint ref="jr:itext('/data/outrosdadossocioeconomicos/ocupacao:hint')"/>
        <item>
          <label ref="jr:itext('/data/outrosdadossocioeconomicos/ocupacao:option0')"/>
          <value>agricultor</value>
        </item>
        <item>
          <label ref="jr:itext('/data/outrosdadossocioeconomicos/ocupacao:option1')"/>
          <value>autonomo</value>
        </item>
        <item>
          <label ref="jr:itext('/data/outrosdadossocioeconomicos/ocupacao:option2')"/>
          <value>clt</value>
        </item>
        <item>
          <label ref="jr:itext('/data/outrosdadossocioeconomicos/ocupacao:option3')"/>
          <value>aposentado</value>
        </item>
        <item>
          <label ref="jr:itext('/data/outrosdadossocioeconomicos/ocupacao:option4')"/>
          <value>pensionista</value>
        </item>
        <item>
          <label ref="jr:itext('/data/outrosdadossocioeconomicos/ocupacao:option5')"/>
          <value>servidorpublico</value>
        </item>
        <item>
          <label ref="jr:itext('/data/outrosdadossocioeconomicos/ocupacao:option6')"/>
          <value>empregadopublico</value>
        </item>
        <item>
          <label ref="jr:itext('/data/outrosdadossocioeconomicos/ocupacao:option7')"/>
          <value>naopossui</value>
        </item>
      </select>
      <select1 ref="/data/outrosdadossocioeconomicos/periodorenda">
        <label ref="jr:itext('/data/outrosdadossocioeconomicos/periodorenda:label')"/>
        <item>
          <label ref="jr:itext('/data/outrosdadossocioeconomicos/periodorenda:option0')"/>
          <value>mensal</value>
        </item>
        <item>
          <label ref="jr:itext('/data/outrosdadossocioeconomicos/periodorenda:option1')"/>
          <value>safra</value>
        </item>
        <item>
          <label ref="jr:itext('/data/outrosdadossocioeconomicos/periodorenda:option2')"/>
          <value>anual</value>
        </item>
        <item>
          <label ref="jr:itext('/data/outrosdadossocioeconomicos/periodorenda:option3')"/>
          <value>semestral</value>
        </item>
        <item>
          <label ref="jr:itext('/data/outrosdadossocioeconomicos/periodorenda:option4')"/>
          <value>diaria</value>
        </item>
      </select1>
      <input ref="/data/outrosdadossocioeconomicos/valorrenda">
        <label ref="jr:itext('/data/outrosdadossocioeconomicos/valorrenda:label')"/>
      </input>
      <input ref="/data/outrosdadossocioeconomicos/totalpessoas">
        <label ref="jr:itext('/data/outrosdadossocioeconomicos/totalpessoas:label')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/acessoeusodaagua:label')"/>
      <select1 ref="/data/acessoeusodaagua/acessoagua">
        <label ref="jr:itext('/data/acessoeusodaagua/acessoagua:label')"/>
        <item>
          <label ref="jr:itext('/data/acessoeusodaagua/acessoagua:option0')"/>
          <value>sim</value>
        </item>
        <item>
          <label ref="jr:itext('/data/acessoeusodaagua/acessoagua:option1')"/>
          <value>nao</value>
        </item>
      </select1>
    </group>
    <select ref="/data/tiposdefonte">
      <label ref="jr:itext('/data/tiposdefonte:label')"/>
      <hint ref="jr:itext('/data/tiposdefonte:hint')"/>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option0')"/>
        <value>poco</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option1')"/>
        <value>pocosubsuperficial</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option2')"/>
        <value>corrego</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option3')"/>
        <value>rioriacho</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option4')"/>
        <value>tanques</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option5')"/>
        <value>lagoa</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option6')"/>
        <value>sistemaaducao</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option7')"/>
        <value>cisternaconsumohumano</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option8')"/>
        <value>cisternadeterceiros</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option9')"/>
        <value>sistemacomunidade</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option10')"/>
        <value>sistemaoutracomunidade</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option11')"/>
        <value>cisternaproducao</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option12')"/>
        <value>cisternaoutracomunidade</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option13')"/>
        <value>sistemacoletivo</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option14')"/>
        <value>barreiro</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option15')"/>
        <value>nascentes</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option16')"/>
        <value>acudes</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option17')"/>
        <value>kitsirrigacao</value>
      </item>
      <item>
        <label ref="jr:itext('/data/tiposdefonte:option18')"/>
        <value>carropipa</value>
      </item>
    </select>
    <group appearance="field-list">
      <label ref="jr:itext('/data/poco:label')"/>
      <input ref="/data/poco/distanciapoco">
        <label ref="jr:itext('/data/poco/distanciapoco:label')"/>
      </input>
      <select1 ref="/data/poco/medida">
        <label ref="jr:itext('/data/poco/medida:label')"/>
        <hint ref="jr:itext('/data/poco/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/poco/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/poco/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/poco/utilizacaopoco">
        <label ref="jr:itext('/data/poco/utilizacaopoco:label')"/>
        <hint ref="jr:itext('/data/poco/utilizacaopoco:hint')"/>
        <item>
          <label ref="jr:itext('/data/poco/utilizacaopoco:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/poco/utilizacaopoco:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/pocosubsuperficial:label')"/>
      <input ref="/data/pocosubsuperficial/distanciapocosuperficial">
        <label ref="jr:itext('/data/pocosubsuperficial/distanciapocosuperficial:label')"/>
      </input>
      <select1 ref="/data/pocosubsuperficial/medida">
        <label ref="jr:itext('/data/pocosubsuperficial/medida:label')"/>
        <hint ref="jr:itext('/data/pocosubsuperficial/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/pocosubsuperficial/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/pocosubsuperficial/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/pocosubsuperficial/utilizacaopocusuperficial">
        <label ref="jr:itext('/data/pocosubsuperficial/utilizacaopocusuperficial:label')"/>
        <item>
          <label ref="jr:itext('/data/pocosubsuperficial/utilizacaopocusuperficial:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/pocosubsuperficial/utilizacaopocusuperficial:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/corrego:label')"/>
      <input ref="/data/corrego/distanciacorrego">
        <label ref="jr:itext('/data/corrego/distanciacorrego:label')"/>
      </input>
      <select1 ref="/data/corrego/medida">
        <label ref="jr:itext('/data/corrego/medida:label')"/>
        <hint ref="jr:itext('/data/corrego/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/corrego/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/corrego/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/corrego/utilizacaocorrego">
        <label ref="jr:itext('/data/corrego/utilizacaocorrego:label')"/>
        <item>
          <label ref="jr:itext('/data/corrego/utilizacaocorrego:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/corrego/utilizacaocorrego:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/rioriacho:label')"/>
      <input ref="/data/rioriacho/distanciario">
        <label ref="jr:itext('/data/rioriacho/distanciario:label')"/>
      </input>
      <select1 ref="/data/rioriacho/medida">
        <label ref="jr:itext('/data/rioriacho/medida:label')"/>
        <hint ref="jr:itext('/data/rioriacho/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/rioriacho/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/rioriacho/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/rioriacho/utilizacaorio">
        <label ref="jr:itext('/data/rioriacho/utilizacaorio:label')"/>
        <item>
          <label ref="jr:itext('/data/rioriacho/utilizacaorio:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/rioriacho/utilizacaorio:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/tanques:label')"/>
      <input ref="/data/tanques/distanciatanques">
        <label ref="jr:itext('/data/tanques/distanciatanques:label')"/>
      </input>
      <select1 ref="/data/tanques/medida">
        <label ref="jr:itext('/data/tanques/medida:label')"/>
        <hint ref="jr:itext('/data/tanques/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/tanques/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tanques/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/tanques/utilizacaotanques">
        <label ref="jr:itext('/data/tanques/utilizacaotanques:label')"/>
        <item>
          <label ref="jr:itext('/data/tanques/utilizacaotanques:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tanques/utilizacaotanques:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/lagoa:label')"/>
      <input ref="/data/lagoa/distancialagoa">
        <label ref="jr:itext('/data/lagoa/distancialagoa:label')"/>
      </input>
      <select1 ref="/data/lagoa/medida">
        <label ref="jr:itext('/data/lagoa/medida:label')"/>
        <hint ref="jr:itext('/data/lagoa/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/lagoa/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/lagoa/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/lagoa/utilizacaolagoa">
        <label ref="jr:itext('/data/lagoa/utilizacaolagoa:label')"/>
        <item>
          <label ref="jr:itext('/data/lagoa/utilizacaolagoa:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/lagoa/utilizacaolagoa:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/sistemaaducao:label')"/>
      <input ref="/data/sistemaaducao/distanciasistemaaducao">
        <label ref="jr:itext('/data/sistemaaducao/distanciasistemaaducao:label')"/>
      </input>
      <select1 ref="/data/sistemaaducao/medida">
        <label ref="jr:itext('/data/sistemaaducao/medida:label')"/>
        <hint ref="jr:itext('/data/sistemaaducao/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/sistemaaducao/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/sistemaaducao/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/sistemaaducao/utilizacaosistemadeaducao">
        <label ref="jr:itext('/data/sistemaaducao/utilizacaosistemadeaducao:label')"/>
        <item>
          <label ref="jr:itext('/data/sistemaaducao/utilizacaosistemadeaducao:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/sistemaaducao/utilizacaosistemadeaducao:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/cisternaconsumohumano:label')"/>
      <input ref="/data/cisternaconsumohumano/distanciacicternaconsumo">
        <label ref="jr:itext('/data/cisternaconsumohumano/distanciacicternaconsumo:label')"/>
      </input>
      <select1 ref="/data/cisternaconsumohumano/medida">
        <label ref="jr:itext('/data/cisternaconsumohumano/medida:label')"/>
        <hint ref="jr:itext('/data/cisternaconsumohumano/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/cisternaconsumohumano/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/cisternaconsumohumano/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/cisternaconsumohumano/utilizacaocisternaconsumo">
        <label ref="jr:itext('/data/cisternaconsumohumano/utilizacaocisternaconsumo:label')"/>
        <item>
          <label ref="jr:itext('/data/cisternaconsumohumano/utilizacaocisternaconsumo:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/cisternaconsumohumano/utilizacaocisternaconsumo:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/cisternadeterceiros:label')"/>
      <input ref="/data/cisternadeterceiros/distanciacisternadeterceiros">
        <label ref="jr:itext('/data/cisternadeterceiros/distanciacisternadeterceiros:label')"/>
      </input>
      <select1 ref="/data/cisternadeterceiros/medida">
        <label ref="jr:itext('/data/cisternadeterceiros/medida:label')"/>
        <hint ref="jr:itext('/data/cisternadeterceiros/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/cisternadeterceiros/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/cisternadeterceiros/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/cisternadeterceiros/utilizacaocisternadeterceiros">
        <label ref="jr:itext('/data/cisternadeterceiros/utilizacaocisternadeterceiros:label')"/>
        <item>
          <label ref="jr:itext('/data/cisternadeterceiros/utilizacaocisternadeterceiros:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/cisternadeterceiros/utilizacaocisternadeterceiros:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/sistemacomunidade:label')"/>
      <input ref="/data/sistemacomunidade/distanciasistemacomunidade">
        <label ref="jr:itext('/data/sistemacomunidade/distanciasistemacomunidade:label')"/>
      </input>
      <select1 ref="/data/sistemacomunidade/medida">
        <label ref="jr:itext('/data/sistemacomunidade/medida:label')"/>
        <hint ref="jr:itext('/data/sistemacomunidade/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/sistemacomunidade/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/sistemacomunidade/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/sistemacomunidade/utilizacaosistemacomunidade">
        <label ref="jr:itext('/data/sistemacomunidade/utilizacaosistemacomunidade:label')"/>
        <item>
          <label ref="jr:itext('/data/sistemacomunidade/utilizacaosistemacomunidade:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/sistemacomunidade/utilizacaosistemacomunidade:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/sistemaoutracomunidade:label')"/>
      <input ref="/data/sistemaoutracomunidade/distanciasistemaoutracomunidade">
        <label ref="jr:itext('/data/sistemaoutracomunidade/distanciasistemaoutracomunidade:label')"/>
      </input>
      <select1 ref="/data/sistemaoutracomunidade/medida">
        <label ref="jr:itext('/data/sistemaoutracomunidade/medida:label')"/>
        <hint ref="jr:itext('/data/sistemaoutracomunidade/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/sistemaoutracomunidade/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/sistemaoutracomunidade/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/sistemaoutracomunidade/utilizacaosistemaoutracomunidade">
        <label ref="jr:itext('/data/sistemaoutracomunidade/utilizacaosistemaoutracomunidade:label')"/>
        <item>
          <label ref="jr:itext('/data/sistemaoutracomunidade/utilizacaosistemaoutracomunidade:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/sistemaoutracomunidade/utilizacaosistemaoutracomunidade:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/cisternaproducao:label')"/>
      <input ref="/data/cisternaproducao/distanciacisternaproducao">
        <label ref="jr:itext('/data/cisternaproducao/distanciacisternaproducao:label')"/>
      </input>
      <select1 ref="/data/cisternaproducao/medida">
        <label ref="jr:itext('/data/cisternaproducao/medida:label')"/>
        <hint ref="jr:itext('/data/cisternaproducao/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/cisternaproducao/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/cisternaproducao/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/cisternaproducao/utilizacaocisternaproducao">
        <label ref="jr:itext('/data/cisternaproducao/utilizacaocisternaproducao:label')"/>
        <item>
          <label ref="jr:itext('/data/cisternaproducao/utilizacaocisternaproducao:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/cisternaproducao/utilizacaocisternaproducao:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/cisternaoutracomunidade:label')"/>
      <input ref="/data/cisternaoutracomunidade/distanciacisternaoutracomunidade">
        <label ref="jr:itext('/data/cisternaoutracomunidade/distanciacisternaoutracomunidade:label')"/>
      </input>
      <select1 ref="/data/cisternaoutracomunidade/medida">
        <label ref="jr:itext('/data/cisternaoutracomunidade/medida:label')"/>
        <hint ref="jr:itext('/data/cisternaoutracomunidade/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/cisternaoutracomunidade/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/cisternaoutracomunidade/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/cisternaoutracomunidade/utilizacaocisternaoutracomunidade">
        <label ref="jr:itext('/data/cisternaoutracomunidade/utilizacaocisternaoutracomunidade:label')"/>
        <item>
          <label ref="jr:itext('/data/cisternaoutracomunidade/utilizacaocisternaoutracomunidade:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/cisternaoutracomunidade/utilizacaocisternaoutracomunidade:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/sistemacoletivo:label')"/>
      <input ref="/data/sistemacoletivo/distanciasistemacoletivo">
        <label ref="jr:itext('/data/sistemacoletivo/distanciasistemacoletivo:label')"/>
      </input>
      <select1 ref="/data/sistemacoletivo/medida">
        <label ref="jr:itext('/data/sistemacoletivo/medida:label')"/>
        <hint ref="jr:itext('/data/sistemacoletivo/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/sistemacoletivo/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/sistemacoletivo/medida:option1')"/>
          <value>km</value>
        </item>
      </select1>
      <select ref="/data/sistemacoletivo/utilizacaosistemacoletivo">
        <label ref="jr:itext('/data/sistemacoletivo/utilizacaosistemacoletivo:label')"/>
        <item>
          <label ref="jr:itext('/data/sistemacoletivo/utilizacaosistemacoletivo:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/sistemacoletivo/utilizacaosistemacoletivo:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/barreiro:label')"/>
      <input ref="/data/barreiro/distanciabarreiro">
        <label ref="jr:itext('/data/barreiro/distanciabarreiro:label')"/>
      </input>
      <select1 ref="/data/barreiro/medida">
        <label ref="jr:itext('/data/barreiro/medida:label')"/>
        <hint ref="jr:itext('/data/barreiro/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/barreiro/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/barreiro/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/barreiro/utilizacaobarreiro">
        <label ref="jr:itext('/data/barreiro/utilizacaobarreiro:label')"/>
        <item>
          <label ref="jr:itext('/data/barreiro/utilizacaobarreiro:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/barreiro/utilizacaobarreiro:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/nascentes:label')"/>
      <input ref="/data/nascentes/distancianascentes">
        <label ref="jr:itext('/data/nascentes/distancianascentes:label')"/>
      </input>
      <select1 ref="/data/nascentes/medida">
        <label ref="jr:itext('/data/nascentes/medida:label')"/>
        <hint ref="jr:itext('/data/nascentes/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/nascentes/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/nascentes/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/nascentes/utilizacaonascentes">
        <label ref="jr:itext('/data/nascentes/utilizacaonascentes:label')"/>
        <item>
          <label ref="jr:itext('/data/nascentes/utilizacaonascentes:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/nascentes/utilizacaonascentes:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/acudes:label')"/>
      <input ref="/data/acudes/distanciaacudes">
        <label ref="jr:itext('/data/acudes/distanciaacudes:label')"/>
      </input>
      <select1 ref="/data/acudes/medida">
        <label ref="jr:itext('/data/acudes/medida:label')"/>
        <hint ref="jr:itext('/data/acudes/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/acudes/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/acudes/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/acudes/utilizacaoacudes">
        <label ref="jr:itext('/data/acudes/utilizacaoacudes:label')"/>
        <item>
          <label ref="jr:itext('/data/acudes/utilizacaoacudes:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/acudes/utilizacaoacudes:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/kitsirrigacao:label')"/>
      <input ref="/data/kitsirrigacao/distanciakits">
        <label ref="jr:itext('/data/kitsirrigacao/distanciakits:label')"/>
      </input>
      <select1 ref="/data/kitsirrigacao/medida">
        <label ref="jr:itext('/data/kitsirrigacao/medida:label')"/>
        <hint ref="jr:itext('/data/kitsirrigacao/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/kitsirrigacao/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/kitsirrigacao/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/kitsirrigacao/utilizacaokits">
        <label ref="jr:itext('/data/kitsirrigacao/utilizacaokits:label')"/>
        <item>
          <label ref="jr:itext('/data/kitsirrigacao/utilizacaokits:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/kitsirrigacao/utilizacaokits:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/carropipa:label')"/>
      <input ref="/data/carropipa/distanciacarropipa">
        <label ref="jr:itext('/data/carropipa/distanciacarropipa:label')"/>
      </input>
      <select1 ref="/data/carropipa/medida">
        <label ref="jr:itext('/data/carropipa/medida:label')"/>
        <hint ref="jr:itext('/data/carropipa/medida:hint')"/>
        <item>
          <label ref="jr:itext('/data/carropipa/medida:option0')"/>
          <value>km</value>
        </item>
        <item>
          <label ref="jr:itext('/data/carropipa/medida:option1')"/>
          <value>m</value>
        </item>
      </select1>
      <select ref="/data/carropipa/utilizacaocarropipa">
        <label ref="jr:itext('/data/carropipa/utilizacaocarropipa:label')"/>
        <item>
          <label ref="jr:itext('/data/carropipa/utilizacaocarropipa:option0')"/>
          <value>beber</value>
        </item>
        <item>
          <label ref="jr:itext('/data/carropipa/utilizacaocarropipa:option1')"/>
          <value>agricultura</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/tratamentoagua:label')"/>
      <select1 ref="/data/tratamentoagua/aguatratada">
        <label ref="jr:itext('/data/tratamentoagua/aguatratada:label')"/>
        <item>
          <label ref="jr:itext('/data/tratamentoagua/aguatratada:option0')"/>
          <value>sim</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tratamentoagua/aguatratada:option1')"/>
          <value>nao</value>
        </item>
      </select1>
    </group>
    <select ref="/data/formatratamento">
      <label ref="jr:itext('/data/formatratamento:label')"/>
      <hint ref="jr:itext('/data/formatratamento:hint')"/>
      <item>
        <label ref="jr:itext('/data/formatratamento:option0')"/>
        <value>fervida</value>
      </item>
      <item>
        <label ref="jr:itext('/data/formatratamento:option1')"/>
        <value>clorada</value>
      </item>
      <item>
        <label ref="jr:itext('/data/formatratamento:option2')"/>
        <value>filtrada</value>
      </item>
      <item>
        <label ref="jr:itext('/data/formatratamento:option3')"/>
        <value>coada</value>
      </item>
    </select>
    <group appearance="field-list">
      <label ref="jr:itext('/data/dadosprodutivos:label')"/>
      <select1 ref="/data/dadosprodutivos/dadospropriedade">
        <label ref="jr:itext('/data/dadosprodutivos/dadospropriedade:label')"/>
        <item>
          <label ref="jr:itext('/data/dadosprodutivos/dadospropriedade:option0')"/>
          <value>comescritura</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosprodutivos/dadospropriedade:option1')"/>
          <value>semescritura</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosprodutivos/dadospropriedade:option2')"/>
          <value>comodato</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosprodutivos/dadospropriedade:option3')"/>
          <value>meeiro</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosprodutivos/dadospropriedade:option4')"/>
          <value>cedido</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosprodutivos/dadospropriedade:option5')"/>
          <value>arrendado</value>
        </item>
        <item>
          <label ref="jr:itext('/data/dadosprodutivos/dadospropriedade:option6')"/>
          <value>outros</value>
        </item>
      </select1>
    </group>
    <input ref="/data/descrevaoutros">
      <label ref="jr:itext('/data/descrevaoutros:label')"/>
    </input>
    <group appearance="field-list">
      <label ref="jr:itext('/data/maodeobra:label')"/>
      <select ref="/data/maodeobra/tipomaodeobra">
        <label ref="jr:itext('/data/maodeobra/tipomaodeobra:label')"/>
        <hint ref="jr:itext('/data/maodeobra/tipomaodeobra:hint')"/>
        <item>
          <label ref="jr:itext('/data/maodeobra/tipomaodeobra:option0')"/>
          <value>familiar</value>
        </item>
        <item>
          <label ref="jr:itext('/data/maodeobra/tipomaodeobra:option1')"/>
          <value>contratada</value>
        </item>
      </select>
      <input ref="/data/maodeobra/pessoasfamilia">
        <label ref="jr:itext('/data/maodeobra/pessoasfamilia:label')"/>
      </input>
      <input ref="/data/maodeobra/pessoascontratadas">
        <label ref="jr:itext('/data/maodeobra/pessoascontratadas:label')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/area:label')"/>
      <input ref="/data/area/areatotal">
        <label ref="jr:itext('/data/area/areatotal:label')"/>
      </input>
      <input ref="/data/area/areaproducao">
        <label ref="jr:itext('/data/area/areaproducao:label')"/>
        <hint ref="jr:itext('/data/area/areaproducao:hint')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/tipoatividade:label')"/>
      <select ref="/data/tipoatividade/assinaletipoatividade">
        <label ref="jr:itext('/data/tipoatividade/assinaletipoatividade:label')"/>
        <hint ref="jr:itext('/data/tipoatividade/assinaletipoatividade:hint')"/>
        <item>
          <label ref="jr:itext('/data/tipoatividade/assinaletipoatividade:option0')"/>
          <value>naoproduz</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tipoatividade/assinaletipoatividade:option1')"/>
          <value>hortalicas</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tipoatividade/assinaletipoatividade:option2')"/>
          <value>mel</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tipoatividade/assinaletipoatividade:option3')"/>
          <value>frutas</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tipoatividade/assinaletipoatividade:option4')"/>
          <value>agricultura20</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tipoatividade/assinaletipoatividade:option5')"/>
          <value>agroindustria</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tipoatividade/assinaletipoatividade:option6')"/>
          <value>artesanato</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tipoatividade/assinaletipoatividade:option7')"/>
          <value>aves</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tipoatividade/assinaletipoatividade:option8')"/>
          <value>suinos</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tipoatividade/assinaletipoatividade:option9')"/>
          <value>bovinos</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tipoatividade/assinaletipoatividade:option10')"/>
          <value>pesca</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tipoatividade/assinaletipoatividade:option11')"/>
          <value>ovinos</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tipoatividade/assinaletipoatividade:option12')"/>
          <value>caprinos</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tipoatividade/assinaletipoatividade:option13')"/>
          <value>outraatividade</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/frutas:label')"/>
      <input ref="/data/frutas/tiposdefruta">
        <label ref="jr:itext('/data/frutas/tiposdefruta:label')"/>
        <hint ref="jr:itext('/data/frutas/tiposdefruta:hint')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/agricultura:label')"/>
      <input ref="/data/agricultura/tipoagricultura">
        <label ref="jr:itext('/data/agricultura/tipoagricultura:label')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/agroindustria:label')"/>
      <input ref="/data/agroindustria/tipoagroindustria">
        <label ref="jr:itext('/data/agroindustria/tipoagroindustria:label')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/artesanato:label')"/>
      <input ref="/data/artesanato/tipoartesanato">
        <label ref="jr:itext('/data/artesanato/tipoartesanato:label')"/>
        <hint ref="jr:itext('/data/artesanato/tipoartesanato:hint')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/outraatividade:label')"/>
      <input ref="/data/outraatividade/outrotipo">
        <label ref="jr:itext('/data/outraatividade/outrotipo:label')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/agriculturafinalidade:label')"/>
      <select ref="/data/agriculturafinalidade/finalidadeagricultura">
        <label ref="jr:itext('/data/agriculturafinalidade/finalidadeagricultura:label')"/>
        <item>
          <label ref="jr:itext('/data/agriculturafinalidade/finalidadeagricultura:option0')"/>
          <value>venda</value>
        </item>
        <item>
          <label ref="jr:itext('/data/agriculturafinalidade/finalidadeagricultura:option1')"/>
          <value>consumo proprio</value>
        </item>
      </select>
      <input ref="/data/agriculturafinalidade/areavenda">
        <label ref="jr:itext('/data/agriculturafinalidade/areavenda:label')"/>
      </input>
      <input ref="/data/agriculturafinalidade/areaconsumo">
        <label ref="jr:itext('/data/agriculturafinalidade/areaconsumo:label')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/tiposirrigacao:label')"/>
      <select ref="/data/tiposirrigacao/tiposdeirrigacao">
        <label ref="jr:itext('/data/tiposirrigacao/tiposdeirrigacao:label')"/>
        <item>
          <label ref="jr:itext('/data/tiposirrigacao/tiposdeirrigacao:option0')"/>
          <value>naohairrigacao</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tiposirrigacao/tiposdeirrigacao:option1')"/>
          <value>kitsirrigacao3</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tiposirrigacao/tiposdeirrigacao:option2')"/>
          <value>aspersao</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tiposirrigacao/tiposdeirrigacao:option3')"/>
          <value>sulco</value>
        </item>
        <item>
          <label ref="jr:itext('/data/tiposirrigacao/tiposdeirrigacao:option4')"/>
          <value>gotejamento</value>
        </item>
      </select>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/criacaoanimais:label')"/>
      <select1 ref="/data/criacaoanimais/criacaodeanimais">
        <label ref="jr:itext('/data/criacaoanimais/criacaodeanimais:label')"/>
        <item>
          <label ref="jr:itext('/data/criacaoanimais/criacaodeanimais:option0')"/>
          <value>sim</value>
        </item>
        <item>
          <label ref="jr:itext('/data/criacaoanimais/criacaodeanimais:option1')"/>
          <value>nao</value>
        </item>
      </select1>
      <input ref="/data/criacaoanimais/quaisanimais">
        <label ref="jr:itext('/data/criacaoanimais/quaisanimais:label')"/>
      </input>
      <select ref="/data/criacaoanimais/finalidadeanimais">
        <label ref="jr:itext('/data/criacaoanimais/finalidadeanimais:label')"/>
        <item>
          <label ref="jr:itext('/data/criacaoanimais/finalidadeanimais:option0')"/>
          <value>venda</value>
        </item>
        <item>
          <label ref="jr:itext('/data/criacaoanimais/finalidadeanimais:option1')"/>
          <value>consumo</value>
        </item>
      </select>
      <input ref="/data/criacaoanimais/areavenda">
        <label ref="jr:itext('/data/criacaoanimais/areavenda:label')"/>
      </input>
      <input ref="/data/criacaoanimais/areaconsumo">
        <label ref="jr:itext('/data/criacaoanimais/areaconsumo:label')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/daassistencia:label')"/>
      <select1 ref="/data/daassistencia/assistencia">
        <label ref="jr:itext('/data/daassistencia/assistencia:label')"/>
        <item>
          <label ref="jr:itext('/data/daassistencia/assistencia:option0')"/>
          <value>sim</value>
        </item>
        <item>
          <label ref="jr:itext('/data/daassistencia/assistencia:option1')"/>
          <value>nao</value>
        </item>
      </select1>
    </group>
    <select ref="/data/origemassistencia">
      <label ref="jr:itext('/data/origemassistencia:label')"/>
      <item>
        <label ref="jr:itext('/data/origemassistencia:option0')"/>
        <value>municipal</value>
      </item>
      <item>
        <label ref="jr:itext('/data/origemassistencia:option1')"/>
        <value>estadual</value>
      </item>
      <item>
        <label ref="jr:itext('/data/origemassistencia:option2')"/>
        <value>federal</value>
      </item>
      <item>
        <label ref="jr:itext('/data/origemassistencia:option3')"/>
        <value>sociedadecivil</value>
      </item>
    </select>
    <upload ref="/data/fotoassinatura" mediatype="image/*">
      <label ref="jr:itext('/data/fotoassinatura:label')"/>
    </upload>
    <input ref="/data/pesquisa">
      <label ref="jr:itext('/data/pesquisa:label')"/>
    </input>
  </h:body>
</h:html>
