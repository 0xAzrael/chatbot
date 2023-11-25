<?php
require_once 'config.php';
require_once 'chatbot.php';

// Fetch predefined inputs from the database
$sql = "SELECT DISTINCT input FROM responses";
$result = $conn->query($sql);

$predefinedInputs = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $predefinedInputs[] = $row['input'];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_input = isset($_POST['user_input']) ? $_POST['user_input'] : '';
    $response = getResponse($user_input);
    echo json_encode(['response' => $response]);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messenger-style Chatbot</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e9ebee;
        }

        h1 {
            text-align: center;
            color: #4b4f56;
            margin-top: 20px;
        }

        #chat-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow-y: scroll;
            max-height: 400px;
        }

        .message {
            padding: 10px;
            margin: 10px;
            border-radius: 8px;
        }

        .user-message {
            background-color: #fbb845;
            text-align: right;
        }

        .bot-message {
            background-color: #f1f0f0;
            text-align: left;
        }

        button {
            background-color: #2ea1da;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #e83879;
        }
    </style>
</head>
<body>
    <h1>ChatBot for Kids</h1>
    <div id="chat-container"></div>

    <!-- Make predefined inputs clickable buttons -->
    <?php
    // Assuming $predefinedInputs is defined and contains predefined inputs
    foreach ($predefinedInputs as $input): ?>
        <button onclick="sendMessage('<?php echo $input; ?>')"><?php echo $input; ?></button>
    <?php endforeach; ?>

    <script>
        function sendMessage(userInput) {
            var chatContainer = document.getElementById('chat-container');

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'index.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = JSON.parse(xhr.responseText).response;

                    // Display user message
                    chatContainer.innerHTML += '<div class="message user-message">' +
                                                '<p>' + userInput + '</p>' +
                                                '</div>';

                    // Display bot message
                    chatContainer.innerHTML += '<div class="message bot-message">' +
                                                '<p>' + response + '</p>' +
                                                '</div>';

                    // Scroll to the bottom of the chat container
                    chatContainer.scrollTop = chatContainer.scrollHeight;
                }
            };
            xhr.send('user_input=' + userInput);
        }
    </script>
</body>
</html>
