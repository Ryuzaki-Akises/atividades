
<form action="indexjogo.php" method="GET">
    <fieldset><label>jogador 1</label>
        <input type="number" step="1" min="0" max="2" placeholder="linha" name="linha"><br>
        <input type="number" step="1" min="0" max="2" placeholder="coluna" name="coluna">
        <input type="hidden" name="jogada" value="2" hidden=hidden>
        <input type="hidden" name="simbolo" value="X" hidden=hidden>
        <input type="submit" value="Jogar">
    </fieldset>
</form>
