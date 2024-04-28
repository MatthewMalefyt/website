<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post Form</title>
</head>
<body>

<h2>Create a New Post</h2>

<form action="/submit_post" method="POST"> //change /submit_post to URL that handles new post submissions
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" required><br><br>

    <label for="content">Content:</label><br>
    <textarea id="content" name="content" rows="4" cols="50" required></textarea><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>

