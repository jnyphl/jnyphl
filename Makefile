# vim: set tabstop=2 shiftwidth=2 noexpandtab:

help:
		@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

build: ## Write html pages
		@./vendor/bin/jigsaw build

watch: ## Compile
		@npm run watch

build-docker: ## Use a container to do all the build stuff so we don't shit up our systems with php or nodejs
		@docker build . -f Dockerfile -t jigsaw
		@docker run -t -v $$(pwd):/app jigsaw composer install
		@docker run -t -v $$(pwd):/app jigsaw npm install --no-progress
		@docker run -t -v $$(pwd):/app jigsaw ./vendor/bin/jigsaw build
		@docker run -t -v $$(pwd):/app jigsaw npm run dev
		@python -m SimpleHTTPServer 8000
