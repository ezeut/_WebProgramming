<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <?php
        $conn = mysql_connect('localhost', 'it1714026', '');
        mysql_select_db('test',$conn);

        $sname = $_POST['sname'];
        $scontent = $_POST['scontent'];
        $pw = $_POST['pw'];
        $email = $_POST['email'];

        $q = "INSERT INTO stamp(sname, scontent, pw, email) VALUES('$sname', '$scontent', '$pw', '$email')";
        $result = mysql_query($q, $conn);

    ?>
<script>
    alert("작성되었습니다.");
    history.go(-1);
</script>
</html>