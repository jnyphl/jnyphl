# vim: set tabstop=2 shiftwidth=2 noexpandtab:

help:
		@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

build: ## Write html pages
		@./vendor/bin/jigsaw build

watch: ## Compile
		@npm run watch

get-pictures: ## Download the pictures for local development. This will only work for Jenny and I.
		@scp -r philinode:~/websites/poradafamily.com/www/assets/images source/assets/

build-docker: ## Use a container to do all the build stuff so we don't shit up our systems with php or nodejs
		@docker build . -f Dockerfile -t jigsaw
		@docker run -t -v $$(pwd):/app jigsaw composer install
		@docker run -t -v $$(pwd):/app jigsaw npm install --no-progress
		@docker run -t -v $$(pwd):/app jigsaw ./vendor/bin/jigsaw build
		@docker run -t -v $$(pwd):/app jigsaw npm run dev

watch-docker: ## Compile, but in a container
	@docker run -t -v $$(pwd):/app -p 3000:3000 jigsaw npm run watch
