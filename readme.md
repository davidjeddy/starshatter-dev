StarShatter Dev Web Application

# Background
This site was put together around 2002 as a file repository for mods (modifications) for a game titled `StarShatter`.

# Features

 - Forum system based on original StarShatter forums
 - Original Tutorials
 - Members only area to administrate user content
 - Link library to other community portals
 - Official SDK mirror
 - Public release beta installers for StarShatter and the Magic 3D modelling application
 - User generated content lists with downloads
 
# To Run:
```
docker build -t ssd_v1 . --rm
docker run -d -h localhost -p 80:80 --name ssd_v1_app -v "$PWD":/var/www/html ssd_v1:latest --rm
docker logs -f ssd_v1_app
```

# Warning:
This was a hobby project but an untrained `web developer` on long ago end of life of a language that has come a very long way in 15 years.
Though recent wrapped in a docker container for portability this site IS NOT:
 - Secure
 - Pragmatic
 - Best practice adhering
 - An example of any sort of decent practices; if anything this is what you should NOT be doing

# Goal:
Simply to keep some of the original projects that got me into web technologies alive and viewable for the public. Also
gives me a body of content to try new system architecture with.

# Road map:
n/a project is for historic reference only.