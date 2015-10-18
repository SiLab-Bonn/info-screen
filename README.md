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

Init /home/pi/config/lxsession/LXDE-pi/autostart:

```bash
@xset -dpms
@xset s off
@xset s noblank
@unclutter &
```

Watchdog script to start browser if not running (watchdog.sh):

```bash
#!/bin/bash
PROCESS=epiphany-browser
PIDS=`ps ax | grep -v grep | grep $PROCESS | grep -o '^[ ]*[0-9]*'`
if [ -z "$PIDS" ]; then
  epiphany-browser -a --profile ~/.config http://silab-bonn.github.io/info-screen --display=:0 &
  sleep 15s;
  xte "key F11" -x:0
fi
```

Example cron script (crontab -e):

```bash
15 5 * * * sudo reboot
*/1 * * * * /home/pi/watchdog.sh
```
