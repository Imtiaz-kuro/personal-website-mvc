<?php require_once 'views/layout/header.php'; ?>

<main class="main-content">
    <section class="page-header">
        <div class="container">
            <h1><?php echo $data['title']; ?></h1>
            <p class="page-subtitle"><?php echo $data['description']; ?></p>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="contact-info">
                <div class="info-grid">
                    <div class="info-card">
                        <h3>⏰ Availability</h3>
                        <p><?php echo $data['availability']; ?></p>
                    </div>
                    <div class="info-card">
                        <h3>⚡ Response Time</h3>
                        <p><?php echo $data['response_time']; ?></p>
                    </div>
                </div>
            </div>

            <div class="platforms-section">
                <h2>Where to Find Me</h2>
                <div class="platforms-grid">
                    <?php foreach($data['platforms'] as $platform): ?>
                    <div class="platform-card">
                        <h3><?php echo $platform['name']; ?></h3>
                        <p><?php echo $platform['description']; ?></p>
                        <a href="<?php echo $platform['url']; ?>" class="platform-link" 
                           <?php echo $platform['url'] !== '#' ? 'target="_blank"' : ''; ?>>
                            Visit Platform →
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once 'views/layout/footer.php'; ?>