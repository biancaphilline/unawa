<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #333;
            text-align: center;
            font-size: 14px;

            border: 0px;
        }


        td {
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #dc3545;
            color: white;

            text-align: center;



        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-responsive {
            width: 100%;
            margin: 0 auto;
        }

        .main-content {
            width: 80%;
            margin: 0 auto;
        }

        .pagination {
            margin: 10px;
        }

        .pagination a,
        .pagination .current-page {
            display: inline-block;
            padding: 8px 16px;
            background-color: #f2f2f2;
            color: #333;
            border-radius: 4px;
            margin-right: 5px;
            text-decoration: none;
            font-size: 14px;
        }

        .pagination a:hover {
            background-color: #ddd;
        }

        .pagination .current-page {
            background-color: #2b3035;
            color: white;
        }

        .main-content {
            border: 0px;
            width: 80%;
        }

        .center-header {
            text-align: center;
        }

        .modal-logo {
            max-width: 55px;
            max-height: auto;
            margin-left: 12px;
            margin-top: 4px;

        }

        .modal-title {
            margin-left: 22%;
        }

        .modal-body-content {
            padding: 20px;

        }

        /* Styles for the close button */
        .close-button {
            color: white;
            font-size: 24px;
        }

        .close-button:hover {
            color: white;
        }

        body .modal-dialog.custom-modal-width {
            max-width: 40%;
            /* Adjust the percentage to your desired width */
            border: 0px;
            border-radius: 0px;
            padding: 1px;
            background-color: #221f22;
        }

        .modal-content {
            background-color: #221f22;
            border: 0px;
            border-radius: 0px;
            color: #fff;
            padding: 0;
            margin: 0;
        }

        .large-icon {
            padding-top: 50px;
            font-size: 32px;
            /* Adjust the font size to make the icon larger */
            /* You can adjust other styles if needed */
        }

        .form-control {
            margin-right: 5px;
        }

        .image-display {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            color: white;
            cursor: pointer;
        }

        .image-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .image-container img {
            max-width: 90%;
            max-height: 90%;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<?php include('include/app.php'); ?>

<body>
    <div class="main-content">
        <br>
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0" style="background-color:#000; display: flex; justify-content: space-between; align-items: center;">
                        <a href="homepage.php" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>

                        <h1 style="color:white; font-size:30px; margin-left:150px; ">Approved Signs</h1>

                        <form method="GET" action="">

                        </form>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush mx-auto">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>View</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Database connection settings
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "unawa";

                                // Create a connection
                                $conn = mysqli_connect($servername, $username, $password, $dbname);
                                if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                // Build the SQL query
                                $sql = "SELECT * FROM signapproved";
                                $result = mysqli_query($conn, $sql);

                                if (!$result) {
                                    die("Error: " . mysqli_error($conn));
                                }

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row["id"] . "</td>";
                                    echo "<td>" . $row["name"] . "</td>";
                                    echo "<td>" . $row["email"] . "</td>";
                                    echo "<td>" . $row["title"] . "</td>";
                                    echo "<td>" . $row["description"] . "</td>";
                                    echo "<td class='text-center view'>
                                        <button class='btn btn-secondary viewbutton' 
                                                onclick='openImageDisplay(\"" . $row["filename"] . "\")'>
                                            View
                                        </button>
                                    </td>";



                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Image display div -->
    <div class="image-display" id="imageDisplay">
        <span class="close-button" onclick="closeImageDisplay()">&times;</span>
        <div class="image-container">
            <img id="displayedImage" src="" alt="Image">
        </div>
    </div>

    <script>
        // Function to open the image display
        function openImageDisplay(filename) {
            var imageUrl = '/unawa/userlvls/users/signphoto/' + filename;
            document.getElementById('displayedImage').src = imageUrl;
            document.getElementById('imageDisplay').style.display = 'block';
        }

        // Function to close the image display
        function closeImageDisplay() {
            document.getElementById('imageDisplay').style.display = 'none';
        }
    </script>
    <script>
        function rejectRow(rowId) {
            if (confirm('Are you sure you want to reject this row?')) {
                window.location.href = `?reject=${rowId}`;
            }
        }

        function approveRow(rowId) {
            if (confirm('Are you sure you want to approve this row?')) {
                window.location.href = `?approve=${rowId}`;
            }
        }
    </script>
</body>

</html>