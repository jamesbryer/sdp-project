<?php

class GetComments extends dbh
{

    protected function getComments($user_id)
    {
        $stmt = $this->connect()->prepare("SELECT * FROM comments WHERE users_id = ?;");

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
        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION["comments"] = $comments;
        $stmt = null;
    }
}
