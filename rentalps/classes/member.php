<?php
class Member {
    public $tipe;
    public $diskonPersen;
    public $cashback;

    public function __construct($tipe) {
        $this->tipe = $tipe;

        switch ($tipe) {
            case 'Platinum':
                $this->diskonPersen = 20;
                $this->cashback = 5000;
                break;
            case 'Gold':
                $this->diskonPersen = 10;
                $this->cashback = 2000;
                break;
            default:
                $this->diskonPersen = 0;
                $this->cashback = 0;
        }
    }
}
?>
