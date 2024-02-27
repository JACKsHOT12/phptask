<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jack-Stores</title>
    <style>
        body {
            background-color: #F0DFBC;
            color: #6b3e26;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
        }
        .upload-btn {
            padding: 10px 20px;
            background-color: #6b3e26;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Jack-Stores</h1>
        <input type="file" id="fileInput" style="display: none;">
        <button class="upload-btn" onclick="uploadFile()">Upload File</button>
    </div>
    <!-- Add your JavaScript code here -->
    <script>
        function uploadFile() {
            const input = document.getElementById('fileInput');
            input.click(); // Simulate a click on the file input element
            input.addEventListener('change', function () {
                const file = input.files[0];
                const formData = new FormData();
                formData.append('file', file);
                fetch('https://jackstorebro.blob.core.windows.net/jackapps', {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (response.ok) {
                        alert('File uploaded successfully!');
                    } else {
                        alert('Error uploading file!');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error uploading file!');
                });
            });
        }
    </script>
</body>
</html>
