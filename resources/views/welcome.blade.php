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
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
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
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

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