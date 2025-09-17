<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sustainable Fashion Collection</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        :root {
            --primary-color: #10b981;
            --primary-dark: #059669;
            --text-dark: #1f2937;
            --text-medium: #4b5563;
            --text-light: #6b7280;
            --border-color: #e5e7eb;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-medium);
            background-color: #f9fafb;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                url('https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-position: center;
            padding: 5rem 0;
            color: white;
            text-align: center;
            margin-bottom: 2rem;
        }

        .hero-content {
            max-width: 700px;
            margin: 0 auto;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .hero-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .hero-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(16, 185, 129, 0.3);
        }

        /* Products Header */
        .products-header {
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
            padding: 2rem 0;
            margin-bottom: 2rem;
        }

        /* Filter Sidebar */
        .filter-sidebar {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .filter-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border-color);
        }

        .clear-all-btn {
            color: #ef4444;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            transition: all 0.2s ease;
        }

        .clear-all-btn:hover {
            background-color: #fef2f2;
        }

        .filter-group {
            margin-bottom: 1.5rem;
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 1rem;
        }

        .filter-group:last-child {
            border-bottom: none;
        }

        .filter-title {
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--text-dark);
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 5px;
            transition: background-color 0.2s ease;
        }

        .filter-title:hover {
            background-color: #f9fafb;
        }

        .filter-title i {
            transition: transform 0.3s ease;
        }

        .filter-title.collapsed i {
            transform: rotate(-90deg);
        }

        .filter-options {
            margin-top: 0.5rem;
        }

        .form-check {
            margin-bottom: 0.5rem;
            padding-left: 1.8rem;
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .price-range {
            margin-top: 0.5rem;
        }

        .price-inputs {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .price-inputs input {
            width: 100%;
            padding: 8px;
            border: 1px solid var(--border-color);
            border-radius: 5px;
        }

        .size-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 0.5rem;
        }

        .size-btn {
            padding: 0.25rem 0.5rem;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            background: white;
            font-size: 0.8rem;
            transition: all 0.2s ease;
        }

        .size-btn:hover,
        .size-btn.active {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        .apply-filters-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border: none;
            padding: 0.75rem;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 1rem;
        }

        .apply-filters-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(16, 185, 129, 0.3);
        }

        /* Products Grid/List View */
        .view-options {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .view-buttons {
            display: flex;
            gap: 0.5rem;
        }

        .view-btn {
            background: white;
            border: 1px solid var(--border-color);
            padding: 0.5rem;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .view-btn.active {
            background: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        .sort-select {
            padding: 0.5rem;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            background: white;
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
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
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
            background: white;
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
            background: white;
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

        /* Pagination */
        .pagination {
            margin-top: 3rem;
            justify-content: center;
        }

        .page-link {
            color: var(--primary-color);
            border: 1px solid var(--border-color);
            padding: 0.5rem 1rem;
        }

        .page-item.active .page-link {
            background: var(--primary-color);
            border-color: var(--primary-color);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .product-card.list-view {
                flex-direction: column;
            }

            .product-card.list-view .product-image {
                width: 100%;
                height: 200px;
            }

            .hero-title {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .filter-sidebar {
                position: static;
                margin-bottom: 2rem;
            }

            .view-options {
                flex-wrap: wrap;
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Sustainable Fashion Collection</h1>
                <p class="hero-subtitle">Discover our curated selection of pre-loved fashion items that are good for you
                    and the planet</p>
                <button class="hero-btn">Shop Now <i class="fas fa-arrow-right ms-2"></i></button>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="products-main mb-5">
        <div class="container">
            <div class="row">
                <!-- Filters Sidebar -->
                <div class="col-lg-3">
                    <div class="filter-sidebar">
                        <div class="filter-header">
                            <h5 class="mb-0">Filters</h5>
                            <a href="#" class="clear-all-btn">Clear all</a>
                        </div>

                        <!-- Category Filter -->
                        <div class="filter-group">
                            <div class="filter-title" data-bs-toggle="collapse" data-bs-target="#categoryFilter"
                                aria-expanded="true">
                                <span>Category</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="filter-options collapse show" id="categoryFilter">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="category1">
                                    <label class="form-check-label" for="category1">Women's Fashion</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="category2">
                                    <label class="form-check-label" for="category2">Men's Fashion</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="category3">
                                    <label class="form-check-label" for="category3">Children's Wear</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="category4">
                                    <label class="form-check-label" for="category4">Footwear</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="category5">
                                    <label class="form-check-label" for="category5">Accessories</label>
                                </div>
                            </div>
                        </div>

                        <!-- Price Filter -->
                        <div class="filter-group">
                            <div class="filter-title" data-bs-toggle="collapse" data-bs-target="#priceFilter"
                                aria-expanded="true">
                                <span>Price Range</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="filter-options collapse show" id="priceFilter">
                                <div class="price-range">
                                    <input type="range" class="form-range" min="0" max="500" step="10" id="priceRange">
                                    <div class="price-inputs">
                                        <input type="number" placeholder="Min" value="0">
                                        <input type="number" placeholder="Max" value="500">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Size Filter -->
                        <div class="filter-group">
                            <div class="filter-title" data-bs-toggle="collapse" data-bs-target="#sizeFilter"
                                aria-expanded="true">
                                <span>Size</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="filter-options collapse show" id="sizeFilter">
                                <div class="size-buttons">
                                    <button class="size-btn">XS</button>
                                    <button class="size-btn">S</button>
                                    <button class="size-btn active">M</button>
                                    <button class="size-btn">L</button>
                                    <button class="size-btn">XL</button>
                                    <button class="size-btn">XXL</button>
                                </div>
                            </div>
                        </div>

                        <!-- Condition Filter -->
                        <div class="filter-group">
                            <div class="filter-title" data-bs-toggle="collapse" data-bs-target="#conditionFilter"
                                aria-expanded="true">
                                <span>Condition</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="filter-options collapse show" id="conditionFilter">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="condition1">
                                    <label class="form-check-label" for="condition1">Like New</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="condition2">
                                    <label class="form-check-label" for="condition2">Excellent</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="condition3">
                                    <label class="form-check-label" for="condition3">Good</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="condition4">
                                    <label class="form-check-label" for="condition4">Fair</label>
                                </div>
                            </div>
                        </div>

                        <!-- Brand Filter -->
                        <div class="filter-group">
                            <div class="filter-title" data-bs-toggle="collapse" data-bs-target="#brandFilter"
                                aria-expanded="true">
                                <span>Brand</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="filter-options collapse show" id="brandFilter">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="brand1">
                                    <label class="form-check-label" for="brand1">Zara</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="brand2">
                                    <label class="form-check-label" for="brand2">H&M</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="brand3">
                                    <label class="form-check-label" for="brand3">Nike</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="brand4">
                                    <label class="form-check-label" for="brand4">Adidas</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="brand5">
                                    <label class="form-check-label" for="brand5">Levi's</label>
                                </div>
                            </div>
                        </div>

                        <button class="apply-filters-btn">Apply Filters</button>
                    </div>
                </div>

                <!-- Products Listing -->
                <div class="col-lg-9">
                    <!-- View Options -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <p class="mb-0">Showing 1-12 of 86 products</p>
                        <div class="view-options">
                            <div class="view-buttons">
                                <button class="view-btn active" id="gridView">
                                    <i class="fas fa-th"></i>
                                </button>
                                <button class="view-btn" id="listView">
                                    <i class="fas fa-list"></i>
                                </button>
                            </div>
                            <select class="sort-select">
                                <option>Sort by: Newest</option>
                                <option>Sort by: Price: Low to High</option>
                                <option>Sort by: Price: High to Low</option>
                                <option>Sort by: Rating</option>
                                <option>Sort by: Popularity</option>
                            </select>
                        </div>
                    </div>

                    <!-- Products Grid -->
                    <div class="products-grid" id="productsContainer">
                        <!-- Product 1 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://images.pexels.com/photos/102129/pexels-photo-102129.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="Designer Handbag">
                                <div class="product-badge">-70%</div>
                                <div class="product-actions-overlay">
                                    <button class="action-btn" title="Quick View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn" title="Add to Cart">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                    <button class="action-btn" title="Add to Wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title">Designer Leather Handbag</h3>
                                <p class="product-description">Genuine leather handbag with multiple compartments and
                                    adjustable strap.</p>
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
                                <div class="product-actions">
                                    <button class="btn-primary-custom">
                                        <i class="fas fa-shopping-cart"></i> Add to Cart
                                    </button>
                                    <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://images.pexels.com/photos/934070/pexels-photo-934070.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="Women's Blazer">
                                <div class="product-badge">New</div>
                                <div class="product-actions-overlay">
                                    <button class="action-btn" title="Quick View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn" title="Add to Cart">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                    <button class="action-btn" title="Add to Wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title">Women's Tailored Blazer</h3>
                                <p class="product-description">Professional blazer with a modern fit, perfect for office
                                    wear.</p>
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
                                <div class="product-actions">
                                    <button class="btn-primary-custom">
                                        <i class="fas fa-shopping-cart"></i> Add to Cart
                                    </button>
                                    <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="Men's Shirt">
                                <div class="product-badge">-60%</div>
                                <div class="product-actions-overlay">
                                    <button class="action-btn" title="Quick View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn" title="Add to Cart">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                    <button class="action-btn" title="Add to Wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title">Men's Premium Dress Shirt</h3>
                                <p class="product-description">Classic fit dress shirt made from high-quality cotton.
                                </p>
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
                                <div class="product-actions">
                                    <button class="btn-primary-custom">
                                        <i class="fas fa-shopping-cart"></i> Add to Cart
                                    </button>
                                    <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://images.pexels.com/photos/298863/pexels-photo-298863.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="Women's Dress">
                                <div class="product-badge">Popular</div>
                                <div class="product-actions-overlay">
                                    <button class="action-btn" title="Quick View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn" title="Add to Cart">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                    <button class="action-btn" title="Add to Wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title">Elegant Evening Dress</h3>
                                <p class="product-description">Floor-length evening gown with delicate embroidery.</p>
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
                                <div class="product-actions">
                                    <button class="btn-primary-custom">
                                        <i class="fas fa-shopping-cart"></i> Add to Cart
                                    </button>
                                    <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 5 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://images.pexels.com/photos/1475416/pexels-photo-1475416.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="Men's Shoes">
                                <div class="product-badge">-50%</div>
                                <div class="product-actions-overlay">
                                    <button class="action-btn" title="Quick View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn" title="Add to Cart">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                    <button class="action-btn" title="Add to Wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title">Men's Leather Shoes</h3>
                                <p class="product-description">Classic leather shoes with comfortable insoles.</p>
                                <div class="product-price">
                                    <span class="current-price">$44.99</span>
                                    <span class="original-price">$89.99</span>
                                </div>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(27)</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn-primary-custom">
                                        <i class="fas fa-shopping-cart"></i> Add to Cart
                                    </button>
                                    <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 6 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://images.pexels.com/photos/1456705/pexels-photo-1456705.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="Winter Jacket">
                                <div class="product-badge">-30%</div>
                                <div class="product-actions-overlay">
                                    <button class="action-btn" title="Quick View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn" title="Add to Cart">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                    <button class="action-btn" title="Add to Wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title">Winter Parka Jacket</h3>
                                <p class="product-description">Warm winter jacket with faux fur hood.</p>
                                <div class="product-price">
                                    <span class="current-price">$69.99</span>
                                    <span class="original-price">$99.99</span>
                                </div>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(56)</span>
                                </div>
                                <div class="product-actions">
                                    <button class="btn-primary-custom">
                                        <i class="fas fa-shopping-cart"></i> Add to Cart
                                    </button>
                                    <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // View Toggle Functionality
        document.getElementById('gridView').addEventListener('click', function () {
            document.getElementById('gridView').classList.add('active');
            document.getElementById('listView').classList.remove('active');
            document.getElementById('productsContainer').classList.remove('products-list');
            document.getElementById('productsContainer').classList.add('products-grid');

            const productCards = document.querySelectorAll('.product-card');
            productCards.forEach(card => {
                card.classList.remove('list-view');
            });
        });

        document.getElementById('listView').addEventListener('click', function () {
            document.getElementById('listView').classList.add('active');
            document.getElementById('gridView').classList.remove('active');
            document.getElementById('productsContainer').classList.remove('products-grid');
            document.getElementById('productsContainer').classList.add('products-list');

            const productCards = document.querySelectorAll('.product-card');
            productCards.forEach(card => {
                card.classList.add('list-view');
            });
        });

        // Wishlist Toggle
        const wishlistButtons = document.querySelectorAll('.wishlist-btn, .action-btn:nth-child(3)');
        wishlistButtons.forEach(button => {
            button.addEventListener('click', function () {
                const icon = this.querySelector('i');
                if (icon.classList.contains('far')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                    this.style.color = '#e11d48';
                    if (this.classList.contains('wishlist-btn')) {
                        this.style.borderColor = '#e11d48';
                    }
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                    this.style.color = '';
                    if (this.classList.contains('wishlist-btn')) {
                        this.style.borderColor = '';
                    }
                }
            });
        });

        // Price Range Slider
        const priceRange = document.getElementById('priceRange');
        const priceInputs = document.querySelectorAll('.price-inputs input');

        priceRange.addEventListener('input', function () {
            priceInputs[1].value = this.value;
        });

        priceInputs.forEach(input => {
            input.addEventListener('input', function () {
                priceRange.value = this.value;
            });
        });

        // Filter toggle animation
        document.querySelectorAll('.filter-title').forEach(title => {
            title.addEventListener('click', function () {
                this.classList.toggle('collapsed');
            });
        });

        // Size buttons functionality
        document.querySelectorAll('.size-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                document.querySelectorAll('.size-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>

</html>