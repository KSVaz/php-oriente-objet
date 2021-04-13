<?php

class Article 
{
    private $titre;
    private $contenu;
    private $dateDePublication;


    //ici, le __construct est utile lorsque l'on veut appeler une méthode sans get et set
    public function __construct($titre = NULL, $contenu = NULL, $dateDePublication = NULL) //in indique à PHP qu'il va y avoir 3 paramètres
    {
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->dateDePublication = $dateDePublication;
    }

    public function afficherArticle()
    {

        setlocale(LC_TIME, ['fr','fra','fr_FR']);          
        date_default_timezone_set('Europe/Paris');         
        //utf8_encode(strftime('%A %d %B %Y'));
        $date = datetime::createFromFormat('Y-m-d', $this->dateDePublication);

        echo "<article>";
        echo "<h2><span>// </span>$this->titre</h2>";
        echo "<p>$this->contenu.</p>";
        echo "<p>Publié le <time datetime=\"$this->dateDePublication\">".$date->format('l j F Y')."</time></p>";
        echo "</article>";
    }

     /**
     * Donne la valeur de dateDePublication
     */
    public function getDateDePublication()
    {
        return $this->dateDePublication;
    }

    /**
     * Définie la valeur de dateDePublication
     *
     * @return  self
     */
    public function setDateDePublication($dateDePublication)
    {
        $this->dateDePublication = $dateDePublication;

        return $this;
    }

    /**
     * Get the value of contenu
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     *
     * @return  self
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get the value of titre
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

   
}