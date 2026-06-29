<section class="page-header fade-up">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Our Services Directory</span>
            <h1 class="section-title">Comprehensive <br><span>Consultancy & Compliance</span></h1>
            <p class="section-desc">Manage every aspect of your enterprise registrations, filings, and labor codes using our professional portals.</p>
        </div>
    </div>
</section>

<section style="background-color: var(--color-bg-light); padding: 80px 0;">
    <div class="container">
        <div class="service-grid">
            <?php foreach ($services as $key => $service): ?>
                <a href="index.php?page=service-details&id=<?php echo $key; ?>" class="service-card">
                    <div class="service-card-icon"><?php echo $service['icon']; ?></div>
                    <h3><?php echo $service['title']; ?></h3>
                    <p class="desc"><?php echo substr($service['desc'], 0, 70) . '...'; ?></p>
                    <div class="service-card-footer" style="justify-content: flex-end;">
                        <span class="service-arrow-btn">➔</span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
