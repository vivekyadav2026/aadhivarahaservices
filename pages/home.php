<!-- Hero Banner Section -->
<section class="hero-banner" style="background: linear-gradient(rgba(248, 250, 253, 0.75), rgba(226, 235, 244, 0.85)), url('images/hero_bg.png') center/cover no-repeat; border-bottom: 1px solid #e2ebf4; position: relative;">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text-area">
                <span class="hero-tag">TRUSTED • RELIABLE • PROFESSIONAL</span>
                <h1>Aadhivaraha <br><span>Services</span></h1>
                <h3>Trusted Services for EPF, ESIC, GST, Firm Registration, Labour Licences, Digital Signature, GeM & Tender Support</h3>
                <p>We provide professional documentation, registration and compliance services for individuals, businesses and employers with fast support and clear guidance.</p>
                
                <div class="hero-actions">
                    <a href="index.php?page=services" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                        View Services
                    </a>
                    <a href="https://wa.me/917981674916" class="btn btn-call">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        WhatsApp Support
                    </a>
                </div>
            </div>

            <div class="hero-form-box">
                <?php if ($submission_success): ?>
                    <!-- ── Home Form Success Screen ── -->
                    <div style="text-align:center; padding: 20px 8px;">
                        <div style="width:72px;height:72px;border-radius:50%;background:linear-gradient(135deg,#10b981,#059669);display:flex;align-items:center;justify-content:center;margin:0 auto 18px;box-shadow:0 6px 24px rgba(16,185,129,0.35);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <h3 style="font-size:18px;font-weight:800;color:var(--color-text-dark);margin-bottom:8px;">Enquiry Received!</h3>
                        <p style="font-size:13px;color:#64748b;line-height:1.7;margin-bottom:20px;">Thank you! Our team will contact you shortly. For urgent help, reach us on WhatsApp.</p>
                        <a href="https://wa.me/917981674916" target="_blank"
                           style="display:inline-flex;align-items:center;gap:8px;background:#25D366;color:#fff;text-decoration:none;padding:11px 20px;border-radius:8px;font-size:13px;font-weight:700;margin-bottom:10px;width:100%;justify-content:center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                            Chat on WhatsApp
                        </a>
                        <a href="index.php"
                           style="display:inline-flex;align-items:center;justify-content:center;gap:6px;background:transparent;color:#64748b;text-decoration:none;padding:9px 20px;border-radius:8px;font-size:13px;font-weight:600;border:1px solid #e2e8f0;width:100%;">
                            &#8592; Send Another Enquiry
                        </a>
                        <p style="font-size:11px;color:#94a3b8;margin-top:14px;">&#128336; Mon–Sat &nbsp;|&nbsp; 9:30 AM – 7:00 PM</p>
                    </div>

                <?php else: ?>
                    <h3 style="font-size:17px;font-weight:800;color:var(--color-text-dark);margin-bottom:18px;display:flex;align-items:center;gap:8px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                        Get Free Consultation
                    </h3>
                    <form action="index.php" method="POST">
                        <input type="hidden" name="service_name" value="Home Page Enquiry">

                        <div class="form-group" style="position:relative;margin-bottom:14px;">
                            <span style="position:absolute;left:13px;top:50%;transform:translateY(-50%);color:#94a3b8;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </span>
                            <input type="text" name="name" placeholder="Your Full Name" required
                                   style="padding:12px 12px 12px 38px;border:1.5px solid #e2e8f0;border-radius:8px;font-size:14px;width:100%;outline:none;transition:border-color .2s;"
                                   onfocus="this.style.borderColor='var(--color-primary)'" onblur="this.style.borderColor='#e2e8f0'">
                        </div>

                        <div class="form-group" style="position:relative;margin-bottom:14px;">
                            <span style="position:absolute;left:13px;top:50%;transform:translateY(-50%);color:#94a3b8;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </span>
                            <input type="tel" name="phone" placeholder="Mobile Number" required
                                   style="padding:12px 12px 12px 38px;border:1.5px solid #e2e8f0;border-radius:8px;font-size:14px;width:100%;outline:none;transition:border-color .2s;"
                                   onfocus="this.style.borderColor='var(--color-primary)'" onblur="this.style.borderColor='#e2e8f0'">
                        </div>

                        <div class="form-group" style="position:relative;margin-bottom:14px;">
                            <span style="position:absolute;left:13px;top:50%;transform:translateY(-50%);color:#94a3b8;pointer-events:none;z-index:1;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                            </span>
                            <select name="enquiry_scope" required
                                    style="padding:12px 12px 12px 38px;border:1.5px solid #e2e8f0;border-radius:8px;font-size:14px;width:100%;outline:none;appearance:none;-webkit-appearance:none;background:#fff url('data:image/svg+xml;utf8,<svg fill=\"%2394a3b8\" height=\"20\" viewBox=\"0 0 24 24\" width=\"20\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 10l5 5 5-5z\"/></svg>') no-repeat right 10px center;cursor:pointer;transition:border-color .2s;"
                                    onfocus="this.style.borderColor='var(--color-primary)'" onblur="this.style.borderColor='#e2e8f0'">
                                <option value="" disabled selected>-- Select Service --</option>
                                <optgroup label="EPF &amp; ESIC">
                                    <option value="EPFO &amp; ESIC Employer Services">EPFO &amp; ESIC Employer Services</option>
                                    <option value="EPFO &amp; ESIC Member Services">EPFO &amp; ESIC Member Services</option>
                                </optgroup>
                                <optgroup label="GST &amp; Tax">
                                    <option value="GST Registration &amp; Returns">GST Registration &amp; Returns</option>
                                    <option value="Income Tax Returns (ITR)">Income Tax Returns (ITR)</option>
                                </optgroup>
                                <optgroup label="Business Registration">
                                    <option value="Firm Registration">Firm Registration</option>
                                    <option value="Society Registration">Society Registration</option>
                                    <option value="AOP Registration">AOP Registration</option>
                                    <option value="FSSAI Food License">FSSAI Food License</option>
                                    <option value="MSME / Udyam Registration">MSME / Udyam Registration</option>
                                </optgroup>
                                <optgroup label="Labour &amp; Compliance">
                                    <option value="Labour License &amp; Shops Registration">Labour License &amp; Shops Registration</option>
                                    <option value="Labour Cards">Labour Cards</option>
                                </optgroup>
                                <optgroup label="Digital &amp; Identity">
                                    <option value="Digital Signature Certificate (DSC)">Digital Signature Certificate (DSC)</option>
                                    <option value="PAN &amp; TAN Services">PAN &amp; TAN Services</option>
                                    <option value="Jeevan Pramaan">Jeevan Pramaan</option>
                                </optgroup>
                                <optgroup label="Tenders &amp; Govt Portals">
                                    <option value="Telangana e-Procurement">Telangana e-Procurement</option>
                                    <option value="Central e-Procurement (CPPP)">Central e-Procurement (CPPP)</option>
                                    <option value="GeM Seller Registration">GeM Seller Registration</option>
                                </optgroup>
                                <optgroup label="Other Services">
                                    <option value="Government Job Application">Government Job Application</option>
                                    <option value="Bill Preparation Services">Bill Preparation Services</option>
                                    <option value="Typing / DTP / Documentation">Typing / DTP / Documentation</option>
                                    <option value="Other / General Enquiry">Other / General Enquiry</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group" style="position:relative;margin-bottom:16px;">
                            <span style="position:absolute;left:13px;top:14px;color:#94a3b8;pointer-events:none;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                            </span>
                            <textarea name="message" placeholder="Briefly describe your requirement..." required rows="3"
                                      style="padding:12px 12px 12px 38px;border:1.5px solid #e2e8f0;border-radius:8px;font-size:14px;width:100%;outline:none;resize:vertical;min-height:80px;font-family:inherit;transition:border-color .2s;"
                                      onfocus="this.style.borderColor='var(--color-primary)'" onblur="this.style.borderColor='#e2e8f0'"></textarea>
                        </div>

                        <button type="submit" name="send_lead"
                                style="background:var(--color-primary);color:#fff;width:100%;padding:14px;border-radius:8px;font-weight:700;font-size:15px;border:none;cursor:pointer;display:flex;justify-content:center;align-items:center;gap:8px;box-shadow:0 4px 14px rgba(249,115,22,0.35);transition:background .2s,transform .15s;"
                                onmouseover="this.style.background='#ea580c';this.style.transform='translateY(-1px)'"
                                onmouseout="this.style.background='var(--color-primary)';this.style.transform='translateY(0)'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                            Submit Enquiry
                        </button>

                        <div style="text-align:center;margin-top:12px;display:flex;justify-content:center;align-items:center;gap:6px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                            <p style="font-size:11.5px;margin:0;color:#94a3b8;">Your information is safe &amp; confidential.</p>
                        </div>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Features Bar -->
