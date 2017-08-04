#!/bin/bash
set -e -o pipefail

dir=swagger/examples/python
mkdir -p ${dir}
cp swagger.json swagger.config.json swagger/examples/python
pushd ${dir} > /dev/null
docker run --rm -u $(id -u) -v $(pwd):/gen swaggerapi/swagger-codegen-cli generate -i /gen/swagger.json -c /gen/swagger.config.json -l python -o /gen
rm -f swagger.json swagger.config.json
