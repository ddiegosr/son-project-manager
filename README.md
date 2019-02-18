#SON-Project-Manager

This is a simple Project Manager, built with VueJS and PHP.

##Setup
This project was developed using Docker, to start use the following command:

```
docker-compose up -d
```

After the containers are initialized, run the following commands within of the container _apache-php.son-project-manager_.

```
composer install
```
- For run commands within of container, you can run the following command in the same directory of the _docker-compose.yml_ file, that will be enable the _bash_ in the container.

- ```
docker-compose exec apache-php.son-project-manager bash
```

Now the system is available on the http://localhost:8080

For demo, you can use:
**Email:** test@email.com
**Password:** 123456