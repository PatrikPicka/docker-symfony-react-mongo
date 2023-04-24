FROM node:18.16.0
ENV NODE_ENV=production

WORKDIR /var/www/project

COPY ["./app/package.json", "./app/package-lock.json*", "./"]

RUN npm install --production

COPY . .

CMD [ "node", "server.js" ]