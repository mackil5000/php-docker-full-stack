<?

namespace App;

abstract class AbstractProduct {
    public function turnOn() {
        echo "Turning on product";
    }
    abstract public function setup();
}
