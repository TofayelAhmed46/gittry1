<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield("title")</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
  <h2>Cities</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/more">More</a></li>
      <li><a href="/about">About US</a></li>
    </ul>
  </nav>
  
  <article>
    @yield("content")
 </article>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>

