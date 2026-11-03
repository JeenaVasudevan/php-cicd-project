
#!/bin/bash
set -e

systemctl enable httpd
systemctl restart httpd

echo "Apache web server started successfully"
