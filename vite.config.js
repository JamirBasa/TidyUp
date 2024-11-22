import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
<<<<<<< Updated upstream
=======
     server: {
        host: "192.168.1.93", // Replace with your local IP
        port: 8000, // Or any other port you prefer
    }, 
>>>>>>> Stashed changes
});
