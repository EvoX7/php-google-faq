<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Faq Google</title>
</head>
<div class="container-fluid mt-2 d-flex justify-content-between">
    <div class="ms-2"> <img id="logo" src="./img/logo.png" alt="logo"> <span id="terms">Privacy & Terms</span></div>
    <div><button class="btn btn-sm btn-primary" type="submit">Sign In</button></div>
</div>

<body>
    <header>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="#">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Privacy Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Terms of Service</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Technologies</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>


    <?php
    $faq = [

        'How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?' => [
            [
                'answer' => "The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive."
            ],
        ],
        'How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?' => [
            [
                'answer' => "The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive."
            ],
        ],
        'How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?' => [
            [
                'answer' => "The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive."
            ],
        ],
    ];
    ?>

    <main>
        <?php
        foreach ($faq as $key => $answers) { ?>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-8 offset-2 text-left">

                        <h5 class="fw-bold"><?php echo  $key ?></h5>
                        <?php
                        foreach ($answers as $answer) { ?>
                            <p><?php echo  $answer['answer'] ?></p>
                        <?php } ?>
                    <?php } ?>
                    </div>
                </div>

            </div>
    </main>
</body>

</html>