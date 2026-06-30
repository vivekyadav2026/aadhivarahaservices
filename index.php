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
    'aop-registration' => [
        'title' => 'Association of Persons (AOP) Registration',
        'desc' => 'Official registration setup and legal agreement drafting for Association of Persons (AOP).',
        'details' => 'Formalize your Association of Persons (AOP) registration. We handle agreement/deed drafting, PAN card application, DSC setup, and portal registrations in full compliance.',
        'icon' => '👥',
        'pricing' => '₹3,999 onwards',
        'documents' => [
            'PAN card of the AOP (if available) or PAN of all members',
            'Aadhaar card of all members',
            'Passport-size photographs of all members',
            'Address proof of all members (Aadhaar, Voter ID, Passport, or Driving Licence)',
            'Registered office address proof (Electricity/Water bill/Property tax receipt not older than 2–3 months)',
            'Rent Agreement (if rented) & No Objection Certificate (NOC) from the property owner',
            'AOP Agreement/Deed signed by all members',
            'Bank account details (cancelled cheque or bank statement, if applicable)',
            'Mobile number and email ID of the authorized representative',
            'Digital Signature Certificate (DSC) of the authorized signatory',
            'Additional documents required for GST, PAN, or other statutory registrations'
        ],
        'eligibility' => 'Minimum of 2 members required to form an Association of Persons (AOP) in India.',
        'process' => '1. Deed & Agreement Drafting -> 2. DSC Setup -> 3. PAN Application -> 4. Portal Registration',
        'timeline' => '5 to 7 Working Days',
        'faq' => [
            'q' => 'Is a written deed mandatory for AOP?',
            'a' => 'Yes, a written AOP Deed is practically mandatory for opening bank accounts, obtaining PAN, and completing tax filings.'
        ]
    ],
    'fssai-registration' => [
        'title' => 'FSSAI Food License Registration',
        'desc' => 'Obtain FSSAI food safety registration or state/central licenses for food businesses.',
        'details' => 'Secure your FSSAI Food Safety License. We manage document organization, product classification checks, portal filing, and government coordination for restaurants, manufacturers, traders, and food handlers.',
        'icon' => '🍏',
        'pricing' => '₹1,999 onwards',
        'documents' => [
            'Passport-size photograph of the applicant',
            'Identity Proof (Aadhaar Card, PAN Card, Voter ID, or Passport)',
            'Registered office address proof (Electricity Bill or Property Tax Receipt)',
            'Rent Agreement & NOC from property owner (if rented premises)',
            'List of food products / food categories to be handled',
            'Business Constitution proof (Proprietor PAN, Partnership Deed, or CoI/MOA/AOA)',
            'List of Directors/Partners with ID & Address proof',
            'Authority Letter / Nomination of Authorized Signatory',
            'GST Registration Certificate (if applicable)',
            'Active Email ID and Mobile Number'
        ],
        'eligibility' => 'Mandatory for all Food Business Operators (FBOs) including manufacturers, traders, restaurants, and grocery shops.',
        'process' => '1. Select Category & Turnover Check -> 2. Document Verification -> 3. Form Submission -> 4. FSSAI Code Allotted',
        'timeline' => '5 to 7 Working Days',
        'faq' => [
            'q' => 'Who needs an FSSAI License?',
            'a' => 'Any business handling, manufacturing, packaging, storing, or selling food products must register under FSSAI rules.'
        ]
    ],
    'labour-license' => [
        'title' => 'Labour License & Shops Registration',
        'desc' => 'Telangana and Central Labour Licence & Shops & Establishments Registration compliance services.',
        'details' => 'Stay compliant with Telangana and Central Labour Laws with our complete Labour Licence and Shops & Establishments Registration services. We assist with Telangana Shops & Establishments, Telangana Contract Labour, and Central Government CLRA licences.',
        'icon' => '📋',
        'pricing' => '₹3,999 onwards',
        'documents' => ['PAN Card', 'Aadhaar Card', 'Business Address Proof', 'Telugu Name Board', 'Form V', 'Work Order / Agreement'],
        'eligibility' => 'Businesses operating in Telangana or employing contract workers under CLRA.',
        'process' => '1. Submit Docs -> 2. Verification -> 3. DTO Challan Prep -> 4. Online Application Filing -> 5. Licence Approval',
        'timeline' => '5 to 7 Working Days',
        'faq' => [
            'q' => 'Which Labour Licence services do you provide?',
            'a' => 'We provide Telangana Shops & Establishments Registration, Telangana Contract Labour Licence, and Central Government Contract Labour Licence (CLRA).'
        ]
    ],
    'employer-side' => [
        'title' => 'EPFO & ESIC Employer Services',
        'desc' => 'Manage all your EPFO and ESIC employer compliance requirements in one place with Aadhivaraha Services. We provide complete assistance for EPFO & ESIC registration, employee onboarding, monthly statutory returns, compliance updates, Digital Signature (DSC) configuration, employer portal management, and labour law support.',
        'details' => 'Our experienced team ensures accurate, timely, and hassle-free compliance services for proprietorships, partnership firms, companies, LLPs, trusts, societies, contractors, and all eligible establishments.',
        'icon' => '🏛️',
        'pricing' => '₹2,999 onwards',
        'documents' => [],
        'eligibility' => 'Businesses with 10/20 or more employees must register for ESIC/EPFO compliance.',
        'process' => '1. Submit Required Documents -> 2. Document Verification -> 3. EPFO & ESIC Registration / Employer Code Creation -> 4. Employee Registration & UAN/IP Generation -> 5. Monthly ECR / ESIC Contribution & Challan Preparation -> 6. Returns Filing & Compliance Support',
        'timeline' => 'Registration: 3-5 Days | Returns: 15th of every month',
        'faq' => []
    ],
    'epfo-esic-claims' => [
        'title' => 'EPFO & ESIC Member Services',
        'desc' => 'Get complete assistance for all EPFO and ESIC employee/member-related services under one roof. We help employees with PF claims, pension claims, PF transfers, advances, UAN services, KYC updates, e-Nomination, profile corrections, ESIC benefits, and other statutory services.',
        'details' => 'Our experienced team ensures a smooth, accurate, and hassle-free process while providing complete support from application submission to final approval.',
        'icon' => '⚖️',
        'pricing' => '₹499 onwards',
        'documents' => [],
        'eligibility' => 'All active EPF member account holders or ESIC insured persons seeking claims or portal updates.',
        'process' => '1. Submit Required Documents -> 2. Document Verification -> 3. Application / Claim Preparation -> 4. Online Submission -> 5. Claim / Application Status Tracking -> 6. Approval & End-to-End Support',
        'timeline' => '2 to 10 Working Days',
        'faq' => [
            'q' => 'Is e-nomination mandatory for PF withdrawals?',
            'a' => 'Yes, EPFO portal guidelines now require an active e-nomination on file before processing online withdrawal claims.'
        ]
    ],
    'gst-services' => [
        'title' => 'GST Registration & Returns',
        'desc' => 'Apply for a Goods and Services Tax Identification Number (GSTIN) and file monthly/quarterly tax returns.',
        'details' => 'Acquire your official GSTIN and handle your tax filings smoothly. We take care of submitting documents, compiling your outward invoices, reviewing tax calculations, and filing correct returns.',
        'icon' => '💼',
        'pricing' => '₹2,499 onwards',
        'documents' => ['PAN Card of Business', 'Owner Electricity Bill', 'Rent Agreement', 'Sales Register', 'Purchase Invoices', 'GSTR-2B Statement'],
        'eligibility' => 'Mandatory for businesses with turnover exceeding ₹40 Lakhs (Goods) or ₹20 Lakhs (Services).',
        'process' => '1. GSTIN Allotment -> 2. Reconcile Sales & Purchases -> 3. Draft GSTR-1 & 3B -> 4. Final Submission',
        'timeline' => 'Setup: 3-7 Days | Returns: Monthly',
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
    'msme-udyam-registration' => [
        'title' => 'MSME / UDYAM Registration',
        'desc' => 'Register your business under the MSME ministry through the Udyam portal to secure benefits and priority loan certificates.',
        'details' => 'We provide complete assistance for new Udyam Registration, certificate download, profile updates, amendments, annual updates, and NIC code selection for proprietorships, partnerships, LLPs, companies, and societies.',
        'icon' => '🚀',
        'pricing' => '₹999 onwards',
        'documents' => ['Aadhaar Card', 'PAN Card', 'Mobile linked with Aadhaar', 'Email ID', 'Business Address & Activity details', 'Bank Details'],
        'eligibility' => 'Proprietorships, Partnerships, LLPs, Private Ltd Companies, Trusts, and Societies.',
        'process' => '1. Submit Docs -> 2. Verification -> 3. NIC Code Selection -> 4. Portal Filing -> 5. Verification -> 6. Certificate Issued',
        'timeline' => '2 to 3 Working Days',
        'faq' => [
            'q' => 'What is Udyam Registration?',
            'a' => 'Udyam Registration is the official registration issued by the Government of India for Micro, Small, and Medium Enterprises (MSMEs).'
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
    'digital-signature' => [
        'title' => 'Digital Signature Certificate (DSC) Class 3',
        'desc' => 'Obtain Class 3 Digital Signature Certificates (DSC) for secure online authentication, document signing, and e-filing.',
        'details' => 'Secure your Class 3 Digital Signature Certificate (DSC) for 1, 2, or 3 years. We assist in processing signatures, encryption keys, and combo tokens in full compliance with Controller of Certifying Authorities (CCA) standards.',
        'icon' => '✍️',
        'pricing' => '₹999 onwards',
        'documents' => [
            'Applicant Aadhaar Card',
            'Applicant PAN Card',
            'Passport-size photograph of the applicant',
            'Mobile number and email ID linked to Aadhaar for OTP/Video verification'
        ],
        'eligibility' => 'Individuals, corporate directors, partners, and authorized signatories bidding on tenders or filing corporate returns.',
        'process' => '1. Select Validity (1, 2, or 3 Years) -> 2. Document Submission & OTP Verification -> 3. Video Verification -> 4. USB Token Dispatched',
        'timeline' => '1 to 2 Working Days',
        'faq' => [
            'q' => 'What is the difference between Class 3 Sign, Encrypt, and Combo DSC?',
            'a' => 'Sign DSC is used for signing forms (like GST, ITR, EPFO). Encrypt DSC protects sensitive emails/documents. Combo includes both and is mandatory for e-Tendering & e-Procurement portals.'
        ]
    ],
    'jeevan-pramaan' => [
        'title' => 'Jeevan Pramaan',
        'desc' => 'Biometric-enabled digital life certificate submissions for pensioners.',
        'details' => 'Pension details are updated instantly using biometric fingerprints or iris verification to avoid physical bank visits. We assist government pensioners in submitting their Jeevan Pramaan (Digital Life Certificate) quickly and conveniently.',
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
        'title' => 'Telangana e-Procurement Services',
        'desc' => 'Complete assistance for vendor registration, DSC configuration, tender search, technical & financial bid preparation, and online submission.',
        'details' => 'Participate in Telangana Government tenders with confidence through our professional e-Procurement services. We don\'t just submit tenders—we help you identify the right opportunities by providing monthly updates, explaining eligibility, and advising on suitability.',
        'icon' => '🏛️',
        'pricing' => '₹5,999 onwards',
        'documents' => ['PAN Card', 'Aadhaar Card', 'GST Registration', 'Udyam / MSME Certificate', 'Labour Licence', 'Class 3 DSC', 'Financial & Experience Documents'],
        'eligibility' => 'Proprietorships, Partnerships, LLPs, Companies, and eligible commercial entities.',
        'process' => '1. Tender Search & Verification -> 2. Document Review -> 3. Vendor Reg & DSC Config -> 4. Technical & Financial Bid Preparation -> 5. Online Bid Submission',
        'timeline' => '5 to 7 Working Days',
        'faq' => [
            'q' => 'What Telangana e-Procurement services do you provide?',
            'a' => 'We provide vendor registration, DSC configuration, tender search, eligibility verification, technical and financial bid preparation, online tender submission, and complete tender support.'
        ]
    ],
    'central-eprocurement' => [
        'title' => 'Central e-Procurement (CPPP) & e-Tender Services',
        'desc' => 'Complete assistance for CPPP vendor registration, DSC configuration, tender search, eligibility verification, bid preparation, and online submission.',
        'details' => 'Participate in Central Government tenders with confidence. We provide complete support for CPPP registration, DSC setup, tender identification, eligibility checks, Technical & Financial Bid preparation, online submission, and post-submission tracking. We also provide regular monthly updates on newly published Central Government tenders.',
        'icon' => '🛡️',
        'pricing' => '₹6,999 onwards',
        'documents' => ['PAN Card', 'Aadhaar Card', 'GST Registration', 'Udyam / MSME Certificate', 'Class 3 DSC (Sign + Encrypt)', 'Cancelled Cheque', 'Business Address Proof', 'Experience & Work Completion Certificates', 'ITR / Financial Statements'],
        'eligibility' => 'Proprietorships, Partnership Firms, LLPs, Private Limited Companies, and other registered business entities.',
        'process' => '1. Tender Identification & Eligibility -> 2. Document Verification -> 3. Vendor Registration & DSC Setup -> 4. Technical & Financial Bid Prep -> 5. Online Submission -> 6. Status Tracking',
        'timeline' => '5 to 7 Working Days',
        'faq' => [
            'q' => 'What is the Central Public Procurement Portal (CPPP)?',
            'a' => 'The Central Public Procurement Portal (CPPP) is the Government of India\'s official portal for publishing and participating in Central Government tenders.'
        ]
    ],
    'gem-registration' => [
        'title' => 'GeM (Government e-Marketplace) Seller Registration Services',
        'desc' => 'Start and grow your Government business through the Government e-Marketplace (GeM) Portal. We provide complete assistance for GeM Seller Registration, 100% Seller Profile Completion, Product & Service Catalogue Creation, OEM/Brand support, bid participation, profile management, and portal compliance.',
        'details' => 'Our team ensures a smooth, accurate, and hassle-free registration process, helping your business become fully ready to participate in Government procurement opportunities.',
        'icon' => '🛒',
        'pricing' => '₹4,999 onwards',
        'documents' => [],
        'eligibility' => 'Proprietorships, Partnerships, LLPs, Companies, OEMs, traders, and service providers.',
        'process' => '1. Submit Required Documents -> 2. Document Verification -> 3. GeM Seller Registration & Business Verification -> 4. Complete 100% GeM Seller Profile Setup -> 5. Create & Upload Product / Service Catalogue -> 6. Portal Verification & Approval -> 7. Start Selling & Participate in GeM Bids',
        'timeline' => '5 to 7 Working Days',
        'faq' => []
    ],
    'job-assistance' => [
        'title' => 'Government Application Services',
        'desc' => 'Professional assistance for applying to Government and Private sector job opportunities across India, ensuring accurate and timely submission.',
        'details' => 'We provide professional assistance for applying to Government and Private sector job opportunities across India. Our services include online application submission, document verification, profile creation, exam form filling, fee payment guidance, admit card assistance, and application status support. We ensure your applications are submitted accurately and before the deadline.',
        'icon' => '🎓',
        'pricing' => '',
        'documents' => ['Aadhaar Card', 'PAN Card (If Required)', 'Educational Certificates', 'Caste Certificate (If Applicable)', 'EWS Certificate (If Applicable)', 'Income Certificate (If Required)', 'Passport Photo', 'Signature', 'Mobile Number & Email ID', 'Resume / CV (For Private Jobs)', 'Experience Certificates (If Applicable)'],
        'eligibility' => 'All candidates meeting official recruitment notification criteria — Central Govt, State Govt, Banking, SSC, Railway, Defence, Police, and Private sector applicants.',
        'process' => '1. Submit Documents -> 2. Notification & Eligibility Check -> 3. Online Form Filling -> 4. Document Upload & Fee Payment -> 5. Application Submission -> 6. Status & Admit Card Support',
        'timeline' => 'As per vacancy notification deadlines',
        'faq' => [
            'q' => 'Which job applications do you assist with?',
            'a' => 'We assist with Central Government, State Government, Banking, SSC, Railway, Defence, Police, PSU, Private Company, MNC, IT, Healthcare, Education, and many other job applications.'
        ]
    ],
    'bill-preparation' => [
        'title' => 'Government & Private Bill Preparation Services',
        'desc' => 'Professional bill preparation for Government departments, contractors, and service providers covering outsourcing, manpower, civil, electrical, and supply bills.',
        'details' => 'We provide professional bill preparation services for Government departments, private organizations, contractors, and service providers. Our team prepares accurate bills for outsourcing services, manpower contracts, security services, housekeeping, electrical works, civil construction works, and other contract-based projects. We ensure all bills are prepared as per the work order, agreement terms, and department requirements.',
        'icon' => '📝',
        'pricing' => '',
        'documents' => ['Work Order / Agreement', 'Invoice Details', 'GST Registration Certificate (If Applicable)', 'PAN Card', 'Measurement Book / Sheet (If Applicable)', 'Attendance Register', 'Wage Register', 'EPF & ESIC Challans (If Applicable)', 'Bank Details', 'Supporting Documents as Required'],
        'eligibility' => 'Government and private contractors, manpower agencies, security service providers, civil & electrical contractors, and other service providers.',
        'process' => '1. Submit Work Order & Documents -> 2. Document Verification -> 3. Bill & Invoice Preparation -> 4. Verification & Corrections -> 5. Final Bill Generation -> 6. Submission Support',
        'timeline' => '3 to 5 Working Days',
        'faq' => [
            'q' => 'Which bills do you prepare?',
            'a' => 'We prepare Government and Private sector bills, including outsourcing, manpower, security, housekeeping, electrical, civil construction, service, supply, RA bills, and final bills.'
        ]
    ],

    'job-works' => [
        'title' => 'Telugu & English Typing, DTP, Xerox & Digital Documentation Services',
        'desc' => 'Fast, accurate, and professional Telugu & English typing, DTP, printing, scanning, lamination, and digital documentation services for all your needs.',
        'details' => 'We provide fast, accurate, and professional Telugu & English typing, DTP, document formatting, printing, scanning, lamination, and digital documentation services for individuals, students, businesses, advocates, contractors, and government employees. We prepare official letters, applications, affidavits, resumes, quotations, invoices, project reports, and various office documents with professional formatting.',
        'icon' => '✍️',
        'pricing' => '',
        'documents' => ['Original Documents', 'Soft Copy (If Available)', 'Mobile Number', 'Email ID (If Required)', 'Passport Size Photo (If Required)'],
        'eligibility' => 'Individuals, students, businesses, advocates, contractors, and government employees requiring typing, DTP, printing, scanning, or documentation services.',
        'process' => '1. Submit Your Document -> 2. Typing / Formatting -> 3. Proof Reading & Corrections -> 4. Printing / Scanning / Lamination -> 5. Document Delivery',
        'timeline' => 'Same-Day to 2 Working Days (Based on Volume)',
        'faq' => [
            'q' => 'Do you provide Telugu and English typing?',
            'a' => 'Yes. We provide Telugu, English, and bilingual typing services.'
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
                <div class="logo-text-wrapper" style="display: flex; flex-direction: column; justify-content: center; line-height: 1.1;">
                    <div style="font-size: 20px; font-weight: 800; letter-spacing: -0.5px;">
                        <span style="color: var(--color-primary);">AADHIVARAHA</span> 
                        <span style="color: var(--color-accent);">SERVICES</span>
                    </div>
                    <span style="font-size: 8px; font-weight: 700; color: var(--color-primary); letter-spacing: 0.1px; text-transform: uppercase;">A UNIT OF AADHIVARAHA SECURITY ALLIED SERVICES</span>
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
                <li class="mobile-call-btn" style="display: none;">
                    <a href="tel:+917981674916" class="btn btn-call" style="padding: 10px 20px; font-size: 14px; border-radius: 6px; display: inline-flex; align-items: center; gap: 8px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        79816 74916 / 95531 86025
                    </a>
                </li>
            </ul>
            <div class="desktop-call-btn" style="display: flex; gap: 12px; align-items: center;">
                <a href="tel:+917981674916" class="btn btn-call" style="padding: 10px 20px; font-size: 14px; border-radius: 6px; display: inline-flex; align-items: center; gap: 8px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    79816 74916 / 95531 86025
                </a>
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

    <!-- Premium Footer -->
    <footer class="site-footer">

        <!-- Top CTA Strip -->
        <div class="footer-cta-strip">
            <div class="container footer-cta-inner">
                <div class="footer-cta-text">
                    <span class="footer-cta-tag">GET IN TOUCH</span>
                    <h2>Ready to get your registration done? <span>Let's talk!</span></h2>
                </div>
                <div class="footer-cta-btns">
                    <a href="https://wa.me/917981674916?text=Hello%2C%20I%20need%20assistance%20with%20a%20service" target="_blank" class="footer-cta-btn footer-cta-green">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        WhatsApp Us
                    </a>
                    <a href="tel:+917981674916" class="footer-cta-btn footer-cta-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        Call Now
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Footer Body -->
        <div class="footer-body">
            <div class="container">
                <div class="footer-main-grid">
                    <!-- Col 1: Brand -->
                    <div class="footer-brand-col">
                        <a href="index.php?page=home" class="footer-brand-logo">
                            <img src="images/logo.png" onerror="this.onerror=null; this.src='images/logo.jpg';" alt="Aadhivaraha Services Logo">
                            <div class="footer-brand-name">
                                <span class="f-brand-primary">AADHIVARAHA</span>
                                <span class="f-brand-accent">SERVICES</span>
                                <small>A Unit of Aadhivaraha Security Allied Services</small>
                            </div>
                        </a>
                        <p class="footer-brand-desc">Your trusted partner for government compliance, business registrations, EPF &amp; ESIC services, tenders and digital documentation — all under one roof.</p>

                        <!-- Trust Badges -->
                        <div class="footer-trust-badges">
                            <div class="footer-trust-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                <span>100% Secure</span>
                            </div>
                            <div class="footer-trust-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Expert Team</span>
                            </div>
                            <div class="footer-trust-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                <span>On-Time</span>
                            </div>
                        </div>

                        <!-- Social Icons -->
                        <div class="footer-socials">
                            <a href="https://wa.me/917981674916" target="_blank" class="footer-social-btn" style="--social-color:#25D366;" title="WhatsApp">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                            </a>
                            <a href="https://www.facebook.com/AadhivarahaServices/" target="_blank" class="footer-social-btn" style="--social-color:#1877F2;" title="Facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                            </a>
                            <a href="https://www.instagram.com/aadhivarahaservices?igsh=NXkzdmtnMGFyNzh1" target="_blank" class="footer-social-btn" style="--social-color:#E4405F;" title="Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                            </a>
                            <a href="https://www.youtube.com/@AADHIVARAHASERVICES" target="_blank" class="footer-social-btn" style="--social-color:#FF0000;" title="YouTube">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
                            </a>
                            <a href="https://x.com/AadhivarahaSer" target="_blank" class="footer-social-btn footer-social-x" style="--social-color:#ffffff;" title="X">
                                <strong style="font-size:13px; font-weight:800;">&#x1D54F;</strong>
                            </a>
                        </div>
                    </div>

                    <!-- Col 2: Quick Links -->
                    <div class="footer-links-col">
                        <h4 class="footer-col-heading"><span class="footer-heading-dot"></span>Quick Links</h4>
                        <ul class="footer-nav-list">
                            <li><a href="index.php?page=home">Home</a></li>
                            <li><a href="index.php?page=about">About Us</a></li>
                            <li><a href="index.php?page=services">All Services</a></li>
                            <li><a href="index.php?page=why-choose-us">Why Choose Us</a></li>
                            <li><a href="index.php?page=faqs">FAQs</a></li>
                            <li><a href="index.php?page=contact">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Col 3: Our Services -->
                    <div class="footer-links-col">
                        <h4 class="footer-col-heading"><span class="footer-heading-dot"></span>Our Services</h4>
                        <ul class="footer-nav-list">
                            <li><a href="index.php?page=service-details&id=employer-side">EMPLOYER SIDE</a></li>
                            <li><a href="index.php?page=service-details&id=gst-services">GST Registration & Returns</a></li>
                            <li><a href="index.php?page=service-details&id=firm-registration">Firm Registration</a></li>
                            <li><a href="index.php?page=service-details&id=digital-signature">Digital Signature (DSC)</a></li>
                            <li><a href="index.php?page=service-details&id=gem-registration">GeM Registration</a></li>
                            <li><a href="index.php?page=service-details&id=telangana-eprocurement">e-Procurement &amp; Tenders</a></li>
                        </ul>
                    </div>

                    <!-- Col 4: Contact -->
                    <div class="footer-contact-col">
                        <h4 class="footer-col-heading"><span class="footer-heading-dot"></span>Contact Info</h4>
                        <div class="footer-contact-list">
                            <div class="footer-contact-item">
                                <div class="footer-contact-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                </div>
                                <div>
                                    <span class="footer-contact-label">Office</span>
                                    <p>H No, Beside Taraka Hotel, Mukarampura Street, Karimnagar-505001</p>
                                </div>
                            </div>
                            <div class="footer-contact-item">
                                <div class="footer-contact-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                </div>
                                <div>
                                    <span class="footer-contact-label">Phone</span>
                                    <p><a href="tel:+917981674916">+91 79816 74916</a><br><a href="tel:+919553186025">+91 95531 86025</a></p>
                                </div>
                            </div>
                            <div class="footer-contact-item">
                                <div class="footer-contact-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                </div>
                                <div>
                                    <span class="footer-contact-label">Email</span>
                                    <p><a href="mailto:aadhivarahaservices@gmail.com">aadhivarahaservices@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="footer-contact-item">
                                <div class="footer-contact-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                </div>
                                <div>
                                    <span class="footer-contact-label">Hours</span>
                                    <p>Mon – Sat &nbsp;|&nbsp; 9:30 AM – 7:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.footer-main-grid -->
            </div>
        </div><!-- /.footer-body -->

        <!-- Bottom Bar -->
        <div class="footer-bottom-bar">
            <div class="container footer-bottom-inner">
                <p class="footer-copyright">&copy; <?php echo date('Y'); ?> Aadhivaraha Services. All Rights Reserved.</p>
                <div class="footer-bottom-links">
                    <a href="index.php?page=privacy">Privacy Policy</a>
                    <span class="footer-bottom-divider">|</span>
                    <a href="index.php?page=terms">Terms &amp; Conditions</a>
                    <span class="footer-bottom-divider">|</span>
                    <a href="index.php?page=contact">Contact Us</a>
                </div>
            </div>
        </div>

    </footer>
    
    <!-- Floating CTAs -->
    <div class="floating-ctas">
        <a href="https://wa.me/917981674916" target="_blank" class="floating-btn floating-whatsapp" title="WhatsApp Enquiry">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        </a>
        <a href="tel:+917981674916" class="floating-btn floating-call" title="Call Us">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        </a>
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