<section style="background: #f8fafd; padding: 24px 0; border-bottom: 1px solid #e2ebf4;">
    <div class="container">
        <div class="features-layout">
            <div style="display: flex; align-items: center; gap: 16px;">
                <div style="width: 48px; height: 48px; background: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 10px rgba(0,0,0,0.03); font-size: 20px; color: var(--color-primary); border: 1px solid #e2ebf4;">⏱️</div>
                <span style="font-weight: 600; font-size: 14px; line-height: 1.3; color: var(--color-text-dark);">Fast & Reliable<br>Service</span>
            </div>
            <div style="display: flex; align-items: center; gap: 16px;">
                <div style="width: 48px; height: 48px; background: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 10px rgba(0,0,0,0.03); font-size: 20px; color: var(--color-primary); border: 1px solid #e2ebf4;">👤</div>
                <span style="font-weight: 600; font-size: 14px; line-height: 1.3; color: var(--color-text-dark);">Expert Support<br>Always</span>
            </div>
            <div style="display: flex; align-items: center; gap: 16px;">
                <div style="width: 48px; height: 48px; background: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 10px rgba(0,0,0,0.03); font-size: 20px; color: var(--color-primary); border: 1px solid #e2ebf4;">🛡️</div>
                <span style="font-weight: 600; font-size: 14px; line-height: 1.3; color: var(--color-text-dark);">100% Secure<br>Process</span>
            </div>
            <div style="display: flex; align-items: center; gap: 16px;">
                <div style="width: 48px; height: 48px; background: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 10px rgba(0,0,0,0.03); font-size: 20px; color: var(--color-primary); border: 1px solid #e2ebf4;">📄</div>
                <span style="font-weight: 600; font-size: 14px; line-height: 1.3; color: var(--color-text-dark);">Transparent<br>Pricing</span>
            </div>
        </div>
    </div>
