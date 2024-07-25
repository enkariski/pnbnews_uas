<!DOCTYPE html>
<html lang="en">
<?php include 'koneksi.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNBNews - Login</title>
    <link rel="shortcut icon" href="img/pnb.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/login.css">
    <script src="./js/login.js" defer></script>
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <img src="logo2.png" alt="Logo">
        <br><br>
        <p><b>Portal Berita Politeknik Negeri Bali</b></p>
    </div>
    <!-- Form Login dan Password -->
    <div class="login-container">
        <p>Silahkan login dengan username dan password yang telah anda miliki.</p>
        <form name="formlogin" id="formlogin" method="POST" onsubmit="return validasilogin()">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username">
            </div>
            <div class="form-group form-group-password">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
                <span class="toggle-password" onclick="togglePassword()"><i class="fas fa-eye"></i></span>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
    <!-- Pop Up Pemberitahuan -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Pemberitahuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-error-message">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Debugging: Menampilkan username yang diterima
    // echo "Username yang diterima: $username<br>";

    // Mempersiapkan dan menjalankan query
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Debugging: Menampilkan jumlah baris yang ditemukan
    $result->num_rows ;

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Debugging: Menampilkan password hash dari database
        // echo "Password hash dari database: " . $user['password'] . "<br>";

        if ($password === $user['password']) {
            $_SESSION['username'] = $username;
            $_SESSION['login'] = true;

            echo "<p>Login Berhasil</p>";
            // Redirect atau tindakan setelah login berhasil
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<p>Login gagal! Password salah.</p>";
        }
    } else {
        echo "<p>Login gagal! Username tidak ditemukan.</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
</body>
</html>
