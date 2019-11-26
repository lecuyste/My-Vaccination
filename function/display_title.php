<?php
function display_title() : string {
   $titre = "NFacto Lab | ";
   $page = isset($_GET['page']) ? $_GET['page'] : "about";
   $titre .= ucfirst($page);
   return $titre;
}