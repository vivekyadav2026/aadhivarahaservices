<section class="page-header fade-up">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Contact Center</span>
            <h1 class="section-title">Get In <br><span>Touch</span></h1>
            <p class="section-desc">Submit an enquiry online, chat with us on WhatsApp, or visit our headquarters for direct consulting.</p>
        </div>
    </div>
</section>

<section style="background-color: var(--color-bg-light); padding: 80px 0;">
    <div class="container">

        <div class="grid-2" style="margin-bottom: 80px;">
            <!-- Contact Details -->
            <div class="premium-card" style="display:flex; flex-direction:column; gap: 30px; padding: 40px; border: none; margin: 0;">
                <div>
                    <h3 style="font-size: 20px; color: var(--color-primary); margin-bottom: 15px;">Corporate Headquarters</h3>
                    <p style="color: var(--color-text-muted); line-height: 1.7; font-size: 14px;">Aadhivaraha Services Private Limited,<br>High-Tech City Phase II, Hyderabad, Telangana 500081</p>
                </div>

                <div style="border-top: 1px solid var(--color-border); padding-top: 20px;">
                    <span style="font-size: 11px; text-transform:uppercase; color: var(--color-accent); font-weight:700;">TELEPHONE ENQUIRIES</span>
                    <p style="font-weight:700; font-size: 18px; color: var(--color-primary); margin-top: 5px;"><a href="tel:+919876543210" style="color: inherit; text-decoration: none;">+91 98765 43210</a></p>
                </div>

                <div style="border-top: 1px solid var(--color-border); padding-top: 20px;">
                    <span style="font-size: 11px; text-transform:uppercase; color: var(--color-accent); font-weight:700;">WHATSAPP ADVISORS</span>
                    <p style="font-weight:700; font-size: 18px; color: #25D366; margin-top: 5px;"><a href="https://wa.me/919876543210" target="_blank" style="color: inherit; text-decoration: none;">Chat Live on WhatsApp</a></p>
                </div>

                <div style="border-top: 1px solid var(--color-border); padding-top: 20px;">
                    <span style="font-size: 11px; text-transform:uppercase; color: var(--color-accent); font-weight:700;">EMAIL CORRESPONDENCE</span>
                    <p style="font-weight:700; font-size: 16px; color: var(--color-primary); margin-top: 5px;">compliance@aadhivaraha.com</p>
                </div>
            </div>

            <!-- Enquiry Form -->
            <div class="form-card">
                <h3 style="font-size: 20px; color: var(--color-primary); margin-bottom: 20px;">Send a Direct Enquiry</h3>
                
                <?php if ($submission_success): ?>
                    <div style="text-align: center; padding: 40px 0;">
                        <span style="font-size: 40px;">✅</span>
                        <h4 style="color: var(--color-primary); margin-top: 15px;">Enquiry Received</h4>
                        <p style="color: var(--color-text-muted); font-size: 13px; margin-top: 5px;">A compliance executive will review your parameters and contact you shortly.</p>
                    </div>
                <?php else: ?>
                    <form action="index.php?page=contact" method="POST">
                        <input type="hidden" name="service_name" value="General Portal Contact">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="tel" name="phone" class="form-control" placeholder="Enter phone number" required>
                        </div>
                        <div class="form-group">
                            <label>Corporate Email</label>
                            <input type="email" name="email" class="form-control" placeholder="name@company.com">
                        </div>
                        <div class="form-group">
                            <label>Enquiry Scope</label>
                            <textarea name="message" rows="4" class="form-control" placeholder="Describe your compliance or licensing query..." required></textarea>
                        </div>
                        <button type="submit" name="send_lead" class="btn btn-primary" style="width: 100%; border-radius: 8px;">Submit Enquiry Dossier</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>

        <!-- Styled Google Map Container Area -->
        <div class="premium-card" style="padding: 40px; text-align: center; height: 350px; display: flex; flex-direction: column; justify-content: center; align-items: center; border: none; margin: 0;">
            <div style="font-size: 40px; margin-bottom: 15px;">📍</div>
            <h4 style="margin-bottom: 5px;">Hyderabad Operations Center</h4>
            <p style="color: var(--color-text-muted); font-size: 13px; margin-bottom: 20px;">Open Monday to Friday: 9:30 AM to 6:30 PM</p>
            <div style="width: 100%; max-width: 500px; height: 2px; background: var(--color-border); margin: 0 auto 20px auto;"></div>
            <a href="https://maps.google.com" target="_blank" class="btn btn-outline" style="font-size: 12px; padding: 10px 20px;">Open in Google Maps</a>
        </div>

    </div>
</section>
