<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/htmx.org@2.0.8/dist/htmx.min.js" integrity="sha384-/TgkGk7p307TH7EXJDuUlgG3Ce1UVolAOFopFekQkkXihi5u/6OCvVKyz1W+idaz" crossorigin="anonymous"></script>
    <style>
        #loading {
            position: absolute;
            background: rgba(255,255,255,0.9);
        }
    </style>
</head>
<body>
    <p>Messages: <span id="count">0</span></p>

    <button 
    hx-get="send-message.php"
    hx-target="#log">
    Send
    </button>

    <div id="log"></div>

    <div id="what">dsads</div>

    <form 
        hx-get="api/hello.php" 
        hx-target="#results" 
        hx-trigger="keyup changed delay:500ms" 
        hx-indicator="#loading"
    >
        <input type="text" name="q">
    </form>

    <div id="loading" class="htmx-indicator">⏳ Loading...</div>
    <div id="results"></div>
</body>
</html>