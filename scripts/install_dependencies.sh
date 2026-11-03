
#!/bin/bash
set -e

apt-get update -y
apt-get install -y apache2 php libapache2-mod-php

systemctl enable apache2

echo "Apache and PHP installation completed"
