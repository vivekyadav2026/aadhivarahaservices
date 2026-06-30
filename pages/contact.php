<!-- Contact Hero Section -->
<section class="contact-hero-section">
    <div class="contact-hero-container">
        <div class="contact-hero-left">
            <span class="contact-hero-tag">Contact Us</span>
            <h1>We're Here to <span>Help</span></h1>
            <p>Have a question or need assistance? Reach out to us and our team will get back to you shortly.</p>
        </div>
        <div class="contact-hero-right">
            <div class="contact-hero-image-wrapper">
                <img src="images/contact_hero_support.png" class="contact-hero-img" alt="Contact Us Aadhivaraha Services">
            </div>
        </div>
    </div>
</section>

<!-- Contact Info Cards Row -->
<div class="contact-cards-container">
    <div class="contact-cards-grid">
        <!-- Call Us -->
        <a href="tel:+917981674916" style="text-decoration: none;" class="contact-info-card">
            <div class="contact-card-icon-box icon-box-navy">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            </div>
            <h3>Call Us</h3>
            <p class="card-main-text">+91 79816 74916<br>+91 95531 86025</p>
            <p class="card-sub-text">Mon - Sat: 9:30 AM - 7:00 PM</p>
        </a>

        <!-- WhatsApp -->
        <a href="https://wa.me/917981674916" target="_blank" style="text-decoration: none;" class="contact-info-card">
            <div class="contact-card-icon-box icon-box-whatsapp">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
            </div>
            <h3>WhatsApp</h3>
            <p class="card-main-text whatsapp-text">Chat Live on WhatsApp</p>
            <p class="card-sub-text">Quick Response</p>
        </a>

        <!-- Email Us -->
        <a href="mailto:aadhivarahaservices@gmail.com" style="text-decoration: none;" class="contact-info-card">
            <div class="contact-card-icon-box icon-box-navy">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
            <h3>Email Us</h3>
            <p class="card-main-text" style="font-size: 13px;">aadhivarahaservices@gmail.com</p>
            <p class="card-sub-text">We reply within 24 hrs</p>
        </a>

        <!-- Visit Us -->
        <div class="contact-info-card">
            <div class="contact-card-icon-box icon-box-orange">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            </div>
            <h3>Visit Us</h3>
            <p class="card-main-text" style="font-size: 13px; font-weight: 600; line-height: 1.4;">High-Tech City Phase II, Hyderabad, Telangana 500081 India</p>
        </div>
    </div>
</div>

<!-- Details Grid -->
<section class="contact-details-section">
    <div class="contact-details-container">
        <div class="contact-details-grid">
            <!-- Send Us a Message Column -->
            <div class="contact-details-column">
                <div class="contact-column-header">
                    <h2>Send Us a Message</h2>
                    <p>Fill in the details below and we will get back to you.</p>
                </div>

                <?php if ($submission_success): ?>
                    <div style="text-align: center; padding: 40px 0;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <h4 style="color: var(--color-primary); margin-top: 20px; font-size: 18px; font-weight: 700;">Enquiry Received</h4>
                        <p style="color: var(--color-text); font-size: 14px; margin-top: 10px;">A compliance executive will review your parameters and contact you shortly.</p>
                    </div>
                <?php else: ?>
                    <form action="index.php?page=contact" method="POST">
                        <input type="hidden" name="service_name" value="General Portal Contact">
                        
                        <div class="contact-form-group">
                            <label>Your Name</label>
                            <div class="contact-input-wrapper">
                                <span class="contact-input-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                </span>
                                <input type="text" name="name" class="contact-form-control" placeholder="Enter your full name" required>
                            </div>
                        </div>

                        <div class="contact-form-group">
                            <label>Mobile Number</label>
                            <div class="contact-input-wrapper">
                                <span class="contact-input-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                </span>
                                <input type="tel" name="phone" class="contact-form-control" placeholder="Enter your phone number" required>
                            </div>
                        </div>

                        <div class="contact-form-group">
                            <label>Corporate Email</label>
                            <div class="contact-input-wrapper">
                                <span class="contact-input-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                </span>
                                <input type="email" name="email" class="contact-form-control" placeholder="Enter your email address">
                            </div>
                        </div>

                        <div class="contact-form-group">
                            <label>Enquiry Scope</label>
                            <div class="contact-input-wrapper">
                                <span class="contact-input-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                                </span>
                                <select name="enquiry_scope" class="contact-form-control contact-select-control" required>
                                    <option value="" disabled selected>Select enquiry type</option>
                                    <option value="Firm Registration">Firm Registration</option>
                                    <option value="Society Registration">Society Registration</option>
                                    <option value="Labour License">Labour License</option>
                                    <option value="EPFO & ESIC">EPFO & ESIC Services</option>
                                    <option value="GST & Tax Filing">GST & Tax returns</option>
                                    <option value="Tenders & DSC">Tenders & eProcurement</option>
                                    <option value="Other">Other Services</option>
                                </select>
                            </div>
                        </div>

                        <div class="contact-form-group">
                            <label>Your Message</label>
                            <div class="contact-input-wrapper" style="align-items: flex-start;">
                                <span class="contact-input-icon" style="top: 14px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                </span>
                                <textarea name="message" class="contact-form-control" placeholder="Describe your compliance or licensing query..." required></textarea>
                            </div>
                        </div>

                        <button type="submit" name="send_lead" class="contact-submit-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                            Submit Enquiry Dossier
                        </button>
                    </form>
                <?php endif; ?>

                <div class="contact-form-footer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    Your information is safe with us. We never share your details.
                </div>
            </div>

            <!-- Let's Connect Column -->
            <div class="contact-details-column">
                <div class="contact-column-header">
                    <h2>Let's Connect</h2>
                    <p>We are available at our headquarters.</p>
                </div>

                <div class="map-iframe-container">
                    <iframe src="https://maps.google.com/maps?q=18.431168,79.130005&t=&z=16&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="connect-list">
                    <div class="connect-list-item">
                        <div class="connect-list-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                        <div class="connect-list-text">
                            <h4>Working Hours</h4>
                            <p>Mon - Sat: 9:30 AM - 7:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>

                    <div class="connect-list-item">
                        <div class="connect-list-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                        </div>
                        <div class="connect-list-text">
                            <h4>Quick Support</h4>
                            <p>We provide quick and reliable assistance on all working days.</p>
                        </div>
                    </div>

                    <div class="connect-list-item">
                        <div class="connect-list-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        </div>
                        <div class="connect-list-text">
                            <h4>Trusted & Secure</h4>
                            <p>100% Secure | Transparent Process | Client Confidentiality Assured</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bottom Benefits bar -->
<div class="benefits-divider-bar">
    <div class="benefits-bar-container">
        <div class="benefit-item">
            <div class="benefit-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
            </div>
            <span class="benefit-text">Government Compliance Experts</span>
        </div>
        <div class="benefit-separator"></div>
        
        <div class="benefit-item">
            <div class="benefit-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </div>
            <span class="benefit-text">End-to-End Support</span>
        </div>
        <div class="benefit-separator"></div>

        <div class="benefit-item">
            <div class="benefit-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
            </div>
            <span class="benefit-text">Fast & Reliable Service</span>
        </div>
        <div class="benefit-separator"></div>

        <div class="benefit-item">
            <div class="benefit-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path><path d="M2 12h20"></path></svg>
            </div>
            <span class="benefit-text">Pan India Assistance</span>
        </div>
        <div class="benefit-separator"></div>

        <div class="benefit-item">
            <div class="benefit-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
            </div>
            <span class="benefit-text">Customer Satisfaction First</span>
        </div>
    </div>
</div>

