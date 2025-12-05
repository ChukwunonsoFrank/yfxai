<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17538896252"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-17538896252');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moxyai - Automated AI Trading</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preload" href="{{ asset('wp-content/uploads/2024/06/space-cover.webp') }}" as="image">
    <link rel="preload" href="{{ asset('wp-content/uploads/2024/06/door-2.webp') }}" as="image">
    <link rel="preload" href="{{ asset('wp-content/uploads/2024/05/door-mobil.webp') }}" as="image">
    <link rel="preload" href="{{ asset('wp-content/uploads/2023/03/EuclidSquare-Bold.ttf') }}" as="font"
        type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('wp-content/uploads/2023/03/EuclidSquare-Regular.ttf') }}" as="font"
        type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('wp-content/uploads/2023/03/EuclidSquare-Medium.ttf') }}" as="font"
        type="font/ttf" crossorigin="anonymous">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <link rel='dns-prefetch' href='https://code.jquery.com/' />
    <link rel='dns-prefetch' href='https://maxcdn.bootstrapcdn.com/' />
    <link rel='dns-prefetch' href='https://unpkg.com/' />
    <link rel='dns-prefetch' href='https://cdn.jsdelivr.net/' />
    <link rel='dns-prefetch' href='https://cdnjs.cloudflare.com/' />
    <link rel='dns-prefetch' href='https://js-eu1.hs-scripts.com/' />

    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/tradelocker.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.1"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>

    <style id='cf-frontend-style-inline-css'>
        @font-face {
            font-family: 'Source Code Pro';
            font-weight: 400;
            src: url('{{ asset('wp-content/uploads/2024/07/Source-Code-Pro-for-Powerline.otf') }}') format('OpenType');
        }

        @font-face {
            font-family: 'Menlo';
            font-weight: 400;
            src: url('{{ asset('wp-content/uploads/2023/12/Menlo-Regular.woff') }}') format('woff');
        }

        @font-face {
            font-family: 'Inter';
            font-weight: 700;
            src: url('{{ asset('wp-content/uploads/2023/12/Inter-VariableFont_slntwght.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Inter';
            font-weight: 600;
            src: url('{{ asset('wp-content/uploads/2023/12/Inter-VariableFont_slntwght.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Inter';
            font-weight: 500;
            src: url('{{ asset('wp-content/uploads/2023/12/Inter-VariableFont_slntwght.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Euclid Square';
            font-weight: 400;
            font-display: auto;
            font-fallback: Helvetica;
            src: url('{{ asset('wp-content/uploads/2023/03/EuclidSquare-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Euclid Square';
            font-weight: 700;
            font-display: auto;
            font-fallback: Helvetica;
            src: url('{{ asset('wp-content/uploads/2023/03/EuclidSquare-Bold.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Euclid Square';
            font-weight: 300;
            font-display: auto;
            font-fallback: Helvetica;
            src: url('{{ asset('wp-content/uploads/2023/03/EuclidSquare-Light.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Euclid Square';
            font-weight: 500;
            font-display: auto;
            font-fallback: Helvetica;
            src: url('{{ asset('wp-content/uploads/2023/03/EuclidSquare-Medium.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Euclid Square';
            font-weight: 600;
            font-display: auto;
            font-fallback: Helvetica;
            src: url('{{ asset('wp-content/uploads/2023/03/EuclidSquare-SemiBold.ttf') }}') format('truetype');
        }
    </style>
    <link rel='stylesheet' id='dashicons-css' href='{{ asset('wp-includes/css/dashicons.minb6a4.css') }}'
        media='all' />
    <link rel='stylesheet' id='menu-icons-extra-css'
        href='{{ asset('wp-content/plugins/menu-icons/css/extra.minc28c.css') }}' media='all' />
    <link rel='stylesheet' id='hello-elementor-style-css'
        href='{{ asset('wp-content/themes/hello-elementor/style8a54.css') }}' media='all' />
    <link rel='stylesheet' id='hello-elementor-child-style-css'
        href='{{ asset('wp-content/uploads/wp-less/tradelocker-child/css/style-5430c549c4.css') }}' media='all' />
    <link rel='stylesheet' id='price-calc-style-css'
        href='{{ asset('wp-content/uploads/wp-less/tradelocker-child/css/price-calc-a7036eb618.css') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-widgets-css'
        href='{{ asset('wp-content/uploads/wp-less/tradelocker-child/css/elementor-widgets-e4d9c83533.css') }}'
        media='all' />
    <link rel='stylesheet' id='prism-vs-code-css'
        href='{{ asset('wp-content/themes/tradelocker-child/css/prism-vs-code39c0.css') }}' media='all' />
    <link rel='stylesheet' id='select2css-css'
        href='{{ asset('wp-content/themes/tradelocker-child/css/select29cd0.css') }}' media='all' />

    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

    <link rel='stylesheet' id='wp-block-library-css'
        href='{{ asset('wp-includes/css/dist/block-library/style.minb6a4.css') }}' media='all' />
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>

    <link rel='stylesheet' id='hello-elementor-css'
        href='{{ asset('wp-content/themes/hello-elementor/style.min41fe.css') }}' media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css'
        href='{{ asset('wp-content/themes/hello-elementor/theme.min41fe.css') }}' media='all' />
    <link rel='stylesheet' id='hello-elementor-header-footer-css'
        href='{{ asset('wp-content/themes/hello-elementor/header-footer.min41fe.css') }}' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='{{ asset('wp-content/plugins/elementor/assets/css/frontend-lite.mina44d.css') }}' media='all' />
    <link rel='stylesheet' id='elementor-post-23-css'
        href='{{ asset('wp-content/uploads/elementor/css/post-23578b.css') }}' media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='{{ asset('wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.minfc13.css') }}'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='{{ asset('wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-post-2264-css'
        href='{{ asset('wp-content/uploads/elementor/css/post-22648455.css') }}' media='all' />
    <link rel='stylesheet' id='elementor-custom-widget-editor-css'
        href='{{ asset('wp-content/plugins/elementor-custom-widgets/assets/css/editorb6a4.css') }}' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='{{ asset('wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='{{ asset('wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css') }}'
        media='all' />

    <script data-cookieconsent="ignore" data-cookiecategory="essential"
        src="{{ asset('code.jquery.com/jquery-3.6.0.min.js') }}" id="jquery-js"></script>

    <script async src="https://www.google.com/recaptcha/api.js"></script>
    @livewireStyles
    @vite('resources/css/app.css')

    <style>
        [x-cloak] {
            display: none !important;
        }

        .gt_container-unisv1 a.glink span {
            color: #7a7a7a;
            font-weight: 400;
        }
    </style>
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '789556817321629');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=789556817321629&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <script src="//code.jivosite.com/widget/nr087hBYZF" async></script>
</head>

<body
    class="home page-template page-template-elementor_header_footer page page-id-2264 wp-custom-logo elementor-default elementor-template-full-width elementor-kit-23 elementor-page elementor-page-2264">
    <header id="site-header" class="site-header dynamic-header header-full-width menu-dropdown-mobile"
        role="banner">
        <div class="header-inner">
            <div class="site-branding show-logo">
                <div class="site-logo show">
                    <a href="{{ route('home') }}" class="custom-logo-link" rel="home" aria-current="page"><img
                            width="646" height="196"
                            src="{{ asset('wp-content/uploads/2023/05/moxyai-logo.png') }}" class="custom-logo"
                            alt="TradeLocker" decoding="async" fetchpriority="high"
                            srcset="{{ asset('wp-content/uploads/2023/05/moxyai-logo.png') }} 646w, {{ asset('wp-content/uploads/2023/05/cropped-Tradelockerlogo-1-300x91.png') }} 300w"
                            sizes="(max-width: 646px) 100vw, 646px" /></a>
                </div>
            </div>
            <nav class="site-navigation show">
                <div style="display: flex; margin-right: 16px;">
                    <div class="gtranslate_wrapper"></div>
                </div>
                <div class="menu-primary-menu-container">
                    <ul id="menu-primary-menu" class="menu">
                        <li id='menu-item-1' class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="/#home-section" data-analytics-label="Start trading">Home<span
                                    class="menu-item-description"></span></a> </li>
                        <li id='menu-item-2' class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="/#features-section" data-analytics-label="Start trading">Features<span
                                    class="menu-item-description"></span></a> </li>
                        <li id='menu-item-3' class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="/#faqs-section" data-analytics-label="Start trading">FAQs<span
                                    class="menu-item-description"></span></a> </li>
                        <li id='menu-item-4' class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="{{ route('register') }}" data-analytics-label="Start trading">Sign Up<span
                                    class="menu-item-description"></span></a> </li>
                        <li id='menu-item-5' class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="{{ route('login') }}" data-analytics-label="Start trading">Login<span
                                    class="menu-item-description"></span></a> </li>
                    </ul>
                </div>
            </nav>
            <div class="site-navigation-toggle-holder show" style="max-width: 50%;">
                <div style="display: flex; margin-right: 16px; margin-top: -6px;">
                    <div class="gtranslate_wrapper"></div>
                </div>
                <div class="site-navigation-toggle" role="button" tabindex="0">
                    <svg width="21" height="18" viewBox="0 0 21 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect y="1.33716" width="21" height="1" fill="white" fill-opacity="0.2" />
                        <rect y="8.33716" width="21" height="1" fill="white" fill-opacity="0.2" />
                        <rect y="15.3372" width="21" height="1" fill="white" fill-opacity="0.2" />
                        <rect x="2" y="7.33716" width="15" height="3" fill="white" />
                        <rect x="2" y="14.3372" width="12" height="3" fill="white" />
                        <rect x="2" y="0.337158" width="17" height="3" fill="white" />
                    </svg>
                    <span class="screen-reader-text">Menu</span>
                </div>
            </div>
            <nav id="mobile__navbar" class="site-navigation-drop" aria-hidden="true">
                <div class="menu-primary-menu-container">
                    <ul id="menu-primary-menu" class="menu">
                        <li id='menu-item-1' class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                onclick="toggleNavbar()" href="/#home-section"
                                data-analytics-label="Start trading">Home<span
                                    class="menu-item-description"></span></a> </li>
                        <li id='menu-item-2' class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                onclick="toggleNavbar()" href="/#features-section"
                                data-analytics-label="Start trading">Features<span
                                    class="menu-item-description"></span></a> </li>
                        <li id='menu-item-3' class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                onclick="toggleNavbar()" href="/#faqs-section"
                                data-analytics-label="Start trading">FAQs<span
                                    class="menu-item-description"></span></a> </li>
                        <li id='menu-item-4' class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="{{ route('register') }}" data-analytics-label="Start trading">Sign Up<span
                                    class="menu-item-description"></span></a> </li>
                        <li id='menu-item-5' class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="{{ route('login') }}" data-analytics-label="Start trading">Login<span
                                    class="menu-item-description"></span></a> </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div data-elementor-type="wp-page" data-elementor-id="2264" class="elementor elementor-2264">
        {{ $slot }}
    </div>

    <footer class="elementor-section elementor-section-boxed">
        <div class="elementor-container">
            <div class="footer-grid">
                <div class="footer-column">
                    <div class="tradelocker-logo-container">
                        <a class="tradelocker-logo" href="{{ route('home') }}">
                            <svg width="181" height="40" viewBox="0 0 181 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M64.0209 18.9307V31.063H58.2396V18.4011C58.2396 15.6059 57.0995 14.208 54.82 14.208C53.4896 14.208 52.4647 14.6154 51.746 15.4296C51.0267 16.2437 50.667 17.3705 50.667 18.8085V31.063H44.8857V9.72912H50.2189V12.3346C51.3316 10.2721 53.3807 9.24023 56.3669 9.24023C59.1894 9.24023 61.2525 10.2447 62.5556 12.2531C64.3736 10.2447 66.7353 9.24023 69.6399 9.24023C72.1365 9.24023 74.05 10.0137 75.3805 11.5612C76.7102 13.108 77.3755 15.1711 77.3755 17.7499V31.063H71.5942V18.4011C71.5942 15.6059 70.4541 14.208 68.1745 14.208C66.8167 14.208 65.7855 14.6218 65.0802 15.4499C64.3742 16.2781 64.0216 17.4386 64.0216 18.9307H64.0209Z"
                                    fill="white" />
                                <path
                                    d="M100.419 28.315C98.3558 30.4729 95.6555 31.5519 92.3167 31.5519C88.9779 31.5519 86.2769 30.4729 84.2145 28.315C82.1514 26.157 81.1201 23.5178 81.1201 20.3961C81.1201 17.2743 82.1514 14.6351 84.2145 12.4772C86.2769 10.3192 88.9779 9.24023 92.3167 9.24023C95.6555 9.24023 98.3558 10.3192 100.419 12.4772C102.481 14.6351 103.513 17.275 103.513 20.3961C103.513 23.5171 102.481 26.157 100.419 28.315ZM88.4285 15.9586C87.4107 17.0445 86.902 18.5233 86.902 20.3961C86.902 22.2688 87.4107 23.7489 88.4285 24.8336C89.4464 25.9195 90.7425 26.4619 92.3167 26.4619C93.8909 26.4619 95.187 25.9189 96.2048 24.8336C97.2227 23.7482 97.7313 22.2688 97.7313 20.3961C97.7313 18.5233 97.2227 17.0439 96.2048 15.9586C95.187 14.8732 93.8903 14.3302 92.3167 14.3302C90.7431 14.3302 89.4464 14.8732 88.4285 15.9586Z"
                                    fill="white" />
                                <path
                                    d="M126.394 9.73047L118.679 20.2313L126.639 31.0644H119.676L115.198 24.9686L110.72 31.0644H103.758L111.718 20.2319L104.002 9.73047H110.964L115.199 15.4946L119.433 9.73047H126.395H126.394Z"
                                    fill="white" />
                                <path
                                    d="M134.565 30.7289L126.189 9.73047H132.337L137.193 23.8934L142.638 9.73047H148.663L139.422 32.8149C138.391 35.393 137.156 37.232 135.717 38.3314C134.278 39.4307 132.554 39.9801 130.546 39.9801L128.796 39.8579V34.8908C129.094 34.9449 129.46 34.9722 129.895 34.9722C130.869 34.9722 131.694 34.7609 132.371 34.3408C133.047 33.9187 133.643 33.0689 134.157 31.792L134.565 30.7289H134.565Z"
                                    fill="white" />
                                <path
                                    d="M155.381 16.774L149.844 15.7562C150.197 13.8567 151.14 12.2958 152.674 11.0742C154.207 9.85266 156.426 9.24219 159.33 9.24219C162.425 9.24219 164.758 9.93413 166.333 11.3187C167.907 12.7026 168.695 14.6568 168.695 17.1814V25.446C168.695 26.369 169.075 26.8305 169.835 26.8305L170.445 26.7898V31.1865C170.146 31.2948 169.645 31.3495 168.939 31.3495C166.497 31.3495 164.881 30.4679 164.094 28.7033C162.33 30.6034 159.873 31.5532 156.726 31.5532C154.256 31.5532 152.39 30.9695 151.128 29.8026C149.865 28.6358 149.234 27.1297 149.234 25.2837C149.233 21.505 152.01 19.1554 157.563 18.2362L163.199 17.3037V17.1407C163.199 15.0509 161.909 14.0056 159.331 14.0056C156.969 14.0056 155.653 14.9286 155.382 16.774H155.381ZM163.198 21.4713L158.123 22.435C156.95 22.6489 156.105 22.9481 155.588 23.3351C155.07 23.7222 154.811 24.2346 154.811 24.8743C154.811 26.3416 155.883 27.0743 158.028 27.0743C159.683 27.0743 160.959 26.6383 161.855 25.7643C162.751 24.8909 163.199 23.7152 163.199 22.2371V21.4713H163.198Z"
                                    fill="white" />
                                <path
                                    d="M179.483 5.98436C178.832 6.63557 177.99 6.9615 176.959 6.9615C175.928 6.9615 175.086 6.63557 174.435 5.98436C173.784 5.33315 173.458 4.50562 173.458 3.50112C173.458 2.49661 173.784 1.66271 174.435 0.997503C175.086 0.332927 175.927 0 176.959 0C177.991 0 178.832 0.332927 179.483 0.997503C180.134 1.66271 180.46 2.49725 180.46 3.50112C180.46 4.50498 180.134 5.33315 179.483 5.98436ZM174.068 31.0638V9.72993H179.85V31.0638H174.068Z"
                                    fill="white" />
                                <path
                                    d="M10.411 10.6882V12.5476L9.17929 12.3547L5.92389 11.8461V29.183L0 30.7553V9.05859L5.92389 9.98608L9.17929 10.4953L10.411 10.6882Z"
                                    fill="#3C70FD" />
                                <path opacity="0.1"
                                    d="M10.4114 10.687V12.5464L9.17969 12.3535V10.4941L10.4114 10.687Z"
                                    fill="#0C0078" />
                                <path
                                    d="M22.8706 9.0007V10.918L21.6395 10.5488L18.3262 9.55897V31.6459L10.4111 35.2425V5.28125L12.1025 5.78604L18.3262 7.64227L21.6395 8.6315L22.8706 9.0007Z"
                                    fill="#49A2FE" />
                                <path d="M18.3262 7.63693V7.64139L12.1025 5.78516L18.3262 7.63693Z"
                                    fill="url(#paint0_linear_598_339)" />
                                <path opacity="0.1"
                                    d="M22.8708 9.00006V10.9174L21.6396 10.5482V8.63086L22.8708 9.00006Z"
                                    fill="#0C0078" />
                                <path d="M32.6822 7.37881V32.1011L22.8701 40.0003V1.99219L32.6822 7.37881Z"
                                    fill="#55CFFF" />
                                <defs>
                                    <linearGradient id="paint0_linear_598_339" x1="12.1025" y1="6.71327"
                                        x2="18.3262" y2="6.71327" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#3C70FD" />
                                        <stop offset="1" stop-color="#55CFFF" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                        <p>Unlock your potential.</p>
                        <div class="system-status-wrapper flex-wrap">
                            <div id="status-container"></div>
                            <a rel="noreferrer noopener" href="{{ route('login') }}"
                                class="status status-up">LIVE</a>
                            <a rel="noreferrer noopener" href="{{ route('login') }}"
                                class="status status-up">DEMO</a>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <h5>Resources</h5>
                    <div class="menu-business-container">
                        <ul id="menu-business" class="menu">
                            <li id="menu-item-2374"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2374"><a
                                    href="{{ route('register') }}">Sign Up</a></li>
                            <li id="menu-item-2374"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2374"><a
                                    href="{{ route('login') }}">Sign In</a></li>
                            <li id="menu-item-2374"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2374"><a
                                    href="/#features-section">Features</a></li>
                            <li id="menu-item-2374"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2374"><a
                                    href="/#faqs-section">FAQs</a></li>
                            <li id="menu-item-2374"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2374"><a
                                    href="{{ route('findus') }}">Find Us</a></li>
                            <li id="menu-item-1005"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1005"><a
                                    href="{{ route('terms') }}">Terms and Conditions</a></li>
                            <li id="menu-item-1006"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1006"><a
                                    href="{{ route('privacy') }}">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-container">
            <div class="app-wrapper">
                <ul class="app-links">
                    <a href="/appmoxyai.apk">
                        <li class="playstore">
                            <div class="supertitle">Get it on</div>
                            <div class="title">Google Play</div>
                        </li>
                    </a>
                    <a href="https://apps.apple.com/app/ceramicscoat-pro/id6751297821">
                        <li class="appstore">
                            <div class="supertitle">Download on the</div>
                            <div class="title">App Store</div>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </footer>
    <div class="disclaimer elementor-section elementor-section-boxed">
        <div class="elementor-container">
            <p style="font-size:14px">
                Moxyai is available worldwide with no regional restrictions. Access to our platform is limited
                to individuals aged 18 years and above. By using our services, you acknowledge that you understand these
                risks and agree to our Terms & Conditions. Our platform operates with transparency, instant
                deposits/withdrawals, and 24/7 support to ensure a secure trading environment.
            </p>
        </div>
        <br>
        <div style="text-align: center;">
            <p style="font-size:14px">Moxyai © <span id="year">{{ now()->year }}</span>. All rights reserved.
            </p>
        </div>
    </div>

    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>

    <script>
        function toggleNavbar() {
            document.getElementById('mobile__navbar').setAttribute('aria-hidden', true);
        }
    </script>

    <link rel='stylesheet' id='e-animations-css'
        href="{{ asset('wp-content/plugins/elementor/assets/lib/animations/animations.mina44d.css') }}"
        media='all' />
    <script data-cookieconsent="ignore" data-cookiecategory="essential"
        src="{{ asset('maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}" id="scrollspy-js"></script>
    <script data-cookieconsent="ignore" data-cookiecategory="essential"
        src="{{ asset('unpkg.com/typeit@8.7.1/dist/index.umd.js') }}" id="typeit-js"></script>
    <script data-cookieconsent="ignore" data-cookiecategory="essential"
        src="{{ asset('cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min4819.js') }}" id="select2-js"></script>
    <script data-cookieconsent="ignore" data-cookiecategory="essential"
        src="{{ asset('cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.minb6a4.js') }}" id="gsap-js"></script>
    <script data-cookieconsent="ignore" data-cookiecategory="essential"
        src="{{ asset('cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.minb6a4.js') }}" id="scroll-trigger-js">
    </script>
    <script src="{{ asset('cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/CSSRulePlugin.minb6a4.js') }}"
        id="cssrule-plugin-js"></script>
    <script data-cookieconsent="ignore" data-cookiecategory="essential"
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/SplitText.min.js" id="split-text-js"></script>
    <script data-cookieconsent="ignore" data-cookiecategory="essential"
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollSmoother.min.js" id="scroll-smoother-js"></script>
    <script data-cookieconsent="ignore" data-cookiecategory="essential"
        src="{{ asset('cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.minb6a4.js') }}" id="prism-js"></script>
    <script data-cookieconsent="ignore" data-cookiecategory="essential"
        src="{{ asset('cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/components/prism-python.minb11e.js') }}"
        id="prism-python-js"></script>
    <script data-cookieconsent="ignore" data-cookiecategory="essential"
        src="{{ asset('wp-content/themes/tradelocker-child/js/animate-typed120.js') }}" id="animate-type-js"></script>
    <script src="{{ asset('wp-content/themes/tradelocker-child/js/accordionda59.js') }}" async defer
        data-cookieconsent="ignore" data-cookiecategory="essential"></script>
    <script data-cookieconsent="ignore" data-cookiecategory="essential"
        src="{{ asset('wp-content/themes/tradelocker-child/js/anchoring32e8.js') }}" id="anchoring-js-js"></script>
    <script src="{{ asset('wp-content/themes/tradelocker-child/js/utils6798.js') }}" id="utils-js-js"></script>
    <script src="{{ asset('wp-content/themes/tradelocker-child/js/gsap-activations290c.js') }}" id="gsap-activations-js">
    </script>
    <script src="{{ asset('wp-content/themes/tradelocker-child/js/marqueec2dd.js') }}" id="marquee-activations-js">
    </script>
    <script src="{{ asset('wp-content/themes/tradelocker-child/js/switch-tabs0ab2.js') }}" async defer
        data-cookieconsent="ignore" data-cookiecategory="essential"></script>
    <script src="{{ asset('wp-content/themes/tradelocker-child/js/platform-link69a7.js') }}" async defer
        data-cookieconsent="ignore" data-cookiecategory="essential"></script>
    <script data-cookieconsent="ignore" data-cookiecategory="essential"
        src="{{ asset('wp-content/themes/tradelocker-child/js/animations580a.js') }}" id="animations-js"></script>
    <script id="ajax-search-js-extra">
        var ajax_obj = {
            "ajaxurl": "https:\/\/tradelocker.com\/wp-admin\/admin-ajax.php"
        };
    </script>
    <script src="{{ asset('wp-content/themes/tradelocker-child/js/ajax-search544d.js') }}" id="ajax-search-js"></script>
    <script id="leadin-script-loader-js-js-extra">
        var leadin_wordpress = {
            "userRole": "visitor",
            "pageType": "home",
            "leadinPluginVersion": "11.3.6"
        };
    </script>
    <script src="{{ asset('js-eu1.hs-scripts.com/1452689439a4a.js') }}" id="leadin-script-loader-js-js"></script>
    <script src="{{ asset('wp-content/plugins/maintainnance-plugin/js/campaign-bara20d.js') }}" id="campaign-bar-js">
    </script>
    <script src="{{ asset('cdn.jsdelivr.net/npm/js-cookie@2.2.1/src/js.cookie.min77e6.js') }}" id="js-cookie-js"></script>
    <script src="{{ asset('wp-content/plugins/partner-portal-plugin/js/fetchCookies0b99.js') }}" id="fetchCookies-js">
    </script>
    <script src="{{ asset('wp-content/plugins/partners-plugin/js/searchfiltere9db.js') }}" id="search-filter-js"></script>
    <script src="{{ asset('wp-content/themes/tradelocker-child/js/toggle-projects7ae3.js') }}" id="toggle-projects-js">
    </script>
    <script src="{{ asset('wp-content/themes/hello-elementor/assets/js/hello-frontend.min41fe.js') }}"
        id="hello-theme-frontend-js"></script>
    <script src="{{ asset('wp-content/plugins/elementor/assets/js/webpack.runtime.mina44d.js') }}"
        id="elementor-webpack-runtime-js"></script>
    <script src="{{ asset('wp-content/plugins/elementor/assets/js/frontend-modules.mina44d.js') }}"
        id="elementor-frontend-modules-js"></script>
    <script src="{{ asset('wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js') }}"
        id="elementor-waypoints-js"></script>
    <script src="{{ asset('wp-includes/js/jquery/ui/core.minb37e.js') }}" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.13.4",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "e_optimized_assets_loading": true,
                "e_optimized_css_loading": true,
                "a11y_improvements": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "e_swiper_latest": true,
                "hello-theme-header-footer": true,
                "landing-pages": true
            },
            "urls": {
                "assets": "https:\/\/tradelocker.com\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "body_background_background": "classic",
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description",
                "hello_header_logo_type": "logo",
                "hello_header_menu_layout": "horizontal",
                "hello_footer_logo_type": "logo"
            },
            "post": {
                "id": 2264,
                "title": "Next-Gen%20Forex%20Trading%20Platform%20-%20TradeLocker",
                "excerpt": "",
                "featuredImage": "https:\/\/tradelocker.com\/wp-content\/uploads\/2025\/03\/cover-1-1-1024x574.jpg"
            }
        };
    </script>
    <script src="{{ asset('wp-content/plugins/elementor/assets/js/frontend.mina44d.js') }}" id="elementor-frontend-js">
    </script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
        window.gtranslateSettings = {
            "default_language": "en",
            "detect_browser_language": true,
            "wrapper_selector": ".gtranslate_wrapper",
            "flag_size": 24,
            "flag_style": "3d"
        }
    </script>
    <script>
    async function forceClearCache() {
      if ('serviceWorker' in navigator) {

        // 1. Get all cache names
        const cacheNames = await caches.keys();

        // 2. Delete all caches
        await Promise.all(
          cacheNames.map(name => {
            console.log(`Deleting cache: ${name}`);
            return caches.delete(name);
          })
        );

        // 3. Unregister the Service Worker (Optional but recommended for a hard reset)
        const registrations = await navigator.serviceWorker.getRegistrations();
        for (let registration of registrations) {
          await registration.unregister();
        }

        // 4. Reload the page to grab fresh assets
        window.location.reload(true);
      }
    }
    </script>
    <script src="https://cdn.gtranslate.net/widgets/latest/popup.js" defer></script>
    <script>
        // Wait for the DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Select all elements with class 'gt_switcher-popup'
            document.querySelectorAll('.gt_switcher-popup').forEach(function(el) {
                // Find all span children and hide them
                el.querySelectorAll('span').forEach(function(span) {
                    span.style.display = 'none';
                });
            });
        });
    </script>
    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>
