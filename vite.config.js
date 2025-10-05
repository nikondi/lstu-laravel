import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  server: {
    host: '0.0.0.0', // важно для Docker
    port: 5173,
    strictPort: true,
    hmr: {
      host: 'lstu.local',
      protocol: 'wss', // secure WebSocket
      clientPort: 443,
      path: "@vite/ws"
    },
  },
  plugins: [
    laravel({
      input: [
        'resources/css/styles.scss',
        'resources/js/app.ts',
        'resources/js/components/frontbar.ts',
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
