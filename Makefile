# Executables (local)
DOCKER = docker-compose -f ./.docker/local/docker-compose.yml --env-file ./.env.local
EXEC = docker container exec -ti ds-app

## —— Docker 🐳 ————————————————————————————————————————————————————————————————
build: ## Builds the Docker images
	@$(DOCKER) build --no-cache

up: ## Start the docker hub in detached mode (no logs)
	@$(DOCKER) up -d

down: ## Stop the docker hub
	@$(DOCKER) down

cli: ## Run Container (Go inside)
	@$(EXEC) bash

setup-win: ## It's for first running in Windows
	IF NOT EXIST ".env.local" COPY ".env.local.example" ".env.local"
	IF NOT EXIST ".env" COPY ".env.example" ".env"
	@$(DOCKER) build --no-cache
	@$(DOCKER) up -d
	@$(EXEC) composer install --no-interaction --prefer-dist --no-progress

setup-linux: ## It's for first running in Linux
	@cp -n .env.local.example .env.local || true
	@cp -n .env.example .env || true
	@$(DOCKER) build --no-cache
	@$(DOCKER) up -d
	@$(EXEC) composer install --no-interaction --prefer-dist --no-progress
