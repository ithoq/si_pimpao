<?php


 //  Configurações do Script
 // ==============================
 global $_SG;
 $_SG['conectaServidor'] = true;    // Abre uma conexão com o servidor MySQL?
 $_SG['abreSessao'] = true;         // Inicia a sessão com um session_start()?

 $_SG['caseSensitive'] = false;     // Usar case-sensitive? Onde 'thiago' é diferente de 'THIAGO'

 $_SG['validaSempre'] = true;       // Deseja validar o usuário e a senha a cada carregamento de página?
 // Evita que, ao mudar os dados do usuário no banco de dado o mesmo contiue logado.

 $_SG['servidor'] = 'localhost';    // Servidor MySQL
 $_SG['usuario'] = 'root';          // Usuário MySQL
 $_SG['senha'] = '';                // Senha MySQL
 $_SG['banco'] = 'si_pimpao';            // Banco de dados MySQL

 $_SG['paginaLogin'] = 'login.php'; // Página de login

 $_SG['tabela'] = 'login';       // Nome da tabela onde os usuários são salvos
 // ==============================

 // ======================================
 //   ~ Não edite a partir deste ponto ~
 // ======================================

 // Verifica se precisa fazer a conexão com o MySQL
 if ($_SG['conectaServidor'] == true) {
   $_SG['link'] = mysql_connect($_SG['servidor'], $_SG['usuario'], $_SG['senha']) or die("MySQL: Não foi possível conectar-se ao servidor [".$_SG['servidor']."].");
   mysql_select_db($_SG['banco'], $_SG['link']) or die("MySQL: Não foi possível conectar-se ao banco de dados [".$_SG['banco']."].");
 }

 // Verifica se precisa iniciar a sessão
 if ($_SG['abreSessao'] == true)
   session_start();

 /**
49 * Função dados grafico
50 *
55 */
 function grafico($pergunta, $ideventos) {
global $_SG;
   $sql = "SELECT COUNT(*) as 'quantidade' , $pergunta as 'pergunta', $ideventos as 'evento' FROM  'feedback' 	WHERE ideventos = 'evento'
	   GROUP BY $pergunta";
   $resultado = mysql_query ($sql,$_SG['link']);
   $return = [];
   while ($row = mysql_fetch_array($resultado,MYSQL_ASSOC)) {
    $return[] = $row;
   }

	return $return;
}

 /**
49 * Função que valida um usuário e senha
50 *
51 * @param string $usuario - O usuário a ser validado
52 * @param string $senha - A senha a ser validada
53 *
54 * @return bool - Se o usuário foi validado ou não (true/false)
55 */
 function validaUsuario($login, $senha) {
   global $_SG;

   $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

   // Usa a função addslashes para escapar as aspas
   $nusuario = addslashes($login);
   $nsenha = addslashes($senha);

   // Monta uma consulta SQL (query) para procurar um usuário
   //Antigo modo
   //$sql = "SELECT 'idlogin', 'nome' FROM '".$_SG['tabela']."' WHERE ".$cS." 'login' = '".$nusuario."' AND ".$cS." 'senha' = '".$nsenha."' LIMIT 1";

   $sql = "SELECT idlogin, nome FROM ".$_SG['tabela']." WHERE login = '$login' AND senha = '$senha' LIMIT 1";
   $query = mysql_query($sql);
   $resultado = mysql_fetch_assoc($query);

   // Verifica se encontrou algum registro
   if (empty($resultado)) {
     // Nenhum registro foi encontrado => o usuário é inválido
     return false;
   } else {
     // Definimos dois valores na sessão com os dados do usuário
     $_SESSION['usuarioID'] = $resultado['idlogin']; // Pega o valor da coluna 'id do registro encontrado no MySQL
     $_SESSION['usuarioNome'] = $resultado['nome']; // Pega o valor da coluna 'nome' do registro encontrado no MySQL

     // Verifica a opção se sempre validar o login
     if ($_SG['validaSempre'] == true) {
       // Definimos dois valores na sessão com os dados do login
       $_SESSION['usuarioLogin'] = $login;
       $_SESSION['usuarioSenha'] = $senha;
       $_SESSION['userAuthenticated'] = TRUE;
     }

     return true;
   }
 }

 /**
91 * Função para logout
92 */
 function logout() {
   $_SESSION['userAuthenticated'] = NULL;
 }


 /**
91 * Função que protege uma página
92 */
 function protegePagina() {
   if (!isset($_SESSION['userAuthenticated'])) {
     // Não há usuário logado, manda pra página de login
     expulsaVisitante();
   }
 }

 /**
112 * Função para expulsar um visitante
113 */
 function expulsaVisitante() {
   global $_SG;

   // Remove as variáveis da sessão (caso elas existam)
   unset($_SESSION['usuarioID'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']);

   // Manda pra tela de login
   header("Location:login.php");
 }
?>
