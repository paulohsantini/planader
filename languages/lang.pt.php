<?php
/* 
-----------------
Language: Portugues
-----------------
*/

$lang = array();

$lang['PAGE_TITLE'] = 'Planader';

// Menu
$lang['MENU_HOME'] = 'Início';
$lang['MENU_HISTORIA'] = 'Sobre';
$lang['MENU_LABORATORIOS'] = 'Cadastre-se';
$lang['MENU_CONTATO'] = 'Contato';
$lang['MENU_IDIOMA1'] = '';
$lang['MENU_IDIOMA2'] = 'English';

// Apresentacao
$lang['APRESENTACAO'] = 'PLANADER';
$lang['APRESENTACAO1'] = 'Plataforma de Apoio ao Desenvolvimento Regional';
$lang['APRESENTACAO2'] = 'Coordenador: Adriana';
$lang['APRESENTACAO3'] = 'Professor Auxiliar: Paulo';
$lang['APRESENTACAO4'] = 'Bolsista: Lucas';
$lang['APRESENTACAO5'] = 'Projeto Oriundo Edital ******';
$lang['APRESENTACAO6'] = 'IFRS';
$lang['APRESENTACAO7'] = 'Instituto Federal de Educação,Ciência e Tecnologia do Rio Grande do Sul,Câmpus Erechim';

// Historia
// Cadastro apresentação
$lang['CADASTRO'] = 'Não é cadastrado?';
$lang['CADASTRO1'] = 'Cadastre-se já!';

// Cadastro campos
$lang['CADASTRO_NOME'] = 'Nome da Organização:';
$lang['CADASTRO_SITE'] = 'Site:';
$lang['CADASTRO_EMAIL'] = 'Email:';
$lang['CADASTRO_CNPJ'] = 'CNPJ:';
$lang['CADASTRO_ENDERECO'] = 'Endereço:';
$lang['CADASTRO_CIDADE'] = 'Cidade:';
$lang['CADASTRO_TELEFONE'] = 'Telefone:';
$lang['CADASTRO_NOMECONTATO'] = 'Nome para Contato:';
$lang['CADASTRO_RAMO'] = 'Ramo:';


// Gera a senha para o cadastro
$lang['CADASTRO_SENHA'] = 'Senha:';

function gerar_senha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){
  $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // $ma contem as letras maiúsculas
  $mi = "abcdefghijklmnopqrstuvyxwz"; // $mi contem as letras minusculas
  $nu = "0123456789"; // $nu contem os números
  $si = "!@#$%¨&*()_+="; // $si contem os símbolos
  $senha = '';
 
  if ($maiusculas){
        // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($ma);
  }
 
    if ($minusculas){
        // se $minusculas for "true", a variável $mi é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($mi);
    }
 
    if ($numeros){
        // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($nu);
    }
 
    if ($simbolos){
        // se $simbolos for "true", a variável $si é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($si);
    }
 
    // retorna a senha embaralhada com "str_shuffle" com o tamanho definido pela variável $tamanho
    return substr(str_shuffle($senha),0,$tamanho);
}

//login
$lang['LOGIN'] = 'Já é cadastrado?';
$lang['LOGIN1'] = 'Entre com seu email e senha!';
$lang['LOGIN_EMAIL'] = 'Email:';
$lang['LOGIN_SENHA'] = 'Senha:';


