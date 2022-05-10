<?php


class Apple {
    private static $instance;
    private string $ceo;

    private function __construct() {}

    public static function getInstance(): Apple {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone() {}

    private function __wakeup() {}

    /**
     * @throws Exception if CEO is empty
     */
    public function setCeo(string $ceo): void {
        if (empty($ceo)) {
            throw new Exception("The CEO cannot be empty");
        }
        $this->ceo = $ceo;
    }

    public function getCeo(): string {
        return $this->ceo;
    }
}


$obj_1 = Apple::getInstance();

try {
    $obj_1->setCeo("Tim Cook");
} catch (Exception $e) {
    echo $e->getMessage(), "<br>";
}

$obj_2 = Apple::getInstance();

print_r($obj_2);
