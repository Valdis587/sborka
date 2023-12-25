export const server = (done) => {
   app.plugins.browsersync.init({
      proxy: 'http://testsbor',
      host: 'testsbor',
      open: 'external'
   });
}