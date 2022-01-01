<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу
    </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print"
          href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print"
          href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print"
          href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print"
          href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print"
          href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    <style>
        .banned {
            opacity: 0.4;
        }
    </style>
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
                    <button class="btn btn-panel waves-effect waves-themed"
                            data-action="panel-collapse" data-toggle="tooltip"
                            data-offset="0,10"
                            data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed"
                            data-action="panel-fullscreen" data-toggle="tooltip"
                            data-offset="0,10"
                            data-original-title="Fullscreen"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <?php
//                    $persons = [
//                        [
//                            "img"          => "img/demo/authors/sunny.png",
//                            "img_alt"      => "Sunny A.",
//                            "name"         => "Sunny A. (UI/UX Expert)",
//                            "position"     => "Lead Author",
//                            "twitter_href" => "https://twitter.com/@myplaneticket",
//                            "twitter"      => "@myplaneticket",
//                            "email_href"   => "https://wrapbootstrap.com/user/myorange",
//                            "email_text"   => "<i class=\"fal fa-envelope\"></i> ",
//                            "email_title"  => "Contact Sunny",
//                            "status"       => "active",
//                        ],
//                        [
//                            "img"          => "img/demo/authors/josh.png",
//                            "img_alt"      => "Jos K.",
//                            "name"         => "Jos K. (ASP.NET Developer)",
//                            "position"     => "Partner &amp; Contributor",
//                            "twitter_href" => "https://twitter.com/@atlantez",
//                            "twitter"      => "@atlantez",
//                            "email_href"   => "https://wrapbootstrap.com/user/Walapa",
//                            "email_text"   => "<i class=\"fal fa-envelope\"></i> ",
//                            "email_title"  => "Contact Jos",
//                            "status"       => "active",
//                        ],
//                        [
//                            "img"          => "img/demo/authors/jovanni.png",
//                            "img_alt"      => "Jovanni Lo",
//                            "name"         => "Jovanni L. (PHP Developer)",
//                            "position"     => "Partner &amp; Contributor",
//                            "twitter_href" => "https://twitter.com/@lodev09",
//                            "twitter"      => "@lodev09",
//                            "email_href"   => "https://wrapbootstrap.com/user/lodev09",
//                            "email_text"   => "<i class=\"fal fa-envelope\"></i> ",
//                            "email_title"  => "Contact Jovanni",
//                            "status"       => "banned",
//                        ],
//                        [
//                            "img"          => "img/demo/authors/roberto.png",
//                            "img_alt"      => "Roberto R.",
//                            "name"         => "Roberto R. (Rails Developer)",
//                            "position"     => "Partner &amp; Contributor",
//                            "twitter_href" => "https://twitter.com/@sildur",
//                            "twitter"      => "@sildur",
//                            "email_href"   => "https://wrapbootstrap.com/user/sildur",
//                            "email_text"   => "<i class=\"fal fa-envelope\"></i> ",
//                            "email_title"  => "Contact Roberto",
//                            "status"       => "banned",
//                        ],
//                    ];
                    ?>
                    <?php
                    $driver = "mysql"; // тип базы данных, с которой мы будем работать
                    $host = "localhost"; // адрес хоста, в нашем случае локального
                    $db_name = "my_project"; // имя базы данных
                    $db_user = "root"; // имя пользователя для базы
                    $db_password = ""; // пароль пользователя для базы
                    $charset = "utf8"; // кодировка
                    
                    // Формируем строку DSN соединения из нескольких переменных
                    $dsn = "$driver:host=$host;dbname=$db_name;charset=$charset";
                    // Создаем объект PDO
                    $pdo = new PDO($dsn, $db_user, $db_password);
                    // или так:
                    // $pdo = new PDO("mysql:host=localhost;dbname=my_project;charset=utf8","root","");
                    // Формируем sql запрос
                    $sql = "SELECT * FROM persons";
                    // Так как в запросе есть переменная, сперва его нужно подготовить, пропустив через метот PDO prepare()
                    $statement = $pdo->prepare($sql);
                    // Получившееся выражение выполняем методом execute()
                    $statement->execute();
                    // Извлекаем данные из базы данных.
                    // FETCH_ASSOC - Извлекает инфу из таблицы в виде ассоциативного массива.
                    // FETCH_OBJ - Извлекает инфу из таблицы в виде объекта
                    $persons = $statement->fetchAll(PDO::FETCH_ASSOC);
                    
                    ?>
                    <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                        <?php
                        foreach ($persons as $person):
                            ?>
                            <div class="<?php
                            if ($person["status"] == "banned") {
                                echo "banned";
                            } else {
                                echo '';
                            } ?> rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?php
                                echo $person["img"]; ?>" alt="<?php
                                echo $person["img_alt"]; ?>"
                                     class="img-thumbnail img-responsive rounded-circle"
                                     style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        <?php
                                        echo $person["name"]; ?>
                                        <small class="m-0 fw-300">
                                            <?php
                                            echo $person["position"]; ?>
                                        </small>
                                    </h5>
                                    <a href="<?php
                                    echo $person["twitter_href"]; ?>"
                                       class="text-info fs-sm"
                                       target="_blank"><?php
                                        echo $person["twitter"]; ?></a>
                                    -
                                    <a href="<?php
                                    echo $person["email_href"]; ?>"
                                       class="text-info fs-sm" target="_blank"
                                       title="<?php
                                       echo $person["email_title"]; ?>"><?php echo $person["email_text"]; ?></a>
                                </div>
                            </div>
                        <?php
                        endforeach; ?>
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
