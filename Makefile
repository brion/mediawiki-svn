#
# Handy makefile to combine and minify css and javascript files
#
# For more info on JSMin, see: http://www.crockford.com/javascript/jsmin.html
#

CSS := \
	css/suggestions.css\
	css/wikiEditor.css\
	css/wikiEditor.dialogs.css\
	css/wikiEditor.toc.css\
	css/wikiEditor.toolbar.css

JS2 := \
	js/js2/jquery-1.3.2.js\
	js/js2/jquery-ui-1.7.2.js\
	js/js2/js2.js

PLUGINS := \
	js/plugins/jquery.async.js\
	js/plugins/jquery.autoEllipse.js\
	js/plugins/jquery.browser.js\
	js/plugins/jquery.collapsibleTabs.js\
	js/plugins/jquery.cookie.js\
	js/plugins/jquery.delayedBind.js\
	js/plugins/jquery.namespaceSelect.js\
	js/plugins/jquery.suggestions.js\
	js/plugins/jquery.textSelection.js\
	js/plugins/jquery.wikiEditor.js\
	js/plugins/jquery.wikiEditor.dialogs.js\
	js/plugins/jquery.wikiEditor.toolbar.js\
	js/plugins/jquery.wikiEditor.toc.js

all: \
	css/combined.css\
	css/combined.min.css\
	js/js2.combined.js\
	js/js2.combined.min.js\
	js/plugins.combined.js\
	js/plugins.combined.min.js\
	EditToolbar/EditToolbar.min.js

css/combined.css: $(CSS)
	cat $(CSS) > css/combined.css

js/js2.combined.js: $(JS2)
	cat $(JS2) > js/js2.combined.js

js/plugins.combined.js: $(PLUGINS)
	cat $(PLUGINS) > js/plugins.combined.js

js/js2.combined.min.js : js/js2.combined.js jsmin
	if [ -e ./jsmin ]; then ./jsmin < js/js2.combined.js > js/js2.combined.min.js;\
	else jsmin < js/js2.combined.js > js/js2.combined.min.js; fi

js/plugins.combined.min.js : js/plugins.combined.js jsmin 
	if [ -e ./jsmin ]; then ./jsmin < js/plugins.combined.js > js/plugins.combined.min.js;\
	else jsmin < js/plugins.combined.js > js/plugins.combined.min.js; fi

EditToolbar/EditToolbar.min.js: EditToolbar/EditToolbar.js
	if [ -e ./jsmin ]; then ./jsmin < EditToolbar/EditToolbar.js > EditToolbar/EditToolbar.min.js;\
	else jsmin < EditToolbar/EditToolbar.js > EditToolbar/EditToolbar.min.js; fi

css/combined.min.css : css/combined.css
	cat css/combined.css | sed -e 's/^[ 	]*//g; s/[ 	]*$$//g; s/\([:{;,]\) /\1/g; s/ {/{/g; s/\/\*.*\*\///g; /^$$/d'\
	> css/combined.min.css


jsmin:
	type -P jsmin &>/dev/null || ( wget http://www.crockford.com/javascript/jsmin.c; gcc jsmin.c -o jsmin )

distclean: clean
	rm -rf jsmin
	rm -rf jsmin.c

clean:
	rm -f js/js2.combined.*
	rm -f js/plugins.combined.*
	rm -f css/combined.*
