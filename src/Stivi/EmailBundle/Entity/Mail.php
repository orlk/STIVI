<?php



namespace Stivi\EmailBundle\Entity;


/**
* Mail
*/
class Mail
{
/**
* @var integer
*/
private $id;


/**
* Get id
*
* @return integer
*/
private $nom;
private $prenom;
private $from;
private $text;
private $to;
private $body;

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }






function getNom() {
return $this->nom;
}
function getFrom() {
return $this->from;
}

function setFrom($from) {
$this->from = $from;
}

function getPrenom() {
return $this->prenom;
}

function getText() {
return $this->text;
}

function setNom($nom) {
$this->nom = $nom;
}

function setPrenom($prenom) {
$this->prenom = $prenom;
}

function setText($text) {
$this->text = $text;
}


public function getId()
{
return $this->id;
}

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }




}
