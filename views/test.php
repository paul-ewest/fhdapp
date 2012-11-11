<html>
    <header>
        <title>Testview</title>
    </header>
    
    <body>
        <table>
            <tr><th>ID</th><th>Nachname</th><th>Vorname</th></tr>
            <?php foreach($personen as $pers): ?>
            <tr>
                <td><?php echo $pers['id']; ?></td>
                <td><?php echo $pers['nachname']; ?></td>
                <td><?php echo $pers['vorname']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
    
</html>