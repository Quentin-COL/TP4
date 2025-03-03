<?php

use PSpell\Config;

    class Auteur{

        private $num;
        private $nom;
        private $prenom;
        private $numNationalite;
        public static function findAll() :array
        {
            $req=MonPdo::getInstance()->prepare("Select num, nom, prenom from auteur");
            $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Auteur');
            $req->execute();
            $lesResultats=$req->fetchAll();
            return $lesResultats;
        }
        static function findById(int $id) :Auteur
        {
            $req=MonPdo::getInstance()->prepare("Select * from auteur where num= :id");
            $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Auteur');
            $req->bindParam(':id',$id);
            $req->execute();
            $leResultat=$req->fetch();
            return $leResultat;
        }
        public static function add(Auteur $auteur): int
        {
            $req=MonPdo::getInstance()->prepare("insert into auteur(nom,prenom,nationalite) values(:nom,:prenom,:nationalite)");
            $nom=$auteur->getNom();
            $prenom=$auteur->getPrenom();
            $nationalite=$auteur->getNationalite();
            $req->bindParam(':nom',$nom);
            $req->bindParam(':prenom', $prenom);
            $req->bindParam(':nationalite', $nationalite);
            $nb=$req->execute();
            return $nb;
        }
        public static function update(Auteur $auteur): int
        {
            $req=MonPdo::getInstance()->prepare("update auteur set(nom=:nom, prenom=:prenom, nationalite=:nationalite) where num= :id");
            $num=$auteur->getNum();
            $nom=$auteur->getNom();
            $prenom=$auteur->getPrenom();
            $nationalite=$auteur->getNationalite();

            $req->bindParam(':id',$num);
            $req->bindParam(':nom',$nom);
            $req->bindParam(':prenom',$prenom);
            $req->bindParam(':nationalite',$nationalite);
            $nb=$req->execute();
            return $nb;
        }
        public static function delete(Auteur $auteur) :int
        {
            $req=MonPdo::getInstance()->prepare("delete from auteur where num= :id");
            $num=$auteur->getNum();
            $req->bindParam(':id',$num);
            $nb=$req->execute();
            return $nb;
        }
        public function getNum()
        {
                return $this->num;
        public function setNum(int $num)
        {
                $this->num = $num;

                return $this;
        }
        public function getNom()
        {
                return $this->nom;
        }
        public function setNom(string $nom)
        {
                $this->nom = $nom;

                return $this;
        }
        public function getPrenom()
        {
                return $this->prenom;
        }
        public function setPrenom(string $prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        public function getNationalite(): Nationalite
        {       
                return Nationalite::findById($this->numNationalite); 
        }
        public function setNationalite(Nationalite $nationalite) :self
        {
                $this->numNationalite = $nationalite->getNum();
                return $this;
        }


        
    }