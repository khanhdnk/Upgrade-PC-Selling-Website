<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta name="author" content="Le Xuan Nhat, Dang Nam Khanh, Duong Quang Thanh">
    <meta name="keyword" content="enhance">
    <meta name="description" content="Assignment 1">

    <title>Enhancements</title>

    <link href="styles/style.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Ubuntu:wght@300;400&display=swap"
		rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.css">
</head>

<body class="enhance">

    <?php include 'includes/header.inc' ?>

    <main class="eh">

        <h1>Enhancements</h1>

        <p id="ehdes">For the page of assignment 2 enhancements, click <a href="enhancements2.php">here</a>.</p>

            <article class="eh1">
                <h2>Enhancement I: Responsive Navigation bar</h2>
                <ol>

                    <li>
                        <h3>How it goes beyond the basic requirements of the assignment:</h3>
                        <p>The assignment only required a common menu that appear in all of the pages.</p>
                            Here is how we add our enhancements:
                            <ul>
                                <li>Make the navigation bar responsive</li>
                                <li>At a certain width the navigation bar will change to a drop down menu with button, using a <a href="https://tutorialzine.com/2015/08/quick-tip-css-only-dropdowns-with-the-checkbox-hack">CSS checkbox hack</a></li>
                            </ul>
                    </li>

                    <li>
                        <h3>What code is needed to implement the feature:</h3>
                        We use <code>@media</code> and <code>input[type=checkbox]: hidden</code>
                    </li>

                    <li>
                        <h3>Where we applied the extension:</h3>
                        <p>Every web page, Including this one.</p>
                    </li>
                </ol>
            </article>

            <article class="eh2">
                <h2>Enhancement II: UI card hover effect</h2>
                <ol>

                    <li>
                        <h3>How it goes beyond the basic requirements of the assignment:</h3>
                        <p>The assignment only required a table containing data for our products.</p>
                            Here is how we add our enhancements:
                            <ul>
                                <li>Add a hover effect, which blur the product card and show additional informations.</li>
                            </ul>
                    </li>

                    <li>
                        <h3>What code is needed to implement the feature:</h3>
                        <code>transform: scale</code>, <code>transition</code>, <code>opacity</code>, <code>position: top-left/top-right</code>, <code>element: hover</code>, <code>overflow: hidden</code>                     
                    </li>

                    <li>
                        <h3>Sources we use as reference materials:</h3>
                        <ul>
                            <li><a href="https://www.youtube.com/watch?v=3RvQJX1_fKQ">Youtube Video 1</a></li>
                            <li><a href="https://www.youtube.com/watch?v=CCNsNSbWuFk">Youtube Video 2</a></li>
                        </ul>
                    </li>

                    <li>
                        <h3>Where we applied the extension:</h3>
                        <ul>
                            <li><a href="index.html#firstpage-container">Link 1</a></li>
                            <li><a href="product.html#500">Link 2</a></li>
                        </ul>
                    </li>
                </ol>
            </article>

    </main>

	<?php include 'includes/footer.inc' ?>

    <a href="#" class="top"></a>

</body>

</html>