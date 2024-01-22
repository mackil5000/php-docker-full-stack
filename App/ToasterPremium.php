<?

namespace App;

class ToasterPremium extends Toaster {
    // protected properties can be changed by child classes as
    // opposed by private properties
    protected int $slots = 4;
    private int $duration;

    public function __construct(int $newDuration) {
        parent::__construct();
        $this->slots = 4;
        $this->duration = $newDuration;
    }



    public function toast() {

        // call the default parent method: 
        parent::toast();
        echo " for {$this->duration} minutes";
    }
}
