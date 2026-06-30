<?php
$service_id = htmlspecialchars($_GET['id'] ?? 'firm-registration');
if (!array_key_exists($service_id, $services)) {
    $service_id = 'firm-registration';
}

$s = $services[$service_id];

// Define layout-specific arrays for the mockup details (or fallbacks)
$all_inclusions = [
    'firm-registration' => [
        ['title' => 'Document Verification', 'desc' => 'We verify all partner documents for accuracy.', 'icon' => 'file-text'],
        ['title' => 'Partnership Deed Preparation', 'desc' => 'Drafting a professional and legally valid deed.', 'icon' => 'edit-3'],
        ['title' => 'Registration Application Filing', 'desc' => 'Filing the application with the concerned department.', 'icon' => 'upload-cloud'],
        ['title' => 'Government Compliance Support', 'desc' => 'Complete support for all statutory requirements.', 'icon' => 'shield'],
        ['title' => 'Registration Certificate Assistance', 'desc' => 'We help you get your firm registered successfully.', 'icon' => 'check-circle'],
        ['title' => 'Expert Consultation', 'desc' => 'Guidance from our experienced professionals.', 'icon' => 'user-check'],
        ['title' => 'End-to-End Support', 'desc' => 'We support you from start to finish.', 'icon' => 'lock']
    ],
    'gst-registration' => [
        ['title' => 'Eligibility Check', 'desc' => 'We analyze your turnover limits to confirm eligibility.', 'icon' => 'user-check'],
        ['title' => 'Document Verification', 'desc' => 'Verification of PAN, Aadhaar, and address proofs.', 'icon' => 'file-text'],
        ['title' => 'Application Preparation', 'desc' => 'Drafting and packaging your portal application profile.', 'icon' => 'edit-3'],
        ['title' => 'GST Registration Filing', 'desc' => 'Official submission on the GST government portal.', 'icon' => 'upload-cloud'],
        ['title' => 'GSTIN Issuance', 'desc' => 'Securing your active 15-digit GSTIN number.', 'icon' => 'check-circle'],
        ['title' => 'Post Registration Support', 'desc' => 'Consulting on monthly returns and compliance filing.', 'icon' => 'shield']
    ],
    'esic-registration' => [
        ['title' => 'Eligibility Check', 'desc' => 'We analyze employee counts and wages to confirm eligibility.', 'icon' => 'user-check'],
        ['title' => 'Document Verification', 'desc' => 'Verification of PAN, Aadhaar, and business proof files.', 'icon' => 'file-text'],
        ['title' => 'Application Preparation', 'desc' => 'Drafting your profile application for the ESIC portal.', 'icon' => 'edit-3'],
        ['title' => 'ESIC Registration Filing', 'desc' => 'Official submission on the ESIC government portal.', 'icon' => 'upload-cloud'],
        ['title' => 'Authority Verification', 'desc' => 'Handling clarifications from ESIC department officers.', 'icon' => 'shield'],
        ['title' => 'ESIC Number Issuance', 'desc' => 'Securing your active 17-digit ESIC registration code.', 'icon' => 'check-circle']
    ],
    'epfo-registration' => [
        ['title' => 'Document Verification', 'desc' => 'Verifying all business proof files and partner identity details.', 'icon' => 'file-text'],
        ['title' => 'Application Preparation', 'desc' => 'Preparing your official application file for portal submission.', 'icon' => 'edit-3'],
        ['title' => 'EPFO Registration Filing', 'desc' => 'Submitting your registration forms on the government portal.', 'icon' => 'upload-cloud'],
        ['title' => 'Compliance Support', 'desc' => 'Handling all statutory guidelines and portal verification queries.', 'icon' => 'shield'],
        ['title' => 'Expert Guidance', 'desc' => 'Guiding you through employee setup and code activation.', 'icon' => 'user-check'],
        ['title' => 'End-to-End Support', 'desc' => 'Complete backing from documents submission to code delivery.', 'icon' => 'lock']
    ],
    'labour-license' => [
        ['title' => 'Shops & Establishments Services', 'desc' => 'New registration, modifications, employer/address updates, and active compliance.', 'icon' => 'landmark'],
        ['title' => 'Contract Labour Licence (CLRA)', 'desc' => 'Telangana & Central Govt Contract Labour Licence registrations.', 'icon' => 'shield'],
        ['title' => 'Form V & Work Order Audit', 'desc' => 'Verification & processing under labour department rules.', 'icon' => 'file-text'],
        ['title' => 'DTO Challan Preparation', 'desc' => 'Accurate preparation and filing of DTO treasury challans.', 'icon' => 'upload-cloud'],
        ['title' => 'Licence Renewal & Amendment', 'desc' => 'Assistance with renewals, worker limit amendments, and profiles.', 'icon' => 'edit-3'],
        ['title' => 'Telugu Name Board Support', 'desc' => 'Advising on compliance board configurations as per Telangana rules.', 'icon' => 'check-circle']
    ],
    'digital-signature' => [
        ['title' => 'Identity Verification', 'desc' => 'Checking Aadhaar, PAN, and identity references.', 'icon' => 'user-check'],
        ['title' => 'OTP Setup Support', 'desc' => 'Assistance with Aadhaar-linked OTP verifications.', 'icon' => 'lock'],
        ['title' => 'Video Verification Guide', 'desc' => 'Guided video recording as required by certifying authorities.', 'icon' => 'video'],
        ['title' => 'USB Token Packaging', 'desc' => 'Configuring your credentials inside a physical cryptographic USB token.', 'icon' => 'hard-drive'],
        ['title' => 'Class 3 Certificate Issuance', 'desc' => 'Official generation of your digital signing/encryption key.', 'icon' => 'check-circle'],
        ['title' => 'Post-Setup Support', 'desc' => 'Assistance installing drivers and signing documents.', 'icon' => 'shield']
    ],
    'fssai-registration' => [
        ['title' => 'Category Assessment', 'desc' => 'Determining FSSAI registration vs State vs Central license requirement.', 'icon' => 'user-check'],
        ['title' => 'Document Verification', 'desc' => 'Auditing photo, address, and premises ownership details.', 'icon' => 'file-text'],
        ['title' => 'Product Classification', 'desc' => 'Mapping your food items into official FSSAI categories.', 'icon' => 'edit-3'],
        ['title' => 'Application Filing', 'desc' => 'Official submission on the FoSCoS FSSAI portal.', 'icon' => 'upload-cloud'],
        ['title' => 'Clarifications Resolution', 'desc' => 'Responding to inquiries raised by Food Safety Officers.', 'icon' => 'shield'],
        ['title' => 'FSSAI License Delivery', 'desc' => 'Official registration certificate generation and delivery.', 'icon' => 'check-circle']
    ],
    'msme-udyam-registration' => [
        ['title' => 'New Udyam Registration', 'desc' => 'End-to-end setup and registration on the official Udyam portal.', 'icon' => 'landmark'],
        ['title' => 'NIC Code Selection', 'desc' => 'Professional selection of NIC codes based on business activities.', 'icon' => 'edit-3'],
        ['title' => 'Certificate Updates', 'desc' => 'Assistance with enterprise updates, mobile/email modifications, and amendments.', 'icon' => 'upload-cloud'],
        ['title' => 'Investment Data Updates', 'desc' => 'Annual Udyam updates and financial year data closing updates.', 'icon' => 'database'],
        ['title' => 'Migration & Re-registration', 'desc' => 'Support migrating old EM-I/II or UAM profiles to active Udyam.', 'icon' => 'shield'],
        ['title' => 'Certificate Download Support', 'desc' => 'Instant verification and generation of your official Udyam certificate.', 'icon' => 'check-circle']
    ],
    'telangana-eprocurement' => [
        ['title' => 'Vendor Portal Registration', 'desc' => 'Correct setup and registration on the Telangana e-Procurement portal.', 'icon' => 'landmark'],
        ['title' => 'DSC Configuration', 'desc' => 'Registering and configuring your Class 3 Digital Signature Certificate (DSC) on the portal.', 'icon' => 'lock'],
        ['title' => 'Tender Alerts & Monthly Info', 'desc' => 'Receive monthly alerts, information about newly published state tenders, and timelines.', 'icon' => 'bell'],
        ['title' => 'Eligibility Verification', 'desc' => 'Verification of eligibility criteria, turnover, experience, and EMD guidelines.', 'icon' => 'user-check'],
        ['title' => 'Bid Preparation & BOQ', 'desc' => 'Professional preparation of Technical Bids and Financial Bills (BOQ) with cost sheets.', 'icon' => 'edit-3'],
        ['title' => 'Online Submission & Tracking', 'desc' => 'Secure online tender document upload and post-submission monitoring.', 'icon' => 'upload-cloud']
    ],
    'gem-registration' => [
        ['title' => 'Profile Setup & Completion', 'desc' => 'New seller registration and 100% profile validation setup.', 'icon' => 'landmark'],
        ['title' => 'Business Verification', 'desc' => 'Auditing PAN, Aadhaar, GSTIN, Udyam, bank account, and NSIC parameters.', 'icon' => 'shield'],
        ['title' => 'Catalogue Management', 'desc' => 'Professional Product and Service Catalogue creation, uploads, and modifications.', 'icon' => 'edit-3'],
        ['title' => 'Brand & OEM Services', 'desc' => 'Assistance with OEM registration, brand authorizations, and portal approvals.', 'icon' => 'award'],
        ['title' => 'GeM Bid & Tender Services', 'desc' => 'Eligibility checks, Technical/Financial bid quotes, and online submission support.', 'icon' => 'upload-cloud'],
        ['title' => 'Order & Invoicing Support', 'desc' => 'Post-registration assistance with order acceptances, invoicing, and payment tracking.', 'icon' => 'check-circle']
    ],
    'central-eprocurement' => [
        ['title' => 'CPPP Vendor Registration', 'desc' => 'Complete registration on the Central Public Procurement Portal (CPPP) with DSC configuration.', 'icon' => 'landmark'],
        ['title' => 'DSC Registration & Setup', 'desc' => 'Registering and linking your Class 3 Sign+Encrypt DSC on the CPPP portal.', 'icon' => 'lock'],
        ['title' => 'Tender Alerts & Monthly Info', 'desc' => 'Monthly alerts and information about newly published Central Government tenders.', 'icon' => 'bell'],
        ['title' => 'Eligibility Verification', 'desc' => 'Checking eligibility criteria, experience, turnover, EMD, and mandatory documents before bid.', 'icon' => 'user-check'],
        ['title' => 'Technical & Financial Bid Prep', 'desc' => 'Professional preparation of Technical Bids, BOQs, Financial Cost Sheets, and document uploads.', 'icon' => 'edit-3'],
        ['title' => 'Online Submission & Tracking', 'desc' => 'Secure online submission, post-submission monitoring, and corrigendum/amendment updates.', 'icon' => 'upload-cloud']
    ],
    'job-assistance' => [
        ['title' => 'Eligibility Verification', 'desc' => 'We verify your eligibility based on the official recruitment notification before submitting.', 'icon' => 'user-check'],
        ['title' => 'Online Form Filling', 'desc' => 'Accurate online application form filling for Government and Private job portals.', 'icon' => 'edit-3'],
        ['title' => 'Document & Photo Upload', 'desc' => 'Proper formatting and upload of photos, signatures, certificates, and resumes.', 'icon' => 'upload'],
        ['title' => 'Fee Payment Guidance', 'desc' => 'Complete guidance for exam fee payment through online banking, UPI, or net banking.', 'icon' => 'file-text'],
        ['title' => 'Application Status Tracking', 'desc' => 'Tracking your application status and timely alerts on results, interviews, and exams.', 'icon' => 'search'],
        ['title' => 'Admit Card & Hall Ticket', 'desc' => 'Assistance with downloading admit cards, hall tickets, and exam notification updates.', 'icon' => 'award']
    ],
    'bill-preparation' => [
        ['title' => 'Government Bill Preparation', 'desc' => 'Accurate preparation of outsourcing, manpower, security, housekeeping, and civil/electrical work bills.', 'icon' => 'file-text'],
        ['title' => 'Private Bill Preparation', 'desc' => 'Contractor, labour, civil, maintenance, and monthly service bill preparation for private clients.', 'icon' => 'edit-3'],
        ['title' => 'Supporting Documentation', 'desc' => 'Attendance statements, wage registers, EPF/ESIC challan attachments, and work completion statements.', 'icon' => 'upload'],
        ['title' => 'GST Invoice Preparation', 'desc' => 'GST-compliant invoice drafting and tax calculation support for all bill types.', 'icon' => 'landmark'],
        ['title' => 'RA Bill & Final Bill', 'desc' => 'Running Account (RA) bills and final bills prepared as per work order and agreement terms.', 'icon' => 'check-circle'],
        ['title' => 'Online Submission Support', 'desc' => 'Assistance with online bill submission wherever required by the department or client.', 'icon' => 'upload-cloud']
    ],
    'job-works' => [
        ['title' => 'Telugu & English Typing', 'desc' => 'Fast and accurate Telugu, English, and bilingual typing including data entry and handwritten-to-digital conversion.', 'icon' => 'edit-3'],
        ['title' => 'DTP & Document Preparation', 'desc' => 'Letters, applications, affidavits, resumes, quotations, invoices, project reports, and business profiles.', 'icon' => 'file-text'],
        ['title' => 'Xerox & Printing Services', 'desc' => 'B&W and colour Xerox, A4/A3/Legal printing, PDF printing, and spiral binding support.', 'icon' => 'upload'],
        ['title' => 'Scanning & PDF Services', 'desc' => 'Colour and document scanning, PDF creation, merge, split, compression, and digital conversion.', 'icon' => 'search'],
        ['title' => 'Lamination Services', 'desc' => 'ID card, A4, legal size, certificate, and document lamination services.', 'icon' => 'award'],
        ['title' => 'Office & Digital Documentation', 'desc' => 'File preparation, form filling, online uploads, email services, and soft/hard copy preparation.', 'icon' => 'landmark']
    ],
    'society-registration' => [
        ['title' => 'Document Verification', 'desc' => 'We verify founding members and address proofs.', 'icon' => 'file-text'],
        ['title' => 'MoA & Rules Drafting', 'desc' => 'Drafting Memorandum of Association and Rules.', 'icon' => 'edit-3'],
        ['title' => 'District Registrar Filing', 'desc' => 'Submission to the local registrar office.', 'icon' => 'upload-cloud'],
        ['title' => 'Follow-up & Clarifications', 'desc' => 'Handling government queries during processing.', 'icon' => 'shield'],
        ['title' => 'Approval Support', 'desc' => 'Continuous tracking until society is registered.', 'icon' => 'user-check'],
        ['title' => 'Certificate Delivery', 'desc' => 'Official registration certificate handover.', 'icon' => 'check-circle']
    ],
    'aop-registration' => [
        ['title' => 'Document Verification', 'desc' => 'Verifying all member identity and address proofs.', 'icon' => 'file-text'],
        ['title' => 'AOP Deed Drafting', 'desc' => 'Professional drafting of the AOP agreement.', 'icon' => 'edit-3'],
        ['title' => 'DSC Configuration', 'desc' => 'Setting up digital signatures for authorized members.', 'icon' => 'lock'],
        ['title' => 'PAN Application', 'desc' => 'Applying for the official AOP PAN card.', 'icon' => 'upload-cloud'],
        ['title' => 'Portal Registration', 'desc' => 'Registering the AOP on required compliance portals.', 'icon' => 'shield'],
        ['title' => 'Completion & Support', 'desc' => 'Final handover of all registration documents.', 'icon' => 'check-circle']
    ],
    'epfo-esic-returns' => [
        ['title' => 'Attendance Review', 'desc' => 'Reviewing monthly attendance and wage records.', 'icon' => 'search'],
        ['title' => 'Wage Calculation', 'desc' => 'Accurate calculation of PF and ESIC liabilities.', 'icon' => 'file-text'],
        ['title' => 'ECR & Challan Prep', 'desc' => 'Preparing the Electronic Challan cum Return (ECR).', 'icon' => 'edit-3'],
        ['title' => 'Portal Filing', 'desc' => 'Uploading data to EPFO and ESIC portals.', 'icon' => 'upload-cloud'],
        ['title' => 'Payment Generation', 'desc' => 'Generating final payment challans for the bank.', 'icon' => 'shield'],
        ['title' => 'Filing Receipt Delivery', 'desc' => 'Delivering official filing acknowledgements.', 'icon' => 'check-circle']
    ],
    'epfo-esic-claims' => [
        ['title' => 'Eligibility Check', 'desc' => 'Checking claim eligibility and PF balance.', 'icon' => 'search'],
        ['title' => 'KYC & Aadhaar Linking', 'desc' => 'Updating KYC, PAN, and Aadhaar in the UAN portal.', 'icon' => 'user-check'],
        ['title' => 'UAN Activation', 'desc' => 'Activating UAN and resolving login issues.', 'icon' => 'lock'],
        ['title' => 'E-Nomination Setup', 'desc' => 'Mandatory e-nomination configuration for members.', 'icon' => 'shield'],
        ['title' => 'Claim Form Filing', 'desc' => 'Filing Forms 19, 31, 10C, or 10D as applicable.', 'icon' => 'upload-cloud'],
        ['title' => 'Status Tracking', 'desc' => 'Tracking the claim until funds are disbursed.', 'icon' => 'check-circle']
    ],
    'gst-returns' => [
        ['title' => 'Sales & Purchase Review', 'desc' => 'Reconciling monthly B2B and B2C invoices.', 'icon' => 'search'],
        ['title' => 'ITC Reconciliation', 'desc' => 'Matching GSTR-2B for Input Tax Credit claims.', 'icon' => 'file-text'],
        ['title' => 'GSTR-1 Preparation', 'desc' => 'Drafting outward supplies return.', 'icon' => 'edit-3'],
        ['title' => 'GSTR-3B Drafting', 'desc' => 'Drafting the monthly tax liability return.', 'icon' => 'edit-3'],
        ['title' => 'Client Approval', 'desc' => 'Reviewing tax liability with the client before filing.', 'icon' => 'user-check'],
        ['title' => 'Portal Filing', 'desc' => 'Official submission to the GST portal.', 'icon' => 'check-circle']
    ],
    'it-returns' => [
        ['title' => 'Income Proofs Review', 'desc' => 'Reviewing Form 16, AIS, and bank statements.', 'icon' => 'search'],
        ['title' => 'Deduction Optimization', 'desc' => 'Maximizing tax savings under 80C, 80D, etc.', 'icon' => 'shield'],
        ['title' => 'Income Calculation', 'desc' => 'Accurate computation of total tax liability.', 'icon' => 'file-text'],
        ['title' => 'ITR Form Drafting', 'desc' => 'Drafting ITR-1, ITR-2, ITR-3, or ITR-4.', 'icon' => 'edit-3'],
        ['title' => 'E-verification', 'desc' => 'Aadhaar OTP based e-verification of the return.', 'icon' => 'lock'],
        ['title' => 'Filing Acknowledgement', 'desc' => 'Delivery of the official ITR-V receipt.', 'icon' => 'check-circle']
    ],
    'labour-cards' => [
        ['title' => 'Document Verification', 'desc' => 'Verifying worker identity and bank details.', 'icon' => 'search'],
        ['title' => 'Employer Verification', 'desc' => 'Validating work certificates or employer declarations.', 'icon' => 'user-check'],
        ['title' => 'Portal Registration', 'desc' => 'Online registration on the State Labour portal.', 'icon' => 'upload-cloud'],
        ['title' => 'Fee Payment', 'desc' => 'Processing official government registration fees.', 'icon' => 'file-text'],
        ['title' => 'Status Tracking', 'desc' => 'Following up with the labor department.', 'icon' => 'shield'],
        ['title' => 'Identity Card Generation', 'desc' => 'Downloading and delivering the official Labour Card.', 'icon' => 'check-circle']
    ],
    'pan-tan-services' => [
        ['title' => 'Identity Verification', 'desc' => 'Verifying Aadhaar and business proofs.', 'icon' => 'search'],
        ['title' => 'Form 49A/49B Prep', 'desc' => 'Preparing PAN or TAN application forms.', 'icon' => 'edit-3'],
        ['title' => 'Portal Submission', 'desc' => 'Uploading data to NSDL/UTIITSL portals.', 'icon' => 'upload-cloud'],
        ['title' => 'Query Resolution', 'desc' => 'Handling any department clarifications.', 'icon' => 'shield'],
        ['title' => 'E-PAN/TAN Generation', 'desc' => 'Instant delivery of the digital PDF copy.', 'icon' => 'file-text'],
        ['title' => 'Physical Card Delivery', 'desc' => 'Tracking the physical card delivery to your address.', 'icon' => 'check-circle']
    ],
    'jeevan-pramaan' => [
        ['title' => 'Biometric Setup', 'desc' => 'Setting up authorized biometric devices.', 'icon' => 'lock'],
        ['title' => 'Pensioner Details Entry', 'desc' => 'Entering PPO, bank, and Aadhaar details.', 'icon' => 'edit-3'],
        ['title' => 'Biometric Authentication', 'desc' => 'Capturing live fingerprint or iris scan.', 'icon' => 'user-check'],
        ['title' => 'Portal Submission', 'desc' => 'Generating the Digital Life Certificate (DLC).', 'icon' => 'upload-cloud'],
        ['title' => 'SMS Confirmation', 'desc' => 'Receiving Pramaan ID directly on your mobile.', 'icon' => 'shield'],
        ['title' => 'Printout/PDF Delivery', 'desc' => 'Providing the physical or digital certificate copy.', 'icon' => 'check-circle']
    ]
];

