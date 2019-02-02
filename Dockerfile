FROM composer:latest
MAINTAINER philporada@gmail.com
RUN apk update && \
    apk --no-cache add nodejs nodejs-npm build-base && \
    npm install -g npm --no-progress && \
    npm cache clean --force
ENV PATH="/tmp/vendor/bin:${PATH}"
WORKDIR /app
CMD ["composer", "install"]
