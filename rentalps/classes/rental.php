<?php
class Rental {
    public $nama;
    public $ps;
    public $lama;
    public $member;

    public function __construct($nama, PS $ps, $lama, Member $member) {
        $this->nama = $nama;
        $this->ps = $ps;
        $this->lama = $lama;
        $this->member = $member;
    }

    public function hitungTotal() {
        $hargaDasar = $this->ps->hargaPerJam * $this->lama;
        $diskon = $hargaDasar * ($this->member->diskonPersen / 100);
        $total = $hargaDasar - $diskon - $this->member->cashback;
        return [
            'hargaDasar' => $hargaDasar,
            'diskon' => $diskon,
            'cashback' => $this->member->cashback,
            'totalBayar' => max($total, 0) // mencegah minus
        ];
    }
}
?>
