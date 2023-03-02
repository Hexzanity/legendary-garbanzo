<?php
    session_start();

    if (isset($_GET['reset']) && $_GET['reset'] === 'true') {
        session_destroy();
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    }

    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    }

    if ($_SESSION['count'] >= 4) {
        echo "Thank you for visiting the page a lot.";
    }

    if ($_SESSION['count'] == 9) {
        header('Location: congratulations.php');
        exit();
    } else {
        $_SESSION['count']++;
    }
?>

<html>
<head>
<title>Count Visits</title>
</head>

<body>
<h1>Hello</h1>
<p>You have visited this page <?php echo( $_SESSION['count'] ); ?> times</p>
<p><a href="?reset=true">Reset</a></p>
</body>
</html>