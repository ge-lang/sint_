<?php
$categories = Categorie::find_all();?>


        <div class="shop_sidebar_area">

    <!-- ##### Single Widget ##### -->
    <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Catagories</h6>

        <!--  Catagories  -->
        <div class="catagories-menu">
            <ul>  <?php foreach ($categories as $categorie): ?>
                <li class=""><a href="#"><?php echo $categorie->title; ?></a></li>

                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!-- ##### Single Widget ##### -->
    <div class="widget brands mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Brands</h6>

        <div class="widget-desc">
            <!-- Single Form Check -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="lamborghini">
                <label class="form-check-label" for="lamborghini">Lamborghini</label>
            </div>
            <!-- Single Form Check -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="bentley">
                <label class="form-check-label" for="bentley">Bentley</label>
            </div>
            <!-- Single Form Check -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="bugatti">
                <label class="form-check-label" for="bugatti">Bugatti</label>
            </div>
            <!-- Single Form Check -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="maserati">
                <label class="form-check-label" for="maserati">Maserati</label>
            </div>
            <!-- Single Form Check -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="ferrarri">
                <label class="form-check-label" for="ferrarri">Ferrarri</label>
            </div>

        </div>
    </div>

    <!-- ##### Single Widget ##### -->
    <div class="widget color mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Color</h6>

        <div class="widget-desc">
            <ul class="d-flex">
                <li><a href="#" class="color1"></a></li>
                <li><a href="#" class="color2"></a></li>
                <li><a href="#" class="color3"></a></li>
                <li><a href="#" class="color4"></a></li>
                <li><a href="#" class="color5"></a></li>
                <li><a href="#" class="color6"></a></li>
                <li><a href="#" class="color7"></a></li>
                <li><a href="#" class="color8"></a></li>
            </ul>
        </div>
    </div>

    <!-- ##### Single Widget ##### -->
    <div class="widget price mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Price</h6>

        <div class="widget-desc">
            <div class="slider-range">
                <div data-min="10" data-max="1000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="10" data-value-max="1000" data-label-result="">
                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                </div>
                <div class="range-price">&euro; 1000000 - &euro; 10000000</div>
            </div>
        </div>
    </div>
</div>