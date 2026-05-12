<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a href="index.php" class="navbar-brand">Bootstrap Shop</a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item">
                    <a href="index.php" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="?page=about" class="nav-link">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a
                        href="#"
                        class="nav-link dropdown-toggle"
                        id="navbarDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Shop
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a href="#" class="dropdown-item">All Products</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">Popular Items</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">New Arrivals</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <form class="d-flex">
                <button class="btn btn-outline-primary" type="submit">
                    <i class="bi-cart-fill me-1"></i> Mon panier
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>
            </form>
        </div>
    </div>
</nav>