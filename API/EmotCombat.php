<?php 

class Lutador{

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

                public function __construct($no,
                                            $na,
                                            $id,
                                            $al,
                                            $pe,
                                            $vi,
                                            $de,
                                            $em)
                                            {
                                                $this -> nome = $no;
                                                $this -> nacionalidade = $na;
                                                $this -> idade = $id;
                                                $this -> altura = $al;
                                                $this -> peso = $pe;
                                                $this -> vitorias = $vi;
                                                $this -> derrotas = $de;
                                                $this -> empates  = $em;
                                                
                                            }

        public function apresentar()
        {
                echo "Nome: " . $this -> getNome().'<br/>';
                echo 'Origem: '. $this -> getNacionalidade(). '<br/>';
                echo 'Idade: '. $this -> getIdade(). '<br/>';
                echo 'Altura: '. $this -> getAltura(). '<br/>';
                echo 'Peso: '. $this -> getPeso(). '<br/>';
                echo 'Vitórias: '. $this->getVitorias(). '<br/>';
                echo 'Derrotas: '. $this -> getDerrotas(). '<br/>';
                echo 'Empates: '. $this -> getEmpates(). '<br/>';
        }

        public function status()
        {
            echo 'Nome:'. $this -> getNome();
            echo 'É um '. $this -> getCategoria();
            echo 'Está com '. $this-> getVitorias() . 'Vitórias,';
            echo 'Está com '. $this -> getEmpates() . 'Empates';
            echo 'E está com '. $this ->getDerrotas(). 'Derrotas';
        }
        public function ganharLuta()
        {
            $this -> setVitorias($this -> getVitorias() + 1);
        }
        public function perderLuta()
        {
            $this -> setDerrotas($this -> getDerrotas() + 1) ;
        }
        public function empatarLuta()
        {
            $this -> setEmpates($this -> getEmpates()+1);
        }

                public function getNome()
                {
                    return $this->nome;
                }

                public function setNome($nome)
                {
                    $this->nome = $nome;

                    return $this;
                }

                public function getNacionalidade()
                {
                    return $this->nacionalidade;
                }

                public function setNacionalidade($nacionalidade)
                {
                    $this->nacionalidade = $nacionalidade;

                    return $this;
                }

                public function getIdade()
                {
                    return $this->idade;
                }


                public function setIdade($idade)
                {
                    $this->idade = $idade;

                    return $this;
                }


                public function getAltura()
                {
                    return $this->altura;
                }

            
                public function setAltura($altura)
                {
                    $this->altura = $altura;

                    return $this;
                }

                public function getPeso()
                {
                    return $this->peso;
                }

            
                public function setPeso($peso)
                {
                    $this->peso == $peso;
                    $this->setCategoria();

                    return $this;
                }

                public function getCategoria()
                {
                    return $this->categoria;
                }

            
                public function setCategoria()
                {
                    $this->categoria;

                        if($this -> peso <= 53) {
                            echo 'inválido';
                        }
                        elseif ($this -> peso <= 70.3){
                            echo 'peso leve';
                        }
                        elseif ($this -> peso <= 83.3){
                            echo 'peso médio';  
                        }
                        elseif($this -> peso <= 120){
                            echo 'peso pesado';
                        }
                        else 'Peso fora do range';

                    return $this;
                }

                public function getVitorias()
                {
                    return $this->vitorias;
                }

                public function setVitorias($vitorias)
                {
                    $this->vitorias = $vitorias;

                    return $this;
                }

                public function getDerrotas()
                {
                    return $this->derrotas;
                }

                public function setDerrotas($derrotas)
                {
                    $this->derrotas = $derrotas;

                    return $this;
                }

                public function getEmpates()
                {
                    return $this->empates;
                }

                public function setEmpates($empates)
                {
                    $this->empates = $empates;

                    return $this;
                }
}           