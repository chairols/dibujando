<?=$session['nombre']?> <?=$session['apellido']?><br>
<form method="post">
    <input type="text" name="asunto" required autofocus><br>
    <textarea name="consulta" required></textarea><br>
    <button type="submit">Enviar</button>
</form>