</section>

<!-- EPFO 3.0 Specialist Banner -->
<section style="background: linear-gradient(135deg, #f0f7ff, #e0f2fe); padding: 60px 0; border-bottom: 1px solid #d1e0f0;">
    <div class="container">
        <div style="background: #fff; border-radius: 16px; padding: 40px; box-shadow: 0 10px 30px rgba(2,132,199,0.08); display: flex; flex-wrap: wrap; gap: 40px; align-items: center; border: 1px solid #bae6fd; position: relative; overflow: hidden;">
            <!-- Background Decoration -->
            <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: #e0f2fe; border-radius: 50%; opacity: 0.5; z-index: 0;"></div>
            
            <div style="flex: 1; min-width: 320px; z-index: 1;">
                <div style="display: inline-block; background: #f0fdf4; color: #15803d; border: 1px solid #bbf7d0; font-size: 13px; font-weight: 800; padding: 6px 14px; border-radius: 20px; margin-bottom: 20px; letter-spacing: 0.5px;">🌟 EPFO 3.0 – COMPLETE SPECIALIST 🌟</div>
                <h2 style="font-size: 32px; font-weight: 800; color: var(--color-primary); margin-bottom: 16px; line-height: 1.3;">Need expert assistance with EPFO 3.0 services?</h2>
                <p style="font-size: 16px; color: #475569; line-height: 1.6; margin-bottom: 24px;">Get complete Professional Support for All EPFO 3.0 Employee & Employer Services with Fast & Paperless Claim Guidance.</p>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 14px; margin-bottom: 32px;">
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 15px; color: #334155; font-weight: 600;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        PF Withdrawal Claims
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 15px; color: #334155; font-weight: 600;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        UAN Activation & KYC Updates
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 15px; color: #334155; font-weight: 600;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        Aadhaar, PAN & Bank Linking
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 15px; color: #334155; font-weight: 600;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        Name / DOB / Father Name Corrections
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 15px; color: #334155; font-weight: 600;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        Joint Declaration Support
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 15px; color: #334155; font-weight: 600;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        Pension (EPS) Services
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 15px; color: #334155; font-weight: 600;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        EPF Transfer & Balance Assistance
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 15px; color: #334155; font-weight: 600;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        Employer & Employee EPF Support
                    </div>
                </div>

                <div style="display: flex; gap: 16px; flex-wrap: wrap;">
                    <a href="https://wa.me/917981674916?text=Hello%2C%20I%20need%20assistance%20with%20EPFO%203.0%20services" target="_blank" class="btn btn-call" style="display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px; font-size: 15px; border-radius: 8px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        Expert on WhatsApp
                    </a>
                    <a href="index.php?page=service-details&id=epfo-3-specialist" class="btn btn-primary" style="display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px; font-size: 15px; border-radius: 8px; background: #0284c7; border: 1px solid #0284c7;">
                        View Details 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
            <div style="flex: 0 0 30%; min-width: 250px; text-align: center; display: flex; justify-content: center; align-items: center; z-index: 1;">
                 <div style="width: 100%; max-width: 280px; height: 280px; background: linear-gradient(135deg, #bae6fd, #e0f2fe); border-radius: 50%; display: flex; justify-content: center; align-items: center; box-shadow: 0 10px 30px rgba(2, 132, 199, 0.15); border: 8px solid #fff;">
                     <div style="font-size: 90px; line-height: 1; color: var(--color-primary); display: flex; flex-direction: column; align-items: center; gap: 15px;">
                        <span>💼</span>
                        <div style="background: #fff; padding: 6px 16px; border-radius: 20px; font-size: 15px; font-weight: 800; color: #0284c7; box-shadow: 0 4px 10px rgba(0,0,0,0.08); letter-spacing: 0.5px;">EPFO 3.0 Expert</div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Services Section -->
