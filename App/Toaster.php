<?

namespace App;

class Toaster extends AbstractProduct {
    protected int $slots;

    public function __construct() {
        $this->slots = 2;
        $this->turnOn();
    }

    public function setup() {
    }

    public function toast() {
        echo "Toasting bread";
    }
}
