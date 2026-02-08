HOST_GROUP_ID = $(shell id -g)
HOST_USER = ${USER}
HOST_UID = $(shell id -u)

export HOST_UID
export HOST_USER
export HOST_GROUP_ID

DOCKER_COMPOSE = docker-compose

help: ## Display available commands
	@fgrep -h "##" $(MAKEFILE_LIST) | fgrep -v fgrep | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

# =====================================================================
# Install Dev  ========================================================
# =====================================================================

install:
	$(DOCKER_COMPOSE) build
	$(MAKE) start-clibom

start-clibom:
	$(DOCKER_COMPOSE) up -d

stop-clibom:
	$(DOCKER_COMPOSE) down

connect-clibom: ## Connect on a remote bash terminal on the Apache container
	$(DOCKER_COMPOSE) exec apache bash

default: help


