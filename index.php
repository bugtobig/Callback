<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page with Copy Button</title>
</head>
<body>
    <?php
    function handle_get_request() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $code = isset($_GET['code']) ? $_GET['code'] : '';
            if ($code) {
                return $code;
            }
        }
    }

    $current_code = handle_get_request();
    ?>

    <!-- HTML -->
    <div id="currentCode"><?php echo $current_code; ?></div>
    <button id="copyButton" onclick="copyCode()">Copy Code</button>

    <!-- JavaScript -->
    <script>
    function copyCode() {
        var code = document.getElementById("currentCode").innerText;
        navigator.clipboard.writeText(code).then(function() {
            alert("Code copied to clipboard!");
        }, function() {
            alert("Error copying code to clipboard!");
        });
    }
    </script>
</body>
</html>