// Laboratorios
//$lang['LABORATORIO_FA_ICON_UM'] = 'ASSISTIVE TECHNOLOGY LAB';
//$lang['LABORATORIO_UM'] = 'O laboratório de tecnologias assistivas (AssistiveLab) permite o desenvolvimento de 
//				projetos que apliquem tecnologias no auxílio a Pessoas com Deficiência (PcDs) e Idosos. O principal tema abordado pelo AssistiveLab vem 				sendo a Acessibilidade Ubíqua, ou seja, a aplicação da Computação Ubíqua no cuidado a PcDs e Idosos. Nesse sentido, destacam-se dois 
//				modelos computacionais desenvolvidos no laboratório. O <b><a href="http://link.springer.com/article/10.1007%2Fs10209-015-0423-2">
//				Hefestos</a></b> é um modelo que permite um cuidado contextualizado e sem restrições quanto ao tipo de acessibilidade. Os usuários são 				
//				acompanhados continuamente durante seus deslocamentos, recebendo orientações quanto aos recursos de acessibilidade disponíveis nos 	
//				contextos que visitam. Por sua vez, o <b><a href="http://www.lbd.dcc.ufmg.br/colecoes/sbsi/2016/016.pdf">MASC</a></b> é um modelo que 
//				amplia a abrangência do Hefestos para uma cidade, permitindo assim a criação de uma Cidade Inteligente Assistiva. Os projetos receberam 				atenção especial da mídia, conforme pode ser visto  nos seguintes links: <b><a href="http://gshow.globo.com/RBS-TV-RS/Mistura-com-Rodaika/InspirAcao/noticia/2015/09/apos-acidente-mulher-da-volta-por-cima-e-se-torna-inspiracao.html">Mistura com Rodaika (RBS TV)</a></b>, <b><a href="http://videos.clicrbs.com.br/rs/zerohora/video/vida-e-estilo/2015/06/rumo-projeto-unisinos-utiliza-tablet-para-melhorar-acessibilidade/126989/">Caderno Rumo (Zero Hora TV)</a></b>, <b><a href="http://tv.r7.com/record-play/rio-grande-do-sul/rio-grande-no-ar/videos/aplicativo-ajuda-cadeirantes-15102015">Rio Grande no Ar (TV Record)</a></b> e  <b><a href="http://zh.clicrbs.com.br/rs/vida-e-estilo/vida/noticia/2015/02/como-aplicativos-podem-ajudar-deficientes-fisicos-a-viver-melhor-4708704.html">Caderno Vida (Zero Hora)</a></b>.';
//
//$lang['LABORATORIO_FA_ICON_DOIS'] = 'PROJETO HEFESTOS';	
//$lang['LABORATORIO_DOIS'] = 'O Hefestos foi projetado para atuar como um acompanhante de pessoas com deficiência, sem restrição quanto ao tipo de 
//								deficiência. O usuário porta no seu dispositivo móvel (por exemplo, smartphone ou tablet) um software cliente que 
//								acessa um servidor onde estão mapeados os recursos de acessibilidade disponíveis em uma determinada região.  Na medida 
//								em que o usuário se desloca, o sistema informa os recursos que estão disponíveis na sua proximidade, auxiliando no 
//								acesso a eles. Dois tipos de clientes já foram implementados. Um deles usa um tablet integrado a uma cadeira de rodas 
//								motorizada, permitindo que o usuário se desloque com a cadeira e seja orientado sobre recursos ao seu redor. Esse 
//								protótipo usa o GPS para determinação de deslocamentos em áreas externas. Também foi desenvolvido um hardware especial 
//								usado para integração com a cadeira de rodas motorizada, o qual permite a detecção de deslocamentos dentro de prédios, 
//								usando cartões RFID colocados no chão. Essa integração também permite que o usuário possa controlar a cadeira através 
//								do dispositivo móvel. O segundo protótipo permite a pessoas com deficiência visual usarem seus smartphones para 
//								guia-las, permitindo a identificação de recursos de acessibilidade e também dos caminhos a serem percorridos até 
//								alcançar um local específico. Em ambos os protótipos, a ligação dos clientes dos dispositivos móveis com o servidor é 
//								realizada pela Internet, podendo ser usados quaisquer recursos que disponibilizem esse tipo de conexão. No protótipo da 								cadeira de rodas, a comunicação do cliente no dispositivo móvel com o hardware embarcado na cadeira é realizada através 								de Bluetooth.';	
//
//$lang['LABORATORIO_FA_ICON_TRES'] = 'CYBER-PHYSICAL SYSTEMS LAB';	
//$lang['LABORATORIO_TRES'] = 'O laboratório de sistemas ciber-físicos (CyberLab) suporta projetos que explorem os 
//				conceitos de sistemas ciber-físicos e também sua aplicação. Nesse sentido, o laboratório vem dedicando atenção especial a questões 
//				relacionados a integração de <b><a href="http://www.sciencedirect.com/science/article/pii/S0957417415006302">Históricos de Contextos
//				</a></b> e Sistemas Ciber-físicos. A integração desses temas permitirá o desenvolvimento de sistemas ciber-físicos guiados por 
//				informações <b><a href="http://link.springer.com/article/10.1007%2Fs40593-015-0047-y">multitemporais</a></b>.';
//
//$lang['LABORATORIO_FA_ICON_QUATRO'] = 'UBIQUITOUS HEALTH LAB';	
//$lang['LABORATORIO_QUATRO'] = 'O laboratório de computação ubíqua aplicada à saúde (UHealthLab) dedica-se a projetos que 
//				estudem como a computação móvel e ubíqua pode ser aplicada no cuidado da saúde das pessoas. Nesse foco, destacam-se dois modelos 
//				computacionais. O <b><a href="http://ieeexplore.ieee.org/abstract/document/6391777/?reload=true">uDuctor</a></b> é um modelo que aplica
//				a computação ubíqua no acompanhamento de pessoas que tenham doenças crônicas. Por sua vez, o <b><a href="http://www.lbd.dcc.ufmg.br/colecoes/sbsi/2016/057.pdf">Higia</a></b> propõe o uso dessa tecnologia no acompanhamento de pessoas que tiveram depressão.';

// Parceiros
$lang['PARCEIROS_FA_ICON'] = 'Links Estratégicos';

// Contato
$lang['CONTATO_ENDERECO'] = 'Endereço:';
$lang['CONTATO_ENDERECO_ESCRITO'] = 'Instituto Federal de Educação,Ciência e Tecnologia do Rio Grande do Sul,Câmpus Erechim<br>
R. Domingos Zanella, n.104 - Três Vendas<br>
CEP: 99700-000<br>
Erechim - RS.';
$lang['CONTATO_EMAIL2'] = 'Site:';
$lang['CONTATO_EMAIL2_ESCRITO'] = 'https://ifrs.edu.br/erechim/';
$lang['CONTATO_TELEFONE'] = 'Telefone:';
$lang['CONTATO_TELEFONE_ESCRITO'] = '+055 (54) 33217500';
$lang['CONTATO_NOME'] = 'Nome';
$lang['CONTATO_TELEFONE1'] = 'Telefone';
$lang['CONTATO_EMAIL'] = 'E-mail';
$lang['CONTATO_ASSUNTO'] = 'Assunto';
$lang['CONTATO_MENSAGEM'] = 'Mensagem';
$lang['CONTATO_RESULTADO'] = 'Resultado de ';
$lang['CONTATO_NONODIGITO'] = 'Atente-se ao nono dígito do seu telefone móvel conforme a sua região';
$lang['CONTATO_BOTAO'] = 'Enviar Mensagem';

// Rodape
$lang['RODAPE'] = 'IFRS - Instituto Federal de Educação,Ciência e Tecnologia do Rio Grande do Sul,Câmpus Erechim.';


?>