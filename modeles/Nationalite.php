<?php
    class Nationalite{
        /**
         * numero de nationalité
         * @var int
         */
        private $num;
        
        /**
         * libelle de nationalité
         * @var string
         */
        private $libelle;

        /**
         * num nationalite(clé etrangere) relié à num de nationalite
         *
         * @var int
         */
        private $numContinent;  



        
        /**
         * renvoie l'objet continent associé
         *
         * @return Continent
         */
        public function getContinent() : Continent
        {
            return Continent::findById($this->numContinent);
        }

        /**
         * Set the value of numContinent
         *
         * @return  self
         */ 
        public function setContinent(Continent $continent) :self
        {
                $this->numContinent = $continent->getNum();
                return $this;
        }


        /**
         * retourne l'ensemble des Nationalite
         *
         * @return Nationalite[] tab d'objet Nationalite
         */
        public static function findAll(?string $libelle="", ?string $continent="") :array
        {
            $texteReq= "select n.num as 'numero', n.libelle as 'libNation', c.libelle as 'libContinent'  from nationalite n, continent c where n.numContinent=c.num";
            if( $libelle != "") { 
                $texteReq.= " and n.libelle like '%" .$libelle."%'";
            }
            if( $continent != "Tous") {
                 $texteReq.= " and c.num =" .$continent;
            }
            $texteReq.=" order by n.libelle;";

            $req=MonPdo::getInstance()->prepare($texteReq);
            $req->setFetchMode(PDO::FETCH_OBJ);
            $req->execute();
            $lesResultats=$req->fetchAll();
            return $lesResultats;
        }

        /**
         * Trouve une nationalite par son nom
         *
         * @param integer $id numero du nationalite
         * @return Nationalite objet nationalite trouvé
         */
        public static function findById(int $id) :Nationalite 
        {
            $req=MonPdo::getInstance()->prepare("Select * from nationalite where num= :id");
            $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Nationalite');
            $req->bindParam(':id',$id);
            $req->execute();
            $lesResultats=$req->fetch();
            return $lesResultats;
        }


        /**
         * Ajout d'une nationalite
         *
         * @param Nationalite $nationalite nationalite à ajouter
         * @return integer resultat (1 si l'operation a reussi, 0 sinon)
         */
        public static function add(Nationalite $nationalite): int
        {
            $req=MonPdo::getInstance()->prepare("insert into nationalite(libelle,numContinent) values(:libelle, :numContinent)");
            $req->bindParam(':libelle',$nationalite->getLibelle());
            $req->bindParam(':numContinent',$nationalite->numContinent);
            $nb=$req->execute();
            return $nb;
        }



        /**
         * met a jour une nationalite
         *
         * @param Nationalite $nationalite
         * @return integer
         */
        public static function update(Nationalite $nationalite): int
        {
            $req=MonPdo::getInstance()->prepare("update nationalite set libelle= :libelle, numContinent= :numContinent where num= :id");
            $numid=$nationalite->getNum();
            $libelle=$nationalite->getLibelle();
            $numc=$nationalite->numContinent;

            $req->bindParam(':id',$numid);
            $req->bindParam(':libelle',$libelle);
            $req->bindParam(':numContinent',$numc);
            $nb=$req->execute();
            return $nb;
        }


    /**
     * supprimer une nationalité
     *
     * @param Nationalite $nationalite
     * @return integer
     */
        public static function delete(Nationalite $nationalite) :int
        {
            $req=MonPdo::getInstance()->prepare("delete from nationalite where num= :id");
            $req->bindParam(':id',$nationalite->getNum());
            $nb=$req->execute();
            return $nb;
        }





        /**
         * Set numero de nationalité
         *
         * @param  int  $num  numero de nationalité
         *
         * @return  self
         */ 
        public function setNum(int $num)
        {
                $this->num = $num;

                return $this;
        }
        /**
         * Get the value of num
         */ 
        public function getNum() : int
        {
            return $this->num; //probleme
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


    }