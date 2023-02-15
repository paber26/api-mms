<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $db;
    protected $jobs_details;

    public function __construct()
    {
        $this->db = db_connect();
        $this->jobs_details = $this->db->table('jobs_details');
    }


    public function index()
    {
        // var_dump($this->db);

        $jobs_details = $this->jobs_details->like('created_date', '2022-04-%')->get()->getResultArray();

        return json_encode($jobs_details);
        return $this->jobs_details;

        exit;



        return view('welcome_message');
    }
}
