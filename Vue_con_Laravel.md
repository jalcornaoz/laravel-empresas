# VUE CON LARAVEL

Para integrar Vue en Laravel:

1. Instalar Vue

```shell
npm install vue@next --save-dev
```

2. Instalar el plugin de Vue para Vite

```shell
npm install @vitejs/plugin-vue
```

3. Añadimos el

En [app.js](./resources/js/app.js) tenemos que añadir:

```javascript
import { createApp } from "vue/dist/vue.esm-bundler";
```
