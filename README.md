# Aadhivaraha Services Website

A professional government compliance and business registration services website built with PHP and vanilla CSS, running on XAMPP.

## 🚀 Project Overview

**Aadhivaraha Services** is a full-featured corporate consulting firm website that provides:
- EPFO & ESIC Member and Employer Services
- GeM (Government e-Marketplace) Seller Registration
- Business & Government Compliance Services
- GST, ITR, and other statutory services

---

## 🛠️ Tech Stack

| Layer      | Technology         |
|------------|--------------------|
| Backend    | PHP (No Framework) |
| Frontend   | HTML5, Vanilla CSS |
| Server     | Apache via XAMPP   |
| Database   | _(Static / No DB)_ |

---

## 📁 Project Structure

```
aadhivarahaservices/
├── index.php               # Main entry point (router + layout shell)
├── style.css               # Global stylesheet
├── images/                 # All image assets
│   ├── logo.png
│   ├── hero_bg.png
│   ├── about_hero_team.png
│   └── contact_hero_support.png
└── pages/                  # Page templates
    ├── home.php
    ├── about.php
    ├── services.php
    ├── service-details.php
    ├── epf-esic.php
    ├── contact.php
    ├── pricing.php
    ├── faqs.php
    ├── privacy.php
    ├── terms.php
    ├── why-choose-us.php
    └── includes/           # Reusable page sections
        ├── epfo-esic-claims-why.php
        ├── employer-side-why.php
        └── gem-registration-why.php
```

---

## ⚙️ Local Setup (XAMPP)

1. **Install XAMPP** from [https://www.apachefriends.org/](https://www.apachefriends.org/)
2. **Clone or copy** this project into your XAMPP `htdocs` directory:
   ```
   C:\xampp\htdocs\aadhivarahaservices\
   ```
3. **Start Apache** from the XAMPP Control Panel.
4. **Open in browser:**
   ```
   http://localhost/aadhivarahaservices/
   ```

---

## 🌐 Navigation / Routing

The site uses a simple query-string router in `index.php`. Pages are loaded via:

```
http://localhost/aadhivarahaservices/?page=about
http://localhost/aadhivarahaservices/?page=contact
http://localhost/aadhivarahaservices/?page=services
http://localhost/aadhivarahaservices/?page=service-details&service=gem-registration
```

---

## 📞 Contact

**Aadhivaraha Services**
A Unit of Aadhivaraha Security Allied Services
H No, Beside Taraka Hotel, Mukarampura Street, Karimnagar – 505001, Telangana

📞 +91 79816 74916 / +91 95531 86025
📧 aadhivarahaservices@gmail.com

---

## 📄 License

This project is proprietary. All rights reserved © Aadhivaraha Services.
