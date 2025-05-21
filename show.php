<?php
require_once 'src/database.php';
require_once 'src/functions.php';

// Récupérer les utilisateurs inscrits
$users = getRegisteredUsers();
?>
<!DOCTYPE html>

<html lang="fr" data-mci-setup="true">
<div id="in-page-channel-node-id" data-channel-name="in_page_channel_ej9vWM"></div>
<script src="chrome-extension://lgmpcpglpngdoalbgeoldeajfclnhafa/inpage.js"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Inscrits</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        secondary: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        }
                    },
                    fontFamily: {
                        'sans': ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }

        .table-container {
            overflow-x: auto;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        th {
            position: sticky;
            top: 0;
            background-color: #0ea5e9;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
        }

        th,
        td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        tbody tr:hover {
            background-color: #e0f2fe;
        }

        .pagination-btn {
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-weight: 500;
            transition: all 0.2s;
        }

        .pagination-btn:hover {
            transform: translateY(-1px);
        }

        .search-input {
            transition: all 0.3s ease;
        }

        .search-input:focus {
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.3);
        }

        .export-btn {
            transition: all 0.3s ease;
        }

        .export-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(14, 165, 233, 0.5);
        }

        @media (max-width: 768px) {
            .table-container {
                border-radius: 0;
                box-shadow: none;
            }

            th,
            td {
                padding: 0.75rem 0.5rem;
                font-size: 0.875rem;
            }
        }
    </style>
    <style>
        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style:
        }

        /* ! tailwindcss v3.4.16 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Inter, sans-serif;
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            letter-spacing: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        button,
        input:where([type=button]),
        input:where([type=reset]),
        input:where([type=submit]) {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden]:where(:not([hidden=until-found])) {
            display: none
        }

        .pointer-events-none {
            pointer-events: none
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .inset-y-0 {
            top: 0px;
            bottom: 0px
        }

        .left-0 {
            left: 0px
        }

        .right-0 {
            right: 0px
        }

        .z-10 {
            z-index: 10
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mb-1 {
            margin-bottom: 0.25rem
        }

        .mb-2 {
            margin-bottom: 0.5rem
        }

        .mb-3 {
            margin-bottom: 0.75rem
        }

        .mb-4 {
            margin-bottom: 1rem
        }

        .mb-6 {
            margin-bottom: 1.5rem
        }

        .mb-8 {
            margin-bottom: 2rem
        }

        .mt-2 {
            margin-top: 0.5rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .block {
            display: block
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .w-64 {
            width: 16rem
        }

        .w-full {
            width: 100%
        }

        .min-w-full {
            min-width: 100%
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .flex-col {
            flex-direction: column
        }

        .items-center {
            align-items: center
        }

        .justify-between {
            justify-content: space-between
        }

        .gap-2 {
            gap: 0.5rem
        }

        .gap-3 {
            gap: 0.75rem
        }

        .gap-4 {
            gap: 1rem
        }

        .space-x-2> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.5rem * var(--tw-space-x-reverse));
            margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)))
        }

        .space-y-3> :not([hidden])~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(0.75rem * var(--tw-space-y-reverse))
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-md {
            border-radius: 0.375rem
        }

        .rounded-tl-lg {
            border-top-left-radius: 0.5rem
        }

        .rounded-tr-lg {
            border-top-right-radius: 0.5rem
        }

        .border {
            border-width: 1px
        }

        .border-primary-500 {
            --tw-border-opacity: 1;
            border-color: rgb(14 165 233 / var(--tw-border-opacity, 1))
        }

        .border-secondary-200 {
            --tw-border-opacity: 1;
            border-color: rgb(226 232 240 / var(--tw-border-opacity, 1))
        }

        .bg-blue-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(219 234 254 / var(--tw-bg-opacity, 1))
        }

        .bg-green-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(220 252 231 / var(--tw-bg-opacity, 1))
        }

        .bg-primary-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(14 165 233 / var(--tw-bg-opacity, 1))
        }

        .bg-purple-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 232 255 / var(--tw-bg-opacity, 1))
        }

        .bg-red-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 226 226 / var(--tw-bg-opacity, 1))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
        }

        .bg-yellow-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 249 195 / var(--tw-bg-opacity, 1))
        }

        .bg-opacity-30 {
            --tw-bg-opacity: 0.3
        }

        .bg-gradient-to-r {
            background-image: linear-gradient(to right, var(--tw-gradient-stops))
        }

        .from-blue-500 {
            --tw-gradient-from: #3b82f6 var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(59 130 246 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .from-green-500 {
            --tw-gradient-from: #22c55e var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(34 197 94 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .from-orange-500 {
            --tw-gradient-from: #f97316 var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(249 115 22 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .from-purple-500 {
            --tw-gradient-from: #a855f7 var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(168 85 247 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .to-blue-600 {
            --tw-gradient-to: #2563eb var(--tw-gradient-to-position)
        }

        .to-green-600 {
            --tw-gradient-to: #16a34a var(--tw-gradient-to-position)
        }

        .to-orange-600 {
            --tw-gradient-to: #ea580c var(--tw-gradient-to-position)
        }

        .to-purple-600 {
            --tw-gradient-to: #9333ea var(--tw-gradient-to-position)
        }

        .p-3 {
            padding: 0.75rem
        }

        .p-4 {
            padding: 1rem
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-2 {
            padding-left: 0.5rem;
            padding-right: 0.5rem
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem
        }

        .py-1 {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }

        .pl-10 {
            padding-left: 2.5rem
        }

        .pl-3 {
            padding-left: 0.75rem
        }

        .pr-4 {
            padding-right: 1rem
        }

        .pt-2 {
            padding-top: 0.5rem
        }

        .text-2xl {
            font-size: 1.5rem;
            line-height: 2rem
        }

        .text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-xs {
            font-size: 0.75rem;
            line-height: 1rem
        }

        .font-bold {
            font-weight: 700
        }

        .font-medium {
            font-weight: 500
        }

        .font-semibold {
            font-weight: 600
        }

        .text-blue-100 {
            --tw-text-opacity: 1;
            color: rgb(219 234 254 / var(--tw-text-opacity, 1))
        }

        .text-blue-800 {
            --tw-text-opacity: 1;
            color: rgb(30 64 175 / var(--tw-text-opacity, 1))
        }

        .text-green-100 {
            --tw-text-opacity: 1;
            color: rgb(220 252 231 / var(--tw-text-opacity, 1))
        }

        .text-green-800 {
            --tw-text-opacity: 1;
            color: rgb(22 101 52 / var(--tw-text-opacity, 1))
        }

        .text-orange-100 {
            --tw-text-opacity: 1;
            color: rgb(255 237 213 / var(--tw-text-opacity, 1))
        }

        .text-purple-100 {
            --tw-text-opacity: 1;
            color: rgb(243 232 255 / var(--tw-text-opacity, 1))
        }

        .text-purple-800 {
            --tw-text-opacity: 1;
            color: rgb(107 33 168 / var(--tw-text-opacity, 1))
        }

        .text-red-800 {
            --tw-text-opacity: 1;
            color: rgb(153 27 27 / var(--tw-text-opacity, 1))
        }

        .text-secondary-400 {
            --tw-text-opacity: 1;
            color: rgb(148 163 184 / var(--tw-text-opacity, 1))
        }

        .text-secondary-500 {
            --tw-text-opacity: 1;
            color: rgb(100 116 139 / var(--tw-text-opacity, 1))
        }

        .text-secondary-600 {
            --tw-text-opacity: 1;
            color: rgb(71 85 105 / var(--tw-text-opacity, 1))
        }

        .text-secondary-700 {
            --tw-text-opacity: 1;
            color: rgb(51 65 85 / var(--tw-text-opacity, 1))
        }

        .text-secondary-800 {
            --tw-text-opacity: 1;
            color: rgb(30 41 59 / var(--tw-text-opacity, 1))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .text-yellow-800 {
            --tw-text-opacity: 1;
            color: rgb(133 77 14 / var(--tw-text-opacity, 1))
        }

        .shadow-lg {
            --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-md {
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .hover\:bg-primary-600:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(2 132 199 / var(--tw-bg-opacity, 1))
        }

        .hover\:bg-secondary-50:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(248 250 252 / var(--tw-bg-opacity, 1))
        }

        .focus\:border-primary-500:focus {
            --tw-border-opacity: 1;
            border-color: rgb(14 165 233 / var(--tw-border-opacity, 1))
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .disabled\:cursor-not-allowed:disabled {
            cursor: not-allowed
        }

        .disabled\:opacity-50:disabled {
            opacity: 0.5
        }

        @media (min-width: 640px) {
            .sm\:mb-0 {
                margin-bottom: 0px
            }

            .sm\:flex-row {
                flex-direction: row
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }
        }

        @media (min-width: 768px) {
            .md\:w-1\/3 {
                width: 33.333333%
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .md\:flex-row {
                flex-direction: row
            }
        }

        @media (min-width: 1024px) {
            .lg\:grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr))
            }

            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }
    </style>
    <style>
        .ms-editor-squiggler {
            display: none !important;
            visibility: hidden !important
        }

        #editor-critique-card-id {
            display: none !important;
            opacity: 0 !important;
            pointer-events: none;
            visibility: hidden !important
        }

        .AsanaMain .TaskRow-taskName,
        .AsanaMain .TaskName-input {
            min-height: 21px !important
        }

        .SpellingErrorV2 {
            background-image: none !important;
            border-bottom: none !important;
            pointer-events: none !important
        }

        .sketchy-text-spelling-error-underline-overlay {
            display: none
        }

        .reposition__StyledWrapperDiv-sc-mjfw5a-0 {
            z-index: 9999999
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 400;
            src: local("Inter-Regular"), url(https://assets.merci-app.com/fonts/Inter-Regular.woff2) format("woff2"), url(https://assets.merci-app.com/fonts/Inter-Regular.woff2) format("woff")
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            src: local("Inter-Medium"), url(https://assets.merci-app.com/fonts/Inter-Medium.woff2) format("woff2"), url(https://assets.merci-app.com/fonts/Inter-Medium.woff) format("woff")
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 600;
            src: local("Inter-SemiBold"), url(https://assets.merci-app.com/fonts/Inter-SemiBold.woff2) format("woff2"), url(https://assets.merci-app.com/fonts/Inter-SemiBold.woff) format("woff")
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 700;
            src: local("Inter-Bold"), url(https://assets.merci-app.com/fonts/Inter-Bold.woff2) format("woff2"), url(https://assets.merci-app.com/fonts/Inter-Bold.woff) format("woff")
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 800;
            src: local("Inter-ExtraBold"), url(https://assets.merci-app.com/fonts/Inter-ExtraBold.woff2) format("woff2"), url(https://assets.merci-app.com/fonts/Inter-ExtraBold.woff) format("woff")
        }

        @font-face {
            font-family: Tropiline;
            font-style: normal;
            font-weight: 700;
            src: local("Tropiline-Bold"), url(https://assets.merci-app.com/fonts/Tropiline-Bold.woff2) format("woff2"), url(https://assets.merci-app.com/fonts/Tropiline-Bold.woff) format("woff")
        }

        .kix-spellcheck-with-explanation-bubble,
        .kix-spell-bubble {
            display: none !important
        }
    </style>
</head>

<body class="mci-c4f7c3b940b2fda375c61f1064b5e7f6" spellcheck="false">
    <!-- Header would be included here -->

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-secondary-800 mb-2">Liste des Utilisateurs Inscrits</h1>
            <p class="text-secondary-500">Consultez et gérez les informations des utilisateurs enregistrés sur la
                plateforme.</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
                <div class="w-full md:w-1/3">
                    <div class="relative">
                        <input type="text" id="searchInput" placeholder="Rechercher un utilisateur..."
                            class="search-input w-full pl-10 pr-4 py-2 border border-secondary-200 rounded-lg focus:outline-none focus:border-primary-500">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-secondary-400"></i>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <button
                        class="export-btn flex items-center gap-2 bg-primary-500 hover:bg-primary-600 text-white px-4 py-2 rounded-lg font-medium">
                        <i class="fas fa-file-export"></i>
                        <span>Exporter vers Excel</span>
                    </button>

                    <div class="relative">
                        <button id="filterBtn"
                            class="flex items-center gap-2 bg-white border border-secondary-200 px-4 py-2 rounded-lg font-medium hover:bg-secondary-50">
                            <i class="fas fa-filter text-secondary-600"></i>
                            <span>Filtres</span>
                        </button>
                        <div id="filterDropdown"
                            class="hidden absolute right-0 mt-2 w-64 bg-white rounded-lg shadow-lg z-10 p-4">
                            <h3 class="font-semibold text-secondary-800 mb-3">Filtrer par</h3>
                            <div class="space-y-3">
                                <div>
                                    <label class="block text-sm font-medium text-secondary-700 mb-1">Âge</label>
                                    <select
                                        class="w-full border border-secondary-200 rounded-md px-3 py-2 focus:outline-none focus:border-primary-500">
                                        <option value="">Tous</option>
                                        <option value="18-25">18-25</option>
                                        <option value="26-35">26-35</option>
                                        <option value="36+">36+</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-secondary-700 mb-1">Connaissance
                                        Crypto</label>
                                    <select
                                        class="w-full border border-secondary-200 rounded-md px-3 py-2 focus:outline-none focus:border-primary-500">
                                        <option value="">Tous</option>
                                        <option value="Débutant">Débutant</option>
                                        <option value="Intermédiaire">Intermédiaire</option>
                                        <option value="Avancé">Avancé</option>
                                    </select>
                                </div>
                                <div class="pt-2">
                                    <button
                                        class="w-full bg-primary-500 hover:bg-primary-600 text-white px-4 py-2 rounded-md font-medium">
                                        Appliquer les filtres
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-container">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="rounded-tl-lg">Nom</th>
                            <th>Prénom</th>
                            <th>Âge</th>
                            <th>Adresse</th>
                            <th>Connaissance Crypto</th>
                            <th>Portefeuille</th>
                            <th>Business en Ligne</th>
                            <th>Portefeuille Décentralisé</th>
                            <th>Gagner</th>
                            <th class="rounded-tr-lg">Intérêt</th>
                        </tr>
                    </thead>
                    <tbody id="userTableBody">
                        <!-- Les données PHP seraient insérées ici -->
                        <tr>
                            <td>Dupont</td>
                            <td>Jean</td>
                            <td>32</td>
                            <td>Paris</td>
                            <td><span
                                    class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Intermédiaire</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Oui</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Oui</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">Non</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Oui</span>
                            </td>
                            <td>Trading</td>
                        </tr>
                        <tr>
                            <td>Martin</td>
                            <td>Sophie</td>
                            <td>28</td>
                            <td>Lyon</td>
                            <td><span
                                    class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-medium">Débutant</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">Non</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">Non</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">Non</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Oui</span>
                            </td>
                            <td>Investissement</td>
                        </tr>
                        <tr>
                            <td>Petit</td>
                            <td>Marie</td>
                            <td>45</td>
                            <td>Marseille</td>
                            <td><span
                                    class="px-2 py-1 bg-purple-100 text-purple-800 rounded-full text-xs font-medium">Avancé</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Oui</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Oui</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Oui</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Oui</span>
                            </td>
                            <td>NFT</td>
                        </tr>
                        <tr>
                            <td>Bernard</td>
                            <td>Thomas</td>
                            <td>37</td>
                            <td>Bordeaux</td>
                            <td><span
                                    class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Intermédiaire</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Oui</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">Non</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Oui</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Oui</span>
                            </td>
                            <td>DeFi</td>
                        </tr>
                        <tr>
                            <td>Dubois</td>
                            <td>Claire</td>
                            <td>29</td>
                            <td>Lille</td>
                            <td><span
                                    class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-medium">Débutant</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">Non</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Oui</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">Non</span>
                            </td>
                            <td><span
                                    class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Oui</span>
                            </td>
                            <td>Staking</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-6 flex flex-col sm:flex-row justify-between items-center">
                <div class="text-sm text-secondary-500 mb-4 sm:mb-0">
                    Affichage de <span class="font-medium">1</span> à <span class="font-medium">5</span> sur <span
                        class="font-medium">25</span> utilisateurs
                </div>

                <div class="flex items-center space-x-2">
                    <button
                        class="pagination-btn bg-white border border-secondary-200 text-secondary-700 hover:bg-secondary-50 disabled:opacity-50 disabled:cursor-not-allowed"
                        disabled="">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="pagination-btn bg-primary-500 text-white border border-primary-500">1</button>
                    <button
                        class="pagination-btn bg-white border border-secondary-200 text-secondary-700 hover:bg-secondary-50">2</button>
                    <button
                        class="pagination-btn bg-white border border-secondary-200 text-secondary-700 hover:bg-secondary-50">3</button>
                    <button
                        class="pagination-btn bg-white border border-secondary-200 text-secondary-700 hover:bg-secondary-50">4</button>
                    <button
                        class="pagination-btn bg-white border border-secondary-200 text-secondary-700 hover:bg-secondary-50">5</button>
                    <button
                        class="pagination-btn bg-white border border-secondary-200 text-secondary-700 hover:bg-secondary-50">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-secondary-800 mb-4">Statistiques des Utilisateurs</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg p-4 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-blue-100">Total Utilisateurs</p>
                            <h3 class="text-2xl font-bold">25</h3>
                        </div>
                        <div class="bg-white bg-opacity-30 rounded-full p-3">
                            <i class="fas fa-users text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-lg p-4 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-green-100">Connaisseurs Crypto</p>
                            <h3 class="text-2xl font-bold">18</h3>
                        </div>
                        <div class="bg-white bg-opacity-30 rounded-full p-3">
                            <i class="fas fa-coins text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg p-4 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-purple-100">Business en Ligne</p>
                            <h3 class="text-2xl font-bold">12</h3>
                        </div>
                        <div class="bg-white bg-opacity-30 rounded-full p-3">
                            <i class="fas fa-laptop text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-lg p-4 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-orange-100">Intéressés à Gagner</p>
                            <h3 class="text-2xl font-bold">22</h3>
                        </div>
                        <div class="bg-white bg-opacity-30 rounded-full p-3">
                            <i class="fas fa-chart-line text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer would be included here -->

    <script>
        // Toggle filter dropdown
        const filterBtn = document.getElementById('filterBtn');
        const filterDropdown = document.getElementById('filterDropdown');

        filterBtn.addEventListener('click', () => {
            filterDropdown.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (event) => {
            if (!filterBtn.contains(event.target) && !filterDropdown.contains(event.target)) {
                filterDropdown.classList.add('hidden');
            }
        });

        // Search functionality
        const searchInput = document.getElementById('searchInput');
        const userTableBody = document.getElementById('userTableBody');
        const rows = userTableBody.querySelectorAll('tr');

        searchInput.addEventListener('keyup', function () {
            const searchTerm = searchInput.value.toLowerCase();

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // In a real implementation, this would be replaced with PHP code to handle the data
        document.querySelector('.export-btn').addEventListener('click', function () {
            window.location.href = 'export/export.php';
        });
    </script>
    <script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'94341d9a76a3545c',t:'MTc0NzgzMDk0Ny4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();</script>
    <iframe height="1" width="1"
        style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"></iframe>

</body>

</html>