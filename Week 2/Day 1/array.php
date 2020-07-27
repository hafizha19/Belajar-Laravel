<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Soal 1 </h3>";
    /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
    $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"); // Lengkapi di sini
    $adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray");
    echo "<h3> Soal 2</h3>";
    /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " . count($kids); // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    for ($i = 0; $i < count($kids); $i++) {
        echo "<li> $kids[$i] </li>";
    }
    // Lanjutkan

    echo "</ol>";

    echo "Total Adults: " . count($adults); // Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    for ($i = 0; $i < count($adults); $i++) {
        echo "<li> $adults[$i] </li>";
    }
    // Lanjutkan

    echo "</ol>";

    /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
        $bio = array(
            array("Will Byers", 12, "Will The Wise", "Alive"),
            array("Mike Wheeler", 12, "Dungeon Master", "Alive"),
            array("Jim Hooper", 43, "Chief Hooper", "Deceased"),
            array("Eleven", 12, "El", "Alive")
        );

        for($i=0; $i<count($bio); $i++){
            echo "<br>";
            for ($j=0; $j < count($bio[$i]); $j++) { 
                if ($j==0){
                    echo "Name: ".$bio[$i][$j]. "<br>";
                } elseif ($j==1) {
                    echo "Age: ".$bio[$i][$j]. "<br>";
                } elseif ($j==2) {
                    echo "Aliases: ".$bio[$i][$j]. "<br>";
                } else {
                    echo "Status: ".$bio[$i][$j]. "<br>";
                }
            }
        }

    ?>
</body>

</html>