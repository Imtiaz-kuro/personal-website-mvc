<?php require_once 'views/layout/header.php'; ?>

<main class="main-content">
    <section class="page-header">
        <div class="container">
            <h1><?php echo $data['title']; ?></h1>
            <p class="page-subtitle"><?php echo $data['introduction']; ?></p>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="content-grid">
                <div class="content-card">
                    <h2>Background</h2>
                    <ul class="styled-list">
                        <?php foreach($data['background'] as $item): ?>
                        <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="content-card">
                    <h2>Capabilities</h2>
                    <ul class="styled-list">
                        <?php foreach($data['capabilities'] as $capability): ?>
                        <li><?php echo $capability; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="mission-section">
                <h2>My Mission</h2>
                <p class="mission-text"><?php echo $data['mission']; ?></p>
            </div>
        </div>
    </section>
</main>

<?php require_once 'views/layout/footer.php'; ?>