<?php
$service_id = htmlspecialchars($_GET['id'] ?? 'firm-registration');
if (!array_key_exists($service_id, $services)) {
    $service_id = 'firm-registration';
}

$s = $services[$service_id];
?>
<section class="page-header fade-up">
    <div class="container">
        <div class="section-header">
            <div style="font-size: 50px; margin-bottom: 20px;"><?php echo $s['icon']; ?></div>
            <span class="section-tag">Service Blueprint</span>
            <h1 class="section-title" style="margin-bottom: 12px;"><?php echo $s['title']; ?></h1>
            <p class="section-desc"><?php echo $s['desc']; ?></p>
        </div>
    </div>
</section>

<section style="background-color: var(--color-bg-light); padding: 80px 0;">
    <div class="container">
        
        <div class="premium-card" style="display: flex; gap: 30px; margin-bottom: 40px; padding: 25px; border: none; margin: 0 0 40px 0; flex-wrap: wrap;">

                <div>
                    <span style="font-size: 11px; text-transform:uppercase; color: var(--color-accent); font-weight:700;">TIMELINE</span>
                    <p style="font-weight:700; font-size: 16px; color: var(--color-primary);"><?php echo $s['timeline']; ?></p>
                </div>
                <div>
                    <span style="font-size: 11px; text-transform:uppercase; color: var(--color-accent); font-weight:700;">DOCUMENT CHECKS</span>
                    <p style="font-weight:700; font-size: 16px; color: var(--color-primary);">Verified checklist</p>
                </div>
            </div>

        <div class="detail-layout">
            <!-- Left Info Area -->
            <div>
                <!-- Overview tab -->
                <div class="tab-content">
                    <h3 class="tab-title">Overview & Specifications</h3>
                    <p style="font-size: 15px; color: var(--color-text); line-height: 1.8;"><?php echo $s['details']; ?></p>
                </div>

                <!-- Eligibility tab -->
                <div class="tab-content">
                    <h3 class="tab-title">Eligibility Criteria</h3>
                    <p style="font-size: 15px; color: var(--color-text); line-height: 1.8;"><?php echo $s['eligibility']; ?></p>
                </div>

                <!-- Documents checklist tab -->
                <div class="tab-content">
                    <h3 class="tab-title">Required Documents</h3>
                    <ul class="list-docs">
                        <?php foreach ($s['documents'] as $doc): ?>
                            <li><?php echo $doc; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Process timeline tab -->
                <div class="tab-content">
                    <h3 class="tab-title">Filing Process & Timeline</h3>
                    <p style="font-size: 15px; color: var(--color-text); line-height: 1.8; margin-bottom: 15px;">We coordinate the entire procedural workflow for you:</p>
                    <p style="font-weight: 600; color: var(--color-accent); font-size: 14px;"><?php echo $s['process']; ?></p>
                </div>

                <!-- FAQ tab -->
                <div class="tab-content">
                    <h3 class="tab-title">Frequently Asked Questions</h3>
                    <div class="accordion" style="margin-bottom: 0;">
                        <button class="accordion-trigger" style="padding: 15px 20px; font-size: 15px;"><?php echo $s['faq']['q']; ?> <span>+</span></button>
                        <div class="accordion-content" style="padding: 0 20px 15px 20px; font-size: 13px;">
                            <p><?php echo $s['faq']['a']; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Related Services -->
                <div style="margin-top: 50px;">
                    <h3 style="font-size: 20px; color: var(--color-primary); margin-bottom: 25px;">Related Compliance Services</h3>
                    <div class="grid-2">
                        <?php 
                        $related_count = 0;
                        foreach ($services as $rk => $rs) {
                            if ($rk !== $service_id && $related_count < 2) {
                                ?>
                                <div class="premium-card">
                                    <div>
                                        <div style="font-size: 24px; margin-bottom: 12px;"><?php echo $rs['icon']; ?></div>
                                        <h4 class="card-title"><?php echo $rs['title']; ?></h4>
                                        <p class="card-desc" style="font-size: 13px;"><?php echo $rs['desc']; ?></p>
                                    </div>
                                    <a href="index.php?page=service-details&id=<?php echo $rk; ?>" class="btn-card-small btn-outline">Explore Details</a>
                                </div>
                                <?php
                                $related_count++;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

            <!-- Sticky Sidebar form Area -->
            <div class="sidebar-sticky">
                <div class="form-card">
                    <h3 style="font-size: 18px; font-weight: 800; color: var(--color-primary); margin-bottom: 8px;">Apply Online</h3>
                    <p style="font-size: 12px; color: var(--color-text-muted); margin-bottom: 24px;">Submit details to initiate your application dossier.</p>
                    
                    <?php if ($submission_success): ?>
                        <div style="text-align: center; padding: 20px 0;">
                            <span style="font-size: 32px;">✅</span>
                            <h4 style="color: var(--color-primary); margin-top: 10px;">Dossier Initiated</h4>
                            <p style="font-size: 12px; color: var(--color-text-muted); margin-top: 8px;">Our advisor will contact you within 2 business hours.</p>
                        </div>
                    <?php else: ?>
                        <form action="index.php?page=service-details&id=<?php echo $service_id; ?>" method="POST">
                            <input type="hidden" name="service_name" value="<?php echo htmlspecialchars($s['title']); ?>">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="John Doe" required>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+91 99999 99999" required>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="john@company.com">
                            </div>
                            <button type="submit" name="send_lead" class="btn btn-primary" style="width: 100%; border-radius: 8px; margin-top: 10px;">Apply Now</button>
                        </form>
                    <?php endif; ?>

                    <div style="margin-top: 25px; border-top: 1px solid var(--color-border); padding-top: 20px; text-align: center;">
                        <p style="font-size: 12px; color: var(--color-text-muted); margin-bottom: 12px;">Prefer live communication?</p>
                        <div style="display:flex; flex-direction:column; gap: 8px;">
                            <a href="https://wa.me/919876543210?text=I%20want%20to%20apply%20for%20<?php echo urlencode($s['title']); ?>" target="_blank" class="btn btn-secondary" style="font-size: 12px; padding: 10px; border-radius: 8px;">💬 Chat on WhatsApp</a>
                            <a href="tel:+919876543210" class="btn btn-outline" style="font-size: 12px; padding: 10px; border-radius: 8px;">📞 Call Advisor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
