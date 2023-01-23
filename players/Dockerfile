FROM node
COPY package.json package.json
RUN npm install -g players
COPY . .
EXPOSE 80
CMD ["node", "server.js"]