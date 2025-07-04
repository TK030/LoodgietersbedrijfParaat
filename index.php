<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Loodgieter Paraat</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
  <link rel="icon" href="loodgietersbedrijfParaat_logo.png">
</head>

<body>
  <!-- Navigatie -->
  <header>
    <nav class="navbar" aria-label="Hoofdnavigatie">
      <div class="nav-logo">
        <a href="#hero" aria-label="Ga naar de homepage">
          <img src="loodgietersbedrijfParaat_logo.png" alt="Loodgieter Paraat logo">
        </a>
      </div>
      <ul class="nav-links">
        <li><a href="#hero">Home</a></li>
        <li><a href="#diensten">Diensten</a></li>
        <li><a href="#over">Over ons</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#contact">Contact</a></li>
        <a href="tel:0612345678" class="cta-btn cta-call">
          <span class="cta-icon">
            <svg width="22" height="22" viewBox="0 0 28 28" fill="none" aria-hidden="true">
              <circle cx="14" cy="14" r="14" fill="#ee9a3a" />
              <path d="M19.5 17.2l-2.1-1a1.2 1.2 0 0 0-1.3.3l-.9 1.1a9.2 9.2 0 0 1-4.3-4.3l1.1-.9a1.2 1.2 0 0 0 .3-1.3l-1-2.1a1.2 1.2 0 0 0-1.3-.7l-2.2.5a1.2 1.2 0 0 0-1 1.2c0 6.1 5 11.1 11.1 11.1a1.2 1.2 0 0 0 1.2-1l.5-2.2a1.2 1.2 0 0 0-.7-1.3z" fill="none" stroke="#fff" stroke-width="2" />
            </svg>
          </span>
          06-12345678
        </a>
      </ul>
      <button class="hamburger" aria-label="Menu openen" aria-expanded="false" aria-controls="nav-menu">
        <span></span><span></span><span></span>
      </button>
    </nav>
    <ul class="nav-mobile" id="nav-menu" aria-label="Mobiele navigatie">
      <li><a href="#hero">Home</a></li>
      <li><a href="#diensten">Diensten</a></li>
      <li><a href="#over">Over ons</a></li>
      <li><a href="#blog">Blog</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </header>

  <!-- Hero -->
  <section id="hero" class="hero">
    <div class="hero-content">
      <h1>Altijd Paraat voor uw Loodgieterswerk</h1>
      <p>Betrouwbaar, snel en vakkundig – 24/7 service in heel Nederland</p>
      <div class="hero-buttons">
        <a href="#contact" class="cta-btn">Vraag direct een offerte aan</a>
      </div>
    </div>
    <div class="hero-img">
      <img src="images/plumber-1162323_1280.jpg" alt="Loodgieter aan het werk">
    </div>
  </section>

  <!-- Diensten -->
  <section id="diensten" class="diensten section-dark">
    <h2>Onze Diensten</h2>
    <div class="diensten-grid">
      <div class="dienst">
        <!-- Leidingwerk -->
        <span class="dienst-icoon" aria-hidden="true">
          <svg width="56" height="56" viewBox="0 0 56 56" fill="none">
            <rect x="10" y="24" width="36" height="8" rx="4" fill="#ee9a3a" />
            <rect x="24" y="10" width="8" height="36" rx="4" fill="#1f4b6e" />
          </svg>
        </span>
        <h3>Leidingwerk</h3>
        <p>Installatie en reparatie van water- en gasleidingen, altijd veilig en vakkundig.</p>
      </div>
      <div class="dienst">
        <!-- Ontstopping -->
        <span class="dienst-icoon" aria-hidden="true">
          <svg width="56" height="56" viewBox="0 0 56 56" fill="none">
            <circle cx="28" cy="28" r="18" stroke="#ee9a3a" stroke-width="6" fill="none" />
            <rect x="25" y="10" width="6" height="24" rx="3" fill="#1f4b6e" />
            <rect x="22" y="34" width="12" height="8" rx="4" fill="#ee9a3a" />
          </svg>
        </span>
        <h3>Ontstopping</h3>
        <p>Snelle ontstopping van afvoer, riool en gootsteen. 24/7 bereikbaar!</p>
      </div>
      <div class="dienst">
        <!-- Verwarming -->
        <span class="dienst-icoon" aria-hidden="true">
          <svg width="56" height="56" viewBox="0 0 56 56" fill="none">
            <rect x="18" y="18" width="20" height="20" rx="10" fill="#ee9a3a" />
            <rect x="26" y="10" width="4" height="12" rx="2" fill="#1f4b6e" />
            <rect x="26" y="34" width="4" height="12" rx="2" fill="#1f4b6e" />
          </svg>
        </span>
        <h3>Verwarming</h3>
        <p>Plaatsen, onderhouden en repareren van cv-ketels en radiatoren.</p>
      </div>
      <div class="dienst">
        <!-- Badkamer renovatie -->
        <span class="dienst-icoon" aria-hidden="true">
          <svg width="56" height="56" viewBox="0 0 56 56" fill="none">
            <rect x="12" y="32" width="32" height="10" rx="5" fill="#ee9a3a" />
            <rect x="22" y="14" width="12" height="18" rx="6" fill="#1f4b6e" />
          </svg>
        </span>
        <h3>Badkamer renovatie</h3>
        <p>Complete renovatie of kleine aanpassingen, wij maken uw badkamer weer als nieuw.</p>
      </div>
      <div class="dienst">
        <!-- Dakwerk -->
        <span class="dienst-icoon" aria-hidden="true">
          <svg width="56" height="56" viewBox="0 0 56 56" fill="none">
            <polygon points="8,32 28,12 48,32" fill="#ee9a3a" />
            <rect x="18" y="32" width="20" height="12" rx="4" fill="#1f4b6e" />
          </svg>
        </span>
        <h3>Dakwerk</h3>
        <p>Van lekkage tot volledige dakrenovatie, wij staan paraat.</p>
      </div>
      <div class="dienst">
        <!-- Spoedservice -->
        <span class="dienst-icoon" aria-hidden="true">
          <svg width="56" height="56" viewBox="0 0 56 56" fill="none">
            <circle cx="28" cy="28" r="24" stroke="#ee9a3a" stroke-width="4" fill="none" />
            <rect x="26" y="14" width="4" height="16" rx="2" fill="#1f4b6e" />
            <circle cx="28" cy="38" r="3" fill="#1f4b6e" />
          </svg>
        </span>
        <h3>Spoedservice</h3>
        <p>Direct hulp bij lekkages of verstoppingen, dag en nacht bereikbaar.</p>
      </div>
    </div>
  </section>

  <!-- Over ons -->
  <section id="over" class="overons section-light">
    <div class="overons-content">
      <div class="overons-img">
        <img src="images/istockphoto-1487620897-1024x1024.jpg" alt="Ons team">
      </div>
      <div>
        <h2>Over Loodgieter Paraat</h2>
        <p>
          Met meer dan 15 jaar ervaring staan wij bekend om onze betrouwbaarheid, vakmanschap en snelle service.
          Of het nu gaat om een kleine reparatie of een grote renovatie, wij denken met u mee en leveren altijd kwaliteit.
        </p>
        <p>
          Wij zijn pas tevreden als u dat ook bent!
        </p>
      </div>
    </div>
  </section>

  <!-- Blog -->
  <section id="blog" class="blog section-dark">
    <h2>Laatste Blogs</h2>
    <div class="blog-grid">
      <article class="blogpost">
        <img src="images/plumbing-repair-service.jpg" alt="Blog loodgieter tips">
        <h3>5 Tips om Verstoppingen te Voorkomen</h3>
        <p>Voorkom verstoppingen in huis met deze eenvoudige tips van onze loodgieters.</p>
        <a href="#">Lees meer</a>
      </article>
      <article class="blogpost">
        <img src="images/worker-repairing-water-heater.jpg" alt="Blog cv onderhoud">
        <h3>Waarom Regelmatig CV-onderhoud Belangrijk is</h3>
        <p>Een goed onderhouden cv-ketel voorkomt storingen en bespaart kosten.</p>
        <a href="#">Lees meer</a>
      </article>
      <article class="blogpost">
        <img src="images/service-maintenance-worker-repairing.jpg" alt="Blog lekkage oplossen">
        <h3>Lekkage? Dit Moet U Doen!</h3>
        <p>Ontdek wat u direct kunt doen bij een lekkage en wanneer u ons moet bellen.</p>
        <a href="#">Lees meer</a>
      </article>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="contact section-light">
    <h2>Contact</h2>
    <div class="contact-card">
      <div class="contact-direct-call">
        <span class="call-badge">
          <svg width="28" height="28" viewBox="0 0 28 28" fill="none" aria-hidden="true" style="margin-right:10px;">
            <circle cx="14" cy="14" r="14" fill="#ee9a3a" />
            <path d="M19.5 17.2l-2.1-1a1.2 1.2 0 0 0-1.3.3l-.9 1.1a9.2 9.2 0 0 1-4.3-4.3l1.1-.9a1.2 1.2 0 0 0 .3-1.3l-1-2.1a1.2 1.2 0 0 0-1.3-.7l-2.2.5a1.2 1.2 0 0 0-1 1.2c0 6.1 5 11.1 11.1 11.1a1.2 1.2 0 0 0 1.2-1l.5-2.2a1.2 1.2 0 0 0-.7-1.3z" fill="none" stroke="#fff" stroke-width="2" />
          </svg>
          <span>Direct hulp nodig?</span>
          <a href="tel:0612345678" class="call-number">06-12345678</a>
        </span>
      </div>
      <form method="post" action="contact-verwerk.php" class="contact-form" novalidate>
        <div class="form-group">
          <label for="naam">Naam*</label>
          <input type="text" id="naam" name="naam" required>
        </div>
        <div class="form-group">
          <label for="email">E-mail*</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="telefoon">Telefoon</label>
          <input type="tel" id="telefoon" name="telefoon">
        </div>
        <div class="form-group">
          <label for="bericht">Bericht*</label>
          <textarea id="bericht" name="bericht" rows="5" required></textarea>
        </div>
        <div class="g-recaptcha" data-sitekey="JOUW_SITE_KEY_HIER"></div>
        <button type="submit" class="cta-btn">Verzenden</button>
      </form>
    </div>
  </section>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- Footer -->
  <footer class="main-footer">
    <div class="footer-top">
      <div class="footer-col">
        <h3>Sitemap</h3>
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#over">Over ons</a></li>
          <li><a href="#diensten">Diensten</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>Contact</h3>
        <ul>
          <li><a href="mailto:info@loodgieterparaat.nl">info@loodgieterparaat.nl</a></li>
          <li>
            <a href="tel:0612345678" style="color:#ee9a3a;font-weight:bold;">
              06-12345678
            </a>
          </li>
          <li>Amsterdam, Nederland</li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>Social media</h3>
        <div class="footer-socials">
          <a href="#" target="_blank" aria-label="Facebook" class="footer-icon">
            <!-- Facebook SVG -->
            <svg width="40" height="40" viewBox="0 0 32 32" fill="none">
              <circle cx="16" cy="16" r="16" fill="#1f4b6e" />
              <path d="M20.5 16H18V25H15V16H13V13.5H15V12C15 10.62 15.62 9 18 9H20.5V11.5H19C18.45 11.5 18 11.95 18 12.5V13.5H20.5V16Z" fill="#ee9a3a" />
            </svg>
          </a>
          <a href="#" target="_blank" aria-label="Instagram" class="footer-icon">
            <!-- Instagram SVG -->
            <svg width="40" height="40" viewBox="0 0 32 32" fill="none">
              <circle cx="16" cy="16" r="16" fill="#1f4b6e" />
              <rect x="10" y="10" width="12" height="12" rx="4" stroke="#ee9a3a" stroke-width="2" fill="none" />
              <circle cx="16" cy="16" r="3" stroke="#ee9a3a" stroke-width="2" fill="none" />
              <circle cx="21" cy="11" r="1" fill="#ee9a3a" />
            </svg>
          </a>
          <a href="#" target="_blank" aria-label="LinkedIn" class="footer-icon">
            <!-- LinkedIn SVG -->
            <svg width="40" height="40" viewBox="0 0 32 32" fill="none">
              <circle cx="16" cy="16" r="16" fill="#1f4b6e" />
              <rect x="11" y="14" width="2" height="7" fill="#ee9a3a" />
              <rect x="19" y="17" width="2" height="4" fill="#ee9a3a" />
              <rect x="11" y="11" width="2" height="2" fill="#ee9a3a" />
              <rect x="15" y="17" width="2" height="4" fill="#ee9a3a" />
              <rect x="15" y="14" width="2" height="2" fill="#ee9a3a" />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <hr>
    <div class="footer-bottom">
      <span>&copy; 2025 Loodgieter Paraat</span>
      <span class="footer-divider">-</span>
      <a href="#">Privacy Policy</a>
      <span class="footer-divider">-</span>
      <a href="#">Cookie Policy</a>
      <span class="footer-divider">-</span>
      <a href="#">Algemene Voorwaarden</a>
      <span class="footer-divider">-</span>
      <a href="https://www.linkedin.com/in/tahak030/" target="_blank style=" color: rgb(236, 236, 236); text-decoration: none;">
        Gerealiseerd door Taha Karaman
      </a>
    </div>
  </footer>
  <script src="script.js"></script>
</body>

</html>