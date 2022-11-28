docker run --rm -v "${PWD}:/local" openapitools/openapi-generator-cli generate \
    -i /local/schemas/interop-data-api.json \
    -g php \
    --additional-properties=invokerPackage=Kimono,packageName=wayside-publishing/kimono-php \
    -o /local/
