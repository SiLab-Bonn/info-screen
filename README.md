# Info Screen at PI Bonn

Info Screen is simple static webside build base on [reavel.js](http://lab.hakim.se/reveal-js/) framework sarved by [GitHub Pages](https://pages.github.com/) at http://silab-bonn.github.io/info-screen/ .

[live.js](http://livejs.com/) for auto refresh.

[simpleWeather](http://simpleweatherjs.com) for weather.

To edit/change modified index.html file.
More detail how to use this can be found under https://github.com/hakimel/reveal.js


## Raspberry Pi setup

Needed packages:

```bash
sudo apt-get install xautomation unclutter
```

Startup script (kiosk.sh):

```bash
#!/bin/bash
xset -dpms
xset s off
xset s noblank
unclutter &
epiphany-browser -a --profile ~/.config http://silab-bonn.github.io/info-screen &
sleep 15
xte 'key F11'
```

Init /home/pi/config/lxsession/LXDE-pi/autostart:

```bash
@/home/pi/kiosk.sh
```

Example cron reboot (as root):

```bash
0 4 * * * reboot
```
