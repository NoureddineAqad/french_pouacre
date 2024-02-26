<!DOCTYPE html>
<html>
<head>
    <title>My Personal Blog</title>
    <style>
        /* CSS for styling */
        body {
            font-family: arial, verdana, sans-serif;
            background-color: #021636;
            color: white;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        .post {
            border: 1px solid #ccc;
            margin-bottom: 20px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>My Personal Blog</h1>

        <!-- Display Blog Posts -->
        <?php
            // Sample blog posts (you can replace this with posts from a database)
            $blog_posts = array(
                array(
                    "date" => "2024-02-20",
                    "title" => "A Day to Remember",
                    "content" => "Today was a wonderful day filled with joy and laughter. I spent the day with my loved ones, making memories that I will cherish forever."
                ),
                array(
                    "date" => "2024-02-19",
                    "title" => "Premier article",
                    "content" => "Chaque jour nous noterons l'avancée de différents projets ayant notamment trait à l'informatique. Le prochain article synthétisera les projets déjà réalisés voire achevés à ce jour."
                ),
                // Add more posts as needed
            );

            // Display each blog post
            foreach ($blog_posts as $post) {
                echo '<div class="post">';
                echo '<h2>' . $post['title'] . '</h2>';
                echo '<p>Date: ' . $post['date'] . '</p>';
                echo '<p>' . $post['content'] . '</p>';
                echo '</div>';
            }
        ?>
    </div>
</body>
</html>
