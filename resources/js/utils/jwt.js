import Vue from 'vue';
import axios from 'axios';
import cookies from 'vue-cookies';
import store from '../store';

const jwt = {};

jwt.install = () => {
  const $jwt = {};

  $jwt.getAccessToken = () => cookies.get('access_token');

  $jwt.getUserData = async () => {
    if ($jwt.getAccessToken()) {
      try {
        const res = (await axios.post('auth/me'));
        store.dispatch('auth/setUser', res.data);
      } catch {
        cookies.remove('access_token');
      }
    }
  };

  $jwt.logout = async () => {
    // store.dispatch('loader/setLoader', true);
    await axios.post('auth/logout');
    cookies.remove('access_token');
    store.dispatch('auth/setUser', {});
    // store.dispatch('loader/setLoader', false);
  };

  $jwt.accessToken = async (user) => {
    const status = await axios.post('auth/login', user).then((res) => {
      axios.defaults.headers.common.Authorization = `Bearer ${res.data.access_token}`;
      cookies.set('access_token', res.data.access_token);
      store.dispatch('auth/setUser', res.data.user);
      return res.status;
    }).catch(e => e.response.status);
    return status;
  };

  jwt.check = async () => {
    if ($jwt.getAccessToken()) {
      try {
        const res = await axios.post('auth/check');
        return res.status;
      } catch {
        cookies.remove('access_token');
        return 401;
      }
    }
    return 401;
  };

  if ($jwt.getAccessToken()) {
    axios.defaults.headers.common.Authorization = `Bearer ${$jwt.getAccessToken()}`;
    $jwt.getUserData();
  }

  Vue.prototype.$jwt = $jwt;
};

export default jwt;
