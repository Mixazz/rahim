<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу
    </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>

<body class="mod-bg-1 mod-nav-link ">
    <main id="js-page-content" role="main" class="page-content">
        <div class="col-md-6">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Задание
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <?php
                            $persons = [
                                [
                                    'name' => 'Sunny A.',
                                    'photo' => 'sunny.png',
                                    'position' => '(UI/UX Expert)',
                                    'status' => 'Lead Author',
                                    'twitter' => '@myplaneticket',
                                    'w_url' => 'myorange',
                                    'w_title' => 'Contact Sunny',
                                    'banned' => false,

                                ],
                                [
                                    'name' => 'Jos K.',
                                    'photo' => 'josh.png',
                                    'position' => '(ASP.NET Developer)',
                                    'status' => 'Partner &amp; Contributor',
                                    'twitter' => '@atlantez',
                                    'w_url' => 'Walapa',
                                    'w_title' => 'Contact Jos',
                                    'banned' => false,
                                ],
                                [
                                    'name' => 'Jovanni L.',
                                    'photo' => 'jovanni.png',
                                    'position' => '(PHP Developer)',
                                    'status' => 'Partner &amp; Contributor',
                                    'twitter' => '@lodev09',
                                    'w_url' => 'lodev09',
                                    'w_title' => 'Contact Jovanni',
                                    'banned' => true,
                                ],
                                [
                                    'name' => 'Roberto R.',
                                    'photo' => 'roberto.png',
                                    'position' => '(Rails Developer)',
                                    'status' => ' Partner &amp; Contributor',
                                    'twitter' => '@sildur',
                                    'w_url' => 'sildur',
                                    'w_title' => 'Contact Roberto',
                                    'banned' => true,
                                ],
                            ];

                            //Подключение к БД
                            // $mysql = new mysqli('localhost', 'mysql', 'mysql', 'task_6');
                            // foreach ($persons as $person) {
                            //     $a = $person['photo']
                            //     $mysql->query("INSERT INTO `persons` (`name`, `photo`, `position`, `status`, `twitter`, `w_url`, `w_title`, `banned`) 
                            // VALUES()");
                            // }
                            // $mysql->close();


                            ?>
                            <?php foreach ($persons as $person) : ?>
                                <div class="<?php if ($person['banned']) {
                                                echo 'banned ';
                                            } ?>rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                    <img src="img/demo/authors/<?php echo $person['photo']; ?>" alt="<?php echo $person['name']; ?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                    <div class="ml-2 mr-3">
                                        <h5 class="m-0">
                                            <?php echo $person['name']; ?> <?php echo $person['position']; ?>
                                            <small class="m-0 fw-300">
                                                <?php echo $person['status']; ?>
                                            </small>
                                        </h5>
                                        <a href="https://twitter.com/<?php echo $person['twitter']; ?>" class="text-info fs-sm" target="_blank"><?php echo $person['twitter']; ?></a> -
                                        <a href="https://wrapbootstrap.com/user/<?php echo $person['w_url']; ?>" class="text-info fs-sm" target="_blank" title="<?php echo $person['w_title']; ?>"><i class="fal fa-envelope"></i></a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="js/vendors.bundle.js"></script>
    <script src="js/app.bundle.js"></script>
    <script>
        // default list filter
        initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
        // custom response message
        initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
    </script>
</body>

</html>