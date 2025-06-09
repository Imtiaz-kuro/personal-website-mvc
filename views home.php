<?php require_once 'views/layout/header.php'; ?>

<main class="main-content">
    <section class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title"><?php echo $data['title']; ?></h1>
                <p class="hero-subtitle"><?php echo $data['subtitle']; ?></p>
                <p class="hero-description"><?php echo $data['description']; ?></p>
                <div class="hero-buttons">
                    <a href="index.php?page=about" class="btn btn-primary">Learn More</a>
                    <a href="index.php?page=contact" class="btn btn-secondary">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <h2 class="section-title">What I Can Do</h2>
            <div class="features-grid">
                <?php foreach($data['features'] as $feature): ?>
                <div class="feature-card">
                    <div class="feature-icon">🤖</div>
                    <h3><?php echo $feature; ?></h3>
                    <p>Advanced capabilities in <?php echo strtolower($feature); ?> to assist you with various tasks.</p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php require_once 'views/layout/footer.php'; ?>