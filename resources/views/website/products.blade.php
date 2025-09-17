<x-app-layout-web>
    @push('css')
    <style>
        .search-box input {
            border-radius: 50px;
            padding-left: 2.5rem;
            border: 2px solid var(--border-color);
            background-color: var(--card-bg);
            color: var(--text-medium);
        }

        .filter-panel .card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .form-range::-webkit-slider-thumb {
            background: var(--primary-color);
        }

        .form-range::-moz-range-thumb {
            background: var(--primary-color);
        }

        .page-item.active .page-link {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .page-link {
            color: var(--primary-color);
        }

        .page-link:hover {
            color: var(--primary-dark);
        }
    </style>
    @endpush
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


                </div>

            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-5">
        <div class="container">
            <div class="section-header">
                <h2>Our Collection</h2>
                <p>Discover our carefully curated selection of pre-loved fashion</p>
            </div>

            <!-- Search and Filter Section -->
            <div class="row mb-5">
                <div class="col-md-8">
                    <div class="search-box position-relative">
                        <input type="text" class="form-control form-control-lg ps-5" placeholder="Search products..."
                            id="productSearch">
                        <i
                            class="fas fa-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-end">
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-secondary" id="filterToggle">
                            <i class="fas fa-filter me-2"></i>Filters
                        </button>
                        <div class="btn-group">
                            <button class="btn btn-outline-secondary active" data-view="grid">
                                <i class="fas fa-th"></i>
                            </button>
                            <button class="btn btn-outline-secondary" data-view="list">
                                <i class="fas fa-list"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters Panel -->
            <div class="row mb-4 filter-panel" style="display: none;">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="mb-3">Category</h6>
                                    <div class="form-check">
                                        <input class="form-check-input filter-option" type="checkbox" value="women"
                                            id="catWomen" checked>
                                        <label class="form-check-label" for="catWomen">Women's Fashion</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input filter-option" type="checkbox" value="men"
                                            id="catMen" checked>
                                        <label class="form-check-label" for="catMen">Men's Fashion</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input filter-option" type="checkbox" value="kids"
                                            id="catKids" checked>
                                        <label class="form-check-label" for="catKids">Children's Wear</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input filter-option" type="checkbox"
                                            value="accessories" id="catAccessories" checked>
                                        <label class="form-check-label" for="catAccessories">Accessories</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="mb-3">Price Range</h6>
                                    <div class="range-slider">
                                        <input type="range" class="form-range" min="0" max="500" step="10" id="priceMin"
                                            value="0">
                                        <input type="range" class="form-range" min="0" max="500" step="10" id="priceMax"
                                            value="500">
                                        <div class="d-flex justify-content-between mt-2">
                                            <span id="minPriceLabel">$0</span>
                                            <span id="maxPriceLabel">$500</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="mb-3">Condition</h6>
                                    <div class="form-check">
                                        <input class="form-check-input filter-option" type="checkbox" value="excellent"
                                            id="condExcellent" checked>
                                        <label class="form-check-label" for="condExcellent">Excellent</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input filter-option" type="checkbox" value="good"
                                            id="condGood" checked>
                                        <label class="form-check-label" for="condGood">Good</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input filter-option" type="checkbox" value="fair"
                                            id="condFair" checked>
                                        <label class="form-check-label" for="condFair">Fair</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="mb-3">Sort By</h6>
                                    <select class="form-select" id="sortBy">
                                        <option value="featured">Featured</option>
                                        <option value="price-low">Price: Low to High</option>
                                        <option value="price-high">Price: High to Low</option>
                                        <option value="newest">Newest First</option>
                                        <option value="rating">Highest Rated</option>
                                    </select>
                                    <div class="mt-3">
                                        <button class="btn btn-sm btn-outline-danger w-100" id="resetFilters">Reset
                                            Filters</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Results Info -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <p class="mb-0 text-muted" id="resultsCount">Showing 8 of 32 products</p>
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="perPageDropdown"
                        data-bs-toggle="dropdown">
                        12 per page
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item per-page-option" href="#" data-value="12">12 per page</a></li>
                        <li><a class="dropdown-item per-page-option" href="#" data-value="24">24 per page</a></li>
                        <li><a class="dropdown-item per-page-option" href="#" data-value="48">48 per page</a></li>
                    </ul>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="products-grid" id="productsContainer">
                <!-- Product items will be loaded here -->
            </div>

            <!-- Pagination -->
            <nav aria-label="Product pagination" class="mt-5">
                <ul class="pagination justify-content-center">
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
    </section>


    @push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Sample product data
            const products = [
                {
                    id: 1,
                    name: "Designer Leather Handbag",
                    price: 49.99,
                    originalPrice: 169.99,
                    discount: 70,
                    category: "accessories",
                    condition: "excellent",
                    rating: 4.5,
                    reviewCount: 24,
                    image: "https://images.pexels.com/photos/102129/pexels-photo-102129.jpeg?auto=compress&cs=tinysrgb&w=600",
                    badge: "Sale",
                    isNew: false
                },
                {
                    id: 2,
                    name: "Women's Tailored Blazer",
                    price: 39.99,
                    originalPrice: 129.99,
                    discount: 69,
                    category: "women",
                    condition: "good",
                    rating: 4,
                    reviewCount: 18,
                    image: "https://images.pexels.com/photos/934070/pexels-photo-934070.jpeg?auto=compress&cs=tinysrgb&w=600",
                    badge: "New",
                    isNew: true
                },
                {
                    id: 3,
                    name: "Men's Premium Dress Shirt",
                    price: 24.99,
                    originalPrice: 64.99,
                    discount: 62,
                    category: "men",
                    condition: "excellent",
                    rating: 5,
                    reviewCount: 32,
                    image: "https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg?auto=compress&cs=tinysrgb&w=600",
                    badge: "Popular",
                    isNew: false
                },
                {
                    id: 4,
                    name: "Elegant Evening Dress",
                    price: 59.99,
                    originalPrice: 199.99,
                    discount: 70,
                    category: "women",
                    condition: "excellent",
                    rating: 4.5,
                    reviewCount: 41,
                    image: "https://images.pexels.com/photos/298863/pexels-photo-298863.jpeg?auto=compress&cs=tinysrgb&w=600",
                    badge: "Trending",
                    isNew: false
                },
                {
                    id: 5,
                    name: "Children's Winter Jacket",
                    price: 29.99,
                    originalPrice: 79.99,
                    discount: 63,
                    category: "kids",
                    condition: "good",
                    rating: 4,
                    reviewCount: 15,
                    image: "https://images.pexels.com/photos/934070/pexels-photo-934070.jpeg?auto=compress&cs=tinysrgb&w=600",
                    badge: "Sale",
                    isNew: false
                },
                {
                    id: 6,
                    name: "Men's Leather Shoes",
                    price: 45.99,
                    originalPrice: 120.99,
                    discount: 62,
                    category: "men",
                    condition: "fair",
                    rating: 4.5,
                    reviewCount: 27,
                    image: "https://images.pexels.com/photos/102129/pexels-photo-102129.jpeg?auto=compress&cs=tinysrgb&w=600",
                    badge: "Value",
                    isNew: false
                },
                {
                    id: 7,
                    name: "Designer Sunglasses",
                    price: 35.99,
                    originalPrice: 99.99,
                    discount: 64,
                    category: "accessories",
                    condition: "excellent",
                    rating: 4,
                    reviewCount: 22,
                    image: "https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg?auto=compress&cs=tinysrgb&w=600",
                    badge: "New",
                    isNew: true
                },
                {
                    id: 8,
                    name: "Casual Summer Dress",
                    price: 27.99,
                    originalPrice: 59.99,
                    discount: 53,
                    category: "women",
                    condition: "good",
                    rating: 4.5,
                    reviewCount: 36,
                    image: "https://images.pexels.com/photos/298863/pexels-photo-298863.jpeg?auto=compress&cs=tinysrgb&w=600",
                    badge: "Sale",
                    isNew: false
                }
            ];

            // DOM elements
            const productsContainer = document.getElementById('productsContainer');
            const filterToggle = document.getElementById('filterToggle');
            const filterPanel = document.querySelector('.filter-panel');
            const filterOptions = document.querySelectorAll('.filter-option');
            const priceMin = document.getElementById('priceMin');
            const priceMax = document.getElementById('priceMax');
            const minPriceLabel = document.getElementById('minPriceLabel');
            const maxPriceLabel = document.getElementById('maxPriceLabel');
            const sortBy = document.getElementById('sortBy');
            const resetFilters = document.getElementById('resetFilters');
            const productSearch = document.getElementById('productSearch');
            const resultsCount = document.getElementById('resultsCount');
            const viewButtons = document.querySelectorAll('[data-view]');
            const perPageOptions = document.querySelectorAll('.per-page-option');

            // Initialize
            let currentView = 'grid';
            let filteredProducts = [...products];
            let currentPage = 1;
            let productsPerPage = 12;

            // Render products
            function renderProducts() {
                productsContainer.innerHTML = '';
                productsContainer.className = currentView === 'grid' ? 'products-grid' : 'products-list';

                const startIndex = (currentPage - 1) * productsPerPage;
                const endIndex = startIndex + productsPerPage;
                const productsToRender = filteredProducts.slice(startIndex, endIndex);

                resultsCount.textContent = `Showing ${productsToRender.length} of ${filteredProducts.length} products`;

                if (productsToRender.length === 0) {
                    productsContainer.innerHTML = `
                        <div class="col-12 text-center py-5">
                            <i class="fas fa-search fa-3x mb-3 text-muted"></i>
                            <h4>No products found</h4>
                            <p class="text-muted">Try adjusting your filters or search terms</p>
                            <button class="btn btn-primary-custom mt-2" id="clearSearch">Clear All Filters</button>
                        </div>
                    `;

                    document.getElementById('clearSearch').addEventListener('click', resetAllFilters);
                    return;
                }

                productsToRender.forEach(product => {
                    const productCard = createProductCard(product);
                    productsContainer.appendChild(productCard);
                });
            }

            // Create product card HTML
            function createProductCard(product) {
                const discountPercent = Math.round(((product.originalPrice - product.price) / product.originalPrice) * 100);

                return document.createRange().createContextualFragment(`
                    <div class="product-card ${currentView === 'list' ? 'list-view' : ''}">
                        <div class="product-image">
                            <img src="${product.image}" alt="${product.name}" class="img-fluid">
                            <div class="product-badge">${product.badge}</div>
                            <div class="product-actions-overlay">
                                <button class="action-btn quick-view" data-product-id="${product.id}">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="action-btn add-to-wishlist" data-product-id="${product.id}">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">${product.name}</h3>
                            ${currentView === 'list' ? `<p class="product-description">High-quality pre-loved item in ${product.condition} condition. Perfect addition to your sustainable wardrobe.</p>` : ''}
                            <div class="product-price">
                                <span class="current-price">$${product.price.toFixed(2)}</span>
                                <span class="original-price">$${product.originalPrice.toFixed(2)}</span>
                                ${discountPercent > 0 ? `<span class="discount-percent">-${discountPercent}%</span>` : ''}
                            </div>
                            <div class="product-rating">
                                ${generateStarRating(product.rating)}
                                <span>(${product.reviewCount})</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn-primary-custom add-to-cart" data-product-id="${product.id}">
                                    <i class="fas fa-shopping-cart me-1"></i>Add to Cart
                                </button>
                                <button class="wishlist-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            ${currentView === 'list' ? `<div class="product-meta mt-2">
                                <span class="badge bg-light text-dark">${product.category}</span>
                                <span class="badge bg-light text-dark">${product.condition} condition</span>
                            </div>` : ''}
                        </div>
                    </div>
                `);
            }

            // Generate star rating HTML
            function generateStarRating(rating) {
                let stars = '';
                const fullStars = Math.floor(rating);
                const hasHalfStar = rating % 1 >= 0.5;

                for (let i = 0; i < fullStars; i++) {
                    stars += '<i class="fas fa-star"></i>';
                }

                if (hasHalfStar) {
                    stars += '<i class="fas fa-star-half-alt"></i>';
                }

                const emptyStars = 5 - fullStars - (hasHalfStar ? 1 : 0);
                for (let i = 0; i < emptyStars; i++) {
                    stars += '<i class="far fa-star"></i>';
                }

                return stars;
            }

            // Filter products based on criteria
            function filterProducts() {
                const searchTerm = productSearch.value.toLowerCase();
                const selectedCategories = Array.from(document.querySelectorAll('.filter-option[value="women"], .filter-option[value="men"], .filter-option[value="kids"], .filter-option[value="accessories"]'))
                    .filter(checkbox => checkbox.checked)
                    .map(checkbox => checkbox.value);

                const selectedConditions = Array.from(document.querySelectorAll('.filter-option[value="excellent"], .filter-option[value="good"], .filter-option[value="fair"]'))
                    .filter(checkbox => checkbox.checked)
                    .map(checkbox => checkbox.value);

                const minPrice = parseInt(priceMin.value);
                const maxPrice = parseInt(priceMax.value);

                filteredProducts = products.filter(product => {
                    const matchesSearch = product.name.toLowerCase().includes(searchTerm) ||
                        product.category.toLowerCase().includes(searchTerm);
                    const matchesCategory = selectedCategories.length === 0 || selectedCategories.includes(product.category);
                    const matchesCondition = selectedConditions.length === 0 || selectedConditions.includes(product.condition);
                    const matchesPrice = product.price >= minPrice && product.price <= maxPrice;

                    return matchesSearch && matchesCategory && matchesCondition && matchesPrice;
                });

                // Sort products
                sortProducts();

                // Reset to first page
                currentPage = 1;

                // Render filtered products
                renderProducts();
            }

            // Sort products based on selected option
            function sortProducts() {
                const sortValue = sortBy.value;

                switch (sortValue) {
                    case 'price-low':
                        filteredProducts.sort((a, b) => a.price - b.price);
                        break;
                    case 'price-high':
                        filteredProducts.sort((a, b) => b.price - a.price);
                        break;
                    case 'newest':
                        // Assuming newer products have higher IDs
                        filteredProducts.sort((a, b) => b.id - a.id);
                        break;
                    case 'rating':
                        filteredProducts.sort((a, b) => b.rating - a.rating);
                        break;
                    default:
                        // Default sorting (featured)
                        break;
                }
            }

            // Reset all filters
            function resetAllFilters() {
                // Reset checkboxes
                document.querySelectorAll('.filter-option').forEach(checkbox => {
                    checkbox.checked = true;
                });

                // Reset price range
                priceMin.value = 0;
                priceMax.value = 500;
                minPriceLabel.textContent = '$0';
                maxPriceLabel.textContent = '$500';

                // Reset sort
                sortBy.value = 'featured';

                // Reset search
                productSearch.value = '';

                // Apply filters
                filterProducts();
            }

            // Event listeners
            filterToggle.addEventListener('click', function () {
                filterPanel.style.display = filterPanel.style.display === 'none' ? 'block' : 'none';
            });

            filterOptions.forEach(option => {
                option.addEventListener('change', filterProducts);
            });

            priceMin.addEventListener('input', function () {
                minPriceLabel.textContent = `$${this.value}`;
                filterProducts();
            });

            priceMax.addEventListener('input', function () {
                maxPriceLabel.textContent = `$${this.value}`;
                filterProducts();
            });

            sortBy.addEventListener('change', filterProducts);

            resetFilters.addEventListener('click', resetAllFilters);

            productSearch.addEventListener('input', filterProducts);

            viewButtons.forEach(button => {
                button.addEventListener('click', function () {
                    viewButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    currentView = this.getAttribute('data-view');
                    renderProducts();
                });
            });

            perPageOptions.forEach(option => {
                option.addEventListener('click', function (e) {
                    e.preventDefault();
                    productsPerPage = parseInt(this.getAttribute('data-value'));
                    document.getElementById('perPageDropdown').textContent = `${productsPerPage} per page`;
                    currentPage = 1;
                    renderProducts();
                });
            });

            // Initialize
            renderProducts();
        });
    </script>
    @endpush
</x-app-layout-web>