<?

declare(strict_types=1);

spl_autoload_register(function ($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once $path;
});



use App\{Account, SocialMedia, Utility, ToasterPremium};

$myAccount = new Account("marcus", 300);

$myToaster = new ToasterPremium(3);
$myToaster->toast();
$myAccount?->deposit(30)->deposit(20);
Utility::printArray(([24, 66, 33]));
