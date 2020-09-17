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

    public function addData()
    {
        if (isset($_POST['submit'])) {
            return $this->request->postFormData(
                '/photos',
                [
                    'title' => $_POST['title'],
                    'body' => $_POST['body'],
                    'userId' => $_POST['userId'],
                ],
            );
        } else {
            return null;
        }
    }

    public function editData()
    {
        if (isset($_POST['submit'])) {
            return $this->request->put(
                '/photos' . '/' . $_POST['id'],
                [
                    'id' => $_POST['id'],
                    'title' => $_POST['title'],
                    'body' => $_POST['body'],
                    'userId' => $_POST['userId'],
                ],
            );
        } else {
            return null;
        }
    }
}
