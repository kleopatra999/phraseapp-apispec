<?php
require_once('swagger/examples/php/SwaggerClient-php/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', $_SERVER["PHRASEAPP_ACCESS_TOKEN"]);
$config->setApiKeyPrefix('Authorization', "token");

$api_instance = new Swagger\Client\Api\DefaultApi(null, $config);

try {
  $projects = $api_instance->projectsGet();
  foreach ($projects as $project) {
    printf("%s: %s\n", $project->getId(), $project->getName());
  }

} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->accountsAccountIdGlossariesGet: ', $e->getMessage(), PHP_EOL;
}
?>
