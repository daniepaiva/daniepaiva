<!DOCTYPE html>
<html>
<head> 
<style> 
body {
	margin: 0px
}
.container {
	width: 100vw;
    height: 100vh;
    background: #4a015c;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
    
.box {
	width: 700px;
    height: 500px;
}

.button {
	background-color: #4a015c; 
    border: 2px solid #e7e7e7;
	border-radius: 12px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
	width: 550px;
	height: 45px;
	margin: 4px 2px;
    cursor: pointer;
}
	
</style> 
</head> 

<title>Mais Top</title>
<body>

<div class="container">
   <div class="box"> 
	
   <ul align="middle">
	     <img src="logo.png" 
		 width="100" 
		 height="100">
		  
		 <br>
		 <font color=#FFFFF" face="Segoe UI" size="5px"><strong>Mais Top Rebouças</strong></font>
		 <br><br>
		 <font color=#FFFFF" face="Segoe UI" size="4px">Somos a maior franquia de Estetica das Americas.</font>
		 <br><br>
		 <form action="cadastros.php"method="get">
		 	<script type="text/javascript">
		 		localstorage.clear();
		 		location reload();
		 	</script>
			 <button type="submit" onclick = "cadastros.php" class="button" method="post">Cadastrar Cliente</button> <br><br>
		    <button type="submit" formaction="agendamentos.php" method="post" class="button" onclick="agendamentos.php">Novo Agendamento</button><br>
		    <br>
		
		 </form>
		 
		 <button class="button">Novo Comparecimento</button><br><br>
		 <button class="button">Novo Fechamentos</button</button><br><br>
		 
	</ul>
    	
   </div>
   
</div>



 

</body>
</html>

