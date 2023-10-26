<?php

class About extends Controller {
  public function index($nama = "Yoga Prawira Kusuma", $pekerjaan="Network Engineer", $umur=20) {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $data['judul'] = 'About Me';
    $this->views('templates/header', $data);
    $this->views('about/index', $data);
    $this->views('templates/footer');
  }
  public function page() {
    $this->views('templates/header');
    $this->views('about/page');
    $this->views('templates/footer');
    // echo "about/page";
  }
}