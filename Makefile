include .env
export

start:
	docker-compose up -d --remove-orphans

stop:
	docker-compose stop

restart: stop start

logs:
	docker-compose logs -f

sql:
	docker-compose exec db mysql -uroot -p$(MARIADB_ROOT_PASSWORD)

ssh:
	docker-compose exec php sh

prune:
	docker-compose down -v
	docker volume prune

build: prune
	docker-compose build

phpv:
	docker-compose exec php php -v

xdebug:
	docker-compose exec php sh "/etc/xdebug_install.sh"

