# PHP Stack

Software | Version
--- | ---
FPM | 8.0
Nginx | 1.21
MariaDB | 10.6
Mailhog | 
Traefik | 2.5
XDebug | 

## Installation

You need to have installed `docker compose` and `make` to use this environment.

You need a docker network named proxy `docker network create proxy`.

## Configuration

Use the `.env.example` as an example of an `.env` file to configure your application. Configure the variable named `PROJECT_NAME` with your project name.

You can start the stack with `make start`, stop it with `make stop` or restart it with `make restart`.

Access the container logs with `make logs`.

Access the database with `make sql`, the inititalization script is on the file 'db/init.sql'

Enable XDebug with `make xdebug` and check that is correctly installed with `make phpv`

Access the web server at `http://${PROJECT_NAME}.localhost/`, the mailhog server at `http://${PROJECT_NAME}.mail.localhost/` and the router panel at [`http://localhost:8080/`](http://localhost:8080/).

