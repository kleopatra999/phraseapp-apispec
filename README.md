# phraseapp-apispec
PhraseApp API Spec

## Swagger Examples

### Python

(Re-)generate the python library (if necessary):

```bash
$ bash swagger_gen_python.sh
```

Install the python package from inside the generated code:

```bash
$ cd swagger/examples/python
$ python setup.py install --user
```

With your PhraseApp API token present in your ENV (`export PHRASEAPP_ACCESS_TOKEN=<token>`) you can then use the python library like this:

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
