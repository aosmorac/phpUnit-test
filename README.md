# phpUnit-test

Docker PHP for development and unit tests

## Getting Started

These instructions allow you to run a php docker and can do Unit test using PhpUnit. You must have docker and docker-compose installed.

### Running

Clone this repo

```
git clone https://github.com/aosmorac/phpUnit-test.git
```

Go to code folder 

```
cd phpUnit-test
```

Run docker 

```
docker-compose up
```
Go into docker container

```
sudo docker exec -i -t php-test sh
```
Run test

```
phpunit tests/CodilityTest.php
```


