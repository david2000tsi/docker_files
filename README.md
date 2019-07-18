# Docker files

This is a repository of docker files, used to make specifics environments.

To run a docker file and create images/containers:

Go to inside a specific docker file directory (thats contains the docker-compose.yml) and run the following command:

```
docker-compose up -d
```

Example:

Supose you need to create a environment with php7.0 and mysql5.7 for web application, you should be use the apache-php7-mysql5 directory.

Go to the directory:

```
cd <project_path>/apache-php7-mysql5
```

Run docker:

```
docker-compose up -d
```

Your containers will be created and started and the content of the webapp directory will be mounted inside the '/var/www/html' from apache-php7 container.
There is a index.php file inside this directory, go to your browser and try to access 'localhost:8080', should be printed the database connection status and phpinfo() output.
