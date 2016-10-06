<?php include 'includes/header.php'; ?>
    <h1>Sistema de Cadastro de Produtos</h1>

    <?php if(isset($_SESSION['success'])): ?>
    <p class="alert-success"><?= $_SESSION['success']; ?></p>    
    <?php endif; 
        $_SESSION['success'] = "";
    ?>
    
<?php include 'includes/footer.php';
