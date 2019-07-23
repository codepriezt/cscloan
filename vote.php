<?php

include('tconnect.php');


if(isset($_POST["vote_option"]))
{
    $query = "
    INSERT into tbl_users
    (vote_candidates) VALUES (:vote_candidates)
    ";

    $data = array(
        ':vote_candidates' => $_POST["vote_option"]
    );
    $statement = $db->prepare($query);
    $statement->execute($data);
}

?>