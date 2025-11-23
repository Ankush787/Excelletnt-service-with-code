<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Services | Excellent-Service Packers & Movers</title>

  <meta name="description" content="Explore all relocation services offered by Excellent-Service Packers & Movers, including home shifting, office relocation, car & bike transport, local moving, packing, and storage solutions.">

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

    /* Header / Navbar (same as Home) */
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

    /* Page Hero / Heading */
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

    /* Sections wrapper */
    section {
      padding: 0 1.25rem;
    }

    .section-wrapper {
      max-width: 1100px;
      margin: 0 auto 3rem;
    }

    .section-heading {
      margin-bottom: 1rem;
    }

    .section-heading h2 {
      font-size: 1.4rem;
      margin-bottom: 0.25rem;
    }

    .section-heading p {
      font-size: 0.9rem;
      color: var(--text-muted);
    }

    /* Services grid detail */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 1.25rem;
    }

    .service-card {
      background: var(--card-bg);
      border-radius: 1rem;
      border: 1px solid var(--border-soft);
      padding: 1.1rem 1.2rem 1.2rem;
      font-size: 0.93rem;
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    .service-header {
      display: flex;
      align-items: center;
      gap: 0.6rem;
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
      color: var(--primary);
      flex-shrink: 0;
    }

    .service-title {
      font-size: 1rem;
      font-weight: 600;
    }

    .service-sub {
      font-size: 0.8rem;
      color: var(--text-muted);
    }

    .service-body {
      color: var(--text-muted);
      font-size: 0.9rem;
    }

    .service-list {
      list-style: none;
      margin-top: 0.4rem;
    }

    .service-list li {
      position: relative;
      padding-left: 1.2rem;
      margin-bottom: 0.3rem;
      font-size: 0.88rem;
      color: var(--text-muted);
    }

    .service-list li::before {
      content: "•";
      position: absolute;
      left: 0.2rem;
      top: -0.05rem;
      font-size: 1rem;
      color: var(--primary);
    }

    .service-tag {
      display: inline-block;
      margin-top: 0.25rem;
      font-size: 0.78rem;
      color: var(--primary);
      background: var(--primary-soft);
      padding: 0.15rem 0.55rem;
      border-radius: 999px;
    }

    /* Two-column section (Add-ons & Coverage) */
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
      font-size: 0.93rem;
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
      font-size: 0.9rem;
    }

    .bullet-list li::before {
      content: "✔";
      position: absolute;
      left: 0;
      top: 0.1rem;
      font-size: 0.8rem;
      color: var(--primary);
    }

    /* FAQ */
    .faq-item {
      background: var(--card-bg);
      border-radius: 0.9rem;
      border: 1px solid var(--border-soft);
      padding: 0.85rem 1rem;
      margin-bottom: 0.7rem;
      font-size: 0.9rem;
    }

    .faq-q {
      font-weight: 600;
      margin-bottom: 0.2rem;
    }

    .faq-a {
      color: var(--text-muted);
    }

    /* CTA */
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

    .btn-light,
    .btn-outline-light {
      padding: 0.4rem 0.9rem;
      border-radius: 999px;
      font-size: 0.9rem;
      cursor: pointer;
    }

    .btn-light {
      border: none;
      background: #ffffff;
      color: var(--primary);
    }

    .btn-outline-light {
      border: 1px solid rgba(255, 255, 255, 0.7);
      background: transparent;
      color: #ffffff;
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
      .services-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }

      .two-column {
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

      .mobile-menu.show {
        display: block;
      }
    }

    @media (max-width: 640px) {
      .services-grid {
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
        <nav class="nav-links">
          <a href="home.php" class="mobile-link">Home</a>
        <a href="about.php" class="mobile-link">About</a>
        <a href="service.php" class="mobile-link">Services</a>
        <a href="contact.php" class="mobile-link">Contact</a>
        </nav>

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

  <!-- Page Hero -->
  <div class="page-hero">
    <div class="page-badge"><span></span> Excellent-Service · Complete Moving Solutions</div>
    <h1>Our Services</h1>
    <p>
      At <strong>Excellent-Service</strong>, we provide end-to-end relocation services for homes, offices, and vehicles.
      From careful packing to safe delivery, we handle every step of your move with professionalism and care.
    </p>
  </div>

  <!-- Detailed Services Section -->
  <section>
    <div class="section-wrapper">
      <div class="section-heading">
        <h2>Relocation Services We Offer</h2>
        <p>Choose the service that fits your shifting needs. We also customize plans as per your requirements.</p>
      </div>

      <div class="services-grid">
        <!-- Home Shifting -->
        <div class="service-card">
          <div class="service-header">
            <div class="service-icon">🏠</div>
            <div>
              <div class="service-title">Home Shifting</div>
              <div class="service-sub">1 BHK · 2 BHK · 3+ BHK</div>
            </div>
          </div>
          <div class="service-body">
            Safe and systematic relocation of your household items with expert packing and handling.
          </div>
          <ul class="service-list">
            <li>Furniture dismantling & assembly</li>
            <li>Kitchen items & fragile packing</li>
            <li>Wardrobe, appliances & electronics care</li>
          </ul>
          <span class="service-tag">Local & Domestic</span>
        </div>

        <!-- Office Relocation -->
        <div class="service-card">
          <div class="service-header">
            <div class="service-icon">🏢</div>
            <div>
              <div class="service-title">Office Relocation</div>
              <div class="service-sub">Small & Large Offices</div>
            </div>
          </div>
          <div class="service-body">
            Professional shifting of office furniture, systems, and documents with minimum downtime.
          </div>
          <ul class="service-list">
            <li>Workstation & chair shifting</li>
            <li>Secure file & document movement</li>
            <li>Server & IT equipment handling</li>
          </ul>
          <span class="service-tag">Corporate Moves</span>
        </div>

        <!-- Local Moving -->
        <div class="service-card">
          <div class="service-header">
            <div class="service-icon">🚛</div>
            <div>
              <div class="service-title">Local Moving</div>
              <div class="service-sub">Within Same City</div>
            </div>
          </div>
          <div class="service-body">
            Quick and budget-friendly moves within your city, perfect for same-day shifting.
          </div>
          <ul class="service-list">
            <li>Same-day or next-day shifting</li>
            <li>Flexible timings</li>
            <li>Ideal for flats & PGs</li>
          </ul>
          <span class="service-tag">Same City</span>
        </div>

        <!-- Car & Bike Transport -->
        <div class="service-card">
          <div class="service-header">
            <div class="service-icon">🚗</div>
            <div>
              <div class="service-title">Car & Bike Transport</div>
              <div class="service-sub">All India Vehicle Shifting</div>
            </div>
          </div>
          <div class="service-body">
            Secure car and bike transportation in specialized carriers with door-to-door delivery.
          </div>
          <ul class="service-list">
            <li>Enclosed & open carriers</li>
            <li>Wheel lock & safety belts</li>
            <li>Condition check at pickup & drop</li>
          </ul>
          <span class="service-tag">Across India</span>
        </div>

        <!-- Packing & Unpacking -->
        <div class="service-card">
          <div class="service-header">
            <div class="service-icon">📦</div>
            <div>
              <div class="service-title">Packing & Unpacking</div>
              <div class="service-sub">Full & Partial Packing</div>
            </div>
          </div>
          <div class="service-body">
            High-quality packing material and expert techniques to protect every item.
          </div>
          <ul class="service-list">
            <li>Cartons, bubble wrap, foam, tapes</li>
            <li>Room-wise labeling & marking</li>
            <li>Unpacking and basic setup</li>
          </ul>
          <span class="service-tag">Zero Damage Focus</span>
        </div>

        <!-- Storage & Warehouse -->
        <div class="service-card">
          <div class="service-header">
            <div class="service-icon">🏬</div>
            <div>
              <div class="service-title">Storage & Warehouse</div>
              <div class="service-sub">Short & Long-Term</div>
            </div>
          </div>
          <div class="service-body">
            Safe and clean storage facilities for your goods with flexible plans and security.
          </div>
          <ul class="service-list">
            <li>Short & long-term storage plans</li>
            <li>24/7 security & CCTV</li>
            <li>Easy check-in & check-out</li>
          </ul>
          <span class="service-tag">Secure Storage</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Add-ons & Coverage -->
  <section>
    <div class="section-wrapper">
      <div class="two-column">
        <div class="card">
          <h3>Value-Added Services</h3>
          <p>Make your move even smoother with our optional add-on services.</p>
          <ul class="bullet-list">
            <li><strong>Insurance Coverage:</strong> Transit insurance for extra peace of mind.</li>
            <li><strong>Pre-Move Survey:</strong> Free physical or video survey to estimate cost.</li>
            <li><strong>Handyman Support:</strong> Basic fitting, drilling, and minor assembly.</li>
            <li><strong>Old Item Disposal:</strong> Help in removing unwanted furniture or junk.</li>
            <li><strong>Flexible Scheduling:</strong> Weekend, holiday, or late-night shifting slots.</li>
          </ul>
        </div>

        <div class="card">
          <h3>Service Areas & Coverage</h3>
          <p>
            Excellent-Service operates across major cities and towns in India with strong network support.
          </p>
          <ul class="bullet-list">
            <li>Local shifting within your city</li>
            <li>Intercity and interstate moves</li>
            <li>Metro & Tier-2 city coverage</li>
            <li>Door-to-door pickup and delivery</li>
          </ul>
          <p style="margin-top:0.4rem; font-size:0.88rem; color:var(--text-muted);">
            Contact us with your “From” and “To” locations to confirm exact availability for your route.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section>
    <div class="section-wrapper">
      <div class="section-heading">
        <h2>Frequently Asked Questions</h2>
        <p>Clear answers about our packers and movers services.</p>
      </div>

      <div class="faq-item">
        <div class="faq-q">How are shifting charges calculated?</div>
        <div class="faq-a">
          Charges depend on distance, volume of goods, floor level, type of vehicle, packing material,
          and any extra services (like storage or insurance). Contact us for a free, detailed quote.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Do you provide packing material?</div>
        <div class="faq-a">
          Yes, we bring all required packing materials like cartons, tapes, bubble wrap, blankets, and covers.
          You can choose full packing or only for fragile and important items.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Can I reschedule my moving date?</div>
        <div class="faq-a">
          Yes, you can reschedule your move by informing us in advance. We’ll try our best to arrange another suitable slot for you.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Is there any tracking or update during transit?</div>
        <div class="faq-a">
          Our team stays in touch with you throughout the move and provides regular updates. For long-distance moves,
          vehicle and driver details are shared for better coordination.
        </div>
      </div>
    </div>
  </section>

  <!-- CTA / Contact -->
  <section id="contact">
    <div class="cta-strip">
      <div>
        <h3>Not Sure Which Service You Need?</h3>
        <p>Share your shifting details with Excellent-Service and we’ll suggest the best plan for you.</p>
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
        <a href="home.php" class="mobile-link">Home</a>
        <a href="about.php" class="mobile-link">About</a>
        <a href="service.php" class="mobile-link">Services</a>
        <a href="contact.php" class="mobile-link">Contact</a>
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
