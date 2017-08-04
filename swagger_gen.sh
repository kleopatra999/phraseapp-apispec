#!/bin/bash
set -e -o pipefail

lang=${1}

if [[ -z $lang ]]; then
  echo "usage: LANG"
  exit 1
fi

dir=swagger/examples/${lang}
mkdir -p ${dir}
cp swagger.json swagger.config.json swagger/examples/${lang}
pushd ${dir} > /dev/null
docker run --rm -u $(id -u) -v $(pwd):/gen swaggerapi/swagger-codegen-cli generate -i /gen/swagger.json -c /gen/swagger.config.json -l ${lang} -o /gen
rm -f swagger.json swagger.config.json
