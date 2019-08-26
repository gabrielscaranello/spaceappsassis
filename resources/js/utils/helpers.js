import Vue from 'vue';

const helpers = {};

helpers.install = () => {
  const $helpers = {};

  $helpers.formatDate = (date, region) => {
    if (!date) return null;
    const [year, month, day] = date.split('-');

    switch (region) {
      case 'br':
        return `${day}/${month}/${year}`;
      default:
        return date;
    }
  };

  Vue.prototype.$helpers = $helpers;
};

export default helpers;
