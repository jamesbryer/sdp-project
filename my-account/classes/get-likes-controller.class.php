<?php

class GetLikesController extends GetLikes
{

    private $user_id;


    public function __construct($user_id)
    {
        $this->user_id = $user_id;
    }

    public function returnLikes()
    {
        $this->getLikes($this->user_id);
    }
}
