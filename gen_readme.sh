#!/bin/bash
set -e -o pipefail

trap "rm -f docker_build.log" EXIT

docker build . | tee docker_build.log
image_id=$(grep -o "Successfully built.*" docker_build.log | awk '{ print $3 }')

if [[ -z $image_id ]]; then
	echo "unable to extract image id from docker output"
fi

docker run --rm -v $(pwd):/publish ${image_id} -w /publish/README.md
