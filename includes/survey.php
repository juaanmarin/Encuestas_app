<?php
    include_once("db.php");

    class Survey extends DB{

        private $totalVotes;
        private $optionSelected;

        public function setOptionSelected($option){
            $this->optionSelected = $option;
        }

        public function getOptionSelected(){
            return $this->optionSelected;
        }

        public function vote(){
            //se utiliza la funcion prepare para manejar los valores que se le asignaran a la consulta y evitar sql inyection
            $query = $this->connect()->prepare('UPDATE languages SET votes = votes + 1 WHERE option = :option');
            $query->execute(['option' => $this->getOptionSelected()]);
        }

        public function showResult(){
            //se utiliza la funcion query por que no se requiere validar ningun parametro
            return $this->connect()->query('SELECT * FROM languages');
        }

        public function getTotalVotes(){
            $query = $this->connect()->query('SELECT SUM(votes) AS total_votes FROM languages');
            $this->totalVotes = $query->fetch(PDO::FETCH_OBJ)->total_votes;
            return $this->totalVotes;
        }

        public function getPercentageVotes($votes){
            return round(($votes / $this->totalVotes) * 100, 0);
        }
    }

?>