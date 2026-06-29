<!-- Hero Banner Section -->
<section class="hero-banner fade-up">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text-area">
                <span class="hero-tag">GOVERNMENT REGISTRATION</span>
                <h1>Premium Corporate Compliance <br><span>& Registrations</span></h1>
                <p>Corporate compliance, firm registration, and monthly returns filing done smoothly by our experts. Trust us for seamless digital business setup.</p>
                
                <div class="hero-actions" style="margin-top: 30px; margin-bottom: 20px;">
                    <a href="index.php?page=services" class="btn btn-secondary" style="padding: 14px 32px; font-size: 16px;">👉 Apply Now</a>
                    <a href="https://wa.me/919876543210" class="btn btn-outline" style="border-color: rgba(255,255,255,0.3); color: #fff; padding: 14px 32px; font-size: 16px;">💬 WhatsApp</a>
                </div>

                <div class="hero-stats">
                    <div class="hero-stat-item"><span style="font-size:20px; color: var(--color-accent);">✓</span> 10K+<br>Filings</div>
                    <div class="hero-stat-item"><span style="font-size:20px; color: var(--color-accent);">✓</span> 10+<br>Years Exp.</div>
                    <div class="hero-stat-item"><span style="font-size:20px; color: var(--color-accent);">✓</span> 500+<br>Clients</div>
                </div>
            </div>

            <div class="hero-form-box">
                <h3 style="text-align: center;">Request a Callback</h3>
                <p style="text-align: center;">Request a Callback. We will reach you shortly.</p>
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <label>Full Name *</label>
                        <input type="text" name="name" placeholder="Enter Full Name" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number *</label>
                        <input type="tel" name="phone" placeholder="+91 98765 43210" required>
                    </div>
                    <div class="form-group">
                        <label>Select Service *</label>
                        <select name="service" required>
                            <option value="">Select Service...</option>
                            <option value="Firm Registration">Firm Registration</option>
                            <option value="GST">GST Registration</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <button type="submit" name="send_lead" class="form-submit-btn">Request A Callback 📞</button>
                    <p style="font-size: 11px; text-align: center; margin-top: 10px; margin-bottom: 0;">🔒 Your data is secure with us.</p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Trusted By Section -->
<section class="trusted-bar">
    <div class="container">
        <div class="trusted-logos">
            <div class="logo-item">💼 500+ Startups</div>
            <div class="logo-item">🏢 200+ Enterprises</div>
            <div class="logo-item">⚙️ 50+ Industries</div>
            <div class="logo-item">⚡ 99.8% Success Rate</div>
        </div>
    </div>
</section>

<!-- Legal Services Section -->
<section id="services-grid" style="background-color: var(--color-bg-light); padding: 80px 0;">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Legal Services<br><span style="font-size: 13px; font-weight: 700; color: var(--color-accent); letter-spacing: 0.1em; text-transform: uppercase;">Corporate & Statutory</span></h2>
            <p class="section-desc" style="font-size: 14px;">Trust us for end-to-end firm registration, compliance, and legal services.</p>
        </div>

        <div class="service-grid">
            <?php
            // Output first 12 services
            $count = 0;
            foreach ($services as $key => $item) {
                if ($count >= 12) break;
                ?>
                <a href="index.php?page=service-details&id=<?php echo $key; ?>" class="service-card">
                    <div class="service-card-icon"><?php echo $item['icon']; ?></div>
                    <h3><?php echo $item['title']; ?></h3>
                    <p class="desc"><?php echo substr($item['desc'], 0, 70) . '...'; ?></p>
                    <div class="service-card-footer" style="justify-content: flex-end;">
                        <span class="service-arrow-btn">➔</span>
                    </div>
                </a>
                <?php
                $count++;
            }
            ?>
        </div>
        <div style="text-align: center; margin-top: 50px;">
             <a href="index.php?page=services" class="btn btn-primary" style="background-color: var(--color-primary); color: #fff; padding: 12px 30px;">View All Legal Services ➔</a>
        </div>
    </div>
</section>

