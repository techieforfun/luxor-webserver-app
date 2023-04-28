FROM php:8.2-cli-alpine

WORKDIR /app

COPY ./ /app/

RUN apk update && \
    apk add --no-cache curl curl-dev && \
    docker-php-ext-install curl && \
    adduser -D standard && \
    chmod +x entrypoint.sh

EXPOSE 8080

USER standard

ENV TARGET_ENDPOINTS=${TARGET_ENDPOINTS}

ENTRYPOINT [ "/app/entrypoint.sh" ]