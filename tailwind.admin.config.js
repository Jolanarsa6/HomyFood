// tailwind.admin.config.js
import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/admin/**/*.blade.php', 
    ],
    important: '#admin-panel',
    // prefix: 'ad-', 
    // corePlugins: {
    //     preflight: false, 
    // },
    theme: {
        extend: {
            fontFamily: {
                sans: ["Cairo", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // الأخضر الملكي لـ Homy Food
                "homy-green": {
                    100: "#E8EFEA", // أخضر باهت جداً (للظلال والخلفيات الناعمة)
                    500: "#225E38", // أخضر فاتح (لحالات الـ Hover)
                    600: "#1C4D2E", // أخضر متوسط الداكن
                    700: "#1A472A", // الأخضر الداكن الملكي (اللون الأساسي للعلامة)
                    // 800: "#12211B",
                    // 900: "#0A1411",
                },
                // الذهبي الفاخر لـ Homy Food
                "homy-gold": {
                    50: "#FDFBF6", // خلفية ذهبية باهتة جداً (لرسائل الخطأ أو الأقسام المميزة)
                    100: "#F6EEDA", // ذهبي فاتح (لحلقات التركيز focus rings)
                    200: "#EAD5AC", // ذهبي للحدود الناعمة
                    400: "#D4B87E", // ذهبي متوسط
                    500: "#C4A462", // الذهبي الفاخر (اللون المساعد الأساسي)
                    600: "#A88E53", // ذهبي داكن (لرسائل الخطأ والتحذيرات الأنيقة)
                },
            },
        },
    },

    plugins: [],
};