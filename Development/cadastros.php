
<?php
	
	if (isset($_GET['telefone'])){

		$q =$_GET['telefone'];
	
	
    	$strcon = mysqli_connect('localhost','root',"",'maistopdb') or die('Erro ao conectar ao banco de dados');
			
			

		$sql = "SELECT count(*) FROM clientes WHERE telefone = ' ".$q." ' ";

	           
		$result = mysqli_query($strcon, $sql);


		if( $result->num_rows > 0 ) {//se retornar algum resultado
 	
 			echo "<script type='text/javascript'>alert('Usuário já cadastrado');</script>";
		
			mysqli_close($strcon);	
    	
	
		}
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
	width: 550px;
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
input[type=text],
input[type=email],
textarea{
    width: 70%;
    padding-left: 10px;
    height: 30px;
    line-height: 30px;
    border-radius: 15px;
    border: 1px solid #ccc;
    outline: none;
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

.button_add {
	width: 130px;
	padding-left: 9px;
}
.inputTexto2{
	width: 30%;
    padding-left: 10px;
    height: 30px;
    line-height: 30px;
    border-radius: 15px;
    border: 1px solid #ccc;
    outline: none;
}


</style> 
</head> 

<title>Mais Top</title>
<body onload="carregar();">




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
		 	<form id="principal" action="cadastros.php" onsubmit="submeter();">
				<div align="left" id="resultado">
					<script>	
						function carregar(){

        					document.getElementById("cliente").value=localStorage.getItem("cliente");
        					document.getElementById("telefone").value=localStorage.getItem("telefone");
        					localStorage.clear();
    					}	
						function submeter(){

    						localStorage.setItem("cliente",document.getElementById("cliente").value);
    						localStorage.setItem("telefone",document.getElementById("telefone").value);

    					
    						
        				}

						function validatelefone(str){
							
   							
							if (str==""){
								document.getElementById("telefone").innerHTML="";
								return;
							}
							var xmlhttp=new XMLHttpRequest();
 						    xmlhttp.onreadystatechange=function() {
    						document.getElementById("telefone").innerHTML=this.responseText;
      						
      						
 							xmlhttp.open("GET","cadastros.php?="+str,true);
  							xmlhttp.send();
								
							
								
							}
						}
							
        				
   					</script>	
					<font color=#FFFFF" face="Segoe UI" size="4px"><u>Cliente:  </u></font><br><br>
					<input type="text" placeholder="Informe o Nome do Cliente" id="cliente" name="cliente"  maxlength=60 class="inputTexto2">
				
         
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
				
					<br><br>	
					<font color=#FFFFF" face="Segoe UI" size="4px"><u>Telefone:  </u></font><br><br>
				
					<input type="text" class="form-control" placeholder="Informe o numero de telefone" id="telefone" name="telefone" style="width: 350" onchange="validatelefone(this.value)">
					
					<button  class="button_add" name='validar' onclick="validaTelefone();">  <img src="OK2.png" height ="20" width="20" align="left"/>Validar Cliente </button> <br><br>
							}
			
         
				<script type="text/javascript">
					$("#telefone, #celular").mask("(00) 00000-0000");
					

				</script>
			
					<font color=#FFFFF" face="Segoe UI" size="4px"><u>Origem:  </u></font><br><br><br>
			
			</form>
					<form id="radio" onsubmit="validaCampos">

						<input type="radio" name="Origem" value="LeadPago" required>
	                	<font color=#FFFFF" face="Segoe UI" size="4px">Lead Pago</font>
				   	    <input type="radio" name="Origem" value="Instagram">
	                	<font color=#FFFFF" face="Segoe UI" size="4px">Instagram</font>
						<input type="radio" name="Origem" value="List. Ativas" >
	               		<font color=#FFFFF" face="Segoe UI" size="4px">List. Ativas</font><br><br>
						<input type="radio" name="Origem" value="Indicacao">
	            	    <font color=#FFFFF" face="Segoe UI" size="4px">Indicacao</font>		
						<input type="radio" name="Origem" value="Rua">
	               	 	<font color=#FFFFF" face="Segoe UI" size="4px">Rua</font>
						<input type="radio" name="Origem" value="Procurou WhatsApp">
	            	    <font color=#FFFFF" face="Segoe UI" size="4px">Procurou WhatsApp</font><br><br>	
				    	<input type="radio" name="Origem" value="Influencer"/>
	                	<font color=#FFFFF" face="Segoe UI" size="4px">Influencer</font>
				  		<input type="radio" name="Origem" value="Parcerias"/>
	               	 	<font color=#FFFFF" face="Segoe UI" size="4px">Parcerias</font><br><br>
					
				<input type=text list=influencer placeholder="Escolha o nome da influencer" id="inf" disabled><br><br>
				<datalist id=influencer >
					<option> Grazi
					<option> Helena
					<option> Janaina
				</datalist>
			
				<input type=text list=parceiras placeholder="Escolha o nome da Parceria" id="par" disabled/><br><br>
				<datalist id=parceiras>
					<option> AVM
					<option> Mr. Cat
					<option> SESC
				</datalist>

     			<script type="text/javascript">


					var $input_inf = $('#inf');

					$("input[name=Origem]").on('change', function() {
						var disabled = $(this).val() !== 'Influencer';
						$input_inf.prop('disabled', disabled);
						document.getElementById("inf").value=''; // Limpa o campo

					});

					var $input_par = $('#par');

     				$("input[name=Origem]").on('change', function() {
						var disabled = $(this).val() !== 'Parcerias';
						$input_par.prop('disabled', disabled);
						document.getElementById("par").value=''; // Limpa o campo

					});

				

	
  											

        		
    			</script>

        		
			
				<button type="submit" formaction='agendamentos.php' class="buttonok" name='insertbt'>  
					<img src="OK2.png" height ="20" width="20" align="left"/>Inserir 
				</button> 
				<button type ="submit" formaction="index.php"class="buttoncanc"><img src="cancel.png" height ="20" width="20" align="left"/>Cancelar</button><br><br>
			 	
			</form>
			</div>
					
			

			
	</ul>
    	
   </div>
   
</div>



 

</body>
</html>

