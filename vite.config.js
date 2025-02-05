import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/styles.scss',
        'resources/js/js.ts',
        'resources/js/frontbar.ts',
        'resources/css/frontbar.scss'
      ],
      refresh: true,
    }),
  ],
  publicDir: "./public",
  build: {
    resolve: {
      alias: {
        '@': '/resources/js',
      }
    },
  }
});
