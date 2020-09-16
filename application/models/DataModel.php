<?php

class DataModel extends CI_Model
{
    public function showData()
    {
        if (isset($_POST['submit']) && $_POST['keyword'] != "") {
            return $this->request->get(
                '/photos',
                ['albumId' => $_POST['keyword']],
            );
        } else {
            return $this->request->get(
                '/photos',
            );
        }
    }
}
