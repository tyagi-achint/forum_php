<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>CrowdCanvass</title>

    <style>

    </style>
</head>

<body>
    <?php include 'pages/header.php'; ?>




    <main>
        <section id="categories">
            <h2>Categories</h2>
            <ul>
                <li><a href="#">Category 1</a></li>
                <li><a href="#">Category 2</a></li>
                <!-- Add more categories here -->
            </ul>
        </section>

        <section id="posts">
            <h2>Recent Posts</h2>
            <ul>
                <li>
                    <h3><a href="#">Post Title 1</a></h3>
                    <p>Posted by <span class="username">User123</span></p>
                </li>
                <li>
                    <h3><a href="#">Post Title 2</a></h3>
                    <p>Posted by <span class="username">User456</span></p>
                </li>
                <!-- Add more posts here -->
            </ul>
        </section>
    </main>
    <?php include 'pages/footer.php'; ?>




</body>

</html>