<!-- 5 Steps Section -->
<section style="background-color: var(--color-bg); padding: 80px 0;">
    <div class="container">
        <div class="section-header" style="text-align: center;">
            <span class="hero-tag" style="color: #c49a45; border-color: #c49a45; background: #fffdf5;">✦ EXPERT BUSINESS GUIDANCE ✦</span>
            <h2 class="section-title">Complete Your <span style="color: #c49a45;">Compliance</span> <span style="color: #151c3d;">in 5 Steps</span></h2>
            <p class="section-desc" style="font-size: 14px;">We have a clear, step-by-step process to secure your registrations and maintain compliance effortlessly.</p>
        </div>

        <div style="max-width: 800px; margin: 0 auto; background: #fbfbfb; border: 1px solid var(--color-border); border-radius: 20px; padding: 40px;">
            <div style="display: flex; flex-direction: column; gap: 30px; position: relative;">
                <!-- Vertical Line -->
                <div style="position: absolute; left: 24px; top: 10px; bottom: 10px; width: 2px; background: var(--color-border); z-index: 1;"></div>
                
                <div style="display: flex; align-items: flex-start; gap: 20px; position: relative; z-index: 2;">
                    <div style="width: 50px; height: 50px; background: #151c3d; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; flex-shrink: 0;">1</div>
                    <div style="background: #fff; border: 1px solid var(--color-border); padding: 20px; border-radius: 12px; flex-grow: 1; display: flex; align-items: center; justify-content: space-between; box-shadow: var(--shadow-sm);">
                        <div style="display: flex; align-items: center; gap: 16px;">
                            <div style="font-size: 24px;">💡</div>
                            <div>
                                <h4 style="font-size: 16px; color: var(--color-text-dark); margin-bottom: 4px;">Select Service</h4>
                                <p style="font-size: 13px; color: var(--color-text-muted);">Choose the required service from our catalog.</p>
                            </div>
                        </div>
                        <a href="#" class="btn-card-small btn-outline" style="border-radius: 20px; font-size: 11px;">+ Add Details</a>
                    </div>
                </div>

                <div style="display: flex; align-items: flex-start; gap: 20px; position: relative; z-index: 2;">
                    <div style="width: 50px; height: 50px; background: #c49a45; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; flex-shrink: 0;">2</div>
                    <div style="background: #fff; border: 1px solid var(--color-border); padding: 20px; border-radius: 12px; flex-grow: 1; display: flex; align-items: center; justify-content: space-between; box-shadow: var(--shadow-sm);">
                        <div style="display: flex; align-items: center; gap: 16px;">
                            <div style="font-size: 24px;">📄</div>
                            <div>
                                <h4 style="font-size: 16px; color: var(--color-text-dark); margin-bottom: 4px;">Upload Documents</h4>
                                <p style="font-size: 13px; color: var(--color-text-muted);">Securely upload your ID and business proofs.</p>
                            </div>
                        </div>
                        <a href="#" class="btn-card-small btn-outline" style="border-radius: 20px; font-size: 11px;">+ Upload</a>
                    </div>
                </div>

                <div style="display: flex; align-items: flex-start; gap: 20px; position: relative; z-index: 2;">
                    <div style="width: 50px; height: 50px; background: #c49a45; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; flex-shrink: 0;">3</div>
                    <div style="background: #fff; border: 1px solid var(--color-border); padding: 20px; border-radius: 12px; flex-grow: 1; display: flex; align-items: center; justify-content: space-between; box-shadow: var(--shadow-sm);">
                        <div style="display: flex; align-items: center; gap: 16px;">
                            <div style="font-size: 24px;">✅</div>
                            <div>
                                <h4 style="font-size: 16px; color: var(--color-text-dark); margin-bottom: 4px;">Expert Verification</h4>
                                <p style="font-size: 13px; color: var(--color-text-muted);">Our team reviews your application.</p>
                            </div>
                        </div>
                        <a href="#" class="btn-card-small btn-outline" style="border-radius: 20px; font-size: 11px; background: #e6f4ea; color: #1e8e3e; border: none;">✓ Verified</a>
                    </div>
                </div>

                <div style="display: flex; align-items: flex-start; gap: 20px; position: relative; z-index: 2;">
                    <div style="width: 50px; height: 50px; background: #c49a45; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; flex-shrink: 0;">4</div>
                    <div style="background: #fff; border: 1px solid var(--color-border); padding: 20px; border-radius: 12px; flex-grow: 1; display: flex; align-items: center; justify-content: space-between; box-shadow: var(--shadow-sm);">
                        <div style="display: flex; align-items: center; gap: 16px;">
                            <div style="font-size: 24px;">🏢</div>
                            <div>
                                <h4 style="font-size: 16px; color: var(--color-text-dark); margin-bottom: 4px;">Government Filing</h4>
                                <p style="font-size: 13px; color: var(--color-text-muted);">We submit forms to the respective department.</p>
                            </div>
                        </div>
                        <a href="#" class="btn-card-small btn-outline" style="border-radius: 20px; font-size: 11px;">+ Track Status</a>
                    </div>
                </div>

                <div style="display: flex; align-items: flex-start; gap: 20px; position: relative; z-index: 2;">
                    <div style="width: 50px; height: 50px; background: #c49a45; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; flex-shrink: 0;">5</div>
                    <div style="background: #fff; border: 1px solid var(--color-border); padding: 20px; border-radius: 12px; flex-grow: 1; display: flex; align-items: center; justify-content: space-between; box-shadow: var(--shadow-sm);">
                        <div style="display: flex; align-items: center; gap: 16px;">
                            <div style="font-size: 24px;">🚀</div>
                            <div>
                                <h4 style="font-size: 16px; color: var(--color-text-dark); margin-bottom: 4px;">Get Certificate</h4>
                                <p style="font-size: 13px; color: var(--color-text-muted);">Download your approved business license.</p>
                            </div>
                        </div>
                        <a href="#" class="btn-card-small btn-outline" style="border-radius: 20px; font-size: 11px;">+ Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


