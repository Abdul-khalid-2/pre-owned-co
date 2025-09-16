<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre Owned & Co - Sustainable Fashion for Everyone</title>
    <meta name="description"
        content="Discover premium pre-loved fashion for women, men, and children. Quality clothing, shoes, bags, and accessories at unbeatable prices.">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        /* Custom styles to match original design */
        :root {
            --primary-color: #10b981;
            --primary-dark: #059669;
            --text-dark: #1a202c;
            --text-medium: #4a5568;
            --text-light: #6b7280;
            --light-bg: #f7fafc;
            --border-color: #e2e8f0;
            --dark-bg: #1a202c;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: var(--text-medium);
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* Navbar */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding: 0.5rem 0;
        }

        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        }

        .nav-logo h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: -5px;
        }

        .nav-logo .tagline {
            font-size: 0.75rem;
            color: var(--primary-color);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .nav-link {
            color: var(--text-medium);
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
            padding: 0.5rem 1rem;
        }

        .nav-link:hover {
            color: var(--primary-color);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 1rem;
            right: 1rem;
            background: var(--primary-color);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: calc(100% - 2rem);
        }

        .nav-link.cta-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
            transition: all 0.3s ease;
            margin-left: 0.5rem;
        }

        .nav-link.cta-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
            color: white;
        }

        .nav-link.cta-btn::after {
            display: none;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            padding: 120px 0 60px;
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 200%;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.1) 0%, transparent 70%);
            animation: float 8s ease-in-out infinite;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.2;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
        }

        .hero-title .highlight {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-description {
            font-size: 1.2rem;
            color: var(--text-medium);
            margin-bottom: 2.5rem;
            line-height: 1.7;
        }

        .btn-custom {
            padding: 14px 28px;
            font-size: 1rem;
            font-weight: 600;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }

        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
            color: white;
        }

        .btn-secondary-custom {
            background: white;
            color: var(--text-medium);
            border: 2px solid var(--border-color);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-secondary-custom:hover {
            background: var(--light-bg);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .btn-large {
            padding: 18px 36px;
            font-size: 1.1rem;
        }

        .hero-stats .stat-number {
            display: block;
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .hero-stats .stat-label {
            font-size: 0.9rem;
            color: var(--text-light);
            font-weight: 500;
        }

        .hero-image {
            position: relative;
            animation: fadeInRight 1s ease;
        }

        .hero-image img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .floating-card {
            position: absolute;
            background: white;
            padding: 1rem 1.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
            color: var(--text-medium);
            animation: float 3s ease-in-out infinite;
        }

        .card-1 {
            top: 10%;
            left: -10%;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
        }

        .card-2 {
            bottom: 15%;
            right: -15%;
            animation-delay: -1.5s;
        }

        .floating-card i {
            font-size: 1.2rem;
        }

        /* Section Headers */
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .section-header p {
            font-size: 1.1rem;
            color: var(--text-light);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Categories Section */
        .categories {
            padding: 80px 0;
            background: white;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .category-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
            height: 100%;
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .category-image {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .category-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .category-card:hover .category-image img {
            transform: scale(1.1);
        }

        .category-overlay {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background: rgba(16, 185, 129, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
        }

        .category-content {
            padding: 1.5rem;
        }

        .category-content h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .category-content p {
            color: var(--text-light);
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .item-count {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        /* Features Section */
        .features {
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
        }

        .feature-card {
            background: white;
            padding: 2.5rem 2rem;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid rgba(16, 185, 129, 0.1);
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
            border-color: rgba(16, 185, 129, 0.3);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 2rem;
        }

        .feature-card h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .feature-card p {
            color: var(--text-light);
            line-height: 1.7;
        }

        /* About Section */
        .about-stat {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: var(--light-bg);
            border-radius: 15px;
        }

        .about-stat i {
            font-size: 2rem;
            color: var(--primary-color);
        }

        .about-stat .stat-number {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .about-stat .stat-label {
            font-size: 0.9rem;
            color: var(--text-light);
        }

        .about-image img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        /* CTA Section */
        .cta {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            text-align: center;
        }

        .cta-content h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .cta-content p {
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            opacity: 0.9;
        }

        .cta .btn-primary-custom {
            background: white;
            color: var(--primary-color);
            font-size: 1.1rem;
            padding: 18px 36px;
        }

        .cta .btn-primary-custom:hover {
            background: var(--light-bg);
            transform: translateY(-3px);
        }

        /* Contact Section */
        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.5rem;
            background: var(--light-bg);
            border-radius: 15px;
        }

        .contact-item i {
            font-size: 1.5rem;
            color: var(--primary-color);
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border-radius: 50%;
        }

        .contact-item h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .contact-item p {
            color: var(--text-light);
        }

        .contact-form input,
        .contact-form textarea {
            padding: 1rem 1.5rem;
            border: 2px solid var(--border-color);
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
            font-family: inherit;
            width: 100%;
            margin-bottom: 1rem;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        .contact-form textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* Footer */
        .footer {
            background: var(--dark-bg);
            color: white;
            padding: 60px 0 20px;
        }

        .footer-section h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: white;
        }

        .footer-section h4 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: white;
        }

        .footer-section p {
            color: #a0aec0;
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .footer-section ul {
            list-style: none;
            padding-left: 0;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section ul li a {
            color: #a0aec0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: var(--primary-color);
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: #2d3748;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary-color);
            transform: translateY(-2px);
        }

        .newsletter input {
            flex: 1;
            padding: 0.75rem 1rem;
            border: none;
            border-radius: 8px;
            background: #2d3748;
            color: white;
        }

        .newsletter input::placeholder {
            color: #a0aec0;
        }

        .footer-bottom {
            border-top: 1px solid #2d3748;
            padding-top: 2rem;
            color: #a0aec0;
        }

        .footer-links {
            display: flex;
            gap: 2rem;
        }

        .footer-links a {
            color: #a0aec0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--primary-color);
        }

        /* Products Section */
        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.05);
        }

        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .product-actions {
            position: absolute;
            top: 15px;
            right: 15px;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }

        .product-card:hover .product-actions {
            opacity: 1;
            transform: translateY(0);
        }

        .quick-view,
        .add-to-wishlist {
            width: 35px;
            height: 35px;
            background: white;
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-medium);
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .quick-view:hover,
        .add-to-wishlist:hover {
            background: var(--primary-color);
            color: white;
            transform: scale(1.1);
        }

        .product-content {
            padding: 1.5rem;
        }

        .product-content h3 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.75rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .product-price {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 0.75rem;
        }

        .current-price {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .original-price {
            font-size: 0.9rem;
            color: #a0aec0;
            text-decoration: line-through;
        }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            margin-bottom: 1rem;
            color: #f59e0b;
            font-size: 0.9rem;
        }

        .product-rating span {
            color: var(--text-light);
            margin-left: 0.5rem;
            font-size: 0.8rem;
        }

        /* Go to Top Button */
        .go-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.2rem;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
            transition: all 0.3s ease;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .go-to-top.visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .go-to-top:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 1199.98px) {
            .hero-title {
                font-size: 3rem;
            }

            .hero-image img {
                height: 450px;
            }
        }

        @media (max-width: 991.98px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-description {
                font-size: 1.1rem;
            }

            .hero-image img {
                height: 400px;
            }

            .about-image img {
                height: 400px;
            }

            .section-header h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 767.98px) {
            .hero {
                padding: 100px 0 40px;
                text-align: center;
            }

            .hero-title {
                font-size: 2.2rem;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-stats {
                justify-content: center;
            }

            .about-content {
                flex-direction: column;
            }

            .categories-grid,
            .features-grid {
                grid-template-columns: 1fr;
            }

            .about-text {
                text-align: center;
            }

            .about-stats {
                justify-content: center;
            }

            .contact-content {
                flex-direction: column;
            }

            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .social-links {
                justify-content: center;
            }

            .newsletter {
                flex-direction: column;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .footer-links {
                justify-content: center;
            }
        }

        @media (max-width: 575.98px) {
            .hero-title {
                font-size: 2rem;
            }

            .btn-custom {
                padding: 12px 24px;
                font-size: 0.95rem;
            }

            .btn-large {
                padding: 16px 32px;
                font-size: 1rem;
            }


            .categories-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .category-card,
            .feature-card {
                margin: 0 10px;
            }

            .go-to-top {
                width: 45px;
                height: 45px;
                bottom: 20px;
                right: 20px;
                font-size: 1.1rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <div class="nav-logo">
                <h2>Pre Owned & Co</h2>
                <span class="tagline">Sustainable Fashion</span>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#categories">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#policies">Policies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link cta-btn" href="#">Shop Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <h1 class="hero-title">
                        Fashion Exchange
                        <span class="highlight">Redefined</span>
                    </h1>
                    <p class="hero-description">
                        Discover unique and up-to-date fashionable items at cost-effective prices.
                        We bring you modern classic fashion from past to present with a second chance to shop.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-5 hero-buttons">
                        <button class="btn btn-primary-custom">Start Shopping</button>
                        <button class="btn btn-secondary-custom">Learn More</button>
                    </div>
                    <div class="d-flex flex-wrap gap-5 hero-stats">
                        <div class="stat">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Quality Checked</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">10/10</span>
                            <span class="stat-label">Condition</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">70%</span>
                            <span class="stat-label">Savings</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0">
                    <div class="hero-image">
                        <img src="https://images.pexels.com/photos/934070/pexels-photo-934070.jpeg?auto=compress&cs=tinysrgb&w=800"
                            alt="Fashion collection" class="img-fluid" />
                        <div class="floating-card card-1">
                            <i class="fas fa-leaf"></i>
                            <span>Eco-Friendly</span>
                        </div>
                        <div class="floating-card card-2">
                            <i class="fas fa-star"></i>
                            <span>Premium Quality</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="categories">
        <div class="container">
            <div class="section-header">
                <h2>Shop by Category</h2>
                <p>Explore our curated collection of pre-loved fashion items</p>
            </div>

            <div class="categories-grid">
                <div class="category-card">
                    <div class="category-image">
                        <img src="https://images.pexels.com/photos/7679720/pexels-photo-7679720.jpeg?auto=compress&cs=tinysrgb&w=400"
                            alt="Women's Fashion">
                        <div class="category-overlay">
                            <i class="fas fa-female"></i>
                        </div>
                    </div>
                    <div class="category-content">
                        <h3>Women's Fashion</h3>
                        <p>Elegant dresses, tops, jackets, and accessories</p>
                        <span class="item-count">2,500+ items</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-image">
                        <img src="https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg?auto=compress&cs=tinysrgb&w=400"
                            alt="Men's Fashion">
                        <div class="category-overlay">
                            <i class="fas fa-male"></i>
                        </div>
                    </div>
                    <div class="category-content">
                        <h3>Men's Fashion</h3>
                        <p>Shirts, jackets, trousers, and formal wear</p>
                        <span class="item-count">1,800+ items</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-image">
                        <img src="https://images.pexels.com/photos/1620760/pexels-photo-1620760.jpeg?auto=compress&cs=tinysrgb&w=400"
                            alt="Children's Fashion">
                        <div class="category-overlay">
                            <i class="fas fa-child"></i>
                        </div>
                    </div>
                    <div class="category-content">
                        <h3>Children's Wear</h3>
                        <p>Adorable outfits for kids of all ages</p>
                        <span class="item-count">1,200+ items</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-image">
                        <img src="https://images.pexels.com/photos/1464625/pexels-photo-1464625.jpeg?auto=compress&cs=tinysrgb&w=400"
                            alt="Footwear">
                        <div class="category-overlay">
                            <i class="fas fa-shoe-prints"></i>
                        </div>
                    </div>
                    <div class="category-content">
                        <h3>Footwear</h3>
                        <p>Sneakers, heels, boots, and casual shoes</p>
                        <span class="item-count">900+ items</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-image">
                        <img src="https://images.pexels.com/photos/1152077/pexels-photo-1152077.jpeg?auto=compress&cs=tinysrgb&w=400"
                            alt="Bags & Accessories">
                        <div class="category-overlay">
                            <i class="fas fa-handbag"></i>
                        </div>
                    </div>
                    <div class="category-content">
                        <h3>Bags & Accessories</h3>
                        <p>Handbags, caps, jewelry, and more</p>
                        <span class="item-count">800+ items</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-image">
                        <img src="https://images.pexels.com/photos/6764042/pexels-photo-6764042.jpeg?auto=compress&cs=tinysrgb&w=400"
                            alt="Nightwear">
                        <div class="category-overlay">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="category-content">
                        <h3>Nightwear</h3>
                        <p>Comfortable pajamas and loungewear</p>
                        <span class="item-count">600+ items</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-5">
        <div class="container">
            <div class="section-header">
                <h2>Featured Products</h2>
                <p>Discover our carefully curated selection of pre-loved fashion</p>
            </div>

            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.pexels.com/photos/102129/pexels-photo-102129.jpeg?auto=compress&cs=tinysrgb&w=600"
                                alt="Designer Handbag" class="img-fluid">
                            <div class="product-badge">-70%</div>
                            <div class="product-actions">
                                <button class="quick-view"><i class="fas fa-eye"></i></button>
                                <button class="add-to-wishlist"><i class="far fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3>Designer Leather Handbag</h3>
                            <div class="product-price">
                                <span class="current-price">$49.99</span>
                                <span class="original-price">$169.99</span>
                            </div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(24)</span>
                            </div>
                            <button class="btn btn-primary-custom w-100 add-to-cart">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.pexels.com/photos/934070/pexels-photo-934070.jpeg?auto=compress&cs=tinysrgb&w=600"
                                alt="Women's Blazer" class="img-fluid">
                            <div class="product-badge">New</div>
                            <div class="product-actions">
                                <button class="quick-view"><i class="fas fa-eye"></i></button>
                                <button class="add-to-wishlist"><i class="far fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3>Women's Tailored Blazer</h3>
                            <div class="product-price">
                                <span class="current-price">$39.99</span>
                                <span class="original-price">$129.99</span>
                            </div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(18)</span>
                            </div>
                            <button class="btn btn-primary-custom w-100 add-to-cart">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg?auto=compress&cs=tinysrgb&w=600"
                                alt="Men's Shirt" class="img-fluid">
                            <div class="product-badge">-60%</div>
                            <div class="product-actions">
                                <button class="quick-view"><i class="fas fa-eye"></i></button>
                                <button class="add-to-wishlist"><i class="far fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3>Men's Premium Dress Shirt</h3>
                            <div class="product-price">
                                <span class="current-price">$24.99</span>
                                <span class="original-price">$64.99</span>
                            </div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(32)</span>
                            </div>
                            <button class="btn btn-primary-custom w-100 add-to-cart">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.pexels.com/photos/298863/pexels-photo-298863.jpeg?auto=compress&cs=tinysrgb&w=600"
                                alt="Women's Dress" class="img-fluid">
                            <div class="product-badge">Popular</div>
                            <div class="product-actions">
                                <button class="quick-view"><i class="fas fa-eye"></i></button>
                                <button class="add-to-wishlist"><i class="far fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3>Elegant Evening Dress</h3>
                            <div class="product-price">
                                <span class="current-price">$59.99</span>
                                <span class="original-price">$199.99</span>
                            </div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(41)</span>
                            </div>
                            <button class="btn btn-primary-custom w-100 add-to-cart">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4 view-all-container">
                <a href="#" class="btn btn-secondary-custom">See All Products</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features py-5">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Pre Owned & Co?</h2>
                <p>Experience the benefits of sustainable fashion</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3>10/10 Condition</h3>
                        <p>Only items in perfect condition are listed after being properly washed, steamed, and pressed.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-tags"></i>
                        </div>
                        <h3>Affordable Luxury</h3>
                        <p>Get premium fashion at up to 70% off retail prices without compromising on quality.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3>Authentic Items</h3>
                        <p>Every item is carefully inspected and authenticated to ensure premium quality.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <h3>Wholesale Options</h3>
                        <p>We provide pre-owned items on wholesale basis in bulk according to customer needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="about-text">
                        <div class="section-header text-lg-start text-center">
                            <h2>About Pre Owned & Co</h2>
                            <p>Pioneering sustainable fashion exchange</p>
                        </div>
                        <p>
                            We are affiliated with pre-owned business for years as a wholesaler. Now for consumer ease
                            and
                            need of the society, we are stepping forward towards e-commerce.
                        </p>
                        <p>
                            Our mission is to make fashion accessible to everyone by offering items at lower prices,
                            making
                            them a more affordable option for consumers while promoting sustainability by reducing
                            waste.
                        </p>
                        <div class="row g-3 about-stats">
                            <div class="col-md-6">
                                <div class="about-stat">
                                    <i class="fas fa-history"></i>
                                    <div>
                                        <span class="stat-number">Years</span>
                                        <span class="stat-label">Of Wholesale Experience</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-stat">
                                    <i class="fas fa-tshirt"></i>
                                    <div>
                                        <span class="stat-number">100%</span>
                                        <span class="stat-label">Quality Checked</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="https://images.pexels.com/photos/5886041/pexels-photo-5886041.jpeg?auto=compress&cs=tinysrgb&w=600"
                            alt="About us" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Policies Section -->
    <section id="policies" class="py-5">
        <div class="container">
            <div class="section-header">
                <h2>Our Policies</h2>
                <p>Transparent and customer-focused</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h3>Payment Policy</h3>
                        <p>Orders are confirmed through online payments only via JazzCash, EasyPaisa or bank transfer.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-first-order"></i>
                        </div>
                        <h3>First Come First Serve</h3>
                        <p>We list high quality unique items, so only customers with advance payment assurance are
                            facilitated.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-camera"></i>
                        </div>
                        <h3>Product Authenticity</h3>
                        <p>Every item is genuinely described with authentic snaps or videos for complete transparency.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h3>Shipping Policy</h3>
                        <p>Courier companies are prohibited from collecting/delivering COD shipments for unregistered
                            businesses.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta py-5">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Experience Quality Pre-Owned Fashion?</h2>
                <p>Join our community of fashion-conscious shoppers who value quality and sustainability</p>
                <button class="btn btn-primary-custom btn-large">Start Shopping Now</button>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="section-header">
                <h2>Get in Touch</h2>
                <p>We'd love to hear from you</p>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="contact-info d-flex flex-column gap-4">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h4>Email</h4>
                                <p>hello@preownedandco.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h4>Phone</h4>
                                <p>+1 (555) 123-4567</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h4>Support Hours</h4>
                                <p>Mon-Fri: 9AM-6PM EST</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form class="contact-form">
                        <input type="text" placeholder="Your Name" required>
                        <input type="email" placeholder="Your Email" required>
                        <textarea placeholder="Your Message" rows="5" required></textarea>
                        <button type="submit" class="btn btn-primary-custom w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="footer-section">
                        <h3>Pre Owned & Co</h3>
                        <p>Sustainable fashion for the conscious consumer. Quality pre-loved items for the whole family.
                        </p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4">
                    <div class="footer-section">
                        <h4>Shop</h4>
                        <ul>
                            <li><a href="#">Women's Fashion</a></li>
                            <li><a href="#">Men's Fashion</a></li>
                            <li><a href="#">Children's Wear</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4">
                    <div class="footer-section">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Size Guide</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="footer-section">
                        <h4>Newsletter</h4>
                        <p>Subscribe for updates and exclusive offers</p>
                        <div class="newsletter d-flex gap-2">
                            <input type="email" placeholder="Enter your email">
                            <button class="btn btn-primary-custom">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between align-items-center py-4">
                <p>&copy; 2024 Pre Owned & Co. All rights reserved.</p>
                <div class="footer-links d-flex gap-4">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Go to Top Button -->
    <button class="go-to-top" id="goToTop">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Navbar background on scroll
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#navbar').addClass('scrolled');
            } else {
                $('#navbar').removeClass('scrolled');
            }
        });

        // Smooth scrolling for navigation links
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            const target = $(this.getAttribute('href'));
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 800);
            }
        });

        // Go to Top Button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('#goToTop').addClass('visible');
            } else {
                $('#goToTop').removeClass('visible');
            }
        });

        $('#goToTop').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 'smooth');
        });

        // Animate elements on scroll
        $(document).ready(function() {
            $('.category-card, .feature-card, .hero-text, .hero-image').each(function() {
                $(this).attr('data-animation', 'fadeInUp 0.8s ease forwards');
            });

            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const animation = $(entry.target).data('animation');
                        if (animation) {
                            $(entry.target).css('animation', animation);
                        }
                    }
                });
            }, observerOptions);

            $('[data-animation]').each(function() {
                observer.observe(this);
            });
        });

        // Contact form submission
        $('.contact-form').on('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We\'ll get back to you soon.');
            this.reset();
        });

        // Newsletter subscription
        $('.newsletter button').on('click', function(e) {
            e.preventDefault();
            const email = $(this).siblings('input').val();
            if (email) {
                alert('Thank you for subscribing to our newsletter!');
                $(this).siblings('input').val('');
            }
        });
    </script>
</body>

</html>