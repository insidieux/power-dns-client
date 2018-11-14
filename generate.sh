#!/usr/bin/env bash

rm -r docs || true
rm -r src || true
rm -r test || true
rm -f .php_cs .travis.yml composer.json git_push.sh phpunit.xml.dist README.md

docker run --rm \
    -e PHP_POST_PROCESS_FILE="/usr/local/bin/prettier --write" \
    -v $(pwd):/project openapitools/openapi-generator-cli:v3.3.2 generate \
    -i https://raw.githubusercontent.com/PowerDNS/pdns/master/docs/http-api/swagger/authoritative-api-swagger.yaml \
    -g php \
    -l php \
    -o /project \
    -t /project/.openapi-generator-templates \
    --additional-properties srcBasePath=src \
    --additional-properties variableNamingConvention=camelCase \
    --additional-properties packageName=power-dns-client \
    --git-user-id insidieux \
    --git-repo-id power-dns-client \
    --invoker-package insidieux\\PowerDnsClient \
    --verbose
