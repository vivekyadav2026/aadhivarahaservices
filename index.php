<?php
// Global array containing exactly the 23 services requested
$services = [
    'firm-registration' => [
        'title' => 'Firm Registration',
        'desc' => 'Complete legal drafting and registration setup for Partnership and Proprietorship firms.',
        'details' => 'Formalize your business setup. We draft the Partnership Deed, execute notary, complete register filings, and secure your registration certificate.',
        'icon' => '🏢',
        'pricing' => '₹4,999 onwards',
        'documents' => ['PAN Card of Partners', 'Aadhaar Card of Partners', 'Proof of Registered Office Address', 'NOC from Property Owner'],
        'eligibility' => 'Min 2 Partners for Partnerships, 1 for Sole Proprietorship. Indian Nationals only.',
        'process' => '1. Document Verification -> 2. Deed Drafting -> 3. Registration Submission -> 4. Certificate Issued',
        'timeline' => '7 to 10 Working Days',
        'faq' => [
            'q' => 'Is a partnership deed mandatory?',
            'a' => 'Yes, a partnership deed holds all roles, share rates, and guidelines of your operations.'
        ]
    ],
    'society-registration' => [
        'title' => 'Society Registration',
        'desc' => 'Official registration for non-profit societies, welfare boards, and trusts.',
        'details' => 'Draft the Memorandum of Association (MoA) and Rules & Regulations with verified parameters under local registrar guidelines.',
        'icon' => '🤝',
        'pricing' => '₹9,999 onwards',
        'documents' => ['List of Founding Members', 'Memorandum of Association', 'Address Proof of Society', 'NOC Certificate'],
        'eligibility' => 'Minimum of 7 members required to constitute a society registration.',
        'process' => '1. Drafting MoA -> 2. Document Authentication -> 3. Filing with District Registrar -> 4. Approval',
        'timeline' => '15 to 20 Working Days',
        'faq' => [
            'q' => 'Can we register a society online?',
            'a' => 'Yes, many state registrars allow online file submission which we manage completely.'
        ]
    ],
    'labour-license' => [
        'title' => 'Labour License',
        'desc' => 'Acquire state and central department labour licenses for contractors and enterprise sites.',
        'details' => 'Obtain compliance certificates and official labor contractor licenses to hire contract employees legally.',
        'icon' => '📋',
        'pricing' => '₹5,499 onwards',
        'documents' => ['Trade License', 'Partnership Deed / Incorporation Docs', 'PF/ESI Code Details', 'Contract Work Agreement'],
        'eligibility' => 'Establishments employing 20 or more contract workers (thresholds vary by state).',
        'process' => '1. Core Profile Setup -> 2. Upload of Forms -> 3. Challan Payment -> 4. License Allocation',
        'timeline' => '12 to 15 Working Days',
        'faq' => [
            'q' => 'How long is the license valid?',
            'a' => 'Typically valid for one year, requiring renewal before the anniversary date.'
        ]
    ],
    'epfo-registration' => [
        'title' => 'EPFO Registration',
        'desc' => 'Mandatory establishment setup under the Employees Provident Fund Organization.',
        'details' => 'Get your corporate PF code to start contributing to your employees retirement security funds.',
        'icon' => '🏛️',
        'pricing' => '₹2,999 onwards',
        'documents' => ['PAN of Company', 'Digital Signature (DSC)', 'Bank Cancelled Cheque', 'Employee Identity Proofs'],
        'eligibility' => 'Businesses with 20 or more employees must register for EPFO compliance.',
        'process' => '1. Setup on Shram Suvidha -> 2. File Verification -> 3. Generation of EPF Code Number',
        'timeline' => '3 to 5 Working Days',
        'faq' => [
            'q' => 'Can small businesses voluntary register?',
            'a' => 'Yes, companies with less than 20 workers can opt for voluntary EPFO registration.'
        ]
    ],
    'esic-registration' => [
        'title' => 'ESIC Registration',
        'desc' => 'Establishment code setup for the Employees State Insurance healthcare program.',
        'details' => 'Register your business under the ESIC program to offer medical and sickness benefits to employees.',
        'icon' => '🏥',
        'pricing' => '₹2,999 onwards',
        'documents' => ['Company Registration Proof', 'PAN & TAN of Business', 'List of Employees with Wages', 'Cancelled Cheque'],
        'eligibility' => 'Applicable to factories and shops with 10 or more employees earning under ₹21,000/month.',
        'process' => '1. Online Application Form -> 2. Entity Details Upload -> 3. Issuance of 17-digit ESIC Code',
        'timeline' => '3 to 5 Working Days',
        'faq' => [
            'q' => 'Is ESIC mandatory for all offices?',
            'a' => 'It is mandatory once your active headcount exceeds the state threshold limit.'
        ]
    ],
    'epfo-esic-returns' => [
        'title' => 'EPFO & ESIC Returns',
        'desc' => 'Monthly compliance filings, salary summaries, and payment challan allocations.',
        'details' => 'File monthly ECRs (Electronic Challan cum Returns) and ESIC contributions accurately to avoid hefty regulatory penalties.',
        'icon' => '💵',
        'pricing' => '₹1,499 / Month onwards',
        'documents' => ['Monthly Employee Wage Sheet', 'Active Attendance Register', 'Bank Transaction Details'],
        'eligibility' => 'All businesses registered under EPFO and ESIC rules.',
        'process' => '1. Data Compiling -> 2. Challan Allocation on Portal -> 3. Verification -> 4. Filing Receipt Output',
        'timeline' => 'Filing done before 15th of every month',
        'faq' => [
            'q' => 'What is the due date for PF/ESI returns?',
            'a' => 'Returns and payments must be completed by the 15th of the subsequent month.'
        ]
    ],
    'epfo-e-nomination' => [
        'title' => 'EPFO E-Nomination',
        'desc' => 'Digital nominee declarations mapping on the Unified Member Portal.',
        'details' => 'Ensure smooth passage of PF savings and pension schemes to the employee\'s family by submitting digital nominations.',
        'icon' => '✍️',
        'pricing' => '₹499 onwards',
        'documents' => ['Member Aadhaar Card', 'Nominee Aadhaar & Photo', 'Nominee Bank Account Info'],
        'eligibility' => 'All active EPF member account holders.',
        'process' => '1. Profile Check -> 2. Add Nominee Info -> 3. Aadhaar OTP E-Sign Verification',
        'timeline' => '1 to 2 Working Days',
        'faq' => [
            'q' => 'Is e-nomination compulsory for withdrawals?',
            'a' => 'Yes, most online claims now require an active e-nomination on file first.'
        ]
    ],
    'epfo-esic-claims' => [
        'title' => 'EPFO & ESIC Claims',
        'desc' => 'Settlement assistance for PF withdrawals, advances, pension claims, and benefit forms.',
        'details' => 'Get assistance navigating claims (Forms 31, 19, 10C) or ESIC medical claim benefits with minimal rejection rates.',
        'icon' => '⚖️',
        'pricing' => '₹999 onwards',
        'documents' => ['UAN Details', 'Aadhaar Link Status', 'Bank Passbook Photo', 'Employer Approvals (if offline)'],
        'eligibility' => 'PF members or ESIC insured persons seeking cash benefits or withdrawals.',
        'process' => '1. Service verification -> 2. Filing claim form -> 3. Tracking Status -> 4. Fund Disbursal',
        'timeline' => '7 to 15 Working Days',
        'faq' => [
            'q' => 'Why do claims get rejected?',
            'a' => 'Mismatch in name, signature, birthdate, or unlinked bank accounts are common causes.'
        ]
    ],
    'uan-activation' => [
        'title' => 'UAN Member Activation',
        'desc' => 'Link employee Aadhaar/PAN, update KYC parameters, and configure active accounts.',
        'details' => 'Activate the Universal Account Number (UAN) to enable employees to download passbooks and track balances online.',
        'icon' => '👤',
        'pricing' => '₹299 onwards',
        'documents' => ['Active UAN ID', 'Aadhaar Card Details', 'Mobile Number linked to Aadhaar'],
        'eligibility' => 'Any salaried worker with an allocated UAN.',
        'process' => '1. Enter UAN & Aadhaar -> 2. Request OTP -> 3. Verification -> 4. Password Setup',
        'timeline' => 'Instant / 1 Day',
        'faq' => [
            'q' => 'Can I activate my UAN without Aadhaar?',
            'a' => 'Aadhaar link is mandatory for activation on the unified portal.'
        ]
    ],
    'gst-registration' => [
        'title' => 'GST Registration',
        'desc' => 'Apply for a Goods and Services Tax Identification Number (GSTIN) for businesses.',
        'details' => 'Acquire your official GSTIN. We take care of submitting documents, resolving clarify queries, and obtaining the certificate.',
        'icon' => '💼',
        'pricing' => '₹2,499 onwards',
        'documents' => ['PAN Card of Business', 'Owner Electricity Bill', 'Rent Agreement', 'Cancel Cheque / Statement'],
        'eligibility' => 'Mandatory for businesses with turnover exceeding ₹40 Lakhs (Goods) or ₹20 Lakhs (Services).',
        'process' => '1. Uploading Documents -> 2. Form Submission -> 3. ARN Generation -> 4. GSTIN Allotment',
        'timeline' => '3 to 7 Working Days',
        'faq' => [
            'q' => 'Is physical presence required for GST setup?',
            'a' => 'No, the entire process is conducted online by our advisors.'
        ]
    ],
    'gst-returns' => [
        'title' => 'GST Returns',
        'desc' => 'Monthly and quarterly tax filing (GSTR-1, GSTR-3B) and Input Tax Credit reconciliation.',
        'details' => 'Avoid penalty fees. We compile your outward invoices, review tax calculations, and file correct returns.',
        'icon' => '📊',
        'pricing' => '₹999 / Month onwards',
        'documents' => ['Sales Register', 'Purchase Invoices', 'GSTR-2B Input Tax Credit Statement'],
        'eligibility' => 'All businesses registered with an active GSTIN.',
        'process' => '1. Reconcile Sales & Purchases -> 2. Draft GSTR-1 & 3B -> 3. Client Review -> 4. Final Submission',
        'timeline' => 'Due monthly on the 11th, 20th, or 24th',
        'faq' => [
            'q' => 'What happens if we file late?',
            'a' => 'A daily late fee and interest on unpaid tax liabilities will be applied by the GST department.'
        ]
    ],
    'it-returns' => [
        'title' => 'Income Tax Returns (ITR)',
        'desc' => 'Annual income calculation and filing for individuals, professionals, and firms.',
        'details' => 'File your financial returns securely. We calculate your liabilities, maximize deductions, and file the correct ITR forms.',
        'icon' => '⚖️',
        'pricing' => '₹1,999 onwards',
        'documents' => ['Form 16 / 16A', 'AIS / TIS Statement', 'Bank Accounts Statements', 'Investment Proofs'],
        'eligibility' => 'Any entity earning income above the basic exemption limit (₹3 Lakhs/year).',
        'process' => '1. Collect Income Reports -> 2. Computation -> 3. Submission -> 4. E-verification',
        'timeline' => '3 to 5 Working Days',
        'faq' => [
            'q' => 'Can we file ITR after the July 31st deadline?',
            'a' => 'Yes, a Belated Return can be submitted until December 31st with a late fee.'
        ]
    ],
    'fy-update' => [
        'title' => 'Financial Year Update',
        'desc' => 'Reconciliation of company books and transition configs for the new financial year.',
        'details' => 'Ensure your accounting databases are closed, depreciation is mapped, and assets are updated for the new fiscal period.',
        'icon' => '📅',
        'pricing' => '₹4,999 onwards',
        'documents' => ['Current Trial Balance', 'Bank Reconciliations', 'Fixed Assets Register'],
        'eligibility' => 'Any business maintaining books under Indian Accounting Standards.',
        'process' => '1. Book Closing -> 2. Entry Reconciliation -> 3. Opening New Ledgers',
        'timeline' => '5 to 7 Working Days',
        'faq' => [
            'q' => 'When should this update take place?',
            'a' => 'Usually completed immediately after March 31st to start the new financial year clean.'
        ]
    ],
    'msme-udyam-registration' => [
        'title' => 'MSME Udyam Registration',
        'desc' => 'Secure government benefits, subsidies, and priority loan certificates.',
        'details' => 'Register under the MSME ministry to receive protection from delayed payments and avail interest subsidies.',
        'icon' => '🚀',
        'pricing' => '₹1,499 onwards',
        'documents' => ['Owner Aadhaar Card', 'PAN Card of Business', 'Bank Account Info'],
        'eligibility' => 'Micro, Small, and Medium enterprises within turnover limits.',
        'process' => '1. Aadhaar Verification -> 2. Portal registration -> 3. Certificate Issuance',
        'timeline' => '2 Working Days',
        'faq' => [
            'q' => 'Is there any renewal for Udyam Certificate?',
            'a' => 'Udyam Registration is permanent and does not require renewal.'
        ]
    ],
    'labour-cards' => [
        'title' => 'Labour Cards',
        'desc' => 'Obtain government welfare benefits and identity cards for labor forces.',
        'details' => 'Register workers to receive subsidies, welfare schemes, and official identity proofs under state labor boards.',
        'icon' => '💳',
        'pricing' => '₹999 onwards',
        'documents' => ['Worker Aadhaar Card', 'Bank Passbook Copy', 'Employer Certificate / Self-Declaration'],
        'eligibility' => 'Construction and unorganized sector workers aged 18 to 60.',
        'process' => '1. Verification of Work Details -> 2. Submission on Labour Portal -> 3. Verification -> 4. Card Allotment',
        'timeline' => '7 to 10 Working Days',
        'faq' => [
            'q' => 'What benefits do workers get?',
            'a' => 'Welfare payments, education scholarship schemes for children, and medical support.'
        ]
    ],
    'pan-tan-services' => [
        'title' => 'PAN & TAN Services (NSDL)',
        'desc' => 'Apply for new PAN/TAN cards, make corrections, and manage NSDL profiles.',
        'details' => 'Obtain Permanent Account Numbers (PAN) and Tax Deduction Accounts (TAN) safely without paperwork errors.',
        'icon' => '💳',
        'pricing' => '₹999 onwards',
        'documents' => ['Identity Proof (Aadhaar)', 'Address Proof', 'Incorporation Certificate (for Businesses)'],
        'eligibility' => 'All individuals and corporate entities paying taxes or deductors.',
        'process' => '1. Select Form 49A/49B -> 2. Complete Details -> 3. E-KYC Submission -> 4. Physical Card Delivery',
        'timeline' => '5 to 7 Working Days',
        'faq' => [
            'q' => 'Can we apply for PAN and TAN together?',
            'a' => 'Yes, corporate entities can apply concurrently during registration.'
        ]
    ],
    'jeevan-pramaan' => [
        'title' => 'Jeevan Pramaan',
        'desc' => 'Biometric-enabled digital life certificate submissions for pensioners.',
        'details' => ' পেনশন details are updated instantly using biometric fingerprints or iris verification to avoid physical bank visits.',
        'icon' => '🔐',
        'pricing' => '₹499 onwards',
        'documents' => ['Pensioner Aadhaar Card', 'PPO Number Details', 'Pension Disbursing Bank Account Info'],
        'eligibility' => 'Any central, state, or defense government pensioner.',
        'process' => '1. Biometric verification -> 2. Syncing details -> 3. Digital Certificate Generation',
        'timeline' => 'Same Day / Instant',
        'faq' => [
            'q' => 'Is it mandatory every year?',
            'a' => 'Yes, pensioners must submit a life certificate in November of each year.'
        ]
    ],
    'telangana-eprocurement' => [
        'title' => 'Telangana eProcurement Registration',
        'desc' => 'Vendor enrollment and bidding integration for Telangana state tenders.',
        'details' => 'Get configured on the Telangana e-Procurement portal to bid on state government supply contracts and construction bids.',
        'icon' => '🏛️',
        'pricing' => '₹5,999 onwards',
        'documents' => ['Firm Registration Proof', 'Class 3 Digital Signature Certificate (DSC)', 'PAN Card', 'Bank Cheque'],
        'eligibility' => 'Proprietorships, Partnerships, and Private Ltd companies.',
        'process' => '1. Register Portal Account -> 2. Associate DSC Keys -> 3. Document Auditing -> 4. Profile Activation',
        'timeline' => '5 to 7 Working Days',
        'faq' => [
            'q' => 'Is a DSC mandatory?',
            'a' => 'Yes, a Class 3 Digital Signature is required for authentication.'
        ]
    ],
    'central-eprocurement' => [
        'title' => 'Central eProcurement Registration',
        'desc' => 'National CPPP portal enrollment for bidding on central government tenders.',
        'details' => 'Unlock nationwide contracts. Register as an approved vendor on the national public procurement database.',
        'icon' => '🛡️',
        'pricing' => '₹6,999 onwards',
        'documents' => ['Business PAN & Registration Details', 'Class 3 DSC', 'Work Experience details (optional)'],
        'eligibility' => 'All legal commercial entities registered in India.',
        'process' => '1. Vendor enrollment request -> 2. DSC association -> 3. Profile verification',
        'timeline' => '5 to 7 Working Days',
        'faq' => [
            'q' => 'What is CPPP?',
            'a' => 'Central Public Procurement Portal is a single point of access for all central govt tenders.'
        ]
    ],
    'gem-registration' => [
        'title' => 'GeM Registration',
        'desc' => 'Register as an official seller on the Government e-Marketplace portal.',
        'details' => 'Directly sell your services or products to central and state offices through GeM catalog setups.',
        'icon' => '🛒',
        'pricing' => '₹4,999 onwards',
        'documents' => ['Aadhaar of Director/Owner', 'Business PAN Card', 'GSTIN Details', 'Cancel Cheque'],
        'eligibility' => 'OEM manufacturers, service providers, and traders.',
        'process' => '1. User ID creation -> 2. Aadhaar / PAN Verification -> 3. Profile Setup -> 4. Product Upload',
        'timeline' => '5 to 7 Working Days',
        'faq' => [
            'q' => 'Are there transaction charges on GeM?',
            'a' => 'GeM is free for basic registration; small fees are applied during high-value bid participation.'
        ]
    ],
    'job-assistance' => [
        'title' => 'Applying all types of Government or Private jobs',
        'desc' => 'Guided form submissions, application monitoring, and eligibility audits.',
        'details' => 'Get expert help filing complex government and private job recruitments with accurate documents.',
        'icon' => '🎓',
        'pricing' => '',
        'documents' => ['Education Certificates', 'Category Certificates (if any)', 'Aadhaar Card', 'Passport Photo'],
        'eligibility' => 'Candidates satisfying specific recruitment notifications.',
        'process' => '1. Notification Review -> 2. Document upload -> 3. Final submission',
        'timeline' => 'As per vacancy deadlines',
        'faq' => [
            'q' => 'Do you guarantee selection?',
            'a' => 'No, we only provide documentation submission and application filing assistance.'
        ]
    ],
    'bill-preparation' => [
        'title' => 'Government or Private jobs bill preparation',
        'desc' => 'Accurate preparation and submission of contractor bills.',
        'details' => 'Avoid delays. We structure payment claims, compile measurement sheets, and map invoice details.',
        'icon' => '📝',
        'pricing' => '',
        'documents' => ['Contract Work Order', 'Measurement Books (MB)', 'Invoice Copy'],
        'eligibility' => 'Government or private contractors executing works.',
        'process' => '1. Bill compilation -> 2. Reconciliation -> 3. Final filing',
        'timeline' => '3 to 5 Working Days',
        'faq' => [
            'q' => 'Do you coordinate with department offices?',
            'a' => 'We prepare complete documentation for you to submit to your clients.'
        ]
    ],
    'freelance-epf-esic' => [
        'title' => 'Freelance EPF and ESIC Suggestions',
        'desc' => 'Strategic advisory and suggestions on employee compliance laws.',
        'details' => 'Navigate notices, structure wage calculations, and get expert suggestions as a freelancer or employer.',
        'icon' => '💡',
        'pricing' => '',
        'documents' => ['Past compliance records', 'Payroll registers'],
        'eligibility' => 'Any employer or freelancer seeking advisory on worker social welfare acts.',
        'process' => '1. Initial review -> 2. Problem identification -> 3. Suggestion delivery',
        'timeline' => 'Case-to-Case basis',
        'faq' => [
            'q' => 'Do you provide actionable solutions?',
            'a' => 'Yes, we provide step-by-step suggestions to resolve your compliance issues.'
        ]
    ],
    'job-works' => [
        'title' => 'Telugu and English Job Works',
        'desc' => 'Professional documentation, translation, and data entry job works in Telugu and English.',
        'details' => 'Get high-quality typing, formatting, and drafting services in both Telugu and English for official and business purposes.',
        'icon' => '✍️',
        'pricing' => '',
        'documents' => ['Source documents', 'Instructions file'],
        'eligibility' => 'Anyone requiring professional documentation works.',
        'process' => '1. Requirement gathering -> 2. Drafting/Typing -> 3. Proofreading -> 4. Delivery',
        'timeline' => 'Depends on volume',
        'faq' => [
            'q' => 'Do you do legal drafting in Telugu?',
            'a' => 'Yes, we handle various official and legal document preparation in both languages.'
        ]
    ]
];

