    <!-- <table border="1">
        <tr>
            <th>S.N.</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Biswa</td>
            <td>biswadas@gamil.com</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Sham</td>
            <td>sham@gamil.com</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Rohan</td>
            <td>rohan@gamil.com</td>
        </tr>
    </table> -->

    <?php
    $users = [
        [1, "biswa", "biswa@gmail.com"],
        [2, "rohan", "rohan@gmail.com"],
        [3, "raj", "raj@gmail.com"],
        [4, "sham", "sham@gmail.com"],
        [5, "kishan", "kishan@gmail.com"],
    ];
    echo "<table border = 1>";
    for($i = 0; $i < count($users); $i++){
        echo "<tr>";
        for($j = 0; $j < count($users[$i]); $j++){
            echo "<td>";
            echo $users[$i][$j];
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
