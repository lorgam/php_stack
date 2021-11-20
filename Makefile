start:
	docker-compose up -d --remove-orphans

stop:
	docker-compose stop

logs:
	docker-compose logs -f