<section id="popular-services" style="background-color: #fff; padding: 80px 0;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 50px;">
            <div class="section-tag" style="color: var(--color-primary); background: transparent; border: none; font-size: 13px; font-weight: 800; margin-bottom: 4px; letter-spacing: 1px;">WHAT WE OFFER</div>
            <h2 class="section-title" style="font-size: 32px; color: var(--color-primary); margin-bottom: 12px;">Our Popular Services</h2>
            <div style="width: 40px; height: 4px; background: var(--color-accent); margin: 0 auto; border-radius: 2px;"></div>
        </div>

        <div class="popular-services-grid">
            <!-- 1. EPFO & ESIC (Employer Side) -->
            <a href="index.php?page=service-details&id=employer-side" class="service-card" style="text-align: center; padding: 32px 16px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: none;">
                <div style="margin: 0 auto 16px; width: 64px; height: 64px; background: #f8fafc; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 32px; color: var(--color-primary);">🏢</div>
                <h3 style="font-size: 16px; margin-bottom: 8px; color: var(--color-primary);">EPFO & ESIC (Employer Side)</h3>
                <p style="font-size: 12.5px; line-height: 1.5; color: #64748b; margin: 0;">Establishment Registration, ECR Filing & Compliance</p>
            </a>

            <!-- 3. GST Services -->
            <a href="index.php?page=service-details&id=gst-services" class="service-card" style="text-align: center; padding: 32px 16px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: none;">
                <div style="margin: 0 auto 16px; width: 64px; height: 64px; background: #f8fafc; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 32px; color: var(--color-primary);">📊</div>
                <h3 style="font-size: 16px; margin-bottom: 8px; color: var(--color-primary);">GST Services</h3>
                <p style="font-size: 12.5px; line-height: 1.5; color: #64748b; margin: 0;">GST Registration, Returns Filing & Compliance</p>
            </a>

            <!-- 4. Firm Registration -->
            <a href="index.php?page=service-details&id=firm-registration" class="service-card" style="text-align: center; padding: 32px 16px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: none;">
                <div style="margin: 0 auto 16px; width: 64px; height: 64px; background: #f8fafc; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 32px; color: var(--color-primary);">🏢</div>
                <h3 style="font-size: 16px; margin-bottom: 8px; color: var(--color-primary);">Firm Registration</h3>
                <p style="font-size: 12.5px; line-height: 1.5; color: #64748b; margin: 0;">Proprietorship, Partnership, LLP, Private Limited</p>
            </a>

            <!-- 5. Digital Signature -->
            <a href="index.php?page=service-details&id=digital-signature" class="service-card" style="text-align: center; padding: 32px 16px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: none;">
                <div style="margin: 0 auto 16px; width: 64px; height: 64px; background: #f8fafc; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 32px; color: var(--color-primary);">✒️</div>
                <h3 style="font-size: 16px; margin-bottom: 8px; color: var(--color-primary);">Digital Signature</h3>
                <p style="font-size: 12.5px; line-height: 1.5; color: #64748b; margin: 0;">Class 3 DSC for Tender, GST, ROC & Others</p>
            </a>

            <!-- 6. Labour Licences -->
            <a href="index.php?page=service-details&id=labour-license" class="service-card" style="text-align: center; padding: 32px 16px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: none;">
                <div style="margin: 0 auto 16px; width: 64px; height: 64px; background: #f8fafc; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 32px; color: var(--color-primary);">🏛️</div>
                <h3 style="font-size: 16px; margin-bottom: 8px; color: var(--color-primary);">Labour Licences</h3>
                <p style="font-size: 12.5px; line-height: 1.5; color: #64748b; margin: 0;">State Licence, CLRA, Shop & Establishment</p>
            </a>

            <!-- 7. EPFO & ESIC (Member Side) -->
            <a href="index.php?page=service-details&id=epfo-esic-claims" class="service-card" style="text-align: center; padding: 32px 16px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: none;">
                <div style="margin: 0 auto 16px; width: 64px; height: 64px; background: #f8fafc; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 32px; color: var(--color-primary);">👥</div>
                <h3 style="font-size: 16px; margin-bottom: 8px; color: var(--color-primary);">EPFO & ESIC (Member Side)</h3>
                <p style="font-size: 12.5px; line-height: 1.5; color: #64748b; margin: 0;">10C, 10D, 19, 31, Pension & Medical Claims</p>
            </a>

            <!-- 8. GeM Registration -->
            <a href="index.php?page=service-details&id=gem-registration" class="service-card" style="text-align: center; padding: 32px 16px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: none;">
                <div style="margin: 0 auto 16px; width: 64px; height: 64px; background: #f8fafc; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 32px; color: var(--color-primary);">💻</div>
                <h3 style="font-size: 16px; margin-bottom: 8px; color: var(--color-primary);">GeM Registration</h3>
                <p style="font-size: 12.5px; line-height: 1.5; color: #64748b; margin: 0;">GeM Registration & Bid Participation</p>
            </a>
            <!-- 9. Tender Support -->
            <a href="index.php?page=service-details&id=central-eprocurement" class="service-card hide-on-mobile" style="text-align: center; padding: 32px 16px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: none;">
                <div style="margin: 0 auto 16px; width: 64px; height: 64px; background: #f8fafc; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 32px; color: var(--color-primary);">📄</div>
                <h3 style="font-size: 16px; margin-bottom: 8px; color: var(--color-primary);">Tender Support</h3>
                <p style="font-size: 12.5px; line-height: 1.5; color: #64748b; margin: 0;">Telangana & Central e-Procurement Tenders</p>
            </a>

            <!-- 10. Xerox & DTP -->
            <a href="index.php?page=service-details&id=job-works" class="service-card hide-on-mobile" style="text-align: center; padding: 32px 16px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: none;">
                <div style="margin: 0 auto 16px; width: 64px; height: 64px; background: #f8fafc; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 32px; color: var(--color-primary);">🖨️</div>
                <h3 style="font-size: 16px; margin-bottom: 8px; color: var(--color-primary);">Xerox & DTP</h3>
                <p style="font-size: 12.5px; line-height: 1.5; color: #64748b; margin: 0;">Xerox, Printing, Scanning & Document Services</p>
            </a>
        </div>
        
        <div style="text-align: center; margin-top: 50px;">
             <a href="index.php?page=services" class="btn btn-outline">View All Services &gt;</a>
        </div>
    </div>
