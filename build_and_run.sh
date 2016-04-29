#!/bin/bash

docker rm -f phpbug
docker tag phpbug phpbug-old # Keep the old image around as cache for the build
docker build -t phpbug .
[ $? -ne 0 ] && exit
docker rmi phpbug-old
docker run -it --name=phpbug phpbug
