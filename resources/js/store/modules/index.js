const requestModule = require.context('.', true, /\.js$/);
const modules = {};

requestModule.keys().forEach((fileName) => {
  if (fileName === './index.js') return;

  const path = fileName.replace(/(\.\/|\.js)/g, '');
  const [moduleName, imported] = path.split('/');

  if (!modules[moduleName]) {
    modules[moduleName] = {
      namespaced: true,
    };
  }

  modules[moduleName][imported] = requestModule(fileName).default;
});

export default modules;
