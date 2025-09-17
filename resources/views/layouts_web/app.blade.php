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
            --card-bg: #ffffff;
            --footer-bg: #1a202c;
            --footer-text: #a0aec0;
        }

        [data-theme="dark"] {
            --text-dark: #edf2f7;
            --text-medium: #e2e8f0;
            --text-light: #cbd5e0;
            --light-bg: #2d3748;
            --border-color: #4a5568;
            --dark-bg: #1a202c;
            --card-bg: #2d3748;
            --footer-bg: #1a202c;
            --footer-text: #cbd5e0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: var(--text-medium);
            overflow-x: hidden;
            scroll-behavior: smooth;
            background-color: var(--light-bg);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Theme Toggle Button */
        .theme-toggle {
            position: fixed;
            bottom: 90px;
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
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 999;
        }

        .theme-toggle:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
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

        [data-theme="dark"] .navbar {
            background: rgba(26, 32, 44, 0.95);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        }

        [data-theme="dark"] .navbar.scrolled {
            background: rgba(26, 32, 44, 0.98);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
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
            background: linear-gradient(135deg, var(--light-bg) 0%, var(--border-color) 100%);
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
            background: var(--card-bg);
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
            background: var(--card-bg);
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
            background: var(--card-bg);
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .category-card {
            background: var(--card-bg);
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
            background: linear-gradient(135deg, var(--light-bg) 0%, var(--border-color) 100%);
        }

        .feature-card {
            background: var(--card-bg);
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
            background: var(--card-bg);
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
            background-color: var(--card-bg);
            color: var(--text-medium);
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
            background: var(--footer-bg);
            color: white;
            padding: 60px 0 80px;
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
            color: var(--footer-text);
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
            color: var(--footer-text);
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

        [data-theme="dark"] .social-links a {
            background: #4a5568;
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

        [data-theme="dark"] .newsletter input {
            background: #4a5568;
        }

        .newsletter input::placeholder {
            color: #a0aec0;
        }

        .footer-bottom {
            border-top: 1px solid #2d3748;
            padding-top: 2rem;
            color: var(--footer-text);
        }

        .footer-links {
            display: flex;
            gap: 2rem;
        }

        .footer-links a {
            color: var(--footer-text);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--primary-color);
        }


        /* Product Cards */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .products-list {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .product-card {
            background: var(--card-bg);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            border: 1px solid var(--border-color);
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .product-card.list-view {
            display: flex;
            height: auto;
        }

        .product-image {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        .product-card.list-view .product-image {
            width: 250px;
            height: auto;
            flex-shrink: 0;
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
            top: 10px;
            left: 10px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .product-actions-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .product-card:hover .product-actions-overlay {
            opacity: 1;
        }

        .action-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--card-bg);
            color: var(--text-dark);
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .action-btn:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }

        .product-content {
            padding: 1rem;
        }

        .product-card.list-view .product-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .product-card.list-view .product-title {
            -webkit-line-clamp: 1;
        }

        .product-description {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 1rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .product-price {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .current-price {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .original-price {
            font-size: 0.9rem;
            color: var(--text-light);
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

        .product-actions {
            display: flex;
            gap: 0.5rem;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
            flex: 1;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(16, 185, 129, 0.3);
        }

        .wishlist-btn {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            color: var(--text-medium);
            padding: 0.5rem;
            border-radius: 5px;
            transition: all 0.3s ease;
            width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wishlist-btn:hover {
            color: #e11d48;
            border-color: #e11d48;
        }

        /* Mobile Footer Navigation */
        .mobile-footer-nav {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--card-bg);
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            padding: 10px 0;
        }

        .mobile-footer-nav .nav-items {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .mobile-footer-nav .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: var(--text-medium);
            font-size: 0.75rem;
            transition: color 0.3s ease;
        }

        .mobile-footer-nav .nav-item.active,
        .mobile-footer-nav .nav-item:hover {
            color: var(--primary-color);
        }

        .mobile-footer-nav .nav-item i {
            font-size: 1.2rem;
            margin-bottom: 4px;
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

            /* Show mobile footer nav on small screens */
            .mobile-footer-nav {
                display: block;
            }

            /* Adjust footer padding to account for mobile nav */
            .footer {
                padding-bottom: 80px;
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

            .go-to-top,
            .theme-toggle {
                width: 45px;
                height: 45px;
                bottom: 20px;
                right: 20px;
                font-size: 1.1rem;
                margin-bottom: 60px;

            }

            .theme-toggle {
                bottom: 75px;
            }
        }
    </style>
    @stack('css')
</head>

<body>



    @include('layouts_web.navigation')

    <!-- Page Heading -->
    @isset($header)
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
    @endisset


    {{ $slot }}


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

    <!-- Mobile Footer Navigation -->
    <div class="mobile-footer-nav">
        <div class="nav-items">
            <a href="#home" class="nav-item active">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
            <a href="#products" class="nav-item">
                <i class="fas fa-shopping-bag"></i>
                <span>Products</span>
            </a>
            <a href="#contact" class="nav-item">
                <i class="fas fa-phone"></i>
                <span>Contact</span>
            </a>
            <a href="#" class="nav-item" id="mobile-favorite">
                <i class="far fa-heart"></i>
                <span>Favorites</span>
            </a>
        </div>
    </div>

    <!-- Go to Top Button -->
    <button class="go-to-top" id="goToTop">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Theme Toggle Button -->
    <button class="theme-toggle" id="themeToggle">
        <i class="fas fa-moon"></i>
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

        // Theme toggle functionality
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = themeToggle.querySelector('i');

        // Check for saved theme preference or respect OS preference
        const savedTheme = localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');

        // Apply the saved theme
        if (savedTheme === 'dark') {
            document.documentElement.setAttribute('data-theme', 'dark');
            themeIcon.classList.remove('fa-moon');
            themeIcon.classList.add('fa-sun');
        } else {
            document.documentElement.setAttribute('data-theme', 'light');
            themeIcon.classList.remove('fa-sun');
            themeIcon.classList.add('fa-moon');
        }

        // Theme toggle button click event
        themeToggle.addEventListener('click', function() {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            if (currentTheme === 'light') {
                document.documentElement.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark');
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
            } else {
                document.documentElement.setAttribute('data-theme', 'light');
                localStorage.setItem('theme', 'light');
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
            }
        });

        // Mobile navigation active state
        $('.mobile-footer-nav .nav-item').on('click', function() {
            $('.mobile-footer-nav .nav-item').removeClass('active');
            $(this).addClass('active');
        });

        // Mobile favorite button functionality
        $('#mobile-favorite').on('click', function(e) {
            e.preventDefault();
            alert('Favorites feature coming soon!');
        });
    </script>

    @stack('js')
</body>

</html>