</section>

<!-- Stats Banner -->
<section style="background-color: var(--color-primary); padding: 60px 0;">
    <div class="container">
        <div class="stats-grid-layout">
            <div class="stats-item" style="border-right: 1px solid rgba(255,255,255,0.15); padding: 10px;">
                <div style="font-size: 40px; margin-bottom: 15px;">📄</div>
                <h4 style="font-size: 18px; font-weight: 800; margin-bottom: 8px;">Accurate Documentation</h4>
                <p style="font-size: 14px; font-weight: 500; color: rgba(255,255,255,0.85); line-height: 1.5;">Professional documentation with complete compliance support.</p>
            </div>
            <div class="stats-item" style="border-right: 1px solid rgba(255,255,255,0.15); padding: 10px;">
                <div style="font-size: 40px; margin-bottom: 15px;">⏱️</div>
                <h4 style="font-size: 18px; font-weight: 800; margin-bottom: 8px;">Timely Service</h4>
                <p style="font-size: 14px; font-weight: 500; color: rgba(255,255,255,0.85); line-height: 1.5;">Quick processing with accurate and timely service.</p>
            </div>
            <div class="stats-item" style="border-right: 1px solid rgba(255,255,255,0.15); padding: 10px;">
                <div style="font-size: 40px; margin-bottom: 15px;">🤝</div>
                <h4 style="font-size: 18px; font-weight: 800; margin-bottom: 8px;">Trusted Guidance</h4>
                <p style="font-size: 14px; font-weight: 500; color: rgba(255,255,255,0.85); line-height: 1.5;">Reliable guidance for Individuals, Businesses & Employers.</p>
            </div>
            <div class="stats-item" style="padding: 10px;">
                <div style="font-size: 40px; margin-bottom: 15px;">💼</div>
                <h4 style="font-size: 18px; font-weight: 800; margin-bottom: 8px;">One Stop Business Solutions</h4>
                <p style="font-size: 14px; font-weight: 500; color: rgba(255,255,255,0.85); line-height: 1.5;">EPF, ESIC, GST, PAN, MSME, Labour Licence, DSC, GeM, Tender Support, Xerox & DTP.</p>
            </div>
        </div>
    </div>
