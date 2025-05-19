<!DOCTYPE html>
<html>
<head>
    <title>Form Login - Latihan 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }
        form {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        input[type="submit"] {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
        }
        .debug {
            background: #f0f0f0;
            padding: 15px;
            margin: 15px 0;
            border-radius: 3px;
            font-family: monospace;
        }
        .result {
            padding: 10px;
            margin-top: 10px;
            text-align: center;
            border-radius: 3px;
        }
        .success {
            background: #dff0d8;
            color: #3c763d;
        }
        .error {
            background: #f2dede;
            color: #a94442;
        }
    </style>
</head>
<body>
    <h1>Form Login</h1>
    
    <?php
    $correct_username = "admin";
    $correct_password = 123;

    function infoPost($arrayData) {
        $info = "<div class='debug'><strong>Data:</strong><br>";
        foreach($arrayData as $key => $val) {
            $info .= $key . " : " . $val . "<br>";
        }
        $info .= "</div>";
        return $info;
    }
    ?>

    <form method="post">
        <div class="input-group">
            <label>Username:</label>
            <input type="text" name="user">
        </div>
        <div class="input-group">
            <label>Password:</label>
            <input type="password" name="pass">
        </div>
        <input type="submit" value="login">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo '<div class="debug">';
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
        echo '</div>';

        echo infoPost($_POST);

        if($_POST['user'] == $correct_username && $_POST['pass'] == $correct_password) {
            echo '<div class="result success">Benar</div>';
        } else {
            echo '<div class="result error">Salah</div>';
        }
    }
    ?>
</body>
</html>