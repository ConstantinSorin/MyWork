<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $con = mysqli_connect('localhost', 'root', '', 'trydb') or die("Connection Failed: " . mysqli_connect_error());

        $nume = $_POST['nume'];
        $prenume = $_POST['prenume'];
        $email = $_POST['email'];
        $telefon = $_POST['telefon'];
        $mesaj = $_POST['mesaj'];

        $sql = "INSERT INTO `tb_data` (`ID`,`Nume` ,`Prenume`, `E_mail`, `Nr_telefon`, `Descriere`) VALUES ('0','$nume', '$prenume', '$email', '$telefon', '$mesaj')";
        $rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
?>