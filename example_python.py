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
