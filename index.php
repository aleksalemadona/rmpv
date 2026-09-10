<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="description" content="Apraksts">
    <meta name="keyword" content="test demo">
</head>
<body>
    <h1>Lielais virsraksts</h1>
    <?php
    $headings = [1,2,3,4,5];
    foreach ($headings as $heading){
        echo "<h". $heading .">Heading " . $heading . "</h". $heading .">";
    }
    ?>
    <div>ABC</div>
    <p>Lorem ipsum dolor sit amet.</p>

    <?php 
    $people = array (
        array("Aleksejs", "Aleksejevs", 41),
        array("Alise", "Aleksejeva", 7),
        array("Anete", "Aleksejeva", 6),
    );
    ?>
    <table>
        <thead>
            <tr>
                <th>Vārds</th>
                <th>Uzvārds</th>
                <th>vecums</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($people as $person){
                echo "<tr>";
                    foreach ($person as $person_data){
                        echo "<td>" . $person_data . "</td>";
                    }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <ul>
        <?php
            foreach ($people as $person){
                ?>
                <li><?php echo $person[0];?>
                <?php
            }
        ?>
    </ul>

    <a href="https://aleksale.lv"><b>Press here for <i>more</u></b></a>
    <script>

    </script>
</body>
</html>