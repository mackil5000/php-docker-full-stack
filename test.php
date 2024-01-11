<?

declare(strict_types=1);

spl_autoload_register(function ($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once $path;
});



use App\{Account, SocialMedia};

$myAccount = new Account("marcus", 300);


$myAccount?->deposit(30)->deposit(20);
var_dump($myAccount::$count);
