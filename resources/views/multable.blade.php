<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <style>body{
        background-color: #f4f4f4;
    }
    h1{
        color: #000000;
        font-family: 'Arial';
        font-size: 2em;
        font-weight: bold;
        margin: auto;
        padding: 20px;
        text-align: center;
    }
    table{
        width: 100%;
        max-width: 350px;
        border-collapse: collapse;
        margin: 20px auto;
    }
    tbody{
        border: 3px solid  #000;
    }
    tr{
        border: 2px solid #ccc;
        padding: 10px;
        text-align: center;

    }
    th,td{
        font-size: 24px;
        margin: 20px auto ;
        padding: 2px;
    }</style>
</head>
<body>
    <?php $multi_x = $myinput; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <table>
        <tbody>
            <?php
            for($i = 1; $i <= 24; $i++){
                $result =  $multi_x * $i ;
                echo "
                <tr>
                    <td>$multi_x</td>
                    <td>x</td>
                    <td>$i</td>
                    <td>=</td>
                    <td>$result</td>
                </tr>";
            }?>
        </tbody>
    </table>
</body>

</html>
