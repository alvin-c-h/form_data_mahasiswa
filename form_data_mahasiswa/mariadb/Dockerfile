FROM mariadb:latest as builder

# needed for intialization
ENV MYSQL_ROOT_PASSWORD=root

COPY init.sql /docker-entrypoint-initdb.d/