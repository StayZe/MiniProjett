<?php
require("../controllers/controller.php");
$books = livredb();
?>

<head>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<?php
require("../models/menu.php");
?>

<body>
    <div class="pagebookdiv">
        <h2 class="pagebook">Page Books</h2>
    </div>
    <table border=0>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Year</th>
            <th>Author</th>
            <th>Sommaire</th>
        </tr>
        <?php
        foreach ($books as $book) {
        ?>
            <tr>
                <td class="id"><?= htmlspecialchars($book['id']) ?></td>
                <td><?= htmlspecialchars($book['name']) ?></td>
                <td class="year"><?= htmlspecialchars($book['year']) ?></td>
                <td><?= htmlspecialchars($book['author']) ?></td>
                <td><?= nl2br(htmlspecialchars($book['summary'])) ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

<?php
require("../models/footer.php");
?>