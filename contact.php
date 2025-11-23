<?php
include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $names    = $_POST['names'];
    $phone    = $_POST['phone'];
    $email    = $_POST['email'];
    $service  = $_POST['service'];
    $fromcity = $_POST['fromcity'];
    $tocity   = $_POST['tocity'];
    $message  = $_POST['message'];

    
    $stmt = $conn->prepare("
        INSERT INTO contact_messages
        (names, phone, email, service_type, from_city, to_city, message_text)
        VALUES (?, ?, ?, ?, ?, ?, ?)
    ");

    if (!$stmt) {
        echo "<script>
                alert('Server error: Unable to prepare SQL.');
                window.location.href = 'contact.php';
              </script>";
        exit;
    }

    
    $stmt->bind_param("sssssss", $names, $phone, $email, $service, $fromcity, $tocity, $message);

    if ($stmt->execute()) {
        echo "<script>
                alert('Thank you $names! Your enquiry has been submitted successfully.');
                window.location.href = 'contact.php';
              </script>";
        exit;
    } else{
        echo "<script>
                alert('Something went wrong: " . $stmt->error . "');
                window.location.href = 'contact.php';
              </script>";
        exit;
    };


    $stmt->close();

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us | Excellent-Service Packers & Movers</title>

    <meta name="description"
        content="Contact Excellent-Service Packers & Movers for safe and reliable home shifting, office relocation, vehicle transport, and storage solutions across India. Call, email, or send us a message for a free quote.">

    <style>
        :root {
            --primary: #2563eb;
            --primary-soft: #eff4ff;
            --text-main: #1f2933;
            --text-muted: #6b7280;
            --bg: #f9fafb;
            --card-bg: #ffffff;
            --border-soft: #e5e7eb;
            --accent: #16a34a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        body {
            background: var(--bg);
            color: var(--text-main);
            line-height: 1.6;
        }

        /* Header / Navbar (same style as other pages) */
        header {
            background: #ffffff;
            border-bottom: 1px solid var(--border-soft);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .nav {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0.75rem 1.25rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        .logo {
            font-weight: 800;
            font-size: 1.2rem;
            color: var(--primary);
            letter-spacing: 0.5px;
        }

        .logo span {
            font-weight: 600;
            font-size: 0.75rem;
            color: var(--text-muted);
            display: block;
            margin-top: 0.1rem;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .nav-links {
            display: flex;
            gap: 0.8rem;
            font-size: 0.95rem;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-muted);
            padding: 0.35rem 0.7rem;
            border-radius: 999px;
            transition: 0.2s ease;
        }

        .nav-links a:hover,
        .nav-links a.active {
            background: var(--primary-soft);
            color: var(--primary);
        }

        /* Hamburger */
        .hamburger {
            display: none;
            width: 24px;
            height: 24px;
            flex-direction: column;
            justify-content: center;
            gap: 4px;
            cursor: pointer;
        }

        .hamburger span {
            height: 2px;
            width: 100%;
            background: #111827;
            border-radius: 999px;
            transition: 0.2s ease;
        }

        /* Mobile Menu */
        .mobile-menu {
            display: none;
            background: #ffffff;
            border-top: 1px solid var(--border-soft);
        }

        .mobile-menu-inner {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0.6rem 1.25rem 0.9rem;
            display: flex;
            flex-direction: column;
            gap: 0.4rem;
        }

        .mobile-menu-inner a {
            text-decoration: none;
            text-align: left;
            width: 100%;
             color: var(--text-muted);
        }

        .mobile-link {
            padding: 0.35rem 0;
            font-size: 0.95rem;
            color: var(--text-muted);
            text-decoration: none;
        }

        .mobile-link:hover {
            color: var(--primary);
        }

        .mobile-menu.show {
            display: block;
        }

        .btn-primary {
            padding: 0.45rem 1.1rem;
            border-radius: 999px;
            border: none;
            background: var(--primary);
            color: #fff;
            font-size: 0.9rem;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        /* Page Hero */
        .page-hero {
            max-width: 1100px;
            margin: 1.5rem auto 0;
            padding: 1.5rem 1.25rem 1.2rem;
        }

        .page-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.25rem 0.7rem;
            border-radius: 999px;
            background: var(--primary-soft);
            color: var(--primary);
            font-size: 0.78rem;
            margin-bottom: 0.6rem;
        }

        .page-badge span {
            display: inline-block;
            width: 7px;
            height: 7px;
            border-radius: 999px;
            background: var(--accent);
            margin-right: 0.4rem;
        }

        .page-hero h1 {
            font-size: clamp(1.9rem, 3vw, 2.4rem);
            margin-bottom: 0.4rem;
        }

        .page-hero p {
            max-width: 700px;
            color: var(--text-muted);
            font-size: 0.96rem;
        }

        /* Layout */
        section {
            padding: 0 1.25rem;
        }

        .section-wrapper {
            max-width: 1100px;
            margin: 0 auto 3rem;
        }

        .contact-layout {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 1.8rem;
            align-items: flex-start;
            margin-top: 1.5rem;
        }

        /* Contact Form */
        .contact-card {
            background: var(--card-bg);
            border-radius: 1rem;
            border: 1px solid var(--border-soft);
            padding: 1.4rem 1.5rem;
        }

        .contact-card h2 {
            font-size: 1.3rem;
            margin-bottom: 0.4rem;
        }

        .contact-card p {
            font-size: 0.9rem;
            color: var(--text-muted);
            margin-bottom: 1rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0.9rem;
            margin-bottom: 0.8rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label {
            font-size: 0.85rem;
            color: var(--text-main);
        }

        input,
        select,
        textarea {
            padding: 0.55rem 0.6rem;
            border-radius: 0.6rem;
            border: 1px solid var(--border-soft);
            font-size: 0.9rem;
            outline: none;
            width: 100%;
            background: #ffffff;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 1px rgba(37, 99, 235, 0.13);
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        .helper-text {
            font-size: 0.78rem;
            color: var(--text-muted);
            margin-bottom: 0.8rem;
        }

        /* Contact Info Sidebar */
        .info-card {
            background: var(--card-bg);
            border-radius: 1rem;
            border: 1px solid var(--border-soft);
            padding: 1.3rem 1.4rem;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .info-card h3 {
            font-size: 1.05rem;
            margin-bottom: 0.4rem;
        }

        .info-row {
            display: flex;
            gap: 0.6rem;
            margin-bottom: 0.6rem;
            align-items: flex-start;
        }

        .info-icon {
            width: 28px;
            height: 28px;
            border-radius: 999px;
            background: var(--primary-soft);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.95rem;
            color: var(--primary);
            flex-shrink: 0;
        }

        .info-label {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .info-value {
            font-size: 0.9rem;
            color: var(--text-main);
        }

        .info-link {
            text-decoration: none;
            color: var(--primary);
            font-size: 0.9rem;
        }

        .info-link:hover {
            text-decoration: underline;
        }

        .small-note {
            font-size: 0.8rem;
            color: var(--text-muted);
            margin-top: 0.3rem;
        }

        /* Map / Location Placeholder */
        .map-card {
            background: #e5edff;
            border-radius: 1rem;
            border: 1px dashed rgba(37, 99, 235, 0.4);
            padding: 1rem 1.1rem;
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .map-card strong {
            color: var(--primary);
        }

        /* CTA strip */
        .cta-strip {
            max-width: 1100px;
            margin: 0 auto 3.5rem;
            padding: 1.2rem 1.4rem;
            border-radius: 1.1rem;
            background: var(--primary-soft);
            border: 1px solid rgba(37, 99, 235, 0.25);
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 0.8rem;
            font-size: 0.9rem;
        }

        .cta-strip span {
            color: var(--text-muted);
        }

        .cta-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .btn-outline {
            padding: 0.4rem 0.9rem;
            border-radius: 999px;
            border: 1px solid var(--primary);
            background: #ffffff;
            color: var(--primary);
            font-size: 0.85rem;
            cursor: pointer;
        }

        .btn-outline:hover {
            background: var(--primary-soft);
        }

        /* Footer */
        footer {
            border-top: 1px solid var(--border-soft);
            padding: 1rem 1.25rem 1.5rem;
            background: #ffffff;
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .footer-inner {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 0.75rem;
            align-items: center;
        }

        .footer-links {
            display: flex;
            gap: 0.8rem;
            flex-wrap: wrap;
        }

        .footer-links a {
            text-decoration: none;
            color: var(--text-muted);
            font-size: 0.85rem;
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        /* Responsive */
        @media (max-width: 900px) {
            .contact-layout {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hamburger {
                display: flex;
            }
        }

        @media (max-width: 640px) {
            .cta-strip {
                flex-direction: column;
                align-items: flex-start;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="nav">
            <div class="logo">
                Excellent-Service
                <span>Packers & Movers</span>
            </div>

            <div class="nav-right">
                <nav class="nav-links">
                    <a href="home.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="service.php">Services</a>
                    <a href="contact.php" class="active">Contact</a>
                </nav>

                <!-- Hamburger -->
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
            <div class="mobile-menu-inner">
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="service.php">Services</a>
                <a href="contact.php" class="active">Contact</a>
            </div>
        </div>
    </header>

    <!-- Page Hero -->
    <div class="page-hero">
        <div class="page-badge"><span></span> Excellent-Service · We’re here to help</div>
        <h1>Contact Us</h1>
        <p>
            Have questions about your move, need a quote, or want to track your shipment?
            Reach out to <strong>Excellent-Service</strong> using the form below or through call, WhatsApp, or email.
        </p>
    </div>

    <!-- Contact Section -->
    <section id="contact">
        <div class="section-wrapper">
            <div class="contact-layout">
                <!-- Contact Form -->
                <div class="contact-card">
                    <h2>Send Us a Message</h2>
                    <p>Fill in your details and our team will get back to you as soon as possible.</p>

                    <!-- Make sure method="post" and action empty to submit to same page -->
                    <form action="" method="post">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="names">Full Name *</label>
                                <input type="text" id="names" name="names" placeholder="Your Name" required />
                            </div>

                            <div class="form-group">
                                <label for="phone">Mobile Number *</label>
                                <input type="tel" id="phone" name="phone" placeholder="+91-XXXXXXXXXX" required />
                            </div>

                            <div class="form-group">
                                <label for="email">Email (optional)</label>
                                <input type="email" id="email" name="email" placeholder="you@example.com" />
                            </div>

                            <div class="form-group">
                                <label for="service">Service Type *</label>
                                <select id="service" name="service" required>
                                    <option value="">Select a service</option>
                                    <option>Home Shifting</option>
                                    <option>Office Relocation</option>
                                    <option>Local Moving</option>
                                    <option>Car / Bike Transport</option>
                                    <option>Storage / Warehouse</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div class="form-group full">
                                <label for="fromcity">From City</label>
                                <input type="text" id="fromcity" name="fromcity" placeholder="e.g., Delhi" />
                            </div>

                            <div class="form-group full">
                                <label for="tocity">To City</label>
                                <input type="text" id="tocity" name="tocity" placeholder="e.g., Bangalore" />
                            </div>

                            <div class="form-group full">
                                <label for="message">Your Message *</label>
                                <textarea id="message" name="message"
                                    placeholder="Share your shifting date, size (1BHK/2BHK/office), and any other details..."
                                    required></textarea>
                            </div>
                        </div>

                        <div class="helper-text">
                            By submitting, you agree to be contacted by Excellent-Service via phone or email regarding
                            your enquiry.
                        </div>

                        <button type="submit" class="btn-primary">Submit Enquiry</button>
                    </form>
                </div>

                <!-- Contact Info + Map -->
                <div>
                    <div class="info-card">
                        <h3>Get in Touch</h3>

                        <div class="info-row">
                            <div class="info-icon">📞</div>
                            <div>
                                <div class="info-label">Call / WhatsApp</div>
                                <div class="info-value">+91-9876543210</div>
                                <div class="small-note">Available 9:00 AM – 8:00 PM (IST)</div>
                            </div>
                        </div>

                        <div class="info-row">
                            <div class="info-icon">✉️</div>
                            <div>
                                <div class="info-label">Email</div>
                                <a href="mailto:info@excellent-service.com"
                                    class="info-link">info@excellent-service.com</a>
                                <div class="small-note">Share your shifting details for a written estimate.</div>
                            </div>
                        </div>

                        <div class="info-row">
                            <div class="info-icon">📍</div>
                            <div>
                                <div class="info-label">Office Address</div>
                                <div class="info-value">
                                    Excellent-Service Packers & Movers<br>
                                    Near Main Market, Your City, Your State – 000000
                                </div>
                                <div class="small-note">We also offer door-step surveys at your location.</div>
                            </div>
                        </div>
                    </div>

                    <div class="info-card">
                        <h3>Working Hours</h3>
                        <div class="info-row">
                            <div class="info-icon">🕒</div>
                            <div>
                                <div class="info-value">Monday – Sunday</div>
                                <div class="small-note">9:00 AM to 8:00 PM · Support available on call and WhatsApp.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="map-card">
                        <strong>Map Location Placeholder</strong><br>
                        Here you can embed a Google Map iframe later, for example:
                        <br><br>
                        <code>&lt;iframe src="YOUR_GOOGLE_MAP_EMBED_URL" style="border:0;width:100%;height:220px;" allowfullscreen="" loading="lazy"&gt;&lt;/iframe&gt;</code>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Small CTA strip -->
    <section>
        <div class="cta-strip">
            <div>
                <strong>Prefer talking directly?</strong><br>
                <span>Call us now and our move coordinator will guide you step by step.</span>
            </div>
            <div class="cta-buttons">
                <button class="btn-primary">📞 Call: +91-9876543210</button>
                <button class="btn-outline">💬 Chat on WhatsApp</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-inner">
            <div>© <span id="year"></span> Excellent-Service Packers & Movers. All rights reserved.</div>
            <div class="footer-links">
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="service.php">Services</a>
                <a href="contact.php">Contact</a>
            </div>
        </div>
    </footer>

    <script>
        // Set current year automatically
        document.getElementById("year").textContent = new Date().getFullYear();

        // Mobile menu toggle
        const hamburger = document.getElementById("hamburger");
        const mobileMenu = document.getElementById("mobileMenu");

        hamburger.addEventListener("click", () => {
            mobileMenu.classList.toggle("show");
        });
    </script>
</body>

</html>
