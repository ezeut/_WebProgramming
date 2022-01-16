<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <?php
        $conn = mysql_connect('localhost', 'it1714026', '');
        mysql_select_db('test',$conn);

        $q = "SELECT num, sname, scontent FROM stamp";
        $result = mysql_query($q, $conn);

        if (mysql_num_rows($result) == 0) {
    ?>
        <h5>방명록이 없습니다.</h5>
    <?php
    
        }else {
            ?>
            <table id="rstamp"><?php
            while ($row = mysql_fetch_array($result)){?>
            
                    <tr>
                        <td> 번호</td> <td><?php echo"$row[0]"; ?></td>
                        <td>이름</td> <td><?php echo"$row[1]"; ?></td>
                    </tr>
                    <tr>
                        <td>내용</td>
                        <td colspan="3"><?php echo"$row[2]"; ?></td>
                    </tr>
                    <tr><td colspan="4">----------------------------------------------------------------</td></tr>   
                <?php    
            }
            ?></table></hr><?php
    echo "</br>";
    }
    ?>
</html>

        
