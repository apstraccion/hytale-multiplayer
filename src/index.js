import 'remixicon/fonts/remixicon.css';
import 'flag-icons/css/flag-icons.min.css';
import { createPopper } from '@popperjs/core';

console.info("template - shared");

function giveViteSomeFuel() {
    // There needs to be some input for vite to build the manifest,json. otherwise error "`css` not found in manifest entry `index.js`"
    document.body.style.backgroundColor = "initial";
}

import "./index.css";

//Happy coding