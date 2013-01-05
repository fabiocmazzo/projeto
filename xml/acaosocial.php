<?php
    
    require_once '../includes/configxml.php';
    
    $idPesquisador = $_REQUEST['idPesquisador'];
    $idComunidade = $_REQUEST['idComunidade'];
    
    if($idPesquisador != "") {
                $sql = 'select * from pesquisador where idPesquisador = ' . $idPesquisador;
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
    }
    

    
  
     
 ?>
<h:html xmlns="http://www.w3.org/2002/xforms" xmlns:h="http://www.w3.org/1999/xhtml" xmlns:ev="http://www.w3.org/2001/xml-events" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:jr="http://openrosa.org/javarosa">
  <h:head>
    <h:title>Acao Social</h:title>
    <model>
      <instance>
        <data id="build_Acao-Social_1357352686">
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
          <acaosocial>
            <nomeacao/>
            <dataacao/>
            <localacao/>
            <capturelocal/>
            <numero/>
          </acaosocial>
          <dadoslider>
            <lider/>
            <endereco/>
            <telefone/>
            <email/>
          </dadoslider>
          <comentarios/>
          <pesquisa>
            acaosocial
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
              Nome do Enrevistador
            </value>
          </text>
          <text id="/data/responsavel/cpf:label">
            <value>
              CPF
            </value>
          </text>
          <text id="/data/acaosocial:label">
            <value>
              Ação Social
            </value>
          </text>
          <text id="/data/acaosocial/nomeacao:label">
            <value>
              Nome da Ação Social
            </value>
          </text>
          <text id="/data/acaosocial/dataacao:label">
            <value>
              Data da Ação
            </value>
          </text>
          <text id="/data/acaosocial/localacao:label">
            <value>
              Local da Ação
            </value>
          </text>
          <text id="/data/acaosocial/capturelocal:label">
            <value>
              Capture a localização da ação.
            </value>
          </text>
          <text id="/data/acaosocial/capturelocal:hint">
            <value>
              Ative o GPS do Tablet.
            </value>
          </text>
          <text id="/data/acaosocial/numero:label">
            <value>
              Número de Participantes
            </value>
          </text>
          <text id="/data/dadoslider:label">
            <value>
              Dados do Líder Comunitário
            </value>
          </text>
          <text id="/data/dadoslider/lider:label">
            <value>
              Nome do Lider Comunitário
            </value>
          </text>
          <text id="/data/dadoslider/endereco:label">
            <value>
              Endereço do Lider Comunitário
            </value>
          </text>
          <text id="/data/dadoslider/telefone:label">
            <value>
              Telefone do Líder
            </value>
          </text>
          <text id="/data/dadoslider/telefone:hint">
            <value>
              Pode ser um número de contato ou de recados.
            </value>
          </text>
          <text id="/data/dadoslider/email:label">
            <value>
              E-mail do Líder
            </value>
          </text>
          <text id="/data/comentarios:label">
            <value>
              Comentários
            </value>
          </text>
          <text id="/data/comentarios:hint">
            <value>
            </value>
          </text>
          <text id="/data/pesquisa:label">
            <value>
              Fim da Pesquisa
            </value>
          </text>
          <text id="/data/pesquisa:hint">
            <value>
            </value>
          </text>
        </translation>
      </itext>
      <bind nodeset="/data/meta/instanceID" type="string" readonly="true()" calculate="concat('uuid:', uuid())"/>
      <bind nodeset="/data/responsavel/nomeresponsavel" type="string" readonly="true()"/>
      <bind nodeset="/data/responsavel/cpf" type="string" readonly="true()"/>
      <bind nodeset="/data/acaosocial/nomeacao" type="string"/>
      <bind nodeset="/data/acaosocial/dataacao" type="date"/>
      <bind nodeset="/data/acaosocial/localacao" type="string"/>
      <bind nodeset="/data/acaosocial/capturelocal" type="geopoint"/>
      <bind nodeset="/data/acaosocial/numero" type="int"/>
      <bind nodeset="/data/dadoslider/lider" type="string"/>
      <bind nodeset="/data/dadoslider/endereco" type="string"/>
      <bind nodeset="/data/dadoslider/telefone" type="string"/>
      <bind nodeset="/data/dadoslider/email" type="string"/>
      <bind nodeset="/data/comentarios" type="string"/>
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
      <label ref="jr:itext('/data/acaosocial:label')"/>
      <input ref="/data/acaosocial/nomeacao">
        <label ref="jr:itext('/data/acaosocial/nomeacao:label')"/>
      </input>
      <input ref="/data/acaosocial/dataacao">
        <label ref="jr:itext('/data/acaosocial/dataacao:label')"/>
      </input>
      <input ref="/data/acaosocial/localacao">
        <label ref="jr:itext('/data/acaosocial/localacao:label')"/>
      </input>
      <input ref="/data/acaosocial/capturelocal">
        <label ref="jr:itext('/data/acaosocial/capturelocal:label')"/>
        <hint ref="jr:itext('/data/acaosocial/capturelocal:hint')"/>
      </input>
      <input ref="/data/acaosocial/numero">
        <label ref="jr:itext('/data/acaosocial/numero:label')"/>
      </input>
    </group>
    <group appearance="field-list">
      <label ref="jr:itext('/data/dadoslider:label')"/>
      <input ref="/data/dadoslider/lider">
        <label ref="jr:itext('/data/dadoslider/lider:label')"/>
      </input>
      <input ref="/data/dadoslider/endereco">
        <label ref="jr:itext('/data/dadoslider/endereco:label')"/>
      </input>
      <input ref="/data/dadoslider/telefone">
        <label ref="jr:itext('/data/dadoslider/telefone:label')"/>
        <hint ref="jr:itext('/data/dadoslider/telefone:hint')"/>
      </input>
      <input ref="/data/dadoslider/email">
        <label ref="jr:itext('/data/dadoslider/email:label')"/>
      </input>
    </group>
    <input ref="/data/comentarios">
      <label ref="jr:itext('/data/comentarios:label')"/>
      <hint ref="jr:itext('/data/comentarios:hint')"/>
    </input>
    <input ref="/data/pesquisa">
      <label ref="jr:itext('/data/pesquisa:label')"/>
      <hint ref="jr:itext('/data/pesquisa:hint')"/>
    </input>
  </h:body>
</h:html>
