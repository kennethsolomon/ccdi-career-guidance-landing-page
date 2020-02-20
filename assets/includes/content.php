<?php
include_once('./assets/includes/connection.php');

$sql = "SELECT * FROM content";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $contentId = $row["contentId"];
        $userId = $row["userId"];
        $author = $row["author"];
        $title = $row["title"];
        $content = $row["content"];
        $date = $row["date"];

        echo '
            <div class="col-md-4">
                <div class="card card-member">
                    <div class="content">
                        <div class="avatar avatar-danger">
                            <img alt="..." class="img-circle" src="assets/img/faces/face_1.jpg" />
                        </div>
                        <div class="description">
                            <h3 class="title">' . $title . '</h3>
                            <p class="small-text">by ' . $author . '</p>
                            <p class="description">' . $content . '</p>
                        </div>
                    </div>
                </div>
            </div>
            ';
    }
} else {
    echo 'No Result';
}
mysqli_close($conn);
