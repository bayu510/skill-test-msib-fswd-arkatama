<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data Pengguna</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Input Data Pengguna</h2>
        <form method="post" action="proses_input.php" id="userForm">
            <div class="input-group">
                <label>Nama Usia Kota</label>
                <input type="text" name="data_pengguna" required>
            </div>
            <div class="input-group">
                <button type="submit">Simpan Data</button>
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
