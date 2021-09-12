<?php
require_once "../Model/LoginCredentials.php";
session_start();
$conn = createconn();
$term = $_REQUEST["term"];
$class_type = $_REQUEST["class_type"];
if (isset($_REQUEST["term"]) && isset($_REQUEST["class_type"])) {
    $conn = createconn();
    $queryByEngName = "select * from stud_info where stud_info.eng_name like ?";
    $stmt = $conn->prepare($queryByEngName);
    $stmt->bind_param("s", $stmt_stud_eng);
    $stmt_stud_eng = $_REQUEST["term"] . "%";
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows > 0) {
        while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
            $stud_id = $row['id'];
            $stud_eng_name = $row["eng_name"];
            echo <<< END
            <div class="student-adding-row share-box-fully-select">
                    <input type="checkbox" class="class-adding-checkbox class-adding-img" name="student-select" value="$stud_id" style="">
                    <div class="class-adding-text str">
                        $stud_eng_name
                    </div>
                    <div class="class-adding-text str">
                        $stud_id
                    </div>
                </div>  
END;
        }
    }
    $queryByChiName = "select * from stud_info where stud_info.chi_name like ?";
    $stmt = $conn->prepare($queryByChiName);
    $stmt->bind_param("s", $stmt_stud_chi);
    $stmt_stud_chi = $_REQUEST["term"] . "%";
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows > 0) {
        while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
            $stud_id = $row['id'];
            $stud_chi_name = $row["chi_name"];
            echo <<< END
            <div class="student-adding-row share-box-fully-select">
                    <input type="checkbox" class="class-adding-checkbox class-adding-img" name="student-select" value="$stud_id" style="">
                    <div class="class-adding-text str">
                        $stud_chi_name
                    </div>
                    <div class="class-adding-text str">
                        $stud_id
                    </div>
                </div>  
END;
        }
    }

    $queryByID = "select * from stud_info where stud_info.id=?";
    $stmt = $conn->prepare($queryByID);
    $stmt->bind_param("i", $stmt_stud_id);
    $stmt_stud_id = $_REQUEST["term"];
    $stmt->execute();
    $res = $stmt->get_result();
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
            $stud_id = $row['id'];
            $stud_eng_name = $row["eng_name"];
            echo <<< END
            <div class="student-adding-row share-box-fully-select">
                    <input type="checkbox" class="class-adding-checkbox class-adding-img" name="student-select" value="$stud_id" style="">
                    <div class="class-adding-text str">
                        $stud_eng_name
                    </div>
                </div>  
END;
        }
    }
    $stmt->close();
}
$conn->close();
