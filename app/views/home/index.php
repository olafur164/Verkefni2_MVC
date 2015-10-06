<div class="container">
    <h2>Draumaheimur - Bókalisti</h2>
    <div class="box">
        <h3>List of books</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Heiti Bókar</td>
                <td>Höfundur</td>
                <td>Fá upplýsingar</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book) { ?>
                <tr>
                    <td><?php if (isset($book->book_ID)) echo htmlspecialchars($book->book_ID, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->book_title)) echo htmlspecialchars($book->book_title, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->book_author)) echo htmlspecialchars($book->book_author, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a href="<?php echo 'home/getBook/' . htmlspecialchars($book->book_ID, ENT_QUOTES, 'UTF-8'); ?>">Skoða</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>