# wayside-publishing/kimono-php

Warning! At this point, only Interop Data API is included in this package, despite more schemas included into the `schemas` folder!

Warning! AdminTasksAPI is not autogenerated by OpenAPI CodeGenerator, because it is not explicitly in the schema. If you rebuild the API, make sure to make a copy of TasksAPI -> listTasks (no other methods available for Admin API)

Warning! interop-data-api.json is enriched with PersonSectionMembership and OrgSectionMembership, which are not present in kimono schemas but are obviously used by their API. 
Those types require full roll-ups for their $person, $org and $section fields - enable those in the blueprint

Warning! Section is modified to have its relation fields to be full roll-ups