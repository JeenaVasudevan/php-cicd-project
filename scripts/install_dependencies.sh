
#!/bin/bash
set -e

dnf install -y httpd php

systemctl enable httpd

echo "Apache and PHP installation completed"
