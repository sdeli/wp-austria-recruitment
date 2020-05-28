 ssh -t -i /home/sandor/Downloads/austria-recruitment-ssh.pem bitnami@18.157.103.85 "
    cd /home/bitnami;
    git clone https://github.com/sdeli/wp-austria-recruitment.git;
    cd ./wp-austria-recruitment/;
    composer install;
    cd ..;
    sudo cp -r ./wp-austria-recruitment/wp-content ./apps/wordpress/htdocs/;
    rm -rf wp-austria-recruitment/;
 "