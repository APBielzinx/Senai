<?php

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$text = $_POST['text'];

$textformat = str_replace(' ','%20',$text);

echo("


<script>

window.location.href = 'https://wa.me/5511968210285?text=olá%20me%20chamo%20$nome%20meu%20email%20para%20contato%20é:%20$email%20meu%20problema%20é%20%20%20$textformat'

</script>


"
);





?>