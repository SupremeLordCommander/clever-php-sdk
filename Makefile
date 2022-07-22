full: php python node ruby

php:
	docker run --rm -v ${PWD}/dependencies:/dependencies -v ${PWD}/generated:/generated openapitools/openapi-generator-cli generate -i /dependencies/v3.0.yml -g php -o /generated/php
python:
	docker run --rm -v ${PWD}/dependencies:/dependencies -v ${PWD}/generated:/generated openapitools/openapi-generator-cli generate -i /dependencies/v3.0.yml -g python -o /generated/python
ruby:
	docker run --rm -v ${PWD}/dependencies:/dependencies -v ${PWD}/generated:/generated openapitools/openapi-generator-cli generate -i /dependencies/v3.0.yml -g ruby -o /generated/ruby