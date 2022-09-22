FROM alpine:latest

RUN apk add --update nodejs npm
COPY ./my-project/ /app
WORKDIR /app
CMD npm install --force && npm run dev