<body>
    <h2>Page Books</h2>
    <table border=1>
        <?php
        while ($book = $data->fetch()) {
        ?>
            <tr>
                <td><?= htmlspecialchars($book['author']) ?></td>
                <td><?= nl2br(htmlspecialchars($book['summary'])) ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>