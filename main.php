<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $nim = htmlspecialchars($_POST['nim']);
    $dob = htmlspecialchars($_POST['dob']);
    $age = htmlspecialchars($_POST['age']);
    $gender = htmlspecialchars($_POST['gender']);
    $addressOrigin = htmlspecialchars($_POST['address-origin']);
    $addressCurrent = htmlspecialchars($_POST['address-current']);
    $hobby = htmlspecialchars($_POST['hobby']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);

    // Format data untuk ditulis ke file
    $data = "$name\t$nim\t$dob\t$age\t$gender\t$addressOrigin\t$addressCurrent\t$hobby\t$phone\t$email\n";

    // Simpan data ke file
    file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);

    // Redirect ke halaman untuk menampilkan data
    header('Location: tampil.php');
    exit;
}
?>
