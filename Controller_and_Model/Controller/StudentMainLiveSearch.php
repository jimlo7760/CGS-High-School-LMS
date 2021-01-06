<?php
require_once "../Model/LoginCredentials.php";
session_start();
$conn = createconn();
$term = $_REQUEST["term"];
if (isset($_REQUEST["term"])) {
    $query = "select * from subject where subj_name like ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $stmt_subj_name);
    $stmt_subj_name = $_REQUEST["term"] . "%";
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $subj_id = $row["id"];
            $subj_name = $row["subj_name"];
            echo <<< END
                <ul class="result-box-row">
                    <li class="result-box-sort" value="class">
                        Class
                    </li>
                    <li class="result-box-name">
                        $subj_name
                    </li>
                    <li class="result-box-year">
                        2019 - 2020
                    </li>
                    <form method="get" action="student-class.php">
                        <input type="text" name="subj_id" value="$subj_id" style="display:none">
                    </form>
                </ul>
                
END;
        }
    } else {
        echo "<div class=\"result-box-empty\">No result found containing $term</div>";
    }
    $stmt->close();
}
$conn->close();