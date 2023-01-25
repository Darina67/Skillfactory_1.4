<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/main.css">
    <title>Практика</title>
</head>

<body>
    <div class="container">
        <table class="table">
            <h1>Таблица истинности PHP</h1>
            <em>Здесь !a не отработало при a = 1, не знаю почему</em>
            <thead>
                <tr>
                    <th>A</th>
                    <th>B</th>
                    <th>!A</th>
                    <th>A || B</th>
                    <th>A && B</th>
                    <th>A xor B</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $A = 0;
                    $B = 0;
                    ?>
                    <td><?= $A ?></td>
                    <td><?= $B ?></td>
                    <td><?= !$A ?></td>
                    <td><?= $A | $B ?></td>
                    <td><?= $A & $B ?></td>
                    <td><?= $A ^ $B ?></td>

                </tr>
                <tr>
                    <?php
                    $A = 0;
                    $B = 1;
                    ?>
                    <td><?= $A ?></td>
                    <td><?= $B ?></td>
                    <td><?= !$A ?></td>
                    <td><?= $A | $B ?></td>
                    <td><?= $A & $B ?></td>
                    <td><?= $A ^ $B ?></td>
                </tr>
                <tr>
                    <?php
                    $A = 1;
                    $B = 0;
                    ?>
                    <td><?= $A ?></td>
                    <td><?= $B ?></td>
                    <td><?= !$A ?></td>
                    <td><?= $A | $B ?></td>
                    <td><?= $A & $B ?></td>
                    <td><?= $A ^ $B ?></td>
                </tr>
                <tr>
                    <?php
                    $A = 1;
                    $B = 1;
                    ?>
                    <td><?= $A ?></td>
                    <td><?= $B ?></td>
                    <td><?= !$A ?></td>
                    <td><?= $A | $B ?></td>
                    <td><?= $A & $B ?></td>
                    <td><?= $A ^ $B ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table">
            <h1>Таблица гибкого сравнения</h1>
            <thead>
                <?php
                $true = true;
                $false = false;
                $one = 1;
                $zero = 0;
                $min_one = -1;
                $null = null;
                $php = "php";
                $str_one = "1";
                ?>
                <tr>
                    <th>true</th>
                    <th>false</th>
                    <th>1</th>
                    <th>0</th>
                    <th> -1</th>
                    <th>null</th>
                    <th>"php"</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>true</td>
                    <td><?= $true == $true ?></td>
                    <td><?= $true == $one ?></td>
                    <td><?= $true == $zero ?></td>
                    <td><?= $true == $min_one ?></td>
                    <td><?= $true == $null ?></td>
                    <td><?= $true == $php ?></td>
                </tr>
                <tr>
                    <td>false</td>
                    <td><?= $false == $true ?></td>
                    <td><?= $false == $one ?></td>
                    <td><?= $false == $zero ?></td>
                    <td><?= $false == $min_one ?></td>
                    <td><?= $false == $null ?></td>
                    <td><?= $false == $php ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td><?= $one == $true ?></td>
                    <td><?= $one == $one ?></td>
                    <td><?= $one == $zero ?></td>
                    <td><?= $one == $min_one ?></td>
                    <td><?= $one == $null ?></td>
                    <td><?= $one == $php ?></td>
                </tr>
                <tr>
                    <td>0</td>
                    <td><?= $zero == $true ?></td>
                    <td><?= $zero == $one ?></td>
                    <td><?= $zero == $zero ?></td>
                    <td><?= $zero == $min_one ?></td>
                    <td><?= $zero == $null ?></td>
                    <td><?= $zero == $php ?></td>
                </tr>
                <tr>
                    <td> -1</td>
                    <td><?= $min_one == $true ?></td>
                    <td><?= $min_one == $one ?></td>
                    <td><?= $min_one == $zero ?></td>
                    <td><?= $min_one == $min_one ?></td>
                    <td><?= $min_one == $null ?></td>
                    <td><?= $min_one == $php ?></td>
                </tr>
                <tr>
                    <td> "1"</td>
                    <td><?= $str_one == $true ?></td>
                    <td><?= $str_one == $one ?></td>
                    <td><?= $str_one == $zero ?></td>
                    <td><?= $str_one == $min_one ?></td>
                    <td><?= $str_one == $null ?></td>
                    <td><?= $str_one == $php ?></td>
                </tr>
                <tr>
                    <td>null</td>
                    <td><?= $null == $true ?></td>
                    <td><?= $null == $one ?></td>
                    <td><?= $null == $zero ?></td>
                    <td><?= $null == $min_one ?></td>
                    <td><?= $null == $null ?></td>
                    <td><?= $null == $php ?></td>
                </tr>
                <tr>
                    <td>"php"</td>
                    <td><?= $php == $true ?></td>
                    <td><?= $php == $one ?></td>
                    <td><?= $php == $zero ?></td>
                    <td><?= $php == $min_one ?></td>
                    <td><?= $php == $null ?></td>
                    <td><?= $php == $php ?></td>
                </tr>
            </tbody>

        </table>
        <table class="table">
            <h1>Таблица жесткого сравнения</h1>
            <thead>
                <?php
                $true = true;
                $false = false;
                $one = 1;
                $zero = 0;
                $min_one = -1;
                $null = null;
                $php = "php";
                $str_one = "1";
                ?>
                <tr>
                    <th>true</th>
                    <th>false</th>
                    <th>1</th>
                    <th>0</th>
                    <th> -1</th>
                    <th>null</th>
                    <th>"php"</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>true</td>
                    <td><?= $true === $true ?></td>
                    <td><?= $true === $one ?></td>
                    <td><?= $true === $zero ?></td>
                    <td><?= $true === $min_one ?></td>
                    <td><?= $true === $null ?></td>
                    <td><?= $true === $php ?></td>
                </tr>
                <tr>
                    <td>false</td>
                    <td><?= $false === $true ?></td>
                    <td><?= $false === $one ?></td>
                    <td><?= $false === $zero ?></td>
                    <td><?= $false === $min_one ?></td>
                    <td><?= $false === $null ?></td>
                    <td><?= $false === $php ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td><?= $one === $true ?></td>
                    <td><?= $one === $one ?></td>
                    <td><?= $one === $zero ?></td>
                    <td><?= $one === $min_one ?></td>
                    <td><?= $one === $null ?></td>
                    <td><?= $one === $php ?></td>
                </tr>
                <tr>
                    <td>0</td>
                    <td><?= $zero === $true ?></td>
                    <td><?= $zero === $one ?></td>
                    <td><?= $zero === $zero ?></td>
                    <td><?= $zero === $min_one ?></td>
                    <td><?= $zero === $null ?></td>
                    <td><?= $zero === $php ?></td>
                </tr>
                <tr>
                    <td> -1</td>
                    <td><?= $min_one === $true ?></td>
                    <td><?= $min_one === $one ?></td>
                    <td><?= $min_one === $zero ?></td>
                    <td><?= $min_one === $min_one ?></td>
                    <td><?= $min_one === $null ?></td>
                    <td><?= $min_one === $php ?></td>
                </tr>
                <tr>
                    <td> "1"</td>
                    <td><?= $str_one === $true ?></td>
                    <td><?= $str_one === $one ?></td>
                    <td><?= $str_one === $zero ?></td>
                    <td><?= $str_one === $min_one ?></td>
                    <td><?= $str_one === $null ?></td>
                    <td><?= $str_one === $php ?></td>
                </tr>
                <tr>
                    <td>null</td>
                    <td><?= $null === $true ?></td>
                    <td><?= $null === $one ?></td>
                    <td><?= $null === $zero ?></td>
                    <td><?= $null === $min_one ?></td>
                    <td><?= $null === $null ?></td>
                    <td><?= $null === $php ?></td>
                </tr>
                <tr>
                    <td>"php"</td>
                    <td><?= $php === $true ?></td>
                    <td><?= $php === $one ?></td>
                    <td><?= $php === $zero ?></td>
                    <td><?= $php === $min_one ?></td>
                    <td><?= $php === $null ?></td>
                    <td><?= $php === $php ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>