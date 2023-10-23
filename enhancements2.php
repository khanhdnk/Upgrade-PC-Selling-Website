<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Le Xuan Nhat, Dang Nam Khanh, Duong Quang Thanh">
    <meta name="keyword" content="enhance2">
    <meta name="description" content="Assignment 2">

    <title>Enhancements 2</title>

    <link href="styles/style.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.css">
</head>

<body class="enhance">

    <?php include 'includes/header.inc' ?>

    <main class="eh">

        <h1>Enhancements 2</h1>

        <p id="ehdes">For the page of the previous enhancements of asssignment 1, click <a href="enhancements.php">here</a>.</p>

        <article class="eh1">
            <h2>Enhancement III: Log in page for Manager.php</h2>
            <ol>

                <li>
                    <h3>How it goes beyond the basic requirements of the assignment:</h3>
                    <p>The assignment only required a manager page to control orders</p>
                    Here is how we add our enhancements:
                    <ul>
                        <li>We make another login page, then if login success, it will redirect to <a href="manager.php">manager.php</a></li>
                        <li>We use <a href="authentication.php">authentication.php</a> to verify the username and the password whether they match to ones in the database or not.</li>
                        <li>We add a logout button that when clicked, run logout.php to destroy and unset the session</li>
                    </ul>
                </li>

                <li>
                    <h3>What code is needed to implement the feature:</h3>
                    <img src="images/enhance3.png" alt="codeenhance3">
                    <img src="images/enhance3_2.png" alt="codeenhance3_2">
                    <img src="images/code.png" alt="code">
                </li>

                <li>
                    <h3>Where we applied the extension:</h3>
                    <p>We apply it on <a href="login.php">login.php</a> and <a href="manager.php">manager.php</a></p>
                </li>
            </ol>
        </article>

        <article class="eh2">
            <h2>Enhancement IV: Table sorting for Manager.php</h2>
            <ol>

                <li>
                    <h3>How it goes beyond the basic requirements of the assignment:</h3>
                    <p>The assignment only required a table containing data for our products.</p>
                    Here is how we add our enhancements:
                    <ul>
                        <li>Add more input at the form of manager</li>
                        <li>When submit, the page will get the values from itself and reload the page again.</li>
                    </ul>
                </li>

                <li>
                    <h3>What code is needed to implement the feature:</h3>
                    <img src="images/enhance4.png" alt="codeenhance4">
                    <img src="images/enhance5.png" alt="codeenhance5">
                </li>

                <li>
                    <h3>Where we applied the extension:</h3>
                    <p><a href="manager.php">Manager.php</a> &#40;requires login first&#41;</p>
                </li>
            </ol>
        </article>

    </main>

    <?php include 'includes/footer.inc' ?>

    <a href="#" class="top"></a>

</body>

</html>