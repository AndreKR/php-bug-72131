This reproduces PHP Bug #72131

https://bugs.php.net/bug.php?id=72131


##### Build and run with Docker

```
docker rm -f phpbug
docker tag phpbug phpbug-old # Keep the old image around as cache for the build
docker build -t phpbug .
[ $? -ne 0 ] && exit
docker rmi phpbug-old
docker run -it --name=phpbug phpbug
```

or run `build_and_run.sh`

You can set the desired PHP version (5.5, 5.6 or 7.0) in line 3 of the Dockerfile.


##### Build and run with local PHP installation

```
cd server
go build
cd ..
server/server &
php test.php
```
