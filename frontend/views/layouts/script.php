<!-- Style switcher -->
<div class="style-switcher" id="style-switcher" onclick="toggleSwitcher()" style="left: -189px;">
    <div>
        <h6>Select your color</h6>
        <ul class="pattern list-unstyled mb-0">
            <li>
                <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
            </li>
            <li>
                <a class="color2" href="javascript: void(0);" onclick="setColor('blue')"></a>
            </li>
            <li>
                <a class="color3" href="javascript: void(0);" onclick="setColor('warning')"></a>
            </li>
        </ul>
    </div>
    <div class="bottom">
        <a href="javascript: void(0);" class="settings rounded-end"><i class="uil uil-setting text-white"
                                                                       style="display: inline; line-height: 46px;"></i></a>
    </div>
</div>
<!-- end switcher-->

<!--Bootstrap Js-->
<script src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Slider Js -->
<script src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/js/tiny-slider.js') ?>"></script>
<script src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/js/swiper.min.js') ?>"></script>

<script src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/js/smooth-scroll.polyfills.min.js') ?>"></script>

<!-- counter -->
<script src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/js/counter.init.js') ?>"></script>

<!-- App Js -->
<script src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/js/app.js') ?>"></script>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>