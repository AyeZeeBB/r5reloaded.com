import { defineConfig } from 'astro/config';

// https://astro.build/config
export default defineConfig({
    build: {
      inlineStylesheets: `always`,
      site: 'https://r5reloaded.com',
        output: 'static',
        format: 'file'
    },
  });
