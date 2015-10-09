# Info Screen Presentation

Info Screen is simple static webside build base on reavel.js framework.

To edit/change modified index.html file.
More detail how to use this can be found under https://github.com/hakimel/reveal.js

Modified live.js scripts should force browser refresh every 10min.

## Raspberry Pi setup

Needed packages:

```bash
sudo apt-get install tint2 xautomation unclutter
```

Startup script (kiosk.sh):

```bash
#!/bin/bash
openbox --config-file ~/.config/openbox/LXDE-rc.xml --startup tint2 &
xset -dpms
xset s off
xset -s noblank
xte 'sleep 10' 'key F11' &
xte 'sleep 20' 'key F5' &
unclutter &
epiphany-browser -a  --profile ~/.config http://silab-bonn.github.io/info-screen
while true
do
 sleep 300
 xte 'key F5'
done
```

Init:

```bash
xinit ./kiosk.sh
```

Example cron reboot:

```bash
0 4 * * * reboot
```



