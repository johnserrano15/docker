FROM node:latest

WORKDIR /usr/src/app

COPY package.json /usr/src/app
RUN npm install

# Se recomienda usar mejor COPY que ADD
COPY . /usr/src/app

EXPOSE 3000

CMD ["npm", "start"]