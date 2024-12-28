install:
	composer install
brain-games:
	./bin/brain-games
validate:
	composer validate
lint:
	composer exec phpcs -- --standard=PSR12 -v src bin
brain-even:
	./bin/brain-even
brain-calc:
	./bin/brain-calc
brain-gcd:
	./bin/brain-gcd
brain-progression:
	./bin/brain-progression