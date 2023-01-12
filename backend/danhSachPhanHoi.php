<?php require_once 'config.php';


$output = '';
$query = "SELECT * FROM feedback";
$result = mysqli_query($conn, $query);
$output .= '<tr>
                <th>id</th>
                <th>Type</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Description</th>
                <th>Image</th>
                <th>Created_at</th>
            </tr>';

    //in ra data từng col
        while ($row = mysqli_fetch_row($result)){   

        $output .= '<tr>
                        <td>'.$row[0].'</td>
                        <td>'.$row[1].'</td>
                        <td>'.$row[2].'</td>
                        <td>'.$row[3].'</td>
                        <td>'.$row[4].'</td>
                        <td>'.$row[5].'</td>
                        <td><a href="'.$row[6].'" target="blank">'.$row[6].'</a></td>
                        <td>'.$row[7].'</td>

                    </tr>';     
        }
        $output .= "</table>";
        exit($output);