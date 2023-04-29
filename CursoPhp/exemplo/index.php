<!DOCTYPE html>
<html>
<head> 

</head> 

<title>Mais Top</title>
<body>

<div>
    <label>
        Campo 1
        <input type="number" name="campo1">
    </label>
    <label>
        Campo 2
        <input type="number" name="campo2">
    </label>
</div>
<div>
    <button type="button" name="btn">Enviar</button>
</div>
<script>
    let btn = document.querySelector('button[type=button]');
    btn.addEventListener(
        'click',
        function(){
            echo 1;
            let data = {
                campo1: document.querySelector('input[name=campo1]').value,
                campo2: document.querySelector('input[name=campo2]').value
            }

            let ajax = new XMLHttpRequest();

            ajax.open('post', 'funcao.php');

            ajax.onreadystatechange = function(){
                if (
                    ajax.readyState == 4
                    && ajax.status >= 200
                    && ajax.status <= 400
                ) {
                    let respostaAjax = JSON.parse(ajax.responseText);

                    // Aqui os dados já foram tratados.
                    // Faça o que quiser com eles:
                    console.log(respostaAjax);
                }
            }

            ajax.send(JSON.stringify(data));
        },
        false
    );
</script>


 

</body>
</html>

