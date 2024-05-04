<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alay Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        input[type="text"] {
            width: 70%;
            padding: 10px;
            margin: 10px auto;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #555;
        }

        .result {
            text-align: center;
            margin-top: 20px;
            font-size: 1.2em;
            /* Contoh ukuran huruf yang diperbesar */
            /* Mengatur gaya warna teks secara acak */
            color: rgb(<?php echo rand(0, 255); ?>,
                    <?php echo rand(0, 255); ?>
                    ,
                    <?php echo rand(0, 255); ?>
                );
        }

        video {
            display: block;
            margin: 20px auto;
            width: 80%;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Alay Generator</h1>
        <form action="" method="post">
            <input type="radio" name="level_alay" value="1" id="lev_1" selected> <label for="lev_1"> L3v3l 84W4h
            </label><br>
            <input type="radio" name="level_alay" value="2" id="lev_dewa"> <label for="lev_dewa"> |_3V3L D3W4 </label>
            <br> <br>
            <input type="text" name="text">
            <button type="submit">Alaaayyyy</button>
        </form>

        <?php
        $alay_tingkat_dewa = [
            'a' => '4',
            'b' => '6',
            'c' => '(',
            'd' => 'D',
            'e' => '3',
            'f' => '|=',
            'g' => '9',
            'h' => '|-|',
            'i' => '!',
            'j' => 'J',
            'k' => '|<',
            'l' => '|_',
            'm' => '|v|',
            'n' => '|\|',
            'o' => '0',
            'p' => 'P',
            'q' => 'Q',
            'r' => '|2',
            's' => '5',
            't' => '7',
            'u' => '|_|',
            'v' => 'V',
            'w' => 'vv',
            'x' => 'X',
            'y' => '\'/',
            'z' => '2'
        ];

        $alay_tingkat_1 = [
            'a' => '4',
            'b' => '8',
            'g' => '9',
            's' => '5',
            'k' => 'x',
            'z' => '2',
            'u' => 'oe',
            't' => '7',
        ];

        if (isset($_POST['text'])) {
            $text = $_POST['text'];
            echo "<div class='result'>";
            echo "Text: " . $text . "<br>";

            // Memeriksa apakah radio button telah dipilih
            if (isset($_POST['level_alay'])) {
                if ($_POST['level_alay'] == 1) {
                    $alay = alay_generator($text, $alay_tingkat_1);
                } elseif ($_POST['level_alay'] == 2) {
                    $alay = alay_generator($text, $alay_tingkat_dewa);
                }

                echo "Alay Version: " . $alay;
            } else {
                // Menampilkan pesan warning jika radio button belum dipilih
                echo "Please select alay level!";
            }

            echo "</div>";
        }

        function alay_generator($text, $level_alay)
        {
            $text = strtolower($text);
            $split = str_split($text);
            $new_text = "";
            foreach ($split as $huruf) {
                if (preg_match("/[a-z]/", $huruf)) {
                    $new_text .= (isset($level_alay[$huruf])) ? $level_alay[$huruf] : $huruf;
                } else {
                    $new_text .= $huruf;
                }
            }
            return $new_text;
        }
        ?>
        <video autoplay loop style="max-width: 100%; height: auto;">
            <source src="0504.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </div>

</body>

</html>