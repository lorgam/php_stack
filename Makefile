include .env
export

start:
	docker-compose up -d --remove-orphans

stop:
	docker-compose stop

restart: stop start

logs:
	docker-compose logs -f

db:
	docker-compose exec db mysql -uroot -p$(MARIADB_ROOT_PASSWORD)