// Router logic
$page = htmlspecialchars($_GET['page'] ?? 'home');
$allowed_pages = ['home', 'about', 'services', 'service-details', 'pricing', 'why-choose-us', 'faqs', 'contact', 'privacy', 'terms', 'epf-esic'];

if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

// Simulated lead submission
$submission_success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send_lead'])) {
    $submission_success = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aadhivaraha Services | Premium Business Consultancy</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

    <!-- Sticky Navigation -->
    <header class="sticky-nav">
        <div class="container nav-container" style="position: relative;">
            <a href="index.php?page=home" class="logo" style="display: flex; align-items: center; gap: 12px; text-decoration: none;">
                <img src="images/logo.png" onerror="this.onerror=null; this.src='images/logo.jpg';" alt="Logo" style="height: 60px; width: auto; object-fit: contain;">
                <div class="logo-text-wrapper">
                    <span class="logo-text-primary">Aadhivaraha</span>
                    <span class="logo-text-secondary">Services</span>
                    <span class="logo-text-tagline">Your Trusted Compliance Partner</span>
                </div>
            </a>
            
            <div class="menu-toggle" onclick="document.querySelector('.nav-menu').classList.toggle('active')" style="display: none; font-size: 28px; cursor: pointer;">☰</div>

            <ul class="nav-menu">
                <li><a href="index.php?page=home" class="nav-link <?php echo $page == 'home' ? 'active' : ''; ?>">Home</a></li>
                <li><a href="index.php?page=about" class="nav-link <?php echo $page == 'about' ? 'active' : ''; ?>">About Us</a></li>
                <li class="has-dropdown">
                    <a href="index.php?page=services" class="nav-link <?php echo $page == 'services' ? 'active' : ''; ?>">Services ▾</a>
                    <div class="dropdown-menu">
                        <a href="index.php?page=services">All Services</a>
                    </div>
                </li>
                <li><a href="index.php?page=contact" class="nav-link <?php echo $page == 'contact' ? 'active' : ''; ?>">Contact</a></li>
                <li class="mobile-call-btn" style="display: none;"><a href="tel:+919876543210" class="btn btn-call" style="padding: 10px 20px; font-size: 14px; border-radius: 6px;"><span style="margin-right: 8px;">📞</span> 98765 43210</a></li>
            </ul>
            <div class="desktop-call-btn" style="display: flex; gap: 12px; align-items: center;">
                <a href="tel:+919876543210" class="btn btn-call" style="padding: 10px 20px; font-size: 14px; border-radius: 6px;"><span style="margin-right: 8px;">📞</span> 98765 43210</a>
            </div>
        </div>
    </header>

    <!-- Main Dynamic Content Injection -->
    <main>
        <?php
        $page_file = __DIR__ . "/pages/{$page}.php";
        if (file_exists($page_file)) {
            include $page_file;
        } else {
            include __DIR__ . "/pages/home.php";
        }
        ?>
    </main>

    <!-- Sticky Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <a href="index.php?page=home" class="footer-logo" style="display: flex; align-items: center; gap: 8px; margin-bottom: 16px;">
                        <img src="images/logo.png" onerror="this.onerror=null; this.src='images/logo.jpg';" alt="Aadhivaraha" style="height: 50px; width: auto; object-fit: contain;">
                    </a>
                    <p style="font-size: 14px; margin-top: 10px; line-height: 1.7;">Premium corporate consultancy offering comprehensive regulatory registrations and strategic business compliance solutions.</p>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="index.php?page=home">Home</a></li>
                        <li><a href="index.php?page=about">About Us</a></li>
                        <li><a href="index.php?page=why-choose-us">Why Choose Us</a></li>

                        <li><a href="index.php?page=faqs">General FAQs</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Core Services</h4>
                    <ul class="footer-links">
                        <li><a href="index.php?page=services">Government Registrations</a></li>
                        <li><a href="index.php?page=services">Tax & Returns Filing</a></li>
                        <li><a href="index.php?page=services">Labour & EPF Compliances</a></li>
                        <li><a href="index.php?page=privacy">Privacy Policy</a></li>
                        <li><a href="index.php?page=terms">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <p style="font-size: 14px; margin-bottom: 8px;">📍 Hyderabad, Telangana</p>
                    <p style="font-size: 14px; margin-bottom: 8px;">✉️ compliance@aadhivaraha.com</p>
                    <p style="font-size: 14px; font-weight: 700; color: #FFFFFF;">📞 +91 98765 43210</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Aadhivaraha Services. All rights reserved.</p>
                <div style="display: flex; gap: 20px;">
                    <a href="index.php?page=privacy" style="color: rgba(255,255,255,0.7); text-decoration: none;">Privacy</a>
                    <a href="index.php?page=terms" style="color: rgba(255,255,255,0.7); text-decoration: none;">Terms</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating CTAs -->
    <div class="floating-ctas">
        <a href="https://wa.me/919876543210?text=I%20am%20interested%20in%20your%20services" target="_blank" class="floating-btn floating-whatsapp" title="WhatsApp Enquiry">💬</a>
        <a href="tel:+919876543210" class="floating-btn floating-call" title="Call Us">📞</a>
    </div>

    <!-- Basic UI scripts for accordions and interactions -->
    <script>
        document.querySelectorAll('.accordion-trigger').forEach(trigger => {
            trigger.addEventListener('click', () => {
                const content = trigger.nextElementSibling;
                const isVisible = content.style.display === 'block';
                content.style.display = isVisible ? 'none' : 'block';
            });
        });
    </script>
</body>
</html>
