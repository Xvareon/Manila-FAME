<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Manila FAME – Discover Filipino Design</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

  <!-- Bootstrap (keep your local/ CDN choice) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Brand stylesheet (compiled or direct) -->
  <!-- <link href="/css/manila-fame.css" rel="stylesheet"> -->
  @vite('resources/css/manila-fame.css')
</head>
<body>

  <!-- Hero -->
  <section class="hero" style="background-image:url('/images/hero.jpg');">
    <div class="container hero-inner text-center">
        <h1 class="display-4 h-display mb-3">Discover the Soul of Filipino Design</h1>
        <p class="lead mf-subtle mb-4">Source unique, handcrafted pieces at <strong>Manila FAME 2025</strong></p>
        <a href="/register" class="btn btn-mf-primary btn-lg me-2">Register as a Buyer</a>
    </div>
  </section>

  <!-- Why Visit -->
  <section class="py-5 bg-light text-center">
    <div class="container">
      <h2 class="section-title mb-4">Why Visit Manila FAME?</h2>
      <div class="row g-4">
        <div class="col-md-3 why-item">
          <i class="bi bi-people-fill"></i>
          <h5>Source Directly</h5>
          <p>Meet hundreds of top Philippine exporters and artisans.</p>
        </div>
        <div class="col-md-3 why-item">
          <i class="bi bi-lightbulb-fill"></i>
          <h5>Discover New Trends</h5>
          <p>Be the first to see the latest design innovations.</p>
        </div>
        <div class="col-md-3 why-item">
          <i class="bi bi-tree-fill"></i>
          <h5>Sustainable & Ethical</h5>
          <p>Find eco-friendly products made with heart and heritage.</p>
        </div>
        <div class="col-md-3 why-item">
          <i class="bi bi-star-fill"></i>
          <h5>Exclusive Access</h5>
          <p>Join showcases, talks, and special networking events.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Exhibitors -->
  <section class="py-5 text-center">
    <div class="container">
      <h2 class="section-title mb-4">Featured Exhibitors</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <img src="/images/ex1.png" class="img-fluid rounded mb-3" style="width: 100%; height: 220px; object-fit: cover; border-radius: 8px;">
          <h6>Artisan Craft Co.</h6>
          <p class="text-muted">Furniture & Home</p>
        </div>
        <div class="col-md-4">
          <img src="/images/ex2.jpg" class="img-fluid rounded mb-3" style="width: 100%; height: 220px; object-fit: cover; border-radius: 8px;">
          <h6>Filipino Weaves</h6>
          <p class="text-muted">Fashion & Accessories</p>
        </div>
        <div class="col-md-4">
          <img src="/images/ex3.png" class="img-fluid rounded mb-3" style="width: 100%; height: 220px; object-fit: cover; border-radius: 8px;">
          <h6>Casa Verde</h6>
          <p class="text-muted">Gifts & Lifestyle</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Categories -->
  <section class="py-5 bg-light text-center">
    <div class="container">
      <h2 class="section-title mb-4">Event Categories</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <img src="/images/ex4.jpg" class="img-fluid rounded mb-3" style="width: 100%; height: 220px; object-fit: cover; border-radius: 8px;">
          <h5>Furniture & Home</h5>
        </div>
        <div class="col-md-4">
          <img src="/images/ex5.jpg" class="img-fluid rounded mb-3" style="width: 100%; height: 220px; object-fit: cover; border-radius: 8px;">
          <h5>Fashion & Accessories</h5>
        </div>
        <div class="col-md-4">
          <img src="/images/ex6.jpg" class="img-fluid rounded mb-3" style="width: 100%; height: 220px; object-fit: cover; border-radius: 8px;">
          <h5>Gifts & Lifestyle</h5>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="py-5 text-center">
    <div class="container">
      <h2 class="section-title mb-4">What Buyers Say</h2>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <blockquote class="blockquote">
            <p>“Manila FAME offers unparalleled craftsmanship and innovation. A must-visit for global buyers!”</p>
            <p>Anna Rodriguez, <cite title="Company">DesignLink, USA</cite></p>
          </blockquote>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-section text-center">
    <div class="container">
      <h2 class="fw-bold mb-3">Ready to Discover Filipino Design?</h2>
      <p class="lead mb-4">Register today for free and gain access to the premier Philippine design trade event.</p>
      <a href="/register" class="btn btn-mf-primary btn-lg me-2 mb-4">Get Your Buyer Pass</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center">
    <div class="container">
      <p>© 2025 Manila FAME | Center for International Trade Expositions and Missions</p>
      <div class="mt-3">
        <a href="#" class="text-light mx-2"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-light mx-2"><i class="bi bi-instagram"></i></a>
        <a href="#" class="text-light mx-2"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </footer>

</body>
</html>