$all_steps = [
    'firm-registration' => [
        ['label' => 'Step 1', 'title' => 'Submit Documents', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Document Verification', 'icon' => 'search'],
        ['label' => 'Step 3', 'title' => 'Application Preparation', 'icon' => 'file-text'],
        ['label' => 'Step 4', 'title' => 'Registration Submission', 'icon' => 'landmark'],
        ['label' => 'Step 5', 'title' => 'Registration Completed', 'icon' => 'check-circle'],
        ['label' => 'Step 6', 'title' => 'Certificate Delivered', 'icon' => 'award']
    ],
    'gst-registration' => [
        ['label' => 'Step 1', 'title' => 'Submit Documents', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Document Verification', 'icon' => 'search'],
        ['label' => 'Step 3', 'title' => 'Application Preparation', 'icon' => 'file-text'],
        ['label' => 'Step 4', 'title' => 'Submission to GST Portal', 'icon' => 'upload-cloud'],
        ['label' => 'Step 5', 'title' => 'Verification by GST Dept.', 'icon' => 'landmark'],
        ['label' => 'Step 6', 'title' => 'GSTIN Issued', 'icon' => 'check-circle']
    ],
    'esic-registration' => [
        ['label' => 'Step 1', 'title' => 'Submit Documents', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Document Verification', 'icon' => 'search'],
        ['label' => 'Step 3', 'title' => 'Application Preparation', 'icon' => 'file-text'],
        ['label' => 'Step 4', 'title' => 'Submission to ESIC Portal', 'icon' => 'upload-cloud'],
        ['label' => 'Step 5', 'title' => 'ESIC Verification', 'icon' => 'landmark'],
        ['label' => 'Step 6', 'title' => 'ESIC Number Issued', 'icon' => 'check-circle']
    ],
    'epfo-registration' => [
        ['label' => 'Step 1', 'title' => 'Submit Documents', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Document Verification', 'icon' => 'search'],
        ['label' => 'Step 3', 'title' => 'Application Preparation', 'icon' => 'file-text'],
        ['label' => 'Step 4', 'title' => 'Registration Submission', 'icon' => 'upload-cloud'],
        ['label' => 'Step 5', 'title' => 'Registration Completed', 'icon' => 'check-circle'],
        ['label' => 'Step 6', 'title' => 'Certificate Delivered', 'icon' => 'award']
    ],
    'labour-license' => [
        ['label' => 'Step 1', 'title' => 'Submit Documents', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Document Verification', 'icon' => 'search'],
        ['label' => 'Step 3', 'title' => 'Application Preparation', 'icon' => 'file-text'],
        ['label' => 'Step 4', 'title' => 'DTO Challan Prep', 'icon' => 'dollar-sign'],
        ['label' => 'Step 5', 'title' => 'Online Portal Filing', 'icon' => 'upload-cloud'],
        ['label' => 'Step 6', 'title' => 'Verification & Issuance', 'icon' => 'check-circle']
    ],
    'digital-signature' => [
        ['label' => 'Step 1', 'title' => 'Submit Identity Proofs', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'KYC Profile Validation', 'icon' => 'search'],
        ['label' => 'Step 3', 'title' => 'OTP Verification', 'icon' => 'key'],
        ['label' => 'Step 4', 'title' => 'Video Recording', 'icon' => 'video'],
        ['label' => 'Step 5', 'title' => 'Token Generation', 'icon' => 'database'],
        ['label' => 'Step 6', 'title' => 'USB Token Dispatched', 'icon' => 'truck']
    ],
    'fssai-registration' => [
        ['label' => 'Step 1', 'title' => 'Select Category', 'icon' => 'search'],
        ['label' => 'Step 2', 'title' => 'Document Compilation', 'icon' => 'upload'],
        ['label' => 'Step 3', 'title' => 'Product Classification', 'icon' => 'file-text'],
        ['label' => 'Step 4', 'title' => 'Submission on FoSCoS', 'icon' => 'upload-cloud'],
        ['label' => 'Step 5', 'title' => 'Department Review', 'icon' => 'landmark'],
        ['label' => 'Step 6', 'title' => 'FSSAI License Issued', 'icon' => 'check-circle']
    ],
    'msme-udyam-registration' => [
        ['label' => 'Step 1', 'title' => 'Submit Required Docs', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Document Verification', 'icon' => 'search'],
        ['label' => 'Step 3', 'title' => 'NIC Code Selection', 'icon' => 'file-text'],
        ['label' => 'Step 4', 'title' => 'Udyam Portal Filing', 'icon' => 'upload-cloud'],
        ['label' => 'Step 5', 'title' => 'Portal Verification', 'icon' => 'landmark'],
        ['label' => 'Step 6', 'title' => 'Udyam Certificate Issued', 'icon' => 'check-circle']
    ],
    'telangana-eprocurement' => [
        ['label' => 'Step 1', 'title' => 'Tender alert & Verification', 'icon' => 'search'],
        ['label' => 'Step 2', 'title' => 'Document Verification', 'icon' => 'file-text'],
        ['label' => 'Step 3', 'title' => 'Portal Reg & DSC Link', 'icon' => 'key'],
        ['label' => 'Step 4', 'title' => 'Technical/BOQ Prep', 'icon' => 'edit-3'],
        ['label' => 'Step 5', 'title' => 'Online Submission', 'icon' => 'upload-cloud'],
        ['label' => 'Step 6', 'title' => 'Status Tracking', 'icon' => 'check-circle']
    ],
    'gem-registration' => [
        ['label' => 'Step 1', 'title' => 'Submit Required Docs', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Document Verification', 'icon' => 'search'],
        ['label' => 'Step 3', 'title' => 'Portal setup & Verification', 'icon' => 'key'],
        ['label' => 'Step 4', 'title' => '100% Profile Setup', 'icon' => 'user-check'],
        ['label' => 'Step 5', 'title' => 'Catalogue Creation', 'icon' => 'edit-3'],
        ['label' => 'Step 6', 'title' => 'Bid Participation & Sell', 'icon' => 'check-circle']
    ],
    'central-eprocurement' => [
        ['label' => 'Step 1', 'title' => 'Tender ID & Eligibility', 'icon' => 'search'],
        ['label' => 'Step 2', 'title' => 'Document Verification', 'icon' => 'file-text'],
        ['label' => 'Step 3', 'title' => 'Vendor Reg & DSC Setup', 'icon' => 'key'],
        ['label' => 'Step 4', 'title' => 'Technical & Financial Bid', 'icon' => 'edit-3'],
        ['label' => 'Step 5', 'title' => 'Online Tender Submission', 'icon' => 'upload-cloud'],
        ['label' => 'Step 6', 'title' => 'Status Tracking & Support', 'icon' => 'check-circle']
    ],
    'society-registration' => [
        ['label' => 'Step 1', 'title' => 'Submit Documents', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Draft MoA & Rules', 'icon' => 'edit-3'],
        ['label' => 'Step 3', 'title' => 'Registrar Filing', 'icon' => 'landmark'],
        ['label' => 'Step 4', 'title' => 'Department Verification', 'icon' => 'search'],
        ['label' => 'Step 5', 'title' => 'Approval Process', 'icon' => 'shield'],
        ['label' => 'Step 6', 'title' => 'Certificate Delivery', 'icon' => 'award']
    ],
    'aop-registration' => [
        ['label' => 'Step 1', 'title' => 'Submit Documents', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Deed Drafting', 'icon' => 'edit-3'],
        ['label' => 'Step 3', 'title' => 'DSC & PAN Setup', 'icon' => 'key'],
        ['label' => 'Step 4', 'title' => 'Portal Registration', 'icon' => 'landmark'],
        ['label' => 'Step 5', 'title' => 'Approval Process', 'icon' => 'search'],
        ['label' => 'Step 6', 'title' => 'Completion', 'icon' => 'check-circle']
    ],
    'epfo-esic-returns' => [
        ['label' => 'Step 1', 'title' => 'Provide Monthly Data', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Data Verification', 'icon' => 'search'],
        ['label' => 'Step 3', 'title' => 'Challan Creation', 'icon' => 'edit-3'],
        ['label' => 'Step 4', 'title' => 'Portal Submission', 'icon' => 'upload-cloud'],
        ['label' => 'Step 5', 'title' => 'Tax Payment', 'icon' => 'landmark'],
        ['label' => 'Step 6', 'title' => 'Receipt Generated', 'icon' => 'check-circle']
    ],
    'epfo-esic-claims' => [
        ['label' => 'Step 1', 'title' => 'Submit Details', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'KYC & UAN Setup', 'icon' => 'key'],
        ['label' => 'Step 3', 'title' => 'E-Nomination', 'icon' => 'user-check'],
        ['label' => 'Step 4', 'title' => 'Claim Submission', 'icon' => 'upload-cloud'],
        ['label' => 'Step 5', 'title' => 'Dept Processing', 'icon' => 'search'],
        ['label' => 'Step 6', 'title' => 'Claim Settled', 'icon' => 'check-circle']
    ],
    'gst-returns' => [
        ['label' => 'Step 1', 'title' => 'Provide Invoices', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Data Reconciliation', 'icon' => 'search'],
        ['label' => 'Step 3', 'title' => 'Draft Returns', 'icon' => 'edit-3'],
        ['label' => 'Step 4', 'title' => 'Review & Approve', 'icon' => 'user-check'],
        ['label' => 'Step 5', 'title' => 'Final Submission', 'icon' => 'upload-cloud'],
        ['label' => 'Step 6', 'title' => 'Acknowledgement', 'icon' => 'check-circle']
    ],
    'it-returns' => [
        ['label' => 'Step 1', 'title' => 'Submit Income Proofs', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Data Verification', 'icon' => 'search'],
        ['label' => 'Step 3', 'title' => 'Tax Computation', 'icon' => 'file-text'],
        ['label' => 'Step 4', 'title' => 'ITR Filing', 'icon' => 'upload-cloud'],
        ['label' => 'Step 5', 'title' => 'E-verification', 'icon' => 'key'],
        ['label' => 'Step 6', 'title' => 'ITR-V Generated', 'icon' => 'check-circle']
    ],
    'labour-cards' => [
        ['label' => 'Step 1', 'title' => 'Submit Documents', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Form Preparation', 'icon' => 'edit-3'],
        ['label' => 'Step 3', 'title' => 'Portal Filing', 'icon' => 'upload-cloud'],
        ['label' => 'Step 4', 'title' => 'Dept Verification', 'icon' => 'search'],
        ['label' => 'Step 5', 'title' => 'Approval', 'icon' => 'check-circle'],
        ['label' => 'Step 6', 'title' => 'Card Download', 'icon' => 'award']
    ],
    'pan-tan-services' => [
        ['label' => 'Step 1', 'title' => 'Submit Details', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Document Verification', 'icon' => 'search'],
        ['label' => 'Step 3', 'title' => 'Form Filing', 'icon' => 'edit-3'],
        ['label' => 'Step 4', 'title' => 'Dept Processing', 'icon' => 'shield'],
        ['label' => 'Step 5', 'title' => 'E-Copy Issued', 'icon' => 'file-text'],
        ['label' => 'Step 6', 'title' => 'Physical Card', 'icon' => 'check-circle']
    ],
    'jeevan-pramaan' => [
        ['label' => 'Step 1', 'title' => 'Provide Aadhaar & PPO', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Biometric Scan', 'icon' => 'user-check'],
        ['label' => 'Step 3', 'title' => 'DLC Generation', 'icon' => 'edit-3'],
        ['label' => 'Step 4', 'title' => 'Portal Submission', 'icon' => 'upload-cloud'],
        ['label' => 'Step 5', 'title' => 'SMS Received', 'icon' => 'message-square'],
        ['label' => 'Step 6', 'title' => 'Certificate Delivered', 'icon' => 'award']
    ]
];

// Fallback logic
$inclusions = $all_inclusions[$service_id] ?? [
    ['title' => 'Document Verification', 'desc' => 'We verify all submitted records for errors.', 'icon' => 'file-text'],
    ['title' => 'Application Preparation', 'desc' => 'Preparation of files under legal rules.', 'icon' => 'edit-3'],
    ['title' => 'Department Filing', 'desc' => 'Submission of application to department portals.', 'icon' => 'upload-cloud'],
    ['title' => 'Approval Support', 'desc' => 'Assistance with clarification queries.', 'icon' => 'check-circle'],
    ['title' => 'Expert Guidance', 'desc' => 'Consultations from our experienced team.', 'icon' => 'user-check'],
    ['title' => 'End-to-End Tracking', 'desc' => 'Continuous tracking until final certification.', 'icon' => 'lock']
];

$steps = $all_steps[$service_id] ?? [
    ['label' => 'Step 1', 'title' => 'Submit Details', 'icon' => 'upload'],
    ['label' => 'Step 2', 'title' => 'File Review', 'icon' => 'search'],
    ['label' => 'Step 3', 'title' => 'Form Drafting', 'icon' => 'file-text'],
    ['label' => 'Step 4', 'title' => 'Portal Filing', 'icon' => 'landmark'],
    ['label' => 'Step 5', 'title' => 'Department Audit', 'icon' => 'check-circle'],
    ['label' => 'Step 6', 'title' => 'Approval Certificate', 'icon' => 'award']
];

// Override steps for job-assistance
if ($service_id === 'job-assistance') {
    $steps = [
        ['label' => 'Step 1', 'title' => 'Submit Required Docs', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Notification & Eligibility Check', 'icon' => 'search'],
        ['label' => 'Step 3', 'title' => 'Online Form Filling', 'icon' => 'edit-3'],
        ['label' => 'Step 4', 'title' => 'Document Upload & Fee Payment', 'icon' => 'file-text'],
        ['label' => 'Step 5', 'title' => 'Application Submission', 'icon' => 'upload-cloud'],
        ['label' => 'Step 6', 'title' => 'Status & Admit Card Support', 'icon' => 'check-circle']
    ];
}

// Override steps for bill-preparation
if ($service_id === 'bill-preparation') {
    $steps = [
        ['label' => 'Step 1', 'title' => 'Submit Work Order & Docs', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Document Verification', 'icon' => 'search'],
        ['label' => 'Step 3', 'title' => 'Bill & Invoice Preparation', 'icon' => 'edit-3'],
        ['label' => 'Step 4', 'title' => 'Verification & Corrections', 'icon' => 'file-text'],
        ['label' => 'Step 5', 'title' => 'Final Bill Generation', 'icon' => 'check-circle'],
        ['label' => 'Step 6', 'title' => 'Submission Support', 'icon' => 'upload-cloud']
    ];
}

// Override steps for job-works (5 steps)
if ($service_id === 'job-works') {
    $steps = [
        ['label' => 'Step 1', 'title' => 'Submit Your Document', 'icon' => 'upload'],
        ['label' => 'Step 2', 'title' => 'Typing / Formatting', 'icon' => 'edit-3'],
        ['label' => 'Step 3', 'title' => 'Proof Reading & Corrections', 'icon' => 'search'],
        ['label' => 'Step 4', 'title' => 'Print / Scan / Lamination', 'icon' => 'file-text'],
        ['label' => 'Step 5', 'title' => 'Document Delivery', 'icon' => 'check-circle']
    ];
}

$all_faqs = [
    'central-eprocurement' => [
        ['q' => 'What is the Central Public Procurement Portal (CPPP)?', 'a' => 'The Central Public Procurement Portal (CPPP) is the Government of India\'s official portal for publishing and participating in Central Government tenders.'],
        ['q' => 'Will you inform us about newly published Central Government tenders?', 'a' => 'Yes. We provide monthly updates on newly published tenders, explain eligibility criteria, and guide you on the required documents.'],
        ['q' => 'Will you verify whether we are eligible for a tender?', 'a' => 'Yes. We verify the eligibility criteria, experience requirements, turnover, EMD, and mandatory documents before recommending a tender.'],
        ['q' => 'Do you prepare Technical and Financial Bids?', 'a' => 'Yes. We prepare Technical Bids, BOQs, Financial Bids, Cost Sheets, and upload all required documents on your behalf.'],
        ['q' => 'Do you provide end-to-end tender filing support?', 'a' => 'Yes. We provide complete support from tender identification and eligibility verification to online submission and post-submission assistance.']
    ],
    'gem-registration' => [
        ['q' => 'What is GeM?', 'a' => 'GeM (Government e-Marketplace) is the Government of India\'s official online procurement portal where Government departments purchase products and services from registered sellers.'],
        ['q' => 'Who can register as a GeM Seller?', 'a' => 'Proprietorships, Partnership Firms, LLPs, Private Limited Companies, Manufacturers, Traders, Service Providers, MSMEs, Trusts, and Societies can register, subject to GeM eligibility requirements.'],
        ['q' => 'Will you complete my GeM Seller Profile?', 'a' => 'Yes. We provide complete GeM Seller Profile setup and ensure your profile is 100% completed with all required business information and verifications.'],
        ['q' => 'Do you create Product and Service Catalogues?', 'a' => 'Yes. We create professional Product and Service Catalogues, upload products/services, configure specifications, pricing, categories, and provide complete catalogue management support.'],
        ['q' => 'Will you provide GeM Bid information?', 'a' => 'Yes. We provide monthly updates on newly published GeM bids, verify eligibility criteria, guide you on the required documents, and assist with bid participation.'],
        ['q' => 'Do you provide support after registration?', 'a' => 'Yes. We provide complete post-registration support, including profile updates, catalogue updates, bid participation guidance, order management support, and GeM portal assistance.']
    ],
    'job-assistance' => [
        ['q' => 'Which job applications do you assist with?', 'a' => 'We assist with Central Government, State Government, Banking, SSC, Railway, Defence, Police, PSU, Private Company, MNC, IT, Healthcare, Education, and many other job applications.'],
        ['q' => 'Will you check my eligibility before applying?', 'a' => 'Yes. We verify your eligibility based on the official notification before submitting your application.'],
        ['q' => 'Do you provide application status support?', 'a' => 'Yes. We help you track your application status and assist with admit card and hall ticket downloads.'],
        ['q' => 'Can you apply for private jobs also?', 'a' => 'Yes. We provide application support for both Government and Private sector jobs.'],
        ['q' => 'Do you provide job notifications?', 'a' => 'Yes. We provide information about the latest Government and Private job notifications and guide you through the application process.']
    ],
    'bill-preparation' => [
        ['q' => 'Which bills do you prepare?', 'a' => 'We prepare Government and Private sector bills, including outsourcing, manpower, security, housekeeping, electrical, civil construction, service, supply, RA bills, and final bills.'],
        ['q' => 'Do you prepare Government outsourcing bills?', 'a' => 'Yes. We prepare bills for Government outsourcing contracts, manpower supply, security services, housekeeping, electrical works, civil works, and other contract-based services.'],
        ['q' => 'Do you prepare GST invoices?', 'a' => 'Yes. We assist in preparing GST-compliant invoices and supporting billing documents wherever applicable.'],
        ['q' => 'Can you prepare monthly and final bills?', 'a' => 'Yes. We prepare monthly running bills (RA Bills), final bills, and supporting statements based on the work order and department requirements.'],
        ['q' => 'Do you provide online bill submission support?', 'a' => 'Yes. We also assist with online bill submission wherever the department or client requires it.']
    ],
    'job-works' => [
        ['q' => 'Do you provide Telugu and English typing?', 'a' => 'Yes. We provide Telugu, English, and bilingual typing services.'],
        ['q' => 'Can you prepare official documents?', 'a' => 'Yes. We prepare government applications, legal documents, business letters, resumes, affidavits, quotations, invoices, and many other documents.'],
        ['q' => 'Do you provide Xerox and Printout services?', 'a' => 'Yes. We provide black & white and colour Xerox, printouts, and document printing in different paper sizes.'],
        ['q' => 'Do you provide scanning and lamination?', 'a' => 'Yes. We provide document scanning, PDF creation, and lamination services.'],
        ['q' => 'Can I send documents through WhatsApp?', 'a' => 'Yes. You can send your documents through WhatsApp, and we will prepare, print, scan, or format them as required.']
    ],
    'society-registration' => [
        ['q' => 'How many members are required?', 'a' => 'A minimum of 7 members is required to form a state-level society.'],
        ['q' => 'Is physical presence required?', 'a' => 'Typically, at least one or more executive members must visit the local registrar office.'],
        ['q' => 'What is the processing time?', 'a' => 'Registration usually takes 15 to 30 days depending on the district registrar.'],
        ['q' => 'Do we need a registered office?', 'a' => 'Yes, a registered office address with an NOC from the owner is mandatory.']
    ],
    'aop-registration' => [
        ['q' => 'What is an Association of Persons (AOP)?', 'a' => 'An AOP is an entity formed by two or more persons coming together for a common purpose, but not necessarily for business profit.'],
        ['q' => 'Is PAN mandatory for AOP?', 'a' => 'Yes, the AOP must apply for a separate PAN card in its name.'],
        ['q' => 'What documents are required?', 'a' => 'PAN, Aadhaar of all members, an AOP deed, and proof of address.'],
        ['q' => 'Do you draft the AOP Deed?', 'a' => 'Yes, we professionally draft the AOP agreement based on your objectives.']
    ],
    'epfo-esic-returns' => [
        ['q' => 'When should EPF & ESIC returns be filed?', 'a' => 'The monthly contribution (ECR/Challan) must be paid on or before the 15th of the following month.'],
        ['q' => 'What data do you need?', 'a' => 'We need your monthly attendance records, wages, and new joiner/leaver details.'],
        ['q' => 'Are there late fees?', 'a' => 'Yes, delayed payments attract damages and interest under EPF and ESIC acts.'],
        ['q' => 'Do you provide the final challan?', 'a' => 'Yes, we generate the final TRRN/Challan for you to make the payment.']
    ],
    'epfo-esic-claims' => [
        ['q' => 'Why is my PF withdrawal rejected?', 'a' => 'Rejections often happen due to name mismatch, KYC issues, or missing e-nomination. We help resolve these.'],
        ['q' => 'Is e-nomination mandatory?', 'a' => 'Yes, EPFO has made e-nomination mandatory for filing online claims.'],
        ['q' => 'How many days does a PF claim take?', 'a' => 'Online claims typically take 3 to 10 working days for the amount to be credited.'],
        ['q' => 'Can I withdraw my pension amount (10C)?', 'a' => 'Yes, if your service is less than 9.5 years and you have left the job for more than 2 months.']
    ],
    'gst-returns' => [
        ['q' => 'What are GSTR-1 and GSTR-3B?', 'a' => 'GSTR-1 is the return of outward supplies (sales), and GSTR-3B is the summary return of tax liability and ITC.'],
        ['q' => 'What happens if we file GST late?', 'a' => 'Late filing attracts a penalty of ₹50 per day (₹20 for NIL returns) plus interest on tax due.'],
        ['q' => 'How do you claim Input Tax Credit?', 'a' => 'We reconcile your purchases with GSTR-2B to ensure you get the maximum eligible ITC.'],
        ['q' => 'Is it necessary to file NIL returns?', 'a' => 'Yes, even if there are no transactions, filing a NIL return is mandatory.']
    ],
    'it-returns' => [
        ['q' => 'Who needs to file an ITR?', 'a' => 'Individuals whose total income exceeds the basic exemption limit (₹3 Lakhs) must file an ITR.'],
        ['q' => 'Can I file my ITR after July 31st?', 'a' => 'Yes, you can file a belated return until December 31st, but a late fee will apply.'],
        ['q' => 'Do you check AIS/TIS?', 'a' => 'Yes, we thoroughly review your Annual Information Statement to ensure no income is missed.'],
        ['q' => 'Is e-verification mandatory?', 'a' => 'Yes, the return is not considered valid until it is e-verified via Aadhaar OTP or bank account.']
    ],
    'labour-cards' => [
        ['q' => 'Who is eligible for a Labour Card?', 'a' => 'Unorganized sector workers, construction workers, and tradesmen between 18 and 60 years of age.'],
        ['q' => 'What are the benefits?', 'a' => 'Benefits include accidental insurance, maternity support, and children\'s education scholarships.'],
        ['q' => 'Do you need employer proof?', 'a' => 'Yes, a work certificate from an employer, contractor, or registered union is usually required.'],
        ['q' => 'How long is the card valid?', 'a' => 'Typically, it is valid for 1 to 5 years and must be renewed before expiry.']
    ],
    'pan-tan-services' => [
        ['q' => 'What is the difference between PAN and TAN?', 'a' => 'PAN is for paying income tax, while TAN is required by entities deducting tax at source (TDS).'],
        ['q' => 'How long does a new PAN take?', 'a' => 'An e-PAN is usually generated in 2 to 3 days, and the physical card arrives in 7 to 15 days.'],
        ['q' => 'Can you correct details on my PAN?', 'a' => 'Yes, we can update your name, photo, signature, or DOB on the PAN portal.'],
        ['q' => 'Is Aadhaar linking mandatory?', 'a' => 'Yes, linking your PAN with Aadhaar is strictly mandatory.']
    ],
    'jeevan-pramaan' => [
        ['q' => 'What is Jeevan Pramaan?', 'a' => 'It is a biometric-enabled digital service for pensioners to submit their Life Certificate.'],
        ['q' => 'Do I need to visit the bank?', 'a' => 'No, once the Digital Life Certificate is generated, it is automatically sent to your pension agency.'],
        ['q' => 'What details are required?', 'a' => 'You need your Aadhaar number, Pension Payment Order (PPO) number, bank account details, and mobile number.'],
        ['q' => 'Is biometric verification necessary?', 'a' => 'Yes, the pensioner must provide a fingerprint or iris scan for authentication.']
    ]
];
$faqs = $all_faqs[$service_id] ?? [
    ['q' => 'What documents are required for this service?', 'a' => 'Requirements differ by service. Typical files include PAN card, Aadhaar card, proof of address, and passport photos of the applicant.'],
    ['q' => 'What is the processing timeline?', 'a' => 'Most registrations take 5 to 10 working days, depending on government department approvals and timelines.'],
    ['q' => 'Is physical presence required?', 'a' => 'No, the entire process is managed digitally. You only need to provide scanned documents.']
];
?>

<!-- Service Details Hero Section -->
<section class="srv-hero-section">
    <div class="srv-hero-container">
        <div class="srv-hero-left">
            <h1><?php echo $s['title']; ?></h1>
            <p><?php echo $s['desc']; ?></p>
            <div class="srv-hero-badges">
                <div class="srv-badge-item">
                    <div class="srv-badge-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <span><?php echo ($service_id === 'gst-registration') ? '100% Compliant' : '100% Legal Compliance'; ?></span>
                </div>
                <div class="srv-badge-item">
                    <div class="srv-badge-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <span>Expert Assistance</span>
                </div>
                <div class="srv-badge-item">
                    <div class="srv-badge-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <span><?php echo ($service_id === 'gst-registration') ? 'Quick Processing' : 'Quick & Hassle Free'; ?></span>
                </div>
                <div class="srv-badge-item">
                    <div class="srv-badge-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"></rect><line x1="12" y1="4" x2="12" y2="20"></line><line x1="2" y1="12" x2="22" y2="12"></line></svg>
                    </div>
                    <span>Affordable Pricing</span>
                </div>
            </div>
        </div>
        <div class="srv-hero-right">
            <div class="srv-hero-divider"></div>
            <div class="srv-hero-image-wrapper">
                <?php if ($service_id === 'gst-registration'): ?>
                    <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=1200&auto=format&fit=crop" class="srv-hero-img" alt="GST Registration Details">
                <?php elseif ($service_id === 'esic-registration'): ?>
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=1200&auto=format&fit=crop" class="srv-hero-img" alt="ESIC Registration Details">
                <?php elseif ($service_id === 'epfo-registration'): ?>
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200&auto=format&fit=crop" class="srv-hero-img" alt="EPFO Registration Details">
                <?php else: ?>
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1200&auto=format&fit=crop" class="srv-hero-img" alt="<?php echo $s['title']; ?> Details">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Two-Column Content & Sidebar Layout -->
<section class="srv-layout-section">
    <div class="srv-layout-container">
        <div class="srv-layout-grid">
            
            <!-- Left Info Area -->
            <div>
                <!-- 1. Overview Section -->
                <div class="srv-content-box">
                    <h2>1. Overview</h2>
                    <div class="srv-overview-layout">
                        <div class="srv-overview-text">
                            <p><?php echo $s['details']; ?></p>
                        </div>
                        <div class="srv-overview-illustration">
                            <?php if ($service_id === 'gst-registration'): ?>
                                <!-- Custom GST calculator and tax illustration -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" viewBox="0 0 140 140" fill="none">
                                    <rect x="25" y="25" width="90" height="95" rx="12" fill="#151c3d"/>
                                    <rect x="35" y="35" width="70" height="24" rx="4" fill="#ffffff"/>
                                    <text x="45" y="52" fill="#151c3d" font-weight="800" font-family="monospace" font-size="14">TAX: 18%</text>
                                    <circle cx="45" cy="74" r="6" fill="#fb923c"/>
                                    <circle cx="60" cy="74" r="6" fill="#fb923c"/>
                                    <circle cx="75" cy="74" r="6" fill="#fb923c"/>
                                    <circle cx="95" cy="74" r="8" fill="#3b82f6"/>
                                    <circle cx="45" cy="92" r="6" fill="#fb923c"/>
                                    <circle cx="60" cy="92" r="6" fill="#fb923c"/>
                                    <circle cx="75" cy="92" r="6" fill="#fb923c"/>
                                    <circle cx="95" cy="92" r="8" fill="#10b981"/>
                                </svg>
                            <?php else: ?>
                                <!-- SVG deed document graphic -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" viewBox="0 0 140 140" fill="none">
                                    <rect x="20" y="10" width="90" height="110" rx="6" fill="#f8fafc" stroke="#cbd5e1" stroke-width="2"/>
                                    <rect x="25" y="15" width="90" height="110" rx="6" fill="#ffffff" stroke="#cbd5e1" stroke-width="2"/>
                                    <line x1="40" y1="35" x2="90" y2="35" stroke="#475569" stroke-width="3" stroke-linecap="round"/>
                                    <line x1="40" y1="48" x2="100" y2="48" stroke="#94a3b8" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="40" y1="58" x2="100" y2="58" stroke="#94a3b8" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="40" y1="68" x2="85" y2="68" stroke="#94a3b8" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="40" y1="78" x2="95" y2="78" stroke="#94a3b8" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M42 98 C 55 98, 60 92, 75 96 C 85 98, 92 90, 100 95" stroke="#0f172a" stroke-width="2" stroke-linecap="round"/>
                                    <circle cx="45" cy="98" r="8" fill="#1e3a8a" fill-opacity="0.1" stroke="#1e3a8a" stroke-width="2"/>
                                    <path d="M45 93 L45 103 M40 98 L50 98" stroke="#1e3a8a" stroke-width="1.5"/>
                                    <g transform="translate(100, 40) rotate(45)">
                                        <rect x="0" y="0" width="6" height="50" rx="3" fill="#334155"/>
                                        <path d="M0 0 L3 -8 L6 0 Z" fill="#94a3b8"/>
                                        <path d="M3 -8 L3 0" stroke="#475569" stroke-width="1"/>
                                    </g>
                                </svg>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <?php if ($service_id === 'digital-signature'): ?>
                    <!-- Custom DSC Classifications Grid -->
                    <div class="srv-content-box">
                        <h2>Class 3 DSC Types & Common Uses</h2>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px; margin-top: 20px;">
                            <!-- Sign -->
                            <div style="background: #f8fafc; border-radius: 12px; padding: 25px; border: 1px solid #e2e8f0; border-top: 4px solid var(--color-accent); box-shadow: 0 4px 15px rgba(0,0,0,0.01);">
                                <h3 style="font-size: 15px; font-weight: 800; color: var(--color-primary); margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                                    <span style="font-size: 20px;">✍️</span> Class 3 Sign DSC
                                </h3>
                                <p style="font-size: 12.5px; color: var(--color-text); line-height: 1.5; margin-bottom: 15px;">Used for signing documents digitally to verify the identity of the signatory.</p>
                                <h4 style="font-size: 11px; font-weight: 800; color: var(--color-primary); margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px;">Common Uses:</h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 6px; font-size: 12px; color: var(--color-text-dark); font-weight: 600;">
                                    <li style="display: flex; align-items: center; gap: 6px;"><span style="color: var(--color-accent);">•</span> GST filing</li>
                                    <li style="display: flex; align-items: center; gap: 6px;"><span style="color: var(--color-accent);">•</span> Income Tax filing</li>
                                    <li style="display: flex; align-items: center; gap: 6px;"><span style="color: var(--color-accent);">•</span> MCA filings</li>
                                    <li style="display: flex; align-items: center; gap: 6px;"><span style="color: var(--color-accent);">•</span> EPFO filings</li>
                                    <li style="display: flex; align-items: center; gap: 6px;"><span style="color: var(--color-accent);">•</span> Tender document signing</li>
                                    <li style="display: flex; align-items: center; gap: 6px;"><span style="color: var(--color-accent);">•</span> PDF/document signing</li>
                                </ul>
                            </div>
                            <!-- Encrypt -->
                            <div style="background: #f8fafc; border-radius: 12px; padding: 25px; border: 1px solid #e2e8f0; border-top: 4px solid var(--color-primary); box-shadow: 0 4px 15px rgba(0,0,0,0.01);">
                                <h3 style="font-size: 15px; font-weight: 800; color: var(--color-primary); margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                                    <span style="font-size: 20px;">🔐</span> Class 3 Encrypt DSC
                                </h3>
                                <p style="font-size: 12.5px; color: var(--color-text); line-height: 1.5; margin-bottom: 15px;">Used to encrypt confidential information so only the intended recipient can read it.</p>
                                <h4 style="font-size: 11px; font-weight: 800; color: var(--color-primary); margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px;">Common Uses:</h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 6px; font-size: 12px; color: var(--color-text-dark); font-weight: 600;">
                                    <li style="display: flex; align-items: center; gap: 6px;"><span style="color: var(--color-primary);">•</span> Secure email encryption</li>
                                    <li style="display: flex; align-items: center; gap: 6px;"><span style="color: var(--color-primary);">•</span> Protecting business docs</li>
                                    <li style="display: flex; align-items: center; gap: 6px;"><span style="color: var(--color-primary);">•</span> Govt/Corporate comms</li>
                                </ul>
                            </div>
                            <!-- Combo -->
                            <div style="background: #f8fafc; border-radius: 12px; padding: 25px; border: 1px solid #e2e8f0; border-top: 4px solid #10b981; box-shadow: 0 4px 15px rgba(0,0,0,0.01);">
                                <h3 style="font-size: 15px; font-weight: 800; color: var(--color-primary); margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                                    <span style="font-size: 20px;">💼</span> Sign + Encrypt (Combo)
                                </h3>
                                <p style="font-size: 12.5px; color: var(--color-text); line-height: 1.5; margin-bottom: 15px;">Includes both digital signing and encryption features in a single USB token.</p>
                                <h4 style="font-size: 11px; font-weight: 800; color: var(--color-primary); margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px;">Common Uses:</h4>
                                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 6px; font-size: 12px; color: var(--color-text-dark); font-weight: 600;">
                                    <li style="display: flex; align-items: center; gap: 6px;"><span style="color: #10b981;">•</span> e-Tendering</li>
                                    <li style="display: flex; align-items: center; gap: 6px;"><span style="color: #10b981;">•</span> e-Procurement</li>
                                    <li style="display: flex; align-items: center; gap: 6px;"><span style="color: #10b981;">•</span> ICEGATE</li>
                                    <li style="display: flex; align-items: center; gap: 6px;"><span style="color: #10b981;">•</span> DGFT</li>
                                    <li style="display: flex; align-items: center; gap: 6px;"><span style="color: #10b981;">•</span> Secure government portals</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- 2. Service Includes Section -->
                <div class="srv-content-box">
                    <h2>2. Service Includes</h2>
                    <div class="srv-inclusions-grid">
                        <?php foreach ($inclusions as $inc): ?>
                            <div class="srv-inclusion-item">
                                <div class="srv-inclusion-icon">
                                    <?php if ($inc['icon'] == 'file-text'): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    <?php elseif ($inc['icon'] == 'edit-3'): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                    <?php elseif ($inc['icon'] == 'upload-cloud'): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 16 12 12 8 16"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path><polyline points="16 16 12 12 8 16"></polyline></svg>
                                    <?php elseif ($inc['icon'] == 'shield'): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                    <?php elseif ($inc['icon'] == 'check-circle'): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                    <?php elseif ($inc['icon'] == 'user-check'): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><polyline points="16 11 18 13 22 9"></polyline></svg>
                                    <?php else: ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <?php endif; ?>
                                </div>
                                <div class="srv-inclusion-info">
                                    <h4><?php echo $inc['title']; ?></h4>
                                    <p><?php echo $inc['desc']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- 3. Process Section -->
                <div class="srv-content-box">
                    <h2>3. Process</h2>
                    <div class="srv-process-flowchart">
                        <?php foreach ($steps as $idx => $step): ?>
                            <div class="srv-flowchart-step">
                                <div class="srv-step-bubble">
                                    <?php if ($step['icon'] == 'upload'): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                                    <?php elseif ($step['icon'] == 'search'): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    <?php elseif ($step['icon'] == 'file-text'): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                                    <?php elseif ($step['icon'] == 'landmark'): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="22" x2="21" y2="22"></line><line x1="6" y1="18" x2="6" y2="11"></line><line x1="10" y1="18" x2="10" y2="11"></line><line x1="14" y1="18" x2="14" y2="11"></line><line x1="18" y1="18" x2="18" y2="11"></line><polygon points="12 2 2 7 22 7 12 2"></polygon></svg>
                                    <?php elseif ($step['icon'] == 'check-circle'): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                    <?php elseif ($step['icon'] == 'upload-cloud'): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 16 12 12 8 16"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path></svg>
                                    <?php else: ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                                    <?php endif; ?>
                                </div>
                                <span class="srv-step-label"><?php echo $step['label']; ?></span>
                                <span class="srv-step-text"><?php echo $step['title']; ?></span>
                            </div>
                            <?php if ($idx < count($steps) - 1): ?>
                                <div class="srv-step-arrow">➔</div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- 4. Required Documents Section -->
                <div class="srv-content-box">
                    <h2>4. Required Documents</h2>
                    
                    <?php if ($service_id === 'gst-registration'): ?>
                        <!-- GST Custom 3-column documents layout -->
                        <div class="srv-docs-three-cols">
                            <!-- Proprietorship Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    For Proprietorship / Single Owner
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">PAN Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">Aadhaar Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">GST License <span>(if already available)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text" style="font-size: 11px; font-weight:700;">If GST License is not available, any 2 Government Licenses: <span>Labour License / Firm Reg / Electrical License / Civil License</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">House Tax Receipt</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">Current Electricity Bill / <span>Shop Act Bill</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Rental Agreement <span>(in case of Rented Property)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text">Cancelled Cheque</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">9</div><div class="srv-docs-text">Two Contact Numbers</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">10</div><div class="srv-docs-text">Email ID</div></div>
                                </div>
                            </div>

                            <!-- Partnership Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    For Partnership Firm
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">Aadhaar Card of all Partners</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">PAN Card of all Partners</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">Firm PAN Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">Firm Registration Certificate</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">Partnership Deed</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">GST License <span>(if already available)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text" style="font-size: 11.5px; font-weight:700;">If GST License is not available, any 2 Government Licenses: <span>Labour License / Electrical License / Civil License</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text">House Tax Receipt</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">9</div><div class="srv-docs-text">Current Electricity Bill / <span>Shop Act Bill</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">10</div><div class="srv-docs-text">Rental / Lease Agreement <span>(in case of Rented Property)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">11</div><div class="srv-docs-text">Cancelled Cheque</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">12</div><div class="srv-docs-text">Contact Number of every Partner</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">13</div><div class="srv-docs-text">Alternative Contact Number</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">14</div><div class="srv-docs-text">Email ID</div></div>
                                </div>
                            </div>

                            <!-- Notes Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    Additional Notes
                                </h3>
                                <div class="srv-notes-box">
                                    <ul>
                                        <li>Documents should be clear and valid.</li>
                                        <li>Rental Agreement and Lease Agreement are required in case of Rented Property.</li>
                                        <li>Processing time may vary based on verification.</li>
                                        <li>GSTIN will be issued after successful verification.</li>
                                    </ul>
                                </div>
                                <div style="text-align: center; margin-top: 30px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="110" height="80" viewBox="0 0 150 120" fill="none">
                                        <rect x="25" y="15" width="90" height="95" rx="4" fill="#3b82f6"/>
                                        <rect x="35" y="30" width="70" height="6" rx="3" fill="#ffffff"/>
                                        <rect x="35" y="44" width="70" height="6" rx="3" fill="#ffffff"/>
                                        <rect x="35" y="58" width="50" height="6" rx="3" fill="#ffffff"/>
                                        <circle cx="105" cy="85" r="14" fill="#10b981"/>
                                        <polyline points="98 85 103 90 112 79" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($service_id === 'esic-registration' || $service_id === 'epfo-registration'): ?>
                        <!-- ESIC/EPFO Custom 3-column documents layout -->
                        <div class="srv-docs-three-cols">
                            <!-- Proprietorship Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    For Proprietorship / Single Owner
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">PAN Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">Aadhaar Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">GST License</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text" style="font-size: 11px; font-weight:700;">If GST License is not available, any 2 Government Licenses: <span>Labour License / Firm Reg / Electrical License / Civil License</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">Cancelled Cheque</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">Two Contact Numbers</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Email ID</div></div>
                                </div>
                            </div>

                            <!-- Partnership Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    For Partnership Firm
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">Aadhaar Card of all Partners</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">PAN Card of all Partners</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">Firm PAN Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">Firm Registration Certificate</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">Partnership Deed</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">GST License</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text" style="font-size: 11.5px; font-weight:700;">If GST License is not available, any 2 Government Licenses: <span>Labour License / Electrical License / Civil License</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text">Cancelled Cheque</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">9</div><div class="srv-docs-text">Contact Number of every Partner</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">10</div><div class="srv-docs-text">Alternative Contact Number</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">11</div><div class="srv-docs-text">Email ID</div></div>
                                </div>
                            </div>

                            <!-- Notes Column -->
                            <div class="srv-docs-col" <?php echo ($service_id === 'epfo-registration') ? 'style="display: flex; flex-direction: column; justify-content: center; align-items: center;"' : ''; ?>>
                                <?php if ($service_id === 'esic-registration'): ?>
                                    <h3>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                        Additional Notes
                                    </h3>
                                    <div class="srv-notes-box">
                                        <ul>
                                            <li>Documents should be clear and valid.</li>
                                            <li>Processing time may vary based on verification.</li>
                                            <li>ESIC Number will be issued after successful verification.</li>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                <div style="text-align: center; margin-top: <?php echo ($service_id === 'epfo-registration') ? '0' : '30px'; ?>;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="110" height="80" viewBox="0 0 150 120" fill="none">
                                        <rect x="25" y="15" width="90" height="95" rx="4" fill="#3b82f6"/>
                                        <rect x="35" y="30" width="70" height="6" rx="3" fill="#ffffff"/>
                                        <rect x="35" y="44" width="70" height="6" rx="3" fill="#ffffff"/>
                                        <rect x="35" y="58" width="50" height="6" rx="3" fill="#ffffff"/>
                                        <circle cx="105" cy="85" r="14" fill="#10b981"/>
                                        <polyline points="98 85 103 90 112 79" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($service_id === 'labour-license'): ?>
                        <!-- Labour License Custom 3-column documents layout -->
                        <div class="srv-docs-three-cols">
                            <!-- Proprietorship Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    Shops & Est. (Proprietorship)
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">PAN Card of Proprietor</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">Aadhaar Card of Proprietor</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">Passport Size Photograph</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">House Tax Receipt / Electricity Bill</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">Rental / Lease Agreement <span>(If applicable)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">Cancelled Cheque / Bank Passbook</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Mobile & Email ID</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text" style="font-weight: 700; color: var(--color-accent);">Telugu Name Board Photo</div></div>
                                </div>
                            </div>

                            <!-- Partnership Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    Shops & Est. (Partnership)
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">Aadhaar & PAN of all Partners</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">Firm PAN Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">Partnership Deed</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">Firm Registration Certificate</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">House Tax Receipt / Electricity Bill</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">Rental / Lease Agreement <span>(If rented)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Cancelled Cheque of the Firm</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text">Authorized Mobile & Email ID</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">9</div><div class="srv-docs-text" style="font-weight: 700; color: var(--color-accent);">Telugu Name Board Photo</div></div>
                                </div>
                            </div>

                            <!-- Contract Labour Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    Contract Labour Licence
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text" style="font-weight: 700; color: var(--color-primary);">Form V (Principal Employer)</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text" style="font-weight: 700; color: var(--color-primary);">Work Order / Agreement</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">PAN Card & Aadhaar Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">Firm Registration Certificate</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">GST Registration <span>(If Available)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">House Tax / Electricity Bill</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Rental / Lease Agreement</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text">Mobile & Email ID</div></div>
                                </div>

                                <div style="margin-top: 20px; background: rgba(255, 107, 0, 0.08); border-left: 4px solid var(--color-accent); padding: 15px; border-radius: 0 8px 8px 0;">
                                    <h4 style="font-size: 11px; text-transform: uppercase; color: var(--color-accent); font-weight: 800; margin: 0 0 5px 0; letter-spacing: 0.5px;">Important Note:</h4>
                                    <p style="font-size: 11.5px; line-height: 1.4; color: var(--color-text-dark); font-weight: 600; margin: 0;">If you provide **Form V** and **Work Order**, we will prepare the DTO Challan and complete the Contract Labour Licence process for Telangana and Central CLRA.</p>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($service_id === 'msme-udyam-registration'): ?>
                        <!-- MSME Udyam Custom 3-column documents layout -->
                        <div class="srv-docs-three-cols">
                            <!-- Proprietorship Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    For Proprietorship (Single Owner)
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">Aadhaar Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">PAN Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">Mobile Number linked with Aadhaar</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">Email ID</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">Business Address Proof</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">Business Activity Details</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Bank Account Details <span>(If Required)</span></div></div>
                                </div>
                            </div>

                            <!-- Partnership Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    For Partnership Firm
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">Aadhaar of Authorized Partner</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">PAN of Authorized Partner</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">Firm PAN Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">Partnership Deed</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">Firm Registration Certificate <span>(If Available)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">Mobile linked with Aadhaar</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Email ID & Business Address</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text">Business Activity Details</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">9</div><div class="srv-docs-text">Bank Account Details <span>(If Required)</span></div></div>
                                </div>
                            </div>

                            <!-- Company/LLP/Trust Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    Company / LLP / Trust / Society
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">PAN Card of the Organization</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">Aadhaar of Authorized Signatory</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">Certificate of Incorporation</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">Trust / Society Registration Certificate</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">Mobile, Email ID & Address</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">Business Activity Details</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Bank Account Details <span>(If Required)</span></div></div>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($service_id === 'telangana-eprocurement'): ?>
                        <!-- Telangana e-Procurement Custom 3-column documents layout -->
                        <div class="srv-docs-three-cols">
                            <!-- Proprietorship Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    For Proprietorship
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">PAN Card of Proprietor</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">Aadhaar Card of Proprietor</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">GST Registration Certificate</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">Udyam / MSME Certificate <span>(If available)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">Labour Licence <span>(If applicable)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">Firm Registration Certificate <span>(If available)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Cancelled Cheque, Mobile & Email</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text" style="font-weight: 700; color: var(--color-accent);">Class 3 Digital Signature (DSC)</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">9</div><div class="srv-docs-text">Experience & Financial Docs <span>(If required)</span></div></div>
                                </div>
                            </div>

                            <!-- Partnership/Company Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    Partnership / Company / LLP
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">Firm PAN Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">Partnership Deed / COI</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">Firm Registration Certificate</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">GST Registration Certificate</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">Udyam / MSME Certificate <span>(If available)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">Labour Licence <span>(If applicable)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Aadhaar & PAN of Signatory</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text">Cancelled Cheque, Mobile & Email</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">9</div><div class="srv-docs-text" style="font-weight: 700; color: var(--color-accent);">Class 3 Digital Signature (DSC)</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">10</div><div class="srv-docs-text">Experience & Financial Docs</div></div>
                                </div>
                            </div>

                            <!-- Tender Alerts / Selection Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    Opportunity & Consulting Services
                                </h3>
                                <div class="srv-notes-box" style="margin-bottom: 20px;">
                                    <p style="font-size: 12.5px; font-weight: 700; color: var(--color-primary); margin-top: 0; margin-bottom: 10px;">We help you identify the right opportunities:</p>
                                    <ul style="margin: 0; padding-left: 20px; font-size: 12px; line-height: 1.5; color: var(--color-text-dark); font-weight: 600;">
                                        <li>Information about newly published Telangana Government tenders.</li>
                                        <li>Monthly updates on available tenders in your sector.</li>
                                        <li>Verification of suitability, EMD, tender values, and deadline extensions.</li>
                                        <li>Guidance on corrigendums, amendments, and required documents.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($service_id === 'job-works'): ?>
                        <!-- Typing & DTP Services Custom 3-column layout -->
                        <div class="srv-docs-three-cols">
                            <!-- Required Documents Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    Typing & DTP Services
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">Telugu Typing</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">English Typing</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">Bilingual (Telugu & English) Typing</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">Data Entry & Handwritten to Digital</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">PDF / Image to Word Conversion</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">Applications, Letters & Affidavits</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Resume / Bio-data / CV Preparation</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text">Quotations, Invoices & Project Reports</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">9</div><div class="srv-docs-text">Business Profiles, Letterheads & Certificates</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">10</div><div class="srv-docs-text">Notices, Forms, Circulars & Office Documents</div></div>
                                </div>
                            </div>

                            <!-- Xerox / Print / Scan / Lamination Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    Xerox, Print, Scan & Lamination
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">Black & White Xerox</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">Colour Xerox</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">A4, A3 & Legal Size Printing</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">Colour Printing & PDF Printing</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">Document & Colour Scanning</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">PDF Merge, Split & Compression</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Digital Document Conversion</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text">ID Card & Certificate Lamination</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">9</div><div class="srv-docs-text">A4 & Legal Size Lamination</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">10</div><div class="srv-docs-text">Spiral Binding <span>(If Available)</span></div></div>
                                </div>
                            </div>

                            <!-- Required Documents / WhatsApp Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 8v4l3 3"></path></svg>
                                    How to Submit Your Documents
                                </h3>
                                <div class="srv-docs-num-list" style="margin-bottom: 14px;">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">Original Documents <span>(for Xerox / Scanning)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">Soft Copy <span>(Word / PDF / Image — If Available)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">Mobile Number</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">Email ID <span>(If Required)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">Passport Size Photograph <span>(If Required)</span></div></div>
                                </div>
                                <div class="srv-notes-box">
                                    <p style="font-size: 12.5px; font-weight: 700; color: var(--color-primary); margin-top: 0; margin-bottom: 8px;">💬 WhatsApp Document Support</p>
                                    <p style="font-size: 12px; color: var(--color-text-dark); font-weight: 600; margin: 0;">You can send your documents through <strong>WhatsApp</strong>, and we will prepare, print, scan, or format them as required. Same-day service available (subject to workload).</p>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($service_id === 'bill-preparation'): ?>
                        <!-- Bill Preparation Custom 3-column documents layout -->
                        <div class="srv-docs-three-cols">
                            <!-- Required Documents Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    Required Documents
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">Work Order / Agreement</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">Invoice Details</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">GST Registration Certificate <span>(If Applicable)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">PAN Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">Firm Registration Certificate <span>(If Applicable)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">Measurement Book (MB) / Measurement Sheet <span>(If Applicable)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Attendance Register</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text">Wage Register</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">9</div><div class="srv-docs-text">EPF & ESIC Challans <span>(If Applicable)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">10</div><div class="srv-docs-text">Bank Details</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">11</div><div class="srv-docs-text">Supporting Documents as Required by Dept / Client</div></div>
                                </div>
                            </div>

                            <!-- Bill Types Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    Bill Types We Prepare
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">Government Outsourcing Bills</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">Manpower & Security Service Bills</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">Housekeeping & Facility Management Bills</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">Electrical & Civil Construction Work Bills</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">Running Account (RA) Bills</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">Final Bills</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Supply Bills & Service Bills</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text">Private Contractor & Labour Bills</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">9</div><div class="srv-docs-text">Maintenance & Monthly Service Bills</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">10</div><div class="srv-docs-text" style="font-weight: 700; color: var(--color-accent);">GST Invoices & Tax Calculation</div></div>
                                </div>
                            </div>

                            <!-- Supporting Documentation Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 8v4l3 3"></path></svg>
                                    Supporting Documentation
                                </h3>
                                <div class="srv-notes-box" style="margin-bottom: 20px;">
                                    <p style="font-size: 12.5px; font-weight: 700; color: var(--color-primary); margin-top: 0; margin-bottom: 10px;">Complete supporting documents we prepare:</p>
                                    <ul style="margin: 0; padding-left: 20px; font-size: 12px; line-height: 1.5; color: var(--color-text-dark); font-weight: 600;">
                                        <li>Measurement Sheet Preparation (If Required).</li>
                                        <li>Employee Attendance & Wage Statements.</li>
                                        <li>EPF & ESIC Challan Attachment Support.</li>
                                        <li>GST Invoice & Tax Calculation Support.</li>
                                        <li>Work Completion Statement Preparation.</li>
                                        <li>Bill Summary & Online Submission Support.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($service_id === 'job-assistance'): ?>
                        <!-- Government Application Services Custom 2-column documents layout -->
                        <div class="srv-docs-three-cols">
                            <!-- Required Documents Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    Required Documents
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">Aadhaar Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">PAN Card <span>(If Required)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">Educational Certificates (10th, 12th, Degree, etc.)</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">Caste Certificate <span>(If Applicable)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">EWS Certificate <span>(If Applicable)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">Income Certificate <span>(If Required)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Residence / Nativity Certificate <span>(If Required)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text">Passport Size Photograph</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">9</div><div class="srv-docs-text">Signature</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">10</div><div class="srv-docs-text">Mobile Number & Email ID</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">11</div><div class="srv-docs-text">Resume / CV <span>(For Private Jobs)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">12</div><div class="srv-docs-text">Experience Certificates <span>(If Applicable)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">13</div><div class="srv-docs-text">Any Other Documents as Required in the Notification</div></div>
                                </div>
                            </div>

                            <!-- Job Categories Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    Job Categories We Cover
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">Central Government Jobs (SSC, RRB, UPSC, Banking)</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">Telangana Government Jobs (TSPSC, Telangana State)</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">APSPSC / TSPSC Application Assistance</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">Police, Defence & Military Recruitment</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">Teaching & Faculty Recruitment (TGT, PGT, UGC)</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">University & College Recruitment</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Contract & Outsourcing Job Applications</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text">Apprentice & Internship Applications</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">9</div><div class="srv-docs-text">PSU, MNC & Private Sector Jobs</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">10</div><div class="srv-docs-text">Healthcare, IT & Education Sector Jobs</div></div>
                                </div>
                            </div>

                            <!-- Application Support Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 8v4l3 3"></path></svg>
                                    Application Support Services
                                </h3>
                                <div class="srv-notes-box" style="margin-bottom: 20px;">
                                    <p style="font-size: 12.5px; font-weight: 700; color: var(--color-primary); margin-top: 0; margin-bottom: 10px;">Complete end-to-end application assistance:</p>
                                    <ul style="margin: 0; padding-left: 20px; font-size: 12px; line-height: 1.5; color: var(--color-text-dark); font-weight: 600;">
                                        <li>Online application form filling and registration.</li>
                                        <li>Photo, signature, and document upload support.</li>
                                        <li>Exam fee payment guidance (UPI, Net Banking).</li>
                                        <li>Application status tracking and updates.</li>
                                        <li>Admit card and hall ticket download assistance.</li>
                                        <li>Latest exam notification and job alert services.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($service_id === 'gem-registration'): ?>
                        <!-- GeM Seller Registration Custom 2-column documents layout -->
                        <div class="srv-docs-three-cols">
                            <!-- Proprietorship / Individual Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    For Proprietorship / Individual
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">PAN Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">Aadhaar Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">GST Registration Certificate <span>(If Applicable)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">Udyam / MSME Certificate <span>(Mandatory for MSME Sellers)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">NSIC Registration Certificate <span>(If Available)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">Cancelled Cheque / Bank Passbook</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Business Address Proof</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text">Mobile Number & Email ID</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">9</div><div class="srv-docs-text" style="font-weight: 700; color: var(--color-accent);">Class 3 DSC <span style="font-weight: 500; color: inherit;">(If Required)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">10</div><div class="srv-docs-text">Last 3 Years ITR <span>(If Applicable; Not required for New Businesses)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">11</div><div class="srv-docs-text">Product / Service Details</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">12</div><div class="srv-docs-text">Brand Authorization Letter <span>(If Applicable)</span></div></div>
                                </div>
                            </div>

                            <!-- Partnership / Company / LLP Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    Partnership / Company / LLP
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">Firm PAN Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">Partnership Deed / Certificate of Incorporation</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">Firm Registration Certificate</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">GST Registration Certificate</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">Udyam / MSME Certificate <span>(Mandatory for MSME Sellers)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">NSIC Registration Certificate <span>(If Available)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Aadhaar & PAN of Authorized Signatory</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text">Cancelled Cheque / Bank Passbook</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">9</div><div class="srv-docs-text">Business Address Proof</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">10</div><div class="srv-docs-text">Mobile Number & Email ID</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">11</div><div class="srv-docs-text" style="font-weight: 700; color: var(--color-accent);">Class 3 DSC <span style="font-weight: 500; color: inherit;">(If Required)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">12</div><div class="srv-docs-text">Last 3 Years ITR <span>(Not Mandatory for New Businesses / Start-ups)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">13</div><div class="srv-docs-text">Product / Service Details</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">14</div><div class="srv-docs-text">Brand Authorization / OEM Documents <span>(If Applicable)</span></div></div>
                                </div>
                            </div>

                            <!-- GeM Services Overview Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    GeM Bid & Business Support
                                </h3>
                                <div class="srv-notes-box" style="margin-bottom: 20px;">
                                    <p style="font-size: 12.5px; font-weight: 700; color: var(--color-primary); margin-top: 0; margin-bottom: 10px;">Our complete GeM seller support includes:</p>
                                    <ul style="margin: 0; padding-left: 20px; font-size: 12px; line-height: 1.5; color: var(--color-text-dark); font-weight: 600;">
                                        <li>100% GeM Seller Profile Completion.</li>
                                        <li>Product & Service Catalogue creation and uploads.</li>
                                        <li>Monthly updates on newly published GeM bids.</li>
                                        <li>Bid eligibility verification and document guidance.</li>
                                        <li>Brand authorization and OEM registration support.</li>
                                        <li>Order acceptance, invoicing, and payment tracking.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($service_id === 'central-eprocurement'): ?>
                        <!-- Central e-Procurement (CPPP) Custom 3-column documents layout -->
                        <div class="srv-docs-three-cols">
                            <!-- Proprietorship Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    For Proprietorship
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">PAN Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">Aadhaar Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">GST Registration Certificate</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">Udyam / MSME Certificate <span>(If Available)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">NSIC Registration Certificate <span>(If Available)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">Firm Registration Certificate <span>(If Available)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Cancelled Cheque / Bank Passbook</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text">Business Address Proof</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">9</div><div class="srv-docs-text">Mobile Number & Email ID</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">10</div><div class="srv-docs-text" style="font-weight: 700; color: var(--color-accent);">Class 3 DSC (Sign + Encrypt)</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">11</div><div class="srv-docs-text">Experience & Work Completion Certificates <span>(If Required)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">12</div><div class="srv-docs-text">Financial Statements / ITR <span>(If Required)</span></div></div>
                                </div>
                            </div>

                            <!-- Partnership / Company / LLP Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    Partnership / Company / LLP
                                </h3>
                                <div class="srv-docs-num-list">
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">1</div><div class="srv-docs-text">Firm PAN Card</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">2</div><div class="srv-docs-text">Partnership Deed / Certificate of Incorporation</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">3</div><div class="srv-docs-text">Firm Registration Certificate</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">4</div><div class="srv-docs-text">GST Registration Certificate</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">5</div><div class="srv-docs-text">Udyam / MSME Certificate <span>(If Available)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">6</div><div class="srv-docs-text">NSIC Registration Certificate <span>(If Available)</span></div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">7</div><div class="srv-docs-text">Aadhaar & PAN of Authorized Signatory</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">8</div><div class="srv-docs-text">Cancelled Cheque / Bank Passbook</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">9</div><div class="srv-docs-text">Business Address Proof</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">10</div><div class="srv-docs-text">Mobile Number & Email ID</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">11</div><div class="srv-docs-text" style="font-weight: 700; color: var(--color-accent);">Class 3 DSC (Sign + Encrypt)</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">12</div><div class="srv-docs-text">Experience & Work Completion Certificates</div></div>
                                    <div class="srv-docs-num-item"><div class="srv-docs-number">13</div><div class="srv-docs-text">Financial Statements / ITR</div></div>
                                </div>
                            </div>

                            <!-- Tender Consulting Column -->
                            <div class="srv-docs-col">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    Opportunity & Consulting Services
                                </h3>
                                <div class="srv-notes-box" style="margin-bottom: 20px;">
                                    <p style="font-size: 12.5px; font-weight: 700; color: var(--color-primary); margin-top: 0; margin-bottom: 10px;">We help you identify the right Central Government tenders:</p>
                                    <ul style="margin: 0; padding-left: 20px; font-size: 12px; line-height: 1.5; color: var(--color-text-dark); font-weight: 600;">
                                        <li>Information about newly published Central Government tenders.</li>
                                        <li>Monthly tender updates for your business sector.</li>
                                        <li>Eligibility verification, EMD, Tender Fee & Tender Value details.</li>
                                        <li>Important deadline reminders and corrigendum/amendment alerts.</li>
                                        <li>Advice on whether the tender is suitable for your business.</li>
                                        <li>Complete support from selection to final submission.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <!-- Standard Single Category Docs Checklist -->
                        <div class="srv-docs-layout">
                            <div class="srv-docs-grid">
                                <?php foreach ($s['documents'] as $doc): ?>
                                    <div class="srv-doc-item">
                                        <div class="srv-doc-check">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </div>
                                        <span><?php echo $doc; ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="srv-docs-illustration">
                                <!-- SVG folder illustrations -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="120" viewBox="0 0 150 120" fill="none">
                                    <path d="M10 25 C 10 20, 15 15, 20 15 L 60 15 C 65 15, 70 20, 75 25 L 130 25 C 135 25, 140 30, 140 35 L 140 100 C 140 105, 135 110, 130 110 L 20 110 C 15 110, 10 105, 10 100 Z" fill="#2563eb"/>
                                    <rect x="25" y="5" width="90" height="95" rx="4" fill="#ffffff" stroke="#cbd5e1" stroke-width="2"/>
                                    <line x1="35" y1="20" x2="85" y2="20" stroke="#cbd5e1" stroke-width="2"/>
                                    <line x1="35" y1="32" x2="105" y2="32" stroke="#e2e8f0" stroke-width="2"/>
                                    <line x1="35" y1="44" x2="95" y2="44" stroke="#e2e8f0" stroke-width="2"/>
                                    <!-- Clipboard overlay -->
                                    <g transform="translate(70, 45)">
                                        <rect x="0" y="0" width="65" height="65" rx="6" fill="#f8fafc" stroke="#1e293b" stroke-width="2"/>
                                        <rect x="20" y="-5" width="25" height="10" rx="3" fill="#475569"/>
                                        <circle cx="32" cy="0" r="2" fill="#ffffff"/>
                                        <!-- Checkboxes on clipboard -->
                                        <rect x="10" y="15" width="8" height="8" rx="2" fill="#10b981"/>
                                        <rect x="10" y="28" width="8" height="8" rx="2" fill="#10b981"/>
                                        <rect x="10" y="41" width="8" height="8" rx="2" fill="#10b981"/>
                                        <line x1="24" y1="19" x2="50" y2="19" stroke="#94a3b8" stroke-width="2" stroke-linecap="round"/>
                                        <line x1="24" y1="32" x2="50" y2="32" stroke="#94a3b8" stroke-width="2" stroke-linecap="round"/>
                                        <line x1="24" y1="45" x2="50" y2="45" stroke="#94a3b8" stroke-width="2" stroke-linecap="round"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- 5. FAQ Section -->
                <div class="srv-content-box">
                    <h2>5. Frequently Asked Questions</h2>
                    
                    <?php if ($service_id === 'gst-registration' || $service_id === 'esic-registration' || $service_id === 'epfo-registration'): ?>
                        <!-- Double Column FAQ accordion layout -->
                        <div class="srv-faq-two-cols">
                            <?php if ($service_id === 'gst-registration'): ?>
                                <!-- Left Col FAQs -->
                                <div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">What is GST Registration? <span>+</span></button>
                                        <div class="srv-faq-content"><p>GST Registration is a process by which a business gets registered under the Goods and Services Tax (GST) law to obtain a unique 15-digit GSTIN.</p></div>
                                    </div>
                                    <div style="height: 12px;"></div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">Who should register under GST? <span>+</span></button>
                                        <div class="srv-faq-content"><p>Any business supplying goods with a turnover exceeding ₹40 Lakhs (₹20 Lakhs for hill/special states) or services exceeding ₹20 Lakhs is required to register.</p></div>
                                    </div>
                                    <div style="height: 12px;"></div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">What are the benefits of GST Registration? <span>+</span></button>
                                        <div class="srv-faq-content"><p>It legalizes your business, allows you to collect tax from customers, enables claiming of Input Tax Credit (ITC), and allows seamless interstate sales.</p></div>
                                    </div>
                                    <div style="height: 12px;"></div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">Is GST Registration mandatory? <span>+</span></button>
                                        <div class="srv-faq-content"><p>Yes, it is mandatory for businesses crossing the threshold limits or those engaged in e-commerce, interstate sales, or casual taxable operations.</p></div>
                                    </div>
                                </div>

                                <!-- Right Col FAQs -->
                                <div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">How long does GST Registration take? <span>+</span></button>
                                        <div class="srv-faq-content"><p>Usually takes 3 to 7 working days, depending on government clarification requests and department approval timelines.</p></div>
                                    </div>
                                    <div style="height: 12px;"></div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">Can you help in GST return filing also? <span>+</span></button>
                                        <div class="srv-faq-content"><p>Yes, we offer comprehensive monthly and quarterly GST returns filing (GSTR-1 & GSTR-3B) and reconciliation support services.</p></div>
                                    </div>
                                    <div style="height: 12px;"></div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">What documents are required for GST Registration? <span>+</span></button>
                                        <div class="srv-faq-content"><p>Typical requirements include PAN card, Aadhaar card, electricity bill of office address, cancelled cheque, and incorporation/firm deeds.</p></div>
                                    </div>
                                    <div style="height: 12px;"></div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">Can GST Registration be done online? <span>+</span></button>
                                        <div class="srv-faq-content"><p>Yes, the entire application process is fully digital and handled online by our tax specialists.</p></div>
                                    </div>
                                </div>
                            <?php elseif ($service_id === 'esic-registration'): ?>
                                <!-- Left Col FAQs (ESIC) -->
                                <div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">What is ESIC Registration? <span>+</span></button>
                                        <div class="srv-faq-content"><p>Employee State Insurance Corporation (ESIC) registration is a social security scheme that provides medical, cash, and maternity benefits to employees.</p></div>
                                    </div>
                                    <div style="height: 12px;"></div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">Who needs ESIC Registration? <span>+</span></button>
                                        <div class="srv-faq-content"><p>Any establishment or factory employing 10 or more employees with wages up to a certain limit must register under ESIC.</p></div>
                                    </div>
                                    <div style="height: 12px;"></div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">What are the benefits of ESIC? <span>+</span></button>
                                        <div class="srv-faq-content"><p>It offers full medical care to employees and dependents, cash compensation during sickness, and maternity benefit for female employees.</p></div>
                                    </div>
                                    <div style="height: 12px;"></div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">What is the employee wage limit? <span>+</span></button>
                                        <div class="srv-faq-content"><p>Currently, employees earning wages up to ₹21,000 per month (₹25,000 for persons with disabilities) are covered under the ESIC scheme.</p></div>
                                    </div>
                                </div>

                                <!-- Right Col FAQs (ESIC) -->
                                <div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">How long does ESIC Registration take? <span>+</span></button>
                                        <div class="srv-faq-content"><p>The registration process is online and usually completed within 3 to 5 working days upon submitting accurate documents.</p></div>
                                    </div>
                                    <div style="height: 12px;"></div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">Can you help in ESIC renewal? <span>+</span></button>
                                        <div class="srv-faq-content"><p>ESIC registration is a one-time process and does not require annual renewal. However, monthly returns and compliance filings must be done regularly.</p></div>
                                    </div>
                                    <div style="height: 12px;"></div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">What happens if ESIC is not registered? <span>+</span></button>
                                        <div class="srv-faq-content"><p>Establishments that fall under the criteria but fail to register may face heavy penalties, interest charges, and legal actions from the department.</p></div>
                                    </div>
                                    <div style="height: 12px;"></div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">Is online ESIC registration available? <span>+</span></button>
                                        <div class="srv-faq-content"><p>Yes, the registration is completely online. Our specialists will manage the filing, document verification, and portal setups.</p></div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <!-- Left Col FAQs (EPFO) -->
                                <div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">What is EPFO Registration? <span>+</span></button>
                                        <div class="srv-faq-content"><p>EPFO registration is a process by which an establishment gets registered under the Employees Provident Fund Organization to provide retirement and pension benefits to its employees.</p></div>
                                    </div>
                                    <div style="height: 12px;"></div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">Who can apply for EPFO Registration? <span>+</span></button>
                                        <div class="srv-faq-content"><p>Any establishment employing 20 or more persons is mandatorily required to register under EPFO. Voluntary registration is also possible for businesses with fewer employees.</p></div>
                                    </div>
                                    <div style="height: 12px;"></div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">Is EPFO Registration mandatory? <span>+</span></button>
                                        <div class="srv-faq-content"><p>Yes, registration is legally mandatory under the EPF Act for all covered business units once they touch the employee headcount threshold of 20.</p></div>
                                    </div>
                                </div>

                                <!-- Right Col FAQs (EPFO) -->
                                <div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">How long does EPFO Registration take? <span>+</span></button>
                                        <div class="srv-faq-content"><p>The application filing and code allocation usually take between 3 to 5 working days upon successfully verifying the required business setup papers.</p></div>
                                    </div>
                                    <div style="height: 12px;"></div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">What documents are required? <span>+</span></button>
                                        <div class="srv-faq-content"><p>Key documents include PAN of the business, Aadhaar and PAN of partners/directors, utility bill proof of office address, and employee salary sheets.</p></div>
                                    </div>
                                    <div style="height: 12px;"></div>
                                    <div class="srv-faq-item">
                                        <button class="srv-faq-trigger">Do you provide EPFO Login after registration? <span>+</span></button>
                                        <div class="srv-faq-content"><p>Yes, upon successful registration, we hand over the official EPFO employer portal credentials (UAN setup & login) to your business managers.</p></div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php else: ?>
                        <!-- Standard Single Column FAQ accordion layout -->
                        <div class="srv-faq-accordion">
                            <?php foreach ($faqs as $faq): ?>
                                <div class="srv-faq-item">
                                    <button class="srv-faq-trigger">
                                        <?php echo $faq['q']; ?>
                                        <span>+</span>
                                    </button>
                                    <div class="srv-faq-content">
                                        <p><?php echo $faq['a']; ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- 6. Bottom Contact Section -->
                <div class="srv-content-box" style="padding: 0; border: none; box-shadow: none; background: transparent; margin-bottom: 0;">
                    <div class="srv-bottom-cta">
                        <div class="srv-bottom-cta-left">
                            <h3>6. Contact / WhatsApp</h3>
                            <p>Have questions or need assistance? We are here to help you!</p>
                            <div class="srv-bottom-cta-actions">
                                <a href="https://wa.me/917981674916?text=I%20have%20questions%20about%20<?php echo urlencode($s['title']); ?>" target="_blank" class="srv-cta-btn srv-btn-green">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    Chat on WhatsApp
                                </a>
                                <a href="tel:+917981674916" class="srv-cta-btn srv-btn-outline-orange">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    Call Now
                                </a>
                            </div>
                        </div>
                        <div class="srv-bottom-cta-right">
                            <!-- Support character graphic -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" viewBox="0 0 110 110" fill="none">
                                <circle cx="55" cy="55" r="50" fill="#eff6ff"/>
                                <path d="M55 25 C 45 25, 38 32, 38 42 L 38 52 C 38 62, 45 69, 55 69 C 65 69, 72 62, 72 52 L 72 42 C 72 32, 65 25, 55 25 Z" fill="#bfdbfe"/>
                                <path d="M34 50 A 22 22 0 0 1 76 50" fill="none" stroke="#2563eb" stroke-width="4" stroke-linecap="round"/>
                                <rect x="30" y="46" width="6" height="12" rx="3" fill="#1e3a8a"/>
                                <rect x="74" y="46" width="6" height="12" rx="3" fill="#1e3a8a"/>
                                <path d="M34 55 Q 40 64, 48 60" fill="none" stroke="#1e3a8a" stroke-width="2"/>
                                <circle cx="48" cy="46" r="2" fill="#1e293b"/>
                                <circle cx="62" cy="46" r="2" fill="#1e293b"/>
                                <path d="M52 52 Q 55 55, 58 52" fill="none" stroke="#e11d48" stroke-width="2"/>
                                <rect x="75" y="15" width="30" height="20" rx="6" fill="#2563eb"/>
                                <polygon points="80 35, 85 35, 80 40" fill="#2563eb"/>
                                <circle cx="83" cy="25" r="1.5" fill="#ffffff"/>
                                <circle cx="90" cy="25" r="1.5" fill="#ffffff"/>
                                <circle cx="97" cy="25" r="1.5" fill="#ffffff"/>
                            </svg>
                        </div>
                    </div>

                    <?php if ($service_id === 'gst-registration' || $service_id === 'esic-registration' || $service_id === 'epfo-registration'): ?>
                        <!-- footer mini badges bar -->
                        <div class="srv-desc-footer-bar">
                            <div class="srv-desc-footer-container">
                                <div class="srv-desc-footer-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                    100% Secure Process
                                </div>
                                <div class="srv-desc-footer-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path></svg>
                                    Expert Support
                                </div>
                                <div class="srv-desc-footer-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                    On-Time Delivery
                                </div>
                                <div class="srv-desc-footer-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                    Trusted by Clients
                                </div>
                            </div>
                        </div>

                        <!-- bottom description container -->
                        <div class="srv-bottom-description-box">
                            <?php if ($service_id === 'gst-registration'): ?>
                                <h3>Description (GST Registration)</h3>
                                <p>GST Registration is essential for businesses to collect taxes legally, claim Input Tax Credit and operate across India. It adds credibility to your business and ensures compliance with the GST laws.</p>
                            <?php elseif ($service_id === 'esic-registration'): ?>
                                <h3>Description (ESIC Registration)</h3>
                                <p>ESIC Registration is mandatory for establishments employing 10 or more employees with wages up to the prescribed limit. It provides medical, sickness, maternity and cash benefits to employees and ensures compliance with the ESIC Act.</p>
                            <?php else: ?>
                                <h3>Description (EPFO Registration)</h3>
                                <p>EPFO Registration is mandatory for establishments to provide social security benefits to employees. We help you complete the entire registration process quickly, accurately and in full compliance with EPFO guidelines.</p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Sticky Sidebar Area -->
            <div>
                <!-- Sidebar Need Assistance -->
                <div class="srv-sidebar-card srv-sidebar-navy">
                    <div class="srv-sidebar-avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" viewBox="0 0 68 68" fill="none">
                            <circle cx="34" cy="34" r="30" fill="rgba(255, 255, 255, 0.1)"/>
                            <path d="M34 18 C 26 18, 20 24, 20 32 L 20 40 C 20 48, 26 54, 34 54 C 42 54, 48 48, 48 40 L 48 32 C 48 24, 42 18, 34 18 Z" fill="rgba(255, 255, 255, 0.2)"/>
                            <path d="M16 38 A 18 18 0 0 1 52 38" fill="none" stroke="#ffffff" stroke-width="3"/>
                            <rect x="14" y="34" width="4" height="10" rx="2" fill="#ffffff"/>
                            <rect x="50" y="34" width="4" height="10" rx="2" fill="#ffffff"/>
                        </svg>
                    </div>
                    <h3>Need Assistance?</h3>
                    <div style="text-align: center; margin-top: -15px; margin-bottom: 20px; font-size: 13.5px; font-weight: 500; color: rgba(255,255,255,0.8);">We are here to help you!</div>
                    <div class="srv-sidebar-actions">
                        <a href="https://wa.me/917981674916?text=I%20need%20assistance%20with%20<?php echo urlencode($s['title']); ?>" target="_blank" class="srv-sidebar-btn" style="background-color: #00c24a; color: #ffffff; border: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                            Chat on WhatsApp
                        </a>
                        <a href="tel:+917981674916" class="srv-sidebar-btn srv-sidebar-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            Call Us Now
                        </a>
                    </div>

                    <div class="srv-sidebar-contact-info">
                        <div class="srv-sidebar-contact-item">
                            <div class="srv-sidebar-contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </div>
                            <div class="srv-sidebar-contact-text">
                                <p>79816 74916<br>95531 86025</p>
                            </div>
                        </div>
                        <div class="srv-sidebar-contact-item">
                            <div class="srv-sidebar-contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            </div>
                            <div class="srv-sidebar-contact-text">
                                <p>Monday – Saturday<br>9:30 AM – 7:00 PM</p>
                            </div>
                        </div>
                        <div class="srv-sidebar-contact-item">
                            <div class="srv-sidebar-contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <div class="srv-sidebar-contact-text">
                                <p>Karimnagar, Telangana</p>
                            </div>
                        </div>
                        <div class="srv-sidebar-contact-item">
                            <div class="srv-sidebar-contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </div>
                            <div class="srv-sidebar-contact-text">
                                <p style="font-size: 11px;">aadhivarahaservices@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Why Choose Us -->
                <div class="srv-sidebar-card srv-sidebar-orange-bg">
                    <h3>Why Choose Us?</h3>
                    <div class="srv-choose-list">
                        <div class="srv-choose-item">
                            <div class="srv-choose-check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <span>Expert Guidance</span>
                        </div>
                        <div class="srv-choose-item">
                            <div class="srv-choose-check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <span>Quick Processing</span>
                        </div>
                        <div class="srv-choose-item">
                            <div class="srv-choose-check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <span>Transparent Service</span>
                        </div>
                        <div class="srv-choose-item">
                            <div class="srv-choose-check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <span>Affordable Pricing</span>
                        </div>
                        <div class="srv-choose-item">
                            <div class="srv-choose-check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <span>End-to-End Support</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Script for FAQ accordions -->
<script>
    document.querySelectorAll('.srv-faq-trigger').forEach(trigger => {
        trigger.addEventListener('click', () => {
            const content = trigger.nextElementSibling;
            const isVisible = content.style.display === 'block';
            content.style.display = isVisible ? 'none' : 'block';
            trigger.innerHTML = trigger.innerHTML.replace(isVisible ? '−' : '+', isVisible ? '+' : '−');
        });
    });
</script>


