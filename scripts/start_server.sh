
#!/bin/bash
set -e

systemctl enable apache2
systemctl restart apache2

echo "Apache web server started successfully"
