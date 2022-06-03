<?php
include "./config.php";
include DIR_PATH . "/template/header.php";
include DIR_PATH . "/template/nav.php";

?>
<div id="form">
    <form action="processa.php" method="post">
        <label for="">Nome</label><br>
        <input type="text" name="nome" id="" required><br>
        <label for="">Assunto</label><br>
        <input type="text" name="assunto" id="" required><br>
        <label for="">Mensagem</label><br>
        <textarea name="mensagem" id="textarea" cols="30" rows="10" required></textarea><br><br>
        <input type="submit" value="Enviar" id="btn">
    </form>
</div>

<?php require DIR_PATH . "/template/footer.php"; ?>