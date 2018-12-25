# vim: set tabstop=2 shiftwidth=2 noexpandtab:

help:
		@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

build: ## Write html pages
		@./vendor/bin/jigsaw build

watch: ## Compile
		@npm run watch
