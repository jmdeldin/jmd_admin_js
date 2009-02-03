MAKE = php /Users/jm/Sites/jmd_plugins/make_txp/make.php
SRC = admin_js.php
CACHE = ../../cache/jmd_admin_js.php
TXT = ../../releases/jmd_admin_js.txt

all:
	$(MAKE) $(SRC) $(CACHE) $(TXT)

clean:
	rm $(CACHE) $(TXT)

