import '../css/app.css';
import './bootstrap';

import { createInertiaApp } from '@inertiajs/react';
import { GlobalStyles, StyledEngineProvider } from '@mui/material';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createRoot } from 'react-dom/client';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.jsx`,
            import.meta.glob('./Pages/**/*.jsx'),
        ),
    setup({ el, App, props }) {
        const root = createRoot(el);

        root.render(
            <StyledEngineProvider enableCssLayer>
                <GlobalStyles styles="@layer theme, base, mui, components, utilities;" />
                <App {...props} />
            </StyledEngineProvider>,
        );
    },
    progress: {
        color: '#4B5563',
    },
});
