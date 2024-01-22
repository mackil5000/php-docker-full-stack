<?php


declare(strict_types=1);

spl_autoload_register(function ($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once $path;
});



use App\{Account, SocialMedia, Utility, ToasterPremium, AbstractProduct};

$myAccount = new Account("marcus", 300);

$myToaster = new ToasterPremium(3);
$myToaster->toast();
$myAccount?->deposit(30)->deposit(20);
Utility::printArray(([24, 66, 33]));


$connect = mysqli_connect(
    'db', # service name
    'php_docker', # username
    'password', # password
    'php_docker' # db table
);

$table_name = "php_docker_table";

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while ($i = mysqli_fetch_assoc($response)) {
    echo "<p>" . $i['title'] . "</p>";
    echo "<p>" . $i['body'] . "</p>";
    echo "<p>" . $i['date_created'] . "</p>";
    echo "<hr>";
}
