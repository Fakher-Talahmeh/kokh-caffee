<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T caffee: Tabels</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        header {
            background-color: aliceblue;
            width: 100%;
            z-index: 999;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 100px;
        }

        .table-btn {
            background: none;
            border: 0;
            font-size: medium;
            color: darkgray;
            font-weight: 600;
        }

        .table-btn:hover {

            color: rgb(77, 77, 77);
        }

        main {
            border: 1px solid gray;
            padding: 5;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .tbl {
            width: 100%;
            font-size: 20px;
        }

        .tbl th {
            background-color: silver;
            color: black;
            padding: 10px;
        }

        td {
            background-color: lightgrey;
            text-align: center;
            font-weight: 600;
        }

        h3 {
            margin: 20px;
            margin-top: 40px;
        }

        .insert-btn {
            color: #fff;
            background-color: darkgray;
            text-decoration: none;
            font-size: 1.1em;
            font-weight: 600;
            display: inline-block;
            padding: 0.9375em 2.1875em;
            letter-spacing: 1px;
            border-radius: 15px;
            margin-bottom: 20px;
            margin-top: 20px;
            margin-left: 5px;
            transition: 0.6s ease;
            text-align: center;
        }

        a {
            text-decoration: none;
        }

        .insert-btn:hover {
            background-color: gray;
            transform: scale(1.1);
        }

        .prices {
            display: flex;
        }
    </style>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "Tcaffe");
    function MaxID($con, $tablecount)
    {
        $ID = mysqli_query($con, "select max(ID) from tabel{$tablecount}");
        $id = mysqli_fetch_row($ID);
        return number_format($id[0]);
    }
    function ViewToDatabase($con, $tablecount)
    {
        $MaxP = MaxID($con, $tablecount);
        $fo = mysqli_query($con, "select max(ID) from done_order where tabel_id ='{$tablecount}' ");
        $fo = mysqli_fetch_row($fo);
        $fo[0] = number_format($fo[0]);
        if ($MaxP != $fo[0]) {

            $res = mysqli_query($con, "SELECT name , count_product , price from tabel{$tablecount} where ID = {$MaxP} ");
            while ($row = mysqli_fetch_row($res)) {
                echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1] . "</td>";
                echo "<td>" . $row[2] . "</td>";
                echo "</tr>";
            }
        }
        mysqli_query($con, "insert into t(tc) value({$tablecount})");
    }
    function AllPrice($con, $tablecount)
    {
        $MaxP = MaxID($con, $tablecount);
        $fo = mysqli_query($con, "select max(ID) from done_order where tabel_id ='{$tablecount}' ");
        $fo = mysqli_fetch_row($fo);
        $fo[0] = number_format($fo[0]);
        if ($MaxP != $fo[0]) {

            $sum = mysqli_query($con, "select sum(price) from tabel{$tablecount} where ID = {$MaxP}");
            $sum = mysqli_fetch_row($sum);
            echo "<h3>Price : {$sum[0]}</h3>";
        }
        $GLOBALS['t'] = $tablecount;
    }
    ?>
    <form action="" method="post">
        <header>
            <button class="table-btn" name="t1" id="t1">T1</button>
            <button class="table-btn" name="t2" id="t2">T2</button>
            <button class="table-btn" name="t3" id="t3">T3</button>
            <button class="table-btn" name="t4" id="t4">T4</button>
            <button class="table-btn" name="t5" id="t5">T5</button>
            <button class="table-btn" name="t6" id="t6">T6</button>
            <button class="table-btn" name="t7" id="t7">T7</button>
            <button class="table-btn" name="t8" id="t8">T8</button>
            <button class="table-btn" name="t9" id="t9">T9</button>
            <button class="table-btn" name="t10" id="t10">T10</button>
            <button class="table-btn" name="t11" id="t11">T11</button>
            <button class="table-btn" name="t12" id="t12">T12</button>
            <button class="table-btn" name="t13" id="t13">T13</button>
            <button class="table-btn" name="t14" id="t14">T14</button>
            <button class="table-btn" name="t15" id="t15">T15</button>
            <button class="table-btn" name="t16" id="t16">T16</button>
            <button class="table-btn" name="t17" id="t17">T17</button>
            <button class="table-btn" name="t18" id="t18">T18</button>
            <button class="table-btn" name="t19" id="t19">T19</button>
            <button class="table-btn" name="t20" id="t20">T20</button>
            <button class="table-btn" name="t21" id="t21">T21</button>
            <button class="table-btn" name="t22" id="t22">T22</button>
            <button class="table-btn" name="t23" id="t23">T23</button>
            <button class="table-btn" name="t24" id="t24">T24</button>
            <button class="table-btn" name="t25" id="t25">T25</button>
            <button class="table-btn" name="t26" id="t26">T26</button>
            <button class="table-btn" name="t27" id="t27">T27</button>
            <button class="table-btn" name="t28" id="t28">T28</button>
            <button class="table-btn" name="t29" id="t29">T29</button>
            <button class="table-btn" name="t30" id="t30">T30</button>
            <button class="table-btn" name="al" id="al">AL</button>
            <a class="table-btn" href='Home.php'>Cash</a>
        </header>
        <main>
            <aside></aside>
            <table class="tbl">
                <tr>
                    <th>
                        name
                    </th>
                    <th>
                        count proudct
                    </th>
                    <th>
                        price
                    </th>
                </tr>
                <?php

                if (isset($_POST["t1"])) {
                    ViewToDatabase($con, 1);
                    $GLOBALS['t'] = 1;
                } else if (isset($_POST["t2"])) {
                    ViewToDatabase($con, 2);

                    $GLOBALS['t'] = 2;
                } else if (isset($_POST["t3"])) {
                    ViewToDatabase($con, 3);

                    $GLOBALS['t'] = 3;
                } else if (isset($_POST["t4"])) {
                    ViewToDatabase($con, 4);

                    $GLOBALS['t'] = 4;
                } else if (isset($_POST["t5"])) {
                    ViewToDatabase($con, 5);

                    $GLOBALS['t'] = 5;
                } else if (isset($_POST["t6"])) {
                    ViewToDatabase($con, 6);

                    $GLOBALS['t'] = 6;
                } else if (isset($_POST["t7"])) {
                    ViewToDatabase($con, 7);

                    $GLOBALS['t'] = 7;
                } else if (isset($_POST["t8"])) {
                    ViewToDatabase($con, 8);

                    $GLOBALS['t'] = 8;
                } else if (isset($_POST["t9"])) {
                    ViewToDatabase($con, 9);

                    $GLOBALS['t'] = 9;
                } else if (isset($_POST["t10"])) {
                    ViewToDatabase($con, 10);

                    $GLOBALS['t'] = 10;
                } else if (isset($_POST["t11"])) {
                    ViewToDatabase($con, 11);

                    $GLOBALS['t'] = 11;
                } else if (isset($_POST["t12"])) {
                    ViewToDatabase($con, 12);

                    $GLOBALS['t'] = 12;
                } else if (isset($_POST["t13"])) {
                    ViewToDatabase($con, 13);

                    $GLOBALS['t'] = 13;
                } else if (isset($_POST["t14"])) {
                    ViewToDatabase($con, 14);

                    $GLOBALS['t'] = 14;
                } else if (isset($_POST["t15"])) {
                    ViewToDatabase($con, 15);

                    $GLOBALS['t'] = 15;
                } else if (isset($_POST["t16"])) {
                    ViewToDatabase($con, 16);

                    $GLOBALS['t'] = 16;
                } else if (isset($_POST["t17"])) {
                    ViewToDatabase($con, 17);

                    $GLOBALS['t'] = 17;
                } else if (isset($_POST["t18"])) {
                    ViewToDatabase($con, 18);

                    $GLOBALS['t'] = 18;
                } else if (isset($_POST["t19"])) {
                    ViewToDatabase($con, 19);
                    $GLOBALS['t'] = 19;
                } else if (isset($_POST["t20"])) {
                    ViewToDatabase($con, 20);
                    $GLOBALS['t'] = 20;
                } else if (isset($_POST['al'])) {
                    for ($i = 1; $i <= 20; $i++) {
                        $res = mysqli_query($con, "SELECT name , count_product , price from tabel$i");
                        while ($row = mysqli_fetch_row($res)) {
                            echo "<tr>";
                            echo "<td>" . $row[0] . "</td>";
                            echo "<td>" . $row[1] . "</td>";
                            echo "<td>" . $row[2] . "</td>";
                            echo "</tr>";
                        }
                    }
                }
                ?>
            </table>
            <div class="prices">
                <?php

                if (isset($_POST["t1"]))
                    AllPrice($con, 1);
                else if (isset($_POST["t2"]))
                    AllPrice($con, 2);
                else if (isset($_POST["t3"]))
                    AllPrice($con, 3);
                else if (isset($_POST["t4"]))
                    AllPrice($con, 4);
                else if (isset($_POST["t5"]))
                    AllPrice($con, 5);
                else if (isset($_POST["t6"]))
                    AllPrice($con, 6);
                else if (isset($_POST["t7"]))
                    AllPrice($con, 7);
                else if (isset($_POST["t8"]))
                    AllPrice($con, 8);
                else if (isset($_POST["t9"]))
                    AllPrice($con, 9);
                else if (isset($_POST["t10"]))
                    AllPrice($con, 10);
                else if (isset($_POST["t11"]))
                    AllPrice($con, 11);
                else if (isset($_POST["t12"]))
                    AllPrice($con, 12);
                else if (isset($_POST["t13"]))
                    AllPrice($con, 13);
                else if (isset($_POST["t14"]))
                    AllPrice($con, 14);
                else if (isset($_POST["t15"]))
                    AllPrice($con, 15);
                else if (isset($_POST["t16"]))
                    AllPrice($con, 16);
                else if (isset($_POST["t17"]))
                    AllPrice($con, 17);
                else if (isset($_POST["t18"]))
                    AllPrice($con, 18);
                else if (isset($_POST["t19"]))
                    AllPrice($con, 19);
                else if (isset($_POST["t20"]))
                    AllPrice($con, 20);

                else if (isset($_POST["t21"]))
                    AllPrice($con, 21);

                else if (isset($_POST["t22"]))
                    AllPrice($con, 22);

                else if (isset($_POST["t23"]))
                    AllPrice($con, 23);

                else if (isset($_POST["t24"]))
                    AllPrice($con, 24);

                else if (isset($_POST["t25"]))
                    AllPrice($con, 25);

                else if (isset($_POST["t26"]))
                    AllPrice($con, 26);

                else if (isset($_POST["t27"]))
                    AllPrice($con, 27);

                else if (isset($_POST["t28"]))
                    AllPrice($con, 28);

                else if (isset($_POST["t29"]))
                    AllPrice($con, 29);

                else if (isset($_POST["t30"]))
                    AllPrice($con, 30);
                else if (isset($_POST["al"])) {
                    $sum = 0;
                    for ($i = 1; $i <= 20; $i++) {
                        $res = mysqli_query($con, "select sum(price) from tabel{$i}");
                        $s = mysqli_fetch_row($res);
                        $s['0'] = number_format($s['0']);
                        $sum += $s['0'];
                    }

                    echo "<h3>Price : {$sum}</h3>";
                }

                ?>
                <button class="insert-btn" type="submit" name="paid">paid</button>
                <?php
                if (isset($_POST['paid'])) {
                    $mi = mysqli_query($con, "select max(id) from t");
                    $mi = mysqli_fetch_row($mi);
                    $mi[0] = number_format($mi[0]);
                    $res = mysqli_query($con, "select tc from t where id ={$mi[0]}");
                    $ti = mysqli_fetch_row($res);
                    $MaxP = MaxID($con, $ti['0']);
                    $res = mysqli_query($con, "SELECT * from tabel{$ti['0']} where ID = {$MaxP} ");
                    while ($row = mysqli_fetch_row($res)) {
                        mysqli_query($con, "insert into done_order value({$row[0]},'{$row[1]}',{$row[2]},{$ti['0']},{$row[3]})");
                    }
                }
                ?>
            </div>
        </main>
        <?php
        if (isset($_POST["delall"])) {
            $dt = date("d/M/y");
            $dt = explode("/", $dt);
            for ($i = 1; $i <= 20; $i++) {
                mysqli_query($con, "delete  from tabel{$i}");
            }
        }
        ?>
        <input type="submit" class="insert-btn" style="margin:20px" value="new day" name="delall" id="delall">
    </form>
</body>

</html>