# phraseapp-apispec
PhraseApp API Spec

## Swagger Examples

All examples rely on having a valid PhraseApp API token in your ENV.

```bash
$ export PHRASEAPP_ACCESS_TOKEN=<valid-api-token>
```

In case you want to re-generate the swagger libraries with the provides script
you also need to have docker installed.

### Python

(Re-)generate the python library (if necessary):

```bash
$ bash swagger_gen.sh python
```

Install the python package from inside the generated code:

```bash
$ cd swagger/examples/python
$ python setup.py install --user
```

You can then use the python library like this:

[embedmd]:# (example_python.py)
```py
from __future__ import print_function
import phraseapp
import os

config = phraseapp.Configuration()
config.api_key['Authorization'] = os.getenv("PHRASEAPP_ACCESS_TOKEN")
config.api_key_prefix['Authorization'] = "token"

client = phraseapp.ApiClient(configuration = config)
api = phraseapp.DefaultApi(client)

for project in api.projects_get():
    print(project.id, project.name)
    for locale in api.projects_project_id_locales_get(project.id):
        print("  ", locale.id, locale.name, locale.code)
```

### PHP

(Re-)generate the python library (if necessary):

```bash
$ bash swagger_gen.sh php
```

Vendor dependencies with composer:

```bash
$ cd swagger/examples/php/SwaggerClient-php
$ composer install
```
You can then use the php library like this:

[embedmd]:# (example_php.php)
```php
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
```
