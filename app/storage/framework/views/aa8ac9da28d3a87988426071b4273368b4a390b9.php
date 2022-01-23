<style>
    @charset  "UTF-8";
    /*!
 * Vali Admin
 * Author: Pratik Borsadiya
 * ================================*/
    @import  url(https://fonts.googleapis.com/css?family=Lato:300,400,400i,700);
    @import  url(https://fonts.googleapis.com/css?family=Niconne);
    /*!
 * Bootstrap v4.3.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
    :root {
        --blue: #007bff;
        --indigo: #6610f2;
        --purple: #6f42c1;
        --pink: #e83e8c;
        --red: #dc3545;
        --orange: #fd7e14;
        --yellow: #ffc107;
        --green: #28a745;
        --teal: #20c997;
        --cyan: #17a2b8;
        --white: #FFF;
        --gray: #6c757d;
        --gray-dark: #343a40;
        --primary: #009688;
        --secondary: #6c757d;
        --success: #28a745;
        --info: #17a2b8;
        --warning: #ffc107;
        --danger: #dc3545;
        --light: #f8f9fa;
        --dark: #343a40;
        --breakpoint-xs: 0;
        --breakpoint-sm: 576px;
        --breakpoint-md: 768px;
        --breakpoint-lg: 992px;
        --breakpoint-xl: 1200px;
        --font-family-sans-serif: "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    }

    *,
    *::before,
    *::after {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
        display: block;
    }

    body {
        margin: 0;
        font-family: "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #FFF;
    }

    [tabindex="-1"]:focus {
        outline: 0 !important;
    }

    hr {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        height: 0;
        overflow: visible;
    }

    h1, h2, h3, h4, h5, h6 {
        margin-top: 0;
        margin-bottom: 0.5rem;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    abbr[title],
    abbr[data-original-title] {
        text-decoration: underline;
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted;
        cursor: help;
        border-bottom: 0;
        -webkit-text-decoration-skip-ink: none;
        text-decoration-skip-ink: none;
    }

    address {
        margin-bottom: 1rem;
        font-style: normal;
        line-height: inherit;
    }

    ol,
    ul,
    dl {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    ol ol,
    ul ul,
    ol ul,
    ul ol {
        margin-bottom: 0;
    }

    dt {
        font-weight: 700;
    }

    dd {
        margin-bottom: .5rem;
        margin-left: 0;
    }

    blockquote {
        margin: 0 0 1rem;
    }

    b,
    strong {
        font-weight: bolder;
    }

    small {
        font-size: 80%;
    }

    sub,
    sup {
        position: relative;
        font-size: 75%;
        line-height: 0;
        vertical-align: baseline;
    }

    sub {
        bottom: -.25em;
    }

    sup {
        top: -.5em;
    }

    a {
        color: #009688;
        text-decoration: none;
        background-color: transparent;
    }

    a:hover {
        color: #004a43;
        text-decoration: underline;
    }

    a:not([href]):not([tabindex]) {
        color: inherit;
        text-decoration: none;
    }

    a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
        color: inherit;
        text-decoration: none;
    }

    a:not([href]):not([tabindex]):focus {
        outline: 0;
    }

    pre,
    code,
    kbd,
    samp {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        font-size: 1em;
    }

    pre {
        margin-top: 0;
        margin-bottom: 1rem;
        overflow: auto;
    }

    figure {
        margin: 0 0 1rem;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    svg {
        overflow: hidden;
        vertical-align: middle;
    }

    table {
        border-collapse: collapse;
    }

    caption {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        color: #6c757d;
        text-align: left;
        caption-side: bottom;
    }

    th {
        text-align: inherit;
    }

    label {
        display: inline-block;
        margin-bottom: 0.5rem;
    }

    button {
        border-radius: 0;
    }

    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color;
    }

    input,
    button,
    select,
    optgroup,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    button,
    input {
        overflow: visible;
    }

    button,
    select {
        text-transform: none;
    }

    select {
        word-wrap: normal;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
        -webkit-appearance: button;
    }

    button:not(:disabled),
    [type="button"]:not(:disabled),
    [type="reset"]:not(:disabled),
    [type="submit"]:not(:disabled) {
        cursor: pointer;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
        padding: 0;
        border-style: none;
    }

    input[type="radio"],
    input[type="checkbox"] {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 0;
    }

    input[type="date"],
    input[type="time"],
    input[type="datetime-local"],
    input[type="month"] {
        -webkit-appearance: listbox;
    }

    textarea {
        overflow: auto;
        resize: vertical;
    }

    fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0;
    }

    legend {
        display: block;
        width: 100%;
        max-width: 100%;
        padding: 0;
        margin-bottom: .5rem;
        font-size: 1.5rem;
        line-height: inherit;
        color: inherit;
        white-space: normal;
    }

    progress {
        vertical-align: baseline;
    }

    [type="number"]::-webkit-inner-spin-button,
    [type="number"]::-webkit-outer-spin-button {
        height: auto;
    }

    [type="search"] {
        outline-offset: -2px;
        -webkit-appearance: none;
    }

    [type="search"]::-webkit-search-decoration {
        -webkit-appearance: none;
    }

    ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button;
    }

    output {
        display: inline-block;
    }

    summary {
        display: list-item;
        cursor: pointer;
    }

    template {
        display: none;
    }

    [hidden] {
        display: none !important;
    }

    h1, h2, h3, h4, h5, h6,
    .h1, .h2, .h3, .h4, .h5, .h6 {
        margin-bottom: 0.5rem;
        font-weight: bold;
        line-height: 1.2;
    }

    h1, .h1 {
        font-size: 2.1875rem;
    }

    h2, .h2 {
        font-size: 1.75rem;
    }

    h3, .h3 {
        font-size: 1.53125rem;
    }

    h4, .h4 {
        font-size: 1.3125rem;
    }

    h5, .h5 {
        font-size: 1.09375rem;
    }

    h6, .h6 {
        font-size: 0.875rem;
    }

    .lead {
        font-size: 1.09375rem;
        font-weight: 300;
    }

    .display-1 {
        font-size: 6rem;
        font-weight: 300;
        line-height: 1.2;
    }

    .display-2 {
        font-size: 5.5rem;
        font-weight: 300;
        line-height: 1.2;
    }

    .display-3 {
        font-size: 4.5rem;
        font-weight: 300;
        line-height: 1.2;
    }

    .display-4 {
        font-size: 3.5rem;
        font-weight: 300;
        line-height: 1.2;
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }

    small,
    .small {
        font-size: 80%;
        font-weight: 400;
    }

    mark,
    .mark {
        padding: 0.2em;
        background-color: #fcf8e3;
    }

    .list-unstyled, .app-nav, .app-menu, .treeview-menu {
        padding-left: 0;
        list-style: none;
    }

    .list-inline {
        padding-left: 0;
        list-style: none;
    }

    .list-inline-item {
        display: inline-block;
    }

    .list-inline-item:not(:last-child) {
        margin-right: 0.5rem;
    }

    .initialism {
        font-size: 90%;
        text-transform: uppercase;
    }

    .blockquote {
        margin-bottom: 1rem;
        font-size: 1.09375rem;
    }

    .blockquote-footer {
        display: block;
        font-size: 80%;
        color: #6c757d;
    }

    .blockquote-footer::before {
        content: "\2014\00A0";
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .img-thumbnail {
        padding: 0.25rem;
        background-color: #FFF;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        max-width: 100%;
        height: auto;
    }

    .figure {
        display: inline-block;
    }

    .figure-img {
        margin-bottom: 0.5rem;
        line-height: 1;
    }

    .figure-caption {
        font-size: 90%;
        color: #6c757d;
    }

    code {
        font-size: 87.5%;
        color: #e83e8c;
        word-break: break-word;
    }

    a > code {
        color: inherit;
    }

    kbd {
        padding: 0.2rem 0.4rem;
        font-size: 87.5%;
        color: #FFF;
        background-color: #212529;
        border-radius: 0.2rem;
    }

    kbd kbd {
        padding: 0;
        font-size: 100%;
        font-weight: 700;
    }

    pre {
        display: block;
        font-size: 87.5%;
        color: #212529;
    }

    pre code {
        font-size: inherit;
        color: inherit;
        word-break: normal;
    }

    .pre-scrollable {
        max-height: 340px;
        overflow-y: scroll;
    }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    @media (min-width: 576px) {
        .container {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
    }

    @media (min-width: 992px) {
        .container {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }

    .container-fluid {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    .row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .no-gutters {
        margin-right: 0;
        margin-left: 0;
    }

    .no-gutters > .col,
    .no-gutters > [class*="col-"] {
        padding-right: 0;
        padding-left: 0;
    }

    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
    .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
    .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
    .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
    .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
    .col-xl-auto {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .col {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%;
    }

    .col-auto {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-1 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 8.3333333333%;
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%;
    }

    .col-2 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 16.6666666667%;
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%;
    }

    .col-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-4 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.3333333333%;
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%;
    }

    .col-5 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 41.6666666667%;
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%;
    }

    .col-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-7 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 58.3333333333%;
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%;
    }

    .col-8 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 66.6666666667%;
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%;
    }

    .col-9 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-10 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 83.3333333333%;
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%;
    }

    .col-11 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 91.6666666667%;
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%;
    }

    .col-12 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-first {
        -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
        order: -1;
    }

    .order-last {
        -webkit-box-ordinal-group: 14;
        -ms-flex-order: 13;
        order: 13;
    }

    .order-0 {
        -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
        order: 0;
    }

    .order-1 {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1;
    }

    .order-2 {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2;
    }

    .order-3 {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3;
    }

    .order-4 {
        -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4;
    }

    .order-5 {
        -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5;
    }

    .order-6 {
        -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6;
    }

    .order-7 {
        -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7;
    }

    .order-8 {
        -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8;
    }

    .order-9 {
        -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9;
    }

    .order-10 {
        -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10;
    }

    .order-11 {
        -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
        order: 11;
    }

    .order-12 {
        -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
        order: 12;
    }

    .offset-1 {
        margin-left: 8.3333333333%;
    }

    .offset-2 {
        margin-left: 16.6666666667%;
    }

    .offset-3 {
        margin-left: 25%;
    }

    .offset-4 {
        margin-left: 33.3333333333%;
    }

    .offset-5 {
        margin-left: 41.6666666667%;
    }

    .offset-6 {
        margin-left: 50%;
    }

    .offset-7 {
        margin-left: 58.3333333333%;
    }

    .offset-8 {
        margin-left: 66.6666666667%;
    }

    .offset-9 {
        margin-left: 75%;
    }

    .offset-10 {
        margin-left: 83.3333333333%;
    }

    .offset-11 {
        margin-left: 91.6666666667%;
    }

    @media (min-width: 576px) {
        .col-sm {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }
        .col-sm-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }
        .col-sm-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
            max-width: 8.3333333333%;
        }
        .col-sm-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }
        .col-sm-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }
        .col-sm-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }
        .col-sm-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
            max-width: 41.6666666667%;
        }
        .col-sm-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }
        .col-sm-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
            max-width: 58.3333333333%;
        }
        .col-sm-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
            max-width: 66.6666666667%;
        }
        .col-sm-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
        }
        .col-sm-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
            max-width: 83.3333333333%;
        }
        .col-sm-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
            max-width: 91.6666666667%;
        }
        .col-sm-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
        .order-sm-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1;
        }
        .order-sm-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13;
        }
        .order-sm-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0;
        }
        .order-sm-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }
        .order-sm-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }
        .order-sm-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3;
        }
        .order-sm-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4;
        }
        .order-sm-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5;
        }
        .order-sm-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6;
        }
        .order-sm-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7;
        }
        .order-sm-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8;
        }
        .order-sm-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9;
        }
        .order-sm-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10;
        }
        .order-sm-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11;
        }
        .order-sm-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12;
        }
        .offset-sm-0 {
            margin-left: 0;
        }
        .offset-sm-1 {
            margin-left: 8.3333333333%;
        }
        .offset-sm-2 {
            margin-left: 16.6666666667%;
        }
        .offset-sm-3 {
            margin-left: 25%;
        }
        .offset-sm-4 {
            margin-left: 33.3333333333%;
        }
        .offset-sm-5 {
            margin-left: 41.6666666667%;
        }
        .offset-sm-6 {
            margin-left: 50%;
        }
        .offset-sm-7 {
            margin-left: 58.3333333333%;
        }
        .offset-sm-8 {
            margin-left: 66.6666666667%;
        }
        .offset-sm-9 {
            margin-left: 75%;
        }
        .offset-sm-10 {
            margin-left: 83.3333333333%;
        }
        .offset-sm-11 {
            margin-left: 91.6666666667%;
        }
    }

    @media (min-width: 768px) {
        .col-md {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }
        .col-md-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }
        .col-md-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
            max-width: 8.3333333333%;
        }
        .col-md-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }
        .col-md-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }
        .col-md-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }
        .col-md-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
            max-width: 41.6666666667%;
        }
        .col-md-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }
        .col-md-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
            max-width: 58.3333333333%;
        }
        .col-md-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
            max-width: 66.6666666667%;
        }
        .col-md-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
        }
        .col-md-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
            max-width: 83.3333333333%;
        }
        .col-md-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
            max-width: 91.6666666667%;
        }
        .col-md-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
        .order-md-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1;
        }
        .order-md-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13;
        }
        .order-md-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0;
        }
        .order-md-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }
        .order-md-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }
        .order-md-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3;
        }
        .order-md-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4;
        }
        .order-md-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5;
        }
        .order-md-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6;
        }
        .order-md-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7;
        }
        .order-md-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8;
        }
        .order-md-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9;
        }
        .order-md-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10;
        }
        .order-md-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11;
        }
        .order-md-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12;
        }
        .offset-md-0 {
            margin-left: 0;
        }
        .offset-md-1 {
            margin-left: 8.3333333333%;
        }
        .offset-md-2 {
            margin-left: 16.6666666667%;
        }
        .offset-md-3 {
            margin-left: 25%;
        }
        .offset-md-4 {
            margin-left: 33.3333333333%;
        }
        .offset-md-5 {
            margin-left: 41.6666666667%;
        }
        .offset-md-6 {
            margin-left: 50%;
        }
        .offset-md-7 {
            margin-left: 58.3333333333%;
        }
        .offset-md-8 {
            margin-left: 66.6666666667%;
        }
        .offset-md-9 {
            margin-left: 75%;
        }
        .offset-md-10 {
            margin-left: 83.3333333333%;
        }
        .offset-md-11 {
            margin-left: 91.6666666667%;
        }
    }

    @media (min-width: 992px) {
        .col-lg {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }
        .col-lg-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }
        .col-lg-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
            max-width: 8.3333333333%;
        }
        .col-lg-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }
        .col-lg-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }
        .col-lg-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }
        .col-lg-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
            max-width: 41.6666666667%;
        }
        .col-lg-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }
        .col-lg-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
            max-width: 58.3333333333%;
        }
        .col-lg-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
            max-width: 66.6666666667%;
        }
        .col-lg-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
        }
        .col-lg-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
            max-width: 83.3333333333%;
        }
        .col-lg-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
            max-width: 91.6666666667%;
        }
        .col-lg-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
        .order-lg-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1;
        }
        .order-lg-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13;
        }
        .order-lg-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0;
        }
        .order-lg-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }
        .order-lg-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }
        .order-lg-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3;
        }
        .order-lg-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4;
        }
        .order-lg-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5;
        }
        .order-lg-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6;
        }
        .order-lg-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7;
        }
        .order-lg-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8;
        }
        .order-lg-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9;
        }
        .order-lg-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10;
        }
        .order-lg-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11;
        }
        .order-lg-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12;
        }
        .offset-lg-0 {
            margin-left: 0;
        }
        .offset-lg-1 {
            margin-left: 8.3333333333%;
        }
        .offset-lg-2 {
            margin-left: 16.6666666667%;
        }
        .offset-lg-3 {
            margin-left: 25%;
        }
        .offset-lg-4 {
            margin-left: 33.3333333333%;
        }
        .offset-lg-5 {
            margin-left: 41.6666666667%;
        }
        .offset-lg-6 {
            margin-left: 50%;
        }
        .offset-lg-7 {
            margin-left: 58.3333333333%;
        }
        .offset-lg-8 {
            margin-left: 66.6666666667%;
        }
        .offset-lg-9 {
            margin-left: 75%;
        }
        .offset-lg-10 {
            margin-left: 83.3333333333%;
        }
        .offset-lg-11 {
            margin-left: 91.6666666667%;
        }
    }

    @media (min-width: 1200px) {
        .col-xl {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }
        .col-xl-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }
        .col-xl-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
            max-width: 8.3333333333%;
        }
        .col-xl-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }
        .col-xl-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }
        .col-xl-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }
        .col-xl-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
            max-width: 41.6666666667%;
        }
        .col-xl-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }
        .col-xl-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
            max-width: 58.3333333333%;
        }
        .col-xl-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
            max-width: 66.6666666667%;
        }
        .col-xl-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
        }
        .col-xl-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
            max-width: 83.3333333333%;
        }
        .col-xl-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
            max-width: 91.6666666667%;
        }
        .col-xl-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
        .order-xl-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1;
        }
        .order-xl-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13;
        }
        .order-xl-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0;
        }
        .order-xl-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }
        .order-xl-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }
        .order-xl-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3;
        }
        .order-xl-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4;
        }
        .order-xl-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5;
        }
        .order-xl-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6;
        }
        .order-xl-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7;
        }
        .order-xl-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8;
        }
        .order-xl-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9;
        }
        .order-xl-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10;
        }
        .order-xl-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11;
        }
        .order-xl-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12;
        }
        .offset-xl-0 {
            margin-left: 0;
        }
        .offset-xl-1 {
            margin-left: 8.3333333333%;
        }
        .offset-xl-2 {
            margin-left: 16.6666666667%;
        }
        .offset-xl-3 {
            margin-left: 25%;
        }
        .offset-xl-4 {
            margin-left: 33.3333333333%;
        }
        .offset-xl-5 {
            margin-left: 41.6666666667%;
        }
        .offset-xl-6 {
            margin-left: 50%;
        }
        .offset-xl-7 {
            margin-left: 58.3333333333%;
        }
        .offset-xl-8 {
            margin-left: 66.6666666667%;
        }
        .offset-xl-9 {
            margin-left: 75%;
        }
        .offset-xl-10 {
            margin-left: 83.3333333333%;
        }
        .offset-xl-11 {
            margin-left: 91.6666666667%;
        }
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }

    .table tbody + tbody {
        border-top: 2px solid #dee2e6;
    }

    .table-sm th,
    .table-sm td {
        padding: 0.3rem;
    }

    .table-bordered {
        border: 1px solid #dee2e6;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6;
    }

    .table-bordered thead th,
    .table-bordered thead td {
        border-bottom-width: 2px;
    }

    .table-borderless th,
    .table-borderless td,
    .table-borderless thead th,
    .table-borderless tbody + tbody {
        border: 0;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
    }

    .table-hover tbody tr:hover {
        color: #212529;
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table-primary,
    .table-primary > th,
    .table-primary > td {
        background-color: #b8e2de;
    }

    .table-primary th,
    .table-primary td,
    .table-primary thead th,
    .table-primary tbody + tbody {
        border-color: #7ac8c1;
    }

    .table-hover .table-primary:hover {
        background-color: #a6dbd6;
    }

    .table-hover .table-primary:hover > td,
    .table-hover .table-primary:hover > th {
        background-color: #a6dbd6;
    }

    .table-secondary,
    .table-secondary > th,
    .table-secondary > td {
        background-color: #d6d8db;
    }

    .table-secondary th,
    .table-secondary td,
    .table-secondary thead th,
    .table-secondary tbody + tbody {
        border-color: #b3b7bb;
    }

    .table-hover .table-secondary:hover {
        background-color: #c8cbcf;
    }

    .table-hover .table-secondary:hover > td,
    .table-hover .table-secondary:hover > th {
        background-color: #c8cbcf;
    }

    .table-success,
    .table-success > th,
    .table-success > td {
        background-color: #c3e6cb;
    }

    .table-success th,
    .table-success td,
    .table-success thead th,
    .table-success tbody + tbody {
        border-color: #8fd19e;
    }

    .table-hover .table-success:hover {
        background-color: #b1dfbb;
    }

    .table-hover .table-success:hover > td,
    .table-hover .table-success:hover > th {
        background-color: #b1dfbb;
    }

    .table-info,
    .table-info > th,
    .table-info > td {
        background-color: #bee5eb;
    }

    .table-info th,
    .table-info td,
    .table-info thead th,
    .table-info tbody + tbody {
        border-color: #86cfda;
    }

    .table-hover .table-info:hover {
        background-color: #abdde5;
    }

    .table-hover .table-info:hover > td,
    .table-hover .table-info:hover > th {
        background-color: #abdde5;
    }

    .table-warning,
    .table-warning > th,
    .table-warning > td {
        background-color: #ffeeba;
    }

    .table-warning th,
    .table-warning td,
    .table-warning thead th,
    .table-warning tbody + tbody {
        border-color: #ffdf7e;
    }

    .table-hover .table-warning:hover {
        background-color: #ffe8a1;
    }

    .table-hover .table-warning:hover > td,
    .table-hover .table-warning:hover > th {
        background-color: #ffe8a1;
    }

    .table-danger,
    .table-danger > th,
    .table-danger > td {
        background-color: #f5c6cb;
    }

    .table-danger th,
    .table-danger td,
    .table-danger thead th,
    .table-danger tbody + tbody {
        border-color: #ed969e;
    }

    .table-hover .table-danger:hover {
        background-color: #f1b0b7;
    }

    .table-hover .table-danger:hover > td,
    .table-hover .table-danger:hover > th {
        background-color: #f1b0b7;
    }

    .table-light,
    .table-light > th,
    .table-light > td {
        background-color: #fdfdfe;
    }

    .table-light th,
    .table-light td,
    .table-light thead th,
    .table-light tbody + tbody {
        border-color: #fbfcfc;
    }

    .table-hover .table-light:hover {
        background-color: #ececf6;
    }

    .table-hover .table-light:hover > td,
    .table-hover .table-light:hover > th {
        background-color: #ececf6;
    }

    .table-dark,
    .table-dark > th,
    .table-dark > td {
        background-color: #c6c8ca;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody + tbody {
        border-color: #95999c;
    }

    .table-hover .table-dark:hover {
        background-color: #b9bbbe;
    }

    .table-hover .table-dark:hover > td,
    .table-hover .table-dark:hover > th {
        background-color: #b9bbbe;
    }

    .table-active,
    .table-active > th,
    .table-active > td {
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table-hover .table-active:hover {
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table-hover .table-active:hover > td,
    .table-hover .table-active:hover > th {
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table .thead-dark th {
        color: #FFF;
        background-color: #343a40;
        border-color: #454d55;
    }

    .table .thead-light th {
        color: #495057;
        background-color: #e9ecef;
        border-color: #dee2e6;
    }

    .table-dark {
        color: #FFF;
        background-color: #343a40;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th {
        border-color: #454d55;
    }

    .table-dark.table-bordered {
        border: 0;
    }

    .table-dark.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, 0.05);
    }

    .table-dark.table-hover tbody tr:hover {
        color: #FFF;
        background-color: rgba(255, 255, 255, 0.075);
    }

    @media (max-width: 575.98px) {
        .table-responsive-sm {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        .table-responsive-sm > .table-bordered {
            border: 0;
        }
    }

    @media (max-width: 767.98px) {
        .table-responsive-md {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        .table-responsive-md > .table-bordered {
            border: 0;
        }
    }

    @media (max-width: 991.98px) {
        .table-responsive-lg {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        .table-responsive-lg > .table-bordered {
            border: 0;
        }
    }

    @media (max-width: 1199.98px) {
        .table-responsive-xl {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        .table-responsive-xl > .table-bordered {
            border: 0;
        }
    }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive > .table-bordered {
        border: 0;
    }

    .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 4px);
        padding: 0.375rem 0.75rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #FFF;
        background-clip: padding-box;
        border: 2px solid #ced4da;
        border-radius: 4px;
        -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .form-control {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .form-control::-ms-expand {
        background-color: transparent;
        border: 0;
    }

    .form-control:focus {
        color: #495057;
        background-color: #FFF;
        border-color: #009688;
        outline: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .form-control::-webkit-input-placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control::-moz-placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control:-ms-input-placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control::-ms-input-placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control::placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control:disabled, .form-control[readonly] {
        background-color: #e9ecef;
        opacity: 1;
    }

    select.form-control:focus::-ms-value {
        color: #495057;
        background-color: #FFF;
    }

    .form-control-file,
    .form-control-range {
        display: block;
        width: 100%;
    }

    .col-form-label {
        padding-top: calc(0.375rem + 2px);
        padding-bottom: calc(0.375rem + 2px);
        margin-bottom: 0;
        font-size: inherit;
        line-height: 1.5;
    }

    .col-form-label-lg {
        padding-top: calc(0.5rem + 2px);
        padding-bottom: calc(0.5rem + 2px);
        font-size: 1.09375rem;
        line-height: 1.5;
    }

    .col-form-label-sm {
        padding-top: calc(0.25rem + 2px);
        padding-bottom: calc(0.25rem + 2px);
        font-size: 0.765625rem;
        line-height: 1.5;
    }

    .form-control-plaintext {
        display: block;
        width: 100%;
        padding-top: 0.375rem;
        padding-bottom: 0.375rem;
        margin-bottom: 0;
        line-height: 1.5;
        color: #212529;
        background-color: transparent;
        border: solid transparent;
        border-width: 2px 0;
    }

    .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
        padding-right: 0;
        padding-left: 0;
    }

    .form-control-sm {
        height: calc(1.5em + 0.5rem + 4px);
        padding: 0.25rem 0.5rem;
        font-size: 0.765625rem;
        line-height: 1.5;
        border-radius: 4px;
    }

    .form-control-lg {
        height: calc(1.5em + 1rem + 4px);
        padding: 0.5rem 1rem;
        font-size: 1.09375rem;
        line-height: 1.5;
        border-radius: 4px;
    }

    select.form-control[size], select.form-control[multiple] {
        height: auto;
    }

    textarea.form-control {
        height: auto;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-text {
        display: block;
        margin-top: 0.25rem;
    }

    .form-row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -5px;
        margin-left: -5px;
    }

    .form-row > .col,
    .form-row > [class*="col-"] {
        padding-right: 5px;
        padding-left: 5px;
    }

    .form-check {
        position: relative;
        display: block;
        padding-left: 1.25rem;
    }

    .form-check-input {
        position: absolute;
        margin-top: 0.3rem;
        margin-left: -1.25rem;
    }

    .form-check-input:disabled ~ .form-check-label {
        color: #6c757d;
    }

    .form-check-label {
        margin-bottom: 0;
    }

    .form-check-inline {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding-left: 0;
        margin-right: 0.75rem;
    }

    .form-check-inline .form-check-input {
        position: static;
        margin-top: 0;
        margin-right: 0.3125rem;
        margin-left: 0;
    }

    .valid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #28a745;
    }

    .valid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: 0.25rem 0.5rem;
        margin-top: .1rem;
        font-size: 0.765625rem;
        line-height: 1.5;
        color: #FFF;
        background-color: rgba(40, 167, 69, 0.9);
        border-radius: 0.25rem;
    }

    .was-validated .form-control:valid, .form-control.is-valid {
        border-color: #28a745;
        padding-right: calc(1.5em + 0.75rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: center right calc(0.375em + 0.1875rem);
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .form-control:valid:focus, .form-control.is-valid:focus {
        border-color: #28a745;
        -webkit-box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.25);
        box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.25);
    }

    .was-validated .form-control:valid ~ .valid-feedback,
    .was-validated .form-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback,
    .form-control.is-valid ~ .valid-tooltip {
        display: block;
    }

    .was-validated textarea.form-control:valid, textarea.form-control.is-valid {
        padding-right: calc(1.5em + 0.75rem);
        background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
    }

    .was-validated .custom-select:valid, .custom-select.is-valid {
        border-color: #28a745;
        padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
        background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #FFF no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
        border-color: #28a745;
        -webkit-box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.25);
        box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.25);
    }

    .was-validated .custom-select:valid ~ .valid-feedback,
    .was-validated .custom-select:valid ~ .valid-tooltip, .custom-select.is-valid ~ .valid-feedback,
    .custom-select.is-valid ~ .valid-tooltip {
        display: block;
    }

    .was-validated .form-control-file:valid ~ .valid-feedback,
    .was-validated .form-control-file:valid ~ .valid-tooltip, .form-control-file.is-valid ~ .valid-feedback,
    .form-control-file.is-valid ~ .valid-tooltip {
        display: block;
    }

    .was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
        color: #28a745;
    }

    .was-validated .form-check-input:valid ~ .valid-feedback,
    .was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
    .form-check-input.is-valid ~ .valid-tooltip {
        display: block;
    }

    .was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
        color: #28a745;
    }

    .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
        border-color: #28a745;
    }

    .was-validated .custom-control-input:valid ~ .valid-feedback,
    .was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
    .custom-control-input.is-valid ~ .valid-tooltip {
        display: block;
    }

    .was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
        border-color: #34ce57;
        background-color: #34ce57;
    }

    .was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
        -webkit-box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.25);
        box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.25);
    }

    .was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
        border-color: #28a745;
    }

    .was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
        border-color: #28a745;
    }

    .was-validated .custom-file-input:valid ~ .valid-feedback,
    .was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
    .custom-file-input.is-valid ~ .valid-tooltip {
        display: block;
    }

    .was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
        border-color: #28a745;
        -webkit-box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.25);
        box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.25);
    }

    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #dc3545;
    }

    .invalid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: 0.25rem 0.5rem;
        margin-top: .1rem;
        font-size: 0.765625rem;
        line-height: 1.5;
        color: #FFF;
        background-color: rgba(220, 53, 69, 0.9);
        border-radius: 0.25rem;
    }

    .was-validated .form-control:invalid, .form-control.is-invalid {
        border-color: #dc3545;
        padding-right: calc(1.5em + 0.75rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
        background-repeat: no-repeat;
        background-position: center right calc(0.375em + 0.1875rem);
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
        border-color: #dc3545;
        -webkit-box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.25);
        box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.25);
    }

    .was-validated .form-control:invalid ~ .invalid-feedback,
    .was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
    .form-control.is-invalid ~ .invalid-tooltip {
        display: block;
    }

    .was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
        padding-right: calc(1.5em + 0.75rem);
        background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
    }

    .was-validated .custom-select:invalid, .custom-select.is-invalid {
        border-color: #dc3545;
        padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
        background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") #FFF no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
        border-color: #dc3545;
        -webkit-box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.25);
        box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.25);
    }

    .was-validated .custom-select:invalid ~ .invalid-feedback,
    .was-validated .custom-select:invalid ~ .invalid-tooltip, .custom-select.is-invalid ~ .invalid-feedback,
    .custom-select.is-invalid ~ .invalid-tooltip {
        display: block;
    }

    .was-validated .form-control-file:invalid ~ .invalid-feedback,
    .was-validated .form-control-file:invalid ~ .invalid-tooltip, .form-control-file.is-invalid ~ .invalid-feedback,
    .form-control-file.is-invalid ~ .invalid-tooltip {
        display: block;
    }

    .was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
        color: #dc3545;
    }

    .was-validated .form-check-input:invalid ~ .invalid-feedback,
    .was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
    .form-check-input.is-invalid ~ .invalid-tooltip {
        display: block;
    }

    .was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
        color: #dc3545;
    }

    .was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
        border-color: #dc3545;
    }

    .was-validated .custom-control-input:invalid ~ .invalid-feedback,
    .was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
    .custom-control-input.is-invalid ~ .invalid-tooltip {
        display: block;
    }

    .was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
        border-color: #e4606d;
        background-color: #e4606d;
    }

    .was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
        -webkit-box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.25);
        box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.25);
    }

    .was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
        border-color: #dc3545;
    }

    .was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
        border-color: #dc3545;
    }

    .was-validated .custom-file-input:invalid ~ .invalid-feedback,
    .was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
    .custom-file-input.is-invalid ~ .invalid-tooltip {
        display: block;
    }

    .was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
        border-color: #dc3545;
        -webkit-box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.25);
        box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.25);
    }

    .form-inline {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .form-inline .form-check {
        width: 100%;
    }

    @media (min-width: 576px) {
        .form-inline label {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-bottom: 0;
        }
        .form-inline .form-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 0;
        }
        .form-inline .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle;
        }
        .form-inline .form-control-plaintext {
            display: inline-block;
        }
        .form-inline .input-group,
        .form-inline .custom-select {
            width: auto;
        }
        .form-inline .form-check {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: auto;
            padding-left: 0;
        }
        .form-inline .form-check-input {
            position: relative;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            margin-top: 0;
            margin-right: 0.25rem;
            margin-left: 0;
        }
        .form-inline .custom-control {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }
        .form-inline .custom-control-label {
            margin-bottom: 0;
        }
    }

    .btn {
        display: inline-block;
        font-weight: 700;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 2px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 3px;
        -webkit-transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, -webkit-box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), -webkit-transform 0.2s cubic-bezier(0.35, 0, 0.25, 1);
        transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, -webkit-box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), -webkit-transform 0.2s cubic-bezier(0.35, 0, 0.25, 1);
        -o-transition: box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), transform 0.2s cubic-bezier(0.35, 0, 0.25, 1), background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
        transition: box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), transform 0.2s cubic-bezier(0.35, 0, 0.25, 1), background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
        transition: box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), transform 0.2s cubic-bezier(0.35, 0, 0.25, 1), background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, -webkit-box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), -webkit-transform 0.2s cubic-bezier(0.35, 0, 0.25, 1);
    }

    @media (prefers-reduced-motion: reduce) {
        .btn {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .btn:hover {
        color: #212529;
        text-decoration: none;
    }

    .btn:focus, .btn.focus {
        outline: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .btn.disabled, .btn:disabled {
        opacity: 0.65;
    }

    a.btn.disabled,
    fieldset:disabled a.btn {
        pointer-events: none;
    }

    .btn-primary {
        color: #FFF;
        background-color: #009688;
        border-color: #009688;
    }

    .btn-primary:hover {
        color: #FFF;
        background-color: #007065;
        border-color: #00635a;
    }

    .btn-primary:focus, .btn-primary.focus {
        -webkit-box-shadow: 0 0 0 0 rgba(38, 166, 154, 0.5);
        box-shadow: 0 0 0 0 rgba(38, 166, 154, 0.5);
    }

    .btn-primary.disabled, .btn-primary:disabled {
        color: #FFF;
        background-color: #009688;
        border-color: #009688;
    }

    .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
    .show > .btn-primary.dropdown-toggle {
        color: #FFF;
        background-color: #00635a;
        border-color: #00564e;
    }

    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(38, 166, 154, 0.5);
        box-shadow: 0 0 0 0 rgba(38, 166, 154, 0.5);
    }

    .btn-secondary {
        color: #FFF;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:hover {
        color: #FFF;
        background-color: #5a6268;
        border-color: #545b62;
    }

    .btn-secondary:focus, .btn-secondary.focus {
        -webkit-box-shadow: 0 0 0 0 rgba(130, 138, 145, 0.5);
        box-shadow: 0 0 0 0 rgba(130, 138, 145, 0.5);
    }

    .btn-secondary.disabled, .btn-secondary:disabled {
        color: #FFF;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
    .show > .btn-secondary.dropdown-toggle {
        color: #FFF;
        background-color: #545b62;
        border-color: #4e555b;
    }

    .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(130, 138, 145, 0.5);
        box-shadow: 0 0 0 0 rgba(130, 138, 145, 0.5);
    }

    .btn-success {
        color: #FFF;
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-success:hover {
        color: #FFF;
        background-color: #218838;
        border-color: #1e7e34;
    }

    .btn-success:focus, .btn-success.focus {
        -webkit-box-shadow: 0 0 0 0 rgba(72, 180, 97, 0.5);
        box-shadow: 0 0 0 0 rgba(72, 180, 97, 0.5);
    }

    .btn-success.disabled, .btn-success:disabled {
        color: #FFF;
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
    .show > .btn-success.dropdown-toggle {
        color: #FFF;
        background-color: #1e7e34;
        border-color: #1c7430;
    }

    .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-success.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(72, 180, 97, 0.5);
        box-shadow: 0 0 0 0 rgba(72, 180, 97, 0.5);
    }

    .btn-info {
        color: #FFF;
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-info:hover {
        color: #FFF;
        background-color: #138496;
        border-color: #117a8b;
    }

    .btn-info:focus, .btn-info.focus {
        -webkit-box-shadow: 0 0 0 0 rgba(58, 176, 195, 0.5);
        box-shadow: 0 0 0 0 rgba(58, 176, 195, 0.5);
    }

    .btn-info.disabled, .btn-info:disabled {
        color: #FFF;
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
    .show > .btn-info.dropdown-toggle {
        color: #FFF;
        background-color: #117a8b;
        border-color: #10707f;
    }

    .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-info.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(58, 176, 195, 0.5);
        box-shadow: 0 0 0 0 rgba(58, 176, 195, 0.5);
    }

    .btn-warning {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-warning:hover {
        color: #212529;
        background-color: #e0a800;
        border-color: #d39e00;
    }

    .btn-warning:focus, .btn-warning.focus {
        -webkit-box-shadow: 0 0 0 0 rgba(222, 170, 12, 0.5);
        box-shadow: 0 0 0 0 rgba(222, 170, 12, 0.5);
    }

    .btn-warning.disabled, .btn-warning:disabled {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
    .show > .btn-warning.dropdown-toggle {
        color: #212529;
        background-color: #d39e00;
        border-color: #c69500;
    }

    .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(222, 170, 12, 0.5);
        box-shadow: 0 0 0 0 rgba(222, 170, 12, 0.5);
    }

    .btn-danger {
        color: #FFF;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        color: #FFF;
        background-color: #c82333;
        border-color: #bd2130;
    }

    .btn-danger:focus, .btn-danger.focus {
        -webkit-box-shadow: 0 0 0 0 rgba(225, 83, 97, 0.5);
        box-shadow: 0 0 0 0 rgba(225, 83, 97, 0.5);
    }

    .btn-danger.disabled, .btn-danger:disabled {
        color: #FFF;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
    .show > .btn-danger.dropdown-toggle {
        color: #FFF;
        background-color: #bd2130;
        border-color: #b21f2d;
    }

    .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(225, 83, 97, 0.5);
        box-shadow: 0 0 0 0 rgba(225, 83, 97, 0.5);
    }

    .btn-light {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .btn-light:hover {
        color: #212529;
        background-color: #e2e6ea;
        border-color: #dae0e5;
    }

    .btn-light:focus, .btn-light.focus {
        -webkit-box-shadow: 0 0 0 0 rgba(216, 217, 219, 0.5);
        box-shadow: 0 0 0 0 rgba(216, 217, 219, 0.5);
    }

    .btn-light.disabled, .btn-light:disabled {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
    .show > .btn-light.dropdown-toggle {
        color: #212529;
        background-color: #dae0e5;
        border-color: #d3d9df;
    }

    .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-light.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(216, 217, 219, 0.5);
        box-shadow: 0 0 0 0 rgba(216, 217, 219, 0.5);
    }

    .btn-dark {
        color: #FFF;
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-dark:hover {
        color: #FFF;
        background-color: #23272b;
        border-color: #1d2124;
    }

    .btn-dark:focus, .btn-dark.focus {
        -webkit-box-shadow: 0 0 0 0 rgba(82, 88, 93, 0.5);
        box-shadow: 0 0 0 0 rgba(82, 88, 93, 0.5);
    }

    .btn-dark.disabled, .btn-dark:disabled {
        color: #FFF;
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
    .show > .btn-dark.dropdown-toggle {
        color: #FFF;
        background-color: #1d2124;
        border-color: #171a1d;
    }

    .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(82, 88, 93, 0.5);
        box-shadow: 0 0 0 0 rgba(82, 88, 93, 0.5);
    }

    .btn-outline-primary {
        color: #009688;
        border-color: #009688;
    }

    .btn-outline-primary:hover {
        color: #FFF;
        background-color: #009688;
        border-color: #009688;
    }

    .btn-outline-primary:focus, .btn-outline-primary.focus {
        -webkit-box-shadow: 0 0 0 0 rgba(0, 150, 136, 0.5);
        box-shadow: 0 0 0 0 rgba(0, 150, 136, 0.5);
    }

    .btn-outline-primary.disabled, .btn-outline-primary:disabled {
        color: #009688;
        background-color: transparent;
    }

    .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
    .show > .btn-outline-primary.dropdown-toggle {
        color: #FFF;
        background-color: #009688;
        border-color: #009688;
    }

    .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-primary.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(0, 150, 136, 0.5);
        box-shadow: 0 0 0 0 rgba(0, 150, 136, 0.5);
    }

    .btn-outline-secondary {
        color: #6c757d;
        border-color: #6c757d;
    }

    .btn-outline-secondary:hover {
        color: #FFF;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-outline-secondary:focus, .btn-outline-secondary.focus {
        -webkit-box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.5);
        box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.5);
    }

    .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
        color: #6c757d;
        background-color: transparent;
    }

    .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
    .show > .btn-outline-secondary.dropdown-toggle {
        color: #FFF;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-secondary.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.5);
        box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.5);
    }

    .btn-outline-success {
        color: #28a745;
        border-color: #28a745;
    }

    .btn-outline-success:hover {
        color: #FFF;
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-outline-success:focus, .btn-outline-success.focus {
        -webkit-box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.5);
        box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.5);
    }

    .btn-outline-success.disabled, .btn-outline-success:disabled {
        color: #28a745;
        background-color: transparent;
    }

    .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
    .show > .btn-outline-success.dropdown-toggle {
        color: #FFF;
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-success.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.5);
        box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.5);
    }

    .btn-outline-info {
        color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-outline-info:hover {
        color: #FFF;
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-outline-info:focus, .btn-outline-info.focus {
        -webkit-box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
        box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
    }

    .btn-outline-info.disabled, .btn-outline-info:disabled {
        color: #17a2b8;
        background-color: transparent;
    }

    .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
    .show > .btn-outline-info.dropdown-toggle {
        color: #FFF;
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-info.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
        box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
    }

    .btn-outline-warning {
        color: #ffc107;
        border-color: #ffc107;
    }

    .btn-outline-warning:hover {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-outline-warning:focus, .btn-outline-warning.focus {
        -webkit-box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.5);
        box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.5);
    }

    .btn-outline-warning.disabled, .btn-outline-warning:disabled {
        color: #ffc107;
        background-color: transparent;
    }

    .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
    .show > .btn-outline-warning.dropdown-toggle {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-warning.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.5);
        box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.5);
    }

    .btn-outline-danger {
        color: #dc3545;
        border-color: #dc3545;
    }

    .btn-outline-danger:hover {
        color: #FFF;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-outline-danger:focus, .btn-outline-danger.focus {
        -webkit-box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5);
        box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5);
    }

    .btn-outline-danger.disabled, .btn-outline-danger:disabled {
        color: #dc3545;
        background-color: transparent;
    }

    .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
    .show > .btn-outline-danger.dropdown-toggle {
        color: #FFF;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-danger.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5);
        box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5);
    }

    .btn-outline-light {
        color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .btn-outline-light:hover {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .btn-outline-light:focus, .btn-outline-light.focus {
        -webkit-box-shadow: 0 0 0 0 rgba(248, 249, 250, 0.5);
        box-shadow: 0 0 0 0 rgba(248, 249, 250, 0.5);
    }

    .btn-outline-light.disabled, .btn-outline-light:disabled {
        color: #f8f9fa;
        background-color: transparent;
    }

    .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
    .show > .btn-outline-light.dropdown-toggle {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-light.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(248, 249, 250, 0.5);
        box-shadow: 0 0 0 0 rgba(248, 249, 250, 0.5);
    }

    .btn-outline-dark {
        color: #343a40;
        border-color: #343a40;
    }

    .btn-outline-dark:hover {
        color: #FFF;
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-outline-dark:focus, .btn-outline-dark.focus {
        -webkit-box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
        box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
    }

    .btn-outline-dark.disabled, .btn-outline-dark:disabled {
        color: #343a40;
        background-color: transparent;
    }

    .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
    .show > .btn-outline-dark.dropdown-toggle {
        color: #FFF;
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-dark.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
        box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
    }

    .btn-link {
        font-weight: 400;
        color: #009688;
        text-decoration: none;
    }

    .btn-link:hover {
        color: #004a43;
        text-decoration: underline;
    }

    .btn-link:focus, .btn-link.focus {
        text-decoration: underline;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .btn-link:disabled, .btn-link.disabled {
        color: #6c757d;
        pointer-events: none;
    }

    .btn-lg, .btn-group-lg > .btn {
        padding: 0.5rem 1rem;
        font-size: 1.09375rem;
        line-height: 1.5;
        border-radius: 3px;
    }

    .btn-sm, .btn-group-sm > .btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.765625rem;
        line-height: 1.5;
        border-radius: 3px;
    }

    .btn-block {
        display: block;
        width: 100%;
    }

    .btn-block + .btn-block {
        margin-top: 0.5rem;
    }

    input[type="submit"].btn-block,
    input[type="reset"].btn-block,
    input[type="button"].btn-block {
        width: 100%;
    }

    .fade {
        -webkit-transition: opacity 0.15s linear;
        -o-transition: opacity 0.15s linear;
        transition: opacity 0.15s linear;
    }

    @media (prefers-reduced-motion: reduce) {
        .fade {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .fade:not(.show) {
        opacity: 0;
    }

    .collapse:not(.show) {
        display: none;
    }

    .collapsing {
        position: relative;
        height: 0;
        overflow: hidden;
        -webkit-transition: height 0.35s ease;
        -o-transition: height 0.35s ease;
        transition: height 0.35s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .collapsing {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .dropup,
    .dropright,
    .dropdown,
    .dropleft {
        position: relative;
    }

    .dropdown-toggle {
        white-space: nowrap;
    }

    .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent;
    }

    .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 10rem;
        padding: 0 0;
        margin: 0 0 0;
        font-size: 0.875rem;
        color: #212529;
        text-align: left;
        list-style: none;
        background-color: #FFF;
        background-clip: padding-box;
        border: 0 solid rgba(0, 0, 0, 0.15);
        border-radius: 0.25rem;
    }

    .dropdown-menu-left {
        right: auto;
        left: 0;
    }

    .dropdown-menu-right {
        right: 0;
        left: auto;
    }

    @media (min-width: 576px) {
        .dropdown-menu-sm-left {
            right: auto;
            left: 0;
        }
        .dropdown-menu-sm-right {
            right: 0;
            left: auto;
        }
    }

    @media (min-width: 768px) {
        .dropdown-menu-md-left {
            right: auto;
            left: 0;
        }
        .dropdown-menu-md-right {
            right: 0;
            left: auto;
        }
    }

    @media (min-width: 992px) {
        .dropdown-menu-lg-left {
            right: auto;
            left: 0;
        }
        .dropdown-menu-lg-right {
            right: 0;
            left: auto;
        }
    }

    @media (min-width: 1200px) {
        .dropdown-menu-xl-left {
            right: auto;
            left: 0;
        }
        .dropdown-menu-xl-right {
            right: 0;
            left: auto;
        }
    }

    .dropup .dropdown-menu {
        top: auto;
        bottom: 100%;
        margin-top: 0;
        margin-bottom: 0;
    }

    .dropup .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0;
        border-right: 0.3em solid transparent;
        border-bottom: 0.3em solid;
        border-left: 0.3em solid transparent;
    }

    .dropup .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropright .dropdown-menu {
        top: 0;
        right: auto;
        left: 100%;
        margin-top: 0;
        margin-left: 0;
    }

    .dropright .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid transparent;
        border-right: 0;
        border-bottom: 0.3em solid transparent;
        border-left: 0.3em solid;
    }

    .dropright .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropright .dropdown-toggle::after {
        vertical-align: 0;
    }

    .dropleft .dropdown-menu {
        top: 0;
        right: 100%;
        left: auto;
        margin-top: 0;
        margin-right: 0;
    }

    .dropleft .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
    }

    .dropleft .dropdown-toggle::after {
        display: none;
    }

    .dropleft .dropdown-toggle::before {
        display: inline-block;
        margin-right: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid transparent;
        border-right: 0.3em solid;
        border-bottom: 0.3em solid transparent;
    }

    .dropleft .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropleft .dropdown-toggle::before {
        vertical-align: 0;
    }

    .dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
        right: auto;
        bottom: auto;
    }

    .dropdown-divider {
        height: 0;
        margin: 0.5rem 0;
        overflow: hidden;
        border-top: 1px solid #e9ecef;
    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: 8px 20px;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }

    .dropdown-item:first-child {
        border-top-left-radius: calc(0.25rem - 0);
        border-top-right-radius: calc(0.25rem - 0);
    }

    .dropdown-item:last-child {
        border-bottom-right-radius: calc(0.25rem - 0);
        border-bottom-left-radius: calc(0.25rem - 0);
    }

    .dropdown-item:hover, .dropdown-item:focus {
        color: #16181b;
        text-decoration: none;
        background-color: #f8f9fa;
    }

    .dropdown-item.active, .dropdown-item:active {
        color: #FFF;
        text-decoration: none;
        background-color: #009688;
    }

    .dropdown-item.disabled, .dropdown-item:disabled {
        color: #6c757d;
        pointer-events: none;
        background-color: transparent;
    }

    .dropdown-menu.show {
        display: block;
    }

    .dropdown-header {
        display: block;
        padding: 0 20px;
        margin-bottom: 0;
        font-size: 0.765625rem;
        color: #6c757d;
        white-space: nowrap;
    }

    .dropdown-item-text {
        display: block;
        padding: 8px 20px;
        color: #212529;
    }

    .btn-group,
    .btn-group-vertical {
        position: relative;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        vertical-align: middle;
    }

    .btn-group > .btn,
    .btn-group-vertical > .btn {
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
    }

    .btn-group > .btn:hover,
    .btn-group-vertical > .btn:hover {
        z-index: 1;
    }

    .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
    .btn-group-vertical > .btn:focus,
    .btn-group-vertical > .btn:active,
    .btn-group-vertical > .btn.active {
        z-index: 1;
    }

    .btn-toolbar {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }

    .btn-toolbar .input-group {
        width: auto;
    }

    .btn-group > .btn:not(:first-child),
    .btn-group > .btn-group:not(:first-child) {
        margin-left: -2px;
    }

    .btn-group > .btn:not(:last-child):not(.dropdown-toggle),
    .btn-group > .btn-group:not(:last-child) > .btn {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .btn-group > .btn:not(:first-child),
    .btn-group > .btn-group:not(:first-child) > .btn {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .dropdown-toggle-split {
        padding-right: 0.5625rem;
        padding-left: 0.5625rem;
    }

    .dropdown-toggle-split::after,
    .dropup .dropdown-toggle-split::after,
    .dropright .dropdown-toggle-split::after {
        margin-left: 0;
    }

    .dropleft .dropdown-toggle-split::before {
        margin-right: 0;
    }

    .btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
        padding-right: 0.375rem;
        padding-left: 0.375rem;
    }

    .btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
        padding-right: 0.75rem;
        padding-left: 0.75rem;
    }

    .btn-group-vertical {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .btn-group-vertical > .btn,
    .btn-group-vertical > .btn-group {
        width: 100%;
    }

    .btn-group-vertical > .btn:not(:first-child),
    .btn-group-vertical > .btn-group:not(:first-child) {
        margin-top: -2px;
    }

    .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
    .btn-group-vertical > .btn-group:not(:last-child) > .btn {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .btn-group-vertical > .btn:not(:first-child),
    .btn-group-vertical > .btn-group:not(:first-child) > .btn {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .btn-group-toggle > .btn,
    .btn-group-toggle > .btn-group > .btn {
        margin-bottom: 0;
    }

    .btn-group-toggle > .btn input[type="radio"],
    .btn-group-toggle > .btn input[type="checkbox"],
    .btn-group-toggle > .btn-group > .btn input[type="radio"],
    .btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none;
    }

    .input-group {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        width: 100%;
    }

    .input-group > .form-control,
    .input-group > .form-control-plaintext,
    .input-group > .custom-select,
    .input-group > .custom-file {
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        width: 1%;
        margin-bottom: 0;
    }

    .input-group > .form-control + .form-control,
    .input-group > .form-control + .custom-select,
    .input-group > .form-control + .custom-file,
    .input-group > .form-control-plaintext + .form-control,
    .input-group > .form-control-plaintext + .custom-select,
    .input-group > .form-control-plaintext + .custom-file,
    .input-group > .custom-select + .form-control,
    .input-group > .custom-select + .custom-select,
    .input-group > .custom-select + .custom-file,
    .input-group > .custom-file + .form-control,
    .input-group > .custom-file + .custom-select,
    .input-group > .custom-file + .custom-file {
        margin-left: -2px;
    }

    .input-group > .form-control:focus,
    .input-group > .custom-select:focus,
    .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
        z-index: 3;
    }

    .input-group > .custom-file .custom-file-input:focus {
        z-index: 4;
    }

    .input-group > .form-control:not(:last-child),
    .input-group > .custom-select:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .input-group > .form-control:not(:first-child),
    .input-group > .custom-select:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .input-group > .custom-file {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .input-group > .custom-file:not(:last-child) .custom-file-label,
    .input-group > .custom-file:not(:last-child) .custom-file-label::after {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .input-group > .custom-file:not(:first-child) .custom-file-label {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .input-group-prepend,
    .input-group-append {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .input-group-prepend .btn,
    .input-group-append .btn {
        position: relative;
        z-index: 2;
    }

    .input-group-prepend .btn:focus,
    .input-group-append .btn:focus {
        z-index: 3;
    }

    .input-group-prepend .btn + .btn,
    .input-group-prepend .btn + .input-group-text,
    .input-group-prepend .input-group-text + .input-group-text,
    .input-group-prepend .input-group-text + .btn,
    .input-group-append .btn + .btn,
    .input-group-append .btn + .input-group-text,
    .input-group-append .input-group-text + .input-group-text,
    .input-group-append .input-group-text + .btn {
        margin-left: -2px;
    }

    .input-group-prepend {
        margin-right: -2px;
    }

    .input-group-append {
        margin-left: -2px;
    }

    .input-group-text {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 0.375rem 0.75rem;
        margin-bottom: 0;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        text-align: center;
        white-space: nowrap;
        background-color: #e9ecef;
        border: 2px solid #ced4da;
        border-radius: 4px;
    }

    .input-group-text input[type="radio"],
    .input-group-text input[type="checkbox"] {
        margin-top: 0;
    }

    .input-group-lg > .form-control:not(textarea),
    .input-group-lg > .custom-select {
        height: calc(1.5em + 1rem + 4px);
    }

    .input-group-lg > .form-control,
    .input-group-lg > .custom-select,
    .input-group-lg > .input-group-prepend > .input-group-text,
    .input-group-lg > .input-group-append > .input-group-text,
    .input-group-lg > .input-group-prepend > .btn,
    .input-group-lg > .input-group-append > .btn {
        padding: 0.5rem 1rem;
        font-size: 1.09375rem;
        line-height: 1.5;
        border-radius: 4px;
    }

    .input-group-sm > .form-control:not(textarea),
    .input-group-sm > .custom-select {
        height: calc(1.5em + 0.5rem + 4px);
    }

    .input-group-sm > .form-control,
    .input-group-sm > .custom-select,
    .input-group-sm > .input-group-prepend > .input-group-text,
    .input-group-sm > .input-group-append > .input-group-text,
    .input-group-sm > .input-group-prepend > .btn,
    .input-group-sm > .input-group-append > .btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.765625rem;
        line-height: 1.5;
        border-radius: 4px;
    }

    .input-group-lg > .custom-select,
    .input-group-sm > .custom-select {
        padding-right: 1.75rem;
    }

    .input-group > .input-group-prepend > .btn,
    .input-group > .input-group-prepend > .input-group-text,
    .input-group > .input-group-append:not(:last-child) > .btn,
    .input-group > .input-group-append:not(:last-child) > .input-group-text,
    .input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
    .input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .input-group > .input-group-append > .btn,
    .input-group > .input-group-append > .input-group-text,
    .input-group > .input-group-prepend:not(:first-child) > .btn,
    .input-group > .input-group-prepend:not(:first-child) > .input-group-text,
    .input-group > .input-group-prepend:first-child > .btn:not(:first-child),
    .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .custom-control {
        position: relative;
        display: block;
        min-height: 1.3125rem;
        padding-left: 1.5rem;
    }

    .custom-control-inline {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        margin-right: 1rem;
    }

    .custom-control-input {
        position: absolute;
        z-index: -1;
        opacity: 0;
    }

    .custom-control-input:checked ~ .custom-control-label::before {
        color: #FFF;
        border-color: #009688;
        background-color: #009688;
    }

    .custom-control-input:focus ~ .custom-control-label::before {
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
        border-color: #009688;
    }

    .custom-control-input:not(:disabled):active ~ .custom-control-label::before {
        color: #FFF;
        background-color: #4affee;
        border-color: #4affee;
    }

    .custom-control-input:disabled ~ .custom-control-label {
        color: #6c757d;
    }

    .custom-control-input:disabled ~ .custom-control-label::before {
        background-color: #e9ecef;
    }

    .custom-control-label {
        position: relative;
        margin-bottom: 0;
        vertical-align: top;
    }

    .custom-control-label::before {
        position: absolute;
        top: 0.15625rem;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        pointer-events: none;
        content: "";
        background-color: #FFF;
        border: #adb5bd solid 2px;
    }

    .custom-control-label::after {
        position: absolute;
        top: 0.15625rem;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        content: "";
        background: no-repeat 50% / 50% 50%;
    }

    .custom-checkbox .custom-control-label::before {
        border-radius: 0.25rem;
    }

    .custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23FFF' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
    }

    .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
        border-color: #009688;
        background-color: #009688;
    }

    .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23FFF' d='M0 2h4'/%3e%3c/svg%3e");
    }

    .custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
        background-color: rgba(0, 150, 136, 0.5);
    }

    .custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
        background-color: rgba(0, 150, 136, 0.5);
    }

    .custom-radio .custom-control-label::before {
        border-radius: 50%;
    }

    .custom-radio .custom-control-input:checked ~ .custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23FFF'/%3e%3c/svg%3e");
    }

    .custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
        background-color: rgba(0, 150, 136, 0.5);
    }

    .custom-switch {
        padding-left: 2.25rem;
    }

    .custom-switch .custom-control-label::before {
        left: -2.25rem;
        width: 1.75rem;
        pointer-events: all;
        border-radius: 0.5rem;
    }

    .custom-switch .custom-control-label::after {
        top: calc(0.15625rem + 4px);
        left: calc(-2.25rem + 4px);
        width: calc(1rem - 8px);
        height: calc(1rem - 8px);
        background-color: #adb5bd;
        border-radius: 0.5rem;
        -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-switch .custom-control-label::after {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
        background-color: #FFF;
        -webkit-transform: translateX(0.75rem);
        -ms-transform: translateX(0.75rem);
        transform: translateX(0.75rem);
    }

    .custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
        background-color: rgba(0, 150, 136, 0.5);
    }

    .custom-select {
        display: inline-block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 4px);
        padding: 0.375rem 1.75rem 0.375rem 0.75rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        vertical-align: middle;
        background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
        background-color: #FFF;
        border: 2px solid #ced4da;
        border-radius: 0.25rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .custom-select:focus {
        border-color: #009688;
        outline: 0;
        -webkit-box-shadow: 0 0 0 0 rgba(0, 150, 136, 0.25);
        box-shadow: 0 0 0 0 rgba(0, 150, 136, 0.25);
    }

    .custom-select:focus::-ms-value {
        color: #495057;
        background-color: #FFF;
    }

    .custom-select[multiple], .custom-select[size]:not([size="1"]) {
        height: auto;
        padding-right: 0.75rem;
        background-image: none;
    }

    .custom-select:disabled {
        color: #6c757d;
        background-color: #e9ecef;
    }

    .custom-select::-ms-expand {
        display: none;
    }

    .custom-select-sm {
        height: calc(1.5em + 0.5rem + 4px);
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
        padding-left: 0.5rem;
        font-size: 0.765625rem;
    }

    .custom-select-lg {
        height: calc(1.5em + 1rem + 4px);
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 1rem;
        font-size: 1.09375rem;
    }

    .custom-file {
        position: relative;
        display: inline-block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 4px);
        margin-bottom: 0;
    }

    .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: calc(1.5em + 0.75rem + 4px);
        margin: 0;
        opacity: 0;
    }

    .custom-file-input:focus ~ .custom-file-label {
        border-color: #009688;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .custom-file-input:disabled ~ .custom-file-label {
        background-color: #e9ecef;
    }

    .custom-file-input:lang(en) ~ .custom-file-label::after {
        content: "Browse";
    }

    .custom-file-input ~ .custom-file-label[data-browse]::after {
        content: attr(data-browse);
    }

    .custom-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        height: calc(1.5em + 0.75rem + 4px);
        padding: 0.375rem 0.75rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #FFF;
        border: 2px solid #ced4da;
        border-radius: 4px;
    }

    .custom-file-label::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        height: calc(1.5em + 0.75rem);
        padding: 0.375rem 0.75rem;
        line-height: 1.5;
        color: #495057;
        content: "Browse";
        background-color: #e9ecef;
        border-left: inherit;
        border-radius: 0 4px 4px 0;
    }

    .custom-range {
        width: 100%;
        height: calc(1rem + 0);
        padding: 0;
        background-color: transparent;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .custom-range:focus {
        outline: none;
    }

    .custom-range:focus::-webkit-slider-thumb {
        -webkit-box-shadow: 0 0 0 1px #FFF, none;
        box-shadow: 0 0 0 1px #FFF, none;
    }

    .custom-range:focus::-moz-range-thumb {
        box-shadow: 0 0 0 1px #FFF, none;
    }

    .custom-range:focus::-ms-thumb {
        box-shadow: 0 0 0 1px #FFF, none;
    }

    .custom-range::-moz-focus-outer {
        border: 0;
    }

    .custom-range::-webkit-slider-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: -0.25rem;
        background-color: #009688;
        border: 0;
        border-radius: 1rem;
        -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -webkit-appearance: none;
        appearance: none;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-range::-webkit-slider-thumb {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .custom-range::-webkit-slider-thumb:active {
        background-color: #4affee;
    }

    .custom-range::-webkit-slider-runnable-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: #dee2e6;
        border-color: transparent;
        border-radius: 1rem;
    }

    .custom-range::-moz-range-thumb {
        width: 1rem;
        height: 1rem;
        background-color: #009688;
        border: 0;
        border-radius: 1rem;
        -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -moz-appearance: none;
        appearance: none;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-range::-moz-range-thumb {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .custom-range::-moz-range-thumb:active {
        background-color: #4affee;
    }

    .custom-range::-moz-range-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: #dee2e6;
        border-color: transparent;
        border-radius: 1rem;
    }

    .custom-range::-ms-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: 0;
        margin-right: 0;
        margin-left: 0;
        background-color: #009688;
        border: 0;
        border-radius: 1rem;
        -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        appearance: none;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-range::-ms-thumb {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .custom-range::-ms-thumb:active {
        background-color: #4affee;
    }

    .custom-range::-ms-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: transparent;
        border-color: transparent;
        border-width: 0.5rem;
    }

    .custom-range::-ms-fill-lower {
        background-color: #dee2e6;
        border-radius: 1rem;
    }

    .custom-range::-ms-fill-upper {
        margin-right: 15px;
        background-color: #dee2e6;
        border-radius: 1rem;
    }

    .custom-range:disabled::-webkit-slider-thumb {
        background-color: #adb5bd;
    }

    .custom-range:disabled::-webkit-slider-runnable-track {
        cursor: default;
    }

    .custom-range:disabled::-moz-range-thumb {
        background-color: #adb5bd;
    }

    .custom-range:disabled::-moz-range-track {
        cursor: default;
    }

    .custom-range:disabled::-ms-thumb {
        background-color: #adb5bd;
    }

    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
        -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-control-label::before,
        .custom-file-label,
        .custom-select {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .nav {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }

    .nav-link {
        display: block;
        padding: 0.5rem 1rem;
    }

    .nav-link:hover, .nav-link:focus {
        text-decoration: none;
    }

    .nav-link.disabled {
        color: #6c757d;
        pointer-events: none;
        cursor: default;
    }

    .nav-tabs {
        border-bottom: 1px solid #dee2e6;
    }

    .nav-tabs .nav-item {
        margin-bottom: -1px;
    }

    .nav-tabs .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
    }

    .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
        border-color: #e9ecef #e9ecef #dee2e6;
    }

    .nav-tabs .nav-link.disabled {
        color: #6c757d;
        background-color: transparent;
        border-color: transparent;
    }

    .nav-tabs .nav-link.active,
    .nav-tabs .nav-item.show .nav-link {
        color: #495057;
        background-color: #FFF;
        border-color: #dee2e6 #dee2e6 #FFF;
    }

    .nav-tabs .dropdown-menu {
        margin-top: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .nav-pills .nav-link {
        border-radius: 0.25rem;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show > .nav-link {
        color: #FFF;
        background-color: #009688;
    }

    .nav-fill .nav-item {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        text-align: center;
    }

    .nav-justified .nav-item {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        text-align: center;
    }

    .tab-content > .tab-pane {
        display: none;
    }

    .tab-content > .active {
        display: block;
    }

    .navbar {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 0.5rem 1rem;
    }

    .navbar > .container,
    .navbar > .container-fluid {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .navbar-brand {
        display: inline-block;
        padding-top: 0.3359375rem;
        padding-bottom: 0.3359375rem;
        margin-right: 1rem;
        font-size: 1.09375rem;
        line-height: inherit;
        white-space: nowrap;
    }

    .navbar-brand:hover, .navbar-brand:focus {
        text-decoration: none;
    }

    .navbar-nav {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }

    .navbar-nav .nav-link {
        padding-right: 0;
        padding-left: 0;
    }

    .navbar-nav .dropdown-menu {
        position: static;
        float: none;
    }

    .navbar-text {
        display: inline-block;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    .navbar-collapse {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .navbar-toggler {
        padding: 0.25rem 0.75rem;
        font-size: 1.09375rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: 3px;
    }

    .navbar-toggler:hover, .navbar-toggler:focus {
        text-decoration: none;
    }

    .navbar-toggler-icon {
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        vertical-align: middle;
        content: "";
        background: no-repeat center center;
        background-size: 100% 100%;
    }

    @media (max-width: 575.98px) {
        .navbar-expand-sm > .container,
        .navbar-expand-sm > .container-fluid {
            padding-right: 0;
            padding-left: 0;
        }
    }

    @media (min-width: 576px) {
        .navbar-expand-sm {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
        .navbar-expand-sm .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }
        .navbar-expand-sm .navbar-nav .dropdown-menu {
            position: absolute;
        }
        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }
        .navbar-expand-sm > .container,
        .navbar-expand-sm > .container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
        }
        .navbar-expand-sm .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }
        .navbar-expand-sm .navbar-toggler {
            display: none;
        }
    }

    @media (max-width: 767.98px) {
        .navbar-expand-md > .container,
        .navbar-expand-md > .container-fluid {
            padding-right: 0;
            padding-left: 0;
        }
    }

    @media (min-width: 768px) {
        .navbar-expand-md {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
        .navbar-expand-md .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }
        .navbar-expand-md .navbar-nav .dropdown-menu {
            position: absolute;
        }
        .navbar-expand-md .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }
        .navbar-expand-md > .container,
        .navbar-expand-md > .container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
        }
        .navbar-expand-md .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }
        .navbar-expand-md .navbar-toggler {
            display: none;
        }
    }

    @media (max-width: 991.98px) {
        .navbar-expand-lg > .container,
        .navbar-expand-lg > .container-fluid {
            padding-right: 0;
            padding-left: 0;
        }
    }

    @media (min-width: 992px) {
        .navbar-expand-lg {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
        .navbar-expand-lg .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }
        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute;
        }
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }
        .navbar-expand-lg > .container,
        .navbar-expand-lg > .container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
        }
        .navbar-expand-lg .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }
        .navbar-expand-lg .navbar-toggler {
            display: none;
        }
    }

    @media (max-width: 1199.98px) {
        .navbar-expand-xl > .container,
        .navbar-expand-xl > .container-fluid {
            padding-right: 0;
            padding-left: 0;
        }
    }

    @media (min-width: 1200px) {
        .navbar-expand-xl {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
        .navbar-expand-xl .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }
        .navbar-expand-xl .navbar-nav .dropdown-menu {
            position: absolute;
        }
        .navbar-expand-xl .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }
        .navbar-expand-xl > .container,
        .navbar-expand-xl > .container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
        }
        .navbar-expand-xl .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }
        .navbar-expand-xl .navbar-toggler {
            display: none;
        }
    }

    .navbar-expand {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }

    .navbar-expand > .container,
    .navbar-expand > .container-fluid {
        padding-right: 0;
        padding-left: 0;
    }

    .navbar-expand .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
    }

    .navbar-expand .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-expand .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }

    .navbar-expand > .container,
    .navbar-expand > .container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    }

    .navbar-expand .navbar-collapse {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }

    .navbar-expand .navbar-toggler {
        display: none;
    }

    .navbar-light .navbar-brand {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-nav .nav-link {
        color: rgba(0, 0, 0, 0.5);
    }

    .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
        color: rgba(0, 0, 0, 0.7);
    }

    .navbar-light .navbar-nav .nav-link.disabled {
        color: rgba(0, 0, 0, 0.3);
    }

    .navbar-light .navbar-nav .show > .nav-link,
    .navbar-light .navbar-nav .active > .nav-link,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .nav-link.active {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, 0.5);
        border-color: rgba(0, 0, 0, 0.1);
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .navbar-light .navbar-text {
        color: rgba(0, 0, 0, 0.5);
    }

    .navbar-light .navbar-text a {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-dark .navbar-brand {
        color: #FFF;
    }

    .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
        color: #FFF;
    }

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, 0.5);
    }

    .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
        color: rgba(255, 255, 255, 0.75);
    }

    .navbar-dark .navbar-nav .nav-link.disabled {
        color: rgba(255, 255, 255, 0.25);
    }

    .navbar-dark .navbar-nav .show > .nav-link,
    .navbar-dark .navbar-nav .active > .nav-link,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .nav-link.active {
        color: #FFF;
    }

    .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, 0.5);
        border-color: rgba(255, 255, 255, 0.1);
    }

    .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .navbar-dark .navbar-text {
        color: rgba(255, 255, 255, 0.5);
    }

    .navbar-dark .navbar-text a {
        color: #FFF;
    }

    .navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
        color: #FFF;
    }

    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #FFF;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 0.25rem;
    }

    .card > hr {
        margin-right: 0;
        margin-left: 0;
    }

    .card > .list-group:first-child .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
    }

    .card > .list-group:last-child .list-group-item:last-child {
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
    }

    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem;
    }

    .card-title {
        margin-bottom: 0.75rem;
    }

    .card-subtitle {
        margin-top: -0.375rem;
        margin-bottom: 0;
    }

    .card-text:last-child {
        margin-bottom: 0;
    }

    .card-link:hover {
        text-decoration: none;
    }

    .card-link + .card-link {
        margin-left: 1.25rem;
    }

    .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, 0.03);
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    }

    .card-header:first-child {
        border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
    }

    .card-header + .list-group .list-group-item:first-child {
        border-top: 0;
    }

    .card-footer {
        padding: 0.75rem 1.25rem;
        background-color: rgba(0, 0, 0, 0.03);
        border-top: 1px solid rgba(0, 0, 0, 0.125);
    }

    .card-footer:last-child {
        border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
    }

    .card-header-tabs {
        margin-right: -0.625rem;
        margin-bottom: -0.75rem;
        margin-left: -0.625rem;
        border-bottom: 0;
    }

    .card-header-pills {
        margin-right: -0.625rem;
        margin-left: -0.625rem;
    }

    .card-img-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1.25rem;
    }

    .card-img {
        width: 100%;
        border-radius: calc(0.25rem - 1px);
    }

    .card-img-top {
        width: 100%;
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px);
    }

    .card-img-bottom {
        width: 100%;
        border-bottom-right-radius: calc(0.25rem - 1px);
        border-bottom-left-radius: calc(0.25rem - 1px);
    }

    .card-deck {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .card-deck .card {
        margin-bottom: 15px;
    }

    @media (min-width: 576px) {
        .card-deck {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .card-deck .card {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-right: 15px;
            margin-bottom: 0;
            margin-left: 15px;
        }
    }

    .card-group {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .card-group > .card {
        margin-bottom: 15px;
    }

    @media (min-width: 576px) {
        .card-group {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
        }
        .card-group > .card {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
            margin-bottom: 0;
        }
        .card-group > .card + .card {
            margin-left: 0;
            border-left: 0;
        }
        .card-group > .card:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        .card-group > .card:not(:last-child) .card-img-top,
        .card-group > .card:not(:last-child) .card-header {
            border-top-right-radius: 0;
        }
        .card-group > .card:not(:last-child) .card-img-bottom,
        .card-group > .card:not(:last-child) .card-footer {
            border-bottom-right-radius: 0;
        }
        .card-group > .card:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        .card-group > .card:not(:first-child) .card-img-top,
        .card-group > .card:not(:first-child) .card-header {
            border-top-left-radius: 0;
        }
        .card-group > .card:not(:first-child) .card-img-bottom,
        .card-group > .card:not(:first-child) .card-footer {
            border-bottom-left-radius: 0;
        }
    }

    .card-columns .card {
        margin-bottom: 0.75rem;
    }

    @media (min-width: 576px) {
        .card-columns {
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
            -webkit-column-gap: 1.25rem;
            -moz-column-gap: 1.25rem;
            column-gap: 1.25rem;
            orphans: 1;
            widows: 1;
        }
        .card-columns .card {
            display: inline-block;
            width: 100%;
        }
    }

    .accordion > .card {
        overflow: hidden;
    }

    .accordion > .card:not(:first-of-type) .card-header:first-child {
        border-radius: 0;
    }

    .accordion > .card:not(:first-of-type):not(:last-of-type) {
        border-bottom: 0;
        border-radius: 0;
    }

    .accordion > .card:first-of-type {
        border-bottom: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .accordion > .card:last-of-type {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .accordion > .card .card-header {
        margin-bottom: -1px;
    }

    .breadcrumb {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding: 0.75rem 1rem;
        margin-bottom: 1rem;
        list-style: none;
        background-color: #e9ecef;
        border-radius: 0.25rem;
    }

    .breadcrumb-item + .breadcrumb-item {
        padding-left: 0.5rem;
    }

    .breadcrumb-item + .breadcrumb-item::before {
        display: inline-block;
        padding-right: 0.5rem;
        color: #6c757d;
        content: "/";
    }

    .breadcrumb-item + .breadcrumb-item:hover::before {
        text-decoration: underline;
    }

    .breadcrumb-item + .breadcrumb-item:hover::before {
        text-decoration: none;
    }

    .breadcrumb-item.active {
        color: #6c757d;
    }

    .pagination {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding-left: 0;
        list-style: none;
        border-radius: 0.25rem;
    }

    .page-link {
        position: relative;
        display: block;
        padding: 0.5rem 0.75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: #009688;
        background-color: #FFF;
        border: 1px solid #dee2e6;
    }

    .page-link:hover {
        z-index: 2;
        color: #004a43;
        text-decoration: none;
        background-color: #e9ecef;
        border-color: #dee2e6;
    }

    .page-link:focus {
        z-index: 2;
        outline: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .page-item:first-child .page-link {
        margin-left: 0;
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
    }

    .page-item:last-child .page-link {
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
    }

    .page-item.active .page-link {
        z-index: 1;
        color: #FFF;
        background-color: #009688;
        border-color: #009688;
    }

    .page-item.disabled .page-link {
        color: #6c757d;
        pointer-events: none;
        cursor: auto;
        background-color: #FFF;
        border-color: #dee2e6;
    }

    .pagination-lg .page-link {
        padding: 0.75rem 1.5rem;
        font-size: 1.09375rem;
        line-height: 1.5;
    }

    .pagination-lg .page-item:first-child .page-link {
        border-top-left-radius: 0.3rem;
        border-bottom-left-radius: 0.3rem;
    }

    .pagination-lg .page-item:last-child .page-link {
        border-top-right-radius: 0.3rem;
        border-bottom-right-radius: 0.3rem;
    }

    .pagination-sm .page-link {
        padding: 0.25rem 0.5rem;
        font-size: 0.765625rem;
        line-height: 1.5;
    }

    .pagination-sm .page-item:first-child .page-link {
        border-top-left-radius: 0.2rem;
        border-bottom-left-radius: 0.2rem;
    }

    .pagination-sm .page-item:last-child .page-link {
        border-top-right-radius: 0.2rem;
        border-bottom-right-radius: 0.2rem;
    }

    .badge {
        display: inline-block;
        padding: 0.25em 0.4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.25rem;
        -webkit-transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, -webkit-box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), -webkit-transform 0.2s cubic-bezier(0.35, 0, 0.25, 1);
        transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, -webkit-box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), -webkit-transform 0.2s cubic-bezier(0.35, 0, 0.25, 1);
        -o-transition: box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), transform 0.2s cubic-bezier(0.35, 0, 0.25, 1), background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
        transition: box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), transform 0.2s cubic-bezier(0.35, 0, 0.25, 1), background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
        transition: box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), transform 0.2s cubic-bezier(0.35, 0, 0.25, 1), background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, -webkit-box-shadow 0.3s cubic-bezier(0.35, 0, 0.25, 1), -webkit-transform 0.2s cubic-bezier(0.35, 0, 0.25, 1);
    }

    @media (prefers-reduced-motion: reduce) {
        .badge {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    a.badge:hover, a.badge:focus {
        text-decoration: none;
    }

    .badge:empty {
        display: none;
    }

    .btn .badge {
        position: relative;
        top: -1px;
    }

    .badge-pill {
        padding-right: 0.6em;
        padding-left: 0.6em;
        border-radius: 10rem;
    }

    .badge-primary {
        color: #FFF;
        background-color: #009688;
    }

    a.badge-primary:hover, a.badge-primary:focus {
        color: #FFF;
        background-color: #00635a;
    }

    a.badge-primary:focus, a.badge-primary.focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0 rgba(0, 150, 136, 0.5);
        box-shadow: 0 0 0 0 rgba(0, 150, 136, 0.5);
    }

    .badge-secondary {
        color: #FFF;
        background-color: #6c757d;
    }

    a.badge-secondary:hover, a.badge-secondary:focus {
        color: #FFF;
        background-color: #545b62;
    }

    a.badge-secondary:focus, a.badge-secondary.focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.5);
        box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.5);
    }

    .badge-success {
        color: #FFF;
        background-color: #28a745;
    }

    a.badge-success:hover, a.badge-success:focus {
        color: #FFF;
        background-color: #1e7e34;
    }

    a.badge-success:focus, a.badge-success.focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.5);
        box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.5);
    }

    .badge-info {
        color: #FFF;
        background-color: #17a2b8;
    }

    a.badge-info:hover, a.badge-info:focus {
        color: #FFF;
        background-color: #117a8b;
    }

    a.badge-info:focus, a.badge-info.focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
        box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
    }

    .badge-warning {
        color: #212529;
        background-color: #ffc107;
    }

    a.badge-warning:hover, a.badge-warning:focus {
        color: #212529;
        background-color: #d39e00;
    }

    a.badge-warning:focus, a.badge-warning.focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.5);
        box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.5);
    }

    .badge-danger {
        color: #FFF;
        background-color: #dc3545;
    }

    a.badge-danger:hover, a.badge-danger:focus {
        color: #FFF;
        background-color: #bd2130;
    }

    a.badge-danger:focus, a.badge-danger.focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5);
        box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.5);
    }

    .badge-light {
        color: #212529;
        background-color: #f8f9fa;
    }

    a.badge-light:hover, a.badge-light:focus {
        color: #212529;
        background-color: #dae0e5;
    }

    a.badge-light:focus, a.badge-light.focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0 rgba(248, 249, 250, 0.5);
        box-shadow: 0 0 0 0 rgba(248, 249, 250, 0.5);
    }

    .badge-dark {
        color: #FFF;
        background-color: #343a40;
    }

    a.badge-dark:hover, a.badge-dark:focus {
        color: #FFF;
        background-color: #1d2124;
    }

    a.badge-dark:focus, a.badge-dark.focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
        box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
    }

    .jumbotron {
        padding: 2rem 1rem;
        margin-bottom: 2rem;
        background-color: #e9ecef;
        border-radius: 0.3rem;
    }

    @media (min-width: 576px) {
        .jumbotron {
            padding: 4rem 2rem;
        }
    }

    .jumbotron-fluid {
        padding-right: 0;
        padding-left: 0;
        border-radius: 0;
    }

    .alert {
        position: relative;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }

    .alert-heading {
        color: inherit;
    }

    .alert-link {
        font-weight: 700;
    }

    .alert-dismissible {
        padding-right: 3.8125rem;
    }

    .alert-dismissible .close {
        position: absolute;
        top: 0;
        right: 0;
        padding: 0.75rem 1.25rem;
        color: inherit;
    }

    .alert-primary {
        color: #004e47;
        background-color: #cceae7;
        border-color: #b8e2de;
    }

    .alert-primary hr {
        border-top-color: #a6dbd6;
    }

    .alert-primary .alert-link {
        color: #001b19;
    }

    .alert-secondary {
        color: #383d41;
        background-color: #e2e3e5;
        border-color: #d6d8db;
    }

    .alert-secondary hr {
        border-top-color: #c8cbcf;
    }

    .alert-secondary .alert-link {
        color: #202326;
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }

    .alert-success hr {
        border-top-color: #b1dfbb;
    }

    .alert-success .alert-link {
        color: #0b2e13;
    }

    .alert-info {
        color: #0c5460;
        background-color: #d1ecf1;
        border-color: #bee5eb;
    }

    .alert-info hr {
        border-top-color: #abdde5;
    }

    .alert-info .alert-link {
        color: #062c33;
    }

    .alert-warning {
        color: #856404;
        background-color: #fff3cd;
        border-color: #ffeeba;
    }

    .alert-warning hr {
        border-top-color: #ffe8a1;
    }

    .alert-warning .alert-link {
        color: #533f03;
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }

    .alert-danger hr {
        border-top-color: #f1b0b7;
    }

    .alert-danger .alert-link {
        color: #491217;
    }

    .alert-light {
        color: #818182;
        background-color: #fefefe;
        border-color: #fdfdfe;
    }

    .alert-light hr {
        border-top-color: #ececf6;
    }

    .alert-light .alert-link {
        color: #686868;
    }

    .alert-dark {
        color: #1b1e21;
        background-color: #d6d8d9;
        border-color: #c6c8ca;
    }

    .alert-dark hr {
        border-top-color: #b9bbbe;
    }

    .alert-dark .alert-link {
        color: #040505;
    }

    @-webkit-keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0;
        }
        to {
            background-position: 0 0;
        }
    }

    @keyframes  progress-bar-stripes {
        from {
            background-position: 1rem 0;
        }
        to {
            background-position: 0 0;
        }
    }

    .progress {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        height: 1rem;
        overflow: hidden;
        font-size: 0.65625rem;
        background-color: #e9ecef;
        border-radius: 0.25rem;
    }

    .progress-bar {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: #FFF;
        text-align: center;
        white-space: nowrap;
        background-color: #009688;
        -webkit-transition: width 0.6s ease;
        -o-transition: width 0.6s ease;
        transition: width 0.6s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .progress-bar {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .progress-bar-striped {
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-size: 1rem 1rem;
    }

    .progress-bar-animated {
        -webkit-animation: progress-bar-stripes 1s linear infinite;
        animation: progress-bar-stripes 1s linear infinite;
    }

    @media (prefers-reduced-motion: reduce) {
        .progress-bar-animated {
            -webkit-animation: none;
            animation: none;
        }
    }

    .media {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
    }

    .media-body {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
    }

    .list-group {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
    }

    .list-group-item-action {
        width: 100%;
        color: #495057;
        text-align: inherit;
    }

    .list-group-item-action:hover, .list-group-item-action:focus {
        z-index: 1;
        color: #495057;
        text-decoration: none;
        background-color: #f8f9fa;
    }

    .list-group-item-action:active {
        color: #212529;
        background-color: #e9ecef;
    }

    .list-group-item {
        position: relative;
        display: block;
        padding: 0.75rem 1.25rem;
        margin-bottom: -1px;
        background-color: #FFF;
        border: 1px solid rgba(0, 0, 0, 0.125);
    }

    .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
    }

    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
    }

    .list-group-item.disabled, .list-group-item:disabled {
        color: #6c757d;
        pointer-events: none;
        background-color: #FFF;
    }

    .list-group-item.active {
        z-index: 2;
        color: #FFF;
        background-color: #009688;
        border-color: #009688;
    }

    .list-group-horizontal {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
    }

    .list-group-horizontal .list-group-item {
        margin-right: -1px;
        margin-bottom: 0;
    }

    .list-group-horizontal .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }

    .list-group-horizontal .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }

    @media (min-width: 576px) {
        .list-group-horizontal-sm {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }
        .list-group-horizontal-sm .list-group-item {
            margin-right: -1px;
            margin-bottom: 0;
        }
        .list-group-horizontal-sm .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0;
        }
        .list-group-horizontal-sm .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0;
        }
    }

    @media (min-width: 768px) {
        .list-group-horizontal-md {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }
        .list-group-horizontal-md .list-group-item {
            margin-right: -1px;
            margin-bottom: 0;
        }
        .list-group-horizontal-md .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0;
        }
        .list-group-horizontal-md .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0;
        }
    }

    @media (min-width: 992px) {
        .list-group-horizontal-lg {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }
        .list-group-horizontal-lg .list-group-item {
            margin-right: -1px;
            margin-bottom: 0;
        }
        .list-group-horizontal-lg .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0;
        }
        .list-group-horizontal-lg .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0;
        }
    }

    @media (min-width: 1200px) {
        .list-group-horizontal-xl {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }
        .list-group-horizontal-xl .list-group-item {
            margin-right: -1px;
            margin-bottom: 0;
        }
        .list-group-horizontal-xl .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0;
        }
        .list-group-horizontal-xl .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0;
        }
    }

    .list-group-flush .list-group-item {
        border-right: 0;
        border-left: 0;
        border-radius: 0;
    }

    .list-group-flush .list-group-item:last-child {
        margin-bottom: -1px;
    }

    .list-group-flush:first-child .list-group-item:first-child {
        border-top: 0;
    }

    .list-group-flush:last-child .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom: 0;
    }

    .list-group-item-primary {
        color: #004e47;
        background-color: #b8e2de;
    }

    .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
        color: #004e47;
        background-color: #a6dbd6;
    }

    .list-group-item-primary.list-group-item-action.active {
        color: #FFF;
        background-color: #004e47;
        border-color: #004e47;
    }

    .list-group-item-secondary {
        color: #383d41;
        background-color: #d6d8db;
    }

    .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
        color: #383d41;
        background-color: #c8cbcf;
    }

    .list-group-item-secondary.list-group-item-action.active {
        color: #FFF;
        background-color: #383d41;
        border-color: #383d41;
    }

    .list-group-item-success {
        color: #155724;
        background-color: #c3e6cb;
    }

    .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
        color: #155724;
        background-color: #b1dfbb;
    }

    .list-group-item-success.list-group-item-action.active {
        color: #FFF;
        background-color: #155724;
        border-color: #155724;
    }

    .list-group-item-info {
        color: #0c5460;
        background-color: #bee5eb;
    }

    .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
        color: #0c5460;
        background-color: #abdde5;
    }

    .list-group-item-info.list-group-item-action.active {
        color: #FFF;
        background-color: #0c5460;
        border-color: #0c5460;
    }

    .list-group-item-warning {
        color: #856404;
        background-color: #ffeeba;
    }

    .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
        color: #856404;
        background-color: #ffe8a1;
    }

    .list-group-item-warning.list-group-item-action.active {
        color: #FFF;
        background-color: #856404;
        border-color: #856404;
    }

    .list-group-item-danger {
        color: #721c24;
        background-color: #f5c6cb;
    }

    .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
        color: #721c24;
        background-color: #f1b0b7;
    }

    .list-group-item-danger.list-group-item-action.active {
        color: #FFF;
        background-color: #721c24;
        border-color: #721c24;
    }

    .list-group-item-light {
        color: #818182;
        background-color: #fdfdfe;
    }

    .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
        color: #818182;
        background-color: #ececf6;
    }

    .list-group-item-light.list-group-item-action.active {
        color: #FFF;
        background-color: #818182;
        border-color: #818182;
    }

    .list-group-item-dark {
        color: #1b1e21;
        background-color: #c6c8ca;
    }

    .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
        color: #1b1e21;
        background-color: #b9bbbe;
    }

    .list-group-item-dark.list-group-item-action.active {
        color: #FFF;
        background-color: #1b1e21;
        border-color: #1b1e21;
    }

    .close {
        float: right;
        font-size: 1.3125rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #FFF;
        opacity: .5;
    }

    .close:hover {
        color: #000;
        text-decoration: none;
    }

    .close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
        opacity: .75;
    }

    button.close {
        padding: 0;
        background-color: transparent;
        border: 0;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    a.close.disabled {
        pointer-events: none;
    }

    .toast {
        max-width: 350px;
        overflow: hidden;
        font-size: 0.875rem;
        background-color: rgba(255, 255, 255, 0.85);
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.1);
        -webkit-box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
        box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        opacity: 0;
        border-radius: 0.25rem;
    }

    .toast:not(:last-child) {
        margin-bottom: 0.75rem;
    }

    .toast.showing {
        opacity: 1;
    }

    .toast.show {
        display: block;
        opacity: 1;
    }

    .toast.hide {
        display: none;
    }

    .toast-header {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 0.25rem 0.75rem;
        color: #6c757d;
        background-color: rgba(255, 255, 255, 0.85);
        background-clip: padding-box;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .toast-body {
        padding: 0.75rem;
    }

    .modal-open {
        overflow: hidden;
    }

    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto;
    }

    .modal {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1050;
        display: none;
        width: 100%;
        height: 100%;
        overflow: hidden;
        outline: 0;
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: 0.5rem;
        pointer-events: none;
    }

    .modal.fade .modal-dialog {
        -webkit-transition: -webkit-transform 0.3s ease-out;
        transition: -webkit-transform 0.3s ease-out;
        -o-transition: transform 0.3s ease-out;
        transition: transform 0.3s ease-out;
        transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
        -webkit-transform: translate(0, -50px);
        -ms-transform: translate(0, -50px);
        transform: translate(0, -50px);
    }

    @media (prefers-reduced-motion: reduce) {
        .modal.fade .modal-dialog {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .modal.show .modal-dialog {
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    .modal-dialog-scrollable {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        max-height: calc(100% - 1rem);
    }

    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 1rem);
        overflow: hidden;
    }

    .modal-dialog-scrollable .modal-header,
    .modal-dialog-scrollable .modal-footer {
        -ms-flex-negative: 0;
        flex-shrink: 0;
    }

    .modal-dialog-scrollable .modal-body {
        overflow-y: auto;
    }

    .modal-dialog-centered {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        min-height: calc(100% - 1rem);
    }

    .modal-dialog-centered::before {
        display: block;
        height: calc(100vh - 1rem);
        content: "";
    }

    .modal-dialog-centered.modal-dialog-scrollable {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        height: 100%;
    }

    .modal-dialog-centered.modal-dialog-scrollable .modal-content {
        max-height: none;
    }

    .modal-dialog-centered.modal-dialog-scrollable::before {
        content: none;
    }

    .modal-content {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #FFF;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 0.3rem;
        outline: 0;
    }

    .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1040;
        width: 100vw;
        height: 100vh;
        background-color: #000;
    }

    .modal-backdrop.fade {
        opacity: 0;
    }

    .modal-backdrop.show {
        opacity: 0.5;
    }

    .modal-header {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 1rem 1rem;
        border-bottom: 1px solid #dee2e6;
        border-top-left-radius: 0.3rem;
        border-top-right-radius: 0.3rem;
    }

    .modal-header .close {
        padding: 1rem 1rem;
        margin: -1rem -1rem -1rem auto;
    }

    .modal-title {
        margin-bottom: 0;
        line-height: 1.5;
    }

    .modal-body {
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1rem;
    }

    .modal-footer {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        padding: 1rem;
        border-top: 1px solid #dee2e6;
        border-bottom-right-radius: 0.3rem;
        border-bottom-left-radius: 0.3rem;
    }

    .modal-footer > :not(:first-child) {
        margin-left: .25rem;
    }

    .modal-footer > :not(:last-child) {
        margin-right: .25rem;
    }

    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll;
    }

    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 500px;
            margin: 1.75rem auto;
        }
        .modal-dialog-scrollable {
            max-height: calc(100% - 3.5rem);
        }
        .modal-dialog-scrollable .modal-content {
            max-height: calc(100vh - 3.5rem);
        }
        .modal-dialog-centered {
            min-height: calc(100% - 3.5rem);
        }
        .modal-dialog-centered::before {
            height: calc(100vh - 3.5rem);
        }
        .modal-sm {
            max-width: 300px;
        }
    }

    @media (min-width: 992px) {
        .modal-lg,
        .modal-xl {
            max-width: 800px;
        }
    }

    @media (min-width: 1200px) {
        .modal-xl {
            max-width: 1140px;
        }
    }

    .tooltip {
        position: absolute;
        z-index: 1070;
        display: block;
        margin: 0;
        font-family: "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: 0.765625rem;
        word-wrap: break-word;
        opacity: 0;
    }

    .tooltip.show {
        opacity: 0.9;
    }

    .tooltip .arrow {
        position: absolute;
        display: block;
        width: 0.8rem;
        height: 0.4rem;
    }

    .tooltip .arrow::before {
        position: absolute;
        content: "";
        border-color: transparent;
        border-style: solid;
    }

    .bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
        padding: 0.4rem 0;
    }

    .bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
        bottom: 0;
    }

    .bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
        top: 0;
        border-width: 0.4rem 0.4rem 0;
        border-top-color: #000;
    }

    .bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
        padding: 0 0.4rem;
    }

    .bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
        left: 0;
        width: 0.4rem;
        height: 0.8rem;
    }

    .bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
        right: 0;
        border-width: 0.4rem 0.4rem 0.4rem 0;
        border-right-color: #000;
    }

    .bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
        padding: 0.4rem 0;
    }

    .bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
        top: 0;
    }

    .bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
        bottom: 0;
        border-width: 0 0.4rem 0.4rem;
        border-bottom-color: #000;
    }

    .bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
        padding: 0 0.4rem;
    }

    .bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
        right: 0;
        width: 0.4rem;
        height: 0.8rem;
    }

    .bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
        left: 0;
        border-width: 0.4rem 0 0.4rem 0.4rem;
        border-left-color: #000;
    }

    .tooltip-inner {
        max-width: 200px;
        padding: 0.25rem 0.5rem;
        color: #FFF;
        text-align: center;
        background-color: #000;
        border-radius: 0.25rem;
    }

    .popover {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1060;
        display: block;
        max-width: 276px;
        font-family: "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: 0.765625rem;
        word-wrap: break-word;
        background-color: #FFF;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 0.3rem;
    }

    .popover .arrow {
        position: absolute;
        display: block;
        width: 1rem;
        height: 0.5rem;
        margin: 0 0.3rem;
    }

    .popover .arrow::before, .popover .arrow::after {
        position: absolute;
        display: block;
        content: "";
        border-color: transparent;
        border-style: solid;
    }

    .bs-popover-top, .bs-popover-auto[x-placement^="top"] {
        margin-bottom: 0.5rem;
    }

    .bs-popover-top > .arrow, .bs-popover-auto[x-placement^="top"] > .arrow {
        bottom: calc((0.5rem + 1px) * -1);
    }

    .bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^="top"] > .arrow::before {
        bottom: 0;
        border-width: 0.5rem 0.5rem 0;
        border-top-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^="top"] > .arrow::after {
        bottom: 1px;
        border-width: 0.5rem 0.5rem 0;
        border-top-color: #FFF;
    }

    .bs-popover-right, .bs-popover-auto[x-placement^="right"] {
        margin-left: 0.5rem;
    }

    .bs-popover-right > .arrow, .bs-popover-auto[x-placement^="right"] > .arrow {
        left: calc((0.5rem + 1px) * -1);
        width: 0.5rem;
        height: 1rem;
        margin: 0.3rem 0;
    }

    .bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^="right"] > .arrow::before {
        left: 0;
        border-width: 0.5rem 0.5rem 0.5rem 0;
        border-right-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^="right"] > .arrow::after {
        left: 1px;
        border-width: 0.5rem 0.5rem 0.5rem 0;
        border-right-color: #FFF;
    }

    .bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
        margin-top: 0.5rem;
    }

    .bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^="bottom"] > .arrow {
        top: calc((0.5rem + 1px) * -1);
    }

    .bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^="bottom"] > .arrow::before {
        top: 0;
        border-width: 0 0.5rem 0.5rem 0.5rem;
        border-bottom-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^="bottom"] > .arrow::after {
        top: 1px;
        border-width: 0 0.5rem 0.5rem 0.5rem;
        border-bottom-color: #FFF;
    }

    .bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
        position: absolute;
        top: 0;
        left: 50%;
        display: block;
        width: 1rem;
        margin-left: -0.5rem;
        content: "";
        border-bottom: 1px solid #f7f7f7;
    }

    .bs-popover-left, .bs-popover-auto[x-placement^="left"] {
        margin-right: 0.5rem;
    }

    .bs-popover-left > .arrow, .bs-popover-auto[x-placement^="left"] > .arrow {
        right: calc((0.5rem + 1px) * -1);
        width: 0.5rem;
        height: 1rem;
        margin: 0.3rem 0;
    }

    .bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^="left"] > .arrow::before {
        right: 0;
        border-width: 0.5rem 0 0.5rem 0.5rem;
        border-left-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^="left"] > .arrow::after {
        right: 1px;
        border-width: 0.5rem 0 0.5rem 0.5rem;
        border-left-color: #FFF;
    }

    .popover-header {
        padding: 0.5rem 0.75rem;
        margin-bottom: 0;
        font-size: 0.875rem;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ebebeb;
        border-top-left-radius: calc(0.3rem - 1px);
        border-top-right-radius: calc(0.3rem - 1px);
    }

    .popover-header:empty {
        display: none;
    }

    .popover-body {
        padding: 0.5rem 0.75rem;
        color: #212529;
    }

    .carousel {
        position: relative;
    }

    .carousel.pointer-event {
        -ms-touch-action: pan-y;
        touch-action: pan-y;
    }

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .carousel-inner::after {
        display: block;
        clear: both;
        content: "";
    }

    .carousel-item {
        position: relative;
        display: none;
        float: left;
        width: 100%;
        margin-right: -100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: -webkit-transform 0.6s ease-in-out;
        transition: -webkit-transform 0.6s ease-in-out;
        -o-transition: transform 0.6s ease-in-out;
        transition: transform 0.6s ease-in-out;
        transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .carousel-item {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }

    .carousel-item-next:not(.carousel-item-left),
    .active.carousel-item-right {
        -webkit-transform: translateX(100%);
        -ms-transform: translateX(100%);
        transform: translateX(100%);
    }

    .carousel-item-prev:not(.carousel-item-right),
    .active.carousel-item-left {
        -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
        transform: translateX(-100%);
    }

    .carousel-fade .carousel-item {
        opacity: 0;
        -webkit-transition-property: opacity;
        -o-transition-property: opacity;
        transition-property: opacity;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    .carousel-fade .carousel-item.active,
    .carousel-fade .carousel-item-next.carousel-item-left,
    .carousel-fade .carousel-item-prev.carousel-item-right {
        z-index: 1;
        opacity: 1;
    }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        z-index: 0;
        opacity: 0;
        -webkit-transition: 0s 0.6s opacity;
        -o-transition: 0s 0.6s opacity;
        transition: 0s 0.6s opacity;
    }

    @media (prefers-reduced-motion: reduce) {
        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-right {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .carousel-control-prev,
    .carousel-control-next {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 15%;
        color: #FFF;
        text-align: center;
        opacity: 0.5;
        -webkit-transition: opacity 0.15s ease;
        -o-transition: opacity 0.15s ease;
        transition: opacity 0.15s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .carousel-control-prev,
        .carousel-control-next {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .carousel-control-prev:hover, .carousel-control-prev:focus,
    .carousel-control-next:hover,
    .carousel-control-next:focus {
        color: #FFF;
        text-decoration: none;
        outline: 0;
        opacity: 0.9;
    }

    .carousel-control-prev {
        left: 0;
    }

    .carousel-control-next {
        right: 0;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        display: inline-block;
        width: 20px;
        height: 20px;
        background: no-repeat 50% / 100% 100%;
    }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23FFF' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e");
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23FFF' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e");
    }

    .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 15;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding-left: 0;
        margin-right: 15%;
        margin-left: 15%;
        list-style: none;
    }

    .carousel-indicators li {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        -webkit-box-flex: 0;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
        width: 30px;
        height: 3px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #FFF;
        background-clip: padding-box;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        opacity: .5;
        -webkit-transition: opacity 0.6s ease;
        -o-transition: opacity 0.6s ease;
        transition: opacity 0.6s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .carousel-indicators li {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .carousel-indicators .active {
        opacity: 1;
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #FFF;
        text-align: center;
    }

    @-webkit-keyframes spinner-border {
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes  spinner-border {
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    .spinner-border {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        vertical-align: text-bottom;
        border: 0.25em solid currentColor;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner-border .75s linear infinite;
        animation: spinner-border .75s linear infinite;
    }

    .spinner-border-sm {
        width: 1rem;
        height: 1rem;
        border-width: 0.2em;
    }

    @-webkit-keyframes spinner-grow {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0);
        }
        50% {
            opacity: 1;
        }
    }

    @keyframes  spinner-grow {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0);
        }
        50% {
            opacity: 1;
        }
    }

    .spinner-grow {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        vertical-align: text-bottom;
        background-color: currentColor;
        border-radius: 50%;
        opacity: 0;
        -webkit-animation: spinner-grow .75s linear infinite;
        animation: spinner-grow .75s linear infinite;
    }

    .spinner-grow-sm {
        width: 1rem;
        height: 1rem;
    }

    .align-baseline {
        vertical-align: baseline !important;
    }

    .align-top {
        vertical-align: top !important;
    }

    .align-middle {
        vertical-align: middle !important;
    }

    .align-bottom {
        vertical-align: bottom !important;
    }

    .align-text-bottom {
        vertical-align: text-bottom !important;
    }

    .align-text-top {
        vertical-align: text-top !important;
    }

    .bg-primary {
        background-color: #009688 !important;
    }

    a.bg-primary:hover, a.bg-primary:focus,
    button.bg-primary:hover,
    button.bg-primary:focus {
        background-color: #00635a !important;
    }

    .bg-secondary {
        background-color: #6c757d !important;
    }

    a.bg-secondary:hover, a.bg-secondary:focus,
    button.bg-secondary:hover,
    button.bg-secondary:focus {
        background-color: #545b62 !important;
    }

    .bg-success {
        background-color: #28a745 !important;
    }

    a.bg-success:hover, a.bg-success:focus,
    button.bg-success:hover,
    button.bg-success:focus {
        background-color: #1e7e34 !important;
    }

    .bg-info {
        background-color: #17a2b8 !important;
    }

    a.bg-info:hover, a.bg-info:focus,
    button.bg-info:hover,
    button.bg-info:focus {
        background-color: #117a8b !important;
    }

    .bg-warning {
        background-color: #ffc107 !important;
    }

    a.bg-warning:hover, a.bg-warning:focus,
    button.bg-warning:hover,
    button.bg-warning:focus {
        background-color: #d39e00 !important;
    }

    .bg-danger {
        background-color: #dc3545 !important;
    }

    a.bg-danger:hover, a.bg-danger:focus,
    button.bg-danger:hover,
    button.bg-danger:focus {
        background-color: #bd2130 !important;
    }

    .bg-light {
        background-color: #f8f9fa !important;
    }

    a.bg-light:hover, a.bg-light:focus,
    button.bg-light:hover,
    button.bg-light:focus {
        background-color: #dae0e5 !important;
    }

    .bg-dark {
        background-color: #343a40 !important;
    }

    a.bg-dark:hover, a.bg-dark:focus,
    button.bg-dark:hover,
    button.bg-dark:focus {
        background-color: #1d2124 !important;
    }

    .bg-white {
        background-color: #FFF !important;
    }

    .bg-transparent {
        background-color: transparent !important;
    }

    .border {
        border: 1px solid #dee2e6 !important;
    }

    .border-top {
        border-top: 1px solid #dee2e6 !important;
    }

    .border-right {
        border-right: 1px solid #dee2e6 !important;
    }

    .border-bottom {
        border-bottom: 1px solid #dee2e6 !important;
    }

    .border-left {
        border-left: 1px solid #dee2e6 !important;
    }

    .border-0 {
        border: 0 !important;
    }

    .border-top-0 {
        border-top: 0 !important;
    }

    .border-right-0 {
        border-right: 0 !important;
    }

    .border-bottom-0 {
        border-bottom: 0 !important;
    }

    .border-left-0 {
        border-left: 0 !important;
    }

    .border-primary {
        border-color: #009688 !important;
    }

    .border-secondary {
        border-color: #6c757d !important;
    }

    .border-success {
        border-color: #28a745 !important;
    }

    .border-info {
        border-color: #17a2b8 !important;
    }

    .border-warning {
        border-color: #ffc107 !important;
    }

    .border-danger {
        border-color: #dc3545 !important;
    }

    .border-light {
        border-color: #f8f9fa !important;
    }

    .border-dark {
        border-color: #343a40 !important;
    }

    .border-white {
        border-color: #FFF !important;
    }

    .rounded-sm {
        border-radius: 0.2rem !important;
    }

    .rounded {
        border-radius: 0.25rem !important;
    }

    .rounded-top {
        border-top-left-radius: 0.25rem !important;
        border-top-right-radius: 0.25rem !important;
    }

    .rounded-right {
        border-top-right-radius: 0.25rem !important;
        border-bottom-right-radius: 0.25rem !important;
    }

    .rounded-bottom {
        border-bottom-right-radius: 0.25rem !important;
        border-bottom-left-radius: 0.25rem !important;
    }

    .rounded-left {
        border-top-left-radius: 0.25rem !important;
        border-bottom-left-radius: 0.25rem !important;
    }

    .rounded-lg {
        border-radius: 0.3rem !important;
    }

    .rounded-circle, .app-sidebar__user-avatar {
        border-radius: 50% !important;
    }

    .rounded-pill {
        border-radius: 50rem !important;
    }

    .rounded-0 {
        border-radius: 0 !important;
    }

    .clearfix::after {
        display: block;
        clear: both;
        content: "";
    }

    .d-none {
        display: none !important;
    }

    .d-inline {
        display: inline !important;
    }

    .d-inline-block {
        display: inline-block !important;
    }

    .d-block {
        display: block !important;
    }

    .d-table {
        display: table !important;
    }

    .d-table-row {
        display: table-row !important;
    }

    .d-table-cell {
        display: table-cell !important;
    }

    .d-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
    }

    .d-inline-flex {
        display: -webkit-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important;
    }

    @media (min-width: 576px) {
        .d-sm-none {
            display: none !important;
        }
        .d-sm-inline {
            display: inline !important;
        }
        .d-sm-inline-block {
            display: inline-block !important;
        }
        .d-sm-block {
            display: block !important;
        }
        .d-sm-table {
            display: table !important;
        }
        .d-sm-table-row {
            display: table-row !important;
        }
        .d-sm-table-cell {
            display: table-cell !important;
        }
        .d-sm-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }
        .d-sm-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
        }
    }

    @media (min-width: 768px) {
        .d-md-none {
            display: none !important;
        }
        .d-md-inline {
            display: inline !important;
        }
        .d-md-inline-block {
            display: inline-block !important;
        }
        .d-md-block {
            display: block !important;
        }
        .d-md-table {
            display: table !important;
        }
        .d-md-table-row {
            display: table-row !important;
        }
        .d-md-table-cell {
            display: table-cell !important;
        }
        .d-md-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }
        .d-md-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
        }
    }

    @media (min-width: 992px) {
        .d-lg-none {
            display: none !important;
        }
        .d-lg-inline {
            display: inline !important;
        }
        .d-lg-inline-block {
            display: inline-block !important;
        }
        .d-lg-block {
            display: block !important;
        }
        .d-lg-table {
            display: table !important;
        }
        .d-lg-table-row {
            display: table-row !important;
        }
        .d-lg-table-cell {
            display: table-cell !important;
        }
        .d-lg-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }
        .d-lg-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
        }
    }

    @media (min-width: 1200px) {
        .d-xl-none {
            display: none !important;
        }
        .d-xl-inline {
            display: inline !important;
        }
        .d-xl-inline-block {
            display: inline-block !important;
        }
        .d-xl-block {
            display: block !important;
        }
        .d-xl-table {
            display: table !important;
        }
        .d-xl-table-row {
            display: table-row !important;
        }
        .d-xl-table-cell {
            display: table-cell !important;
        }
        .d-xl-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }
        .d-xl-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
        }
    }

    @media  print {
        .d-print-none {
            display: none !important;
        }
        .d-print-inline {
            display: inline !important;
        }
        .d-print-inline-block {
            display: inline-block !important;
        }
        .d-print-block {
            display: block !important;
        }
        .d-print-table {
            display: table !important;
        }
        .d-print-table-row {
            display: table-row !important;
        }
        .d-print-table-cell {
            display: table-cell !important;
        }
        .d-print-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }
        .d-print-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
        }
    }

    .embed-responsive {
        position: relative;
        display: block;
        width: 100%;
        padding: 0;
        overflow: hidden;
    }

    .embed-responsive::before {
        display: block;
        content: "";
    }

    .embed-responsive .embed-responsive-item,
    .embed-responsive iframe,
    .embed-responsive embed,
    .embed-responsive object,
    .embed-responsive video {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    .embed-responsive-21by9::before {
        padding-top: 42.8571428571%;
    }

    .embed-responsive-16by9::before {
        padding-top: 56.25%;
    }

    .embed-responsive-4by3::before {
        padding-top: 75%;
    }

    .embed-responsive-1by1::before {
        padding-top: 100%;
    }

    .flex-row {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important;
    }

    .flex-column {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important;
    }

    .flex-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important;
    }

    .flex-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important;
    }

    .flex-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
    }

    .flex-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
    }

    .flex-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
    }

    .flex-fill {
        -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important;
    }

    .flex-grow-0 {
        -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
        flex-grow: 0 !important;
    }

    .flex-grow-1 {
        -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
        flex-grow: 1 !important;
    }

    .flex-shrink-0 {
        -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
    }

    .flex-shrink-1 {
        -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
    }

    .justify-content-start {
        -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important;
    }

    .justify-content-end {
        -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important;
    }

    .justify-content-center {
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important;
    }

    .justify-content-between {
        -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important;
    }

    .justify-content-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
    }

    .align-items-start {
        -webkit-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important;
    }

    .align-items-end {
        -webkit-box-align: end !important;
        -ms-flex-align: end !important;
        align-items: flex-end !important;
    }

    .align-items-center {
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important;
    }

    .align-items-baseline {
        -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
        align-items: baseline !important;
    }

    .align-items-stretch {
        -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important;
    }

    .align-content-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
    }

    .align-content-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
    }

    .align-content-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important;
    }

    .align-content-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
    }

    .align-content-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
    }

    .align-content-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
    }

    .align-self-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important;
    }

    .align-self-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important;
    }

    .align-self-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important;
    }

    .align-self-center {
        -ms-flex-item-align: center !important;
        align-self: center !important;
    }

    .align-self-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
    }

    .align-self-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
    }

    @media (min-width: 576px) {
        .flex-sm-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important;
        }
        .flex-sm-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }
        .flex-sm-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
        }
        .flex-sm-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
        }
        .flex-sm-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
        }
        .flex-sm-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important;
        }
        .flex-sm-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important;
        }
        .flex-sm-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
        }
        .flex-sm-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
        }
        .flex-sm-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
        }
        .flex-sm-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important;
        }
        .flex-sm-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important;
        }
        .justify-content-sm-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important;
        }
        .justify-content-sm-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important;
        }
        .justify-content-sm-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }
        .justify-content-sm-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }
        .justify-content-sm-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important;
        }
        .align-items-sm-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important;
        }
        .align-items-sm-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important;
        }
        .align-items-sm-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }
        .align-items-sm-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important;
        }
        .align-items-sm-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important;
        }
        .align-content-sm-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important;
        }
        .align-content-sm-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important;
        }
        .align-content-sm-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important;
        }
        .align-content-sm-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
        }
        .align-content-sm-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important;
        }
        .align-content-sm-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important;
        }
        .align-self-sm-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important;
        }
        .align-self-sm-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important;
        }
        .align-self-sm-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important;
        }
        .align-self-sm-center {
            -ms-flex-item-align: center !important;
            align-self: center !important;
        }
        .align-self-sm-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important;
        }
        .align-self-sm-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important;
        }
    }

    @media (min-width: 768px) {
        .flex-md-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important;
        }
        .flex-md-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }
        .flex-md-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
        }
        .flex-md-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
        }
        .flex-md-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
        }
        .flex-md-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important;
        }
        .flex-md-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important;
        }
        .flex-md-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
        }
        .flex-md-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
        }
        .flex-md-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
        }
        .flex-md-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important;
        }
        .flex-md-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important;
        }
        .justify-content-md-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important;
        }
        .justify-content-md-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important;
        }
        .justify-content-md-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }
        .justify-content-md-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }
        .justify-content-md-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important;
        }
        .align-items-md-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important;
        }
        .align-items-md-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important;
        }
        .align-items-md-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }
        .align-items-md-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important;
        }
        .align-items-md-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important;
        }
        .align-content-md-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important;
        }
        .align-content-md-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important;
        }
        .align-content-md-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important;
        }
        .align-content-md-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
        }
        .align-content-md-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important;
        }
        .align-content-md-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important;
        }
        .align-self-md-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important;
        }
        .align-self-md-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important;
        }
        .align-self-md-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important;
        }
        .align-self-md-center {
            -ms-flex-item-align: center !important;
            align-self: center !important;
        }
        .align-self-md-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important;
        }
        .align-self-md-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important;
        }
    }

    @media (min-width: 992px) {
        .flex-lg-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important;
        }
        .flex-lg-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }
        .flex-lg-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
        }
        .flex-lg-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
        }
        .flex-lg-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
        }
        .flex-lg-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important;
        }
        .flex-lg-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important;
        }
        .flex-lg-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
        }
        .flex-lg-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
        }
        .flex-lg-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
        }
        .flex-lg-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important;
        }
        .flex-lg-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important;
        }
        .justify-content-lg-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important;
        }
        .justify-content-lg-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important;
        }
        .justify-content-lg-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }
        .justify-content-lg-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }
        .justify-content-lg-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important;
        }
        .align-items-lg-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important;
        }
        .align-items-lg-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important;
        }
        .align-items-lg-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }
        .align-items-lg-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important;
        }
        .align-items-lg-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important;
        }
        .align-content-lg-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important;
        }
        .align-content-lg-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important;
        }
        .align-content-lg-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important;
        }
        .align-content-lg-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
        }
        .align-content-lg-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important;
        }
        .align-content-lg-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important;
        }
        .align-self-lg-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important;
        }
        .align-self-lg-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important;
        }
        .align-self-lg-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important;
        }
        .align-self-lg-center {
            -ms-flex-item-align: center !important;
            align-self: center !important;
        }
        .align-self-lg-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important;
        }
        .align-self-lg-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important;
        }
    }

    @media (min-width: 1200px) {
        .flex-xl-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important;
        }
        .flex-xl-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }
        .flex-xl-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
        }
        .flex-xl-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
        }
        .flex-xl-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
        }
        .flex-xl-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important;
        }
        .flex-xl-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important;
        }
        .flex-xl-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
        }
        .flex-xl-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
        }
        .flex-xl-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
        }
        .flex-xl-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important;
        }
        .flex-xl-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important;
        }
        .justify-content-xl-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important;
        }
        .justify-content-xl-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important;
        }
        .justify-content-xl-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }
        .justify-content-xl-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }
        .justify-content-xl-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important;
        }
        .align-items-xl-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important;
        }
        .align-items-xl-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important;
        }
        .align-items-xl-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }
        .align-items-xl-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important;
        }
        .align-items-xl-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important;
        }
        .align-content-xl-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important;
        }
        .align-content-xl-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important;
        }
        .align-content-xl-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important;
        }
        .align-content-xl-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
        }
        .align-content-xl-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important;
        }
        .align-content-xl-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important;
        }
        .align-self-xl-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important;
        }
        .align-self-xl-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important;
        }
        .align-self-xl-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important;
        }
        .align-self-xl-center {
            -ms-flex-item-align: center !important;
            align-self: center !important;
        }
        .align-self-xl-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important;
        }
        .align-self-xl-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important;
        }
    }

    .float-left {
        float: left !important;
    }

    .float-right {
        float: right !important;
    }

    .float-none {
        float: none !important;
    }

    @media (min-width: 576px) {
        .float-sm-left {
            float: left !important;
        }
        .float-sm-right {
            float: right !important;
        }
        .float-sm-none {
            float: none !important;
        }
    }

    @media (min-width: 768px) {
        .float-md-left {
            float: left !important;
        }
        .float-md-right {
            float: right !important;
        }
        .float-md-none {
            float: none !important;
        }
    }

    @media (min-width: 992px) {
        .float-lg-left {
            float: left !important;
        }
        .float-lg-right {
            float: right !important;
        }
        .float-lg-none {
            float: none !important;
        }
    }

    @media (min-width: 1200px) {
        .float-xl-left {
            float: left !important;
        }
        .float-xl-right {
            float: right !important;
        }
        .float-xl-none {
            float: none !important;
        }
    }

    .overflow-auto {
        overflow: auto !important;
    }

    .overflow-hidden {
        overflow: hidden !important;
    }

    .position-static {
        position: static !important;
    }

    .position-relative {
        position: relative !important;
    }

    .position-absolute {
        position: absolute !important;
    }

    .position-fixed {
        position: fixed !important;
    }

    .position-sticky {
        position: -webkit-sticky !important;
        position: sticky !important;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030;
    }

    .fixed-bottom {
        position: fixed;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1030;
    }

    @supports ((position: -webkit-sticky) or (position: sticky)) {
        .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020;
        }
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }

    .sr-only-focusable:active, .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        overflow: visible;
        clip: auto;
        white-space: normal;
    }

    .shadow-sm {
        -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
    }

    .shadow {
        -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }

    .shadow-lg {
        -webkit-box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
    }

    .shadow-none {
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    .w-25 {
        width: 25% !important;
    }

    .w-50 {
        width: 50% !important;
    }

    .w-75 {
        width: 75% !important;
    }

    .w-100 {
        width: 100% !important;
    }

    .w-auto {
        width: auto !important;
    }

    .h-25 {
        height: 25% !important;
    }

    .h-50 {
        height: 50% !important;
    }

    .h-75 {
        height: 75% !important;
    }

    .h-100 {
        height: 100% !important;
    }

    .h-auto {
        height: auto !important;
    }

    .mw-100 {
        max-width: 100% !important;
    }

    .mh-100 {
        max-height: 100% !important;
    }

    .min-vw-100 {
        min-width: 100vw !important;
    }

    .min-vh-100 {
        min-height: 100vh !important;
    }

    .vw-100 {
        width: 100vw !important;
    }

    .vh-100 {
        height: 100vh !important;
    }

    .stretched-link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        pointer-events: auto;
        content: "";
        background-color: rgba(0, 0, 0, 0);
    }

    .m-0 {
        margin: 0 !important;
    }

    .mt-0,
    .my-0 {
        margin-top: 0 !important;
    }

    .mr-0,
    .mx-0 {
        margin-right: 0 !important;
    }

    .mb-0,
    .my-0 {
        margin-bottom: 0 !important;
    }

    .ml-0,
    .mx-0 {
        margin-left: 0 !important;
    }

    .m-1 {
        margin: 0.25rem !important;
    }

    .mt-1,
    .my-1 {
        margin-top: 0.25rem !important;
    }

    .mr-1,
    .mx-1 {
        margin-right: 0.25rem !important;
    }

    .mb-1,
    .my-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-1,
    .mx-1 {
        margin-left: 0.25rem !important;
    }

    .m-2 {
        margin: 0.5rem !important;
    }

    .mt-2,
    .my-2 {
        margin-top: 0.5rem !important;
    }

    .mr-2,
    .mx-2 {
        margin-right: 0.5rem !important;
    }

    .mb-2,
    .my-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-2,
    .mx-2 {
        margin-left: 0.5rem !important;
    }

    .m-3 {
        margin: 1rem !important;
    }

    .mt-3,
    .my-3 {
        margin-top: 1rem !important;
    }

    .mr-3,
    .mx-3 {
        margin-right: 1rem !important;
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .ml-3,
    .mx-3 {
        margin-left: 1rem !important;
    }

    .m-4 {
        margin: 1.5rem !important;
    }

    .mt-4,
    .my-4 {
        margin-top: 1.5rem !important;
    }

    .mr-4,
    .mx-4 {
        margin-right: 1.5rem !important;
    }

    .mb-4,
    .my-4 {
        margin-bottom: 1.5rem !important;
    }

    .ml-4,
    .mx-4 {
        margin-left: 1.5rem !important;
    }

    .m-5 {
        margin: 3rem !important;
    }

    .mt-5,
    .my-5 {
        margin-top: 3rem !important;
    }

    .mr-5,
    .mx-5 {
        margin-right: 3rem !important;
    }

    .mb-5,
    .my-5 {
        margin-bottom: 3rem !important;
    }

    .ml-5,
    .mx-5 {
        margin-left: 3rem !important;
    }

    .p-0 {
        padding: 0 !important;
    }

    .pt-0,
    .py-0 {
        padding-top: 0 !important;
    }

    .pr-0,
    .px-0 {
        padding-right: 0 !important;
    }

    .pb-0,
    .py-0 {
        padding-bottom: 0 !important;
    }

    .pl-0,
    .px-0 {
        padding-left: 0 !important;
    }

    .p-1 {
        padding: 0.25rem !important;
    }

    .pt-1,
    .py-1 {
        padding-top: 0.25rem !important;
    }

    .pr-1,
    .px-1 {
        padding-right: 0.25rem !important;
    }

    .pb-1,
    .py-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-1,
    .px-1 {
        padding-left: 0.25rem !important;
    }

    .p-2 {
        padding: 0.5rem !important;
    }

    .pt-2,
    .py-2 {
        padding-top: 0.5rem !important;
    }

    .pr-2,
    .px-2 {
        padding-right: 0.5rem !important;
    }

    .pb-2,
    .py-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-2,
    .px-2 {
        padding-left: 0.5rem !important;
    }

    .p-3 {
        padding: 1rem !important;
    }

    .pt-3,
    .py-3 {
        padding-top: 1rem !important;
    }

    .pr-3,
    .px-3 {
        padding-right: 1rem !important;
    }

    .pb-3,
    .py-3 {
        padding-bottom: 1rem !important;
    }

    .pl-3,
    .px-3 {
        padding-left: 1rem !important;
    }

    .p-4 {
        padding: 1.5rem !important;
    }

    .pt-4,
    .py-4 {
        padding-top: 1.5rem !important;
    }

    .pr-4,
    .px-4 {
        padding-right: 1.5rem !important;
    }

    .pb-4,
    .py-4 {
        padding-bottom: 1.5rem !important;
    }

    .pl-4,
    .px-4 {
        padding-left: 1.5rem !important;
    }

    .p-5 {
        padding: 3rem !important;
    }

    .pt-5,
    .py-5 {
        padding-top: 3rem !important;
    }

    .pr-5,
    .px-5 {
        padding-right: 3rem !important;
    }

    .pb-5,
    .py-5 {
        padding-bottom: 3rem !important;
    }

    .pl-5,
    .px-5 {
        padding-left: 3rem !important;
    }

    .m-n1 {
        margin: -0.25rem !important;
    }

    .mt-n1,
    .my-n1 {
        margin-top: -0.25rem !important;
    }

    .mr-n1,
    .mx-n1 {
        margin-right: -0.25rem !important;
    }

    .mb-n1,
    .my-n1 {
        margin-bottom: -0.25rem !important;
    }

    .ml-n1,
    .mx-n1 {
        margin-left: -0.25rem !important;
    }

    .m-n2 {
        margin: -0.5rem !important;
    }

    .mt-n2,
    .my-n2 {
        margin-top: -0.5rem !important;
    }

    .mr-n2,
    .mx-n2 {
        margin-right: -0.5rem !important;
    }

    .mb-n2,
    .my-n2 {
        margin-bottom: -0.5rem !important;
    }

    .ml-n2,
    .mx-n2 {
        margin-left: -0.5rem !important;
    }

    .m-n3 {
        margin: -1rem !important;
    }

    .mt-n3,
    .my-n3 {
        margin-top: -1rem !important;
    }

    .mr-n3,
    .mx-n3 {
        margin-right: -1rem !important;
    }

    .mb-n3,
    .my-n3 {
        margin-bottom: -1rem !important;
    }

    .ml-n3,
    .mx-n3 {
        margin-left: -1rem !important;
    }

    .m-n4 {
        margin: -1.5rem !important;
    }

    .mt-n4,
    .my-n4 {
        margin-top: -1.5rem !important;
    }

    .mr-n4,
    .mx-n4 {
        margin-right: -1.5rem !important;
    }

    .mb-n4,
    .my-n4 {
        margin-bottom: -1.5rem !important;
    }

    .ml-n4,
    .mx-n4 {
        margin-left: -1.5rem !important;
    }

    .m-n5 {
        margin: -3rem !important;
    }

    .mt-n5,
    .my-n5 {
        margin-top: -3rem !important;
    }

    .mr-n5,
    .mx-n5 {
        margin-right: -3rem !important;
    }

    .mb-n5,
    .my-n5 {
        margin-bottom: -3rem !important;
    }

    .ml-n5,
    .mx-n5 {
        margin-left: -3rem !important;
    }

    .m-auto {
        margin: auto !important;
    }

    .mt-auto,
    .my-auto {
        margin-top: auto !important;
    }

    .mr-auto,
    .mx-auto {
        margin-right: auto !important;
    }

    .mb-auto,
    .my-auto {
        margin-bottom: auto !important;
    }

    .ml-auto,
    .mx-auto {
        margin-left: auto !important;
    }

    @media (min-width: 576px) {
        .m-sm-0 {
            margin: 0 !important;
        }
        .mt-sm-0,
        .my-sm-0 {
            margin-top: 0 !important;
        }
        .mr-sm-0,
        .mx-sm-0 {
            margin-right: 0 !important;
        }
        .mb-sm-0,
        .my-sm-0 {
            margin-bottom: 0 !important;
        }
        .ml-sm-0,
        .mx-sm-0 {
            margin-left: 0 !important;
        }
        .m-sm-1 {
            margin: 0.25rem !important;
        }
        .mt-sm-1,
        .my-sm-1 {
            margin-top: 0.25rem !important;
        }
        .mr-sm-1,
        .mx-sm-1 {
            margin-right: 0.25rem !important;
        }
        .mb-sm-1,
        .my-sm-1 {
            margin-bottom: 0.25rem !important;
        }
        .ml-sm-1,
        .mx-sm-1 {
            margin-left: 0.25rem !important;
        }
        .m-sm-2 {
            margin: 0.5rem !important;
        }
        .mt-sm-2,
        .my-sm-2 {
            margin-top: 0.5rem !important;
        }
        .mr-sm-2,
        .mx-sm-2 {
            margin-right: 0.5rem !important;
        }
        .mb-sm-2,
        .my-sm-2 {
            margin-bottom: 0.5rem !important;
        }
        .ml-sm-2,
        .mx-sm-2 {
            margin-left: 0.5rem !important;
        }
        .m-sm-3 {
            margin: 1rem !important;
        }
        .mt-sm-3,
        .my-sm-3 {
            margin-top: 1rem !important;
        }
        .mr-sm-3,
        .mx-sm-3 {
            margin-right: 1rem !important;
        }
        .mb-sm-3,
        .my-sm-3 {
            margin-bottom: 1rem !important;
        }
        .ml-sm-3,
        .mx-sm-3 {
            margin-left: 1rem !important;
        }
        .m-sm-4 {
            margin: 1.5rem !important;
        }
        .mt-sm-4,
        .my-sm-4 {
            margin-top: 1.5rem !important;
        }
        .mr-sm-4,
        .mx-sm-4 {
            margin-right: 1.5rem !important;
        }
        .mb-sm-4,
        .my-sm-4 {
            margin-bottom: 1.5rem !important;
        }
        .ml-sm-4,
        .mx-sm-4 {
            margin-left: 1.5rem !important;
        }
        .m-sm-5 {
            margin: 3rem !important;
        }
        .mt-sm-5,
        .my-sm-5 {
            margin-top: 3rem !important;
        }
        .mr-sm-5,
        .mx-sm-5 {
            margin-right: 3rem !important;
        }
        .mb-sm-5,
        .my-sm-5 {
            margin-bottom: 3rem !important;
        }
        .ml-sm-5,
        .mx-sm-5 {
            margin-left: 3rem !important;
        }
        .p-sm-0 {
            padding: 0 !important;
        }
        .pt-sm-0,
        .py-sm-0 {
            padding-top: 0 !important;
        }
        .pr-sm-0,
        .px-sm-0 {
            padding-right: 0 !important;
        }
        .pb-sm-0,
        .py-sm-0 {
            padding-bottom: 0 !important;
        }
        .pl-sm-0,
        .px-sm-0 {
            padding-left: 0 !important;
        }
        .p-sm-1 {
            padding: 0.25rem !important;
        }
        .pt-sm-1,
        .py-sm-1 {
            padding-top: 0.25rem !important;
        }
        .pr-sm-1,
        .px-sm-1 {
            padding-right: 0.25rem !important;
        }
        .pb-sm-1,
        .py-sm-1 {
            padding-bottom: 0.25rem !important;
        }
        .pl-sm-1,
        .px-sm-1 {
            padding-left: 0.25rem !important;
        }
        .p-sm-2 {
            padding: 0.5rem !important;
        }
        .pt-sm-2,
        .py-sm-2 {
            padding-top: 0.5rem !important;
        }
        .pr-sm-2,
        .px-sm-2 {
            padding-right: 0.5rem !important;
        }
        .pb-sm-2,
        .py-sm-2 {
            padding-bottom: 0.5rem !important;
        }
        .pl-sm-2,
        .px-sm-2 {
            padding-left: 0.5rem !important;
        }
        .p-sm-3 {
            padding: 1rem !important;
        }
        .pt-sm-3,
        .py-sm-3 {
            padding-top: 1rem !important;
        }
        .pr-sm-3,
        .px-sm-3 {
            padding-right: 1rem !important;
        }
        .pb-sm-3,
        .py-sm-3 {
            padding-bottom: 1rem !important;
        }
        .pl-sm-3,
        .px-sm-3 {
            padding-left: 1rem !important;
        }
        .p-sm-4 {
            padding: 1.5rem !important;
        }
        .pt-sm-4,
        .py-sm-4 {
            padding-top: 1.5rem !important;
        }
        .pr-sm-4,
        .px-sm-4 {
            padding-right: 1.5rem !important;
        }
        .pb-sm-4,
        .py-sm-4 {
            padding-bottom: 1.5rem !important;
        }
        .pl-sm-4,
        .px-sm-4 {
            padding-left: 1.5rem !important;
        }
        .p-sm-5 {
            padding: 3rem !important;
        }
        .pt-sm-5,
        .py-sm-5 {
            padding-top: 3rem !important;
        }
        .pr-sm-5,
        .px-sm-5 {
            padding-right: 3rem !important;
        }
        .pb-sm-5,
        .py-sm-5 {
            padding-bottom: 3rem !important;
        }
        .pl-sm-5,
        .px-sm-5 {
            padding-left: 3rem !important;
        }
        .m-sm-n1 {
            margin: -0.25rem !important;
        }
        .mt-sm-n1,
        .my-sm-n1 {
            margin-top: -0.25rem !important;
        }
        .mr-sm-n1,
        .mx-sm-n1 {
            margin-right: -0.25rem !important;
        }
        .mb-sm-n1,
        .my-sm-n1 {
            margin-bottom: -0.25rem !important;
        }
        .ml-sm-n1,
        .mx-sm-n1 {
            margin-left: -0.25rem !important;
        }
        .m-sm-n2 {
            margin: -0.5rem !important;
        }
        .mt-sm-n2,
        .my-sm-n2 {
            margin-top: -0.5rem !important;
        }
        .mr-sm-n2,
        .mx-sm-n2 {
            margin-right: -0.5rem !important;
        }
        .mb-sm-n2,
        .my-sm-n2 {
            margin-bottom: -0.5rem !important;
        }
        .ml-sm-n2,
        .mx-sm-n2 {
            margin-left: -0.5rem !important;
        }
        .m-sm-n3 {
            margin: -1rem !important;
        }
        .mt-sm-n3,
        .my-sm-n3 {
            margin-top: -1rem !important;
        }
        .mr-sm-n3,
        .mx-sm-n3 {
            margin-right: -1rem !important;
        }
        .mb-sm-n3,
        .my-sm-n3 {
            margin-bottom: -1rem !important;
        }
        .ml-sm-n3,
        .mx-sm-n3 {
            margin-left: -1rem !important;
        }
        .m-sm-n4 {
            margin: -1.5rem !important;
        }
        .mt-sm-n4,
        .my-sm-n4 {
            margin-top: -1.5rem !important;
        }
        .mr-sm-n4,
        .mx-sm-n4 {
            margin-right: -1.5rem !important;
        }
        .mb-sm-n4,
        .my-sm-n4 {
            margin-bottom: -1.5rem !important;
        }
        .ml-sm-n4,
        .mx-sm-n4 {
            margin-left: -1.5rem !important;
        }
        .m-sm-n5 {
            margin: -3rem !important;
        }
        .mt-sm-n5,
        .my-sm-n5 {
            margin-top: -3rem !important;
        }
        .mr-sm-n5,
        .mx-sm-n5 {
            margin-right: -3rem !important;
        }
        .mb-sm-n5,
        .my-sm-n5 {
            margin-bottom: -3rem !important;
        }
        .ml-sm-n5,
        .mx-sm-n5 {
            margin-left: -3rem !important;
        }
        .m-sm-auto {
            margin: auto !important;
        }
        .mt-sm-auto,
        .my-sm-auto {
            margin-top: auto !important;
        }
        .mr-sm-auto,
        .mx-sm-auto {
            margin-right: auto !important;
        }
        .mb-sm-auto,
        .my-sm-auto {
            margin-bottom: auto !important;
        }
        .ml-sm-auto,
        .mx-sm-auto {
            margin-left: auto !important;
        }
    }

    @media (min-width: 768px) {
        .m-md-0 {
            margin: 0 !important;
        }
        .mt-md-0,
        .my-md-0 {
            margin-top: 0 !important;
        }
        .mr-md-0,
        .mx-md-0 {
            margin-right: 0 !important;
        }
        .mb-md-0,
        .my-md-0 {
            margin-bottom: 0 !important;
        }
        .ml-md-0,
        .mx-md-0 {
            margin-left: 0 !important;
        }
        .m-md-1 {
            margin: 0.25rem !important;
        }
        .mt-md-1,
        .my-md-1 {
            margin-top: 0.25rem !important;
        }
        .mr-md-1,
        .mx-md-1 {
            margin-right: 0.25rem !important;
        }
        .mb-md-1,
        .my-md-1 {
            margin-bottom: 0.25rem !important;
        }
        .ml-md-1,
        .mx-md-1 {
            margin-left: 0.25rem !important;
        }
        .m-md-2 {
            margin: 0.5rem !important;
        }
        .mt-md-2,
        .my-md-2 {
            margin-top: 0.5rem !important;
        }
        .mr-md-2,
        .mx-md-2 {
            margin-right: 0.5rem !important;
        }
        .mb-md-2,
        .my-md-2 {
            margin-bottom: 0.5rem !important;
        }
        .ml-md-2,
        .mx-md-2 {
            margin-left: 0.5rem !important;
        }
        .m-md-3 {
            margin: 1rem !important;
        }
        .mt-md-3,
        .my-md-3 {
            margin-top: 1rem !important;
        }
        .mr-md-3,
        .mx-md-3 {
            margin-right: 1rem !important;
        }
        .mb-md-3,
        .my-md-3 {
            margin-bottom: 1rem !important;
        }
        .ml-md-3,
        .mx-md-3 {
            margin-left: 1rem !important;
        }
        .m-md-4 {
            margin: 1.5rem !important;
        }
        .mt-md-4,
        .my-md-4 {
            margin-top: 1.5rem !important;
        }
        .mr-md-4,
        .mx-md-4 {
            margin-right: 1.5rem !important;
        }
        .mb-md-4,
        .my-md-4 {
            margin-bottom: 1.5rem !important;
        }
        .ml-md-4,
        .mx-md-4 {
            margin-left: 1.5rem !important;
        }
        .m-md-5 {
            margin: 3rem !important;
        }
        .mt-md-5,
        .my-md-5 {
            margin-top: 3rem !important;
        }
        .mr-md-5,
        .mx-md-5 {
            margin-right: 3rem !important;
        }
        .mb-md-5,
        .my-md-5 {
            margin-bottom: 3rem !important;
        }
        .ml-md-5,
        .mx-md-5 {
            margin-left: 3rem !important;
        }
        .p-md-0 {
            padding: 0 !important;
        }
        .pt-md-0,
        .py-md-0 {
            padding-top: 0 !important;
        }
        .pr-md-0,
        .px-md-0 {
            padding-right: 0 !important;
        }
        .pb-md-0,
        .py-md-0 {
            padding-bottom: 0 !important;
        }
        .pl-md-0,
        .px-md-0 {
            padding-left: 0 !important;
        }
        .p-md-1 {
            padding: 0.25rem !important;
        }
        .pt-md-1,
        .py-md-1 {
            padding-top: 0.25rem !important;
        }
        .pr-md-1,
        .px-md-1 {
            padding-right: 0.25rem !important;
        }
        .pb-md-1,
        .py-md-1 {
            padding-bottom: 0.25rem !important;
        }
        .pl-md-1,
        .px-md-1 {
            padding-left: 0.25rem !important;
        }
        .p-md-2 {
            padding: 0.5rem !important;
        }
        .pt-md-2,
        .py-md-2 {
            padding-top: 0.5rem !important;
        }
        .pr-md-2,
        .px-md-2 {
            padding-right: 0.5rem !important;
        }
        .pb-md-2,
        .py-md-2 {
            padding-bottom: 0.5rem !important;
        }
        .pl-md-2,
        .px-md-2 {
            padding-left: 0.5rem !important;
        }
        .p-md-3 {
            padding: 1rem !important;
        }
        .pt-md-3,
        .py-md-3 {
            padding-top: 1rem !important;
        }
        .pr-md-3,
        .px-md-3 {
            padding-right: 1rem !important;
        }
        .pb-md-3,
        .py-md-3 {
            padding-bottom: 1rem !important;
        }
        .pl-md-3,
        .px-md-3 {
            padding-left: 1rem !important;
        }
        .p-md-4 {
            padding: 1.5rem !important;
        }
        .pt-md-4,
        .py-md-4 {
            padding-top: 1.5rem !important;
        }
        .pr-md-4,
        .px-md-4 {
            padding-right: 1.5rem !important;
        }
        .pb-md-4,
        .py-md-4 {
            padding-bottom: 1.5rem !important;
        }
        .pl-md-4,
        .px-md-4 {
            padding-left: 1.5rem !important;
        }
        .p-md-5 {
            padding: 3rem !important;
        }
        .pt-md-5,
        .py-md-5 {
            padding-top: 3rem !important;
        }
        .pr-md-5,
        .px-md-5 {
            padding-right: 3rem !important;
        }
        .pb-md-5,
        .py-md-5 {
            padding-bottom: 3rem !important;
        }
        .pl-md-5,
        .px-md-5 {
            padding-left: 3rem !important;
        }
        .m-md-n1 {
            margin: -0.25rem !important;
        }
        .mt-md-n1,
        .my-md-n1 {
            margin-top: -0.25rem !important;
        }
        .mr-md-n1,
        .mx-md-n1 {
            margin-right: -0.25rem !important;
        }
        .mb-md-n1,
        .my-md-n1 {
            margin-bottom: -0.25rem !important;
        }
        .ml-md-n1,
        .mx-md-n1 {
            margin-left: -0.25rem !important;
        }
        .m-md-n2 {
            margin: -0.5rem !important;
        }
        .mt-md-n2,
        .my-md-n2 {
            margin-top: -0.5rem !important;
        }
        .mr-md-n2,
        .mx-md-n2 {
            margin-right: -0.5rem !important;
        }
        .mb-md-n2,
        .my-md-n2 {
            margin-bottom: -0.5rem !important;
        }
        .ml-md-n2,
        .mx-md-n2 {
            margin-left: -0.5rem !important;
        }
        .m-md-n3 {
            margin: -1rem !important;
        }
        .mt-md-n3,
        .my-md-n3 {
            margin-top: -1rem !important;
        }
        .mr-md-n3,
        .mx-md-n3 {
            margin-right: -1rem !important;
        }
        .mb-md-n3,
        .my-md-n3 {
            margin-bottom: -1rem !important;
        }
        .ml-md-n3,
        .mx-md-n3 {
            margin-left: -1rem !important;
        }
        .m-md-n4 {
            margin: -1.5rem !important;
        }
        .mt-md-n4,
        .my-md-n4 {
            margin-top: -1.5rem !important;
        }
        .mr-md-n4,
        .mx-md-n4 {
            margin-right: -1.5rem !important;
        }
        .mb-md-n4,
        .my-md-n4 {
            margin-bottom: -1.5rem !important;
        }
        .ml-md-n4,
        .mx-md-n4 {
            margin-left: -1.5rem !important;
        }
        .m-md-n5 {
            margin: -3rem !important;
        }
        .mt-md-n5,
        .my-md-n5 {
            margin-top: -3rem !important;
        }
        .mr-md-n5,
        .mx-md-n5 {
            margin-right: -3rem !important;
        }
        .mb-md-n5,
        .my-md-n5 {
            margin-bottom: -3rem !important;
        }
        .ml-md-n5,
        .mx-md-n5 {
            margin-left: -3rem !important;
        }
        .m-md-auto {
            margin: auto !important;
        }
        .mt-md-auto,
        .my-md-auto {
            margin-top: auto !important;
        }
        .mr-md-auto,
        .mx-md-auto {
            margin-right: auto !important;
        }
        .mb-md-auto,
        .my-md-auto {
            margin-bottom: auto !important;
        }
        .ml-md-auto,
        .mx-md-auto {
            margin-left: auto !important;
        }
    }

    @media (min-width: 992px) {
        .m-lg-0 {
            margin: 0 !important;
        }
        .mt-lg-0,
        .my-lg-0 {
            margin-top: 0 !important;
        }
        .mr-lg-0,
        .mx-lg-0 {
            margin-right: 0 !important;
        }
        .mb-lg-0,
        .my-lg-0 {
            margin-bottom: 0 !important;
        }
        .ml-lg-0,
        .mx-lg-0 {
            margin-left: 0 !important;
        }
        .m-lg-1 {
            margin: 0.25rem !important;
        }
        .mt-lg-1,
        .my-lg-1 {
            margin-top: 0.25rem !important;
        }
        .mr-lg-1,
        .mx-lg-1 {
            margin-right: 0.25rem !important;
        }
        .mb-lg-1,
        .my-lg-1 {
            margin-bottom: 0.25rem !important;
        }
        .ml-lg-1,
        .mx-lg-1 {
            margin-left: 0.25rem !important;
        }
        .m-lg-2 {
            margin: 0.5rem !important;
        }
        .mt-lg-2,
        .my-lg-2 {
            margin-top: 0.5rem !important;
        }
        .mr-lg-2,
        .mx-lg-2 {
            margin-right: 0.5rem !important;
        }
        .mb-lg-2,
        .my-lg-2 {
            margin-bottom: 0.5rem !important;
        }
        .ml-lg-2,
        .mx-lg-2 {
            margin-left: 0.5rem !important;
        }
        .m-lg-3 {
            margin: 1rem !important;
        }
        .mt-lg-3,
        .my-lg-3 {
            margin-top: 1rem !important;
        }
        .mr-lg-3,
        .mx-lg-3 {
            margin-right: 1rem !important;
        }
        .mb-lg-3,
        .my-lg-3 {
            margin-bottom: 1rem !important;
        }
        .ml-lg-3,
        .mx-lg-3 {
            margin-left: 1rem !important;
        }
        .m-lg-4 {
            margin: 1.5rem !important;
        }
        .mt-lg-4,
        .my-lg-4 {
            margin-top: 1.5rem !important;
        }
        .mr-lg-4,
        .mx-lg-4 {
            margin-right: 1.5rem !important;
        }
        .mb-lg-4,
        .my-lg-4 {
            margin-bottom: 1.5rem !important;
        }
        .ml-lg-4,
        .mx-lg-4 {
            margin-left: 1.5rem !important;
        }
        .m-lg-5 {
            margin: 3rem !important;
        }
        .mt-lg-5,
        .my-lg-5 {
            margin-top: 3rem !important;
        }
        .mr-lg-5,
        .mx-lg-5 {
            margin-right: 3rem !important;
        }
        .mb-lg-5,
        .my-lg-5 {
            margin-bottom: 3rem !important;
        }
        .ml-lg-5,
        .mx-lg-5 {
            margin-left: 3rem !important;
        }
        .p-lg-0 {
            padding: 0 !important;
        }
        .pt-lg-0,
        .py-lg-0 {
            padding-top: 0 !important;
        }
        .pr-lg-0,
        .px-lg-0 {
            padding-right: 0 !important;
        }
        .pb-lg-0,
        .py-lg-0 {
            padding-bottom: 0 !important;
        }
        .pl-lg-0,
        .px-lg-0 {
            padding-left: 0 !important;
        }
        .p-lg-1 {
            padding: 0.25rem !important;
        }
        .pt-lg-1,
        .py-lg-1 {
            padding-top: 0.25rem !important;
        }
        .pr-lg-1,
        .px-lg-1 {
            padding-right: 0.25rem !important;
        }
        .pb-lg-1,
        .py-lg-1 {
            padding-bottom: 0.25rem !important;
        }
        .pl-lg-1,
        .px-lg-1 {
            padding-left: 0.25rem !important;
        }
        .p-lg-2 {
            padding: 0.5rem !important;
        }
        .pt-lg-2,
        .py-lg-2 {
            padding-top: 0.5rem !important;
        }
        .pr-lg-2,
        .px-lg-2 {
            padding-right: 0.5rem !important;
        }
        .pb-lg-2,
        .py-lg-2 {
            padding-bottom: 0.5rem !important;
        }
        .pl-lg-2,
        .px-lg-2 {
            padding-left: 0.5rem !important;
        }
        .p-lg-3 {
            padding: 1rem !important;
        }
        .pt-lg-3,
        .py-lg-3 {
            padding-top: 1rem !important;
        }
        .pr-lg-3,
        .px-lg-3 {
            padding-right: 1rem !important;
        }
        .pb-lg-3,
        .py-lg-3 {
            padding-bottom: 1rem !important;
        }
        .pl-lg-3,
        .px-lg-3 {
            padding-left: 1rem !important;
        }
        .p-lg-4 {
            padding: 1.5rem !important;
        }
        .pt-lg-4,
        .py-lg-4 {
            padding-top: 1.5rem !important;
        }
        .pr-lg-4,
        .px-lg-4 {
            padding-right: 1.5rem !important;
        }
        .pb-lg-4,
        .py-lg-4 {
            padding-bottom: 1.5rem !important;
        }
        .pl-lg-4,
        .px-lg-4 {
            padding-left: 1.5rem !important;
        }
        .p-lg-5 {
            padding: 3rem !important;
        }
        .pt-lg-5,
        .py-lg-5 {
            padding-top: 3rem !important;
        }
        .pr-lg-5,
        .px-lg-5 {
            padding-right: 3rem !important;
        }
        .pb-lg-5,
        .py-lg-5 {
            padding-bottom: 3rem !important;
        }
        .pl-lg-5,
        .px-lg-5 {
            padding-left: 3rem !important;
        }
        .m-lg-n1 {
            margin: -0.25rem !important;
        }
        .mt-lg-n1,
        .my-lg-n1 {
            margin-top: -0.25rem !important;
        }
        .mr-lg-n1,
        .mx-lg-n1 {
            margin-right: -0.25rem !important;
        }
        .mb-lg-n1,
        .my-lg-n1 {
            margin-bottom: -0.25rem !important;
        }
        .ml-lg-n1,
        .mx-lg-n1 {
            margin-left: -0.25rem !important;
        }
        .m-lg-n2 {
            margin: -0.5rem !important;
        }
        .mt-lg-n2,
        .my-lg-n2 {
            margin-top: -0.5rem !important;
        }
        .mr-lg-n2,
        .mx-lg-n2 {
            margin-right: -0.5rem !important;
        }
        .mb-lg-n2,
        .my-lg-n2 {
            margin-bottom: -0.5rem !important;
        }
        .ml-lg-n2,
        .mx-lg-n2 {
            margin-left: -0.5rem !important;
        }
        .m-lg-n3 {
            margin: -1rem !important;
        }
        .mt-lg-n3,
        .my-lg-n3 {
            margin-top: -1rem !important;
        }
        .mr-lg-n3,
        .mx-lg-n3 {
            margin-right: -1rem !important;
        }
        .mb-lg-n3,
        .my-lg-n3 {
            margin-bottom: -1rem !important;
        }
        .ml-lg-n3,
        .mx-lg-n3 {
            margin-left: -1rem !important;
        }
        .m-lg-n4 {
            margin: -1.5rem !important;
        }
        .mt-lg-n4,
        .my-lg-n4 {
            margin-top: -1.5rem !important;
        }
        .mr-lg-n4,
        .mx-lg-n4 {
            margin-right: -1.5rem !important;
        }
        .mb-lg-n4,
        .my-lg-n4 {
            margin-bottom: -1.5rem !important;
        }
        .ml-lg-n4,
        .mx-lg-n4 {
            margin-left: -1.5rem !important;
        }
        .m-lg-n5 {
            margin: -3rem !important;
        }
        .mt-lg-n5,
        .my-lg-n5 {
            margin-top: -3rem !important;
        }
        .mr-lg-n5,
        .mx-lg-n5 {
            margin-right: -3rem !important;
        }
        .mb-lg-n5,
        .my-lg-n5 {
            margin-bottom: -3rem !important;
        }
        .ml-lg-n5,
        .mx-lg-n5 {
            margin-left: -3rem !important;
        }
        .m-lg-auto {
            margin: auto !important;
        }
        .mt-lg-auto,
        .my-lg-auto {
            margin-top: auto !important;
        }
        .mr-lg-auto,
        .mx-lg-auto {
            margin-right: auto !important;
        }
        .mb-lg-auto,
        .my-lg-auto {
            margin-bottom: auto !important;
        }
        .ml-lg-auto,
        .mx-lg-auto {
            margin-left: auto !important;
        }
    }

    @media (min-width: 1200px) {
        .m-xl-0 {
            margin: 0 !important;
        }
        .mt-xl-0,
        .my-xl-0 {
            margin-top: 0 !important;
        }
        .mr-xl-0,
        .mx-xl-0 {
            margin-right: 0 !important;
        }
        .mb-xl-0,
        .my-xl-0 {
            margin-bottom: 0 !important;
        }
        .ml-xl-0,
        .mx-xl-0 {
            margin-left: 0 !important;
        }
        .m-xl-1 {
            margin: 0.25rem !important;
        }
        .mt-xl-1,
        .my-xl-1 {
            margin-top: 0.25rem !important;
        }
        .mr-xl-1,
        .mx-xl-1 {
            margin-right: 0.25rem !important;
        }
        .mb-xl-1,
        .my-xl-1 {
            margin-bottom: 0.25rem !important;
        }
        .ml-xl-1,
        .mx-xl-1 {
            margin-left: 0.25rem !important;
        }
        .m-xl-2 {
            margin: 0.5rem !important;
        }
        .mt-xl-2,
        .my-xl-2 {
            margin-top: 0.5rem !important;
        }
        .mr-xl-2,
        .mx-xl-2 {
            margin-right: 0.5rem !important;
        }
        .mb-xl-2,
        .my-xl-2 {
            margin-bottom: 0.5rem !important;
        }
        .ml-xl-2,
        .mx-xl-2 {
            margin-left: 0.5rem !important;
        }
        .m-xl-3 {
            margin: 1rem !important;
        }
        .mt-xl-3,
        .my-xl-3 {
            margin-top: 1rem !important;
        }
        .mr-xl-3,
        .mx-xl-3 {
            margin-right: 1rem !important;
        }
        .mb-xl-3,
        .my-xl-3 {
            margin-bottom: 1rem !important;
        }
        .ml-xl-3,
        .mx-xl-3 {
            margin-left: 1rem !important;
        }
        .m-xl-4 {
            margin: 1.5rem !important;
        }
        .mt-xl-4,
        .my-xl-4 {
            margin-top: 1.5rem !important;
        }
        .mr-xl-4,
        .mx-xl-4 {
            margin-right: 1.5rem !important;
        }
        .mb-xl-4,
        .my-xl-4 {
            margin-bottom: 1.5rem !important;
        }
        .ml-xl-4,
        .mx-xl-4 {
            margin-left: 1.5rem !important;
        }
        .m-xl-5 {
            margin: 3rem !important;
        }
        .mt-xl-5,
        .my-xl-5 {
            margin-top: 3rem !important;
        }
        .mr-xl-5,
        .mx-xl-5 {
            margin-right: 3rem !important;
        }
        .mb-xl-5,
        .my-xl-5 {
            margin-bottom: 3rem !important;
        }
        .ml-xl-5,
        .mx-xl-5 {
            margin-left: 3rem !important;
        }
        .p-xl-0 {
            padding: 0 !important;
        }
        .pt-xl-0,
        .py-xl-0 {
            padding-top: 0 !important;
        }
        .pr-xl-0,
        .px-xl-0 {
            padding-right: 0 !important;
        }
        .pb-xl-0,
        .py-xl-0 {
            padding-bottom: 0 !important;
        }
        .pl-xl-0,
        .px-xl-0 {
            padding-left: 0 !important;
        }
        .p-xl-1 {
            padding: 0.25rem !important;
        }
        .pt-xl-1,
        .py-xl-1 {
            padding-top: 0.25rem !important;
        }
        .pr-xl-1,
        .px-xl-1 {
            padding-right: 0.25rem !important;
        }
        .pb-xl-1,
        .py-xl-1 {
            padding-bottom: 0.25rem !important;
        }
        .pl-xl-1,
        .px-xl-1 {
            padding-left: 0.25rem !important;
        }
        .p-xl-2 {
            padding: 0.5rem !important;
        }
        .pt-xl-2,
        .py-xl-2 {
            padding-top: 0.5rem !important;
        }
        .pr-xl-2,
        .px-xl-2 {
            padding-right: 0.5rem !important;
        }
        .pb-xl-2,
        .py-xl-2 {
            padding-bottom: 0.5rem !important;
        }
        .pl-xl-2,
        .px-xl-2 {
            padding-left: 0.5rem !important;
        }
        .p-xl-3 {
            padding: 1rem !important;
        }
        .pt-xl-3,
        .py-xl-3 {
            padding-top: 1rem !important;
        }
        .pr-xl-3,
        .px-xl-3 {
            padding-right: 1rem !important;
        }
        .pb-xl-3,
        .py-xl-3 {
            padding-bottom: 1rem !important;
        }
        .pl-xl-3,
        .px-xl-3 {
            padding-left: 1rem !important;
        }
        .p-xl-4 {
            padding: 1.5rem !important;
        }
        .pt-xl-4,
        .py-xl-4 {
            padding-top: 1.5rem !important;
        }
        .pr-xl-4,
        .px-xl-4 {
            padding-right: 1.5rem !important;
        }
        .pb-xl-4,
        .py-xl-4 {
            padding-bottom: 1.5rem !important;
        }
        .pl-xl-4,
        .px-xl-4 {
            padding-left: 1.5rem !important;
        }
        .p-xl-5 {
            padding: 3rem !important;
        }
        .pt-xl-5,
        .py-xl-5 {
            padding-top: 3rem !important;
        }
        .pr-xl-5,
        .px-xl-5 {
            padding-right: 3rem !important;
        }
        .pb-xl-5,
        .py-xl-5 {
            padding-bottom: 3rem !important;
        }
        .pl-xl-5,
        .px-xl-5 {
            padding-left: 3rem !important;
        }
        .m-xl-n1 {
            margin: -0.25rem !important;
        }
        .mt-xl-n1,
        .my-xl-n1 {
            margin-top: -0.25rem !important;
        }
        .mr-xl-n1,
        .mx-xl-n1 {
            margin-right: -0.25rem !important;
        }
        .mb-xl-n1,
        .my-xl-n1 {
            margin-bottom: -0.25rem !important;
        }
        .ml-xl-n1,
        .mx-xl-n1 {
            margin-left: -0.25rem !important;
        }
        .m-xl-n2 {
            margin: -0.5rem !important;
        }
        .mt-xl-n2,
        .my-xl-n2 {
            margin-top: -0.5rem !important;
        }
        .mr-xl-n2,
        .mx-xl-n2 {
            margin-right: -0.5rem !important;
        }
        .mb-xl-n2,
        .my-xl-n2 {
            margin-bottom: -0.5rem !important;
        }
        .ml-xl-n2,
        .mx-xl-n2 {
            margin-left: -0.5rem !important;
        }
        .m-xl-n3 {
            margin: -1rem !important;
        }
        .mt-xl-n3,
        .my-xl-n3 {
            margin-top: -1rem !important;
        }
        .mr-xl-n3,
        .mx-xl-n3 {
            margin-right: -1rem !important;
        }
        .mb-xl-n3,
        .my-xl-n3 {
            margin-bottom: -1rem !important;
        }
        .ml-xl-n3,
        .mx-xl-n3 {
            margin-left: -1rem !important;
        }
        .m-xl-n4 {
            margin: -1.5rem !important;
        }
        .mt-xl-n4,
        .my-xl-n4 {
            margin-top: -1.5rem !important;
        }
        .mr-xl-n4,
        .mx-xl-n4 {
            margin-right: -1.5rem !important;
        }
        .mb-xl-n4,
        .my-xl-n4 {
            margin-bottom: -1.5rem !important;
        }
        .ml-xl-n4,
        .mx-xl-n4 {
            margin-left: -1.5rem !important;
        }
        .m-xl-n5 {
            margin: -3rem !important;
        }
        .mt-xl-n5,
        .my-xl-n5 {
            margin-top: -3rem !important;
        }
        .mr-xl-n5,
        .mx-xl-n5 {
            margin-right: -3rem !important;
        }
        .mb-xl-n5,
        .my-xl-n5 {
            margin-bottom: -3rem !important;
        }
        .ml-xl-n5,
        .mx-xl-n5 {
            margin-left: -3rem !important;
        }
        .m-xl-auto {
            margin: auto !important;
        }
        .mt-xl-auto,
        .my-xl-auto {
            margin-top: auto !important;
        }
        .mr-xl-auto,
        .mx-xl-auto {
            margin-right: auto !important;
        }
        .mb-xl-auto,
        .my-xl-auto {
            margin-bottom: auto !important;
        }
        .ml-xl-auto,
        .mx-xl-auto {
            margin-left: auto !important;
        }
    }

    .text-monospace {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
    }

    .text-justify {
        text-align: justify !important;
    }

    .text-wrap {
        white-space: normal !important;
    }

    .text-nowrap {
        white-space: nowrap !important;
    }

    .text-truncate {
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .text-left {
        text-align: left !important;
    }

    .text-right {
        text-align: right !important;
    }

    .text-center {
        text-align: center !important;
    }

    @media (min-width: 576px) {
        .text-sm-left {
            text-align: left !important;
        }
        .text-sm-right {
            text-align: right !important;
        }
        .text-sm-center {
            text-align: center !important;
        }
    }

    @media (min-width: 768px) {
        .text-md-left {
            text-align: left !important;
        }
        .text-md-right {
            text-align: right !important;
        }
        .text-md-center {
            text-align: center !important;
        }
    }

    @media (min-width: 992px) {
        .text-lg-left {
            text-align: left !important;
        }
        .text-lg-right {
            text-align: right !important;
        }
        .text-lg-center {
            text-align: center !important;
        }
    }

    @media (min-width: 1200px) {
        .text-xl-left {
            text-align: left !important;
        }
        .text-xl-right {
            text-align: right !important;
        }
        .text-xl-center {
            text-align: center !important;
        }
    }

    .text-lowercase {
        text-transform: lowercase !important;
    }

    .text-uppercase {
        text-transform: uppercase !important;
    }

    .text-capitalize {
        text-transform: capitalize !important;
    }

    .font-weight-light {
        font-weight: 300 !important;
    }

    .font-weight-lighter {
        font-weight: lighter !important;
    }

    .font-weight-normal {
        font-weight: 400 !important;
    }

    .font-weight-bold {
        font-weight: 700 !important;
    }

    .font-weight-bolder {
        font-weight: bolder !important;
    }

    .font-italic {
        font-style: italic !important;
    }

    .text-white {
        color: #FFF !important;
    }

    .text-primary {
        color: #009688 !important;
    }

    a.text-primary:hover, a.text-primary:focus {
        color: #004a43 !important;
    }

    .text-secondary {
        color: #6c757d !important;
    }

    a.text-secondary:hover, a.text-secondary:focus {
        color: #494f54 !important;
    }

    .text-success {
        color: #28a745 !important;
    }

    a.text-success:hover, a.text-success:focus {
        color: #19692c !important;
    }

    .text-info {
        color: #17a2b8 !important;
    }

    a.text-info:hover, a.text-info:focus {
        color: #0f6674 !important;
    }

    .text-warning {
        color: #ffc107 !important;
    }

    a.text-warning:hover, a.text-warning:focus {
        color: #ba8b00 !important;
    }

    .text-danger {
        color: #dc3545 !important;
    }

    a.text-danger:hover, a.text-danger:focus {
        color: #a71d2a !important;
    }

    .text-light {
        color: #f8f9fa !important;
    }

    a.text-light:hover, a.text-light:focus {
        color: #cbd3da !important;
    }

    .text-dark {
        color: #343a40 !important;
    }

    a.text-dark:hover, a.text-dark:focus {
        color: #121416 !important;
    }

    .text-body {
        color: #212529 !important;
    }

    .text-muted, .app-notification__meta {
        color: #6c757d !important;
    }

    .text-black-50 {
        color: rgba(0, 0, 0, 0.5) !important;
    }

    .text-white-50 {
        color: rgba(255, 255, 255, 0.5) !important;
    }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0;
    }

    .text-decoration-none {
        text-decoration: none !important;
    }

    .text-break {
        word-break: break-word !important;
        overflow-wrap: break-word !important;
    }

    .text-reset {
        color: inherit !important;
    }

    .visible {
        visibility: visible !important;
    }

    .invisible {
        visibility: hidden !important;
    }

    @media  print {
        *,
        *::before,
        *::after {
            text-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }
        a:not(.btn) {
            text-decoration: underline;
        }
        abbr[title]::after {
            content: " (" attr(title) ")";
        }
        pre {
            white-space: pre-wrap !important;
        }
        pre,
        blockquote {
            border: 1px solid #adb5bd;
            page-break-inside: avoid;
        }
        thead {
            display: table-header-group;
        }
        tr,
        img {
            page-break-inside: avoid;
        }
        p,
        h2,
        h3 {
            orphans: 3;
            widows: 3;
        }
        h2,
        h3 {
            page-break-after: avoid;
        }
        @page  {
            size: a3;
        }
        body {
            min-width: 992px !important;
        }
        .container {
            min-width: 992px !important;
        }
        .navbar {
            display: none;
        }
        .badge {
            border: 1px solid #000;
        }
        .table {
            border-collapse: collapse !important;
        }
        .table td,
        .table th {
            background-color: #FFF !important;
        }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6 !important;
        }
        .table-dark {
            color: inherit;
        }
        .table-dark th,
        .table-dark td,
        .table-dark thead th,
        .table-dark tbody + tbody {
            border-color: #dee2e6;
        }
        .table .thead-dark th {
            color: inherit;
            border-color: #dee2e6;
        }
    }

    table.dataTable {
        clear: both;
        margin-top: 6px !important;
        margin-bottom: 6px !important;
        max-width: none !important;
    }

    table.dataTable td,
    table.dataTable th {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
    }

    table.dataTable td.dataTables_empty,
    table.dataTable th.dataTables_empty {
        text-align: center;
    }

    table.dataTable.nowrap th,
    table.dataTable.nowrap td {
        white-space: nowrap;
    }

    .tile div.dataTables_wrapper {
        padding: 0;
    }

    div.dataTables_wrapper div.dataTables_length label {
        font-weight: normal;
        text-align: left;
        white-space: nowrap;
    }

    div.dataTables_wrapper div.dataTables_length select {
        width: 75px;
        display: inline-block;
    }

    div.dataTables_wrapper div.dataTables_filter {
        text-align: right;
    }

    div.dataTables_wrapper div.dataTables_filter label {
        font-weight: normal;
        white-space: nowrap;
        text-align: left;
    }

    div.dataTables_wrapper div.dataTables_filter input {
        margin-left: 0.5em;
        display: inline-block;
        width: auto;
    }

    div.dataTables_wrapper div.dataTables_info {
        padding-top: 0.85em;
        white-space: nowrap;
    }

    div.dataTables_wrapper div.dataTables_paginate {
        margin: 0;
        white-space: nowrap;
        text-align: right;
    }

    div.dataTables_wrapper div.dataTables_paginate ul.pagination {
        margin: 2px 0;
        white-space: nowrap;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
    }

    div.dataTables_wrapper div.dataTables_processing {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 200px;
        margin-left: -100px;
        margin-top: -26px;
        text-align: center;
        padding: 1em 0;
    }

    table.dataTable thead > tr > th.sorting_asc, table.dataTable thead > tr > th.sorting_desc, table.dataTable thead > tr > th.sorting,
    table.dataTable thead > tr > td.sorting_asc,
    table.dataTable thead > tr > td.sorting_desc,
    table.dataTable thead > tr > td.sorting {
        padding-right: 30px;
    }

    table.dataTable thead > tr > th:active,
    table.dataTable thead > tr > td:active {
        outline: none;
    }

    table.dataTable thead .sorting,
    table.dataTable thead .sorting_asc,
    table.dataTable thead .sorting_desc,
    table.dataTable thead .sorting_asc_disabled,
    table.dataTable thead .sorting_desc_disabled {
        cursor: pointer;
        position: relative;
    }

    table.dataTable thead .sorting:before, table.dataTable thead .sorting:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before,
    table.dataTable thead .sorting_desc_disabled:after {
        position: absolute;
        bottom: 0.9em;
        display: block;
        opacity: 0.3;
    }

    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc_disabled:before {
        right: 1em;
        content: "\2191";
    }

    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:after {
        right: 0.5em;
        content: "\2193";
    }

    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_desc:after {
        opacity: 1;
    }

    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc_disabled:after {
        opacity: 0;
    }

    div.dataTables_scrollHead table.dataTable {
        margin-bottom: 0 !important;
    }

    div.dataTables_scrollBody table {
        border-top: none;
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }

    div.dataTables_scrollBody table thead .sorting:after,
    div.dataTables_scrollBody table thead .sorting_asc:after,
    div.dataTables_scrollBody table thead .sorting_desc:after {
        display: none;
    }

    div.dataTables_scrollBody table tbody tr:first-child th,
    div.dataTables_scrollBody table tbody tr:first-child td {
        border-top: none;
    }

    div.dataTables_scrollFoot > .dataTables_scrollFootInner {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
    }

    div.dataTables_scrollFoot > .dataTables_scrollFootInner > table {
        margin-top: 0 !important;
        border-top: none;
    }

    @media  screen and (max-width: 767px) {
        div.dataTables_wrapper div.dataTables_length,
        div.dataTables_wrapper div.dataTables_filter,
        div.dataTables_wrapper div.dataTables_info,
        div.dataTables_wrapper div.dataTables_paginate {
            text-align: center;
        }
    }

    table.dataTable.table-sm > thead > tr > th {
        padding-right: 20px;
    }

    table.dataTable.table-sm .sorting:before,
    table.dataTable.table-sm .sorting_asc:before,
    table.dataTable.table-sm .sorting_desc:before {
        top: 5px;
        right: 0.85em;
    }

    table.dataTable.table-sm .sorting:after,
    table.dataTable.table-sm .sorting_asc:after,
    table.dataTable.table-sm .sorting_desc:after {
        top: 5px;
    }

    table.table-bordered.dataTable th,
    table.table-bordered.dataTable td {
        border-left-width: 0;
    }

    table.table-bordered.dataTable th:last-child, table.table-bordered.dataTable th:last-child,
    table.table-bordered.dataTable td:last-child,
    table.table-bordered.dataTable td:last-child {
        border-right-width: 0;
    }

    table.table-bordered.dataTable tbody th,
    table.table-bordered.dataTable tbody td {
        border-bottom-width: 0;
    }

    div.dataTables_scrollHead table.table-bordered {
        border-bottom-width: 0;
    }

    div.table-responsive > div.dataTables_wrapper > div.row {
        margin: 0;
    }

    div.table-responsive > div.dataTables_wrapper > div.row > div[class^="col-"]:first-child {
        padding-left: 0;
    }

    div.table-responsive > div.dataTables_wrapper > div.row > div[class^="col-"]:last-child {
        padding-right: 0;
    }

    /*!
 * Datepicker for Bootstrap v1.5.0 (https://github.com/eternicode/bootstrap-datepicker)
 *
 * Copyright 2012 Stefan Petre
 * Improvements by Andrew Rowls
 * Licensed under the Apache License v2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 */
    .datepicker {
        border-radius: 4px;
        direction: ltr;
    }

    .datepicker-inline {
        width: 220px;
    }

    .datepicker.datepicker-rtl {
        direction: rtl;
    }

    .datepicker.datepicker-rtl table tr td span {
        float: right;
    }

    .datepicker-dropdown {
        top: 0;
        left: 0;
        padding: 4px;
    }

    .datepicker-dropdown:before {
        content: '';
        display: inline-block;
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        border-bottom: 7px solid rgba(0, 0, 0, 0.15);
        border-top: 0;
        border-bottom-color: rgba(0, 0, 0, 0.2);
        position: absolute;
    }

    .datepicker-dropdown:after {
        content: '';
        display: inline-block;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-bottom: 6px solid #ffffff;
        border-top: 0;
        position: absolute;
    }

    .datepicker-dropdown.datepicker-orient-left:before {
        left: 6px;
    }

    .datepicker-dropdown.datepicker-orient-left:after {
        left: 7px;
    }

    .datepicker-dropdown.datepicker-orient-right:before {
        right: 6px;
    }

    .datepicker-dropdown.datepicker-orient-right:after {
        right: 7px;
    }

    .datepicker-dropdown.datepicker-orient-bottom:before {
        top: -7px;
    }

    .datepicker-dropdown.datepicker-orient-bottom:after {
        top: -6px;
    }

    .datepicker-dropdown.datepicker-orient-top:before {
        bottom: -7px;
        border-bottom: 0;
        border-top: 7px solid rgba(0, 0, 0, 0.15);
    }

    .datepicker-dropdown.datepicker-orient-top:after {
        bottom: -6px;
        border-bottom: 0;
        border-top: 6px solid #ffffff;
    }

    .datepicker table {
        margin: 0;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .datepicker table tr td,
    .datepicker table tr th {
        text-align: center;
        width: 30px;
        height: 30px;
        border-radius: 4px;
        border: none;
    }

    .table-striped .datepicker table tr td,
    .table-striped .datepicker table tr th {
        background-color: transparent;
    }

    .datepicker-days tbody tr td {
        border-radius: 50%;
        font-weight: 500;
    }

    .datepicker table tr td.old,
    .datepicker table tr td.new {
        color: #999999;
    }

    .datepicker table tr td.day:hover,
    .datepicker table tr td.focused {
        background: #eeeeee;
        cursor: pointer;
    }

    .datepicker table tr td.disabled,
    .datepicker table tr td.disabled:hover {
        background: none;
        color: #999999;
        cursor: default;
    }

    .datepicker table tr td.highlighted {
        color: #000000;
        background-color: #d9edf7;
        border-color: #85c5e5;
        border-radius: 0;
    }

    .datepicker table tr td.highlighted:focus,
    .datepicker table tr td.highlighted.focus {
        color: #000000;
        background-color: #afd9ee;
        border-color: #298fc2;
    }

    .datepicker table tr td.highlighted:hover {
        color: #000000;
        background-color: #afd9ee;
        border-color: #52addb;
    }

    .datepicker table tr td.highlighted:active,
    .datepicker table tr td.highlighted.active,
    .open > .dropdown-toggle.datepicker table tr td.highlighted {
        color: #000000;
        background-color: #afd9ee;
        border-color: #52addb;
    }

    .datepicker table tr td.highlighted:active:hover,
    .datepicker table tr td.highlighted.active:hover,
    .open > .dropdown-toggle.datepicker table tr td.highlighted:hover,
    .datepicker table tr td.highlighted:active:focus,
    .datepicker table tr td.highlighted.active:focus,
    .open > .dropdown-toggle.datepicker table tr td.highlighted:focus,
    .datepicker table tr td.highlighted:active.focus,
    .datepicker table tr td.highlighted.active.focus,
    .open > .dropdown-toggle.datepicker table tr td.highlighted.focus {
        color: #000000;
        background-color: #91cbe8;
        border-color: #298fc2;
    }

    .datepicker table tr td.highlighted:active,
    .datepicker table tr td.highlighted.active,
    .open > .dropdown-toggle.datepicker table tr td.highlighted {
        background-image: none;
    }

    .datepicker table tr td.highlighted.disabled:hover,
    .datepicker table tr td.highlighted[disabled]:hover,
    fieldset[disabled] .datepicker table tr td.highlighted:hover,
    .datepicker table tr td.highlighted.disabled:focus,
    .datepicker table tr td.highlighted[disabled]:focus,
    fieldset[disabled] .datepicker table tr td.highlighted:focus,
    .datepicker table tr td.highlighted.disabled.focus,
    .datepicker table tr td.highlighted[disabled].focus,
    fieldset[disabled] .datepicker table tr td.highlighted.focus {
        background-color: #d9edf7;
        border-color: #85c5e5;
    }

    .datepicker table tr td.highlighted.focused {
        background: #afd9ee;
    }

    .datepicker table tr td.highlighted.disabled,
    .datepicker table tr td.highlighted.disabled:active {
        background: #d9edf7;
        color: #999999;
    }

    .datepicker table tr td.today {
        color: #000000;
        background-color: #ffdb99;
        border-color: #ffb733;
    }

    .datepicker table tr td.today:focus,
    .datepicker table tr td.today.focus {
        color: #000000;
        background-color: #ffc966;
        border-color: #b37400;
    }

    .datepicker table tr td.today:hover {
        color: #000000;
        background-color: #ffc966;
        border-color: #f59e00;
    }

    .datepicker table tr td.today:active,
    .datepicker table tr td.today.active,
    .open > .dropdown-toggle.datepicker table tr td.today {
        color: #000000;
        background-color: #ffc966;
        border-color: #f59e00;
    }

    .datepicker table tr td.today:active:hover,
    .datepicker table tr td.today.active:hover,
    .open > .dropdown-toggle.datepicker table tr td.today:hover,
    .datepicker table tr td.today:active:focus,
    .datepicker table tr td.today.active:focus,
    .open > .dropdown-toggle.datepicker table tr td.today:focus,
    .datepicker table tr td.today:active.focus,
    .datepicker table tr td.today.active.focus,
    .open > .dropdown-toggle.datepicker table tr td.today.focus {
        color: #000000;
        background-color: #ffbc42;
        border-color: #b37400;
    }

    .datepicker table tr td.today:active,
    .datepicker table tr td.today.active,
    .open > .dropdown-toggle.datepicker table tr td.today {
        background-image: none;
    }

    .datepicker table tr td.today.disabled:hover,
    .datepicker table tr td.today[disabled]:hover,
    fieldset[disabled] .datepicker table tr td.today:hover,
    .datepicker table tr td.today.disabled:focus,
    .datepicker table tr td.today[disabled]:focus,
    fieldset[disabled] .datepicker table tr td.today:focus,
    .datepicker table tr td.today.disabled.focus,
    .datepicker table tr td.today[disabled].focus,
    fieldset[disabled] .datepicker table tr td.today.focus {
        background-color: #ffdb99;
        border-color: #ffb733;
    }

    .datepicker table tr td.today.focused {
        background: #ffc966;
    }

    .datepicker table tr td.today.disabled,
    .datepicker table tr td.today.disabled:active {
        background: #ffdb99;
        color: #999999;
    }

    .datepicker table tr td.range {
        color: #000000;
        background-color: #eeeeee;
        border-color: #bbbbbb;
        border-radius: 0;
    }

    .datepicker table tr td.range:focus,
    .datepicker table tr td.range.focus {
        color: #000000;
        background-color: #d5d5d5;
        border-color: #7c7c7c;
    }

    .datepicker table tr td.range:hover {
        color: #000000;
        background-color: #d5d5d5;
        border-color: #9d9d9d;
    }

    .datepicker table tr td.range:active,
    .datepicker table tr td.range.active,
    .open > .dropdown-toggle.datepicker table tr td.range {
        color: #000000;
        background-color: #d5d5d5;
        border-color: #9d9d9d;
    }

    .datepicker table tr td.range:active:hover,
    .datepicker table tr td.range.active:hover,
    .open > .dropdown-toggle.datepicker table tr td.range:hover,
    .datepicker table tr td.range:active:focus,
    .datepicker table tr td.range.active:focus,
    .open > .dropdown-toggle.datepicker table tr td.range:focus,
    .datepicker table tr td.range:active.focus,
    .datepicker table tr td.range.active.focus,
    .open > .dropdown-toggle.datepicker table tr td.range.focus {
        color: #000000;
        background-color: #c3c3c3;
        border-color: #7c7c7c;
    }

    .datepicker table tr td.range:active,
    .datepicker table tr td.range.active,
    .open > .dropdown-toggle.datepicker table tr td.range {
        background-image: none;
    }

    .datepicker table tr td.range.disabled:hover,
    .datepicker table tr td.range[disabled]:hover,
    fieldset[disabled] .datepicker table tr td.range:hover,
    .datepicker table tr td.range.disabled:focus,
    .datepicker table tr td.range[disabled]:focus,
    fieldset[disabled] .datepicker table tr td.range:focus,
    .datepicker table tr td.range.disabled.focus,
    .datepicker table tr td.range[disabled].focus,
    fieldset[disabled] .datepicker table tr td.range.focus {
        background-color: #eeeeee;
        border-color: #bbbbbb;
    }

    .datepicker table tr td.range.focused {
        background: #d5d5d5;
    }

    .datepicker table tr td.range.disabled,
    .datepicker table tr td.range.disabled:active {
        background: #eeeeee;
        color: #999999;
    }

    .datepicker table tr td.range.highlighted {
        color: #000000;
        background-color: #e4eef3;
        border-color: #9dc1d3;
    }

    .datepicker table tr td.range.highlighted:focus,
    .datepicker table tr td.range.highlighted.focus {
        color: #000000;
        background-color: #c1d7e3;
        border-color: #4b88a6;
    }

    .datepicker table tr td.range.highlighted:hover {
        color: #000000;
        background-color: #c1d7e3;
        border-color: #73a6c0;
    }

    .datepicker table tr td.range.highlighted:active,
    .datepicker table tr td.range.highlighted.active,
    .open > .dropdown-toggle.datepicker table tr td.range.highlighted {
        color: #000000;
        background-color: #c1d7e3;
        border-color: #73a6c0;
    }

    .datepicker table tr td.range.highlighted:active:hover,
    .datepicker table tr td.range.highlighted.active:hover,
    .open > .dropdown-toggle.datepicker table tr td.range.highlighted:hover,
    .datepicker table tr td.range.highlighted:active:focus,
    .datepicker table tr td.range.highlighted.active:focus,
    .open > .dropdown-toggle.datepicker table tr td.range.highlighted:focus,
    .datepicker table tr td.range.highlighted:active.focus,
    .datepicker table tr td.range.highlighted.active.focus,
    .open > .dropdown-toggle.datepicker table tr td.range.highlighted.focus {
        color: #000000;
        background-color: #a8c8d8;
        border-color: #4b88a6;
    }

    .datepicker table tr td.range.highlighted:active,
    .datepicker table tr td.range.highlighted.active,
    .open > .dropdown-toggle.datepicker table tr td.range.highlighted {
        background-image: none;
    }

    .datepicker table tr td.range.highlighted.disabled:hover,
    .datepicker table tr td.range.highlighted[disabled]:hover,
    fieldset[disabled] .datepicker table tr td.range.highlighted:hover,
    .datepicker table tr td.range.highlighted.disabled:focus,
    .datepicker table tr td.range.highlighted[disabled]:focus,
    fieldset[disabled] .datepicker table tr td.range.highlighted:focus,
    .datepicker table tr td.range.highlighted.disabled.focus,
    .datepicker table tr td.range.highlighted[disabled].focus,
    fieldset[disabled] .datepicker table tr td.range.highlighted.focus {
        background-color: #e4eef3;
        border-color: #9dc1d3;
    }

    .datepicker table tr td.range.highlighted.focused {
        background: #c1d7e3;
    }

    .datepicker table tr td.range.highlighted.disabled,
    .datepicker table tr td.range.highlighted.disabled:active {
        background: #e4eef3;
        color: #999999;
    }

    .datepicker table tr td.range.today {
        color: #000000;
        background-color: #f7ca77;
        border-color: #f1a417;
    }

    .datepicker table tr td.range.today:focus,
    .datepicker table tr td.range.today.focus {
        color: #000000;
        background-color: #f4b747;
        border-color: #815608;
    }

    .datepicker table tr td.range.today:hover {
        color: #000000;
        background-color: #f4b747;
        border-color: #bf800c;
    }

    .datepicker table tr td.range.today:active,
    .datepicker table tr td.range.today.active,
    .open > .dropdown-toggle.datepicker table tr td.range.today {
        color: #000000;
        background-color: #f4b747;
        border-color: #bf800c;
    }

    .datepicker table tr td.range.today:active:hover,
    .datepicker table tr td.range.today.active:hover,
    .open > .dropdown-toggle.datepicker table tr td.range.today:hover,
    .datepicker table tr td.range.today:active:focus,
    .datepicker table tr td.range.today.active:focus,
    .open > .dropdown-toggle.datepicker table tr td.range.today:focus,
    .datepicker table tr td.range.today:active.focus,
    .datepicker table tr td.range.today.active.focus,
    .open > .dropdown-toggle.datepicker table tr td.range.today.focus {
        color: #000000;
        background-color: #f2aa25;
        border-color: #815608;
    }

    .datepicker table tr td.range.today:active,
    .datepicker table tr td.range.today.active,
    .open > .dropdown-toggle.datepicker table tr td.range.today {
        background-image: none;
    }

    .datepicker table tr td.range.today.disabled:hover,
    .datepicker table tr td.range.today[disabled]:hover,
    fieldset[disabled] .datepicker table tr td.range.today:hover,
    .datepicker table tr td.range.today.disabled:focus,
    .datepicker table tr td.range.today[disabled]:focus,
    fieldset[disabled] .datepicker table tr td.range.today:focus,
    .datepicker table tr td.range.today.disabled.focus,
    .datepicker table tr td.range.today[disabled].focus,
    fieldset[disabled] .datepicker table tr td.range.today.focus {
        background-color: #f7ca77;
        border-color: #f1a417;
    }

    .datepicker table tr td.range.today.disabled,
    .datepicker table tr td.range.today.disabled:active {
        background: #f7ca77;
        color: #999999;
    }

    .datepicker table tr td.selected,
    .datepicker table tr td.selected.highlighted {
        color: #ffffff;
        background-color: #999999;
        border-color: #555555;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    }

    .datepicker table tr td.selected:focus,
    .datepicker table tr td.selected.highlighted:focus,
    .datepicker table tr td.selected.focus,
    .datepicker table tr td.selected.highlighted.focus {
        color: #ffffff;
        background-color: #808080;
        border-color: #161616;
    }

    .datepicker table tr td.selected:hover,
    .datepicker table tr td.selected.highlighted:hover {
        color: #ffffff;
        background-color: #808080;
        border-color: #373737;
    }

    .datepicker table tr td.selected:active,
    .datepicker table tr td.selected.highlighted:active,
    .datepicker table tr td.selected.active,
    .datepicker table tr td.selected.highlighted.active,
    .open > .dropdown-toggle.datepicker table tr td.selected,
    .open > .dropdown-toggle.datepicker table tr td.selected.highlighted {
        color: #ffffff;
        background-color: #808080;
        border-color: #373737;
    }

    .datepicker table tr td.selected:active:hover,
    .datepicker table tr td.selected.highlighted:active:hover,
    .datepicker table tr td.selected.active:hover,
    .datepicker table tr td.selected.highlighted.active:hover,
    .open > .dropdown-toggle.datepicker table tr td.selected:hover,
    .open > .dropdown-toggle.datepicker table tr td.selected.highlighted:hover,
    .datepicker table tr td.selected:active:focus,
    .datepicker table tr td.selected.highlighted:active:focus,
    .datepicker table tr td.selected.active:focus,
    .datepicker table tr td.selected.highlighted.active:focus,
    .open > .dropdown-toggle.datepicker table tr td.selected:focus,
    .open > .dropdown-toggle.datepicker table tr td.selected.highlighted:focus,
    .datepicker table tr td.selected:active.focus,
    .datepicker table tr td.selected.highlighted:active.focus,
    .datepicker table tr td.selected.active.focus,
    .datepicker table tr td.selected.highlighted.active.focus,
    .open > .dropdown-toggle.datepicker table tr td.selected.focus,
    .open > .dropdown-toggle.datepicker table tr td.selected.highlighted.focus {
        color: #ffffff;
        background-color: #6e6e6e;
        border-color: #161616;
    }

    .datepicker table tr td.selected:active,
    .datepicker table tr td.selected.highlighted:active,
    .datepicker table tr td.selected.active,
    .datepicker table tr td.selected.highlighted.active,
    .open > .dropdown-toggle.datepicker table tr td.selected,
    .open > .dropdown-toggle.datepicker table tr td.selected.highlighted {
        background-image: none;
    }

    .datepicker table tr td.selected.disabled:hover,
    .datepicker table tr td.selected.highlighted.disabled:hover,
    .datepicker table tr td.selected[disabled]:hover,
    .datepicker table tr td.selected.highlighted[disabled]:hover,
    fieldset[disabled] .datepicker table tr td.selected:hover,
    fieldset[disabled] .datepicker table tr td.selected.highlighted:hover,
    .datepicker table tr td.selected.disabled:focus,
    .datepicker table tr td.selected.highlighted.disabled:focus,
    .datepicker table tr td.selected[disabled]:focus,
    .datepicker table tr td.selected.highlighted[disabled]:focus,
    fieldset[disabled] .datepicker table tr td.selected:focus,
    fieldset[disabled] .datepicker table tr td.selected.highlighted:focus,
    .datepicker table tr td.selected.disabled.focus,
    .datepicker table tr td.selected.highlighted.disabled.focus,
    .datepicker table tr td.selected[disabled].focus,
    .datepicker table tr td.selected.highlighted[disabled].focus,
    fieldset[disabled] .datepicker table tr td.selected.focus,
    fieldset[disabled] .datepicker table tr td.selected.highlighted.focus {
        background-color: #999999;
        border-color: #555555;
    }

    .datepicker table tr td.active,
    .datepicker table tr td.active.highlighted {
        color: #ffffff;
        background-color: #428bca;
        border-color: #357ebd;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    }

    .datepicker table tr td.active:focus,
    .datepicker table tr td.active.highlighted:focus,
    .datepicker table tr td.active.focus,
    .datepicker table tr td.active.highlighted.focus {
        color: #ffffff;
        background-color: #009688;
        border-color: #193c5a;
    }

    .datepicker table tr td.active:hover,
    .datepicker table tr td.active.highlighted:hover {
        color: #ffffff;
        background-color: #009688;
        border-color: #007d71;
    }

    .datepicker table tr td.active:active,
    .datepicker table tr td.active.highlighted:active,
    .datepicker table tr td.active.active,
    .datepicker table tr td.active.highlighted.active,
    .open > .dropdown-toggle.datepicker table tr td.active,
    .open > .dropdown-toggle.datepicker table tr td.active.highlighted {
        color: #ffffff;
        background-color: #009688;
        border-color: #007d71;
    }

    .datepicker table tr td.active:active:hover,
    .datepicker table tr td.active.highlighted:active:hover,
    .datepicker table tr td.active.active:hover,
    .datepicker table tr td.active.highlighted.active:hover,
    .open > .dropdown-toggle.datepicker table tr td.active:hover,
    .open > .dropdown-toggle.datepicker table tr td.active.highlighted:hover,
    .datepicker table tr td.active:active:focus,
    .datepicker table tr td.active.highlighted:active:focus,
    .datepicker table tr td.active.active:focus,
    .datepicker table tr td.active.highlighted.active:focus,
    .open > .dropdown-toggle.datepicker table tr td.active:focus,
    .open > .dropdown-toggle.datepicker table tr td.active.highlighted:focus,
    .datepicker table tr td.active:active.focus,
    .datepicker table tr td.active.highlighted:active.focus,
    .datepicker table tr td.active.active.focus,
    .datepicker table tr td.active.highlighted.active.focus,
    .open > .dropdown-toggle.datepicker table tr td.active.focus,
    .open > .dropdown-toggle.datepicker table tr td.active.highlighted.focus {
        color: #ffffff;
        background-color: #007d71;
        border-color: #193c5a;
    }

    .datepicker table tr td.active:active,
    .datepicker table tr td.active.highlighted:active,
    .datepicker table tr td.active.active,
    .datepicker table tr td.active.highlighted.active,
    .open > .dropdown-toggle.datepicker table tr td.active,
    .open > .dropdown-toggle.datepicker table tr td.active.highlighted {
        background-image: none;
    }

    .datepicker table tr td.active.disabled:hover,
    .datepicker table tr td.active.highlighted.disabled:hover,
    .datepicker table tr td.active[disabled]:hover,
    .datepicker table tr td.active.highlighted[disabled]:hover,
    fieldset[disabled] .datepicker table tr td.active:hover,
    fieldset[disabled] .datepicker table tr td.active.highlighted:hover,
    .datepicker table tr td.active.disabled:focus,
    .datepicker table tr td.active.highlighted.disabled:focus,
    .datepicker table tr td.active[disabled]:focus,
    .datepicker table tr td.active.highlighted[disabled]:focus,
    fieldset[disabled] .datepicker table tr td.active:focus,
    fieldset[disabled] .datepicker table tr td.active.highlighted:focus,
    .datepicker table tr td.active.disabled.focus,
    .datepicker table tr td.active.highlighted.disabled.focus,
    .datepicker table tr td.active[disabled].focus,
    .datepicker table tr td.active.highlighted[disabled].focus,
    fieldset[disabled] .datepicker table tr td.active.focus,
    fieldset[disabled] .datepicker table tr td.active.highlighted.focus {
        background-color: #428bca;
        border-color: #357ebd;
    }

    .datepicker table tr td span {
        display: block;
        width: 23%;
        height: 54px;
        line-height: 54px;
        float: left;
        margin: 1%;
        cursor: pointer;
        border-radius: 4px;
    }

    .datepicker table tr td span:hover {
        background: #eeeeee;
    }

    .datepicker table tr td span.disabled,
    .datepicker table tr td span.disabled:hover {
        background: none;
        color: #999999;
        cursor: default;
    }

    .datepicker table tr td span.active,
    .datepicker table tr td span.active:hover,
    .datepicker table tr td span.active.disabled,
    .datepicker table tr td span.active.disabled:hover {
        color: #ffffff;
        background-color: #428bca;
        border-color: #357ebd;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    }

    .datepicker table tr td span.active:focus,
    .datepicker table tr td span.active:hover:focus,
    .datepicker table tr td span.active.disabled:focus,
    .datepicker table tr td span.active.disabled:hover:focus,
    .datepicker table tr td span.active.focus,
    .datepicker table tr td span.active:hover.focus,
    .datepicker table tr td span.active.disabled.focus,
    .datepicker table tr td span.active.disabled:hover.focus {
        color: #ffffff;
        background-color: #009688;
        border-color: #193c5a;
    }

    .datepicker table tr td span.active:hover,
    .datepicker table tr td span.active:hover:hover,
    .datepicker table tr td span.active.disabled:hover,
    .datepicker table tr td span.active.disabled:hover:hover {
        color: #ffffff;
        background-color: #009688;
        border-color: #007d71;
    }

    .datepicker table tr td span.active:active,
    .datepicker table tr td span.active:hover:active,
    .datepicker table tr td span.active.disabled:active,
    .datepicker table tr td span.active.disabled:hover:active,
    .datepicker table tr td span.active.active,
    .datepicker table tr td span.active:hover.active,
    .datepicker table tr td span.active.disabled.active,
    .datepicker table tr td span.active.disabled:hover.active,
    .open > .dropdown-toggle.datepicker table tr td span.active,
    .open > .dropdown-toggle.datepicker table tr td span.active:hover,
    .open > .dropdown-toggle.datepicker table tr td span.active.disabled,
    .open > .dropdown-toggle.datepicker table tr td span.active.disabled:hover {
        color: #ffffff;
        background-color: #009688;
        border-color: #007d71;
    }

    .datepicker table tr td span.active:active:hover,
    .datepicker table tr td span.active:hover:active:hover,
    .datepicker table tr td span.active.disabled:active:hover,
    .datepicker table tr td span.active.disabled:hover:active:hover,
    .datepicker table tr td span.active.active:hover,
    .datepicker table tr td span.active:hover.active:hover,
    .datepicker table tr td span.active.disabled.active:hover,
    .datepicker table tr td span.active.disabled:hover.active:hover,
    .open > .dropdown-toggle.datepicker table tr td span.active:hover,
    .open > .dropdown-toggle.datepicker table tr td span.active:hover:hover,
    .open > .dropdown-toggle.datepicker table tr td span.active.disabled:hover,
    .open > .dropdown-toggle.datepicker table tr td span.active.disabled:hover:hover,
    .datepicker table tr td span.active:active:focus,
    .datepicker table tr td span.active:hover:active:focus,
    .datepicker table tr td span.active.disabled:active:focus,
    .datepicker table tr td span.active.disabled:hover:active:focus,
    .datepicker table tr td span.active.active:focus,
    .datepicker table tr td span.active:hover.active:focus,
    .datepicker table tr td span.active.disabled.active:focus,
    .datepicker table tr td span.active.disabled:hover.active:focus,
    .open > .dropdown-toggle.datepicker table tr td span.active:focus,
    .open > .dropdown-toggle.datepicker table tr td span.active:hover:focus,
    .open > .dropdown-toggle.datepicker table tr td span.active.disabled:focus,
    .open > .dropdown-toggle.datepicker table tr td span.active.disabled:hover:focus,
    .datepicker table tr td span.active:active.focus,
    .datepicker table tr td span.active:hover:active.focus,
    .datepicker table tr td span.active.disabled:active.focus,
    .datepicker table tr td span.active.disabled:hover:active.focus,
    .datepicker table tr td span.active.active.focus,
    .datepicker table tr td span.active:hover.active.focus,
    .datepicker table tr td span.active.disabled.active.focus,
    .datepicker table tr td span.active.disabled:hover.active.focus,
    .open > .dropdown-toggle.datepicker table tr td span.active.focus,
    .open > .dropdown-toggle.datepicker table tr td span.active:hover.focus,
    .open > .dropdown-toggle.datepicker table tr td span.active.disabled.focus,
    .open > .dropdown-toggle.datepicker table tr td span.active.disabled:hover.focus {
        color: #ffffff;
        background-color: #007d71;
        border-color: #193c5a;
    }

    .datepicker table tr td span.active:active,
    .datepicker table tr td span.active:hover:active,
    .datepicker table tr td span.active.disabled:active,
    .datepicker table tr td span.active.disabled:hover:active,
    .datepicker table tr td span.active.active,
    .datepicker table tr td span.active:hover.active,
    .datepicker table tr td span.active.disabled.active,
    .datepicker table tr td span.active.disabled:hover.active,
    .open > .dropdown-toggle.datepicker table tr td span.active,
    .open > .dropdown-toggle.datepicker table tr td span.active:hover,
    .open > .dropdown-toggle.datepicker table tr td span.active.disabled,
    .open > .dropdown-toggle.datepicker table tr td span.active.disabled:hover {
        background-image: none;
    }

    .datepicker table tr td span.active.disabled:hover,
    .datepicker table tr td span.active:hover.disabled:hover,
    .datepicker table tr td span.active.disabled.disabled:hover,
    .datepicker table tr td span.active.disabled:hover.disabled:hover,
    .datepicker table tr td span.active[disabled]:hover,
    .datepicker table tr td span.active:hover[disabled]:hover,
    .datepicker table tr td span.active.disabled[disabled]:hover,
    .datepicker table tr td span.active.disabled:hover[disabled]:hover,
    fieldset[disabled] .datepicker table tr td span.active:hover,
    fieldset[disabled] .datepicker table tr td span.active:hover:hover,
    fieldset[disabled] .datepicker table tr td span.active.disabled:hover,
    fieldset[disabled] .datepicker table tr td span.active.disabled:hover:hover,
    .datepicker table tr td span.active.disabled:focus,
    .datepicker table tr td span.active:hover.disabled:focus,
    .datepicker table tr td span.active.disabled.disabled:focus,
    .datepicker table tr td span.active.disabled:hover.disabled:focus,
    .datepicker table tr td span.active[disabled]:focus,
    .datepicker table tr td span.active:hover[disabled]:focus,
    .datepicker table tr td span.active.disabled[disabled]:focus,
    .datepicker table tr td span.active.disabled:hover[disabled]:focus,
    fieldset[disabled] .datepicker table tr td span.active:focus,
    fieldset[disabled] .datepicker table tr td span.active:hover:focus,
    fieldset[disabled] .datepicker table tr td span.active.disabled:focus,
    fieldset[disabled] .datepicker table tr td span.active.disabled:hover:focus,
    .datepicker table tr td span.active.disabled.focus,
    .datepicker table tr td span.active:hover.disabled.focus,
    .datepicker table tr td span.active.disabled.disabled.focus,
    .datepicker table tr td span.active.disabled:hover.disabled.focus,
    .datepicker table tr td span.active[disabled].focus,
    .datepicker table tr td span.active:hover[disabled].focus,
    .datepicker table tr td span.active.disabled[disabled].focus,
    .datepicker table tr td span.active.disabled:hover[disabled].focus,
    fieldset[disabled] .datepicker table tr td span.active.focus,
    fieldset[disabled] .datepicker table tr td span.active:hover.focus,
    fieldset[disabled] .datepicker table tr td span.active.disabled.focus,
    fieldset[disabled] .datepicker table tr td span.active.disabled:hover.focus {
        background-color: #428bca;
        border-color: #357ebd;
    }

    .datepicker table tr td span.old,
    .datepicker table tr td span.new {
        color: #999999;
    }

    .datepicker .datepicker-switch {
        width: 145px;
    }

    .datepicker .datepicker-switch,
    .datepicker .prev,
    .datepicker .next,
    .datepicker tfoot tr th {
        cursor: pointer;
    }

    .datepicker .datepicker-switch:hover,
    .datepicker .prev:hover,
    .datepicker .next:hover,
    .datepicker tfoot tr th:hover {
        background: #eeeeee;
    }

    .datepicker .cw {
        font-size: 10px;
        width: 12px;
        padding: 0 2px 0 5px;
        vertical-align: middle;
    }

    .input-group.date .input-group-addon {
        cursor: pointer;
    }

    .input-daterange {
        width: 100%;
    }

    .input-daterange input {
        text-align: center;
    }

    .input-daterange input:first-child {
        border-radius: 3px 0 0 3px;
    }

    .input-daterange input:last-child {
        border-radius: 0 3px 3px 0;
    }

    .input-daterange .input-group-addon {
        width: auto;
        min-width: 16px;
        padding: 4px 5px;
        font-weight: normal;
        line-height: 1.42857143;
        text-align: center;
        text-shadow: 0 1px 0 #fff;
        vertical-align: middle;
        background-color: #eeeeee;
        border: solid #cccccc;
        border-width: 1px 0;
        margin-left: -5px;
        margin-right: -5px;
    }

    .datepicker.dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        right: auto;
        z-index: 1000;
        float: left;
        display: none;
        min-width: 160px;
        list-style: none;
        background-color: #ffffff;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        -webkit-background-clip: padding-box;
        -moz-background-clip: padding;
        background-clip: padding-box;
        *border-right-width: 2px;
        *border-bottom-width: 2px;
        color: #333333;
        font-size: 13px;
        line-height: 1.42857143;
    }

    .datepicker.dropdown-menu th,
    .datepicker.datepicker-inline th,
    .datepicker.dropdown-menu td,
    .datepicker.datepicker-inline td {
        padding: 0px 5px;
    }

    body.stop-scrolling {
        height: 100%;
        overflow: hidden;
    }

    .sweet-overlay {
        background-color: rgba(255, 255, 255, 0.9);
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        display: none;
        outline: none !important;
        z-index: 10000;
    }

    .sweet-alert {
        background-color: white;
        width: 478px;
        padding: 20px;
        border-radius: 3px;
        text-align: center;
        position: fixed;
        left: 50%;
        top: 50%;
        margin-left: -259px;
        margin-top: -200px;
        -webkit-box-shadow: 0 4px 23px 5px rgba(0, 0, 0, 0.2), 0 2px 6px rgba(0, 0, 0, 0.15);
        box-shadow: 0 4px 23px 5px rgba(0, 0, 0, 0.2), 0 2px 6px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        display: none;
        z-index: 99999;
    }

    @media  all and (max-width: 540px) {
        .sweet-alert {
            width: auto;
            margin-left: 0;
            margin-right: 0;
            left: 15px;
            right: 15px;
        }
    }

    .sweet-alert h2 {
        color: #575757;
        font-size: 30px;
        text-align: center;
        font-weight: 500;
        text-transform: none;
        position: relative;
        margin: 15px 0 0 0;
        padding: 0;
        line-height: 40px;
        display: block;
    }

    .sweet-alert p {
        color: #797979;
        font-size: 16px;
        text-align: center;
        font-weight: 400;
        position: relative;
        text-align: inherit;
        float: none;
        margin: 0;
        padding: 0;
        line-height: normal;
    }

    .sweet-alert fieldset {
        border: none;
        position: relative;
    }

    .sweet-alert .sa-error-container {
        background-color: #f1f1f1;
        margin-left: -17px;
        margin-right: -17px;
        overflow: hidden;
        padding: 0 10px;
        max-height: 0;
        webkit-transition: padding 0.15s, max-height 0.15s;
        -webkit-transition: padding 0.15s, max-height 0.15s;
        -o-transition: padding 0.15s, max-height 0.15s;
        transition: padding 0.15s, max-height 0.15s;
    }

    .sweet-alert .sa-error-container.show {
        padding: 10px 0;
        max-height: 100px;
        webkit-transition: padding 0.2s, max-height 0.2s;
        -webkit-transition: padding 0.25s, max-height 0.25s;
        -o-transition: padding 0.25s, max-height 0.25s;
        transition: padding 0.25s, max-height 0.25s;
    }

    .sweet-alert .sa-error-container .icon {
        display: inline-block;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: #ea7d7d;
        color: white;
        line-height: 24px;
        text-align: center;
        margin-right: 3px;
    }

    .sweet-alert .sa-error-container p {
        display: inline-block;
    }

    .sweet-alert .sa-input-error {
        position: absolute;
        top: 22px;
        right: 10px;
        width: 20px;
        height: 20px;
        opacity: 0;
        -webkit-transform: scale(0.5);
        -ms-transform: scale(0.5);
        transform: scale(0.5);
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        -webkit-transition: all 0.1s;
        -o-transition: all 0.1s;
        transition: all 0.1s;
    }

    .sweet-alert .sa-input-error::before, .sweet-alert .sa-input-error::after {
        content: "";
        width: 20px;
        height: 6px;
        background-color: #f06e57;
        border-radius: 3px;
        position: absolute;
        top: 50%;
        margin-top: -4px;
        left: 50%;
        margin-left: -9px;
    }

    .sweet-alert .sa-input-error::before {
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .sweet-alert .sa-input-error::after {
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .sweet-alert .sa-input-error.show {
        opacity: 1;
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }

    .sweet-alert input {
        display: none;
        width: 100%;
        height: 40px;
        padding: 8px 12px 4px;
        font-size: 14px;
        font-weight: 500;
        line-height: 1.44;
        color: #555;
        margin-top: 10px;
        margin-bottom: 17px;
        background-color: #fff;
        background-image: none;
        border: 2px solid #ccc;
        border-radius: 3px;
        -webkit-transition: border-color ease-in-out 0.15s;
        -o-transition: border-color ease-in-out 0.15s;
        transition: border-color ease-in-out 0.15s;
    }

    .sweet-alert input:focus {
        border-color: #009688;
        outline: none;
    }

    .sweet-alert.show-input input {
        display: block;
    }

    .sweet-alert .sa-confirm-button-container {
        display: inline-block;
        position: relative;
    }

    .sweet-alert .la-ball-fall {
        position: absolute;
        left: 50%;
        top: 50%;
        margin-left: -27px;
        margin-top: 4px;
        opacity: 0;
        visibility: hidden;
    }

    .sweet-alert button {
        background-color: #009688 !important;
        color: white;
        border: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        font-size: 17px;
        font-weight: 500;
        border-radius: 3px;
        padding: 8px 20px;
        margin: 26px 5px 0 5px;
        cursor: pointer;
    }

    .sweet-alert button:focus {
        outline: none;
        -webkit-box-shadow: 0 0 2px rgba(128, 179, 235, 0.5), inset 0 0 0 1px rgba(0, 0, 0, 0.05);
        box-shadow: 0 0 2px rgba(128, 179, 235, 0.5), inset 0 0 0 1px rgba(0, 0, 0, 0.05);
    }

    .sweet-alert button:hover {
        background-color: #00877a;
    }

    .sweet-alert button:active {
        background-color: #00635a;
    }

    .sweet-alert button.cancel {
        background-color: #C1C1C1 !important;
    }

    .sweet-alert button.cancel:hover {
        background-color: #b9b9b9;
    }

    .sweet-alert button.cancel:active {
        background-color: #a8a7a7;
    }

    .sweet-alert button.cancel:focus {
        -webkit-box-shadow: rgba(197, 205, 211, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.0470588) 0px 0px 0px 1px inset !important;
        box-shadow: rgba(197, 205, 211, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.0470588) 0px 0px 0px 1px inset !important;
    }

    .sweet-alert button[disabled] {
        opacity: .6;
        cursor: default;
    }

    .sweet-alert button.confirm[disabled] {
        color: transparent;
    }

    .sweet-alert button.confirm[disabled] ~ .la-ball-fall {
        opacity: 1;
        visibility: visible;
        -webkit-transition-delay: 0s;
        -o-transition-delay: 0s;
        transition-delay: 0s;
    }

    .sweet-alert button::-moz-focus-inner {
        border: 0;
    }

    .sweet-alert[data-has-cancel-button=false] button {
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    .sweet-alert[data-has-confirm-button=false][data-has-cancel-button=false] {
        padding-bottom: 40px;
    }

    .sweet-alert .sa-icon {
        width: 80px;
        height: 80px;
        border: 4px solid gray;
        border-radius: 40px;
        border-radius: 50%;
        margin: 20px auto;
        padding: 0;
        position: relative;
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
    }

    .sweet-alert .sa-icon.sa-error {
        border-color: #F27474;
    }

    .sweet-alert .sa-icon.sa-error .sa-x-mark {
        position: relative;
        display: block;
    }

    .sweet-alert .sa-icon.sa-error .sa-line {
        position: absolute;
        height: 5px;
        width: 47px;
        background-color: #F27474;
        display: block;
        top: 37px;
        border-radius: 2px;
    }

    .sweet-alert .sa-icon.sa-error .sa-line.sa-left {
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        left: 17px;
    }

    .sweet-alert .sa-icon.sa-error .sa-line.sa-right {
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
        right: 16px;
    }

    .sweet-alert .sa-icon.sa-warning {
        border-color: #F8BB86;
    }

    .sweet-alert .sa-icon.sa-warning .sa-body {
        position: absolute;
        width: 5px;
        height: 47px;
        left: 50%;
        top: 10px;
        border-radius: 2px;
        margin-left: -2px;
        background-color: #F8BB86;
    }

    .sweet-alert .sa-icon.sa-warning .sa-dot {
        position: absolute;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        margin-left: -3px;
        left: 50%;
        bottom: 10px;
        background-color: #F8BB86;
    }

    .sweet-alert .sa-icon.sa-info {
        border-color: #C9DAE1;
    }

    .sweet-alert .sa-icon.sa-info::before {
        content: "";
        position: absolute;
        width: 5px;
        height: 29px;
        left: 50%;
        bottom: 17px;
        border-radius: 2px;
        margin-left: -2px;
        background-color: #C9DAE1;
    }

    .sweet-alert .sa-icon.sa-info::after {
        content: "";
        position: absolute;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        margin-left: -3px;
        top: 19px;
        background-color: #C9DAE1;
    }

    .sweet-alert .sa-icon.sa-success {
        border-color: #A5DC86;
    }

    .sweet-alert .sa-icon.sa-success::before, .sweet-alert .sa-icon.sa-success::after {
        content: '';
        border-radius: 40px;
        border-radius: 50%;
        position: absolute;
        width: 60px;
        height: 120px;
        background: white;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .sweet-alert .sa-icon.sa-success::before {
        border-radius: 120px 0 0 120px;
        top: -7px;
        left: -33px;
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 60px 60px;
        -ms-transform-origin: 60px 60px;
        transform-origin: 60px 60px;
    }

    .sweet-alert .sa-icon.sa-success::after {
        border-radius: 0 120px 120px 0;
        top: -11px;
        left: 30px;
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 0px 60px;
        -ms-transform-origin: 0px 60px;
        transform-origin: 0px 60px;
    }

    .sweet-alert .sa-icon.sa-success .sa-placeholder {
        width: 80px;
        height: 80px;
        border: 4px solid rgba(165, 220, 134, 0.2);
        border-radius: 40px;
        border-radius: 50%;
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        position: absolute;
        left: -4px;
        top: -4px;
        z-index: 2;
    }

    .sweet-alert .sa-icon.sa-success .sa-fix {
        width: 5px;
        height: 90px;
        background-color: white;
        position: absolute;
        left: 28px;
        top: 8px;
        z-index: 1;
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .sweet-alert .sa-icon.sa-success .sa-line {
        height: 5px;
        background-color: #A5DC86;
        display: block;
        border-radius: 2px;
        position: absolute;
        z-index: 2;
    }

    .sweet-alert .sa-icon.sa-success .sa-line.sa-tip {
        width: 25px;
        left: 14px;
        top: 46px;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .sweet-alert .sa-icon.sa-success .sa-line.sa-long {
        width: 47px;
        right: 8px;
        top: 38px;
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .sweet-alert .sa-icon.sa-custom {
        background-size: contain;
        border-radius: 0;
        border: none;
        background-position: center center;
        background-repeat: no-repeat;
    }

    /*
 * Animations
 */
    @-webkit-keyframes showSweetAlert {
        0% {
            transform: scale(0.7);
            -webkit-transform: scale(0.7);
        }
        45% {
            transform: scale(1.05);
            -webkit-transform: scale(1.05);
        }
        80% {
            transform: scale(0.95);
            -webkit-transform: scale(0.95);
        }
        100% {
            transform: scale(1);
            -webkit-transform: scale(1);
        }
    }

    @keyframes  showSweetAlert {
        0% {
            transform: scale(0.7);
            -webkit-transform: scale(0.7);
        }
        45% {
            transform: scale(1.05);
            -webkit-transform: scale(1.05);
        }
        80% {
            transform: scale(0.95);
            -webkit-transform: scale(0.95);
        }
        100% {
            transform: scale(1);
            -webkit-transform: scale(1);
        }
    }

    @-webkit-keyframes hideSweetAlert {
        0% {
            transform: scale(1);
            -webkit-transform: scale(1);
        }
        100% {
            transform: scale(0.5);
            -webkit-transform: scale(0.5);
        }
    }

    @keyframes  hideSweetAlert {
        0% {
            transform: scale(1);
            -webkit-transform: scale(1);
        }
        100% {
            transform: scale(0.5);
            -webkit-transform: scale(0.5);
        }
    }

    @-webkit-keyframes slideFromTop {
        0% {
            top: 0%;
        }
        100% {
            top: 50%;
        }
    }

    @keyframes  slideFromTop {
        0% {
            top: 0%;
        }
        100% {
            top: 50%;
        }
    }

    @-webkit-keyframes slideToTop {
        0% {
            top: 50%;
        }
        100% {
            top: 0%;
        }
    }

    @keyframes  slideToTop {
        0% {
            top: 50%;
        }
        100% {
            top: 0%;
        }
    }

    @-webkit-keyframes slideFromBottom {
        0% {
            top: 70%;
        }
        100% {
            top: 50%;
        }
    }

    @keyframes  slideFromBottom {
        0% {
            top: 70%;
        }
        100% {
            top: 50%;
        }
    }

    @-webkit-keyframes slideToBottom {
        0% {
            top: 50%;
        }
        100% {
            top: 70%;
        }
    }

    @keyframes  slideToBottom {
        0% {
            top: 50%;
        }
        100% {
            top: 70%;
        }
    }

    .showSweetAlert[data-animation=pop] {
        -webkit-animation: showSweetAlert 0.3s;
        animation: showSweetAlert 0.3s;
    }

    .showSweetAlert[data-animation=none] {
        -webkit-animation: none;
        animation: none;
    }

    .showSweetAlert[data-animation=slide-from-top] {
        -webkit-animation: slideFromTop 0.3s;
        animation: slideFromTop 0.3s;
    }

    .showSweetAlert[data-animation=slide-from-bottom] {
        -webkit-animation: slideFromBottom 0.3s;
        animation: slideFromBottom 0.3s;
    }

    .hideSweetAlert[data-animation=pop] {
        -webkit-animation: hideSweetAlert 0.2s;
        animation: hideSweetAlert 0.2s;
    }

    .hideSweetAlert[data-animation=none] {
        -webkit-animation: none;
        animation: none;
    }

    .hideSweetAlert[data-animation=slide-from-top] {
        -webkit-animation: slideToTop 0.4s;
        animation: slideToTop 0.4s;
    }

    .hideSweetAlert[data-animation=slide-from-bottom] {
        -webkit-animation: slideToBottom 0.3s;
        animation: slideToBottom 0.3s;
    }

    @-webkit-keyframes animateSuccessTip {
        0% {
            width: 0;
            left: 1px;
            top: 19px;
        }
        54% {
            width: 0;
            left: 1px;
            top: 19px;
        }
        70% {
            width: 50px;
            left: -8px;
            top: 37px;
        }
        84% {
            width: 17px;
            left: 21px;
            top: 48px;
        }
        100% {
            width: 25px;
            left: 14px;
            top: 45px;
        }
    }

    @keyframes  animateSuccessTip {
        0% {
            width: 0;
            left: 1px;
            top: 19px;
        }
        54% {
            width: 0;
            left: 1px;
            top: 19px;
        }
        70% {
            width: 50px;
            left: -8px;
            top: 37px;
        }
        84% {
            width: 17px;
            left: 21px;
            top: 48px;
        }
        100% {
            width: 25px;
            left: 14px;
            top: 45px;
        }
    }

    @-webkit-keyframes animateSuccessLong {
        0% {
            width: 0;
            right: 46px;
            top: 54px;
        }
        65% {
            width: 0;
            right: 46px;
            top: 54px;
        }
        84% {
            width: 55px;
            right: 0px;
            top: 35px;
        }
        100% {
            width: 47px;
            right: 8px;
            top: 38px;
        }
    }

    @keyframes  animateSuccessLong {
        0% {
            width: 0;
            right: 46px;
            top: 54px;
        }
        65% {
            width: 0;
            right: 46px;
            top: 54px;
        }
        84% {
            width: 55px;
            right: 0px;
            top: 35px;
        }
        100% {
            width: 47px;
            right: 8px;
            top: 38px;
        }
    }

    @-webkit-keyframes rotatePlaceholder {
        0% {
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
        }
        5% {
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
        }
        12% {
            transform: rotate(-405deg);
            -webkit-transform: rotate(-405deg);
        }
        100% {
            transform: rotate(-405deg);
            -webkit-transform: rotate(-405deg);
        }
    }

    @keyframes  rotatePlaceholder {
        0% {
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
        }
        5% {
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
        }
        12% {
            transform: rotate(-405deg);
            -webkit-transform: rotate(-405deg);
        }
        100% {
            transform: rotate(-405deg);
            -webkit-transform: rotate(-405deg);
        }
    }

    .animateSuccessTip {
        -webkit-animation: animateSuccessTip 0.75s;
        animation: animateSuccessTip 0.75s;
    }

    .animateSuccessLong {
        -webkit-animation: animateSuccessLong 0.75s;
        animation: animateSuccessLong 0.75s;
    }

    .sa-icon.sa-success.animate::after {
        -webkit-animation: rotatePlaceholder 4.25s ease-in;
        animation: rotatePlaceholder 4.25s ease-in;
    }

    @-webkit-keyframes animateErrorIcon {
        0% {
            transform: rotateX(100deg);
            -webkit-transform: rotateX(100deg);
            opacity: 0;
        }
        100% {
            transform: rotateX(0deg);
            -webkit-transform: rotateX(0deg);
            opacity: 1;
        }
    }

    @keyframes  animateErrorIcon {
        0% {
            transform: rotateX(100deg);
            -webkit-transform: rotateX(100deg);
            opacity: 0;
        }
        100% {
            transform: rotateX(0deg);
            -webkit-transform: rotateX(0deg);
            opacity: 1;
        }
    }

    .animateErrorIcon {
        -webkit-animation: animateErrorIcon 0.5s;
        animation: animateErrorIcon 0.5s;
    }

    @-webkit-keyframes animateXMark {
        0% {
            transform: scale(0.4);
            -webkit-transform: scale(0.4);
            margin-top: 26px;
            opacity: 0;
        }
        50% {
            transform: scale(0.4);
            -webkit-transform: scale(0.4);
            margin-top: 26px;
            opacity: 0;
        }
        80% {
            transform: scale(1.15);
            -webkit-transform: scale(1.15);
            margin-top: -6px;
        }
        100% {
            transform: scale(1);
            -webkit-transform: scale(1);
            margin-top: 0;
            opacity: 1;
        }
    }

    @keyframes  animateXMark {
        0% {
            transform: scale(0.4);
            -webkit-transform: scale(0.4);
            margin-top: 26px;
            opacity: 0;
        }
        50% {
            transform: scale(0.4);
            -webkit-transform: scale(0.4);
            margin-top: 26px;
            opacity: 0;
        }
        80% {
            transform: scale(1.15);
            -webkit-transform: scale(1.15);
            margin-top: -6px;
        }
        100% {
            transform: scale(1);
            -webkit-transform: scale(1);
            margin-top: 0;
            opacity: 1;
        }
    }

    .animateXMark {
        -webkit-animation: animateXMark 0.5s;
        animation: animateXMark 0.5s;
    }

    @-webkit-keyframes pulseWarning {
        0% {
            border-color: #F8D486;
        }
        100% {
            border-color: #F8BB86;
        }
    }

    @keyframes  pulseWarning {
        0% {
            border-color: #F8D486;
        }
        100% {
            border-color: #F8BB86;
        }
    }

    .pulseWarning {
        -webkit-animation: pulseWarning 0.75s infinite alternate;
        animation: pulseWarning 0.75s infinite alternate;
    }

    @-webkit-keyframes pulseWarningIns {
        0% {
            background-color: #F8D486;
        }
        100% {
            background-color: #F8BB86;
        }
    }

    @keyframes  pulseWarningIns {
        0% {
            background-color: #F8D486;
        }
        100% {
            background-color: #F8BB86;
        }
    }

    .pulseWarningIns {
        -webkit-animation: pulseWarningIns 0.75s infinite alternate;
        animation: pulseWarningIns 0.75s infinite alternate;
    }

    @-webkit-keyframes rotate-loading {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes  rotate-loading {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    .notify-alert {
        -webkit-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.23), 0 3px 10px rgba(0, 0, 0, 0.16);
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.23), 0 3px 10px rgba(0, 0, 0, 0.16);
        border: 0 !important;
        max-width: 400px;
        color: #FFF;
    }

    .notify-alert.alert-success {
        background-color: #28a745;
    }

    .notify-alert.alert-info {
        background-color: #17a2b8;
    }

    .notify-alert.alert-warning {
        background-color: #ffce3a;
    }

    .notify-alert.alert-danger {
        background-color: #e04b59;
    }

    .notify-alert button[data-notify="dismiss"] {
        margin-left: 5px;
        outline: none !important;
    }

    .select2-container {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        display: inline-block;
        margin: 0;
        position: relative;
        vertical-align: middle;
    }

    .select2-container .select2-selection--single {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: 35px;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-user-select: none;
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
        display: block;
        padding-left: 8px;
        padding-right: 20px;
        padding-top: 2px;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .select2-container .select2-selection--single .select2-selection__clear {
        position: relative;
    }

    .select2-container[dir="rtl"] .select2-selection--single .select2-selection__rendered {
        padding-right: 8px;
        padding-left: 20px;
    }

    .select2-container .select2-selection--multiple {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        min-height: 32px;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-user-select: none;
    }

    .select2-container .select2-selection--multiple .select2-selection__rendered {
        display: inline-block;
        overflow: hidden;
        padding-left: 8px;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .select2-container .select2-search--inline {
        float: left;
    }

    .select2-container .select2-search--inline .select2-search__field {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        border: none;
        font-size: 100%;
        margin-top: 5px;
        padding: 0;
    }

    .select2-container .select2-search--inline .select2-search__field::-webkit-search-cancel-button {
        -webkit-appearance: none;
    }

    .select2-dropdown {
        background-color: white;
        border: 2px solid #ced4da;
        border-radius: 4px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        display: block;
        position: absolute;
        left: -100000px;
        width: 100%;
        z-index: 1051;
    }

    .select2-results {
        display: block;
    }

    .select2-results__options {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .select2-results__option {
        padding: 6px;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-user-select: none;
    }

    .select2-results__option[aria-selected] {
        cursor: pointer;
    }

    .select2-container--open .select2-dropdown {
        left: 0;
    }

    .select2-container--open .select2-dropdown--above {
        border-bottom: none;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    .select2-container--open .select2-dropdown--below {
        border-top: none;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .select2-search--dropdown {
        display: block;
        padding: 4px;
    }

    .select2-search--dropdown .select2-search__field {
        padding: 4px;
        width: 100%;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .select2-search--dropdown .select2-search__field::-webkit-search-cancel-button {
        -webkit-appearance: none;
    }

    .select2-search--dropdown.select2-search--hide {
        display: none;
    }

    .select2-close-mask {
        border: 0;
        margin: 0;
        padding: 0;
        display: block;
        position: fixed;
        left: 0;
        top: 0;
        min-height: 100%;
        min-width: 100%;
        height: auto;
        width: auto;
        opacity: 0;
        z-index: 99;
        background-color: #fff;
        filter: alpha(opacity=0);
    }

    .select2-hidden-accessible {
        border: 0 !important;
        clip: rect(0 0 0 0) !important;
        height: 1px !important;
        margin: -1px !important;
        overflow: hidden !important;
        padding: 0 !important;
        position: absolute !important;
        width: 1px !important;
    }

    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border: 2px solid #ced4da;
        border-radius: 4px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #444;
        line-height: 28px;
    }

    .select2-container--default .select2-selection--single .select2-selection__clear {
        cursor: pointer;
        float: right;
        font-weight: bold;
    }

    .select2-container--default .select2-selection--single .select2-selection__placeholder {
        color: #999;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 30px;
        position: absolute;
        top: 1px;
        right: 1px;
        width: 20px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        border-color: #888 transparent transparent transparent;
        border-style: solid;
        border-width: 5px 4px 0 4px;
        height: 0;
        left: 50%;
        margin-left: -4px;
        margin-top: -2px;
        position: absolute;
        top: 50%;
        width: 0;
    }

    .select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__clear {
        float: left;
    }

    .select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__arrow {
        left: 1px;
        right: auto;
    }

    .select2-container--default.select2-container--disabled .select2-selection--single {
        background-color: #eee;
        cursor: default;
    }

    .select2-container--default.select2-container--disabled .select2-selection--single .select2-selection__clear {
        display: none;
    }

    .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
        border-color: transparent transparent #888 transparent;
        border-width: 0 4px 5px 4px;
    }

    .select2-container--default .select2-selection--multiple {
        background-color: white;
        border: 2px solid #ced4da;
        border-radius: 4px;
        cursor: text;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__rendered {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        list-style: none;
        margin: 0;
        padding: 0 5px;
        width: 100%;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__rendered li {
        list-style: none;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__placeholder {
        color: #999;
        margin-top: 5px;
        float: left;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__clear {
        cursor: pointer;
        float: right;
        font-weight: bold;
        margin-top: 5px;
        margin-right: 10px;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        background-color: #e4e4e4;
        border: 1px solid #ced4da;
        border-radius: 2px;
        cursor: default;
        float: left;
        margin-right: 5px;
        margin-top: 5px;
        padding: 0 5px;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1;
        color: #999;
        cursor: pointer;
        display: inline-block;
        font-weight: bold;
        margin-left: 2px;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
        color: #333;
    }

    .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice, .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__placeholder, .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-search--inline {
        float: right;
    }

    .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice {
        margin-left: 5px;
        margin-right: auto;
    }

    .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
        margin-left: 2px;
        margin-right: auto;
    }

    .select2-container--default.select2-container--focus .select2-selection--multiple {
        border-color: #009688;
        outline: 0;
    }

    .select2-container--default.select2-container--disabled .select2-selection--multiple {
        background-color: #eee;
        cursor: default;
    }

    .select2-container--default.select2-container--disabled .select2-selection__choice__remove {
        display: none;
    }

    .select2-container--default.select2-container--open.select2-container--above .select2-selection--single, .select2-container--default.select2-container--open.select2-container--above .select2-selection--multiple {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .select2-container--default.select2-container--open.select2-container--below .select2-selection--single, .select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    .select2-container--default .select2-search--dropdown .select2-search__field {
        border: 1px solid #aaa;
    }

    .select2-container--default .select2-search--inline .select2-search__field {
        background: transparent;
        border: none;
        outline: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        -webkit-appearance: textfield;
    }

    .select2-container--default .select2-results > .select2-results__options {
        max-height: 200px;
        overflow-y: auto;
    }

    .select2-container--default .select2-results__option[role=group] {
        padding: 0;
    }

    .select2-container--default .select2-results__option[aria-disabled=true] {
        color: #999;
    }

    .select2-container--default .select2-results__option[aria-selected=true] {
        background-color: #ddd;
    }

    .select2-container--default .select2-results__option .select2-results__option {
        padding-left: 1em;
    }

    .select2-container--default .select2-results__option .select2-results__option .select2-results__group {
        padding-left: 0;
    }

    .select2-container--default .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -1em;
        padding-left: 2em;
    }

    .select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -2em;
        padding-left: 3em;
    }

    .select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -3em;
        padding-left: 4em;
    }

    .select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -4em;
        padding-left: 5em;
    }

    .select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -5em;
        padding-left: 6em;
    }

    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: #009688;
        color: white;
    }

    .select2-container--default .select2-results__group {
        cursor: default;
        display: block;
        padding: 6px;
    }

    .pace {
        pointer-events: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .pace .pace-progress {
        background: #96000e;
        position: fixed;
        z-index: 2000;
        top: 0;
        right: 100%;
        width: 100%;
        height: 2px;
    }

    .pace .pace-progress-inner {
        display: block;
        position: absolute;
        right: 0;
        width: 100px;
        height: 100%;
        -webkit-box-shadow: 0 0 10px #96000e, 0 0 5px #96000e;
        box-shadow: 0 0 10px #96000e, 0 0 5px #96000e;
        opacity: 1;
        -webkit-transform: rotate(3deg) translate(0px, -4px);
        -ms-transform: rotate(3deg) translate(0px, -4px);
        transform: rotate(3deg) translate(0px, -4px);
    }

    .pace-inactive {
        display: none;
    }

    .jqvmap-label {
        position: absolute;
        display: none;
        border-radius: 3px;
        background: #292929;
        color: white;
        font-family: sans-serif, Verdana;
        font-size: smaller;
        padding: 3px;
    }

    .jqvmap-zoomin, .jqvmap-zoomout {
        position: absolute;
        left: 10px;
        border-radius: 3px;
        background: #000000;
        padding: 3px;
        color: white;
        width: 18px;
        height: 18px;
        cursor: pointer;
        line-height: 13px;
        text-align: center;
        font-size: 20px;
    }

    .jqvmap-zoomin {
        top: 10px;
    }

    .jqvmap-zoomout {
        top: 30px;
    }

    .jqvmap-region {
        cursor: pointer;
    }

    .jqvmap-ajax_response {
        width: 100%;
        height: 500px;
    }

    /*!
 * FullCalendar v2.5.0 Stylesheet
 * Docs & License: http://fullcalendar.io/
 * (c) 2015 Adam Shaw
 */
    .fc {
        direction: ltr;
        text-align: left;
    }

    .fc-rtl {
        text-align: right;
    }

    body .fc {
        /* extra precedence to overcome jqui */
        font-size: 1em;
    }

    /* Colors
--------------------------------------------------------------------------------------------------*/
    .fc-unthemed th,
    .fc-unthemed td,
    .fc-unthemed thead,
    .fc-unthemed tbody,
    .fc-unthemed .fc-divider,
    .fc-unthemed .fc-row,
    .fc-unthemed .fc-popover {
        border-color: #ddd;
    }

    .fc-unthemed .fc-popover {
        background-color: #fff;
    }

    .fc-unthemed .fc-divider,
    .fc-unthemed .fc-popover .fc-header {
        background: #eee;
    }

    .fc-unthemed .fc-popover .fc-header .fc-close {
        color: #666;
    }

    .fc-unthemed .fc-today {
        background: rgba(0, 150, 136, 0.2);
    }

    .fc-highlight {
        /* when user is selecting cells */
        background: #bce8f1;
        opacity: .3;
        filter: alpha(opacity=30);
        /* for IE */
    }

    .fc-bgevent {
        /* default look for background events */
        background: #8fdf82;
        opacity: .3;
        filter: alpha(opacity=30);
        /* for IE */
    }

    .fc-nonbusiness {
        /* default look for non-business-hours areas */
        /* will inherit .fc-bgevent's styles */
        background: #d7d7d7;
    }

    /* Icons (inline elements with styled text that mock arrow icons)
--------------------------------------------------------------------------------------------------*/
    .fc-icon {
        display: inline-block;
        width: 1em;
        height: 1em;
        line-height: 1em;
        font-size: 1em;
        text-align: center;
        overflow: hidden;
        font-family: "Courier New", Courier, monospace;
        /* don't allow browser text-selection */
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /*
Acceptable font-family overrides for individual icons:
	"Arial", sans-serif
	"Times New Roman", serif

NOTE: use percentage font sizes or else old IE chokes
*/
    .fc-icon:after {
        position: relative;
        margin: 0 -1em;
        /* ensures character will be centered, regardless of width */
    }

    .fc-icon-left-single-arrow:after {
        content: "\02039";
        font-weight: bold;
        font-size: 200%;
        top: -7%;
        left: 3%;
    }

    .fc-icon-right-single-arrow:after {
        content: "\0203A";
        font-weight: bold;
        font-size: 200%;
        top: -7%;
        left: -3%;
    }

    .fc-icon-left-double-arrow:after {
        content: "\000AB";
        font-size: 160%;
        top: -7%;
    }

    .fc-icon-right-double-arrow:after {
        content: "\000BB";
        font-size: 160%;
        top: -7%;
    }

    .fc-icon-left-triangle:after {
        content: "\25C4";
        font-size: 125%;
        top: 3%;
        left: -2%;
    }

    .fc-icon-right-triangle:after {
        content: "\25BA";
        font-size: 125%;
        top: 3%;
        left: 2%;
    }

    .fc-icon-down-triangle:after {
        content: "\25BC";
        font-size: 125%;
        top: 2%;
    }

    .fc-icon-x:after {
        content: "\000D7";
        font-size: 200%;
        top: 6%;
    }

    /* Buttons (styled <button> tags, normalized to work cross-browser)
--------------------------------------------------------------------------------------------------*/
    .fc button {
        /* force height to include the border and padding */
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        /* dimensions */
        margin: 0;
        height: 2.1em;
        padding: 0 .6em;
        /* text & cursor */
        font-size: 13px;
        /* normalize */
        font-weight: 500;
        white-space: nowrap;
        cursor: pointer;
        text-transform: uppercase;
    }

    /* Firefox has an annoying inner border */
    .fc button::-moz-focus-inner {
        margin: 0;
        padding: 0;
    }

    .fc-state-default {
        /* non-theme */
        border: 1px solid;
    }

    .fc-state-default.fc-corner-left {
        /* non-theme */
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    .fc-state-default.fc-corner-right {
        /* non-theme */
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    /* icons in buttons */
    .fc button .fc-icon {
        /* non-theme */
        position: relative;
        top: -0.05em;
        /* seems to be a good adjustment across browsers */
        margin: 0 .2em;
        vertical-align: middle;
    }

    /*
  button states
  borrowed from twitter bootstrap (http://twitter.github.com/bootstrap/)
*/
    .fc-state-default {
        background-color: #f5f5f5;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#e6e6e6));
        background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
        background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
        background-repeat: repeat-x;
        border-color: #e6e6e6 #e6e6e6 #bfbfbf;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        color: #333;
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
        outline: none;
    }

    .fc-state-hover,
    .fc-state-down,
    .fc-state-active,
    .fc-state-disabled {
        color: #333333;
        background-color: #e6e6e6;
    }

    .fc-state-hover {
        color: #333333;
        text-decoration: none;
        background-position: 0 -15px;
        -webkit-transition: background-position 0.1s linear;
        -o-transition: background-position 0.1s linear;
        transition: background-position 0.1s linear;
    }

    .fc-state-down,
    .fc-state-active {
        background-color: #009688;
        color: #FFF;
        background-image: none;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .fc-state-disabled {
        cursor: default;
        background-image: none;
        opacity: 0.65;
        filter: alpha(opacity=65);
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    /* Buttons Groups
--------------------------------------------------------------------------------------------------*/
    .fc-button-group {
        display: inline-block;
    }

    /*
every button that is not first in a button group should scootch over one pixel and cover the
previous button's border...
*/
    .fc .fc-button-group > * {
        /* extra precedence b/c buttons have margin set to zero */
        float: left;
        margin: 0 0 0 -1px;
    }

    .fc .fc-button-group > :first-child {
        /* same */
        margin-left: 0;
    }

    /* Popover
--------------------------------------------------------------------------------------------------*/
    .fc-popover {
        position: absolute;
        -webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
    }

    .fc-popover .fc-header {
        /* TODO: be more consistent with fc-head/fc-body */
        padding: 2px 4px;
    }

    .fc-popover .fc-header .fc-title {
        margin: 0 2px;
    }

    .fc-popover .fc-header .fc-close {
        cursor: pointer;
    }

    .fc-ltr .fc-popover .fc-header .fc-title,
    .fc-rtl .fc-popover .fc-header .fc-close {
        float: left;
    }

    .fc-rtl .fc-popover .fc-header .fc-title,
    .fc-ltr .fc-popover .fc-header .fc-close {
        float: right;
    }

    /* unthemed */
    .fc-unthemed .fc-popover {
        border-width: 1px;
        border-style: solid;
    }

    .fc-unthemed .fc-popover .fc-header .fc-close {
        font-size: .9em;
        margin-top: 2px;
    }

    /* jqui themed */
    .fc-popover > .ui-widget-header + .ui-widget-content {
        border-top: 0;
        /* where they meet, let the header have the border */
    }

    /* Misc Reusable Components
--------------------------------------------------------------------------------------------------*/
    .fc-divider {
        border-style: solid;
        border-width: 1px;
    }

    hr.fc-divider {
        height: 0;
        margin: 0;
        padding: 0 0 2px;
        /* height is unreliable across browsers, so use padding */
        border-width: 1px 0;
    }

    .fc-clear {
        clear: both;
    }

    .fc-bg,
    .fc-bgevent-skeleton,
    .fc-highlight-skeleton,
    .fc-helper-skeleton {
        /* these element should always cling to top-left/right corners */
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
    }

    .fc-bg {
        bottom: 0;
        /* strech bg to bottom edge */
    }

    .fc-bg table {
        height: 100%;
        /* strech bg to bottom edge */
    }

    /* Tables
--------------------------------------------------------------------------------------------------*/
    .fc table {
        width: 100%;
        table-layout: fixed;
        border-collapse: collapse;
        border-spacing: 0;
        font-size: 1em;
        /* normalize cross-browser */
        font-weight: 500;
    }

    .fc th {
        text-align: center;
    }

    .fc th,
    .fc td {
        border-style: solid;
        border-width: 1px;
        padding: 0;
        vertical-align: top;
    }

    .fc td.fc-today {
        border-style: double;
        /* overcome neighboring borders */
    }

    /* Fake Table Rows
--------------------------------------------------------------------------------------------------*/
    .fc .fc-row {
        /* extra precedence to overcome themes w/ .ui-widget-content forcing a 1px border */
        /* no visible border by default. but make available if need be (scrollbar width compensation) */
        border-style: solid;
        border-width: 0;
    }

    .fc-row table {
        /* don't put left/right border on anything within a fake row.
	   the outer tbody will worry about this */
        border-left: 0 hidden transparent;
        border-right: 0 hidden transparent;
        /* no bottom borders on rows */
        border-bottom: 0 hidden transparent;
    }

    .fc-row:first-child table {
        border-top: 0 hidden transparent;
        /* no top border on first row */
    }

    /* Day Row (used within the header and the DayGrid)
--------------------------------------------------------------------------------------------------*/
    .fc-row {
        position: relative;
    }

    .fc-row .fc-bg {
        z-index: 1;
    }

    /* highlighting cells & background event skeleton */
    .fc-row .fc-bgevent-skeleton,
    .fc-row .fc-highlight-skeleton {
        bottom: 0;
        /* stretch skeleton to bottom of row */
    }

    .fc-row .fc-bgevent-skeleton table,
    .fc-row .fc-highlight-skeleton table {
        height: 100%;
        /* stretch skeleton to bottom of row */
    }

    .fc-row .fc-highlight-skeleton td,
    .fc-row .fc-bgevent-skeleton td {
        border-color: transparent;
    }

    .fc-row .fc-bgevent-skeleton {
        z-index: 2;
    }

    .fc-row .fc-highlight-skeleton {
        z-index: 3;
    }

    /*
row content (which contains day/week numbers and events) as well as "helper" (which contains
temporary rendered events).
*/
    .fc-row .fc-content-skeleton {
        position: relative;
        z-index: 4;
        padding-bottom: 2px;
        /* matches the space above the events */
    }

    .fc-row .fc-helper-skeleton {
        z-index: 5;
    }

    .fc-row .fc-content-skeleton td,
    .fc-row .fc-helper-skeleton td {
        /* see-through to the background below */
        background: none;
        /* in case <td>s are globally styled */
        border-color: transparent;
        /* don't put a border between events and/or the day number */
        border-bottom: 0;
    }

    .fc-row .fc-content-skeleton tbody td,
    .fc-row .fc-helper-skeleton tbody td {
        /* don't put a border between event cells */
        border-top: 0;
    }

    /* Scrolling Container
--------------------------------------------------------------------------------------------------*/
    .fc-scroller {
        /* this class goes on elements for guaranteed vertical scrollbars */
        overflow-y: scroll;
        overflow-x: hidden;
    }

    .fc-scroller > * {
        /* we expect an immediate inner element */
        position: relative;
        /* re-scope all positions */
        width: 100%;
        /* hack to force re-sizing this inner element when scrollbars appear/disappear */
        overflow: hidden;
        /* don't let negative margins or absolute positioning create further scroll */
    }

    /* Global Event Styles
--------------------------------------------------------------------------------------------------*/
    .fc-event {
        position: relative;
        /* for resize handle and other inner positioning */
        display: block;
        /* make the <a> tag block */
        font-size: 14px;
        padding: 5px;
        line-height: 1.3;
        border-radius: 3px;
        border: 1px solid #009688;
        background-color: #009688;
        font-weight: normal;
        /* undo jqui's ui-widget-header bold */
        margin-bottom: 5px;
        cursor: all-scroll;
    }

    /* overpower some of bootstrap's and jqui's styles on <a> tags */
    .fc-event,
    .fc-event:hover,
    .ui-widget .fc-event {
        color: #fff;
        /* default TEXT color */
        text-decoration: none;
        /* if <a> has an href */
    }

    .fc-event[href],
    .fc-event.fc-draggable {
        cursor: pointer;
        /* give events with links and draggable events a hand mouse pointer */
    }

    .fc-not-allowed,
    .fc-not-allowed .fc-event {
        /* to override an event's custom cursor */
        cursor: not-allowed;
    }

    .fc-event .fc-bg {
        /* the generic .fc-bg already does position */
        z-index: 1;
        background: #fff;
        opacity: .25;
        filter: alpha(opacity=25);
        /* for IE */
    }

    .fc-event .fc-content {
        position: relative;
        z-index: 2;
    }

    .fc-event .fc-resizer {
        position: absolute;
        z-index: 3;
    }

    /* Horizontal Events
--------------------------------------------------------------------------------------------------*/
    /* events that are continuing to/from another week. kill rounded corners and butt up against edge */
    .fc-ltr .fc-h-event.fc-not-start,
    .fc-rtl .fc-h-event.fc-not-end {
        margin-left: 0;
        border-left-width: 0;
        padding-left: 1px;
        /* replace the border with padding */
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .fc-ltr .fc-h-event.fc-not-end,
    .fc-rtl .fc-h-event.fc-not-start {
        margin-right: 0;
        border-right-width: 0;
        padding-right: 1px;
        /* replace the border with padding */
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    /* resizer */
    .fc-h-event .fc-resizer {
        /* positioned it to overcome the event's borders */
        top: -1px;
        bottom: -1px;
        left: -1px;
        right: -1px;
        width: 5px;
    }

    /* left resizer  */
    .fc-ltr .fc-h-event .fc-start-resizer,
    .fc-ltr .fc-h-event .fc-start-resizer:before,
    .fc-ltr .fc-h-event .fc-start-resizer:after,
    .fc-rtl .fc-h-event .fc-end-resizer,
    .fc-rtl .fc-h-event .fc-end-resizer:before,
    .fc-rtl .fc-h-event .fc-end-resizer:after {
        right: auto;
        /* ignore the right and only use the left */
        cursor: w-resize;
    }

    /* right resizer */
    .fc-ltr .fc-h-event .fc-end-resizer,
    .fc-ltr .fc-h-event .fc-end-resizer:before,
    .fc-ltr .fc-h-event .fc-end-resizer:after,
    .fc-rtl .fc-h-event .fc-start-resizer,
    .fc-rtl .fc-h-event .fc-start-resizer:before,
    .fc-rtl .fc-h-event .fc-start-resizer:after {
        left: auto;
        /* ignore the left and only use the right */
        cursor: e-resize;
    }

    /* DayGrid events
----------------------------------------------------------------------------------------------------
We use the full "fc-day-grid-event" class instead of using descendants because the event won't
be a descendant of the grid when it is being dragged.
*/
    .fc-day-grid-event {
        margin: 1px 2px 0;
        /* spacing between events and edges */
        padding: 0 1px;
    }

    .fc-day-grid-event .fc-content {
        /* force events to be one-line tall */
        white-space: nowrap;
        overflow: hidden;
    }

    .fc-day-grid-event .fc-time {
        font-weight: bold;
    }

    .fc-day-grid-event .fc-resizer {
        /* enlarge the default hit area */
        left: -3px;
        right: -3px;
        width: 7px;
    }

    /* Event Limiting
--------------------------------------------------------------------------------------------------*/
    /* "more" link that represents hidden events */
    a.fc-more {
        margin: 1px 3px;
        font-size: .85em;
        cursor: pointer;
        text-decoration: none;
    }

    a.fc-more:hover {
        text-decoration: underline;
    }

    .fc-limited {
        /* rows and cells that are hidden because of a "more" link */
        display: none;
    }

    /* popover that appears when "more" link is clicked */
    .fc-day-grid .fc-row {
        z-index: 1;
        /* make the "more" popover one higher than this */
    }

    .fc-more-popover {
        z-index: 2;
        width: 220px;
    }

    .fc-more-popover .fc-event-container {
        padding: 10px;
    }

    /* Toolbar
--------------------------------------------------------------------------------------------------*/
    .fc-toolbar {
        text-align: center;
        margin-bottom: 1em;
    }

    .fc-toolbar .fc-left {
        float: left;
    }

    .fc-toolbar .fc-right {
        float: right;
    }

    .fc-toolbar .fc-center {
        display: inline-block;
    }

    /* the things within each left/right/center section */
    .fc .fc-toolbar > * > * {
        /* extra precedence to override button border margins */
        float: left;
        margin-left: .75em;
    }

    /* the first thing within each left/center/right section */
    .fc .fc-toolbar > * > :first-child {
        /* extra precedence to override button border margins */
        margin-left: 0;
    }

    /* title text */
    .fc-toolbar h2 {
        margin: 0;
        text-transform: uppercase;
        font-size: 26px;
        color: #555;
    }

    /* button layering (for border precedence) */
    .fc-toolbar button {
        position: relative;
    }

    .fc-toolbar .fc-state-hover,
    .fc-toolbar .ui-state-hover {
        z-index: 2;
    }

    .fc-toolbar .fc-state-down {
        z-index: 3;
    }

    .fc-toolbar .fc-state-active,
    .fc-toolbar .ui-state-active {
        z-index: 4;
    }

    .fc-toolbar button:focus {
        z-index: 5;
    }

    /* View Structure
--------------------------------------------------------------------------------------------------*/
    /* undo twitter bootstrap's box-sizing rules. normalizes positioning techniques */
    /* don't do this for the toolbar because we'll want bootstrap to style those buttons as some pt */
    .fc-view-container *,
    .fc-view-container *:before,
    .fc-view-container *:after {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
    }

    .fc-view,
    .fc-view > table {
        /* so dragged elements can be above the view's main element */
        position: relative;
        z-index: 1;
    }

    /* BasicView
--------------------------------------------------------------------------------------------------*/
    /* day row structure */
    .fc-basicWeek-view .fc-content-skeleton,
    .fc-basicDay-view .fc-content-skeleton {
        /* we are sure there are no day numbers in these views, so... */
        padding-top: 1px;
        /* add a pixel to make sure there are 2px padding above events */
        padding-bottom: 1em;
        /* ensure a space at bottom of cell for user selecting/clicking */
    }

    .fc-basic-view .fc-body .fc-row {
        min-height: 4em;
        /* ensure that all rows are at least this tall */
    }

    /* a "rigid" row will take up a constant amount of height because content-skeleton is absolute */
    .fc-row.fc-rigid {
        overflow: hidden;
    }

    .fc-row.fc-rigid .fc-content-skeleton {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
    }

    /* week and day number styling */
    .fc-basic-view .fc-week-number,
    .fc-basic-view .fc-day-number {
        padding: 0 2px;
    }

    .fc-basic-view td.fc-week-number span,
    .fc-basic-view td.fc-day-number {
        padding-top: 2px;
        padding-bottom: 2px;
    }

    .fc-basic-view .fc-week-number {
        text-align: center;
    }

    .fc-basic-view .fc-week-number span {
        /* work around the way we do column resizing and ensure a minimum width */
        display: inline-block;
        min-width: 1.25em;
    }

    .fc-ltr .fc-basic-view .fc-day-number {
        text-align: right;
    }

    .fc-rtl .fc-basic-view .fc-day-number {
        text-align: left;
    }

    .fc-day-number.fc-other-month {
        opacity: 0.3;
        filter: alpha(opacity=30);
        /* for IE */
        /* opacity with small font can sometimes look too faded
	   might want to set the 'color' property instead
	   making day-numbers bold also fixes the problem */
    }

    /* AgendaView all-day area
--------------------------------------------------------------------------------------------------*/
    .fc-agenda-view .fc-day-grid {
        position: relative;
        z-index: 2;
        /* so the "more.." popover will be over the time grid */
    }

    .fc-agenda-view .fc-day-grid .fc-row {
        min-height: 3em;
        /* all-day section will never get shorter than this */
    }

    .fc-agenda-view .fc-day-grid .fc-row .fc-content-skeleton {
        padding-top: 1px;
        /* add a pixel to make sure there are 2px padding above events */
        padding-bottom: 1em;
        /* give space underneath events for clicking/selecting days */
    }

    /* TimeGrid axis running down the side (for both the all-day area and the slot area)
--------------------------------------------------------------------------------------------------*/
    .fc .fc-axis {
        /* .fc to overcome default cell styles */
        vertical-align: middle;
        padding: 0 4px;
        white-space: nowrap;
    }

    .fc-ltr .fc-axis {
        text-align: right;
    }

    .fc-rtl .fc-axis {
        text-align: left;
    }

    .ui-widget td.fc-axis {
        font-weight: normal;
        /* overcome jqui theme making it bold */
    }

    /* TimeGrid Structure
--------------------------------------------------------------------------------------------------*/
    .fc-time-grid-container,
    .fc-time-grid {
        /* so slats/bg/content/etc positions get scoped within here */
        position: relative;
        z-index: 1;
    }

    .fc-time-grid {
        min-height: 100%;
        /* so if height setting is 'auto', .fc-bg stretches to fill height */
    }

    .fc-time-grid table {
        /* don't put outer borders on slats/bg/content/etc */
        border: 0 hidden transparent;
    }

    .fc-time-grid > .fc-bg {
        z-index: 1;
    }

    .fc-time-grid .fc-slats,
    .fc-time-grid > hr {
        /* the <hr> AgendaView injects when grid is shorter than scroller */
        position: relative;
        z-index: 2;
    }

    .fc-time-grid .fc-bgevent-skeleton,
    .fc-time-grid .fc-content-skeleton {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
    }

    .fc-time-grid .fc-bgevent-skeleton {
        z-index: 3;
    }

    .fc-time-grid .fc-highlight-skeleton {
        z-index: 4;
    }

    .fc-time-grid .fc-content-skeleton {
        z-index: 5;
    }

    .fc-time-grid .fc-helper-skeleton {
        z-index: 6;
    }

    /* TimeGrid Slats (lines that run horizontally)
--------------------------------------------------------------------------------------------------*/
    .fc-time-grid .fc-slats td {
        height: 1.5em;
        border-bottom: 0;
        /* each cell is responsible for its top border */
    }

    .fc-time-grid .fc-slats .fc-minor td {
        border-top-style: dotted;
    }

    .fc-time-grid .fc-slats .ui-widget-content {
        /* for jqui theme */
        background: none;
        /* see through to fc-bg */
    }

    /* TimeGrid Highlighting Slots
--------------------------------------------------------------------------------------------------*/
    .fc-time-grid .fc-highlight-container {
        /* a div within a cell within the fc-highlight-skeleton */
        position: relative;
        /* scopes the left/right of the fc-highlight to be in the column */
    }

    .fc-time-grid .fc-highlight {
        position: absolute;
        left: 0;
        right: 0;
        /* top and bottom will be in by JS */
    }

    /* TimeGrid Event Containment
--------------------------------------------------------------------------------------------------*/
    .fc-time-grid .fc-event-container,
    .fc-time-grid .fc-bgevent-container {
        /* a div within a cell within the fc-bgevent-skeleton */
        position: relative;
    }

    .fc-ltr .fc-time-grid .fc-event-container {
        /* space on the sides of events for LTR (default) */
        margin: 0 2.5% 0 2px;
    }

    .fc-rtl .fc-time-grid .fc-event-container {
        /* space on the sides of events for RTL */
        margin: 0 2px 0 2.5%;
    }

    .fc-time-grid .fc-event,
    .fc-time-grid .fc-bgevent {
        position: absolute;
        z-index: 1;
        /* scope inner z-index's */
    }

    .fc-time-grid .fc-bgevent {
        /* background events always span full width */
        left: 0;
        right: 0;
    }

    /* Generic Vertical Event
--------------------------------------------------------------------------------------------------*/
    .fc-v-event.fc-not-start {
        /* events that are continuing from another day */
        /* replace space made by the top border with padding */
        border-top-width: 0;
        padding-top: 1px;
        /* remove top rounded corners */
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .fc-v-event.fc-not-end {
        /* replace space made by the top border with padding */
        border-bottom-width: 0;
        padding-bottom: 1px;
        /* remove bottom rounded corners */
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    /* TimeGrid Event Styling
----------------------------------------------------------------------------------------------------
We use the full "fc-time-grid-event" class instead of using descendants because the event won't
be a descendant of the grid when it is being dragged.
*/
    .fc-time-grid-event {
        overflow: hidden;
        /* don't let the bg flow over rounded corners */
    }

    .fc-time-grid-event .fc-time,
    .fc-time-grid-event .fc-title {
        padding: 0 1px;
    }

    .fc-time-grid-event .fc-time {
        font-size: .85em;
        white-space: nowrap;
    }

    /* short mode, where time and title are on the same line */
    .fc-time-grid-event.fc-short .fc-content {
        /* don't wrap to second line (now that contents will be inline) */
        white-space: nowrap;
    }

    .fc-time-grid-event.fc-short .fc-time,
    .fc-time-grid-event.fc-short .fc-title {
        /* put the time and title on the same line */
        display: inline-block;
        vertical-align: top;
    }

    .fc-time-grid-event.fc-short .fc-time span {
        display: none;
        /* don't display the full time text... */
    }

    .fc-time-grid-event.fc-short .fc-time:before {
        content: attr(data-start);
        /* ...instead, display only the start time */
    }

    .fc-time-grid-event.fc-short .fc-time:after {
        content: "\000A0-\000A0";
        /* seperate with a dash, wrapped in nbsp's */
    }

    .fc-time-grid-event.fc-short .fc-title {
        font-size: .85em;
        /* make the title text the same size as the time */
        padding: 0;
        /* undo padding from above */
    }

    /* resizer */
    .fc-time-grid-event .fc-resizer {
        left: 0;
        right: 0;
        bottom: 0;
        height: 8px;
        overflow: hidden;
        line-height: 8px;
        font-size: 11px;
        font-family: monospace;
        text-align: center;
        cursor: s-resize;
    }

    .fc-time-grid-event .fc-resizer:after {
        content: "=";
    }

    /*
 * The MIT License
 * Copyright (c) 2012 Matias Meno <m@tias.me>
 */
    .dropzone, .dropzone * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .dropzone {
        position: relative;
    }

    .dropzone .dz-preview {
        position: relative;
        display: inline-block;
        width: 120px;
        margin: 0.5em;
    }

    .dropzone .dz-preview .dz-progress {
        display: block;
        height: 15px;
        border: 1px solid #aaa;
    }

    .dropzone .dz-preview .dz-progress .dz-upload {
        display: block;
        height: 100%;
        width: 0;
        background: green;
    }

    .dropzone .dz-preview .dz-error-message {
        color: red;
        display: none;
    }

    .dropzone .dz-preview.dz-error .dz-error-message, .dropzone .dz-preview.dz-error .dz-error-mark {
        display: block;
    }

    .dropzone .dz-preview.dz-success .dz-success-mark {
        display: block;
    }

    .dropzone .dz-preview .dz-error-mark, .dropzone .dz-preview .dz-success-mark {
        position: absolute;
        display: none;
        left: 30px;
        top: 30px;
        width: 54px;
        height: 58px;
        left: 50%;
        margin-left: -27px;
    }

    /*
 * The MIT License
 * Copyright (c) 2012 Matias Meno <m@tias.me>
 */
    @-webkit-keyframes passing-through {
        0% {
            opacity: 0;
            -webkit-transform: translateY(40px);
            -ms-transform: translateY(40px);
            transform: translateY(40px);
        }
        30%, 70% {
            opacity: 1;
            -webkit-transform: translateY(0px);
            -ms-transform: translateY(0px);
            transform: translateY(0px);
        }
        100% {
            opacity: 0;
            -webkit-transform: translateY(-40px);
            -ms-transform: translateY(-40px);
            transform: translateY(-40px);
        }
    }

    @keyframes  passing-through {
        0% {
            opacity: 0;
            -webkit-transform: translateY(40px);
            -ms-transform: translateY(40px);
            transform: translateY(40px);
        }
        30%, 70% {
            opacity: 1;
            -webkit-transform: translateY(0px);
            -ms-transform: translateY(0px);
            transform: translateY(0px);
        }
        100% {
            opacity: 0;
            -webkit-transform: translateY(-40px);
            -ms-transform: translateY(-40px);
            transform: translateY(-40px);
        }
    }

    @-webkit-keyframes slide-in {
        0% {
            opacity: 0;
            -webkit-transform: translateY(40px);
            -ms-transform: translateY(40px);
            transform: translateY(40px);
        }
        30% {
            opacity: 1;
            -webkit-transform: translateY(0px);
            -ms-transform: translateY(0px);
            transform: translateY(0px);
        }
    }

    @keyframes  slide-in {
        0% {
            opacity: 0;
            -webkit-transform: translateY(40px);
            -ms-transform: translateY(40px);
            transform: translateY(40px);
        }
        30% {
            opacity: 1;
            -webkit-transform: translateY(0px);
            -ms-transform: translateY(0px);
            transform: translateY(0px);
        }
    }

    @-webkit-keyframes pulse {
        0% {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }
        10% {
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1);
        }
        20% {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes  pulse {
        0% {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }
        10% {
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1);
        }
        20% {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }
    }

    .dropzone, .dropzone * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .dropzone {
        min-height: 150px;
        border: 2px dashed rgba(0, 0, 0, 0.3);
        background: white;
        padding: 20px 20px;
    }

    .dropzone.dz-clickable {
        cursor: pointer;
    }

    .dropzone.dz-clickable * {
        cursor: default;
    }

    .dropzone.dz-clickable .dz-message, .dropzone.dz-clickable .dz-message * {
        cursor: pointer;
    }

    .dropzone.dz-started .dz-message {
        display: none;
    }

    .dropzone.dz-drag-hover {
        border-style: solid;
    }

    .dropzone.dz-drag-hover .dz-message {
        opacity: 0.5;
    }

    .dropzone .dz-message {
        text-align: center;
        color: rgba(0, 0, 0, 0.3);
        margin: 2em 0;
    }

    .dropzone .dz-preview {
        position: relative;
        display: inline-block;
        vertical-align: top;
        margin: 16px;
        min-height: 100px;
    }

    .dropzone .dz-preview:hover {
        z-index: 1000;
    }

    .dropzone .dz-preview:hover .dz-details {
        opacity: 1;
    }

    .dropzone .dz-preview.dz-file-preview .dz-image {
        border-radius: 20px;
        background: #999;
        background: -webkit-gradient(linear, left top, left bottom, from(#eee), to(#ddd));
        background: -o-linear-gradient(top, #eee, #ddd);
        background: linear-gradient(to bottom, #eee, #ddd);
    }

    .dropzone .dz-preview.dz-file-preview .dz-details {
        opacity: 1;
    }

    .dropzone .dz-preview.dz-image-preview {
        background: white;
    }

    .dropzone .dz-preview.dz-image-preview .dz-details {
        -webkit-transition: opacity 0.2s linear;
        -o-transition: opacity 0.2s linear;
        transition: opacity 0.2s linear;
    }

    .dropzone .dz-preview .dz-remove {
        font-size: 14px;
        text-align: center;
        display: block;
        cursor: pointer;
        border: none;
    }

    .dropzone .dz-preview .dz-remove:hover {
        text-decoration: underline;
    }

    .dropzone .dz-preview:hover .dz-details {
        opacity: 1;
    }

    .dropzone .dz-preview .dz-details {
        z-index: 20;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        font-size: 13px;
        min-width: 100%;
        max-width: 100%;
        padding: 2em 1em;
        text-align: center;
        color: rgba(0, 0, 0, 0.9);
        line-height: 150%;
    }

    .dropzone .dz-preview .dz-details .dz-size {
        margin-bottom: 1em;
        font-size: 16px;
    }

    .dropzone .dz-preview .dz-details .dz-filename {
        white-space: nowrap;
    }

    .dropzone .dz-preview .dz-details .dz-filename:hover span {
        border: 1px solid rgba(200, 200, 200, 0.8);
        background-color: rgba(255, 255, 255, 0.8);
    }

    .dropzone .dz-preview .dz-details .dz-filename:not(:hover) {
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
    }

    .dropzone .dz-preview .dz-details .dz-filename:not(:hover) span {
        border: 1px solid transparent;
    }

    .dropzone .dz-preview .dz-details .dz-filename span, .dropzone .dz-preview .dz-details .dz-size span {
        background-color: rgba(255, 255, 255, 0.4);
        padding: 0 0.4em;
        border-radius: 3px;
    }

    .dropzone .dz-preview:hover .dz-image img {
        -webkit-transform: scale(1.05, 1.05);
        -ms-transform: scale(1.05, 1.05);
        transform: scale(1.05, 1.05);
        -webkit-filter: blur(8px);
        filter: blur(8px);
    }

    .dropzone .dz-preview .dz-image {
        border-radius: 20px;
        overflow: hidden;
        width: 120px;
        height: 120px;
        position: relative;
        display: block;
        z-index: 10;
    }

    .dropzone .dz-preview .dz-image img {
        display: block;
    }

    .dropzone .dz-preview.dz-success .dz-success-mark {
        -webkit-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
        animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
    }

    .dropzone .dz-preview.dz-error .dz-error-mark {
        opacity: 1;
        -webkit-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
        animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
    }

    .dropzone .dz-preview .dz-success-mark, .dropzone .dz-preview .dz-error-mark {
        pointer-events: none;
        opacity: 0;
        z-index: 500;
        position: absolute;
        display: block;
        top: 50%;
        left: 50%;
        margin-left: -27px;
        margin-top: -27px;
    }

    .dropzone .dz-preview .dz-success-mark svg, .dropzone .dz-preview .dz-error-mark svg {
        display: block;
        width: 54px;
        height: 54px;
    }

    .dropzone .dz-preview.dz-processing .dz-progress {
        opacity: 1;
        -webkit-transition: all 0.2s linear;
        -o-transition: all 0.2s linear;
        transition: all 0.2s linear;
    }

    .dropzone .dz-preview.dz-complete .dz-progress {
        opacity: 0;
        -webkit-transition: opacity 0.4s ease-in;
        -o-transition: opacity 0.4s ease-in;
        transition: opacity 0.4s ease-in;
    }

    .dropzone .dz-preview:not(.dz-processing) .dz-progress {
        -webkit-animation: pulse 6s ease infinite;
        animation: pulse 6s ease infinite;
    }

    .dropzone .dz-preview .dz-progress {
        opacity: 1;
        z-index: 1000;
        pointer-events: none;
        position: absolute;
        height: 16px;
        left: 50%;
        top: 50%;
        margin-top: -8px;
        width: 80px;
        margin-left: -40px;
        background: rgba(255, 255, 255, 0.9);
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        border-radius: 8px;
        overflow: hidden;
    }

    .dropzone .dz-preview .dz-progress .dz-upload {
        background: #333;
        background: -webkit-gradient(linear, left top, left bottom, from(#666), to(#444));
        background: -o-linear-gradient(top, #666, #444);
        background: linear-gradient(to bottom, #666, #444);
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 0;
        -webkit-transition: width 300ms ease-in-out;
        -o-transition: width 300ms ease-in-out;
        transition: width 300ms ease-in-out;
    }

    .dropzone .dz-preview.dz-error .dz-error-message {
        display: block;
    }

    .dropzone .dz-preview.dz-error:hover .dz-error-message {
        opacity: 1;
        pointer-events: auto;
    }

    .dropzone .dz-preview .dz-error-message {
        pointer-events: none;
        z-index: 1000;
        position: absolute;
        display: block;
        display: none;
        opacity: 0;
        -webkit-transition: opacity 0.3s ease;
        -o-transition: opacity 0.3s ease;
        transition: opacity 0.3s ease;
        border-radius: 8px;
        font-size: 13px;
        top: 130px;
        left: -10px;
        width: 140px;
        background: #be2626;
        background: -webkit-gradient(linear, left top, left bottom, from(#be2626), to(#a92222));
        background: -o-linear-gradient(top, #be2626, #a92222);
        background: linear-gradient(to bottom, #be2626, #a92222);
        padding: 0.5em 1.2em;
        color: white;
    }

    .dropzone .dz-preview .dz-error-message:after {
        content: '';
        position: absolute;
        top: -6px;
        left: 64px;
        width: 0;
        height: 0;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-bottom: 6px solid #be2626;
    }

    ::-moz-selection {
        color: #FFF;
        background-color: #00635a;
    }

    ::selection {
        color: #FFF;
        background-color: #00635a;
    }

    @media (min-width: 768px) {
        .app.sidenav-toggled .app-content {
            margin-left: 0;
        }
        .app.sidenav-toggled .app-sidebar {
            left: -230px;
        }
        .app.sidenav-toggled .app-sidebar__overlay {
            visibility: hidden;
        }
    }

    @media (max-width: 767px) {
        .app {
            overflow-x: hidden;
        }
        .app .app-sidebar {
            left: -230px;
        }
        .app .app-sidebar__overlay {
            visibility: hidden;
        }
        .app.sidenav-toggled .app-content {
            margin-left: 0;
        }
        .app.sidenav-toggled .app-sidebar {
            left: 0;
        }
        .app.sidenav-toggled .app-sidebar__overlay {
            visibility: visible;
        }
    }

    .app-content {
        min-height: calc(100vh - 50px);
        margin-top: 50px;
        padding: 30px;
        background-color: #E5E5E5;
        -webkit-transition: margin-left 0.3s ease;
        -o-transition: margin-left 0.3s ease;
        transition: margin-left 0.3s ease;
    }

    @media (min-width: 768px) {
        .app-content {
            margin-left: 230px;
        }
    }

    @media (max-width: 767px) {
        .app-content {
            margin-top: 50px;
            min-width: 100%;
        }
    }

    @media (max-width: 480px) {
        .app-content {
            padding: 15px;
        }
    }

    @media  print {
        .app-content {
            margin: 0;
            padding: 0;
            background-color: #fff;
        }
    }

    .light-text {
        font-weight: 300 !important;
    }

    .semibold-text {
        font-weight: 600 !important;
    }

    .line-head {
        padding-bottom: 10px;
        border-bottom: 1px solid #ddd;
    }

    /*----- Componant: Top Navigation Bar ----- */
    .app-header {
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        width: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        background-color: #009688;
        z-index: 1030;
        padding-right: 15px;
        background-color: rgb(82%, 62%, 20%);
    }

    @media (min-width: 768px) {
        .app-header {
            padding-right: 30px;
        }
    }

    @media  print {
        .app-header {
            display: none;
        }
    }

    .app-header__logo {
        -webkit-box-flex: 1;
        -ms-flex: 1 0 auto;
        flex: 1 0 auto;
        color: #fff;
        text-align: center;
        font-family: 'Helvetica, Arial,sans-serif';
        padding: 0 15px;
        font-size: 26px;
        font-weight: 400;
        line-height: 50px;
    }

    @media (min-width: 768px) {
        .app-header__logo {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            display: block;
            width: 230px;


        }
    }
    /*background focus do logo*/

    .app-header__logo:focus, .app-header__logo:hover {
        text-decoration: none;
        color: #fff;
        background-color:rgb(227, 156, 0);
    }


    /*CSS DO MENU 3 TRACINHOS*/
    .app-sidebar__toggle {
        padding: 0 15px;
        font-family: fontAwesome;
        color: #fff;
        line-height: 2.4;
        -webkit-transition: background-color 0.3s ease;
        -o-transition: background-color 0.3s ease;
        transition: background-color 0.3s ease;
        background-color:rgb(82%, 62%, 20%);
    }

    @media (max-width: 767px) {
        .app-sidebar__toggle {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1;
        }
    }

    .app-sidebar__toggle:before {
        content: "\f0c9";
        font-size: 21px;
    }

    .app-sidebar__toggle:focus, .app-sidebar__toggle:hover {
        color: #fff;
        background-color:rgb(227, 156, 0);
        text-decoration: none;
    }

    .app-nav {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 0;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
    }

    @media (min-width: 768px) {
        .app-nav {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
        }
    }

    .app-nav__item {
        display: block;
        padding: 15px;
        line-height: 20px;
        color: #fff;
        -webkit-transition: background-color 0.3s ease;
        -o-transition: background-color 0.3s ease;
        transition: background-color 0.3s ease;
    }

    .app-nav__item:hover, .app-nav__item:focus {
        background: rgba(0, 0, 0, 0.1);
        color: #f6f6f6;
    }

    .app-search {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-item-align: center;
        align-self: center;
        margin-right: 15px;
        padding: 10px 0;
    }

    @media (max-width: 480px) {
        .app-search {
            display: none;
        }
    }

    .app-search__input {
        border: 0;
        padding: 5px 10px;
        padding-right: 30px;
        border-radius: 2px;
        background-color: rgba(255, 255, 255, 0.8);
        -webkit-transition: background-color 0.3s ease;
        -o-transition: background-color 0.3s ease;
        transition: background-color 0.3s ease;
    }

    .app-search__input::-webkit-input-placeholder {
        color: rgba(0, 0, 0, 0.4);
    }

    .app-search__input::-moz-placeholder {
        color: rgba(0, 0, 0, 0.4);
    }

    .app-search__input:-ms-input-placeholder {
        color: rgba(0, 0, 0, 0.4);
    }

    .app-search__input::-ms-input-placeholder {
        color: rgba(0, 0, 0, 0.4);
    }

    .app-search__input::placeholder {
        color: rgba(0, 0, 0, 0.4);
    }

    .app-search__button {
        position: absolute;
        right: 0;
        top: 10px;
        bottom: 10px;
        padding: 0 10px;
        border: 0;
        color: rgba(0, 0, 0, 0.8);
        background: none;
        cursor: pointer;
    }

    .app-notification {
        min-width: 270px;
    }

    .app-notification__title {
        padding: 8px 20px;
        text-align: center;
        background-color: rgba(0, 150, 136, 0.4);
        color: #333;
    }

    .app-notification__footer {
        padding: 8px 20px;
        text-align: center;
        background-color: #eee;
    }

    .app-notification__content {
        max-height: 220px;
        overflow-y: auto;
    }

    .app-notification__content::-webkit-scrollbar {
        width: 6px;
    }

    .app-notification__content::-webkit-scrollbar-thumb {
        background: rgba(0, 0, 0, 0.2);
    }

    .app-notification__item {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding: 8px 20px;
        color: inherit;
        border-bottom: 1px solid #ddd;
        -webkit-transition: background-color 0.3s ease;
        -o-transition: background-color 0.3s ease;
        transition: background-color 0.3s ease;
    }

    .app-notification__item:focus, .app-notification__item:hover {
        color: inherit;
        text-decoration: none;
        background-color: #e0e0e0;
    }

    .app-notification__message,
    .app-notification__meta {
        margin-bottom: 0;
    }

    .app-notification__icon {
        padding-right: 10px;
    }

    .app-notification__message {
        line-height: 1.2;
    }

    .app-sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding-top: 70px;
        width: 230px;
        overflow: auto;
        z-index: 10;
        background-color: #222d32;
        -webkit-box-shadow: 0px 8px 17px rgba(0, 0, 0, 0.2);
        box-shadow: 0px 8px 17px rgba(0, 0, 0, 0.2);
        -webkit-transition: left 0.3s ease,
        width 0.3s ease;
        -o-transition: left 0.3s ease,
        width 0.3s ease;
        transition: left 0.3s ease,
        width 0.3s ease;
    }

    .app-sidebar::-webkit-scrollbar {
        width: 6px;
    }

    .app-sidebar::-webkit-scrollbar-thumb {
        background: rgba(0, 0, 0, 0.2);
    }

    @media  print {
        .app-sidebar {
            display: none;
        }
    }

    @media (max-width: 767px) {
        .app-sidebar__overlay {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 9;
        }
    }

    .app-sidebar__user {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 10px;
        margin-bottom: 20px;
        color: #fff;
    }

    .app-sidebar__user-avatar {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        margin-right: 15px;
    }

    .app-sidebar__user-name {
        font-size: 17px;
        line-height: 1.3;
    }

    .app-sidebar__user-name,
    .app-sidebar__user-designation {
        white-space: nowrap;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        margin-bottom: 0;
    }

    .app-menu {
        margin-bottom: 0;
        padding-bottom: 40px;
    }

    .app-menu__item {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 12px 15px;
        font-size: 1.08em;
        border-left: 3px solid transparent;
        -webkit-transition: border-left-color 0.3s ease,
        background-color 0.3s ease;
        -o-transition: border-left-color 0.3s ease,
        background-color 0.3s ease;
        transition: border-left-color 0.3s ease,
        background-color 0.3s ease;
        color: #fff;
    }

    .app-menu__item.active, .app-menu__item:hover, .app-menu__item:focus {
        background: #0d1214;
        border-left-color: rgb(227, 156, 0);
        text-decoration: none;
        color: #fff;
    }

    .app-menu__icon {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 25px;
    }

    .app-menu__label {
        white-space: nowrap;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
    }

    .treeview.is-expanded [data-toggle='treeview'] {
        border-left-color: #009688;
        background: #0d1214;
    }

    .treeview.is-expanded .treeview-menu {
        max-height: 100vh;
    }

    .treeview.is-expanded .treeview-indicator {
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .treeview-menu {
        max-height: 0;
        overflow: hidden;
        -webkit-transition: max-height 0.3s ease;
        -o-transition: max-height 0.3s ease;
        transition: max-height 0.3s ease;
        background: #2a383e;
    }

    .treeview-item {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 5px 5px 5px 20px;
        font-size: 1em;
        color: #fff;
    }

    .treeview-item.active, .treeview-item:hover, .treeview-item:focus {
        background: #0d1214;
        text-decoration: none;
        color: #fff;
    }

    .treeview-item .icon {
        margin-right: 5px;
    }

    .treeview-indicator {
        -webkit-transform-origin: center;
        -ms-transform-origin: center;
        transform-origin: center;
        -webkit-transition: -webkit-transform 0.3s ease;
        transition: -webkit-transform 0.3s ease;
        -o-transition: transform 0.3s ease;
        transition: transform 0.3s ease;
        transition: transform 0.3s ease, -webkit-transform 0.3s ease;
    }

    @media (min-width: 768px) {
        .sidebar-mini.sidenav-toggled .app-sidebar__user-name,
        .sidebar-mini.sidenav-toggled .app-sidebar__user-designation,
        .sidebar-mini.sidenav-toggled .treeview-indicator {
            display: none;
        }
        .sidebar-mini.sidenav-toggled .app-sidebar__user-avatar {
            width: 30px;
            height: 30px;
        }
        .sidebar-mini.sidenav-toggled .app-content {
            margin-left: 50px;
        }
        .sidebar-mini.sidenav-toggled .app-sidebar {
            left: 0;
            width: 50px;
            overflow: hidden;
        }
        .sidebar-mini.sidenav-toggled .app-sidebar:hover {
            overflow: visible;
        }
        .sidebar-mini.sidenav-toggled .app-menu__item {
            overflow: hidden;
        }
        .sidebar-mini.sidenav-toggled .app-menu__item:hover {
            overflow: visible;
        }
        .sidebar-mini.sidenav-toggled .app-menu__item:hover .app-menu__label {
            opacity: 1;
        }
        .sidebar-mini.sidenav-toggled .app-menu__item:hover + .treeview-menu {
            visibility: visible;
        }
        .sidebar-mini.sidenav-toggled .app-menu__label {
            display: block;
            position: absolute;
            top: 0;
            left: 50px;
            min-width: 180px;
            padding: 12px 5px 12px 20px;
            margin-left: -3px;
            line-height: 1;
            opacity: 0;
            background: #0d1214;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        .sidebar-mini.sidenav-toggled .treeview:hover .app-menu__item {
            overflow: visible;
            background: #0d1214;
            border-left-color: #009688;
            color: #fff;
        }
        .sidebar-mini.sidenav-toggled .treeview:hover .app-menu__label {
            opacity: 1;
        }
        .sidebar-mini.sidenav-toggled .treeview:hover .treeview-menu {
            max-height: 100vh;
            opacity: 1;
            visibility: visible;
            z-index: 10;
        }
        .sidebar-mini.sidenav-toggled .treeview .app-menu__label {
            border-bottom-right-radius: 0;
        }
        .sidebar-mini.sidenav-toggled .treeview-menu {
            position: absolute;
            left: 50px;
            min-width: 180px;
            padding: 12px 0;
            opacity: 0;
            border-bottom-right-radius: 4px;
            z-index: 9;
            visibility: hidden;
            -webkit-transition: visibility 0.3s ease;
            -o-transition: visibility 0.3s ease;
            transition: visibility 0.3s ease;
        }
    }

    .dropdown-menu {
        border-radius: 0;
        -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .dropdown-menu.dropdown-menu-right {
        left: auto;
        right: 0;
    }

    .dropdown-item .fa,
    .dropdown-item .icon {
        margin-right: 5px;
        vertical-align: middle;
    }

    .btn {
        cursor: pointer;
    }

    .btn:not([disabled]):not(.disabled):not(.btn-link):hover, .btn:not([disabled]):not(.disabled):not(.btn-link):focus {
        text-decoration: none;
        -webkit-transform: translate3d(0, -1px, 0);
        transform: translate3d(0, -1px, 0);
        -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
    }

    .btn[disabled] {
        cursor: not-allowed;
    }

    .btn .icon,
    .btn .fa {
        font-size: 14px;
        margin-right: 5px;
        vertical-align: middle;
    }

    .app-title {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        background-color: #FFF;
        margin: -30px -30px 30px;
        padding: 20px 30px;
        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    @media  print {
        .app-title {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .app-title {
            margin: -15px -15px 15px;
            padding: 20px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
        }
    }

    .app-title h1 {
        margin: 0;
        font-size: 24px;
        font-weight: 400;
    }

    .app-title p {
        margin-bottom: 0;
        font-style: italic;
    }

    @media (max-width: 480px) {
        .app-title p {
            display: none;
        }
    }

    .app-breadcrumb {
        margin-bottom: 0;
        text-align: right;
        font-weight: 500;
        font-size: 13px;
        text-transform: capitalize;
        padding: 0;
        text-align: left;
        padding: 0;
        background-color: transparent;
    }

    @media (max-width: 480px) {
        .app-breadcrumb {
            margin-top: 10px;
        }
    }

    .tile {
        position: relative;
        background: #ffffff;
        border-radius: 3px;
        padding: 20px;
        -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
        margin-bottom: 30px;
        -webkit-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    @media  print {
        .tile {
            border: 1px solid #ddd;
        }
    }

    .tile.small {
        padding: 0;
    }

    .tile .overlay {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: rgba(255, 255, 255, 0.9);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        color: #555;
        border-radius: 3px;
    }

    .tile .overlay .l-text {
        font-size: 24px;
        margin-top: 15px;
    }

    .tile .tile-title {
        margin-top: 0;
        margin-bottom: 20px;
        font-size: 1.5rem;
    }

    .tile .tile-title-w-btn {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 20px;
    }

    .tile .tile-title-w-btn p {
        margin: 0;
    }

    .tile .tile-title-w-btn .title {
        margin: 0;
    }

    .tile .tile-title-w-btn .side {
        margin-bottom: 0;
        padding-left: 0;
    }

    .tile .tile-title-w-btn .btn-group {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    }

    .tile .tile-footer {
        border-top: 1px solid #ddd;
        padding: 20px 0 0 0;
        margin-top: 10px;
    }

    /* Custom Checkbox and Radio Buttons */
    .animated-checkbox input[type="checkbox"] {
        display: none;
    }

    .animated-checkbox input[type="checkbox"] + .label-text {
        cursor: pointer !important;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .animated-checkbox input[type="checkbox"] + .label-text:before {
        content: "";
        font-family: "FontAwesome";
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        font-size: 18px;
        -webkit-font-smoothing: antialiased;
        width: 1em;
        display: inline-block;
        margin-right: 2px;
        vertical-align: -2px;
    }

    .animated-checkbox input[type="checkbox"]:checked + .label-text:before {
        content: "";
        color: #009688;
        -webkit-animation: tick 180ms ease-in;
        animation: tick 180ms ease-in;
    }

    .animated-checkbox input[type="checkbox"]:disabled + .label-text {
        cursor: not-allowed !important;
    }

    .animated-checkbox input[type="checkbox"]:disabled + .label-text:before {
        content: "";
        color: #ccc;
    }

    .animated-radio-button input[type="radio"] {
        display: none;
    }

    .animated-radio-button input[type="radio"] + .label-text {
        cursor: pointer !important;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .animated-radio-button input[type="radio"] + .label-text:before {
        content: "";
        font-family: "FontAwesome";
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        font-size: 18px;
        -webkit-font-smoothing: antialiased;
        width: 1em;
        display: inline-block;
        margin-right: 2px;
        vertical-align: -2px;
    }

    .animated-radio-button input[type="radio"]:checked + .label-text:before {
        content: "";
        color: #009688;
        -webkit-animation: tick 180ms ease-in;
        animation: tick 180ms ease-in;
    }

    .animated-radio-button input[type="radio"]:disabled + .label-text {
        cursor: not-allowed !important;
    }

    .animated-radio-button input[type="radio"]:disabled + .label-text:before {
        content: "";
        color: #ccc;
    }

    @-webkit-keyframes tick {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0);
        }
        90% {
            -webkit-transform: scale(1.4);
            transform: scale(1.4);
        }
        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes  tick {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0);
        }
        90% {
            -webkit-transform: scale(1.4);
            transform: scale(1.4);
        }
        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    .toggle.lg input[type="checkbox"] + .button-indecator:before {
        font-size: 30px;
    }

    .toggle input[type="checkbox"] {
        display: none;
    }

    .toggle input[type="checkbox"] + .button-indecator {
        cursor: pointer;
        display: block;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .toggle input[type="checkbox"] + .button-indecator:before {
        content: "";
        font-family: "FontAwesome";
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        font-size: 25px;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        margin-right: 5px;
        vertical-align: -2px;
    }

    .toggle input[type="checkbox"]:checked + .button-indecator:before {
        content: "";
        color: #009688;
        -webkit-animation: toggleBtn 0.3s ease-in-out;
        animation: toggleBtn 0.3s ease-in-out;
    }

    .toggle input[type="checkbox"]:disabled + .button-indecator {
        cursor: not-allowed !important;
    }

    .toggle input[type="checkbox"]:disabled + .button-indecator:before {
        color: #ccc;
    }

    .toggle-flip input[type="checkbox"] {
        display: none;
    }

    .toggle-flip input[type="checkbox"] + .flip-indecator {
        position: relative;
        width: 60px;
        height: 30px;
        display: block;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-perspective: 90px;
        perspective: 90px;
    }

    .toggle-flip input[type="checkbox"] + .flip-indecator:before, .toggle-flip input[type="checkbox"] + .flip-indecator:after {
        position: absolute;
        top: 0;
        left: 0;
        display: inline-block;
        width: 100%;
        line-height: 30px;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        text-align: center;
        border-radius: 3px;
        -webkit-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .toggle-flip input[type="checkbox"] + .flip-indecator:before {
        content: attr(data-toggle-off);
        background-color: #ddd;
    }

    .toggle-flip input[type="checkbox"] + .flip-indecator:after {
        content: attr(data-toggle-on);
        background-color: #009688;
        color: #fff;
        -webkit-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
    }

    .toggle-flip input[type="checkbox"]:checked + .flip-indecator:before {
        -webkit-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }

    .toggle-flip input[type="checkbox"]:checked + .flip-indecator:after {
        -webkit-transform: rotateY(0deg);
        transform: rotateY(0deg);
    }

    .toggle-flip input[type="checkbox"]:disabled + .flip-indecator {
        cursor: not-allowed !important;
        color: #ccc;
    }

    @-webkit-keyframes toggleBtn {
        0% {
            opacity: 0;
            -webkit-transform: translateX(-1px);
            transform: translateX(-1px);
        }
        100% {
            opacity: 1;
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
    }

    @keyframes  toggleBtn {
        0% {
            opacity: 0;
            -webkit-transform: translateX(-1px);
            transform: translateX(-1px);
        }
        100% {
            opacity: 1;
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
    }

    .material-half-bg {
        height: 100vh;
        background-color: #e7e7e7;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: -1;
    }

    .material-half-bg .cover {
        background-color: #009688;
        height: 50vh;
    }

    .m-loader {
        position: relative;
        width: 40px;
    }

    .m-loader:before {
        content: '';
        display: block;
        padding-top: 100%;
    }

    .m-circular {
        -webkit-animation: rotate 1.5s linear infinite;
        animation: rotate 1.5s linear infinite;
        height: 100%;
        -webkit-transform-origin: center center;
        -ms-transform-origin: center center;
        transform-origin: center center;
        width: 100%;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }

    .path {
        stroke-dasharray: 1,200;
        stroke-dashoffset: 0;
        stroke: #009688;
        -webkit-animation: dash 1.5s ease-in-out infinite;
        animation: dash 1.5s ease-in-out infinite;
        stroke-linecap: round;
    }

    @-webkit-keyframes rotate {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes  rotate {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @-webkit-keyframes dash {
        0% {
            stroke-dasharray: 1,200;
            stroke-dashoffset: 0;
        }
        50% {
            stroke-dasharray: 89,200;
            stroke-dashoffset: -35px;
        }
        100% {
            stroke-dasharray: 89,200;
            stroke-dashoffset: -124px;
        }
    }

    @keyframes  dash {
        0% {
            stroke-dasharray: 1,200;
            stroke-dashoffset: 0;
        }
        50% {
            stroke-dasharray: 89,200;
            stroke-dashoffset: -35px;
        }
        100% {
            stroke-dasharray: 89,200;
            stroke-dashoffset: -124px;
        }
    }

    .btn-spinner {
        display: inline-block;
        z-index: 2000;
        width: 15px;
        height: 15px;
        position: relative;
        top: 2px;
        margin-right: 5px;
        border: solid 2px transparent;
        border-top-color: #fff;
        border-left-color: #fff;
        border-radius: 10px;
        -webkit-animation: bSpinner 0.8s linear infinite;
        animation: bSpinner 0.8s linear infinite;
    }

    @-webkit-keyframes bSpinner {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes  bSpinner {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    .widget-small {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        border-radius: 4px;
        color: #FFF;
        margin-bottom: 30px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    }

    .widget-small .icon {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        min-width: 85px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.2);
        border-radius: 4px 0 0 4px;
        font-size: 2.5rem;
    }

    .widget-small .info {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        padding: 0 20px;
        -ms-flex-item-align: center;
        align-self: center;
    }

    .widget-small .info h4 {
        text-transform: uppercase;
        margin: 0;
        margin-bottom: 5px;
        font-weight: 400;
        font-size: 1.1rem;
    }

    .widget-small .info p {
        margin: 0;
        font-size: 16px;
    }

    .widget-small.primary {
        background-color: #009688;
    }

    .widget-small.primary.coloured-icon {
        background-color: #fff;
        color: #2a2a2a;
    }

    .widget-small.primary.coloured-icon .icon {
        background-color: #009688;
        color: #fff;
    }

    .widget-small.info {
        background-color: #17a2b8;
    }

    .widget-small.info.coloured-icon {
        background-color: #fff;
        color: #2a2a2a;
    }

    .widget-small.info.coloured-icon .icon {
        background-color: #17a2b8;
        color: #fff;
    }

    .widget-small.warning {
        background-color: #ffc107;
    }

    .widget-small.warning.coloured-icon {
        background-color: #fff;
        color: #2a2a2a;
    }

    .widget-small.warning.coloured-icon .icon {
        background-color: #ffc107;
        color: #fff;
    }

    .widget-small.danger {
        background-color: #dc3545;
    }

    .widget-small.danger.coloured-icon {
        background-color: #fff;
        color: #2a2a2a;
    }

    .widget-small.danger.coloured-icon .icon {
        background-color: #dc3545;
        color: #fff;
    }

    .messanger {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .messanger .messages {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        margin: 10px 0;
        padding: 0 10px;
        max-height: 260px;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .messanger .messages .message {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 15px;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
    }

    .messanger .messages .message.me {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: reverse;
        -ms-flex-direction: row-reverse;
        flex-direction: row-reverse;
    }

    .messanger .messages .message.me img {
        margin-right: 0;
        margin-left: 15px;
    }

    .messanger .messages .message.me .info {
        background-color: #009688;
        color: #FFF;
    }

    .messanger .messages .message.me .info:before {
        display: none;
    }

    .messanger .messages .message.me .info:after {
        position: absolute;
        right: -13px;
        top: 0;
        content: "";
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 16px 16px 0;
        border-color: transparent #009688 transparent transparent;
        -webkit-transform: rotate(270deg);
        -ms-transform: rotate(270deg);
        transform: rotate(270deg);
    }

    .messanger .messages .message img {
        border-radius: 50%;
        margin-right: 15px;
    }

    .messanger .messages .message .info {
        margin: 0;
        background-color: #ddd;
        padding: 5px 10px;
        border-radius: 3px;
        position: relative;
        -ms-flex-item-align: start;
        align-self: flex-start;
    }

    .messanger .messages .message .info:before {
        position: absolute;
        left: -14px;
        top: 0;
        content: "";
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 16px 16px 0;
        border-color: transparent #ddd transparent transparent;
    }

    .messanger .sender {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .messanger .sender input[type="text"] {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        border: 1px solid #009688;
        outline: none;
        padding: 5px 10px;
    }

    .messanger .sender button {
        border-radius: 0;
    }

    .landing-hero {
        position: relative;
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url(https://images.unsplash.com/photo-1487621167305-5d248087c724?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1600&h=700&fit=crop&ixid=eyJhcHBfaWQiOjF9);
        border-bottom: 1px solid #ddd;
    }

    .landing-hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #001714;
        opacity: 0.5;
        z-index: 1;
    }

    .landing-hero-content {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        position: relative;
        padding: 60px 30px 0;
        z-index: 2;
        text-align: center;
        color: #fff;
    }

    @media (min-width: 768px) {
        .landing-hero-content {
            min-height: 100vh;
        }
    }

    .landing-hero-title {
        font-size: 26px;
    }

    @media (max-width: 480px) {
        .landing-hero-title {
            font-size: 20px;
        }
    }

    .landing-hero-description {
        font-size: 15px;
    }

    .landing-hero-banner {
        display: block;
        width: 100%;
        max-width: 900px;
        margin: 30px auto 0;
        border-radius: 6px 6px 0 0;
    }

    .features {
        padding: 60px 30px;
    }

    .features-title {
        font-size: 26px;
        text-align: center;
        margin-bottom: 30px;
    }

    .features-cards {
        max-width: 760px;
        list-style: none;
        margin: 0 auto;
        padding-left: 0;
        display: grid;
        grid-gap: 20px;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    }

    .features-card {
        border-radius: 4px;
        padding: 10px;
        font-size: 1.143em;
        text-align: center;
    }

    .feature-icon-backdrop {
        width: 64px;
        height: 64px;
        margin: 0 auto 8px;
        padding: 15px;
        border-radius: 50%;
        background-color: #009688;
    }

    .feature-icon {
        width: 32px;
        height: 32px;
        stroke: #fff;
        fill: transparent;
    }

    .landing-footer {
        padding: 20px;
        text-align: center;
        border-top: 1px solid #ddd;
    }

    .docs {
        font-size: 16px;
    }

    .docs-title {
        padding-bottom: 10px;
        border-bottom: 1px solid #ddd;
        font-size: 20px;
    }

    .docs-title:not(:first-of-type) {
        margin-top: 30px;
    }

    .login-content {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        min-height: 100vh;
    }

    .login-content .logo {
        margin-bottom: 40px;
        font-family: "Niconne";
        color: #fff;
    }

    .login-content .logo h1 {
        font-size: 52px;
        font-weight: 400;
    }

    .login-content .login-box {
        position: relative;
        min-width: 350px;
        min-height: 390px;
        background-color: #fff;
        -webkit-box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
        box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
        -webkit-perspective: 800px;
        perspective: 800px;
        -webkit-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
    }

    .login-content .login-box .login-head {
        margin-top: 0;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #ddd;
        text-align: center;
    }

    .login-content .login-box label {
        color: #666;
        font-weight: 700;
    }

    .login-content .login-box .utility {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding: 1px;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .login-content .login-box .btn-container {
        margin-bottom: 0;
    }

    .login-content .login-box .login-form, .login-content .login-box .forget-form {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 40px;
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
        -webkit-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
    }

    .login-content .login-box .forget-form {
        opacity: 0;
        -webkit-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }

    .login-content .login-box.flipped {
        min-height: 300px;
    }

    .login-content .login-box.flipped .login-form {
        opacity: 0;
        -webkit-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
    }

    .login-content .login-box.flipped .forget-form {
        opacity: 1;
        -webkit-transform: rotateY(0deg);
        transform: rotateY(0deg);
    }

    @media (max-width: 351px) {
        .login-content .login-box {
            min-width: 100%;
        }
        .login-content .login-box .login-form, .login-content .login-box .forget-form {
            width: 100%;
        }
    }

    .lockscreen-content {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        min-height: 100vh;
    }

    .lockscreen-content .logo {
        font-family: "Niconne";
        margin-bottom: 40px;
        color: #fff;
    }

    .lockscreen-content .logo h1 {
        font-size: 52px;
        font-weight: 400;
    }

    .lockscreen-content .lock-box {
        position: relative;
        min-width: 320px;
        padding: 20px 40px;
        background-color: #fff;
        -webkit-box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
        box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
        -webkit-perspective: 800px;
        perspective: 800px;
        -webkit-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
    }

    .lockscreen-content .lock-box .user-image {
        border: 3px solid #fff;
        max-width: 100px;
        display: block;
        margin: 0 auto;
    }

    .lockscreen-content .lock-box .user-name {
        margin-bottom: 2px;
    }

    .lockscreen-content .lock-box label {
        color: #666;
        font-weight: 700;
    }

    .page-error {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-height: calc(100vh - 110px);
        margin-bottom: 0;
    }

    .page-error h1 {
        margin: 10px;
        color: #dc3545;
        font-size: 42px;
    }

    .folder-head {
        padding: 10px;
        margin-bottom: 0 !important;
        border-bottom: 1px solid #ddd;
    }

    .mailbox-controls {
        margin-bottom: 10px;
        border-bottom: 1px solid #ddd;
        padding: 0 0 10px 5px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .mailbox-controls .animated-checkbox .label-text:before {
        vertical-align: -7px !important;
    }

    .mail-nav > li > a {
        display: block;
        background-color: #fff;
        color: #2a2a2a;
        border-radius: 0;
        font-weight: 500;
    }

    .mailbox-messages table tr td {
        border: 0;
        padding: 5px;
    }

    .mailbox-messages .mail-subject {
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        white-space: nowrap;
        max-width: 500px;
    }

    .user .profile {
        margin: -30px -30px 0 -30px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .user .profile .info {
        padding: 30px 60px;
        text-align: center;
        background-color: #fff;
        white-space: nowrap;
        background-color: #404040;
        color: #fff;
    }

    .user .profile .info img {
        border-radius: 50%;
        max-width: 110px;
        margin-bottom: 20px;
        margin-top: 10px;
    }

    .user .profile .cover-image {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        background-image: url(http://placeimg.com/1200/300/nature);
        background-size: cover;
        background-position: center;
        min-height: 300px;
    }

    .user .user-tabs {
        margin-top: 20px;
    }

    .user .user-tabs .nav-link {
        border-left: 3px solid transparent;
        padding: 12px 15px;
        border-bottom: 0;
        font-size: 15px;
        border-radius: 0;
    }

    .user .user-tabs .nav-link.active {
        border-left-color: #009688;
        border-bottom: 0;
    }

    .user .user-tabs .nav-link:hover, .user .user-tabs .nav-link:active {
        background-color: #eee !important;
        border-bottom: 0;
    }

    .user .tab-content {
        margin: 20px -10px -10px;
    }

    .user .timeline-post {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
    }

    .user .timeline-post .post-media {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        margin-bottom: 15px;
    }

    .user .timeline-post .post-media img {
        margin-right: 10px;
    }

    .user .timeline-post .post-media h5 {
        margin-top: 0;
        margin-bottom: 3px;
        font-size: 15px;
    }

    .user .timeline-post .post-content {
        margin-bottom: 20px;
    }

    .user .timeline-post .post-utility {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        list-style: none;
        padding-left: 0;
        margin-bottom: 0;
    }

    .user .timeline-post .post-utility .likes,
    .user .timeline-post .post-utility .shares {
        margin-right: 10px;
    }

    .user .timeline-post .post-utility .likes a,
    .user .timeline-post .post-utility .shares a {
        color: #555;
    }

    .user .timeline-post .post-utility .comments {
        color: #555;
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        text-align: right;
    }

    .user .user-settings .line-head {
        font-size: 18px;
        margin-bottom: 30px;
        color: #2a2a2a;
    }

    .user .user-settings label {
        color: #666;
    }


    .page-header{
        padding: -0px;
        padding-left: 0 auto;
        height: 300px  200px;



    }

    .app-content-caixa{


    }

    /*Alinhamento de botão*/
    .btn{
        background-color: rgb(227, 156, 0);
        border: rgb(227, 156, 0);
        color: white;
        text-align: right;
    }
    .form-control:focus{
        border-color: rgb(227, 156, 0);

    }



</style>
<?php /**PATH C:\xampp2\htdocs\odd_fichas\resources\views/template/_includes/style.blade.php ENDPATH**/ ?>