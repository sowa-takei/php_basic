<?php

namespace Battle;

class Battle
{
    private $first;
    private $second;

    public function __construct($me, $enemy)
    {
        $this -> first  = $me    -> getChoice();
        $this -> second = $enemy -> getChoice();
    }

    private function judge()
    {
        if ($this -> first == $this -> second) {
            return '引き分け';
        }

        if ($this -> first == 'グー' && $this -> second == 'チョキ') {
            return '勝ち';
        }

        if ($this -> first == 'グー' && $this -> second == 'パー') {
            return '負け';
        }

        if ($this -> first == 'チョキ' && $this -> second == 'グー') {
            return '負け';
        }

        if ($this -> first == 'チョキ' && $this -> second == 'パー') {
            return '勝ち';
        }

        if ($this -> first == 'パー' && $this -> second == 'グー') {
            return '勝ち';
        }

        if ($this -> first == 'パー' && $this -> second == 'チョキ') {
            return '負け';
        }
    }

    private function countVictories()
    {
        if ($this -> judge() == '勝ち') {
        }
    }

    public function getVitories()
    {
        return $_SESSION['result'];
    }

    public function showResult()
    {
        return $this -> judge();
    }
}
