<?php
    
    require_once '../includes/configxml.php';
    
    $idPesquisador = $_REQUEST['idPesquisador'];
    
     if(isset($idPesquisador)) {
                $sql = 'select * from pesquisador where idPesquisador = ' . $idPesquisador;
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
    }
     
 ?>
<h:html xmlns="http://www.w3.org/2002/xforms" xmlns:h="http://www.w3.org/1999/xhtml" xmlns:ev="http://www.w3.org/2001/xml-events" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:jr="http://openrosa.org/javarosa">
  <h:head>
    <h:title>Cadastro Familia</h:title>
    <model>
      <instance>
        <data id="build_Cadastro-Familia_1356983282">
          <meta>
            <instanceID/>
          </meta>
          <responsavel>
            <nomeresponsavel>
            <?=$row['nmPesquisador']?>
            </nomeresponsavel>
            <cpf>
            <?=$row['CPF']?>
            </cpf>
          </responsavel>
          <principal>
            <uf/>
            <nomemunicipio/>
            <codigoibge/>
            <comunidade/>
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
          <dadosdoentrevistado>
            <dadosentrevistado/>
            <grauparentesco/>
            <nomeentrevistado/>
            <cpfentrevistado/>
            <rgentrevistado/>
          </dadosdoentrevistado>
          <dadosconjuge>
            <nomeconjuge/>
            <cpfconjuge/>
            <rgconjuge/>
          </dadosconjuge>
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
            <utilizacaopoco/>
          </poco>
          <pocosubsuperficial>
            <distanciapocosuperficial/>
            <utilizacaopocusuperficial/>
          </pocosubsuperficial>
          <corrego>
            <distanciacorrego/>
            <utilizacaocorrego/>
          </corrego>
          <rioriacho>
            <distanciario/>
            <utilizacaorio/>
          </rioriacho>
          <tanques>
            <distanciatanques/>
            <utilizacaotanques/>
          </tanques>
          <lagoa>
            <distancialagoa/>
            <utilizacaolagoa/>
          </lagoa>
          <sistemaaducao>
            <distanciasistemaaducao/>
            <utilizacaosistemadeaducao/>
          </sistemaaducao>
          <cisternaconsumohumano>
            <distanciacicternaconsumo/>
            <utilizacaocisternaconsumo/>
          </cisternaconsumohumano>
          <cisternadeterceiros>
            <distanciacisternadeterceiros/>
            <utilizacaocisternadeterceiros/>
          </cisternadeterceiros>
          <sistemacomunidade>
            <distanciasistemacomunidade/>
            <utilizacaosistemacomunidade/>
          </sistemacomunidade>
          <sistemaoutracomunidade>
            <distanciasistemaoutracomunidade/>
            <utilizacaosistemaoutracomunidade/>
          </sistemaoutracomunidade>
          <cisternaproducao>
            <distanciacisternaproducao/>
            <utilizacaocisternaproducao/>
          </cisternaproducao>
          <cisternaoutracomunidade>
            <distanciacisternaoutracomunidade/>
            <utilizacaocisternaoutracomunidade/>
          </cisternaoutracomunidade>
          <sistemacoletivo>
            <distanciasistemacoletivo/>
            <utilizacaosistemacoletivo/>
          </sistemacoletivo>
          <barreiro>
            <distanciabarreiro/>
            <utilizacaobarreiro/>
          </barreiro>
          <nascentes>
            <distancianascentes/>
            <utilizacaonascentes/>
          </nascentes>
          <acudes>
            <distanciaacudes/>
            <utilizacaoacudes/>
          </acudes>
          <kitsirrigacao>
            <distanciakits/>
            <utilizacaokits/>
          </kitsirrigacao>
          <carropipa>
            <distanciacarropipa/>
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
          <criacaodeanimais/>
          <criacaoanimais>
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
        </data>
      </instance>
      <itext>
        <translation lang="eng">
          <text id="/data/responsavel:label">
            <value>
              Responsavel
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
              Código do Municipio no IBGE
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
          <text id="/data/dadosendereco:label">
            <value>
              Endereco
            </value>
          </text>
          <text id="/data/dadosendereco/endereco:label">
            <value>
              Endereco
            </value>
          </text>
          <text id="/data/dadosendereco/endereco:hint">
            <value>
              Digite o endereco completo (Rua/Avenida/Estrada)
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
              Digite o CEP ou Codigo Postal
            </value>
          </text>
          <text id="/data/dadosendereco/referencia:label">
            <value>
              Local de Referencia
            </value>
          </text>
          <text id="/data/dadosendereco/referencia:hint">
            <value>
              Digite um local ou ponto de referencIa (Exemplo: travessa da Avenida X ou proximo a escola ABC)
            </value>
          </text>
          <text id="/data/dadosendereco/telefone:label">
            <value>
              Telefone Principal da Familia
            </value>
          </text>
          <text id="/data/dadosendereco/telefone:hint">
            <value>
              Digite o numero do telefone com o DDD
            </value>
          </text>
          <text id="/data/complementoprincipal:label">
            <value>
              Complemento
            </value>
          </text>
          <text id="/data/complementoprincipal/distanciasede:label">
            <value>
              Distancia da Sede do Municipio em Km
            </value>
          </text>
          <text id="/data/complementoprincipal/viasdeacesso:label">
            <value>
              Vias de Acesso a Casa
            </value>
          </text>
          <text id="/data/complementoprincipal/viasdeacesso:hint">
            <value>
              Assinale as alternativas cabiveis
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
              Transitavel durante o ano todo?
            </value>
          </text>
          <text id="/data/complementoprincipal/transitavelanotodo:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/complementoprincipal/transitavelanotodo:option1">
            <value>
              Nao
            </value>
          </text>
          <text id="/data/coordenadageografica:label">
            <value>
              Capturar Localizacao
            </value>
          </text>
          <text id="/data/coordenadageografica:hint">
            <value>
              Ativar GPS do Tablet
            </value>
          </text>
          <text id="/data/quemeoentrevistado:label">
            <value>
              Entrevistado X Responsavel
            </value>
          </text>
          <text id="/data/quemeoentrevistado/entrevistadoeresponsavel:label">
            <value>
              O entrevistado e o responsavel pela unidade familiar (titular do NIS)?
            </value>
          </text>
          <text id="/data/quemeoentrevistado/entrevistadoeresponsavel:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/quemeoentrevistado/entrevistadoeresponsavel:option1">
            <value>
              Nao
            </value>
          </text>
          <text id="/data/responsavelunidadefamiliar:label">
            <value>
              Responsavel pela Unidade Familiar - Titular do NIS (Maior de 16 anos, preferencialmente mulher. Obrigatorio preencher todos os dados, mesmo se o titular estiver ausente - neste caso, os dados do entrevistado tambem devem ser preenchidos.)
            </value>
          </text>
          <text id="/data/responsavelunidadefamiliar/nomedoresponsavel:label">
            <value>
              Nome Completo do Responsavel pela Unidade Familiar (Beneficiario Titular do NIS)
            </value>
          </text>
          <text id="/data/responsavelunidadefamiliar/sexoresponsavel:label">
            <value>
              Sexo do Responsavel pela Unidade Familiar
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
              Data de Nascimento do Responsavel
            </value>
          </text>
          <text id="/data/responsavelunidadefamiliar/cpfresponsavel:label">
            <value>
              CPF do Responsavel
            </value>
          </text>
          <text id="/data/responsavelunidadefamiliar/rgresponsavel:label">
            <value>
              RG do Responsavel
            </value>
          </text>
          <text id="/data/responsavelunidadefamiliar/Orgao:label">
            <value>
              Orgao de Expedicao
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
          <text id="/data/dadosdoentrevistado:label">
            <value>
              Dados do Entrevistado (se nao for o titular do NIS)
            </value>
          </text>
          <text id="/data/dadosdoentrevistado/dadosentrevistado:label">
            <value>
              Caracterizar o Entrevistado (apenas no caso de nao ser o titular do NIS)
            </value>
          </text>
          <text id="/data/dadosdoentrevistado/dadosentrevistado:option0">
            <value>
              Responsavel pela familia
            </value>
          </text>
          <text id="/data/dadosdoentrevistado/dadosentrevistado:option1">
            <value>
              Conjuge do responsavel pela familia
            </value>
          </text>
          <text id="/data/dadosdoentrevistado/dadosentrevistado:option2">
            <value>
              Outro membro da familia
            </value>
          </text>
          <text id="/data/dadosdoentrevistado/grauparentesco:label">
            <value>
              Grau de Parentesco em Relacao ao Responsavel
            </value>
          </text>
          <text id="/data/dadosdoentrevistado/grauparentesco:hint">
            <value>
              Exemplo: Pai do Responsavel, Mae, Tio, Tia, etc
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
          <text id="/data/dadosconjuge:label">
            <value>
              Dados do Conjuge do Responsavel ou do Entrevistado
            </value>
          </text>
          <text id="/data/dadosconjuge/nomeconjuge:label">
            <value>
              Nome do Conjuge
            </value>
          </text>
          <text id="/data/dadosconjuge/nomeconjuge:hint">
            <value>
              Digite o nome do conjuge, no caso do responsavel ser casado ou possuir uniao estavel.
            </value>
          </text>
          <text id="/data/dadosconjuge/cpfconjuge:label">
            <value>
              CPF do Conjuge
            </value>
          </text>
          <text id="/data/dadosconjuge/rgconjuge:label">
            <value>
              RG do Conjuge
            </value>
          </text>
          <text id="/data/composicaogrupofamiliar:label">
            <value>
              Composicao do Grupo Familiar (preencher de 01 a 20 filhos)
            </value>
          </text>
          <text id="/data/composicaogrupofamiliar/totalfilhos:label">
            <value>
              Total de filhos que moram na mesma residencia (independente da idade):
            </value>
          </text>
          <text id="/data/composicaogrupofamiliar/criancasate06anos:label">
            <value>
              Numero de criancas com idade ate 06 anos:
            </value>
          </text>
          <text id="/data/composicaogrupofamiliar/criancasnaescola:label">
            <value>
              Numero de criancas ou jovens na escola:
            </value>
          </text>
          <text id="/data/composicaogrupofamiliar/idosos:label">
            <value>
              Numero de idosos (com idade acima de 65 anos):
            </value>
          </text>
          <text id="/data/composicaogrupofamiliar/deficiencia:label">
            <value>
              Numero de pessoas com deficiencia:
            </value>
          </text>
          <text id="/data/dadosresidencia:label">
            <value>
              Dados da Residencia
            </value>
          </text>
          <text id="/data/dadosresidencia/cobertura:label">
            <value>
              Marque o tipo de cobertura da residencia:
            </value>
          </text>
          <text id="/data/dadosresidencia/cobertura:option0">
            <value>
              Telha (ceramica, amianto, PVC, cimento, etc)
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
              Caso a residencia seja atendida por uma cisterna, qual a situacao da cobertura?
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
              Necessita substituicao de telhas
            </value>
          </text>
          <text id="/data/dadosresidencia/situacaocobertura:option3">
            <value>
              Totalmente Inadequada
            </value>
          </text>
          <text id="/data/dadosresidencia/situacaocobertura:option4">
            <value>
              Ainda nao e atendida por cisterna
            </value>
          </text>
          <text id="/data/dadosresidencia/cisterna:label">
            <value>
              Caso a residencia ainda nao seja atendida por uma cisterna, descreva a seguir de onde a agua vem:
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
              Nao
            </value>
          </text>
          <text id="/data/dadosenergia:label">
            <value>
              Dados Energia
            </value>
          </text>
          <text id="/data/dadosenergia/tiposenergia:label">
            <value>
              Assinale qual o tipo de energia utilizada.
            </value>
          </text>
          <text id="/data/dadosenergia/tiposenergia:option0">
            <value>
              Solar
            </value>
          </text>
          <text id="/data/dadosenergia/tiposenergia:option1">
            <value>
              Eolica
            </value>
          </text>
          <text id="/data/dadosenergia/tiposenergia:option2">
            <value>
              Diesel
            </value>
          </text>
          <text id="/data/dadosenergia/tiposenergia:option3">
            <value>
              Eletrica
            </value>
          </text>
          <text id="/data/dadosenergia/tiposenergia:option4">
            <value>
              Outros
            </value>
          </text>
          <text id="/data/dadosenergia/tipoenergia:label">
            <value>
              Se a resposta anterior foi &quot;outros&quot;, descreva a seguir qual e o tipo de energia utilizada na residencia.
            </value>
          </text>
          <text id="/data/esgoto:label">
            <value>
              Banheiro e Esgotamento Sanitario
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
              Nao
            </value>
          </text>
          <text id="/data/esgoto/esgotamentosanitario:label">
            <value>
              Possui esgotamento sanitario?
            </value>
          </text>
          <text id="/data/esgoto/esgotamentosanitario:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/esgoto/esgotamentosanitario:option1">
            <value>
              Nao
            </value>
          </text>
          <text id="/data/tipoesgotamento:label">
            <value>
              Assinale o tipo de esgotamento sanitario:
            </value>
          </text>
          <text id="/data/tipoesgotamento:option0">
            <value>
              Fossa comum
            </value>
          </text>
          <text id="/data/tipoesgotamento:option1">
            <value>
              Fossa septica
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
              Caso tenha assinalado a opcao &quot;outros&quot; na questao anterior, descreva a seguir qual e o tipo de esgotamento sanitario da residencia.
            </value>
          </text>
          <text id="/data/destinolixo:label">
            <value>
              Qual e o destino do lixo da residencia?
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
              Dados Socioeconomicos
            </value>
          </text>
          <text id="/data/dadossocioeconomicos/beneficiossociais:label">
            <value>
              O responsavel pela unidade familiar recebe algum tipo de beneficio financeiro de programas sociais?
            </value>
          </text>
          <text id="/data/dadossocioeconomicos/beneficiossociais:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/dadossocioeconomicos/beneficiossociais:option1">
            <value>
              Nao
            </value>
          </text>
          <text id="/data/tipobeneficio:label">
            <value>
              Assinale qual (ou quais).
            </value>
          </text>
          <text id="/data/tipobeneficio:option0">
            <value>
              BPC (Beneficio de Prestacao Continuada - Idosos e Pessoas com Deficiencia)
            </value>
          </text>
          <text id="/data/tipobeneficio:option1">
            <value>
              Bolsa Familia
            </value>
          </text>
          <text id="/data/tipobeneficio:option2">
            <value>
              PRONAF
            </value>
          </text>
          <text id="/data/tipobeneficio:option3">
            <value>
              Fomento a terra
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
              Caso tenha marcado &quot;outros&quot; na questao anterior, descreva qual.
            </value>
          </text>
          <text id="/data/outrobeneficio:constraintMsg">
            <value>
              Caso tenha marcado &quot;outros&quot; na questao anterior, descreva qual.
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos:label">
            <value>
              Dados Socioeconomicos II
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/ocupacao:label">
            <value>
              Ocupacao do responsavel pela unidade familiar:
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/ocupacao:hint">
            <value>
              E possivel selecionar mais de uma opcao
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/ocupacao:option0">
            <value>
              Agricultor
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/ocupacao:option1">
            <value>
              Autonomo
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
              Servidor Publico
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/ocupacao:option6">
            <value>
              Empregado Publico
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/ocupacao:option7">
            <value>
              Nao possui
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/periodorenda:label">
            <value>
              Periodo de renda:
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
              Diaria
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/valorrenda:label">
            <value>
              Qual e o valor mensal da renda familiar em R$?
            </value>
          </text>
          <text id="/data/outrosdadossocioeconomicos/totalpessoas:label">
            <value>
              Total de pessoas que moram na residencia (titular do NIS + conjuge + filhos + parentes + outros):
            </value>
          </text>
          <text id="/data/acessoeusodaagua:label">
            <value>
              Dados de Acesso e Uso da Agua
            </value>
          </text>
          <text id="/data/acessoeusodaagua/acessoagua:label">
            <value>
              A residencia possui acesso a agua?
            </value>
          </text>
          <text id="/data/acessoeusodaagua/acessoagua:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/acessoeusodaagua/acessoagua:option1">
            <value>
              Nao
            </value>
          </text>
          <text id="/data/tiposdefonte:label">
            <value>
              Especifique o(s) tipo(s) de fonte.
            </value>
          </text>
          <text id="/data/tiposdefonte:hint">
            <value>
              Selecionar todos os tipos de fonte de agua que a familia utiliza.
            </value>
          </text>
          <text id="/data/tiposdefonte:option0">
            <value>
              Poco
            </value>
          </text>
          <text id="/data/tiposdefonte:option1">
            <value>
              Poco Sub-superficial
            </value>
          </text>
          <text id="/data/tiposdefonte:option2">
            <value>
              Corrego
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
              Sistema de aducao
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
              Sistema de abastecimento na propria comunidade
            </value>
          </text>
          <text id="/data/tiposdefonte:option10">
            <value>
              Sistema de abastecimento em outra comunidade
            </value>
          </text>
          <text id="/data/tiposdefonte:option11">
            <value>
              Cisterna de producao na propria comunidade
            </value>
          </text>
          <text id="/data/tiposdefonte:option12">
            <value>
              Cisterna de producao em outra comunidade
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
              Acudes
            </value>
          </text>
          <text id="/data/tiposdefonte:option17">
            <value>
              Kits de Irrigacao
            </value>
          </text>
          <text id="/data/tiposdefonte:option18">
            <value>
              Carro Pipa
            </value>
          </text>
          <text id="/data/poco:label">
            <value>
              Poco
            </value>
          </text>
          <text id="/data/poco/distanciapoco:label">
            <value>
              Qual a distancia percorrida ate o poco para colher agua (em km)?
            </value>
          </text>
          <text id="/data/poco/utilizacaopoco:label">
            <value>
              A agua do poco e utilizada para:
            </value>
          </text>
          <text id="/data/poco/utilizacaopoco:hint">
            <value>
              E possivel assinalar mais de uma alternativa.
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
              Poco Sub-superficial
            </value>
          </text>
          <text id="/data/pocosubsuperficial/distanciapocosuperficial:label">
            <value>
              Qual a distancia percorrida ate o poco sub-superficial para colher agua (em km)?
            </value>
          </text>
          <text id="/data/pocosubsuperficial/utilizacaopocusuperficial:label">
            <value>
              A agua do poco sub-superficial e utilizada para:
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
              Corrego
            </value>
          </text>
          <text id="/data/corrego/distanciacorrego:label">
            <value>
              Qual a distancia percorrida ate o corrego para colher agua (em km)?
            </value>
          </text>
          <text id="/data/corrego/utilizacaocorrego:label">
            <value>
              A agua do corrego e utilizada para:
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
              Qual a distancia percorrida ate o rio ou riacho para colher agua (em km)?
            </value>
          </text>
          <text id="/data/rioriacho/utilizacaorio:label">
            <value>
              A agua do rio ou do riacho e utilizada para:
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
              Qual a distancia percorrida ate o(s) tanque(s) para colher agua (em km)?
            </value>
          </text>
          <text id="/data/tanques/utilizacaotanques:label">
            <value>
              A agua do(s) tanque(s) e utilizada para:
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
              Qual a distancia percorrida ate a lagoa para colher agua (em km)?
            </value>
          </text>
          <text id="/data/lagoa/utilizacaolagoa:label">
            <value>
              A agua da lagoa e utilizada para:
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
              Sistema de Aducao
            </value>
          </text>
          <text id="/data/sistemaaducao/distanciasistemaaducao:label">
            <value>
              Qual a distancia percorrida ate o sistema de aducao para colher agua (em km)?
            </value>
          </text>
          <text id="/data/sistemaaducao/utilizacaosistemadeaducao:label">
            <value>
              A agua do sistema de aducao e utilizada para:
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
              Qual a distancia percorrida ate a cisterna para colher agua (em km)?
            </value>
          </text>
          <text id="/data/cisternaconsumohumano/utilizacaocisternaconsumo:label">
            <value>
              A agua da cisterna e utilizada para:
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
              Qual a distancia percorrida ate a cisterna para colher agua (em km)?
            </value>
          </text>
          <text id="/data/cisternadeterceiros/utilizacaocisternadeterceiros:label">
            <value>
              A agua da cisterna e utilizada para:
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
              Sistema de abastecimento na propria comunidade
            </value>
          </text>
          <text id="/data/sistemacomunidade/distanciasistemacomunidade:label">
            <value>
              Qual a distancia percorrida ate o sistema de abastecimento para colher agua (em km)?
            </value>
          </text>
          <text id="/data/sistemacomunidade/utilizacaosistemacomunidade:label">
            <value>
              A agua do sistema de abastecimento e utilizada para:
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
              Qual a distancia percorrida ate o sistema de abastecimento para colher agua (em km)?
            </value>
          </text>
          <text id="/data/sistemaoutracomunidade/utilizacaosistemaoutracomunidade:label">
            <value>
              A agua do sistema de abastecimento e utilizada para:
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
              Cisterna de producao na propria comunidade
            </value>
          </text>
          <text id="/data/cisternaproducao/distanciacisternaproducao:label">
            <value>
              Qual a distancia percorrida ate a cisterna de producao para colher agua (em km)?
            </value>
          </text>
          <text id="/data/cisternaproducao/utilizacaocisternaproducao:label">
            <value>
              A agua da cisterna e utilizada para:
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
              Cisterna de producao em outra comunidade
            </value>
          </text>
          <text id="/data/cisternaoutracomunidade/distanciacisternaoutracomunidade:label">
            <value>
              Qual a distancia percorrida ate a cisterna de producao da outra comunidade para colher agua (em km)?
            </value>
          </text>
          <text id="/data/cisternaoutracomunidade/utilizacaocisternaoutracomunidade:label">
            <value>
              A agua da cisterna em outra comunidade e utilizada para:
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
              Qual a distancia percorrida ate o sistema coletivo de abastecimento para colher agua (em km)?
            </value>
          </text>
          <text id="/data/sistemacoletivo/utilizacaosistemacoletivo:label">
            <value>
              A agua do sistema coletivo de abastecimento e utilizada para:
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
              Qual a distancia percorrida ate o barreiro para colher agua (em km)?
            </value>
          </text>
          <text id="/data/barreiro/utilizacaobarreiro:label">
            <value>
              A agua do barreiro e utilizada para:
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
              Qual a distancia percorrida ate a(s) nascente(s) para colher agua (em km)?
            </value>
          </text>
          <text id="/data/nascentes/utilizacaonascentes:label">
            <value>
              A agua da(s) nascente(s) e utilizada para:
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
              Acudes
            </value>
          </text>
          <text id="/data/acudes/distanciaacudes:label">
            <value>
              Qual a distancia percorrida ate o(s) acude(s) para colher agua (em km)?
            </value>
          </text>
          <text id="/data/acudes/utilizacaoacudes:label">
            <value>
              A agua do(s) acude(s) e utilizada para:
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
              Kits de Irrigacao
            </value>
          </text>
          <text id="/data/kitsirrigacao/distanciakits:label">
            <value>
              Qual a distancia percorrida ate os kits de irrigacao para colher agua (em km)?
            </value>
          </text>
          <text id="/data/kitsirrigacao/utilizacaokits:label">
            <value>
              A agua do(s) kit(s) de irrigacao e utilizada para:
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
              Carro Pipa
            </value>
          </text>
          <text id="/data/carropipa/distanciacarropipa:label">
            <value>
              Qual a distancia percorrida ate o carro pipa para colher agua (em km)?
            </value>
          </text>
          <text id="/data/carropipa/utilizacaocarropipa:label">
            <value>
              A agua do carro pipa e utilizada para:
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
              Do Tratamento de Agua
            </value>
          </text>
          <text id="/data/tratamentoagua/aguatratada:label">
            <value>
              A agua consumida e tratada?
            </value>
          </text>
          <text id="/data/tratamentoagua/aguatratada:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/tratamentoagua/aguatratada:option1">
            <value>
              Nao
            </value>
          </text>
          <text id="/data/formatratamento:label">
            <value>
              Indique a forma de tratamento.
            </value>
          </text>
          <text id="/data/formatratamento:hint">
            <value>
              E possivel selecionar mais de uma opcao.
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
              Dados Produtivos Basicos
            </value>
          </text>
          <text id="/data/dadosprodutivos/dadospropriedade:label">
            <value>
              Dados da Propriedade:
            </value>
          </text>
          <text id="/data/dadosprodutivos/dadospropriedade:option0">
            <value>
              Proprietario (com escritura)
            </value>
          </text>
          <text id="/data/dadosprodutivos/dadospropriedade:option1">
            <value>
              Proprietario (sem escritura)
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
              Mao de obra
            </value>
          </text>
          <text id="/data/maodeobra/tipomaodeobra:label">
            <value>
              Assinale o tipo de mao de obra utilizada:
            </value>
          </text>
          <text id="/data/maodeobra/tipomaodeobra:hint">
            <value>
              E possivel assinalar mais de uma opcao.
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
              Indique quantas pessoas da familia trabalham na propriedade:
            </value>
          </text>
          <text id="/data/maodeobra/pessoascontratadas:label">
            <value>
              Indique quantas pessoas contratadas trabalham na propriedade:
            </value>
          </text>
          <text id="/data/area:label">
            <value>
              Sobre a Area
            </value>
          </text>
          <text id="/data/area/areatotal:label">
            <value>
              Indique a area total da propriedade (em ha):
            </value>
          </text>
          <text id="/data/area/areaproducao:label">
            <value>
              Indique a area disponivel para producao (em ha):
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
              Assinale o(s) tipo(s) de atividade agricola e/ou pecuaria na propriedade:
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:hint">
            <value>
              E possivel assinalar mais de uma opcao.
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:option0">
            <value>
              Nao produz nada.
            </value>
          </text>
          <text id="/data/tipoatividade/assinaletipoatividade:option1">
            <value>
              Hortalicas
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
              Agroindustria
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
              Suinos
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
              Descreva qual ou quais tipos de fruta sao produzidos na propriedade:
            </value>
          </text>
          <text id="/data/agricultura:label">
            <value>
              Agricultura
            </value>
          </text>
          <text id="/data/agricultura/tipoagricultura:label">
            <value>
              Descreva qual atividade de agricultura da propriedade:
            </value>
          </text>
          <text id="/data/agroindustria:label">
            <value>
              Agroindustria
            </value>
          </text>
          <text id="/data/agroindustria/tipoagroindustria:label">
            <value>
              Descreva qual atividade de agroindustria desenvolvida na propriedade:
            </value>
          </text>
          <text id="/data/artesanato:label">
            <value>
              Artesanato
            </value>
          </text>
          <text id="/data/artesanato/tipoartesanato:label">
            <value>
              Descreva qual atividade de artesanato desenvolvida na propriedade:
            </value>
          </text>
          <text id="/data/outraatividade:label">
            <value>
              Outra atividade
            </value>
          </text>
          <text id="/data/outraatividade/outrotipo:label">
            <value>
              Descreva qual outro tipo de atividade desenvolvida na propriedade:
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
              Consumo proprio
            </value>
          </text>
          <text id="/data/agriculturafinalidade/areavenda:label">
            <value>
              Indique a area (em ha) utilizada para a agricultura destinada para a venda:
            </value>
          </text>
          <text id="/data/agriculturafinalidade/areaconsumo:label">
            <value>
              Indique a area (em ha) utilizada para a agricultura destinada para consumo proprio:
            </value>
          </text>
          <text id="/data/tiposirrigacao:label">
            <value>
              Tipos de Irrigacao
            </value>
          </text>
          <text id="/data/tiposirrigacao/tiposdeirrigacao:label">
            <value>
              Indique abaixo o(s) tipo(s) de irrigacao utilizado(s) na propriedade:
            </value>
          </text>
          <text id="/data/tiposirrigacao/tiposdeirrigacao:option0">
            <value>
              Nao ha irrigacao
            </value>
          </text>
          <text id="/data/tiposirrigacao/tiposdeirrigacao:option1">
            <value>
              Kits de Irrigacao
            </value>
          </text>
          <text id="/data/tiposirrigacao/tiposdeirrigacao:option2">
            <value>
              Aspersao
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
          <text id="/data/criacaodeanimais:label">
            <value>
              Ha criacao de animais na propriedade?
            </value>
          </text>
          <text id="/data/criacaodeanimais:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/criacaodeanimais:option1">
            <value>
              Nao
            </value>
          </text>
          <text id="/data/criacaoanimais:label">
            <value>
              Da Criacao de Animais
            </value>
          </text>
          <text id="/data/criacaoanimais/quaisanimais:label">
            <value>
              Especifique quais animais sao criados na propriedade.
            </value>
          </text>
          <text id="/data/criacaoanimais/finalidadeanimais:label">
            <value>
              Especifique a finalidade da criacao de animais na propriedade.
            </value>
          </text>
          <text id="/data/criacaoanimais/finalidadeanimais:option0">
            <value>
              Venda
            </value>
          </text>
          <text id="/data/criacaoanimais/finalidadeanimais:option1">
            <value>
              Consumo proprio
            </value>
          </text>
          <text id="/data/criacaoanimais/areavenda:label">
            <value>
              Indique a area (em ha) utilizada para a criacao de animais destinada para a venda:
            </value>
          </text>
          <text id="/data/criacaoanimais/areaconsumo:label">
            <value>
              Indique a area (em ha) utilizada para a criacao de animais destinada para o consumo proprio:
            </value>
          </text>
          <text id="/data/daassistencia:label">
            <value>
              Da Assistencia
            </value>
          </text>
          <text id="/data/daassistencia/assistencia:label">
            <value>
              Recebe Assistencia Tecnica e Extensao Rural (ATER)?
            </value>
          </text>
          <text id="/data/daassistencia/assistencia:option0">
            <value>
              Sim
            </value>
          </text>
          <text id="/data/daassistencia/assistencia:option1">
            <value>
              Nao
            </value>
          </text>
          <text id="/data/origemassistencia:label">
            <value>
              Qual a origem?
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
        </translation>
      </itext>
      <bind nodeset="/data/meta/instanceID" type="string" readonly="true()" calculate="concat('uuid:', uuid())"/>
      <bind nodeset="/data/responsavel/nomeresponsavel" type="string" readonly="true()"/>
      <bind nodeset="/data/responsavel/cpf" type="string" readonly="true()"/>
      <bind nodeset="/data/principal/uf" type="string" constraint="(regex(., &quot;^.{2,2}$&quot;))" jr:constraintMsg="Response length must be between 2 and 2"/>
      <bind nodeset="/data/principal/nomemunicipio" type="string"/>
      <bind nodeset="/data/principal/codigoibge" type="int"/>
      <bind nodeset="/data/principal/comunidade" type="string"/>
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
      <bind nodeset="/data/responsavelunidadefamiliar" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'sim'))"/>
      <bind nodeset="/data/responsavelunidadefamiliar/nomedoresponsavel" type="string" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'sim'))"/>
      <bind nodeset="/data/responsavelunidadefamiliar/sexoresponsavel" type="select1" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'sim'))"/>
      <bind nodeset="/data/responsavelunidadefamiliar/datanascimento" type="date" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'sim'))"/>
      <bind nodeset="/data/responsavelunidadefamiliar/cpfresponsavel" type="string" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'sim'))"/>
      <bind nodeset="/data/responsavelunidadefamiliar/rgresponsavel" type="string" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'sim'))"/>
      <bind nodeset="/data/responsavelunidadefamiliar/Orgao" type="string" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'sim'))"/>
      <bind nodeset="/data/responsavelunidadefamiliar/nis" type="string" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'sim'))"/>
      <bind nodeset="/data/dadosdoentrevistado" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'nao'))"/>
      <bind nodeset="/data/dadosdoentrevistado/dadosentrevistado" type="select1" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'nao'))"/>
      <bind nodeset="/data/dadosdoentrevistado/grauparentesco" type="string" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'nao'))"/>
      <bind nodeset="/data/dadosdoentrevistado/nomeentrevistado" type="string" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'nao'))"/>
      <bind nodeset="/data/dadosdoentrevistado/cpfentrevistado" type="string" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'nao'))"/>
      <bind nodeset="/data/dadosdoentrevistado/rgentrevistado" type="string" relevant="(selected(/data/quemeoentrevistado/entrevistadoeresponsavel,'nao'))"/>
      <bind nodeset="/data/dadosconjuge/nomeconjuge" type="string"/>
      <bind nodeset="/data/dadosconjuge/cpfconjuge" type="string"/>
      <bind nodeset="/data/dadosconjuge/rgconjuge" type="string"/>
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
      <bind nodeset="/data/poco/utilizacaopoco" type="select" relevant="(selected(/data/tiposdefonte,'poco'))"/>
      <bind nodeset="/data/pocosubsuperficial" relevant="(selected(/data/tiposdefonte,'pocosubsuperficial'))"/>
      <bind nodeset="/data/pocosubsuperficial/distanciapocosuperficial" type="int" relevant="(selected(/data/tiposdefonte,'pocosubsuperficial'))"/>
      <bind nodeset="/data/pocosubsuperficial/utilizacaopocusuperficial" type="select" relevant="(selected(/data/tiposdefonte,'pocosubsuperficial'))"/>
      <bind nodeset="/data/corrego" relevant="(selected(/data/tiposdefonte,'corrego'))"/>
      <bind nodeset="/data/corrego/distanciacorrego" type="int" relevant="(selected(/data/tiposdefonte,'corrego'))"/>
      <bind nodeset="/data/corrego/utilizacaocorrego" type="select" relevant="(selected(/data/tiposdefonte,'corrego'))"/>
      <bind nodeset="/data/rioriacho" relevant="(selected(/data/tiposdefonte,'rioriacho'))"/>
      <bind nodeset="/data/rioriacho/distanciario" type="int" relevant="(selected(/data/tiposdefonte,'rioriacho'))"/>
      <bind nodeset="/data/rioriacho/utilizacaorio" type="select" relevant="(selected(/data/tiposdefonte,'rioriacho'))"/>
      <bind nodeset="/data/tanques" relevant="(selected(/data/tiposdefonte,'tanques'))"/>
      <bind nodeset="/data/tanques/distanciatanques" type="int" relevant="(selected(/data/tiposdefonte,'tanques'))"/>
      <bind nodeset="/data/tanques/utilizacaotanques" type="select" relevant="(selected(/data/tiposdefonte,'tanques'))"/>
      <bind nodeset="/data/lagoa" relevant="(selected(/data/tiposdefonte,'lagoa'))"/>
      <bind nodeset="/data/lagoa/distancialagoa" type="int" relevant="(selected(/data/tiposdefonte,'lagoa'))"/>
      <bind nodeset="/data/lagoa/utilizacaolagoa" type="select" relevant="(selected(/data/tiposdefonte,'lagoa'))"/>
      <bind nodeset="/data/sistemaaducao" relevant="(selected(/data/tiposdefonte,'sistemaaducao'))"/>
      <bind nodeset="/data/sistemaaducao/distanciasistemaaducao" type="int" relevant="(selected(/data/tiposdefonte,'sistemaaducao'))"/>
      <bind nodeset="/data/sistemaaducao/utilizacaosistemadeaducao" type="select" relevant="(selected(/data/tiposdefonte,'sistemaaducao'))"/>
      <bind nodeset="/data/cisternaconsumohumano" relevant="(selected(/data/tiposdefonte,'cisternaconsumohumano'))"/>
      <bind nodeset="/data/cisternaconsumohumano/distanciacicternaconsumo" type="int" relevant="(selected(/data/tiposdefonte,'cisternaconsumohumano'))"/>
      <bind nodeset="/data/cisternaconsumohumano/utilizacaocisternaconsumo" type="select" relevant="(selected(/data/tiposdefonte,'cisternaconsumohumano'))"/>
      <bind nodeset="/data/cisternadeterceiros" relevant="(selected(/data/tiposdefonte,'cisternadeterceiros'))"/>
      <bind nodeset="/data/cisternadeterceiros/distanciacisternadeterceiros" type="int" relevant="(selected(/data/tiposdefonte,'cisternadeterceiros'))"/>
      <bind nodeset="/data/cisternadeterceiros/utilizacaocisternadeterceiros" type="select" relevant="(selected(/data/tiposdefonte,'cisternadeterceiros'))"/>
      <bind nodeset="/data/sistemacomunidade" relevant="(selected(/data/tiposdefonte,'sistemacomunidade'))"/>
      <bind nodeset="/data/sistemacomunidade/distanciasistemacomunidade" type="int" relevant="(selected(/data/tiposdefonte,'sistemacomunidade'))"/>
      <bind nodeset="/data/sistemacomunidade/utilizacaosistemacomunidade" type="select" relevant="(selected(/data/tiposdefonte,'sistemacomunidade'))"/>
      <bind nodeset="/data/sistemaoutracomunidade" relevant="(selected(/data/tiposdefonte,'sistemaoutracomunidade'))"/>
      <bind nodeset="/data/sistemaoutracomunidade/distanciasistemaoutracomunidade" type="int" relevant="(selected(/data/tiposdefonte,'sistemaoutracomunidade'))"/>
      <bind nodeset="/data/sistemaoutracomunidade/utilizacaosistemaoutracomunidade" type="select" relevant="(selected(/data/tiposdefonte,'sistemaoutracomunidade'))"/>
      <bind nodeset="/data/cisternaproducao" relevant="(selected(/data/tiposdefonte,'cisternaproducao'))"/>
      <bind nodeset="/data/cisternaproducao/distanciacisternaproducao" type="int" relevant="(selected(/data/tiposdefonte,'cisternaproducao'))"/>
      <bind nodeset="/data/cisternaproducao/utilizacaocisternaproducao" type="select" relevant="(selected(/data/tiposdefonte,'cisternaproducao'))"/>
      <bind nodeset="/data/cisternaoutracomunidade" relevant="(selected(/data/tiposdefonte,'cisternaoutracomunidade'))"/>
      <bind nodeset="/data/cisternaoutracomunidade/distanciacisternaoutracomunidade" type="int" relevant="(selected(/data/tiposdefonte,'cisternaoutracomunidade'))"/>
      <bind nodeset="/data/cisternaoutracomunidade/utilizacaocisternaoutracomunidade" type="select" relevant="(selected(/data/tiposdefonte,'cisternaoutracomunidade'))"/>
      <bind nodeset="/data/sistemacoletivo" relevant="(selected(/data/tiposdefonte,'sistemacoletivo'))"/>
      <bind nodeset="/data/sistemacoletivo/distanciasistemacoletivo" type="int" relevant="(selected(/data/tiposdefonte,'sistemacoletivo'))"/>
      <bind nodeset="/data/sistemacoletivo/utilizacaosistemacoletivo" type="select" relevant="(selected(/data/tiposdefonte,'sistemacoletivo'))"/>
      <bind nodeset="/data/barreiro" relevant="(selected(/data/tiposdefonte,'barreiro'))"/>
      <bind nodeset="/data/barreiro/distanciabarreiro" type="int" relevant="(selected(/data/tiposdefonte,'barreiro'))"/>
      <bind nodeset="/data/barreiro/utilizacaobarreiro" type="select" relevant="(selected(/data/tiposdefonte,'barreiro'))"/>
      <bind nodeset="/data/nascentes" relevant="(selected(/data/tiposdefonte,'nascentes'))"/>
      <bind nodeset="/data/nascentes/distancianascentes" type="int" relevant="(selected(/data/tiposdefonte,'nascentes'))"/>
      <bind nodeset="/data/nascentes/utilizacaonascentes" type="select" relevant="(selected(/data/tiposdefonte,'nascentes'))"/>
      <bind nodeset="/data/acudes" relevant="(selected(/data/tiposdefonte,'acudes'))"/>
      <bind nodeset="/data/acudes/distanciaacudes" type="int" relevant="(selected(/data/tiposdefonte,'acudes'))"/>
      <bind nodeset="/data/acudes/utilizacaoacudes" type="select" relevant="(selected(/data/tiposdefonte,'acudes'))"/>
      <bind nodeset="/data/kitsirrigacao" relevant="(selected(/data/tiposdefonte,'kitsirrigacao'))"/>
      <bind nodeset="/data/kitsirrigacao/distanciakits" type="int" relevant="(selected(/data/tiposdefonte,'kitsirrigacao'))"/>
      <bind nodeset="/data/kitsirrigacao/utilizacaokits" type="select" relevant="(selected(/data/tiposdefonte,'kitsirrigacao'))"/>
      <bind nodeset="/data/carropipa" relevant="(selected(/data/tiposdefonte,'carropipa'))"/>
      <bind nodeset="/data/carropipa/distanciacarropipa" type="int" relevant="(selected(/data/tiposdefonte,'carropipa'))"/>
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
      <bind nodeset="/data/criacaodeanimais" type="select1"/>
      <bind nodeset="/data/criacaoanimais" relevant="(selected(/data/criacaodeanimais,'sim'))"/>
      <bind nodeset="/data/criacaoanimais/quaisanimais" type="string" relevant="(selected(/data/criacaodeanimais,'sim'))"/>
      <bind nodeset="/data/criacaoanimais/finalidadeanimais" type="select" relevant="(selected(/data/criacaodeanimais,'sim')) and (selected(/data/criacaoanimais/criacaodeanimais,'sim'))"/>
      <bind nodeset="/data/criacaoanimais/areavenda" type="int" relevant="(selected(/data/criacaodeanimais,'sim')) and (selected(/data/criacaoanimais/finalidadeanimais,'venda'))"/>
      <bind nodeset="/data/criacaoanimais/areaconsumo" type="int" relevant="(selected(/data/criacaodeanimais,'sim')) and (selected(/data/criacaoanimais/finalidadeanimais,'consumo'))"/>
      <bind nodeset="/data/daassistencia/assistencia" type="select1"/>
      <bind nodeset="/data/origemassistencia" type="select" relevant="(selected(/data/daassistencia/assistencia,'sim'))"/>
      <bind nodeset="/data/fotoassinatura" type="binary"/>
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
    <group>
      <label ref="jr:itext('/data/cisternaconsumohumano:label')"/>
      <input ref="/data/cisternaconsumohumano/distanciacicternaconsumo">
        <label ref="jr:itext('/data/cisternaconsumohumano/distanciacicternaconsumo:label')"/>
      </input>
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
    <select1 ref="/data/criacaodeanimais">
      <label ref="jr:itext('/data/criacaodeanimais:label')"/>
      <item>
        <label ref="jr:itext('/data/criacaodeanimais:option0')"/>
        <value>sim</value>
      </item>
      <item>
        <label ref="jr:itext('/data/criacaodeanimais:option1')"/>
        <value>nao</value>
      </item>
    </select1>
    <group appearance="field-list">
      <label ref="jr:itext('/data/criacaoanimais:label')"/>
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
  </h:body>
</h:html>