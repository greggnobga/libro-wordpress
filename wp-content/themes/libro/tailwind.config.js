export default {
    content: ['./*.php', './src/**/*.js', './src/**/*.svelte'],
    theme: {
        fontFamily: {
            sans: ['Montserrat', 'ui-sans-serif', 'sans-serif'],
            serif: ['Open Sans', 'ui-serif', 'serif'],
            mono: ['Roboto Mono', 'ui-monospace', 'monospace'],
            hand: ['Kalam', 'cursive'],
        },
        extend: {
            colors: {
                hokey: '#D2A134',
                luxor: '#9E7626',
                energy: '#F5DC5D',
                ronchi: '#EFCA50',
                coast: '#65491B',
            },
        },
    },
    plugins: [],
};
