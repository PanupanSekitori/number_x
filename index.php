<!DOCTYPE html>
<html>

<head>
    <title>number_x</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="./css/bootstrap.min.css"> -->
    <script src="./jquery/jquery.min.js"></script>
    <!-- <script src="./bootstrap/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="tags_number_x.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <br/>
    <?php include("sql_connection.php"); ?>
    <!-- <div class="jumbotron text-center">
        <h1>number_x</h1>
    </div> -->
    <audio id="myAudio">
        <source src="short_sound/mixkit-classic-click-1117.wav" type="audio/mpeg">
    </audio>
    <script>
        var x = document.getElementById("myAudio");

        function playAudio() {
            x.play();
        }
    </script>

    <div class="container">
        <div class="row">

            <div class="col-sm-4">
                <h3>Result</h3>
                <div id="list_number">
                </div>
            </div>

            <div class="col-sm-4">

            <table style="width:100%">
            <tr>
                <th><span class="badge badge-primary"><h1 id="type">ล่าง</h1></span></th>
                <th>
                <h3>Input number</h3>

                <form method="post" action="javascript:void(0)">
                    <input type="text" name="number" id="number" autocomplete="off" autofocus>
                    <input type="hidden" name="price" value="0">
                    <input type="hidden" name="type" value="บน">

                    <!-- <input type="submit" id="submit_number"> -->
                    <button id="submit_number">Submit</button>
                </form>
                </th> 
            </tr>
            </table>



            </div>

            <div class="col-sm-4">
                
                
                

                <div id="alert_type">
                    <div class="alert alert-danger" role="alert">
                        <h1>เปลี่ยน</h1>
                        <hr>
                    </div>
                </div>
                <h3>manual only : def = ล่าง</h3>
                <h3>กด / = type:ล่าง</h3>
                <h3>กด / = type:บน</h3>
                <h3>9*300 = ลูดหน้า 9 ตัว 300</h3>
                <h3>*920 = ลูดหลัง 9 ตัว 20</h3>
                <br/>
                <h3>42*100..*5000 = 42:10 บาม | 24:5 บาท</h3>
                <h3>42*10*10 = 42:10 บาม | 24:10 บาท</h3>
                <h3>42*10</h3>
                <br/>
                ทั้ง บน และ ล่าง
                <h3>48-20-10 = บน 20 ล่าง 10</h3>
                <h3>48-20 = บน 20 ล่าง 20</h3>

            </div>

        </div>
    </div>

</body>

</html>