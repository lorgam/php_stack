# PHP Stack

Just a php stack with nginx, fpm, mailhog, mariadb and traefik.

You need to have installed `docker compose` and `make` to use this environment.

Use the `.env.example` as an example of an `.env` file to configure your application.

You can start the stack with `make start`, stop it with `make stop` or restart it with `make restart`.

Access the container logs with `make logs`.

Access the web server at [`http://web.localhost/`](http://web.localhost/), the mailhog server at [`http://mail.localhost/`](http://mail.localhost/) and the router panel at [`http://localhost:8080/`](http://localhost:8080/).

Access the database with `make db`.
