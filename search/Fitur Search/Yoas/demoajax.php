<?php
  if(!isset($_GET['query'])){
    exit();
  }
  $name = strtoupper($_GET['query']);
  if($name === '') {
    exit();
  }
 
  $names = array('Simon Ardy Wicaksana', 'Leonardus Ramses Masardi', 'I Gusti Ngurah Ega A L', 'Rama Prayuda Pribadi', 'Cornelius Jaraan', 'Ester Intansari Papoiwo', 'Antonius Dimas Pradana', 'Joshua Harefa', 'Thalia Maria Camilo', 'Agustinus Rendi Walewowan', 'Oktriana Sidik', 'Fenny Meinawati', 'Gabriella Amelia Parsetyo', 'Steven Edgar', 'Ragil Yoga Irawan', 'Kevin Kent', 'Silvanus Satno Nugraha', 'Reiner Sandrico Anglia', 'Aristakhus Haposan Sihotang', 'Andika Setyabudhi', 'Kevin Valiant', 'Hutrima Gusti Cahyadi', 'Zenas Dwigrasia Febrian', 'Fransiska Litmantoro Hidayat', 'Michell Bernardi Susanto', 'Dio Pramantha', 'Katon Gilang Bagaskara', 'Timothy Dicky Herlambang', 'Gamalael Wahyu Cakraningrat', 'Yosafat Randy Nugrahatama J.', 'Albertus Istora Pahala', 'Immanuel Roni Kristian Handoko', 'Kevin Giovanni', 'Ryan Adityawara', 'Mariaty Octavia Antarani', 'Ronaldo Edwardus Christnawan', 'A. Medsa W. P. Bangun', 'Julius Calvin Hary', 'Daniel Cientifica', 'Joao Pires Da Cruz X', 'Dariel Lambert Wahyudiono', 'Marcellinus Julian Finlando', 'Debora Syebat Nazir', 'Vincent Fabrian', 'Emanuel Norman Putera Wardhana', 'Titus Rangga Widi Pamungkas', 'Yudhistira Audri Pranata', 'Cb.yudi Puspa Irawan');
  foreach($names as $n){
    $pos = strpos(strtoupper($n), $name);
    if($pos !== false) {
      echo("$n<br>");
    }
  }