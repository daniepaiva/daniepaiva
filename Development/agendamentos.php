<?php
	
	
	$date = date('d/m/Y');
	$nome = $_POST['cliente'];	

	

	if (isset($_POST['insertbt'])){

		$cod_cliente = null;
			


			if (empty($erro)){

				$strcon = mysqli_connect('localhost','root',"",'maistopdb') or die('Erro ao conectar ao banco de dados');

				$query = "SELECT max(cod_cliente) AS cod_cliente FROM clientes";

				$result_query = mysqli_query($strcon, $query);

				mysqli_close($strcon);

			
				while ($linha =  mysqli_fetch_array($result_query)){
					$cod_cliente = $linha['cod_cliente'] +1;
					echo $cod_cliente;	
				}	

				$nome = $_POST['cliente'];
				$telefone = $_POST['telefone'];
				$origem = $_POST['Origem'];
	

				$strcon = mysqli_connect('localhost','root',"",'maistopdb') or die('Erro ao conectar ao banco de dados');

				$query= "INSERT INTO clientes (cod_cliente, nome_cliente, telefone, origem) VALUES ('$cod_cliente','$nome','$telefone','$origem') ";
			
			
			
				mysqli_query($strcon, $query);

				mysqli_close($strcon);

			}

			echo 'Cadastro efetuado com sucesso';
   			
  	
  		

	}

?>
	
		

	

                  
 