</section>

<!-- Founders Section -->
<section style="background-color: #ffffff; padding: 80px 0;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 50px;">
            <span style="color: var(--color-accent); font-size: 11px; font-weight: 800; letter-spacing: 1px; text-transform: uppercase; display: block; margin-bottom: 6px;">OUR TEAM</span>
            <h2 style="font-size: 28px; font-weight: 800; color: var(--color-primary); margin-bottom: 10px;">Meet Our Founders</h2>
            <span style="display: block; width: 40px; height: 3px; background: var(--color-accent); margin: 0 auto;"></span>
        </div>
        
        <div class="founders-grid">
            <!-- Founder 1 -->
            <div class="founder-card">
                <div class="founder-img-wrapper">
                    <img src="images/prashanth.jpg" alt="P. Prashanth" class="founder-img">
                </div>
                <div class="founder-info">
                    <h3 class="founder-name">P. Prashanth</h3>
                    <p class="founder-title">Founder</p>
                </div>
            </div>
            
            <!-- Founder 2 -->
            <div class="founder-card">
                <div class="founder-img-wrapper">
                    <img src="images/rajesh.jpg" alt="D. Rajesh" class="founder-img">
                </div>
                <div class="founder-info">
                    <h3 class="founder-name">D. Rajesh</h3>
                    <p class="founder-title">Founder</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section style="background-color: #f8fafd; padding: 80px 0 100px 0;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 60px;">
            <div class="section-tag" style="color: var(--color-primary); background: transparent; border: none; font-size: 13px; font-weight: 800; margin-bottom: 4px; letter-spacing: 1px;">WHY CHOOSE US</div>
            <h2 class="section-title" style="font-size: 32px; color: var(--color-primary); margin-bottom: 12px;">Why Clients Trust Us</h2>
            <div style="width: 40px; height: 4px; background: var(--color-accent); margin: 0 auto; border-radius: 2px;"></div>
        </div>

        <div class="why-choose-grid-layout">
            <div style="display: flex; gap: 16px; align-items: flex-start;">
                <div style="font-size: 40px; color: var(--color-primary); line-height: 1;">🏅</div>
                <div>
                    <h4 style="color: var(--color-primary); font-size: 16px; font-weight: 800; margin-bottom: 8px;">Experienced Professionals</h4>
                    <p style="color: var(--color-text); font-size: 13.5px; line-height: 1.6; margin: 0;">9+ years of experience in compliance and documentation.</p>
                </div>
            </div>
            <div style="display: flex; gap: 16px; align-items: flex-start;">
                <div style="font-size: 40px; color: var(--color-primary); line-height: 1;">⏱️</div>
                <div>
                    <h4 style="color: var(--color-primary); font-size: 16px; font-weight: 800; margin-bottom: 8px;">Timely & Accurate</h4>
                    <p style="color: var(--color-text); font-size: 13.5px; line-height: 1.6; margin: 0;">We ensure accurate work delivered on time.</p>
                </div>
            </div>
            <div style="display: flex; gap: 16px; align-items: flex-start;">
                <div style="font-size: 40px; color: var(--color-primary); line-height: 1;">📋</div>
                <div>
                    <h4 style="color: var(--color-primary); font-size: 16px; font-weight: 800; margin-bottom: 8px;">End-to-End Support</h4>
                    <p style="color: var(--color-text); font-size: 13.5px; line-height: 1.6; margin: 0;">From registration to compliance we support you every step.</p>
                </div>
            </div>
            <div style="display: flex; gap: 16px; align-items: flex-start;">
                <div style="font-size: 40px; color: var(--color-primary); line-height: 1;">🤝</div>
                <div>
                    <h4 style="color: var(--color-primary); font-size: 16px; font-weight: 800; margin-bottom: 8px;">Customer First</h4>
                    <p style="color: var(--color-text); font-size: 13.5px; line-height: 1.6; margin: 0;">Clear guidance, fast support and reliable service.</p>
                </div>
            </div>
        </div>
</section>