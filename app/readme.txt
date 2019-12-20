How to create a new website!

	- Use Flywheel local to spin up a site.
	- Take this theme .zip and unpackage it in the themes folder: /../wordpress/wp-content/themes
	- Open the gulpfile.js
	- Inside gulp file, find 
			- proxy: "template-site.local"
	- and change it to whatever flywheel is outputting.
	- Ensure that flywheel has IPv6 Loopback turned on otherwise your crap will be slower than the federal government
	-Open Iterm and navigate to the assets folder in the theme, run the command below:
	gulp watch
	- Update the scss file and see if it changes in the browser, if so we gucci.


Useful Reference Links:
http://sass-lang.com/guide
https://stackoverflow.com/questions/3267504/how-to-move-up-a-directory-with-terminal-in-osx
http://sassbreak.com/watch-your-sass/
