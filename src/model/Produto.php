<?php
abstract class Produto {
    private $status = false;

    public function setStatus($status) : void{
        $this->status = $status;
    }
}
?>
