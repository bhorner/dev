# dev
A basic node/express install with SASS &amp; Grunt

## 1. First things first
Unzip and move these file to your project folder. 

## 2. Open up terminal (don't crap your pants)
in terminal type "cd /path/to/project_folder" (hint: to get the path of your project folder just drag it from your finder into the terminal window. Make sure there's a space after "cd")

## 3. Run your server
Now that you're in your project folder in terminal, we can run the node server to get this thing poppin. 
Type "nodemon bin/www" in terminal:
You should see something like:
```
16 Jan 15:40:15 - [nodemon] v1.2.1
16 Jan 15:40:15 - [nodemon] to restart at any time, enter `rs`
16 Jan 15:40:15 - [nodemon] watching: *.*
16 Jan 15:40:15 - [nodemon] starting `node bin/www`
```
Now open up your browser and go to "http://localhost:3000/", and voila!

### CONGRATS YOUR LOCAL NODE SERVER IS RUNNING, BABY. Take a breathe, give yourself a high-five.

## Set up Grunt Watch
The nodemon will automatically update your SASS and html files on save. However, we need Grunt to watch our .js files.
1. Open a new terminal window and repeat step 2
2. In the terminal, type "grunt watch"
3. There ya go, we are now watching our /js/dev.js file which will uglify/minify into our /public/js/dev.min.js file

## Where is everything?
- The /public folder is basically our front facign site, this is where we edit our index file, and where our sass and js compile to
- Editing /sass/style.scss will compile to /public/sass/style.css
- Editing /js/dev.js will compile to /public/js/dev.min.js

## Go Nuts