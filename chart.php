<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #chatBox {
            width: 100%;
            height: 400px;
            border: 1px solid #ccc;
            overflow-y: scroll;
            padding: 10px;
        }
        .message {
            margin-bottom: 10px;
        }
        .message .username {
            font-weight: bold;
        }
        .message .timestamp {
            font-size: 0.8em;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div id="chatBox"></div>
        <form id="chatForm" class="mt-3">
            <div class="form-group">
                <input type="text" id="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="text" id="message" class="form-control" placeholder="Type your message" required>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            // Load messages
            function loadMessages() {
                $.ajax({
                    url: 'load_messages.php',
                    method: 'GET',
                    success: function(data) {
                        $('#chatBox').html(data);
                        $('#chatBox').scrollTop($('#chatBox')[0].scrollHeight);
                    }
                });
            }

            // Send message
            $('#chatForm').on('submit', function(e) {
                e.preventDefault();
                const username = $('#username').val();
                const message = $('#message').val();

                $.ajax({
                    url: 'send_message.php',
                    method: 'POST',
                    data: { username: username, message: message },
                    success: function() {
                        $('#message').val('');
                        loadMessages();
                    }
                });
            });

            // Initial load
            loadMessages();

            // Refresh messages every 5 seconds
            setInterval(loadMessages, 5000);
        });
    </script>
</body>
</html>