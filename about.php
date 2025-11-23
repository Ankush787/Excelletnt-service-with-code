<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About | Excellent-Service Packers & Movers</title>

  <meta name="description" content="Learn more about Excellent-Service Packers & Movers, our mission, vision, and why thousands trust us for safe and reliable relocation services across India.">

  <style>
    :root {
      --primary: #2563eb;
      --primary-soft: #eff4ff;
      --text-main: #1f2933;
      --text-muted: #6b7280;
      --bg: #f9fafb;
      --card-bg: #ffffff;
      --border-soft: #e5e7eb;
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

    .mobile-menu.show {
      display: block;
    }

    .btn-primary {
      padding: 0.4rem 1rem;
      border-radius: 999px;
      border: none;
      background: var(--primary);
      color: #fff;
      font-size: 0.95rem;
      cursor: pointer;
      transition: 0.2s ease;
    }

    .btn-primary:hover {
      opacity: 0.9;
      transform: translateY(-1px);
    }

    /* Hero Section */
    .hero {
      max-width: 1100px;
      margin: 1.5rem auto 0;
      padding: 1.5rem 1.25rem 2rem;
      display: grid;
      grid-template-columns: 1.3fr 1fr;
      gap: 2rem;
      align-items: center;
    }

    .hero-text h1 {
      font-size: clamp(2rem, 3vw, 2.6rem);
      margin-bottom: 0.75rem;
    }

    .hero-text p {
      color: var(--text-muted);
      margin-bottom: 1rem;
      font-size: 0.98rem;
    }

    .hero-highlights {
      display: flex;
      flex-wrap: wrap;
      gap: 0.75rem;
      margin-top: 0.5rem;
    }

    .pill {
      padding: 0.35rem 0.8rem;
      font-size: 0.8rem;
      border-radius: 999px;
      background: var(--primary-soft);
      color: var(--primary);
      border: 1px solid rgba(37, 99, 235, 0.2);
    }

    .hero-card {
      background: var(--card-bg);
      padding: 1.25rem;
      border-radius: 1rem;
      border: 1px solid var(--border-soft);
      box-shadow: 0 8px 20px rgba(15, 23, 42, 0.06);
    }

    .hero-card h2 {
      font-size: 1.1rem;
      margin-bottom: 0.5rem;
    }

    .hero-card p {
      color: var(--text-muted);
      font-size: 0.9rem;
      margin-bottom: 1rem;
    }

    .hero-stats {
      display: flex;
      justify-content: space-between;
      gap: 1rem;
      margin-top: 0.5rem;
    }

    .stat {
      text-align: center;
      flex: 1;
    }

    .stat span {
      display: block;
      font-weight: 700;
      font-size: 1.1rem;
      color: var(--primary);
    }

    .stat small {
      font-size: 0.75rem;
      color: var(--text-muted);
    }

    /* Main Content */
    main {
      max-width: 1100px;
      margin: 0 auto 3rem;
      padding: 0 1.25rem;
      display: grid;
      grid-template-columns: 2fr 1.3fr;
      gap: 2rem;
    }

    section {
      margin-top: 1.5rem;
    }

    h2.section-title {
      font-size: 1.4rem;
      margin-bottom: 0.6rem;
    }

    .section-text {
      background: var(--card-bg);
      padding: 1.25rem 1.5rem;
      border-radius: 1rem;
      border: 1px solid var(--border-soft);
      font-size: 0.95rem;
      color: var(--text-muted);
    }

    /* Sidebar / Services / Why Choose Us */
    .sidebar {
      margin-top: 1.5rem;
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
    }

    .card {
      background: var(--card-bg);
      padding: 1.25rem 1.4rem;
      border-radius: 1rem;
      border: 1px solid var(--border-soft);
      font-size: 0.95rem;
    }

    .card h3 {
      margin-bottom: 0.6rem;
      font-size: 1.05rem;
    }

    ul {
      list-style: none;
      margin-top: 0.5rem;
    }

    ul li {
      padding-left: 1.4rem;
      position: relative;
      margin-bottom: 0.4rem;
      color: var(--text-muted);
      font-size: 0.93rem;
    }

    ul li::before {
      content: "✔";
      position: absolute;
      left: 0;
      top: 0.1rem;
      font-size: 0.8rem;
      color: var(--primary);
    }

    .services-list li::before {
      content: "▸";
      font-size: 0.8rem;
      top: 0.15rem;
    }

    /* Contact box */
    .contact-box {
      margin-top: 1.5rem;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 1rem;
      background: var(--primary-soft);
      border-radius: 1rem;
      padding: 1.25rem 1.5rem;
      border: 1px solid rgba(37, 99, 235, 0.2);
    }

    .contact-box p {
      margin: 0;
      font-size: 0.95rem;
      color: var(--text-main);
    }

    .contact-box span {
      display: block;
      font-size: 0.85rem;
      color: var(--text-muted);
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

    /* Responsive Styles */
    @media (max-width: 900px) {
      .hero {
        grid-template-columns: 1fr;
      }

      main {
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
      .hero {
        padding-top: 1rem;
      }

      .hero-card {
        order: -1;
      }

      .hero-stats {
        flex-direction: column;
        align-items: stretch;
      }

      .contact-box {
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
          <a href="home.php">Home</a>
          <a href="about.php" class="active">About</a>
          <a href="service.php">Services</a>
          <a href="contact.php">Contact</a>
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

  <!-- Hero -->
  <section class="hero">
    <div class="hero-text">
      <h1>About Us – Trusted Packers & Movers</h1>
      <p>
        Welcome to <strong>Excellent-Service</strong>, your reliable partner for safe and
        hassle-free relocation services across India. We provide complete shifting solutions
        for homes, offices, and vehicles with end-to-end support.
      </p>
      <div class="hero-highlights">
        <span class="pill">Safe & Secure Moving</span>
        <span class="pill">Pan India Service</span>
        <span class="pill">Experienced Team</span>
      </div>
    </div>

    <div class="hero-card">
      <h2>Stress-Free Relocation Experience</h2>
      <p>
        From packing and loading to transportation, unloading, and rearranging, our professional team
        handles everything with utmost care using high-quality materials and modern tools.
      </p>
      <div class="hero-stats">
        <div class="stat">
          <span>10K+</span>
          <small>Happy Customers</small>
        </div>
        <div class="stat">
          <span>5000+</span>
          <small>Successful Moves</small>
        </div>
        <div class="stat">
          <span>24/7</span>
          <small>Support</small>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <main>
    <!-- Left: About / Mission / Vision -->
    <div>
      <section>
        <h2 class="section-title">Who We Are</h2>
        <div class="section-text">
          At <strong>Excellent-Service</strong>, we believe relocating should be a smooth and stress-free
          experience. Our trained and professional team uses high-quality packing materials, modern tools,
          and advanced handling techniques to ensure complete protection of your valuable belongings.
          <br><br>
          Whether you’re shifting locally or across states, we offer customized moving plans that suit your
          budget and requirements. From dismantling and packing to loading, transportation, unloading, and
          rearranging — we handle everything with care, as if it were our own.
        </div>
      </section>

      <section>
        <h2 class="section-title">Our Mission</h2>
        <div class="section-text">
          Our mission is to deliver trusted and affordable relocation services with complete customer
          satisfaction and a zero-damage policy. We aim to make every move safe, timely, and hassle-free,
          building long-term relationships with our clients through honesty, reliability, and professional service.
        </div>
      </section>

      <section>
        <h2 class="section-title">Our Vision</h2>
        <div class="section-text">
          Our vision is to become India’s most preferred packers and movers brand known for reliability,
          safety, and service excellence. We continuously upgrade our processes, technology, and team skills
          to provide a seamless moving experience to individuals and businesses across the country.
        </div>
      </section>
    </div>

    <!-- Right: Sidebar -->
    <aside class="sidebar">
      <div class="card">
        <h3>Why Choose Us?</h3>
        <ul>
          <li>Professional & experienced team</li>
          <li>High-quality packing materials</li>
          <li>Door-to-door shifting service</li>
          <li>Timely & safe delivery</li>
          <li>Affordable & transparent pricing</li>
          <li>24/7 customer support</li>
        </ul>
      </div>

      <div class="card">
        <h3>Our Services</h3>
        <ul class="services-list">
          <li>Home Relocation</li>
          <li>Office / Corporate Shifting</li>
          <li>Local & Domestic Moving</li>
          <li>Car / Bike Transportation</li>
          <li>Warehouse & Storage Facility</li>
          <li>Packing & Unpacking Services</li>
        </ul>
      </div>

      <div class="contact-box" id="contact">
        <div>
          <p><strong>Planning to Move?</strong></p>
          <span>Let our experts handle your shifting while you enjoy complete peace of mind.</span>
        </div>
        <button class="btn-primary">Call Now</button>
      </div>
    </aside>
  </main>

  <!-- Footer -->
  <footer>
    <div class="footer-inner">
      <div>© <span id="year"></span> Excellent-Service. All rights reserved.</div>
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