<!DOCTYPE html>
<html>
<head> 
<style> 
body {
	margin: 0px
}
.container {
	width: 100vw;
    height: 200vh;
    background: #4a015c;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
    
.boxPrincipal {
	width: 500px;
    height: 100%;
}

.buttonok {
	background-color: #64ad6a; 
    border: 2px solid #e7e7e7;
	border-radius: 12px;
    color: white;
    padding: 20px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
	width: 175px;
	height: 25px;
	margin: 4px 2px;
    cursor: pointer;
}
.buttoncanc {
	background-color: #ff0000; 
    border: 2px solid #e7e7e7;
	border-radius: 12px;
    color: #e7e7e7;
    padding: 20px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
	width: 175px;
	height: 25px;
	margin: 4px 2px;
    cursor: pointer;
}

.button_add {
	width: 180px;

}


.button_validar {
	width: 32px;

}
.labelTamenho{
	width: 10px;
}

.formulario{
    width: 400px;
    padding: 30px;
    
}
.formulario p{
    width: 100%;
    font-size: 1.5em;
}
.field{
    width: 100%;
    margin: 15px 0;
}
.field label, 
.field span{
    padding-left: 10px;
    font-size: 1.1em;
    display: block;
    width: 100%;
}
.radiobox label{
    width: auto;
    display: inline-block;
}
input#nao{
    margin-left: 30px;
}
textarea{
    line-height: 20px;
    padding: 10px;
    height: 90px;
    resize: none;
}
input[type=submit]{
    display: block;
    background-color: #ccc;
    height: 35px;
    border: none;
    outline: 0;
    cursor: pointer;
    width: 100px;
    margin: 0 auto;
    text-align: center;
    border-radius: 15px;
}
.myarrow:after {
    content: url(https://i.stack.imgur.com/i9WFO.png);
    margin-left: -19px; 
    padding: .2em;
    pointer-events:none;
}
.inputTexto2{
	width: 20%;
    padding-left: 10px;
    height: 30px;
    line-height: 30px;
    border-radius: 15px;
    border: 1px solid #ccc;
    outline: none;
}

.inputTexto{
    width: 70%;
    padding-left: 20px;
    height: 30px;
    line-height: 30px;
    border-radius: 15px;
    border: 1px solid #ccc;
    outline: none;
}
*/
</style> 
</head> 

<title>Mais Top</title>
<body>




<div class="container">
   <div class="boxPrincipal"> 
	
   <ul align="middle">
	     <img src="logo.png" 
		 width="100" 
		 height="100">
		  
		 <br>
		 <font color=#FFFFF" face="Segoe UI" size="5px"><strong>Mais Top Rebouças</strong></font>
		 <br><br>
		 <font color=#FFFFF" face="Segoe UI" size="4px">Somos a maior franquia de Estetica das Americas.</font>
		 <br><br>
				
				<div align="left">
					 
					 <form action="agendamentos.php" method="post">
					 <span class="cliente"><font color=#FFFFF" face="Segoe UI" size="4px"><u>Cliente:</u></font></span>

							<select name="clientes" id="clientes" style="width: 200" placeholder="Flamengo">
								<option value="teste">Escolha o cliente</option>
								<option value="teste2">223</option>
							</select>

							<?php 

							    mysqli_data_seek($nome, 0);
     							while($registro = mysqli_fetch_assoc($nome)) { ?>
     							<option = "<?php echo $registro['cod_cliente'] ?>"><?php echo $registro["cliente"] ?></option>
        						<?php

     							};	
     							
     							?>	
							
						</form>
					</span>
    				
    				<br><br>
    		 		
    				 <span id="valores">
					 <div>
						<span>	
						<font color=#FFFFF" face="Segoe UI" size="4px"><u>  Telefonei:</u></font>
     					</span>	
						<span>
					
							<input type="radio" name="Sim_Nao_lig" value="Sim">
                			<font color=#FFFFF" face="Segoe UI" size="4px">Sim</font>
			   	    		<input type="radio" name="Sim_Nao_lig" value="Nao">
                			<font color=#FFFFF" face="Segoe UI" size="4px">Não</font>
                				<button type="submit" class="button_add"' id="adicionar">   <img src="add.jpg" height ="16" width="16" align="left"/>Adicionar Ligação</button><br><br>
							
			   			</span>
			   		 
					 </div>
    				 </span>
				</div>
				<br>
				<div align="left">
					
					<span id="valores2">
				
						<font color=#FFFFF" face="Segoe UI" size="4px"><u>Atendeu:</u></font>
						<input type="radio" name="Sim_Nao_aten" value="Sim">
               			<font color=#FFFFF" face="Segoe UI" size="4px">Sim</font>
			   	   		 <input type="radio" name="Sim_Nao_aten" value="Nao">
                		<font color=#FFFFF" face="Segoe UI" size="4px">Não</font>
                	
                		<button type="Submit" class="button_add"' id="adicionar_aten">   <img src="add.jpg" height ="16" width="16" align="left"/>Adicionar Atendimento</button><br><br>	
					</span>
				</div>
				<br>
				<div align="left">
					<span>
					<font color=#FFFFF" face="Segoe UI" size="4px"><u>Agendei:</u></font>
					<input type="radio" name="Sim_Nao_agen" value="Sim">
               		<font color=#FFFFF" face="Segoe UI" size="4px">Sim</font>
			   	    <input type="radio" name="Sim_Nao_agen" value="Nao">
                	<font color=#FFFFF" face="Segoe UI" size="4px">Não</font>	
				</div>
				<br><br>

					
				<br><br><br>
	
				 <script language="javascript"><!--W3e JAVAscript Presettype="text/javascript">
						
						//Lógica para o botão adicionar ligação

						var botao = document.getElementById("adicionar");

						botao.addEventListener('click', function() {

   						// pega a span pelo id
   						var vals = document.getElementById("valores");

  						 // cria a tag <br>
   						var br = document.createElement("br");
   						// insere no span
   						vals.appendChild(br);

   						// pega todos os inputs dentro do span
   						var qtd = document.querySelectorAll("#valores input");
	
						// como já tem um, soma com 2 para criar uma contagem sequencial
   						var names = qtd.length -1;

   						// cria o nó de texto
   						var lab = document.createTextNode("Ligação "+ names +": ");   
   						
   						// insere no span
					    vals.appendChild(lab);

  
 						 // cria o input
   						var inp = document.createElement("input");
   						// cria atributo "type"
   						inp.type = "text";
   						inp.value = "<?php echo $date; ?>" + " - " + document.clock.face.value;

   // cria atributo "name" com o valor sequencial
   inp.name = "valor"+names;
   // insere no span
   vals.appendChild(inp);
   
});

						//Lógica para o botão adicionar atendimento

						var botao = document.getElementById("adicionar_aten");

						botao.addEventListener('click', function() {

   						// pega a span pelo id
   						var vals = document.getElementById("valores2");

  						 // cria a tag <br>
   						var br = document.createElement("br");
   						// insere no span
   						vals.appendChild(br);

   						// pega todos os inputs dentro do span
   						var qtd = document.querySelectorAll("#valores2 input");
	
						// como já tem um, soma com 2 para criar uma contagem sequencial
   						var names = qtd.length -1;

   						// cria o nó de texto
   						var lab = document.createTextNode("Ligação "+ names +": ");   
   						
   						// insere no span
					    vals.appendChild(lab);

  
 						 // cria o input
   						var inp = document.createElement("input");
   						// cria atributo "type"
   						inp.type = "text";
   						inp.value = "<?php echo $date; ?>" + " - " + document.clock.face.value;

					   // cria atributo "name" com o valor sequencial
  					   inp.name = "Valo"+names;
  						// insere no span
   						vals.appendChild(inp);
   
						});



var timerID = null;
var timerRunning = false;
function stopclock()
{
    if(timerRunning)
        clearTimeout(timerID)
    timerRunning = false;
}

function startclock()
{
    stopclock();
    showtime();
}

function showtime()
{
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
    var timeValue = "" + ((hours > 12) ? hours - 12 : hours);
    timeValue  += ((minutes < 10) ? ":0" : ":") + minutes;
    timeValue  += ((seconds < 10) ? ":0" : ":") + seconds;
    timeValue  += (hours >= 12) ? " P.M." : " A.M.";
    document.clock.face.value = timeValue;
    timerID = setTimeout("showtime()",1000);
    timerRunning = true;
}

</script>

<form name="clock" onSubmit="0">
  <input type="hidden" name="face" size="12">
</form>	

			
<script>startclock();</script>
				
				<form action="agendamentos.php" method="POST">	
			
 					<button type="submit"  class="buttonok" name='insertbt'>   <img src="OK2.png" height ="20" width="20" align="left"/>Inserir </button>
			        <button type ="submit" formaction="index.php"class="buttoncanc"><img src="cancel.png" height ="20" width="20" align="left"/>Cancelar</button><br><br>
				</form>

			
			
	</ul>
    	
   </div>
   
</div>


<-->
 

</body>
</html>

