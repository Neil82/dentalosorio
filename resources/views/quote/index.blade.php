<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propuesta Digital - Consultorio Dental Osorio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary: #1a8fa3;
            --primary-dark: #0b4c5f;
            --secondary: #2ecc71;
            --text: #333;
            --light-bg: #f8f9fa;
            --white: #ffffff;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            color: var(--text);
        }
        
        .hero {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('/images/pattern.svg') repeat;
            opacity: 0.1;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .logo-hero {
            width: 180px;
            height: 180px;
            margin: 0 auto 30px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            overflow: hidden;
        }
        
        .logo-hero img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: contain;
        }
        
        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
        }
        
        .subtitle {
            font-size: 1.5rem;
            opacity: 0.95;
            margin-bottom: 30px;
        }
        
        .nav-tabs {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .tabs {
            display: flex;
            list-style: none;
            overflow-x: auto;
            padding: 0;
        }
        
        .tab {
            flex: 1;
            text-align: center;
            padding: 20px;
            cursor: pointer;
            transition: all 0.3s;
            border-bottom: 3px solid transparent;
            color: var(--text);
            font-weight: 500;
            white-space: nowrap;
        }
        
        .tab:hover {
            background: var(--light-bg);
        }
        
        .tab.active {
            border-bottom-color: var(--primary);
            color: var(--primary);
            background: var(--light-bg);
        }
        
        .tab i {
            margin-right: 8px;
        }
        
        .content-section {
            display: none;
            padding: 60px 0;
            animation: fadeIn 0.5s;
        }
        
        .content-section.active {
            display: block;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .section-title {
            font-size: 2.5rem;
            color: var(--primary-dark);
            margin-bottom: 40px;
            text-align: center;
            position: relative;
        }
        
        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--primary);
            margin: 20px auto;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .feature-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .feature-title {
            font-size: 1.3rem;
            color: var(--primary-dark);
            margin-bottom: 15px;
        }
        
        .feature-list {
            list-style: none;
        }
        
        .feature-list li {
            padding: 8px 0;
            color: #666;
            position: relative;
            padding-left: 25px;
        }
        
        .feature-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--secondary);
            font-weight: bold;
        }
        
        .pricing-table {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            margin: 40px auto;
            max-width: 900px;
        }
        
        .pricing-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .pricing-header h3 {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        
        .pricing-body {
            padding: 30px;
        }
        
        .pricing-row {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }
        
        .pricing-row:last-child {
            border-bottom: none;
        }
        
        .pricing-label {
            flex: 1;
            color: var(--text);
        }
        
        .pricing-value {
            font-weight: bold;
            color: var(--primary-dark);
        }
        
        .pricing-total {
            background: var(--light-bg);
            padding: 20px;
            display: flex;
            justify-content: space-between;
            font-size: 1.3rem;
            font-weight: bold;
        }
        
        .badge {
            display: inline-block;
            padding: 5px 12px;
            background: var(--secondary);
            color: white;
            border-radius: 20px;
            font-size: 0.85rem;
            margin-left: 10px;
        }
        
        .modules-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }
        
        .module-card {
            background: linear-gradient(135deg, #fff 0%, var(--light-bg) 100%);
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            padding: 25px;
            transition: all 0.3s;
        }
        
        .module-card:hover {
            border-color: var(--primary);
            transform: scale(1.02);
        }
        
        .module-number {
            display: inline-block;
            width: 35px;
            height: 35px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 35px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .module-title {
            font-size: 1.2rem;
            color: var(--primary-dark);
            margin-bottom: 10px;
        }
        
        .module-description {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        .cta-section {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
            margin-top: 60px;
        }
        
        .cta-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .cta-text {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.95;
        }
        
        .cta-button {
            display: inline-block;
            padding: 15px 40px;
            background: white;
            color: var(--primary);
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s;
        }
        
        .cta-button:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        
        .benefits-list {
            list-style: none;
            margin: 30px 0;
        }
        
        .benefits-list li {
            background: white;
            margin: 15px 0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
        }
        
        .benefits-list i {
            font-size: 24px;
            color: var(--primary);
            margin-right: 20px;
        }
        
        .ai-tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }
        
        .ai-tool {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        
        .ai-tool-name {
            font-weight: bold;
            color: var(--primary-dark);
            margin-bottom: 10px;
        }
        
        .ai-tool-price {
            color: var(--primary);
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        
        .ai-tool-desc {
            color: #666;
            font-size: 0.9rem;
        }
        
        .print-button {
            display: inline-block;
            padding: 10px 20px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            margin: 20px 5px 0;
            transition: all 0.3s;
        }
        
        .print-button:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }
        
        .print-button i {
            margin-right: 5px;
        }
        
        @media print {
            .nav-tabs, .cta-section, .print-button { display: none !important; }
            .content-section { display: block !important; page-break-after: always; }
            body { 
                font-size: 12pt; 
                color: black !important;
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
                color-adjust: exact !important;
            }
            .pricing-table { page-break-inside: avoid; }
            
            /* Forzar negro puro en TODOS los elementos */
            *, *::before, *::after {
                color: black !important;
                opacity: 1 !important;
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
            
            /* Títulos extra negros */
            h1, h2, h3, h4, h5, h6, 
            .section-title, 
            .feature-title, 
            .module-title,
            .pricing-header h3,
            .cta-title {
                color: black !important;
                font-weight: 900 !important;
                opacity: 1 !important;
            }
            
            /* Párrafos y textos */
            p, span, li, div, 
            .feature-card p, 
            .module-description,
            .pricing-row,
            .pricing-label,
            .pricing-value,
            .ai-tool-desc,
            .ai-tool-price,
            .ai-tool-name {
                color: black !important;
                opacity: 1 !important;
                font-weight: normal !important;
            }
            
            /* Asegurar que los precios se vean bien */
            .pricing-label {
                color: black !important;
                font-weight: 600 !important;
            }
            
            .pricing-value {
                color: black !important;
                font-weight: 700 !important;
            }
            
            /* Iconos y números */
            .feature-icon {
                background: #f0f0f0 !important;
                color: black !important;
                border: 2px solid black !important;
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
            
            .feature-icon i {
                color: black !important;
                font-size: 24px !important;
            }
            
            .module-number {
                background: black !important;
                color: white !important;
                border: 2px solid black !important;
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
            
            /* Links */
            a {
                color: black !important;
                text-decoration: underline !important;
            }
            
            /* Remover sombras que pueden causar problemas */
            * {
                box-shadow: none !important;
                text-shadow: none !important;
            }
            
            /* Asegurar bordes visibles */
            .pricing-table,
            .feature-card,
            .module-card {
                border: 1px solid black !important;
            }
            
            /* Backgrounds claros para contraste */
            .pricing-body,
            .feature-card,
            .module-card {
                background: white !important;
            }
            
            .pricing-header {
                background: #f0f0f0 !important;
                color: black !important;
            }
        }
        
        @media (max-width: 768px) {
            h1 { font-size: 2rem; }
            .subtitle { font-size: 1.2rem; }
            .section-title { font-size: 1.8rem; }
            .tabs { flex-direction: column; }
            .tab { border-bottom: 1px solid #eee; }
        }
    </style>
</head>
<body>
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="logo-hero">
                    <img src="/images/logo_dentalosoario.jpg" alt="Consultorio Dental Osorio">
                </div>
                <h1>Propuestas de Mejoras Digitales</h1>
                <p class="subtitle">Transformación digital para el Consultorio Dental Osorio</p>
            </div>
        </div>
    </section>

    <nav class="nav-tabs">
        <div class="container">
            <ul class="tabs">
                <li class="tab active" data-tab="web">
                    <i class="fas fa-globe"></i> Página Web
                </li>
                <li class="tab" data-tab="system">
                    <i class="fas fa-laptop-code"></i> Sistema de Gestión
                </li>
                <li class="tab" data-tab="videos">
                    <i class="fas fa-video"></i> Videos con IA
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <!-- Sección Página Web -->
        <section id="web" class="content-section active">
            <div class="container">
                <h2 class="section-title">Página Web Profesional</h2>
                
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-share-alt"></i>
                        </div>
                        <h3 class="feature-title">Centralización de Tráfico</h3>
                        <p>Concentra todo el tráfico de Facebook, Instagram, TikTok y otras redes sociales en un solo lugar.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3 class="feature-title">Posicionamiento SEO</h3>
                        <p>Optimización para buscadores. El posicionamiento en primeros resultados se logra gradualmente (3-6 meses) y depende de múltiples factores: contenido, competencia, actualizaciones, entre otros.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="feature-title">Disponibilidad 24/7</h3>
                        <p>Información de servicios y horarios disponible las 24 horas, los 7 días de la semana.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="feature-title">Independencia Digital</h3>
                        <p>A diferencia de las redes sociales, la web te pertenece. No dependes de cambios en políticas o algoritmos.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="feature-title">Captación de Leads</h3>
                        <p>Obtienes contactos de posibles clientes a través de un formulario optimizado.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="feature-title">Tecnología Laravel</h3>
                        <p>Desarrollado con Laravel y PHP, garantizando seguridad, velocidad y escalabilidad.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-edit"></i>
                        </div>
                        <h3 class="feature-title">Mantenimiento Incluido</h3>
                        <p>Sin panel administrativo. Incluye 1 cambio mensual gratuito (texto, párrafo o imagen). No acumulable. Cambios adicionales bajo cotización.</p>
                    </div>
                </div>

                <div class="pricing-table">
                    <div class="pricing-header">
                        <h3>Inversión - Página Web</h3>
                        <p>www.dentalosorio.com</p>
                    </div>
                    <div class="pricing-body">
                        <div class="pricing-row">
                            <span class="pricing-label">Desarrollo Completo</span>
                            <span class="pricing-value">S/ 300.00</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">Dominio (www.dentalosorio.com) primer año</span>
                            <span class="pricing-value">S/ 50.00</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">Hosting</span>
                            <span class="pricing-value">S/ 0.00*</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">Certificado SSL</span>
                            <span class="pricing-value">GRATIS</span>
                        </div>
                    </div>
                    <div class="pricing-total">
                        <span>Total Primera Inversión</span>
                        <span>S/ 350.00*</span>
                    </div>
                    <div class="pricing-body" style="background: #e8f5e9;">
                        <div class="pricing-row">
                            <span class="pricing-label" style="color: #2e7d32;">
                                <strong>* PROMOCIÓN ESPECIAL:</strong> Hosting GRATIS si contratas también el Sistema de Gestión
                            </span>
                            <span class="pricing-value"></span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label" style="font-size: 0.9rem; color: #666;">
                                • Con Sistema de Gestión: S/ 350 (solo desarrollo + dominio)<br>
                                • Sin Sistema de Gestión: S/ 750 (incluye hosting S/ 400)
                            </span>
                            <span class="pricing-value"></span>
                        </div>
                    </div>
                    <div class="pricing-body">
                        <div class="pricing-row">
                            <span class="pricing-label">Renovación Anual</span>
                            <span class="pricing-value">S/ 80.00 - S/ 480.00**</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label" style="font-size: 0.9rem; color: #666;">
                                ** S/ 80 (solo dominio con Sistema de Gestión) o S/ 480 (dominio + hosting sin Sistema de Gestión)
                            </span>
                            <span class="pricing-value"></span>
                        </div>
                        <div class="pricing-row" style="border-top: 2px solid #eee; margin-top: 15px; padding-top: 15px;">
                            <span class="pricing-label" style="font-size: 0.9rem; color: #d35400;">
                                <strong>📝 Nota:</strong> Futuras modificaciones, mejoras o nuevas funcionalidades serán cotizadas por separado según los requerimientos específicos.
                            </span>
                            <span class="pricing-value"></span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label" style="font-size: 0.9rem; color: #1a8fa3;">
                                <strong>📄 Comprobante:</strong> Se emitirá Recibo por Honorarios por todos los montos indicados.
                            </span>
                            <span class="pricing-value"></span>
                        </div>
                    </div>
                </div>
                
                <div style="text-align: center;">
                    <button class="print-button" onclick="printSection('web')">
                        <i class="fas fa-print"></i> Imprimir Cotización
                    </button>
                </div>
            </div>
        </section>

        <!-- Sección Sistema de Gestión -->
        <section id="system" class="content-section">
            <div class="container">
                <h2 class="section-title">Sistema de Gestión Personalizado</h2>
                <p style="text-align: center; color: #666; font-size: 1.1rem; margin-bottom: 40px;">
                    Sistema desarrollado en Laravel + MySQL con control en la nube
                </p>

                <div class="features-grid" style="margin-bottom: 50px;">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3 class="feature-title">100% en la Nube</h3>
                        <p>No necesitas un servidor local. Todo el sistema funciona en servidores seguros en la nube, eliminando costos de hardware y mantenimiento.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="feature-title">Acceso Multiplataforma</h3>
                        <p>Accedes desde cualquier dispositivo: tablet, celular o desktop. Solo necesitas conexión a internet y un navegador web.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3 class="feature-title">Backups Automáticos</h3>
                        <p>Respaldo automático de la base de datos 3 veces al día. Tus datos siempre estarán seguros y recuperables.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fab fa-google-drive"></i>
                        </div>
                        <h3 class="feature-title">Almacenamiento en Google Drive</h3>
                        <p>Todos los backups se almacenan automáticamente en Google Drive. Puedes usar tu propio espacio (requiere capacidad disponible y configuración) o podemos brindar almacenamiento en mi Drive empresarial.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h3 class="feature-title">Seguridad Garantizada</h3>
                        <p>Conexión cifrada SSL, contraseñas encriptadas, roles y permisos por usuario. Sistema diseñado siguiendo las mejores prácticas para protección de datos sensibles y confidencialidad médica.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h3 class="feature-title">Alta Disponibilidad</h3>
                        <p>Sistema disponible 24/7 con 99.8% de uptime garantizado. Accedes a tus datos cuando los necesites.</p>
                    </div>
                </div>

                <div class="modules-grid">
                    <div class="module-card">
                        <span class="module-number">1</span>
                        <h3 class="module-title">Módulo de Pacientes</h3>
                        <p class="module-description">
                            Ficha única por paciente (DNI), búsqueda avanzada, gestión de datos personales, 
                            fuente de captación, historial completo, exportación CSV.
                        </p>
                    </div>

                    <div class="module-card">
                        <span class="module-number">2</span>
                        <h3 class="module-title">Módulo de Citas</h3>
                        <p class="module-description">
                            Calendario interactivo (día/semana/mes), estados de citas, 
                            recordatorios automáticos, control de asistencia.
                        </p>
                    </div>

                    <div class="module-card">
                        <span class="module-number">3</span>
                        <h3 class="module-title">Módulo de Procedimientos</h3>
                        <p class="module-description">
                            Catálogo de servicios, registro de tratamientos realizados, costos, 
                            fotos antes/después, historial completo por paciente.
                        </p>
                    </div>

                    <div class="module-card">
                        <span class="module-number">4</span>
                        <h3 class="module-title">Historias Clínicas</h3>
                        <p class="module-description">
                            Registro básico de salud: alergias, medicación actual, antecedentes médicos, 
                            notas de evolución por cita, almacenamiento de radiografías y documentos PDF/imágenes.
                        </p>
                    </div>

                    <div class="module-card">
                        <span class="module-number">5</span>
                        <h3 class="module-title">Módulo de Pagos</h3>
                        <p class="module-description">
                            Control de pagos (efectivo/Yape/Plin/tarjeta) sin integración con pasarelas de pago, estados (pagado/pendiente/adelanto), 
                            conciliación con procedimientos, reportes financieros.
                        </p>
                    </div>

                    <div class="module-card">
                        <span class="module-number">6</span>
                        <h3 class="module-title">Dashboard & Reportes</h3>
                        <p class="module-description">
                            KPIs en tiempo real, fuentes de captación, análisis de no-show, 
                            ingresos estimados, exportación Excel/CSV.
                        </p>
                    </div>

                    <div class="module-card">
                        <span class="module-number">7</span>
                        <h3 class="module-title">Usuarios y Permisos</h3>
                        <p class="module-description">
                            Roles diferenciados (Admin/Doctora/Recepción), control de accesos, 
                            bitácora de acciones, seguridad avanzada.
                        </p>
                    </div>

                    <div class="module-card">
                        <span class="module-number">8</span>
                        <h3 class="module-title">Configuración & Integraciones</h3>
                        <p class="module-description">
                            Datos de empresa, horarios, catálogo de servicios, 
                            backups automáticos.
                        </p>
                    </div>
                </div>

                <div class="benefits-list">
                    <h3 style="text-align: center; color: var(--primary-dark); margin-bottom: 30px;">
                        Flujo Operativo Optimizado
                    </h3>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <span>Recepción crea/encuentra paciente por DNI y registra fuente de captación</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <span>Agenda citas con estado y canal de contacto</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <span>Confirma y marca citas como atendidas</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <span>Registra procedimientos con costos y documentación</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <span>Gestiona pagos y conciliación automática</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <span>Visualiza KPIs y reportes en tiempo real</span>
                    </li>
                </div>

                <div class="pricing-table">
                    <div class="pricing-header">
                        <h3>Inversión - Sistema de Gestión</h3>
                        <p>Desarrollo personalizado para sus necesidades</p>
                    </div>
                    <div class="pricing-body">
                        <div class="pricing-row">
                            <span class="pricing-label">Desarrollo del Sistema de Gestión Completo</span>
                            <span class="pricing-value">S/ 7,500.00</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">Hosting Anual (servidor en la nube)</span>
                            <span class="pricing-value">S/ 500.00</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">Dominio (subdominio de dentalosorio.com)</span>
                            <span class="pricing-value">GRATIS</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">Tiempo de entrega</span>
                            <span class="pricing-value">1 mes y 15 días</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">Incluye capacitación</span>
                            <span class="pricing-value">✓</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">Soporte técnico</span>
                            <span class="pricing-value">3 meses incluidos</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">Metodología de desarrollo</span>
                            <span class="pricing-value">Iterativa con feedback</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label" style="font-size: 0.9rem; color: #d35400;">
                                <strong>⚠️ IMPORTANTE:</strong> Se requiere feedback continuo en cada avance presentado para garantizar que el sistema cumpla exactamente con sus necesidades.
                            </span>
                            <span class="pricing-value"></span>
                        </div>
                    </div>
                    <div class="pricing-total">
                        <span>Total Inversión</span>
                        <span>S/ 8,000.00</span>
                    </div>
                    <div class="pricing-body" style="background: #e8f5e9;">
                        <div class="pricing-row">
                            <span class="pricing-label" style="color: #2e7d32;"><strong>Opciones de Pago Flexibles</strong></span>
                            <span class="pricing-value"></span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">Opción 1: Pago al contado</span>
                            <span class="pricing-value">S/ 8,000.00</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">Opción 2: Pago fraccionado (3 meses)</span>
                            <span class="pricing-value">3 x S/ 2,500.00 + S/ 500.00</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label" style="font-size: 0.9rem; color: #666;">
                                • 1ra cuota: Al inicio del desarrollo<br>
                                • 2da cuota: A los 30 días<br>
                                • 3ra cuota + Hosting: A los 60 días<br>
                                <br>
                                <strong style="color: #2e7d32;">✓ Sistema 100% operativo y probado</strong><br>
                                <strong style="color: #2e7d32;">✓ Garantía de funcionamiento completo</strong>
                            </span>
                            <span class="pricing-value" style="font-size: 0.9rem; text-align: right;">
                                S/ 2,500.00<br>
                                S/ 2,500.00<br>
                                S/ 3,000.00<br>
                            </span>
                        </div>
                    </div>
                    <div class="pricing-body">
                        <div class="pricing-row">
                            <span class="pricing-label">Renovación anual (solo hosting)</span>
                            <span class="pricing-value">S/ 500.00</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label" style="font-size: 0.9rem; color: #1a8fa3;">
                                <strong>📄 Comprobante:</strong> Se emitirá Recibo por Honorarios por todos los montos indicados.
                            </span>
                            <span class="pricing-value"></span>
                        </div>
                    </div>
                </div>
                
                <div style="text-align: center;">
                    <button class="print-button" onclick="printSection('system')">
                        <i class="fas fa-print"></i> Imprimir Cotización
                    </button>
                </div>
            </div>
        </section>

        <!-- Sección Videos -->
        <section id="videos" class="content-section">
            <div class="container">
                <h2 class="section-title">Creación de Videos con IA <span class="badge">EXPERIMENTAL</span></h2>
                <p style="text-align: center; color: #666; font-size: 1.1rem; margin-bottom: 40px;">
                    Genera videos profesionales usando inteligencia artificial con la voz y apariencia de las doctoras
                </p>

                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h3 class="feature-title">Avatar Digital Personalizado</h3>
                        <p>Crea un avatar digital de una doctora que hable exactamente lo que indique el texto, 
                        con su misma voz y gesticulación natural.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-microphone"></i>
                        </div>
                        <h3 class="feature-title">Clonación de Voz</h3>
                        <p>Tecnología de IA que replica la voz real de las doctoras para dar vida a los videos 
                        de manera auténtica y profesional.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-closed-captioning"></i>
                        </div>
                        <h3 class="feature-title">Subtítulos Automáticos</h3>
                        <p>Edición profesional con subtítulos dinámicos que mejoran la accesibilidad y 
                        engagement del contenido.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h3 class="feature-title">Publicación Programada</h3>
                        <p>Programe hasta 50 publicaciones mensuales en Instagram, TikTok, Facebook y 
                        YouTube Shorts de forma automática.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-infinity"></i>
                        </div>
                        <h3 class="feature-title">Contenido Ilimitado</h3>
                        <p>Una vez entrenada la IA, genera videos ilimitados sin necesidad de grabar, 
                        solo escribiendo el guión deseado.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="feature-title">Fondos Virtuales</h3>
                        <p>Heygen ofrece fondos prediseñados (oficina, consultorio, fondos neutros). 
                        Para fondos personalizados del consultorio real, se requieren videos adicionales de entrenamiento.</p>
                    </div>
                </div>

                <div class="ai-tools-grid">
                    <div class="ai-tool">
                        <div class="ai-tool-name">
                            <a href="https://www.heygen.com/pricing" target="_blank" style="color: inherit; text-decoration: none;">
                                Heygen Creator <i class="fas fa-external-link-alt" style="font-size: 0.8rem;"></i>
                            </a>
                        </div>
                        <div class="ai-tool-price">$29/mes</div>
                        <div class="ai-tool-desc">Videos ilimitados hasta 30 min c/u<br>
                        <small style="color: #888;">Precio oficial de Heygen</small></div>
                    </div>
                    <div class="ai-tool">
                        <div class="ai-tool-name">
                            <a href="https://elevenlabs.io/pricing" target="_blank" style="color: inherit; text-decoration: none;">
                                ElevenLabs Creator <i class="fas fa-external-link-alt" style="font-size: 0.8rem;"></i>
                            </a>
                        </div>
                        <div class="ai-tool-price">$11-22/mes</div>
                        <div class="ai-tool-desc">~120 minutos de audio mensual<br>
                        <small style="color: #888;">Precio oficial de ElevenLabs</small></div>
                    </div>
                    <div class="ai-tool">
                        <div class="ai-tool-name">
                            <a href="https://www.captions.ai/pricing" target="_blank" style="color: inherit; text-decoration: none;">
                                Captions Pro <i class="fas fa-external-link-alt" style="font-size: 0.8rem;"></i>
                            </a>
                        </div>
                        <div class="ai-tool-price">$9.99/mes</div>
                        <div class="ai-tool-desc">Edición ilimitada con subtítulos<br>
                        <small style="color: #888;">Precio oficial de Captions</small></div>
                    </div>
                    <div class="ai-tool">
                        <div class="ai-tool-name">
                            <a href="https://metricool.com/es/premium/" target="_blank" style="color: inherit; text-decoration: none;">
                                Metricool Free <i class="fas fa-external-link-alt" style="font-size: 0.8rem;"></i>
                            </a>
                        </div>
                        <div class="ai-tool-price">GRATIS</div>
                        <div class="ai-tool-desc">50 publicaciones programadas/mes<br>
                        <small style="color: #888;">Plan gratuito de Metricool</small></div>
                    </div>
                    <div class="ai-tool">
                        <div class="ai-tool-name">
                            <a href="https://metricool.com/es/premium/" target="_blank" style="color: inherit; text-decoration: none;">
                                Metricool Starter <i class="fas fa-external-link-alt" style="font-size: 0.8rem;"></i>
                            </a>
                        </div>
                        <div class="ai-tool-price">$15/mes</div>
                        <div class="ai-tool-desc">Publicaciones ilimitadas, analíticas avanzadas<br>
                        <small style="color: #888;">Precio oficial de Metricool</small></div>
                    </div>
                </div>

                <div class="pricing-table">
                    <div class="pricing-header">
                        <h3>Inversión - Fase de Pruebas y Configuración</h3>
                        <p>Implementación inicial y pruebas de las herramientas de IA</p>
                    </div>
                    <div class="pricing-body">
                        <div class="pricing-row">
                            <span class="pricing-label">Configuración y pruebas de herramientas</span>
                            <span class="pricing-value">S/ 1,000.00</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">Tiempo de implementación</span>
                            <span class="pricing-value">7 días</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">Entregables</span>
                            <span class="pricing-value">Videos de prueba y resultados</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label" style="font-size: 0.9rem; color: #2e7d32;">
                                <strong>✓</strong> Incluye pago de herramientas del primer mes
                            </span>
                            <span class="pricing-value"></span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label" style="font-size: 0.9rem; color: #2e7d32;">
                                <strong>✓</strong> Incluye capacitación completa del personal
                            </span>
                            <span class="pricing-value"></span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label" style="font-size: 0.9rem; color: #2e7d32;">
                                <strong>✓</strong> Configuración de todas las herramientas
                            </span>
                            <span class="pricing-value"></span>
                        </div>
                    </div>
                </div>

                <div class="pricing-table" style="margin-top: 30px;">
                    <div class="pricing-header">
                        <h3>Inversión Mensual - Posterior a la Prueba</h3>
                        <p>Costos mensuales a cargo del Consultorio Dental Osorio</p>
                    </div>
                    <div class="pricing-body">
                        <div class="pricing-row">
                            <span class="pricing-label"><strong>Opción 1: Con Metricool Free</strong></span>
                            <span class="pricing-value"></span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">Primer mes</span>
                            <span class="pricing-value">$49.99</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">A partir del segundo mes</span>
                            <span class="pricing-value">$60.99</span>
                        </div>
                        <div class="pricing-row" style="border-top: 2px solid #eee; margin-top: 15px; padding-top: 15px;">
                            <span class="pricing-label"><strong>Opción 2: Con Metricool Starter</strong></span>
                            <span class="pricing-value"></span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">Primer mes</span>
                            <span class="pricing-value">$64.99</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">A partir del segundo mes</span>
                            <span class="pricing-value">$75.99</span>
                        </div>
                        <div class="pricing-row" style="border-top: 2px solid #eee; margin-top: 15px; padding-top: 15px;">
                            <span class="pricing-label" style="font-size: 0.9rem; color: #d35400;">
                                <strong>📝 Nota:</strong> Los pagos mensuales de las herramientas serán realizados directamente por el Consultorio Dental Osorio después del período de prueba, ya que ustedes usarán las herramientas para generar sus propios videos, ahorrando costos de producción y tiempo.
                            </span>
                            <span class="pricing-value"></span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label" style="font-size: 0.9rem; color: #1a8fa3;">
                                <strong>📄 Comprobante:</strong> Se emitirá Recibo por Honorarios por todos los montos indicados.
                            </span>
                            <span class="pricing-value"></span>
                        </div>
                    </div>
                </div>

                <div style="background: #fff3cd; padding: 20px; border-radius: 10px; margin-top: 40px;">
                    <p style="color: #856404; text-align: center; margin-bottom: 15px;">
                        <strong>Nota:</strong> Esta es una propuesta experimental basada en tecnologías emergentes de IA. 
                        Los resultados pueden variar y requieren un período de entrenamiento inicial.
                    </p>
                </div>

                <div style="background: #e3f2fd; padding: 30px; border-radius: 10px; margin-top: 20px; border-left: 4px solid #1a8fa3;">
                    <h4 style="color: #0b4c5f; margin-bottom: 20px;">📋 Requisitos para el Entrenamiento de IA</h4>
                    
                    <div style="margin-bottom: 15px;">
                        <strong style="color: #1a8fa3;">🎥 Videos de entrenamiento:</strong>
                        <ul style="margin-left: 20px; margin-top: 5px; color: #555;">
                            <li>Videos de cada doctora por separado</li>
                            <li>Sin textos, fotos o elementos gráficos superpuestos</li>
                            <li>Fondo limpio y buena iluminación</li>
                            <li>Duración mínima: 2-3 minutos por persona</li>
                        </ul>
                    </div>

                    <div style="margin-bottom: 15px;">
                        <strong style="color: #1a8fa3;">🎤 Audios de entrenamiento:</strong>
                        <ul style="margin-left: 20px; margin-top: 5px; color: #555;">
                            <li>Audio claro de cada doctora</li>
                            <li>Sin ruidos de fondo</li>
                            <li>Mínimo 10 minutos de audio por persona</li>
                        </ul>
                    </div>

                    <div style="background: #ffebee; padding: 15px; border-radius: 8px; margin-top: 20px;">
                        <strong style="color: #d32f2f;">⚠️ IMPORTANTE - Limitación de Heygen Creator:</strong>
                        <p style="color: #666; margin-top: 5px; font-size: 0.95rem;">
                            El plan Heygen Creator ($29/mes) permite crear videos de <strong>UN SOLO AVATAR</strong> (una doctora). 
                            Para crear videos de ambas doctoras simultáneamente se requiere contratar una cuenta adicional de Heygen Creator 
                            (+$29/mes). Los videos solo pueden mostrar una persona a la vez bajo este costo.
                        </p>
                    </div>
                </div>

                <div style="background: #e8f5e8; padding: 30px; border-radius: 10px; margin-top: 30px; border-left: 4px solid #2e7d32;">
                    <h4 style="color: #2e7d32; margin-bottom: 20px;">🎯 Proceso de Uso y Resultados Esperados</h4>
                    
                    <div style="margin-bottom: 25px;">
                        <strong style="color: #2e7d32;">📝 Paso a Paso del Proceso:</strong>
                        <ol style="margin-left: 20px; margin-top: 10px; color: #555;">
                            <li style="margin-bottom: 8px;">Escribir el guión del video (texto que dirá la doctora)</li>
                            <li style="margin-bottom: 8px;">Generar el video con Heygen (avatar de la doctora hablando)</li>
                            <li style="margin-bottom: 8px;">Procesar la voz con ElevenLabs (clonación de voz)</li>
                            <li style="margin-bottom: 8px;">Agregar subtítulos automáticos con Captions</li>
                            <li style="margin-bottom: 8px;">Programar publicación con Metricool en todas las redes</li>
                        </ol>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <strong style="color: #2e7d32;">✅ Resultados y Ventajas Esperadas:</strong>
                        <ul style="margin-left: 20px; margin-top: 10px; color: #555;">
                            <li style="margin-bottom: 8px;"><strong>Ahorro de tiempo:</strong> No necesitas grabar videos físicamente</li>
                            <li style="margin-bottom: 8px;"><strong>Consistencia:</strong> Siempre se verá y sonará profesional</li>
                            <li style="margin-bottom: 8px;"><strong>Flexibilidad:</strong> Puedes crear contenido desde cualquier lugar</li>
                            <li style="margin-bottom: 8px;"><strong>Escalabilidad:</strong> Generar múltiples videos rápidamente</li>
                            <li style="margin-bottom: 8px;"><strong>Profesionalismo:</strong> Videos de alta calidad sin errores de grabación</li>
                            <li style="margin-bottom: 8px;"><strong>Programación:</strong> Contenido automático en todas las redes sociales</li>
                        </ul>
                    </div>

                    <div style="background: #fff3e0; padding: 15px; border-radius: 8px; margin-top: 20px; border-left: 3px solid #f57c00;">
                        <strong style="color: #e65100;">⚠️ Limitación Importante:</strong>
                        <p style="color: #666; margin-top: 5px; font-size: 0.95rem;">
                            Si deseas agregar <strong>fotos o videos de procedimientos dentales</strong> a tus contenidos, 
                            estos deben ser editados con programas adicionales (Adobe Premiere, Final Cut, etc.) que 
                            <strong>NO están incluidos</strong> en esta propuesta. Las herramientas de IA solo generan 
                            videos de las doctoras hablando.
                        </p>
                    </div>
                </div>
                
                <div style="text-align: center;">
                    <button class="print-button" onclick="printSection('videos')">
                        <i class="fas fa-print"></i> Imprimir Cotización
                    </button>
                </div>
            </div>
        </section>
    </main>

    <section class="cta-section">
        <div class="container">
            <h2 class="cta-title">¿Lista para transformar tu consultorio?</h2>
            <p class="cta-text">
                Da el siguiente paso hacia la digitalización completa, cualquier duda, puedes escribirme
            </p>
            <a href="https://wa.me/51922816455" class="cta-button" target="_blank">
                <i class="fab fa-whatsapp"></i> Conversemos por WhatsApp
            </a>
        </div>
    </section>

    <script>
        // Tab navigation
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active from all tabs
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.content-section').forEach(s => s.classList.remove('active'));
                
                // Add active to clicked tab
                this.classList.add('active');
                const tabName = this.getAttribute('data-tab');
                document.getElementById(tabName).classList.add('active');
            });
        });
        
        // Función para imprimir sección específica
        function printSection(sectionId) {
            // Obtener la fecha actual
            const today = new Date();
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            const fechaActual = today.toLocaleDateString('es-ES', options);
            
            // Guardar el contenido original
            const originalContent = document.body.innerHTML;
            const printContent = document.getElementById(sectionId).innerHTML;
            const heroContent = document.querySelector('.hero').outerHTML;
            
            // Agregar fecha de impresión y datos del preparador
            const dateHeader = '<div style="text-align: right; padding: 20px; font-size: 14px; color: #666;">' +
                'Fecha de cotización: ' + fechaActual + '<br>' +
                'Preparado por: Neil Adler Pretell García<br>' +
                'Correo: neilpretell@gmail.com' +
                '</div>';
            
            // Reemplazar el contenido con la sección a imprimir
            document.body.innerHTML = heroContent + dateHeader + '<main><section class="content-section active">' + printContent + '</section></main>';
            
            // Imprimir
            window.print();
            
            // Restaurar el contenido original
            document.body.innerHTML = originalContent;
            
            // Re-attach event listeners
            location.reload();
        }
    </script>
</body>
</html>