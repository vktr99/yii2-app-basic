FROM nginx:1.18
RUN if [ -e '/etc/nginx/conf.d/default.conf' ]; then rm /etc/nginx/conf.d/default.conf; fi
COPY image-files/conf/default.conf /etc/nginx/nginx.conf