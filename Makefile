start:
	docker-compose up -d --remove-orphans

stop:
	docker-compose stop

restart: stop start

logs:
	docker-compose logs -f

