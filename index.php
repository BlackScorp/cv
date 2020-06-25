<?php
$onlyCover = isset($_GET['onlyCover']);
$onlyCV = isset($_GET['onlyCV']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Developer - Coverletter</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<?php if (!$onlyCV): ?>
    <section>
        <?php require __DIR__ . '/header.php' ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <?php require_once __DIR__ . '/about.php'; ?>
                    <?php require_once __DIR__ . '/contact.php'; ?>
                </div>

                <div class="col-sm-8">
                    <h1 class="h2"><i class="fas fa-file-alt"></i> Coverletter</h1>
                    <p>Dear Sir/Madam</p>
                    <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                        ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
                        et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                        est Lorem ipsum dolor sit amet.
                    </p>
                    <p>
                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                        illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                        blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum
                        dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                        dolore magna aliquam erat volutpat.
                    </p>
                    <p>
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                        aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit
                        esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                        iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait
                        nulla facilisi.
                    </p>
                    <p>
                        Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
                        placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                        commodo consequat.
                    </p>
                    <p>
                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                        illum dolore eu feugiat nulla facilisis.
                    </p></div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php if (!$onlyCover): ?>
    <section>
        <?php require __DIR__ . '/header.php' ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <?php require_once __DIR__ . '/skills.php' ?>
                    <?php require_once __DIR__ . '/languages.php' ?>
                </div>
                <div class="col-sm-8">
                    <?php require __DIR__ . '/experience.php' ?>
                    <?php require __DIR__ . '/education.php' ?>
                    <?php require __DIR__ . '/references.php' ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
</body>
</html>
