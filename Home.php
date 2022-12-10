<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T Caffee</title>
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
            position: fixed;
            z-index: 999;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 200px;
        }

        .navigation a {
            color: darkgray;
            text-decoration: none;
            font-size: 1.3em;
            font-weight: 500;
            padding-left: 30px;
        }

        .navigation a:hover {
            color: rgb(77, 77, 77);
        }

        section {
            padding-top: 63px;
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .contract {
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .menu {
            margin: 5px 0;
            border-radius: 0 15px;
            border: solid green 5px;
            padding: 20px;
            width: 50%;
        }

        .item {
            display: flex;
            justify-content: space-between;
            padding: 5px 10px;
            border-radius: 2px;
            margin-bottom: 5px;
            border: 1px solid gray;
        }

        label {
            font-size: 25px;
            font-weight: 800;
        }

        input {
            padding: 5px;
        }

        .title {
            display: flex;
            justify-content: center;
            color: rgb(41, 39, 39);
            font-size: 2.2em;
            font-weight: 800;
            margin-bottom: 30px;
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
            margin-bottom: 40px;
            margin-left: 5px;
            padding-left: 20px;
            transition: 0.6s ease;
        }

        .insert-btn:hover {
            background-color: gray;
            transform: scale(1.1);
        }

        .insert-data {
            margin-top: -150px;
            padding-left: 12.5%;
            margin-right: 5px;
        }

        .insert-data input {
            width: 100px;
        }

        .mm1 {

            border-color: rgba(0, 0, 255, 0.323);
            background: url("arakel.jpeg") no-repeat;
            background-size: cover;
            background-position: center;
        }

        .m1 {
            border-radius: 25px 0 0 25px;
        }

        .mm2 {

            background: url("shrobatbardh.jpg") no-repeat;
            background-size: cover;
            background-position: center;
            border-color: rgba(43, 2, 2, 0.472);
        }

        .m2 {
            border-radius: 0 25px 25px 0;
        }

        .mm3 {
            margin-top: -655px;
            background: url("SHROBATSAKHNH.jpg") no-repeat;
            background-position: center;
            background-size: cover;
            border: rgba(220,217,214, 0.7);
        }

        .uppend {
            padding-right: 100px;
        }
        .mm4{
            background: url("kreeb.jpg") no-repeat;
            background-position: center;
            background-size: cover;
            border: rgba(20,217,214, 0.700);
        }
        .mm5{
            margin-top: -485px;
            background: url("knafh.jpg") no-repeat;
            background-position: center;
            background-size: cover;
            border: rgba(220,217,214, 0.700);
        }
    </style>
</head>
<body>
    <?php
    function InsertToDatabase($con, $name, $id, $DATA, $price)
    {
        $data = $DATA;
        $table = $_POST["counttable"];
        $price = $data * $price;
        mysqli_query($con, "insert into all_tabels values({$id},'{$name}',{$data},{$price})");
        mysqli_query($con, "insert into tabel{$table} values({$id},'{$name}',{$data},{$price})");
    }
    $id = 1;
    $con = mysqli_connect("localhost", "root", "", "Tcaffe");
    if (isset($_POST["insert"])) {
        if (mysqli_query($con, "select * from all_tabels ") != null) {
            $ID = mysqli_query($con, "select max(id) from all_tabels");
            $ID = mysqli_fetch_row($ID);
            $id = number_format($ID[0]) + 1;
        }
        //أراقيل
        if ($_POST["arkelh-nkhlh"] != 0) InsertToDatabase($con, 'أرجيلة نخله', $id, $_POST["arkelh-nkhlh"], 15);

        if ($_POST["arkilh-tfahten"] != 0)
            InsertToDatabase($con, 'أرجيلة تفاحتين', $id, $_POST["arkilh-tfahten"], 10);
        if ($_POST["arkilh-lemon"] != 0)
            InsertToDatabase($con, 'أرجيلة ليمون ونعنع', $id, $_POST["arkilh-lemon"], 10);
        if ($_POST["arkelh-btekh"] != 0)
            InsertToDatabase($con, 'أرجيلة بطيخ ونعنع', $id, $_POST["arkelh-btekh"], 10);
        //مشروبات باردة
        if ($_POST["XL"] != 0) InsertToDatabase($con, 'XL', $id, $_POST["XL"], 5);
        if ($_POST["blu-day"] != 0) InsertToDatabase($con, 'blu day', $id, $_POST["blu-day"], 4);
        if ($_POST["blu"] != 0) InsertToDatabase($con, 'blu', $id, $_POST["blu"], 4);
        if ($_POST["bavaria"] != 0) InsertToDatabase($con, 'bavaria', $id, $_POST["bavaria"], 5);
        if ($_POST["faeeroz"] != 0) InsertToDatabase($con, 'faeeroz', $id, $_POST["faeeroz"], 5);
        if ($_POST["coca-cola"] != 0) InsertToDatabase($con, 'كوكا كولا', $id, $_POST["coca-cola"], 3);
    }
    if (isset($_POST["uppend"])) {
        if (mysqli_query($con, "select * from all_tabels ") != null) {
            $ID = mysqli_query($con, "select max(id) from all_tabels");
            $ID = mysqli_fetch_row($ID);
            $id = number_format($ID[0]);
        }
        //أراقيل
        if ($_POST["arkelh-nkhlh"] != 0) InsertToDatabase($con, 'أرجيلة نخله', $id, $_POST["arkelh-nkhlh"], 15);

        if ($_POST["arkilh-tfahten"] != 0)
            InsertToDatabase($con, 'أرجيلة تفاحتين', $id, $_POST["arkilh-tfahten"], 10);
        if ($_POST["arkilh-lemon"] != 0)
            InsertToDatabase($con, 'أرجيلة ليمون ونعنع', $id, $_POST["arkilh-lemon"], 10);
        if ($_POST["arkelh-btekh"] != 0)
            InsertToDatabase($con, 'أرجيلة بطيخ ونعنع', $id, $_POST["arkelh-btekh"], 10);
        //مشروبات باردة
        if ($_POST["XL"] != 0) InsertToDatabase($con, 'XL', $id, $_POST["XL"], 5);
        if ($_POST["blu-day"] != 0) InsertToDatabase($con, 'blu day', $id, $_POST["blu-day"], 4);
        if ($_POST["blu"] != 0) InsertToDatabase($con, 'blu', $id, $_POST["blu"], 4);
        if ($_POST["bavaria"] != 0) InsertToDatabase($con, 'bavaria', $id, $_POST["bavaria"], 5);
        if ($_POST["faeeroz"] != 0) InsertToDatabase($con, 'faeeroz', $id, $_POST["faeeroz"], 5);
        if ($_POST["coca-cola"] != 0) InsertToDatabase($con, 'كوكا كولا', $id, $_POST["coca-cola"], 3);
    }
    ?>
    <header>
        <h1>T Caffee</h1>
        <nav class="navigation"><a href="tabels.php">Tabels</a></nav>
    </header>
    <section>
        <form action="" method="post">
            <div class="contract">
                <div class="menu m1 mm1">
                    <h2 class="title" style="background-color: rgba(30, 26, 255, 0.341);border-radius: 15px;">أراغيل</h2>
                    <div class="items">
                        <div class="item"><label for="">أرقيلة نخله</label><input type="number" value="0" min="0" name="arkelh-nkhlh" id="arkelh-nkhlh"></div>
                        <div class="item"><label for="">أرقيلة سهم</label><input type="number" value="0" min="0" name="arkilh-tfahten" id="arkilh-tfahten"></div>
                        <div class="item"><label for="">أرقيلة ليمون ونعنع</label><input type="number" value="0" min="0" name="arkilh-lemon" id="arkilh-lemon"></div>
                        <div class="item"><label for="">أرقيلة كرز</label><input type="number" value="0" min="0" name="arkelh-btekh" id="arkelh-btekh"></div>
                    </div>
                </div>
                <div class="menu m2 mm2">
                    <h2 class="title" style="background-color: rgba(165, 93, 42, 0.621);border-radius: 15px">مشروبات باردة</h2>
                    <div class="items">
                        <div class="item"><label for="">XL</label><input type="number" value="0" min="0" name="XL" id="XL"></div>
                        <div class="item"><label for="">blu day</label><input type="number" value="0" min="0" name="blu-day" id="blu-day"></div>
                        <div class="item"><label for="">blu</label><input type="number" value="0" min="0" name="blu" id="blu"></div>
                        <div class="item"><label for="">bavaria</label><input type="number" value="0" min="0" name="bavaria" id="bavaria"></div>
                        <div class="item"><label for="">faeeroz</label><input type="number" value="0" min="0" name="faeeroz" id="faeeroz"></div>
                        <div class="item"><label for="">كولا</label><input type="number" value="0" min="0" name="coca-cola" id="coca-cola"></div>
                        <div class="item"><label for="">سبرايت</label><input type="number" value="0" min="0" name="coca-cola" id="sprit"></div>
                        <div class="item"><label for="">هايبي</label><input type="number" value="0" min="0" name="coca-cola" id="cool"></div>
                        <div class="item"><label for="">تبوزينا</label><input type="number" value="0" min="0" name="coca-cola" id="tbozena"></div>
                        <div class="item"><label for="">كابي</label><input type="number" value="0" min="0" name="coca-cola" id="cappy"></div>
                        <div class="item"><label for="">ماء صغير</label><input type="number" value="0" min="0" name="coca-cola" id="water-small"></div>
                        <div class="item"><label for="">ماء كبير</label><input type="number" value="0" min="0" name="coca-cola" id="water-big"></div>
                        <div class="item"><label for="">يورا</label><input type="number" value="0" min="0" name="coca-cola" id="uora"></div>
                        <div class="item"><label for="">موز وحليب</label><input type="number" value="0" min="0" name="coca-cola" id="banana"></div>
                        <div class="item"><label for="">ليمون ونعنع</label><input type="number" value="0" min="0" name="coca-cola" id="lemon"></div>
                        <div class="item"><label for="">لوتس</label><input type="number" value="0" min="0" name="coca-cola" id="lots"></div>
                    </div>
                </div>
                <div class="menu mm3 m1">
                    <h2 class="title " style="background : rgba(217,217,214,0.5); border-radius:15px">مشروبات ساخنة</h2>
                    <div class="items">
                        <div class="item"><label for="">هوت شوكلت</label><input type="number" value="0" min="0" name="" id=""></div>
                        <div class="item"><label for="">فنيلا</label><input type="number" value="0" min="0" name="" id=""></div>
                        <div class="item"><label for="">نوتيلا</label><input type="number" value="0" min="0" name="" id=""></div>
                        <div class="item"><label for="">شوكولا</label><input type="number" value="0" min="0" name="" id=""></div>
                        <div class="item"><label for="">كرميل</label><input type="number" value="0" min="0" name="" id=""></div>
                        <div class="item"><label for="">شاي</label><input type="number" value="0" min="0" name="" id=""></div>
                        <div class="item"><label for="">قهوة </label><input type="number" value="0" min="0" name="" id=""></div>
                        <div class="item"><label for="">كرميل</label><input type="number" value="0" min="0" name="" id=""></div>
                        <div class="item"><label for="">كرميل</label><input type="number" value="0" min="0" name="" id=""></div>
                    </div>
                </div>
                <div class="menu mm4 m2" >
                    <h2 class="title" style="background-color: rgba(165, 93, 42, 0.621);border-radius: 15px">حلويات</h2>
                    <div class="items">
                        <div class="item"><label for="">وفل مكسرات</label><input type="number" value="0" min="0" name="" id=""></div>
                        <div class="item"><label for="">وفل فواكه</label><input type="number" value="0" min="0" name="" id=""></div>
                        <div class="item"><label for="">وفل كستره</label><input type="number" value="0" min="0" name="" id=""></div>
                        <div class="item"><label for="">كريب مكسرات</label><input type="number" value="0" min="0" name="" id=""></div>
                        <div class="item"><label for="">كريب فواكه</label><input type="number" value="0" min="0" name="" id=""></div>
                        <div class="item"><label for="">كريب كستره</label><input type="number" value="0" min="0" name="" id=""></div>
                    </div>
                </div>
                <div class="menu mm5 m1" >
                    <h2 class="title" style="background-color: rgba(165, 93, 42, 0.621);border-radius: 15px">كنافة</h2>
                    <div class="items">
                        <div class="item"><label for="">كنافة ناعمة</label><input type="number" value="0" min="0" name="" id=""></div>
                        <div class="item"><label for="">كنافة اسطنبولية</label><input type="number" value="0" min="0" name="" id=""></div>
                    </div>
                </div>
            </div>

            <div class="insert-data" >
                <input type="number" value="1" min="1" max="30" name="counttable" id="counttable">
                <input type="submit" class="insert-btn" value="insert" name="insert" id="insert">
                <input type="submit" class="insert-btn uppend" value="uppend" name="uppend" id="uppend">
            </div>
        </form>
    </section>
</body>

</html>