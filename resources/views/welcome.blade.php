<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Consultorio Dental Osorio - Dra. Yesennia Osorio. Especialista en Rehabilitación y Estética, Ortodoncia y Endodoncia en Tumbes, Perú">
    <meta name="keywords" content="dentista, consultorio dental, ortodoncia, endodoncia, estética dental, Tumbes, Perú">
    <title>Consultorio Dental Osorio - Dra. Yesennia Osorio</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #00b4d8;
            --secondary-color: #0077b6;
            --accent-color: #90e0ef;
            --text-color: #333;
            --light-bg: #f8f9fa;
            --success-color: #28a745;
            --warning-color: #ffc107;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-color);
            line-height: 1.6;
        }

        .navbar {
            background: white !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: bold;
            color: var(--primary-color) !important;
            font-size: 1.4rem;
        }

        .navbar-brand img {
            height: 50px;
            margin-right: 10px;
        }

        .nav-link {
            color: var(--text-color) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .hero-section {
            position: relative;
            height: 100vh;
            background: linear-gradient(135deg, rgba(0,180,216,0.9), rgba(0,119,182,0.9)), url('/images/slider1.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
        }

        .btn-primary-custom {
            background: white;
            color: var(--primary-color);
            padding: 12px 30px;
            border: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            color: var(--secondary-color);
        }

        .about-section {
            padding: 80px 0;
            background: var(--light-bg);
        }

        .about-img {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            width: 100%;
            height: auto;
        }

        .experience-badge {
            background: var(--primary-color);
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .services-section {
            padding: 80px 0;
        }

        .service-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            height: 100%;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .service-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .contact-section {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }

        .contact-info {
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            padding: 30px;
            backdrop-filter: blur(10px);
        }

        .contact-info i {
            font-size: 1.5rem;
            margin-right: 1rem;
        }

        .contact-item {
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
        }

        .social-links {
            margin-top: 2rem;
        }

        .social-links a {
            color: white;
            font-size: 2rem;
            margin-right: 1.5rem;
            transition: transform 0.3s;
        }

        .social-links a:hover {
            transform: scale(1.2);
        }

        .footer {
            background: #1a1a1a;
            color: white;
            padding: 30px 0;
            text-align: center;
        }

        .appointment-form {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .form-control, .form-select {
            border-radius: 10px;
            border: 1px solid #e0e0e0;
            padding: 12px;
            margin-bottom: 1rem;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(0,180,216,0.25);
        }

        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #25D366;
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.3);
            z-index: 1000;
            transition: transform 0.3s;
            text-decoration: none;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            color: white;
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .hero-content p {
                font-size: 1rem;
            }
            
            .navbar-brand {
                font-size: 1.1rem;
            }
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--secondary-color);
            margin-bottom: 1rem;
            text-align: center;
        }

        .section-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 3rem;
        }

        .promo-banner {
            background: linear-gradient(135deg, var(--warning-color), #ff6b6b);
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: bold;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1001;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.01); }
            100% { transform: scale(1); }
        }

        .stats-section {
            background: var(--primary-color);
            color: white;
            padding: 60px 0;
        }

        .stat-item {
            text-align: center;
            padding: 20px;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            display: block;
        }

        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .testimonial-stars {
            color: #ffc107;
            margin-bottom: 15px;
        }

        .before-after-gallery {
            padding: 80px 0;
            background: var(--light-bg);
        }

        .before-after-item {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .badge-before, .badge-after {
            position: absolute;
            top: 10px;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: bold;
            z-index: 1;
        }

        .badge-before {
            left: 10px;
            background: #dc3545;
            color: white;
        }

        .badge-after {
            right: 10px;
            background: var(--success-color);
            color: white;
        }

        .faq-section {
            padding: 80px 0;
        }

        .emergency-banner {
            background: #dc3545;
            color: white;
            padding: 20px;
            border-radius: 15px;
            margin-top: 30px;
            text-align: center;
        }

        .emergency-banner i {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .trust-badges {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 30px;
        }

        .trust-badge {
            text-align: center;
            padding: 20px;
        }

        .trust-badge i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .modal-content {
            border-radius: 20px;
        }

        .modal-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border-radius: 20px 20px 0 0;
        }

        .guarantee-box {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-left: 5px solid var(--success-color);
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .price-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s;
        }

        .price-card:hover {
            transform: translateY(-10px);
        }

        .price-card.featured {
            border: 3px solid var(--primary-color);
            transform: scale(1.05);
        }

        .schedule-table {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .schedule-table td {
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
        }
    </style>
</head>
<body>
    <!-- Promotional Banner -->
    <div class="promo-banner">
        🎉 ¡PROMOCIÓN ESPECIAL! Primera consulta GRATIS + 20% descuento en blanqueamiento dental | Reserva HOY mismo
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="margin-top: 50px;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/images/logo_dentalosoario.jpg" alt="Logo">
                Consultorio Dental Osorio
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="inicio" class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-content" data-aos="fade-right">
                        <h1>Tu Sonrisa, Nuestra Prioridad</h1>
                        <p>Consultorio Dental Osorio - Cuidado dental profesional con más de 15 años de experiencia</p>
                        <a href="https://wa.me/51950529956?text=Hola,%20quisiera%20agendar%20una%20cita" class="btn-primary-custom">
                            <i class="bi bi-whatsapp"></i> Agendar Cita
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="stat-item">
                        <span class="stat-number" data-target="5000">0</span>
                        <p>Pacientes Satisfechos</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="stat-item">
                        <span class="stat-number" data-target="15">0</span>
                        <p>Años de Experiencia</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="stat-item">
                        <span class="stat-number" data-target="98">0</span>
                        <span>%</span>
                        <p>Satisfacción Garantizada</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="stat-item">
                        <span class="stat-number" data-target="100">0</span>
                        <span>%</span>
                        <p>Tratamientos Exitosos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="nosotros" class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="/images/dental 2.jpg" alt="Dra. Yesennia Osorio" class="about-img">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <span class="experience-badge">15 años de experiencia</span>
                    <h2 class="section-title">Dra. Yesennia Osorio</h2>
                    <p class="lead">Especialista en Rehabilitación y Estética Dental</p>
                    <p>Con más de 15 años de experiencia profesional entre Huancayo y Tumbes, la Dra. Yesennia Osorio se ha consolidado como una de las especialistas más reconocidas en el campo de la odontología integral.</p>
                    <ul class="list-unstyled mt-4">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Especialista en Rehabilitación y Estética</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Ortodoncia</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Endodoncia Rotatoria</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Tratamientos personalizados</li>
                    </ul>
                    
                    <div class="guarantee-box">
                        <h5><i class="bi bi-shield-check"></i> Garantía de Satisfacción</h5>
                        <p class="mb-0">Todos nuestros tratamientos cuentan con garantía. Si no está satisfecho, trabajaremos hasta lograr su sonrisa perfecta.</p>
                    </div>
                    
                    <div class="trust-badges">
                        <div class="trust-badge">
                            <i class="bi bi-award-fill"></i>
                            <p class="mb-0">Certificada<br>Internacionalmente</p>
                        </div>
                        <div class="trust-badge">
                            <i class="bi bi-hospital"></i>
                            <p class="mb-0">Equipos de<br>Última Generación</p>
                        </div>
                        <div class="trust-badge">
                            <i class="bi bi-hand-thumbs-up-fill"></i>
                            <p class="mb-0">100%<br>Recomendada</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicios" class="services-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Nuestros Servicios</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Ofrecemos una amplia gama de servicios dentales con tecnología de vanguardia</p>
            
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <i class="bi bi-stars service-icon"></i>
                        <h4>Rehabilitación y Estética</h4>
                        <p>Transformamos tu sonrisa con tratamientos estéticos de alta calidad y resultados naturales.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <i class="bi bi-diagram-3 service-icon"></i>
                        <h4>Ortodoncia</h4>
                        <p>Corregimos la posición de tus dientes para lograr una sonrisa perfecta y funcional.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <i class="bi bi-gear service-icon"></i>
                        <h4>Endodoncia Rotatoria</h4>
                        <p>Tratamientos de conducto con tecnología avanzada para mayor precisión y comodidad.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card">
                        <i class="bi bi-shield-check service-icon"></i>
                        <h4>Odontología Preventiva</h4>
                        <p>Cuidados preventivos para mantener tu salud bucal en óptimas condiciones.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card">
                        <i class="bi bi-tooth service-icon"></i>
                        <h4>Implantes Dentales</h4>
                        <p>Recupera tu sonrisa completa con implantes de alta calidad y durabilidad.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="service-card">
                        <i class="bi bi-brightness-high service-icon"></i>
                        <h4>Blanqueamiento Dental</h4>
                        <p>Ilumina tu sonrisa con nuestros tratamientos de blanqueamiento profesional.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section py-5" style="background: var(--light-bg);">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Lo que dicen nuestros pacientes</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Más de 5,000 sonrisas transformadas</p>
            
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p>"Excelente atención y profesionalismo. La Dra. Osorio transformó mi sonrisa completamente. ¡100% recomendada!"</p>
                        <h6 class="mt-3"><strong>María González</strong></h6>
                        <small class="text-muted">Paciente de Ortodoncia</small>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p>"Después de años con miedo al dentista, encontré en este consultorio la confianza que necesitaba. Trato excepcional."</p>
                        <h6 class="mt-3"><strong>Carlos Mendoza</strong></h6>
                        <small class="text-muted">Paciente de Endodoncia</small>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p>"Mi blanqueamiento dental fue increíble. Resultados inmediatos y duraderos. La mejor inversión en mi sonrisa."</p>
                        <h6 class="mt-3"><strong>Ana Rodríguez</strong></h6>
                        <small class="text-muted">Paciente de Estética Dental</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Before/After Gallery -->
    <section class="before-after-gallery">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Casos de Éxito</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Transformaciones reales de nuestros pacientes</p>
            
            <div class="row">
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="before-after-item">
                        <span class="badge-before">ANTES</span>
                        <span class="badge-after">DESPUÉS</span>
                        <img src="/images/placeholder-before-after.jpg" alt="Caso 1" class="img-fluid" style="background: #f0f0f0; height: 300px; width: 100%;">
                        <div class="p-3">
                            <h5>Ortodoncia Completa</h5>
                            <p class="text-muted">Tratamiento de 18 meses</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="before-after-item">
                        <span class="badge-before">ANTES</span>
                        <span class="badge-after">DESPUÉS</span>
                        <img src="/images/placeholder-before-after.jpg" alt="Caso 2" class="img-fluid" style="background: #f0f0f0; height: 300px; width: 100%;">
                        <div class="p-3">
                            <h5>Blanqueamiento Dental</h5>
                            <p class="text-muted">Resultados en 1 sesión</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="before-after-item">
                        <span class="badge-before">ANTES</span>
                        <span class="badge-after">DESPUÉS</span>
                        <img src="/images/placeholder-before-after.jpg" alt="Caso 3" class="img-fluid" style="background: #f0f0f0; height: 300px; width: 100%;">
                        <div class="p-3">
                            <h5>Rehabilitación Completa</h5>
                            <p class="text-muted">Sonrisa perfecta en 3 meses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Preguntas Frecuentes</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Resolvemos todas tus dudas</p>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="faqAccordion" data-aos="fade-up" data-aos-delay="200">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    ¿Cuánto cuesta la primera consulta?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <strong>¡La primera consulta es GRATIS!</strong> Incluye evaluación completa, diagnóstico y plan de tratamiento personalizado. Aprovecha esta promoción especial.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    ¿Aceptan diferentes formas de pago?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sí, aceptamos efectivo, transferencias, Yape, Plin y todas las tarjetas de crédito/débito. También ofrecemos planes de financiamiento sin intereses para tratamientos mayores.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    ¿Cuál es el horario de atención?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Atendemos de Lunes a Viernes de 9:00 AM a 8:00 PM, y los Sábados de 9:00 AM a 2:00 PM. Te recomendamos agendar tu cita con anticipación para asegurar disponibilidad.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    ¿Cuánto dura un tratamiento de ortodoncia?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    El tiempo varía según cada caso, generalmente entre 12 a 24 meses. En tu primera consulta gratuita, te daremos un diagnóstico preciso con el tiempo estimado de tu tratamiento.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    ¿Los tratamientos tienen garantía?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sí, todos nuestros tratamientos cuentan con garantía por escrito. La duración depende del tipo de tratamiento y se especifica en tu contrato de servicio.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contacto" class="contact-section">
        <div class="container">
            <h2 class="section-title text-white" data-aos="fade-up">Contáctanos</h2>
            <p class="section-subtitle text-white" data-aos="fade-up" data-aos-delay="100">Agenda tu cita hoy mismo</p>
            
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="contact-info">
                        <h4 class="mb-4">Información de Contacto</h4>
                        <div class="contact-item">
                            <i class="bi bi-geo-alt-fill"></i>
                            <div>
                                <strong>Dirección:</strong><br>
                                Calle Filipinas 209<br>
                                (Esquina con JR 07 de Enero con Saúl Garrido)<br>
                                Tumbes, Perú, 051
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-phone-fill"></i>
                            <div>
                                <strong>Teléfono:</strong><br>
                                950 529 956
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-envelope-fill"></i>
                            <div>
                                <strong>Email:</strong><br>
                                consultoriodentaloaorio@gmail.com
                            </div>
                        </div>
                        
                        <div class="schedule-table mt-4">
                            <h5 class="text-dark mb-3"><i class="bi bi-clock"></i> Horario de Atención</h5>
                            <table class="w-100">
                                <tr>
                                    <td><strong>Lunes - Viernes:</strong></td>
                                    <td>9:00 AM - 8:00 PM</td>
                                </tr>
                                <tr>
                                    <td><strong>Sábados:</strong></td>
                                    <td>9:00 AM - 2:00 PM</td>
                                </tr>
                                <tr>
                                    <td><strong>Domingos:</strong></td>
                                    <td>Cerrado</td>
                                </tr>
                            </table>
                        </div>
                        
                        <div class="emergency-banner" style="background: var(--primary-color);">
                            <i class="bi bi-calendar-check-fill"></i>
                            <h5>¡AGENDA TU CITA!</h5>
                            <p class="mb-2">Primera consulta GRATIS - Reserva ahora</p>
                            <a href="https://wa.me/51950529956?text=Quiero%20agendar%20mi%20primera%20consulta%20GRATIS" class="btn btn-light btn-lg">
                                <i class="bi bi-whatsapp"></i> Agendar Ahora
                            </a>
                        </div>
                        
                        <div class="social-links">
                            <a href="https://www.tiktok.com/@dra.yesseniaosorio" target="_blank">
                                <i class="bi bi-tiktok"></i>
                            </a>
                            <a href="https://wa.me/51950529956" target="_blank">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                            <a href="mailto:consultoriodentaloaorio@gmail.com">
                                <i class="bi bi-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <form class="appointment-form" id="appointmentForm">
                        <h4 class="mb-4 text-dark">Solicitar Cita</h4>
                        <input type="text" class="form-control" placeholder="Nombre completo" name="nombre" required>
                        <input type="tel" class="form-control" placeholder="Teléfono" name="telefono" required>
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                        <select class="form-select" name="servicio" required>
                            <option value="">Seleccione un servicio</option>
                            <option>Consulta General</option>
                            <option>Ortodoncia</option>
                            <option>Endodoncia</option>
                            <option>Estética Dental</option>
                            <option>Implantes</option>
                            <option>Blanqueamiento</option>
                        </select>
                        <textarea class="form-control" rows="3" placeholder="Mensaje adicional (opcional)" name="mensaje"></textarea>
                        <button type="submit" class="btn btn-primary w-100">Enviar Solicitud</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Consultorio Dental Osorio. Todos los derechos reservados.</p>
            <p>Desarrollado con <i class="bi bi-heart-fill text-danger"></i> para tu salud dental</p>
            <p>Powered by: <a href="https://adratechsystems.com" target="_blank" style="color: var(--primary-color); text-decoration: none;">Adratech Systems</a></p>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/51950529956?text=Hola,%20quisiera%20agendar%20una%20cita" class="whatsapp-float" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Exit Intent Modal -->
    <div class="modal fade" id="exitModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">¡ESPERA! Tenemos una oferta especial para ti</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center p-4">
                    <h3 class="text-primary">🎁 50% de Descuento</h3>
                    <p class="lead">En tu primera limpieza dental profesional</p>
                    <p>Esta oferta es válida solo por HOY. ¡No la dejes pasar!</p>
                    <div class="mt-4">
                        <a href="https://wa.me/51950529956?text=Quiero%20aprovechar%20el%2050%25%20de%20descuento" class="btn btn-success btn-lg">
                            <i class="bi bi-whatsapp"></i> Reclamar Oferta
                        </a>
                    </div>
                    <small class="text-muted d-block mt-3">*Válido para nuevos pacientes</small>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Counter Animation
        const counters = document.querySelectorAll('.stat-number');
        const speed = 200;

        const countUp = (counter) => {
            const target = +counter.getAttribute('data-target');
            const increment = target / speed;
            
            const updateCount = () => {
                const count = +counter.innerText;
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        };

        // Intersection Observer for counters
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    if (!counter.classList.contains('counted')) {
                        counter.classList.add('counted');
                        countUp(counter);
                    }
                }
            });
        }, observerOptions);

        counters.forEach(counter => {
            observer.observe(counter);
        });

        // Exit Intent Popup
        let exitIntentShown = false;
        document.addEventListener('mouseout', (e) => {
            if (!exitIntentShown && e.clientY <= 0) {
                exitIntentShown = true;
                const exitModal = new bootstrap.Modal(document.getElementById('exitModal'));
                exitModal.show();
                
                // Set cookie to not show again for 24 hours
                document.cookie = "exitPopupShown=true; max-age=86400; path=/";
            }
        });

        // Check if popup was already shown
        if (document.cookie.includes('exitPopupShown=true')) {
            exitIntentShown = true;
        }

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Form submission
        document.getElementById('appointmentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const nombre = formData.get('nombre');
            const telefono = formData.get('telefono');
            const servicio = formData.get('servicio');
            const mensaje = formData.get('mensaje');
            
            const whatsappMessage = `Hola, soy ${nombre}. Quisiera agendar una cita para ${servicio}. Mi teléfono es ${telefono}. ${mensaje ? 'Mensaje adicional: ' + mensaje : ''}`;
            
            window.open(`https://wa.me/51950529956?text=${encodeURIComponent(whatsappMessage)}`, '_blank');
        });

        // Navbar color change on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(255, 255, 255, 0.98)';
                navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
            } else {
                navbar.style.background = 'white';
                navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            }
        });
    </script>
</body>
</html>