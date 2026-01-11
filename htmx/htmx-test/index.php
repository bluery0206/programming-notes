<?php 

require 'bootstrap.php';

?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/htmx.org@2.0.8/dist/htmx.min.js" integrity="sha384-/TgkGk7p307TH7EXJDuUlgG3Ce1UVolAOFopFekQkkXihi5u/6OCvVKyz1W+idaz" crossorigin="anonymous"></script>
</head>
<body>
    <h1>auto update this shi</h1>

    <input type="text" name="q"
        hx-get="api/hello.php"
        hx-trigger="keyup changed delay:500ms"
        hx-target="#results"
        placeholder="Search..."
        htmx-indicator="#indicator"
        hx-swap="innerHTML">
    <div id="results">
        <h1 id="indicator" class="htmx-indicator">
            Loading...
        </h1>
    </div>
</button>
</body>
</html>