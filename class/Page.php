<?php

// class Page 
// {
//     private $titre;
//     private $contenu;
//     private $dateDeprivateation;
//     private $url;

//     private function __construct($titre, $contenu, $dateDeprivateation, $url)
//     {
//         $this->titre = $titre;
//         $this->contenu = $contenu;
//         $this->dateDeprivateation = $dateDeprivateation;
//         $this->url = $url;

        
//     }  
// }

class Page 
{
    private $titre = '';
    private $contenu = '';
    private $dateDePublication = '';
    private $url = '';

   private function __construct()
   {
       echo "<ul>";
       echo "<li>Titre de la page : $this->titre</li>";
       echo "<li>Contenu : $this->contenu</li>";
       echo "<li>Date de Publication : $this->dateDePublication</li>";
       echo "<li>Url : $this->url</li>";
       echo "</ul>";
   } 
}