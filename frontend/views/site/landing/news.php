<?php
$url = "https://itspku.ac.id/feed/";
$feeds = simplexml_load_string(file_get_contents($url));
?>

<!-- start testimonial -->
<section class="section bg-light testimonial" id="berita">
    <!-- start container -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="title">
                    <p class=" text-primary fw-bold mb-0">Berita <i
                                class="mdi mdi-newspaper-variant-outline"></i>
                    </p>
                    <h3>ITS PKU Dalam Berita</h3>
                    <p class="text-muted">Berita terbaru ITS PKU Muhammadiyah Surakarta.</p>
                    <a href="https://itspku.ac.id/-/berita/" target="_blank" class="btn bg-gradiant">Baca Lebih Lengkap
                        <i
                                class="mdi mdi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="testi-slider" id="testi-slider">

                    <?php
                    $i = 0;
                    if (!empty($feeds)) {

                        $site = $feeds->channel->title;
                        $sitelink = $feeds->channel->link;

                        foreach ($feeds->channel->item as $item) {

                            $title = $item->title;
                            $link = $item->link;

                            $description = $item->description;
                            $html = $description;
                            $doc = new DOMDocument();
                            @$doc->loadHTML($html);
                            $tags = $doc->getElementsByTagName('img');

                            $postDate = $item->pubDate;
                            $pubDate = date('D, d M Y', strtotime($postDate));


                            if ($i >= 5) break;
                            ?>

                            <div class="item">
                                <div class="testi-box position-relative overflow-hidden">
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <img style="object-fit: cover; width: 600px; height: 325px;" src="<?= $tags[0]->getAttribute('src') ?>"
                                                 alt="" class="img-fluid">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="p-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar">
                                                            <img style="width: 60px; height: 60px;" src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/baby-phone.png') ?>"
                                                                 alt=""
                                                                 class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p class="f-14 mb-0 text-dark fw-bold"><span
                                                                    class="text-muted fw-normal">Oleh </span>
                                                            Admin ITS PKU
                                                        </p>
                                                        <div class="date">
                                                            <p class="text-muted mb-0 f-14"><?= $pubDate ?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-3">
                                                    <h5 class="fw-bold"><a style="color: inherit; text-decoration: none;" target="_blank" href="<?= $link ?>"><?= $title ?></a></h5>
                                                    <a href="<?= $link ?>" target="_blank" class="btn btn-sm bg-gradiant mt-2">Selengkapnya
                                                        <i class="mdi mdi-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="back-image position-absolute end-0 bottom-0">
                                        <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/testi/rating-image.png') ?>"
                                             alt="" class="img-fluid">
                                    </div>

                                </div>
                            </div>
                            <!-- slider item -->

                            <?php
                            $i++;
                        }
                    } else {
                        echo "<h2>No item found</h2>";
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>
<!-- end testimonial -->