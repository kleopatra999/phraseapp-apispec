# SwaggerClient-php
PhraseApp API for the interaction with the PhraseApp localization platform

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [https://phraseapp.com/contact](https://phraseapp.com/contact)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: headerToken
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$account_id = "account_id_example"; // string | AccountId
$per_page = 25; // int | Per Page
$page = 1; // int | Page

try {
    $result = $api_instance->accountsAccountIdGlossariesGet($account_id, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->accountsAccountIdGlossariesGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.phraseapp.com/api/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**accountsAccountIdGlossariesGet**](docs/Api/DefaultApi.md#accountsaccountidglossariesget) | **GET** /accounts/{AccountId}/glossaries | 
*DefaultApi* | [**accountsAccountIdGlossariesGlossaryIdTermsGet**](docs/Api/DefaultApi.md#accountsaccountidglossariesglossaryidtermsget) | **GET** /accounts/{AccountId}/glossaries/{GlossaryId}/terms | 
*DefaultApi* | [**accountsAccountIdGlossariesGlossaryIdTermsIdDelete**](docs/Api/DefaultApi.md#accountsaccountidglossariesglossaryidtermsiddelete) | **DELETE** /accounts/{AccountId}/glossaries/{GlossaryId}/terms/{Id} | 
*DefaultApi* | [**accountsAccountIdGlossariesGlossaryIdTermsIdGet**](docs/Api/DefaultApi.md#accountsaccountidglossariesglossaryidtermsidget) | **GET** /accounts/{AccountId}/glossaries/{GlossaryId}/terms/{Id} | 
*DefaultApi* | [**accountsAccountIdGlossariesGlossaryIdTermsIdPatch**](docs/Api/DefaultApi.md#accountsaccountidglossariesglossaryidtermsidpatch) | **PATCH** /accounts/{AccountId}/glossaries/{GlossaryId}/terms/{Id} | 
*DefaultApi* | [**accountsAccountIdGlossariesGlossaryIdTermsPost**](docs/Api/DefaultApi.md#accountsaccountidglossariesglossaryidtermspost) | **POST** /accounts/{AccountId}/glossaries/{GlossaryId}/terms | 
*DefaultApi* | [**accountsAccountIdGlossariesGlossaryIdTermsTermIdTranslationsIdDelete**](docs/Api/DefaultApi.md#accountsaccountidglossariesglossaryidtermstermidtranslationsiddelete) | **DELETE** /accounts/{AccountId}/glossaries/{GlossaryId}/terms/{TermId}/translations/{Id} | 
*DefaultApi* | [**accountsAccountIdGlossariesGlossaryIdTermsTermIdTranslationsIdPatch**](docs/Api/DefaultApi.md#accountsaccountidglossariesglossaryidtermstermidtranslationsidpatch) | **PATCH** /accounts/{AccountId}/glossaries/{GlossaryId}/terms/{TermId}/translations/{Id} | 
*DefaultApi* | [**accountsAccountIdGlossariesGlossaryIdTermsTermIdTranslationsPost**](docs/Api/DefaultApi.md#accountsaccountidglossariesglossaryidtermstermidtranslationspost) | **POST** /accounts/{AccountId}/glossaries/{GlossaryId}/terms/{TermId}/translations | 
*DefaultApi* | [**accountsAccountIdGlossariesIdDelete**](docs/Api/DefaultApi.md#accountsaccountidglossariesiddelete) | **DELETE** /accounts/{AccountId}/glossaries/{Id} | 
*DefaultApi* | [**accountsAccountIdGlossariesIdGet**](docs/Api/DefaultApi.md#accountsaccountidglossariesidget) | **GET** /accounts/{AccountId}/glossaries/{Id} | 
*DefaultApi* | [**accountsAccountIdGlossariesIdPatch**](docs/Api/DefaultApi.md#accountsaccountidglossariesidpatch) | **PATCH** /accounts/{AccountId}/glossaries/{Id} | 
*DefaultApi* | [**accountsAccountIdGlossariesPost**](docs/Api/DefaultApi.md#accountsaccountidglossariespost) | **POST** /accounts/{AccountId}/glossaries | 
*DefaultApi* | [**accountsAccountIdInvitationsGet**](docs/Api/DefaultApi.md#accountsaccountidinvitationsget) | **GET** /accounts/{AccountId}/invitations | 
*DefaultApi* | [**accountsAccountIdInvitationsIdDelete**](docs/Api/DefaultApi.md#accountsaccountidinvitationsiddelete) | **DELETE** /accounts/{AccountId}/invitations/{Id} | 
*DefaultApi* | [**accountsAccountIdInvitationsIdGet**](docs/Api/DefaultApi.md#accountsaccountidinvitationsidget) | **GET** /accounts/{AccountId}/invitations/{Id} | 
*DefaultApi* | [**accountsAccountIdInvitationsIdPatch**](docs/Api/DefaultApi.md#accountsaccountidinvitationsidpatch) | **PATCH** /accounts/{AccountId}/invitations/{Id} | 
*DefaultApi* | [**accountsAccountIdInvitationsIdResendPost**](docs/Api/DefaultApi.md#accountsaccountidinvitationsidresendpost) | **POST** /accounts/{AccountId}/invitations/{Id}/resend | 
*DefaultApi* | [**accountsAccountIdInvitationsPost**](docs/Api/DefaultApi.md#accountsaccountidinvitationspost) | **POST** /accounts/{AccountId}/invitations | 
*DefaultApi* | [**accountsAccountIdMembersGet**](docs/Api/DefaultApi.md#accountsaccountidmembersget) | **GET** /accounts/{AccountId}/members | 
*DefaultApi* | [**accountsAccountIdMembersIdDelete**](docs/Api/DefaultApi.md#accountsaccountidmembersiddelete) | **DELETE** /accounts/{AccountId}/members/{Id} | 
*DefaultApi* | [**accountsAccountIdMembersIdGet**](docs/Api/DefaultApi.md#accountsaccountidmembersidget) | **GET** /accounts/{AccountId}/members/{Id} | 
*DefaultApi* | [**accountsAccountIdMembersIdPatch**](docs/Api/DefaultApi.md#accountsaccountidmembersidpatch) | **PATCH** /accounts/{AccountId}/members/{Id} | 
*DefaultApi* | [**accountsGet**](docs/Api/DefaultApi.md#accountsget) | **GET** /accounts | 
*DefaultApi* | [**accountsIdGet**](docs/Api/DefaultApi.md#accountsidget) | **GET** /accounts/{Id} | 
*DefaultApi* | [**authorizationsGet**](docs/Api/DefaultApi.md#authorizationsget) | **GET** /authorizations | 
*DefaultApi* | [**authorizationsIdDelete**](docs/Api/DefaultApi.md#authorizationsiddelete) | **DELETE** /authorizations/{Id} | 
*DefaultApi* | [**authorizationsIdGet**](docs/Api/DefaultApi.md#authorizationsidget) | **GET** /authorizations/{Id} | 
*DefaultApi* | [**authorizationsIdPatch**](docs/Api/DefaultApi.md#authorizationsidpatch) | **PATCH** /authorizations/{Id} | 
*DefaultApi* | [**authorizationsPost**](docs/Api/DefaultApi.md#authorizationspost) | **POST** /authorizations | 
*DefaultApi* | [**formatsGet**](docs/Api/DefaultApi.md#formatsget) | **GET** /formats | 
*DefaultApi* | [**projectsGet**](docs/Api/DefaultApi.md#projectsget) | **GET** /projects | 
*DefaultApi* | [**projectsIdDelete**](docs/Api/DefaultApi.md#projectsiddelete) | **DELETE** /projects/{Id} | 
*DefaultApi* | [**projectsIdGet**](docs/Api/DefaultApi.md#projectsidget) | **GET** /projects/{Id} | 
*DefaultApi* | [**projectsIdPatch**](docs/Api/DefaultApi.md#projectsidpatch) | **PATCH** /projects/{Id} | 
*DefaultApi* | [**projectsPost**](docs/Api/DefaultApi.md#projectspost) | **POST** /projects | 
*DefaultApi* | [**projectsProjectIdBlacklistedKeysGet**](docs/Api/DefaultApi.md#projectsprojectidblacklistedkeysget) | **GET** /projects/{ProjectId}/blacklisted_keys | 
*DefaultApi* | [**projectsProjectIdBlacklistedKeysIdDelete**](docs/Api/DefaultApi.md#projectsprojectidblacklistedkeysiddelete) | **DELETE** /projects/{ProjectId}/blacklisted_keys/{Id} | 
*DefaultApi* | [**projectsProjectIdBlacklistedKeysIdGet**](docs/Api/DefaultApi.md#projectsprojectidblacklistedkeysidget) | **GET** /projects/{ProjectId}/blacklisted_keys/{Id} | 
*DefaultApi* | [**projectsProjectIdBlacklistedKeysIdPatch**](docs/Api/DefaultApi.md#projectsprojectidblacklistedkeysidpatch) | **PATCH** /projects/{ProjectId}/blacklisted_keys/{Id} | 
*DefaultApi* | [**projectsProjectIdBlacklistedKeysPost**](docs/Api/DefaultApi.md#projectsprojectidblacklistedkeyspost) | **POST** /projects/{ProjectId}/blacklisted_keys | 
*DefaultApi* | [**projectsProjectIdKeysDelete**](docs/Api/DefaultApi.md#projectsprojectidkeysdelete) | **DELETE** /projects/{ProjectId}/keys | 
*DefaultApi* | [**projectsProjectIdKeysGet**](docs/Api/DefaultApi.md#projectsprojectidkeysget) | **GET** /projects/{ProjectId}/keys | 
*DefaultApi* | [**projectsProjectIdKeysIdDelete**](docs/Api/DefaultApi.md#projectsprojectidkeysiddelete) | **DELETE** /projects/{ProjectId}/keys/{Id} | 
*DefaultApi* | [**projectsProjectIdKeysIdGet**](docs/Api/DefaultApi.md#projectsprojectidkeysidget) | **GET** /projects/{ProjectId}/keys/{Id} | 
*DefaultApi* | [**projectsProjectIdKeysIdPatch**](docs/Api/DefaultApi.md#projectsprojectidkeysidpatch) | **PATCH** /projects/{ProjectId}/keys/{Id} | 
*DefaultApi* | [**projectsProjectIdKeysKeyIdCommentsGet**](docs/Api/DefaultApi.md#projectsprojectidkeyskeyidcommentsget) | **GET** /projects/{ProjectId}/keys/{KeyId}/comments | 
*DefaultApi* | [**projectsProjectIdKeysKeyIdCommentsIdDelete**](docs/Api/DefaultApi.md#projectsprojectidkeyskeyidcommentsiddelete) | **DELETE** /projects/{ProjectId}/keys/{KeyId}/comments/{Id} | 
*DefaultApi* | [**projectsProjectIdKeysKeyIdCommentsIdGet**](docs/Api/DefaultApi.md#projectsprojectidkeyskeyidcommentsidget) | **GET** /projects/{ProjectId}/keys/{KeyId}/comments/{Id} | 
*DefaultApi* | [**projectsProjectIdKeysKeyIdCommentsIdPatch**](docs/Api/DefaultApi.md#projectsprojectidkeyskeyidcommentsidpatch) | **PATCH** /projects/{ProjectId}/keys/{KeyId}/comments/{Id} | 
*DefaultApi* | [**projectsProjectIdKeysKeyIdCommentsIdReadDelete**](docs/Api/DefaultApi.md#projectsprojectidkeyskeyidcommentsidreaddelete) | **DELETE** /projects/{ProjectId}/keys/{KeyId}/comments/{Id}/read | 
*DefaultApi* | [**projectsProjectIdKeysKeyIdCommentsIdReadGet**](docs/Api/DefaultApi.md#projectsprojectidkeyskeyidcommentsidreadget) | **GET** /projects/{ProjectId}/keys/{KeyId}/comments/{Id}/read | 
*DefaultApi* | [**projectsProjectIdKeysKeyIdCommentsIdReadPatch**](docs/Api/DefaultApi.md#projectsprojectidkeyskeyidcommentsidreadpatch) | **PATCH** /projects/{ProjectId}/keys/{KeyId}/comments/{Id}/read | 
*DefaultApi* | [**projectsProjectIdKeysKeyIdCommentsPost**](docs/Api/DefaultApi.md#projectsprojectidkeyskeyidcommentspost) | **POST** /projects/{ProjectId}/keys/{KeyId}/comments | 
*DefaultApi* | [**projectsProjectIdKeysKeyIdTranslationsGet**](docs/Api/DefaultApi.md#projectsprojectidkeyskeyidtranslationsget) | **GET** /projects/{ProjectId}/keys/{KeyId}/translations | 
*DefaultApi* | [**projectsProjectIdKeysPost**](docs/Api/DefaultApi.md#projectsprojectidkeyspost) | **POST** /projects/{ProjectId}/keys | 
*DefaultApi* | [**projectsProjectIdKeysSearchPost**](docs/Api/DefaultApi.md#projectsprojectidkeyssearchpost) | **POST** /projects/{ProjectId}/keys/search | 
*DefaultApi* | [**projectsProjectIdKeysTagPatch**](docs/Api/DefaultApi.md#projectsprojectidkeystagpatch) | **PATCH** /projects/{ProjectId}/keys/tag | 
*DefaultApi* | [**projectsProjectIdKeysUntagPatch**](docs/Api/DefaultApi.md#projectsprojectidkeysuntagpatch) | **PATCH** /projects/{ProjectId}/keys/untag | 
*DefaultApi* | [**projectsProjectIdLocalesGet**](docs/Api/DefaultApi.md#projectsprojectidlocalesget) | **GET** /projects/{ProjectId}/locales | 
*DefaultApi* | [**projectsProjectIdLocalesIdDelete**](docs/Api/DefaultApi.md#projectsprojectidlocalesiddelete) | **DELETE** /projects/{ProjectId}/locales/{Id} | 
*DefaultApi* | [**projectsProjectIdLocalesIdDownloadGet**](docs/Api/DefaultApi.md#projectsprojectidlocalesiddownloadget) | **GET** /projects/{ProjectId}/locales/{Id}/download | 
*DefaultApi* | [**projectsProjectIdLocalesIdGet**](docs/Api/DefaultApi.md#projectsprojectidlocalesidget) | **GET** /projects/{ProjectId}/locales/{Id} | 
*DefaultApi* | [**projectsProjectIdLocalesIdPatch**](docs/Api/DefaultApi.md#projectsprojectidlocalesidpatch) | **PATCH** /projects/{ProjectId}/locales/{Id} | 
*DefaultApi* | [**projectsProjectIdLocalesLocaleIdTranslationsGet**](docs/Api/DefaultApi.md#projectsprojectidlocaleslocaleidtranslationsget) | **GET** /projects/{ProjectId}/locales/{LocaleId}/translations | 
*DefaultApi* | [**projectsProjectIdLocalesPost**](docs/Api/DefaultApi.md#projectsprojectidlocalespost) | **POST** /projects/{ProjectId}/locales | 
*DefaultApi* | [**projectsProjectIdOrdersGet**](docs/Api/DefaultApi.md#projectsprojectidordersget) | **GET** /projects/{ProjectId}/orders | 
*DefaultApi* | [**projectsProjectIdOrdersIdConfirmPatch**](docs/Api/DefaultApi.md#projectsprojectidordersidconfirmpatch) | **PATCH** /projects/{ProjectId}/orders/{Id}/confirm | 
*DefaultApi* | [**projectsProjectIdOrdersIdDelete**](docs/Api/DefaultApi.md#projectsprojectidordersiddelete) | **DELETE** /projects/{ProjectId}/orders/{Id} | 
*DefaultApi* | [**projectsProjectIdOrdersIdGet**](docs/Api/DefaultApi.md#projectsprojectidordersidget) | **GET** /projects/{ProjectId}/orders/{Id} | 
*DefaultApi* | [**projectsProjectIdOrdersPost**](docs/Api/DefaultApi.md#projectsprojectidorderspost) | **POST** /projects/{ProjectId}/orders | 
*DefaultApi* | [**projectsProjectIdStyleguidesGet**](docs/Api/DefaultApi.md#projectsprojectidstyleguidesget) | **GET** /projects/{ProjectId}/styleguides | 
*DefaultApi* | [**projectsProjectIdStyleguidesIdDelete**](docs/Api/DefaultApi.md#projectsprojectidstyleguidesiddelete) | **DELETE** /projects/{ProjectId}/styleguides/{Id} | 
*DefaultApi* | [**projectsProjectIdStyleguidesIdGet**](docs/Api/DefaultApi.md#projectsprojectidstyleguidesidget) | **GET** /projects/{ProjectId}/styleguides/{Id} | 
*DefaultApi* | [**projectsProjectIdStyleguidesIdPatch**](docs/Api/DefaultApi.md#projectsprojectidstyleguidesidpatch) | **PATCH** /projects/{ProjectId}/styleguides/{Id} | 
*DefaultApi* | [**projectsProjectIdStyleguidesPost**](docs/Api/DefaultApi.md#projectsprojectidstyleguidespost) | **POST** /projects/{ProjectId}/styleguides | 
*DefaultApi* | [**projectsProjectIdTagsGet**](docs/Api/DefaultApi.md#projectsprojectidtagsget) | **GET** /projects/{ProjectId}/tags | 
*DefaultApi* | [**projectsProjectIdTagsNameDelete**](docs/Api/DefaultApi.md#projectsprojectidtagsnamedelete) | **DELETE** /projects/{ProjectId}/tags/{Name} | 
*DefaultApi* | [**projectsProjectIdTagsNameGet**](docs/Api/DefaultApi.md#projectsprojectidtagsnameget) | **GET** /projects/{ProjectId}/tags/{Name} | 
*DefaultApi* | [**projectsProjectIdTagsPost**](docs/Api/DefaultApi.md#projectsprojectidtagspost) | **POST** /projects/{ProjectId}/tags | 
*DefaultApi* | [**projectsProjectIdTranslationsExcludePatch**](docs/Api/DefaultApi.md#projectsprojectidtranslationsexcludepatch) | **PATCH** /projects/{ProjectId}/translations/exclude | 
*DefaultApi* | [**projectsProjectIdTranslationsGet**](docs/Api/DefaultApi.md#projectsprojectidtranslationsget) | **GET** /projects/{ProjectId}/translations | 
*DefaultApi* | [**projectsProjectIdTranslationsIdGet**](docs/Api/DefaultApi.md#projectsprojectidtranslationsidget) | **GET** /projects/{ProjectId}/translations/{Id} | 
*DefaultApi* | [**projectsProjectIdTranslationsIdPatch**](docs/Api/DefaultApi.md#projectsprojectidtranslationsidpatch) | **PATCH** /projects/{ProjectId}/translations/{Id} | 
*DefaultApi* | [**projectsProjectIdTranslationsIncludePatch**](docs/Api/DefaultApi.md#projectsprojectidtranslationsincludepatch) | **PATCH** /projects/{ProjectId}/translations/include | 
*DefaultApi* | [**projectsProjectIdTranslationsPost**](docs/Api/DefaultApi.md#projectsprojectidtranslationspost) | **POST** /projects/{ProjectId}/translations | 
*DefaultApi* | [**projectsProjectIdTranslationsSearchPost**](docs/Api/DefaultApi.md#projectsprojectidtranslationssearchpost) | **POST** /projects/{ProjectId}/translations/search | 
*DefaultApi* | [**projectsProjectIdTranslationsTranslationIdVersionsGet**](docs/Api/DefaultApi.md#projectsprojectidtranslationstranslationidversionsget) | **GET** /projects/{ProjectId}/translations/{TranslationId}/versions | 
*DefaultApi* | [**projectsProjectIdTranslationsTranslationIdVersionsIdGet**](docs/Api/DefaultApi.md#projectsprojectidtranslationstranslationidversionsidget) | **GET** /projects/{ProjectId}/translations/{TranslationId}/versions/{Id} | 
*DefaultApi* | [**projectsProjectIdTranslationsUnverifyPatch**](docs/Api/DefaultApi.md#projectsprojectidtranslationsunverifypatch) | **PATCH** /projects/{ProjectId}/translations/unverify | 
*DefaultApi* | [**projectsProjectIdTranslationsVerifyPatch**](docs/Api/DefaultApi.md#projectsprojectidtranslationsverifypatch) | **PATCH** /projects/{ProjectId}/translations/verify | 
*DefaultApi* | [**projectsProjectIdUploadsGet**](docs/Api/DefaultApi.md#projectsprojectiduploadsget) | **GET** /projects/{ProjectId}/uploads | 
*DefaultApi* | [**projectsProjectIdUploadsIdGet**](docs/Api/DefaultApi.md#projectsprojectiduploadsidget) | **GET** /projects/{ProjectId}/uploads/{Id} | 
*DefaultApi* | [**projectsProjectIdUploadsPost**](docs/Api/DefaultApi.md#projectsprojectiduploadspost) | **POST** /projects/{ProjectId}/uploads | 
*DefaultApi* | [**projectsProjectIdWebhooksGet**](docs/Api/DefaultApi.md#projectsprojectidwebhooksget) | **GET** /projects/{ProjectId}/webhooks | 
*DefaultApi* | [**projectsProjectIdWebhooksIdDelete**](docs/Api/DefaultApi.md#projectsprojectidwebhooksiddelete) | **DELETE** /projects/{ProjectId}/webhooks/{Id} | 
*DefaultApi* | [**projectsProjectIdWebhooksIdGet**](docs/Api/DefaultApi.md#projectsprojectidwebhooksidget) | **GET** /projects/{ProjectId}/webhooks/{Id} | 
*DefaultApi* | [**projectsProjectIdWebhooksIdPatch**](docs/Api/DefaultApi.md#projectsprojectidwebhooksidpatch) | **PATCH** /projects/{ProjectId}/webhooks/{Id} | 
*DefaultApi* | [**projectsProjectIdWebhooksIdTestPost**](docs/Api/DefaultApi.md#projectsprojectidwebhooksidtestpost) | **POST** /projects/{ProjectId}/webhooks/{Id}/test | 
*DefaultApi* | [**projectsProjectIdWebhooksPost**](docs/Api/DefaultApi.md#projectsprojectidwebhookspost) | **POST** /projects/{ProjectId}/webhooks | 
*DefaultApi* | [**userGet**](docs/Api/DefaultApi.md#userget) | **GET** /user | 


## Documentation For Models

 - [Account](docs/Model/Account.md)
 - [AffectedCount](docs/Model/AffectedCount.md)
 - [AffectedResources](docs/Model/AffectedResources.md)
 - [Authorization](docs/Model/Authorization.md)
 - [AuthorizationWithToken](docs/Model/AuthorizationWithToken.md)
 - [BlacklistedKey](docs/Model/BlacklistedKey.md)
 - [Comment](docs/Model/Comment.md)
 - [Format](docs/Model/Format.md)
 - [Glossary](docs/Model/Glossary.md)
 - [GlossaryTerm](docs/Model/GlossaryTerm.md)
 - [GlossaryTermTranslation](docs/Model/GlossaryTermTranslation.md)
 - [Invitation](docs/Model/Invitation.md)
 - [KeyPreview](docs/Model/KeyPreview.md)
 - [Locale](docs/Model/Locale.md)
 - [LocaleDetails](docs/Model/LocaleDetails.md)
 - [LocalePreview](docs/Model/LocalePreview.md)
 - [LocaleStatistics](docs/Model/LocaleStatistics.md)
 - [Member](docs/Model/Member.md)
 - [Project](docs/Model/Project.md)
 - [ProjectDetails](docs/Model/ProjectDetails.md)
 - [ProjectLocales](docs/Model/ProjectLocales.md)
 - [ProjectShort](docs/Model/ProjectShort.md)
 - [Styleguide](docs/Model/Styleguide.md)
 - [StyleguideDetails](docs/Model/StyleguideDetails.md)
 - [StyleguidePreview](docs/Model/StyleguidePreview.md)
 - [Tag](docs/Model/Tag.md)
 - [TagWithStats](docs/Model/TagWithStats.md)
 - [Translation](docs/Model/Translation.md)
 - [TranslationDetails](docs/Model/TranslationDetails.md)
 - [TranslationKey](docs/Model/TranslationKey.md)
 - [TranslationKeyDetails](docs/Model/TranslationKeyDetails.md)
 - [TranslationOrder](docs/Model/TranslationOrder.md)
 - [TranslationVersion](docs/Model/TranslationVersion.md)
 - [TranslationVersionWithUser](docs/Model/TranslationVersionWithUser.md)
 - [Upload](docs/Model/Upload.md)
 - [User](docs/Model/User.md)
 - [UserPreview](docs/Model/UserPreview.md)
 - [Webhook](docs/Model/Webhook.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication

## headerToken

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author

support@phraseapp.com

