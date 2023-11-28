<?php
// SNACK 1
$arrayTeam = [
    [
        'teamHome' => 'L.A. Clippers',
        'teamAway' => 'L.A. Lakers',
        'scoreHome' => 76,
        'scoreAway' => 62
    ],
    [
        'teamHome' => 'N.Y Knights',
        'teamAway' => 'Phoenix Suns',
        'scoreHome' => 58,
        'scoreAway' => 82
    ],
    [
        'teamHome' => 'Boston Celtics',
        'teamAway' => 'Toronto Raptors',
        'scoreHome' => 103,
        'scoreAway' => 104
    ]
];

// SNACK 
if (isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["age"])) {
    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];
}
;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- link to Font-Family and CSS Files -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Document Title -->
    <title>Php snacks</title>
</head>

<body>

    <main>
        <!-- SNACK 1 -->
        <h1 class="py-3">SNACK 1: BASKETBALL TEAMS</h1>
        <ul>
            <?php
            foreach ($arrayTeam as $key => $value) {
                echo "<li>{$value['teamHome']} - {$value['teamAway']} | <span class='fw-bold'>{$value['scoreHome']}-{$value['scoreAway']}</span></li>"
                    ?>
            <?php } ?>
        </ul>

        <!-- SNACK 2 -->
        <h1 class="py-3">SNACK 2: LOGIN</h1>
        <?php if (empty($name) && empty($email) && empty($age)) {
            echo "<form action='index.php 'method='GET' class='p-3'>
            <input type='text' name='name' placeholder='Name...'>
            <input type='text' name='email' placeholder='Email...'>
            <input type='number' name='age' placeholder='Age...'>
            <button type='submit'>Invia</button>
        </form>" ?>
        <?php } else { ?>
            <?php
            if (strlen($name) >= 3 && strpos($email, '.') && strpos($email, '@') && is_numeric($age)) {
                echo "<div>Accesso riuscito</div>"
                    ?>
            <?php } else {
                echo "<div>Accesso negato</div>" ?>
            <?php }
        } ?>
    </main>


    <!-- My JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>