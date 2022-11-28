# wayside-publishing/kimono-php

Interop Data APIs provide access to the data objects and events from Interop Cloud repositories and Integration repositories


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
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
<?php
require_once('/path/to/wayside-publishing/kimono-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: Actor
$config = Kimono\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kimono\Api\GradesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Specify the page number (defaults to 0)
$page_size = 56; // int | Specify the page_size (defaults to the maximum page size)

try {
    $result = $apiInstance->listGradingCategories($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GradesApi->listGradingCategories: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.us2.kimonocloud.com/v2/interop/data*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*GradesApi* | [**listGradingCategories**](docs/Api/GradesApi.md#listgradingcategories) | **GET** /grades/categories | List all Grading Categories
*IngestionsApi* | [**cancelIngestion**](docs/Api/IngestionsApi.md#cancelingestion) | **DELETE** /ingestions/{id} | Cancel an Ingestion by id
*IngestionsApi* | [**createIngestion**](docs/Api/IngestionsApi.md#createingestion) | **POST** /ingestions | Create an Ingestion
*IngestionsApi* | [**findIngestion**](docs/Api/IngestionsApi.md#findingestion) | **GET** /ingestions/{id} | Find an Ingestion by id
*IngestionsApi* | [**listIngestions**](docs/Api/IngestionsApi.md#listingestions) | **GET** /ingestions | List Ingestions
*RosteringApi* | [**findCourse**](docs/Api/RosteringApi.md#findcourse) | **GET** /rostering/courses/{id} | Find a Course by $sys.id
*RosteringApi* | [**findLEA**](docs/Api/RosteringApi.md#findlea) | **GET** /rostering/leas/{id} | Find an LEA-type Org by $sys.id
*RosteringApi* | [**findOrg**](docs/Api/RosteringApi.md#findorg) | **GET** /rostering/orgs/{id} | Find an Org by $sys.id
*RosteringApi* | [**findPerson**](docs/Api/RosteringApi.md#findperson) | **GET** /rostering/persons/{id} | Find a Person by $sys.id
*RosteringApi* | [**findSection**](docs/Api/RosteringApi.md#findsection) | **GET** /rostering/sections/{id} | Find a Section by $sys.id
*RosteringApi* | [**findTerm**](docs/Api/RosteringApi.md#findterm) | **GET** /rostering/terms/{id} | Find a Term by $sys.id
*RosteringApi* | [**listCourses**](docs/Api/RosteringApi.md#listcourses) | **GET** /rostering/courses | List all Courses
*RosteringApi* | [**listCoursesForOrg**](docs/Api/RosteringApi.md#listcoursesfororg) | **GET** /rostering/orgs/{id}/courses | List Courses that belong to an Org
*RosteringApi* | [**listLEAs**](docs/Api/RosteringApi.md#listleas) | **GET** /rostering/leas | List all LEA-type Orgs
*RosteringApi* | [**listOrgs**](docs/Api/RosteringApi.md#listorgs) | **GET** /rostering/orgs | List all Orgs
*RosteringApi* | [**listPersons**](docs/Api/RosteringApi.md#listpersons) | **GET** /rostering/persons | Get all Persons
*RosteringApi* | [**listSchools**](docs/Api/RosteringApi.md#listschools) | **GET** /rostering/schools | List all School-type Orgs
*RosteringApi* | [**listSections**](docs/Api/RosteringApi.md#listsections) | **GET** /rostering/sections | List all Sections
*RosteringApi* | [**listSectionsForOrg**](docs/Api/RosteringApi.md#listsectionsfororg) | **GET** /rostering/orgs/{id}/sections | List Sections that belong to an Org
*RosteringApi* | [**listStudents**](docs/Api/RosteringApi.md#liststudents) | **GET** /rostering/students | List all Student-type Persons
*RosteringApi* | [**listStudentsForOrg**](docs/Api/RosteringApi.md#liststudentsfororg) | **GET** /rostering/orgs/{id}/students | List Students that are members of an Org
*RosteringApi* | [**listTeachers**](docs/Api/RosteringApi.md#listteachers) | **GET** /rostering/teachers | List all Teacher-type Persons
*RosteringApi* | [**listTeachersForOrg**](docs/Api/RosteringApi.md#listteachersfororg) | **GET** /rostering/orgs/{id}/teachers | List Teachers that are members of an Org
*RosteringApi* | [**listTerms**](docs/Api/RosteringApi.md#listterms) | **GET** /rostering/terms | List all Terms
*RosteringApi* | [**listTermsForOrg**](docs/Api/RosteringApi.md#listtermsfororg) | **GET** /rostering/orgs/{id}/terms | List Terms that belong to an Org
*TasksApi* | [**acknowledgeTask**](docs/Api/TasksApi.md#acknowledgetask) | **PUT** /tasks/{id}/ack | Acknowledge Task
*TasksApi* | [**listTasks**](docs/Api/TasksApi.md#listtasks) | **GET** /tasks | List Tasks

## Models

- [AddressType](docs/Model/AddressType.md)
- [BaseAccountResourceType](docs/Model/BaseAccountResourceType.md)
- [BaseAccountResourceTypeAllOf](docs/Model/BaseAccountResourceTypeAllOf.md)
- [BaseResourceType](docs/Model/BaseResourceType.md)
- [BaseTenantResourceType](docs/Model/BaseTenantResourceType.md)
- [BaseTenantResourceTypeAllOf](docs/Model/BaseTenantResourceTypeAllOf.md)
- [Course](docs/Model/Course.md)
- [CourseAllOf](docs/Model/CourseAllOf.md)
- [CoursesResponse](docs/Model/CoursesResponse.md)
- [CoursesResponseAllOf](docs/Model/CoursesResponseAllOf.md)
- [DataEvent](docs/Model/DataEvent.md)
- [DataEventAllOf](docs/Model/DataEventAllOf.md)
- [ErrorType](docs/Model/ErrorType.md)
- [GradingCategory](docs/Model/GradingCategory.md)
- [GradingCategorysResponse](docs/Model/GradingCategorysResponse.md)
- [GradingCategorysResponseAllOf](docs/Model/GradingCategorysResponseAllOf.md)
- [Ingestion](docs/Model/Ingestion.md)
- [IngestionAllOf](docs/Model/IngestionAllOf.md)
- [IngestionResponse](docs/Model/IngestionResponse.md)
- [IngestionResponseAllOf](docs/Model/IngestionResponseAllOf.md)
- [IngestionState](docs/Model/IngestionState.md)
- [IngestionType](docs/Model/IngestionType.md)
- [IngestionsResponse](docs/Model/IngestionsResponse.md)
- [IngestionsResponseAllOf](docs/Model/IngestionsResponseAllOf.md)
- [MembershipRefType](docs/Model/MembershipRefType.md)
- [MembershipRefTypeAllOf](docs/Model/MembershipRefTypeAllOf.md)
- [NameType](docs/Model/NameType.md)
- [ObjectType](docs/Model/ObjectType.md)
- [Org](docs/Model/Org.md)
- [OrgAllOf](docs/Model/OrgAllOf.md)
- [OrgMembershipRefType](docs/Model/OrgMembershipRefType.md)
- [OrgRefType](docs/Model/OrgRefType.md)
- [OrgResponse](docs/Model/OrgResponse.md)
- [OrgResponseAllOf](docs/Model/OrgResponseAllOf.md)
- [OrgSysType](docs/Model/OrgSysType.md)
- [OrgSysTypeAllOf](docs/Model/OrgSysTypeAllOf.md)
- [OrgsResponse](docs/Model/OrgsResponse.md)
- [OrgsResponseAllOf](docs/Model/OrgsResponseAllOf.md)
- [PagedDataResponseType](docs/Model/PagedDataResponseType.md)
- [PagedDataResponseTypePaging](docs/Model/PagedDataResponseTypePaging.md)
- [Person](docs/Model/Person.md)
- [PersonAllOf](docs/Model/PersonAllOf.md)
- [PersonMembershipRefType](docs/Model/PersonMembershipRefType.md)
- [PersonRefType](docs/Model/PersonRefType.md)
- [PersonSysType](docs/Model/PersonSysType.md)
- [PersonSysTypeAllOf](docs/Model/PersonSysTypeAllOf.md)
- [PersonsResponse](docs/Model/PersonsResponse.md)
- [PersonsResponseAllOf](docs/Model/PersonsResponseAllOf.md)
- [RefType](docs/Model/RefType.md)
- [Section](docs/Model/Section.md)
- [SectionAllOf](docs/Model/SectionAllOf.md)
- [SectionsResponse](docs/Model/SectionsResponse.md)
- [SectionsResponseAllOf](docs/Model/SectionsResponseAllOf.md)
- [SingleObjectResponseType](docs/Model/SingleObjectResponseType.md)
- [SyncEvent](docs/Model/SyncEvent.md)
- [SyncEventAllOf](docs/Model/SyncEventAllOf.md)
- [SysType](docs/Model/SysType.md)
- [Task](docs/Model/Task.md)
- [TaskAck](docs/Model/TaskAck.md)
- [TaskResponse](docs/Model/TaskResponse.md)
- [TaskResponseAllOf](docs/Model/TaskResponseAllOf.md)
- [TasksResponse](docs/Model/TasksResponse.md)
- [TasksResponseAllOf](docs/Model/TasksResponseAllOf.md)
- [Term](docs/Model/Term.md)
- [TermAllOf](docs/Model/TermAllOf.md)
- [TermRefType](docs/Model/TermRefType.md)
- [TermSysType](docs/Model/TermSysType.md)
- [TermSysTypeAllOf](docs/Model/TermSysTypeAllOf.md)
- [TermsResponse](docs/Model/TermsResponse.md)
- [TermsResponseAllOf](docs/Model/TermsResponseAllOf.md)

## Authorization

### Actor

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
