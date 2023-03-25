<?php

class GetLikes extends Dbh
{
    protected function getLikes($user_id)
    {
        $stmt = $this->connect()->prepare("SELECT * FROM likes WHERE users_id = ?;");

        // check if stmt failed
        if (!$stmt->execute(array($user_id))) {
            $stmt = null;
            header("location: ../my-account/index.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            $array = array();
            return $array;
        }
        $likes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION["likes"] = $likes;
        $stmt = null;
    }
}
