<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Image Scroller</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .image-carousel {
            /* margin: 20px 0; */
            /* border-radius: 8px; */
            overflow: hidden;
            /* box-shadow: 0 10px 30px rgba(0,0,0,0.15); */
        }

        .carousel-item {
            height: 520px;
            background: #f5f5f5;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Left & Right Buttons - Faster, Pale & Better Positioned */
        .carousel-control-prev,
        .carousel-control-next {
            width: 70px;
            height: 70px;
            background: rgba(0, 0, 0, 0.25);   /* Pale / Transparent */
            border-radius: 50%;
            top: 50% !important;
            transform: translateY(-50%);
            padding: 18px;
            margin-left: 20px;     /* Added padding from left */
            margin-right: 20px;    /* Added padding from right */
            opacity: 0.85;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background: rgba(0, 0, 0, 0.5);
            opacity: 1;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 32px;
            height: 32px;
        }

        /* Removed bottom dots */
        .carousel-indicators {
            display: none;
        }
    </style>
</head>
<body>

<div class="container-fluid px-0">
    <div id="imageCarousel" class="carousel slide image-carousel" 
         data-bs-ride="carousel" 
         data-bs-interval="1800">   <!-- Faster sliding (1.8 seconds) -->
        
        <!-- Slides -->
        <div class="carousel-inner">
            <?php
            $active = "active";
            $q = mysqli_query($dbc, "SELECT * FROM slider_img WHERE slider_img_sts = 1");
            while($r = mysqli_fetch_assoc($q)):
            ?>
                <div class="carousel-item <?= $active ?>">
                    <img src="admin/img/slider/<?= $r['slider_img'] ?>" 
                         class="d-block w-100" 
                         alt="Slider Image">
                </div>
            <?php
                $active = '';
            endwhile;
            ?>
        </div>

        <!-- Left & Right Buttons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>