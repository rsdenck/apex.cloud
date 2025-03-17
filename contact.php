<?php include 'header.php'; ?>

<section id="contact" class="contact">
    <div class="container">
        <h2>Contato</h2>
        <form action="contact.php" method="POST">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Mensagem:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
</section>

<?php include 'footer.php'; ?>
