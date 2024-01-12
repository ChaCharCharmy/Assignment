<?php
    include "includes/header.php"
?>

<div class="container-fluid bg-body-tertiary">

    <!-- Carousel -->
    <div id="carouselExampleAutoplaying" class="carouselStyle carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="Assets\Images\64.png" class="d-block w-100" alt="Nintendo 64 Games Sale">
            </div>
            <div class="carousel-item">
            <img src="Assets\Images\Kraken.png" class="d-block w-100" alt="New Stock">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Product cards -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="Assets\Images\FinalFantasyVII_cover.jpg" class="card-img-top" alt="Final Fantasy 7 cover">
                    <div class="card-body card-img">
                        <h5 class="card-title">Final Fantasy 7</h5>
                        <p class="card-text">placeholder</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">placeholder</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="Assets\Images\SuperMario64_cover.jpg" class="card-img-top" alt="Super Mario 64 cover">
                    <div class="card-body card-img">
                        <h5 class="card-title">Super Mario 64</h5>
                        <p class="card-text">placeholder</p>
                    </div>
                <div class="card-footer">
                <small class="text-body-secondary">placeholder</small>
                </div>
            </div>
        </div>
            <div class="col">
                <div class="card h-100">
                    <img src="Assets\Images\Kraken.webp" class="card-img-top" alt="Kraken headset">
                <div class="card-body card-img">
                    <h5 class="card-title">Kraken</h5>
                    <p class="card-text">placeholder</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">placeholder</small>
                </div>
            </div>
        </div>
    </div>

<?php
    include "includes/footer.php"
?>