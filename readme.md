# StarShatter Dev Web Application

## Background
This site was put together around 2002 as a file repository for modifications for a game titled `StarShatter`.
This site and the community that eventually built up around its successor where the initiators to me to consider
a career in software engineering, specifically web technologies.

## Features
 - Forum system based on original StarShatter forums code base
 - Original Tutorials content
 - Members only area to administrate account and submit user content
 - Link library to other community portals
 - Official SDK mirror
 - Public release beta installers for StarShatter and the Magic 3D modelling application
 - User generated content lists with downloads
 
## Goal
Simply to keep some of the original projects that got me into web technologies alive and viewable for the public. Also
gives me a body of content to try new system architecture with.

## Requirements
 - Docker
 - Command prompt of some sort
 
## Road map
None; this project repository is for historic reference only.

## Usage
Clone the repository locally:
```
cd /project/root/parent
git clone https://github.com/davidjeddy/starshatter-dev.git
cd ./starshatter-dev
```

Then build and start the image via:

```
docker build -t ssd_v1 . --rm
docker run -d -h localhost -p 80:80 --name ssd_v1_app -v "$PWD":/var/www/html ssd_v1:latest --rm
docker logs -f ssd_v1_app
```

Finally, if all went well, you should be able to visit `localhost` in your client browser of choice and see the 
application running.


## Warning
This was a hobby project but an untrained `web developer` on long ago end of life of a language that has come a very 
long way in 15 years.
Though recent wrapped in a docker container for portability this site IS NOT:
 - Secure
 - Pragmatic
 - Best practice adhering
 - An example of any sort of decent practices; if anything this is what you should NOT be doing
