<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Excellent-Service | Packers & Movers</title>

    <!-- SEO Description -->
    <meta name="description"
        content="Excellent-Service Packers & Movers offers safe, reliable, and affordable home and office shifting, vehicle transport, and storage services across India. Get a free moving quote today.">

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

        /* Header / Navbar */
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
            gap: 0.6rem;
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

        .btn-primary {
            padding: 0.45rem 1.1rem;
            border-radius: 999px;
            border: none;
            background: var(--primary);
            color: #fff;
            font-size: 0.9rem;
            cursor: pointer;
            transition: 0.2s ease;
            white-space: nowrap;
        }

        .btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-1px);
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
            text-align: left;
            width: 100%;
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

        /* Hero Section */
        .hero {
            max-width: 1100px;
            margin: 1.5rem auto 0;
            padding: 1.5rem 1.25rem 2.5rem;
            display: grid;
            grid-template-columns: 1.5fr 1.1fr;
            gap: 2rem;
            align-items: center;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            padding: 0.25rem 0.7rem;
            border-radius: 999px;
            background: var(--primary-soft);
            color: var(--primary);
            font-size: 0.8rem;
            margin-bottom: 0.6rem;
        }

        .badge span {
            display: inline-block;
            width: 7px;
            height: 7px;
            border-radius: 999px;
            background: var(--accent);
            margin-right: 0.4rem;
        }

        .hero h1 {
            font-size: clamp(2.1rem, 3.3vw, 2.9rem);
            margin-bottom: 0.6rem;
        }

        .hero h1 span {
            color: var(--primary);
        }

        .hero p {
            color: var(--text-muted);
            margin-bottom: 1rem;
            font-size: 0.98rem;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            align-items: center;
            margin-bottom: 0.75rem;
        }

        .btn-secondary {
            padding: 0.45rem 1.1rem;
            border-radius: 999px;
            border: 1px solid var(--border-soft);
            background: #ffffff;
            color: var(--text-main);
            font-size: 0.95rem;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .btn-secondary:hover {
            background: var(--primary-soft);
            border-color: rgba(37, 99, 235, 0.3);
        }

        .hero-note {
            font-size: 0.82rem;
            color: var(--text-muted);
        }

        .hero-note strong {
            color: var(--accent);
        }

        .hero-right {
            background: linear-gradient(135deg, #ffffff, #e0edff);
            border-radius: 1.5rem;
            padding: 1.25rem 1.5rem;
            border: 1px solid var(--border-soft);
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.1);
        }

        .hero-right h3 {
            font-size: 1.05rem;
            margin-bottom: 0.5rem;
        }

        .hero-right p {
            font-size: 0.9rem;
            color: var(--text-muted);
            margin-bottom: 0.9rem;
        }

        .mini-label {
            font-size: 0.8rem;
            color: var(--text-muted);
            margin-bottom: 0.35rem;
        }

        .hero-form {
            display: grid;
            grid-template-columns: 1fr;
            gap: 0.65rem;
            margin-bottom: 0.8rem;
        }

        .hero-form input,
        .hero-form select {
            padding: 0.5rem 0.6rem;
            border-radius: 0.6rem;
            border: 1px solid var(--border-soft);
            font-size: 0.9rem;
            outline: none;
            width: 100%;
        }

        .hero-form input:focus,
        .hero-form select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 1px rgba(37, 99, 235, 0.13);
        }

        .hero-right .info-line {
            font-size: 0.8rem;
            color: var(--text-muted);
            margin-top: 0.3rem;
        }

        .hero-right .info-line strong {
            color: var(--primary);
        }

        .hero-stats {
            display: flex;
            gap: 1.5rem;
            margin-top: 1rem;
            font-size: 0.8rem;
        }

        .hero-stat {
            display: flex;
            flex-direction: column;
            gap: 0.1rem;
        }

        .hero-stat span {
            font-weight: 700;
            font-size: 1rem;
            color: var(--primary);
        }

        /* Section base */
        section {
            padding: 0 1.25rem;
        }

        .section-wrapper {
            max-width: 1100px;
            margin: 0 auto 3rem;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 1.2rem;
        }

        .section-heading h2 {
            font-size: 1.5rem;
            margin-bottom: 0.25rem;
        }

        .section-heading p {
            font-size: 0.92rem;
            color: var(--text-muted);
        }

        /* Services */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1.25rem;
        }

        .service-card {
            background: var(--card-bg);
            border-radius: 1rem;
            border: 1px solid var(--border-soft);
            padding: 1.1rem 1.2rem;
            font-size: 0.93rem;
        }

        .service-icon {
            width: 34px;
            height: 34px;
            border-radius: 0.9rem;
            background: var(--primary-soft);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            margin-bottom: 0.6rem;
            color: var(--primary);
        }

        .service-card h3 {
            font-size: 1rem;
            margin-bottom: 0.35rem;
        }

        .service-card p {
            color: var(--text-muted);
            margin-bottom: 0.4rem;
        }

        .service-tag {
            display: inline-block;
            font-size: 0.78rem;
            color: var(--primary);
            background: var(--primary-soft);
            padding: 0.15rem 0.55rem;
            border-radius: 999px;
        }

        /* Why Choose Us & Process */
        .two-column {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 1.5rem;
            align-items: flex-start;
        }

        .card {
            background: var(--card-bg);
            border-radius: 1rem;
            border: 1px solid var(--border-soft);
            padding: 1.2rem 1.3rem;
            font-size: 0.95rem;
        }

        .card h3 {
            font-size: 1.05rem;
            margin-bottom: 0.5rem;
        }

        .bullet-list {
            list-style: none;
            margin-top: 0.5rem;
        }

        .bullet-list li {
            position: relative;
            padding-left: 1.3rem;
            margin-bottom: 0.4rem;
            color: var(--text-muted);
            font-size: 0.93rem;
        }

        .bullet-list li::before {
            content: "✔";
            position: absolute;
            left: 0;
            top: 0.1rem;
            font-size: 0.8rem;
            color: var(--primary);
        }

        .steps {
            list-style: none;
            margin-top: 0.5rem;
            border-left: 2px dashed rgba(148, 163, 184, 0.7);
            padding-left: 0.9rem;
        }

        .steps li {
            margin-bottom: 0.6rem;
            position: relative;
        }

        .steps li::before {
            content: "";
            width: 10px;
            height: 10px;
            border-radius: 999px;
            background: #ffffff;
            border: 2px solid var(--primary);
            position: absolute;
            left: -1.25rem;
            top: 0.2rem;
        }

        .steps strong {
            display: block;
            font-size: 0.9rem;
        }

        .steps span {
            font-size: 0.86rem;
            color: var(--text-muted);
        }

        /* Testimonials */
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1.25rem;
        }

        .testimonial {
            background: var(--card-bg);
            padding: 1rem 1.1rem;
            border-radius: 1rem;
            border: 1px solid var(--border-soft);
            font-size: 0.9rem;
        }

        .testimonial p {
            color: var(--text-muted);
            margin-bottom: 0.6rem;
        }

        .testimonial .name {
            font-weight: 600;
            font-size: 0.9rem;
        }

        .testimonial .meta {
            font-size: 0.78rem;
            color: var(--text-muted);
        }

        .stars {
            font-size: 0.85rem;
            color: #f97316;
            margin-bottom: 0.35rem;
        }

        /* CTA / Contact Strip */
        .cta-strip {
            max-width: 1100px;
            margin: 0 auto 3.5rem;
            padding: 1.3rem 1.5rem;
            border-radius: 1.25rem;
            background: var(--primary);
            color: #ffffff;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 0.8rem;
        }

        .cta-strip h3 {
            font-size: 1.1rem;
        }

        .cta-strip p {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .cta-strip-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .btn-light {
            padding: 0.4rem 0.9rem;
            border-radius: 999px;
            border: none;
            background: #ffffff;
            color: var(--primary);
            font-size: 0.9rem;
            cursor: pointer;
        }

        .btn-outline-light {
            padding: 0.4rem 0.9rem;
            border-radius: 999px;
            border: 1px solid rgba(255, 255, 255, 0.7);
            background: transparent;
            color: #ffffff;
            font-size: 0.9rem;
            cursor: pointer;
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
            .hero {
                grid-template-columns: 1fr;
            }

            .hero-right {
                order: -1;
            }

            .services-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .testimonials-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .two-column {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .nav-right {
                gap: 0.5rem;
            }

            .nav-links {
                display: none;
            }

            .hamburger {
                display: flex;
            }

            .mobile-menu.show {
                display: block;
            }
        }

        @media (max-width: 640px) {
            .services-grid {
                grid-template-columns: 1fr;
            }

            .testimonials-grid {
                grid-template-columns: 1fr;
            }

            .cta-strip {
                flex-direction: column;
                align-items: flex-start;
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
                <!-- Desktop Links only -->
                <nav class="nav-links">
                    <a href="home.php" class="mobile-link">Home</a>
                    <a href="about.php" class="mobile-link">About</a>
                    <a href="service.php" class="mobile-link">Services</a>
                    <a href="contact.php" class="mobile-link">Contact</a>
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
                <a href="home.php" class="mobile-link">Home</a>
                <a href="about.php" class="mobile-link">About</a>
                <a href="service.php" class="mobile-link">Services</a>
                <a href="contact.php" class="mobile-link">Contact</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-left">
            <div class="badge"><span></span> Excellent-Service · Fast · Safe · Professional</div>
            <h1>
                Hassle-Free <span>Packers & Movers</span><br />
                For Home & Office Shifting
            </h1>
            <p>
                <strong>Excellent-Service</strong> is your trusted relocation partner for local and long-distance
                shifting.
                We offer safe packing, secure loading, reliable transport, and on-time delivery of your household and
                office goods
                anywhere in India — all at affordable and transparent prices.
            </p>
            <div class="hero-actions">
                <button class="btn-primary"
                    onclick="document.getElementById('quote-form').scrollIntoView({behavior:'smooth'});">
                    Get Free Moving Estimate
                </button>
                <button class="btn-secondary">Call Now: +91-9876543210</button>
            </div>
            <div class="hero-note">
                <strong>100% Safe Moving</strong> · Real-time support · Transparent pricing
            </div>
        </div>
        <div class="hero-right" id="quote-form">
            <h3>Get Instant Quote</h3>
            <p>Share your basic details and our Excellent-Service team will contact you shortly.</p>

            <!-- ADD THIS FORM TAG -->
            <form action="process-quote.php" method="post" class="hero-form">
                <div>
                    <div class="mini-label">Name</div>
                    <input type="text" name="name" placeholder="Your Name" required />
                </div>
                <div>
                    <div class="mini-label">Mobile Number</div>
                    <input type="tel" name="phone" placeholder="Your Phone" required />
                </div>
                <div>
                    <div class="mini-label">From City</div>
                    <input type="text" name="from_city" placeholder="e.g., Delhi" />
                </div>
                <div>
                    <div class="mini-label">To City</div>
                    <input type="text" name="to_city" placeholder="e.g., Bangalore" />
                </div>
                <div>
                    <div class="mini-label">Shifting Type</div>
                    <select name="shifting_type" required>
                        <option value="">Select</option>
                        <option value="Home Shifting">Home Shifting</option>
                        <option value="Office Shifting">Office Shifting</option>
                        <option value="Car / Bike Transport">Car / Bike Transport</option>
                        <option value="Local Moving">Local Moving</option>
                        <option value="Storage / Warehouse">Storage / Warehouse</option>
                    </select>
                </div>

                <button class="btn-primary" type="submit" style="width: 100%;">Submit Request</button>
            </form>

            <div class="info-line">No hidden charges · Quick response · <strong>Free survey available</strong></div>

            <div class="hero-stats">
                <div class="hero-stat">
                    <span>10K+</span>
                    Happy Customers
                </div>
                <div class="hero-stat">
                    <span>5000+</span>
                    Shifts Completed
                </div>
                <div class="hero-stat">
                    <span>4.8★</span>
                    Average Rating
                </div>
            </div>
        </div>

    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="section-wrapper">
            <div class="section-heading">
                <h2>Our Moving Services</h2>
                <p>Excellent-Service provides complete door-to-door relocation solutions for every type of move.</p>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">🏠</div>
                    <h3>Home Shifting</h3>
                    <p>Safe relocation of your household items with professional packing and careful handling.</p>
                    <span class="service-tag">Local & Domestic</span>
                </div>
                <div class="service-card">
                    <div class="service-icon">🏢</div>
                    <h3>Office Relocation</h3>
                    <p>Minimal downtime office shifting with system, furniture, and document care.</p>
                    <span class="service-tag">Corporate Move</span>
                </div>
                <div class="service-card">
                    <div class="service-icon">🚛</div>
                    <h3>Local Moving</h3>
                    <p>Quick and budget-friendly local moves within your city with same-day shifting.</p>
                    <span class="service-tag">Same City</span>
                </div>
                <div class="service-card">
                    <div class="service-icon">🚗</div>
                    <h3>Car & Bike Transport</h3>
                    <p>Special vehicle carriers for safe and scratch-free car / bike transportation.</p>
                    <span class="service-tag">Across India</span>
                </div>
                <div class="service-card">
                    <div class="service-icon">📦</div>
                    <h3>Packing & Unpacking</h3>
                    <p>High-quality packing material with expert packing, labeling, and unpacking.</p>
                    <span class="service-tag">Zero Damage</span>
                </div>
                <div class="service-card">
                    <div class="service-icon">🏬</div>
                    <h3>Storage & Warehouse</h3>
                    <p>Short and long-term storage solutions with 24/7 security and easy access.</p>
                    <span class="service-tag">Safe Storage</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us + Process -->
    <section>
        <div class="section-wrapper">
            <div class="two-column">
                <div class="card">
                    <h3>Why Choose Excellent-Service?</h3>
                    <ul class="bullet-list">
                        <li><strong>Experienced Team:</strong> Trained staff with years of relocation experience.</li>
                        <li><strong>Quality Packing:</strong> Branded boxes, bubble wrap, tapes, and covers.</li>
                        <li><strong>Door-to-Door Service:</strong> We handle everything from start to finish.</li>
                        <li><strong>Safe Transportation:</strong> GPS-enabled vehicles & verified drivers.</li>
                        <li><strong>Affordable Pricing:</strong> No hidden charges and clear quotations.</li>
                        <li><strong>24/7 Support:</strong> Dedicated move coordinator for every shipment.</li>
                    </ul>
                </div>

                <div class="card">
                    <h3>Our Simple Moving Process</h3>
                    <ul class="steps">
                        <li>
                            <strong>1. Share Your Requirements</strong>
                            <span>Call us or fill the online form with your shifting details.</span>
                        </li>
                        <li>
                            <strong>2. Get Free Survey & Quote</strong>
                            <span>Our expert inspects your items and gives a transparent estimate.</span>
                        </li>
                        <li>
                            <strong>3. Professional Packing</strong>
                            <span>We pack, dismantle, and label everything properly.</span>
                        </li>
                        <li>
                            <strong>4. Safe Loading & Transport</strong>
                            <span>Secure loading, transportation, and real-time updates.</span>
                        </li>
                        <li>
                            <strong>5. Unloading & Rearranging</strong>
                            <span>We unload, unpack, and help you set up at the new location.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section>
        <div class="section-wrapper">
            <div class="section-heading">
                <h2>What Our Customers Say</h2>
                <p>Real feedback from people who trusted Excellent-Service with their shifting.</p>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial">
                    <div class="stars">★★★★★</div>
                    <p>Very smooth home shifting from Delhi to Pune. Packing was excellent and no damage at all.</p>
                    <div class="name">Rahul Sharma</div>
                    <div class="meta">Home Shifting – Delhi to Pune</div>
                </div>
                <div class="testimonial">
                    <div class="stars">★★★★★</div>
                    <p>They shifted our office overnight. Professional team and good coordination, highly recommended.
                    </p>
                    <div class="name">Anita Verma</div>
                    <div class="meta">Office Relocation – Gurgaon</div>
                </div>
                <div class="testimonial">
                    <div class="stars">★★★★☆</div>
                    <p>Sent my car from Bangalore to Mumbai. Delivered on time and in perfect condition.</p>
                    <div class="name">Sandeep Rao</div>
                    <div class="meta">Car Transport – Bangalore to Mumbai</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA / Contact -->
    <section id="contact">
        <div class="cta-strip">
            <div>
                <h3>Ready to Plan Your Move with Excellent-Service?</h3>
                <p>Call us or request a callback for a free moving estimate and survey.</p>
            </div>
            <div class="cta-strip-actions">
                <button class="btn-light">📞 Call: +91-9876543210</button>
                <button class="btn-outline-light">📧 Email: info@excellent-service.com</button>
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