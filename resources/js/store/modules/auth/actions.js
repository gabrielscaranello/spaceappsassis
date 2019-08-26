export default {
  async setUser(context, obj) {
    await context.commit('SET_USER', obj);
  },
};
