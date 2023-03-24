<?php

class GetCommentsController extends GetComments
{

    private $user_id;



    public function __construct($user_id)
    {
        $this->user_id = $user_id;
    }

    public function returnComments()
    {
        $this->getComments($this->user_id);
    }
}
