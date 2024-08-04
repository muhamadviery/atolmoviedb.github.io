<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Film extends Controller
{
    private $api_key = 'b3c0943f99985e1589662b2e5aea2200'; // API

    public function index()
    {
        return view('film_list');
    }

    public function search()
    {
        $query = $this->request->getGet('query');
        $url = 'https://api.themoviedb.org/3/search/movie?api_key=' . $this->api_key . '&query=' . urlencode($query);
        $response = file_get_contents($url);
        $data['results'] = json_decode($response, true)['results'];
        return view('film_list', $data);
    }

    public function detail($id)
    {
        $url = 'https://api.themoviedb.org/3/movie/' . $id . '?api_key=' . $this->api_key . '&append_to_response=credits';
        $response = file_get_contents($url);
        $data['detail'] = json_decode($response, true);
        return view('film_detail', $data);
    }

    public function actor($id)
    {
        $url = 'https://api.themoviedb.org/3/person/' . $id . '?api_key=' . $this->api_key;
        $response = file_get_contents($url);
        $data['actor'] = json_decode($response, true);
        return view('actor_detail', $data);
    }
}
