<?php include "incl/header.php"; ?>

<style>
    /* 1. Header Styling */
    .gallery-header {
        background-color: #734BDF; 
        padding: 80px 0;
        margin-bottom: 50px;
        text-align: center;
    }
    
    .gallery-header h1 {
        color: #fff;
        font-weight: 700;
        font-size: 48px;
        margin-bottom: 10px;
    }

    /* 2. Grid System - Exactly 3 in a row */
    .gallery-container {
        margin-bottom: 100px;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr); 
        gap: 30px;
    }

    /* 3. Image & Hover Animation */
    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        height: 350px; 
        background-color: #000;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
        opacity: 0.9;
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(115, 75, 223, 0.85); 
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.4s ease;
        transform: scale(0.9);
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
        transform: scale(1);
    }

    .gallery-item:hover img {
        transform: scale(1.1);
        opacity: 1;
    }

    .gallery-overlay i {
        color: #fff;
        font-size: 40px;
        margin-bottom: 15px;
    }

    .gallery-overlay span {
        color: #fff;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 13px;
        border: 2px solid #fff;
        padding: 8px 20px;
        border-radius: 50px;
    }

    /* 4. Responsive Fixes */
    @media (max-width: 991px) {
        .gallery-grid {
            grid-template-columns: repeat(2, 1fr); 
            gap: 20px;
        }
        .gallery-item { height: 280px; }
    }

    @media (max-width: 575px) {
        .gallery-grid {
            grid-template-columns: repeat(1, 1fr); 
        }
        .gallery-item { height: 250px; }
        .gallery-header h1 { font-size: 32px; }
    }
</style>

<div class="gallery-header">
    <div class="container">
        <h1 class="text-anime-style-3 pt-5" data-cursor="-opaque">Our Project Gallery</h1>
    </div>
</div>

<div class="container gallery-container">
    <div class="gallery-grid popup-gallery">
        <?php
        $total_images = 92; 

        for ($i = 1; $i <= $total_images; $i++) {

            $extensions = ['jpeg', 'jpg'];
            $imagePath = "";

            foreach ($extensions as $ext) {
                $path = "images/gallery/gallery-image-" . $i . "." . $ext;
                if (file_exists($path)) {
                    $imagePath = $path;
                    break;
                }
            }

            if (!empty($imagePath)) {
        ?>
            <div class="gallery-item wow fadeInUp" data-wow-delay="<?php echo ($i % 3) * 0.1; ?>s">
                <a href="<?php echo $imagePath; ?>" title="House of Exhibitions Work #<?php echo $i; ?>">
                    <img src="<?php echo $imagePath; ?>" alt="Gallery Image <?php echo $i; ?>">
                    <div class="gallery-overlay">
                        <i class="fa-solid fa-expand"></i>
                        <span>View Work</span>
                    </div>
                </a>
            </div>
        <?php 
            } 
        } 
        ?>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>
    $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: // FIXED THIS LINE
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title');
                }
            },
            zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out'
            }
        });
    });
</script>

<?php include "incl/footer.php"; ?>