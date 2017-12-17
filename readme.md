StarShatter Dev Web Application

# Background
This site was put together around 2002 as a file repository for mods (modifications) for a game titled `StarShatter`.


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
