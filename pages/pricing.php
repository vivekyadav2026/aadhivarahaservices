<section class="page-header fade-up">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Pricing Options</span>
            <h1 class="section-title">Transparent <br><span>Service Packages</span></h1>
            <p class="section-desc">Straightforward fees with zero hidden costs. Select a standard filing tier or request custom advisory estimates.</p>
        </div>
    </div>
</section>

<section style="background-color: var(--color-bg-light); padding: 80px 0;">
    <div class="container">

        <!-- Pricing Tiers Grid -->
        <div class="grid-3" style="margin-bottom: 60px;">
            <div class="premium-card">
                <div>
                    <h3 style="font-size: 20px; color: var(--color-primary); margin-bottom: 10px;">Startup Registrations</h3>
                    <div style="font-size: 32px; font-weight: 800; color: var(--color-accent); margin-bottom: 15px;">₹1,499 <span style="font-size: 14px; font-weight: 400; color: var(--color-text-muted);">/ onwards</span></div>
                    <p style="font-size: 14px; color: var(--color-text-muted); margin-bottom: 25px;">Basic legal registrations to launch commercial operations.</p>
                    <ul class="list-docs" style="margin-bottom: 25px;">
                        <li>Firm / Society Deed support</li>
                        <li>MSME Udyam credentials</li>
                        <li>NSDL PAN & TAN Card setups</li>
                    </ul>
                </div>
                <a href="index.php?page=services" class="btn btn-primary" style="width: 100%;">Select Registration</a>
            </div>

            <div class="premium-card" style="border-color: var(--color-accent); box-shadow: var(--shadow-lg);">
                <div>
                    <span style="font-size: 10px; font-weight: 800; background: var(--color-accent); color: #FFFFFF; padding: 4px 10px; border-radius: 20px; display: inline-block; margin-bottom: 12px;">POPULAR BUNDLE</span>
                    <h3 style="font-size: 20px; color: var(--color-primary); margin-bottom: 10px;">Tax & Regular Returns</h3>
                    <div style="font-size: 32px; font-weight: 800; color: var(--color-primary); margin-bottom: 15px;">₹999 <span style="font-size: 14px; font-weight: 400; color: var(--color-text-muted);">/ Month onwards</span></div>
                    <p style="font-size: 14px; color: var(--color-text-muted); margin-bottom: 25px;">Monthly return computations for continuous statutory compliance.</p>
                    <ul class="list-docs" style="margin-bottom: 25px;">
                        <li>GST Returns (GSTR-1, 3B)</li>
                        <li>EPFO & ESIC monthly returns</li>
                        <li>Book updates & balance sheets</li>
                    </ul>
                </div>
                <a href="index.php?page=services" class="btn btn-secondary" style="width: 100%;">Select Return Filing</a>
            </div>

            <div class="premium-card">
                <div>
                    <h3 style="font-size: 20px; color: var(--color-primary); margin-bottom: 10px;">Government eProcure</h3>
                    <div style="font-size: 32px; font-weight: 800; color: var(--color-accent); margin-bottom: 15px;">₹4,999 <span style="font-size: 14px; font-weight: 400; color: var(--color-text-muted);">/ onwards</span></div>
                    <p style="font-size: 14px; color: var(--color-text-muted); margin-bottom: 25px;">Official profiles configurations for governmental bid platforms.</p>
                    <ul class="list-docs" style="margin-bottom: 25px;">
                        <li>TS eProcurement enrollment</li>
                        <li>CPPP Central vendor profile</li>
                        <li>GeM marketplace registration</li>
                    </ul>
                </div>
                <a href="index.php?page=services" class="btn btn-primary" style="width: 100%;">Select Procurement</a>
            </div>
        </div>

        <!-- Custom Quotation Request Card -->
        <div class="form-card" style="max-width: 750px; margin: 0 auto;">
            <h3 style="font-size: 22px; color: var(--color-primary); margin-bottom: 10px; text-align: center;">Request Custom Advisory Quote</h3>
            <p style="font-size: 14px; color: var(--color-text-muted); text-align: center; margin-bottom: 30px;">Have extensive corporate compliance requirements? Submit a proposal brief to receive customized monthly retainership pricing options.</p>
            
            <?php if ($submission_success): ?>
                <div style="text-align: center; padding: 20px 0;">
                    <span style="font-size: 32px;">✉️</span>
                    <h4 style="color: var(--color-primary); margin-top: 10px;">Request Logged</h4>
                    <p style="font-size: 14px; color: var(--color-text-muted); margin-top: 5px;">Our billing coordinator will reach out to schedule an audit call.</p>
                </div>
            <?php else: ?>
                <form action="index.php?page=pricing" method="POST">
                    <input type="hidden" name="service_name" value="Custom Retainership Proposal">
                    <div class="grid-2">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="tel" name="phone" class="form-control" placeholder="Enter phone" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Scope of Services Required</label>
                        <textarea name="message" rows="4" class="form-control" placeholder="Mention required filings (e.g. GST returns, ESIC claims support, Central eProcure setup, etc.)" required></textarea>
                    </div>
                    <button type="submit" name="send_lead" class="btn btn-primary" style="width: 100%; border-radius: 8px;">Submit Retainership Request</button>
                </form>
            <?php endif; ?>
        </div>

    </div>
</section>
