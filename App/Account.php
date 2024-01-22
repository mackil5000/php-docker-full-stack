<?

declare(strict_types=1);

namespace App;

use DateTime as DT;

new DT();

class Account {

    public const INTEREST_RATE = 2;
    public static int $count = 0;

    public SocialMedia $socialMedia;

    public function __construct(
        public string $name,
        private float $balance
    ) {
        $this->socialMedia = new SocialMedia();
        self::$count++;
    }

    public function deposit(float $amount) {
        $this->balance += $amount;
        return $this;
    }

    public function getBalance() {
        return "$" . $this->balance;
    }

    public function sendEmail() {
        print("Email sent");
    }

    public function setBalance(float $newBalance) {
        if ($newBalance < 0) {
            return;
        }

        $this->balance = $newBalance;
        $this->sendEmail();
    }
}
