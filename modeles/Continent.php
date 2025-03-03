<?php

use PSpell\Config;

    class Continent{
        /**
         * numero du continent
         * @var int
         */
        private $num;

        /**
         * libelle du continent
         * @var string
         */
        private $libelle;



        /**
         * Get the value of num
         */ 
        public function getNum()
        {
            return $this->num;
        }

        /**
         * lit le libellé
         *
         * @return string
         */
        public function getLibelle() : string
        {
            return $this->libelle;
        }

        /**
         * ecrit ds le libelle
         *
         * @param string $libelle
         * @return self
         */
        public function setLibelle(string $libelle) : self
        {
            $this->libelle = $libelle;

            return $this;
        }


        /**
         * retourne l'ensemble des continents
         *
         * @return Continent[] tab d'objet continent
         */
        public static function findAll() :array
        {
            $req=MonPdo::getInstance()->prepare("Select * from continent");
            $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Continent');
            $req->execute();
            $lesResultats=$req->fetchAll();
            return $lesResultats;
        }

        /**
         * Trouve un continent par son nom
         *
         * @param integer $id numero du continent
         * @return Continent objet continent trouvé
         */
        public static function findById(int $id) :Continent
        {
            $req=MonPdo::getInstance()->prepare("Select * from continent where num= :id");
            $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Continent');
            $req->bindParam(':id',$id);
            $req->execute();
            $leResultat=$req->fetch();
            return $leResultat;
        }


        /**
         * Ajout d'un continent
         *
         * @param Continent $continent continent à ajouter
         * @return integer resultat (1 si l'operation a reussi, 0 sinon)
         */
        public static function add(Continent $continent): int
        {
            $req=MonPdo::getInstance()->prepare("insert into continent(libelle) values(:libelle)");
            $libelle=$continent->getLibelle();
            $req->bindParam(':libelle', $libelle);
            $nb=$req->execute();
            return $nb;
        }



        /**
         * modifier un continent
         *
         * @param Continent $continent continent à modifier
         * @return integer resultat (1 si l'operation a reussi, 0 sinon)
         */
        public static function update(Continent $continent): int
        {
            $req=MonPdo::getInstance()->prepare("update continent set libelle= :libelle where num= :id");
            $num=$continent->getNum();
            $libelle=$continent->getLibelle();
            $req->bindParam(':id',$num);
            $req->bindParam(':libelle',$libelle);
            $nb=$req->execute();
            return $nb;
        }


        /**
         * Supprimer un continent
         *
         * @param Continent $continent
         * @return integer
         */
        public static function delete(Continent $continent) :int
        {
            $req=MonPdo::getInstance()->prepare("delete from continent where num= :id");
            $num=$continent->getNum();
            $req->bindParam(':id',$num);
            $nb=$req->execute();
            return $nb;
        }
        

            /**
             * Set numero du continent
             *@param int $num numero du continent
             * @return  self
             */ 
            public function setNum(int $num) :self
            {
                        $this->num = $num;

                        return $this;
            }
    }